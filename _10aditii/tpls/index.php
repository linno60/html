<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Aditii</title>
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
    <body data-flex="col between">
        <div>
            <header>
                <div class="lwrap" data-flex='axis' data-flex-480="vaxis">
                    <a href="#" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" height="43" width="110" alt="Aditii">
                    </a>
                    <form action="#" method="post" data-flex="center">
                        <input type='search' name="input">
                    </form>
                    <div class='cart' data-flex='-center center w'>
                        <a href='#'></a>
                        <span>$300</span>
                    </div>
                </div>
                <div class="nav">
                    <nav class='lwrap links-nav' data-flex='axis'  data-flex-800='center w'>
                        <a href='#'>home</a><div></div>
                        <a href='#'>sale</a><div></div>
                        <a href='#'>handbags</a><div></div>
                        <a href='#'>wallets</a><div></div>
                        <a href='#'>accessories</a><div></div>
                        <a href='#'>mens store</a><div></div>
                        <a href='#'>shoes</a><div></div>
                        <a href='#'>vintage</a><div></div>
                        <a href='#'>services</a><div></div>
                        <a href='#'>contact us</a>
                    </nav>
                </div>
            </header>
            <section class='slider-top'>
                <div class="lwrap" data-flex="stripe" data-flex-480="vstripe">
                    <div data-flex='-center center'>
                        <figure><img src="/images/img1.png"></figure>
                    </div>
                    <div data-flex="col -start center" data-flex-480="vaxis">
                        <h1>cowhide standard crew</h1>
                        <p>White coloured, short-sleeved, printed T-shirt for men by Levi's. This crew-neck T-shirt is made of or&shy;ganic cotton and comes in a regular fit. </p>
                        <a href='#' class='btn btn-shop'>shop now</a>
                        <div class='links-controls' data-flex>
                            <a href='#'></a>
                            <a href='#'></a>
                            <a href='#'></a>
                            <a href='#' class='active'></a>
                            <a href='#'></a>
                        </div>
                    </div>
                </div>            
            </section>
            <section class='slider-product lwrap' data-flex="stripe">
                <a href='#' class='btn btn-arrow'><i class='icon-left'></i></a>
                <div data-flex='stripe' data-childs="around -center">
                    <div>
                        <figure><img src="/images/img2.png"></figure>
                        <div data-flex="col -start">
                            <span>branded shoes</span>
                            <a href='#' class='btn btn-default'>shop</a>
                        </div>
                    </div>
                    <div class="hidden">
                        <figure><img src="/images/img3.png"></figure>
                        <div data-flex="col -start">
                            <span>branded tshirts</span>
                            <a href='#' class='btn btn-default'>shop</a>
                        </div>
                    </div>
                    <div class="hidden-sm">
                        <figure><img src="/images/img4.png"></figure>
                        <div data-flex="col -start">
                            <span>branded shoes</span>
                            <a href='#' class='btn btn-default'>shop</a>
                        </div>
                    </div>
                </div>
                <a href='#' class='btn btn-arrow'><i class='icon-right'></i></a>
            </section>
            <section class='heading'>
                <h2 class="lwrap">featured products</h2>
            </section>
            <section class='featured lwrap' data-flex="stripe w" data-childs='vaxis'>
                <div>
                    <figure><img src="/images/img5.png"></figure>
                    <div>
                        <span>branded shoe</span>
                        <div data-flex='-center w'>
                            <span>$300</span>
                            <a href='#' class='btn btn-default'>buy now</a>
                        </div>                    
                    </div>
                </div>
                <div>
                    <figure><img src="/images/img6.png"></figure>
                    <div>
                        <span>branded tees</span>
                        <div data-flex='-center w'>
                            <span>$300</span>
                            <a href='#' class='btn btn-default'>buy now</a>
                        </div>                    
                    </div>
                </div>
                <div>
                    <figure><img src="/images/img7.png"></figure>
                    <div>
                        <span>branded shoe</span>
                        <div data-flex='-center w'>
                            <span>$300</span>
                            <a href='#' class='btn btn-default'>buy now</a>
                        </div>                    
                    </div>
                </div>
                <div>
                    <figure><img src="/images/img8.png"></figure>
                    <div>
                        <span>branded shoe</span>
                        <div data-flex='-center w'>
                            <span>$300</span>
                            <a href='#' class='btn btn-default'>buy now</a>
                        </div>                    
                    </div>
                </div>
                <div>
                    <figure><img src="/images/img9.png"></figure>
                    <div>
                        <span>ems women bag</span>
                        <div data-flex='-center w'>
                            <span>$300</span>
                            <a href='#' class='btn btn-default'>buy now</a>
                        </div>                    
                    </div>
                </div>
                <div>
                    <figure><img src="/images/img4.png"></figure>
                    <div>
                        <span>branded cargos</span>
                        <div data-flex='-center w'>
                            <span>$300</span>
                            <a href='#' class='btn btn-default'>buy now</a>
                        </div>                    
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <section class='lwrap' data-flex='stripe w'>
                <div>
                    <h3>featured sale</h3>
                    <div class="links-default" data-flex="col -start">
                        <a href='#'>Alexis Hudson</a>
                        <a href='#'>American Apparel</a>
                        <a href='#'>Ben Sherman</a>
                        <a href='#'>Big Buddha</a>
                        <a href='#'>Chanel</a>
                        <a href='#'>Christian Audigier</a>
                        <a href='#'>Coach</a>
                        <a href='#'>Cole Haan</a>
                    </div>
                </div>
                <div>
                    <h3>mens store</h3>
                    <div class="links-default" data-flex="col -start">
                        <a href='#'>Alexis Hudson</a>
                        <a href='#'>American Apparel</a>
                        <a href='#'>Ben Sherman</a>
                        <a href='#'>Big Buddha</a>
                        <a href='#'>Chanel</a>
                        <a href='#'>Christian Audigier</a>
                        <a href='#'>Coach</a>
                        <a href='#'>Cole Haan</a>
                    </div>
                </div>
                <div>
                    <h3>women store</h3>
                    <div class="links-default" data-flex="col -start">
                        <a href='#'>Alexis Hudson</a>
                        <a href='#'>American Apparel</a>
                        <a href='#'>Ben Sherman</a>
                        <a href='#'>Big Buddha</a>
                        <a href='#'>Chanel</a>
                        <a href='#'>Christian Audigier</a>
                        <a href='#'>Coach</a>
                        <a href='#'>Cole Haan</a>
                    </div>
                </div>
                <div>
                    <h3>quick links</h3>
                    <div class="links-default" data-flex="col -start">
                        <a href='#'>Alexis Hudson</a>
                        <a href='#'>American Apparel</a>
                        <a href='#'>Ben Sherman</a>
                        <a href='#'>Big Buddha</a>
                        <a href='#'>Chanel</a>
                        <a href='#'>Christian Audigier</a>
                        <a href='#'>Coach</a>
                        <a href='#'>Cole Haan</a>
                    </div>
                </div>
            </section>
            <section class='copyright' data-flex='center'>Copyright © 2013 Css Author</section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>