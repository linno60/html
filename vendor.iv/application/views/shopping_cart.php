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
        <link rel="stylesheet" type="text/css" href="/css/reset.css">
        <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.1/dist/css/bootstrap.min.css"> 
        <link rel="stylesheet/less" type="text/css" href="/css/styles.less">
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
    </head>
    <body ng-controller="MainCtrl"> 
        <?php $this->load->view('common/header') ?>
        <div class="breadcrumb_wrap">
            <div>
                <ol class="breadcrumb center-block">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
        </div>        
        <div class="row center-block table-cart">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding">                
                <h2 class="hdr"><span></span>Shopping Cart</h2> 
                <p>Just this week, you can use the free premium delivery.</p>
                <table class="table table-visible">
                    <thead class="text-center">
                        <tr>
                            <th class="name-col text-center">
                                PRODUCT NAME
                            </th>
                            <th class="code-col text-center">
                                PRODUCT CODE
                            </th>
                            <th class="price-col text-center">
                                UNIT PRICE
                            </th>
                            <th class="q-col text-center">
                                QUANTITY
                            </th>
                            <th class="sub-col text-center">
                                SUBTOTAL
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img src="images/webcam.jpg" width="180" height="180" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Lowlands Lace Blouse</h4>                                   
                                        <dl class="clearfix">
                                            <dt class="pull-left">Color:</dt><dd>&nbsp;Black</dd>
                                            <dt class="pull-left">Size:</dt><dd>&nbsp;XL</dd>
                                        </dl>
                                    </div>
                                </div>
                            </td>
                            <td class="code-col text-center">
                                MP125984154
                            </td>
                            <td class="price-col text-center">
                                $130
                            </td>
                            <td class="q-col text-center">
                                <input type="text" class="spinner" placeholder="1">
                            </td>
                            <td class="sub-col text-center">
                                <button class="btn pull-right"></button>
                                <span class="pull-right">$130</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img src="images/samsung.jpg" width="180" height="180" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Samsung Galaxy Ace</h4>                                   
                                        <dl class="clearfix">
                                            <dt class="pull-left">Color:</dt><dd>&nbsp;Black</dd>
                                            <dt class="pull-left">Size:</dt><dd>&nbsp;XL</dd>
                                        </dl>
                                    </div>
                                </div>
                            </td>
                            <td class="code-col text-center">
                                MP125984154
                            </td>
                            <td class="price-col text-center">
                                $1475
                            </td>
                            <td class="q-col text-center">
                                <input type="text"  class="spinner" placeholder="2">
                            </td>
                            <td class="sub-col text-center">
                                <button class="btn pull-right"></button>
                                <span class="pull-right">$1475</span>                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img src="images/cover.jpg" width="180" height="180" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Iphone Case Cover Original</h4>                                   
                                        <dl class="clearfix">
                                            <dt class="pull-left">Color:</dt><dd>&nbsp;Black</dd>
                                            <dt class="pull-left">Size:</dt><dd>&nbsp;XL</dd>
                                        </dl>
                                    </div>
                                </div>
                            </td>
                            <td class="code-col text-center">
                                MP125984154
                            </td>
                            <td class="price-col text-center">
                                $1475
                            </td>
                            <td class="q-col text-center">
                                <input type="text"  class="spinner" placeholder="1">
                            </td>
                            <td class="sub-col text-center">
                                <button class="btn pull-right"></button>
                                <span class="pull-right">$1475</span>                                
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-hidden">
                    <thead>
                        <tr>
                            <th class="text-center">3 Products In Your Cart</th>
                        </tr>                    
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center clearfix">
                                <img class="center-block" src="images/webcam.jpg" width="180" height="180" alt="">
                                <h4 class="media-heading">Lowlands Lace Blouse</h4>                                   
                                <p>Color:<span>&nbsp;Black</span></p>
                                <p>Size:<span>&nbsp;XL</span></p>
                                <p>Product Code:<span>&nbsp;MP125984154</span></p>
                                <p class="price">Unit Price:<span>&nbsp;$130</span></p>
                                <input type="text" class="spinner" placeholder="1">
                                <p class="sub">Subtotal:<span>&nbsp;$130</span></p>
                                <button class="btn"></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center clearfix">
                                <img class="center-block" src="images/samsung.jpg" width="180" height="180" alt="">
                                <h4 class="media-heading">Lowlands Lace Blouse</h4>                                   
                                <p>Color:<span>&nbsp;Black</span></p>
                                <p>Size:<span>&nbsp;XL</span></p>
                                <p>Product Code:<span>&nbsp;MP125984154</span></p>
                                <p class="price">Unit Price:<span>&nbsp;$130</span></p>
                                <input type="text" class="spinner" placeholder="1">
                                <p class="sub">Subtotal:<span>&nbsp;$130</span></p>
                                <button class="btn"></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center clearfix">
                                <img class="center-block" src="images/cover.jpg" width="180" height="180" alt="">
                                <h4 class="media-heading">Lowlands Lace Blouse</h4>                                   
                                <p>Color:<span>&nbsp;Black</span></p>
                                <p>Size:<span>&nbsp;XL</span></p>
                                <p>Product Code:<span>&nbsp;MP125984154</span></p>
                                <p class="price">Unit Price:<span>&nbsp;$130</span></p>
                                <input type="text" class="spinner" placeholder="1">
                                <p class="sub">Subtotal:<span>&nbsp;$130</span></p>
                                <button class="btn"></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>            
        </div>
        <div class="row under_table center-block">
            <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8 nopadding">
                <div class="overview_nav clearfix">
                    <ul class="nav nav-pills nav-stacked col-xs-3 col-sm-3 col-md-3 col-lg-3 nopadding">
                        <li class="active"><a href="#a" data-toggle="tab">ESTIMATE SHIPPING & TAXES</a></li>
                        <li><a href="#b" data-toggle="tab">DISCOUNT CODE</a></li>
                        <li><a href="#c" data-toggle="tab">GIFT VOUCHER</a></li>
                    </ul>
                    <div class="tab-content col-xs-9 col-sm-8 col-md-9 col-lg-9">
                        <div class="tab-pane filter active" id="a">
                            <p>Enter your destination to get a shipping estimate</p>
                            <div class="clearfix">                        
                                <select id="input-limit" name="country" class="selectpicker pull-right">
                                    <option selected="selected">--Please Select--</option>
                                    <option>USA</option>
                                    <option>Germany</option>
                                    <option>UK</option>
                                    <option>Italy</option>
                                    <option>France</option>
                                </select>
                                <label class="control-label pull-left" for="input-limit">Country<span>*</span></label>
                            </div>
                            <div class="clearfix">                        
                                <select id="input" name="region" class="selectpicker pull-right">
                                    <option selected="selected">--Please Select--</option>
                                    <option>USA</option>
                                    <option>Germany</option>
                                    <option>UK</option>
                                    <option>Italy</option>
                                    <option>France</option>
                                </select>
                                <label class="control-label pull-left" for="input-limit">Region/State<span>*</span></label>
                            </div>
                            <div class="clearfix">                        
                                <input type="text" class="pull-right" placeholder="154789">
                                <label class="control-label pull-left" for="input-limit">Post Code<span>*</span></label>
                            </div>
                            <button class="btn btn-dark pull-right">GET QUOTES</button>
                        </div>
                        <div class="tab-pane" id="b">
                            asdf
                        </div>
                        <div class="tab-pane" id="c">
                            dsfa
                        </div>
                    </div>                    
                </div>
                <div class="panel-group accordion-group" id="accordion_2" role="tablist">
                    <div class="panel active">
                        <div class="panel-heading" id="headings1">
                            <a data-toggle="collapse" data-parent="#accordion_2" href="#collapsing1">
                                ESTIMATE SHIPPING & TAXES
                            </a>
                        </div>
                        <div id="collapsing1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="tab-pane filter active" id="a">
                                    <p>Enter your destination to get a shipping estimate</p>
                                    <div class="clearfix"> 
                                        <label class="control-label pull-left" for="input-limit">Country<span>*</span></label>
                                        <select id="input-limit" name="country" class="selectpicker pull-right">
                                            <option selected="selected">--Please Select--</option>
                                            <option>USA</option>
                                            <option>Germany</option>
                                            <option>UK</option>
                                            <option>Italy</option>
                                            <option>France</option>
                                        </select>                                        
                                    </div>
                                    <div class="clearfix">   
                                        <label class="control-label pull-left" for="input-limit">Region/State<span>*</span></label>
                                        <select id="input" name="region" class="selectpicker pull-right">
                                            <option selected="selected">--Please Select--</option>
                                            <option>USA</option>
                                            <option>Germany</option>
                                            <option>UK</option>
                                            <option>Italy</option>
                                            <option>France</option>
                                        </select>                                        
                                    </div>
                                    <div class="clearfix">  
                                        <label class="control-label pull-left" for="input-limit">Post Code<span>*</span></label>
                                        <input type="text" class="pull-right" placeholder="154789">                                        
                                    </div>
                                    <button class="btn btn-dark pull-left">GET QUOTES</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading" id="headings2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion_2" href="#collapsing2">
                                DISCOUNT CODE
                            </a>
                        </div>
                        <div id="collapsing2" class="panel-collapse collapse">
                            <div class="panel-body">
                                fdsa
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading" id="headings3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion_2" href="#collapsing3">
                                GIFT VOUCHER
                            </a>
                        </div>
                        <div id="collapsing3" class="panel-collapse collapse">
                            <div class="panel-body">
                                sdf
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 table-total nopadding">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-center">
                                SUBTOTAL:
                            </td>
                            <td class="text-left">
                                $434.50
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                SHIPPING:
                            </td>
                            <td class="text-left">
                                $6.00
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                TAX (0%):
                            </td>
                            <td class="text-left">
                                $0.00
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                TOTAL:
                            </td>
                            <td class="text-left">
                                $440.50
                            </td>
                        </tr>
                    </tbody>
                </table>                
                <button class="btn btn-success pull-right">CHECKOUT</button>
                <button class="btn btn-dark pull-left">CONTINUE SHOPPING</button>
            </div>
        </div>
        <div class="row purchased sale center-block">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding">
                <div class="hdr_wrap">
                    <h2 class="hdr"><span></span>Also Purchased</h2> 
                    <p>Note the similar products - after buying for</p>
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
        <script src="/js/jquery/plugins/select/js/bootstrap-select.js"></script>
        <script src="/js/pages/common.js"></script>
        <script src="/js/respond.js"></script> 
        <script>

        </script>
    </body>
</html>

