<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vcreator</title>
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
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth/LAYOUT_WIDTH+'px' : '1px';
            window.onresize = function() {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth/LAYOUT_WIDTH+'px' : '1px';
            }
        </script>
    </head>
    <body>
         <div class="lwrap">
            <header class="header" data-flex="stripe">
                <div data-flex="-center">
                    <a href="#" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="106" height="45" alt="Vcreator">
                    </a>
                </div>
                <div data-flex="-end" data-flex-640="-center">
                    <nav class="links-nav" data-flex="end w">
                        <a href="#" class="active">home</a>
                        <a href="#">services</a>
                        <a href="#">company</a>
                        <a href="#">portfolio</a>
                        <a href="#">pricing</a>
                        <a href="#">contact us</a>
                    </nav>
                </div>
            </header>
            <div class="demo-wrap" data-flex="axis" data-flex-640="vstripe r">
                <div data-flex-640="vaxis">
                    <h1>best online video creator</h1>
                    <a href="#" class="btn btn-default">see demo</a>
                </div>
                <div class="video-wrap">
                    <figure data-video="16:9"><iframe src="https://www.youtube.com/embed/yKNxeF4KMsY" width="340" height="259" frameborder="0" allowfullscreen></iframe></figure>
                </div>
            </div>
            <div data-flex data-flex-640="vstripe">
                <div class="content">
                    <div class="articles" data-flex="stripe" data-flex-480="vstripe">
                        <article>
                            <h3 class="title" data-flex="-center">text heading goes here</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet urna quam. Nullam est ligula, vestibulum convallis placerat in, dictum in nibh. Phasellus eget augue ac diam bibendum aliquet at ut tortor. Vivamus sit amet ante at ligula scelerisque sodales. Donec adipiscing fermentum metus, quis viverra felis rutrum vitae. Pellentesque tincidunt tincidunt fringilla.</p>
                        </article> 
                        <article>
                            <h3 class="title" data-flex="-center">text heading goes here</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet urna quam. Nullam est ligula, vestibulum convallis placerat in, dictum in nibh. Phasellus eget augue ac diam bibendum aliquet at ut tortor. Vivamus sit amet ante at ligula scelerisque sodales. Donec adipiscing fermentum metus, quis viverra felis rutrum vitae. Pellentesque tincidunt tincidunt fringilla.</p>
                        </article> 
                    </div>
                    <div class="grid" data-flex="stripe w" data-flex-480="vstripe" data-childs-480="-start">
                        <article>
                            <figure data-flex><img src="/images/img1.png" width="181" height="185" alt=""></figure>
                            <div data-flex="col -start">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet urna quam.</p>
                                <a href="#" class="more">Read More</a>
                            </div>
                        </article>
                        <article>
                            <figure data-flex><img src="/images/img2.png" width="181" height="185" alt=""></figure>
                            <div data-flex="col -start">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet urna quam.</p>
                                <a href="#" class="more">Read More</a>
                            </div>
                        </article>
                        <article>
                            <figure data-flex><img src="/images/img3.png" width="181" height="185" alt=""></figure>
                            <div data-flex="col -start">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet urna quam.</p>
                                <a href="#" class="more">Read More</a>
                            </div>
                        </article>
                    </div>
                </div>
                <aside class="sidebar">
                    <div>
                        <h3 class="title" data-flex="-center">featured video</h3>
                        <figure class="video" data-video="16:9"><iframe src="https://www.youtube.com/embed/yKNxeF4KMsY" frameborder="0" allowfullscreen></iframe></figure>
                    </div>
                    <div>
                        <h3 class="title" data-flex="-center">testimonials</h3>
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet urna quam. Nullam est ligula, vestibulum convallis placerat in, dictum in nibh. Phasellus eget augue ac diam bibendum aliquet at ut tortor. Vivamus sit amet ante at ligula scelerisque sodales. </p>
                            <cite>Rafi, <a href="#">GraphicsFuel.com</a></cite>
                        </blockquote>
                    </div>
                    <div>
                        <h3 class="title" data-flex="-center">clients</h3>
                        <figure><img src="/images/img4.png" width="253" height="82" alt=""></figure>
                    </div>
                </aside>                
            </div>
            <div class="banner" data-flex="axis">
                <h2>best online video creator</h2>
                <a href="#" class="btn btn-default">see demo</a>
                <a href="#" class="btn btn-default">see pricing</a>
            </div>
            <footer>
                <div class="footer" data-flex="around" data-flex-640="vstripe">
                    <div>
                        <h5>blog updates</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet urna quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet urna quam.  </p>
                        <a href="#" class="more">Read More</a>
                    </div>
                    <div>
                        <h5>twitter updates</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet urna quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet urna quam.  </p>
                        <a href="#" class="more">Read More</a>
                    </div>
                    <div>
                        <h5>our social network</h5>
                        <div data-flex="stripe" data-flex-640="start">
                            <div class='links-default' data-flex="col -start">
                                <a href='#'>Twitter</a>
                                <a href='#'>Facebook</a>
                                <a href='#'>Linkedin</a>
                                <a href='#'>YouTube</a>
                                <a href='#'>MySpace</a>
                            </div>
                            <div data-flex="col">
                                <span>Email: <a href="mailto:info@VideoCreator.com">info@VideoCreator.com</a></span>
                                <span>Telephone: <span>123-456-7890</span></span>
                                <span>Fax: <span>123-456-7890</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright" data-flex="axis w" data-flex-640="col -center">
                    <div class="links-footer" data-flex="center w">
                        <a href="#">Home</a>
                        <a href="#">Services</a>
                        <a href="#">Company</a>
                        <a href="#">Portfolio</a>
                        <a href="#">Pricing</a>
                        <a href="#">Contact Us</a>
                    </div>
                    <span>Copyright &copy; All rights reserved</span>
                </div>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>