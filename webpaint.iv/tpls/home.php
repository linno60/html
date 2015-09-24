<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Webpaint</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link type="text/css" rel="stylesheet" href="/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/css/reset-elements.css">
        <link type="text/css" rel="stylesheet" href="/css/styles.css">    
    </head>
    <body>
        <header>
            <div class="lwrap" data-flex="row-center-between">
                <a href="#" class="logo" data-flex="row-center"><i class="icon-logo"></i>ebpaint</a>
                <nav class="nav" data-flex>
                    <a href="#" class="active">home</a>
                    <a href="#">portfolio</a>
                    <a href="#">about</a>
                    <a href="#">blog</a>
                    <a href="#">contact</a>
                </nav>
            </div>
        </header>
        <div class="slider">
            <div class="lwrap" data-flex="col-center-center">
                <h1>We are <span>Webpaint</span></h1>
            <p><span>digital & branding</span> agency based in Jupiter and we would love to turn ideas into beautiful things.</p>
            <a href="#" class="btn btn-default">see portfolio</a>
            </div>            
        </div>
        <div class="services">
            <div class="lwrap" data-flex="fluidblocks">
                <article data-flex="col-center">
                    <i class="icon-android"></i>
                    <h3>Consectetur</h3>
                    <p>Vestibulum id ligula porta  euismod semper. Aenean lacinia bibendum nulla sed consectetur dui.</p>
                </article>
                 <article data-flex="col-center">
                    <i class="icon-screen"></i>
                    <h3>Tristiquet</h3>
                    <p>Fusce dapibus, cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo risus.</p>
                </article>
                 <article data-flex="col-center">
                    <i class="icon-camera"></i>
                    <h3>Fermentum</h3>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum sagittis lacus mollis.</p>
                </article>
                 <article data-flex="col-center">
                    <i class="icon-watch"></i>
                    <h3>Elit Ultricies</h3>
                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet.</p>
                </article>
            </div>
        </div>
        <div class="works"> 
            <div class="lwrap">
            <h2>Our Featured Works</h2>
            <p>Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum.</p>
            <div class="tabs">
                <div class="_nav" data-flex='row-center-center'>
                    <a href="#tab1" class="btn btn-default active">all</a>
                    <a href="#tab2" class='btn btn-default'>graphic</a>
                    <a href="#tab3" class="btn btn-default">illustration</a>
                    <a href="#tab4" class='btn btn-default'>motion</a>
                </div>
                <div class="_content">
                    <div id="tab1" class="grid" data-flex='row--around'>
                        <figure data-flex>
                            <img src="/images/img1.png">                            
                        </figure> 
                        <figure data-flex>
                            <img src="/images/img2.png">                            
                        </figure>
                        <figure data-flex>
                            <img src="/images/img3.png">                            
                        </figure>
                        <figure data-flex>
                            <img src="/images/img4.png">                            
                        </figure>
                        <figure data-flex>
                            <img src="/images/img5.png">                            
                        </figure>
                        <figure data-flex>
                            <img src="/images/img6.png">                            
                        </figure>
                        <figure data-flex>
                            <img src="/images/img7.png">                            
                        </figure>
                        <figure data-flex>
                            <img src="/images/img8.png">                            
                        </figure>
                        <figure data-flex>
                            <img src="/images/img9.png">                            
                        </figure>
                        <figure data-flex>
                            <img src="/images/img10.png">                            
                        </figure>
                        <figure data-flex>
                            <img src="/images/img11.png">                            
                        </figure>
                        <figure data-flex>
                            <img src="/images/img12.png">                            
                        </figure>
                    </div>
                    <div id="tab2" class="grid" data-flex='row--around'>
                           <figure data-flex>
                            <img src="/images/img12.png">                            
                        </figure>                    
                    </div> 
                    <div id="tab3" class="grid" data-flex='row--around'>
                           <figure data-flex>
                            <img src="/images/img11.png">                            
                        </figure>                        
                    </div>
                    <div id="tab4" class="grid" data-flex='row--around'>
                             <figure data-flex>
                            <img src="/images/img10.png">                            
                        </figure>                 
                    </div>
                </div>
            </div> 
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="col-center-center">
                <h2>Get in Touch</h2>
            <p>Vestibulum id ligula porta felis euismod semper,malesuada euismod.</p>
            <div data-flex>
                <span><i class="icon-fill"></i>Moonshine Street No: 14/05 Light City, Jupiter</span>
                <span><i class="icon-phone"></i>0247 541 65 87</span>
            </div>
            <div class="social" data-flex>
                <a href="#" class="btn btn-rss"><i class="icon-rss"></i></a>
                <a href="#" class="btn btn-fb"><i class="icon-fb"></i></a>
                <a href="#" class="btn btn-tw"><i class="icon-tw"></i></a>
                <a href="#" class="btn btn-db"><i class="icon-db"></i></a>
                <a href="#" class="btn btn-pin"><i class="icon-pin"></i></a>
            </div>
            </div>
            <div class="copyright" data-flex="row-center-center">
                <span>@ 2013 Webpaint. All Rights Reserved.</span>
            </div>
        </footer>
        <script src="/js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="/js/functions.js" type="text/javascript"></script>
        <script src="/js/jq.functions.js" type="text/javascript"></script>
        <script src="/js/jquery.gfx_tabs.js" type="text/javascript"></script>
        <script>
            $('.tabs').GFX_tabs();
        </script>
    </body>
</html>
