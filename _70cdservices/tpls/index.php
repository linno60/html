<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CD Services</title>
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
        <div class="lwrap">
            <header data-flex="stripe">
                <div data-flex="-center">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="183" height="100" alt="CD Services">
                </a>
                </div>
                <div data-flex="col -end between">
                    <a href="mailto:info@CreativeStudio.com" class="mail">info@CreativeStudio.com</a>
                    <nav class="links-nav" data-flex="end w">
                        <a href="#" class="active">home</a>
                        <a href="#">about us</a>
                        <a href="#">portfolio</a>
                        <a href="#">services</a>
                        <a href="#">blog</a>
                        <a href="#">contact us</a>
                    </nav>
                    <span></span>
                </div>            
            </header>
            <div class="slider" data-flex="stripe" data-flex-480="vstripe">
                <div>
                    <h1>creative design services</h1>
                    <div class="caption" data-flex="axis w">
                        <span>here's some nice work</span>
                        <a href='#' class="view">view portfolio</a>
                    </div>
                </div>
                <div data-flex>
                    <figure><img src="/images/img1.png" width="333" height="304" alt=""></figure>
                    <figure><img src="/images/img2.png" width="366" height="363" alt=""></figure>
                </div>
            </div>
            <div class="about" data-flex="stripe" data-flex-640="vstripe">
                <article>
                    <h3 class="title-border">about us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat libero. </p>
                    <a href="#" class="more">read</a>
                </article>
                <article>
                    <h3 class="title-border">our benefits</h3>
                    <ul class="list-default">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. </li>
                        <li>Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. </li>
                    </ul>
                </article>
                <article>
                    <h3 class="title-border">testimonials</h3>
                    <blockquote data-flex="col">
                        <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. </q>
                        <cite>Rafi, Graphicsfuel.com</cite>
                    </blockquote>
                </article>
            </div>
            <div class="portfolio">
                <h3 class="title">our portfolio</h3>
                <div data-flex="stripe w">
                    <figure>
                        <img src="/images/img3.png" width="215" height="135" alt="">
                        <a href="#" class="btn btn-view">view</a>
                    </figure>
                    <figure>
                        <img src="/images/img4.png" width="215" height="135" alt="">
                        <a href="#" class="btn btn-view">view</a>
                    </figure>
                    <figure>
                        <img src="/images/img5.png" width="215" height="135" alt="">
                        <a href="#" class="btn btn-view">view</a>
                    </figure>
                    <figure>
                        <img src="/images/img6.png" width="215" height="135" alt="">
                        <a href="#" class="btn btn-view">view</a>
                    </figure>
                </div>
            </div>
            <div class="updates" data-flex="stripe" data-flex-480="vstripe">
                <div>
                    <h3 class="title-sm">blog updates</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat libero. </p>
                </div>
                <div>
                    <h3 class="title-sm">conenct with us</h3>
                    <div class="links-social" data-flex="w">
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-db"></i></a>
                        <a href="#"><i class="icon-rss"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="axis">
                <div data-flex="col">
                    <nav class="links-footer" data-flex="w">
                        <a href="#">Home</a>|
                        <a href="#">About Us</a>|
                        <a href="#">Portfolio</a>|
                        <a href="#">Services</a>|
                        <a href="#">Blog</a>|
                        <a href="#">Contact Us</a>
                    </nav>
                    <span>© 2010 CreativeStudio. All Rights Reserved</span>
                </div>
                <a href="/" title="Return to the homepage" id="logo-alt">
                    <img src="/images/logo_footer.png" width="119" height="64" alt="CD Services">
                </a>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>