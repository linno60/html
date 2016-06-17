<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Skybox</title>
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
                <div class="lwrap">
                    <div data-flex="axis">
                        <a href="/" title="Return to the homepage" id="logo">
                            <img src="/images/logo.png" width="141" height="28" alt="Skybox">
                        </a>
                        <div class="links-social" data-flex="end w" data-childs="-center center">
                            <a href="#"><i class="icon-rss"></i></a>
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-tw"></i></a>
                            <a href="#"><i class="icon-db"></i></a>
                            <a href="#"><i class="icon-pin"></i></a>
                        </div>
                    </div>
                    <nav class="links-nav" data-flex="-center w" data-flex-480="-center center w">
                        <a href="#" class="active">home</a><div></div>
                        <a href="#">about</a><div></div>
                        <a href="#">portfolio</a><div></div>
                        <a href="#">services</a><div></div>
                        <a href="#">contact</a>
                    </nav>
                    <figure class="banner"><img src="/images/slider.png" width="940" height="470" alt=""></figure>
                </div>
            </header>
            <div class="lwrap works">
                <h3 class="title">What We Do</h3>
                <div data-flex="stripe w">
                    <article>
                        <h4 data-flex="-center"><div class="lbl lbl-default"><i class="icon-comp"></i></div>Web Design</h4>
                        <p>Aenean leo quam. Pellentesque sem ueornare lacinia venenatis vestibulum, maecenas sed diam eget risus varius blandit sit amet magna.</p>
                    </article>
                    <article>
                        <h4 data-flex="-center"><div class="lbl lbl-default"><i class="icon-design"></i></div>Graphic Design</h4>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus.</p>
                    </article>
                    <article>
                        <h4 data-flex="-center"><div class="lbl lbl-default"><i class="icon-film"></i></div>Motion Graphic</h4>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui. Sed posuere consectetur.</p>
                    </article>
                    <article>
                        <h4 data-flex="-center"><div class="lbl lbl-default"><i class="icon-camera"></i></div>Photography</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis.</p>
                    </article>
                    <article>
                        <h4 data-flex="-center"><div class="lbl lbl-default"><i class="icon-pacman"></i></div>Phone Games</h4>
                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum., commodo cursus magna, vel scelerisque.</p>
                    </article>
                    <article>
                        <h4 data-flex="-center"><div class="lbl lbl-default"><i class="icon-brush"></i></div>Illustration</h4>
                        <p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet risus porta.</p>
                    </article>
                </div>
            </div>
            <div class="projects">
                <div class="lwrap">
                    <div class="hdr" data-flex="axis">
                        <h3 class="title">Latest Stuff from Our Projects</h3>
                        <div data-flex>
                            <a href="#" class="btn btn-thumb"><i class="icon-prev"></i></a>
                            <a href="#" class="btn btn-thumb"><i class="icon-next"></i></a>
                        </div>
                    </div>
                    </h3>
                </div>
                <div data-flex="stripe">
                    <figure><img src="/images/img5.png" width="216" height="250" alt=""></figure> 
                    <figure class="hidden-lg"><img src="/images/img1.png" width="290" height="250" alt=""></figure>
                    <figure class="hidden-md"><img src="/images/img2.png" width="370" height="250" alt=""></figure>
                    <figure class="hidden-sm"><img src="/images/img3.png" width="220" height="250" alt=""></figure>
                    <figure><img src="/images/img4.png" width="260" height="250" alt=""></figure>
                    <figure><img src="/images/img5.png" width="216" height="250" alt=""></figure> 
                    <figure><img src="/images/img5.png" width="216" height="250" alt=""></figure> 
                </div>
            </div>
            <div class="lwrap">
                <div class="blogs">
                    <h3 class="title">Recent Blogs</h3> 
                    <div data-flex="stripe" data-flex-480="vstripe">
                        <article>
                            <h4 data-flex="-center"><time class="lbl lbl-default" data-flex="col"><strong>21</strong><small>sep</small></time><span>Magna Mollis Ultricies Euismod Fermentum Elit</span></h4>
                            <figure><img src="/images/blog-img.png" width="292" height="140" alt=""></figure>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat ante venenatis dapibus posuere velit aliquet.</p>
                        </article>
                        <article>
                            <h4 data-flex="-center"><time class="lbl lbl-default" data-flex="col"><strong>20</strong><small>sep</small></time><span>Ornare Nullam Risus Mollis Parturient</span></h4>
                            <figure><img src="/images/blog-img.png" width="292" height="140" alt=""></figure>
                            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, <a href="#">vestibulum</a> at eros.</p>
                        </article>
                        <article>
                            <h4 data-flex="-center"><time class="lbl lbl-default" data-flex="col"><strong>18</strong><small>sep</small></time><span>Euismod Nullam Vehicula Elit Venenatis Consectetur</span></h4>
                            <figure><img src="/images/blog-img.png" width="292" height="140" alt=""></figure>
                            <p>Praesent commodo cursus magna, scelerisque nisl consectetur et. Sed posuere consectetur at lobortis. Duis mollis, non commodoelit .</p>
                        </article>
                    </div>
                </div>
                <div class="testimonials" data-flex="stripe" data-flex-480="vstripe">                
                    <div>
                        <h3 class="title">Where You Can Find Us</h3>
                        <div class="tabs" data-tabs>
                            <div class="tablist">
                                <a href="#tab1" class="active">Twitter</a>
                                <a href="#tab2">Facebook</a>
                                <a href="#tab3">Flickr</a>
                            </div>
                            <div class="tabset">
                                <a href="#tab1" class="active">Twitter</a>
                                <div id="tab1" class="tabpanel active">
                                    <div class="tweet-item">
                                        <p>Check out this great <a href="#">#themeforest</a> item 'Ikaros - Responsive WordPress Business & Portfolio' <a href="#">http://t.co/w48dXW3I</a></p>
                                        <time>10:16 AM yesterday</time>
                                    </div>
                                    <div class="tweet-item">
                                        <p>Ikaros WP has crossed 100 sales in less than a week. Check it out here in case you missed it: <a href="#">http://elemisfreebies.com/ikaros-wp</a></p>
                                        <time>11:11 AM yesterday</time>
                                    </div>
                                    <div class="tweet-item">
                                        <p>Just released Glisseo, our latest multipurpose responsive HTML template: <a href="#">http://elemisfreebies.com/glisseo</a></p>
                                        <time>09:14 AM yesterday</time>
                                    </div>
                                </div>
                                <a href="#tab2">Facebook</a>
                                <div id="tab2" class="tabpanel">Tab number 2</div>
                                <a href="#tab3">Flickr</a>
                                <div id="tab3" class="tabpanel">Tab number 3</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="title">Testimonials</h3>
                        <div>
                            <blockquote>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Integer posuere erat a ante venenatis.</p>
                                <cite>by Ted Mosby</cite>
                            </blockquote>
                            <blockquote>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                                <cite>by Jamie Lee</cite>
                            </blockquote> 
                        </div>
                    </div>   
                </div>
                <div class="about">
                    <div class="hdr" data-flex="axis">
                        <h3 class="title">General Process of Our Works</h3>
                        <div data-flex>
                            <a href="#" class="btn btn-thumb"><i class="icon-prev"></i></a>
                            <a href="#" class="btn btn-thumb"><i class="icon-next"></i></a>
                        </div>
                    </div>
                    <div data-flex="-start between" data-flex-480="vstripe">
                        <ul class="links-default">
                            <li><a href="#"><span>01.&nbsp;</span>Inceptos Parturient</a></li>
                            <li><a href="#"><span>02.&nbsp;</span>Amet Parturient Cursus</a></li>
                            <li><a href="#"><span>03.&nbsp;</span>Magna Vulputate Adipiscing</a></li>
                            <li><a href="#"><span>04.&nbsp;</span>Nibh Consectetur Dolor</a></li>
                            <li><a href="#"><span>05.&nbsp;</span>Dolor Vehicula Cras</a></li>
                        </ul>
                        <article class="about-content">
                            <h3>Inceptos Parturient</h3>
                            <span>Pellentesque Aenean Vehicula Ullamcorper NibhNulla vitae libero, a pharetra augue. Donec sed odio dui. Cum sociis natoque penatibus et magnis.</span>
                            <div>
                                <figure><img src="/images/article-img.png" width="200" height="150" alt=""></figure>
                                <h4>Vestibulum Cras Tortor Ullamcorper</h4>
                                <p>Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec sed odio dui. Maecenas faucibus mollis interdum.</p>                        
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe w" data-flex-480="vstripe">
                <div>
                    <h5>Popular Posts</h5>
                    <div class="post">
                        <p><a href="#">Vivamus sagittis lacus vel augue laoreet rutrum dolor auctor.</a></p>
                        <time>14 Nov, 2012</time>
                    </div>
                    <div class="post">
                        <p><a href="#">Scelerisque nisl consectetur et.</a></p>
                        <time>22 May, 2012</time>
                    </div>
                    <div class="post">
                        <p><a href="#">Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce </a></p>
                        <time>15 July, 2012</time>
                    </div>
                </div>
                <div>
                    <h5>Twitter</h5>
                    <div class="tweet">
                        <p><a href="#">Praesent commodo cursus magna Morbi leo risus nulla consectetur.</a> <time> <span> - </span>21 hours ago</time></p>                        
                    </div>
                    <div class="tweet">
                        <p><a href="#">Vestibulum id ligula porta euismod semper. auctor dolor fermentum. </a><time><span>- </span>2 days ago</time></p>                        
                    </div>
                    <div class="tweet">
                        <p><a href="#">Donec ullamcorper nulla non metus auctor. </a><time><span>- </span>3 days ago</time></p>                        
                    </div>
                </div>
                <div>
                    <h5>A little About Me</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                    <p>Donec id elit non porta gravida at eget metus. Nullam quis risus eget urna mollis ornare vel.</p>
                </div>
                <div>
                    <h5>Contact Form</h5>
                    <form action="#" method="post" data-flex="col -start">
                        <input type="text" name="input" placeholder="Your name">
                        <input type="email" name="input" placeholder="Your e-mail">
                        <textarea placeholder="Your comment"></textarea>
                        <button><span class="btn btn-submit">Submit</span></button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <div class="lwrap" data-flex="row-center">
                    <span>&copy; 2012 Skybox. Theme by <a href="#"> elemis</a></span>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>