<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portal-UI</title>
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
            var LAYOUT_WIDTH = 1180;
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
            <section class='topbar'>
                <div class='lwrap' data-flex='axis' data-flex-480='vaxis'>
                    <nav class="links-top" data-flex="w" data-flex-480='center w' data-childs="-center center">
                        <a href="#"><i class="icon-blog"></i><em>Blog</em></a>
                        <a href="#"><i class="icon-jobs"></i><em>Jobs</em></a>
                        <a href="#"><i class="icon-support"></i><em>Support</em></a>
                        <a href="#"><i class="icon-arabic"></i><em>Arabic</em></a>
                    </nav>
                    <div class="links-socialtop" data-flex data-childs="-center center">
                        <a href="#"><i class="icon-facebook"></i></a>
                        <a href="#"><i class="icon-twitter"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                        <a href="#"><i class="icon-gplus"></i></a>
                    </div>
                </div>
            </section>
            <section class='header lwrap' data-flex='axis' data-flex-480='vaxis'>
                <a href="/" id='logo' title="Return to the homepage">
                    <img src="/images/logo.png" width="404" height="96" alt="Portal-UI">
                </a>
                <div class='links-contact' data-flex='-center center' data-childs='-center center'>
                    <a href='#' class='phone'><i class='icon-phonesm'></i></a>
                    <div class='info'>111-222-333</div>
                    <div class='divider'></div>
                    <a href='#' class='address'><i class='icon-pointsm'></i></a>
                    <div class='info'>Saudi Arabia . Alreyadah</div>
                    <div class='divider'></div>
                    <a href='#' class='mail'><i class='icon-lettersm'></i></a>
                    <div class='info'>info@mail.com</div>
                </div>
            </section>
            <section class='menu'>
                <div class='lwrap' data-flex='axis' data-flex-800="vaxis r">
                    <nav class="links-nav" data-flex="stripe" data-childs="-center center">
                        <a href="#" class="active">HOME</a>
                        <a href="#">What about ISAMA</a>
                        <a href="#">What we do?</a>
                        <a href="#">Our Projects</a>
                        <a href="#">Excellent Team</a>
                        <a href="#">Contact</a>
                    </nav>
                    <form class='form-search' data-flex='axis'>
                        <input type="search" name="search" placeholder="Type your search words">
                    </form>
                </div>
            </section>
        </header>
        <section class='slider'>
            <div class='lwrap' data-flex='vaxis'>
                <h1 data-flex='col'><b>let's draw some arts</b><span>make your business much better</span></h1>
                <div data-flex='end'>
                    <div data-flex>
                        <figure class='slide green'>
                            <img src="/images/design.png">
                            <figcaption data-flex='-center center'>
                                <a href="#" class="btn btn-like"><i class="icon-heartg"></i>Like</a>
                            </figcaption>
                        </figure>
                        <figure class='slide yellow'>
                            <img src="/images/design2.png">
                            <figcaption data-flex='-center center'>
                                <a href="#" class="btn btn-like"><i class="icon-hearty"></i>Like</a>
                            </figcaption>
                        </figure>
                        <a href='#' class='btn btn-slide'></a>
                    </div>
                </div>  
            </div>
        </section>
        <section class='about lwrap' data-flex='stripe' data-flex-640='vstripe'>
            <article data-flex='stripe' data-flex-480='vstripe'>
                <i class="icon-lamp"></i>
                <div>
                    <h3>What about ISAMA</h3>
                    <p>ISAMA is a marketing foundation located in Riyadh built on the talent of creation that leads to a modern concept of professionalism. At ISAMA we believe even if you are good at what you do, you have a great pro&shy;duct or you provide an excellent service. We still can present you a little better to the world, creating your full identity, provides you with your marketing plans, design your website, print your publications, design your logo's and offices. Simply we give your business the perfect image.</p>
                </div>
            </article>
            <article data-flex='stripe' data-flex-480='vstripe'>
                <i class="icon-tree"></i>
                <div>
                    <h3>Why we exist</h3>
                    <p>Reaching customer satisfaction through providing them with cutting-edge technologies that give clients access to a wide range of tools, ensuring efficient and results-oriented communication solutions, which grant them a special character that distinguishes them from the others in the business.</p>
                </div>
            </article>
        </section>
        <section class='direction lwrap'>
            <div class='hdr' data-flex='center -center'>
                <i class="icon-target"></i>
                <hgroup>
                    <h2>What we do ?</h2>
                    <h3>Everything you need to do business intelligence right.</h3>
                </hgroup>
            </div>
            <div data-flex='stripe' data-flex-640="vstripe">
                <div class='column' data-childs='stripe'>
                    <article>
                        <div>
                            <i class="icon-setting"></i>   
                        </div>               
                        <div>
                            <h3>Web Design & Development</h3>
                            <p>ISAMA Pvt. Ltd. designs and develops creative web&shy;sites utilizing the latest technologies.</p>
                        </div>                        
                    </article>
                    <article>
                        <div>
                            <i class="icon-coub"></i> 
                        </div>                 
                        <div>
                            <h3>Software Solutions</h3>
                            <p>with our software for professional services and con&shy;sulting firms. Grow your revenue and profit margins by assigning the right people to the right projects at the right time.</p>
                        </div>                        
                    </article>
                    <article>
                        <div>
                            <i class="icon-mouse"></i>
                        </div>
                        <div>
                            <h3>Branding</h3>
                            <p>We have our forte in advertising and Brand establish&shy;ment. We create identities for the clients product and services in the target market.</p>
                        </div>                        
                    </article>
                </div>
                <div class="border"></div>
                <div class='column' data-childs='stripe'>
                    <article>
                        <div data-flex="center">
                            <i class="icon-mobile"></i>
                        </div>
                        <div>
                            <h3>Mobile Applications</h3>
                            <p>Our Developers helps you to Design, Develop & Distrib&shy;ute Mobile Applications - Smarter & Faster.</p>
                        </div>                        
                    </article>
                    <article>
                        <div data-flex="center">
                            <i class="icon-chair"></i> 
                        </div>
                        <div>
                            <h3>Interior Design</h3>
                            <p>We offer a variety of design services ranging from Full Service Interior Design and Styling to our Design Con&shy;cierge service, all of which are executed with beautiful, custom-tailored results.</p>
                        </div>                        
                    </article>
                    <article>
                        <div data-flex="center">
                            <i class="icon-globe"></i>
                        </div>
                        <div>
                            <h3>SEO & Web Marketing Services</h3>
                            <p>We offer a variety of design services ranging from Full Service Interior Design and Styling to our Design Con&shy;cierge service, all of which are executed with beautiful, custom-tailored results.</p>
                        </div>                        
                    </article>
                </div>
            </div>
        </section>
        <section class='projects'>
            <div class='lwrap'>
                <div class='hdr' data-flex='-center center'>
                    <i class="icon-projects"></i>
                    <hgroup>
                        <h2>Our Projects</h2>
                        <h3>Some of our awesome work Proud of doing great works for our clients.</h3>
                    </hgroup>
                </div>
                <div class="tabs" data-tabs>
                    <div class="tablist" data-flex="center w">
                        <a href="#tab1">All</a>
                        <a href="#tab2">Mobile Apps</a>
                        <a href="#tab3" class="active">Identities</a>
                        <a href="#tab4">Interior Design</a>
                        <a href="#tab5">UI/UX</a>
                    </div>
                    <div class="tabset">
                        <div id="tab1" class="tabpanel">Tab number 1</div>
                        <div id="tab2" class="tabpanel">Tab number 2</div>
                        <div id="tab3" class="tabpanel active" data-flex="stripe w">
                            <div>
                                <figure data-flex='-center center'><img src="images/brand1.png" width='252' height='209'></figure>                                
                                <div class='links' data-flex='stripe' data-childs='-center center'>
                                    <a href='#'><i class='icon-link'></i></a>
                                    <a href='#'><i class='icon-more'></i></a>
                                </div>
                            </div>
                            <div>
                                <figure data-flex='-center center'><img src="images/brand2.png" width='252' height='209'></figure>                               
                                <div class='links' data-flex='stripe' data-childs='-center center'>
                                    <a href='#'><i class='icon-link'></i></a>
                                    <a href='#'><i class='icon-more'></i></a>
                                </div>
                            </div>
                            <div>
                                <figure data-flex='-center center'><img src="images/brand3.png" width='252' height='209'></figure>                                 
                                <div class='links' data-flex='stripe' data-childs='-center center'>
                                    <a href='#'><i class='icon-link'></i></a>
                                    <a href='#'><i class='icon-more'></i></a>
                                </div>
                            </div>
                            <div>
                                <figure data-flex='-center center'><img src="images/brand4.png" width='252' height='209'></figure>                                 
                                <div class='links' data-flex='stripe' data-childs='-center center'>
                                    <a href='#'><i class='icon-link'></i></a>
                                    <a href='#'><i class='icon-more'></i></a>
                                </div>
                            </div>
                            <div>
                                <figure data-flex='-center center'><img src="images/brand5.png" width='252' height='209'></figure>                                 
                                <div class='links' data-flex='stripe' data-childs='-center center'>
                                    <a href='#'><i class='icon-link'></i></a>
                                    <a href='#'><i class='icon-more'></i></a>
                                </div>
                            </div>
                            <div>
                                <figure data-flex='-center center'><img src="images/brand6.png" width='252' height='209'></figure>                                 
                                <div class='links' data-flex='stripe' data-childs='-center center'>
                                    <a href='#'><i class='icon-link'></i></a>
                                    <a href='#'><i class='icon-more'></i></a>
                                </div>
                            </div>
                            <div>
                                <figure data-flex='-center center'><img src="images/brand7.png" width='252' height='209'></figure>                               
                                <div class='links' data-flex='stripe' data-childs='-center center'>
                                    <a href='#'><i class='icon-link'></i></a>
                                    <a href='#'><i class='icon-more'></i></a>
                                </div>
                            </div>
                            <div>
                                <figure data-flex='-center center'><img src="images/brand4.png" width='252' height='209'></figure>                                
                                <div class='links' data-flex='stripe' data-childs='-center center'>
                                    <a href='#'><i class='icon-link'></i></a>
                                    <a href='#'><i class='icon-more'></i></a>
                                </div>
                            </div>
                        </div>
                        <div id="tab4" class="tabpanel">Tab number 4</div>
                        <div id="tab5" class="tabpanel">Tab number 5</div>
                    </div>
                </div>                
            </div>
        </section>
        <section class='team-wrap lwrap'>
            <div class='hdr' data-flex='-center'>
                <i class="icon-head"></i>
                <hgroup>
                    <h2>Meet Our Team</h2>
                    <h3>We have highly qualified staff with distinguished significant experiences in their field who work under pressure.</h3>
                </hgroup>
            </div>
            <div class='team' data-flex='stripe w'>
                <div data-flex='vaxis'>
                    <figure><img src="images/img1.png"></figure>
                    <figcaption>
                        <h4>Tamer</h4>
                        <span>Senior Software Engineer</span>
                    </figcaption>
                    <div class="links-socialteam" data-flex="-center center w">
                        <a href="#"><i class="icon-facebookg"></i></a>
                        <a href="#"><i class="icon-twitterg"></i></a>
                        <a href="#"><i class="icon-instagramg"></i></a>
                        <a href="#"><i class="icon-linkeding"></i></a>
                    </div>
                </div>
                <div data-flex='vaxis'>
                    <figure><img src="images/img2.png"></figure>
                    <figcaption>
                        <h4>Hazem</h4>
                        <span>PHP Developer</span>
                    </figcaption>
                    <div class="links-socialteam" data-flex="-center center w">
                        <a href="#"><i class="icon-facebookg"></i></a>
                        <a href="#"><i class="icon-twitterg"></i></a>
                        <a href="#"><i class="icon-instagramg"></i></a>
                        <a href="#"><i class="icon-linkeding"></i></a>
                    </div>
                </div>
                <div data-flex='vaxis'>
                    <figure><img src="images/img3.png"></figure>
                    <figcaption>
                        <h4>Mohammed</h4>
                        <span>PHP Developer</span>
                    </figcaption>
                    <div class="links-socialteam" data-flex="-center center w">
                        <a href="#"><i class="icon-facebookg"></i></a>
                        <a href="#"><i class="icon-twitterg"></i></a>
                        <a href="#"><i class="icon-instagramg"></i></a>
                        <a href="#"><i class="icon-linkeding"></i></a>
                    </div>
                </div>
                <div data-flex='vaxis'>
                    <figure><img src="images/img4.png"></figure>
                    <figcaption>
                        <h4>Ahmed</h4>
                        <span>UI/UX Designer</span>
                    </figcaption>
                    <div class="links-socialteam" data-flex="-center center w">
                        <a href="#"><i class="icon-facebookg"></i></a>
                        <a href="#"><i class="icon-twitterg"></i></a>
                        <a href="#"><i class="icon-instagramg"></i></a>
                        <a href="#"><i class="icon-linkeding"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class='map'>
            <i class='icon-marker'></i>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8505.038451901682!2d43.965580613990085!3d26.328825230878778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1436953049202" frameborder="0" style="border:0" allowfullscreen></iframe>   
            <div class='links-map' data-flex='stripe' data-childs='-center center'>
                <a href='#'>
                    <i class='icon-pointlg'></i>
                    <div class='info' data-flex='-center center'>795 Almaddianah Way Saudi Arabia . Alreyadah</div>
                </a>
                <a href='#'>
                    <i class='icon-letterlg'></i>
                    <div class='info' data-flex='-center center'>info@mail.com</div>
                </a>
                <a href='#'>
                    <i class='icon-phonelg'></i>
                    <div class='info' data-flex='-center center'>111-222-333</div>
                </a>
            </div>
        </section>
        <footer>
            <div class='lwrap' data-flex='vstripe'>
                <div class='footer-top' data-flex='axis' data-flex='axis' data-flex-640="vaxis">
                    <div class="links-socialfooter" data-flex data-childs="-center center">
                        <a href="#"><i class="icon-facebookb"></i></a>
                        <a href="#"><i class="icon-twitterb"></i></a>
                        <a href="#"><i class="icon-instagramb"></i></a>
                        <a href="#"><i class="icon-gplusb"></i></a>
                    </div>
                    <form action='#' method='post' class='form-mail' data-flex='axis'>
                        <input type="email" name="email" placeholder="Enter your email for out newsletter">
                        <button><span class="btn btn-submit">Join</span></button> 
                    </form>
                </div>
                <div class='footer-bottom' data-flex='axis' data-flex-640="vaxis">
                    <span>&copy; Copyright 2014 - ISAMA for information techology</span>
                    <nav class="links-footer" data-flex="-center w">
                        <a href="#">Blog</a><span></span>
                        <a href="#">Job</a><span></span>
                        <a href="#">Terms of Service</a><span></span>
                        <a href="#">Privacy</a><span></span>
                        <a href="#">Policy</a>
                    </nav>
                </div>
            </div>  
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>