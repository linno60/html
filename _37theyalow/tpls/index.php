<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Theyalow</title>
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
            var LAYOUT_WIDTH = 1040;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <section class="lwrap" data-flex="-end between" data-flex-960="axis" data-flex-640="vaxis">
                <div data-flex="-end w"  data-flex-640="vaxis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="317" height="83" alt="Theyalow">    
                    </a>
                    <small>craft by css <a href="#">author.com</a></small>
                </div>
                <nav class="links-nav" data-flex="end" data-childs="-center center">
                    <a href="#"><i class="icon-user"></i>about us</a>
                    <a href="#"><i class="icon-service"></i>services</a>
                    <a href="#"><i class="icon-letter"></i>contact</a>
                </nav>                
            </section>
            <section class="slider" data-flex="axis">                
                <a href="#" class="btn btn-slide"><i class="icon-prev"></i></a>
                <div class="lwrap" data-flex="stripe" data-flex-480="vstripe">
                    <div class="video" data-video="16:9"><iframe src="https://www.youtube.com/embed/hO4UaLG0zY8" frameborder="0" allowfullscreen></iframe></div>
                    <hgroup data-flex="col -center center">
                       <h1>the cool</h1>
                       <h2>the minimal</h2>
                    </hgroup>
                </div>
                <a href="#" class="btn btn-slide"><i class="icon-next"></i></a>
            </section>
        </header>
        <section class="advantages">
            <div class="lwrap" data-flex="stripe" data-childs="col -center center">
                <div>
                    <i class="icon-cloud"></i>
                    <span>better design</span>
                </div>
                <div>
                    <i class="icon-leave"></i>
                    <span>customise</span>
                </div>
                <div>
                    <i class="icon-free"></i>
                    <span>its free</span>
                </div>
            </div>
        </section>
        <section class="banners-wrap">
            <div class="lwrap">
                <h2>lorem ipsum dolor sit amet</h2>
                <div class="banners" data-flex="stripe" data-flex-640="-start" data-flex-480="stripe w">
                    <div data-flex data-flex-640="stripe w">
                        <div class="banners-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci&shy;didunt ut</p>
                            <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <div class="video" data-video="16:9"><iframe src="https://www.youtube.com/embed/b0NHrFNZWh0" frameborder="0" allowfullscreen></iframe></div>
                    </div>
                    <div class="banners-item" data-flex="col -center center">
                        <span data-flex="end">22</span>
                        <i class="icon-twitter"></i>
                        <a href="#"><i class="icon-plus"></i></a>
                    </div>
                </div>
                <time class="lbl lbl-date" data-flex="col">
                    <strong>25</strong>
                    <small>april</small>
                </time>
                <div class="scroll" data-flex></div>
            </div>
        </section>
        <section class="conditions">
            <div class="lwrap">
                <h2>lorem ipsum dolor sit amet</h2>
                <div data-flex="axis" data-flex-640="vstripe">
                    <div class="img-wrap" data-flex="-end between">                        
                        <figure><img src="/images/desktop.png"><div class="lbl lbl-free">its 100% free</div></figure>
                        <figure><img src="/images/table.png"></figure>
                        <figure><img src="/images/smartphone.png"></figure>
                    </div>
                    <ul class="list-default" data-childs>
                        <li>Sed ut perspiciatis unde omnis</li>
                        <li>Lorem upsum dolor sit amet, con&shy;sectetur adipisicing</li>
                        <li>Sed ut perspiciatis unde omnis</li>
                        <li>Lorem ipsum dolor sit amet, con&shy;sectetur adipisicing</li>
                    </ul>
                </div>
            </div>
        </section>
        <footer>
            <section class="lwrap" data-flex="axis w" data-flex-480="vaxis">
                <a href="/" title="Return to the homepage" id="logoalt">
                    <img src="/images/logofooter.png" width="223" height="54" alt="Theyalow">
                </a>
                <span>Designed by <a href="#">cssauthor.com</a></span>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>