<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fashion Press</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
        <link rel="stylesheet" href="/css/addons/data-flex.css">
        <link rel="stylesheet" href="/css/addons/data-tabs.css">
        <link rel="stylesheet" href="/css/addons/generic.css">  
        <link rel="stylesheet" href="/css/elements.css">  
        <link rel="stylesheet" href="/css/styles.css">  
        <script>
            var LAYOUT_WIDTH = 960;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col">
        <div>
            <header>
                <div class="lwrap" data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="202" height="23" alt="Fashion Press">
                    </a>
                    <div class="top-bar" data-flex="end" data-childs="center -center">
                        <div>
                            <a href="#">Join</a>
                        </div>
                        <div>
                            <a href="#">Sign In</a>
                        </div>
                        <div class="bag">
                            <a href="#">Shopping Bag</a><span>(0)</span><i class="icon-bag"></i>
                        </div>
                    </div>
                </div>
                <div class="nav">
                    <nav class="links-nav lwrap" data-flex="w">
                        <a href="#">home</a>
                        <a href="#">about us</a>
                        <a href="#">careers</a>
                        <a href="#">contact us</a>
                        <a href="#">company profile</a>
                        <a href="#">company registration</a>
                        <a href="#">wish list</a>
                    </nav>
                </div>
            </header>
            <section class="slider-wrap">
                <div class="slider" data-flex="axis">            
                    <div class='arrowprev'>
                        <label class='num0' for='slide-0'></label>
                        <label class='num1' for='slide-1'></label>
                        <label class='num2' for='slide-2'></label>
                    </div>
                    <input name="anchor" id='slide-0' type="radio">
                    <input name="anchor" id='slide-1' type="radio">
                    <input name="anchor" id='slide-2' type="radio">
                    <input name="anchor" id='play' type="radio" checked>
                    <ul data-childs="between -start" data-childs-480="vstripe">
                        <li>
                            <hgroup>
                                <h1>We pro&shy;vide worlds top fas&shy;hion for less fas&shy;hion&shy;press.</h1>
                                <h6>Fashion&shy;Press the name of hi class fas&shy;hion web.</h6>
                            </hgroup>
                            <figure>
                                <img src="/images/slider.png" width="623" height="616" alt="">
                                <div class="lbl lbl-slider"><big>Pro&shy;duct<br> $24.00</big><small>Free PSD</small></div>
                            </figure>
                        </li>
                        <li class='num0'>
                            <hgroup>
                                <h1>We pro&shy;vide worlds top fas&shy;hion for less fas&shy;hion&shy;press.</h1>
                                <h6>Fashion&shy;Press the name of hi class fas&shy;hion web.</h6>
                            </hgroup>
                            <figure>
                                <img src="/images/slider.png" width="623" height="616" alt="">
                                <div class="lbl lbl-slider"><big>Pro&shy;duct<br> $24.00</big><small>Free PSD</small></div>
                            </figure>
                        </li>
                        <li class='num1'>
                            <hgroup>
                                <h1>We pro&shy;vide worlds top fas&shy;hion for less fas&shy;hion&shy;press.</h1>
                                <h6>Fashion&shy;Press the name of hi class fas&shy;hion web.</h6>
                            </hgroup>
                            <figure>
                                <img src="/images/slider.png" width="623" height="616" alt="">
                                <div class="lbl lbl-slider"><big>Pro&shy;duct<br> $24.00</big><small>Free PSD</small></div>
                            </figure>
                        </li>
                        <li class='num2'>                    
                            <hgroup>
                                <h1>We pro&shy;vide worlds top fas&shy;hion for less fas&shy;hion&shy;press.</h1>
                                <h6>Fashion&shy;Press the name of hi class fas&shy;hion web.</h6>
                            </hgroup>
                            <figure>
                                <img src="/images/slider.png" width="623" height="616" alt="">
                                <div class="lbl lbl-slider"><big>Pro&shy;duct<br> $24.00</big><small>Free PSD</small></div>
                            </figure>
                        </li>
                    </ul>
                    <div class='arrownext'>
                        <label class='num0' for='slide-0'></label>
                        <label class='num1' for='slide-1'></label>
                        <label class='num2' for='slide-2'></label>
                    </div>
                </div>
            </section>
            <section class="filter">
                <div class="lwrap" data-flex="axis">                
                    <form action="#" method="post" data-flex="-center">
                        <label>search product</label>
                        <input type="search" name="search" class="input-default">
                        <button><span class="btn btn-submit"><i class="icon-search"></i></span></button>
                    </form> 
                    <div data-flex="end w" data-childs>
                        <a href="#"><i class="icon-line"></i></a>
                        <a href="#"><i class="icon-line2"></i></a>
                    </div>
                </div>            
            </section>
            <section class="lwrap content-wrap" data-flex="stripe" data-flex-480="vstripe">
                <aside class="sidebar">
                    <section>
                        <h2 class="title">products menu</h2>
                        <div class="links-menu" data-flex="col" data-childs="-center">
                            <a href="#">Man</a>
                            <a href="#">Women</a>
                            <a href="#" class="active">Fashion 2013</a>
                            <a href="#">Kids</a>
                            <a href="#">Jeans</a>
                            <a href="#">Tshirt</a>
                            <a href="#">Top Fasion</a>
                            <a href="#">Summber collection</a>
                            <a href="#">Special Offer</a>
                        </div>
                    </section>
                    <section class="banner">
                        <figure><img src="/images/location.png" width="220" height="111" alt=""></figure>
                        <hgroup>
                            <h2>deli&shy;ve&shy;ring</h2>
                            <h4>world wide</h4>
                        </hgroup>
                    </section>
                    <section class="twitter-posts">
                        <h3>latest from twitter</h3>
                        <div>
                            <p><a href="#">@crucio</a> what an incredible site! <time>less than a minute ago</time></p>
                            <p><a href="#">@lukebeck</a> love this theme, tons of options, lots of goodies and crazy good support. &nbsp;I cant ask for anything better!<br> <time>about 3 hours ago</time></p>
                            <p><a href="#">@harikumar</a> where do you get support for account issues? <a href="#">http://t.co/sr324nLrQw</a><br> <time>less than a minute ago</time></p>
                        </div>
                    </section>
                    <section>
                        <h3>our happy clients</h3>
                        <blockquote>
                            <q>“Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consec tetur, adipisci velit, sed quia non numquam eius labore et dolore magnam ets aliquam quaerat voluptatemser. Enim ad minimas venians amets</q>
                            <i class="icon-user"></i>
                            <cite>Jon Doe, Company Inc.</cite>
                        </blockquote>
                    </section>
                </aside>
                <main class="content">
                    <div data-flex="stripe w" class="products">
                        <div>
                            <figure><img src="/images/img1.png" width="207" height="207" alt=""></figure>
                            <h6><span>Kids Moon Colorblock Footed Tights</span></h6>
                            <div class="details" data-flex="stripe" data-childs="center -center">
                                <div><strong><small>$</small>8.<sup>99</sup></strong></div>
                                <div><a href="#" class="btn btn-default">get it</a></div>
                            </div>
                        </div>
                        <div class="wide" data-flex="col">
                            <figure><img src="/images/img2.png" width="434" height="247" alt=""></figure>
                            <div class="details" data-flex="stripe" data-childs="center -center">
                                <h5>Serax fibrepots</h5>
                                <div><strong><small>$</small>24.<sup>99</sup></strong></div>
                                <div><a href="#" class="btn btn-default">get it</a></div>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/img3.png" width="207" height="207" alt=""></figure>
                            <h6><span>Kids Moon Colorblock Footed Tights</span></h6>
                            <div class="details" data-flex="stripe" data-childs="center -center">
                                <div><strong><small>$</small>8.<sup>99</sup></strong></div>
                                <div><a href="#" class="btn btn-default">get it</a></div>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/img4.png" width="207" height="207" alt=""></figure>
                            <h6><span>Kids Moon Colorblock Footed Tights</span></h6>
                            <div class="details" data-flex="stripe" data-childs="center -center">
                                <div><strong><small>$</small>8.<sup>99</sup></strong></div>
                                <div><a href="#" class="btn btn-default">get it</a></div>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/img5.png" width="207" height="207" alt=""></figure>
                            <h6><span>Kids Moon Colorblock Footed Tights</span></h6>
                            <div class="details" data-flex="stripe" data-childs="center -center">
                                <div><strong><small>$</small>8.<sup>99</sup></strong></div>
                                <div><a href="#" class="btn btn-default">get it</a></div>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/img6.png" width="207" height="207" alt=""></figure>
                            <h6><span>Kids Moon Colorblock Footed Tights</span></h6>
                            <div class="details" data-flex="stripe" data-childs="center -center">
                                <div><strong><small>$</small>8.<sup>99</sup></strong></div>
                                <div><a href="#" class="btn btn-default">get it</a></div>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/img7.png" width="207" height="207" alt=""></figure>
                            <h6><span>Kids Moon Colorblock Footed Tights</span></h6>
                            <div class="details" data-flex="stripe" data-childs="center -center">
                                <div><strong><small>$</small>8.<sup>99</sup></strong></div>
                                <div><a href="#" class="btn btn-default">get it</a></div>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/img8.png" width="207" height="207" alt=""></figure>
                            <h6><span>Kids Moon Colorblock Footed Tights</span></h6>
                            <div class="details" data-flex="stripe" data-childs="center -center">
                                <div><strong><small>$</small>8.<sup>99</sup></strong></div>
                                <div><a href="#" class="btn btn-default">get it</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="products" data-flex="stripe w">
                        <h2><span>popular</span> products now</h2>
                        <div>
                            <figure><span class="lbl lbl-default">hot</span><img src="/images/img9.png" width="207" height="207" alt=""></figure>
                            <h6><span>Kids Moon Colorblock Footed Tights</span></h6>
                            <div class="details" data-flex="stripe" data-childs="center -center">
                                <div><strong><small>$</small>8.<sup>99</sup></strong></div>
                                <div><a href="#" class="btn btn-default">get it</a></div>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/img10.png" width="207" height="207" alt=""></figure>
                            <h6><span>Kids Moon Colorblock Footed Tights</span></h6>
                            <div class="details" data-flex="stripe" data-childs="center -center">
                                <div><strong><small>$</small>8.<sup>99</sup></strong></div>
                                <div><a href="#" class="btn btn-default">get it</a></div>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/img11.png" width="207" height="207" alt=""></figure>
                            <h6><span>Kids Moon Colorblock Footed Tights</span></h6>
                            <div class="details" data-flex="stripe" data-childs="center -center">
                                <div><strong><small>$</small>8.<sup>99</sup></strong></div>
                                <div><a href="#" class="btn btn-default">get it</a></div>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/img12.png" width="207" height="207" alt=""></figure>
                            <h6><span>Kids Moon Colorblock Footed Tights</span></h6>
                            <div class="details" data-flex="stripe" data-childs="center -center">
                                <div><strong><small>$</small>8.<sup>99</sup></strong></div>
                                <div><a href="#" class="btn btn-default">get it</a></div>
                            </div>
                        </div>
                        <div class="wide" data-flex="col">
                            <figure><span class="lbl lbl-default">exclusive</span><img src="/images/img13.png" width="436" height="247" alt=""></figure>
                            <div class="details" data-flex="stripe" data-childs="center -center">
                                <h5>Serax fibrepots</h5>
                                <div><strong><small>$</small>24.<sup>99</sup></strong></div>
                                <div><a href="#" class="btn btn-default">get it</a></div>
                            </div>
                        </div>
                    </div>
                </main>
            </section> 
        </div>
        <footer>
            <hr class="separator">
            <section class="lwrap" data-flex="stripe w">
                <div data-flex="col -start">
                    <h5>about</h5>
                    <a href="/" title="Return to the homepage" id="logo-alt">
                        <img src="/images/logo.png" width="202" height="23" alt="Fashion Press">
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin sem nec leo tempus fermentum. Integer consequat, turpis eget lobortis.</p>
                </div>
                <div>
                    <h5>follow us</h5>
                    <div class="links-social" data-flex="col -start" data-childs="-center">
                        <a href="#"><span><i class="icon-fb"></i></span>face&shy;book</a>
                        <a href="#"><span><i class="icon-tw"></i></span>twit&shy;ter</a>
                        <a href="#"><span><i class="icon-gp"></i></span>goog&shy;le</a>
                        <a href="#"><span><i class="icon-inst"></i></span>insta&shy;gram</a>
                    </div>
                </div>
                <div>
                    <h5>contact info</h5>
                    <div data-flex="stripe">
                        <ul>
                            <li>Phone: 1.800.555.6789</li>
                            <li>Fax: 1.888.555.9876</li>
                            <li>Email: <a href="mailto:letschat@11thagency.com">letschat@<wbr>11thagency.com</a></li>
                        </ul>
                        <address>John Doe, Comapny Inc.<br> 12345 North Main Street<br> Anywhere, USA</address>
                    </div>                    
                </div>
            </section>
            <section class="copyright">
                <div class="lwrap" data-flex="axis">
                    <div class="links-footer" data-flex="-center w">
                        <a href="#">Terms of Service</a>•
                        <a href="#">Privacy Policy</a>•
                        <a href="#">Creative Rights Policy</a>•
                        <a href="#">Contact Us</a>•
                        <a href="#">Support &amp; FAQ</a>
                    </div>
                    <span>give away by 11thagency.com</span>
                </div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>