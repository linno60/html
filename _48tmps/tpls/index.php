<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TMPS</title>
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
            var LAYOUT_WIDTH = 1190;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="lwrap" data-flex="axis" data-flex-480="vaxis">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="97" height="21" alt="TMPS">
                </a>
                <nav class="links-nav" data-flex="end w" data-childs="-center center" data-flex-480="center w">
                    <a href="#" class="active">home</a>
                    <a href="#">about</a>
                    <a href="#">services</a>
                    <a href="#">portfolio</a>
                    <a href="#">contact</a>
                </nav>
            </div>
        </header>
        <div class="slider">
            <div class="lwrap" data-flex="col end">
                <div data-flex>
                    <a href="#"><i class="icon-prev"></i></a>
                    <a href="#"><i class="icon-next"></i></a>                    
                </div>
                <h1 data-childs="axis">
                    <span>clivuam tinc</span>
                    <span>nunc dignissim risus id metus</span>
                </h1>
                <a href="#">http://wallpaperswide.com/</a> 
            </div>
        </div>
        <div class="services">
            <div class="lwrap" data-flex="stripe" data-childs="-start">
                <article>
                    <div class="lbl lbl-default"><i class="icon-rocket"></i></div>
                    <div>
                        <h3>Aliquam tincidunt</h3>
                        <p>Donec nec justo eget felis facilisis fermen&shy;tum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesq <a href="#" class="more">=> more</a></p>                        
                    </div>
                </article>
                <article>
                    <div class="lbl lbl-default"><i class="icon-shield"></i></div>
                    <div>
                        <h3>cras ornare tristiqu</h3>
                        <p>Jonec nec justo eget felis facilisis fermen&shy;tum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesq <a href="#" class="more">=> more</a></p>
                    </div>
                </article>
                <article>
                    <div class="lbl lbl-default"><i class="icon-grenade"></i> </div>
                    <div>
                        <h3>vivamus vestibulum</h3>
                        <p>Conec nec justo eget felis facilisis fermen&shy;tum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesq <a href="#" class="more">=> more</a></p>
                    </div>
                </article>
            </div>
        </div>
        <div class="lwrap">
            <div class="about" data-flex="-start between">
                <div>
                    <h2>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor sit amet orci. Aenean dignissim pellentesque felis</h2>
                    <h4 class="subtitle">Civamus vestibulum nulla nec ante</h4>
                    <div data-flex="stripe">
                        <article>
                            <h6>Sed egestas anteet </h6>
                            <p>Eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. </p>
                            <a href="#" class="btn btn-default">more</a>
                        </article>
                        <article>
                            <h6>Aenean egestas anteet </h6>
                            <p>Lorem pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. </p>
                            <a href="#" class="btn btn-default">more</a>
                        </article>
                    </div>
                </div>
                <figure><img src="/images/circle.png"></figure>
            </div>
            <div class="subscribe" data-flex="stripe">
                <div class="clearfix">
                    <div class="lbl lbl-alt"><i class="icon-user"></i></div>
                    <h3>Donec nec justo eget</h3>
                    <blockquote>&ldquo; Ede semper est, vitae luctus metus libero eu augue. Morb sipo ipiscing, commodo quis, gravida&nbsp;&nbsp;...&rdquo; <cite> -Kohn Doe / company name</cite></blockquote>
                </div>
                <div>
                    <h3>Morbi vitae luctus</h3>
                    <form action="#" method="post" data-flex="stripe">
                        <input type="email" name="input" placeholder="enter your email id here ...">
                        <button><span class="btn btn-alt">subcribe<i class="icon-arrow"></i></span></button>
                    </form>
                </div>
            </div>
            <div class="info" data-flex="stripe">
                <div>
                    <h3>aliquam tincidunt</h3>
                    <article class="item" data-flex="-start">
                        <figure><img src="/images/img1.png"></figure>
                        <p>Donec nec justo eget felis facilisis fermen&shy;tum. Aliquam porttitor<br><a href="#" class="more"> more&ensp;=></a></p>
                    </article>
                    <article class="item" data-flex="-start">
                        <figure><img src="/images/img2.png"></figure>
                        <p>Donec nec justo eget felis facilisis fermen&shy;tum. Aliquam porttitor<br><a href="#" class="more"> more&ensp;=</a></p>
                    </article>
                    <article class="item" data-flex="-start">
                        <figure><img src="/images/img3.png"></figure>
                        <p>Donec nec justo eget felis facilisis fermen&shy;tum. Aliquam porttitor<br><a href="#" class="more"> more&ensp;=</a></p>
                    </article>                        
                </div>
                <div>
                    <h3>nunc dignissim risu</h3>
                    <form action="#" method="post" data-flex="col">
                        <legend>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus liber</legend>
                        <input type="next" name="input" placeholder="name ...">
                        <input type="next" name="input" placeholder="email ...">
                        <textarea placeholder="your query ..."></textarea>
                        <div><button><span class="btn btn-default">send<i class="icon-arrow"></i></span></button></div>
                    </form>
                </div>
                <div class="contacts">
                    <h3>aliquam tincidunt</h3>
                    <div class="item" data-flex="-start">
                        <i class="icon-address"></i>
                        <div data-flex="col -start">
                            <h5>Address</h5>
                            <address>some block, steet number, city name, country</address>
                        </div>
                    </div>
                    <div class="item" data-flex="-start">
                        <i class="icon-phone"></i>
                        <div data-flex="col -start">
                            <h5>Phone</h5>
                            <span>(000) 777 777 7777</span>
                            <span>(000) 888 888 8888</span>
                        </div>
                    </div>
                    <div class="item" data-flex="-start">
                        <i class="icon-mail"></i>
                        <div data-flex="col -start">
                            <h5>Email us</h5>
                            <a href="mailto:info@sitename.com">info@sitename.com</a>
                            <a href="mailto:sales@sitename.com">sales@sitename.com</a>
                            <a href="mailto:company@sitename.com">company@sitename.com</a>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="axis">
                <div>
                    <nav class="links-footer" data-flex="w">
                        <a href="#">Home</a>/
                        <a href="#">About</a>/
                        <a href="#">Services</a>/
                        <a href="#">Portfolio</a>/
                        <a href="#">Contact</a>
                    </nav>
                    <span class="design">Designed by: <a href="#">www.alltemplateneeds.com</a> / </span>
                    <span class="images"> Images from: <a href="#"> www.wallpaperswide.com</a> / Copyright(c) website name.</span>
                </div>
                <div class="links-social" data-flex="end w" data-childs="-center center">
                    <a href="#"><i class="icon-fb"></i></a>
                    <a href="#"><i class="icon-tw"></i></a>
                    <a href="#"><i class="icon-in"></i></a>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>