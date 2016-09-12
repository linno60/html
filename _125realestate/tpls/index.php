<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Realestate Company</title>
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
            var LAYOUT_WIDTH = 1034;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="lwrap" data-flex="between -end">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="281" height="77" alt="Realestate Company">
                </a>
                <span class="callnumber">Call us: (214) 227-7669</span>
            </div>
            <div class="navigation">
                <div class="lwrap" data-flex="axis">
                    <nav class="links-nav" data-flex="w" data-childs="center -center">
                        <a href="#">Home</a>
                        <a href="#" class="active">Our Story</a>
                        <a href="#">Tenant</a>
                        <a href="#">Owner</a>
                        <a href="#">Contact us</a>
                    </nav>
                    <div class="links-sign" data-flex="end w">
                        <a href="#">Sign in</a>/
                        <a href="#">Sign up</a>
                    </div>
                </div>
            </div>
        </header>
        <div>
            <section class="lwrap" data-flex="stripe">
                <div class="slider-wrap">                   
                    <input name="anchor1" id='slide1-0' type="radio">
                    <input name="anchor1" id='slide1-1' type="radio">
                    <input name="anchor1" id='slide1-2' type="radio">
                    <input name="anchor1" id='slide1-3' type="radio">
                    <input name="anchor1" id='slide1-4' type="radio">
                    <input name="anchor1" id='play1' type="radio" checked>
                    <div class="slider">
                        <figure>
                            <div><img src="/images/slider1.jpg" width="489" height="253" alt=""></div>
                            <figcaption>
                                <h3>Lorem Ipsum is simply dummy text of</h3>
                                <p>We work with investors to make managing your investments easy!</p>
                            </figcaption>
                        </figure>
                        <figure class="num0">
                            <div><img src="/images/slider1.jpg" width="489" height="253" alt=""></div>
                            <figcaption>
                                <h3>Lorem Ipsum is simply dummy text of 1</h3>
                                <p>We work with investors to make managing your investments easy!</p>
                            </figcaption>
                        </figure>
                        <figure class="num1">
                            <div><img src="/images/slider2.jpg" width="489" height="253" alt=""></div>
                            <figcaption>
                                <h3>Lorem Ipsum is simply dummy text of 2</h3>
                                <p>We work with investors to make managing your investments easy!</p>
                            </figcaption>
                        </figure>
                        <figure class="num2">
                            <div><img src="/images/slider3.jpg" width="489" height="253" alt=""></div>
                            <figcaption>
                                <h3>Lorem Ipsum is simply dummy text of 3</h3>
                                <p>We work with investors to make managing your investments easy!</p>
                            </figcaption>
                        </figure>
                        <figure class="num3">
                            <div><img src="/images/slider4.jpg" width="489" height="253" alt=""></div>
                            <figcaption>
                                <h3>Lorem Ipsum is simply dummy text of 4</h3>
                                <p>We work with investors to make managing your investments easy!</p>
                            </figcaption>
                        </figure>
                        <figure class="num4">
                            <div><img src="/images/slider5.jpg" width="489" height="253" alt=""></div>
                            <figcaption>
                                <h3>Lorem Ipsum is simply dummy text of 5</h3>
                                <p>We work with investors to make managing your investments easy!</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class='bullets' data-flex="center">
                        <label class='num0' for='slide1-0'></label>
                        <label class='num1' for='slide1-1'></label>
                        <label class='num2' for='slide1-2'></label>
                        <label class='num3' for='slide1-3'></label>
                        <label class='num4' for='slide1-4'></label>
                    </div>
                </div>
                <div class="tabs" data-tabs="">
                    <div class="tablist">
                        <a href="#tab1" class="active">Tenants</a>
                        <a href="#tab2">Oweners</a>
                    </div>
                    <div class="tabset">
                        <div id="tab1" class="tabpanel active">
                            <form action="#" method="post" data-flex="col -end">
                                <label>Address, Suburbs, Postcodes, or Regions</label>
                                <input type="text" name="address" placeholder="Example: Wichita Falls, Texas 76301" class="input-address">
                                <input type="checkbox" name="check" id="c1" class="checkbox-default">
                                <label for="c1">Include surrounding suburbs</label>
                                <div data-flex="end -center">
                                    <label>Property Type&nbsp;:</label>
                                    <select>
                                        <option>Select one</option>
                                        <option>Select two</option>
                                        <option>Select three</option>
                                        <option>Select four</option>
                                        <option>Select five</option>
                                    </select>
                                </div>                                
                                <div data-flex="end -center">
                                    <label>Bedrooms&nbsp;:</label>
                                    <select>
                                        <option>Select one</option>
                                        <option>Select two</option>
                                        <option>Select three</option>
                                        <option>Select four</option>
                                        <option>Select five</option>
                                    </select>
                                </div> 
                                <button><span class="btn btn-default">Search</span></button>
                            </form>
                        </div>
                        <div id="tab2" class="tabpanel">Tab number 2</div>
                    </div>
                </div>
            </section>
            <section class="about">
                <div class="lwrap" data-flex="stripe w">
                    <article>
                        <h2>Buy a home</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                    </article>
                    <article>
                        <h2>Sell a home</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                    </article>
                    <article>
                        <h2>Rent a home</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                    </article>
                </div>
            </section>
            <section class="portfolio">
                <div class="lwrap" data-flex="stripe w">
                    <figure>
                        <div><img src="/images/img.png" width="210" height="135" alt=""></div>
                        <figcaption data-flex="axis">
                            <span>4605 Bayonne Court <small>Arlington, TX 76016</small></span>
                            <a href="#" class="glass"></a>
                        </figcaption>
                    </figure>
                    <figure>
                        <div><img src="/images/img.png" width="210" height="135" alt=""></div>
                        <figcaption data-flex="axis">
                            <span>4605 Bayonne Court <small>Arlington, TX 76016</small></span>
                            <a href="#" class="glass"></a>
                        </figcaption>
                    </figure>
                    <figure>
                        <div><img src="/images/img.png" width="210" height="135" alt=""></div>
                        <figcaption data-flex="axis">
                            <span>4605 Bayonne Court <small>Arlington, TX 76016</small></span>
                            <a href="#" class="glass"></a>
                        </figcaption>
                    </figure>
                    <figure>
                        <div><img src="/images/img.png" width="210" height="135" alt=""></div>
                        <figcaption data-flex="axis">
                            <span>4605 Bayonne Court <small>Arlington, TX 76016</small></span>
                            <a href="#" class="glass"></a>
                        </figcaption>
                    </figure>
                    <figure>
                        <div><img src="/images/img.png" width="210" height="135" alt=""></div>
                        <figcaption data-flex="axis">
                            <span>4605 Bayonne Court <small>Arlington, TX 76016</small></span>
                            <a href="#" class="glass"></a>
                        </figcaption>
                    </figure>
                    <figure>
                        <div><img src="/images/img.png" width="210" height="135" alt=""></div>
                        <figcaption data-flex="axis">
                            <span>4605 Bayonne Court <small>Arlington, TX 76016</small></span>
                            <a href="#" class="glass"></a>
                        </figcaption>
                    </figure>
                    <figure>
                        <div><img src="/images/img.png" width="210" height="135" alt=""></div>
                        <figcaption data-flex="axis">
                            <span>4605 Bayonne Court <small>Arlington, TX 76016</small></span>
                            <a href="#" class="glass"></a>
                        </figcaption>
                    </figure>
                    <figure>
                        <div><img src="/images/img.png" width="210" height="135" alt=""></div>
                        <figcaption data-flex="axis">
                            <span>4605 Bayonne Court <small>Arlington, TX 76016</small></span>
                            <a href="#" class="glass"></a>
                        </figcaption>
                    </figure>
                </div>
            </section>
            <section class="subscribe">
                <div class="lwrap" data-flex="stripe w">
                    <form action="#" method="post">
                        <label>Member login</label>
                        <div data-flex="axis" data-flex-960="axis w">
                            <input type="text" name="login" placeholder="User name" class="input-default">
                            <input type="password" name="login" placeholder="Password" class="input-default">
                            <button><span class="btn btn-default">Login</span></button>
                        </div>
                    </form>
                    <form action="#" method="post">
                        <label>Subscribe to our weekly newsletter</label>
                        <div data-flex="axis" data-flex-800="axis w">
                            <input type="email" name="subscribe" placeholder="email address" class="input-default">
                            <button><span class="btn btn-default">Subscribe</span></button>
                        </div>
                    </form>
                    <div data-flex="stripe">
                        <span class="lbl lbl-signup">Not a member yet</span>
                        <a href="#" class="btn btn-signup">Signup Now</a>
                    </div>
                    <div class="links-social" data-flex="w">
                        <a href="#"><i class="icon-facebook"></i></a>
                        <a href="#"><i class="icon-twitter"></i></a>
                        <a href="#"><i class="icon-add"></i></a>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe w">
                <div>
                    <h5>About Us</h5>
                    <div class="links-default" data-flex="col -start">
                        <a href="#">About us</a>
                        <a href="#">Why us</a>
                        <a href="#">Customer Stories</a>
                        <a href="#">Press Resources</a>
                        <a href="#">Press Releases</a>
                        <a href="#">Contact us</a>
                    </div>
                </div>
                <div>
                    <h5>Proparties</h5>
                    <div class="links-default" data-flex="col -start">
                        <a href="#">Rent a home</a>
                        <a href="#">Lease a home</a>
                        <a href="#">Buy a home</a>
                        <a href="#">Sell a home</a>
                        <a href="#">Ask advices</a>
                    </div>
                </div>
                <div class="testimonials" data-flex="col">
                    <hgroup data-flex>
                        <h5>Costamer Testimonials</h5>
                        <div data-flex>
                            <a href="#"><i class="icon-prev"></i></a>
                            <a href="#"><i class="icon-next"></i></a>
                        </div>
                    </hgroup>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industr standard dummy text ever since the 1500s, when an unknown printer took a </p>
                    <strong>Lorem Ipsum is simply</strong>
                    <strong>Owner, Lorem Ipsum</strong>
                </div>
                <div>
                    <a href="/" title="Return to the homepage" id="logoalt">
                        <img src="/images/logoalt.png" width="171" height="36" alt="Realestate Company">
                    </a>
                    <span>&copy; cssauthor.com</span>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>