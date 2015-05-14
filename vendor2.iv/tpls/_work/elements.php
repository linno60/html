<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <html lang="en">
        <head>
            <title>Elements</title>
            <meta name="HandheldFriendly" content="True">
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
            <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>
            <link href="../css/reset.css" rel="stylesheet" type="text/css"/>
            <link href="../css/styles.css" rel="stylesheet" type="text/css"/>    
            <style>
                body{
                    background-color:#808080;
                }
                .padd{
                    padding-left:30px;
                }
                .hdr-elements{
                    color:#fff;
                    font-family:"Arial";
                    font-weight:600;
                }
                h1.hdr-elements{                    
                    font-size:24px;
                    margin-bottom: 20px;
                }
                h2.hdr-elements{
                    font-size: 20px;
                    margin: 15px 0px;
                }
                h3.hdr-elements {
                    display: inline-block;
                    font-size: 16px;
                    margin: 15px 10px 15px 0;
                    width: 100px;
                    text-align: right;
                }
                .alt-bg {
                    display: inline-block;
                    border: 1px dashed white;
                    background: #4d5a9e;
                }
                .author-label {
                    position: fixed;
                    top: 100px;
                    left: -43px;
                    transform: rotate(-90deg);
                    font: 600 20px "Arial";
                    color: #FFF;
                    padding: 5px;
                    background-color: #229DEE;
                    border-radius: 0px 0px 10px 10px;
                    width: 120px;
                    text-align: center;
                    text-transform: uppercase;
                }
                .author-label.artur-label{
                    top:230px;
                    padding:0px;
                    left: -48px;
                    background-color:lightgray;
                }
                .author-label.artur-label a{
                    color:#555;
                    font: 500 13px "Arial";
                }
            </style>
        </head>
        <body>
            <div class="author-label">Ivan</div>
            <div class="author-label artur-label"><div><a href="http://artur.eug/elements">Artur</a></div></div>
            <div class="elements clearfix">
                <input type="radio" name="main" id="mainl1" checked>
                <label class="label-main" for="mainl1">
                    <h1 class="hdr-elements">ICONS</h1>
                </label>                        
                <input type="radio" name="main" id="mainl2">
                <label class="label-main" for="mainl2">
                    <h1 class="hdr-elements">IMAGES</h1>
                </label>
                <input type="radio" name="main" id="mainl3">
                <label class="label-main" for="mainl3">
                    <h1 class="hdr-elements">FORM ELEMENTS</h1>
                </label>
                <input type="radio" name="main" id="mainl4">
                <label class="label-main" for="mainl4">
                    <h1 class="hdr-elements">BUTTONS</h1>
                </label>
                <input type="radio" name="main" id="mainl5">
                <label class="label-main" for="mainl5">
                    <h1 class="hdr-elements">TABLES</h1>
                </label>
                <input type="radio" name="main" id="mainl6">
                <label class="label-main" for="mainl6">
                    <h1 class="hdr-elements">LISTS</h1>
                </label>
                <input type="radio" name="main" id="mainl7">
                <label class="label-main" for="mainl7">
                    <h1 class="hdr-elements">PAGINATIONS</h1>
                </label>
                <input type="radio" name="main" id="mainl8">
                <label class="label-main" for="mainl8">
                    <h1 class="hdr-elements">BREADCRUMBS</h1>
                </label>
                <input type="radio" name="main" id="mainl9">
                <label class="label-main" for="mainl9">
                    <h1 class="hdr-elements">TABS</h1>
                </label>
                <input type="radio" name="main" id="mainl10">
                <label class="label-main" for="mainl10">
                    <h1 class="hdr-elements">CITES</h1>
                </label>
                <input type="radio" name="main" id="mainl11">
                <label class="label-main" for="mainl11">
                    <h1 class="hdr-elements">DEFAULTS</h1>
                </label>
                <input type="radio" name="main" id="mainl12">
                <label class="label-main" for="mainl12">
                    <h1 class="hdr-elements">MESSAGES</h1>
                </label>
                <input type="radio" name="main" id="mainl13">
                <label class="label-main" for="mainl13">
                    <h1 class="hdr-elements">LABELS</h1>
                </label> 
                <div class="tab-content" id="maint1">
                    <div class="padd elements-icons">               
                        <h2 class="hdr-elements">12x12 (<span></span>)</h2>               
                        <div class="padd">
                            <h3 class="hdr-elements">normal:</h3>
                            <div class="alt-bg">
                                <i class="icon-accarrow-down"></i>
                                <i class="icon-accarrow-up"></i>                
                                <i class="icon-page-arrow"></i>
                                <i class="icon-slidearrow-left-large"></i>
                                <i class="icon-slidearrow-right-large"></i>
                                <i class="icon-close"></i>                        
                            </div>
                            <br>
                            <h3 class="hdr-elements">hover:</h3>
                            <img src="/images/icons/12x12/accarrow-down-hover.png">
                            <img src="/images/icons/12x12/accarrow-up-hover.png">
                            <img src="/images/icons/12x12/page-arrow-hover.png">
                            <img src="/images/icons/12x12/slidearrow-left-large-hover.png">
                            <img src="/images/icons/12x12/slidearrow-right-large-hover.png">
                            <img src="/images/icons/12x12/close-hover.png">
                        </div>
                        <h2 class="hdr-elements">16x16 (<span></span>)</h2>
                        <div class="padd">
                            <h3 class="hdr-elements">normal:</h3>
                            <div class="alt-bg">
                                <i class="icon-topbar-compose"></i>
                                <i class="icon-topbar-user"></i>
                                <i class="icon-topbar-cart"></i>
                                <i class="icon-topbar-checkout"></i>
                            </div>
                            <i class="icon-likefinger"></i>                    
                            <i class="icon-flag-uk"></i>
                            <i class="icon-flag-it"></i>
                            <i class="icon-flag-ge"></i>
                            <i class="icon-flag-fr"></i>
                            <i class="icon-flag-sp"></i>
                            <i class="icon-menu-minus"></i>
                            <i class="icon-menu-plus"></i>
                            <i class="icon-grid"></i>
                            <i class="icon-list"></i>
                            <br>
                            <h3 class="hdr-elements">hover:</h3>
                            <img src="/images/icons/16x16/topbar-compose-hover.png">
                            <img src="/images/icons/16x16/topbar-user-hover.png">
                            <img src="/images/icons/16x16/topbar-cart-hover.png">
                            <img src="/images/icons/16x16/topbar-check-hover.png">
                            <img src="/images/icons/16x16/grid-hover.png">
                            <img src="/images/icons/16x16/list-hover.png">
                        </div>
                        <h2 class="hdr-elements">20x20 (<span></span>)</h2>
                        <div class="padd">
                            <i class="icon-product-check"></i>
                            <i class="icon-product-like"></i>
                            <i class="icon-support-mail"></i>
                            <i class="icon-support-skype"></i>
                            <i class="icon-blog-cloud"></i>
                            <i class="icon-blog-eye"></i>
                            <i class="icon-blog-folder"></i>
                            <i class="icon-blog-like"></i>
                            <i class="icon-blog-user"></i>
                            <i class="icon-contact-mail"></i>
                            <i class="icon-contact-mobile"></i>
                            <i class="icon-contact-phone"></i>
                            <i class="icon-contact-skype"></i>
                            <i class="icon-search"></i>
                            <i class="icon-social-delicious"></i>
                            <i class="icon-social-facebook"></i>
                            <i class="icon-social-flickr"></i>
                            <i class="icon-social-linkedin"></i>
                            <i class="icon-social-mail"></i>
                            <i class="icon-social-rss"></i>
                            <i class="icon-social-skype"></i>
                            <i class="icon-social-twitter"></i>
                            <i class="icon-world"></i>
                        </div>
                        <h2 class="hdr-elements">24x24 (<span></span>)</h2>
                        <div class="padd">
                            <i class="icon-label-address"></i>
                            <i class="icon-label-attach"></i>
                            <i class="icon-label-city"></i>
                            <i class="icon-label-company"></i>
                            <i class="icon-label-compose"></i>
                            <i class="icon-label-country"></i>
                            <i class="icon-label-fax"></i>
                            <i class="icon-label-mail"></i>
                            <i class="icon-label-password"></i>
                            <i class="icon-label-phone"></i>
                            <i class="icon-label-post"></i>
                            <i class="icon-label-region"></i>
                            <i class="icon-label-subject"></i>
                            <i class="icon-label-username"></i>
                            <i class="icon-hidden-menu"></i>
                        </div>
                        <h2 class="hdr-elements">Other sizes (<span></span>)</h2>
                        <div class="padd">
                            <i class="icon-hidden-cart"></i>                       
                            <i class="icon-ears"></i>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="maint2">
                    <img src="/images/icons/point.png">
                    <img src="/images/icons/check-plus.png">
                    <img src="/images/icons/quote.png">
                    <img src="/images/icons/marker.png">
                    <img src="/images/twitter-bird.png">
                    <img src="/images/icons/32x32/add-facebook.png">
                    <img src="/images/icons/32x32/add-mail.png">
                    <img src="/images/icons/32x32/add-plus.png">
                    <img src="/images/icons/32x32/add-print.png">
                    <img src="/images/icons/32x32/add-twitter.png">
                    <img src="/images/rating1.png">
                    <img src="/images/rating2.png">
                    <img src="/images/rating3.png">
                    <img src="/images/rating4.png">
                </div>

                <div class="tab-content" id="maint3">
                    <h3 class="hdr-elements">1)Defaults:</h3>
                    <div class="padd clearfix">
                        <input type="text" placeholder="Marek">
                        <hr>
                        <textarea name="text" rows="10" cols="45" placeholder="Nullam nunc quam, aliquet at diam ac, placerat condimentum velit. Praesent sodales vel lacus eget suscipit. Donec scelerisque, mauris porttitor vulputate ornare, ipsum risus tempus metus."></textarea>                
                        <hr>
                        <label><i class="icon-label-username"></i><span>Name*</span></label> 
                        <hr>                    
                        <span class="select">
                            <select>
                                <option selected>Great Britain</option>
                                <option>Germany</option>
                                <option>Spain</option>
                                <option>Italy</option>
                                <option>France</option>           
                            </select>
                        </span>
                        <hr>
                        <input type="checkbox" name="checkbox" id="c1" checked>
                        <label for="c1">Checkout as Guest</label>
                        <input type="checkbox" name="checkbox" id="c2">
                        <label for="c2">Register</label>
                    </div>  
                    <h3 class="hdr-elements">2)Context 1:</h3>
                    <div class="padd">                    
                        <div class="form-set-size clearfix">
                            <label>Select size:</label>
                            <input type="radio" name="radio" id="r1">
                            <label for="r1">S</label>
                            <input type="radio" name="radio" id="r2" checked>
                            <label for="r2">M</label>                        
                        </div>
                        <hr>
                        <div class="form-set-color clearfix">
                            <input type="radio" name="color" id="r3">
                            <label for="r3"></label>
                            <input type="radio" name="color" id="r4">
                            <label for="r4"></label>                        
                        </div>
                        <hr>
                    </div>
                    <h3 class="hdr-elements">3)Context 2:</h3>
                    <div class="padd">                    
                        <div class="form-set-quote">
                            <label>Country<span>*</span></label>
                            <span class="select">                            
                                <select>
                                    <option selected>--Please Select--</option>
                                    <option>Germany</option>
                                    <option>Spain</option>
                                    <option>Italy</option>
                                    <option>France</option>           
                                </select>
                            </span>
                            <hr>
                            <input type="text" placeholder="154789">
                        </div>
                        <hr>
                    </div>
                    <h3 class="hdr-elements">4)Context 3:</h3>
                    <div class="padd">                    
                        <div class="form-set-filter">
                            <label>sort by:</label>
                            <span class="select">
                                <select>
                                    <option selected="">Default</option>
                                    <option>Brand</option>
                                    <option>Name</option>
                                    <option>Size</option>
                                    <option>Color</option>
                                    <option>Price</option>            
                                </select>
                            </span>
                        </div>
                        <hr> 
                    </div>
                    <h3 class="hdr-elements">5)Context 4:</h3>
                    <div class="padd">                    
                        <div class="form-set-price-range clearfix">
                            <label>from</label>
                            <input type="text">                                           
                        </div>
                    </div>
                    <h3 class="hdr-elements">6)Separated:</h3>
                    <div class="padd"> 
                        <input type="search" class="search-input" placeholder="Search here">
                        <hr>
                        <input type="text" class="newsletter-input" placeholder="Enter your email address">                                           
                        <hr>
                        <input class="subscribe-input" type="checkbox" name="checkbox" id="c3" checked>
                        <label for="c3">I wish to subscribe to the Venedor newsletter</label> 
                        <input class="subscribe-input" type="checkbox" name="checkbox" id="c4">
                        <label for="c4">I wish to subscribe to the Venedor newsletter</label>
                        <hr>
                    </div>
                </div>
                <div class="tab-content" id="maint4">
                    <div class="padd">                
                        <button class="btn btn-largest btn-default">ADD TO CART</button>
                        <a class="btn btn-large btn-light">CREATE MY ACCOUNT</a>
                        <a class="btn btn-middle btn-default">LEARN MORE</a>
                        <button class="btn btn-mid btn-dark">SUBMIT</button>
                        <button class="btn btn-small btn-default">ADD TO CART</button>
                        <button class="btn btn-xsmall btn-alt"><i class="icon-product-check"></i></button>
                        <button class="btn btn-xsmall btn-medium"><i class="icon-social-facebook"></i></button>
                        <button class="btn btn-xxsmall btn-medium"><i class="icon-world"></i></button>
                        <button class="btn-xsmall btn-alt"><i class="icon-search"></i></button>
                        <button class="btn-cart btn-xsmall btn-alt"><i class="icon-quick-access"></i><span>0 item(s) - $0.00</span></button>
                        <button class="btn btn-close"><i class="icon-close"></i></button>
                        <hr>
                        <button class="btn btn-small btn-disabled">ADD TO CART</button>
                        <button class="btn btn-compare">COMPARE</button>
                        <button class="btn btn-range">OK</button>
                    </div>
                </div>
                <div class="tab-content" id="maint5">
                    <div class="padd">               
                        <table class="table-cart">
                            <thead>
                                <tr>
                                    <th>PRODUCT NAME</th>
                                    <th>PRODUCT CODE</th>
                                    <th>UNIT PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>SUBTOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <table class="table-total">
                            <tfoot>
                                <tr>
                                    <td>TOTAL:</td>
                                    <td>$440.50</td>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>SUBTOTAL:</td>
                                    <td>$434.50</td>
                                </tr>
                                <tr>
                                    <td>SHIPPING:</td>
                                    <td>$6.00</td>
                                </tr>
                                <tr>
                                    <td>TAX (0%):</td>
                                    <td>$0.00</td>
                                </tr>
                            </tbody>
                        </table>            
                        <hr>
                        <table class="table-striped">                      
                            <tbody>
                                <tr>
                                    <td>PRODUCT NAME</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>PRICE</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>BRAND</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>AVAILABILITY</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>RATING</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>SUMMARY</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>WEIGHT</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>DEMENSIONS</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-content" id="maint6">
                    <div class="padd">
                        <div class="menu">
                            <ul>
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Jeans & Trousers</a></li>
                                <li><a href="#">Blouses & Shirts</a></li>
                                <li><a href="#">Tops & T-Shirts</a></li>
                                <li><a href="#">Jackets & Coats</a></li>
                                <li><a href="#">Skirts</a></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="footer">
                            <ul>
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Personal information</a></li>
                                <li><a href="#">Addresses</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Orders history</a></li>
                                <li><a href="#">Your Vouchers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="maint7">
                    <div class="padd">
                        <ul class="pagination clearfix">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next"><a href="#"><i class="icon-page-arrow"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="maint8">
                    <div class="padd">
                        <ul class="breadcrumb clearfix">
                            <li><a href="#">Home</a></li>
                            <li><a href="#"><span>></span>Electronics</a></li>
                            <li><a href="#"><span>></span>Mobile</a></li>
                            <li><span>></span>Samsung Galaxy Ace</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="maint9">
                    <div class="padd">
                        <div class="tabs home-tabs clearfix">
                            <input type="radio" id="tab1" name="tab-labelh" checked>
                            <label for="tab1">ALL</label>
                            <input type="radio" id="tab2" name="tab-labelh">
                            <label for="tab2">LATEST</label>
                            <input type="radio" id="tab3" name="tab-labelh">
                            <label for="tab3">FEATURED</label>
                            <input type="radio" id="tab4" name="tab-labelh">
                            <label for="tab4">BESTSELLERS</label>
                            <input type="radio" id="tab5" name="tab-labelh">
                            <label for="tab5">SPECIAL</label>                         
                            <div></div>
                            <div class="tab-pane" id="tabc1">1</div>
                            <div class="tab-pane" id="tabc2">2</div>
                            <div class="tab-pane" id="tabc3">3</div>
                            <div class="tab-pane" id="tabc4">4</div>
                            <div class="tab-pane" id="tabc5">5</div>
                        </div>
                        <hr>
                        <div class="tabs">
                            <input type="radio" id="tab11" name="tab-label">
                            <label for="tab11">DESCRIPTION</label>
                            <input type="radio" id="tab12" name="tab-label" checked>
                            <label for="tab12">DETAILS</label>
                            <input type="radio" id="tab13" name="tab-label">
                            <label for="tab13">COMMENTS</label>
                            <input type="radio" id="tab14" name="tab-label">
                            <label for="tab14">ACCESSORIES</label>
                            <input type="radio" id="tab15" name="tab-label">
                            <label for="tab15">VIDEO</label>  
                            <div class="tab-pane" id="tabc11">1</div>
                            <div class="tab-pane" id="tabc12">2</div>
                            <div class="tab-pane" id="tabc13">3</div>
                            <div class="tab-pane" id="tabc14">4</div>
                            <div class="tab-pane" id="tabc15">5</div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="maint10">
                    <div class="padd">
                        <blockquote>
                            Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi eleifend molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti. Phasellus interdum risus at mi ullamcorper lobortis. In et metus aliquet, suscipit leo.
                        </blockquote>
                        <div class="slider">
                            <blockquote>
                                Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi eleifend molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti.
                            </blockquote> 
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="maint11">
                    <div class="padd">
                        <h1>Our Products</h1> 
                        <h2>SPECIAL OFFER -25%</h2> 
                        <h3>BE&nbsp;THE&nbsp;FIRST&nbsp;TO&nbsp;KNOW</h3> 
                        <h4>TESTIMONIALS</h4> 
                        <h5>INFORMATION</h5>
                        <hr>
                        <div class="alt-bg">
                            <p>Venedor is a fully responsive PSD theme designed for all types of platforms: WooCommerce, Magento, OpenCart, PrestaShop and other.Based on Bootstrap`s 12 column 1200px responsive grid Template. Great looks on desktops, tablets and mobiles.     Sed interdum magna sit amet orci tristique blandit. Etiam id justo consequat quam viverra elementum. Sed ac magna sed massarhoncus elementum et ac augue. Morbi non tellus nisi. Pellentesque habitant morbi tristique senectus. Buy Venedor Theme!</p>                
                        </div>
                        <hr>
                        <a href="#">login</a>
                        <hr>
                        <div class="blog">
                            <a href="#">By admin</a>
                        </div>                    
                        <hr>
                        <a href="#" class="name">Anna Retallick</a>
                        <hr>
                        <a href="#" class="read">Read More</a>
                        <hr>
                        <a href="#" class="privacy">Privacy Policy</a>
                    </div>
                </div>
                <div class="tab-content" id="maint12">
                    <div class="padd">
                        <h2 class="hdr-elements">none</h2>
                    </div>
                </div>
                <div class="tab-content" id="maint13">
                    <div class="padd">
                        <span class="label">
                            <span>$1450</span>
                        </span>
                        <hr>
                        <div class="elastislide">                       
                            <span class="label">
                                <span>$378</span>
                            </span>
                        </div>
                        <hr>
                        <div class="thumbnail">
                            <span class="label">
                                <strong>$870</strong>
                                <span>$710</span>
                            </span>
                            <span class="label disable-label">
                                <span>$378</span>
                            </span>
                        </div>
                        <hr>
                        <span class="label-sm label-new">NEW</span>
                        <hr>
                        <span class="label-sm label-discount">-30%</span>
                        <hr>
                        <div class="label-contact"><i class="icon-contact-phone"></i></div>
                        <hr>
                        <div class="label-date">15 <strong>AUG</strong></div>
                        <hr>
                    </div>
                </div>



            </div>
            <script src="/js/jquery/jquery-2.1.1.min.js"></script>
            <script>
                (function ($) {
                    $('.elements-icons h2').each(function () {
                        $(this).find('span').text($(this).next().find('i').length);
                    });
                    if (window.clipboardData)
                    {
                        $('.elements-icons').on('dblclick', 'i', function () {
                            window.clipboardData.setData("Text", $(this)[0].outerHTML);
                        });
                        $('.elements-icons').on('dblclick', 'img', function () {
                            window.clipboardData.setData("Text", $(this).attr('src'));
                        });
                    }
                })(jQuery);
            </script>
        </body>
    </html>