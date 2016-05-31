<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ecommerce</title>
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
            <div class="header-top">
                <div class="lwrap" data-flex="axis" data-flex-480="vaxis">
                    <div class="links-top" data-flex="-end" data-flex-800="-end start w">
                        <a href="#">Account Sign In</a>
                        <span></span>
                        <a href="#">Register</a>
                        <span></span>
                        <a href="#">Buyers Guide</a>
                        <span></span>
                        <a href="#">About</a>
                        <span></span>
                        <a href="#">Blog</a>
                        <span></span>
                        <a href="#">Contact</a>
                    </div>
                    <div data-flex="-center" data-flex="w">
                        <div class="links-contacts" data-flex="" data-childs="-center">
                            <a href="#"><i class="icon-phone"></i>123.456.7890</a>
                            <a href="#"><i class="icon-message"></i>Live Help</a>
                        </div>
                        <div class="links-lang" data-flex="w">
                            <a href="#"><i class="icon-canada"></i></a>
                            <a href="#"><i class="icon-usa"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-main">
                <div class="lwrap" data-flex="axis" data-flex-480="vaxis">
                    <div data-flex="-center">
                        <img src="/images/bag.png" width="76" height="88" alt="">
                        <div data-flex="col -center">
                            <div class="items">0 items in your bag</div>
                            <a href="#" class="btn btn-checkout">Check Out</a>
                        </div>
                    </div>
                    <a href="/" title="Return to the homepage" class="logo">
                        <img src="/images/logo.png" width="231" height="94" alt="">
                    </a>
                    <form action="#" method="post" data-flex="">
                        <input placeholder="Search website" value="" name="input" type="search">
                        <button><span class="btn btn-go"></span></button>
                    </form>
                </div>
            </div>
            <div class="header-bottom">
                <div class="lwrap">
                    <div class="links-navgiation" data-flex="axis" data-flex-1024="center w" data-childs="-center center">
                        <a href="#" class="active">Home</a>
                        <a href="#">Latest arrivals</a>
                        <a href="#">Men's</a>
                        <a href="#">Women's</a>
                        <a href="#">Kids</a>
                        <a href="#">Brands</a>
                        <a href="#">Sale</a>
                        <a href="#">Gift Cards</a>
                        <a href="#">Freebies</a>
                    </div>
                </div>
            </div>
        </header>
        <div class="content">
            <div class="lwrap">
                <div class="slider">
                    <figure>
                        <img src="/images/pic.png" width="962" height="314" alt="">
                        <div class="slider-info" data-flex="axis">
                            <h2>Product Title</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras suscipit lacus dapibus ante mattis in adipiscing nibh placerat. Cras bibendum porta diam, non dignissim sapien malesuada vitae.</p>
                        </div>
                    </figure>
                    <figure class="sale">
                        <img src="/images/sale.png" width="317" height="176" alt="">
                    </figure>
                </div>
                <div class="content-main" data-flex="stripe" data-flex-640="vstripe r">
                    <div class="sidebar" data-flex-640="stripe w">
                        <div class="browse-categories">
                            <h3 data-flex='-center center'>Browse Categories</h3>
                            <ul class="list-categories" data-childs="center">
                                <li><a href="#">Lorem ipsum dolor sit</a></li>
                                <li><a href="#">Amet consectetur</a></li>
                                <li><a href="#">Adipiscin elit</a></li>
                                <li><a href="#">Cras suscipit lacus</a></li>
                                <li><a href="#">Dapibus ante mattis</a></li>
                                <li><a href="#">Adipiscing nibh placerat</a></li>
                                <li><a href="#">Cras bibendum</a></li>
                                <li><a href="#">Porta diam elit</a></li>
                                <li><a href="#">Adipiscing nibh placerat</a></li>
                                <li><a href="#">Cras bibendum</a></li>
                                <li><a href="#">Porta diam elit</a></li>
                            </ul>
                        </div>
                        <div class="join-block">
                            <form action="#" method="post" data-flex='col -center'>
                                <label>
                                    Join our newsletter list to get the latest updates
                                </label>
                                <input type="text" name="join" value="">
                                <button><span class="btn btn-join">Join Now</span></button>
                            </form>
                            <div class="links-follow" data-childs="-center">
                                <a href="#"><i class="icon-twitter"></i>Follow us on Twitter</a>
                                <a href="#"><i class="icon-fb"></i>Become our fan on Facebook</a>
                                <a href="#"><i class="icon-linkedin"></i>Connect with us on Linkedin</a>
                                <a href="#"><i class="icon-mail"></i>Sedn us your email enquiries</a>
                            </div>
                        </div>
                        <div class="pay-systems" data-flex='col -center'>
                            <figure>
                                <a href="#"><img src="/images/paypal.png" width="210" height="80" alt=""></a>
                            </figure>
                            <figure>
                                <a href="#"><img src="/images/logo2.png" width="182" height="44" alt=""></a>
                            </figure>
                            <figure>
                                <a href="#"><img src="/images/logo3.png" width="98" height="59" alt=""></a>
                            </figure>
                        </div>
                    </div>
                    <div class="right-col">
                        <div class="sort-block" data-flex="axis" data-flex-800="col -center">
                            <form action="#" method="post" data-flex="-center" data-flex-480="-center start w">
                                <label>
                                    Sort by:
                                </label>
                                <select class="sort">
                                    <option>Ascending</option>
                                    <option>Product Name</option>
                                    <option>Brand Name</option>
                                    <option></option>
                                </select>
                                <select class="sort">
                                    <option>Product Name</option>
                                    <option>Product Name</option>
                                    <option>Brand Name</option>
                                    <option></option>
                                </select>
                                <select class="sort">
                                    <option>Brand Name</option>
                                    <option>Product Name</option>
                                    <option>Brand Name</option>
                                    <option></option>
                                </select>
                            </form>
                            <div class="items-page" data-flex="-center">
                                Items per page:
                                <div class="paginations-top" data-flex="-center">
                                    <a href="#" class="visited">12</a>
                                    <span>/</span>
                                    <a href="#" class="visited">20</a>
                                    <span>/</span>
                                    <a href="#">30</a>
                                    <span>/</span>
                                    <a href="#">50</a>
                                </div>
                            </div>
                        </div>
                        <div class="works-gallery">
                            <h4>Our Products</h4>
                            <div data-flex='stripe w'>
                                <div class="block">
                                    <figure><img src="/images/pic2.png" width="156" height="116" alt=""></figure>
                                    <a href="#">Product Name</a>
                                    <dl>
                                        <dt>Price:</dt>
                                        <dd>$12.99</dd>
                                    </dl>
                                </div>
                                <div class="block">
                                    <figure><img src="/images/pic3.png" width="156" height="116" alt=""></figure>
                                    <a href="#">Product Name</a>
                                    <dl>
                                        <dt>Price:</dt>
                                        <dd>$12.99</dd>
                                    </dl>
                                </div> <div class="block">
                                    <figure><img src="/images/pic4.png" width="156" height="116" alt=""></figure>
                                    <a href="#">Product Name</a>
                                    <dl>
                                        <dt>Price:</dt>
                                        <dd>$12.99</dd>
                                    </dl>
                                </div> <div class="block">
                                    <figure><img src="/images/pic5.png" width="156" height="116" alt=""></figure>
                                    <a href="#">Product Name</a>
                                    <dl>
                                        <dt>Price:</dt>
                                        <dd>$12.99</dd>
                                    </dl>
                                </div>
                                <div class="block">
                                    <figure><img src="/images/pic6.png" width="156" height="116" alt=""></figure>
                                    <a href="#">Product Name</a>
                                    <dl>
                                        <dt>Price:</dt>
                                        <dd>$12.99</dd>
                                    </dl>
                                </div> <div class="block">
                                    <figure><img src="/images/pic7.png" width="156" height="116" alt=""></figure>
                                    <a href="#">Product Name</a>
                                    <dl>
                                        <dt>Price:</dt>
                                        <dd>$12.99</dd>
                                    </dl>
                                </div> <div class="block">
                                    <figure><img src="/images/pic15.png" width="156" height="116" alt=""></figure>
                                    <a href="#">Product Name</a>
                                    <dl>
                                        <dt>Price:</dt>
                                        <dd>$12.99</dd>
                                    </dl>
                                </div> <div class="block">
                                    <figure><img src="/images/pic8.png" width="156" height="116" alt=""></figure>
                                    <a href="#">Product Name</a>
                                    <dl>
                                        <dt>Price:</dt>
                                        <dd>$12.99</dd>
                                    </dl>
                                </div>
                                <div class="block">
                                    <figure><img src="/images/pic8.png" width="156" height="116" alt=""></figure>
                                    <a href="#">Product Name</a>
                                    <dl>
                                        <dt>Price:</dt>
                                        <dd>$12.99</dd>
                                    </dl>
                                </div>
                                <div class="block">
                                    <figure><img src="/images/pic10.png" width="156" height="116" alt=""></figure>
                                    <a href="#">Product Name</a>
                                    <dl>
                                        <dt>Price:</dt>
                                        <dd>$12.99</dd>
                                    </dl>
                                </div>
                                <div class="block">
                                    <figure><img src="/images/pic11.png" width="156" height="116" alt=""></figure>
                                    <a href="#">Product Name</a>
                                    <dl>
                                        <dt>Price:</dt>
                                        <dd>$12.99</dd>
                                    </dl>
                                </div>
                                <div class="block">
                                    <figure><img src="/images/pic12.png" width="156" height="116" alt=""></figure>
                                    <a href="#">Product Name</a>
                                    <dl>
                                        <dt>Price:</dt>
                                        <dd>$12.99</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="paginations-main" data-flex="-center center" data-childs="-center center">
                                <a href="#" class="number-pages active">1</a>
                                <a href="#" class="number-pages">2</a>
                                <a href="#" class="number-pages">3</a>
                                <a href="#" class="number-pages">4</a>
                                <a href="#" class="number-pages">5</a>
                                <a href="#">Next &gt;</a>
                                <a href="#">Last &gt;&gt;</a>
                            </div>
                        </div>
                        <div class="featured">
                            <h4>Featured Products</h4>
                            <div class="featured-slider" data-flex="stripe" data-chils="col -center">
                                <a href="#" class="btn btn-slider btn-slider-prev"><i class="icon-arrow-left"></i></a>
                                <div class="block">
                                    <figure>
                                        <a href="#">
                                            <img src="/images/pic17.png" width="147" height="101" alt="">
                                        </a>
                                    </figure>
                                    <a href="#">Elegant MP3 player skin PSD download</a>
                                </div>
                                <div class="block">
                                    <figure>
                                        <a href="#">
                                            <img src="/images/pic13.png" width="147" height="101" alt="">
                                        </a>
                                    </figure>
                                    <a href="#">Download shopping bag & icons (PSD & PNG)</a>
                                </div>
                                <div class="block">
                                    <figure>
                                        <a href="#"><img src="/images/pic14.png" width="147" height="101" alt=""></a>
                                    </figure>
                                    <a href="#">High resolution abasteract bokeh background</a>
                                </div>
                                <a href="#" class="btn btn-slider btn-slider-next"><i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-block">
            <div class="bottom-info lwrap" data-flex="axis" data-childs="-center">
                <div>
                    <i class="icon-secure"></i>
                    <a href="#">
                        Shop online with us safety & securely
                    </a>
                </div>
                <div>
                    <i class="icon-order"></i>
                    <a href="#">
                        We ship your orders anywhere!
                    </a>
                </div>

                <form action="#" method="post" data-flex="-center">
                    <input placeholder="Search website" value="" name="input" type="search">
                    <button><span class="btn btn-go"></span></button>
                </form>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe w">
                <div class="block">
                    <h5>Company</h5>
                    <ul class="list-footer">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Latest News</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Join Us</a></li>
                    </ul>
                </div>
                <div class="block">
                    <h5>Categories</h5>
                    <ul class="list-footer">
                        <li><a href="#">Loerm ipsum dolor sit</a></li>
                        <li><a href="#">Amet consectetur</a></li>
                        <li><a href="#">Adipiscin elit</a></li>
                        <li><a href="#">Cras suscipit lacus</a></li>
                        <li><a href="#">Dapibus ante mattis</a></li>
                        <li><a href="#">Adipiscing nibh placerat</a></li>
                    </ul>
                </div>
                <div class="block">
                    <h5>Information</h5>
                    <ul class="list-footer">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Rewards</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Buying Guide</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="block">
                    <h5>Social Network</h5>
                    <ul class="list-footer">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Rewards</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Buying Guide</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="block">
                    <h5>Contact Us</h5>
                    <div class="contact">
                        <div>Phone: 1.234.567.8901</div>
                        <div>Toll-Free: 1.234.567.8901</div>
                        <div>Fax: 1.234.567.8901</div>
                        <div>Eamil:<a href="mailto:">Seund us an email</a></div>
                    </div>
                    <div class="works-dsy">
                        MON-SAT 9am to 7:30pm
                        Sundays, holidays closed
                    </div>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>