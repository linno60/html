<?php

class gfx_choices {

    private $root;
    private $images;
    private $css;
    private $html;
    
    public function __construct() {
        $this->root = $_SERVER['DOCUMENT_ROOT'];
        $this->css  = (object) ['tmp'=>'','real'=>''];
        $this->html = '';
    }
    
    public function build() {
        $this->select_images();

        $this->init_css();
        $this->init_html();

        file_put_contents($this->root.'/_elements/generic/rad-chk.css', $this->css);
        file_put_contents($this->root.'/_elements/generic/rad-chk.php', $this->html);
        
        return $this->images;
    }
    
    private function init_css() {
        $CSS = [];
        foreach ($this->images as $item)
            $CSS[] = $item['css'];
        
        $this->css = implode("\n", $CSS);
    }
    
    private function init_html() {
        foreach ($this->images as $item)
            $this->html .= $item['html_tmp']."\n\n";
        $this->html = trim($this->html);
    }
    
    private function select_images() {
        $path = $_SERVER['DOCUMENT_ROOT'].'/images/choices';
        $images = select_files('/images/choices');
        
        foreach ($images as $index => $img)
        {
            
            $tmp = split('-', $img);
            $size = getimagesize($path.'/'.$img);
        
            // Skip if not valid image
            if ($tmp[count($tmp)-1] !== 'on.png' || 
                !in_array($tmp[0], ['checkbox','radio']) ||
                !in_array(str_replace('on.png','off.png', $img), $images) ||
                !$size
               )
                   continue;
          
            // Proccess $img
            $element = $tmp[0];
            $id = strtoupper($element.$index);
            unset($tmp[count($tmp)-1], $tmp[0]);
            $class_name = implode('-', $tmp);
            $has_sub_class = (bool) count($tmp);
            $class = ' class="'.$element . ($has_sub_class ? ' '.$class_name : '') . '"';
            $selector_off  = '.'.$element . ($has_sub_class ? '.'.$class_name : '') . ' + label::before';
            $selector_off .= ",\n".str_replace($element, 'f'.$element, $selector_off);
            $selector_on   = '.'.$element . ($has_sub_class ? '.'.$class_name : '') . ':checked + label::before';
            $selector_on  .= ",\n".str_replace($element, 'f'.$element, $selector_on);
            $row = [
                'html' => "<wrap>\n"
                        . "    <input".($class)." id=\"$id\" type=\"$element\" name=\"\" value=\"\">\n"                    
                        . "    <label for=\"$id\">ThisIsLabel</label>\n"
                        . "</wrap>",
                'css' => $selector_off." {\n"
                        . "    width: $size[0]px;\n"
                        . "    height: $size[1]px;\n"
                        . "    background: url(/images/choices/$img);\n"
                        . "}\n"
                        . $selector_on." {background: url(/images/choices/".str_replace("-on.png","-off.png",$img).");}\n"
            ];
            $json =  htmlentities(json_encode($row), ENT_QUOTES, 'UTF-8');
            $row['html_tmp'] = "<wrap><input$class id=\"$id\" type=\"$element\" name=\"\" value=\"\" data-json=\"$json\">\n"                    
                             . "<label for=\"$id\">ThisIs".ucfirst($element)."Label</label></wrap>";
            $this->images[] = $row;
        }
    }
}