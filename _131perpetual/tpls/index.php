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
                <div class="lwrap" data-flex="stripe">
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
                    <div class="slider">

                    </div>
                    <article>
                        <h1>web design & more</h1>
                        <p>Sed gravida nunc at erat tincidunt iaculis. Nam ac orci diam, sit amet commodo leo. Phasellus consequat augue sed arcu volutpat lobortis.</p>
                        <p>Duis a quam ut neque mollis imperdiet a a lacus. Integer quis diam nunc, eu aliquet nibh.</p>
                    </article>
                </div>
            </section>
            <section class="preview">
                <div class="lwrap" data-flex="stripe">
                    <div>
                        <h3>lorem ipsum dolor sit amet neque</h3>
                        <p>Sed gravida nunc at erat tincidunt iaculis. Nam ac orci amet commodo leo. Phasellus consequat augue sed.</p> 
                        <a href="#" class="btn btn-default">read more</a>
                    </div>
                    <div>
                        <h3>commodo phaellus arcu sed nibh</h3>
                        <p>Sed gravida nunc at erat tincidunt iaculis. Nam ac orci amet commodo leo. Phasellus consequat augue sed.</p> 
                        <a href="#" class="btn btn-default">read more</a>
                    </div>
                </div>
            </section>
            <section class="content-wrap">
                <div class="lwrap" data-childs="stripe">
                    <div>
                        <article>
                            <h2 data-flex="-center"><i class="icon-coffee"></i>odio mollus cursus penant maecasus</h2>
                            <p>Aenean eget rutrum sapien. Phasellus gravida nibh leo, sed varius quam. Duis sed diam nisi. Donec urna eros, fermentum at tincidunt nec, molestie quis neque. Praesent aliquam dignissim orci, quis ullamcorper leo eleifend nec. Mauris pellentesque, enim eget consectetur pharetra, magna mi cursus tortor, non luctus leo mi ac tellus. Proin magna lorem, adipiscing sit amet semper placerat, cursus ut nunc. Integer pellentesque lobortis congue.</p>
                            <a href="#" class="btn btn-alt">read more</a>
                        </article>
                        <div class="accordion" data-childs="-center">
                            <a href="#" class="active">ansen quist diam nibh lacus</a>
                            <div class="active">Tab number 1</div>
                            <a href="#">erat alium cras orci magnus nam sit</a>
                            <div>Tab number 2</div>
                            <a href="#">ligula aeanes quist</a>
                            <div>Tab number 3</div>
                            <a href="#">odio mollus cursus penant maecasus</a>
                            <div>Tab number 4</div>
                        </div>
                    </div>
                    <div class="featured">
                        <figure><img src="/images/featured.png" width="302" height="151" alt=""></figure>
                        <figure><img src="/images/featured.png" width="302" height="151" alt=""></figure>
                        <figure><img src="/images/featured.png" width="302" height="151" alt=""></figure>
                    </div>
                </div>
            </section>
            <section class="news">
                <div class="lwrap" data-flex="vaxis">
                    <h2 class="hdr">Latest News</h2>
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
                        <div data-flex="stripe">
                            <input type="text" class="input-default" name="" placeholder="Subject">
                            <input type="text" class="input-default" name="" placeholder="Subject">
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
                    <div data-flex="end -center">
                        <span>Socialize With Us</span>
                        <div class="links-social" data-flex="end w">
                            <a href="#"><i class="icon-tw"></i></a>
                            <a href="#"><i class="icon-in"></i></a>
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-fl"></i></a>
                            <a href="#"><i class="icon-net"></i></a>
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