<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Marble</title>
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
            var LAYOUT_WIDTH = 1190;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <section class="lwrap" data-flex="axis">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="122" height="29" alt="Marble">
                </a>
                <nav class="links-nav" data-flex="end w">
                    <a href="#" class="active">home</a>
                    <a href="#">about</a>
                    <a href="#">journal</a>
                    <a href="#">service</a>
                    <a href="#">features</a>
                    <a href="#">contact</a>
                </nav>
            </section>
        </header>
        <section class="slider" data-flex="col -center center">
            <hgroup>
                <h1>We are a digital & branding agency based in London.</h1>
                <h2>We love to turn great ideas into beautiful products.</h2>                
            </hgroup>
            <a href="#" class="btn btn-default">see portfolio</a>
        </section>
        <section class="lwrap">
            <div class="services" data-flex="around w" data-childs="col -center" data-flex-480="vstripe">
                <article>
                    <figure class="lbl lbl-default"><i class="icon-lamp"></i></figure>
                    <h5>Pellentesque</h5>
                    <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus. </p>
                </article>
                <article>
                    <figure class="lbl lbl-default"><i class="icon-clock"></i></figure>
                    <h5>Consectetur</h5>
                    <p>Vestibulum id ligula porta  euismod semper. Aenean lacinia bibendum nulla sed consectetur dui.</p>
                </article>
                <article>
                    <figure class="lbl lbl-default"><i class="icon-bottle"></i></figure>
                    <h5>Tristiquet</h5>
                    <p>Fusce dapibus, cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo risus.</p>
                </article>
                <article>
                    <figure class="lbl lbl-default"><i class="icon-star"></i></figure>
                    <h5>Fermentum</h5>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum sagittis lacus mollis.</p>
                </article>
            </div>
            <div class="works">
                <h3>our latest works</h3>
                <div data-flex="stripe" data-flex-480="vstripe">
                    <article data-flex="col">
                        <figure data-flex>
                            <img src="/images/img1.png">
                        </figure>
                        <h4><a href="#">Nobis Business Card</a></h4>
                        <small>Business Card, Graphic</small>
                        <p>Sed posuere consectetur est at lobortis. Porta sagittis lacus vel augue laoreet rutrum.</p>
                    </article>
                    <article data-flex="col">
                        <figure data-flex>
                            <img src="/images/img2.png">
                        </figure>
                        <h4><a href="#">New Fun Project</a></h4>
                        <small>Web Design, Application</small>
                        <p>Nulla vitae elit libero, a pharetra augue. Donec sed odio dui. Vestibulum id ligula porta felis.</p>
                    </article>
                    <article data-flex="col">
                        <figure data-flex>
                            <img src="/images/img3.png">
                        </figure>
                        <h4><a href="#">Passionaries Branding Cover</a></h4>
                        <small>Branding, Graphic Design</small>
                        <p>Curabitur blandit tempus porttitor. Donec id elit non mi porta gravida at eget metus.</p>
                    </article>
                </div>
            </div>
        </section>
        <blockquote data-flex="col -center center"><q>&rdquo;</q><p>Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus erat porttitor.</p></blockquote>
        <footer>
            <div class="lwrap" data-flex="stripe w" data-flex-480="vstripe">
                <div>
                    <h5>get in touch</h5>
                    <span>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. </span>
                    <address data-flex="-start"><i class="icon-location"></i><span>Moonshine Street No: 14/05 Light City, Jupiter</span></address>
                    <a href="tel:0247 541 65 87"><i class="icon-phone"></i>0247 541 65 87</a>
                    <a href="mailto:support@longwave.com" data-flex="-start"><i class="icon-letter"></i>support@&shy;longwave.com</a>
                </div>
                <div>
                    <h5>twitter</h5>
                    <div data-flex="col -start" class="links-tweet">
                        <span><a href="#">Aenean lacinia bibendum nulla sed leo posuere erat a ante venenatis dapibus posuere velit aliquet.</a></span>
                        <span><a href="#">Donec ullamcorper metus auctor fringilla. Nullam quis risus eget.</a></span>
                        <span><a href="#">Vestibulum id ligula porta  euismod semper. Maecenas faucibus mollis.</a></span>
                    </div>                       
                </div>
                <div>
                    <h5>popular posts</h5>
                    <div data-childs="col" class="posts">
                        <div>
                            <a href="#">Vivamus sagittis lacus vel augue laoreet rutrum dolor auctor.</a>
                            <time>14 Nov, 2012</time>
                        </div> 
                        <div>
                            <a href="#">Scelerisque nisl consectetur et.</a>
                            <time>22 May, 2012</time>
                        </div> 
                        <div>
                            <a href="#">Pellentesque ornare sem lacinia quam venenatis vestibulum.</a>
                            <time>15 July, 2012</time>
                        </div> 
                    </div>
                </div>
                <div>
                    <h5>about us</h5>
                    <p>Vestibulum id ligula porta felis euismod semper. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus curabitur blandit tempus.</p>
                </div>
                <div>
                    <span>&copy; 2013 Marble. All rights reserved. Theme by elemis.</span>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>