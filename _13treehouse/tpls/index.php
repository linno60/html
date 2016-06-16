<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Treehouse</title>
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
            var LAYOUT_WIDTH = 1020;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col">
        <div>
            <header class="lwrap" data-flex='axis'>
                <a href="#" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="142" height="29" alt="Treehouse">
                </a>
                <nav class="links-nav" data-flex='end w'>
                    <a href='#'>home</a>
                    <a href='#'>about</a>
                    <a href='#'>blog</a>
                    <a href='#'>portfolio</a>
                    <a href='#'>contact</a>
                </nav>
            </header>
            <section class='title-wrap' data-flex='col -center'>
                <h1>creative digital solutions</h1>
                <span>Proin iaculis purus consequat sem cure.</span>
                <a href='#' class='btn btn-default'>view portfolio</a>
            </section>
            <section class='services lwrap'>
                <hgroup data-flex='vaxis'>
                    <h2>professional services</h2>
                    <h5>Proin iaculis purus consequat sem cure</h5>
                </hgroup>
                <div data-flex='stripe' data-childs="col -center" data-flex-480="vstripe">
                    <article>
                        <i class='icon-heart'></i>
                        <h2>beautiful desings</h2>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
                    </article>
                    <article>
                        <i class='icon-mobile'></i>
                        <h2>responsive web</h2>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
                    </article>
                    <article>
                        <i class='icon-graph'></i>
                        <h2>marketing tools</h2>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
                    </article>
                </div>            
            </section>
            <section class='relax' data-flex='center'>
                <div data-flex="-center end">
                    <figure><img src="/images/gear.png" width="196" height="416" alt=""></figure>
                </div>
                <div>
                    <div data-flex="col -start center">
                        <h2>just relax <span>&</span> let us do the heavy lifting</h2>
                        <p>Proin iaculis purus consequat sem cure  digni ssim. Donec porttitora entum suscipit  aenean rhoncus posuere odio in tincidunt.</p>
                        <ul class="list-relax" data-childs>
                            <li>Initial Setup & Customizations</li>
                            <li>Regular Updates</li>
                            <li>Round The Clock Support</li>
                        </ul>
                        <a href='#' class='btn btn-default'>learn more</a>
                    </div>
                </div>
            </section>        
            <section class='projects-wrap'>
                <hgroup data-flex="vaxis">
                    <h2>latest project</h2>
                    <h5>Proin iaculis purus consequat sem cure</h5>
                </hgroup>
                <div class="projects" data-flex='center' data-flex-640="vstripe">
                    <div data-flex="-center end" data-flex-640="-center">
                        <div>
                            <h5>developing a framework</h5>
                            <p>Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit  aenean rhoncus posuere odio in tincidunt.</p>
                            <article data-flex="-center">
                                <div class="lbl lbl-project"><i class="icon-basket"></i></div>
                                <div>
                                    <h6>E-Commerce Ready</h6>
                                    <p>Proin iaculis purus consequat sem cure  digni ssim. </p>
                                </div>
                            </article>
                            <article data-flex="-center">
                                <div class="lbl lbl-project"><i class="icon-laptop"></i></div>
                                <div>
                                    <h6>Powerful SEO Features</h6>
                                    <p>Proin iaculis purus consequat sem cure.</p>
                                </div>
                            </article>
                            <article data-flex="-center">
                                <div class="lbl lbl-project"><i class="icon-lock"></i></div>
                                <div>
                                    <h6>Secure Encryption</h6>
                                    <p>Proin iaculis purus consequat sem cure iaculis purus.</p>
                                </div>
                            </article>
                            <p>Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit  aenean rhoncus posuere odio in.</p>
                            <a href="#" class="view">view details</a>
                        </div>
                    </div>
                    <div data-flex="-end end">
                        <figure><img src="images/ipad.png"></figure>
                    </div>
                </div> 
            </section>
            <section class='values'>
                <div class='lwrap' data-flex='col-center-center'>  
                    <hgroup data-flex="vaxis">
                        <h2>culture & values</h2>
                        <h5>Proin iaculis purus consequat sem cure</h5>
                    </hgroup>
                    <div data-flex='stripe' data-childs="col -center" data-flex-480="vstripe">
                        <article>
                            <div class='lbl lbl-article'><i class='icon-music'></i></div>
                            <h2>work-life balance</h2>
                            <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
                        </article>
                        <hr>
                        <article>
                            <div class='lbl lbl-article'><i class='icon-rating'></i></div>
                            <h2>quality over quantity</h2>
                            <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
                        </article>
                        <hr>
                        <article>
                            <div class='lbl lbl-article'><i class='icon-star'></i></div>
                            <h2>deliver excellence</h2>
                            <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
                        </article>
                    </div> 
                </div>
            </section>
            <section class='testimonials'>
                <div class='lwrap'>
                    <hgroup data-flex='vaxis'>
                        <h2>our awesome clients</h2>
                        <h5>Proin iaculis purus consequat sem cure</h5>
                    </hgroup>
                    <div>
                        <div class="testimonial" data-flex="-center">  
                            <figure><img src="images/circle.png"></figure> 
                            <blockquote data-flex="col">
                                &ldquo;&nbsp;Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit aenean rhoncus.&nbsp;&rdquo;
                                <cite>- Jamie Richardson, Founder of Cocoa Media</cite>
                            </blockquote>                        
                        </div>
                        <div class="testimonial" data-flex="-center">   
                            <figure><img src="images/circle.png"></figure> 
                            <blockquote data-flex="col">
                                &ldquo;&nbsp;Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit aenean rhoncus.&nbsp;&rdquo;
                                <cite>- Kim Thompson, Founder of Rainel</cite>
                            </blockquote>                         
                        </div>
                    </div>
                </div>            
            </section>
            <section class='contact' data-flex='vaxis'>
                <h3>ready to talk about your next project?</h3>
                <a href="#" class="btn btn-contact">contact us</a>
            </section>
            <section class="brands" data-flex="-center center" data-flex-640="-center center w">
                <figure><img src="images/envato.png"></figure> 
                <figure><img src="images/wordpress.png"></figure> 
                <figure><img src="images/tuts.png"></figure> 
                <figure><img src="images/microlancer.png"></figure> 
            </section>
        </div>
        <footer>
            <section class="footer">
                <div class="lwrap" data-flex="stripe" data-flex-640="stripe w" data-flex-480="vstripe">
                    <div>
                        <h4>contact us</h4>
                        <div>
                            <address data-flex="-start">
                                <i class="icon-location"></i>
                                <div data-flex="col">
                                    <span>55 Main St.</span>
                                    <span>Toronto, ON</span>
                                    <span>M1H 3A5</span>
                                </div>
                            </address>
                            <span data-flex="-center"><i class="icon-phone"></i><span>(416)&nbsp;555-5252</span></span>
                            <span data-flex="-center"><i class="icon-email"></i><a href="mailto:hello@treedhouse.com">hello@treehouse.com</a></span>
                        </div>
                    </div>
                    <div>
                        <h4>latest posts</h4>
                        <div class="links-default" data-flex="col -start" data-childs="-start">
                            <a href="#"><i class="icon-news"></i>Made With Love In Toronto</a>
                            <a href="#"><i class="icon-photo"></i>Startup News & Emerging Tech</a>
                            <a href="#"><i class="icon-news"></i>Bitcoin Will Soon Rule The World</a>
                            <a href="#"><i class="icon-news"></i>Wearable Technology On The Rise</a>
                            <a href="#"><i class="icon-play"></i>Learn web Design In 30 Days!</a>
                        </div>
                    </div>
                    <div>
                        <h4>latest tweets</h4>
                        <div data-flex="-start">
                            <i class="icon-twitter"></i>
                            <div data-flex="col">
                                <p>Confucius: Life is really simple, but we insist on making it complicated. </p>
                                <div>
                                    <a href="#" class="hashtag">#famousquotes</a>   
                                </div>
                                <time>8 mins ago</time>
                            </div>
                        </div>
                        <div data-flex="-start">
                            <i class="icon-twitter"></i>
                            <div data-flex="col">
                                <p>Grab the Free Treehouse web template at FreebiesXpress! </p>
                                <div>
                                    <a href="#" class="hashtag">#freebies</a>
                                    <a href="#" class="hashtag">#templates</a>
                                </div>
                                <time>2 days ago</time>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="footer-bottom">
                <div class="lwrap" data-flex="axis" data-flex-480="vstripe">
                    <span>© Copyright 2014 <a href="#">FreebiesXpress.com</a></span>
                    <div class="links-social" data-flex="center w" data-childs="-center center" data-flex-640="end w" data-flex-480="center w">
                        <a href="#" class="tw"><i class="icon-social-twitter"></i></a>
                        <a href="#" class="fb"><i class="icon-social-facebook"></i></a>
                        <a href="#" class="pin"><i class="icon-social-pinterest"></i></a>
                        <a href="#" class="gp"><i class="icon-social-gplus"></i></a>
                    </div>
                    <span></span>
                </div>                
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>