<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nobodysfool</title>
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
            var LAYOUT_WIDTH = 980;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col">
        <div>
            <header>  
                <input type="checkbox" id="collapse"> 
                <div class="topbar">                                   
                    <div class="lwrap" data-flex="axis">
                        <div class="links-topbar">
                            <a href="#">Sign Up</a>|
                            <a href="#">Login</a>|
                            <a href="#">RSS Feeds</a>|
                            <a href="#">Archived News</a>
                        </div>
                        <div class="links-social" data-flex="end w">
                            <a href="#" class="linkedin"></a>
                            <a href="#" class="twitter"></a>
                            <a href="#" class="pinterest"></a>
                            <a href="#" class="google-plus"></a>
                            <a href="#" class="rss"></a>
                        </div>  
                        <label for="collapse"></label>
                    </div>
                </div>
                <nav class="links-nav lwrap" data-flex="w">
                    <a href="#" class="active">homepage</a>
                    <a href="#">style demo</a>
                    <a href="#">full width</a>
                    <a href="#">dropdown</a>
                    <a href="#">gallery</a>
                    <a href="#">portfolio</a>
                    <a href="#">link text</a>
                    <a href="#">long link text</a>
                </nav>
                <div class="lwrap" data-flex="between -end w">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="211" height="57" alt="Nobodysfool">
                    </a>
                    <form action="#" method="post" data-flex="end">
                        <input type="search" name="search" placeholder="Search Our Website">
                        <button><span class="btn btn-default">search</span></button>
                    </form>
                </div>
            </header>
            <section class="slider-wrap">
                <div class="lwrap">
                    
                </div>
            </section>
        </div>
        <footer>

        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>