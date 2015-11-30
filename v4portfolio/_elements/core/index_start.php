<?php

    $ROOT = $_SERVER['DOCUMENT_ROOT'];
    $GDIR = $ROOT.'/_elements/generic';
    require_once $ROOT.'/_elements/core/functions.php';

    $URI_TMP = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    
    $page   = $URI_TMP[0] ? $URI_TMP[0] : 'index';
    $action = isset($URI_TMP[1]) ? $URI_TMP[1] : false;

    $D = [];

    if ($page === 'elements') 
    {
        require_once $ROOT.'/_elements/core/classes/icons.php';
        require_once $ROOT.'/_elements/core/classes/images.php';
        require_once $ROOT.'/_elements/core/classes/choices.php';
        require_once $ROOT.'/_elements/core/classes/fontscom.php';
        require_once $ROOT.'/_elements/core/classes/fontssquirel.php';
        require_once $ROOT.'/_elements/core/classes/css.php';
        
        if ($action === 'process_images')
        {
            $gfx_icons = new gfx_icons();
            $gfx_images = new gfx_images();
            $gfx_choices = new gfx_choices();

            $gfx_icons->build();
            $gfx_images->build();
            $gfx_choices->build();
            
            header('Location: /elements/');
        }
        else if ($action === 'submit_fonts_local')
        {
            file_put_contents($GDIR.'/fonts-local.css', $_POST['css']);
            return_json(['success'=>1]);
        }
        
        else if ($action === 'submit_fonts_com_file')
        {
            $gfx_fontscom = new gfx_fontscom();
            $res = $gfx_fontscom->upload_zip($_FILES['archive']);
            header('Location: /elements/#_tab-fonts-com');
        }
        else if ($action === 'submit_fonts_com')
        {
            file_put_contents($GDIR.'/fonts-com.css', trim($_POST['css']));
            return_json(['success'=>1]);
        }
        else if ($action === 'delete_fonts_com')
        {
            $gfx_fontscom = new gfx_fontscom();
            $gfx_fontscom->cleanup();
            header('Location: /elements/#_tab-fonts-com');
        }
        
        else if ($action === 'submit_fonts_squirel_file')
        {
            $gfx_fontssquirel = new gfx_fontssquirel();
            $res = $gfx_fontssquirel->upload_zip($_FILES['archive']);
            header('Location: /elements/#_tab-fonts-squirel');
        }
        else if ($action === 'submit_fonts_squirel')
        {
            file_put_contents($GDIR.'/fonts-squirel.css', trim($_POST['css']));
            return_json(['success'=>1]);
        }
        else if ($action === 'delete_fonts_squirel')
        {
            $gfx_fontssquirel = new gfx_fontssquirel();
            $gfx_fontssquirel->cleanup();
            header('Location: /elements/#_tab-fonts-squirel');
        }
        
        else if ($action === 'submit_fonts')
        {
            $fonts_settings = format_fonts_settings($_POST);
            $data_decoded = json_decode(file_get_contents($GDIR.'/data.json'));
            $data_decoded->fonts = $fonts_settings;
            $fonts_css = get_external_fonts_css($data_decoded->fonts);
            file_put_contents($GDIR.'/fonts-external.css', $fonts_css);
            file_put_contents($GDIR.'/data.json', json_encode($data_decoded));
            return_json(['success'=>1]);
        }
        else if ($action === 'submit_bgcolor') 
        {
            $data_decoded = json_decode(file_get_contents($GDIR.'/data.json'));
            $data_decoded->backgrounds->$_POST['tab_name'] = $_POST['color'];
            file_put_contents($GDIR.'/data.json', json_encode($data_decoded));
            return_json(['success'=>1]);            
        }
        else if ($action === 'submit_js')
        {
            $gen_js = "$(function() {\n\n".$_POST['js']."\n\n});";
            file_put_contents($GDIR.'/js.js', $gen_js);
            return_json(['success'=>1]);
        }
        else if ($action === 'get_css')
        {
            $gfx_css = new gfx_css();
            $all_css = $gfx_css->build();
            return_json(['success'=>true, 'css'=>$all_css]);
        }
        
        $D['fonts_local']   = file_get_contents($GDIR.'/fonts-local.css');
        $D['fonts_com']     = file_get_contents($GDIR.'/fonts-com.css');
        $D['fonts_squirel'] = file_get_contents($GDIR.'/fonts-squirel.css');
        $D['data']  = file_get_contents($GDIR.'/data.json');
        $D['ddata'] = json_decode($D['data']);
        
        // Get js
        $D['js'] = file_get_contents($GDIR.'/js.js');
        $D['js'] = explode("\n", $D['js']);
        unset($D['js'][0], $D['js'][count($D['js'])]);
        $D['js'] = trim( implode("\n", $D['js']) );

        require_file('/_elements/core/elements.php', $D);
        die();
    }