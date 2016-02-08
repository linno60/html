<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Zeences</title>
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
            var LAYOUT_WIDTH = 960;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="lwrap">
            <header>
                <section data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="160" height="26" alt="Zeences">
                    </a>
                    <div class="links-social" data-flex="end w">
                        <a href="#"><i class="icon-rss"></i></a>
                        <a href="#"><i class="icon-fl"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-db"></i></a>
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-in"></i></a>
                        <a href="#"><i class="icon-gp"></i></a>
                    </div>
                </section>
                <nav class="links-nav" data-flex="w" data-childs="-center center">
                    <a href="#" class="active">Home</a>
                    <a href="#">Portfolio</a>
                    <a href="#">Gallery</a>
                    <a href="#">Service</a>
                    <a href="#">Blog</a>                    
                    <a href="#">Contact</a>
                </nav>
            </header>
            <div class="content">
                <section class="slider" data-flex="col -center">
                    <figure><img src="/images/img1.png"></figure>
                    <div class="links-thumbs" data-flex="-center center" data-childs="-center center">
                        <a href="#"><i class="icon-prev-lg"></i></a>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"><i class="icon-next-lg"></i></a>
                    </div>
                    <p>Aenean fringilla aliquam est, a porttitor arcu euismod et. Maecenas rutrum erat at arcu porta interdum. Cras convallis ligula ac risus imperdiet placerat.</p>
                </section>
                <section class="services">
                    <h3>what we do</h3>
                    <div data-flex="stripe" data-flex-480="vstripe">                           
                        <p>Vivamus sodales pharetra libero, a tincidunt nisi condimentum a. Quisque non sodales nislero. Integer a tellus eget arcu fringilla molestie quis vel eros. Praesent fermentum vulputate purusa ornare. Vivamus imperdiet, quam et adipiscing placerat, nibh odio scelerisque risus, vitaere accumsan mi justo et quam. Pellentesque quis felis quis tortor porttitor lobortis nec ac risus.</p>
                        <ul class="list-default" data-childs>
                            <li>Vivamus at magna non ipsum.</li>
                            <li>Etiam pharetra pretium eros.</li>
                            <li>Curabitur porttitor ipsum nec magna.</li>
                            <li>Maecenas cursus arcu a nulla tristique.</li>
                        </ul>
                    </div>
                    <div class="grid" data-flex="stripe w" data-childs="col -center">
                        <article>
                            <i class="icon-monitor"></i>
                            <h4>web design</h4>
                            <p>Vivamus soder pharetra libero atincidunt, nisi condimentum Quisque non sodales nislero.</p>
                        </article>
                        <article>
                            <i class="icon-photo"></i>
                            <h4>photography</h4>
                            <p>Vivamus soder pharetra libero atincidunt, nisi condimentum Quisque non sodales nislero.</p>
                        </article> 
                        <article>
                            <i class="icon-movie"></i>
                            <h4>motion graphic</h4>
                            <p>Vivamus soder pharetra libero atincidunt, nisi condimentum Quisque non sodales nislero.</p>
                        </article> 
                        <article>
                            <i class="icon-graph"></i>
                            <h4>optimization</h4>
                            <p>Vivamus soder pharetra libero atincidunt, nisi condimentum Quisque non sodales nislero.</p>
                        </article> 
                    </div>
                </section>
                <section class="works-slider">
                    <div data-flex="stripe">
                        <h3>latest works</h3>
                        <div data-flex>
                            <a href="#" class="btn btn-thumb"><i class="icon-prev-sm"></i></a>
                            <a href="#" class="btn btn-thumb"><i class="icon-next-sm"></i></a>
                        </div>
                    </div>
                    <div class="grid" data-flex="stripe w">
                        <figure><img src="/images/img2.png"></figure>
                        <figure><img src="/images/img2.png"></figure>
                        <figure><img src="/images/img2.png"></figure>
                        <figure class="hidden"><img src="/images/img2.png"></figure>
                        <figure class="hidden"><img src="/images/img2.png"></figure>
                    </div>
                </section>
                <footer data-flex="stripe w">
                    <div>
                        <h4>latest posts</h4>
                        <div data-childs="-start">
                            <div class="post">
                                <time data-flex="col -center">
                                    <span>22</span>
                                    <small>jun</small>
                                </time>
                                <p><a href="#">Vivamus soder pharetra libero atincidunt</a></p>
                            </div>
                            <div class="post">
                                <time data-flex="col -center">
                                    <span>14</span>
                                    <small>may</small>
                                </time>
                                <p><a href="#">Curabitur at ante sed nunc euismod sodales</a></p>
                            </div>
                            <div class="post">
                                <time data-flex="col -center">
                                    <span>11</span>
                                    <small>may</small>
                                </time>
                                <p><a href="#">Nulla euismod augue sed ante vestibulum</a></p>
                            </div>
                            <div class="post">
                                <time data-flex="col -center">
                                    <span>08</span>
                                    <small>apr</small>
                                </time>
                                <p><a href="#">Sed purus neque, consequat eget mattis </a></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4>flickr</h4>
                        <div class="grid" data-flex="w">
                            <a href="#"><img src="/images/img3.png"></a>
                            <a href="#"><img src="/images/img3.png"></a>
                            <a href="#"><img src="/images/img3.png"></a>
                            <a href="#"><img src="/images/img3.png"></a>
                            <a href="#"><img src="/images/img3.png"></a>
                            <a href="#"><img src="/images/img3.png"></a>
                            <a href="#"><img src="/images/img3.png"></a>
                            <a href="#"><img src="/images/img3.png"></a>
                            <a href="#"><img src="/images/img3.png"></a>
                        </div>
                    </div>
                    <div>
                        <h4>twitter</h4>
                        <ul class="list-default" data-childs>
                            <li><a href="#">Vivamus soder pharetra libero atincidunt Curabitur at ante sed nunc euismod sodales.</a></li>
                            <li><a href="#">Vivamus soder pharetra libero atincidunt Curabitur at ante sed nunc euismod sodales.</a></li>
                            <li><a href="#">Vivamus soder pharetra libero atincidunt Curabitur at ante sed nunc euismod sodales.</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>contact form</h4>
                        <form action="#" method="post">
                            <input name="input" type="text" placeholder="Name">
                            <input name="input" type="email" placeholder="Email">
                            <textarea placeholder="Message"></textarea>
                            <div>
                                <button><span class="btn btn-default">Submit</span></button>
                            </div>
                        </form>
                    </div>
                </footer>
            </div>
            <section class="copyright" data-flex="-center center">
                <span>&copy; 2011 Zeences Design. All Right Reserved.</span>
            </section>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>