<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Freefiles</title>
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
            var LAYOUT_WIDTH = 1001;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="top-bar">
            <div class="lwrap" data-flex="axis">
                <div class="links-top" data-flex>
                    <a href="#" class="active">sitemap</a>|
                    <a href="#">search</a>|
                    <a href="#">user area</a>
                </div>
                <div class="links-social" data-flex="end">
                    <a href="#" class="active"><i class="icon-fb"></i></a>
                    <a href="#"><i class="icon-tw"></i></a>
                    <a href="#"><i class="icon-rss"></i></a>
                </div>
            </div>
        </div>
        <div class="lwrap">
            <header data-flex="axis w">
                <a href="#" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="285" height="36" alt="Freefiles">
                </a>
                <form action="#" method="post" class="form-search" data-flex="stripe">
                    <input type="search" name="search" placeholder="Search here ...">
                    <button><span class="btn btn-search"><i class="icon-search"></i></span></button>
                </form>
                <nav class="links-nav" data-flex="w" data-childs="-center center">
                    <a href="#">home</a>
                    <a href="#" class="active">about</a>
                    <a href="#">services</a>
                    <a href="#">projects</a>
                    <a href="#">solutions</a>
                    <a href="#">jobs</a>
                    <a href="#">blog</a>
                    <a href="#">contacts</a>
                </nav>
            </header>
            <div class="slider-lg">
                <figure>
                    <img src="/images/slider.png" width="981" height="420" alt="">
                    <figcaption data-flex="-center center">
                        <strong>Crysis 2 - Be The Weapon Trailer</strong>
                        <small>xbox 360, rated mature</small>
                        <a href="#" class="btn btn-default">Watch Now!</a>
                    </figcaption>
                </figure>
                <div class="links-controls" data-flex="center">
                    <a href="#"></a>
                    <a href="#" class="active"></a>
                    <a href="#"></a>
                </div>
            </div>
            <div class="content-wrap" data-childs-480="vstripe">
                <div data-flex="stripe">
                    <div>
                        <h2 class="title">Hello Stranger!</h2>
                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id molestie enim. Suspendisse consequat urna non ante gravida euismod. In in nibh vestibulum at tellus viverra nulla.</strong></p>
                        <p>Aliquam pulvinar. Maecenas nulla arcu, venenatis et ultrices id, tincidunt ut nisl. Etiam augue lectus,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id molestie enim. Suspendisse consequat urna non ante gravida euismod. In in nibh nulla. Stibulum at tellus viverra nulla aliquam pulvinar. Maecenas nulla arcu, venenatis et ultrices id, tincidunt ut nisl. Maecenas nulla arcu, venenatis et ultrices id, tincidunt ut nisl. Etiam augue lectus,Lorem ipsum dolor sit amet, consect dolor sit amet adipising ultrices id, tincidunt ut nisl. </p>
                        <a href="#" class="btn btn-default">Learn More</a>                    
                    </div>
                    <div>
                        <h2 class="title">Our Services</h2>
                        <div class="links-services" data-flex="col -start" data-childs>
                            <a href="#">Maecenas elementum tortor id massa lobortis</a>
                            <a href="#">Lipsum amet accumsan ultricies mi, et adipin</a>
                            <a href="#">Mauris id nibh condimentum tortor sodales feugiat</a>
                            <a href="#">Suspendisse quis ipsum non tortor pretium</a>
                            <a href="#">Maecenas elementum tortor id massa lobortis</a>
                            <a href="#">Lipsum amet accumsan ultricies mi, et adipin</a>
                            <a href="#">Mauris id nibh condimentum tortor sodales feugiat</a>
                        </div>                 
                    </div>
                </div>
                <div data-flex="stripe">
                    <div>
                        <h2 class="title">Featured Games</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id molestie enim. Suspendisse consequat urna non ante gravida euismod. In in nibh vestibulum at tellus viverra nulla.</p>                  
                        <div class="slider-sm" data-flex="axis">
                            <a href="#"><i class="icon-prev"></i></a>
                            <div data-flex="-start between" data-flex-640="-start between w">
                                <figure>
                                    <img src="/images/img.png" width="134" height="103" alt="">
                                    <figcaption data-flex="vaxis"><span>xbox 360, mature</span><a href="#">title 1 goes here</a></figcaption>
                                </figure>
                                <figure>
                                    <img src="/images/img.png" width="134" height="103" alt="">
                                    <figcaption data-flex="vaxis"><span>xbox 360, mature</span><a href="#">title 2 goes here</a></figcaption>
                                </figure>
                                <figure>
                                    <img src="/images/img.png" width="134" height="103" alt="">
                                    <figcaption data-flex="vaxis"><span>xbox 360, mature</span><a href="#">title 3 goes here</a></figcaption>
                                </figure>
                                <figure>
                                    <img src="/images/img.png" width="134" height="103" alt="">
                                    <figcaption data-flex="vaxis"><span>xbox 360, mature</span><a href="#">title 4 goes here</a></figcaption>
                                </figure> 
                            </div>
                            <a href="#"><i class="icon-next"></i></a>
                        </div>
                    </div>
                    <div class="contact">
                        <h2 class="title">Contact Us</h2>
                        <div data-flex="col -start">
                            <span><strong>Email: </strong> <a href="mailto:info@yoururl.com">info@yoururl.com</a></span>
                            <span><strong>Phone: </strong> +1 765-606-605</span>
                            <span><strong>Address: </strong><address>East Pixel Bld. 99, Creative City, USA</address></span>
                            <figure><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d171337.03543942622!2d35.17535355!3d47.856229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1449773041469" allowfullscreen></iframe></figure>
                        </div>                
                    </div>
                </div>
            </div>
            <footer data-flex="stripe"  data-flex-640="vstripe">
                <nav class="links-footer" data-flex="w" data-flex-640="center w">
                    <a href="#">Home</a>|
                    <a href="#">About</a>|
                    <a href="#">Services</a>|
                    <a href="#">Projects</a>|
                    <a href="#">Solutions</a>|
                    <a href="#">Jobs</a>|
                    <a href="#">Blog</a>|
                    <a href="#">Contacts</a>
                </nav>
                <span>Copyright 2011 <span>|</span> Sitename. Design by <a href="#">CSS-Free-Templates.com</a></span>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>