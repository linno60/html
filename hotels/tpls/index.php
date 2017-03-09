<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hotels</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
        <link rel="stylesheet" href="/css/addons/data-flex.css">
        <link rel="stylesheet" href="/css/addons/data-tabs.css">
        <link rel="stylesheet" href="/css/addons/generic.css">
        <link rel="stylesheet" href="/js/jquery/plugins/wSelect-master/wSelect.css">
        <link rel="stylesheet" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/elements.css">  
        <link rel="stylesheet" href="/css/styles.css">  
        <script>
            var LAYOUT_WIDTH = 960;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            };
        </script>
    </head>
    <body>
        <select class="select-languages">
            <option value="usa" data-icon="/images/icons/usa.png">English</option>
            <option value="por" data-icon="/images/icons/brazil.png">Português</option>
            <option value="spa" data-icon="/images/icons/spain.png">Español</option>
            <option value="rus" data-icon="/images/icons/russia.png">Русский</option>
            <option value="ita" data-icon="/images/icons/italia.png">Italiano</option>
            <option value="ger" data-icon="/images/icons/germany.png">Deutsch</option>
        </select>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
        <script src="/js/jquery/plugins/wSelect-master/wSelect.js"></script>
        <script>
            $('.select-languages').wSelect();
        </script> 
    </body>
</html>