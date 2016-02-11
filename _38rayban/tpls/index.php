<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rayban</title>
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
            var LAYOUT_WIDTH = 1160;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="wrap">
            <header class="lwrap" data-flex="axis" data-flex-640="around w" data-flex-480="vaxis">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="163" height="13" alt="RayBan">
                </a>
                <nav class="links-nav" data-flex="w" data-flex-960="center w" data-flex-640="around w">
                    <a href="#" class="active">home</a>
                    <a href="#">brands</a>
                    <a href="#">mens</a>
                    <a href="#">womens</a>
                    <a href="#">contact</a>
                </nav>
                <form action="#" method="post" data-flex="-center">
                    <input type="image" name="image" src="/images/icons/search.png">
                    <input type="search" name="search" placeholder="Search...">
                </form>
            </header>
            <section class="lwrap">
                <div class="banner" data-flex="stripe">
                    <div data-flex="col -start center">
                        <figure><img src="/images/logo-lg.png"></figure>
                        <h2>RB2132 901 NEW WAYFARER</h2>
                        <p>The Ray-Ban® Wayfarer® is simply the most recognizable style in sunglasses. The distinct shape is paired with the traditional Ray-Ban signature logo on the sculpted temples. After its initial design in 1952, the Ray-Ban Wayfarer quickly endeared itself to Hollywood filmmakers, celebrities, musicians and artists, solidifying its iconic status for years to come. </p>
                        <a href="#" class="btn btn-more">find out more</a>
                    </div>
                    <div data-flex="col -end between">
                        <figure><img src="/images/logo-sm.png"></figure>
                        <h3>never hide</h3>
                    </div>
                </div>
            </section>
            <section class="wrapper lwrap" data-flex="stripe w" data-flex-480="vstripe">
                <div class="product" data-flex="col">
                    <figure><img src="/images/product.png"></figure>
                    <div data-flex="col">
                        <h3>VAN DOREN AUTHENTIC</h3>
                        <span>(Parrot / Light Blue)</span>
                        <b>Size: UK9 <a href="#" class="link">[Change]</a></b>
                        <div data-flex="axis w">
                            <span class="price">&pound;54.00</span>
                            <a href="#" class="btn btn-add">add to basket</a>
                        </div>
                    </div>
                </div>
                <div class="sales">
                    <div class="graph">
                        <h2>Sales This Week</h2>
                        <figure><img src="/images/graph.png"></figure>
                        <div class="months" data-flex="around" data-childs="-center center">
                            <span>mon</span>
                            <span>tue</span>
                            <span>wed</span>
                            <span>thu</span>
                            <span>fri</span>
                            <span>sat</span>
                            <span>sun</span>
                        </div>
                    </div> 
                    <div class="caption" data-flex="around" data-childs="col -center center">
                        <div>
                            <strong>9,374</strong>
                            <small>Sales This Week</small>
                        </div>
                        <div>
                            <strong>125,457</strong>
                            <small>Total Sales</small>
                        </div>
                        <div>
                            <strong>+ 17%</strong>
                            <small>Total Income</small>
                        </div>
                    </div>
                </div>
                <div class="cart">
                    <h4>Shopping Bag</h4>
                    <div class="cart-items" data-childs="axis">
                        <div data-childs="axis">
                            <div>
                                <figure><img src="/images/product1.png"></figure>
                                <h5>Vans Vault 2012 Summer OG Era LX Pack<a href="#" class="link">[Remove]</a></h5>                            
                            </div>
                            <div>
                                <div class="counter" data-flex="-center center">1</div>
                                <strong>&pound;54.00</strong>
                            </div>                        
                        </div>
                        <div data-childs="axis">
                            <div>
                               <figure><img src="/images/product2.png"></figure>
                                <h5>Emerica Pure 12 T Shirt Red<a href="#" class="link">[Remove]</a></h5>
                            </div>
                            <div>
                                <div class="counter" data-flex="-center center">2</div>
                                <strong>&pound;32.00</strong>
                            </div>                        
                        </div>
                        <div data-childs="axis">
                            <div>
                                <figure><img src="/images/product3.png"></figure>
                                <h5>Fred Perry Dark Yellow Checked Shirt<a href="#" class="link">[Remove]</a></h5>
                            </div>
                            <div>
                                <div class="counter" data-flex="-center center">1</div>
                                <strong>&pound;70.00</strong>
                            </div>                        
                        </div>
                        <div>
                            <strong>Total: &pound;156.00</strong>
                            <a href="#" class="btn btn-checkout">checkout</a>
                        </div>
                    </div>
                </div>
                <div class="map" data-flex="vstripe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d171337.03543942622!2d35.17535355!3d47.856229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1441653049474"></iframe>
                    <div data-flex="col">
                        <strong>1600 Pacific Ave</strong>
                        <small>Venice, CA, United States</small>
                    </div>
                </div>
            </section>
            <footer class="footer lwrap" data-flex="axis">
                <a href="/" title="Return to the homepage" id="logo-alt">
                    <img src="/images/logoalt.png" width="125" height="10" alt="Rayban">
                </a>
                <div class="links-social" data-flex="-center w">
                    <a href="#"><i class="icon-twitter"></i></a>
                    <a href="#"><i class="icon-facebook"></i></a>
                    <a href="#"><i class="icon-vimeo"></i></a>
                    <a href="#"><i class="icon-pinterest"></i></a>
                </div>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>