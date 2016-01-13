<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Phototime</title>
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
            var LAYOUT_WIDTH = 1170;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="lwrap" data-flex="vaxis">
                <nav class="links-nav" data-flex="-center around" data-flex-480="-center around w">
                    <a href="#">home</a>
                    <a href="#">photoapp</a>
                    <figure><img src="/images/icons/camera.png"></figure>
                    <a href="#">design</a>
                    <a href="#">download</a>
                </nav>
                <div data-flex="vaxis">
                    <h1>your life , a photo</h1>
                    <p>print your life in a simple photo</p>
                    <a href="#" class="btn btn-default">get started</a>
                </div>
                <div class="links-social" data-flex="-center">
                    <a href="#"><i class="icon-twitter"></i></a>
                    <a href="#"><i class="icon-flickr"></i></a>
                    <a href="#"><i class="icon-rss"></i></a>
                </div>
            </div>   
        </header>
        <section class="article-wrap photo">
            <div class="lwrap" data-flex="stripe" data-flex-640="vstripe">
                <article>
                    <h2>rappresent your life with a simple photo</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore 
                        magna aliqua. Ut <a href="#">enim ad minim</a> veniam, quis 
                        nostrud exercitation ullamco laboris nisi 
                        ut aliquip ex ea commodo consequat.</p>
                    <a href="#" class="btn btn-default">get started</a>
                </article>
                <div data-flex="-end">
                    <figure><img src="/images/img1.png"></figure>  
                </div>
            </div>
        </section>
        <section class="article-wrap">
            <div class="lwrap" data-flex="stripe r" data-flex-640="vstripe w">
                <article>
                    <h2>design</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore 
                        magna aliqua. Ut <a href="#">enim ad minim</a> veniam, quis 
                        nostrud exercitation ullamco laboris nisi 
                        ut aliquip ex ea commodo consequat.</p>
                    <a href="#" class="btn btn-default">learn more</a>
                    <time>01/05</time>
                    <div class="arrows" data-flex>
                        <a href="#"><i class="icon-left"></i></a>
                        <a href="#"><i class="icon-right"></i></a>
                    </div>
                </article>
                <div data-flex="-end">
                    <figure><img src="/images/img2.png"></figure>  
                </div> 
            </div>
        </section>
        <section class="article-wrap community">
            <div class="lwrap" data-flex="axis">
                <article data-flex="vaxis">
                    <figure><img src="/images/icons/camerag.png"></figure>
                    <h2>our community</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                </article>
                <div>
                    <div class="arrows" data-flex="end">
                        <a href="#"><i class="icon-left"></i></a>
                        <a href="#"><i class="icon-right"></i></a>
                    </div>
                    <div data-flex="stripe" data-flex-640="vstripe">
                        <figure><img src="images/img3.png"></figure>
                        <figure><img src="images/img4.png"></figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="subscribe">
            <div class="lwrap" data-flex="col -center center">
                <h2>subscribe tous community</h2>
                <form action="#" method="post" data-flex>
                    <input type="email" name="email" placeholder="your email">
                    <button class="btn btn-check"></button>
                </form>
            </div>
        </section>
        <section class="download">
            <div class="lwrap" data-flex="vaxis">
                <h2>download it</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div data-flex-640="vaxis">
                    <a href="#" class="btn btn-alt" data-childs="-center"><em>apple store</em><span><i class="icon-apple"></i></span></a>
                    <a href="#" class="btn btn-alt" data-childs="-center"><em>play store</em><span><i class="icon-android"></i></span></a>
                </div>
            </div>
        </section>
        <footer class="lwrap" data-flex="axis">
            <div>
                <nav class="links-footer" data-flex="-center w">
                    <a href="#">credits</a>|
                    <a href="#">privacy</a>|
                    <a href="#">our teams</a>
                </nav> 
                <span>Copyright by phototime - all right reserved</span>
            </div>            
            <figure><img src="images/icons/camera2.png"></figure>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>