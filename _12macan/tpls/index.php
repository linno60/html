<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Macan</title>
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
            var LAYOUT_WIDTH = 1190;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <a href='#top' class='btn btn-anchor'></a>
        <header>
            <a name='top'></a>
            <section class="topbar">
                <div class="lwrap" data-flex="axis">
                    <a href="#" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="184" height="28" alt="Macan">
                    </a>
                    <nav class='links-nav' data-flex='-center end w'>
                        <a href="#">Home</a>
                        <a href="#">Services</a>
                        <a href="#">Work</a>
                        <a href="#">Testimonials</a>
                        <a href="#">Contact</a>
                    </nav>
                </div>
            </section>
            <section class="header"> 
                <div class="lwrap" data-flex="axis" data-flex-480="vstripe r">
                    <div data-flex="col -start" data-flex-480="vaxis">
                        <h1>Kalau Kita mau, Pasti ada Jalan</h1>
                        <span>Semangat terus saudara-saudara!</span>
                        <a href="#" class="btn btn-default">More</a>
                    </div>
                    <div data-flex="end">
                        <figure><img src="images/img-slider.png"></figure>
                    </div>
                </div>
            </section>
        </header>
        <section class="services">
            <div class="lwrap" data-flex="vaxis">
                <h2>Our Services</h2>
                <span>our awesome services</span>
                <span class="hr" data-flex="axis"><div></div><div></div></span>
                <div data-flex="stripe" data-childs="col -center" data-flex-640="stripe w">
                    <article>
                        <i class="icon-heart"></i>
                        <h3>Beautiful Design</h3>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, </p>
                        <a href="#" class="btn btn-default">More</a>
                    </article>
                    <article>
                        <i class="icon-globe"></i>
                        <h3>Global Trend</h3>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, </p>
                        <a href="#" class="btn btn-default">More</a>
                    </article>
                    <article>
                        <i class="icon-monitor"></i>
                        <h3>Responsive</h3>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, </p>
                        <a href="#" class="btn btn-default">More</a>
                    </article>
                    <article>
                        <i class="icon-rocket"></i>
                        <h3>Awesome Design</h3>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, </p>
                        <a href="#" class="btn btn-default">More</a>
                    </article>                    
                </div>                    
            </div>
        </section>
        <section class="works-header" data-flex="col -center center">
            <h1>Our Gratest Works</h1>
            <span>come from awesome imagination</span>
        </section>
        <section class="portfolio lwrap" data-flex="vaxis">
            <h2>Portofolio</h2>
            <span>our awesome works</span>
            <span class="hr" data-flex="axis"><div></div><div></div></span>
            <div class="tabs" data-tabs>
                <div class="tablist" data-flex="center">
                    <a href="#tab1" class="active">All</a>/
                    <a href="#tab2">Web</a>/
                    <a href="#tab3">Print</a>
                </div>
                <div class="tabset">
                    <div id="tab1" class="tabpanel active" data-flex="stripe w" data-flex-480="vstripe">
                        <figure>
                            <img src="/images/img.png">
                            <div class="overlay" data-flex="col center -center">
                                <h6>Macankumbang</h6>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sooicitudin, lorem quis bibendum auctor, nisi elit consequat</p>
                                <a href="#"></a>
                            </div>
                        </figure>
                        <figure>
                            <img src="/images/img.png">
                            <div class="overlay" data-flex="col center -center">
                                <h6>Macankumbang</h6>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sooicitudin, lorem quis bibendum auctor, nisi elit consequat</p>
                                <a href="#"></a>
                            </div>
                        </figure>
                        <figure>
                            <img src="/images/img.png">
                            <div class="overlay" data-flex="col center -center">
                                <h6>Macankumbang</h6>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sooicitudin, lorem quis bibendum auctor, nisi elit consequat</p>
                                <a href="#"></a>
                            </div>
                        </figure>
                        <figure>
                            <img src="/images/img.png">
                            <div class="overlay" data-flex="col center -center">
                                <h6>Macankumbang</h6>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sooicitudin, lorem quis bibendum auctor, nisi elit consequat</p>
                                <a href="#"></a>
                            </div>
                        </figure>
                        <figure>
                            <img src="/images/img.png">
                            <div class="overlay" data-flex="col center -center">
                                <h6>Macankumbang</h6>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sooicitudin, lorem quis bibendum auctor, nisi elit consequat</p>
                                <a href="#"></a>
                            </div>
                        </figure>
                        <figure>
                            <img src="/images/img.png">
                            <div class="overlay" data-flex="col center -center">
                                <h6>Macankumbang</h6>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sooicitudin, lorem quis bibendum auctor, nisi elit consequat</p>
                                <a href="#"></a>
                            </div>
                        </figure>
                    </div>
                    <div id="tab2" class="tabpanel">Tab number 2</div>
                    <div id="tab3" class="tabpanel">Tab number 3</div>
                </div>
            </div>                   
            <a href="#" data-flex="vaxis">
                <span>Browse All</span>
                <span>300+</span>
            </a>            
        </section>
        <section class="testimonials lwrap" data-flex="vaxis">
            <h2>What Our Happy Customer Say</h2>
            <span>lorem ipsum dolor sit amet</span>
            <span class="hr" data-flex="axis"><div></div><div></div></span>
            <div data-flex="axis" data-flex-480="vaxis">
                <figure><img src="/images/circle.png"></figure>
                <blockquote data-flex>
                    <q>&ldquo;</q>
                    <div data-flex="col">
                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                        <cite>John Doe</cite>
                    </div>
                </blockquote>
            </div>
            <div class="links-controls" data-flex="center">
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
                <a href="#" class="active"></a>
            </div>
        </section>
        <section class="works-footer" data-flex="col -center center">
            <h1>Get in Touch With us</h1>
            <span>Ready for 24/7</span>
        </section>
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8505.038451901682!2d43.965580613990085!3d26.328825230878778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1436953049202"></iframe>               
            <i class="icon-location"></i>
        </section>
        <footer>
            <section class="lwrap" data-flex="vaxis">
                <h2>Contact</h2>
                <span>Let's talk business, get in touch!</span>
                <span class="hr" data-flex="axis"><div></div><div></div></span>
                <div data-flex='stripe' data-flex-480="vstripe">
                    <div>
                        <h5>Office Hours</h5>
                        <span>Monday to Friday / 7:00 - 18:00 Saturday / 9:00 - 15:00</span>
                        <div data-flex='col -start' class='contacts' data-childs>
                            <address data-flex><i class='icon-point'></i>25 Silver Cost Avenue, MD 20910 Indonesia</address>
                            <span data-flex><i class='icon-phone'></i>(621) 555 6789</span>
                            <a href='mailto:hello@macankumbang.net' data-flex><i class='icon-mail'></i>hello@macankumbang.net</a>
                        </div>
                        <div class='links-social' data-flex='w'>
                            <a href='#'><i class='icon-tw'></i></a>
                            <a href='#'><i class='icon-fb'></i></a>
                            <a href='#'><i class='icon-gp'></i></a>
                        </div>
                    </div>
                    <form action="#" method="post">
                        <div data-flex="stripe" data-flex-640="vstripe">
                            <input type="text" name="input" placeholder="Name">
                            <input type="email" name="input" placeholder="Email (will not published)">
                        </div>
                        <textarea placeholder="Message"></textarea>
                        <a href='#' class='btn btn-default'>Send</a>
                    </form>
                </div>
            </section>
            <section class="copyright" data-flex='vaxis'>
                <span>(c) copyright 2013 macankumbang</span>
                <a href="#" title="Return to the homepage" id="logo-alt">
                    <img src="/images/logo-alt.png" width="184" height="28" alt="Macan">
                </a>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>