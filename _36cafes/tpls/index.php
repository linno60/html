<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cafe</title>
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
            <div class="lwrap" data-flex="axis" data-flex-480="col -center ">
                <div class="coords">
                    <div>Home Delivery</div>
                    <div>123-456-7890</div>
                </div>
                <a href="/" title="Return to the homepage" class="logo">
                    <img src="/images/logo.png" width="179" height="149" alt="">
                </a>
                <div class="right-footer">
                    <div class="links-top" data-flex="-center">
                        <a href="#">FAQ</a>
                        <span>|</span>
                        <a href="#">Directions</a>
                        <span>|</span>
                        <a href="#">Help</a>
                    </div>
                    <form action="#" method="post">
                        <input name="" value="" placeholder="Search" type="search">
                    </form>
                </div>
            </div>
        </header>
        <div class="content">
            <div class="lwrap">
                <div class="top-navigation">
                    <div class="links-nav" data-flex="-center center w">
                        <a href="#">Home</a>
                        <span>.</span>
                        <a href="#">About Us</a>
                        <span>.</span>
                        <a href="#">Menu</a>
                        <span>.</span>
                        <a href="#">Dinner</a>
                        <span>.</span>
                        <a href="#">Lunch</a>
                        <span>.</span>
                        <a href="#">Specials</a>
                        <span>.</span>
                        <a href="#">Party</a>
                        <span>.</span>
                        <a href="#">Catering</a>
                        <span>.</span>
                        <a href="#">Contact Us</a>
                    </div>
                </div>
                <div class="content-main">
                    <div class="slider-block" data-flex="stripe">
                        <div class="slider-info" data-flex="col -center">
                            <figure>
                                <img src="/images/cafe.png" width="297" height="106" alt="">
                            </figure>
                            <a href="#" class="btn btn-default">Order Now</a>
                        </div>
                        <figure>
                            <img src="/images/cap.png" width="550" height="333" alt="">
                        </figure>
                    </div>
                    <div class="about-us" data-flex="stripe" data-flex-480="vstripe" data-childs="col -center">
                        <div class="block">
                            <h2>Daily Menu</h2>
                            <figure>
                                <img src="/images/pic1.png" width="232" height="111" alt="">
                            </figure>
                            <div>
                                <p>Agedame tuna roll</p>
                                <p>Maki de atun crujiente, servido sobre chips de tempura, salsa dinamita y salsa ponzu.</p>
                            </div>
                        </div>
                        <div class="block">
                            <h2>Specials</h2>
                            <figure>
                                <img src="/images/pic2.png" width="232" height="110" alt="">
                            </figure>
                            <div>
                                <p>Agedame tuna roll</p>
                                <p>Maki de atun crujiente, servido sobre chips de tempura, salsa dinamita y salsa ponzu.</p>
                            </div>
                        </div>
                        <div class="block">
                            <h2>Catering</h2>
                            <figure>
                                <img src="/images/pic3.png" width="232" height="111" alt="">
                            </figure>
                            <div>
                                <p>Agedame tuna roll</p>
                                <p>Maki de atun crujiente, servido sobre chips de tempura, salsa dinamita y salsa ponzu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-gallery" data-flex="stripe w" data-flex-480="vstripe">
                        <div class="block">
                            <h3 data-flex="-end"><i class="icon-menu"></i>Menu items</h3>
                            <div data-flex="stripe" data-flex-480="start">
                                <ul>
                                    <li>Appetizers</li>
                                    <li>Hot tapas</li>
                                    <li>Soups and Salads</li>
                                    <li>Accompaniments</li>
                                    <li>Vegetarian Dish</li>
                                    <li>Chicken Dish</li>
                                    <li>Seafood Dish</li>
                                    <li>Vegetarian Sauce</li>
                                    <li>Red Sauce</li>
                                </ul>
                                <ul>
                                    <li>Seafood Dish</li>
                                    <li>Vegetarian Sauce</li>
                                    <li>Red Sauce</li>
                                    <li>Seafood Sauce</li>
                                    <li>Deserts</li>
                                    <li>Seafood Dish</li>
                                    <li>Vegetarian Sauce</li>
                                    <li>Red Sauce</li>
                                </ul>
                            </div>
                        </div>
                        <div class="block">
                            <h3 data-flex="-end"><i class="icon-player"></i>Food videos</h3>
                            <div class="video-wrap">
                                <div class="video-container" data-video="16:9">
                                    <iframe src="https://www.youtube.com/embed/NgJHbvGd_q0" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <a href="#" class="see-more">See More Videos ></a>
                        </div>
                        <div class="block">
                            <h3 data-flex="-end"><i class="icon-testimonials"></i>Testimonials</h3>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Aliquam quam justo, interdum vitae fermetnum nec, volutpat ac massa. Cras posuere
                                    massa in diam euismod pretium. Lorem ipsum sit amet, consectetur adipiscing elit.</p>
                                <cite>Rafi, GraphicsFuel.com</cite>
                            </blockquote>
                        </div>
                    </div>

                    <div class="social-block" data-flex="">
                        <div data-flex="-center end"><span></span></div>
                        <div class="links links-social" data-flex="center" data-childs="-center center">
                            <a href="#"><i class="icon-twitter"></i></a>
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-linkedin"></i></a>
                            <a href="#"><i class="icon-mail"></i></a>
                        </div>
                        <div data-flex="-center start"><span></span></div>
                    </div>
                    <footer data-flex="col -center">
                        <div class="links-nav-footer" data-flex="center w">
                            <a href="#">Home</a>
                            <span>.</span>
                            <a href="#">About Us</a>
                            <span>.</span>
                            <a href="#">Menu</a>
                            <span>.</span>
                            <a href="#">Dinner</a>
                            <span>.</span>
                            <a href="#">Lunch</a>
                            <span>.</span>
                            <a href="#">Specials</a>
                            <span>.</span>
                            <a href="#">Party</a>
                            <span>.</span>
                            <a href="#">Catering</a>
                            <span>.</span>
                            <a href="#">Contact Us</a>
                        </div>
                        <div class="rights">Copyright & copy 2011 <a href="#">Cafe&Restaurant.com</a>All Rights Reserved. Site Designed by <a href="#">GraphicsFuel.com</a></div>
                    </footer>
                </div>
            </div>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>