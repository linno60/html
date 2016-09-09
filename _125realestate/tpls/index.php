<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Realestate Company</title>
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
            var LAYOUT_WIDTH = 970;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="lwrap" data-flex="between -end">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="281" height="77" alt="Realestate Company">
                </a>
                <span class="callnumber">Call us: (214) 227-7669</span>
            </div>
            <div class="navigation">
                <div class="lwrap" data-flex="axis">
                    <nav class="links-nav" data-flex="w" data-childs="center -center">
                        <a href="#">Home</a>
                        <a href="#" class="active">Our Story</a>
                        <a href="#">Tenant</a>
                        <a href="#">Owner</a>
                        <a href="#">Contact Us</a>
                    </nav>
                    <div class="links-sign" data-flex="end w">
                        <a href="#">Sign in</a>/
                        <a href="#">Sign up</a>
                    </div>
                </div>
            </div>
        </header>
        <div>
            <div class="lwrap" data-flex="stripe">
                <div class="slider-wrap">                   
                    <input name="anchor1" id='slide1-0' type="radio">
                    <input name="anchor1" id='slide1-1' type="radio">
                    <input name="anchor1" id='slide1-2' type="radio">
                    <input name="anchor1" id='slide1-3' type="radio">
                    <input name="anchor1" id='slide1-4' type="radio">
                    <input name="anchor1" id='play1' type="radio" checked>
                    <div class="slider">
                        <figure>
                            <img src="/images/slider1.jpg" width="489" height="253" alt="">
                            <figcaption>
                                <h3>Lorem Ipsum is simply dummy text of</h3>
                                <p>We work with investors to make managing your investments easy!</p>
                            </figcaption>
                        </figure>
                        <figure class="num0">
                            <img src="/images/slider1.jpg" width="489" height="253" alt="">
                            <figcaption>
                                <h3>Lorem Ipsum is simply dummy text of 1</h3>
                                <p>We work with investors to make managing your investments easy!</p>
                            </figcaption>
                        </figure>
                        <figure class="num1">
                            <img src="/images/slider2.jpg" width="489" height="253" alt="">
                            <figcaption>
                                <h3>Lorem Ipsum is simply dummy text of 2</h3>
                                <p>We work with investors to make managing your investments easy!</p>
                            </figcaption>
                        </figure>
                        <figure class="num2">
                            <img src="/images/slider3.jpg" width="489" height="253" alt="">
                            <figcaption>
                                <h3>Lorem Ipsum is simply dummy text of 3</h3>
                                <p>We work with investors to make managing your investments easy!</p>
                            </figcaption>
                        </figure>
                        <figure class="num3">
                            <img src="/images/slider4.jpg" width="489" height="253" alt="">
                            <figcaption>
                                <h3>Lorem Ipsum is simply dummy text of 4</h3>
                                <p>We work with investors to make managing your investments easy!</p>
                            </figcaption>
                        </figure>
                        <figure class="num4">
                            <img src="/images/slider5.jpg" width="489" height="253" alt="">
                            <figcaption>
                                <h3>Lorem Ipsum is simply dummy text of 5</h3>
                                <p>We work with investors to make managing your investments easy!</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class='bullets' data-flex="center">
                        <label class='num0' for='slide1-0'></label>
                        <label class='num1' for='slide1-1'></label>
                        <label class='num2' for='slide1-2'></label>
                        <label class='num3' for='slide1-3'></label>
                        <label class='num4' for='slide1-4'></label>
                    </div>
                </div>
                <div class="tabs" data-tabs="">
                    <div class="tablist">
                        <a href="#tab1" class="active">Tenants</a>
                        <a href="#tab2">Oweners</a>
                    </div>
                    <div class="tabset">
                        <div id="tab1" class="tabpanel active">Tab number 1</div>
                        <div id="tab2" class="tabpanel">Tab number 2</div>
                    </div>
                </div>
            </div>
        </div>
        <footer>

        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>