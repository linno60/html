<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gideon</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
        <link rel="stylesheet" href="/css/addons/generic.css">  
        <link rel="stylesheet" href="/css/elements.css">  
        <link rel="stylesheet" href="/css/styles.css">  
        <script>
            var LAYOUT_WIDTH = 1190;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div>
            <header>
                <a name="top"></a>
                <div class="top-wrap">
                    <div class="lwrap">
                        <form action="#" method="post" class="search-header">
                            <input type="image" id="image1" src="/images/icons/searchheader.png">
                            <input type="search" id="search1" name="search" placeholder="Search">
                        </form>
                        <a href="#" class="btn-cart"><span class="lbl-circle sm">3</span></a>      
                    </div>
                </div>
                <div class="logo-wrap">
                    <a href="/" title="Gideon 300" id="logo">
                        <img src="/images/logo.png" width="193" height="125" alt="Gideon 300">
                    </a>
                </div>
                <div class="nav-wrap">
                    <nav class="links-nav lwrap">
                        <a href="#" class="active">Home</a>
                        <a href="#">Inspiration</a>
                        <a href="#">Photography</a>
                        <a href="#">Fashion</a>
                        <a href="#">Business</a>
                        <a href="#">About me</a>
                        <a href="#">Shop</a>
                        <a href="#">Contact</a>
                    </nav>
                </div>
            </header>
        </div>
        <footer>
            <div class="copyright">
                <div class="lwrap clearfix">
                    <span>@ All Copyrights Reserved by Gideon&nbsp;300</span>
                    <span><a href="#top">Back to top</a><a href="#top" class="btn-anchor"></a></span>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>