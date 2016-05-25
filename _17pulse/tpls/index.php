<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pulse</title>
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
        <header>
            <div class="lwrap">
                <div data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="138" height="77" alt="Pulse">
                    </a>
                    <nav class="links-nav" data-flex="-center end w">
                        <a href="#" class="active">home</a>
                        <a href="#">services</a>
                        <a href="#">portfolio</a>
                        <a href="#">products</a>
                        <a href="#">blog</a>
                        <a href="#">contact us</a>
                    </nav>
                </div> 
                <div class="slider" data-flex="stripe" data-flex-640="vstripe r">
                    <div data-flex="-end">
                        <figure><img src="/images/img1.png" width="328" height="478" alt=""></figure>
                        <figure><img src="/images/img2.png" width="514" height="312" alt=""></figure>
                        <figure><img src="/images/img3.png" width="268" height="419" alt=""></figure>
                    </div>
                    <div data-flex="vaxis">
                        <div>
                            <h1>Download Excellent PSD Templates</h1>
                            <p>GraphicsFuel.com is a design blog where you can download high quality &ldquo;Photoshop Freebies&rdquo; with the original source files in .PSD format.&ensp;Absolutely free!</p>
                            <a href="#" class="btn btn-browse" data-childs="-center center"><em>Browse Templates</em></a>
                        </div>
                        <div class="links-controls" data-flex="center">
                            <a href="#"></a>
                            <a href="#" class="active"></a>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="about">
            <div class="lwrap" data-flex="axis" data-flex-640="vaxis"> 
                <div data-flex="-center">
                    <i class="icon-case"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id accumsan massa. Donec suscipit commodo velit. Fusce pharetra mi sit amet felis auctor tempor. Donec vel odio enim, id ultricies odio. Ut euismod arcu a tortor consectetur eu lobortis augue congue. Duis quis ipsum quam.</p>               
                </div>
                <a href="#" class="more">learn more</a>
            </div>
        </section>
        <section class="content">
            <div class="lwrap">
                <div data-flex="stripe" data-flex-480="vstripe">
                    <article>
                        <h4>Service Text Heading #1</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id accumsan massa. Donec suscipit commodo velit. Fusce pharetra mi sit amet felis auctor tempor. Donec vel odio enim, id ultricies odio. </p>
                        <a href="#" class="btn btn-default">&ensp;More&ensp;::</a>
                    </article>
                    <article>
                        <h4>Service Text Heading #2</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id accumsan massa. Donec suscipit commodo velit. Fusce pharetra mi sit amet felis auctor tempor. Donec vel odio enim, id ultricies odio. </p>
                        <a href="#" class="btn btn-default">&ensp;More&ensp;::</a>
                    </article>
                    <article>
                        <h4>Service Text Heading #3</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id accumsan massa. Donec suscipit commodo velit. Fusce pharetra mi sit amet felis auctor tempor. Donec vel odio enim, id ultricies odio. </p>
                        <a href="#" class="btn btn-default">&ensp;More&ensp;::</a>
                    </article>
                </div>
                <div class="slideshow" data-flex="axis">
                    <a href="#" class="btn btn-slide prev"><i class="icon-left"></i></a>
                    <div data-flex="stripe">
                        <div>
                            <figure>
                                <img src="images/img4.png">
                                <figcaption data-flex="-center"><a href="#" class="slide-link">Ecommerce Icon</a></figcaption>
                            </figure>
                        </div>
                        <div>
                            <figure>
                                <img src="images/img5.png">
                                <figcaption data-flex="-center"><a href="#" class="slide-link">Fruit Illustration</a></figcaption>
                            </figure>
                        </div>
                        <div class="hidden-sm">
                            <figure>
                                <img src="images/img6.png">
                                <figcaption data-flex="-center"><a href="#" class="slide-link">Business Portfolio</a></figcaption>
                            </figure>
                        </div>
                        <div class="hidden">
                            <figure>
                                <img src="images/img7.png">
                                <figcaption data-flex="-center"><a href="#" class="slide-link">Pricing Table Design</a></figcaption>
                            </figure>
                        </div>
                    </div>
                    <a href="#" class="btn btn-slide next"><i class="icon-right"></i></a>
                </div>
            </div>
        </section>
        <footer>
            <div class="lwrap" data-flex="stripe" data-flex-640="stripe w">
                <div>
                    <h5>Textual Content</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id accumsan massa. Donec suscipit commodo velit. Fusce pharetra mi sit amet felis auctor tempor. Donec vel odio enim, id ultricies odio. </p>
                </div>
                <div>
                    <h5>Browse</h5>
                    <nav class="links-footer" data-flex="col -start">
                        <a href="#">Home</a>
                        <a href="#">Services</a>
                        <a href="#">Portfolio</a>
                        <a href="#">Products</a>
                        <a href="#">Blog</a>
                        <a href="#">Contact Us</a>
                    </nav>
                </div>
                <div>
                    <h5>Connect Us</h5>
                    <div class="links-social" data-flex="w" data-childs="-center center">
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-in"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-mail"></i></a>
                    </div>
                </div>
                <div>
                    <h5>Get In Touch With Us</h5>
                    <form action="#" method="post">
                        <input type="text" name="input" placeholder="Your Name">
                        <input type="email" name="input" placeholder="Your Email">
                        <textarea type="text" placeholder="Your Message"></textarea>
                        <button><span class="btn btn-default">Submit&nbsp;::</span></button>
                    </form>
                </div>
            </div>
            <div class="copyright" data-flex="-center center">
                <span>&copy; 2011 Pulse by GraphicsFuel.com&nbsp;|&nbsp;<a href="#">Terms of service</a>&nbsp;|&nbsp;<a href="#">Privacy policy</a></span>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>