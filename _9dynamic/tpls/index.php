<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dynamic</title>
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
            var LAYOUT_WIDTH = 1000;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="lwrap">
            <header class="lwrap">
                <div>
                    <nav class='links-nav' data-flex="w" data-childs="-center center">
                    <a href="#" title="Return to the homepage" id="logo"><img src="/images/logo.png" width="99" height="30" alt="Dynamic"></a>
                    <a href="#">about</a>
                    <a href="#">services</a>
                    <a href="#">clients</a>
                    <a href="#">portfolio</a>
                    <a href="#">blog</a>
                    <a href="#">careers</a>
                    <a href="#">contact</a>
                </nav>
                </div> 
            </header>
            <section data-flex="axis">
                <a href="#"><i class="icon-prev"></i></a>
                <div class="slider-top">
                    <figure><img src="/images/img1.png"></figure>
                    <div class='links-controls' data-flex="center" data-childs="-center center">
                        <a href='#'></a>
                        <a href='#' class='active'></a>
                        <a href='#'></a>
                        <a href='#'></a>
                    </div>
                </div>
                <a href="#"><i class="icon-next"></i></a>
            </section>
            <section data-flex="axis">
                <a href="#"><i class="icon-prev"></i></a>
                <div class="slider-middle">
                    <div class="links-filter" data-flex="center w">
                        <a href="#" class="active">all</a>.
                        <a href="#">graphic design</a>.
                        <a href="#">illustration</a>.
                        <a href="#">web design</a>.
                        <a href="#">animation</a>
                    </div>
                    <div data-flex="stripe w">
                        <figure>
                            <img src="/images/1.png">
                            <div class="overlay" data-flex='-center center'><a href='#' class='btn btn-view'>view details</a></div>
                        </figure>
                        <figure>
                            <img src="/images/2.png">
                            <div class="overlay" data-flex='-center center'><a href='#' class='btn btn-view'>view details</a></div>
                        </figure>
                        <figure>
                            <img src="/images/3.png">
                            <div class="overlay" data-flex='-center center'><a href='#' class='btn btn-view'>view details</a></div>
                        </figure>
                        <figure>
                            <img src="/images/4.png">
                            <div class="overlay" data-flex='-center center'><a href='#' class='btn btn-view'>view details</a></div>
                        </figure>
                        <figure>
                            <img src="/images/5.png">
                            <div class="overlay" data-flex='-center center'><a href='#' class='btn btn-view'>view details</a></div>
                        </figure>
                        <figure>
                            <img src="/images/6.png">
                            <div class="overlay" data-flex='-center center'><a href='#' class='btn btn-view'>view details</a></div>
                        </figure>
                        <figure>
                            <img src="/images/7.png">
                            <div class="overlay" data-flex='-center center'><a href='#' class='btn btn-view'>view details</a></div>
                        </figure>
                        <figure>
                            <img src="/images/8.png">
                            <div class="overlay" data-flex='-center center'><a href='#' class='btn btn-view'>view details</a></div>
                        </figure>
                    </div>
                </div>
                <a href="#"><i class="icon-next"></i></a>
            </section>
            <section data-flex="axis">
                <a href="#"><i class="icon-prev"></i></a>
                <div class="slider-bottom">
                    <h2>recent news from the blog</h2>
                    <div data-flex="stripe">
                        <article>
                            <h4>ut sagitti's ultrices urna eget</h4> 
                            <span>Posted on Step 5 by blugraphic.com</span>
                            <p>Sed tempor lectus in risus. Nullam vestibulum, odio ac pulvinar condimentum, urna neque aliquet ipsum, in blandit velit nunc eget mauris. Suspendisse aliquet sem ut nulla. Cras...</p>
                            <a href="#" class="btn btn-more">Continue Reading...</a>
                        </article>
                        <article>
                            <h4>ut sagitti's ultrices urna eget</h4> 
                            <span>Posted on Step 5 by blugraphic.com</span>
                            <p>Sed tempor lectus in risus. Nullam vestibulum, odio ac pulvinar condimentum, urna neque aliquet ipsum, in blandit velit nunc eget mauris. Suspendisse aliquet sem ut nulla. Cras...</p>
                            <a href="#" class="btn btn-more">Continue Reading...</a>
                        </article>
                        <article>
                            <h4>ut sagitti's ultrices urna eget</h4> 
                            <span>Posted on Step 5 by blugraphic.com</span>
                            <p>Sed tempor lectus in risus. Nullam vestibulum, odio ac pulvinar condimentum, urna neque aliquet ipsum, in blandit velit nunc eget mauris. Suspendisse aliquet sem ut nulla. Cras...</p>
                            <a href="#" class="btn btn-more">Continue Reading...</a>
                        </article>
                    </div>
                </div>
                <a href="#"><i class="icon-next"></i></a>
            </section>
            <footer class="lwrap">
                <div data-flex='axis'>
                  <div>
                    <span>All rights reserved 2012 visit our website: www.blugraphic.com follow us at twitter.</span>
                    <nav data-flex="w" class="links-footer">
                        <a href='#'>About</a>.
                        <a href='#'>Portfolio</a>.
                        <a href='#'>Services</a>.
                        <a href='#'>Clients</a>.
                        <a href='#'>Blog</a>.
                        <a href='#'>Careers</a>.
                        <a href='#'>Contact</a>
                    </nav>
                </div>
                <div class="links-social" data-flex="end w" data-childs="-center center">
                    <a href='#'><i class='icon-rss'></i></a>
                    <a href='#'><i class='icon-twitter'></i></a>
                    <a href='#'><i class='icon-facebook'></i></a>
                </div>  
                </div> 
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>