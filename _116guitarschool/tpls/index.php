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
    <body>
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
                        <a href="#">lessons</a>
                        <a href="#">portfolio</a>
                        <a href="#">blog</a>
                        <a href="#">contact</a>
                    </nav>
                </div> 
            </header>
            <section>
                <figure><img src="/images/img1.jpg" width="1920" height="863" alt=""></figure>
            </section>
            <section class="lwrap services-wrap">
                <h2 class="hdr">services</h2>
                <hr class="hr">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</p>
                <div class="services-items" data-flex="stripe w">
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
                    <div class="lwrap" data-flex="stripe">
                        <div>
                            <figure><img src="/images/img2.jpg" width="770" height="569" alt=""></figure>
                            <div class="links-controlssm" data-flex="axis">
                                <a href="#"><i class="icon-sliderprev"></i></a>
                                <div data-flex="center -center">
                                    <a href="#"></a>
                                    <a href="#" class="active"></a>
                                    <a href="#"></a>
                                </div>
                                <a href="#"><i class="icon-slidernext"></i></a>
                            </div>
                        </div>
                        <article>
                            <h3>lorem ipsum dolor sit amet, consec tetur adipscing elit.</h3>
                            <hr class="hr">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</p>
                            <a href="#" class="btn btn-default alt">go to project</a>
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
                    <div data-flex="stripe">
                        <figure><img src="/images/img3.jpg" width="370" height="370" alt=""></figure>
                    </div>
                </div>
            </section>
            <section class="action">
                <div class="lwrap" data-flex="axis">
                    <div data-flex>
                        <i class="icon-skypelogo"></i>
                        <span>
                            <strong>call us on skype!</strong><br>
                            <small>and learn how to play guitar</small>
                        </span>
                    </div>
                    <div data-flex="end w">
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
                <div data-flex="stripe">
                    <article class="news-main">
                        <figure><img src="/images/img6.jpg" width="570" height="187" alt=""></figure>
                        <h3>lorem ipsum dolor sit amet, consectetur adipiscing elit sit amet, consectetur adipiscing</h3>
                        <hr class="hr">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis elit et elit interdum semper vel nec diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis elit et elit interdum semper vel nec diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    </article>
                    <div class="news-slider" data-flex="stripe">
                        <div data-childs="stripe">
                            <article>
                                <figure><img src="/images/img7.png" width="170" height="125" alt=""></figure>
                                <div>
                                    <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                    <span>guitar lessons</span>
                                </div>
                                <div data-flex="col -end">
                                    <div class="lbl lbl-default"><i class="icon-comments"></i><span>19</span></div>
                                    <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>23</span>/<span>09</span></time></div>
                                </div>
                            </article>
                            <article>
                                <figure><img src="/images/img7.png" width="170" height="125" alt=""></figure>
                                <div>
                                    <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                    <span>guitar lessons</span>
                                </div>
                                <div data-flex="col -end">
                                    <div class="lbl lbl-default"><i class="icon-comments"></i><span>19</span></div>
                                    <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>23</span>/<span>09</span></time></div>
                                </div>
                            </article>
                            <article>
                                <figure><img src="/images/img7.png" width="170" height="125" alt=""></figure>
                                <div>
                                    <h4><a href="#">lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>
                                    <span>guitar lessons</span>
                                </div>
                                <div data-flex="col -end">
                                    <div class="lbl lbl-default"><i class="icon-comments"></i><span>19</span></div>
                                    <div class="lbl lbl-date"><i class="icon-calendarlbl"></i><time><span>23</span>/<span>09</span></time></div>
                                </div>
                            </article>
                        </div>
                        <div class="links-controlslg" data-flex="vaxis">
                            <a href="#"><i class="icon-sliderup"></i></a>
                            <div data-flex="vaxis">
                                <a href="#"></a>
                                <a href="#" class="active"></a>
                                <a href="#"></a>
                            </div>
                            <a href="#"><i class="icon-sliderdown"></i></a>
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
                        <a href="#" class="btn btn-default"><i class="icon-prevsm"></i></a>
                        <div data-flex="vaxis">
                           <figure><img src="/images/photo.jpg" width="168" height="168" alt=""></figure>
                        <blockquote data-flex="vaxis">
                            <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</q>
                            <cite data-flex="vaxis">
                                <strong>Andreea Koronikova</strong>
                                <small>Music Teacher</small>
                            </cite>
                        </blockquote> 
                        </div>
                        <a href="#" class="btn btn-default"><i class="icon-nextsm"></i></a>
                    </div>
                </div>
            </section>
            <section class="map">
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
                        <h6><a href="#">etiam tempor odio tellus</a></h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus.</p>
                    </article>
                    <article>
                        <time>02.08.2015</time>
                        <h6><a href="#">etiam tempor odio tellus</a></h6>
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