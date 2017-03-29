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
        <link rel="stylesheet" href="/js/jquery/plugins/ultraselect-master/dist/jquery.ultraselect.min.css"> 
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
        <select name="basic[]" multiple="multiple" class="multiselect">
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="WA" selected="selected">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>
        <select class="select-list" name="control_1[]" multiple="multiple" size="5">
            <optgroup label="Optgroup 1">
                <option value="option_1">Option 1</option>
                <option value="option_2">Option 2</option>
            </optgroup>
            <optgroup label="Optgroup 2">
                <option value="option_3">Option 3</option>
                <option value="option_4">Option 4</option>
                <option value="option_5">Option 5</option>
                <option value="option_6">Option 6</option>
                <option value="option_7">Option 7</option>
                <option value="option_8">Option 8</option>
            </optgroup>
            <optgroup label="Optgroup 3">
                <option value="option_9">Option 9</option>
                <option value="option_10">Option 10</option>
                <option value="option_11">Option 11</option>
                <option value="option_12">Option 12</option>
            </optgroup>
        </select>

        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
        <script src="/js/jquery/plugins/wSelect-master/wSelect.js"></script>
        <script src="/js/jquery/plugins/ultraselect-master/dist/jquery.ultraselect.min.js"></script>
        <script>
            $('.select-languages').wSelect();
        </script> 
        <script>
           

            $(".select-list").ultraselect({oneOrMoreSelected: '*'});
        </script>
    </body>
</html>