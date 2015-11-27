<?php

class gfx_icons {

    private $root;
    private $icons;
    private $css;
    private $html;

    public function __construct() {
        $this->root = $_SERVER['DOCUMENT_ROOT'];
        $this->css = (object) ['tmp' => '', 'real' => ''];
        $this->html = '';
    }

    public function build() {
        $this->icons = select_images('/images/icons', '/images/icons');
        usort($this->icons, 'compare_fn');

        $this->init_css();
        $this->init_html();

        file_put_contents($this->root . '/_elements/generic/tmp.css', $this->css->tmp);
        file_put_contents($this->root . '/_elements/generic/icons.css', $this->css->real);
        file_put_contents($this->root . '/_elements/generic/icons.php', $this->html);

        return $this->icons;
    }

    private function init_css() {
        $CSS = ['tmp' => [], 'real' => []];

        foreach ($this->icons as $item) {
            $CSS['real'][] = $item['css'];
            if ($item['hover'])
                $CSS['tmp'][] = $item['hover_css_tmp'];
        }

        $this->css->real = implode("\n", $CSS['real']);
        $this->css->tmp = implode("\n", $CSS['tmp']);
    }

    private function init_html() {
        foreach ($this->icons as $item)
            $this->html .= $item['ico_tmp'] . "\n";
        $this->html = trim($this->html);
    }

}
