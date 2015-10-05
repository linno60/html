<?php

    function require_tpl($tpl) { require_once $_SERVER['DOCUMENT_ROOT'].'/tpls/'.$tpl.'.php'; }
    $page = $_SERVER['QUERY_STRING'] ? substr($_SERVER['QUERY_STRING'], 1) : 'index';

    switch ($page) 
    {
        case 'index': $layout = 'index'; break;
        case 'home': $layout = 'home'; break; 
        case 'products': $layout = 'products'; break;
        case 'product-demo': $layout = 'product-demo'; break;
        case 'product-innerpage': $layout = 'product-innerpage'; break;
        case 'blog': $layout = 'blog'; break;
        case 'blog-innerpage': $layout = 'blog-innerpage'; break;
        case 'contact': $layout = 'contact'; break;
        case 'web-elements': $layout = 'web-elements'; break;
    }

    require_tpl($layout);