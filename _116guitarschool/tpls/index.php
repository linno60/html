<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Guitar School</title>
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
            var LAYOUT_WIDTH = 1200;
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
                        <img src="/images/logo.png" width="167" height="65" alt="Guitar School">
                    </a>
                    <div class="contacts" data-flex="end w" data-childs="center -center">
                        <div>
                            <i class="icon-skype"></i>
                            <a href="#">guitarlessons</a>
                        </div>
                        <div>
                            <i class="icon-phone"></i>
                            <a href="tel: 013 045 608 65">013 045 608 65</a>
                        </div>
                        <div class="links-socialhdr" data-flex="end -center w">
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-tw"></i></a>
                            <a href="#"><i class="icon-gp"></i></a>
                            <a href="#"><i class="icon-rss"></i></a>
                        </div>
                    </div>
                </div>
                <div class="nav">
                    <nav class="links-nav lwrap" data-flex="stripe w" data-childs="center -center">
                        <a href="#" class="active">home</a>
                        <a href="#">about us</a>
                        <a href="#">les&shy;sons</a>
                        <a href="#">port&shy;folio</a>
                        <a href="#">blog</a>
                        <a href="#">con&shy;tact</a>
                    </nav>
                </div> 
            </header> 
            <section class='slider-main'>
                <input name="anchor1" id='slide1-0' class="num0" type="radio">
                <input name="anchor1" id='slide1-1' class="num1" type="radio">
                <input name="anchor1" id='slide1-2' class="num2" type="radio">
                <input name="anchor1" id='play1' class="play" type="radio" checked>
                <ul>
                    <li><img src="/images/img1.jpg" width="1903" height="863" alt=""></li>
                    <li class='num0'><img src="/images/img1.jpg" width="1903" height="863" alt=""></li>
                    <li class='num1'><img src="/images/img12.jpg" width="1903" height="863" alt=""></li>
                    <li class='num2'><img src="/images/img13.jpg" width="1903" height="863" alt=""></li>
                </ul>
                <div class='description lwrap' data-childs="col -end">
                    <label class='num0' for='pause29-0'>
                        <big>check our video</big>
                        <small>learning in 6 weeks</small>
                        <figure data-video="16:9"><iframe width="560" height="315" src="https://www.youtube.com/embed/6Kbv1OpIpaA" frameborder="0" allowfullscreen></iframe></figure>
                    </label>
                    <label class='num1' for='pause29-1'>
                        <big>check your video</big>
                        <small>learning in 7 weeks</small>
                        <figure data-video="16:9"><iframe width="560" height="315" src="https://www.youtube.com/embed/hRUy-D0JU2I" frameborder="0" allowfullscreen></iframe></figure>
                    </label>
                    <label class='num2' for='pause29-2'>
                        <big>check their video</big>
                        <small>learning in 8 weeks</small>
                        <figure data-video="16:9"><iframe width="560" height="315" src="https://www.youtube.com/embed/ssr92rJOI98" frameborder="0" allowfullscreen></iframe></figure>
                    </label>
                </div>
                <div class="nav-slider vrt white" data-flex="vaxis">
                    <div class='arrowprev'>
                        <label class='num0' for='slide1-0'></label>
                        <label class='num1' for='slide1-1'></label>
                        <label class='num2' for='slide1-2'></label>
                    </div>
                    <div class='bullets' data-flex="vaxis">
                        <label class='num0' for='slide1-0'></label>
                        <label class='num1' for='slide1-1'></label>
                        <label class='num2' for='slide1-2'></label>
                    </div>
                    <div class='arrownext'>
                        <label class='num0' for='slide1-0'></label>
                        <label class='num1' for='slide1-1'></label>
                        <label class='num2' for='slide1-2'></label>
                    </div>
                </div> 
                <a href="#" class="wave"><div></div></a>
            </section>
            <section class="lwrap services-wrap">
                <h2 class="hdr">services</h2>
                <hr class="hr">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</p>
                <div class="services-items" data-flex="stripe w" data-flex-640="around w">
                    <div>
                        <div class="lbl lbl-circle"><i class="icon-microphone"></i></div>
                        <h4>recording services</h4>
                        <hr class="hr">
                    </div>
                    <div>
                        <div class="lbl lbl-circle"><i class="icon-note"></i></div>
                        <h4>you get the certificate</h4>
                        <hr class="hr">
                    </div>
                    <div>
                        <div class="lbl lbl-circle"><i class="icon-camera"></i></div>
                        <h4>all lessons are via skype</h4>
                        <hr class="hr">
                    </div>
                </div>
            </section>
            <section class="lessons">
                <div class="lwrap">
                    <hgroup>
                        <h2>our lessons</h2>
                        <h3>are easy</h3>
                    </hgroup>
                    <ul class="list-lessons">
                        <li><span data-flex><i class="icon-stack"></i>Lorem ipsum dolor sit amet, con&shy;sectetur adipi&shy;scing elit.</span></li>
                        <li><span data-flex><i class="icon-globe"></i>Lorem ipsum dolor sit amet, con&shy;sectetur adipi&shy;scing elit.</span></li>
                        <li><span data-flex><i class="icon-rocket"></i>Lorem ipsum dolor sit amet, con&shy;sectetur adipi&shy;scing elit.</span></li>
                        <li><span data-flex><i class="icon-sound"></i>Lorem ipsum dolor sit amet, con&shy;sectetur adipi&shy;scing elit.</span></li>
                    </ul>
                </div>
            </section>
            <section class="projects-wrap">
                <div class="lwrap">
                    <h2 class="hdr">our projects</h2>
                    <hr class="hr">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</p>
                </div>
                <div class="project-main">
                    <div class="lwrap clearfix" data-flex-480="col">
                        <a href="#" class="btn btn-close"></a>
                        <div class="slider-project" data-flex="vaxis">
                            <input name="anchor2" id='slide2-0' class="num0" type="radio">
                            <input name="anchor2" id='slide2-1' class="num1" type="radio">
                            <input name="anchor2" id='slide2-2' class="num2" type="radio">
                            <input name="anchor2" id='play2' class="play" type="radio" checked>
                            <ul>
                                <li><img src="/images/img2.jpg" width="770" height="569" alt=""></li>
                                <li class='num0'><img src="/images/img2.jpg" width="770" height="569" alt=""></li>
                                <li class='num1'><img src="/images/img21.jpg" width="770" height="569" alt=""></li>
                                <li class='num2'><img src="/images/img22.jpg" width="770" height="569" alt=""></li>
                            </ul>
                            <div class="nav-slider hrz grey" data-flex="axis">
                                <div class='arrowprev'>
                                    <label class='num0' for='slide2-0'></label>
                                    <label class='num1' for='slide2-1'></label>
                                    <label class='num2' for='slide2-2'></label>
                                </div>
                                <div class='bullets' data-flex="axis">
                                    <label class='num0' for='slide2-0'></label>
                                    <label class='num1' for='slide2-1'></label>
                                    <label class='num2' for='slide2-2'></label>
                                </div>
                                <div class='arrownext'>
                                    <label class='num0' for='slide2-0'></label>
                                    <label class='num1' for='slide2-1'></label>
                                    <label class='num2' for='slide2-2'></label>
                                </div>
                            </div>
                        </div>
                        <article>
                            <div>
                                <div data-flex="-start between w">
                                    <a href="#" class="link">shows</a>
                                    <time  datetime="2015-08-21">21-08-2015</time>
                                </div>
                                <h3>lorem ipsum dolor sit amet, consec tetur adipiscing elit.</h3>
                                <hr class="hr">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</p>
                                <a href="#" class="btn btn-default alt">go to project</a>
                            </div>
                            <div class="links-share" data-flex="-center w">
                                <span>share:</span>
                                <a href="#"><i class="icon-sharefb"></i></a>
                                <a href="#"><i class="icon-sharetw"></i></a>
                                <a href="#"><i class="icon-sharegp"></i></a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="lwrap">
                    <div class="slider-gallery">
                        <input name="anchor3" id='slide3-0' class="num0" type="radio">
                        <input name="anchor3" id='slide3-1' class="num1" type="radio">
                        <input name="anchor3" id='slide3-2' class="num2" type="radio">
                        <input name="anchor3" id='play3' class="play" type="radio" checked>
                        <ul data-childs="stripe">
                            <li>
                                <figure><a href="#" class="link alt">music</a><img src="/images/img3.jpg" width="370" height="370" alt=""></figure>
                                <div data-flex="vstripe">
                                    <figure><a href="#" class="link alt">rock</a><img src="/images/img4.jpg" width="272" height="170" alt=""></figure>
                                    <figure><a href="#" class="link alt">shows</a><img src="/images/img4.jpg" width="272" height="170" alt=""></figure>
                                </div>
                                <figure><a href="#" class="link alt">lessons</a><img src="/images/img5.jpg" width="470" height="370" alt=""></figure>
                            </li>
                            <li class="num0">
                                <figure><a href="#" class="link alt">music</a><img src="/images/img3.jpg" width="370" height="370" alt=""></figure>
                                <div data-flex="vstripe">
                                    <figure><a href="#" class="link alt">rock</a><img src="/images/img4.jpg" width="272" height="170" alt=""></figure>
                                    <figure><a href="#" class="link alt">shows</a><img src="/images/img4.jpg" width="272" height="170" alt=""></figure>
                                </div>
                                <figure><a href="#" class="link alt">lessons</a><img src="/images/img5.jpg" width="470" height="370" alt=""></figure>
                            </li>
                            <li class="num1">
                                <figure><a href="#" class="link alt">music</a><img src="/images/img3.jpg" width="370" height="370" alt=""></figure>
                                <div data-flex="vstripe">
                                    <figure><a href="#" class="link alt">rock</a><img src="/images/img41.jpg" width="272" height="170" alt=""></figure>
                                    <figure><a href="#" class="link alt">shows</a><img src="/images/img41.jpg" width="272" height="170" alt=""></figure>
                                </div>
                                <figure><a href="#" class="link alt">lessons</a><img src="/images/img51.jpg" width="470" height="370" alt=""></figure>
                            </li>
                            <li class="num2">
                                <figure><a href="#" class="link alt">music</a><img src="/images/img3.jpg" width="370" height="370" alt=""></figure>
                                <div data-flex="vstripe">
                                    <figure><a href="#" class="link alt">rock</a><img src="/images/img42.jpg" width="272" height="170" alt=""></figure>
                                    <figure><a href="#" class="link alt">shows</a><img src="/images/img42.jpg" width="272" height="170" alt=""></figure>
                                </div>
                                <figure><a href="#" class="link alt">lessons</a><img src="/images/img52.jpg" width="470" height="370" alt=""></figure>
                            </li>
                        </ul>
                        <div class="nav-slider" data-flex="end">
                            <div class='arrowprev btns'>
                                <label class='num0' for='slide3-0'></label>
                                <label class='num1' for='slide3-1'></label>
                                <label class='num2' for='slide3-2'></label>
                            </div>
                            <div class='arrownext btns'>
                                <label class='num0' for='slide3-0'></label>
                                <label class='num1' for='slide3-1'></label>
                                <label class='num2' for='slide3-2'></label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="action">
                <div class="lwrap" data-flex="axis w">
                    <div data-flex="-center">
                        <i class="icon-skypelogo"></i>
                        <span>
                            <strong>call us on skype!</strong><br>
                            <small>and learn how to play guitar</small>
                        </span>
                    </div>
                    <div data-flex="end w" data-flex-480="around w">
                        <a href="#" class="btn btn-default alt">more details</a>
                        <a href="#" class="btn btn-default alt">choose your plan</a>
                    </div>
                </div>
            </section>
            <section class="news lwrap" data-flex="vaxis">
                <article>
                    <h3 class="hdr">latest news</h3>
                    <hr class="hr">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</p>
                </article>
                <div data-flex="between -start">
                    <article class="news-main">
                        <figure>
                            <img src="/images/img6.jpg" width="570" height="187" alt="">
                            <div data-flex="col -end">
                                <div class="lbl lbl-default"><i class="icon-comments"></i><span>19</span></div>
                                <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>23</span> / <span>09</span></time></div>
                            </div>
                        </figure>
                        <div>
                            <h4>lorem ipsum dolor sit amet, consectetur adipiscing elit sit amet, consectetur adipiscing.</h4>
                            <hr class="hr">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis elit et elit interdum semper vel nec diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis elit et elit interdum semper vel nec diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                            <div data-flex="stripe">
                                <a href="#" class="link">guitar lessons</a>
                                <a href="#"><i class="icon-circlenext"></i></a>
                            </div>
                        </div>
                    </article>
                    <div class="slider-news" data-flex="axis">
                        <input name="anchor4" id='slide4-0' class="num0" type="radio">
                        <input name="anchor4" id='slide4-1' class="num1" type="radio">
                        <input name="anchor4" id='slide4-2' class="num2" type="radio">
                        <input name="anchor4" id='play4' class="play" type="radio" checked>
                        <ul>
                            <li data-childs="between -start">
                                <article>
                                    <figure><img src="/images/img7.jpg" width="170" height="125" alt=""></figure>
                                    <div>
                                        <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                        <a href="#" class="link">guitar lessons</a>
                                    </div>
                                    <div data-flex="col -end">
                                        <div class="lbl lbl-default"><i class="icon-comments"></i><span>8</span></div>
                                        <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>06</span> / <span>09</span></time></div>
                                    </div>
                                </article>
                                <article>
                                    <figure><img src="/images/img7.jpg" width="170" height="125" alt=""></figure>
                                    <div>
                                        <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                        <a href="#" class="link">guitar lessons</a>
                                    </div>
                                    <div data-flex="col -end">
                                        <div class="lbl lbl-default"><i class="icon-comments"></i><span>8</span></div>
                                        <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>02</span> / <span>09</span></time></div>
                                    </div>
                                </article>
                                <article>
                                    <figure><img src="/images/img7.jpg" width="170" height="125" alt=""></figure>
                                    <div>
                                        <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                        <a href="#" class="link">guitar lessons</a>
                                    </div>
                                    <div data-flex="col -end">
                                        <div class="lbl lbl-default"><i class="icon-comments"></i><span>8</span></div>
                                        <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>06</span> / <span>09</span></time></div>
                                    </div>
                                </article>
                            </li>
                            <li class='num0' data-childs="between -start">
                                <article>
                                    <figure><img src="/images/img7.jpg" width="170" height="125" alt=""></figure>
                                    <div>
                                        <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                        <a href="#" class="link">guitar lessons</a>
                                    </div>
                                    <div data-flex="col -end">
                                        <div class="lbl lbl-default"><i class="icon-comments"></i><span>8</span></div>
                                        <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>06</span> / <span>09</span></time></div>
                                    </div>
                                </article>
                                <article>
                                    <figure><img src="/images/img7.jpg" width="170" height="125" alt=""></figure>
                                    <div>
                                        <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                        <a href="#" class="link">guitar lessons</a>
                                    </div>
                                    <div data-flex="col -end">
                                        <div class="lbl lbl-default"><i class="icon-comments"></i><span>8</span></div>
                                        <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>02</span> / <span>09</span></time></div>
                                    </div>
                                </article>
                                <article>
                                    <figure><img src="/images/img7.jpg" width="170" height="125" alt=""></figure>
                                    <div>
                                        <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                        <a href="#" class="link">guitar lessons</a>
                                    </div>
                                    <div data-flex="col -end">
                                        <div class="lbl lbl-default"><i class="icon-comments"></i><span>8</span></div>
                                        <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>06</span> / <span>09</span></time></div>
                                    </div>
                                </article>
                            </li>
                            <li class='num1' data-childs="between -start">
                                <article>
                                    <figure><img src="/images/img72.jpg" width="170" height="125" alt=""></figure>
                                    <div>
                                        <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                        <a href="#" class="link">guitar lessons</a>
                                    </div>
                                    <div data-flex="col -end">
                                        <div class="lbl lbl-default"><i class="icon-comments"></i><span>8</span></div>
                                        <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>06</span> / <span>09</span></time></div>
                                    </div>
                                </article>
                                <article>
                                    <figure><img src="/images/img72.jpg" width="170" height="125" alt=""></figure>
                                    <div>
                                        <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                        <a href="#" class="link">guitar lessons</a>
                                    </div>
                                    <div data-flex="col -end">
                                        <div class="lbl lbl-default"><i class="icon-comments"></i><span>8</span></div>
                                        <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>02</span> / <span>09</span></time></div>
                                    </div>
                                </article>
                                <article>
                                    <figure><img src="/images/img72.jpg" width="170" height="125" alt=""></figure>
                                    <div>
                                        <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                        <a href="#" class="link">guitar lessons</a>
                                    </div>
                                    <div data-flex="col -end">
                                        <div class="lbl lbl-default"><i class="icon-comments"></i><span>8</span></div>
                                        <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>06</span> / <span>09</span></time></div>
                                    </div>
                                </article>
                            </li>
                            <li class='num2' data-childs="between -start">
                                <article>
                                    <figure><img src="/images/img73.jpg" width="170" height="125" alt=""></figure>
                                    <div>
                                        <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                        <a href="#" class="link">guitar lessons</a>
                                    </div>
                                    <div data-flex="col -end">
                                        <div class="lbl lbl-default"><i class="icon-comments"></i><span>8</span></div>
                                        <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>06</span> / <span>09</span></time></div>
                                    </div>
                                </article>
                                <article>
                                    <figure><img src="/images/img73.jpg" width="170" height="125" alt=""></figure>
                                    <div>
                                        <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                        <a href="#" class="link">guitar lessons</a>
                                    </div>
                                    <div data-flex="col -end">
                                        <div class="lbl lbl-default"><i class="icon-comments"></i><span>8</span></div>
                                        <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>02</span> / <span>09</span></time></div>
                                    </div>
                                </article>
                                <article>
                                    <figure><img src="/images/img73.jpg" width="170" height="125" alt=""></figure>
                                    <div>
                                        <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                        <a href="#" class="link">guitar lessons</a>
                                    </div>
                                    <div data-flex="col -end">
                                        <div class="lbl lbl-default"><i class="icon-comments"></i><span>8</span></div>
                                        <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>06</span> / <span>09</span></time></div>
                                    </div>
                                </article>                                    
                            </li>
                        </ul>
                        <div class="nav-slider vrt grey" data-flex="vaxis">
                            <div class='arrowprev'>
                                <label class='num0' for='slide4-0'></label>
                                <label class='num1' for='slide4-1'></label>
                                <label class='num2' for='slide4-2'></label>
                            </div>
                            <div class='bullets' data-flex="vaxis">
                                <label class='num0' for='slide4-0'></label>
                                <label class='num1' for='slide4-1'></label>
                                <label class='num2' for='slide4-2'></label>
                            </div>
                            <div class='arrownext'>
                                <label class='num0' for='slide4-0'></label>
                                <label class='num1' for='slide4-1'></label>
                                <label class='num2' for='slide4-2'></label>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-default">all articles</a>
            </section>
            <section class="testimonials">
                <div class="lwrap">
                    <hgroup>
                        <h2 class="hdr">testimonials</h2>
                        <hr class="hr">
                    </hgroup>
                    <div class="slider-cites" data-flex="axis">
                        <input name="anchor5" id='slide5-0' class="num0" type="radio">
                        <input name="anchor5" id='slide5-1' class="num1" type="radio">
                        <input name="anchor5" id='slide5-2' class="num2" type="radio">
                        <input name="anchor5" id='play5' class="play" type="radio" checked>
                        <div class='arrowprev btns'>
                            <label class='num0' for='slide5-0'></label>
                            <label class='num1' for='slide5-1'></label>
                            <label class='num2' for='slide5-2'></label>
                        </div>
                        <ul data-childs="vaxis">
                            <li>
                                <figure><img src="/images/photo.jpg" width="168" height="168" alt=""></figure>
                                <blockquote data-flex="vaxis">
                                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</q>
                                    <cite data-flex="vaxis">
                                        <strong>Andreea Koronikova</strong>
                                        <small>Music Teacher</small>
                                    </cite>
                                </blockquote> 
                            </li>
                            <li class="num0">
                                <figure><img src="/images/photo.jpg" width="168" height="168" alt=""></figure>
                                <blockquote data-flex="vaxis">
                                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</q>
                                    <cite data-flex="vaxis">
                                        <strong>Andreea Koronikova</strong>
                                        <small>Music Teacher</small>
                                    </cite>
                                </blockquote> 
                            </li>
                            <li class="num1">
                                <figure><img src="/images/photo2.jpg" width="168" height="168" alt=""></figure>
                                <blockquote data-flex="vaxis">
                                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</q>
                                    <cite data-flex="vaxis">
                                        <strong>Andreea Koronikova</strong>
                                        <small>Music Teacher</small>
                                    </cite>
                                </blockquote> 
                            </li>
                            <li class="num2">
                                <figure><img src="/images/photo3.jpg" width="168" height="168" alt=""></figure>
                                <blockquote data-flex="vaxis">
                                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</q>
                                    <cite data-flex="vaxis">
                                        <strong>Andreea Koronikova</strong>
                                        <small>Music Teacher</small>
                                    </cite>
                                </blockquote> 
                            </li>
                        </ul>
                        <div class='arrownext btns'>
                            <label class='num0' for='slide5-0'></label>
                            <label class='num1' for='slide5-1'></label>
                            <label class='num2' for='slide5-2'></label>
                        </div>
                    </div>
                    <div class="wave"><div></div></div>
                </div>
            </section>
            <section class="map">
                <div class="message clearfix">
                    <i class="icon-logosm"></i>
                    <h6>address</h6>
                    <address>Greenplatz Ben 29, Germany<br> 60435 Frankfurt am Main</address>
                    <a href="#"><i class="icon-close"></i></a>
                    <span></span>
                </div>
                <figure><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8505.038451901682!2d43.965580613990085!3d26.328825230878778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1436953049202"></iframe></figure>
            </section>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe w">
                <div>
                    <i class="icon-logosm"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. </p>
                    <p>Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</p>
                </div>
                <div>
                    <h4>contact</h4>
                    <hr class="hr">
                    <ul data-childs>
                        <li><i class="icon-mail"></i><a href="mailto: info@guitarlessons.com">info@guitarlessons.com</a></li>
                        <li><i class="icon-phone"></i><span>0123 456 789 0112</span></li>
                        <li><i class="icon-loc"></i><address>Greenplatz Ben 29, Germany 60435</address></li>
                        <li><i class="icon-fax"></i><span>(0012) 654 356 445</span></li>
                    </ul>
                </div>
                <div>
                    <h4>latest news</h4>
                    <hr class="hr">
                    <article>
                        <time>02.08.2015</time>
                        <h6><a href="#">etiam tempor odio tellus.</a></h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus.</p>
                    </article>
                    <article>
                        <time>02.08.2015</time>
                        <h6><a href="#">etiam tempor odio tellus.</a></h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus.</p>
                    </article>
                </div>
            </div>
            <div class="copyright">
                <div class="lwrap" data-flex="axis w">
                    <span>&copy; Copyright 2015 Guitar. All rights reserved.</span>
                    <div class="links-socialftr" data-flex="end -center w">
                        <a href="#"><i class="icon-fbft"></i></a>
                        <a href="#"><i class="icon-twft"></i></a>
                        <a href="#"><i class="icon-gpft"></i></a>
                        <a href="#"><i class="icon-rssftr"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>