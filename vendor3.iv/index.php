<?php

    function require_tpl($tpl) { require_once $_SERVER['DOCUMENT_ROOT'].'/tpls/'.$tpl.'.php'; }
    $page = $_SERVER['QUERY_STRING'] ? substr($_SERVER['QUERY_STRING'], 1) : 'index';

    switch ($page) 
    {
        case 'index': $layout = 'home'; break; 
        case 'category-grid-list': $layout = 'category-grid-list'; break;
        case 'product-page': $layout = 'product-page'; break;
        case 'shopping-cart': $layout = 'shopping-cart'; break;
        case 'compare-product': $layout = 'compare-product'; break;
        case 'contact-us': $layout = 'contact-us'; break;
        case 'register-account': $layout = 'register-account'; break;
        case 'checkout': $layout = 'checkout'; break;
        case 'blog': $layout = 'blog'; break;
        case 'blog-post': $layout = 'blog-post'; break;
    }

    require_tpl($layout);