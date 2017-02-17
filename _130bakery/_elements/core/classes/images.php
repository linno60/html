<?php

class gfx_images {

    private $root;
    private $images;
    private $html;

    public function __construct() {
        $this->root = $_SERVER['DOCUMENT_ROOT'];
        $this->html = '';
    }

    public function build() {
        $this->images = select_images('/images', '/images');
        usort($this->images, 'compare_fn');

        $this->init_html();
        file_put_contents($this->root . '/_elements/generic/images.php', $this->html);
    }

    private function init_html() {
        foreach ($this->images as $item)
            $this->html .= $item['img_tmp'] . "\n";
        $this->html = trim($this->html);
    }

}
