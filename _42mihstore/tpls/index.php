<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mihstore</title>
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
            var LAYOUT_WIDTH = 1006;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="lwrap">
            <header>
                <section class="top-bar" data-flex="axis">
                    <span>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog.</span>
                    <nav class="links-top" data-flex="end w">
                        <a href="#" class="active">my account</a>
                        <a href="#">wishlist</a>
                        <a href="#">contact</a>
                    </nav>
                </section>
                <section class="header" data-flex="-end between">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="226" height="47" alt="Mihstore">
                        <span>Free psd template by ICEwave Design</span>
                    </a>
                    <div class="links-social" data-flex="end w">
                        <a href="#"><i class="icon-rss"></i></a>
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-su"></i></a>
                        <a href="#"><i class="icon-ms"></i></a>                        
                    </div>
                </section>
                <section class="nav" data-flex="stripe" data-flex-640="vaxis r">                     
                    <nav class="links-nav" data-flex="w" data-flex-480="center w">
                        <a href="#" class="active">products</a>
                        <a href="#">ideas</a>
                        <a href="#">brands</a>
                        <a href="#">gifts</a>
                        <a href="#">stores</a>
                    </nav>
                    <div class="cart" data-flex="end w">
                        <span>shopping cart:</span>
                        <span class="quantity">3 items</span>
                        <span class="total">70$</span>
                        <a href="#" data-flex="-center center"></a>
                    </div>
                </section>
                <section class="page-title" data-flex="-center">
                    <span>page title</span>|
                    <p>Page description The quick, brown fox jumps over a lazy dog. DJs flock by when TV ax quiz prog.</p>
                </section>
            </header>
            <section class="content-wrap" data-flex="stripe" data-flex-640="vstripe">
                <div class="content">
                    <div class="slider" data-flex="-end">
                        <div class="lbl lbl-shop">
                            <span><em>Shop</em><br><b>women</b></span>
                            <small>Shoes fall 2011</small>
                        </div>
                        <figure><img src="/images/1.jpg"></figure>
                        <div data-flex="col -end end">
                            <a href="#" class="more">view more</a>
                            <figure><img src="/images/2.jpg"></figure>
                        </div>
                    </div>
                    <div class="products">
                        <h2 class="hdr">featured products</h2> 
                        <div data-flex="stripe w" data-childs="col between">                            
                            <figure>
                                <span class="lbl lbl-discount green">-50%</span>
                                <img src="/images/img3.png">
                                <figcaption data-flex="axis">
                                    <a href="#">Pure Slim Xe</a>
                                    <span>$60.00</span>
                                </figcaption>
                            </figure>
                            <figure>
                                <span class="lbl lbl-discount pink">-35%</span>
                                <img src="/images/img4.png">
                                <figcaption data-flex="axis">
                                    <a href="#">Pure Slim Xe</a>
                                    <span>$60.00</span>
                                </figcaption>
                            </figure>
                            <figure>
                                <span class="lbl lbl-discount azure">-20%</span>
                                <img src="/images/img5.png">
                                <figcaption data-flex="axis">
                                    <a href="#">Pure Slim Xe</a>
                                    <span>$60.00</span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src="/images/img6.png">
                                <figcaption data-flex="axis">
                                    <a href="#">Pure Slim Xe</a>
                                    <span>$60.00</span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src="/images/img7.png">
                                <figcaption data-flex="axis">
                                    <a href="#">Pure Slim Xe</a>
                                    <span>$60.00</span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src="/images/img8.png">
                                <figcaption data-flex="axis">
                                    <a href="#">Pure Slim Xe</a>
                                    <span>$60.00</span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src="/images/img3.png">
                                <figcaption data-flex="axis">
                                    <a href="#">Pure Slim Xe</a>
                                    <span>$60.00</span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src="/images/img4.png">
                                <figcaption data-flex="axis">
                                    <a href="#">Pure Slim Xe</a>
                                    <span>$60.00</span>
                                </figcaption>
                            </figure>
                            <figure class="hidden">
                                <img src="/images/img5.png">
                                <figcaption data-flex="axis">
                                    <a href="#">Pure Slim Xe</a>
                                    <span>$60.00</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="pagination" data-flex="center w" data-childs="-center center">
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                        </div>
                    </div>
                </div>
                <aside class="sidebar" data-flex-640="stripe w" data-flex-480="vstripe">
                    <div>
                        <h2 class="hdr">sort products</h2>
                        <form action="#" method="post" data-flex="col">
                            <div class="select">
                                <label data-flex="-center">Sort by</label>
                                <select>
                                    <option selected>price</option>
                                    <option>Cheap</option>
                                    <option>Expensive</option>
                                </select>
                            </div>
                            <div class="select">
                                <label data-flex="-center">Sort by</label>
                                <select>
                                    <option selected>style</option>
                                    <option>Sport</option>
                                    <option>Classic</option>
                                </select>
                            </div>
                            <div class="select">
                                <label data-flex="-center">Sort by</label>
                                <select>
                                    <option selected>colour</option>
                                    <option>White</option>
                                    <option>Black</option>
                                </select>
                            </div>
                            <div class="select">
                                <label data-flex="-center">Sort by</label>
                                <select>
                                    <option selected>season</option>
                                    <option>Summer</option>
                                    <option>Winter</option>
                                </select>
                            </div>
                            <div class="select">
                                <label data-flex="-center">Sort by</label>
                                <select>
                                    <option selected>rating</option>
                                    <option>High</option>
                                    <option>Low</option>
                                </select>
                            </div>                            
                        </form>
                    </div>
                    <div class="bestsellers">
                        <h2 class="hdr">best sellers</h2>
                        <div class="clearfix">
                            <figure><img src="/images/img9.png"></figure>                            
                            <a href="#">Product name here</a>
                            <p>Description Lorem ipsum sit am</p>
                            <span>Price: <strong>$110</strong>|</span><span>Country: <strong>US</strong></span>
                        </div>
                        <div class="clearfix">
                            <figure><img src="/images/img10.png"></figure>                           
                            <a href="#">Product name here</a>
                            <p>Description Lorem ipsum sit am</p>
                            <span>Price: <strong>$110</strong>|</span><span>Country: <strong>US</strong></span>                           
                        </div>
                        <div class="clearfix">
                            <figure><img src="/images/img9.png"></figure>                            
                            <a href="#">Product name here</a>
                            <p>Description Lorem ipsum sit am</p>
                            <span>Price: <strong>$110</strong>|</span><span>Country: <strong>US</strong></span>
                        </div>
                        <div class="clearfix">
                            <figure><img src="/images/img10.png"></figure>
                            <a href="#">Product name here</a>
                            <p>Description Lorem ipsum sit am</p>
                            <span>Price: <strong>$110</strong>|</span><span>Country: <strong>US</strong></span>
                        </div>
                    </div>
                    <div class="payment">
                        <h2 class="hdr">payment options</h2>
                        <div data-flex="around w" data-flex-640="-start w">
                            <a href="#"><img src="/images/paypal.png"></a>
                            <a href="#"><img src="/images/visa.png"></a>
                            <a href="#"><img src="/images/wirecard.png"></a>
                            <a href="#"><img src="/images/mastercard.png"></a>
                            <a href="#"><img src="/images/maestro.png"></a>
                            <a href="#"><img src="/images/cash.png"></a>
                            <a href="#"><img src="/images/paypal.png"></a>
                            <a href="#"><img src="/images/visa.png"></a>
                            <a href="#"><img src="/images/wirecard.png"></a>
                        </div>
                    </div>                    
                </aside>
            </section>
            <footer data-flex="axis">
                <span>&copy All Rights Reserved - ICEWave Design</span>
                <a href="#">go to top!</a>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>