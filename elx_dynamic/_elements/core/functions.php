<?php
    function prn($DATA, $comment = false) {
        if ($comment)
            echo "<div style='border: 1px dashed red;'>".$comment."</div>\r\n";
        echo "<pre style='background: lightgray; border: 1px solid black; text-align: left;'>\r\n";
        print_r($DATA);
        echo "\r\n</pre>";
    }
    
    function prd($DATA, $comment = false) {
        if ($comment)
            echo "<div style='border: 1px dashed red; padding: 2px;'>".$comment."</div>\r\n";
        echo "<pre style='background: lightgray; border: 1px solid black; text-align: left;'>\r\n";
        print_r($DATA);
        echo "\r\n</pre>";
        die();
    }
    
    function require_tpl ($tpl,  $D=false) { require_once $_SERVER['DOCUMENT_ROOT'].'/tpls/'.$tpl.'.php'; }
    function require_file($file, $D=false) { require_once $_SERVER['DOCUMENT_ROOT'].$file; }

    function select_images($folder, $url) {
        $path = $_SERVER['DOCUMENT_ROOT'].$folder;
        if ($handle = opendir($path)) 
        {
            $files = [];
            while (false !== ($entry = readdir($handle))) {
                if ($entry == '.' || $entry == '..')
                    continue;
                
                $tmp = explode('.', $entry);
                
                if (count($tmp) !== 2 || substr($tmp[0], -6) === '-hover')
                    continue;
                
                $size = getimagesize($path.'/'.$entry);
                if ($size !== false) 
                {
                    // Vars
                    $fname = $tmp[0];
                    $ext   = $tmp[1];
                    $iurl  = $url.'/'.$entry;
                    $hover = $fname.'-hover.'.$ext;
                    $ico_class = strpos($fname, 'icon-') === false ? 'icon-'.$fname : $fname;

                    // Base
                    $files[$entry] = [
                        'file'    => $entry,
                        'url'     => $iurl,
                        'width'   => $size[0],
                        'height'  => $size[1],
                        'css'     => ".".$ico_class." {width: $size[0]px; height: $size[1]px; background: url('$iurl');}",
                        'img'     => '<img src="'.$iurl.'" '.$size[3].' alt="">',
                        'ico'     => '<i class="'.$ico_class.'"></i>',
                        'bg'      => 'url("'.$iurl.'")',
                        'hover'   => file_exists($path.'/'.$hover) ? true : false
                    ];

                    // Hover
                    if ($files[$entry]['hover']) 
                    {
                        $hover_url = $url.'/'.$hover;
                        $files[$entry]['hover_url']     = $hover_url;
                        $files[$entry]['hover_css']     = '.class:hover .'.$ico_class. " {background: url('$hover_url');}";
                        $files[$entry]['hover_css_tmp'] = ".".$ico_class.":hover {background: url('$hover_url');}";
                    }
                    
                    $json = htmlentities(json_encode($files[$entry]), ENT_QUOTES, 'UTF-8');
                    $files[$entry]['img_tmp'] = '<img src="'.$iurl.'" '.$size[3].' title="'.$size[0].'x'.$size[1].'   '.$entry.'" data-json="'.$json.'">';
                    $files[$entry]['ico_tmp'] = '<i class="'.$ico_class.'" data-json="'.$json.'"></i>';
                }
            }
            closedir($handle);
        } else {
            $files = false;
        }
        return $files;
    }
    
    function compare_fn($a, $b)
    {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }
    
    function return_json($response) {
            header('Content-Type: application/json');
            header('Cache-Control: no-cache, must-revalidate');
            header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
            echo json_encode($response);
            die();
    }
    
    function format_fonts_settings($data) {
        $res = [];
        foreach ($data['fontfamily'] as $key=>$val) {
            $font = trim($val);
            if (!empty($val)) {
                $url = trim($data['fonturl'][$key]);
                if (!empty($url))
                    $res[] = [
                        'fontfamily' => $font,
                        'url' => $url
                    ];
            }
        }
        return $res;
    }
    
    function get_external_fonts_css($fonts) {
        $css = [];
        foreach ($fonts as $font)
        {
            $pattern = "/font-family:\s*'([^'])+'/i";
            
            $response = file_get_contents($font['url']);
            $response = str_replace('"', '\'', $response);
            $response = preg_replace($pattern, "font-family: '".$font['fontfamily']."'", $response);
            
            $css[] = $response;
        }
        $css = implode("\n", $css);
        return $css;
    }
    
    