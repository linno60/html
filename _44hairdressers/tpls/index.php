<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hairdresser</title>
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
    <body>
        <div class="top-block">
            <div class="header lwrap" data-flex="axis">
                <a href="/" title="Return to the homepage" class="logo">
                    <img src="/images/logo.png" width="210" height="27" alt="">
                </a>
                <div class="links-navigation" data-flex="-center end" data-childs="-center center" data-flex-700="end w">
                    <a href="#" class="active">Home</a>
                    <a href="#">Tour</a>
                    <a href="#">Buzz</a>
                    <a href="#">Pricing</a>
                    <a href="#">Sign Up</a>
                    <a href="#">Legal</a>
                    <a href="#">Contact</a>
                </div>
            </div>
            <div class="info lwrap" data-flex="-start between" data-flex-640="vstripe r">
                <div>
                    <h1>Try out the free trial!</h1>
                    <h2>by simply filling out the form below</h2>
                    <form action="#" method="post" data-flex="col">
                        <input placeholder="your name" name="name" value="" type="text">
                        <input placeholder="your email address" name="email" value="" type="email">
                        <input placeholder="password" name="password" value="" type="password">
                        <a href="#" class="btn btn-trial" data-childs="col center"><span><strong>start the free trial</strong><small>and enjoy it for 2 months!</small></span></a>
                        <div class="links-store" data-flex="">
                            <a href="#"><img src="/images/app-logo.png" alt="" height="46" width="139"></a>
                            <a href="#"><img src="/images/gogole-logo.png" alt="" height="46" width="135"></a>
                        </div>
                    </form>
                </div>
                <figure>
                    <img src="/images/iphones.png" width="400" height="629" alt="">
                </figure>
            </div>
        </div>
        <div class="featured lwrap" data-flex="stripe w">
            <div class="block">
                <h5>Features<span>&benefits</span></h5>
                <p>Phasellus ornare dui non arcu posuere suscipit</p>
                <a href="#" class="btn btn-features"><i class="icon-arrow"></i><em>All features</em></a>
            </div>
            <div class="block" data-flex="col -center">
                <i class="icon-commodo"></i>
                <div>
                <h6>Ut commodo Mi Id mi</h6>
                <p>Quisque Dictuem Tortor Volutpat, scelerisque lectus id, suscipit risus.</p>
                </div>
            </div>
            <div class="block" data-flex="col -center">
                <i class="icon-cash"></i>
                <div>
                <h6>Morbi Aliquam</h6>
                <p>Cras sed Orci id turpis laoreet aliquam in nec libero.</p>
                </div>
            </div>
            <div class="block" data-flex="col -center">
                <i class="icon-dolor"></i>
                <div>
                <h6>Ut Dolor</h6>
                <p>Curabitur bibendum est in ipsum ullamcorper</p>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="lwrap">
                <div class="hdr" data-flex="col -center">
                    <h3 data-flex="-center"><i class="icon-heart"></i>Our Clients Love our app...</h3>
                    <h4>Just check out what they say:</h4>
                </div>
                <blockquote data-flex="col -center">
                    <p>"Praesent id tellus justo. Quisque dictum tortor volutpat, scelerisque lectus id, suscipit risus. Donec Tellus dolor, vehicula nec fermentum a, bibendum ut neque.
                        Duis at turpis odio. Morbi aliquam at lacus vel scelerisque. Cras sed orci id turpis laoreet aliquam in nec libero."</p>
                    <cite data-flex="col -center">
                        Justin Lin
                        <span>(Award winning hair stylist, NYC)</span>
                    </cite>
                </blockquote>
            </div>
        </div>

        <footer>
            <div class="lwrap" data-flex="col -center">
                <div class="rights" data-flex="center">Copyright 2013 &copy <a href="#">hairdresser</a>All rights reserved</div>
                <div class="follow" data-flex="center">Follow us on:</div>
                <div class="links-social" data-flex="center">
                    <a href="#"><i class="icon-fb"></i></a>
                    <a href="#"><i class="icon-twitter"></i></a>
                    <a href="#"><i class="icon-del"></i></a>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>