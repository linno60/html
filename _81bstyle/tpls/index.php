<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bstyle</title>
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
            var LAYOUT_WIDTH = 1000;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col">
        <div>
            <header>
                <div class="lwrap" data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="181" height="29" alt="Bstyle">
                    </a>
                    <nav class="links-nav" data-flex="end w" data-childs="-center center">
                        <a href="#" class="active">Home</a>
                        <a href="#">About Us</a>
                        <a href="#">Blog</a>
                        <a href="#">Contact</a>
                    </nav>
                </div>
            </header>
            <div class="slider-wrap" data-flex="axis">
                <a href="#" data-flex="-center"><i class="icon-prev"></i>Next Article</a>
                <div class="lwrap" data-flex="-center end" data-flex-480="vstripe">
                    <div data-flex="col -center center">
                        <h1>Nullam in arcu ipsum.</h1>
                        <p>Vestibulum sed lorem eget turpis vulputate bibendum ac</p>  
                    </div>
                    <nav class="links-smallmenu" data-flex="col -end" data-flex-480="center w">
                        <a href="#">Aenean ut</a>
                        <a href="#">Erat ac dui sodales</a>
                        <a href="#">Vulputate</a>
                        <a href="#">Ac vel lectus</a>
                    </nav>
                </div>
                <a href="#" data-flex="-center">Previous Article<i class="icon-next"></i></a>
            </div>
            <div class="submenu">
                <div class="lwrap" data-flex="stripe" data-flex-480="vstripe">
                    <nav class="links-submenu" data-flex="w" data-childs="col -center center">
                        <a href="#" title="Proin eu">Proin eu</a>
                        <a href="#" title="Justo mollis ullamcorper">Justo mollis ullamcorper</a>
                        <a href="#" title="Nunc volutpat" class="active">Nunc volutpat</a>
                        <a href="#" title="Pellentesque et nisl">Pellentesque et nisl</a>
                        <a href="#" title="Cras nec">Cras nec</a>
                        <a href="#" title="Etiam feugiat justo">Etiam feugiat justo</a>
                    </nav>
                    <a href="#" class="btn btn-comments">comments<i class="icon-arrowg"></i></a>
                </div>
            </div>
            <div class="lwrap content">
                <article>
                    <hgroup data-flex="axis w">
                        <h2>Proin eu lorem in justo mollis ullamcorper in a neque.</h2>
                        <div class="details" data-flex="-center">
                            <time>21.10.2012</time>
                            <span>Autor: <strong> John Doe</strong></span>
                        </div>
                    </hgroup>
                    <p>Nullam in arcu ipsum. Vestibulum sed lorem eget turpis vulputate bibendum ac in odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean ut erat ac dui sodales vulputate ac vel lectus. Etiam imperdiet, purus sed pharetra consequat, sapien turpis lobortis mi, eu malesuada nibh magna varius quam. </p>
                    <p>Integer ultrices, felis bibendum porttitor tempor, ipsum massa tristique velit, vitae vehicula tortor lacus condimentum massa. Quisque ac leo nulla. Nam pharetra ligula ut magna adipiscing interdum.</p>
                    <div class="review" data-flex="axis">
                        <div data-flex="-center">
                            <span>Review:</span>
                            <img src="/images/stars.png" width="95" height="14" alt="">
                        </div>
                        <a href="#" class="btn btn-more">Read more<i class="icon-arrowb"></i></a>
                    </div>
                </article>
                <article>
                    <hgroup data-flex="axis w">
                        <h2>Aenean in odio tincidunt nunc gravida molestie at ac mi. Ut eget est eget lacus sodales interdum. </h2>
                        <div class="details" data-flex="-center">
                            <time>14.4.2013</time>
                            <span>Autor: <strong> John Doe</strong></span>
                        </div>
                    </hgroup>
                    <p>Proin posuere odio vel risus rutrum molestie. Nullam sodales ullamcorper pretium. Donec at sagittis turpis. Nullam blandit purus et orci dapibus mattis. Nullam tempus nulla eu turpis dapibus in tincidunt ligula aliquet. Pellentesque tincidunt augue non sapien tincidunt sed rhoncus libero lacinia. Sed dapibus erat ut enim molestie vitae faucibus elit hendrerit. Integer fermentum mi vitae diam hendrerit eu imperdiet libero euismod. In non lorem a magna ornare semper. </p>
                    <p>Nullam in arcu ipsum. Vestibulum sed lorem eget turpis vulputate bibendum ac in odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean ut erat ac dui sodales vulputate ac vel lectus. Etiam imperdiet, purus sed pharetra consequat, sapien turpis lobortis mi, eu malesuada nibh magna varius quam. </p>
                    <div class="review" data-flex="axis">
                        <div data-flex="-center">
                            <span>Review:</span>
                            <img src="/images/stars.png" width="95" height="14" alt="">
                        </div>
                        <a href="#" class="btn btn-more">Read more<i class="icon-arrowb"></i></a>
                    </div>
                </article>
            </div>
        </div>
        <footer>
            <div class="footer-top">
                <div class="lwrap" data-flex="-center end">
                    <nav class="links-footer" data-flex="end w">
                        <a href="#">Praesent</a>
                        <a href="#">Mattis faucibus</a>
                        <a href="#">Arcu eu</a>
                        <a href="#">Semper</a>
                    </nav>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="lwrap" data-flex="axis">
                    <div></div>
                    <span>&copy; tempees.com - 2013</span>
                    <a href="#" class="btn btn-contact">contact<i class="icon-mail"></i></a>
                </div>
            </div>   
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>