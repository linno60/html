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
                    <li class="active">Compare Product</li>
                </ol>
            </div>
        </div>        
        <div class="row center-block table_compare">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding">                
                <h2 class="hdr"><span></span>Compare Product</h2> 
                <p>If after products comparing you find it hard to choose, you can write to our live support.</p>
                <div class="table_wrap">
                    <table class="table table-striped table-visible">  
                        <thead>
                            <tr>
                                <th class="text-right">PRODUCT NAME</th>
                                <th> 
                                    <img class="center-block" src="images/benq.jpg" width="180" height="180" alt="">
                        <h4 class="text-center">Lowlands Lace Blouse</h4>
                        </th>
                        <th>
                            <img class="center-block" src="images/benq.jpg" width="180" height="180" alt="">
                        <h4 class="text-center">Samsung Galaxy Ace</h4>
                        </th>
                        <th>
                            <img class="center-block" src="images/benq.jpg" width="180" height="180" alt="">
                        <h4 class="text-center">Iphone Case Cover Original</h4>
                        </th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="price_row">
                                <td class="text-right">
                                    PRICE
                                </td>
                                <td class="text-center">
                                    <span>$130</span>
                                </td>
                                <td class="text-center">
                                    <span>$1475</span>
                                </td>
                                <td class="text-center">
                                    <span>$1475</span>
                                </td>
                            </tr>
                            <tr class="brand_row">
                                <td class="text-right">
                                    BRAND
                                </td>
                                <td class="text-center">
                                    <span>SONY</span>
                                </td>
                                <td class="text-center">
                                    <span>SAMSUNG</span>
                                </td>
                                <td class="text-center">
                                    <span>TOSHIBA</span>
                                </td>
                            </tr>
                            <tr class="availability_row">
                                <td class="text-right">
                                    AVAILABILITY
                                </td>
                                <td class="text-center">
                                    <span>In Stock</span>
                                </td>
                                <td class="text-center">
                                    <span>Out of Stock</span>
                                </td>
                                <td class="text-center">
                                    <span>In Stock</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    RATING
                                </td>
                                <td class="text-center">
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="80"></div>
                                        </div>                                        
                                    </div>
                                    <span>9 rewiews</span>
                                </td>
                                <td class="text-center">
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="80"></div>
                                        </div>                                        
                                    </div>
                                    <span>2 rewiews</span>
                                </td>
                                <td class="text-center">
                                    <div class="ratings-container clearfix">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="80"></div>
                                        </div>                                        
                                    </div>
                                    <span>5 rewiews</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    SUMMARY
                                </td>
                                <td class="text-center">
                                    <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean volutpat lacus at dolor blandit, lobortis ante semper. </p>
                                </td>
                                <td class="text-center">
                                    <p>Vivamus et cursus leo, eu sagittis erat. Integer sed ultricies ligula. Sed elementumarcu libero, nec consectetur orci interdumsed. Cras euismod rhoncus.</p>
                                </td>
                                <td class="text-center">
                                    <p>Aliquam suscipit augue at dolor rhoncus feugiat. Etiam sapien mi, dictum sed urnaid, suscipit iaculis turpis. Nunc tincidunt dapibus tortor, a rutrum lorem.</p>
                                </td>
                            </tr>
                            <tr class="weight_row">
                                <td class="text-right">
                                    WEIGHT
                                </td>
                                <td class="text-center">
                                    <span>1.2 Kg</span>
                                </td>
                                <td class="text-center">
                                    <span>0.9 Kg</span>
                                </td>
                                <td class="text-center">
                                    <span>1.7 Kg</span>
                                </td>
                            </tr>
                            <tr class="demensions_row">
                                <td class="text-right">
                                    DEMENSIONS
                                </td>
                                <td class="text-center">                                    
                                    <span>45 cm x 35 cm x 68 cm</span>
                                </td>
                                <td class="text-center">
                                    <span>21 cm x 32 cm x 60 cm</span>
                                </td>
                                <td class="text-center">
                                    <span>24 cm x 75 cm x 19 cm</span>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <button class="btn btn-dark center-block">ADD TO CART</button>
                                    <button class="btn-close center-block"></button>
                                </td>
                                <td>
                                    <button class="btn btn-dark center-block">ADD TO CART</button>
                                    <button class="btn-close center-block"></button>
                                </td>
                                <td>
                                    <button class="btn btn-dark center-block">ADD TO CART</button>
                                    <button class="btn-close center-block"></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table-hidden">
                        <tr>
                            <td colspan="2" class="table_hdr text-center">
                                PRODUCT NAME
                            </td>
                        </tr>
                        <tr class="tr_name">
                            <td>
                                <img class="center-block" src="images/benq.jpg" width="124" height="124" alt="">
                                <h4 class="text-center">Lowlands Lace Blouse</h4>
                            </td>
                            <td>
                                <img class="center-block" src="images/benq.jpg" width="124" height="124" alt="">
                                <h4 class="text-center">Samsung Galaxy Ace</h4>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="table_hdr text-center">
                                PRICE
                            </td>
                        </tr>
                        <tr class="tr_price">
                            <td class="text-center">
                                $130
                            </td>
                            <td class="text-center">
                                $1475
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="table_hdr text-center">
                                BRAND
                            </td>
                        </tr>
                        <tr class="tr_brand">
                            <td class="text-center">
                                SONY
                            </td>
                            <td class="text-center">
                                SAMSUNG
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="table_hdr text-center">
                                AVAILABILITY
                            </td>
                        </tr>
                        <tr class="tr_avail">
                            <td class="text-center">
                                In Stock
                            </td>
                            <td class="text-center">
                                Out of Stock
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="table_hdr text-center">
                                RATING
                            </td>
                        </tr>
                        <tr class="tr_rating">
                            <td class="text-center">
                                <div class="ratings-container clearfix">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="80"></div>
                                    </div>                                        
                                </div>
                                <span>9 rewiews</span>
                            </td>
                            <td class="text-center">
                                <div class="ratings-container clearfix">
                                    <div class="ratings">
                                        <div class="ratings-result" data-result="100"></div>
                                    </div>                                        
                                </div>
                                <span>2 rewiews</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="table_hdr text-center">
                                SUMMARY
                            </td>
                        </tr>
                        <tr class="tr_summary">
                            <td class="text-center">
                                <p>Vivamus et cursus leo, eu sagittis erat. Integer sed ultricies ligula. Sed elementumarcu libero, nec consectetur orci interdumsed. Cras euismod rhoncus.</p>
                            </td>
                            <td class="text-center">
                                <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean volutpat lacus at dolor blandit, lobortis ante semper. </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="table_hdr text-center">
                                WEIGHT
                            </td>
                        </tr>
                        <tr class="tr_weight">
                            <td class="text-center">
                                1.2 Kg
                            </td>
                            <td class="text-center">
                                0.9 Kg
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="table_hdr text-center">
                                DEMENSIONS
                            </td>
                        </tr>
                        <tr class="tr_demensions">
                            <td class="text-center">
                                45 cm x 35 cm x 68 cm
                            </td>
                            <td class="text-center">
                                21 cm x 32 cm x 60 cm
                            </td>
                        </tr>
                        <tr class="tr_bottom">
                            <td>
                                    <button class="btn btn-dark center-block">ADD TO CART</button>
                                    <button class="btn-close center-block"></button>
                                </td>
                                <td>
                                    <button class="btn btn-dark center-block">ADD TO CART</button>
                                    <button class="btn-close center-block"></button>
                                </td>
                        </tr>
                    </table>
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


