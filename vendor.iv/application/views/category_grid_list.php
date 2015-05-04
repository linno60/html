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
        <link rel="stylesheet" type="text/css" href="/css/reset.css">
        <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.1/dist/css/bootstrap.min.css"> 
        <link rel="stylesheet" type="text/css" href="/js/jquery/plugins/jScrollPane/style/jquery.jscrollpane.css">
        <link rel="stylesheet" type="text/css" href="/js/jquery/plugins/noUiSlider/jquery.nouislider.min.css">
        <link rel="stylesheet/less" type="text/css" href="/css/styles.less">
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
    </head>
    <body ng-controller="MainCtrl"> 
        <?php $this->load->view('common/header') ?> 
        <div class="slider_wrap">
            <div class="row center-block">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-5 category_image">
                    <img src="images/mobile_banner.jpg" alt="" width="403" height="322">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-7 category_title">
                    <h1 class="hdr">Mobile.</h1>
                    <p class="hide-for-xs">Aenean dictum libero vitae magna sagittis, eu convallis dolor blandit. Fusce consectetur tincidunt pretium. Etiam non tellus massa. Aenean tincidunt in augue nec tempus. Nulla porta libero sit amet lorem pellentesque posuere...</p>
                    <button class="btn btn-success">LEARN MORE</button>
                </div>
            </div>
        </div>
        <ol class="breadcrumb center-block">
            <li><a href="#">Home</a></li>
            <li><a href="#">Electronics</a></li>
            <li class="active">Mobile</li>
        </ol>
        <div class="row category_wrap center-block">
            <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9" id="content">                    
                <div class="row filter top">
                    <div class="col-md-6 nopadding">
                        <button class="btn btn-default pull-left compare">COMPARE</button>
                        <div class="pull-left input-sort">
                            <label class="control-label pull-left" for="input-sort">sort by:</label>
                            <select id="input-sort" class="pull-left selectpicker">
                                <option selected="selected">Default</option>
                                <option>Name (A - Z)</option>
                                <option>Name (Z - A)</option>
                                <option>Price (Low &gt; High)</option>
                                <option>Price (High &gt; Low)</option>
                                <option>Rating (Highest)</option>
                                <option>Rating (Lowest)</option>
                                <option>Model (A - Z)</option>
                                <option>Model (Z - A)</option>
                            </select>
                        </div>
                        <div class="btn-group btn-toolbar pull-left" data-toggle="buttons">
                            <button type="button" id="grid-view" class="btn act" title="Grid"></button>
                            <button type="button" id="list-view" class="btn" title="List"></button>                            
                        </div>
                    </div>
                    <div class="col-md-6 nopadding">
                        <ul class="pagination pagination-metro pagination-split pull-right">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">></a></li>
                        </ul> 
                        <div class="pull-right input-limit">                        
                            <select id="input-limit" class="selectpicker input-limit pull-right">
                                <option selected="selected">15</option>
                                <option>25</option>
                                <option>50</option>
                                <option>75</option>
                                <option>100</option>
                            </select>
                            <label class="control-label pull-right" for="input-limit">view:</label>
                        </div>  
                    </div>
                </div>
                <div class="row category_list">
                    <div class="product-layout product-grid  col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/webcam.jpg" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$40</span>
                                </div>
                            </a> 
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="80"></div>
                                    </div>                                        
                                </div>
                                <span>Lowlands Lace Blouse</span>
                                <p>Nulla nunc turpis, semper a est ut, commodo rutrum nunc. Nullam pellentesquesed lacus a condimentum. Vivamus pretium tempus fermentum. Suspendisse quis urna posuere, vestibulum enim sit amet, mollis augue. Fusce eu fermentum nunc. Pellentesque a volutpat ipsum...</p>                                
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div> 
                            </div>                                     
                        </div>
                    </div>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/samsung.jpg" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$435</span>
                                </div>
                            </a> 
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings"></div>                                        
                                </div>
                                <span>Samsung Galaxy Ace</span>
                                <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean volutpat lacus at dolor blandit, vitae lobortisante semper. In ut rutrum diam, ac congue turpis. Ut bibendum metusfringilla, blandit elit at, commodo neque. Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet.</p>
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div>  
                            </div>                                                                        
                        </div>
                    </div>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/cover.jpg" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$19</span>
                                </div>
                            </a>
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="100"></div>
                                    </div>                                        
                                </div>
                                <span>Iphone Case Cover Original</span>
                                <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean volutpat lacus at dolor blandit, vitae lobortisante semper. In ut rutrum diam, ac congue turpis. Ut bibendum metusfringilla, blandit elit at, commodo neque. Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet.</p>
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div> 
                            </div>                                                                        
                        </div>
                    </div>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/powermac.png" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$40</span>
                                </div>
                            </a> 
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings">

                                    </div>                                        
                                </div>
                                <span>PowerMac Desktop Computer</span>
                                <p>Nulla nunc turpis, semper a est ut, commodo rutrum nunc. Nullam pellentesquesed lacus a condimentum. Vivamus pretium tempus fermentum. Suspendisse quis urna posuere, vestibulum enim sit amet, mollis augue. Fusce eu fermentum nunc. Pellentesque a volutpat ipsum...</p>                                
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div> 
                            </div>                                     
                        </div>
                    </div>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/camera.jpg" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$435</span>
                                </div>
                            </a> 
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings-result" data-result="100"></div>                                        
                                </div>
                                <span>Cam Optia AF Webcam</span>
                                <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean volutpat lacus at dolor blandit, vitae lobortisante semper. In ut rutrum diam, ac congue turpis. Ut bibendum metusfringilla, blandit elit at, commodo neque. Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet.</p>
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div>  
                            </div>                                                                        
                        </div>
                    </div>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/cuisinart.jpg" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$19</span>
                                </div>
                            </a>
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="80"></div>
                                    </div>                                        
                                </div>
                                <span>Cuisinart Brew Central Coffemaker</span>
                                <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean volutpat lacus at dolor blandit, vitae lobortisante semper. In ut rutrum diam, ac congue turpis. Ut bibendum metusfringilla, blandit elit at, commodo neque. Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet.</p>
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div> 
                            </div>                                                                        
                        </div>
                    </div>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/vaio.jpg" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$40</span>
                                </div>
                                <div class='label label-danger'>-45%</div>
                            </a> 
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="80"></div>
                                    </div>                                        
                                </div>
                                <span>Sony VAIO Tap 20</span>
                                <p>Nulla nunc turpis, semper a est ut, commodo rutrum nunc. Nullam pellentesquesed lacus a condimentum. Vivamus pretium tempus fermentum. Suspendisse quis urna posuere, vestibulum enim sit amet, mollis augue. Fusce eu fermentum nunc. Pellentesque a volutpat ipsum...</p>                                
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div> 
                            </div>                                     
                        </div>
                    </div>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/benq.jpg" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$435</span>
                                </div>
                                <div class='label label-danger'>-30%</div>
                            </a> 
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings"></div>                                        
                                </div>
                                <span>BenQ E2220HD</span>
                                <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean volutpat lacus at dolor blandit, vitae lobortisante semper. In ut rutrum diam, ac congue turpis. Ut bibendum metusfringilla, blandit elit at, commodo neque. Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet.</p>
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div>  
                            </div>                                                                        
                        </div>
                    </div>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/philips.png" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$19</span>
                                </div>                                
                            </a>
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="100"></div>
                                    </div>                                        
                                </div>
                                <span>Philips MP Digital Camera</span>
                                <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean volutpat lacus at dolor blandit, vitae lobortisante semper. In ut rutrum diam, ac congue turpis. Ut bibendum metusfringilla, blandit elit at, commodo neque. Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet.</p>
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div> 
                            </div>                                                                        
                        </div>
                    </div>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/asus.jpg" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$40</span>
                                </div>
                            </a> 
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="80"></div>
                                    </div>                                        
                                </div>
                                <span>Asus UX 21 Laptop</span>
                                <p>Nulla nunc turpis, semper a est ut, commodo rutrum nunc. Nullam pellentesquesed lacus a condimentum. Vivamus pretium tempus fermentum. Suspendisse quis urna posuere, vestibulum enim sit amet, mollis augue. Fusce eu fermentum nunc. Pellentesque a volutpat ipsum...</p>                                
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div> 
                            </div>                                     
                        </div>
                    </div>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/shaver.jpg" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$435</span>
                                </div>
                            </a> 
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings"></div>                                        
                                </div>
                                <span>BenQ E2220HD</span>
                                <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean volutpat lacus at dolor blandit, vitae lobortisante semper. In ut rutrum diam, ac congue turpis. Ut bibendum metusfringilla, blandit elit at, commodo neque. Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet.</p>
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div>  
                            </div>                                                                        
                        </div>
                    </div>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/nikon.jpg" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$19</span>
                                </div>
                            </a>
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="100"></div>
                                    </div>                                        
                                </div>
                                <span>Nikon COOLPIX Digital Camera</span>
                                <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean volutpat lacus at dolor blandit, vitae lobortisante semper. In ut rutrum diam, ac congue turpis. Ut bibendum metusfringilla, blandit elit at, commodo neque. Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet.</p>
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div> 
                            </div>                                                                        
                        </div>
                    </div>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/maytag.jpg" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$40</span>
                                </div>
                            </a> 
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="80"></div>
                                    </div>                                        
                                </div>
                                <span>Maytag French Door Refrigerator</span>
                                <p>Nulla nunc turpis, semper a est ut, commodo rutrum nunc. Nullam pellentesquesed lacus a condimentum. Vivamus pretium tempus fermentum. Suspendisse quis urna posuere, vestibulum enim sit amet, mollis augue. Fusce eu fermentum nunc. Pellentesque a volutpat ipsum...</p>                                
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div> 
                            </div>                                     
                        </div>
                    </div>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/focal.jpg" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$435</span>
                                </div>
                            </a> 
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings"></div>                                        
                                </div>
                                <span>Focal 706 V Stand Mount Speakers</span>
                                <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean volutpat lacus at dolor blandit, vitae lobortisante semper. In ut rutrum diam, ac congue turpis. Ut bibendum metusfringilla, blandit elit at, commodo neque. Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet.</p>
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div>  
                            </div>                                                                        
                        </div>
                    </div>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="thumbnail text-center">
                            <a href="#" class="figure">
                                <img src="images/shure.jpg" width="228" height="228" alt="">
                                <div class="price-container">
                                    <span class="price">$19</span>
                                </div>
                            </a>
                            <div class="caption">
                                <div class="ratings-container clearfix">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="100"></div>
                                    </div>                                        
                                </div>
                                <span>Nikon COOLPIX Digital Camera</span>
                                <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean volutpat lacus at dolor blandit, vitae lobortisante semper. In ut rutrum diam, ac congue turpis. Ut bibendum metusfringilla, blandit elit at, commodo neque. Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet.</p>
                                <div class="action clearfix">
                                    <button class="btn btn-dark">ADD TO CART</button>
                                    <button class="btn btn-success like"></button>
                                    <button class="btn btn-success compare"></button>
                                </div> 
                            </div>                                                                        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12text-right filter bottom nopadding">
                        <ul class="pagination pagination-metro pagination-split pull-right">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">></a></li>
                        </ul>
                        <div class="pull-right input-limit">                        
                            <select id='input-bottom' class="selectpicker pull-right">
                                <option selected="selected">15</option>
                                <option>25</option>
                                <option>50</option>
                                <option>75</option>
                                <option>100</option>
                            </select>
                            <label class="control-label pull-right" for="input-bottom">view:</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar col-xs-4 col-sm-3 col-md-3 col-lg-3">
                <div class="panel-group pull-right accordion_default" id="accordion_1" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_1">
                            CATEGORY
                            <a class="pull-right indicator up" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_1" aria-expanded="true" aria-controls="collapseOne"></a>
                        </div>
                        <div id="collapse_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne"> 
                            <div class="panel-body">
                                <ul class="scroll-pane">
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c1" checked>
                                            <label for="c1">Mobile Phones (341)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c2">
                                            <label for="c2">Smartphones (55)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c3">
                                            <label for="c3">Communicators (24)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c4">
                                            <label for="c4">CDMA Phones (14)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c5">
                                            <label for="c5">Accessories (83)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c6">
                                            <label for="c6">Chargers (8)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c7">
                                            <label for="c7">Memory Cards (6)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c8">
                                            <label for="c8">Protectors (12)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c9">
                                            <label for="c9">Travelsim (5)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c10">
                                            <label for="c10">Mobile Phones (341)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c11">
                                            <label for="c11">Travelism (5)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c12">
                                            <label for="c12">Mobile Phones (341)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c13">
                                            <label for="c13">Travelsim (5)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c14">
                                            <label for="c14">Mobile Phones (341)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ckbox">
                                            <input type="checkbox" name="category" id="c15">
                                            <label for="c15">Travelism (5)</label>
                                        </div>
                                    </li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_2">
                            BRAND
                            <a class="pull-right indicator down" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_2" aria-expanded="true" aria-controls="collapseOne"></a>
                        </div>
                        <div id="collapse_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <ul class="panel-body">
                                <li>
                                    <a href="#">Apple (34)</a>
                                </li>
                                <li>
                                    <a href="#">Samsung (24)</a>
                                </li>
                                <li>
                                    <a href="#">HTC (33)</a>
                                </li>
                                <li>
                                    <a href="#">Nokia (12)</a>
                                </li>
                                <li>
                                    <a href="#">Sony (34)</a>
                                </li>
                                <li>
                                    <a href="#">BenQ (18)</a>
                                </li>
                                <li>
                                    <a href="#">Asus (28)</a>
                                </li>
                                <li>
                                    <a href="#">Philips (11)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_3">
                            PRICE
                            <a class="pull-right indicator up" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_3" aria-expanded="true" aria-controls="collapseOne"></a>
                        </div>
                        <div id="collapse_3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body price-range">
                                <div id="price-range"></div>
                                <label class='pull-left'>from</label>
                                <input class='pull-left' type="text" id="i1">
                                <label class='pull-left'>to</label>
                                <input class='pull-left' type="text" id="i2">
                                <button class="btn btn-dark pull-left">OK</button>
                                <button class="btn btn-dark pull-left clear">CLEAR</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_4">
                            COLOR
                            <a class="pull-right indicator up" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_4" aria-expanded="true" aria-controls="collapseOne"></a>
                        </div>
                        <div id="collapse_4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body color">
                                <button class="btn c1"></button>
                                <button class="btn c2"></button>
                                <button class="btn c3"></button>
                                <button class="btn c4"></button>
                                <button class="btn c5"></button>
                                <button class="btn c6"></button>
                                <button class="btn c7"></button>
                                <button class="btn c8"></button>
                                <button class="btn c9"></button>
                                <button class="btn c10"></button>
                                <button class="btn c11"></button>
                                <button class="btn c12"></button>
                                <button class="btn c13"></button>
                                <button class="btn c14"></button>
                                <button class="btn c15"></button>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_5">
                            SIZE
                            <a class="pull-right indicator down" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_5" aria-expanded="true" aria-controls="collapseOne"></a>
                        </div>
                        <div id="collapse_5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_6">
                            WEIGHT
                            <a class="pull-right indicator down" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_6" aria-expanded="true" aria-controls="collapseOne"></a>
                        </div>
                        <div id="collapse_6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_7">
                            PROCESSOR
                            <a class="pull-right indicator down" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_7" aria-expanded="true" aria-controls="collapseOne"></a>
                        </div>
                        <div id="collapse_7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>
                </div>
                <p>&nbsp;</p>
                <div class="flexslider featured">
                    <h4 class="hdr">FEATURED</h4>
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
                                    <img class="media-object" src="images/gap.jpg" width="100" height="100" alt="">
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
                                    <img class="media-object" src="images/dress2.jpg" width="100" height="100" alt="">
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
                                    <img class="media-object" src="images/dress2.jpg" width="100" height="100" alt="">
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
                                    <img class="media-object" src="images/dress2.jpg" width="100" height="100" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Women's Tulip Dress</h4>
                                    <span>$22.8</span>
                                </div>
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
    </div>
    <?php $this->load->view('common/footer') ?> 
    <script src="/js/jquery/jquery-2.1.1.min.js"></script>
    <script src="/bootstrap-3.3.1/dist/js/bootstrap.min.js"></script> 
    <script src="/js/less/dist/less.js"></script>
    <script src="/js/jquery/plugins/selectivizr.js"></script>
    <script src="/js/jquery/plugins/owl.carousel/owl-carousel/owl.carousel.js"></script>
    <script src="/js/jquery/plugins/flexslider/jquery.flexslider.js"></script>
    <script src="/js/jquery/plugins/jScrollPane/script/jquery.mousewheel.js"></script>
    <script src="/js/jquery/plugins/select/js/bootstrap-select.js"></script>
    <script src="/js/jquery/plugins/jScrollPane/script/jquery.jscrollpane.min.js"></script>
    <script src="/js/jquery/plugins/noUislider/jquery.nouislider.all.min.js"></script>
    <script src="/js/pages/common.js"></script>
    <script src="/js/pages/category_grid_list.js"></script>
    <script src="/js/respond.js"></script>  
</body>
</html>


