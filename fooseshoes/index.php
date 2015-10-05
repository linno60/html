<?php

    function require_tpl($tpl) { require_once $_SERVER['DOCUMENT_ROOT'].'/tpls/'.$tpl.'.php'; }
    $page = $_SERVER['QUERY_STRING'] ? substr($_SERVER['QUERY_STRING'], 1) : 'index';

    switch ($page) 
    {
        case 'index': $layout = 'index'; break;
        case 'home': $layout = 'home'; break; 
        case 'products': $layout = 'products'; break;
    }

    require_tpl($layout);