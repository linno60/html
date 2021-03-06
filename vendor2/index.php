<?php

    function require_tpl($tpl) { require_once $_SERVER['DOCUMENT_ROOT'].'/tpls/'.$tpl.'.php'; }
    $page = $_SERVER['QUERY_STRING'] ? substr($_SERVER['QUERY_STRING'], 1) : 'index';

    switch ($page) 
    {
        case 'index': $layout = '_work/index'; break; 
        case 'elements': $layout = '_work/elements/elements'; break; 
        case 'plugins': $layout = '_work/plugins'; break; 
        case 'home': $layout = 'home'; break;
        case 'category-grid-list': $layout = 'category-grid-list'; break;       
        case 'product': $layout = 'product'; break;
        case 'shopping-cart': $layout = 'shopping-cart'; break;
        case 'compare-products': $layout = 'compare-products'; break;
        case 'contact-us': $layout = 'contact-us'; break;
        case 'register-account': $layout = 'register-account'; break;
        case 'checkout': $layout = 'checkout'; break;
        case 'blog': $layout = 'blog'; break;
        case 'blog-post': $layout = 'blog-post'; break;
        default: $layout = '404';
    }

    require_tpl($layout);