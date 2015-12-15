<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BuyThis</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/reset-elements.css">
        <link rel="stylesheet" href="/css/data-flex.css">
        <link rel="stylesheet" href="/css/styles.css">  
        <script>
            var LAYOUT_WIDTH = 980;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth/LAYOUT_WIDTH+'px' : '1px';
            window.onresize = function() {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth/LAYOUT_WIDTH+'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class='lwrap'>
            <header>
                <a href="#" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="179" height="46" alt="BuyThis">
                </a>
            </header>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>