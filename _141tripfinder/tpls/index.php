<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tripfinder</title>
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
            <section class="header">
                <div class="top-bar">
                    <div class="lwrap" data-flex="stripe">
                        <ul class="list-info" data-flex="w" data-childs="-center">
                            <li><i class="icon-phone"></i><span>+1 420-000-6000</span></li>
                            <li><i class="icon-mail"></i><a href="mailto:hello@website.com">hello@website.com</a></li>
                            <li><i class="icon-clock"></i><time>6am - 11pm</time></li>
                        </ul>
                        <div data-flex="end w">
                            <div class="links-social" data-flex="end -center w">
                                <a href="#"><i class="icon-fb"></i></a>
                                <a href="#"><i class="icon-tw"></i></a>
                                <a href="#"><i class="icon-in"></i></a>
                                <a href="#"><i class="icon-yt"></i></a>   
                                <a href="#"><i class="icon-wa"></i></a>
                            </div>
                            <form action="#" method="post">
                                <input type="search" name="search" class="input-search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="lwrap" data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="200" height="47" alt="Tripfinder">
                    </a>
                    <nav class="links-nav" data-flex="end w">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Gallery</a>
                        <a href="#">Activities</a>
                        <a href="#">Deals</a>
                        <a href="#">Contact</a>
                    </nav>
                </div>
            </section>
            <section class="lwrap" data-flex="axis">
                <hgroup>
                    <h1>where your journey begins.</h1>
                    <h5>Discover your next great adventure, become an explorer to get started!</h5>
                </hgroup>
                <div class="form-search">
                    <hgroup>
                        <h3>search tours</h3>
                        <h4>Find your dream tour today!</h4>
                    </hgroup>
                    <form action="#" method="post" data-flex="col">
                        <input type="search" name="form" class="input-default" placeholder="Search Tour">
                        <input type="text" name="form" class="input-default" placeholder="Destination">
                        <input type="text" name="form" class="input-default" placeholder="Tour Type">
                        <input type="date" name="form" class="input-default" placeholder="Month">
                        <button><span class="btn btn-default">find tours</span></button>
                    </form>
                </div>
            </section>
            <section class="additional">
                <div class="lwrap">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies erat mollis metus molestie, quis porta nunc finibus. Phasellus in nibh libero.</p>
                </div>
            </section>
        </header>
        <section class="tours">
            <div class="lwrap">
                <hgroup>
                    <h2>find a tour by tour type</h2>
                    <p>Egestas dignissim a enim lorem a mus egestas risus porta? Sed. Scelerisque, in nec velit augue aenean a, vut velit nec! Phasellus aliquam odio. </p>
                </hgroup>
                <div data-flex="stripe">
                    <figure><img src="/images/tour1.png" width="266" height="266" alt=""><div class="overlay">north america</div></figure>
                    <figure><img src="/images/tour2.png" width="266" height="266" alt=""><div class="overlay">north america</div></figure>
                    <figure><img src="/images/tour3.png" width="266" height="266" alt=""><div class="overlay">san francisco</div></figure>
                    <figure><img src="/images/tour4.png" width="266" height="266" alt=""><div class="overlay">amazon cruise</div></figure>
                </div>
            </div>
        </section>
        <section class="deals">
            <div class="lwrap">
                <hgroup>
                    <h2>deals and discounts</h2>
                </hgroup>
                <div data-flex="stripe w">
                    <article>
                        <figure><img src="/images/deals1.jpg" width="373" height="274" alt=""></figure>
                        <div data-flex="col -center">
                            <span class="lbl lbl-price"><small>$<span>899</span></small><big>$499</big> </span>
                            <h2>surfing</h2>
                            <p>Egestas dignissim a enim lorem a mus egestas risus porta? Sed. Scelerisque, in nec velit augue aenean a, vut velit nec! Phasellus aliquam odio. </p>
                            <a href="#" class="btn btn-default">book now</a>
                        </div>
                    </article>
                    <article>
                        <figure><img src="/images/deals2.jpg" width="373" height="274" alt=""></figure>
                        <div data-flex="col -center">
                            <span class="lbl lbl-price"><small>$<span>899</span></small><big>$499</big> </span>
                            <h2>surfing</h2>
                            <p>Egestas dignissim a enim lorem a mus egestas risus porta? Sed. Scelerisque, in nec velit augue aenean a, vut velit nec! Phasellus aliquam odio. </p>
                            <a href="#" class="btn btn-default">book now</a>
                        </div>
                    </article>
                    <article>
                        <figure><img src="/images/deals3.jpg" width="373" height="274" alt=""></figure>
                        <div data-flex="col -center">
                            <span class="lbl lbl-price"><small>$<span>899</span></small><big>$499</big> </span>
                            <h2>surfing</h2>
                            <p>Egestas dignissim a enim lorem a mus egestas risus porta? Sed. Scelerisque, in nec velit augue aenean a, vut velit nec! Phasellus aliquam odio. </p>
                            <a href="#" class="btn btn-default">book now</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="find-trips">
            <div class="lwrap">
                <hgroup>
                    <h2>find a tour by beautiful trips</h2>
                </hgroup>
                <div data-flex="stripe w">
                    <figure><img src="/images/trip1.jpg" width="530" height="407" alt=""></figure>
                    <figure><img src="/images/trip2.png" width="530" height="407" alt=""></figure>
                    <figure><img src="/images/trip3.png" width="530" height="407" alt=""></figure>
                    <figure><img src="/images/trip4.png" width="530" height="407" alt=""></figure>
                    <figure><img src="/images/trip5.png" width="530" height="407" alt=""></figure>
                    <figure><img src="/images/trip6.png" width="530" height="407" alt=""></figure>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="lwrap">
                <hgroup>
                    <h2>news & events</h2>
                    <p>Egestas dignissim a enim lorem a mus egestas risus porta? Sed. Scelerisque, in nec velit augue aenean a, vut velit nec! Phasellus aliquam odio. </p>
                </hgroup>
                <div data-flex="stripe w">
                    <article>
                        <figure><img src="/images/event1.png" width="350" height="227" alt=""></figure>
                        <h6><a href="#">Living the Travel Lifestyle</a></h6>
                        <div data-flex="stripe w" data-childs="-center">
                            <span><i class="icon-user"></i><span>Admin</span></span>
                            <span><i class="icon-calendar"></i><time>May 11, 2015</time></span>
                        </div>
                        <p>Egestas dignissim a enim lorem a mus egestas risus porta? Sed. Scelerisque, in nec velit augue aenean a, vut velit nec! </p>
                    </article>
                    <article>
                        <figure><img src="/images/event2.png" width="350" height="227" alt=""></figure>
                        <h6><a href="#">Living the Travel Lifestyle</a></h6>
                        <div data-flex="stripe w" data-childs="-center">
                            <span><i class="icon-user"></i><span>Admin</span></span>
                            <span><i class="icon-calendar"></i><time>May 11, 2015</time></span>
                        </div>
                        <p>Egestas dignissim a enim lorem a mus egestas risus porta? Sed. Scelerisque, in nec velit augue aenean a, vut velit nec! </p>
                    </article>
                    <article>
                        <figure><img src="/images/event3.png" width="350" height="227" alt=""></figure>
                        <h6><a href="#">Living the Travel Lifestyle</a></h6>
                        <div data-flex="stripe w" data-childs="-center">
                            <span><i class="icon-user"></i><span>Admin</span></span>
                            <span><i class="icon-calendar"></i><time>May 11, 2015</time></span>
                        </div>
                        <p>Egestas dignissim a enim lorem a mus egestas risus porta? Sed. Scelerisque, in nec velit augue aenean a, vut velit nec! </p>
                    </article>
                </div>
            </div>
        </section>
        <section class="banner">
            <div class="lwrap" data-flex="col -center">
                <hgroup>
                    <h2>luxury travel</h2>
                    <h3>peace of mind guarranteed!</h3>
                </hgroup>
                <a href="#" class="btn btn-find">find tours</a>
            </div>
        </section>
        <footer>
            <section class="footer lwrap" data-flex="stripe w">
                <div>
                    <h5>findfinder llc</h5>
                    <address>1400 Pennsylvania Ave. Washington, DC</address>
                    <ul>
                        <li><dt>P:</dt><dd>24/7 customer support: 1-555-555-5555</dd></li>
                        <li><dt>E:</dt><dd><a href="mailto:info@tripfinder.com">info@tripfinder.com</a></dd></li>
                    </ul>
                </div>
                <div>
                    <h5>support</h5>
                    <div class="links-default" data-flex="col -start">
                        <a href="#">Faq</a>
                        <a href="#">Payment options</a>
                        <a href="#">Booking tips</a>
                    </div>
                </div>
                <div>
                    <h5>follow us</h5>
                    <div class="links-follow" data-flex="w" data-childs="center -center">
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-in"></i></a>
                        <a href="#"><i class="icon-yt"></i></a> 
                    </div>
                </div>
                <div>
                    <h5>newsletter</h5>
                    <form action="#" method="post" data-flex="axis">
                        <input type="text" name="footer" class="input-default" placeholder="Enter email">
                        <button><div class="btn btn-default md">submit</div></button>
                    </form>
                </div>
            </section>
            <section class="copyright">
                <div class="lwrap" data-flex="axis">
                    <span>&copy; PSDFreebies.com 2015. All rights reserved.</span>
                    <span>Design by: <i class="icon-freebies"></i> PSDFreebies.com</span>
                </div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>