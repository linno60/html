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
        <link rel="stylesheet" href="/js/jquery/plugins/owl.carousel/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="/js/jquery/plugins/owl.carousel/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="/js/jquery/plugins/sequence/modern-slide-in/css/sequencejs-theme.modern-slide-in.css"> 
        <link rel="stylesheet" type="text/css" href="/css/reset.css">
        <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.1/dist/css/bootstrap.min.css"> 
        <link rel="stylesheet/less" type="text/css" href="/css/styles.less">
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
    </head>
    <body ng-controller="MainCtrl"> 
        <?php $this->load->view('common/header') ?>
        <div class="sequence-theme">
            <div id="sequence">
                <a class="sequence-prev"></a>
                <a class="sequence-next"></a>
                <ul class="sequence-canvas">
                    <li class="animate-in slide_one">
                        <div class="title">
                            <h2 class="hdr">SPECIAL OFFER -25%</h2>
                            <p>Performance & Design. Taken right to the edge.</p>
                            <a class="btn btn-dark">LEARN MORE</a>
                        </div>
                        <div class="model text-center">
                            <div class="price-container">
                                <span class="price">$1450</span>
                            </div> 
                            <img class="monitor" src="images/macair.png" alt="" width="557" height="621"> 
                        </div>
                    </li>
                    <li class="slide_two">
                        <div class="title">                            
                            <h2 class="hdr">THE NEXT BIG THING...</h2> 
                            <p>Take, view and share photos with<br>
                                the 13MP camera and stunning 5" display.</p>
                            <a class="btn btn-dark">LEARN MORE</a>
                        </div>
                        <div class="model text-center">
                            <div class="price-container">
                                <span class="price">$1150</span>
                            </div>                            
                            <img class="balls" src="images/slide2_2.png" alt="" width="545" height="405">
                            <img class="box" src="images/slide2_1.png" alt="" width="545" height="405">
                        </div>
                    </li>
                    <li class="slide_three">
                        <div class="title">                            
                            <h2 class="hdr">CONTROL. NAVIGATE. BE RECOGNIZED.</h2>
                            <p>Smart Interaction lets you interact with your TV as never before.</p>
                            <a class="btn btn-dark">LEARN MORE</a> 
                        </div>
                        <div class="model">
                            <img class="man" src="images/slide3_1.png" alt="" width="545" height="405">
                            <img class="mobile_1" src="images/slide3_4.png" alt="" width="77" height="147">
                            <img class="mobile_2" src="images/slide3_2.png" alt="" width="101" height="206">
                            <img class="mobile_3" src="images/slide3_3.png" alt="" width="360" height="367">
                        </div>
                    </li>
                </ul>
                <ul class="sequence-pagination">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
        </div>
        <div class="content_wrap">
            <div class="row">
                <div class="col-xs-8 col-sm-9 col-md-9  col-lg-9">                        
                    <h2 class="hdr clearfix"><span></span>Our Products</h2>
                    <p>Save your money and time with our store. Here's the best part of our impressive assortment.</p>
                    <ul class="nav nav-pills">
                        <li class="active text-center"><a href="#all" data-toggle="tab"><strong>ALL</strong></a></li>
                        <li class="text-center"><a href="#latest" data-toggle="tab"><strong>LATEST</strong></a></li>
                        <li class="text-center"><a href="#featured" data-toggle="tab"><strong>FEATURED</strong></a></li>
                        <li class="text-center"><a href="#bestsellers" data-toggle="tab"><strong>BESTSELLERS</strong></a></li>
                        <li class="text-center"><a href="#special" data-toggle="tab"><strong>SPESIAL</strong></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active clearfix" id="all">

                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="thumbnail text-center">
                                    <a href="#">
                                        <img src="images/webcam.jpg" width="228" height="228" alt="">
                                    </a> 
                                    <div class="price-container">
                                        <span class="price">$40</span>
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
                                        <a href="\compare_products" class="btn btn-success compare"></a>
                                    </div>                                       
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="thumbnail text-center">
                                    <a href="#">
                                        <img src="images/samsung.jpg" width="228" height="228" alt="">
                                    </a> 
                                    <div class="price-container">
                                        <span class="price">$435</span>
                                    </div>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">

                                        </div>                                        
                                    </div>
                                    <span>Samsung Galaxy Ace</span>
                                    <div class="action clearfix">
                                        <button class="btn btn-dark">ADD TO CART</button>
                                        <button class="btn btn-success like"></button>
                                        <button class="btn btn-success compare"></button>
                                    </div>                                       
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="thumbnail text-center">
                                    <a href="#">
                                        <img src="images/cover.jpg" width="228" height="228" alt="">
                                    </a> 
                                    <div class="price-container">
                                        <span class="price">$19</span>
                                    </div>
                                    <div class='label label-danger'>-25%</div>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="100"></div>
                                        </div>                                        
                                    </div>
                                    <span>Iphone Case Cover Original</span>
                                    <div class="action clearfix">
                                        <button class="btn btn-dark">ADD TO CART</button>
                                        <button class="btn btn-success like"></button>
                                        <button class="btn btn-success compare"></button>
                                    </div>                                       
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="thumbnail text-center">
                                    <a href="#">
                                        <img src="images/powermac.png" width="228" height="228" alt="">
                                    </a> 
                                    <div class="price-container">
                                        <span class="price">$1050</span>
                                    </div>
                                    <div class='label label-success'>NEW</div>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">

                                        </div>                                        
                                    </div>
                                    <span>PowerMac Desktop Computer</span>
                                    <div class="action clearfix">
                                        <button class="btn btn-dark">ADD TO CART</button>
                                        <button class="btn btn-success like"></button>
                                        <button class="btn btn-success compare"></button>
                                    </div>                                       
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="thumbnail text-center">
                                    <a href="#">
                                        <img src="images/camera.jpg" width="228" height="228" alt="">
                                    </a> 
                                    <div class="price-container">
                                        <span class="old_price">$870</span>
                                        <span class="price">$710</span>
                                    </div>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="100"></div>
                                        </div>                                        
                                    </div>
                                    <span>Cam Optia AF Webcam</span>
                                    <div class="action clearfix">
                                        <button class="btn btn-dark">ADD TO CART</button>
                                        <button class="btn btn-success like"></button>
                                        <button class="btn btn-success compare"></button>
                                    </div>                                       
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="thumbnail text-center">
                                    <a href="#">
                                        <img src="images/cuisinart.jpg" width="228" height="228" alt="">
                                    </a> 
                                    <div class="price-container">
                                        <span class="price">$168</span>
                                    </div>
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="80"></div>
                                        </div>                                        
                                    </div>
                                    <span>Cuisinart Brew Central Coffemaker</span>
                                    <div class="action clearfix">
                                        <button class="btn btn-dark">ADD TO CART</button>
                                        <button class="btn btn-success like"></button>
                                        <button class="btn btn-success compare"></button>
                                    </div>                                       
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="latest">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/webcam.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$40</span>
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
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/webcam.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$40</span>
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
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/webcam.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$40</span>
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
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/webcam.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$40</span>
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
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/webcam.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$40</span>
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
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/webcam.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$40</span>
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
                        <div class="tab-pane" id="featured">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/samsung.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$435</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">

                                            </div>                                        
                                        </div>
                                        <span>Samsung Galaxy Ace</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/samsung.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$435</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">

                                            </div>                                        
                                        </div>
                                        <span>Samsung Galaxy Ace</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/samsung.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$435</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">

                                            </div>                                        
                                        </div>
                                        <span>Samsung Galaxy Ace</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/samsung.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$435</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">

                                            </div>                                        
                                        </div>
                                        <span>Samsung Galaxy Ace</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/samsung.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$435</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">

                                            </div>                                        
                                        </div>
                                        <span>Samsung Galaxy Ace</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/samsung.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$435</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">

                                            </div>                                        
                                        </div>
                                        <span>Samsung Galaxy Ace</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="bestsellers">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/camera.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="old_price">$870</span>
                                            <span class="price">$710</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="100"></div>
                                            </div>                                        
                                        </div>
                                        <span>Cam Optia AF Webcam</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/camera.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="old_price">$870</span>
                                            <span class="price">$710</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="100"></div>
                                            </div>                                        
                                        </div>
                                        <span>Cam Optia AF Webcam</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/camera.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="old_price">$870</span>
                                            <span class="price">$710</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="100"></div>
                                            </div>                                        
                                        </div>
                                        <span>Cam Optia AF Webcam</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/camera.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="old_price">$870</span>
                                            <span class="price">$710</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="100"></div>
                                            </div>                                        
                                        </div>
                                        <span>Cam Optia AF Webcam</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/camera.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="old_price">$870</span>
                                            <span class="price">$710</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="100"></div>
                                            </div>                                        
                                        </div>
                                        <span>Cam Optia AF Webcam</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/camera.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="old_price">$870</span>
                                            <span class="price">$710</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="100"></div>
                                            </div>                                        
                                        </div>
                                        <span>Cam Optia AF Webcam</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="special">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/cuisinart.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$168</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="80"></div>
                                            </div>                                        
                                        </div>
                                        <span>Cuisinart Brew Central Coffemaker</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/cuisinart.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$168</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="80"></div>
                                            </div>                                        
                                        </div>
                                        <span>Cuisinart Brew Central Coffemaker</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/cuisinart.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$168</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="80"></div>
                                            </div>                                        
                                        </div>
                                        <span>Cuisinart Brew Central Coffemaker</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/cuisinart.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$168</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="80"></div>
                                            </div>                                        
                                        </div>
                                        <span>Cuisinart Brew Central Coffemaker</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/cuisinart.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$168</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="80"></div>
                                            </div>                                        
                                        </div>
                                        <span>Cuisinart Brew Central Coffemaker</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail text-center">
                                        <a href="#">
                                            <img src="images/cuisinart.jpg" width="228" height="228" alt="">
                                        </a> 
                                        <div class="price-container">
                                            <span class="price">$168</span>
                                        </div>
                                        <div class="ratings-container clearfix">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="80"></div>
                                            </div>                                        
                                        </div>
                                        <span>Cuisinart Brew Central Coffemaker</span>
                                        <div class="action clearfix">
                                            <button class="btn btn-dark">ADD TO CART</button>
                                            <button class="btn btn-success like"></button>
                                            <button class="btn btn-success compare"></button>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row welcome">
                        <div class="col-xs-12 col-sm-7 col-md-7 nopadding">
                            <h2 class="hdr"><span></span>Welcome to Venedor</h2>
                            <p>Venedor is a fully responsive PSD theme designed for all types of platforms: WooCommerce, Magento, OpenCart, PrestaShop and other. Based on Bootstrap's 12 column 1200px responsive grid Template. Great looks on desktops, tablets and mobiles. </p>
                            <p>Sed interdum magna sit amet orci tristique blandit. Etiam id justo consequat quam viverra elementum. Sed ac magna sed massa&emsp;&emsp;&emsp; rhoncus elementum et ac augue. Morbi non tellus nisi. Pellentesque habitant morbi tristique senectus. 
                                <a href="#" class="green_link">Buy Venedor Theme!</a>
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5 nopadding">
                            <img src="/images/products.png" width="369" height="285" alt="">
                        </div>
                    </div>
                    <div class="row sale">
                        <div class="col-md-12">
                            <div class="hdr_wrap">
                                <h2 class="hdr"><span></span>On Sale</h2> 
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
                </div>
                <div class="col-xs-4 col-sm-3 colmd-3 col-lg-3 aside">
                    <div class="newsletter panel text-center">
                        <h3 class="hdr">BE THE FIRST TO KNOW</h3>
                        <p>Get all the latest information on
                            Events, Sales and Offers. Sign
                            up for the Venedor store 
                            newsletter today.</p>
                        <form action="#" method="post">
                            <input type="text" placeholder="Enter your email address">
                            <button class='btn btn-success'>SUBMIT</button>
                        </form>
                    </div>
                    <div class="flexslider testimonials">
                        <h4 class="hdr">TESTIMONIALS</h4>
                        <ul class="slides clearfix">
                            <li> 
                                <div class="details">
                                    <h4>Best Service!</h4>
                                    <p>Maecenas semper aliquam massa. Praesent pharetra sem  vitae nisi eleifend molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti.</p>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="images/anna.jpg" width="70" height="70" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Anna Retallick</h4>
                                        <div class="media">12.05.2013</div>
                                    </div>
                                </div>
                            </li>
                            <li> 
                                <div class="details">
                                    <h4>Cool Style!</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Suspendisse potenti.</p>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="images/jake.jpg" width="70" height="70" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jake Suasso</h4>
                                        <div class="media">17.05.2013</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="flexslider news">
                        <h4 class="hdr">LATEST NEWS</h4>
                        <ul class="slides clearfix">
                            <li> 
                                <img class="media-object" src="images/new1.jpg" width="270" height="120" alt="">
                                <h5>35% Discount on second purchase!</h5>
                                <p>Sed blandit nulla nec nunc ullamcorper tristique. Mauris adipiscing cursus anteultricies dictum sed lobortis.</p>
                                <div class="clearfix">
                                    <a href="#" class="pull-left green_link">Read More</a>
                                    <span class="pull-right">12.05.2013</span>
                                </div>
                                <h5>Free shipping for regular customers.</h5>
                                <p>Aiquam mauris libero, suscipit sed ornare ac, suscipit non felis. Fusce sit amet orci justo, a ultrices urna cursus.Suspendisse mauris nibh, tristique eget consectetur a fermentum.</p>
                                <div class="clearfix">
                                    <a href="#" class="pull-left green_link">Read More</a>
                                    <span class="pull-right">12.05.2013</span>
                                </div>
                            </li>
                            <li> 
                                <img class="media-object" src="images/new2.jpg" width="270" height="120" alt="">
                                <h5>35% Discount on second purchase!</h5>
                                <p>Sed blandit nulla nec nunc ullamcorper tristique. Mauris adipiscing cursus anteultricies dictum sed lobortis.</p>
                                <div class="clearfix">
                                    <a href="#" class="pull-left green_link">Read More</a>
                                    <span class="pull-right">12.05.2013</span>
                                </div>
                                <h5>Free shipping for regular customers.</h5>
                                <p>Aiquam mauris libero, suscipit sed ornare ac, suscipit non felis. Fusce sit amet orci justo, a ultrices urna cursus.Suspendisse mauris nibh, tristique eget consectetur a fermentum.</p>
                                <div class="clearfix">
                                    <a href="#" class="pull-left green_link">Read More</a>
                                    <span class="pull-right">12.05.2013</span>
                                </div>
                            </li>
                            <li> 
                                <img class="media-object" src="images/new3.jpg" width="270" height="120" alt="">
                                <h5>35% Discount on second purchase!</h5>
                                <p>Sed blandit nulla nec nunc ullamcorper tristique. Mauris adipiscing cursus anteultricies dictum sed lobortis.</p>
                                <div class="clearfix">
                                    <a href="#" class="pull-left green_link">Read More</a>
                                    <span class="pull-right">12.05.2013</span>
                                </div>
                                <h5>Free shipping for regular customers.</h5>
                                <p>Aiquam mauris libero, suscipit sed ornare ac, suscipit non felis. Fusce sit amet orci justo, a ultrices urna cursus.Suspendisse mauris nibh, tristique eget consectetur a fermentum.</p>
                                <div class="clearfix">
                                    <a href="#" class="pull-left green_link">Read More</a>
                                    <span class="pull-right">12.05.2013</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="flexslider banners text-center">
                        <ul class="slides clearfix">
                            <li class="item_1"> 
                                <a href='#'>
                                    <h1>FREE</h1>
                                    <h2>SHIPPING</h2>
                                    <p>on orders over<span> $150</span></p>
                                    <img src="/images/truck.png" width="168" height="120" alt="">
                                    <p>The offers is valid on all our store item!</p>
                                </a>
                            </li>
                            <li class="item_2">
                                <a href='#'>
                                    <h1>SALE</h1>
                                    <h5>Many items</h5>
                                    <h2>40% <span></span></h2>                            
                                    <p>Discounts are subject to allkinds of electronics except smartphones.</p>
                                </a>
                            </li>
                            <li class="item_3">
                                <a href='#'>
                                    <h1>SPECIAL OFFER</h1>                                
                                    <p>BY NEW DIGITAL CAMERAS & GET LENSES OR ACCESORIES</p>
                                    <h3>FREE</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row manufactures">
                <div class="col-sm-12 col-md-12 nopadding">
                    <div class="hdr_wrap">
                        <h2 class="hdr"><span></span>Manufacturers</h2> 
                    </div>
                    <div class="owl-carousel manufactures_slider">
                        <div><img src="/images/brand.png" width="170" height="100" alt=""></div>
                        <div><img src="/images/brand.png" width="170" height="100" alt=""></div>
                        <div><img src="/images/brand.png" width="170" height="100" alt=""></div>
                        <div><img src="/images/brand.png" width="170" height="100" alt=""></div>
                        <div><img src="/images/brand.png" width="170" height="100" alt=""></div>
                        <div><img src="/images/brand.png" width="170" height="100" alt=""></div>
                        <div><img src="/images/brand.png" width="170" height="100" alt=""></div>
                        <div><img src="/images/brand.png" width="170" height="100" alt=""></div>
                        <div><img src="/images/brand.png" width="170" height="100" alt=""></div>
                        <div><img src="/images/brand.png" width="170" height="100" alt=""></div>
                    </div>                
                </div>
            </div>            
        </div>
        <?php $this->load->view('common/footer') ?>
        <script src="/js/jquery/jquery-1.11.1.min.js"></script>
        <script src="/bootstrap-3.3.1/dist/js/bootstrap.min.js"></script> 
        <script src="/js/less/dist/less.js"></script>
        <script src="/js/jquery/plugins/selectivizr.js"></script>
        <script src="/js/jquery/plugins/sequence/modern-slide-in/scripts/jquery.sequence-min.js"></script>
        <script src="/js/jquery/plugins/sequence/modern-slide-in/sequencejs-options.modern-slide-in.js"></script>
        <script src="/js/jquery/plugins/owl.carousel/owl-carousel/owl.carousel.js"></script>
        <script src="/js/jquery/plugins/flexslider/jquery.flexslider.js"></script>
        <script src="/js/pages/home.js"></script>
        <script src="/js/pages/common.js"></script>
        <script src="/js/respond.js"></script> 
    </body>
</html>
