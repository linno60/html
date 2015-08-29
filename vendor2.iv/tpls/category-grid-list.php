<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Category grid list</title>
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/css/reset-elements.css">
        <link type="text/css" rel="stylesheet" href="/js/jquery/plugins/selectBoxIt/src/stylesheets/jquery.selectBoxIt.css">
        <link type="text/css" rel="stylesheet" href="/css/styles.css">    
    </head>
    <body>
        <header>
            <div class="top-bar-wrap">
                <div class="top-bar">
                    <div class="top-bar-links">
                        <a href="#" data-tooltip="MyWishlist(0)"><i class="icon-topbar-compose"></i>My Wishlist (0)</a>
                        <a href="#" data-tooltip="My&nbsp;Account"><i class="icon-topbar-user"></i>My Account</a>
                        <a href="#" data-tooltip="Shopping&nbsp;Cart"><i class="icon-topbar-cart"></i>Shopping Cart</a>
                        <a href="#" data-tooltip="Checkout"><i class="icon-topbar-checkout"></i>Checkout</a>
                    </div>
                    <form method="post" action="#" class="top-bar-drops">
                        <p><span class="hidden-desktop">Welcome visitor you can </span><a href="#" class="login">login</a> or <a href="#">create an account</a>.</p>                        
                        <select id="currency" class="select-top">
                            <option value="Euro">Euro</option>
                            <option value="Pound St.">Pound St.</option>
                        </select>
                        <select id="language" class="select-top">
                            <option value="Italian" data-icon="icon-flag-it">Italian</option>
                            <option value="Spanish" data-icon="icon-flag-sp">Spanish</option>
                            <option value="French" data-icon="icon-flag-fr">French</option>
                            <option value="German" data-icon="icon-flag-ge">German</option>
                        </select>
                        <select id="currency-phone" class="select-top">
                            <option value="Euro">EUR</option>
                            <option value="Pound St.">GBP</option>
                        </select>
                        <select id="language-phone" class="select-top">
                            <option value="Italian" data-icon="icon-flag-it">It</option>
                            <option value="Spanish" data-icon="icon-flag-sp">Sp</option>
                            <option value="French" data-icon="icon-flag-fr">Fr</option>
                            <option value="German" data-icon="icon-flag-ge">Ge</option>
                        </select>
                    </form>
                </div>            
            </div>
            <div class="header">
                <div class="header-top">
                    <a href="#" class="logo"><img src="/images/logo.png"></a> 
                    <div class="support">
                        <span class="lbl lbl-support">
                            <i class="icon-ears"></i>
                            +(404) 158 14 25 78<br>
                            +(404) 851 21 48 15
                        </span>
                        <span class="lbl lbl-support alt">
                            <span>
                                <i class="icon-support-skype"></i>                                   
                                <a href="#">venedor_support</a>
                            </span>
                            <span>
                                <i class="icon-support-mail"></i>
                                <a href="mailto:venedor@gmail.com">venedor@gmail.com</a>
                            </span>
                        </span> 
                    </div>
                </div>                
            </div>
            <div class="fixed-menu"> 
                <div class="nav-wrap">
                    <nav> 
                        <a href="#" class="logo"><img src="/images/logo.png"></a>
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#">fashion</a>
                                <div class="nav-dropdown">
                                    <div class="dropdown-item">
                                        <h3>clothing</h3>
                                        <ul class="list list-lnk list-nav">
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Jeans & Trousers</a></li>
                                            <li><a href="#">Blouses & Shirts</a></li>
                                            <li><a href="#">Tops & T-Shirts</a></li>
                                            <li><a href="#">Jackets & Coats</a></li>
                                            <li><a href="#">Skirts</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-item">
                                        <h3>shoes</h3>
                                        <ul class="list list-lnk list-nav">
                                            <li><a href="#">Formal Shoes</a></li>
                                            <li><a href="#">Casual Shoes</a></li>
                                            <li><a href="#">Sandals</a></li>
                                            <li><a href="#">Boots</a></li>
                                            <li><a href="#">Wide Fit</a></li>
                                            <li><a href="#">Slippers</a></li>
                                        </ul> 
                                    </div>
                                    <div class="dropdown-item">
                                        <h3>accessories</h3>
                                        <ul class="list list-lnk list-nav">
                                            <li><a href="#">Bags & Purses</a></li>
                                            <li><a href="#">Belts</a></li>
                                            <li><a href="#">Gloves</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                            <li><a href="#">Sunglasses</a></li>
                                            <li><a href="#">Hair Accessories</a></li>
                                        </ul> 
                                    </div>
                                    <div class="dropdown-item">
                                        <h3>sports</h3>
                                        <ul class="list list-lnk list-nav">
                                            <li><a href="#">Sport Tops & Vests</a></li>
                                            <li><a href="#">Hoodies</a></li>
                                            <li><a href="#">Swimwear</a></li>
                                            <li><a href="#">Footwear</a></li>
                                            <li><a href="#">Sports Underwear</a></li>
                                            <li><a href="#">Bags</a></li>
                                        </ul> 
                                    </div>
                                    <div class="dropdown-item">
                                        <h3>maternity</h3>
                                        <ul class="list list-lnk list-nav">
                                            <li><a href="#">Tops & Skirts</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Trousers & Shorts</a></li>
                                            <li><a href="#">Knitwear</a></li>
                                            <li><a href="#">Jackets & Coats</a></li>
                                        </ul> 
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#">electronics</a>
                                <div class="nav-dropdown">
                                    <div class="dropdown-item">
                                        <ul class="list-lnk">
                                            <li><a href="#"><h3>Mobile</h3></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#">gifts</a>
                                <div class="nav-dropdown">
                                    <div class="dropdown-item">
                                        <ul class="list list-lnk">
                                            <li><a href="#"><h3>Mobile</h3></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#">books</a>
                                <div class="nav-dropdown">
                                    <div class="dropdown-item">
                                        <ul class="list list-lnk">
                                            <li><a href="#"><h3>Mobile</h3></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#">at&nbsp;home</a>
                                <div class="nav-dropdown">
                                    <div class="dropdown-item">
                                        <ul class="list list-lnk">
                                            <li><a href="#"><h3>Mobile</h3></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#">music</a>
                                <div class="nav-dropdown">
                                    <div class="dropdown-item">
                                        <ul class="list list-lnk">
                                            <li><a href="#"><h3>Mobile</h3></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="menu-hidden-wrap">
                            <input type="checkbox" id="menu" name="menu">
                            <label for="menu"><span>menu</span><div class="btn btn-hidden-menu"><i class="icon-hidden-menu"></i></div></label>
                            <div class="menu-hidden">  
                                <input type="checkbox" id="acc1" name="accordion">
                                <label for="acc1">fashion</label>
                                <div class="inner">
                                    <input type="checkbox" id="ac1" name="accordion-inner">
                                    <label for="ac1">clothing</label>
                                    <ul class="list list-lnk list-nav">
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Jeans & Trousers</a></li>
                                        <li><a href="#">Blouses & Shirts</a></li>
                                        <li><a href="#">Tops & T-Shirts</a></li>
                                        <li><a href="#">Jackets & Coats</a></li>
                                        <li><a href="#">Skirts</a></li>
                                    </ul>
                                    <input type="checkbox" id="ac2" name="accordion-inner">
                                    <label for="ac2">accessories</label>
                                    <ul class="list list-lnk list-nav">
                                        <li><a href="#">Formal Shoes</a></li>
                                        <li><a href="#">Casual Shoes</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Boots</a></li>
                                        <li><a href="#">Wide Fit</a></li>
                                        <li><a href="#">Slippers</a></li>
                                    </ul>
                                    <input type="checkbox" id="ac3" name="accordion-inner">
                                    <label for="ac3">shoes</label>
                                    <ul class="list list-lnk list-nav">
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li><a href="#">Belts</a></li>
                                        <li><a href="#">Gloves</a></li>
                                        <li><a href="#">Jewellery</a></li>
                                        <li><a href="#">Sunglasses</a></li>
                                        <li><a href="#">Hair Accessories</a></li>
                                    </ul>
                                    <input type="checkbox" id="ac4" name="accordion-inner">
                                    <label for="ac4">maternity</label>
                                    <ul class="list list-lnk list-nav">
                                        <li><a href="#">Tops & Skirts</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Trousers & Shorts</a></li>
                                        <li><a href="#">Knitwear</a></li>
                                        <li><a href="#">Jackets & Coats</a></li>
                                    </ul>
                                    <input type="checkbox" id="ac5" name="accordion-inner">
                                    <label for="ac5">sports</label>
                                    <ul class="list list-lnk list-nav">
                                        <li><a href="#">Sport Tops & Vests</a></li>
                                        <li><a href="#">Hoodies</a></li>
                                        <li><a href="#">Swimwear</a></li>
                                        <li><a href="#">Footwear</a></li>
                                        <li><a href="#">Sports Underwear</a></li>
                                        <li><a href="#">Bags</a></li>
                                    </ul>
                                </div>
                                <input type="checkbox" id="acc2" name="accordion">
                                <label for="acc2">electronics</label>
                                <div class="inner">
                                    <ul class="list list-lnk list-nav">
                                        <li><a href="#">Dresses</a></li>
                                    </ul>
                                </div>
                                <input type="checkbox" id="acc3" name="accordion">
                                <label for="acc3">music</label>
                                <div class="inner">
                                    <ul class="list list-lnk list-nav">
                                        <li><a href="#">Dresses</a></li>
                                    </ul>
                                </div>
                                <input type="checkbox" id="acc4" name="accordion">
                                <label for="acc4">gifts</label>
                                <div class="inner">
                                    <ul class="list list-lnk list-nav">
                                        <li><a href="#">Dresses</a></li>
                                    </ul>
                                </div>
                                <input type="checkbox" id="acc5" name="accordion">
                                <label for="acc5">books</label>
                                <div class="inner">
                                    <ul class="list list-lnk list-nav">
                                        <li><a href="#">Dresses</a></li>
                                    </ul>
                                </div>
                                <label><a href="#">at home</a></label>
                            </div>
                        </div>

                        <div class="quick-access">
                            <a href="#" class="btn btn-cart"><i class="icon-cart"></i> <em>0 item(s) - $0.00</em></a>
                            <div class="shopping-cart">
                                <table>
                                    <caption align="left">Recently added item(s)</caption>
                                    <tr>
                                        <td width="97" height="105">
                                            <img src="images/shape3.png" alt="" width="85" height="85">
                                        </td>
                                        <td>
                                            <h6>Cam Optia AF Webcam</h6>
                                            <dl>
                                                <dt>1x</dt><dd>$710</dd>
                                            </dl>
                                        </td>
                                        <td>
                                            <a href="#" class="delete"><i class="icon-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="97" height="105">
                                            <img src="images/shape3.png" alt="" width="85" height="85">
                                        </td>
                                        <td>
                                            <h6>Iphone Case Cover Original</h6>
                                            <dl>
                                                <dt>1x</dt><dd>$19</dd>
                                            </dl>
                                        </td>
                                        <td>
                                            <a href="#" class="delete"><i class="icon-close"></i></a>
                                        </td>
                                    </tr>
                                </table>
                                <div class="cart-total">
                                    <dl>
                                        <dt>shipping:</dt><dd>$7</dd>
                                        <dt>total:</dt><dd>$736</dd>
                                    </dl>
                                    <div class="btns-total">
                                        <a href="#" class="btn btn-total-cart">cart</a>
                                        <a href="#" class="btn btn-total-check">checkout</a>
                                    </div>
                                </div>
                            </div>
                            <form action="#" method="post" class="search">
                                <button><span class="btn btn-search"><i class="icon-search"></i></span></button>
                                <input type="search" class="input-search" placeholder="Search here">
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="banner-wrap">
                <div class="banner-main">
                    <div class="banner-img">
                        <img src="images/iphone4.png" alt="" width="180" height="288">
                    </div>
                    <div class="banner-description">
                        <h1>Mobile</h1>
                        <p>Aenean dictum libero vitae magna sagittis, eu convallis dolor blandit. Fusce consectetur tincidunt pretium. Etiam non tellus massa. Aenean tincidunt in augue nec tempus. Nulla porta libero sit amet lorem pellentesque posuere...</p>
                        <a href="#" class="btn btn-more">learn more</a>
                    </div>
                </div>
            </div>
        </header>
        <script src="/js/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="/js/jquery/jquery-ui-1.11.4/jquery-ui.min.js"></script>
        <script src="/js/jquery/plugins/scrollToFixed/jquery-scrolltofixed-min.js"></script>
        <script src="/js/jquery/plugins/selectBoxIt/src/javascripts/jquery.selectBoxIt.min.js"></script>
        <script src="/js/jquery/plugins/flexslider/jquery.flexslider.js"></script>
        <script>
            $('.fixed-menu').scrollToFixed();

            $("#currency").selectBoxIt({
                defaultText: "US Dollar"
            });

            $("#language").selectBoxIt({
                defaultText: "English",
                defaultIcon: "icon-flag-uk"
            });

            $("#currency-phone").selectBoxIt({
                defaultText: "USD"
            });

            $("#language-phone").selectBoxIt({
                defaultText: "En",
                defaultIcon: "icon-flag-uk"
            });

            $.each($('.ratings-result'), function () {
                var $this = $(this),
                        parentWidth = $this.closest('.ratings').width(),
                        rating = $(this).data('result'),
                        newWidth = (parentWidth / 100) * rating;
                $(this).css('width', newWidth);
            });
        </script>
    </body>
</html>