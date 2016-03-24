<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Continuum</title>
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
        <header>
            <div class="lwrap" data-flex="axis">
                <a href="#" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="158" height="25" alt="Continuum">
                </a>
                <nav class="links-nav" data-flex="end w" data-childs="-center center">
                    <a href="#" class="active">Home</a>
                    <a href="#">About</a>
                    <a href="#">Contact</a>
                    <a href="#">Full Width</a>
                    <a href="#">Shortcodes</a>
                </nav>
            </div>
        </header>
        <div class="banner-wrap">
            <div class="lwrap banner" data-flex="-center center">
                <figure>
                    <img src="/images/slider.png" width="845" height="325" alt="">
                    <div class="overlay" data-flex="col -center around">
                        <span>Cathedral Photo by _gee_ from Flickr</span>
                        <a href="#">http://www.flickr.com/photos/gee01/</a>
                    </div>
                </figure>                    
            </div>
        </div>
        <div class="lwrap">
            <div class="welcome" data-flex="axis">
                <p>Sed porttitor ipsum at justo suscipit quis sollicitudin dolor facilisis. Fusce vestibulum blandit ultricies.</p>
                <a href="#" class="btn btn-default">View Portfolio</a>
            </div>
            <div class="grid" data-flex="stripe w" data-flex-480="vstripe">
                <article>
                    <figure><img src="/images/img1.png" width="289" height="127" alt=""></figure>
                    <h2>Fusce volutpat elementum</h2>
                    <p>Maecenas arcu lectus, vehicula vitae dignissim id, venenatis convallis urna. In vitae lacus et justo congue scelerisque. Duis purus neque, ultricies sed vulputate quis, vehicula at lorem. Praesent lobortis posuere tincidunt.</p>
                </article>
                <article>
                    <figure><img src="/images/img2.png" width="289" height="127" alt=""></figure>
                    <h2>Fusce volutpat elementum</h2>
                    <p>Maecenas arcu lectus, vehicula vitae dignissim id, venenatis convallis urna. In vitae lacus et justo congue scelerisque. Duis purus neque, ultricies sed vulputate quis, vehicula at lorem. Praesent lobortis posuere tincidunt.</p>
                </article>
                <article>
                    <figure><img src="/images/img3.png" width="289" height="127" alt=""></figure>
                    <h2>Fusce volutpat elementum</h2>
                    <p>Maecenas arcu lectus, vehicula vitae dignissim id, venenatis convallis urna. In vitae lacus et justo congue scelerisque. Duis purus neque, ultricies sed vulputate quis, vehicula at lorem. Praesent lobortis posuere tincidunt.</p>
                </article>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe w">
                <div>
                    <h5>Recent Posts</h5>
                    <ul class="links-footer" data-childs="-center">
                        <li><a href="#">Nulla nulla nisl faucibus vitae pulvinar.</a></li>
                        <li><a href="#">Suspendisse leo tortor, sollicitudin.</a></li>
                        <li><a href="#">Pellentesque dolor urna, mollis sed.</a></li>
                        <li><a href="#">Aliquam erat volutpat. Sed quis elit.</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Categorys</h5>
                    <ul class="links-footer" data-childs="-center">
                        <li><a href="#">Website Development</a></li>
                        <li><a href="#">Technology News</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">World Economics</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Pages</h5>
                    <ul class="links-footer" data-childs="-center">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Our Team</a></li>
                        <li><a href="#">Shortcodes</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Newsletter</h5>
                    <form action="#" method="post">
                        <label for="i1">Subscribe to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</label>
                        <div class="form-subscribe" data-flex="axis" data-flex-480="col -start">   
                            <input type="email" id="i1" name="subscribe">
                            <button><span class="btn btn-subscribe">Subscribe</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>