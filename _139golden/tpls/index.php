<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Golden</title>
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
    <body data-flex="col">
        <div>
            <header data-flex="col">
                <section class="header" data-flex="-center">
                    <div class="lwrap" data-flex='axis'>
                        <a href="/" title="Return to the homepage" id='logo'>
                            <img src="/images/logo.png" width="79" height="28" alt="Golden">
                        </a>
                        <nav class="links-nav" data-flex="end w">
                            <a href="#">home</a>
                            <a href="#">services</a>
                            <a href="#">portfolio</a>
                            <a href="#">about</a>
                            <a href="#">contact</a>
                        </nav>
                    </div>
                </section>
                <section class="hdr-group" data-flex="center -center">
                    <hgroup class="lwrap">
                        <h3>Welcome To Our Studio!</h3>
                        <h1>it's nice to meet you</h1>
                        <a href="#" class="btn btn-default">tell me more</a>
                    </hgroup>
                </section>
            </header>
            <section class='services lwrap'>
                <hgroup>
                    <h2>services</h2>
                    <h6>Proin iaculis purus consequat sem cure.</h6>
                </hgroup>
                <div data-flex='stripe w' data-flex-480="vstripe">
                    <article>
                        <div class='lbl lbl-default'><i class="icon-basket"></i></div>
                        <h4>E-Commerce</h4>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
                    </article>
                    <article>
                        <div class='lbl lbl-default'><i class="icon-laptop"></i></div>
                        <h4>Responsive Web</h4>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
                    </article>
                    <article>
                        <div class='lbl lbl-default'><i class="icon-lock"></i></div>
                        <h4>Web Security</h4>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
                    </article>
                </div>
            </section>
            <section class='portfolio'>
                <div class='lwrap'>
                    <hgroup>
                        <h2>our portfolio</h2>
                        <h6>Proin iaculis purus consequat sem cure.</h6>
                    </hgroup>
                    <div data-flex='stripe w'>
                        <figure>
                            <img src="/images/p1.png" width="291" height="301" alt="">
                            <figcaption>
                                <strong>Ebony & Ivory</strong>
                                <em>Branding</em>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="/images/p2.png" width="291" height="301" alt="">
                            <figcaption>
                                <strong>Smart Stationary</strong>
                                <em>Print Design</em>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="/images/p3.png" width="291" height="301" alt="">
                            <figcaption>
                                <strong>Clever Poster</strong>
                                <em>Print Design</em>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="/images/p4.png" width="291" height="301" alt="">
                            <figcaption>
                                <strong>Vinyl Record</strong>
                                <em>Product Mock-Up</em>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="/images/p5.png" width="291" height="301" alt="">
                            <figcaption>
                                <strong>Treehouse Template</strong>
                                <em>Web Design</em>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="/images/p6.png" width="291" height="301" alt="">
                            <figcaption>
                                <strong>Burned Logo</strong>
                                <em>Branding</em>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </section>
            <section class='about lwrap'>
                <hgroup>
                    <h2>about us</h2>
                    <h6>Proin iaculis purus consequat sem cure.</h6>
                </hgroup>
                <div data-childs="axis">
                    <article>
                        <figure><img src="/images/a1.png" width="169" height="169" alt=""></figure>
                        <div>
                            <h5><time>july 2010</time>Our Humble Beginnings</h5>
                            <p>Proin iaculis purus consequat sem cure<br> digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni<br> ssim. Donec porttitora entum suscipit.</p>
                        </div>
                    </article>
                    <article>
                        <figure><img src="/images/a2.png" width="169" height="169" alt=""></figure>
                        <div>
                            <h5><time>january 2011</time>Facing Startup Battles</h5>
                            <p>Proin iaculis purus consequat sem cure<br> digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni<br> ssim. Donec porttitora entum suscipit aenenan rhoncus posuere odio in tincidunt.</p>
                        </div>
                    </article>
                    <article>
                        <figure><img src="/images/a3.png" width="169" height="169" alt=""></figure>
                        <div>
                            <h5><time>december 2012</time>Enter The Dark Days</h5>
                            <p>Proin iaculis purus consequat sem cure<br> digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni.</p>
                        </div>
                    </article>
                    <article>
                        <figure><img src="/images/a4.png" width="169" height="169" alt=""></figure>
                        <div>
                            <h5><time>february 2014</time>Our Triumph</h5>
                            <p>Proin iaculis purus consequat sem cure<br> digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni.<br> ssim. Donec porttitora entum suscipit aenenan.</p>
                        </div>
                    </article>
                    <article>
                        <figure><img src="/images/empty.png" width="169" height="169" alt=""><a href='#' class='btn btn-default'>our story con&shytinues <br>...</a></figure>
                    </article>
                </div>
            </section>
            <section class='team'>
                <div class='lwrap'>
                    <hgroup>
                        <h2>our amazing team</h2>
                        <h6>Proin iaculis purus consequat sem cure.</h6>
                    </hgroup>
                    <div class='profiles' data-flex='around w' data-childs='col around -center'>
                        <div>
                            <figure><img src="/images/photo1.jpg" width="220" height="220" alt=""></figure>
                            <strong>Kimberly Thompson</strong>
                            <small>Marketer</small>
                            <div class="links-socialteam" data-flex="center w">
                                <a href="#" class="tw"></a>
                                <a href="#" class="fb"></a>
                                <a href="#" class="pt"></a>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/photo2.jpg" width="220" height="220" alt=""></figure>
                            <strong>Rico Massimo</strong>
                            <small>Coder</small>
                            <div class="links-socialteam" data-flex="center w">
                                <a href="#" class="tw"></a>
                                <a href="#" class="fb"></a>
                                <a href="#" class="gp"></a>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/photo3.jpg" width="220" height="220" alt=""></figure>
                            <strong>Uku Mason</strong>
                            <small>Graphic Designer</small>
                            <div class="links-socialteam" data-flex="center w">
                                <a href="#" class="fb"></a>
                                <a href="#" class="pt"></a>
                            </div>
                        </div>
                    </div>
                    <p>Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt proin iaculis.</p>
                </div>
            </section>
            <section class="links-logos lwrap" data-flex="around -center w">
                <a href="#"><img src="/images/envato.png" width="161" height="30" alt=""></a>
                <a href="#"><img src="/images/wp.png" width="186" height="42" alt=""></a>
                <a href="#"><img src="/images/tuts.png" width="131" height="41" alt=""></a>
                <a href="#"><img src="/images/microlancer.png" width="167" height="42" alt=""></a>
            </section>
        </div>
        <footer>
            <section class='contacts'>
                <div class='lwrap'>
                    <hgroup>
                        <h2>contact us</h2>
                        <h6>Proin iaculis purus consequat sem cure.</h6>
                    </hgroup>
                    <form action='#' method='post' data-flex='around w' data-flex-480="vaxis">
                        <div>
                            <input type="text" name="form" class="input-form" placeholder="your name *">
                            <input type="email" name="form" class="input-form" placeholder="your e-mail *">
                            <input type="text" name="form" class="input-form" placeholder="subject">
                        </div>
                        <textarea name="form" class="textarea-form" placeholder="your message *"></textarea>
                        <button><span class='btn btn-default'>send message</span></button>
                    </form>
                </div> 
            </section>
            <section class='copyright lwrap' data-flex='axis'>
                <span>&copy; Copyright 2014 FreebiesXpress.com</span>
                <div class="links-socialfooter" data-flex="center w" data-flex-480="end w">
                    <a href="#" class="tw"></a>
                    <a href="#" class="fb"></a>
                    <a href="#" class="pt"></a>
                    <a href="#" class="gp"></a>
                </div>
                <div class="empty"></div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>