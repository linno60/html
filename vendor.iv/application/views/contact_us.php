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
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>        
        <div class="map_wrap center-block">
            <h2 class="hdr"><span></span>Contact Us</h2> 
            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
            <div id="gmap-marker"></div>
        </div>
        <div class="row contact_wrap center-block">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8 nopadding">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 nopadding">
                    <h4 class="hdr">LEAVE COMMENT</h4> 
                    <form action="#" method="post">
                        <div class="input-group-wrap">
                        <div class="input-group name-input">
                            <span class="input-group-addon">Name*</span>
                            <input type="text" class="form-control" placeholder="Marek Mnishek">
                        </div>
                        <div class="input-group email-input">
                            <span class="input-group-addon">Email*</span>
                            <input type="text" class="form-control" placeholder="marek.mnishek@gmail.com">
                        </div>
                            </div>
                        
                        <div class="input-group subject-input">
                            <span class="input-group-addon">Subject</span>
                            <input type="text" class="form-control" placeholder="Interdum et Malesuada">
                        </div> 
                
                    </form>
                    <div class="dropzone_wrap clearfix">
                        <form action="#" class="dropzone pull-left"></form>
                        <span class="pull-left">No file chousen</span>
                    </div>                
                    <p class="visible-lg">Your email address will not be published. Required fields are marked <span>*</span></p>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 nopadding textarea-container">
                    <form action="#" method="post" class="clearfix">
                        <div class="input-group clearfix">
                            <span class="input-group-addon">Your Comment</span>
                            <textarea name="text" rows="10" cols="45" class="form-control" placeholder="Nullam nunc quam, aliquet at diam ac, placerat condimentum velit. Praesent sodales vel lacus eget suscipit. Donec scelerisque, mauris porttitor vulputate ornare, ipsum risus tempus metus."></textarea>
                        </div> 
                        <input type="text" placeholder="Enter the code" class="pull-left">
                        <div class="captcha">
                            <img src="images/captchs.png" alt="" width="141" height="47">
                        </div>
                        <p class="visible-xs">Your email address will not be published. Required fields are marked <span>*</span></p>
                        <button class="btn btn-lg btn-dark">SUBMIT</button>                           
                    </form>  
                    <p class="hidden-lg hidden-xs">Your email address will not be published. Required fields are marked <span>*</span></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 nopadding contact_details">
                <h4 class="hdr">CONTACT DETAILS</h4>
                <div class="media clearfix">
                    <span class="phone pull-left"></span>
                    <div class="media-body">
                        <span>0203 280 3703</span>
                        <span>0203 281 3704</span>
                    </div>
                </div>
                <div class="media clearfix">
                    <span class="mobile pull-left"></span>
                    <div class="media-body">
                        <span>445-115-747-38</span>
                        <span>445-170-029-32</span>
                    </div>
                </div>
                <div class="media clearfix">
                    <span class="mail pull-left"></span>
                    <div class="media-body">
                        <a href="mailto:Venedor@gmail.com">Venedor@gmail.com</a>
                        <span>Venedor@aol.com</span>
                    </div>
                </div>
                <div class="media clearfix">
                    <span class="skype pull-left"></span>
                    <div class="media-body">
                        <span>Venedor_store</span>
                        <span>Venedor_support</span>
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
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="/js/jquery/plugins/maps/gmaps.js"></script>
        <script src="/js/jquery/plugins/flexslider/jquery.flexslider.js"></script>
        <script src="/js/jquery/plugins/dropzone.js"></script>
        <script src="/js/pages/common.js"></script>
        <script src="/js/respond.js"></script> 
        <script>
                $(".dropzone").dropzone({
                    dictDefaultMessage: "Attach File"
                });
                var map_marker = new GMaps({
                    div: '#gmap-marker',
                    lat: 51.5149,
                    lng: -0.13635,
                    zoom: 17
                });

                map_marker.addMarker({
                    lat: 51.5151,
                    lng: -0.1382,
                    icon: "/images/marker.png",
                    click: function (e) {
                        alert('You clicked in this marker');
                    }
                });
        </script>
    </body>
</html>


