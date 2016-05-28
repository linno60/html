<?php require_once $_SERVER['DOCUMENT_ROOT'].'/_elements/core/index_start.php';

    if ( file_exists($ROOT.'/tpls/'.$page.'.php') ) {
        require_tpl($page, $D);
    }
    else 
    {
        switch ($page) 
        {
            case 'index': $layout = 'index'; break;
            default: $layout = '404';
        }

        require_tpl($layout, $D);
    }