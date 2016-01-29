<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pocket</title>
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
            var LAYOUT_WIDTH = 1075;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <section class="lwrap" data-flex="axis" data-flex-640="vaxis">
                <div data-flex="-center w" data-flex-640="vaxis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="122" height="38" alt="Pocket">
                    </a>
                    <nav class="links-nav" data-flex="w" data-flex-640="center w">
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <a href="#">Page Templates</a>
                        <a href="#">Shortcodes</a>
                        <a href="#">Clients</a>
                        <a href="#">Portfolio</a>
                        <a href="#">Clients</a>
                        <a href="#">Contact</a>
                    </nav>
                </div>
                <div data-flex="-center end" class="links-social">
                    <a href="#"><i class="icon-rss"></i></a>
                    <a href="#"><i class="icon-tw"></i></a>
                    <a href="#"><i class="icon-fb"></i></a>
                </div>
            </section>
            <section class="slider lwrap" data-flex="axis">
                <a href="#"><i class="icon-prev"></i></a>
                <div data-flex="stripe" data-flex-640="vstripe">
                    <div data-flex-640="vaxis">
                        <h1>Etiam Sem Nisl</h1>
                        <p>Nunc luctus porta mi a estib ulum Etiam sem nisl auctor sit amet <a href="#">molestie sed pharetra</a> a purus. Fusce massa dolor, facilisis eu sagittis elementum, portti&shy;tor id nisi. Dus vel ipsum neque !</p>
                        <a href="#" class="btn btn-default">Get Started</a>
                    </div>
                    <div data-flex="-end">
                        <figure><img src="/images/slider.png" width="494" height="261" alt=""></figure>
                        <figure><img src="/images/slidercover.png" width="511" height="305" alt=""></figure>
                    </div>
                </div>
                <a href="#"><i class="icon-next"></i></a>
            </section>       
        </header>
        <section class="content">
            <div class="lwrap">
                <blockquote>"Nunc luctus porta mi a estib ulum Etiam sem nisl auctor sit amet molestie sed pharetra a purus. Fusce massa dolor, facilisis eu sagittis elementum, porttitor id nisi. Dus vel ipsum neque."</blockquote>
                <h2>Etiam Sem Nisl</h2>
                <div data-flex="stripe" data-flex-480="vstripe">
                    <article>
                        <h3>Etiam Sem Nisl</h3>
                        <i class="icon-tools"></i>
                        <p>Integer egestas ultricies urna vitae molestie. Donec nec facilisis nisi. Vivamus tempor feugiat velit gravida vehicula. Donec faucibus pellentesque ipsum id varius. Ut rutrum metus sed neque ultricies a dictum ante sagittis. Proin in facilisis diam. Sed placerat imperdiet purus, id sollicitudin magna pretium sit amet. Vivamus orci dolor, iaculis at volutpat eget.</p>
                    </article>
                    <article>
                        <h3>Sed Pharetra a Purus</h3>
                        <i class="icon-calendar"></i>
                        <p>Integer egestas ultricies urna vitae molestie. Donec nec facilisis nisi. Vivamus tempor feugiat velit gravida vehicula. Donec faucibus pellentesque ipsum id varius. Ut rutrum metus sed neque ultricies a dictum ante sagittis. Proin in facilisis diam. Sed placerat imperdiet purus, id sollicitudin magna pretium sit amet. Vivamus orci dolor, iaculis at volutpat eget.</p>
                    </article>
                    <article>
                        <h3>Fusce Massa Dolor</h3>
                        <i class="icon-frame"></i>
                        <p>Integer egestas ultricies urna vitae molestie. Donec nec facilisis nisi. Vivamus tempor feugiat velit gravida vehicula. Donec faucibus pellentesque ipsum id varius. Ut rutrum metus sed neque ultricies a dictum ante sagittis. Proin in facilisis diam. Sed placerat imperdiet purus, id sollicitudin magna pretium sit amet. Vivamus orci dolor, iaculis at volutpat eget.</p>
                    </article>
                </div>
            </div>
        </section>
        <section class="portfolio">
            <div class="lwrap">
                <h2 data-flex="-center"><i class="icon-ribbon"></i>Porttitor Nisi</h2>
                <div data-flex="stripe w">
                    <figure>
                        <img src="/images/portfolio1.png" width="167" height="120" alt="">
                        <div class="overlay" data-flex="-center center"><a href="#"></a></div>
                    </figure>
                    <figure>
                        <img src="/images/portfolio2.png" width="168" height="120" alt="">
                        <div class="overlay" data-flex="-center center"><a href="#"></a></div>
                    </figure>
                    <figure>
                        <img src="/images/portfolio3.png" width="168" height="120" alt="">
                        <div class="overlay" data-flex="-center center"><a href="#"></a></div>
                    </figure>
                    <figure>
                        <img src="/images/portfolio4.png" width="168" height="120" alt="">
                        <div class="overlay" data-flex="-center center"><a href="#"></a></div>
                    </figure>
                    <figure class="hidden">
                        <img src="/images/portfolio5.png" width="168" height="120" alt="">
                        <div class="overlay" data-flex="-center center"><a href="#"></a></div>
                    </figure>
                </div>
            </div>
        </section>
        <section class="controls">
            <div class="lwrap" data-flex="center">
                <div class="links-controls" data-flex="-center around" data-childs="-center center">
                    <a href="#" class="active"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>  
                </div> 
            </div>
        </section>
        <section class="news">
            <div class="lwrap">
                <h2>Donec Nec Fcilitis</h2>
                <div data-flex="stripe" data-flex-480="vstripe">
                    <article>
                        <time class="lbl lbl-date" data-flex="col -stretch" data-childs="-center center">
                            <span>today</span>
                            <small>November</small>
                        </time>
                        <p>Integer egestas ultricies urna vitae molestie. Donec nec facili&shy;sis nisi. Vivamus tempor feugiat velit gravida vehicula. Donec faucibus pellentesque ipsum id varius. Ut rutrum metus sed neque ultricies a dictum ante sagittis. Proin in facilisis diam. Sed placerat imperdiet purus, id sollicitudin magna pretium sit amet. Vivamus orci dolor, iaculis at volutpat eget.</p>
                    </article>
                    <article>
                        <time class="lbl lbl-date" data-flex="col -stretch" data-childs="-center center">
                            <span>24</span>
                            <small>November</small>
                        </time>
                        <p>Integer egestas ultricies urna vitae molestie. Donec nec facili&shy;sis nisi. Vivamus tempor feugiat velit gravida vehicula. Donec faucibus pellentesque ipsum id varius. Ut rutrum metus sed neque ultricies a dictum ante sagittis. Proin in facilisis diam. Sed placerat imperdiet purus, id sollicitudin magna pretium sit amet. Vivamus orci dolor, iaculis at volutpat eget.</p>
                    </article>
                    <article>
                        <time class="lbl lbl-date" data-flex="col -stretch" data-childs="-center center">
                            <span>7</span>
                            <small>November</small>
                        </time>
                        <p>Integer egestas ultricies urna vitae molestie. Donec nec facili&shy;sis nisi. Vivamus tempor feugiat velit gravida vehicula. Donec faucibus pellentesque ipsum id varius. Ut rutrum metus sed neque ultricies a dictum ante sagittis. Proin in facilisis diam. Sed placerat imperdiet purus, id sollicitudin magna pretium sit amet. Vivamus orci dolor, iaculis at volutpat eget.</p>
                    </article>
                </div>
            </div>
        </section>
        <footer>
            <section class="lwrap" data-flex="axis" data-flex-480="vaxis">
                <div>
                    <span>All rights reserved 2012&ensp; visit our website : <a href="#">www.blugraphic.com</a>&ensp; follow us at <a href="#">twitter</a>,</span>
                    <div class="links-footer" data-flex="w" data-flex-480="center w">
                        <a href="#">About</a>.
                        <a href="#">Portfolio</a>.
                        <a href="#">Services</a>.
                        <a href="#">Clients</a>.
                        <a href="#">Blog</a>.
                        <a href="#">Careers</a>.
                        <a href="#">Contact</a>
                    </div>
                </div>
                <div data-flex="-center end w" class="links-social" data-flex-480="-center center w">
                    <a href="#"><i class="icon-rss"></i></a>
                    <a href="#"><i class="icon-tw"></i></a>
                    <a href="#"><i class="icon-fb"></i></a>
                </div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>