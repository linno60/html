<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/css/reset-elements.css">
        <link type="text/css" rel="stylesheet" href="/css/styles.css">    
    </head>
    <body>
        <?= require_tpl('common/header') ?>
        <div class="breadcrumb-wrap">
            <ul class="breadcrumb">
                <li><a href="#">Home</a><span>></span></li>
                <li><a href="#">Electronics</a><span>></span></li>
                <li><a href="#">Mobile</a><span>></span></li>
                <li>Samsung Galaxy Ace</li>
            </ul> 
        </div>
        <div class="wrap-base product">
            <div class="product-viewer">
                <div class="product-slider">
                    <div class="side-slider">
                        <a href="#" class="btn"><i class="icon-accarrow"></i></a>
                        <img src="images/shape7.png" alt="" width="122" height="122">
                        <img src="images/shape7.png" alt="" width="122" height="122">
                        <img src="images/shape7.png" alt="" width="122" height="122">
                        <img src="images/shape7.png" alt="" width="122" height="122">
                        <a href="#" class="btn"><i class="icon-accarrow"></i></a>
                    </div>
                    <div>
                        <img src="images/shape6.png" alt="" width="530" height="530">
                        <div class="lbl lbl-price">$478</div>
                    </div>
                </div>
                <div class="product-description">
                    <h1>Samsung Galaxy Ace</h1>
                    <div class="reviews">
                        <div class="ratings-result"></div>
                        <a href="#">2 Review(s)</a>|
                        <a href="#">Add Your Review</a>
                    </div>
                    <dl>
                        <dt>Availability:</dt><dd> In Stock</dd>
                        <dt>Product Code:</dt><dd> 483512569</dd>
                        <dt>Brand:</dt><dd> Apple</dd>
                    </dl>
                    <div class="switch-wrap">
                        <h2>Select Color:</h2>
                        <div class="switch color">
                            <a href="#" id="c1"></a>
                            <a href="#" id="c16"></a>
                            <a href="#" id="c17"></a>
                            <a href="#" id="c18"></a>
                            <a href="#" id="c19"></a>
                            <a href="#" id="c20"></a>
                            <a href="#" id="c21"></a>
                        </div>
                        <h2>Select Size:</h2>
                        <div class="switch">
                            <a href="#" class="btn btn-size">xs</a>
                            <a href="#" class="btn btn-size">s</a>
                            <a href="#" class="btn btn-size">m</a>
                            <a href="#" class="btn btn-size">l</a>
                            <a href="#" class="btn btn-size">xl</a>
                            <a href="#" class="btn btn-size">xxl</a>
                        </div>
                    </div>
                    <div class="spinner-wrap">
                        <div class="spinner">
                            <div>1</div>
                            <div class="btns">
                                <div class="btn"><i class="icon-spinner-up"></i></div>
                                <div class="btn"><i class="icon-spinner-down"></i></div>
                            </div>
                        </div>
                        <button><span class="btn btn-add-lg">add to cart</span></button>
                    </div>
                    <div class="share-wrap">
                        <div>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="#" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                        <div class="add-this">
                            <span>Share:</span>
                            <a href="#" class="btn btn-add-facebook"></a>
                            <a href="#" class="btn btn-add-twitter"></a>
                            <a href="#" class="btn btn-add-mail"></a>
                            <a href="#" class="btn btn-add-print"></a>
                            <a href="#" class="btn btn-add-this"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-middle">
                <div class="tab">
                    <input type="radio" id="tab1" name="tab-label">
                    <label for="tab1">description</label>
                    <div class="tab-pane">
                        <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean <a href="#">volutpat lacus</a> at dolor blandit, vitae lobortisante semper. In ut rutrum diam, ac congue turpis. Ut bibendum metusfringilla, blandit elit at, commodo neque. Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet.</p>
                        <p>Sed sed interdum diam. Donec sit amet enim tempor, dapibus nunc eu, tincidunt mi. Vivamus dignissim nisl eu euismod ullamcorper. Donec pellentesque diam id est tristique vestibulum. Donec eget feugiat ante. Integerarcu libero, dictum nec congue sed, faucibus sit amet lectus. </p>
                        <p>Phasellus consequat id purus in convallis. Nulla quis nunc auctor, pretium enimnec, tristique magna. Vivamus vitae arcu faucibus, dictum magna vel, adipiscing justo. Sed nec ullamcorper lacus. Aenean tincidunt tincidunt ligula.</p>
                    </div>
                    <input type="radio" id="tab2" name="tab-label">
                    <label for="tab2">details</label>
                    <div class="tab-pane">
                        <p>The perfect mix of portability and performance in a slim 1" form factor:</p>
                        <ul>
                            <li>3rd gen Intel® Core™ i7 quad core processor available;</li>
                            <li>Windows 8 Pro available;</li>
                            <li>13.3" and 15.5" screen sizes available;</li>
                            <li>Double your battery life with available sheet battery;</li>
                            <li>4th gen Intel® Core™ i7 processor available;</li>
                            <li>Windows 8 Pro available;</li>
                            <li>Full HD TRILUMINOS IPS touchscreen (1920 x 1080);</li>
                            <li>Super fast 512GB PCIe SSD available;</li>
                            <li>Ultra-light at just 2.34 lbs.</li>
                        </ul>
                    </div>
                    <input type="radio" id="tab3" name="tab-label" checked>
                    <label for="tab3">comments</label>
                    <div class="tab-pane">
                        <div class="hdr">
                            <h3>1 Review for <a href="#">"Samsung Galaxy Ace"</a></h3>
                        </div>
                    </div>
                    <input type="radio" id="tab4" name="tab-label">
                    <label for="tab4">accessories</label>
                    <div class="tab-pane">
                        <figure>                                    
                            <a href="#" class="figure-wrapper">
                                <div class="lbl lbl-price">$19</div>
                                <img src="images/shape1.png" alt="">
                            </a>
                            <div class="ratings-container clearfix">
                                <div class="ratings">
                                    <div class="ratings-result"></div>
                                </div>                                        
                            </div>
                            <figcaption>Philips MP Digital Camera</figcaption>
                            <div class="btns">
                                <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                                <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                                <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                                <a href="#" class="btn btn-check"><i class="icon-product-check"></i></a>
                            </div>
                        </figure>
                        <figure>                                    
                            <a href="#" class="figure-wrapper">
                                <div class="lbl lbl-discount">-30%</div>
                                <div class="lbl lbl-price">$75</div>
                                <img src="images/shape1.png" alt="">
                            </a>
                            <div class="ratings-container clearfix">
                                <div class="ratings"></div>                                        
                            </div>
                            <figcaption>BenQ E2220HD</figcaption>
                            <div class="btns">
                                <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                                <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                                <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                                <a href="#" class="btn btn-check"><i class="icon-product-check"></i></a>
                            </div>
                        </figure>
                    </div>
                    <input type="radio" id="tab5" name="tab-label">
                    <label for="tab5">video</label> 
                    <div class="tab-pane">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/vUkjWypJjKk" frameborder="0" allowfullscreen></iframe>                                                
                    </div>
                </div>
                <aside class="featured">
                    <div class="hdr-wrap">
                        <h3>featured</h3>
                        <div class="arrows">
                            <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-small-left"></i></a>
                            <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-small-right"></i></a>
                        </div>
                    </div>
                    <div class="featured-product">
                        <a href="#">
                            <img src="images/shape5.png" alt="">
                        </a>
                        <div>
                            <h5>Jacket Suiting Blazer</h5>
                            <div class="ratings-result"></div>
                            <span>$40</span>
                        </div>
                    </div>
                    <div class="featured-product">
                        <a href="#">
                            <img src="images/shape5.png" alt="">
                        </a>
                        <div>
                            <h5>Gap Graphic Cuffed</h5>
                            <div class="ratings-result"></div>
                            <span>$18.5</span>
                        </div>
                    </div>
                    <div class="featured-product">
                        <a href="#">
                            <img src="images/shape5.png" alt="">
                        </a>
                        <div>
                            <h5>Women's Lauren Dress</h5>
                            <span>$30</span>
                        </div>
                    </div>
                </aside>
            </div>
            <section class="sale">
                <div class="hdr-wrap">
                    <div>
                        <h1 class="h1">Also Purchased</h1>
                        <p>Only with us you can get a new model with a discount.</p>
                    </div>
                    <div class="arrows">
                        <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-left"></i></a>
                        <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-right"></i></a>
                    </div>
                </div>
                <div class="sale-row">
                    <figure>                                    
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-discount">-45%</div>
                            <div class="lbl lbl-price">$40</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result"></div>
                            </div>                                        
                        </div>
                        <figcaption>Sony VAIO Tap 20</figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="#" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure>                                    
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-discount">-30%</div>
                            <div class="lbl lbl-price">$435</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings"></div>                                        
                        </div>
                        <figcaption>BenQ E2220HD</figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="#" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure>                                    
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-price">$19</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result"></div>
                            </div>                                        
                        </div>
                        <figcaption>Philips MP Digital Camera</figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="#" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure>                                    
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-discount">-30%</div>
                            <div class="lbl lbl-price">$75</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings"></div>                                        
                        </div>
                        <figcaption>BenQ E2220HD</figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="#" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                </div>
            </section> 
        </div>
        <?= require_tpl('common/footer') ?>
    </body>
</html>


