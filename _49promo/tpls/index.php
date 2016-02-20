<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Promo</title>
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
            var LAYOUT_WIDTH = 1030;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header class="lwrap" data-flex="axis">
            <a href="/" title="Return to the homepage" id="logo">
                <img src="/images/logo.png" width="162" height="41" alt="Promo">
            </a>
            <nav class="links-nav" data-flex="end w">
                <a href="#">about</a>
                <a href="#">purchase</a>
                <a href="#">newsletter</a>
            </nav>
            <a href="#" class="btn btn-sign">sign up</a>
        </header>
        <section class="banner">
            <div class="lwrap" data-flex="vaxis">
                <h1>THIS IS A BOLD HEADLINE ABOUT OUR PRODUCT</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra lobortis aliquam. Nunc at turpis quis augue interdum aliquam et vitae magna. Maecenas augue quam, placerat ac dolor ac, hendrerit condimentum purus. Ut convallis mauris sed molestie ultricies.</p>
                <figure><img src="/images/iphone.png"></figure>  
            </div>                   
        </section>
        <section class="content lwrap" data-flex="col -center">
            <a href="#" class="btn btn-download">download now</a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra lobortis aliquam. Nunc at turpis quis augue interdum aliquam et vitae magna.</p>
            <div data-flex="stripe w" data-childs="-start" data-flex-480="vstripe">
                <article>
                    <i class="icon-photos"></i>
                    <div>
                        <h4>Lorem ipsum dolor sit amet </h4>
                        <p>consectetur adipiscing elit. Sed viverra lobortis aliquam. Nunc at turpis quis augue interdum aliquam et vitae magna. Maecenas augue quam, placerat ac dolor ac, hendre-</p>
                    </div>
                </article>
                <article>
                    <i class="icon-box"></i>
                    <div>
                        <h4>Lorem ipsum dolor sit amet </h4>
                        <p>consectetur adipiscing elit. Sed viverra lobortis aliquam. Nunc at turpis quis augue interdum aliquam et vitae magna. Maecenas augue quam, placerat ac dolor ac, hendre-</p>
                    </div>
                </article>
                <article>
                    <i class="icon-calendar"></i>
                    <div>
                        <h4>Lorem ipsum dolor sit amet </h4>
                        <p>consectetur adipiscing elit. Sed viverra lobortis aliquam. Nunc at turpis quis augue interdum aliquam et vitae magna. Maecenas augue quam, placerat ac dolor ac, hendre-</p>
                    </div>
                </article>
                <article>
                    <i class="icon-cup"></i>
                    <div>
                        <h4>Lorem ipsum dolor sit amet </h4>
                        <p>consectetur adipiscing elit. Sed viverra lobortis aliquam. Nunc at turpis quis augue interdum aliquam et vitae magna. Maecenas augue quam, placerat ac dolor ac, hendre-</p>
                    </div>
                </article>
                <article>
                    <i class="icon-mail"></i>
                    <div>
                        <h4>Lorem ipsum dolor sit amet </h4>
                        <p>consectetur adipiscing elit. Sed viverra lobortis aliquam. Nunc at turpis quis augue interdum aliquam et vitae magna. Maecenas augue quam, placerat ac dolor ac, hendre-</p>
                    </div>
                </article>
                <article>
                    <i class="icon-tools"></i>
                    <div>
                        <h4>Lorem ipsum dolor sit amet </h4>
                        <p>consectetur adipiscing elit. Sed viverra lobortis aliquam. Nunc at turpis quis augue interdum aliquam et vitae magna. Maecenas augue quam, placerat ac dolor ac, hendre-</p>
                    </div>
                </article>
            </div>
        </section>
        <section class="video-wrap">
            <div class="lwrap" data-flex="col -center">
                <hgroup>
                    <h2>VIEW A VIDEO DEMO ON OUR PRODUCT</h2>
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra lobortis aliquam.</h6>
                </hgroup>
                <div class="video">
                    <div data-video="16:9"><iframe src="https://www.youtube.com/embed/2vKwGcJuV14" frameborder="0" allowfullscreen></iframe></div> 
                </div> 
            </div>             
        </section>
        <footer class="lwrap" data-flex="col -center">
            <div class="links-social" data-flex="center w" data-childs="-center center">
                <a href="#" data-title="Follow us for all the latest news and special offers." class="fb"><i class="icon-fb"></i></a>
                <a href="#" data-title="Follow us for all the latest news and special offers." class="tw"><i class="icon-tw"></i></a>
                <a href="#" data-title="Follow us for all the latest news and special offers." class="yt"><i class="icon-yt"></i></a>
                <a href="#" data-title="Follow us for all the latest news and special offers." class="in"><i class="icon-in"></i></a>
                <a href="#" data-title="Follow us for all the latest news and special offers." class="pin"><i class="icon-pin"></i></a>
            </div>
            <span>Copyright © 2013 Promo. All rights reserved.</span>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>