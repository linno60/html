<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Seabird</title>
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
            var LAYOUT_WIDTH = 1050;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="lwrap">
            <div>
                <header>
                    <div data-flex>
                        <a href="/" title="Return to the homepage" id="logo">
                            <img src="/images/logo.png" width="122" height="28" alt="Seabird">
                        </a>
                    </div>
                    <div class="nav" data-flex="axis">
                        <nav class="links-nav" data-flex="w" data-childs="-center center">
                            <a href="#">home</a>
                            <a href="#">portfolio</a>
                            <a href="#">blog</a>
                            <a href="#">pages</a>
                            <a href="#">features</a>
                            <a href="#">contact</a>
                        </nav>
                        <div class="links-social" data-flex="-center">
                            <a href="#"><i class="icon-rss"></i></a>
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-tw"></i></a>
                        </div>
                    </div>
                </header>
                <section class="slider" data-flex="axis">
                    <a href="#" class="btn btn-slide prev"></a>
                    <div>
                        <hgroup>    
                            <h1>We design & build responsive themes</h1>
                            <h2>Maecenas sed diam varius blandit magna. Duis mollis commodo luctus.</h2>
                        </hgroup>
                        <figure><img src="/images/slider.png"></figure>
                        <div class="links-controls" data-flex="center">
                            <a href="#"></a>
                            <a href="#" class="active"></a>
                            <a href="#"></a>
                            <a href="#"></a>
                        </div>
                    </div>
                    <a href="#" class="btn btn-slide next"></a>
                </section>
                <section class="services-wrap" data-flex="col -center">
                    <h2>Interface Design is Important for Us</h2>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
                    <div class="services" data-flex="around w" data-childs="col -center r">
                        <div>
                            <a href="#">Interface Design</a>
                            <div class="lbl lbl-service"><i class="icon-laptop"></i></div>                            
                        </div>
                        <div>
                            <a href="#">Motion Graphic</a>
                            <div class="lbl lbl-service"><i class="icon-film"></i></div>   
                        </div>
                        <div>
                            <a href="#">Photography</a>
                            <div class="lbl lbl-service"><i class="icon-camera"></i></div>    
                        </div>
                        <div>
                            <a href="#">Illustration</a>
                            <div class="lbl lbl-service"><i class="icon-brush"></i></div>
                        </div>
                    </div>
                </section>
                <section class="works">
                    <h3>our awesome works</h3>
                    <div data-flex="stripe w" data-flex-480="vstripe">
                        <article>
                            <figure><img src="/images/img.png"></figure>
                            <h4><a href="#">Nobis Business Card</a></h4>
                            <span>Business Card, Graphic</span>
                            <p>Sed posuere consectetur est at lobortis. Porta sagittis lacus vel augue laoreet rutrum.</p>
                        </article>
                        <article>
                            <figure><img src="/images/img.png"></figure>
                            <h4><a href="#">New Fun Project</a></h4>
                            <span>Web Design, Application</span>
                            <p>Nulla vitae elit libero, a pharetra augue. Donec sed odio dui. Vestibulum id ligula porta felis.</p>
                        </article>
                        <article>
                            <figure><img src="/images/img.png"></figure>
                            <h4><a href="#">Passionaries Branding Cover</a></h4>
                            <span>Branding, Graphic Design</span>
                            <p>Curabitur blandit tempus porttitor. Donec id elit non mi porta gravida at eget metus.</p>
                        </article>
                    </div>
                </section>
            </div>
            <footer>
                <div class="footer" data-flex="stripe w" data-flex-480="vstripe">
                    <div>
                        <h4>get in touch</h4>
                        <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. </p>
                        <div data-childs>
                            <address><i class="icon-location"></i>Moonshine Street No: 14/05<br> Light City, Jupiter</address>
                            <span><i class="icon-phone"></i>0247 541 65 87</span>
                            <span><i class="icon-mail"></i><a href="mailto:support@longwave.com">support@&shy;longwave.com</a></span>
                        </div>
                    </div>
                    <div>
                        <h4>about us</h4>
                        <p>Aenean lacinia bibendum nulla sed leo posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper metus auctor fringilla. Nullam quis risus.</p>
                        <p>Vestibulum id ligula porta  euismod semper. Maecenas faucibus mollis.Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                    </div>
                    <div>
                        <h4>popular posts</h4>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum dolor auctor tellus commodo<br><time>14 Nov, 2012</time></p>
                        <p>Scelerisque nisl consectetur +et.<br><time>22 May, 2012</time></p>
                        <p>Pellentesque ornare sem lacinia quam venenatis vestibulum, fusce dapibus.<br><time>15 July, 2012</time></p>
                    </div>
                </div>
                <div class="copyright">
                    <span>&copy; 2013 Seabird. All Rights Reserved.</span>
                </div>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>