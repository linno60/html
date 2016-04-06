<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Metroblog</title>
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
            var LAYOUT_WIDTH = 1020;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col between">
        <header>
            <div class="lwrap" data-flex="axis">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="232" height="48" alt="Metroblog">
                </a>
                <nav class="links-nav" data-flex="end w" data-childs="-center center">
                    <a href="#" class="active">Home</a>
                    <a href="#">About</a>
                    <a href="#">Articles</a>
                    <a href="#">Pages</a>
                </nav>
            </div>   
        </header>
        <div class="lwrap">
            <div class="banner" data-flex="axis">
                <div>
                    <h1>Apple iPad Reviews</h1>
                    <a href="#" class="btn btn-default"><i class="icon-camera"></i>Video review</a>
                </div>
                <figure><img src="/images/banner.png" width="817" height="384" alt=""></figure>
            </div>
            <div data-flex="stripe">
                <div>
                    <div class="slider">
                        
                    </div>
                </div>
                <aside>
                    
                </aside>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="axis">
                <span></span>
                <span>All Rights Reserved to <a href="#">cssauthor.com</a></span>
                <div class="links-social">
                    <a href="#"><i class="icon-fb"></i></a>
                    <a href="#"><i class="icon-tw"></i></a>
                    <a href="#"><i class="icon-youtube"></i></a>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>