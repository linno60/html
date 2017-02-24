<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Super Duper</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
        <link rel="stylesheet" href="/css/addons/data-flex.css">
        <link rel="stylesheet" href="/css/addons/data-tabs.css">
        <link rel="stylesheet" href="/css/addons/generic.css">  
        <link rel="stylesheet" href="/js/jquery/plugins/OwlCarousel2-2.2.0/dist/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="/css/elements.css">  
        <link rel="stylesheet" href="/css/styles.css">  
        <script>
            var LAYOUT_WIDTH = 1190;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            };
        </script>
    </head>
    <body>
        <div class="lwrap">
            <header data-flex>
                <div class="logo-wrap" data-flex="center -center">
                    <a href="/" title="Return to the homepage">
                        <img src="/images/logo.png" height="45" width="106" alt="">
                    </a>
                </div>
                <div>
                    <div class="nav" data-flex="axis">
                        <nav class="links-nav" data-flex="w" data-childs="center -center">
                            <a href="/" class="active">men</a>
                            <a href="/">women</a>
                            <a href="/">accessories</a>
                            <a href="/">sale</a>
                            <a href="/">brands</a>
                            <a href="/">articles</a>
                            <a href="/">elements</a>
                            <a href="/">about</a>
                            <a href="/">contact</a>
                        </nav>
                        <form action="#" method="post">
                            <select class="select-default">
                                <option>&dollar; US Dollar</option>
                                <option>&euro; EU Euro</option>
                                <option>&pound; BP Pound</option>
                            </select>
                            <select class="select-default">
                                <option>EN</option>
                                <option>FR</option>
                                <option>GE</option>
                            </select>
                        </form>
                    </div>
                    <div class="menu" data-flex="stripe">
                        <form action="#" method="post" data-flex="stripe">
                            <select class="select-alt">
                                <option>Men</option>
                                <option>Women</option>
                            </select>
                            <input class="input-search" type="search" name="search" placeholder="I want___">
                            <button class="btn btn-search"></button>
                        </form>
                        <div class="login" data-flex="axis">
                            <a href="/">Log in</a>
                            <a href="/">Wish list <span>(0)</span></a>
                        </div>
                        <a href="/" class="btn btn-cart">
                            <strong>$945.99</strong>
                            <small>2 items</small>
                        </a>
                    </div>
                </div>
            </header>
            <div data-flex="stripe">
                <main class="main">
                    <section class="products-carousel" data-flex="col">
                        <div class="hdr" data-flex="axis">
                            <h2>New products</h2>
                            <div class="custom-nav" id="custom-nav1"></div>
                        </div>
                        <div class="owl-carousel" id="carousel1">
                            <div>
                                <figure>
                                    <img src="/images/img1.jpg" width="289" height="236" alt="">
                                    <figcaption data-flex="col center -center">
                                        <div data-flex="stripe"><a href="/">Breach Snowboard Jacket</a><div><b>$549.95</b><s></s></div></div>
                                    </figcaption>
                                </figure>
                                <figure>
                                    <span class="lbl lbl-new">new</span>
                                    <img src="/images/img4.jpg" width="289" height="236" alt="">
                                    <figcaption data-flex="col center -center">
                                        <div data-flex="stripe"><a href="/">Leatt Adventure Body Protector Pressure</a><div><b>$179.99</b><s></s></div></div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div>
                                <figure>
                                    <img src="/images/img2.jpg" width="289" height="236" alt="">
                                    <figcaption data-flex="col center -center">
                                        <div data-flex="stripe"><a href="/">Encore Snowboard Jacket</a><div><b>$770.15</b><s>$1,270.15</s></div></div>
                                    </figcaption>
                                </figure>
                                <figure>
                                    <span class="lbl lbl-hot">hot</span>
                                    <img src="/images/img5.jpg" width="289" height="236" alt="">
                                    <figcaption data-flex="col center -center">
                                        <div data-flex="stripe"><a href="/">2L Swash Snowboard Jacket</a><div><b>$649.15</b><s></s></div></div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div>
                                <figure>
                                    <img src="/images/img3.jpg" width="289" height="236" alt="">
                                    <figcaption data-flex="col center -center">
                                        <div data-flex="stripe"><a href="/">The White Collection Tracker Snowboard</a><div><b>$1,550.35</b><s></s></div></div>
                                    </figcaption>
                                </figure>
                                <figure>
                                    <img src="/images/img6.jpg" width="289" height="236" alt="">
                                    <figcaption data-flex="col center -center">
                                        <div data-flex="stripe"><a href="/">Oneal 812 Graphic MX Lightweight Fiberglass</a><div><b>$288.99</b><s></s></div></div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div>
                                <figure>
                                    <img src="/images/img1.jpg" width="289" height="236" alt="">
                                    <figcaption data-flex="col center -center">
                                        <div data-flex="stripe"><a href="/">Breach Snowboard Jacket</a><div><b>$549.95</b><s></s></div></div>
                                    </figcaption>
                                </figure>
                                <figure>
                                    <span class="lbl lbl-new">new</span>
                                    <img src="/images/img4.jpg" width="289" height="236" alt="">
                                    <figcaption data-flex="col center -center">
                                        <div data-flex="stripe"><a href="/">Leatt Adventure Body Protector Pressure</a><div><b>$179.99</b><s></s></div></div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>                        
                    </section>
                    <section class="products-carousel" data-flex="col">
                        <div class="hdr" data-flex="axis">
                            <h2>Bestseller products</h2>
                            <div class="custom-nav" id="custom-nav2"></div>
                        </div>
                        <div class="owl-carousel" id="carousel2">
                            <figure>
                                <img src="/images/img7.jpg" width="289" height="236" alt="">
                                <figcaption data-flex="col center -center">
                                    <div data-flex="stripe"><a href="/">Glissade Womens hat</a><div><b>$49.95</b><s>$100.15</s></div></div>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src="/images/img8.jpg" width="289" height="236" alt="">
                                <figcaption data-flex="col center -center">
                                    <div data-flex="stripe"><a href="/">661 Comp II Entry Level Full Face Helmet</a><div><b>$159.15</b><s></s></div></div>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src="/images/img9.jpg" width="289" height="236" alt="">
                                <figcaption data-flex="col center -center">
                                    <div data-flex="stripe"><a href="/">specialized demo 8 2014</a><div><b>$10,110.99</b><s></s></div></div>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src="/images/img7.jpg" width="289" height="236" alt="">
                                <figcaption data-flex="col center -center">
                                    <div data-flex="stripe"><a href="/">Glissade Womens hat</a><div><b>$49.95</b><s>$100.15</s></div></div>
                                </figcaption>
                            </figure>
                        </div>
                    </section>
                    <section class="products-carousel" data-flex="col">
                        <div class="hdr" data-flex="axis">
                            <h2>Featured products</h2>
                            <div class="custom-nav" id="custom-nav3"></div>
                        </div>
                        <div class="owl-carousel" id="carousel3">
                            <figure>
                                <span class="lbl lbl-new">new</span>
                                <img src="/images/img10.jpg" width="289" height="236" alt="">
                                <figcaption data-flex="col center -center">
                                    <div data-flex="stripe"><a href="/">Men's House T-shirt</a><div><b>$49.95</b><s>$100.15</s></div></div>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src="/images/img11.jpg" width="289" height="236" alt="">
                                <figcaption data-flex="col center -center">
                                    <div data-flex="stripe"><a href="/">Encore Snowboard Jacket</a><div><b>$159.15</b><s></s></div></div>
                                </figcaption>
                            </figure>
                            <figure>
                                <span class="lbl lbl-hot">hot</span>
                                <img src="/images/img12.jpg" width="289" height="236" alt="">
                                <figcaption data-flex="col center -center">
                                    <div data-flex="stripe"><a href="/">SixSixOne Evo Wired Full Face</a><div><b>$240.00</b><s></s></div></div>
                                </figcaption>
                            </figure>
                            <figure>
                                <span class="lbl lbl-new">new</span>
                                <img src="/images/img10.jpg" width="289" height="236" alt="">
                                <figcaption data-flex="col center -center">
                                    <div data-flex="stripe"><a href="/">Men's House T-shirt</a><div><b>$49.95</b><s>$100.15</s></div></div>
                                </figcaption>
                            </figure>
                        </div>
                    </section>
                    <section class="products-carousel" data-flex="col">
                        <div class="owl-carousel" id="carousel4">
                            <figure><img src="/images/img13.jpg" width="261" height="236" alt=""></figure>
                            <figure><img src="/images/img14.jpg" width="261" height="236" alt=""></figure>
                            <figure><img src="/images/img15.jpg" width="261" height="236" alt=""></figure>
                            <figure><img src="/images/img13.jpg" width="261" height="236" alt=""></figure>
                        </div>
                    </section>
                </main>
                <aside class="sidebar">
                    <section class="tabs" data-tabs>
                        <div class="tablist">
                            <a href="#tab1" class="active"><i class="icon-men"></i>Men</a>
                            <a href="#tab2"><i class="icon-women"></i>Women</a>
                        </div>
                        <div class="tabset">
                            <div id="tab1" class="tabpanel active">
                                <div class="links-categories" data-flex="col" data-childs="-center">
                                    <a href="/">accessories</a>
                                    <a href="/">smartphone</a>
                                    <a href="/" class="active">lights & lasers</a>
                                    <a href="/">watches</a>
                                    <a href="/">cell phone goodies</a>
                                    <a href="/">travel & outdoors</a>
                                    <a href="/">geek tools</a>
                                    <a href="/">car gadgets</a>
                                    <a href="/">power & eco-friendly</a>
                                    <a href="/">electronic gadgets</a>
                                </div>
                            </div>
                            <div id="tab2" class="tabpanel">
                                <div class="links-categories" data-flex="col" data-childs="-center">
                                    <a href="/">power & eco-friendly</a>
                                    <a href="/" class="active">electronic gadgets</a>
                                    <a href="/">lights & lasers</a>
                                    <a href="/">watches</a>
                                    <a href="/">cell phone goodies</a>
                                    <a href="/">travel & outdoors</a>
                                    <a href="/">geek tools</a>
                                    <a href="/">car gadgets</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="tags">
                        <h2>Tags Widget</h2>
                        <div class="links-tags" data-flex="w" data-childs="-center">
                            <a href="/" class="active"><b>Themeforest</b></a>
                            <a href="/">Super</a>
                            <a href="/">Duper</a>
                            <a href="/">Theme</a>
                            <a href="/">Men</a>
                            <a href="/">Women</a>
                            <a href="/">Equipment</a>
                            <a href="/">Best</a>
                            <a href="/">Accessories</a>
                            <a href="/">Men</a>
                            <a href="/"><b>Themeforest</b></a>
                            <a href="/">Super</a>
                            <a href="/">Duper</a>
                            <a href="/">Theme</a>
                            <a href="/">Responsiv</a>
                            <a href="/">Men</a>
                            <a href="/">Women</a>
                            <a href="/">Equipment</a>
                        </div>
                        <a href="/" class="more">view all tags →</a>
                    </section>
                    <figure class="banner">
                        <img src="/images/sidebar1.jpg" width="270" height="300" alt="">
                        <h3>the<strong>elevation project</strong></h3>
                    </figure>
                    <section class="articles">
                        <h2>Articles Experts</h2>
                        <div class="links-default" data-flex="col -start">
                            <a href="/">LG Spectrum review</a>
                            <a href="/">Verizon Droid Xyboard 8.2 and 10.1 review</a>
                            <a href="/">Mac mini review (mid 2011)</a>
                            <a href="/">Wacom Inkling review</a>
                            <a href="/">Sonos Play: 3 review</a>
                            <a href="/">HTC Radar 4G review</a>
                            <a href="/">Canon PowerShot S100</a>
                            <a href="/">Apple iMac</a>
                            <a href="/">Apple MacBook Air (13-inch, mmid 2011)</a>
                            <a href="/">Nikon 1 J1</a>
                        </div>
                        <a href="/" class="more">view all →</a>
                    </section>
                    <figure class="banner alt">
                        <img src="/images/sidebar2.jpg" width="213" height="237" alt="">
                        <h3><strong>get gear crab goals</strong></h3>
                    </figure>
                    <figure class="banner">
                        <img src="/images/sidebar3.jpg" width="270" height="300" alt="">
                        <h3><strong>how do you</strong> measure up?</h3>
                    </figure>
                </aside>
            </div>
            <footer data-flex="stripe w">
                <section class="about">
                    <h2>About SuperDuper</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper </p>
                </section>
                <section class="twitter-box">
                    <h2>Twitter</h2>
                    <article>
                        <blockquote class="blockquote-twitter">As a result of your previous reccomendation :)</blockquote>
                        <time>31 minutes ago</time>
                    </article>
                    <article>
                        <blockquote class="blockquote-twitter">Emails that start with "Dear contact" make me feel so special</blockquote>
                        <time>50 minutes ago</time>
                    </article>
                </section>
                <section class="facebook-box">
                    <h2>Facebook</h2>
                </section>
                <section class="footer" data-flex="stripe w">
                    <div>
                        <h4>Category</h4>
                        <div class="links-footer" data-flex="col -start">
                            <a href="/">Men</a>
                            <a href="/">Women</a>
                            <a href="/">Climbing Equipment</a>
                            <a href="/">Backpacks/Bags</a>
                            <a href="/">Sleeping Bags</a>
                            <a href="/">Clearance Lines</a>
                        </div>
                    </div>
                    <div>
                        <h4>Customer Service</h4>
                        <div class="links-footer" data-flex="col -start">
                            <a href="/">My Wishlist</a>
                            <a href="/">My Order</a>
                            <a href="/">Orders And Returns</a>
                            <a href="/">Contacts</a>
                            <a href="/">Site Map</a>
                        </div>
                    </div>
                    <div>
                        <h4>My account</h4>
                        <div class="links-footer" data-flex="col -start">
                            <a href="/">About Us</a>
                            <a href="/">Privacy Policy</a>
                            <a href="/">Your Account</a>
                            <a href="/">Address Book</a>
                            <a href="/">Product Reviews</a>
                        </div>
                    </div>
                    <div>
                        <h4>Newsletter</h4>
                        <p>Join thousands of other people subscribe to our news.</p>
                        <form action="#" method="post" data-flex="stripe">
                            <input class="input-email" type="email" name="email" placeholder="Input your email">
                            <button class="btn btn-submit"></button>
                        </form>
                        <div class="links-social" data-flex="w">
                            <a href="/"><i class="icon-fb"></i></a>
                            <a href="/"><i class="icon-tw"></i></a>
                            <a href="/"><i class="icon-gp"></i></a>
                            <a href="/"><i class="icon-tb"></i></a>
                            <a href="/"><i class="icon-yt"></i></a>
                            <a href="/"><i class="icon-ig"></i></a>
                            <a href="/"><i class="icon-rs"></i></a>
                        </div>
                    </div>
                </section>
                <section class="copyright" data-flex="axis">
                    <span>Powered with love by <a href="/">Hezytheme</a>. SuperDuper - Premium Responsive Wordpress theme.</span>
                    <a href="/" class="anchor">Top</a>
                </section>
            </footer>
        </div>        
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
        <script src="/js/jquery/plugins/OwlCarousel2-2.2.0/dist/owl.carousel.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#carousel1').owlCarousel({
                    navContainer: '#custom-nav1',
                    navText: false,
                    nav: true,
                    responsive: {
                        0: {items: 1},
                        480: {items: 2},
                        640: {items: 3}
                    }
                });
            });
            $(document).ready(function () {
                $('#carousel2').owlCarousel({
                    navContainer: '#custom-nav2',
                    navText: false,
                    nav: true,
                    responsive: {
                        0: {items: 1},
                        480: {items: 2},
                        640: {items: 3}
                    }
                });
            });
            $(document).ready(function () {
                $('#carousel3').owlCarousel({
                    navContainer: '#custom-nav3',
                    navText: false,
                    nav: true,
                    responsive: {
                        0: {items: 1},
                        480: {items: 2},
                        640: {items: 3}
                    }
                });
            });
            $(document).ready(function () {
                $('#carousel4').owlCarousel({
                    navText: false,
                    nav: true,
                    responsive: {
                        0: {items: 1},
                        480: {items: 2},
                        640: {items: 3}
                    }
                });
            });
        </script>
    </body>
</html>