<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Viewport</title>
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
    <body>
        <header>
            <a name='top'></a>
            <section class="header-top">
                <div class='lwrap' data-flex="axis w">
                    <div data-flex="-center w">
                        <time>06 Dec 2010</time>
                        <span>&middot;&ensp;</span>
                        <div class="links-top" data-flex='-center w' data-childs='-center'>
                            <a href="#">Sample Page<i class="icon-down"></i></a><span></span>
                            <a href="#">Page Layouts<i class="icon-down"></i></a><span></span>
                            <a href="#">Page Templates<i class="icon-down"></i></a><span></span>
                            <a href="#">Theme Colors<i class="icon-down"></i></a><span></span>
                            <a href="#">Contact</a>
                        </div>
                    </div>
                    <span>Subscribe by <a href="#">RSS</a> or <a href="#">Emaiil</a> for updates!</span>
                </div>
            </section>
            <section class="lwrap">
                <div data-flex="axis" data-flex-480="vaxis">
                    <div data-flex='-center w'>
                        <a href="/" title="Return to the homepage" id='logo'>
                            <img src="/images/logo.png" width="132" height="40" alt="Viewport">                        
                        </a>
                        <small>|&ensp;Your tagline here.</small>
                    </div>
                    <figure><img src="/images/banner.png"></figure>
                </div>                
                <nav class='links-nav' data-flex='w' data-childs='col center'>
                    <a href="#">
                        <span>World News</span>
                        <em>From around The Globe</em>
                    </a>
                    <a href="#">
                        <span>Celebrity News</span>
                        <em>Juicy Hollywood Gossip</em>
                    </a>
                    <a href="#">
                        <span>Technology</span>
                        <em>Apps, Internet & Gadgets</em>
                    </a>
                    <a href="#">
                        <span>Lifestyle Tips</span>
                        <em>Your Health & Happiness</em>
                    </a>
                    <a href="#" class='active'>
                        <span>Entertainment</span>
                        <em>Movies, Music & Reviews</em>
                    </a>
                    <a href="#">
                        <span>Travel News</span>
                        <em>Travel News, Guides & Tips</em>
                    </a>
                </nav>
            </section>            
        </header>
        <section class="lwrap">
            <div class="slider" data-flex='col -center'>                    
                <figure>
                    <img src="images/img1.png">
                    <figcaption data-flex="col -start">
                        <h2>Silicon Valley Shows Signs of a New Dot-Com Deal Frenzy</h2>
                        <span>By <a href="#">Orman Clark</a> on <time>4th Dec 2010</time> &middot;<a href="#"> 22 Comments</a></span>
                    </figcaption>
                </figure>                    
                <div class="thumbnails" data-flex="stripe">
                    <a href="#" class="btn btn-thumb prev"></a>
                    <div data-flex="stripe">
                        <a href="#"><figure><img src="/images/img2.png"></figure></a>
                        <a href="#"><figure><img src="/images/img2.png"></figure></a>
                        <a href="#"><figure><img src="/images/img2.png"></figure></a>
                        <a href="#"><figure><img src="/images/img2.png"></figure></a>
                        <a href="#" class="hidden-sm"><figure><img src="/images/img2.png"></figure></a>
                        <a href="#" class="hidden"><figure><img src="/images/img2.png"></figure></a>
                    </div>
                    <a href="#" class="btn btn-thumb next"></a>
                </div>             
            </div>
            <div data-flex='-start between' data-flex-480="vstripe">
                <div class="content">                
                    <div class='twin' data-flex='stripe'>
                        <div>
                            <h4 class='hdr' data-flex='axis'>Technology</h4>
                            <div>
                                <article class='clearfix'>
                                    <figure><img src="/images/img5.png"></figure>
                                    <h4><a href="#">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
                                    <time>August 4 2010,</time>
                                    <a href='#'>8 Comments</a>
                                    <p>Lorem ipsum ex vix illus nonummy, novum tation et his. At vix scripta patrioque scribentur...</p>
                                </article>
                                <article class='clearfix'>
                                    <figure><img src="/images/img6.png"></figure>
                                    <p><a href='#'>Fly Fishers Serving as Transports for Noxious Little Invaders</a></p>
                                    <time>August 4 2010,</time>
                                    <a href='#'>8 Comments</a>
                                </article>
                                <article class='clearfix'>
                                    <figure><img src="/images/img6.png"></figure>
                                    <p><a href='#'>Fly Fishers Serving as Transports for Noxious Little Invaders</a></p>
                                    <time>August 4 2010,</time>
                                    <a href='#'>8 Comments</a>
                                </article>
                            </div>
                        </div>
                        <div>
                            <h4 class='hdr' data-flex='axis'>Entertainment</h4>
                            <div>
                                <article class='clearfix'>
                                    <figure><img src="/images/img5.png"></figure>
                                    <h4><a href="#">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
                                    <time>August 4 2010,</time>
                                    <a href='#'>8 Comments</a>
                                    <p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur...</p>
                                </article>
                                <article class='clearfix'>
                                    <figure><img src="/images/img6.png"></figure>
                                    <p><a href='#'>Fly Fishers Serving as Transports for Noxious Little Invaders</a></p>
                                    <time>August 4 2010,</time>
                                    <a href='#'>8 Comments</a>
                                </article>
                                <article class='clearfix'>
                                    <figure><img src="/images/img6.png"></figure>
                                    <p><a href='#'>Fly Fishers Serving as Transports for Noxious Little Invaders</a></p>
                                    <time>August 4 2010,</time>
                                    <a href='#'>8 Comments</a>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class='twin' data-flex='stripe'>
                        <div>
                            <h4 class='hdr' data-flex='axis'>Technology</h4>
                            <div>
                                <article class='clearfix'>
                                    <figure><img src="/images/img5.png"></figure>
                                    <h4><a href="#">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
                                    <time>August 4 2010,</time>
                                    <a href='#'>8 Comments</a>
                                    <p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur...</p>
                                </article>
                                <article class='clearfix'>
                                    <figure><img src="/images/img6.png"></figure>
                                    <p><a href='#'>Fly Fishers Serving as Transports for Noxious Little Invaders</a></p>
                                    <time>August 4 2010,</time>
                                    <a href='#'>8 Comments</a>
                                </article>
                                <article class='clearfix'>
                                    <figure><img src="/images/img6.png"></figure>
                                    <p><a href='#'>Fly Fishers Serving as Transports for Noxious Little Invaders</a></p>
                                    <time>August 4 2010,</time>
                                    <a href='#'>8 Comments</a>
                                </article>
                            </div>
                        </div>
                        <div>
                            <h4 class='hdr' data-flex='axis'>Entertainment</h4>
                            <div>
                                <article class='clearfix'>
                                    <figure><img src="/images/img5.png"></figure>
                                    <h4><a href="#">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
                                    <time>August 4 2010,</time>
                                    <a href='#'>8 Comments</a>
                                    <p>Lorem ipsum ex vix illus nonummy, novum tation et his. At vix scripta patrioque scribentur...</p>
                                </article>
                                <article class='clearfix'>
                                    <figure><img src="/images/img6.png"></figure>
                                    <p><a href='#'>Fly Fishers Serving as Transports for Noxious Little Invaders</a></p>
                                    <time>August 4 2010,</time>
                                    <a href='#'>8 Comments</a>
                                </article>
                                <article class='clearfix'>
                                    <figure><img src="/images/img6.png"></figure>
                                    <p><a href='#'>Fly Fishers Serving as Transports for Noxious Little Invaders</a></p>
                                    <time>August 4 2010,</time>
                                    <a href='#'>8 Comments</a>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 class='hdr' data-flex='axis'>Latest Posts</h4>
                        <article class='clearfix'>
                            <figure><img src="/images/img7.png"></figure>
                            <h4><a href="#">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
                            <time>August 4 2010,</time>
                            <a href='#'>8 Comments</a>
                            <p>Lorem ipsum ex vix illus nonummy, novum tation et his. At vix scripta patrioque scribentur novum tation et his ex vix ilud nonummy...</p> 
                        </article>
                        <article class='clearfix'>
                            <figure><img src="/images/img7.png"></figure>
                            <h4><a href="#">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
                            <time>August 4 2010,</time>
                            <a href='#'>8 Comments</a>
                            <p>Lorem ipsum ex vix illus nonummy, novum tation et his. At vix scripta patrioque scribentur novum tation et his ex vix ilud nonummy...</p> 
                        </article>
                        <article class='clearfix'>
                            <figure><img src="/images/img7.png"></figure>
                            <h4><a href="#">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
                            <time>August 4 2010,</time>
                            <a href='#'>8 Comments</a>
                            <p>Lorem ipsum ex vix illus nonummy, novum tation et his. At vix scripta patrioque scribentur novum tation et his ex vix ilud nonummy...</p> 
                        </article>
                    </div>
                </div>
                <aside class='sidebar' data-flex-480="stripe w">
                    <form action='#' method='post'>
                        <input type="search" name='input' placeholder="to search, type and hit enter">
                    </form>
                    <div class='advertisement'>
                        <h4 class='hdr' data-flex='axis'>Advertisement</h4>
                        <figure><img src="/images/img3.png"></figure>
                    </div>
                    <div class='sponsors'>
                        <h4 class='hdr' data-flex='axis'>Sponsors</h4>
                        <div data-flex="stripe w">
                            <figure><img src="/images/img4.png"></figure>
                            <figure><img src="/images/img4.png"></figure>
                        </div>
                    </div>
                    <div>
                        <h4 class='hdr' data-flex='axis'>Featured Video</h4>
                        <div data-video='16:9' class='video'><iframe src="https://www.youtube.com/embed/EhueMB9EzoE" frameborder="0" allowfullscreen></iframe></div>
                    </div>
                    <div>
                        <h4 class='hdr' data-flex='axis'>Twitter</h4>
                        <p>Genesis Child Themes at Theme Garden - December 5th --> <a href="#">http://bit.ly/ibXdjY</a> <a href="#">#genesiswp</a> <a href="#">#themegarden</a> <time><a href="#">31 minutes ago</a></time></p>
                        <p>PhotoPro Genesis Child Theme by Creativity Included Launches at <a href="#">http://bit.ly/9fGbq0</a> - <a href="#">http://eepurl.com/bQeQn</a> <time><a href="#">31 minutes ago</a></time></p>
                        <p>Latest: Genesis Child Themes at Theme Garden - December 5th - Many of you are aware that Jason Schuller of Press75 r... <a href="#">http://ht.ly/1akn8s</a> <time><a href="#">31 minutes ago</a></time></p>
                        <p>The Rockstar Guide to Getting More Traffic, Fame, and Success --> <a href="#">http://bit.ly/hCzF69</a></p>
                    </div>
                    <div>
                        <h4 class='hdr' data-flex='axis'>Recent Posts</h4>
                        <ul class='links-default'>
                            <li><a href="#">Use Prose to Put the Focus on Your Words</a></li>
                            <li><a href="#">Images Add Life to Your Site</a></li>
                            <li><a href="#">What's a Framework and Why Do I Need One?</a></li>
                            <li><a href="#">7 Tips for Capturing Short Attention Spans</a></li>
                            <li><a href="#">Making Your Blog a Great Place to Hang Out</a></li>
                        </ul>
                    </div>
                </aside>
            </div> 
            <div class='anchor' data-flex='-center end'>
                <a href='#top' class='btn btn-anchor'>Back to Top</a>
            </div>
        </section>
        <footer>
            <section class='footer'>
                <div class='lwrap' data-flex='stripe w' data-flex-480="vstripe">
                    <div>
                        <h4 class='hdr' data-flex='axis'>Recent Posts</h4>
                        <ul class='links-footer'>
                            <li><a href="#">Use Prose to Put the Focus on Words</a></li>
                            <li><a href="#">Images Add Life to Your Site</a></li>
                            <li><a href="#">What's a WordPress theme Frameword?</a></li>
                            <li><a href="#">7 Tips for Short Attention Spans</a></li>
                            <li><a href="#">Make Your Blog a Great Place to Hang</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class='hdr' data-flex='axis'>About Viewport</h4>
                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>
                    </div>
                    <div class='comments'>
                        <h4 class='hdr' data-flex='axis'>Comments</h4>
                        <p>Orman Clark on <a href='#'>Sample Post Wiht Threaded Comments</a></p>
                        <p>Orman Clark on <a href='#'>Sample Post Wiht Threaded Comments</a></p>
                        <p>Orman Clark on <a href='#'>Sample Post Wiht Threaded Comments</a></p>
                        <p>Orman Clark on <a href='#'>Sample Post Wiht Threaded Comments</a></p>
                    </div>
                    <div data-flex='col -end'>
                        <a href='#' id="logo-footer"><img src="/images/logo-alt.png"></a>
                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer</p>
                    </div>  
                </div>
            </section>
            <section class='copyright lwrap' data-flex='axis' data-flex-480="vaxis">
                <span>Copyright &copy; 2010 &middot; All Rights Reserved</span>
                <span>Viewport Theme by Orman Clark&nbsp;&middot;&nbsp;<a href='#'>WordPress</a>&nbsp;&middot;&nbsp;<a href='#'>Log in</a></span>
            </section>
        </footer>        
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>