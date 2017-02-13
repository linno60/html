<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Primo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
        <link rel="stylesheet" href="/css/addons/data-flex.css">
        <link rel="stylesheet" href="/css/addons/data-tabs.css">
        <link rel="stylesheet" href="/css/addons/generic.css">
        <link rel="stylesheet" href="/js/jquery/plugins/wSelect-master/wSelect.css"> 
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
        <select id='select-lang'>
            <option value="eng" data-icon="/images/icons/flag.png">English</option>
            <option value="ger" data-icon="/images/icons/germany.jpg">German</option>
            <option value="fra" data-icon="/images/icons/france.gif">French</option>
            <option value="spa" data-icon="/images/icons/spain.gif">Spain</option>
        </select>
        <select id='select-cur'>
            <option value="usd" data-icon="/images/icons/flag.png">Doller</option>
            <option value="gbp" data-icon="/images/icons/germany.jpg">Pound</option>
            <option value="eur" data-icon="/images/icons/france.gif">Euro</option>
            <option value="uah" data-icon="/images/icons/spain.gif">Hryvnya</option>
        </select>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
        <script src="/js/jquery/plugins/wSelect-master/wSelect.js"></script>
        <script type="text/javascript">
           $('select').wSelect();
        </script>
    </body>
</html>