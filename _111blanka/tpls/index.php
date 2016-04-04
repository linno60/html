<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blanka</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
        <link rel="stylesheet" href="/css/addons/data-flex.css">
        <link rel="stylesheet" href="/css/addons/data-tabs.css">
        <link rel="stylesheet" href="/css/addons/generic.css">  
        <link rel="stylesheet" href="/css/elements.css">  
        <link rel="stylesheet" href="/css/styles.css">  
        <script>
            var LAYOUT_WIDTH = 960;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div data-flex="col between">
        <header>
            <div class="lwrap" data-flex="axis">
                <nav class="links-nav" data-flex="w" data-childs="col -center">
                    <a href="#" class="active">home</a>
                    <a href="#">templates</a>
                    <a href="#">portfolio</a>
                    <a href="#">services</a>
                    <a href="#">blog</a>
                    <a href="#">contact us</a>
                </nav>
                <form class="form-search" action="#" method="post" data-flex="axis">
                    <input type="search" name="search">
                    <input type="image" name="image" src="/images/icons/glass.png">
                </form>
            </div>
        </header>
        <div class="lwrap">

        </div>
        <footer>
            <div class="lwrap">
                <span>© 2011 by Blanka   All rights reserved.   Designed by High on Pixels</span>
            </div>
        </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>