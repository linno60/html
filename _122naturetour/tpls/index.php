<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nature Tour</title>
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
            var LAYOUT_WIDTH = 1010;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="lwrap">
            <header>
                <div class="header" data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="236" height="65" alt="Nature Tour">
                    </a>
                    <div class="contact" data-flex="col around -end">
                        <small>For Friendly, Expert advice call</small>
                        <big>12 (0) 1234 567890</big>
                        <nav class="links-menu" data-flex="end w">
                            <a href="#">home</a>
                            <a href="#">how to book</a>
                            <a href="#">faqs</a>
                            <a href="#">visit us</a>
                            <a href="#">contact us</a>
                        </nav>
                    </div>
                </div>
                <nav class="links-nav" data-flex="around w" data-childs="center -center">
                    <a href="#">destinations</a>
                    <a href="#">species</a>
                    <a href="#">tour types</a>
                    <a href="#">tour leaders</a>
                    <a href="#">late availability</a>
                    <a href="#">latest news</a>
                    <a href="#">about us</a>
                </nav>
                <div class="links-breadcrumbs" data-flex="w">
                    <a href="#">Home</a>
                </div>
            </header>
            <div class="wrap" data-flex="stripe">
                <div class="content">
                    <div class='slider'>
                        <input name="anchor" id='slide-0' type="radio">
                        <input name="anchor" id='slide-1' type="radio">
                        <input name="anchor" id='slide-2' type="radio">
                        <input name="anchor" id='slide-3' type="radio">
                        <input name="anchor" id='play' type="radio" checked>
                        <ul>
                            <li><img src="/images/slider1.png" width="705" height="266" alt=""></li>
                            <li class='num0'><img src="/images/slider1.png" width="705" height="266" alt=""></li>
                            <li class='num1'><img src="/images/slider2.png" width="705" height="266" alt=""></li>
                            <li class='num2'><img src="/images/slider1.png" width="705" height="266" alt=""></li>
                            <li class='num3'><img src="/images/slider2.png" width="705" height="266" alt=""></li>
                        </ul>
                        <div class="controls" data-flex="col around">
                            <div class='description'>
                                <label class='num0'>
                                    <hgroup>
                                        <h3>Our</h3>
                                        <h2>New Tours</h2> 
                                    </hgroup>                                   
                                    <p>At Naturetour we are constantly adding to and improving our portfolio of wildlife holidays to provide you with an even greater choice of wildlife viewing experiences.</p>
                                    <a href="#">View new tours...</a>
                                </label>
                                <label class='num1'>
                                    <hgroup>
                                        <h3>Our 2</h3>
                                        <h2>New Tours</h2> 
                                    </hgroup>                                   
                                    <p>At Naturetour we are constantly adding to and improving our portfolio of wildlife holidays to provide you with an even greater choice of wildlife viewing experiences.</p>
                                    <a href="#">View new tours...</a>
                                </label>
                                <label class='num2'>
                                    <hgroup>
                                        <h3>Our 3</h3>
                                        <h2>New Tours</h2> 
                                    </hgroup>                                   
                                    <p>At Naturetour we are constantly adding to and improving our portfolio of wildlife holidays to provide you with an even greater choice of wildlife viewing experiences.</p>
                                    <a href="#">View new tours...</a>
                                </label>
                                <label class='num3'>
                                    <hgroup>
                                        <h3>Our 4</h3>
                                        <h2>New Tours</h2> 
                                    </hgroup>                                   
                                    <p>At Naturetour we are constantly adding to and improving our portfolio of wildlife holidays to provide you with an even greater choice of wildlife viewing experiences.</p>
                                    <a href="#">View new tours...</a>
                                </label>
                            </div>
                            <div class='bullets' data-flex="w" data-childs="center -center">
                                <label class='num0' for='slide-0'>1</label>
                                <label class='num1' for='slide-1'>2</label>
                                <label class='num2' for='slide-2'>3</label>                    
                                <label class='num3' for='slide-3'>4</label>
                            </div>
                        </div>
                    </div>
                    <div class="guids" data-flex="between -end">
                        <article>
                            <h1>naturetour&ensp;wild life holidays</h1>
                            <p>A selection of worldwide bird watching, wild flower and natural history holidays (including wildlife tours, treks and cruises), all led by expert <a href="#">naturalist guides.</a></p>
                        </article>
                        <figure><img src="/images/cameraman.png" width="187" height="133" alt=""></figure>
                    </div>
                    <div class="tabs" data-tabs="">
                        <div class="tablist">
                            <a href="#tab1" class="active"><span>By Destination</span></a>
                            <a href="#tab2"><span>By Species</span></a>
                            <a href="#tab3"><span>By Tour Type</span></a>
                        </div>
                        <div class="tabset">
                            <a href="#tab1" class="active"><span>By Destination</span></a>
                            <div id="tab1" class="tabpanel active" data-flex="stripe w">
                                <article>
                                    <figure><img src="/images/img1.png" width="212" height="98" alt=""></figure>
                                    <h4><a href="#">Africa Holidays</a></h4>
                                    <p>Few wildlife enthusiasts can resist Africa. Its exceptional abundance and variety of wild animals make it one of the world’s top wildlife holiday destinations.</p>
                                </article>
                                <article>
                                    <figure><img src="/images/img2.png" width="212" height="98" alt=""></figure>
                                    <h4><a href="#">Americas Holidays</a></h4>
                                    <p>North, South and Central America are home to an incredible diversity of habitats and species, providing opportunities for wildlife holidays to suit all tastes. </p>
                                </article>
                                <article>
                                    <figure><img src="/images/img3.png" width="212" height="98" alt=""></figure>
                                    <h4><a href="#">Antarctica Holidays</a></h4>
                                    <p>The ‘Great White Continent’ is perhaps the last true wilderness left on earth and ultimate wildlife holiday destination.</p>
                                </article>
                                <article>
                                    <figure><img src="/images/img4.png" width="212" height="98" alt=""></figure>
                                    <h4><a href="#">Asia Holidays</a></h4>
                                    <p>Choose a Naturetour wildlife holiday to Asia and benefit from our experience of over 20 years, and amazing network of local contacts, on this incredibly diverse continent.</p>
                                </article>
                                <article>
                                    <figure><img src="/images/img5.png" width="212" height="98" alt=""></figure>
                                    <h4><a href="#">Australasia Holidays</a></h4>
                                    <p>Australia and New Zealand offer extraordinary wildlife in safe, peaceful surroundings. Our tours focus on this continent's unique flora and fauna.</p>
                                </article>
                                <article>
                                    <figure><img src="/images/img6.png" width="212" height="98" alt=""></figure>
                                    <h4><a href="#">Europe Holidays</a></h4>
                                    <p>Naturetour wildlife holidays in Europe focus on the outstanding wildlife habitats and species that can be found in the region.</p>
                                </article>
                            </div>
                            <a href="#tab2"><span>By Species</span></a>
                            <div id="tab2" class="tabpanel">Tab number 2</div>
                            <a href="#tab3"><span>By Tour Type</span></a>
                            <div id="tab3" class="tabpanel">Tab number 3</div>
                        </div>
                    </div>
                </div>
                <aside class="sidebar">
                    <div>
                        <hgroup>
                            <h2>holiday search</h2>
                            <h3>start your holiday search here:</h3>
                        </hgroup>
                        <form action="#" method="post">
                            <select>
                                <option>Select region</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <select class="disable">
                                <option>Select Category</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <select class="disable">
                                <option>Select Date</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <select class="disable">
                                <option>Select Price</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <button><span class="btn btn-default alt">search holidays</span></button>
                        </form>
                        <hgroup>
                            <h2>quick search</h2>
                            <h3>enter a country or tour code:</h3>
                        </hgroup>
                        <form action="#" method="post" data-flex="axis">
                            <input class="input-default" type="search" name="search" placeholder="Country/Code ...">
                            <button><span class="btn btn-default">search</span></button>
                        </form>
                    </div>
                    <div>
                        <hgroup>
                            <h2>newsletter signup</h2>
                            <h3>New tours, special offers, extra departures and latest news</h3>
                        </hgroup>
                        <form action="#" method="post">
                            <input class="input-default" type="email" name="signup" placeholder="Enter email ...">
                            <input class="input-default" type="text" name="signup" placeholder="Enter Name ...">
                            <button><span class="btn btn-default">sign up</span></button>
                        </form>
                    </div>
                    <div>
                        <hgroup>
                            <h2>latest news</h2>
                        </hgroup>
                        <article>
                            <h4><a href="#">Watch Brown Bears in Sweden</a><time>11/05/2010</time></h4>
                            <p>Experience the forest at night and watch Brown Bears – join one of our short breaks i...</p>
                        </article>
                        <article>
                            <h4><a href="#">Watch Brown Bears in Sweden</a><time>11/05/2010</time></h4>
                            <p>Experience the forest at night and watch Brown Bears – join one of our short breaks i...</p>
                        </article>
                        <article>
                            <h4><a href="#">Watch Brown Bears in Sweden</a><time>11/05/2010</time></h4>
                            <p>Experience the forest at night and watch Brown Bears – join one of our short breaks i...</p>
                        </article>
                    </div>
                </aside>
            </div>
            <footer>
                <div class="footer">
                    <h3 class="hdr">Naturetour has 25 years experience in operating wildlife holidays.  Contact Us for friendly traval advice</h3>
                    <div data-flex="stripe w">
                        <div>
                            <h5>follow us on twitter<i class="icon-twitter"></i></h5>
                            <p> <time>* 4 days ago</time> The new website is now live. We hope you enjoy it and any feedback is welcome.</p>
                            <a href="#" class="btn btn-join"><span>join on facebook</span><i class="icon-users"></i></a>
                        </div>
                        <div data-flex="stripe w">
                            <h5>quick links</h5>
                            <div class="links-quick" data-flex="col -start">
                                <a href="#">Holidays by destination</a>
                                <a href="#">Holidays by species</a>
                                <a href="#">Holidays by tour type</a>
                                <a href="#">Late availability</a>
                                <a href="#">Tour leaders</a>
                            </div>
                            <div class="links-quick" data-flex="col -start">
                                <a href="#">How to book</a>
                                <a href="#">FAQs</a>
                                <a href="#">Visit Us</a>
                                <a href="#">Terms & conditions</a>
                                <a href="#">Privacy Policy</a>
                            </div>
                            <div class="links-quick" data-flex="col -start">
                                <a href="#">Latest news</a>
                                <a href="#">Request a brochure</a>
                                <a href="#">Subscribe to newsletter</a>
                                <a href="#">Contact Us</a>
                            </div>
                        </div>
                        <div class="contacts">
                            <h5>contact us</h5>
                            <span><strong>Tel:</strong> 12345 67890</span>
                            <span><strong>Email:</strong> <a href="mailto:info@naturetour.com">info@naturetour.com</a></span>
                            <address>Naturetour, Your City,<br> Your state, 123 456 789</address>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <strong><span>&copy;</span> Naturetour 2010.</strong>
                    <span>No portion of this website may be reproduced without the prior written consent of Naturetour. All rights reserved.</span>
                </div> 
            </footer>
        </div>        
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>