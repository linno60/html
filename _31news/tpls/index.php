<!DOCTYPE html>
<html lang="en">
    <head>
        <title>News</title>
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
            var LAYOUT_WIDTH = 682;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <section class="topbar">
                <div class="lwrap" data-flex="axis">
                    <p>Having trouble viewing this email?<a href="#"> View it in your browser</a></p>
                    <div class="links-top" data-flex="end w">
                        <a href="#">Online version</a>
                        <a href="#">Forwrd to a Friend</a>
                    </div>
                </div>
            </section>
            <section class="header">
                <div class="lwrap" data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="236" height="45" alt="News">
                    </a>
                    <time>January 16</time>
                </div>
            </section>
        </header>
        <section class="featured">
            <div class="lwrap">
                <figure><img src="/images/img.png"></figure>
                <h1>Featured Title Goes Right Here Like This</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                <a href="#" class="btn btn-start">Get Started</a>
                <a href="#" class="btn btn-default">Online Demo</a>
            </div>
        </section>
        <section class="lwrap" data-flex="stripe" data-flex-480="vstripe">
            <div class="content">  
                <article>
                    <h2>Heading Title Goes Right Here</h2>
                    <div class="clearfix">
                        <figure><img src="/images/img3.png"></figure>
                        <span>Lorem ipsum dolor sit amet, con&shy;sectetur adipisicing elit</span>
                        <p>Dor do eiusmod tempor incididunt ut laboreLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        <a href="#" class="more">Read More</a> 
                    </div>
                </article>                
                <article>  
                    <h2>Successful Email Marketing Template</h2>
                    <figure><img src="/images/img4.png"></figure>                   
                    <p>Dor do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod donec id lectus malesuada magna mollis lacinia ac sed tellus.</p>
                    <a href="#" class="more">Read More</a> 
                </article>                
                <article>
                    <h2>Email Template That Stands Out From The Crowd</h2>
                    <div class="clearfix">
                        <figure><img src="/images/img3.png"></figure>
                        <span>Lorem ipsum dolor sit amet, con&shy;sectetur adipisicing elit</span>
                        <p>Dor do eiusmod tempor incididunt ut laboreLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        <a href="#" class="more">Read More</a>   
                    </div>          
                </article>
            </div>
            <aside class="sidebar">
                <div>
                    <h2>Sidebar List</h2>
                    <span>Quisque vitae ligula arcu, in dona  eu rutrum magna.</span> 
                    <ul class="links-default">
                        <li><a href="#">Lorem lipsum dolor</a></li>
                        <li><a href="#">Etiam in diam lacus in amet</a></li>
                        <li><a href="#">Praesent lobortis enim nec</a></li>
                        <li><a href="#">Quisque eget sapien dolor</a></li>
                        <li><a href="#">Cras non nisl diam male</a></li>
                        <li><a href="#">Etiam in diam lacus felis.</a></li>
                    </ul>
                </div>
                <article>
                    <h2>Sidebar Widget</h2>
                    <figure><img src="/images/img5.png"></figure>
                    <p>Quisque igula arcu, in rutrum magna. Ut varius imperdiet dor nor lorem ipsum dolor sit am et, consectetur adipiscing elit.</p>
                    <a href="#" class="more">View Latest Products</a>
                </article>
                <div>
                    <h2>Advertisement</h2>
                    <div class="advertisement" data-flex="stripe w">
                        <figure><img src="/images/img1.png"></figure>
                        <figure><img src="/images/img2.png"></figure>
                    </div>  
                </div>
            </aside>
        </section>
        <footer>
            <section class="lwrap" data-flex="axis">
                <a href="/" title="Return to the homepage" id="logoalt">
                    <img src="/images/logo-alt.png" width="235" height="45" alt="News">
                </a>
                <div data-flex="end w" class="links-social">
                    <a href="#"><i class="icon-fb"></i></a>
                    <a href="#"><i class="icon-in"></i></a>
                    <a href="#"><i class="icon-tw"></i></a>
                    <a href="#"><i class="icon-mail"></i></a>
                    <a href="#"><i class="icon-gp"></i></a>
                    <a href="#"><i class="icon-yt"></i></a>
                </div>
            </section>
            <section class="copyright">
                <div class="lwrap" data-flex="-center center">
                    <p>This daily newsletter was sent to johndoe@sitename.com from Company Name because you subscribed. Rather not receive our newsletter anymore? <a href="#">Unsubscribe instantly</a></p>
                </div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>