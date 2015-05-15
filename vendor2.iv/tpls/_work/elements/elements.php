<!DOCTYPE html>
<html lang="en">
    <head>
        <title>IV : Elements</title>
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link href="/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="/css/work.css"  rel="stylesheet" type="text/css"/>
        <link href="/css/reset-elements.css" rel="stylesheet" type="text/css"/>
        <link href="/css/styles.css" rel="stylesheet" type="text/css"/>   
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <a href="http://ivan.eug/elements"  class="_eugene-nav _ivan _active">Ivan</a>
        <a href="http://artur.eug/elements" class="_eugene-nav _artur">Artur</a>
        
        <div class="_elements clearfix">

            <div class="_tabs">
                <?php foreach (['icons','images','form-elements','buttons','tables','lists','paginations','breadcrumbs','tabs','cites','messages','defaults','labels'] as $tab_name): ?>
                    <div id="_tab-<?=$tab_name?>">
                        <a href="#_tab-<?=$tab_name?>"><?=$tab_name?></a>
                        <div><?=require_tpl('_work/elements/tabs/'.$tab_name)?></div>
                    </div>
                <?php endforeach; ?>
            </div>
  
        </div>
        
        <script src="/js/jquery/jquery-2.1.1.min.js"></script>
        <script>
            (function ($) {
                // Activate first tab
                if (window.location.hash === '')
                    document.location.href = '#_tab-icons';
                
                // Copy fn for images and icons
                $('#_tab-icons h2').each(function () {
                    $(this).find('span').text($(this).next().find('i').length);
                });
                if (window.clipboardData)
                {
                    $('#_tab-icons').on('dblclick', 'i', function () {
                        window.clipboardData.setData("Text", $(this)[0].outerHTML);
                    });
                    $('#_tab-icons, #_tab-images').on('dblclick', 'img', function () {
                        window.clipboardData.setData("Text", $(this).attr('src'));
                    });
                }
            })(jQuery);
        </script>
    </body>
</html>