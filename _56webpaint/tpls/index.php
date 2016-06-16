<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Webpaint</title>
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
            var LAYOUT_WIDTH = 1130;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col">
        <div>
            <header>
                <div class="lwrap" data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="107" height="33" alt="Webpaint">
                    </a>
                    <nav class="links-nav" data-flex="end w">
                        <a href="#" class="active">home</a>
                        <a href="#">portfolio</a>
                        <a href="#">about</a>
                        <a href="#">blog</a>
                        <a href="#">contact</a>
                    </nav>
                </div>
            </header>
            <div class="slider">
                <div class="lwrap">
                    <h1>We are <strong>Webpaint</strong></h1>
                    <p><em>digital & branding</em> agency based in Jupiter and we would love to turn ideas into beautiful things.</p>
                    <a href="#" class="btn btn-default">see portfolio</a>     
                </div>                     
            </div>
            <div class="services">
                <div class="lwrap" data-flex="stripe w" data-flex-480="vstripe">
                    <article>
                        <i class="icon-android"></i>
                        <h3>Consectetur</h3>
                        <p>Vestibulum id ligula porta  euismod semper. Aenean lacinia bibendum nulla sed consectetur dui.</p>
                    </article>
                    <article>
                        <i class="icon-screen"></i>
                        <h3>Tristiquet</h3>
                        <p>Fusce dapibus, cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo risus.</p>
                    </article>
                    <article>
                        <i class="icon-camera"></i>
                        <h3>Fermentum</h3>
                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum sagittis lacus mollis.</p>
                    </article>
                    <article>
                        <i class="icon-watch"></i>
                        <h3>Elit Ultricies</h3>
                        <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet.</p>
                    </article>
                </div>
            </div>
            <div class="works lwrap"> 
                <h2>Our Featured Works</h2>
                <p>Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum.</p>
                <div class="tabs" data-tabs>
                    <div class="tablist" data-flex="center">
                        <a href="#tab1" class="active">all</a>
                        <a href="#tab2">graphic</a>
                        <a href="#tab3">illustration</a>
                        <a href="#tab4">motion</a>
                    </div>
                    <div class="tabset">
                        <div id="tab1" class="tabpanel active" data-flex="stripe w">
                            <figure><img src="/images/img1.png"></figure> 
                            <figure><img src="/images/img2.png"></figure> 
                            <figure><img src="/images/img3.png"></figure> 
                            <figure><img src="/images/img4.png"></figure> 
                            <figure><img src="/images/img5.png"></figure> 
                            <figure><img src="/images/img6.png"></figure> 
                            <figure><img src="/images/img7.png"></figure> 
                            <figure><img src="/images/img8.png"></figure> 
                            <figure><img src="/images/img9.png"></figure> 
                            <figure><img src="/images/img10.png"></figure> 
                            <figure><img src="/images/img11.png"></figure> 
                            <figure><img src="/images/img12.png"></figure> 
                        </div>
                        <div id="tab2" class="tabpanel">Tab number 2</div>
                        <div id="tab3" class="tabpanel">Tab number 3</div>
                        <div id="tab4" class="tabpanel">Tab number 4</div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="lwrap">
                <h2>Get in Touch</h2>
                <p>Vestibulum id ligula porta felis euismod semper,malesuada euismod.</p>
                <div data-flex="center w">
                    <address><i class="icon-fill"></i>Moonshine Street No: 14/05 Light City, Jupiter</address>
                    <span><i class="icon-phone"></i>0247 541 65 87</span>
                </div>
                <div class="links-social" data-flex="center w" data-childs="-center center">
                    <a href="#" class="rss"><i class="icon-rss"></i></a>
                    <a href="#" class="fb"><i class="icon-fb"></i></a>
                    <a href="#" class="tw"><i class="icon-tw"></i></a>
                    <a href="#" class="db"><i class="icon-db"></i></a>
                    <a href="#" class="pin"><i class="icon-pin"></i></a>
                </div>               
            </div>
            <div class="copyright">
                <span>@ 2013 Webpaint. All Rights Reserved.</span>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>