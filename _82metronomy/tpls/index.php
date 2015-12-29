<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Metronomy</title>
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
        <div class="lwrap" data-flex="stripe" data-flex-480="vstripe">
            <aside class="sidebar" data-flex-480="stripe w">
                <div data-flex="-center center">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="158" height="19" alt="">
                    </a>
                </div>
                <nav class="links-nav" data-flex="col">
                    <a href="#" class="active">home</a>
                    <a href="#">about us</a>
                    <a href="#">our works</a>
                    <a href="#">services</a>
                    <a href="#">journal</a>
                    <a href="#">contact us</a>
                </nav>
                <div class="popular">
                    <h2 class="title" data-flex="axis">popular posts</h2>
                    <article data-flex="-start">
                        <figure><img src="/images/img1.png" width="45" height="45" alt=""></figure>
                        <p><a href="#">Magna Ullamcorper Dolor Fermentum</a></p>
                    </article>
                    <article data-flex="-start">
                        <figure><img src="/images/img2.png" width="45" height="45" alt=""></figure>
                        <p><a href="#">Commodo Fusce Dolor Adipiscing</a></p>
                    </article>
                    <article data-flex="-start">
                        <figure><img src="/images/img3.png" width="45" height="45" alt=""></figure>
                        <p><a href="#">Quam Inceptos Lorem Tortor Risus</a></p>
                    </article>
                </div>
                <div class="search">
                    <h2 class="title" data-flex="axis">search</h2>
                    <input type="search" name="input" placeholder="Search">
                </div>
                <div class="categories">
                    <h2 class="title" data-flex="axis">categories</h2>
                    <div class="links-categories" data-flex="col -start">
                        <a href="#">Commodo Fusce (12)</a>
                        <a href="#">Dolor Adipiscing (45)</a>
                        <a href="#">Quam Inceptos (17)</a>
                        <a href="#">Lorem Tortor Risus (24)</a>
                        <a href="#">Elit Vestibulum Justo (32)</a>
                        <a href="#">Egestas Inceptos Lorem (21)</a>
                    </div>
                </div>
                <div class="sponsors">
                    <h2 class="title" data-flex="axis">sponsors</h2>
                    <figure><img src="/images/img4.png" width="170" height="110" alt=""></figure>
                    <figure><img src="/images/img5.png" width="170" height="110" alt=""></figure>
                </div>                
            </aside>
            <div class="content">
                <div data-flex="axis">
                    <h1>Hi! My Name Is Metronomy. Welcome to my Website..</h1>
                    <div class="links-social" data-flex="end w">
                        <a href="#"><i class="icon-rss"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-add"></i></a>
                        <a href="#"><i class="icon-fl"></i></a>
                        <a href="#"><i class="icon-in"></i></a>
                    </div>
                </div>
                <div class="slider">
                    <figure><img src="/images/slider.png" width="720" height="350" alt=""></figure>
                    <div data-flex>
                        <a href="#" class="btn btn-thumb"><i class="icon-prev"></i></a>
                        <a href="#" class="btn btn-thumb"><i class="icon-next"></i></a>
                    </div>
                </div>
                <div>
                    <div class="title-wrap" data-flex="axis">
                        <h2 class="title" data-flex="axis">recent works</h2>
                        <div data-flex>
                            <a href="#" class="btn btn-thumb"><i class="icon-prev"></i></a>
                            <a href="#" class="btn btn-thumb"><i class="icon-next"></i></a>
                        </div>
                    </div>
                    <div class="grid" data-flex="stripe" data-flex-640="vstripe">
                        <article>
                            <figure><img src="/images/img6.png" width="340" height="250" alt=""></figure>
                            <h3>Vestibulum Euismod Commodo Aenean</h3>
                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                        </article>
                        <div data-flex="stripe" data-flex-640="vstripe">
                            <article>
                                <figure><img src="/images/img7.png" width="340" height="250" alt=""></figure>
                                <h3>Bibendum Fringilla</h3>
                                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Vestibulum id ligula.</p>
                            </article>
                            <article>
                                <figure><img src="/images/img8.png" width="340" height="250" alt=""></figure>
                                <h3>Sem Fusce Ultricies</h3>
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh, ut fermentum massa justo sit amet risus. </p>
                            </article>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="title-wrap" data-flex="axis">
                        <h2 class="title" data-flex="axis">recent posts</h2>
                        <div data-flex>
                            <a href="#" class="btn btn-thumb"><i class="icon-prev"></i></a>
                            <a href="#" class="btn btn-thumb"><i class="icon-next"></i></a>
                        </div>
                    </div>
                    <div class="grid" data-flex="stripe" data-flex-640="vstripe">
                        <article>
                            <figure><img src="/images/img9.png" width="340" height="250" alt=""></figure>
                            <h3>Vestibulum Euismod Commodo Aenean</h3>
                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                        </article>
                        <div data-flex="stripe" data-flex-640="vstripe">
                            <article>
                                <figure><img src="/images/img10.png" width="340" height="250" alt=""></figure>
                                <h3>Bibendum Fringilla</h3>
                                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Vestibulum id ligula.</p>
                            </article>
                            <article>
                                <figure><img src="/images/img11.png" width="340" height="250" alt=""></figure>
                                <h3>Sem Fusce Ultricies</h3>
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh, ut fermentum massa justo sit amet risus. </p>
                            </article>
                        </div>
                    </div>
                </div>
                <footer data-flex="stripe">
                    <span>&copy; 2011 Metronomy. All Rights Reserved.</span>
                    <a href="#" class="btn btn-anchor"><i class="icon-top"></i></a>
                </footer>
            </div>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>