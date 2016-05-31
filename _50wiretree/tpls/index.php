<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Wiretree</title>
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
            var LAYOUT_WIDTH = 1204;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="lwrap">
                <div data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="114" height="52" alt="Wiretree">
                    </a>
                    <nav class="links-nav" data-flex="end w" data-childs="-center center">
                        <a href="#" class="active">home</a>
                        <a href="#">about</a>
                        <a href="#">portfolio</a>
                        <a href="#">service</a>
                        <a href="#">blog</a>                    
                        <a href="#">contact</a>
                    </nav>
                </div>
                <h1>We are <strong>Wiretree</strong>, digital & branding agency based in Jupiter and we would love to turn ideas into beautiful things<span>.</span></h1>
            </div>            
        </header>
        <div class="lwrap content">
            <div class="slider" data-flex="col -start">
                <hgroup class="hgroup" data-flex="col -start">
                    <h2>Risus Dolor Fermentum Aenean Fusce</h2>
                    <h4>Mollis Elit Egestas Euismod Bibendum</h4>
                </hgroup>
                <figure><img src="/images/slider.png" width="1120" height="550" alt=""></figure>
            </div> 
            <div class="offer" data-flex="vaxis">
                <h2 data-flex="col -center">We offer great pricess for your business</h2>
                <hr>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                <a href="#" class="btn btn-default">See All Prices</a>
            </div>
            <div class="services">
                <h2>What Do We Provide</h2>
                <p>Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <div data-flex="stripe w" data-childs="-start" data-flex-640="vstripe">
                    <article>
                        <i class="icon-map"></i>
                        <div>
                            <h3>Logistic Solution</h3>
                            <hr>
                            <p>Donec elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum ligula porta felis cras ridiculus dapibus, aenean eu leo quam.</p>
                        </div>
                    </article>
                    <article>
                        <i class="icon-case"></i>
                        <div>
                            <h3>Money Protection</h3>
                            <hr>
                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta.</p>
                        </div>
                    </article>
                    <article>
                        <i class="icon-laptop"></i>
                        <div>
                            <h3>Strategic Development</h3>
                            <hr>
                            <p>Mollis est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem elit. Aenean lacinia bibendum nulla consectetur. Integer posuere erat a ante venenatis dapibus.</p>
                        </div>
                    </article>
                    <article>
                        <i class="icon-basket"></i>
                        <div>
                            <h3>Marketing Management</h3>
                            <hr>
                            <p>Morbi leo risus, porta ac consectetur, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur. </p>
                        </div>
                    </article>
                </div>                    
            </div>
            <div class="about" data-flex="stripe w" data-flex-640="vstripe">
                <div>
                    <h4>Latest Posts</h4>
                    <hr>
                    <div class="post clearfix">
                        <div>
                            <figure><img src="/images/img.png"></figure>
                            <time class="lbl lbl-default">21 jan</time>
                        </div>
                        <h5><a href="#">Tortor Purus Mollis Quam</a></h5>
                        <p>Praesent commodo cursus magna, Maecenas faucibus mollis interdum. Praesent commodo cursus magna</p>
                    </div>
                    <div class="post clearfix">
                        <div>
                            <figure><img src="/images/img.png"></figure>
                            <time class="lbl lbl-default">21 jan</time>
                        </div>
                        <h5><a href="#">Fringilla Venenatis Cursus</a></h5>
                        <p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>     
                </div>
                <div>
                    <h4>Why Choose Us</h4>
                    <hr>
                    <p>Duis mollis, est non commodo luctus, nisi porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue.</p>
                    <ul class="list-default">
                        <li>Donec ullamcorper nulla non metus auctor.</li>
                        <li>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Sed posuere consectetur.</li>
                        <li>Praesent commodo cursus magna.</li>
                        <li>Nullam id dolor id nibh ultricies vehicula ut.</li>
                    </ul>
                </div>
                <div>
                    <h4>Testimonials</h4>
                    <hr>
                    <div>
                        <blockquote data-flex="col">
                            <q>Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. </q>
                            <cite>by Ted Mosby</cite>
                        </blockquote>
                        <blockquote data-flex="col">
                            <q>Fusce dapibus, tellus ac cursus, tortor mauris condimentum nibh vitae elit libero pharetra. </q>
                            <cite>by Jamie Lee</cite>
                        </blockquote> 
                    </div>                        
                </div>
            </div>
            <footer>
                <div class="footer" data-flex="around w" data-flex-480="vstripe">
                    <div>
                        <h6>Popular Posts</h6>
                        <div class="post">
                            <p><a href="#">Vivamus sagittis lacus vel augue metus laoreet rutrum dolor auctor.</a></p>
                            <time>14 Nov, 2012</time>
                        </div>
                        <div class="post">
                            <p><a href="#">Scelerisque nisl consectetur et.</a></p>
                            <time>22 May, 2012</time>
                        </div>
                        <div class="post">
                            <p><a href="#">Pellentesque ornare sem lacinia quam venenatis vestibulum.</a></p>
                            <time>15 July, 2012</time>
                        </div>
                    </div>
                    <div>
                        <h6>Twitter</h6>
                        <div class="post">
                            <p><a href="#">Praesent commodo cursus magna Morbi leo risus nulla consectetur.</a></p>
                            <time>21 hours</time>
                        </div>
                        <div class="post">
                            <p><a href="#">Vestibulum id ligula porta euismod semper. auctor dolor fermentum. </a></p>
                            <time>2 days ago</time>
                        </div>
                        <div class="post">
                            <p><a href="#">Donec ullamcorper nulla non metus.</a></p>
                            <time>3 days ago</time>
                        </div>
                    </div>
                    <div>
                        <h6>A Little About Us</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Duis mollis, est non commodo luctus, nullam quis risus eget urna.</p>
                        <p>Donec id elit non porta gravida at eget metus. Nullam quis risus eget urna mollis ornare vel.</p>
                    </div>
                    <div class="contact">
                        <h6>Get in Touch</h6>
                        <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                        <div data-flex="col" data-childs="-start" itemscope itemtype="http://schema.org/Thing">
                            <address itemprop="address"><i class="icon-location"></i>Moonshine Street No: 14/05 Light<br> City, Jupiter</address>
                            <span itemprop="telephone"><i class="icon-phone"></i>0247 541 65 87</span>
                            <a href="mailto:support@longwave.com" itemprop="email"><i class="icon-letter"></i>support@&shy;longwave.com</a>
                        </div>                                
                    </div>
                </div>
                <div class="copyright" data-flex="axis">
                    <span>@ Wiretree. All Rights Reserved.</span>
                    <div class="links-social" data-flex="end w" data-childs="-center center">
                        <a href="#"><i class="icon-rss"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-dl"></i></a>
                        <a href="#"><i class="icon-pin"></i></a>
                        <a href="#"><i class="icon-fl"></i></a>
                        <a href="#"><i class="icon-mail"></i></a>
                    </div>
                </div>
            </footer>          
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>