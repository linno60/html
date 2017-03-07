<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bazar</title>
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
            };
        </script>
    </head>
    <body data-flex="col">
        <div>
            <header>
                <section class="top-bar">
                    <div class="lwrap" data-flex="axis">
                        <form action="/" method="post">
                            <select class="select-default">
                                <option>USD</option>
                                <option>GBP</option>
                                <option>EUR</option>
                                <option>UAH</option>
                            </select>
                            <select class="select-default">
                                <option>USD</option>
                                <option>GBP</option>
                                <option>EUR</option>
                                <option>UAH</option>
                            </select>
                            <select class="select-default">
                                <option>USD</option>
                                <option>GBP</option>
                                <option>EUR</option>
                                <option>UAH</option>
                            </select>
                        </form>
                        <div>

                        </div>
                    </div>
                </section>
                <section class="header">
                    <div class="lwrap" data-flex="axis">
                        <div data-flex="-center" class="phone">
                            <i class="icon-phone"></i>
                            <span>2300 - 3560 - 222</span>
                        </div>
                        <a href="/" title="Return to the homepage" id="logo">
                            <img src="/images/logo.png" width="165" height="77" alt="Bazar">
                        </a>
                        <div>
                            <a href="/" class="btn btn-cart"><i class="icon-cartw"></i><span class="lbl lbl-counter">0</span></a>
                        </div>
                    </div>
                </section>
                <section class="menu">
                    <div class="lwrap" data-flex="axis">
                        <form action="/" method="post" data-flex>
                            <select class="select-category">
                                <option>Select a category</option>
                                <option>Bed</option>
                                <option>Chair</option>
                                <option>Sofa</option>
                                <option>Table</option>
                                <option>Dining</option>
                            </select>
                            <input class="input-search" type="search" placeholder="Search products...">
                        </form>
                        <nav class="links-nav" data-flex="end w" data-childs="center -center">
                            <a href="/" class="active">home</a>
                            <a href="/">furniture</a>
                            <a href="/">chair</a>
                            <a href="/">table</a>
                            <a href="/">sofa</a>
                            <a href="/">bedroom</a>
                            <a href="/">blog</a>
                        </nav>
                    </div>
                </section>
            </header>
            <div class="lwrap" data-flex="stripe w">
                <section class="slider-deals">
                    <input name="anchor10" id='slide10-0' type="radio">
                    <input name="anchor10" id='slide10-1' type="radio">
                    <input name="anchor10" id='slide10-2' type="radio">
                    <input name="anchor10" id='play10' type="radio" checked>
                    <div class="slider-hdr" data-flex="axis">
                        <h3>hot deals</h3>
                        <div class='bullets'>
                            <label class='num0' for='slide10-0'></label>
                            <label class='num1' for='slide10-1'></label>
                            <label class='num2' for='slide10-2'></label>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <figure><img src="/images/deals1.jpg" width="360" height="289" alt=""></figure>
                            <div class="product-actions">
                                <h4><a href="/">Aenean Ru Bristique</a></h4>
                                <figure><img src="/images/rating.png" width="83" height="15" alt=""></figure>
                                <hr class="hr">
                                <div data-flex="axis">
                                    <div data-flex="w">
                                        <a href="/" class="btn btn-action" data-tooltip="Quick View"><i class="icon-eye"></i></a>
                                        <a href="/" class="btn btn-action" data-tooltip="Add to Wishlist"><i class="icon-like"></i></a>
                                        <a href="/" class="btn btn-action" data-tooltip="Add to Compare"><i class="icon-change"></i></a>
                                    </div>
                                    <div>
                                        <s>$350.00</s>
                                        <span class="lbl lbl-price">$15.00</span> 
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class='num0'>
                            <figure><img src="/images/deals1.jpg" width="360" height="289" alt=""></figure>
                            <div class="product-actions">
                                <h4><a href="/">Aenean Ru Bristique</a></h4>
                                <figure><img src="/images/rating.png" width="83" height="15" alt=""></figure>
                                <hr class="hr">
                                <div data-flex="axis">
                                    <div data-flex="w">
                                        <a href="/" class="btn btn-action" data-tooltip="Quick View"><i class="icon-eye"></i></a>
                                        <a href="/" class="btn btn-action" data-tooltip="Add to Wishlist"><i class="icon-like"></i></a>
                                        <a href="/" class="btn btn-action" data-tooltip="Add to Compare"><i class="icon-change"></i></a>
                                    </div>
                                    <div>
                                        <s>$350.00</s>
                                        <span class="lbl lbl-price">$15.00</span> 
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class='num1'>
                            <figure><img src="/images/deals2.jpg" width="360" height="289" alt=""></figure>
                            <div class="product-actions">
                                <h4><a href="/">Aenean Ru Bristique</a></h4>
                                <figure><img src="/images/rating.png" width="83" height="15" alt=""></figure>
                                <hr class="hr">
                                <div data-flex="axis">
                                    <div data-flex="w">
                                        <a href="/" class="btn btn-action" data-tooltip="Quick View"><i class="icon-eye"></i></a>
                                        <a href="/" class="btn btn-action" data-tooltip="Add to Wishlist"><i class="icon-like"></i></a>
                                        <a href="/" class="btn btn-action" data-tooltip="Add to Compare"><i class="icon-change"></i></a>
                                    </div>
                                    <div>
                                        <s>$350.00</s>
                                        <span class="lbl lbl-price">$15.00</span> 
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class='num2'>
                            <figure><img src="/images/deals3.jpg" width="360" height="289" alt=""></figure>
                            <div class="product-actions">
                                <h4><a href="/">Aenean Ru Bristique</a></h4>
                                <figure><img src="/images/rating.png" width="83" height="15" alt=""></figure>
                                <hr class="hr">
                                <div data-flex="axis">
                                    <div data-flex="w">
                                        <a href="/" class="btn btn-action" data-tooltip="Quick View"><i class="icon-eye"></i></a>
                                        <a href="/" class="btn btn-action" data-tooltip="Add to Wishlist"><i class="icon-like"></i></a>
                                        <a href="/" class="btn btn-action" data-tooltip="Add to Compare"><i class="icon-change"></i></a>
                                    </div>
                                    <div>
                                        <s>$350.00</s>
                                        <span class="lbl lbl-price">$15.00</span> 
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="slider-indoor">
                    <input name="anchor1" id='slide1-0' type="radio">
                    <input name="anchor1" id='slide1-1' type="radio">
                    <input name="anchor1" id='slide1-2' type="radio">
                    <input name="anchor1" id='play1' type="radio" checked>                
                    <ul>
                        <li><img src="/images/indoor1.png" width="751" height="505" alt=""></li>
                        <li class='num0'><img src="/images/indoor1.png" width="751" height="505" alt=""></li>
                        <li class='num1'><img src="/images/indoor1.png" width="751" height="505" alt=""></li>
                        <li class='num2'><img src="/images/indoor1.png" width="751" height="505" alt=""></li>
                    </ul>
                    <div class='description' data-childs="col center -center">
                        <label class='num0'>
                            <hgroup>
                                <h1>indoor <strong>furniture</strong></strong></h1>
                                <h3>save up to 50% of all furniture</h3>
                            </hgroup>
                            <a href="/" class="btn btn-shop">shop now</a>
                        </label>
                        <label class='num1'>
                            <hgroup>
                                <h1>indoor <strong>furniture</strong></strong></h1>
                                <h3>save up to 50% of all furniture</h3>
                            </hgroup>
                            <a href="/" class="btn btn-shop">shop now</a>
                        </label>
                        <label class='num2'>
                            <hgroup>
                                <h1>indoor <strong>furniture</strong></strong></h1>
                                <h3>save up to 50% of all furniture</h3>
                            </hgroup>
                            <a href="/" class="btn btn-shop">shop now</a>
                        </label>
                    </div>
                    <div class="arrows" data-flex>
                        <div class='arrowprev'>
                            <label class='num0' for='slide1-0'></label>
                            <label class='num1' for='slide1-1'></label>
                            <label class='num2' for='slide1-2'></label>
                        </div>
                        <div class='arrownext'>
                            <label class='num0' for='slide1-0'></label>
                            <label class='num1' for='slide1-1'></label>
                            <label class='num2' for='slide1-2'></label>
                        </div>
                    </div>
                </section>
                <ul class="list-options" data-flex="stripe" data-childs="col -center">
                    <li>
                        <span class="lbl lbl-option"><i class="icon-shipping"></i></span>
                        <strong>free shipping</strong>
                        <span>all order</span>
                    </li>
                    <li>
                        <span class="lbl lbl-option"><i class="icon-support"></i></span>
                        <strong>24/7 customer</strong>
                        <span>support</span>
                    </li>
                    <li>
                        <span class="lbl lbl-option"><i class="icon-back"></i></span>
                        <strong>money back</strong>
                        <span>guarantee</span>
                    </li>
                    <li>
                        <span class="lbl lbl-option"><i class="icon-order"></i></span>
                        <strong>member discount</strong>
                        <span>first oredr</span>
                    </li>
                </ul>
                <figure class="sofa">
                    <img src="/images/sofa.jpg" width="555" height="420" alt="">
                    <div class="overlay" data-flex="col -start end">
                        <small>guest room</small>
                        <b>sofa</b>
                        <span class="lbl lbl-discount">-20%</span>
                    </div>
                </figure>
                <div class="banners">
                    <section class="banner">
                        
                    </section>
                    <section class="banner">
                        
                    </section>
                </div>
            </div>
        </div>
        <footer>
            <section class="footer lwrap" data-flex="stripe w">
                <div>
                    <h4>information</h4>
                    <div class="links-footer" data-flex="col -start">
                        <a href="/">About us</a>
                        <a href="/">Privacy</a>
                        <a href="/">Conditions</a>
                        <a href="/">Online support</a>
                    </div>
                </div>
                <div>
                    <h4>my account</h4>
                    <div class="links-footer" data-flex="col -start">
                        <a href="/">Login</a>
                        <a href="/">My Cart</a>
                        <a href="/">Wishlist</a>
                        <a href="/">Checkout</a>
                    </div>
                </div>
                <div>
                    <h4>information</h4>
                    <div class="links-footer" data-flex="col -start">
                        <a href="/">Specials</a>
                        <a href="/">New Products</a>
                        <a href="/">Best Sellers</a>
                        <a href="/">Our Stores</a>
                    </div>
                </div>
                <div>
                    <h4>orders</h4>
                    <div class="links-footer" data-flex="col -start">
                        <a href="/">Payment options</a>
                        <a href="/">Shipping and delivery</a>
                        <a href="/">Returns</a>
                        <a href="/">Shipping</a>
                    </div>
                    <div class="links-payment" data-flex="w">
                        <a href="/"><i class="icon-visa"></i></a>
                        <a href="/"><i class="icon-mastercard"></i></a>
                        <a href="/"><i class="icon-discover"></i></a>
                        <a href="/"><i class="icon-ae"></i></a>
                        <a href="/"><i class="icon-paypal"></i></a>
                    </div>
                </div>
            </section>
            <section class="copyright">
                <div class="lwrap" data-flex="axis">
                    <span></span>
                    <span>&copy;Copyright 2016 Bazar | All Rights Reserved</span>
                    <div class="links-social" data-flex="end -center w">
                        <a href="/"><i class="icon-tw"></i></a>
                        <a href="/"><i class="icon-fb"></i></a>
                        <a href="/"><i class="icon-yt"></i></a>
                        <a href="/"><i class="icon-gp"></i></a>
                        <a href="/"><i class="icon-in"></i></a>
                        <a href="/"><i class="icon-pn"></i></a>
                    </div>
                </div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>