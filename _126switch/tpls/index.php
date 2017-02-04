<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Switch</title>
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
            var LAYOUT_WIDTH = 1132;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            };
        </script>
    </head>
    <body data-flex="col">        
        <div>
            <header>
                <div class="lwrap" data-flex="col">
                    <div class="header" data-flex="vaxis">
                        <div class="navigation" data-flex="between -start" data-flex-480="vstripe">
                            <nav class="links-nav" data-flex="w" data-flex-480="around w">
                                <a href="#" class="active">Home</a>
                                <a href="#">What we do?</a>
                                <a href="#">Testimonial</a>
                                <a href="#">Contact Us</a>
                            </nav>
                            <div data-flex="center">
                                <a href="/" title="Return to the homepage" id="logo">
                                    <img src="/images/logo.png" width="62" height="19" alt="Switch">
                                </a> 
                            </div>           
                            <form action="#" method="post" data-flex="end" data-flex-480="center">
                                <input type="search" placeholder="Search...">
                            </form>
                        </div>
                        <div data-flex="col -center">
                            <h1>Art is Eternal Happiness</h1>
                            <a href="#" class="btn btn-default lg">work with us</a>
                        </div>
                        <a href="#top" class="btn btn-scroll">scroll down</a>
                    </div>
                </div>
            </header>            
            <section class="about">
                <a href="#" id="top"></a>
                <div class="lwrap">                    
                    <hgroup>                        
                        <h2>what we do</h2>
                        <hr class="hr">
                        <h6>Lorem ipsum dolor sit amet. <span>Proin gravida nibh vel velit auctor aliquet.</span></h6>
                    </hgroup>
                    <div class="about-items" data-flex="stripe w" data-flex-480="vstripe" data-childs="col -center">
                        <article>
                            <span class="lbl lbl-default"><i class="icon-camera"></i></span>
                            <h3>Lorem Ipsum</h3>
                            <p>This is Photoshop's version &nbsp;of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,</p>
                            <a href="#" class="btn btn-default">Learn more</a>
                        </article>
                        <article>
                            <span class="lbl lbl-default"><i class="icon-speed"></i></span>
                            <h3>Lorem Ipsum</h3>
                            <p>This is Photoshop's version &nbsp;of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,</p>
                            <a href="#" class="btn btn-default">Learn more</a>
                        </article>
                        <article>
                            <span class="lbl lbl-default"><i class="icon-folder"></i></span>
                            <h3>Lorem Ipsum</h3>
                            <p>This is Photoshop's version &nbsp;of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,</p>
                            <a href="#" class="btn btn-default">Learn more</a>
                        </article>
                    </div>
                </div>
            </section>
            <section class="works">                
                <div class="lwrap">
                    <hgroup>
                        <h2>our latest work</h2>
                        <hr class="hr">
                        <h6>Lorem ipsum dolor sit amet. <span>Proin gravida nibh vel velit auctor aliquet.</span></h6>
                    </hgroup>
                    <div class="tabs" data-tabs="" data-flex="col -center">
                        <div class="tablist" data-flex="center">
                            <a href="#tab1" class="active">Photography</a>
                            <a href="#tab2">Design</a>
                            <a href="#tab3">Print</a>
                        </div>
                        <div class="tabset">
                            <div id="tab1" class="tabpanel active" data-flex="stripe w">
                                <figure><img src="/images/img1.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img2.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img3.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img4.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img5.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img6.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img7.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img8.png" width="160" height="160" alt=""></figure>
                                <figure class="hidden-sm"><img src="/images/img9.png" width="160" height="160" alt=""></figure>
                                <figure class="hidden"><img src="/images/img10.png" width="160" height="160" alt=""></figure>
                            </div>
                            <div id="tab2" class="tabpanel">Tab number 2</div>
                            <div id="tab3" class="tabpanel">Tab number 3</div>
                        </div>
                        <a href="#" class="btn btn-more alt">View more work</a>
                    </div>
                </div>
            </section>
            <section class="testimonials">
                <div class="lwrap">
                    <hgroup>
                        <h2>testimonials</h2>
                        <hr class="hr">
                        <h6>Lorem ipsum dolor sit amet. <span>Proin gravida nibh vel velit auctor aliquet.</span></h6>
                    </hgroup>
                    <div class='slider1' data-flex="axis">
                        <input name="anchor1" id='slide1-0' type="radio">
                        <input name="anchor1" id='slide1-1' type="radio">
                        <input name="anchor1" id='slide1-2' type="radio">
                        <input name="anchor1" id='play1' type="radio" checked>
                        <div class='arrowprev'>
                            <label class='num0' for='slide11-0'></label>
                            <label class='num1' for='slide11-1'></label>
                            <label class='num2' for='slide11-2'></label>
                        </div>
                        <ul data-childs="center -center">
                            <li>
                                <blockquote data-flex="col -center">
                                    <q>“Awalnya saya tidak menderita penyakit apapun,<br> namun setelah saya tidak berobat ke klinik tongfang, saya dinyatakan tidak menderita penyakit apapun!”</q>
                                    <div data-flex="-center">
                                        <figure><img src="/images/herp.png" width="42" height="42" alt=""></figure>
                                        <cite>
                                            <span>Mr. Herp</span>
                                            <strong>CEO of Meme, Inc.</strong>
                                        </cite>        
                                    </div>
                                </blockquote>
                            </li>
                            <li class='num0'>
                                <blockquote data-flex="col -center">
                                    <q>“Awalnya saya tidak menderita penyakit apapun,<br> namun setelah saya tidak berobat ke klinik tongfang, saya dinyatakan tidak menderita penyakit apapun!”</q>
                                    <div data-flex="-center">
                                        <figure><img src="/images/herp.png" width="42" height="42" alt=""></figure>
                                        <cite>
                                            <span>Mr. Herp</span>
                                            <strong>CEO of Meme, Inc.</strong>
                                        </cite>        
                                    </div>
                                </blockquote>
                            </li>
                            <li class='num1'>
                                <blockquote data-flex="col -center">
                                    <q>“Awalnya saya tidak menderita penyakit apapun,<br> namun setelah saya tidak berobat ke klinik tongfang, saya dinyatakan tidak menderita penyakit apapun!”</q>
                                    <div data-flex="-center">
                                        <figure><img src="/images/herp.png" width="42" height="42" alt=""></figure>
                                        <cite>
                                            <span>Mr. Herp</span>
                                            <strong>CEO of Meme, Inc.</strong>
                                        </cite>        
                                    </div>
                                </blockquote>
                            </li>
                            <li class='num2'>
                                <blockquote data-flex="col -center">
                                    <q>“Awalnya saya tidak menderita penyakit apapun,<br> namun setelah saya tidak berobat ke klinik tongfang, saya dinyatakan tidak menderita penyakit apapun!”</q>
                                    <div data-flex="-center">
                                        <figure><img src="/images/herp.png" width="42" height="42" alt=""></figure>
                                        <cite>
                                            <span>Mr. Herp</span>
                                            <strong>CEO of Meme, Inc.</strong>
                                        </cite>        
                                    </div>
                                </blockquote>
                            </li>
                        </ul>                        
                        <div class='arrownext'>
                            <label class='num0' for='slide11-0'></label>
                            <label class='num1' for='slide11-1'></label>
                            <label class='num2' for='slide11-2'></label>
                        </div>
                    </div>
                </div>
            </section>
            <section class="clients">
                <div class="lwrap" data-flex="col -center">
                    <hgroup>
                        <h2>our happy client</h2>
                        <hr class="hr">
                        <h6>Lorem ipsum dolor sit amet. <span>Proin gravida nibh vel velit auctor aliquet.</span></h6>
                    </hgroup>
                    <div class="links-brands" data-flex="axis w" data-flex-960="around -center w">
                        <a href="#"><img src="/images/google.png" width="143" height="49" alt=""></a>
                        <a href="#"><img src="/images/yahoo.png" width="140" height="27" alt=""></a>
                        <a href="#"><img src="/images/ms.png" width="144" height="31" alt=""></a>
                        <a href="#"><img src="/images/intel.png" width="103" height="68" alt=""></a>
                        <a href="#"><img src="/images/qualcomm.png" width="151" height="34" alt=""></a>
                        <a href="#"><img src="/images/cisco.png" width="125" height="65" alt=""></a>
                        <a href="#"><img src="/images/apple.png" width="52" height="63" alt=""></a>
                        <a href="#"><img src="/images/asus.png" width="116" height="21" alt=""></a>
                    </div>
                    <a href="#" class="btn btn-more">See all client</a>
                </div>
            </section>
            <section class="team">
                <div class="lwrap">
                    <hgroup>
                        <h2>meet the team</h2>
                        <hr class="hr">
                        <h6>Lorem ipsum dolor sit amet. <span>Proin gravida nibh vel velit auctor aliquet.</span></h6>
                    </hgroup>
                    <div class="team-members" data-flex="stripe w" data-flex-640="around w" data-childs="vaxis">
                        <div>
                            <figure><img src="/images/photo1.png" width="124" height="124" alt=""></figure>
                            <hr>
                            <span>Krisna Wijaya</span>
                            <div class="links-social" data-flex="center -center w">
                                <a href="#"><i class="icon-db"></i></a>
                                <a href="#"><i class="icon-be"></i></a>
                                <a href="#"><i class="icon-tw"></i></a>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/photo2.png" width="124" height="124" alt=""></figure>
                            <hr>
                            <span>Gabriel Yoshua</span>
                            <div class="links-social" data-flex="center -center w">
                                <a href="#"><i class="icon-db"></i></a>
                                <a href="#"><i class="icon-be"></i></a>
                                <a href="#"><i class="icon-tw"></i></a>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/photo3.png" width="124" height="124" alt=""></figure>
                            <hr>
                            <span>Adik N.K.L.</span>
                            <div class="links-social" data-flex="center -center w">
                                <a href="#"><i class="icon-db"></i></a>
                                <a href="#"><i class="icon-be"></i></a>
                                <a href="#"><i class="icon-tw"></i></a>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/photo4.png" width="124" height="124" alt=""></figure>
                            <hr>
                            <span>Zan D.J</span>
                            <div class="links-social" data-flex="center -center w">
                                <a href="#"><i class="icon-db"></i></a>
                                <a href="#"><i class="icon-be"></i></a>
                                <a href="#"><i class="icon-tw"></i></a>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/photo5.png" width="124" height="124" alt=""></figure>
                            <hr>
                            <span>Faizal Febri</span>
                            <div class="links-social" data-flex="center -center w">
                                <a href="#"><i class="icon-db"></i></a>
                                <a href="#"><i class="icon-be"></i></a>
                                <a href="#"><i class="icon-tw"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="join">
                <div class="lwrap" data-flex="center">
                    <a href="#" class="btn btn-default md">work with us</a>
                </div>
            </section>
        </div>
        <footer>
            <section class="lwrap" data-flex="stripe w" data-flex-480="vstripe">
                <div data-flex="col -center">
                    <hgroup>
                        <h4>about us</h4>
                        <hr>
                    </hgroup>
                    <p>This is Photoshop's version &nbsp;of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Ut aliquam massa nisl quis neque. Suspendisse in orci enim.Aenean sollicitudin, lorem quis biben&shy;dum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                    <div class="links-social" data-flex="center -center w">
                        <a href="#"><i class="icon-db"></i></a>
                        <a href="#"><i class="icon-be"></i></a>
                        <a href="#"><i class="icon-tw"></i></a>
                    </div>
                </div>
                <div>
                    <hgroup>
                        <h4>recent posts</h4>
                        <hr>
                    </hgroup>
                    <div>
                        <article class="clearfix">
                            <figure><img src="/images/recent1.png" width="53" height="53" alt=""></figure>
                            <h5><a href="#">Lorem Ipsum Dolor Sit Amet.</a></h5>
                            <span class="lbl lbl-tag green">magazine</span>
                        </article>
                        <article class="clearfix">
                            <figure><img src="/images/recent2.png" width="53" height="53" alt=""></figure>
                            <h5><a href="#">Lorem Ipsum Dolor Sit Amet.</a></h5>
                            <span class="lbl lbl-tag yellow">ui design</span>
                        </article>
                        <article class="clearfix">
                            <figure><img src="/images/recent3.png" width="53" height="53" alt=""></figure>
                            <h5><a href="#">Lorem Ipsum Dolor Sit Amet.</a></h5>
                            <span class="lbl lbl-tag blue">photography</span>
                        </article>
                        <article class="clearfix">
                            <figure><img src="/images/recent4.png" width="53" height="53" alt=""></figure>
                            <h5><a href="#">Lorem Ipsum Dolor Sit Amet.</a></h5>
                            <span class="lbl lbl-tag red">book</span>
                        </article>
                        <article class="clearfix">
                            <figure><img src="/images/recent5.png" width="53" height="53" alt=""></figure>
                            <h5><a href="#">Lorem Ipsum Dolor Sit Amet.</a></h5>
                            <span class="lbl lbl-tag yellow">ui design</span>
                        </article>
                    </div>
                </div>
                <div>
                    <hgroup>
                        <h4>contact us</h4>
                        <hr>
                    </hgroup>
                    <div class="contacts" data-flex="col -center">
                        <address>10044 West 23th Street, Suite 721<br> New York NY 10010</address>
                        <span>Email: <a href="mailto:Username@email.com">Username@email.com</a></span>
                        <span>Phone: +1 (0) 123 4567 890</span>
                        <span>Fax: +1 (0) 321 4567 890</span>
                    </div>
                    <form action="#" method="post" data-flex="col">
                        <input type="text" name="message" placeholder="Your Name...">
                        <input type="email" name="message" placeholder="Your Email...">
                        <textarea name="message" placeholder="Your Mesage..."></textarea>
                        <button><span class="btn btn-submit">send</span></button>
                    </form>
                </div>
            </section>
            <section class="mass-media">
                <div class="lwrap">
                    <hgroup>
                        <h2>as seen on</h2>
                        <hr>
                    </hgroup>
                    <div class="links-brands" data-flex="axis w" data-flex-960="around -center w">
                        <a href="#"><img src="/images/cnn.png" width="97" height="47" alt=""></a>
                        <a href="#"><img src="/images/tc.png" width="92" height="47" alt=""></a>
                        <a href="#"><img src="/images/bbc.png" width="164" height="47" alt=""></a>
                        <a href="#"><img src="/images/newyorktimes.png" width="335" height="45" alt=""></a>
                    </div>
                </div>
            </section>
            <section class="copyright">
                <div class="lwrap">
                    <span>made with <i class="icon-heart"></i> by Krisna :)</span>
                </div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>