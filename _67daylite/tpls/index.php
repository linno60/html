<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Daylite</title>
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
            var LAYOUT_WIDTH = 1220;
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
                        <img src="/images/logo.png" width="109" height="37" alt="Daylite">
                    </a>
                    <div data-flex="-center end">
                        <nav class="links-nav" data-flex="end w">
                            <a href="#" class="active">home</a>
                            <a href="#">pages</a>
                            <a href="#">journal</a>
                            <a href="#">features</a>
                            <a href="#">contact</a>
                        </nav>
                        <div class="links-social" data-flex="end w" data-childs="-center center">
                            <a href="#" class="rss"><i class="icon-rss"></i></a>
                            <a href="#" class="fb"><i class="icon-fb"></i></a>
                            <a href="#" class="tw"><i class="icon-tw"></i></a>
                            <a href="#" class="db"><i class="icon-db"></i></a>
                            <a href="#" class="pin"><i class="icon-pin"></i></a>
                        </div> 
                    </div>
                </div>
            </header> 
            <div class="slider">
                <div class="lwrap" data-flex="stripe" data-flex-480="vaxis r">
                    <div>
                        <h1>Purus Venenatis Ligula Mattis Sem Bibendum Elit</h1>
                        <p>Aenean lacinia bibendum nulla sed consectetur, tristique magna curabitur blandit tempus porttitor ultricies vehicula.</p>
                        <a href="#" class="btn btn-default">Purchase Now</a>
                    </div>
                    <div>
                        <figure><img src="/images/pad.png" width="300" height="384" alt=""></figure>
                    </div>
                </div>
            </div>
            <div class="preview">
                <div class="lwrap">
                    <h2 class="title">Nulla vitae elit libero, a pharetra augue curabitur blandit tempus porttitor.</h2>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
                    <a href="#" class="btn btn-default">Purchase Now</a>
                    <a href="#" class="btn btn-default">See Pricing</a>
                </div>
            </div>
            <div class="lwrap">
                <div class="features">
                    <h2>What is Our Process</h2>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean lacinia bibendum nulla sed consectetur posuere.</p>
                    <div data-flex="stripe w" data-flex-800="around w" data-childs="col -center">
                        <article>
                            <div class="lbl lbl-default"><i class="icon-digg"></i></div>
                            <h3><span>1. </span>Concepting</h3>
                            <p>Vestibulum id ligula porta felis euismod semper porta.</p>
                        </article>
                        <i class="icon-arrow"></i>
                        <article>
                            <div class="lbl lbl-default"><i class="icon-imac"></i></div>
                            <h3><span>2. </span>Praparing</h3>
                            <p>Aenean eu leo quam ornare sem lacinia qu venenatis vestibulum. </p>
                        </article>
                        <i class="icon-arrow"></i>
                        <article>
                            <div class="lbl lbl-default"><i class="icon-pacman"></i></div>
                            <h3><span>3. </span>Retouching</h3>
                            <p>Praesent  magnale scelerisque nisl consectetur e nulla vitae. </p>
                        </article>
                        <i class="icon-arrow"></i>
                        <article>
                            <div class="lbl lbl-default"><i class="icon-camera"></i></div>
                            <h3><span>4. </span>Finalizing</h3>
                            <p>Maecenas diam eget risus varius blandit sit amet non magna.</p>
                        </article>
                        <i class="icon-arrow"></i>
                        <article>
                            <div class="lbl lbl-default"><i class="icon-leaf"></i></div>
                            <h3><span>5. </span>Packaging</h3>
                            <p>Morbi risus porta ac consectetur lacina, vestibulum at eros. </p>
                        </article>
                    </div>
                </div>
                <div class="portfolio">
                    <h2>Our Latest Stuff</h2>
                    <p>Etiam porta sem malesuada magna mollis euismod. Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
                    <div data-flex="stripe w">
                        <figure>
                            <div><img src="/images/img.png" width="276" height="210" alt=""></div>
                            <figcaption>
                                <h6>Porta Justo Ullacomper</h6>
                                <span>Graphic Design, Illustration</span>
                            </figcaption>
                        </figure>
                        <figure>
                            <div><img src="/images/img.png" width="276" height="210" alt=""></div>
                            <figcaption>
                                <h6>Vestibulum Aenean Sem</h6>
                                <span>Motion Graphic</span>
                            </figcaption>
                        </figure>
                        <figure>
                            <div><img src="/images/img.png" width="276" height="210" alt=""></div>
                            <figcaption>
                                <h6>Ridiculus Sollcitudin Tortor</h6>
                                <span>Retouch, Photography</span>
                            </figcaption>
                        </figure>
                        <figure>
                            <div><img src="/images/img.png" width="276" height="210" alt=""></div>
                            <figcaption>
                                <h6>Consectetur Tortor Ligula</h6>
                                <span>Web Design, Responsive</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div data-flex="stripe" data-flex-480="vstripe">
                    <div class="recent">
                        <h2>Recent Posts</h2>
                        <article data-flex="-start">
                            <time class="lbl lbl-date"><strong>23</strong>jan</time>
                            <div>
                                <h4>Aenean Adipiscing Etiam Vestibulum</h4>
                                <div class="links-post" data-flex="w" data-childs="-center">
                                    <a href="#">Photography</a>,&nbsp;<a href="#">journal</a><span>|</span>
                                    <a href="#">9 Comments</a><span>|</span>
                                    <a href="#">21 <i class="icon-like"></i></a>
                                </div>
                                <p>Etiam porta sem malesuada magna lorem etor mollis euismod. Aenean leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                <a href="#" class="more">Continue Reading <span>→</span></a>
                            </div>
                        </article>
                        <article data-flex="-start">
                            <time class="lbl lbl-date"><strong>21</strong>jan</time>
                            <div>
                                <h4>Commodo Sem Inceptos Fusce</h4>
                                <div class="links-post" data-flex="w" data-childs="-center">
                                    <a href="#">Retouch</a>,&nbsp;<a href="#">Photography</a><span>|</span>
                                    <a href="#">11 Comments</a><span>|</span>
                                    <a href="#">13 <i class="icon-like"></i></a>
                                </div>
                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio diam eget risus varius blandit magna.</p>
                                <a href="#" class="more">Continue Reading <span>→</span></a>
                            </div>
                        </article>
                    </div>
                    <div class="about">
                        <h2>A Little About Us</h2>
                        <p>Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit. Sed posuere consectetur est at lobortis.</p>
                        <p>Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                        <ul class="list-default" data-childs>
                            <li>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</li>
                            <li>Eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare .</li>
                            <li>Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <blockquote data-flex="col -center">
                <span>”</span>
                <q>Maecenas faucibus mollis interdum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et consectetur adipiscing elit.</q>
                <cite>by Coriss Ambady</cite>
            </blockquote>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe w" data-flex-480="vstripe">
                <div data-flex="col -start">
                    <h5>Get In Touch</h5>
                    <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. </p>
                    <address>Moonshine Street No: 14/05<br> Light City, Jupiter</address>
                    <a href="tel:02475416587" class="tel">0247 541 65 87</a>
                    <a href="mailto:support@longwave.com" class="mail">support@&shy;longwave.com</a>
                </div>
                <div>
                    <h5>Twitter</h5>
                    <p class="tweet"><a href="#">Aenean lacinia bibendum nulla sed leo posuere erat a ante venenatis dapibus posuere velit aliquet.</a></p>
                    <p class="tweet"><a href="#">Donec ullamcorper metus auctor fringilla. Nullam quis risus eget.</a></p>
                    <p class="tweet"><a href="#">Vestibulum id ligula porta  euismod semper. Maecenas faucibus mollis.</a></p>
                </div>
                <div>
                    <h5>Popular Posts</h5>
                    <p class="popular" data-flex="col"><a href="#">Vivamus sagittis lacus vel augue laoreet rutrum dolor auctor.</a><time>14 Nov, 2012</time></p>
                    <p class="popular" data-flex="col"><a href="#">Scelerisque nisl consectetur et.</a><time>22 May, 2012</time></p>
                    <p class="popular" data-flex="col"><a href="#">Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce </a><time>15 July, 2012</time></p>                        
                </div>
                <div>
                    <h5>Contact Form</h5>
                    <form action="#" method="post">
                        <input type="text" name="input" placeholder="Your Name">
                        <input type="email" name="input" placeholder="Your Email">
                        <textarea placeholder="Your Message"></textarea>
                        <button><span class="btn btn-submit">Submit</span></button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <div class="lwrap">
                    <span>&copy; 2013 Daylite. All Rights Reserved.</span>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>