<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="/js/jquery/plugins/selectivizr.js"></script>
<![endif]-->
<html ng-app="progressApp" lang="en">
    <head>
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <title>Venedor</title>        
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'> 
        <link rel="stylesheet" href="/js/jquery/plugins/elastislide/css/elastislide.css"> 
        <link rel="stylesheet" href="/js/jquery/plugins/owl.carousel/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="/js/jquery/plugins/owl.carousel/owl-carousel/owl.theme.css">
        <link rel="stylesheet" type="text/css" href="/css/reset.css">
        <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.1/dist/css/bootstrap.min.css"> 
        <link rel="stylesheet/less" type="text/css" href="/css/styles.less">
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
        <script src="/js/jquery/plugins/elastislide/js/modernizr.custom.17475.js"></script>
    </head>
    <body ng-controller="MainCtrl"> 
        <?php $this->load->view('common/header') ?>
        <div class="breadcrumb_wrap">
            <div>
                <ol class="breadcrumb center-block">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Electronics</a></li>
                    <li><a href="#">Mobile</a></li>
                    <li class="active">Samsung Galaxy Ace</li>
                </ol>
            </div>
        </div>
        <div class="row product_wrap center-block">
            <div class="col-xs-12 col-sm-7 col-md-6 col-lg-7 nopadding pull-left">
                <ul id="carousel" class="elastislide-list">
                    <li data-preview="images/product1.jpg"><a href="#"><img src="images/product1.jpg" alt="image04" width="122" height="122"></a></li>
                    <li data-preview="images/product2.jpg"><a href="#"><img src="images/product2.jpg" alt="image05" width="122" height="122"></a></li>
                    <li data-preview="images/product3.jpg"><a href="#"><img src="images/product3.jpg" alt="image06" width="122" height="122"></a></li>
                    <li data-preview="images/product4.jpg"><a href="#"><img src="images/product4.jpg" alt="image07" width="122" height="122"></a></li>
                    <li data-preview="images/product5.jpg"><a href="#"><img src="images/product5.jpg" alt="image11" width="122" height="122"></a></li>
                    <li data-preview="images/product6.jpg"><a href="#"><img src="images/product6.jpg" alt="image12" width="122" height="122"></a></li>
                    <li data-preview="images/product1.jpg"><a href="#"><img src="images/product1.jpg" alt="image04" width="122" height="122"></a></li>
                    <li data-preview="images/product2.jpg"><a href="#"><img src="images/product2.jpg" alt="image05" width="122" height="122"></a></li>
                    <li data-preview="images/product3.jpg"><a href="#"><img src="images/product3.jpg" alt="image06" width="122" height="122"></a></li>
                </ul>
                <div class="image-preview pull-left">
                    <img id="preview" src="images/product1.jpg">
                    <div class="price-container text-center">
                        <span class="price">$478</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-6 col-lg-5 description">
                <h1>Samsung Galaxy Ace</h1>
                <div class="ratings-container clearfix">
                    <div class="ratings pull-left">
                        <div class="ratings-result" data-result="100"></div>
                    </div> 
                    <span class="pull-left"> 2 Review(s)&emsp;|&emsp;Add Your Review</span>
                </div>                
                <dl class="clearfix">
                    <dt class="pull-left">Availability:&nbsp;</dt>
                    <dd class="pull-left">In Stock</dd>                                            
                </dl>
                <dl class="clearfix">
                    <dt class="pull-left">Product Code:&nbsp;</dt>
                    <dd class="pull-left">483512569</dd>                                            
                </dl>
                <dl class="clearfix">
                    <dt class="pull-left">Brand:&nbsp;</dt>
                    <dd class="pull-left">Apple</dd>                                            
                </dl>
                <div class="selecting">
                    <label>Select Color:</label>
                    <div class="color">
                        <button class="btn c1"></button>
                        <button class="btn c2"></button>
                        <button class="btn c3"></button>
                        <button class="btn c4"></button>
                        <button class="btn c5"></button>
                        <button class="btn c6"></button>
                        <button class="btn c7"></button>
                    </div>
                    <label>Select Size:</label>
                    <div class="size">
                        <button type="button" class="btn">XS</button>
                        <button type="button" class="btn">S</button>
                        <button type="button" class="btn">M</button>
                        <button type="button" class="btn">L</button>
                        <button type="button" class="btn">XL</button>
                        <button type="button" class="btn">XXL</button>
                    </div>
                </div> 
                <div>
                    <input type="text" id="spinner" class="spinner" placeholder="1">
                    <button class="btn btn-dark">ADD TO CART</button>
                </div>
                <div class="share clearfix">
                    <div class="col-xs-2 col-sm-4 col-md-4 col-lg-4 nopadding clearfix">
                        <button class="btn btn-success like pull-left"></button>
                        <label class="visible-xs-inline">FAVORITE</label>
                        <button class="btn btn-success compare pull-left"></button>
                        <label class="visible-xs-inline">WISHLIST</label>
                    </div>
                    <div class="col-xs-10 col-sm-8 col-md-8 col-lg-8 nopadding social clearfix">
                        <label class="pull-left hidden-sm">Share:</label>
                        <button type="button" class="btn facebook pull-left"></button>
                        <button type="button" class="btn twitter pull-left"></button>
                        <button type="button" class="btn mail pull-left"></button>
                        <button type="button" class="btn print pull-left"></button>
                        <button type="button" class="btn plus pull-left"></button>
                        <span class="pull-left">2 M</span>
                    </div>
                </div>                
            </div>
        </div>
        <div class="row overview center-block">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 nopadding">
                <div class="overview_nav clearfix">
                    <ul class="nav nav-pills nav-stacked col-xs-3 col-sm-3 col-md-3 col-lg-3 nopadding">
                        <li><a href="#a" data-toggle="tab">DESCRIPTION</a></li>
                        <li class="active"><a href="#b" data-toggle="tab">DETAILS</a></li>
                        <li><a href="#c" data-toggle="tab">COMMENTS</a></li>
                        <li><a href="#d" data-toggle="tab">ACCESSORIES</a></li>
                        <li><a href="#e" data-toggle="tab">VIDEO</a></li>
                    </ul>
                    <div class="tab-content col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="tab-pane" id="a">
                            <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus  vel, tristique urna. Aenean <a href="#" class="green_link">volutpat lacus</a> at dolor blandit, vitae lobortisante semper. In ut rutrum diam, ac congue turpis. Ut bibendum metusfringilla, blandit elit at, commodo neque. Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet.</p>
                            <p>Sed sed interdum diam. Donec sit amet enim tempor, dapibus nunc eu, tincidunt mi. Vivamus dignissim nisl eu euismod ullamcorper. Donec pellentesque diam id est tristique vestibulum. Donec eget feugiat ante. Integerarcu libero, dictum nec congue sed, faucibus sit amet lectus.</p>
                            <p>Phasellus consequat id purus in convallis. Nulla quis nunc auctor, pretium enimnec, tristique magna. Vivamus vitae arcu faucibus, dictum magna vel, adipiscing justo. Sed nec ullamcorper lacus. Aenean tincidunt tincidunt ligula.</p>
                        </div>
                        <div class="tab-pane active" id="b">
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
                        <div class="tab-pane" id="c">
                            <div class="clearfix">
                                <h4 class="pull-left">1 Review for <span>"Samsung Galaxy Ace"</span></h4>
                                <div class="ratings-container pull-right clearfix">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="100"></div>
                                    </div>                                        
                                </div>
                            </div>                           
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/anna.jpg" width="70" height="70" alt="">
                                </a>
                                <div class="media-heading">
                                    <h5 class="media-heading">Duis tincidunt augue purus</h5>                                    
                                    <a href="#" class="green_link">Anna Retallick</a>
                                    <span>12.05.3013</span>
                                    <div class="ratings-container pull-right clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="100"></div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p>Cgestas metus id nunc vestibulum dictum. Etiam dapibus nunc nec risus egestas vel bibend eros vehicula. Suspendissefacilisis neque in augue feugiat tempor. Donec velit diam,pharetra lobortis non, ullamcorper eget lectus...</p>
                                    <button class="btn btn-dark">ADD REVIEW</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="d">
                            <div class="owl-carousel accessories">
                                <div class="thumbnail text-center">
                                    <a href="#">
                                        <img src="images/vaio.jpg" width="228" height="228" alt="">
                                    </a><div class='label label-danger'>-45%</div> 
                                    <div class="price-container">
                                        <span class="price">$40</span>
                                    </div>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="80"></div>
                                        </div>                                        
                                    </div>
                                    <span>Sony VAIO Tap 20</span>
                                    <div class="action clearfix">
                                        <button class="btn btn-dark">ADD TO CART</button>
                                        <button class="btn btn-success like"></button>
                                        <button class="btn btn-success compare"></button>
                                    </div>                                       
                                </div>
                                <div class="thumbnail text-center">
                                    <a href="#">
                                        <img src="images/benq.jpg" width="228" height="228" alt="">
                                    </a> 
                                    <div class="price-container">
                                        <span class="price">$435</span>
                                    </div>
                                    <div class='label label-danger'>-30%</div>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">

                                        </div>                                        
                                    </div>
                                    <span>BenQ E2220HD</span>
                                    <div class="action clearfix">
                                        <button class="btn btn-dark">ADD TO CART</button>
                                        <button class="btn btn-success like"></button>
                                        <button class="btn btn-success compare"></button>
                                    </div>                                       
                                </div>
                                <div class="thumbnail text-center">
                                    <a href="#">
                                        <img src="images/philips.png" width="228" height="228" alt="">
                                    </a> 
                                    <div class="price-container">
                                        <span class="price">$19</span>
                                    </div>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="100"></div>
                                        </div>                                        
                                    </div>
                                    <span>Philips MP Digital Camera</span>
                                    <div class="action clearfix">
                                        <button class="btn btn-dark">ADD TO CART</button>
                                        <button class="btn btn-success like"></button>
                                        <button class="btn btn-success compare"></button>
                                    </div>                                       
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="e">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/vUkjWypJjKk" frameborder="0" allowfullscreen></iframe>                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 nopadding">
                <div class="flexslider related">
                    <h4 class="hdr">RELATED</h4>
                    <ul class="slides clearfix">
                        <li> 
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/jacket.jpg" width="100" height="100" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Jacket Suiting<br> Blazer</h4>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="73"></div>
                                        </div>                                        
                                    </div>
                                    <span>$40</span>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img src="images/gap.jpg" width="180" height="180" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Gap Graphic Cuffed</h4>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="100"></div>
                                        </div>                                        
                                    </div>
                                    <span>$18.5</span>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/dress1.jpg" width="100" height="100" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Women's Lauren Dress</h4>                                    
                                    <span>$30</span>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/dress1.jpg" width="100" height="100" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Women's Tulip Dress</h4>                                    
                                    <span>$22.8</span>
                                </div>
                            </div>
                        </li>
                        <li> 
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/jacket.jpg" width="100" height="100" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Jacket Suiting<br> Blazer</h4>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="80"></div>
                                        </div>                                        
                                    </div>
                                    <span>$40</span>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/gap.jpg" width="100" height="100" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Gap Graphic Cuffed</h4>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="80"></div>
                                        </div>                                        
                                    </div>
                                    <span>$18.5</span>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/dress1.jpg" width="100" height="100" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Women's Lauren Dress</h4>                                    
                                    <span>$30</span>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/dress1.jpg" width="100" height="100" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Women's Tulip Dress</h4>                                    
                                    <span>$22.8</span>
                                </div>
                            </div>
                        </li>
                        <li> 
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/jacket.jpg" width="100" height="100" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Jacket Suiting<br> Blazer</h4>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="80"></div>
                                        </div>                                        
                                    </div>
                                    <span>$40</span>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/gap.jpg" width="100" height="100" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Gap Graphic Cuffed</h4>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="80"></div>
                                        </div>                                        
                                    </div>
                                    <span>$18.5</span>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/dress1.jpg" width="100" height="100" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Women's Lauren Dress</h4>                                    
                                    <span>$30</span>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/dress1.jpg" width="100" height="100" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Women's Tulip Dress</h4>                                    
                                    <span>$22.8</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row purchased sale center-block">
            <div class="col-sm-12 col-md-12 col-lg-12 nopadding">
                <div class="hdr_wrap">
                    <h2 class="hdr"><span></span>Also Purchased</h2> 
                    <p>Only with us you can get a new model with a discount.</p>
                </div>                       
                <div class="owl-carousel sale_slider">
                    <div class="thumbnail text-center">
                        <a href="#">
                            <img src="images/vaio.jpg" width="228" height="228" alt="">
                        </a><div class='label label-danger'>-45%</div> 
                        <div class="price-container">
                            <span class="price">$40</span>
                        </div>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result" data-result="80"></div>
                            </div>                                        
                        </div>
                        <span>Sony VAIO Tap 20</span>
                        <div class="action clearfix">
                            <button class="btn btn-dark">ADD TO CART</button>
                            <button class="btn btn-success like"></button>
                            <button class="btn btn-success compare"></button>
                        </div>                                       
                    </div>
                    <div class="thumbnail text-center">
                        <a href="#">
                            <img src="images/benq.jpg" width="228" height="228" alt="">
                        </a> 
                        <div class="price-container">
                            <span class="price">$435</span>
                        </div>
                        <div class='label label-danger'>-30%</div>
                        <div class="ratings-container clearfix">
                            <div class="ratings">

                            </div>                                        
                        </div>
                        <span>BenQ E2220HD</span>
                        <div class="action clearfix">
                            <button class="btn btn-dark">ADD TO CART</button>
                            <button class="btn btn-success like"></button>
                            <button class="btn btn-success compare"></button>
                        </div>                                       
                    </div>
                    <div class="thumbnail text-center">
                        <a href="#">
                            <img src="images/philips.png" width="228" height="228" alt="">
                        </a> 
                        <div class="price-container">
                            <span class="price">$19</span>
                        </div>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result" data-result="100"></div>
                            </div>                                        
                        </div>
                        <span>Philips MP Digital Camera</span>
                        <div class="action clearfix">
                            <button class="btn btn-dark">ADD TO CART</button>
                            <button class="btn btn-success like"></button>
                            <button class="btn btn-success compare"></button>
                        </div>                                       
                    </div>
                    <div class="thumbnail text-center">
                        <a href="#">
                            <img src="images/samsung.jpg" width="228" height="228" alt="">
                        </a> 
                        <div class="price-container">
                            <span class="price">$435</span>
                        </div>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result" data-result="80"></div>
                            </div>                                        
                        </div>
                        <span>Lowlands Lace Blouse</span>
                        <div class="action clearfix">
                            <button class="btn btn-dark">ADD TO CART</button>
                            <button class="btn btn-success like"></button>
                            <button class="btn btn-success compare"></button>
                        </div>                                       
                    </div>
                    <div class="thumbnail text-center">
                        <a href="#">
                            <img src="images/camera.jpg" width="228" height="228" alt="">
                        </a> 
                        <div class="price-container">
                            <span class="price">$435</span>
                        </div>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result" data-result="80"></div>
                            </div>                                        
                        </div>
                        <span>Lowlands Lace Blouse</span>
                        <div class="action clearfix">
                            <button class="btn btn-dark">ADD TO CART</button>
                            <button class="btn btn-success like"></button>
                            <button class="btn btn-success compare"></button>
                        </div>                                       
                    </div>                                
                </div>
            </div>
        </div>
        <?php $this->load->view('common/footer') ?>
        <script src="/js/jquery/jquery-1.11.1.min.js"></script>
        <script src="/js/jquery/jquery-ui-1.11.2/jquery-ui.js"></script>
        <script src="/bootstrap-3.3.1/dist/js/bootstrap.min.js"></script> 
        <script src="/js/less/dist/less.js"></script>
        <script src="/js/jquery/plugins/selectivizr.js"></script>
        <script src="/js/jquery/plugins/flexslider/jquery.flexslider.js"></script>
        <script src="/js/jquery/plugins/elastislide/js/jquerypp.custom.js"></script>
        <script src="/js/jquery/plugins/owl.carousel/owl-carousel/owl.carousel.js"></script>
        <script src="/js/jquery/plugins/elastislide/js/jquery.elastislide.js"></script>
        <script src="/js/pages/common.js"></script>
        <script src="/js/pages/product_page.js"></script>
        <script src="/js/respond.js"></script> 
    </body>
</html>
