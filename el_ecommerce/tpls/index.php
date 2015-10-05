<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ecommerce</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/reset-elements.css">
        <link rel="stylesheet" href="/css/styles.css">    
    </head>
    <body>
        <header>
            <div class="top-bar">
                <div class="lwrap" data-flex="row-center-between">
                    <div class="hlinks header-links">
                        <a href="#">Account Sign In</a><span>.</span>    
                        <a href="#">Register</a><span>.</span> 
                        <a href="#">Buyers Guide</a><span>.</span> 
                        <a href="#">About</a><span>.</span> 
                        <a href="#">Blog</a><span>.</span>
                        <a href="#">Contact</a> 
                    </div>
                    <div class="hlinks top-links" data-flex="row-center">
                        <a href="#"><i class="icon-phone"></i>123.456.7890</a>
                        <a href="#"><i class="icon-cloud"></i>Live Help</a> 
                        <a href="#" class="country"><i class="icon-can"></i></a> 
                        <a href="#" class="country"><i class="icon-usa"></i></a> 
                    </div>
                </div>
            </div>
            <div class="header">
                <div class="lwrap" data-flex="row-center-between">
                    <div data-flex="row-center" class='checkout'>
                        <img src="/images/bag.png" width="76" height="88" alt="">
                        <div data-flex="col-center">
                            <span>0 items in your bag</span>
                            <a href="#" class="btn btn-check">Check Out</a>
                        </div>
                    </div>
                    <h1>ecommerce website</h1>
                    <form class="form-search" action="#" method="post" data-flex>
                        <input type="search" placeholder="Search Website">
                        <button><span class="btn btn-default"><i class="icon-go"></i></span></button>
                    </form>
                </div>              
            </div>
            <nav class="nav">
                <div class="lwrap" data-flex="row-center-center">
                    <a href="#" class="btn btn-nav active">home</a>
                    <a href="#" class="btn btn-nav">latest arrivals</a>
                    <a href="#" class="btn btn-nav">men's</a>
                    <a href="#" class="btn btn-nav">women's</a>
                    <a href="#" class="btn btn-nav">kid's</a>
                    <a href="#" class="btn btn-nav">brands</a>
                    <a href="#" class="btn btn-nav">sale</a>
                    <a href="#" class="btn btn-nav">gift cards</a>
                    <a href="#" class="btn btn-nav">freebies</a>
                </div> 
            </nav>
        </header>
        <div class='wrap'>
            <div class='lwrap'>
                <div class='banner' data-flex='row--between'>
                    <div data-flex='col-center'>
                        <figure data-flex>
                            <img src='/images/offer.png' alt='offer'>
                        </figure>
                        <figure class="sale" data-flex>
                            <img src='/images/sale.png' alt='sale'>
                        </figure>                         
                    </div>
                    <div data-flex>
                        <figure class="bottles" data-flex='row-center'>
                            <img src='/images/bottle.png'> 
                        </figure>
                        <figure class="pens" data-flex data-flex='row-end'>
                            <img src='/images/pens.png'>
                        </figure> 
                    </div>
                    <div class='banner-title' data-flex='row-center'>
                        <h3>product&nbsp;title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras suscipit lacus dapibus ante mattis in adipiscing nibh placerat. Cras bibendum porta diam, non dignissim sapien malesuada vitae. </p>
                    </div>
                </div>
                <div class='content-wrap' data-flex='row--between'>
                    <aside class='sidebar'>
                        <div data-flex="col">
                            <h2 class='hdr' data-flex='row-center-center'>Browse Categories</h2>
                            <div class="links sidebar-links">
                                <a href="#">Lorem ipsum dolor sit</a>
                                <a href="#">Amet consectetur</a>
                                <a href="#">Adipiscin elit</a>
                                <a href="#">Cras suscipit lacus</a>
                                <a href="#">Dapibus ante mattis</a>
                                <a href="#">Adipiscing nibh placerat</a>
                                <a href="#">Cras bibendum</a>
                                <a href="#">Porta diam elit</a>
                                <a href="#">Adipiscing nibh placerat</a>
                                <a href="#">Cras bibendum</a>
                                <a href="#">Porta diam elit</a>
                            </div>
                        </div>                        
                        <form class="form-update" action="#" method="post" data-flex="col-center">
                            <label for="update">Join our newsletter list to get the latest updates</label>
                            <input type="email" id="update">
                            <button><span class="btn btn-join">Join Now</span></button>
                            <div class="links update-links">
                                <a href="#"><i class="icon-tw"></i>Follow us on Twitter</a>
                                <a href="#"><i class="icon-fb"></i>Become our fan on Facebook</a>
                                <a href="#"><i class="icon-in"></i>Connect with us on Linkedin</a>
                                <a href="#"><i class="icon-mail"></i>Send us your email enquires</a>
                            </div>
                        </form>
                        <div class="payment" data-flex='col-center'>
                            <a href='#'>
                                <img src="/images/paypal.png" width="179" height="57" alt="">
                            </a>
                            <a href='#'>
                                <img src="/images/google.png" width="182" height="44" alt="">
                            </a>
                            <a href='#'>
                                <img src="/images/mcafee.png" width="98" height="59" alt="">
                            </a>
                        </div>
                    </aside>
                    <div class='content'>
                        <div data-flex='row-center-between'>
                            <form class='form-sort' action='#' method='post' data-flex='row-center'>
                                <label>Sort by:</label>
                                <span class="select">
                                    <select>
                                        <option selected>Ascending</option>
                                        <option>1</option>
                                        <option>2</option>          
                                    </select>
                                </span>
                                <span class="select">
                                    <select>
                                        <option selected>Product Name</option>
                                        <option>1</option>
                                        <option>2</option>          
                                    </select>
                                </span>
                                <span class="select">
                                    <select>
                                        <option selected>Brand Name</option>
                                        <option>1</option>
                                        <option>2</option>          
                                    </select>
                                </span>
                            </form> 
                            <div class='hlinks page-links'>
                                <span>Items per page:</span>
                                <a href='#'>12</a>
                                <span>/</span>
                                <a href='#'>20</a>
                                <span>/</span>
                                <a href='#'>30</a>
                                <span>/</span>
                                <a href='#'>50</a>
                            </div>
                        </div>
                        <h2 class='title'>our products</h2>
                        <div class='grid' data-flex='row--between'>
                            <figure data-flex='col'>
                                <img src="/images/img1.png" width="156" height="116" alt="">
                                <figcaption>
                                    <h4><a href="#">Product Name</a></h4>
                                    <span>Price: <em>$12.99</em></span>
                                </figcaption>
                            </figure>
                            <figure data-flex='col'>
                                <img src="/images/img2.png" width="156" height="116" alt="">
                                <figcaption>
                                    <h4><a href="#">Product Name</a></h4>
                                    <span>Price: <em>$12.99</em></span>
                                </figcaption>
                            </figure>
                            <figure data-flex='col'>
                                <img src="/images/img3.png" width="156" height="116" alt="">
                                <figcaption>
                                    <h4><a href="#">Product Name</a></h4>
                                    <span>Price: <em>$12.99</em></span>
                                </figcaption>
                            </figure>
                            <figure data-flex='col'>
                                <img src="/images/img4.png" width="156" height="116" alt="">
                                <figcaption>
                                    <h4><a href="#">Product Name</a></h4>
                                    <span>Price: <em>$12.99</em></span>
                                </figcaption>
                            </figure>
                            <figure data-flex='col'>
                                <img src="/images/img5.png" width="156" height="116" alt="">
                                <figcaption>
                                    <h4><a href="#">Product Name</a></h4>
                                    <span>Price: <em>$12.99</em></span>
                                </figcaption>
                            </figure>
                            <figure data-flex='col'>
                                <img src="/images/img6.png" width="156" height="116" alt="">
                                <figcaption>
                                    <h4><a href="#">Product Name</a></h4>
                                    <span>Price: <em>$12.99</em></span>
                                </figcaption>
                            </figure>
                            <figure data-flex='col'>
                                <img src="/images/img7.png" width="156" height="116" alt="">
                                <figcaption>
                                    <h4><a href="#">Product Name</a></h4>
                                    <span>Price: <em>$12.99</em></span>
                                </figcaption>
                            </figure>
                            <figure data-flex='col'>
                                <img src="/images/img8.png" width="156" height="116" alt="">
                                <figcaption>
                                    <h4><a href="#">Product Name</a></h4>
                                    <span>Price: <em>$12.99</em></span>
                                </figcaption>
                            </figure>
                            <figure data-flex='col'>
                                <img src="/images/img9.png" width="156" height="116" alt="">
                                <figcaption>
                                    <h4><a href="#">Product Name</a></h4>
                                    <span>Price: <em>$12.99</em></span>
                                </figcaption>
                            </figure>
                            <figure data-flex='col'>
                                <img src="/images/img10.png" width="156" height="116" alt="">
                                <figcaption>
                                    <h4><a href="#">Product Name</a></h4>
                                    <span>Price: <em>$12.99</em></span>
                                </figcaption>
                            </figure>
                            <figure data-flex='col'>
                                <img src="/images/img11.png" width="156" height="116" alt="">
                                <figcaption>
                                    <h4><a href="#">Product Name</a></h4>
                                    <span>Price: <em>$12.99</em></span>
                                </figcaption>
                            </figure>
                            <figure data-flex='col'>
                                <img src="/images/img12.png" width="156" height="116" alt="">
                                <figcaption>
                                    <h4><a href="#">Product Name</a></h4>
                                    <span>Price: <em>$12.99</em></span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="hlinks pagination" data-flex='row-center-center'>
                            <a href="#" class="btn btn-page active">1</a>
                            <a href="#" class="btn btn-page">2</a>
                            <a href="#" class="btn btn-page">3</a>
                            <a href="#" class="btn btn-page">4</a>
                            <a href="#" class="btn btn-page">5</a>
                            <a href="#">Prev >></a>
                            <a href="#">Next >></a>
                        </div>
                        <h2 class='title'>featured products</h2>                        
                        <div class='slider' data-flex='row-center-around'>
                            <a href="#" class="btn btn-slide prev"><i class="icon-prev"></i></a>
                            <figure data-flex='col-center'>
                                <img src="/images/img13.png" width="156" height="116" alt="">
                                <figcaption>
                                    <a href='#'>Elegant MP3 player skin PSD download</a>
                                </figcaption>
                            </figure>
                            <figure data-flex='col-center'>
                                <img src="/images/img14.png" width="156" height="116" alt="">
                                <figcaption>
                                    <a href='#'>Download shopping bag & icons (PSD & PNG)</a>
                                </figcaption>
                            </figure>
                            <figure data-flex='col-center'>
                                <img src="/images/img15.png" width="156" height="116" alt="">
                                <figcaption>
                                    <a href='#'>High resolution abstract bokeh background</a>
                                </figcaption>
                            </figure>
                            <a href="#" class="btn btn-slide next"><i class="icon-next"></i></a>
                        </div>
                    </div>
                </div>                              
            </div>
        </div>
        <div class='security'>
            <div class='lwrap' data-flex='row-center-between'>
                <div data-flex='row-center'>
                    <i class="icon-secured"></i>
                    <span>Shop online with us safely & securely</span>
                </div>
                <div data-flex='row-center'>
                    <i class="icon-pack"></i>
                    <span>We ship your orders anywhere!</span>
                </div>
                <form class="form-search" action="#" method="post" data-flex>
                    <input type="search" placeholder="Search Website">
                    <button><span class="btn btn-default"><i class="icon-go"></i></span></button>
                </form>
            </div>
        </div>
        <footer>
            <div class='lwrap' data-flex='row--between'>
                <div>
                    <h6>Company</h6>
                    <div class="links footer-links">
                        <a href="#">Home</a>
                        <a href="#">About Us</a>
                        <a href="#">Blog</a>
                        <a href="#">Latest News</a>
                        <a href="#">Login</a>
                        <a href="#">Join US</a>
                    </div>
                </div>
                <div>
                    <h6>Categories</h6>
                    <div class="links footer-links">
                        <a href="#">Lorem Ipsum dolor sit</a>
                        <a href="#">Amet consectetur</a>
                        <a href="#">Adipiscin elit</a>
                        <a href="#">Cras suscipit lacus</a>
                        <a href="#">Dabipus ante mattis</a>
                        <a href="#">Adipiscing nibh placerat</a>
                    </div>
                </div>
                <div>
                    <h6>Information</h6>
                    <div class="links footer-links">
                        <a href="#">My account</a>
                        <a href="#">Rewards</a>
                        <a href="#">Terms & Conditions</a>
                        <a href="#">Buying Guide</a>
                        <a href="#">FAQ</a>
                    </div>
                </div>
                <div>
                    <h6>Social Network</h6>
                    <div class="links footer-links">
                        <a href="#">My account</a>
                        <a href="#">Rewards</a>
                        <a href="#">Terms & Conditions</a>
                        <a href="#">Buying Guide</a>
                        <a href="#">FAQ</a>
                    </div>
                </div>
                <div>
                    <h6>Contact Us</h6>
                    <div class="links footer-links">
                        <span>Phone:<a href="tel:">1.234.567.8901</a></span>
                        <span>Toll-Free:<a href="tel:">1.234.567.8901</a></span>
                        <span>Fax:<a href="tel:">1.234.567.8901</a></span>
                        <span>Email:<a href="mailto:">Send us an email</a></span>
                        <span class='mode'>MON - SAT 	9am to 7:30pm Sundays, holidays closed</span>
                    </div>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>