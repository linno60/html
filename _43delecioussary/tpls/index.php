<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Delecioussary</title>
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
            <div class="lwrap">
                <div class="nav" data-flex="axis" data-flex-480="vaxis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" height="24" width="121" alt="Delecioussary">
                    </a>
                    <nav class="links-nav" data-flex="w" data-flex-480="center w">
                        <a href="#">home</a>
                        <a href="#">about</a>
                        <a href="#">services</a>
                        <a href="#">products</a>
                        <a href="#">ingredients</a>
                        <a href="#">e-shop</a>
                        <a href="#">branches</a>
                    </nav>
                    <a href="#" class="contact">contact</a>
                </div>
                <small>this is your tagline</small>
                <div data-flex="axis">
                    <a href="#" class="btn btn-slide lg prev"></a>
                    <div class="slider-lg">
                        <div data-flex="-center">
                            <figure><img src="/images/img1.png"></figure>
                            <figure><img src="/images/img2.png"></figure>
                            <div>
                                <h5>Ingredients</h5>
                                <ul class="list-default">
                                    <li>Sugar</li>
                                    <li>Starch</li>
                                    <li>Vanilla</li>
                                    <li>Chocolate</li>
                                    <li>Wheet</li>
                                    <li>Milk</li>
                                </ul>
                            </div>
                        </div>
                        <h1>Welcome to delecioussary !</h1>
                        <p>Serve an optimised version of the theme to your visitors on tablet and mobile devices. Optimised for iPad and iPhone.</p>
                    </div>
                    <a href="#" class="btn btn-slide lg next"></a>
                </div>                
            </div>
        </header>
        <div class="lwrap">
            <section class="daily">
                <hgroup class='hdr' data-flex="-end">
                    <h2>Today's Choice</h2>
                    <h6>make your day !</h6>
                </hgroup>
                <div class='slider-daily' data-flex='-end between' data-childs="col -center">
                    <article>
                        <figure><img src='/images/img3.png'></figure>
                        <h4><a href='#'>Creamsy Creamy</a></h4>
                        <small>a little description</small>
                    </article>
                    <article>
                        <figure><img src='/images/img4.png'></figure>
                        <h4><a href='#'>Creamsy Creamy</a></h4>
                        <small>a little description</small>
                    </article>
                    <article>
                        <figure><img src='/images/img5.png'></figure>
                        <h4><a href='#'>Creamsy Creamy</a></h4>
                        <small>a little description</small>
                    </article>
                    <article>
                        <figure><img src='/images/img6.png'></figure>
                        <h4><a href='#'>Creamsy Creamy</a></h4>
                        <small>a little description</small>
                    </article>
                    <article>
                        <figure><img src='/images/img7.png'></figure>
                        <h4><a href='#'>Creamsy Creamy</a></h4>
                        <small>a little description</small>
                    </article>
                    <article>
                        <figure><img src='/images/img8.png'></figure>
                        <h4><a href='#'>Creamsy Creamy</a></h4>
                        <small>a little description</small>
                    </article>
                </div>
                <div class='range' data-flex='center'></div>
            </section>
            <section class="content" data-flex="stripe">
                <div>
                    <div class="about">   
                        <h2 class='hdr'>About Us</h2>  
                        <div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type make a type specimen book.</p>
                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p> 
                        </div>                 
                        <a href='#' class='view'>Continue reading...</a>
                    </div>
                    <div class="offer" data-flex="axis">
                        <div>
                            <h2 class='hdr'>Special Offer !</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been..</p>
                            <div data-flex="-end between">
                                <div data-flex='col'>
                                    <del class="price-old"><span>1.22 <span>&pound;</span></span></del>
                                    <span class="price-new">0.99 <span>&pound;</span></span>
                                </div>
                                <a href='#' class='btn btn-cart'>Add to Cart</a>
                            </div>
                        </div>
                        <figure><img src='/images/img9.png'></figure>
                    </div>
                    <div class='testimonials'>
                        <h2 class='hdr'>Testimonials</h2>
                        <div data-flex='stripe'>
                            <blockquote>
                                <q>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently...</q>
                                <cite>Author : Wassim Awadallah</cite>
                            </blockquote>
                            <blockquote>
                                <q>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently...</q>
                                <cite>Author : Wassim Awadallah</cite>
                            </blockquote>
                            <blockquote>
                                <q>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently...</q>
                                <cite>Author : Wassim Awadallah</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <aside>
                    <div class="slider-sm"> 
                        <h2 class='hdr'>Our Ingredients</h2>
                        <p>Navigate through the ingredients that goes into our products</p>
                        <div data-flex="axis">
                            <a href="#" class="btn btn-slide sm prev"></a>
                            <figure><img src="/images/img10.png"></figure>
                            <a href="#" class="btn btn-slide sm next"></a>
                        </div>
                        <h3>Pure Swiss Chocolate</h3>
                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently...</p>
                        <a href='#' class='view'>View all our ingredients</a>                    
                    </div>
                    <div class='form-wrap'>
                        <h2 class='hdr'>Get in our mailing list</h2>
                        <p>Recieve our special offers & promotions on daily bases.</p>
                        <form class="form-email" action="#" method="post" data-flex="axis">
                            <input type="email" name="email" placeholder="Your email address">
                            <button><span class='btn btn-submit'>Submit</span></button>
                        </form>
                        <a href='#' class='view'>view samples of our newsletter</a>
                    </div>
                </aside>
            </section>
            <footer data-flex='axis'>
                <div>
                    <span>All rights reserved 2012&ensp; <a href='#'>www.blugraphic.com</a> &ensp;<a href='mailto:@blugraphic'>@blugraphic</a></span>
                    <nav class="links-footer" data-flex="w">
                        <a href='#'>Home</a>.
                        <a href='#'>About</a>.
                        <a href='#'>Sevices</a>.
                        <a href='#'>Products</a>.
                        <a href='#'>Ingredients</a>.
                        <a href='#'>E-Shop</a>.
                        <a href='#'>Branches</a>.
                        <a href='#'>Contact</a>
                    </nav>
                </div>
                <div class='links-social' data-flex='end w'>
                    <a href='#'><i class='icon-rss'></i></a>
                    <a href='#'><i class='icon-tw'></i></a>
                    <a href='#'><i class='icon-fb'></i></a>
                </div>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>