<!DOCTYPE html>
<html lang="en">
    <head>
        <title>V4Portfolio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/reset-elements.css">
        <link rel="stylesheet" href="/css/styles.css">    
    </head>
    <body>
        <div class="lwrap">
            <header class="header" data-flex="row-center between w" data-flex-800="col">
                <a href="#" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="381" height="37" alt="V4Portfolio">
                </a>
                <nav class="hlinks links-nav" data-flex="w">
                    <a href="#" class="active"><div class="lbl lbl-nav"><i class="icon-arroww"></i></div>home</a>
                    <a href="#"><div class="lbl lbl-nav"><i class="icon-arroww"></i></div>about</a>
                    <a href="#"><div class="lbl lbl-nav"><i class="icon-arroww"></i></div>portfolio</a>
                    <a href="#"><div class="lbl lbl-nav"><i class="icon-arroww"></i></div>services</a>
                    <a href="#"><div class="lbl lbl-nav"><i class="icon-arroww"></i></div>contact us</a>
                </nav>   
            </header>
            <div class="wrap">
                <div class="slider" data-flex="row-center between">
                    <a href="#"><i class="icon-prev"></i></a>
                    <figure>                    
                        <img src="/images/slider.png" width="802" height="395" alt="">
                    </figure>
                    <a href="#"><i class="icon-next"></i></a>
                </div>
                <div class="services" data-flex="between" data-flex-640="column">
                    <article data-flex="col-start">
                        <h3>Web Design & Code</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis hendrerit sem in eros luctus vel venenatis lorem tristique. Etiam vel sollicitudin odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <a href="#" class="more"><i class="icon-arrowb"></i>see more</a>
                    </article>
                    <article data-flex="col-start">
                        <h3>Wordpress Design & Code</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis hendrerit sem in eros luctus vel venenatis lorem tristique. Etiam vel sollicitudin odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <a href="#" class="more"><i class="icon-arrowb"></i>see more</a>
                    </article>
                    <article data-flex="col-start">
                        <h3>Website Marketing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis hendrerit sem in eros luctus vel venenatis lorem tristique. Etiam vel sollicitudin odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <a href="#" class="more"><i class="icon-arrowb"></i>see more</a>
                    </article>
                </div>
                <div class="portfolio">
                    <div data-flex="row-center between w">
                        <h3>See Our Works</h3>
                        <a href="#" class="more"><i class="icon-arrowb"></i>see all works</a>
                    </div>
                    <div data-flex="row-start between" data-flex-480="column">
                        <figure data-flex="col">
                            <img src="/images/img1.png" width="280" height="160" alt="">
                            <figcaption><a href="#" class="more"><i class="icon-arrowb"></i>Cafe & restaurant website PSD template</a></figcaption>
                        </figure>
                        <figure data-flex="col">
                            <img src="/images/img2.png" width="280" height="160" alt="">
                            <figcaption><a href="#" class="more"><i class="icon-arrowb"></i>Website gallery PSD template</a></figcaption>
                        </figure>
                        <figure data-flex="col">
                            <img src="/images/img3.png" width="280" height="160" alt="">
                            <figcaption><a href="#" class="more"><i class="icon-arrowb"></i>PSD ecommerce website template</a></figcaption>
                        </figure>
                    </div>
                </div>
                <div class="about" data-flex>
                    <span class="lbl lbl-cite">about</span>
                    <div data-flex="row-center">
                        <p>Quisque sit amet dui elit, non placerat justo. Ut tincidunt, arcu vel faucibus facilisis, justo urna gravida risus, in tristique leo nisi eu massa. Nam sit amet tempor arcu. Praesent eget nisl vel elit tristique lacinia.
                            <a href="#" class="more"><i class="icon-arrowb"></i>read&nbsp;more</a>
                        </p>
                    </div>
                </div>
            </div>
            <footer data-flex="between w" data-flex-640="col-center">
                <div data-flex="col">
                    <nav class="hlinks links-footer" data-flex="w">
                        <a href="#">home</a>|
                        <a href="#">about</a>|
                        <a href="#">portfolio</a>|
                        <a href="#">services</a>|
                        <a href="#">contact us</a>
                    </nav>
                    <span class="visible">&copy; 2010-2011 Business Portfolio.</span>
                </div>
                <div data-flex="col" class="social">
                    <span>follow us</span>
                    <div class="hlinks links-social" data-flex="w">
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-in"></i></a>
                        <a href="#"><i class="icon-mail"></i></a>
                    </div>
                    <span class="hidden">&copy; 2010-2011 Business Portfolio.</span>
                </div>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>