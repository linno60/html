<!DOCTYPE html>
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
            h1{
                color:#fff;
                font-size:24px;
                padding-top:20px;
                padding-bottom:20px;
            }
            h2{
                font-size: 20px;
                color: white;
                margin: 15px 0px;
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
        </style>
    </head>
    <body>
        <div class="author-label">Ivan</div>
        <div class="elements clearfix">
            <h1>ICONS</h1>
            <div class="padd elements-icons">               
                <h2>12x12 (<span></span>)</h2>               
                <div class="padd">
                    <div class="alt-bg">
                        <i class="icon-accarrow-down"></i>
                        <i class="icon-accarrow-up"></i>                
                        <i class="icon-selectarrow-small"></i>
                        <i class="icon-page-arrow"></i>
                        <i class="icon-slidearrow-left-large"></i>
                        <i class="icon-slidearrow-right-large"></i>
                        <i class="icon-close"></i>                        
                    </div>
                    <i class="icon-checkbox"></i>
                </div>
                <h2>16x16 (<span></span>)</h2>
                <div class="padd">
                    <div class="alt-bg">
                        <i class="icon-topbar-compose"></i>
                        <i class="icon-topbar-user"></i>
                        <i class="icon-topbar-cart"></i>
                        <i class="icon-topbar-checkout"></i>
                        <i class="icon-selectarrow-middle"></i>
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
                </div>
                <h2>20x20 (<span></span>)</h2>
                <div class="padd">
                    <i class="icon-product-check"></i>
                    <i class="icon-product-like"></i>
                    <i class="icon-support-mail"></i>
                    <i class="icon-support-skype"></i>
                    <i class="icon-selectarrow-large"></i>
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
                <h2>24x24 (<span></span>)</h2>
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
                </div>
                <h2>Other sizes (<span></span>)</h2>
                <div class="padd">
                    <i class="icon-hidden-cart"></i>
                    <i class="icon-hidden-menu"></i>
                    <i class="icon-point"></i>
                    <i class="icon-ears"></i>
                </div>
            </div>
            <h1>FORM ELEMENTS</h1>
            <div class="padd">               
                <div class="search">
                    <input type="text" placeholder="Search here">
                </div>
                <hr>
                <div class="newsletter">
                    <input type="text" placeholder="Enter your email address">
                </div>            
                <input type="text" placeholder="Marek">
                <label class="label-input clearfix"><i class="icon-label-username"></i><span>Name*</span></label>
                <hr>
                <div class="select select-small">             
                    <select>
                        <option selected>Default</option>
                        <option>Size</option>
                        <option>Name</option>
                        <option>Price</option>
                        <option>Brand</option>
                    </select>
                    <span class="option">
                        <i class="icon-selectarrow-small"></i>
                    </span>
                </div>
                <hr>
                <div class="select select-middle">               
                    <select>
                        <option selected>--Please Select--</option>
                        <option>Germany</option>
                        <option>Spain</option>
                        <option>Italy</option>
                        <option>France</option>
                    </select>
                    <span class="option">
                        <i class="icon-selectarrow-middle"></i>
                    </span>
                </div>
                <hr>
                <div class="select select-large">                              
                    <select>
                        <option selected>Great Britain</option>
                        <option>Germany</option>
                        <option>Spain</option>
                        <option>Italy</option>
                        <option>France</option>
                    </select>
                    <span class="option">
                        <i class="icon-selectarrow-large"></i>
                    </span>
                </div>
                <hr>            
                <textarea name="text" rows="10" cols="45" placeholder="Nullam nunc quam, aliquet at diam ac, placerat condimentum velit. Praesent sodales vel lacus eget suscipit. Donec scelerisque, mauris porttitor vulputate ornare, ipsum risus tempus metus."></textarea>
            </div>
            <h1>BUTTONS</h1>
            <div class="padd">                
                <button class="btn btn-largest btn-default">ADD TO CART</button>
                <button class="btn btn-large btn-light">CREATE MY ACCOUNT</button>
                <button class="btn btn-middle btn-default">LEARN MORE</button>
                <button class="btn btn-mid btn-dark">SUBMIT</button>
                <button class="btn btn-small btn-default">ADD TO CART</button>
                <button class="btn btn-xsmall btn-alt"><i class="icon-product-check"></i></button>
                <button class="btn btn-xsmall btn-medium"><i class="icon-social-facebook"></i></button>
                <button class="btn btn-xxsmall btn-medium"><i class="icon-world"></i></button>
                <button class="btn-xsmall btn-alt"><i class="icon-search"></i></button>
                <button class="btn-cart btn-xsmall btn-alt"><i class="icon-quick-access"></i><span>0 item(s) - $0.00</span></button>
                <button class="btn btn-close"><i class="icon-close"></i></button>
            </div>
            <h1>TABLES</h1>
            <div class="padd">               
                <table class="table-cart">
                    <thead>
                        <tr>
                            <th>
                                PRODUCT NAME
                            </th>
                            <th>
                                PRODUCT CODE
                            </th>
                            <th>
                                UNIT PRICE
                            </th>
                            <th>
                                QUANTITY
                            </th>
                            <th>
                                SUBTOTAL
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <table class="table-total">
                    <tfoot>
                        <tr>
                            <td>
                                TOTAL:
                            </td>
                            <td>
                                $440.50
                            </td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>
                                SUBTOTAL:
                            </td>
                            <td>
                                $434.50
                            </td>
                        </tr>
                        <tr>
                            <td>
                                SHIPPING:
                            </td>
                            <td>
                                $6.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                TAX (0%):
                            </td>
                            <td>
                                $0.00
                            </td>
                        </tr>
                    </tbody>
                </table>            
                <hr>
                <table class="table-striped">                      
                    <tbody>
                        <tr>
                            <td>
                                PRODUCT NAME
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                PRICE
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                BRAND
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                AVAILABILITY
                            </td>
                            <td>
                            </td>
                            <td >

                            </td>
                            <td >

                            </td>
                        </tr>
                        <tr>
                            <td>
                                RATING
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                SUMMARY
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                WEIGHT
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                DEMENSIONS
                            </td>
                            <td>                                    

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h1>LISTS</h1>
            <div class="padd">               
                <ul>
                    <li>
                        <a href="#">Dresses</a>
                    </li>
                    <li>
                        <a href="#">Jeans & Trousers</a>
                    </li>
                    <li>
                        <a href="#">Blouses & Shirts</a>
                    </li>
                    <li>
                        <a href="#">Tops & T-Shirts</a>
                    </li>
                    <li>
                        <a href="#">Jackets & Coats</a>
                    </li>
                    <li>
                        <a href="#">Skirts</a>
                    </li>
                </ul>
            </div>
            <div class="padd">

            </div>
        </div>
        <script src="/js/jquery/jquery-2.1.1.min.js"></script>
        <script>
            (function ($) {
                $('.elements-icons h2').each(function () {
                    $(this).find('span').text($(this).next().find('i').length);
                });
            })(jQuery);
        </script>
    </body>
</html>

