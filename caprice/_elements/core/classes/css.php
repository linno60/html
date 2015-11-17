<?php

class gfx_css {

    private $root;
    private $files;

    public function __construct() {
        $this->root = $_SERVER['DOCUMENT_ROOT'];
    }
    
    public function build() {
        
        $this->load_files();
        
        $CSS  = $this->css_fonts();
        $CSS .= $this->css_icons();
        $CSS .= $this->css_elements();
        $CSS .= "\n\n/* $------------------------------------------------------------------------- */\n\n";
        
        return $CSS;
    }
    
    private function css_fonts() {
       
        // Return if not fonts at all
        if (!$this->files->fonts_external && !$this->files->fonts_com && !$this->files->fonts_local && !$this->files->fonts_squirel)
            return '';

        $src = trim(implode("\n", [$this->files->fonts_external, $this->files->fonts_local, $this->files->fonts_com, $this->files->fonts_squirel]));

        // Imports
        $matches = [];
        $imports = '';
        preg_match_all('/@import.*[^;]/', $src, $matches);
        if (count($matches[0]))
        {
            $imports = implode("", $matches[0]);
            $src = trim(str_replace($matches[0], '', $src));
        }
           
        // CSS
        $CSS = (!empty($imports) ? $imports."\n" : "") . "/* FONTS */\n\n" . $src;
        
        return $CSS;
    }
    
    private function css_icons() {
        return empty($this->files->icons) ? "" : "/* ICONS */\n\n".$this->files->icons;
    }
    
    private function css_elements() {
        return empty($this->files->elements) ? "" : "/* ELEMENTS */\n\n".$this->files->elements;
    }
    
    private function load_files() {
        $GDIR = $this->root.'/_elements/generic';
        $this->files = (object) [
            'fonts_external' => trim(file_get_contents($GDIR.'/fonts-external.css')),
            'fonts_com' => trim(file_get_contents($GDIR.'/fonts-com.css')),
            'fonts_squirel' => trim(file_get_contents($GDIR.'/fonts-squirel.css')),
            'fonts_local' => trim(file_get_contents($GDIR.'/fonts-local.css')),
            'icons' => trim(file_get_contents($GDIR.'/icons.css')),
            'elements' => trim(file_get_contents($this->root.'/css/_elements.css'))
        ];
    }
   
}