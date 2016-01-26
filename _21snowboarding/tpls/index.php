<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Snowboarding</title>
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
            var LAYOUT_WIDTH = 1246;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <section class="lwrap" data-flex="axis">
                <div data-flex='-center'>
                    <a href="/" title="Return to the homepage" id='logo'>
                        <img src="/images/logo.png" width="69" height="51" alt="Snowboarding">
                    </a>   
                    <nav class='links-nav' data-flex="w">
                        <a href="#">shop</a>
                        <a href="#">team</a>
                        <a href="#">events</a>
                        <a href="#">experience</a>  
                        <a href="#">company</a>
                        <a href="#">contact</a>
                    </nav>
                </div>
                <div data-flex='-center' data-flex-640='-center end w'>
                    <form action='#' method='post'>
                        <input type="search" name='search'>
                    </form>
                    <div class="cart" data-flex="-center">
                        <a href="#"></a>
                        <span>&euro;0</span>
                    </div>
                </div>
            </section> 
        </header>
        <section class="slider" data-flex='-center center'>
            <div data-flex='col -end'>
                <h1>run over everything</h1>
                <a href="#" class="btn btn-default">see details</a>
            </div>
        </section>
        <section class="snowboards-wrap" data-flex="col -center">
            <h2>snowboards</h2>
            <p>aliquam erat volutpat. curabitur ut consequat arcu eget laoreet est</p>
            <a href="#"><i class="icon-close"></i></a>
            <div class="snowboards" data-flex="axis">
                <a href="#"><i class="icon-prev"></i></a>
                <div class="img-wrap" data-flex="axis">
                    <figure><img src="images/board1.png"></figure>
                    <figure><img src="images/board2.png"></figure>
                    <figure><img src="images/board3.png"></figure>
                    <figure><img src="images/board4.png"></figure>
                    <figure><img src="images/board5.png"></figure>
                </div>                
                <a href="#"><i class="icon-next"></i></a>
            </div>
            <span>snowboard extreme series</span>
        </section>
        <section class="about">
            <div class='lwrap'>
                <h2>the mountains snowboarding<sup>&reg;</sup></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt auctor facilisis. Nam massa dui, imperdiet et mi ut, sagittis viverra odio. Duis et lectus eu enim gravida vulputate nec eget nisi. Nunc ultrices velit blandit, dapibus lacus in, feugiat erat. Donec non porttitor augue, sit amet lacinia purus. Nulla fringilla quam est, luctus dapibus odio suscipit ut. Vivamus et lectus a nunc fringilla volutpat. Morbi sed congue sem.</p>
                <p>Aliquam erat volutpat. Curabitur ut consequat arcu, eget laoreet est. Vivamus semper nibh sit amet libero hendrerit luctus. Fusce non bibendum lorem. Fusce laoreet risus eget tortor lobortis egestas. Etiam tempus quam sed felis viverra scelerisque. Integer fringilla libero risus, vel euismod turpis auctor ac. Proin elementum aliquet libero a dapibus. Mauris et tempor dolor.</p>  
            </div>
        </section>
        <section class="features lwrap" data-flex="col -center">
            <h2>features</h2>
            <a href="#"><i class="icon-close"></i></a>
            <div data-flex="stripe">
                <figure>
                    <img src="/images/img3.png">
                    <figcaption>
                        <a href="#">Born Identity: Bringing Burton Hardgoods to Life</a>
                    </figcaption>
                </figure>
                <figure>
                    <img src="/images/img4.png">
                    <figcaption>
                        <a href="#">Jeremy Jones: On That Street Grind</a>
                    </figcaption>
                </figure>
                <figure>
                    <img src="/images/img5.png">
                    <figcaption>
                        <a href="#">Burton's Tokyo Rail Days Recap</a>
                    </figcaption>
                </figure>
                <figure>
                    <img src="/images/img6.png">
                    <figcaption>
                        <a href="#">Burton's Tokyo Rail Days Preview</a>
                    </figcaption>
                </figure>
            </div>
        </section>
        <footer>
            <div class='lwrap'>
                <section class='footer' data-flex="stripe">
                    <div>
                        <h5>products</h5>
                        <div class='links-default' data-flex='col -start'>
                            <a href="#">Mens</a>
                            <a href="#">Womens</a>
                            <a href="#">Youth</a>
                        </div>
                    </div>
                    <div>
                        <h5>about</h5>
                        <div class='links-default' data-flex='col -start'>
                            <a href="#">Careers and Intemships</a>
                            <a href="#">Sponsorships</a>
                            <a href="#">team</a>
                            <a href="#">Catalog Request/Download</a>
                        </div>
                    </div>
                    <div>
                        <h5>customer support</h5>
                        <div class='links-default' data-flex='col -start'>
                            <a href="#">Contact Us</a>
                            <a href="#">Shipping and Order Tracking</a>
                            <a href="#">Easy returns</a>
                            <a href="#">Warranty</a>
                            <a href="#">Replacement Binding Parts</a>
                        </div>
                    </div>
                    <div>
                        <h5>newsletter</h5>
                        <form action="#" method="post" data-flex>
                            <input type="email" name='email' placeholder="Enter your email">
                            <button><span class="btn btn-submit">go</span></button>
                        </form>
                        <div class="links-social" data-flex='-center end w'>
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-tw"></i></a>
                            <a href="#"><i class="icon-ig"></i></a>
                            <a href="#"><i class="icon-pin"></i></a>
                            <a href="#"><i class="icon-yt"></i></a>
                        </div>
                    </div>
                </section>
                <section class="copyright" data-flex="axis">
                    <span><small>&copy;</small> 2014 Mountains Snowboards</span>
                    <select>
                        <option>Change region</option>
                        <option>UK</option>
                        <option>Ukraine</option>
                        <option>Urugway</option>
                    </select>
                </section>
            </div>        
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>