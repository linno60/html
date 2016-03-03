<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Foodie</title>
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
        <header>        
            <a name="top"></a>
            <div class="top-bar">
                <div class="lwrap" data-flex="axis">
                    <span>1-888-123-4567</span>
                    <small>Free Ground Shipping for Products over $100</small>
                    <div class="links-social" data-flex="center w" data-childs="-center center">
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-rss"></i></a>
                        <a href="#"><i class="icon-mail"></i></a>
                    </div>
                    <small>My Account</small>
                    <div data-flex="center">
                        <a href="#" class="btn btn-cart">Shop</a>
                        <a href="#" class="lbl lbl-total">$0.00</a>
                    </div>
                </div>
            </div>
            <div class="lwrap" data-flex="stripe">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="116" height="117" alt="Foodie">
                </a>
                <div data-flex="vaxis">
                    <div class="nav" data-flex="-center">
                        <nav class="links-nav" data-flex="center w" data-childs="-center center">
                            <a href="#" class="active">specials</a>
                            <a href="#">fruit &amp; veg</a>
                            <a href="#">food products</a>
                            <a href="#">locate store</a>
                            <a href="#">fan club</a>
                        </nav>
                    </div>
                    <form action="#" method="post" data-flex class="form-search">
                        <input type="search" name="input" placeholder="Enter Product Details">
                        <button><span class="btn btn-submit">search<i class="icon-search"></i></span></button>
                    </form>                                          
                </div>                    
                <div data-flex="col -center center">
                    <a href="#" class="btn btn-sign">sign in</a>
                    <a href="#" class="btn btn-register">register</a>
                </div>
            </div>
        </header>
        <div class="lwrap">
            <div class="slider" data-flex='stripe'>
                <figure><img src="/images/sliderimg.png" width="566" height="342" alt=""></figure>
                <div data-flex="stripe">
                    <div data-flex='col -start center'>
                        <h1 data-flex='col'><small>The</small>Mango<span>Shop</span></h1>
                        <a href="#" class="btn btn-slider">Shop Mangos</a>
                    </div>
                    <div class="slider-items" data-flex='vstripe'>
                        <a href="#"><figure><img src="/images/slider2.png" width="167" height="99" alt=""></figure></a> 
                        <a href="#" class="active"><figure><img src="/images/slider3.png" width="167" height="99" alt=""></figure></a> 
                        <a href="#"><figure><img src="/images/slider4.png" width="167" height="99" alt=""></figure></a> 
                    </div>
                </div>
            </div>
            <div data-flex="stripe">
                <aside class="sidebar">
                    <div class="categories">
                        <h3 class="hdr">Categories</h3>
                        <div class="links-categories" data-flex="col -start">
                            <a href="#">→ Arts</a> 
                            <a href="#">→ Beauty</a>
                            <a href="#">→ Books</a>
                            <a href="#">→ Cart Software</a>
                            <a href="#">→ Electronics</a>
                            <a href="#">→ Fashion / Clothing</a>
                            <a href="#">→ Food</a>
                            <a href="#">→ Furniture</a>
                            <a href="#">→ Home Goods</a>
                            <a href="#">→ Jewelry</a>
                            <a href="#">→ Lingerie</a>
                            <a href="#">→ Music</a>
                            <a href="#">→ Office Supplies</a>
                            <a href="#">→ Printing</a>
                            <a href="#">→ Software</a>
                        </div>
                    </div>
                    <div class="reviews">
                        <h2 class="title">Product Reviews</h2>
                        <div>
                            <article class="clearfix">
                                <figure data-flex><img src="/images/img1.png" width="57" height="57" alt=""></figure>
                                <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                <time>Tue, June 2011</time>
                            </article>
                            <article class="clearfix">
                                <figure><img src="/images/img1.png" width="57" height="57" alt=""></figure>
                                <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                <time>Tue, June 2011</time>
                            </article>
                            <article class="clearfix">
                                <figure><img src="/images/img1.png" width="57" height="57" alt=""></figure>
                                <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                <time>Tue, June 2011</time>
                            </article>
                        </div>
                        <a href="#" class="btn btn-buy">more reviews &rarr;</a>                        
                    </div>
                    <div class='payment'>
                        <h2 class="title">Payment Methods</h2>
                        <div data-flex="stripe w">
                            <figure><img src="/images/paypall.png" width="42" height="26" alt=""></figure>
                            <figure><img src="/images/visa.png" width="42" height="26" alt=""></figure>
                            <figure><img src="/images/mastercard.png" width="42" height="26" alt=""></figure>
                            <figure><img src="/images/discover.png" width="42" height="26" alt=""></figure>
                            <figure><img src="/images/payment.png" width="42" height="26" alt=""></figure>
                            <figure><img src="/images/westernunion.png" width="42" height="26" alt=""></figure>
                            <figure><img src="/images/bank.png" width="42" height="26" alt=""></figure>
                            <figure><img src="/images/moneyorder.png" width="42" height="26" alt=""></figure>
                        </div>
                    </div>                    
                </aside>
                <div>
                    <div class='featured'>
                        <h2 class="title">Today's Featured Products</h2>
                        <div data-flex='stripe' data-childs="col -start">
                            <article>
                                <figure><img src="/images/featured1.png" width="207" height="102" alt=""></figure>                                  
                                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit.</p>
                                <span class='price'>Price: <strong>$23.00</strong></span>
                                <a href="#" class="buy">→ <span>Buy Now</span></a>                              
                            </article> 
                            <article>
                                <figure><img src="/images/featured2.png" width="207" height="102" alt=""></figure>                                
                                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit.</p>
                                <span class='price'>Price: <strong>$23.00</strong></span>
                                <a href="#" class="buy">→ <span>Buy Now</span></a>                             
                            </article> 
                            <article>
                                <figure><img src="/images/featured3.png" width="207" height="102" alt=""></figure>                                   
                                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit.</p>
                                <span class='price'>Price: <strong>$23.00</strong></span>
                                <a href="#" class="buy">→ <span>Buy Now</span></a>                                
                            </article> 
                        </div>
                    </div>
                    <div class='popular'>
                        <h2 class="title">Popular Products</h2>
                        <div data-flex='stripe w'>
                            <article>
                                <figure><img src="/images/popular1.png" width="156" height="116" alt=""></figure>
                                <div>
                                    <p>Lorem ipsum dolor sit amet cons</p>
                                    <span class='price'>Price: <strong>$23.00</strong></span>
                                    <div data-flex='stripe'>
                                        <a href="#" class="btn btn-buy">buy &rarr;</a>
                                        <a href='#' class='like'>120</a>
                                    </div>   
                                </div>                       
                            </article>
                            <article>
                                <figure><img src="/images/popular2.png" width="156" height="116" alt=""></figure>
                                <div>
                                    <p>Lorem ipsum dolor sit amet cons</p>
                                    <span class='price'>Price: <strong>$23.00</strong></span>
                                    <div data-flex='stripe'>
                                        <a href="#" class="btn btn-buy">buy &rarr;</a>
                                        <a href='#' class='like'>120</a>
                                    </div>   
                                </div>                           
                            </article>
                            <article>
                                <figure><img src="/images/popular3.png" width="156" height="116" alt=""></figure>
                                <div>
                                    <p>Lorem ipsum dolor sit amet cons</p>
                                    <span class='price'>Price: <strong>$23.00</strong></span>
                                    <div data-flex='stripe'>
                                        <a href="#" class="btn btn-buy">buy &rarr;</a>
                                        <a href='#' class='like'>120</a>
                                    </div>   
                                </div>                           
                            </article>
                            <article>
                                <figure><img src="/images/popular4.png" width="156" height="116" alt=""></figure>
                                <div>
                                    <p>Lorem ipsum dolor sit amet cons</p>
                                    <span class='price'>Price: <strong>$23.00</strong></span>
                                    <div data-flex='stripe'>
                                        <a href="#" class="btn btn-buy">buy &rarr;</a>
                                        <a href='#' class='like'>120</a>
                                    </div>   
                                </div>                           
                            </article>
                            <article>
                                <figure><img src="/images/popular1.png" width="156" height="116" alt=""></figure>
                                <div>
                                    <p>Lorem ipsum dolor sit amet cons</p>
                                    <span class='price'>Price: <strong>$23.00</strong></span>
                                    <div data-flex='stripe'>
                                        <a href="#" class="btn btn-buy">buy &rarr;</a>
                                        <a href='#' class='like'>120</a>
                                    </div>   
                                </div>                          
                            </article>
                            <article>
                                <figure><img src="/images/popular2.png" width="156" height="116" alt=""></figure>
                                <div>
                                    <p>Lorem ipsum dolor sit amet cons</p>
                                    <span class='price'>Price: <strong>$23.00</strong></span>
                                    <div data-flex='stripe'>
                                        <a href="#" class="btn btn-buy">buy &rarr;</a>
                                        <a href='#' class='like'>120</a>
                                    </div>   
                                </div>                            
                            </article>
                            <article>
                                <figure><img src="/images/popular3.png" width="156" height="116" alt=""></figure>
                                <div>
                                    <p>Lorem ipsum dolor sit amet cons</p>
                                    <span class='price'>Price: <strong>$23.00</strong></span>
                                    <div data-flex='stripe'>
                                        <a href="#" class="btn btn-buy">buy &rarr;</a>
                                        <a href='#' class='like'>120</a>
                                    </div>   
                                </div>                           
                            </article>
                            <article>
                                <figure><img src="/images/popular4.png" width="156" height="116" alt=""></figure>
                                <div>
                                    <p>Lorem ipsum dolor sit amet cons</p>
                                    <span class='price'>Price: <strong>$23.00</strong></span>
                                    <div data-flex='stripe'>
                                        <a href="#" class="btn btn-buy">buy &rarr;</a>
                                        <a href='#' class='like'>120</a>
                                    </div>   
                                </div>                            
                            </article>
                        </div>
                    </div>
                    <div class="pagination" data-flex="center w" data-childs="-center center">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">Next&gt;&gt;</a>
                        <a href="#">Last&gt;&gt;</a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe w">
                <div>
                    <h5>Company</h5>
                    <div class="links-footer" data-flex="col -start">
                        <a href="#">Home</a>
                        <a href="#">About Us</a>
                        <a href="#">Blog</a>
                        <a href="#">Latest News</a>
                        <a href="#">Login</a>
                        <a href="#">Join Us</a>
                    </div>
                </div>
                <div>
                    <h5>Categories</h5>
                    <div class="links-footer" data-flex="col -start">
                        <a href="#">Lorem ipsum dolor sit</a>
                        <a href="#">Amet consectetur</a>
                        <a href="#">Adipiscin elit</a>
                        <a href="#">Cras suscipit lacus</a>
                        <a href="#">Dabipus ante mattis</a>
                        <a href="#">Adipiscing nibh placerat</a>
                    </div>
                </div>
                <div>
                    <h5>Information</h5>
                    <div class="links-footer" data-flex="col -start">
                        <a href="#">My Account</a>
                        <a href="#">Rewards</a>
                        <a href="#">Terms & Conditions</a>
                        <a href="#">Buying Guide</a>
                        <a href="#">FAQ</a>
                    </div>
                </div>
                <div>
                    <h5>Let's be friends</h5>
                    <div class="links-social" data-flex="w" data-childs="-center center">
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-rss"></i></a>
                        <a href="#"><i class="icon-mail"></i></a>
                    </div>
                    <h5>Subscribe</h5>
                    <form action="#" method="post" data-flex="col" class="form-email">
                        <label>Get free product updates & specials!</label>
                        <div data-flex>
                            <input type="email" name="input" placeholder="Enter Email">
                            <button><span class="btn btn-submit">submit</span></button>
                        </div>
                    </form>
                </div>
                <div data-flex='col'>
                    <span data-flex='-center'><i class="icon-secured"></i>Shop online with us safely & securely</span>
                    <span data-flex='-center'><i class="icon-pack"></i>We ship your orders anywhere!</span>
                    <div>
                        <a href='#top' class='anchor'>Top</a>
                    </div>
                </div>
                <div class='copyright'>
                    <span>&copy;2011 Foodie Shop - Terms - Privacy Policy - Designed by <a href='#'>GraphicsFuel.com</a></span>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>