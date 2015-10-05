<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Product</title>
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/css/reset-elements.css">
        <link type="text/css" rel="stylesheet" href="/css/styles.css?<?= time() ?>">    
    </head>
    <body>
        <?= require_tpl('common/header') ?>
        <div class="breadcrumb-wrap">
            <ul class="breadcrumb">
                <li><a href="#">Home</a><span>></span></li>
                <li><a href="#">Electronics</a><span>></span></li>
                <li><a href="category-grid-list">Mobile</a><span>></span></li>
                <li>Samsung Galaxy Ace</li>
            </ul> 
        </div>
        <div class="wrap-base column">
            <div class="product-viewer">
                <div class="product-slider">
                    <div class="side-slider-wrap">
                        <a href="#" class="btn btn-up"><i class="icon-accarrow"></i></a>
                        <a href="#" class="btn btn-down"><i class="icon-accarrow"></i></a>
                        <div class="side-slider">                                                
                            <a href="#"><img src="images/shape8.png" alt="" width="122" height="122"></a>
                            <a href="#"><img src="images/shape8.png" alt="" width="122" height="122"></a>
                            <a href="#"><img src="images/shape8.png" alt="" width="122" height="122"</a>
                            <a href="#"><img src="images/shape8.png" alt="" width="122" height="122"></a>                        
                        </div>
                    </div>
                    <div class="main-slider">
                        <img src="images/shape6.png" alt="">
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
                            <input type="checkbox" id="c1" name="color">
                            <label for="c1"></label>
                            <input type="checkbox" id="c16" name="color">
                            <label for="c16"></label>
                            <input type="checkbox" id="c17" name="color">
                            <label for="c17"></label>
                            <input type="checkbox" id="c18" name="color">
                            <label for="c18"></label>
                            <input type="checkbox" id="c19" name="color">
                            <label for="c19"></label>
                            <input type="checkbox" id="c20" name="color">
                            <label for="c20"></label>
                            <input type="checkbox" id="c21" name="color">
                            <label for="c21"></label>
                        </div>
                        <h2>Select Size:</h2>
                        <div class="switch size">
                            <input type="checkbox" id="s1" name="size">
                            <label class="lbl lbl-size" for="s1">xs</label>
                            <input type="checkbox" id="s2" name="size">
                            <label class="lbl lbl-size" for="s2">s</label>
                            <input type="checkbox" id="s3" name="size">
                            <label class="lbl lbl-size" for="s3">m</label>
                            <input type="checkbox" id="s4" name="size">
                            <label class="lbl lbl-size" for="s4">l</label>
                            <input type="checkbox" id="s5" name="size">
                            <label class="lbl lbl-size" for="s5">xl</label>
                            <input type="checkbox" id="s6" name="size">
                            <label class="lbl lbl-size" for="s6">xxl</label>
                        </div>
                    </div>
                    <div class="spinner-wrap">
                        <div class="spinner">
                            <input type="text" placeholder="1">
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
                            <span>favorite</span>
                            <a href="#" class="btn btn-check"><i class="icon-product-check"></i></a>
                            <span>wishlist</span>
                        </div>
                        <div class="add-this">
                            <span>Share:</span>
                            <a href="#" class="btn btn-add-facebook"></a>
                            <a href="#" class="btn btn-add-twitter"></a>
                            <a href="#" class="btn btn-add-mail"></a>
                            <a href="#" class="btn btn-add-print"></a>
                            <div class="share-counter-wrap">
                                <a href="#" class="btn btn-add-this"></a>
                                <div class="share-counter">2m</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-middle">
                <div class="tabs tabs-product left">
                    <div class="_nav">
                        <a href="#tab1" class="active">description</a>
                        <a href="#tab2">details</a>
                        <a href="#tab3">comments</a>
                        <a href="#tab4">accessories</a>
                        <a href="#tab5">video</a>
                    </div>
                    <div class=" _content">
                        <div id="tab1" class="tab-pane">
                            <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean <a href="#">volutpat lacus</a> at dolor blandit, vitae lobortisante semper. In ut rutrum diam, ac congue turpis. Ut bibendum metusfringilla, blandit elit at, commodo neque. Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet.</p>
                            <p>Sed sed interdum diam. Donec sit amet enim tempor, dapibus nunc eu, tincidunt mi. Vivamus dignissim nisl eu euismod ullamcorper. Donec pellentesque diam id est tristique vestibulum. Donec eget feugiat ante. Integerarcu libero, dictum nec congue sed, faucibus sit amet lectus. </p>
                            <p>Phasellus consequat id purus in convallis. Nulla quis nunc auctor, pretium enimnec, tristique magna. Vivamus vitae arcu faucibus, dictum magna vel, adipiscing justo. Sed nec ullamcorper lacus. Aenean tincidunt tincidunt ligula.</p>                    
                        </div>
                        <div id="tab2" class="tab-pane">
                            <p>The perfect mix of portability and performance in a slim 1" form factor:</p>
                            <ul>
                                <li>3rd gen Intel&reg; Core&trade; i7 quad core processor available;</li>
                                <li>Windows 8 Pro available;</li>
                                <li>13.3" and 15.5" screen sizes available;</li>
                                <li>Double your battery life with available sheet battery;</li>
                                <li>4th gen Intel&reg; Core&trade; i7 processor available;</li>
                                <li>Windows 8 Pro available;</li>
                                <li>Full HD TRILUMINOS IPS touchscreen (1920 x 1080);</li>
                                <li>Super fast 512GB PCIe SSD available;</li>
                                <li>Ultra-light at just 2.34 lbs.</li>
                            </ul> 
                        </div>
                        <div id="tab3" class="tab-pane">
                            <div class="hdr">
                                <h3>1 Review for <a href="#">"Samsung Galaxy Ace"</a></h3>
                                <div class="ratings-result"></div>
                            </div>
                            <div class="hdr hidden">
                                <div>
                                    <h3>1 Review for </h3>
                                    <div class="ratings-result"></div>
                                </div>
                                <h3><a href="#">"Samsung Galaxy Ace"</a></h3>                            
                            </div>
                            <div class="comment">
                                <a href="#">
                                    <img src="images/avatar.png" alt="">
                                </a>
                                <div>
                                    <div class="hdr">                                    
                                        <div>
                                            <h4>Duis tincidunt augue purus</h4>
                                            <div>
                                                <a href="#" class="lnk-name">Anna Retallick</a>
                                                <time>12.05.2013</time>
                                            </div>
                                        </div>
                                        <div class="ratings-result"></div>
                                    </div>
                                    <p>Cgestas metus id nunc vestibulum dictum. Etiam dapibus nunc nec risus egestas vel bibend eros vehicula. Suspendissefacilisis neque in augue feugiat tempor. Donec velit diam,pharetra lobortis non, ullamcorper eget lectus...</p>
                                    <a href="#" class="btn btn-add">add&nbsp;review</a>
                                </div>
                            </div>
                        </div>
                        <div id="tab4" class="tab-pane">
                            <div class="accessories-wrap">
                                <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-left"></i></a>
                                <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-right"></i></a>
                                <figure>                                    
                                    <a href="#" class="figure-wrapper">
                                        <div class="lbl lbl-price">$108</div>
                                        <img src="images/shape1.png" alt="">
                                    </a>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings"></div>                                        
                                    </div>
                                    <figcaption>Apple TV 3.0 with Blu-ray and HD tuner</figcaption>
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
                                    <figcaption>Ipnone Case Cover Original</figcaption>
                                    <div class="btns">
                                        <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                                        <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                                        <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                                        <a href="#" class="btn btn-check"><i class="icon-product-check"></i></a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div id="tab5" class="tab-pane">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/vUkjWypJjKk" frameborder="0" allowfullscreen></iframe>                                                                    
                        </div>

                    </div>
                </div>
                <aside class="featured">
                    <div class="hdr-wrap">
                        <h3>related</h3>
                        <div class="arrows">
                            <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-small-left"></i></a>
                            <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-small-right"></i></a>
                        </div>
                    </div>
                    <div class="featured-wrap">
                        <div class="featured-product">
                            <a href="#">
                                <img src="images/shape5.png" alt="">
                            </a>
                            <div>
                                <h5><a href="#">Jacket Suiting Blazer</a></h5>
                                <div class="ratings-result"></div>
                                <span>$40</span>
                            </div>
                        </div>
                        <div class="featured-product">
                            <a href="#">
                                <img src="images/shape5.png" alt="">
                            </a>
                            <div>
                                <h5><a href="#">Gap Graphic Cuffed</a></h5>
                                <div class="ratings-result"></div>
                                <span>$18.5</span>
                            </div>
                        </div>
                        <div class="featured-product">
                            <a href="#">
                                <img src="images/shape5.png" alt="">
                            </a>
                            <div>
                                <h5><a href="#">Women's Lauren Dress</a></h5>
                                <span>$30</span>
                            </div>
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
                        <figcaption><a href="#">Sony VAIO Tap 20</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
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
                        <figcaption><a href="#">BenQ E2220HD</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
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
                        <figcaption><a href="#">Philips MP Digital Camera</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
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
                        <figcaption><a href="#">BenQ E2220HD</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                </div>
            </section> 
        </div>
        <?= require_tpl('common/footer') ?>
        <script src="/js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="/js/functions.js" type="text/javascript"></script>
        <script src="/js/jq.functions.js" type="text/javascript"></script>
        <script src="/js/jquery.gfx_tabs.js" type="text/javascript"></script>
        <script>
            $('.tabs').GFX_tabs({
                accordion_width: 650,
                accordion_tab_height: 600
            });
        </script>
    </body>
</html>


