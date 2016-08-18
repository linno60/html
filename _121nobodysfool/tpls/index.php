<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nobodysfool</title>
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
            var LAYOUT_WIDTH = 980;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col">
        <div>
            <header>  
                <input type="checkbox" id="collapse"> 
                <div class="topbar">                                   
                    <div class="lwrap" data-flex="axis">
                        <div class="links-topbar" data-flex="-center w">
                            <a href="#">Sign Up</a>|
                            <a href="#">Login</a>|
                            <a href="#">RSS Feeds</a>|
                            <a href="#">Archived News</a>
                        </div>
                        <div class="links-social" data-flex="end w">
                            <a href="#" class="linkedin"></a>
                            <a href="#" class="twitter"></a>
                            <a href="#" class="pinterest"></a>
                            <a href="#" class="google-plus"></a>
                            <a href="#" class="rss"></a>
                        </div>  
                        <label for="collapse"></label>
                    </div>
                </div>
                <div class="lwrap">
                    <nav class="links-nav" data-flex="w">
                        <a href="#" class="active">homepage</a>
                        <a href="#">style demo</a>
                        <a href="#">full width</a>
                        <a href="#">dropdown</a>
                        <a href="#">gallery</a>
                        <a href="#">portfolio</a>
                        <a href="#">link text</a>
                        <a href="#">long link text</a>
                    </nav>
                    <div data-flex="between -end w">
                        <a href="/" title="Return to the homepage" id="logo">
                            <img src="/images/logo.png" width="211" height="57" alt="Nobodysfool">
                        </a>
                        <form action="#" method="post" data-flex="end">
                            <input type="search" name="search" placeholder="Search Our Website">
                            <button><span class="btn btn-default">search</span></button>
                        </form>
                    </div>
                </div>                
            </header>
            <section class="slider-wrap">
                <div class="slider lwrap" data-flex="stripe">                   
                    <input name="anchor1" id='slide1-0' type="radio">
                    <input name="anchor1" id='slide1-1' type="radio">
                    <input name="anchor1" id='slide1-2' type="radio">
                    <input name="anchor1" id='slide1-3' type="radio">
                    <input name="anchor1" id='slide1-4' type="radio">
                    <input name="anchor1" id='play1' type="radio" checked>
                    <div class="description" data-flex="col center">
                        <label class="num0">
                            <h2>Your title can be long and descriptive 1</h2>
                            <p>Cursuspenatisaccum ut curabitur nulla tellus tor ames a in curabitur pede. Idet mollisi eros dis orci congue elis et curabitur.</p>
                            <a href="#" class="btn btn-default">read more &raquo;</a>
                        </label>
                        <label class="num1">
                            <h2>Your title can be long and descriptive 2</h2>
                            <p>Cursuspenatisaccum ut curabitur nulla tellus tor ames a in curabitur pede. Idet mollisi eros dis orci congue elis et curabitur.</p>
                            <a href="#" class="btn btn-default">read more &raquo;</a>
                        </label>
                        <label class="num2">
                            <h2>Your title can be long and descriptive 3</h2>
                            <p>Cursuspenatisaccum ut curabitur nulla tellus tor ames a in curabitur pede. Idet mollisi eros dis orci congue elis et curabitur.</p>
                            <a href="#" class="btn btn-default">read more &raquo;</a>
                        </label>
                        <label class="num3">
                            <h2>Your title can be long and descriptive 4</h2>
                            <p>Cursuspenatisaccum ut curabitur nulla tellus tor ames a in curabitur pede. Idet mollisi eros dis orci congue elis et curabitur.</p>
                            <a href="#" class="btn btn-default">read more &raquo;</a>
                        </label>
                        <label class="num4">
                            <h2>Your title can be long and descriptive 5</h2>
                            <p>Cursuspenatisaccum ut curabitur nulla tellus tor ames a in curabitur pede. Idet mollisi eros dis orci congue elis et curabitur.</p>
                            <a href="#" class="btn btn-default">read more &raquo;</a>
                        </label>
                    </div>
                    <div class="slider-pics">
                        <ul>
                            <li><img src="/images/empty.jpg" width="550" height="440" alt=""></li>
                            <li class="num0"><img src="/images/slider1.jpg" width="550" height="440" alt=""></li>
                            <li class="num1"><img src="/images/slider2.jpg" width="550" height="440" alt=""></li>
                            <li class="num2"><img src="/images/slider3.jpg" width="550" height="440" alt=""></li>
                            <li class="num3"><img src="/images/slider4.jpg" width="550" height="440" alt=""></li>
                            <li class="num4"><img src="/images/slider5.jpg" width="550" height="440" alt=""></li>
                        </ul>
                        <div class='bullets' data-flex>
                            <label class='num0' for='slide1-0'></label>
                            <label class='num1' for='slide1-1'></label>
                            <label class='num2' for='slide1-2'></label>
                            <label class='num3' for='slide1-3'></label>
                            <label class='num4' for='slide1-4'></label>
                        </div>
                    </div>
                </div>
            </section>
            <section class="intro lwrap" data-flex="stripe w">
                <div data-flex="between -start">
                    <div data-flex="vaxis">
                        <figure><img src="/images/monitor.png" width="310" height="248" alt=""></figure>
                        <div data-flex="between -end">
                            <div class="arrow bottom-left"></div>
                            <figure><img src="/images/phone.png" width="62" height="114" alt=""></figure>
                            <figure><img src="/images/phoneside.png" width="114" height="62" alt=""></figure>
                        </div>
                    </div>
                    <div data-flex="col center -center">
                        <div class="arrow top-right"></div>
                        <figure><img src="/images/touchpad.png" width="120" height="157" alt=""></figure>
                        <div class="arrow bottom-right"></div>
                    </div>
                </div>
                <div data-flex="stripe w" data-childs="col -center">
                    <article>
                        <figure><img src="/images/imgsm.jpg" width="85" height="80" alt=""></figure>
                        <h5>Vivamuslibero Augue</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. In fringilla massa ut nisi ullamcorper pellentesque.</p>
                    </article>
                    <article>
                        <figure><img src="/images/imgsm.jpg" width="85" height="80" alt=""></figure>
                        <h5>Vivamuslibero Augue</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. In fringilla massa ut nisi ullamcorper pellentesque.</p>
                    </article>
                    <article>
                        <figure><img src="/images/imgsm.jpg" width="85" height="80" alt=""></figure>
                        <h5>Vivamuslibero Augue</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. In fringilla massa ut nisi ullamcorper pellentesque.</p>
                    </article>
                    <article>
                        <figure><img src="/images/imgsm.jpg" width="85" height="80" alt=""></figure>
                        <h5>Vivamuslibero Augue</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. In fringilla massa ut nisi ullamcorper pellentesque.</p>
                    </article>
                </div>
            </section>
            <section class="lwrap">
                <div class="streamer" data-flex="axis">
                    <hgroup>
                        <h1>Lorem ipsum dolor sit amet elit !</h1>
                        <h3>Why not try our services today, you won’t regret your choice !</h3>
                    </hgroup>
                    <a href="#" class="btn btn-lg">contact us today</a>
                </div>
            </section>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe w">
                <div>
                    <h4>about us</h4>
                    <article>
                        <figure><img src="/images/about.jpg" width="215" height="90" alt=""></figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. In fringilla massa ut nisi ullamcorper pellentesque. Quisque non luctus sem. Nullam non magna vel nisi posuere bibendum vitae sed dui.</p>
                        <a href="#" class="read">Read More &raquo;</a>
                    </article>
                </div>
                <div>
                    <h4>quick links</h4>
                    <ul class="links-quick">
                        <li>»<a href="#">Lorem ipsum dolor sit</a></li>
                        <li>»<a href="#">Amet consectetur</a></li>
                        <li>»<a href="#">Praesent vel sem id</a></li>
                        <li>»<a href="#">Curabitur hendrerit est</a></li>
                        <li>»<a href="#">Aliquam eget erat nec sapien</a></li>
                        <li>»<a href="#">Cras id augue nunc</a></li>
                        <li>»<a href="#">In nec justo non</a></li>
                        <li>»<a href="#">Vivamus mollis enim ut</a></li>
                        <li>»<a href="#">Curabitur hendrerit est</a></li>
                        <li>»<a href="#">Sed a null urna</a></li>
                    </ul>
                </div>
                <div>
                    <h4>latest blog posts</h4>
                    <article class="post clearfix">
                        <h6>Post Title</h6>
                        <div><span>Admin</span>,<span>domainname.com</span></div>
                        <time>Friday, 6th April 2000</time>
                        <p>Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet.</p>
                        <a href="#" class="read">Read More &raquo;</a>
                    </article>
                    <article class="post clearfix">
                        <h6>Post Title</h6>
                        <div><span>Admin</span>,<span>domainname.com</span></div>
                        <time>Friday, 6th April 2000</time>
                        <p>Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet.</p>
                        <a href="#" class="read">Read More &raquo;</a>
                    </article>
                </div>
                <div>
                    <h4>contact us</h4>
                    <form action="#" method="post">
                        <input type="text" name="contact" placeholder="Name">
                        <input type="email" name="contact" placeholder="Email">
                        <input type="url" name="contact" placeholder="Subject">
                        <textarea name="contact" placeholder="Message"></textarea>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <div class="lwrap" data-flex="axis">
                    <span>Copyright &copy; 2013 Domain Name - All Rights Reserved</span>
                    <span>Template by OS Templates</span>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>