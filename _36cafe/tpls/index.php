<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cafe</title>
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
            var LAYOUT_WIDTH = 980;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col -center">
        <header>
            <section class="lwrap" data-flex="axis" data-flex-480="col -center center w">
                <div class="delivery" data-flex="col">
                    <small>Home Delivery</small>
                    <span>123-456-7890</span>
                </div>
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="176" height="148" alt="Cafe">
                </a>
                <div class="search">
                    <div class="links-top" data-flex="-center w">
                        <a href="#">FAQ</a>|
                        <a href="#">Directions</a>|
                        <a href="#">Help</a>
                    </div>
                    <form action="#" method="post" class="form-search" data-flex="axis">
                        <input type="search" name="search" placeholder="Search">
                        <input type="image" name="image" src="/images/icons/search.png">
                    </form>
                </div>
            </section>
        </header>
        <div class="lwrap content-wrap" data-flex="col">
            <div></div>
            <nav class="links-nav" data-flex="-center around w" data-flex-800="-center center w">
                <a href="#" class="active">home</a>&middot;
                <a href="#">about us</a>&middot;
                <a href="#">menu</a>&middot;
                <a href="#">dinner</a>&middot;                        
                <a href="#">lunch</a>&middot;
                <a href="#">specials</a>&middot;
                <a href="#">party</a>&middot;
                <a href="#">catering</a>&middot;
                <a href="#">contact us</a>
            </nav>
            <div class="content" data-flex="col">
                <div>
                    <section class="slider" data-flex="axis" data-flex-480="vaxis">
                        <div data-flex="col -center center">
                            <figure><img src="/images/text.png" alt="Cafe & Restaurant"></figure>
                            <a href="#" class="btn btn-default">Order Now</a>
                        </div>
                        <figure><img src="/images/header.png"></figure>
                    </section>
                    <section class="menu" data-flex="stripe" data-flex-480="vstripe">
                        <article>
                            <h3>daily menu</h3>
                            <figure><img src="/images/img2.png"></figure>
                            <p>Agedame tuna roll</p>
                            <p>Maki de atun crujiente, servido sobre chips de tempura, salsa dinamita y salsa ponzu.</p>  
                        </article>
                        <article>
                            <h3>specials</h3>
                            <figure><img src="/images/img1.png"></figure>
                            <p>Agedame tuna roll</p>
                            <p>Maki de atun crujiente, servido sobre chips de tempura, salsa dinamita y salsa ponzu.</p>  
                        </article>
                        <article>
                            <h3>catering</h3>
                            <figure><img src="/images/img3.png"></figure>
                            <p>Agedame tuna roll</p>
                            <p>Maki de atun crujiente, servido sobre chips de tempura, salsa dinamita y salsa ponzu.</p>                                
                        </article>
                    </section>
                    <section class="news" data-flex="stripe w" data-flex-480="vstripe">
                        <div>
                            <h4 data-flex="-end"><i class="icon-menu"></i>menu items</h4>
                            <div data-flex="stripe">
                                <div class="links-default" data-flex="col -start">
                                    <a href="#">Appetizers</a>
                                    <a href="#">Hot tapas</a>
                                    <a href="#">Soups and Salads</a>
                                    <a href="#">Acoompani&shy;ments</a>
                                    <a href="#">Vegetarian Dish</a>
                                    <a href="#">Chicken Dish</a>
                                    <a href="#">Seafood Dish</a>
                                    <a href="#">Vegetarian Sauce</a>
                                    <a href="#">Red Sauce</a>
                                </div>
                                <div class="links-default" data-flex="col -start">
                                    <a href="#">Seafood Dish</a>
                                    <a href="#">Vegetarian Sauce</a>
                                    <a href="#">Red Sauce</a>
                                    <a href="#">Seafood Sauce</a>
                                    <a href="#">Desserts</a>
                                    <a href="#">Seafood Dish</a>
                                    <a href="#">Vegetarian Sauce</a>
                                    <a href="#">Red Sauce</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4 data-flex="-end"><i class="icon-video"></i>food videos</h4>
                            <figure class="video" data-video="16:9"><iframe src="https://www.youtube.com/embed/d0t1VQ3PAOM" frameborder="0" allowfullscreen></iframe></figure>
                            <a href="#" class="more">See More Videos ></a>
                        </div>
                        <div>
                            <h4 data-flex="-end"><i class="icon-cloud"></i>testimonials</h4>
                            <blockquote data-flex="col">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quam justo, interdum vitae fermentum nec, volutpat ac massa. Cras posuere massa in diam euismod pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                <cite>Rafi, GraphicsFuel.com</cite>
                            </blockquote>
                        </div>
                    </section>
                    <section class="links-social" data-flex="-center center" data-childs="-center center">
                        <figure><img src="/images/venzel-left.png" width="60" height="24" alt=""></figure>
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-in"></i></a>
                        <a href="#"><i class="icon-mail"></i></a>
                        <figure><img src="/images/venzel-right.png" width="60" height="24" alt=""></figure>
                    </section>
                </div>
                <footer data-flex="col -center">
                    <nav class="links-footer" data-flex="-end center w">
                        <a href="#" class="active">home</a>&middot;
                        <a href="#">about us</a>&middot;
                        <a href="#">menu</a>&middot;
                        <a href="#">dinner</a>&middot;                        
                        <a href="#">lunch</a>&middot;
                        <a href="#">specials</a>&middot;
                        <a href="#">party</a>&middot;
                        <a href="#">catering</a>&middot;
                        <a href="#">contact us</a>
                    </nav>
                    <span>Copyright &copy; 2011<a href="#">&nbsp;Cafe&Restaurant.com</a>. All Rights Reserved. Site Designed by<a href="#">&nbsp;GraphicsFuel.com</a></span>
                </footer>
            </div>          
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>