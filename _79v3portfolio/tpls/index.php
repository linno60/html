<!DOCTYPE html>
<html lang="en">
    <head>
        <title>V3Portfolio</title>
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
            <div class="nav">
                <div class="lwrap">
                    <nav class="links-nav" data-flex="center" data-childs="-center" data-flex-480="center w">
                        <a href="#" class="active"><span>home</span></a>
                        <a href="#"><span>about</span></a>
                        <a href="#"><span>portfolio</span></a>
                        <a href="/" title="Return to the homepage" id="logo"><img src="/images/logo.png" width="120" height="114" alt=""></a>
                        <a href="#"><span>services</span></a>
                        <a href="#"><span>blog</span></a>
                        <a href="#"><span>contact</span></a>
                    </nav>
                </div>
            </div>
            <div class="header">
                <div class="lwrap" data-flex="vaxis">
                    <h2 data-text="Hello I am Rafi, a"><span>Hello I am Rafi, a</span></h2>
                    <h1  data-text="Graphic and Web Desinger"><span>Graphic and Web Desinger</span></h1>
                    <a href="#" class="btn btn-default"><span>Hire Me</span></a>
                </div> 
            </div>
        </header>
        <div class="lwrap wrap">
            <div class="slider-wrap">
                <div class="btn-wrap prev"><div class="thumb"></div></div>
                <a href="#" class="btn btn-thumb prev"><i class="icon-prev"></i></a>
                <figure><img src="/images/slider.png" width="895" height="331" alt=""></figure>
                <div class="btn-wrap next"><div class="thumb"></div></div>
                <a href="#" class="btn btn-thumb next"><i class="icon-prev"></i></a>
            </div>
            <div class="content" data-flex="stripe w" data-flex-480="vstripe">
                <div>
                    <h2>about me</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean placerat porttitor ligula quis fringilla. Vestibulum viverra justo in dui pellentesque convallis. Vivamus ac ligula felis, et bibendum urna. Mauris vitae mauris quis arcu rhoncus auctor ac eu nibh. Vestibulum volutpat justo sit amet nisi auctor vitae rutrum dui porttitor. </p>
                </div>
                <div>
                    <h2>my services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean placerat porttitor ligula quis fringilla. Vestibulum viverra justo in dui pellentesque convallis. Vivamus ac ligula felis, et bibendum urna. Mauris vitae mauris quis arcu rhoncus auctor ac eu nibh. Vestibulum volutpat justo sit amet nisi auctor vitae rutrum dui porttitor. </p>
                </div>
                <div data-flex-480="stripe">
                    <div>
                        <h3>contact me</h3>
                        <address data-flex="col" data-childs="-center">
                            <a href="mailto:graphicsfuel@gmail.com" data-flex="w"><div data-flex="-center"><i class="icon-mail"></i></div>graphicsfuel<wbr>@gmail.com</a>
                            <span><div data-flex="-center"><i class="icon-phone"></i></div>123-456-7890</span>
                            <a href="#"><div data-flex="-center"><i class="icon-download"></i></div>Download My CV</a>
                        </address>
                    </div>
                    <div>
                        <h3>connect with me</h3>
                        <div class="links-social" data-flex="w">
                            <a href="#"><i class="icon-tw"></i></a>
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-in"></i></a>
                            <a href="#"><i class="icon-fl"></i></a>
                            <a href="#"><i class="icon-db"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <footer>   
            <div class="footer">
                <div class="lwrap" data-flex="stripe w" data-flex-480="vstripe">
                    <div data-flex="-start">
                        <figure><img src="/images/cup.png" width="140" height="113" alt=""></figure>
                        <div>
                            <h5>my friends</h5>
                            <div class="links-default" data-flex="col -start">
                                <a href="#">GraphicsFuel</a>
                                <a href="#">DreamViewStudios</a>
                                <a href="#">MinisiteGraphics</a>
                            </div>
                        </div>
                    </div>
                    <div data-flex="col -center">
                        <h2 data-text="Thank You!"><span>Thank You!</span></h2>
                        <a href="#" class="btn btn-default"><span>See My Works</span></a>
                    </div>
                    <div>
                        <h5>recent post</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <p>Aenean placerat porttitor ligula quis fringilla. </p>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="lwrap" data-flex="axis">
                    <span></span>
                    <span>Copyright &copy; Portfolio Theme. All Rights Reserved. Designed by GraphicsFuel.com</span>
                    <a href="#" class="btn btn-anchor"><i class="icon-top"></i></a>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>