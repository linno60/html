<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ecommerce</title>
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
        <header>
            <section class="top-bar">
                <div class="lwrap" data-flex="axis">
                    <div class="links-top" data-flex="w">
                        <a href="#">Account Sign In</a><span>.</span>    
                        <a href="#">Register</a><span>.</span>
                        <a href="#">Buyers Guide</a><span>.</span>
                        <a href="#">About</a><span>.</span>
                        <a href="#">Blog</a><span>.</span>
                        <a href="#">Contact</a>
                    </div>
                    <div data-childs="end w" data-flex="end w">
                        <div data-childs="-center">
                            <a href="#" class="support"><i class="icon-phone"></i>123.456.7890</a>
                            <a href="#" class="support"><i class="icon-cloud"></i>Live Help</a>
                        </div>
                        <div data-childs="-center">
                            <a class="country" href="#"><i class="icon-can"></i></a>
                            <a class="country" href="#"><i class="icon-usa"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="header">
                <div class="lwrap" data-flex="axis" data-flex-480="vaxis">
                    <div data-flex="-center" class='checkout'>
                        <figure><img src="/images/bag.png"></figure>
                        <div data-flex="col -center center">
                            <span>0 items in your bag</span>
                            <a href="#" class="btn btn-check">Check Out</a>
                        </div>
                    </div>
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="233" height="94" alt="Ecommerce">
                    </a>
                    <form class="form-search" action="#" method="post" data-flex="">
                        <input type="text" name="search" placeholder="Search website">
                        <button><span class="btn btn-search"></span></button>
                    </form>
                </div>
            </section>
            <div class="nav">
                <div class="links-nav lwrap" data-flex="center w" data-childs="-center center">
                    <a href="#" class="active">home</a>
                    <a href="#">latest arrivals</a>
                    <a href="#">men's</a>
                    <a href="#">women's</a>
                    <a href="#">kids</a>
                    <a href="#">brands</a>
                    <a href="#">sale</a>
                    <a href="#">gift cards</a>
                    <a href="#">freebies</a>
                </div>
            </div>
        </header>
        <div class="lwrap content">
            <div class='banner' data-flex="around" data-flex-480="vaxis">
                <div data-flex='col -center center'>
                    <figure><img src='/images/offer.png' alt='offer'></figure>
                    <figure class="sale"><img src='/images/sale.png' alt='sale'></figure>                            
                </div>
                <div data-flex="-center">
                    <figure class="bottles" data-flex='-center'><img src='/images/bottle.png'></figure>
                    <figure data-flex data-flex='-end'><img src='/images/pens.png'></figure> 
                </div>
                <div class='title' data-flex='-center' data-flex-640="-center w">
                    <h3>product&nbsp;title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras suscipit lacus dapibus ante mattis in adipiscing nibh placerat. Cras bibendum porta diam, non dignissim sapien malesuada vitae. </p>
                </div>
            </div>
            <div data-flex="stripe" data-flex-640="vstripe">                    
                <aside class='sidebar' data-flex-640="stripe w">
                    <div>
                        <h4 class="hdr" data-flex='-center center'>Browse Categories</h4>
                        <ul class="links-categories">
                            <li><a href="#">Lorem ipsum dolor sit </a></li>
                            <li><a href="#">Amet consectetur </a></li>
                            <li><a href="#">Adipiscin elit </a></li>
                            <li><a href="#">Cras suscipit lacus </a></li>
                            <li><a href="#">Dapibus ante mattis </a></li>
                            <li><a href="#">Adipiscing nibh placerat</a></li>
                            <li><a href="#">Cras bibendum </a></li>
                            <li><a href="#">Porta diam elit</a></li>
                            <li><a href="#">Adipiscing nibh placerat</a></li>
                            <li><a href="#">Cras bibendum</a></li>
                            <li><a href="#">Porta diam elit</a></li>
                        </ul>
                    </div>
                    <form action='#' method='post' class="form-social" data-flex="col -center">
                        <label>Join our newsletter list to get the latest updates</label>
                        <input type="email" name="email">
                        <a href='#' class='btn btn-join'>Join Now</a>                        
                        <ul class="links-social" data-childs="-start">
                            <li><a href="#" data-flex="-center"><i class="icon-tw"></i>Follow us on Twitter</a></li>
                            <li><a href="#" data-flex="-center"><i class="icon-fb"></i>Become our fan on Facebook</a></li>
                            <li><a href="#" data-flex="-center"><i class="icon-in"></i>Connect with us on LinkedIn</a></li>
                            <li><a href="#" data-flex="-center"><i class="icon-mail"></i>Send us your email enquiries</a></li>
                        </ul>
                    </form>
                    <div class="payment" data-flex='col -center'>
                        <a href="#"><img src='/images/paypal.png'></a>
                        <a href="#"><img src='/images/google.png'></a>
                        <a href="#"><img src='/images/mcafee.png'></a>
                    </div>                        
                </aside>
                <div>
                    <form class='form-sort' action='#' method='post' data-flex='axis w'>
                        <div data-flex='-center w'>
                            <label>Sort by:</label>
                            <select>
                                <option selected>Ascending</option>
                                <option>1</option>
                                <option>2</option>          
                            </select>
                            <select>
                                <option selected>Product Name</option>
                                <option>1</option> 
                                <option>2</option>          
                            </select>
                            <select>
                                <option selected>Brand Name</option>
                                <option>1</option>
                                <option>2</option>          
                            </select>
                        </div>
                        <div class="pages" data-flex="end w">
                            <label>Items per page:</label>
                            <a href="#" class="active">12</a><span>/</span>    
                            <a href="#" class="active">20</a><span>/</span>
                            <a href="#">30</a><span>/</span>
                            <a href="#">50</a>
                        </div>
                    </form>
                    <div>
                        <h2>our products</h2>
                        <div class='products' data-flex="stripe w" data-childs="col">
                            <figure>
                                <img src='/images/img1.png'>
                                <figcaption>
                                    <h4><a href='#'>Product Name</a></h4>
                                    <span>Price: <small>$12.99</small></span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src='/images/img2.png'>
                                <figcaption>
                                    <h4><a href='#'>Product Name</a></h4>
                                    <span>Price: <small>$12.99</small></span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src='/images/img3.png'>
                                <figcaption>
                                    <h4><a href='#'>Product Name</a></h4>
                                    <span>Price: <small>$12.99</small></span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src='/images/img4.png'>
                                <figcaption>
                                    <h4><a href='#'>Product Name</a></h4>
                                    <span>Price: <small>$12.99</small></span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src='/images/img5.png'>
                                <figcaption>
                                    <h4><a href='#'>Product Name</a></h4>
                                    <span>Price: <small>$12.99</small></span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src='/images/img6.png'>
                                <figcaption>
                                    <h4><a href='#'>Product Name</a></h4>
                                    <span>Price: <small>$12.99</small></span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src='/images/img7.png'>
                                <figcaption>
                                    <h4><a href='#'>Product Name</a></h4>
                                    <span>Price: <small>$12.99</small></span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src='/images/img8.png'>
                                <figcaption>
                                    <h4><a href='#'>Product Name</a></h4>
                                    <span>Price: <small>$12.99</small></span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src='/images/img9.png'>
                                <figcaption>
                                    <h4><a href='#'>Product Name</a></h4>
                                    <span>Price: <small>$12.99</small></span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src='/images/img10.png'>
                                <figcaption>
                                    <h4><a href='#'>Product Name</a></h4>
                                    <span>Price: <small>$12.99</small></span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src='/images/img11.png'>
                                <figcaption>
                                    <h4><a href='#'>Product Name</a></h4>
                                    <span>Price: <small>$12.99</small></span>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src='/images/img12.png'>
                                <figcaption>
                                    <h4><a href='#'>Product Name</a></h4>
                                    <span>Price: <small>$12.99</small></span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="pagination" data-flex="center w" data-childs="center -center">
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">Next &gt;</a>
                            <a href="#">Last &gt;&gt;</a>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <h2>featured products</h2>
                        <div class='slider' data-flex='-center around'>
                            <a href='#' class='btn btn-slide prev'></a>
                            <div data-flex="-start around w" data-childs="col">
                                <figure>
                                    <img src='/images/img13.png'>
                                    <figcaption><a href='#'>Elegant MP3 player skin PSD download</a></figcaption>
                                </figure>
                                <figure>
                                    <img src='/images/img14.png'>
                                    <figcaption><a href='#'>Download shopping bag & icons (PSD & PNG)</a></figcaption>
                                </figure>
                                <figure class="hidden">
                                    <img src='/images/img15.png'>
                                    <figcaption><a href='#'>High resolution abstract bokeh background</a></figcaption>
                                </figure>
                            </div>                               
                            <a href='#' class='btn btn-slide next'></a>
                        </div>
                    </div>                       
                </div>
            </div>
        </div>
        <footer>
            <section class='security'>
                <div class="lwrap" data-flex='axis' data-flex-640="vaxis">
                    <div data-flex='-center'>
                        <i class='icon-secured'></i>
                        <span>Shop online with us safely & securely</span>
                    </div>
                    <div data-flex='-center'>
                        <i class='icon-pack'></i>
                        <span>We ship your orders anywhere!</span>
                    </div>
                    <form class="form-search" action="#" method="post" data-flex="">
                        <input type="text" name="search" placeholder="Search website">
                        <button><span class="btn btn-search"></span></button>
                    </form>
                </div>
            </section>
            <section class='footer'>
                <div class="lwrap" data-flex='stripe w' data-flex-640="around w">
                    <div>
                        <h5>Company</h5>
                        <div class="links-footer" data-flex="col -start">
                            <a href="#">Home</a>
                            <a href="#">About Us</a>
                            <a href="#">Blog</a>
                            <a href="#">Latest News</a>
                            <a href="#">Login</a>
                            <a href="#">Join Us</a>
                        </div>
                    </div>
                    <div>
                        <h5>Categories</h5>                        
                        <div class="links-footer" data-flex="col -start">
                            <a href='#'>Lorem ipsum dolor sit</a>
                            <a href='#'>Amet consectetur</a>
                            <a href='#'>Adipiscin elit</a>
                            <a href='#'>Cras suscipit lacus</a>
                            <a href='#'>Dapibus ante mattis</a>
                            <a href='#'>Adipiscing nibh placerat</a>
                        </div>
                    </div>
                    <div>
                        <h5>Information</h5>
                        <div class="links-footer" data-flex="col -start">
                            <a href='#'>My account</a>
                            <a href='#'>Rewards</a>
                            <a href='#'>Terms & Conditions</a>
                            <a href='#'>Buying Guide</a>
                            <a href='#'>FAQ</a>
                        </div>
                    </div>
                    <div>
                        <h5>Social Network</h5>
                        <div class="links-footer" data-flex="col -start">
                            <a href='#'>My account</a>
                            <a href='#'>Rewards</a>
                            <a href='#'>Terms & Conditions</a>
                            <a href='#'>Buying Guide</a>
                            <a href='#'>FAQ</a>
                        </div>
                    </div>
                    <div>
                        <h5>Contact Us</h5>
                        <div data-flex="col">
                            <span>Phone: 1.234.567.8901</span>
                            <span>Toll-Free: 1.234.567.8901</span>
                            <span>Fax: 1.234.567.8901</span>
                            <span>Email:<a href='mailto:' class='mail'>Send us an email</a></span>
                            <span class="schedule">MON - SAT 9am to 7:30pm<br> Sundays, holidays closed</span>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>