<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Crimsnite</title>
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
            var LAYOUT_WIDTH = 1021;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class='lwrap'>
                <div data-flex='axis' data-flex-480="vaxis">
                    <a href="#" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="197" height="32" alt="Crimsnite">
                    </a>
                    <nav class='links-nav' data-flex="end w" data-childs="-center center" data-flex-480="center w">
                        <a href='#' class='active'>home</a>
                        <a href='#'>about us</a>
                        <a href='#'>services</a>
                        <a href='#'>products</a>
                        <a href='#'>blog</a>
                        <a href='#'>contact us</a>
                    </nav>
                </div>
            </div>
        </header>
        <div class='lwrap wrap'>
            <div class='banner-wrap'>  
                <div class="banner" data-flex="-center">
                    <div data-flex='col -center'>
                        <figure><img src="/images/slidertitle.png" width="420" height="113" alt=""></figure>
                        <a href='#' class='btn btn-download'>download now</a>
                    </div>
                </div>
            </div>
            <blockquote data-flex='-center center'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu interdum dui. Aliquam turpis mauris, rhoncus et tempus ac, pellentesque quis sem. Nullam a leo arcu, in posuere leo.  </blockquote>
            <div class='content' data-flex='-start between' data-flex-480="vstripe">
                <div class='grid' data-flex='stripe w' data-flex-640="vstripe" data-childs>
                    <article>
                        <div><i class="icon-target"></i></div>
                        <div>
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                            <p>adipiscing elit. Curabitur eu interdum dui. Aliquam turpis mauris, rhoncus et tempus ac, pellentesque quis sem. Nullam a leo arcu, in posuere leo.</p>
                        </div>
                    </article>
                    <article>
                        <div><i class="icon-case"></i></div>
                        <div>
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                            <p>adipiscing elit. Curabitur eu interdum dui. Aliquam turpis mauris, rhoncus et tempus ac, pellentesque quis sem. Nullam a leo arcu, in posuere leo.</p>
                        </div>
                    </article>
                    <article>
                        <div><i class="icon-note"></i></div>
                        <div>
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                            <p>adipiscing elit. Curabitur eu interdum dui. Aliquam turpis mauris, rhoncus et tempus ac, pellentesque quis sem. Nullam a leo arcu, in posuere leo.</p>
                        </div>
                    </article>
                    <article>
                        <div><i class="icon-battery"></i></div>
                        <div>
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                            <p>adipiscing elit. Curabitur eu interdum dui. Aliquam turpis mauris, rhoncus et tempus ac, pellentesque quis sem. Nullam a leo arcu, in posuere leo.</p>
                        </div>
                    </article>
                </div>
                <div class='form-wrap'>
                    <h3 class='hdr' data-flex='-center center'>sign up for free trial</h3>
                    <form action='#' method='post' data-flex='col -center'>
                        <div data-flex="col">
                            <label for='i1'>Your Name</label>
                            <input type='text' name="input" id='i1'>
                            <label for='i2'>Your Email</label>
                            <input type='email'name="input" id='i2'>
                            <label for='i3'>Your Website</label>
                            <input type='url'name="input" id='i3'>
                        </div>                        
                        <a href='#' class='btn btn-download' data-flex="w">download <span> &nbsp;free trial</span></a>
                        <p>We respect your privacy. We do not sell or share your email address.</p>
                    </form>
                </div>
            </div>
            <div class='portfolio-wrap'>
                <h2>Portfolio</h2>
                <div class='portfolio' data-flex='axis w'>
                    <a href='#'><i class="icon-prev"></i></a>
                    <figure><img src="/images/slider1.png" width="232" height="160" alt=""></figure>
                    <figure class="hidden"><img src="/images/slider2.png" width="232" height="160" alt=""></figure>
                    <figure class="hidden-md"><img src="/images/slider3.png" width="232" height="160" alt=""></figure>
                    <figure class="hidden-sm"><img src="/images/slider4.png" width="232" height="160" alt=""></figure>
                    <a href='#'><i class="icon-next"></i></a>
                </div>
                <div data-flex="end"><a href="#" class="more">See All Works ></a></div>
            </div>
        </div>
        <footer>
            <div class='lwrap' data-flex='stripe w' data-flex-480="vstripe">
                <div>
                    <h5>blog updates</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <p>Cras sit amet urna quam. Lorem ipsum dolor sit amet</p>
                    <p>consectetur adipiscing elit. Cras sit amet urna quam</p>
                </div>
                <div>
                    <h5>twitter updates</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <p>Cras sit amet urna quam. Lorem ipsum dolor sit amet</p>
                    <p>consectetur adipiscing elit. Cras sit amet urna quam</p>
                </div>
                <div>
                    <h5>our social network</h5>
                    <div data-flex data-flex-640="vstripe" data-flex-480="stripe">
                        <div class='links-default' data-flex="col -start">
                            <a href='#'>Twitter</a>
                            <a href='#'>Facebook</a>
                            <a href='#'>Linkedin</a>
                            <a href='#'>YouTube</a>
                            <a href='#'>MySpace</a>
                        </div>
                        <address data-flex='col'>
                            <span><span>Email: </span><a href='mailto:info@VideoCreator.com'>info@VideoCreator.com</a></span>
                            <span><span>Telephone: </span><span>123-456-7890</span></span>
                            <span><span>Fax: </span><span>123-456-7890</span></span>
                        </address>
                    </div>
                </div>
            </div>
            <div class='copyright'>
                <div class='lwrap' data-flex='axis' data-flex-640="vaxis">
                    <nav class='links-footer' data-flex="w" data-flex-640="center w">
                        <a href='#' class='active'>home</a>
                        <a href='#'>about us</a>
                        <a href='#'>services</a>
                        <a href='#'>products</a>
                        <a href='#'>blog</a>
                        <a href='#'>contact us</a>
                    </nav>
                    <div data-flex='-center'>
                        <span>copyright&nbsp;&copy;</span>
                        <a href="#" title="Return to the homepage" id="logoalt">
                            <img src="/images/logoalt.png" width="197" height="32" alt="Crimsnite">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>