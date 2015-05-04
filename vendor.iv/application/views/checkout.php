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
        <link rel="stylesheet/less" type="text/css" href="/css/styles.less">
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
    </head>
    <body ng-controller="MainCtrl"> 
        <?php $this->load->view('common/header') ?>
        <div class="breadcrumb_wrap">
            <div>
                <ol class="breadcrumb center-block">
                    <li><a href="#">Home</a></li>
                    <li class="active">Checkout</li>
                </ol>
            </div>
        </div>
        <div class="row hdr_title center-block">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding">
                <h2 class="hdr"><span></span>Checkout</h2> 
                <p>Quisque elementum nibh at dolor pellentesque, a eleifend libero pharetra.</p>
            </div>   
        </div>
        <div class="row checkout_wrap center-block">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding">
                <div class="panel-group pull-right accordion_default" id="accordion_1" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_1">
                            1 Step: CHECKOUT OPTION
                            <a class="pull-right indicator up" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_1" aria-expanded="true" aria-controls="collapseOne"></a>
                        </div>
                        <div id="collapse_1" class="panel-collapse clearfix collapse in" role="tabpanel" aria-labelledby="headingOne"> 
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-left nopadding">
                                <form action="#" method="post">
                                    <h4 class="hdr">NEW CUSTOMER</h4>
                                    <p>Register with us for future convenience:</p>
                                    <div class="ckbox">
                                        <input type="checkbox" name="category" id="c13">
                                        <label for="c13">Checkout as Guest</label>
                                    </div>
                                    <div class="ckbox">
                                        <input type="checkbox" name="category" id="c13">
                                        <label for="c13">Register</label>
                                    </div>
                                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                    <button class="btn btn-dark btn-lg">CONTINUE</button>
                                </form>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-right nopadding">
                                <form action="#" method="post">
                                    <h4 class="hdr">REGISTERED CUSTOMER</h4>
                                    <p>If you have an account with us, please log in.</p>
                                    <div class="input-group email-input">
                                        <span class="input-group-addon">Email*</span>
                                        <input type="text" class="form-control" placeholder="marek.mnishek@gmail.com">
                                    </div> 
                                    <div class="input-group password-input">
                                        <span class="input-group-addon">Password*</span>
                                        <input type="password" class="form-control" placeholder="**********">
                                    </div>
                                    <div class="clearfix">
                                        <div class="ckbox pull-left">
                                            <input type="checkbox" name="category" id="c13">
                                            <label for="c13">Remember password</label>
                                        </div>
                                        <span class="reminder pull-right">Forgotten your password?</span>                                    
                                    </div>
                                    <button class="btn btn-dark btn-lg">LOGIN</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_2">
                            2 Step: BILLING INFORMATION
                            <a class="pull-right indicator down" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_2" aria-expanded="true" aria-controls="collapseOne"></a>
                        </div>
                        <div id="collapse_2" class="panel-collapse clearfix collapse in" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-left nopadding">
                                <form action="#" method="post">
                                    <h4 class="hdr">YOUR PERSONAL DETAILS</h4>
                                    <div class="input-group name-input">
                                        <span class="input-group-addon">First Name*</span>
                                        <input type="text" class="form-control" placeholder="Marek">
                                    </div>
                                    <div class="input-group name-input">
                                        <span class="input-group-addon">Last Name*</span>
                                        <input type="text" class="form-control" placeholder="Mnishek">
                                    </div>
                                    <div class="input-group email-input">
                                        <span class="input-group-addon">Email*</span>
                                        <input type="text" class="form-control" placeholder="marek.mnishek@gmail.com">
                                    </div> 
                                    <div class="input-group phone-input">
                                        <span class="input-group-addon">Telephone*</span>
                                        <input type="text" class="form-control" placeholder="+(744) 584 784 25">
                                    </div>
                                    <div class="input-group fax-input">
                                        <span class="input-group-addon">Fax</span>
                                        <input type="text" class="form-control" placeholder="+(744) 478 635 98">
                                    </div> 
                                    <div class="input-group company-input">
                                        <span class="input-group-addon">Company*</span>
                                        <input type="text" class="form-control" placeholder="PromoKit">
                                    </div>
                                    <div class="input-group password-input">
                                        <span class="input-group-addon">Password*</span>
                                        <input type="password" class="form-control" placeholder="**********">
                                    </div>
                                    <div class="input-group password-input">
                                        <span class="input-group-addon">Password*</span>
                                        <input type="password" class="form-control" placeholder="**********">
                                    </div>
                                    <div class="ckbox guest_input">
                                        <input type="checkbox" name="category" id="guest">
                                        <label for="guest">I wish to subscribe to the Trego Store newsletter</label>
                                    </div>
                                    <div class="ckbox register_input">
                                        <input type="checkbox" name="category" id="register">
                                        <label for="register">My delivery and billing addresses are the same</label>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-right nopadding">
                                <form action="#" method="post">
                                    <h4 class="hdr">YOUR ADDRESS</h4>
                                    <div class="input-group address-input">
                                        <span class="input-group-addon">Address 1*</span>
                                        <input type="text" class="form-control" placeholder="Oxford street, 156/14">
                                    </div>
                                    <div class="input-group address-input">
                                        <span class="input-group-addon">Address</span>
                                        <input type="text" class="form-control" placeholder="Gille High Street, 147/23">
                                    </div> 
                                    <div class="input-group city-input">
                                        <span class="input-group-addon">City*</span>
                                        <input type="text" class="form-control" placeholder="London">
                                    </div>
                                    <div class="input-group post-input">
                                        <span class="input-group-addon">Post Code</span>
                                        <input type="text" class="form-control" placeholder="125795">
                                    </div>
                                    <div class="input-group country-input">
                                        <span class="input-group-addon">Country*</span>
                                        <select id="input-limit" class="selectpicker input-limit pull-right">
                                            <option selected="selected">Great Britain</option>
                                            <option>Italy</option>
                                            <option>Germany</option>
                                            <option>USA</option>
                                            <option>france</option>
                                        </select>
                                    </div>
                                    <div class="input-group region-input">
                                        <span class="input-group-addon">Region / State*</span>
                                        <select id="input-limit" class="selectpicker input-limit pull-right">
                                            <option selected="selected">Kent</option>
                                            <option>California</option>
                                            <option>Texas</option>
                                            <option>Arizona</option>
                                            <option>New Mexico</option>
                                        </select>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_3">
                            3 Step: DELIVERY DETAILS
                            <a class="pull-right indicator up" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_3" aria-expanded="true" aria-controls="collapseOne"></a>
                        </div>
                        <div id="collapse_3" class="panel-collapse clearfix collapse" role="tabpanel" aria-labelledby="headingThree">

                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_4">
                            4 Step: DELIVERY METHOD
                            <a class="pull-right indicator up" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_4" aria-expanded="true" aria-controls="collapseOne"></a>
                        </div>
                        <div id="collapse_4" class="panel-collapse clearfix collapse" role="tabpanel" aria-labelledby="headingThree">

                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_5">
                            5 Step: PAYMENT METHOD
                            <a class="pull-right indicator down" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_5" aria-expanded="true" aria-controls="collapseOne"></a>
                        </div>
                        <div id="collapse_5" class="panel-collapse clearfix collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_6">
                            6 Step: CONFIRM ORDER
                            <a class="pull-right indicator down" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_6" aria-expanded="true" aria-controls="collapseOne"></a>
                        </div>
                        <div id="collapse_6" class="panel-collapse clearfix collapse in" role="tabpanel" aria-labelledby="headingThree">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>PRODUCT NAME</td>
                                        <td>PRODUCT CODE</td>
                                        <td>UNIT PRICE</td>
                                        <td>QUANTITY</td>
                                        <td>SUBTOTAL</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>MP125984154</td>
                                        <td>
                                            $130

                                        </td>
                                        <td>
                                            <input type="text" class="spinner" placeholder="1">
                                        </td>
                                        <td class="sub-col text-center">
                                            <button class="btn btn-close pull-right"></button>
                                            <span class="pull-right">$130</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>MP125984154</td>
                                        <td>$1475</td>
                                        <td>
                                            <input type="text" class="spinner" placeholder="1">
                                        </td>
                                        <td>$1475</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">SUBTOTAL:</td>
                                        <td>$434.50</td>                                        
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">SHIPPING</td>
                                        <td>$6.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">TAX (0%):</td>
                                        <td>$0.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">TOTAL:</td>
                                        <td>$440.50</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-dark pull-right">CONFIRM ORDER</button>
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
        <script src="/js/jquery/plugins/select/js/bootstrap-select.js"></script>
        <script src="/js/jquery/plugins/flexslider/jquery.flexslider.js"></script>
        <script src="/js/pages/common.js"></script>
        <script src="/js/respond.js"></script> 
    </body>
</html>




