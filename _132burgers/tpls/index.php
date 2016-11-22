<!DOCTYPE html>
<html lang="en">
    <head>
        <title>burgers.co</title>
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
            var LAYOUT_WIDTH = 1024;
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
                        <img src="/images/logo.png" width="168" height="21" alt="burgers.co" >
                    </a>
                    <nav class="links-nav" data-flex="center w" data-childs="center -center">
                        <a href="#" class="active">home</a>
                        <a href="#">our burgers</a>
                        <a href="#">what else?</a>
                        <a href="#">photos</a>
                        <a href="#">contact</a>
                    </nav>
                </div>
            </header>
            <section class="presentation" data-flex="stripe">
                <div data-flex="end">
                    <div>
                        <h1>We create Burgers.</h1>
                        <p>Beautiful hand crafted burgers with tangy sauce lettuce, onions, pickles and our specials.</p>
                    </div>
                </div>
                <div data-flex>
                    <div>
                        <h1>Delicious.</h1>
                        <p>Oh yes, they are as they are made with hands and our chef loves them to the core.</p>
                        <span>Are they really ?</span><a href="#" class="btn btn-default">Show me<i class="icon-burger"></i></a>
                    </div>
                </div>
            </section>
            <section class="lwrap menu" data-flex="stripe" data-childs="col -center" data-flex-480="vstripe">
                <div>
                    <figure><img src="/images/burger1.png" width="161" height="135" alt=""></figure>
                    <h3><a href="#">beef bondy</a></h3>
                    <p>Juicy hand cut beef with Mango sauce fries.</p>
                    <div class="lbl lbl-product"><i class="icon-barbecue"></i><small>345 kj</small><strong>$12.5</strong></div>
                </div>
                <div>
                    <figure><img src="/images/burger2.png" width="161" height="135" alt=""></figure>
                    <h3><a href="#">chicken mota</a></h3>
                    <p>Beautiful chicken breast with salsa sauce on top</p>
                    <div class="lbl lbl-product"><i class="icon-barbecue"></i><small>345 kj</small><strong>$9.0</strong></div>
                </div>
                <div>
                    <figure><img src="/images/burger3.png" width="161" height="135" alt=""></figure>
                    <h3><a href="#">double beef</a></h3>
                    <p>Yes! Double patty with seculent sauce</p>
                    <div class="lbl lbl-product"><i class="icon-barbecue"></i><small>545 kj</small><strong>$13.7</strong></div>
                </div>
            </section>
            <section class="wait">
                <div class="lwrap" data-flex="axis">
                    <h2>Wait ! But we also serve...</h2>
                    <dl class="list-default" data-childs="axis">
                        <li><dt>French Fries</dt><dd>$12</dd></li>
                        <li><dt>Cold Drinks</dt><dd>$8</dd></li>
                        <li><dt>Love Choclates</dt><dd>$25</dd></li>
                        <li><dt>Coleslaw</dt><dd>$9</dd></li>
                        <li><dt>Lots of love</dt><dd>Free</dd></li>
                    </dl>
                </div>
            </section>
            <section class="lwrap gallery">
                <hgroup class="hdr">
                    <h2>Photos</h2>
                    <h6>Beautiful pictues clicked by our Customers</h6>
                </hgroup>  
                <div data-childs="stripe">
                    <div>
                        <figure><img src="/images/img1.png" width="281" height="188" alt=""></figure>
                        <figure><img src="/images/img2.png" width="293" height="190" alt=""></figure>
                        <figure><img src="/images/img3.png" width="248" height="190" alt=""></figure>
                    </div>
                    <hr>
                    <div data-flex-640="stripe w">
                        <figure><img src="/images/imgsm1.png" width="141" height="95" alt=""></figure>
                        <figure><img src="/images/imgsm2.png" width="147" height="95" alt=""></figure>
                        <figure><img src="/images/imgsm3.png" width="124" height="95" alt=""></figure>
                        <hr>
                        <figure><img src="/images/imgsm1.png" width="141" height="95" alt=""></figure>
                        <figure><img src="/images/imgsm2.png" width="147" height="95" alt=""></figure>
                        <figure><img src="/images/imgsm3.png" width="124" height="95" alt=""></figure>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <div class="hdr">
                <hgroup class="lwrap">
                    <h2>Contact Us</h2>
                    <h6>Beautiful pictues clicked by our Customers</h6>
                </hgroup>                
            </div>
            <div class="lwrap" data-childs="col" data-flex="stripe" data-flex-480="vstripe">
                <form action="#" method="post">
                    <label>Fill this form to get in touch with us.</label>
                    <input class="input-default" type="text" name="form" placeholder="Write your full name here">
                    <input class="input-default" type="email" name="form" placeholder="Email Address here">
                    <input class="input-default" type="tel" name="form" placeholder="Phone Number">
                    <textarea class="textarea-default" placeholder="Message you want to deliver....."></textarea>
                    <button><span class="btn btn-submit">Submit Now</span></button>
                </form>
                <div class="contacts">
                    <figure><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d21424.490993895964!2d35.1460846!3d47.83840435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1479413902031"></iframe></figure>
                    <address>272 Collin Street, Melbourne 3000</address>
                    <div data-flex="-center"><small>Call&ensp;|</small> <big>&nbsp;09<wbr>00<wbr>58<wbr>96</big></div>
                </div>
            </div>
            <div class="copyright">
                <div class="lwrap" data-flex="axis">
                    <span>All Rights Reserved - 2016 DesignCoon</span>
                    <a href="#">www.selfy.com/designcoon</a>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>