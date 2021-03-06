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
        
        if ($action === 'process_images')
        {
            $gfx_icons = new gfx_icons();
            $gfx_images = new gfx_images();

            $gfx_icons->build();
            $gfx_images->build();            
            
            header('Location: /elements/');
            die();
        }
        else if ($action === 'submit_fonts_local')
        {
            file_put_contents($GDIR.'/fonts-local.css', $_POST['css']);
            return_json(['success'=>1]);
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
            $all_css = "/* FONTS */\n\n";
            $all_css .= trim(file_get_contents($GDIR.'/fonts-external.css'))."\n\n";
            $all_css .= trim(file_get_contents($GDIR.'/fonts-local.css'))."\n\n";
            $all_css .= "/* ICONS */\n\n";
            $all_css .= trim(file_get_contents($GDIR.'/icons.css'))."\n\n";
            $all_css .= "/* ELEMENTS */\n\n";
            $all_css .= trim(file_get_contents($ROOT.'/css/_elements.css'))."\n\n";
            $all_css .= "/* $------------------------------------------------------------------------- */";
            return_json(['success'=>true, 'css'=>$all_css]);
        }
        
        $D['fonts_local'] = file_get_contents($GDIR.'/fonts-local.css');
        $D['data'] = file_get_contents($GDIR.'/data.json');
        $D['ddata'] = json_decode($D['data']);
        
        // Get js
        $D['js'] = file_get_contents($GDIR.'/js.js');
        $D['js'] = explode("\n", $D['js']);
        unset($D['js'][0], $D['js'][count($D['js'])]);
        $D['js'] = trim( implode("\n", $D['js']) );

        require_file('/_elements/core/elements.php', $D);
        die();
    }