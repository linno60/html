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
                    <li class="active">Register Account</li>
                </ol>
            </div>
        </div>        
        <div class="row register_wrap center-block">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding clearfix">
                <h2 class="hdr"><span></span>Register Account</h2> 
                <p>If you already have an account with us, please login at the 
                    <a href="#" class="green_link">login page.</a>
                </p> 
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-left clearfix">  
                <h4 class="hdr">YOUR PERSONAL DETAILS</h4>
                <form action="#" method="post">
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
                </form>
            </div>            
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-right clearfix">
                <h4 class="hdr">YOUR ADDRESS</h4>
                <form action="#" method="post">
                    <div class="input-group company-input">
                        <span class="input-group-addon">Company*</span>
                        <input type="text" class="form-control" placeholder="PromoKit">
                    </div>
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
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-left col-top clearfix">
                <div class="form-group">
                    <h4 class="hdr">YOUR PASSWORD</h4>
                    <div class="input-group password-input">
                        <span class="input-group-addon">Password*</span>
                        <input type="password" class="form-control" placeholder="**********">
                    </div>
                    <div class="input-group password-input">
                        <span class="input-group-addon">Password*</span>
                        <input type="password" class="form-control" placeholder="**********">
                    </div>
                </div>
                <div class="form-group">
                    <h4 class="hdr">NEWSLETTER</h4>
                    <div class="well">
                        <div class="ckbox">
                            <input type="checkbox" id="c1" checked>
                            <label for="c1">I wish to subscribe to the Venedor newsletter.</label>
                        </div>
                    </div>
                    <div class="ckbox">
                        <input type="checkbox" id="c2">
                        <label for="c2">
                            I have reed and agree to the
                            <a href="#" class="green_link">Privacy Policy</a>
                        </label>
                    </div>
                    <button class="btn btn-success btn-lg">CREATE MY ACCOUNT</button>
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




