<?php

class gfx_fontscom {

    private $root;
    private $zip_folder;
    private $zip_css;
    private $zip_fonts;
    private $fonts_folder;
    private $fontscom_folder;
    private $css_file;
    private $licese = '/*
This CSS resource incorporates links to font software which is the valuable copyrighted
property of Monotype Imaging and/or its suppliers. You may not attempt to copy, install,
redistribute, convert, modify or reverse engineer this font software. Please contact Monotype
Imaging with any questions regarding Web Fonts:  http://www.fonts.com
*/';

    public function __construct() {
        $this->root = $_SERVER['DOCUMENT_ROOT'];
        $this->fonts_folder = $this->root . '/fonts';
        $this->fontscom_folder = $this->fonts_folder . '/fonts.com';
        $this->css_file = $this->root . '/_elements/generic/fonts-com.css';
        $this->zip_folder = $this->root . '/tmp_fontscom/';
        $this->zip_css = $this->zip_folder . 'demo.css';
        $this->zip_fonts = $this->zip_folder . 'Fonts';
    }

    public function cleanup() {
        deleteDir($this->fontscom_folder);
        if (count(glob($this->fonts_folder . '/*')) === 0)
            deleteDir($this->fonts_folder);
        file_put_contents($this->css_file, '');
    }

    public function upload_zip($F) {
        // Validation
        if (!in_array(str_replace('"', '', $F['type']), ['application/x-zip', 'application/x-zip-compressed', 'application/octet-stream']) ||
                $F['error'] !== 0
        )
            return false;

        // Unzip
        $zip = new ZipArchive;
        $res = $zip->open($F['tmp_name']);

        if (!$zip)
            return false;

        deleteDir($this->zip_folder);

        $zip->extractTo($this->zip_folder);
        $zip->close();

        // Validate
        if (!is_dir($this->zip_fonts) || !is_file($this->zip_css))
            return $this->return_bad_upload_zip();

        // Recreate fonts.com folder
        $this->create_fontscom_folder();

        // Clean up CSS file
        file_put_contents($this->css_file, '');

        // Move fonts
        $this->move_woff();

        // Create CSS
        $css = $this->build_css();

        // Remove tmp zip folder
        deleteDir($this->zip_folder);

        // Save CSS
        file_put_contents($this->css_file, $css);

        return $css;
    }

    private function return_bad_upload_zip() {
        deleteDir($this->zip_folder);
        return false;
    }

    private function create_fontscom_folder() {
        if (!is_dir($this->fonts_folder))
            mkdir($this->fonts_folder);
        else if (is_dir($this->fontscom_folder))
            deleteDir($this->fontscom_folder);
        mkdir($this->fontscom_folder);
    }

    private function move_woff() {
        $fonts = select_files(str_replace($this->root, '', $this->zip_fonts));
        foreach ($fonts as $font) {
            $src = $this->zip_fonts . '/' . $font;
            $dst = $this->fontscom_folder . '/' . $font;
            $pinfo = pathinfo($src);
            if ($pinfo['extension'] === 'woff' || $pinfo['extension'] === 'woff2')
                copy($src, $dst);
        }
    }

    private function build_css() {
        $src_css = file_get_contents($this->zip_css);
        $faces = explode('@font-face{', $src_css);

        // explode, get import, cleanup items
        $import = trim($faces[0]);
        array_shift($faces);
        foreach ($faces as $k => &$v) {
            $v = explode(';', trim(str_replace('}', '', $v)));

            // Remove strange font-faces....
            if (count($v) === 2) {
                unset($faces[$k]);
                continue;
            }

            // Clean up each property
            foreach ($v as $kline => &$line) {
                $line = trim($line);
                // Remove empty lines
                if (empty($line)) {
                    unset($v[$kline]);
                    continue;
                }
                // Process src property
                if (strpos($line, 'src:') === 0) {
                    $tmp = explode(',', $line);
                    if (count($tmp) > 1)
                        $line = 'src: ' . $tmp[1] . ', ' . $tmp[2];
                }
                // Add space between font-family: and value
                else if (strpos($line, 'font-family:') === 0)
                    $line = str_replace(':', ': ', $line);
            }

            // Remove doubled src property
            unset($v[1]);
        }

        // Form CSS
        $CSS = $import . "\n";
        $CSS .= $this->licese . "\n";
        foreach ($faces as $face)
            $CSS .= "@font-face {\n    " . implode(";\n    ", $face) . ";\n}\n";
        $CSS = str_replace('url("Fonts', 'url("/fonts/fonts.com', $CSS);

        return $CSS;
    }

}
