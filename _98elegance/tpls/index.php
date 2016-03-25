<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Elegance</title>
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
    <body>
        <header class="header">
            <div class="lwrap" data-flex="axis" data-flex-480="col -center">
                <a href="#" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="212" height="37" alt="Elegance Media">
                </a>
                <nav class="links-nav" data-flex="end w" data-flex-480="center w">
                    <a href="#" class="active">home</a>
                    <a href="#">about us</a>
                    <a href="#">services</a>
                    <a href="#">portfolio</a>
                    <a href="#">blog</a>
                    <a href="#">contact us</a>    
                </nav>
            </div>            
        </header>
        <div class="slider-wrap">
            <div class="lwrap" data-flex="-center around" data-childs="col">
                <a href="#"><i class="icon-prev"></i></a>
                <figure>
                    <img src="/images/img1.png" width="230" height="375" alt="">
                    <figcaption data-flex="col">
                        <span>FedEx</span>
                        <small>Lorem ipsum dolor sit amet</small>
                    </figcaption>
                </figure>
                <figure>
                    <img src="/images/img2.png" width="230" height="375" alt="">
                    <figcaption data-flex="col">
                        <span>Digital Art</span>
                        <small>from TheDesignInspiration</small>
                    </figcaption>
                </figure>
                <figure class="hidden-md">
                    <img src="/images/img3.png" width="230" height="375" alt="">
                    <figcaption data-flex="col">
                        <span>Thismanslife: New Start</span>
                        <small>from Creattica by thismanslife</small>
                    </figcaption>
                </figure>
                <figure class="hidden-lg">
                    <img src="/images/img4.png" width="230" height="375" alt="">
                    <figcaption data-flex="col">
                        <span>Business Graph</span>
                        <small>by GraphicsFuel</small>
                    </figcaption>
                </figure>
                <a href="#"><i class="icon-next"></i></a>
            </div>
        </div>
        <div class="services">            
            <div class="lwrap">
                <h2 class="title" data-flex="-center center">see all our works</h2>
                <div data-flex="stripe w">
                    <article>
                        <h3 data-flex="-end"><div class="lbl lbl-default"><i class="icon-lamp"></i></div>Your 1st title Here</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean molestie, lectus sed posuere consectetur, dolor ipsum tempus justo, quis ornare magna urna id enim. </p>
                    </article>
                    <article>
                        <h3 data-flex="-end"><div class="lbl lbl-default"><i class="icon-lock"></i></div>Your 2nd title Here</h3>
                        <p>Nulla accumsan libero id quam facilisis nec luctus libero sollicitudin. Sed ligula libero, feugiat sed gravida vel, commodo sit amet nibh. </p>
                    </article>
                    <article>
                        <h3 data-flex="-end"><div class="lbl lbl-default"><i class="icon-pen"></i></div>Your 3rd title Here</h3>
                        <p>Nullam tempus turpis at lorem posuere sodales. Donec nibh urna, auctor at eleifend eget, blandit fermentum augue. Etiam eget magna vel ante mattis ultricies vitae ut nunc. </p>
                    </article>
                    <article>
                        <h3 data-flex="-end"><div class="lbl lbl-default"><i class="icon-user"></i></div>Your 4th title Here</h3>
                        <p>Nam ac molestie ante. Pellentesque turpis lacus, vulputate vitae feugiat quis, dictum eget diam. Proin sapien libero, tempus et tempus ac, pulvinar quis nulla. </p>
                    </article>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="lwrap" data-flex="stripe w" data-flex-480="vstripe">
                <div>
                    <h4>Our Company</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean molestie, lectus sed posuere consectetur, dolor ipsum tempus justo, quis ornare magna urna id enim. Nulla accumsan libero id quam facilisis nec luctus libero sollicitudin. </p>
                    <p>Sed ligula libero, feugiat sed gravida vel, commodo sit amet nibh. Nullam tempus turpis at lorem posuere sodales. Donec nibh urna, auctor at eleifend eget, blandit fermentum augue.</p>
                    <p>Proin enim velit, fermentum at malesuada in, porta vel ipsum. Pellentesque a erat sit amet lorem rutrum venenatis sed laoreet dui. </p>
                </div>
                <div>
                    <h4>Our Testimonials</h4>
                    <div data-childs="col">
                        <blockquote>
                            <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean molestie, lectus sed posuere consectetur, dolor ipsum tempus justo, quis ornare magna urna id enim. </q>
                            <cite>Rafi, GraphicsFuel.com </cite>
                        </blockquote>
                        <blockquote>
                            <q>Sed ligula libero, feugiat sed gravida vel, commodo sit amet nibh. Nullam tempus turpis at lorem posuere sodales. Donec nibh urna, auctor at </q>
                            <cite>Rafi, GraphicsFuel.com </cite>
                        </blockquote>
                        <blockquote>
                            <q>Proin enim velit, fermentum at malesuada in, porta vel ipsum. Pellentesque a erat sit amet lorem rutrum venenatis sed laoreet dui. </q>
                            <cite>Rafi, GraphicsFuel.com </cite>
                        </blockquote>
                    </div>
                </div>
                <div>
                    <h4>From the blog</h4>
                    <div data-childs="col -start">
                        <div class="post">
                            <a href="#">Sleek minimal website PSD template</a>
                            <time>August 30, 2010, 9:32 am</time>
                        </div>
                        <div class="post">
                            <a href="#">PSD ecommerce website template</a>
                            <time>October 18, 2010, 5:51 am</time>
                        </div>
                        <div class="post">
                            <a href="#">Sleeko-Download single page website design</a>
                            <time>July 22, 2010, 7:19 pm</time>
                        </div>
                        <div class="post">
                            <a href="#">Download web buttons in PSD & PNG (pack of 60)</a>
                            <time>September 13, 2010, 2:15 am</time>
                        </div>
                        <div class="post">
                            <a href="#">Flip clock countdown (PSD)</a>
                            <time>August 12, 2011, 10:56 am</time>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="newsletter">
            <div class="lwrap" data-flex="axis" data-flex-480="vstripe">
                <form action="#" method="post" data-flex="-center" data-flex-640="-center w">
                    <label for="i1">Newsletter sign up</label>
                    <div data-flex>
                        <input type="email" name="email" id="i1" placeholder="email address">
                        <button><span class="btn btn-submit">Submit</span></button>
                    </div>                    
                </form>
                <div class="twitter" data-flex="-center">
                    <i class="icon-bird"></i>
                    <p>Proin enim velit, fermentum at malesuada in, ipsum...&emsp; <a href="#">@graphicsfuel</a></p>                    
                </div>
            </div>
        </div>
        <footer>
            <div class="lwrap">
                <div class="footer" data-flex="stripe w">
                    <div>
                        <h5>Company</h5>
                        <div class="links-footer" data-flex="col -start">
                            <a href="#">Home</a>
                            <a href="#">About us</a>
                            <a href="#">Services</a>
                            <a href="#">Products</a>
                            <a href="#">Blog</a>
                            <a href="#">Contact us</a>    
                        </div>
                    </div>
                    <div>
                        <h5>Social Network</h5>
                        <p>Find us on these social network sites</p>
                        <div class="links-social" data-flex="w">
                            <a href="#"><i class="icon-tw"></i></a>
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-in"></i></a>
                            <a href="#"><i class="icon-rss"></i></a>
                            <a href="#"><i class="icon-yt"></i></a>
                        </div>
                    </div>
                    <div class="location">
                        <h5>Location</h5>
                        <div data-flex="col">
                            <address>123, street name<br> landmark,<br> California 123</address>
                            <span>Tel: 123-456-7890</span>
                            <span>Fax: +123-456-7890</span>
                        </div>
                    </div>
                    <div>
                        <h5>Text Widget</h5>
                        <p>Proin enim velit, fermentum at malesuada in, porta vel ipsum. Pellentesque a erat sit amet lorem rutrum venenatis sed laoreet dui. </p>
                    </div>
                </div>
                <div class="copyright">
                    <span>Copyright &copy; 2011 EleganceMedia. Designed by GraphicsFuel.com</span>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>