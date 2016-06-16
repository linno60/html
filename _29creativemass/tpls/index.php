<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Creativemass</title>
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
            var LAYOUT_WIDTH = 974;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <a name='top'></a>
        <div class="lwrap">            
            <header data-flex="col -center">
                <div data-flex="col -center center">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="301" height="95" alt="">
                    </a>
                </div>
                <nav class="links-nav" data-flex="-center center" data-childs="col -center center">
                    <a href="#" class="active">work</a>
                    <a href="#">services</a>                  
                    <figure><img src="/images/orbit.png"></figure>
                    <a href="#">about</a>
                    <a href="#">contact</a>                   
                </nav> 
            </header>
            <section class="works"> 
                <h2 class="hdr" data-flex="axis"><span>latest works</span>
                    <div data-flex="end -center">
                        <a href="#" class="btn btn-slider prev"></a>
                        <a href="#" class="btn btn-slider next"></a>
                    </div>
                </h2>                    
                <div data-flex="-start between">
                    <figure><img src="/images/img1.png"></figure>
                    <div data-flex="stripe w" class="figure-wrap">
                        <figure><img src="/images/img2.png"></figure>
                        <figure><img src="/images/img3.png"></figure>
                        <figure class="hidden"><img src="/images/img4.png"></figure>
                        <figure class="hidden"><img src="/images/img5.png"></figure>
                        <figure class="hidden"><img src="/images/img6.png"></figure>
                        <figure class="hidden"><img src="/images/img7.png"></figure>
                        <figure class="hidden"><img src="/images/img8.png"></figure>
                        <figure class="hidden"><img src="/images/img9.png"></figure>
                    </div>
                </div>
            </section>
            <section class="content" data-flex="stripe" data-flex-480="vstripe">
                <div class="services">
                    <h2 class="hdr">services</h2>
                    <article class="clearfix">
                        <figure><img src="/images/img10.png"></figure>
                        <h3>animation</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                    </article>
                    <article class="clearfix">
                        <figure><img src="/images/img11.png"></figure>
                        <h3>filming and animation</h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
                    </article>
                    <article class="clearfix">
                        <figure><img src="/images/img12.png"></figure>
                        <h3>producing</h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
                    </article>
                </div>
                <aside class="sidebar">
                    <div>
                        <h2 class="hdr">testimonials</h2>
                        <blockquote data-flex="col">
                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur"
                            <div data-flex="end"><cite><span>John&nbsp;Doe</span> &nbsp;-&nbsp;<a href="#">InspiredCore.com</a></cite></div>
                        </blockquote>
                    </div>
                    <div class="awards">
                        <h2 class="hdr">awards</h2>
                        <div data-flex>
                            <i class="icon-oscar"></i>
                            <span>Academy Award for Best Animated Short Film</span>
                        </div>
                    </div>
                    <div>
                        <h2 class="hdr">connect</h2>
                        <div class="links-social" data-flex="stripe w" data-flex-800="w">
                            <a href="#"><i class="icon-rss"></i></a>
                            <a href="#"><i class="icon-tw"></i></a>
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-in"></i></a>
                            <a href="#"><i class="icon-sk"></i></a>
                            <a href="#"><i class="icon-yt"></i></a>
                        </div>
                    </div>
                </aside>
            </section>
            <section class="about">
                <h2 class="hdr">about company</h2>
                <div data-flex="stripe" data-flex-480="vstripe">
                    <article class="clearfix">
                        <figure><img src="/images/img13.png"></figure>
                        <h3>lorem ipsum dolor sit ametnulla</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                    </article>
                    <div class="clients">
                        <h3>client list</h3>
                        <div data-flex="-center around w">
                            <figure><img src="/images/toyota.png"></figure>
                            <figure><img src="/images/coca.png"></figure>
                            <figure><img src="/images/disney.png"></figure>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <h2 class="hdr">contact information</h2>
                <div data-flex="stripe" data-flex-480="vstripe">
                    <form action="#" method="post" data-flex="stripe">
                        <div data-flex="col -end">
                            <input type="text" name="input" placeholder="Full name">
                            <input type="email" name="input" placeholder="contact@inspiredcore.com">
                            <input type="text" name="input" placeholder="Subject">
                            <button><span class="btn btn-default">send</span></button>
                        </div>
                        <textarea placeholder="Message goes here"></textarea>
                    </form>
                    <div class="contacts">
                        <span>John Doe</span>
                        <address>66, Highway to hell, FL 00666</address>
                        <div data-flex>
                            <div class="lbl lbl-default"><i class="icon-info"></i></div>
                            <div data-flex="col">
                                <a href="mailto:contact@inspiredcore.com" class="mail">contact@&shy;inspiredcore.com</a>
                                <a href="tel:+40(744)123xxx">+40 (744) 123 xxx</a>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div> 
                </div>
                <section class="copyright" data-flex="axis">
                    <span>&copy; 2011 Your Company. All Rights Reserved</span>
                    <a href='#top' class='btn btn-default anchor'><i class='icon-arrow'></i></a>
                </section>               
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>