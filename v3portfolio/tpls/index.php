<!DOCTYPE html>
<html lang="en">
    <head>
        <title>V3Portfolio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/reset-elements.css">
        <link rel="stylesheet" href="/css/styles.css">    
    </head>
    <body>
        <header>
            <div class="nav" data-flex="row-center">
                <div class="lwrap">
                    <a href="#" class="logo"><img src="/images/logo.png" width="214" height="114" alt=""></a>
                    <nav class="hlinks links-nav">
                        <a href="#" class="active">home</a>
                        <a href="#">about</a>
                        <a href="#">portfolio</a>
                        <div class="logo-wrap"></div>
                        <a href="#">services</a>
                        <a href="#">blog</a>
                        <a href="#">contact</a>
                    </nav>
                </div>
            </div>
            <div class="header">
                <div class="lwrap" data-flex="col-center-center">
                    <h1>
                        <small>Hello I am Rafi, a</small><br>
                        <span>Graphic adn Web Desinger</span>
                    </h1>
                    <a href="#" class="btn btn-default">Hire Me</a>
                </div> 
            </div>
        </header>
        <div class="lwrap">
            <div class="slider-wrap">
                <div class="btn-wrap prev">
                    <div class="thumb"></div>
                </div>
                <a href="#" class="btn btn-thumb prev"><i class="icon-prev"></i></a>
                <figure data-flex>
                    <img src="/images/slider.png" width="895" height="331" alt="">
                </figure>
                <div class="btn-wrap next">
                    <div class="thumb"></div>
                </div>
                <a href="#" class="btn btn-thumb next"><i class="icon-prev"></i></a>
            </div>
            <div class="content" data-flex="row--between">
                <div>
                    <h2>about me</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean placerat porttitor ligula quis fringilla. Vestibulum viverra justo in dui pellentesque convallis. Vivamus ac ligula felis, et bibendum urna. Mauris vitae mauris quis arcu rhoncus auctor ac eu nibh. Vestibulum volutpat justo sit amet nisi auctor vitae rutrum dui porttitor. </p>
                </div>
                <div>
                    <h2>my services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean placerat porttitor ligula quis fringilla. Vestibulum viverra justo in dui pellentesque convallis. Vivamus ac ligula felis, et bibendum urna. Mauris vitae mauris quis arcu rhoncus auctor ac eu nibh. Vestibulum volutpat justo sit amet nisi auctor vitae rutrum dui porttitor. </p>
                </div>
                <div>
                    <h3>contact me</h3>
                    <address data-flex="col">
                        <a href="mailto:graphicsfuel@gmail.com"><div><i class="icon-mail"></i></div>graphicsfuel@gmail.com</a>
                        <span><div><i class="icon-phone"></i></div>123-456-7890</span>
                        <a href="#"><div><i class="icon-download"></i></div>Download My CV</a>
                    </address>
                    <h3>connect with me</h3>
                    <div class="hlinks links-social">
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-in"></i></a>
                        <a href="#"><i class="icon-fl"></i></a>
                        <a href="#"><i class="icon-db"></i></a>
                    </div>
                </div>
            </div>
        </div>        
        <footer>   
            <div class="footer">
                <div class="lwrap" data-flex="row--between">
                    <div data-flex>
                        <figure data-flex>
                            <img src="/images/cup.png" width="140" height="113" alt="">
                        </figure>
                        <div>
                            <h5>my friends</h5>
                            <div class="links links-default">
                                <a href="#">GraphicsFuel</a>
                                <a href="#">DreamViewStudios</a>
                                <a href="#">MinisiteGraphics</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2>Thank You!</h2>
                        <a href="#" class="btn btn-default">Hire Me</a>
                    </div>
                    <div>
                        <h5>recent post</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <p>Aenean placerat porttitor ligula quis fringilla. </p>
                    </div>
                </div>
            </div>
            <div class="copyright" data-flex="row-center-center">
                <div class="lwrap">
                    <span>Copyright © Portfolio Theme. All Rights Reserved. Designed by GraphicsFuel.com</span>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
        <script src="/js/jquery/plugins/pxgradient-1.0.3.js"></script>
        <script type="text/javascript">
            $(".links-nav a, .footer h2, .header h1 span, .header h1 small").pxgradient({
                step: 1,
                colors: ["cecece", "606060"],
                dir: "y"
            });
            $(".btn-default").pxgradient({
                step: 1,
                colors: ["6d0019", "a70329"],
                dir: "y"
            });
            $(".links-nav a.active").pxgradient({
                step: 1,
                colors: ["e1e1e1", "929292"],
                dir: "y"
            });
        </script>
    </body>
</html>