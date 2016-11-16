<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Perpetual</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
        <link rel="stylesheet" href="/css/addons/data-flex.css">
        <link rel="stylesheet" href="/css/addons/data-tabs.css">
        <link rel="stylesheet" href="/css/addons/generic.css"> 
        <link rel="stylesheet" href="/js/jquery/plugins/jQuery-Feature-Carousel/css/feature-carousel.css">
        <link rel="stylesheet" href="/js/jquery/plugins/owl.carousel/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="/js/jquery/plugins/owl.carousel/owl-carousel/owl.theme.css">
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
            <header>               
                <div class="lwrap" data-flex="stripe" data-flex-640="between -start">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="260" height="115" alt="Perpetual">
                    </a>
                    <nav class="links-nav" data-flex="end w" data-childs="center -center">
                        <a href="#" class="active">home</a>
                        <a href="#">about</a>
                        <a href="#">portfolio</a>
                        <a href="#">services</a>
                        <a href="#">clients</a>
                        <a href="#">contact us</a>
                        <a href="#">blog</a>
                    </nav>
                </div>
            </header>
            <section class="slider-wrap">
                <div class="lwrap" data-flex="stripe">
                    <div id="carousel">
                        <div class="carousel-feature">
                            <a href="#"><img class="carousel-image" src="/images/terion.png"  width="260" height="308" alt=""></a>
                        </div>
                        <div class="carousel-feature">
                            <a href="#"><img class="carousel-image" src="/images/killowatt.png" width="260" height="308" alt=""></a>
                        </div>
                        <div class="carousel-feature">
                            <a href="#"><img class="carousel-image" src="/images/vivaro.png" width="260" height="308" alt=""></a>
                        </div>
                        <div class="carousel-feature">
                            <a href="#"><img class="carousel-image" src="/images/killowatt.png" width="260" height="308" alt=""></a>
                        </div>  
                    </div>
                    <article data-flex="col -center">
                        <h1>web design & more</h1>
                        <p>Sed gravida nunc at erat tincidunt iaculis. Nam ac orci diam, sit amet commodo leo. Phasellus consequat augue sed arcu volutpat lobortis.</p>
                        <p>Duis a quam ut neque mollis imperdiet a a lacus. Integer quis diam nunc, eu aliquet nibh.</p>
                        <a href="#" class="btn btn-alt lg">read more</a>
                    </article>
                </div>
            </section>
            <section class="preview">
                <div class="lwrap" data-flex="axis">
                    <article>
                        <h3>lorem ipsum dolor sit amet neque</h3>
                        <p>Sed gravida nunc at erat tincidunt iaculis. Nam ac orci diam, sit amet commodo leo. Phasellus consequat augue.</p> 
                        <a href="#" class="btn btn-default">read more</a>
                    </article>
                    <span class="divider"><span>{</span><span>}</span></span>
                    <article>
                        <h3>commodo phaellus arcu sed nibh</h3>
                        <p>Sed gravida nunc at erat tincidunt iaculis. Nam ac orci amet commodo leo. Phasellus consequat augue sed.</p> 
                        <a href="#" class="btn btn-default">read more</a>
                    </article>
                </div>
            </section>
            <main class="content-wrap">
                <div class="lwrap" data-childs="stripe">
                    <div class="intro">
                        <article>
                            <h2 data-flex="-center"><i class="icon-coffee"></i>odio mollus cursus penant maecasus</h2>
                            <p>Aenean eget rutrum sapien. Phasellus gravida nibh leo, sed varius quam. Duis sed diam nisi. Donec urna eros, fermentum at tincidunt nec, molestie quis neque. Praesent aliquam dignissim orci, quis ullamcorper leo eleifend nec. Mauris pellentesque, enim eget consectetur pharetra, magna mi cursus tortor, non luctus leo mi ac tellus. Proin magna lorem, adipiscing sit amet semper placerat, cursus ut nunc. Integer pellentesque lobortis congue.</p>
                            <a href="#" class="btn btn-alt">read more</a>
                        </article>
                        <div class="accordion" data-childs="-center">
                            <a href="#">ansen quist diam nibh lacus</a>
                            <div>Tab number 1</div>
                            <a href="#">erat alium cras orci magnus nam sit</a>
                            <div>Tab number 2</div>
                            <a href="#" class="active">ligula aeanes quist</a>
                            <div class="active"></div>
                            <a href="#">odio mollus cursus penant maecasus</a>
                            <div>Tab number 4</div>
                        </div>
                    </div>
                    <div class="featured">
                        <div id="owl-demo" class="owl-carousel owl-theme" data-flex="axis">
                            <article class="item">
                                <figure><img src="/images/featured.png" width="302" height="151" alt=""><span class="lbl lbl-alt"><span>featured</span></span></figure>
                                <p>Proin magna lorem, adipiscing sit amet semper placerat, cursus ut nunc. Integer pellentesque.</p>
                            </article>
                            <article class="item">
                                <figure><img src="/images/featured.png" width="302" height="151" alt=""><span class="lbl lbl-alt"><span>featured</span></span></figure>
                                <p> Integer pellentesque. Proin magna lorem, adipiscing sit amet semper placerat, cursus ut</p>
                            </article>
                            <article class="item">
                                <figure><img src="/images/featured.png" width="302" height="151" alt=""><span class="lbl lbl-alt"><span>featured</span></span></figure>
                                <p>Adipiscing sit amet semper placerat, cursus ut nunc. Integer pellentesque. Phaeret eget unt.</p>
                            </article>
                            <article class="item">
                                <figure><img src="/images/featured.png" width="302" height="151" alt=""><span class="lbl lbl-alt"><span>featured</span></span></figure>
                                <p>Proin magna lorem, adipiscing sit amet semper placerat, cursus ut nunc. Integer pellentesque.</p>
                            </article>
                            <article class="item">
                                <figure><img src="/images/featured.png" width="302" height="151" alt=""><span class="lbl lbl-alt"><span>featured</span></span></figure>
                                <p> Integer pellentesque. Proin magna lorem, adipiscing sit amet semper placerat, cursus ut</p>
                            </article>
                            <article class="item">
                                <figure><img src="/images/featured.png" width="302" height="151" alt=""><span class="lbl lbl-alt"><span>featured</span></span></figure>
                                <p>Adipiscing sit amet semper placerat, cursus ut nunc. Integer pellentesque. Phaeret eget unt.</p>
                            </article>
                            <article class="item">
                                <figure><img src="/images/featured.png" width="302" height="151" alt=""><span class="lbl lbl-alt"><span>featured</span></span></figure>
                                <p>Proin magna lorem, adipiscing sit amet semper placerat, cursus ut nunc. Integer pellentesque.</p>
                            </article>
                            <article class="item">
                                <figure><img src="/images/featured.png" width="302" height="151" alt=""><span class="lbl lbl-alt"><span>featured</span></span></figure>
                                <p> Integer pellentesque. Proin magna lorem, adipiscing sit amet semper placerat, cursus ut</p>
                            </article>
                            <article class="item">
                                <figure><img src="/images/featured.png" width="302" height="151" alt=""><span class="lbl lbl-alt"><span>featured</span></span></figure>
                                <p>Adipiscing sit amet semper placerat, cursus ut nunc. Integer pellentesque. Phaeret eget unt.</p>
                            </article>
                        </div>
                        <a class="btn btn-slide prev"></a>
                        <a class="btn btn-slide next"></a>
                    </div>
                </div>
            </main>
            <section class="news">
                <div class="lwrap" data-flex="vaxis">
                    <h2 class="hdr"><span>Latest News</span></h2>
                    <div data-flex="stripe w">
                        <article>
                            <h4 data-flex="-center"><i class="icon-download"></i>torquent primis faucis</h4>
                            <p>Cras aliquam arcu id diam pharetra malesuada. Vestibulum id pulvinar tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                            <a href="#" class="read-lnk">read more</a>
                        </article>
                        <article>
                            <h4 data-flex="-center"><i class="icon-blinklist"></i>vestibulim id tellus</h4>
                            <p>Cras aliquam arcu id diam pharetra malesuada. Vestibulum id pulvinar tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                            <a href="#" class="read-lnk">read more</a>
                        </article>
                        <article>
                            <h4 data-flex="-center"><i class="icon-server"></i>torquent primis faucis</h4>
                            <p>Cras aliquam arcu id diam pharetra malesuada. Vestibulum id pulvinar tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                            <a href="#" class="read-lnk">read more</a>
                        </article>  
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <section class="footer">
                <div class="lwrap" data-flex="stripe w">
                    <div>
                        <h5>Services</h5>
                        <div class="links-footer" data-flex="col -start">
                            <a href="#">Vestibulum Ante </a>
                            <a href="#">Sipsum Primis in Faucibus</a>
                            <a href="#">Orci Luctus et Ultrices</a>
                            <a href="#">Posuere  at Sed Accusom</a>
                            <a href="#">Magnus Lorem Quisit</a>
                            <a href="#">Aenean id Dolroest Pursus</a>
                            <a href="#">Nulla Quam Mollis</a>
                        </div>
                    </div>
                    <div>
                        <h5>Other Links & Information</h5>
                        <div class="links-footer" data-flex="col -start">
                            <a href="#">Vestibulum Ante </a>
                            <a href="#">Sipsum Primis in Faucibus</a>
                            <a href="#">Orci Luctus et Ultrices</a>
                            <a href="#">Posuere  at Sed Accusom</a>
                            <a href="#">Magnus Lorem Quisit</a>
                            <a href="#">Aenean id Dolroest Pursus</a>
                            <a href="#">Nulla Quam Mollis</a>
                        </div>
                    </div>
                    <div>
                        <h3>Questions for Us?</h3>
                        <form action="#" method="post">
                            <div data-flex="stripe" data-flex-640="vstripe">
                                <input type="text" class="input-default" name="" placeholder="Subject">
                                <input type="email" class="input-default" name="" placeholder="Email">
                            </div>
                            <textarea class="textarea-default" placeholder="Message"></textarea>
                            <button><span class="btn btn-submit">Submit</span></button>
                        </form>
                    </div>
                </div>
            </section>
            <section class="copyright">
                <div class="lwrap" data-flex="axis">
                    <span>&copy; All Rights Reserved by PSD Style 2011</span>
                    <div data-flex="end -center w" class="social">
                        <span>Socialize With Us</span>
                        <div class="links-social" data-flex="end w">
                            <a href="#"><i class="icon-tw"></i></a>
                            <a href="#"><i class="icon-in"></i></a>
                            <a href="#"><i class="icon-fl"></i></a>
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-net"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/jquery/plugins/owl.carousel/owl-carousel/owl.carousel.js"></script>
        <script src="/js/jquery/plugins/jQuery-Feature-Carousel/js/jquery.featureCarousel.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
        <script>
            $(document).ready(function () {
                var carousel = $("#carousel").featureCarousel({
                    trackerSummation: false,
                    largeFeatureWidth: 1,
                    largeFeatureHeight: 1,
                    smallFeatureWidth: 0.9,
                    smallFeatureHeight: 0.9,
                    smallFeatureOffset: 18,
                    sidePadding: -7
                });
            });

            $(document).ready(function () {
                var owl = $("#owl-demo");
                owl.owlCarousel({
                    items: 3,
                    navigation: true,
                    navigationText: ["", ""],
                    pagination: false
                });
            });
        </script>
    </body>
</html>