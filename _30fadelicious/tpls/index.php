<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fadelicious</title>
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
    <body data-flex="col -center">
        <div class="lwrap">
            <header class="header" data-flex="axis" data-flex-640="vaxis">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="128" height="26" alt="Fadelicious">
                </a>
                <nav class="links-nav" data-flex="end w" data-flex="end w" data-childs="-center center">
                    <a href="#">Home</a>
                    <a href="#" class="active">Blog</a>
                    <a href="#">Portfolio</a>
                    <a href="#">Services</a>
                    <a href="#">Contact</a>
                </nav>
            </header>
            <section class="slider">
                <figure><img src="/images/slide.png"></figure>
                <div data-flex="axis">
                    <div class="links-controls" data-flex>
                        <a href="#"></a>
                        <a href="#" class="active"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                    <div class="links-thumbs" data-flex="axis">
                        <a href="#"><i class="icon-p"></i></a>
                        <a href="#"><i class="icon-n"></i></a>
                    </div>
                </div>
            </section>
            <h1>Hi! This is Fadelicious. New unique look for your blog & portfolio. Vivamus porttitor tristique augue a vestibulum. Maecenas sodales risus porta mi semper in auctor massa posuere. </h1>
            <section class="services" data-flex="stripe w" data-childs="col -center">
                <article>
                    <i class="icon-package"></i>
                    <h3>Package Design</h3>
                    <p>Praesent erat anteport hanip, condimentum quis facilisisac condimentum in ipsum. </p>
                    <a href="#" class="btn btn-default">View Details</a>
                </article>
                <article>
                    <i class="icon-web"></i>
                    <h3>Web Design</h3>
                    <p>Duis quam ipsum, pharetra nec iaculis non, laoreet et nunc. Ut luctus justo velerat lacinia.</p>
                    <a href="#" class="btn btn-default">View Details</a>
                </article>
                <article>
                    <i class="icon-cart"></i>
                    <h3>E-Commerce</h3>
                    <p>Sed sit amet tortor vel risus volutpat pretium non at estar. Maecenas vitae lectus moles</p>
                    <a href="#" class="btn btn-default">View Details</a>
                </article>
                <article>
                    <i class="icon-support"></i>
                    <h3>Full Support</h3>
                    <p>Curabitur nulla antenov, ullamcorper eu iaculis utar, convallis ac massa. </p>
                    <a href="#" class="btn btn-default">View Details</a>
                </article>
            </section>
            <section class="content" data-flex="stripe" data-flex-480="vstripe">
                <article>
                    <h2 data-flex="-end"><i class="icon-case"></i>About Us</h2>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                </article>
                <div>
                    <h2 data-flex="-end"><i class="icon-book"></i>Latest Work</h2>
                    <div data-flex="stripe w">
                        <figure><img src="/images/img1.png"></figure>
                        <figure><img src="/images/img1.png"></figure>
                        <figure><img src="/images/img1.png"></figure>
                        <figure><img src="/images/img1.png"></figure>
                    </div>
                </div>
            </section>            
        </div>   
        <footer>
            <section class="lwrap" data-flex="stripe w">                 
                <div>
                    <h4 data-flex="-end"><i class="icon-post"></i>Recent Posts</h4>
                    <div class="links-footer" data-flex="col -start">
                        <a href="#">Duis id tellus at eros tempor imper.</a>
                        <a href="#">Aenean ligula nisl, fermentum vel lobortis id, scelerisque at lorem.</a>
                        <a href="#">Suspendisse nec neque ut nunc rhoncus sodales.</a>
                        <a href="#">Duis id Nam pulvinar faucibus dui.</a>
                        <a href="#">Pellentesque pulvinar sagittis.</a>
                    </div>
                </div>
                <div>
                    <h4 data-flex="-end"><i class="icon-archives"></i>Archives</h4>
                    <div class="links-footer" data-flex="col -start">
                        <a href="#">January 2010</a>
                        <a href="#">February 2010</a>
                        <a href="#">March 2010</a>
                        <a href="#">April 2010</a>
                        <a href="#">May 2010</a>
                        <a href="#">June 2010</a>
                    </div>
                </div>
                <div>
                    <h4 data-flex="-end"><i class="icon-bird"></i>Twitter</h4>
                    <blockquote data-flex="col -end">
                        <q>Sed ut perspiciatis unde omnis iste natus, error sit voluptatem accusantium <a href="#">http://bit.ly/bkPfFM</a> doloremque laudantium, totam rem aperiamea.
                            <time>3 hours ago</time>
                            <cite><a href="#">@jacquelinecharl</a></cite>
                        </q>    
                        <i class="icon-bird-alt"></i>
                    </blockquote>     
                </div>
            </section>
            <section class="copyright">
                <div class="lwrap" data-flex="axis">
                    <span>&copy; Copyright 2010 Starlight. All Right Reserved</span>
                    <div class="links-social" data-flex="end w">
                        <a href="#"><i class="icon-facebook"></i></a>
                        <a href="#"><i class="icon-tumblr"></i></a>
                        <a href="#"><i class="icon-flickr"></i></a>
                        <a href="#"><i class="icon-stumble"></i></a>
                        <a href="#"><i class="icon-tumblr"></i></a>
                        <a href="#"><i class="icon-rss"></i></a>
                    </div>
                </div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>