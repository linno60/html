<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rust</title>
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
            var LAYOUT_WIDTH = 960;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="lwrap">
            <header data-flex="axis">                
                <section data-flex="-center">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="119" height="25" alt="Rust">
                    </a>
                    <hr>
                    <nav class="links-nav">
                        <a href="#">Home</a>
                        <a href="#">About</a>
                        <a href="#">Work</a>
                        <a href="#" class="active">Blog</a>
                        <a href="#">Contact</a>
                    </nav>
                </section>
                <form action="#" method="post" data-flex="end">
                    <div class="input-wrap">
                        <input class="input-default" type="text" name="input1">
                        <label for="input1">Welcome Back, <span>John Doe81</span></label> 
                    </div>
                    <button><span class="btn btn-default">Client Sign-Out</span></button>                   
                </form>
            </header>
            <div class="content-wrap" data-flex="stripe w">
                <section class="breadcrumbs">

                </section>
                <main class="blog" data-childs="stripe w">
                    <article>
                        <figure><img src="/images/img.png" width="590" height="233" alt=""></figure>
                        <div data-flex="-center">
                            <i class="icon-monitor"></i>
                            <hgroup>
                                <h2><a href="#">Krili havtret hyo gustripast</a></h2>
                                <h6>Krili havtret hyo gustripast</h6>
                            </hgroup>
                        </div>
                        <div>
                            <strong>3.30.11</strong>
                            <em>posted by: <a href="#">Admin</a></em>
                        </div>
                    </article>
                    <article>
                        <figure><img src="/images/img.png" width="590" height="233" alt=""></figure>
                        <div data-flex="-center">
                            <i class="icon-monitor"></i>
                            <hgroup>
                                <h2><a href="#">Krili havtret hyo gustripast</a></h2>
                                <h6>Krili havtret hyo gustripast</h6>
                            </hgroup>
                        </div>
                        <div>
                            <strong>3.30.11</strong>
                            <em>posted by: <a href="#">Admin</a></em>
                        </div>
                    </article>
                    <article>
                        <figure><img src="/images/img.png" width="590" height="233" alt=""></figure>
                        <div data-flex="-center">
                            <i class="icon-monitor"></i>
                            <hgroup>
                                <h2><a href="#">Krili havtret hyo gustripast</a></h2>
                                <h6>Krili havtret hyo gustripast</h6>
                            </hgroup>
                        </div>
                        <div>
                            <strong>3.30.11</strong>
                            <em>posted by: <a href="#">Admin</a></em>
                        </div>
                    </article>
                </main>
                <aside class="sidebar">
                    <hr class="divider">
                    <div class="tabs" data-tabs="">
                        <div class="tablist">
                            <a href="#tab1">Newest</a>
                            <a href="#tab2" class="active">Top Rated</a>
                            <a href="#tab3">Subject</a>
                        </div>
                        <div class="tabset">
                            <div id="tab1" class="tabpanel">Tab number 1</div>
                            <div id="tab2" class="tabpanel active">
                                <ul class="list-default">
                                    <li>Mobile: <a href="#">Eget imperdiet</a></li>
                                    <li>Online: <a href="#">Aliquam tempor erat</a></li>
                                    <li>Mobile & Online: <a href="#">Eleifend nulla</a></li>
                                    <li>iOS: <a href="#">Lectus nec eget</a></li>
                                    <li>Mobile: <a href="#">Laoreet donec & quis</a></li>
                                </ul>
                            </div>
                            <div id="tab3" class="tabpanel">Tab number 3</div>
                        </div>
                    </div>                    
                    <hr class="separator">
                    <div>
                        <h3 class="title-sidebar">Latest Comments</h3>
                        <blockquote>Donec pellentesque, justo eget imperd viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Erat quis nulla eget pharetra lorem nec quis non!</blockquote>
                        <form action="#" method="post" data-flex="stripe w">
                            <label>Get in Touch: <span>Just say, "hi!"</span></label>
                            <input class="input-default" type="email" name="mail" placeholder="you@company.com">
                            <button><span class="btn btn-default">Submit</span></button>                   
                        </form>
                    </div>
                    <hr class="separator">
                    <div class="comments">
                        <h3 class="title-sidebar">Start your Project</h3>
                        <div data-childs="-center w">
                            <article>
                                <figure><img src="/images/ava.png" width="16" height="16" alt=""></figure>
                                <a href="#">John Doe</a>
                                <time>&nbsp;- 23 mins ago</time>
                                <p>Nunc commodo aliqarum non orci...</p>
                            </article>
                            <article>
                                <figure><img src="/images/ava.png" width="16" height="16" alt=""></figure>
                                <a href="#">John Doe</a>
                                <time>&nbsp;- 23 mins ago</time>
                                <p>Nunc commodo aliqarum non orci...</p>
                            </article>
                            <article>
                                <figure><img src="/images/ava.png" width="16" height="16" alt=""></figure>
                                <a href="#">John Doe</a>
                                <time>&nbsp;- 23 mins ago</time>
                                <p>Nunc commodo aliqarum non orci...</p>
                            </article>
                            <article>
                                <figure><img src="/images/ava.png" width="16" height="16" alt=""></figure>
                                <a href="#">John Doe</a>
                                <time>&nbsp;- 23 mins ago</time>
                                <p>Nunc commodo aliqarum non orci...</p>
                            </article>
                        </div>
                    </div>
                    <hr class="separator">
                    <div class="links-tags" data-childs="-center">
                        <a href="#">resource</a>
                        <a href="#">design</a>
                        <a href="#">art</a>
                        <a href="#">icon</a>
                        <a href="#">photoshop</a>
                        <a href="#">template</a>
                        <a href="#">mobile</a>
                        <a href="#">indesign</a>
                        <a href="#">ios</a>
                        <a href="#">interactive</a>
                        <a href="#">push</a>
                        <a href="#">online</a>
                    </div>
                </aside>
                <hr class="divider">
                <section class="addition" data-flex="stripe w">
                    <article>
                        <figure><img src="/images/pharetra.png" width="136" height="86" alt=""></figure>
                        <h4><strong>Pharetra</strong> Eget</h4>
                        <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum.</p>
                        <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum.</p>
                    </article>
                    <hr>
                    <div>
                        <h4><strong>Newsletter</strong> Subscription</h4>
                    </div>
                </section>
                <footer>
                    <section class="footer" data-flex="stripe w" data-childs="col">
                        <div class="flickr">
                            <h4 class="title-footer">Flickr</h4>
                            <div data-flex="stripe w">
                                <a href="#"><img src="/images/flickr.png" width="50" height="50" alt=""></a>
                                <a href="#"><img src="/images/flickr.png" width="50" height="50" alt=""></a>
                                <a href="#"><img src="/images/flickr.png" width="50" height="50" alt=""></a>
                                <a href="#"><img src="/images/flickr.png" width="50" height="50" alt=""></a>
                                <a href="#"><img src="/images/flickr.png" width="50" height="50" alt=""></a>
                                <a href="#"><img src="/images/flickr.png" width="50" height="50" alt=""></a>
                                <a href="#"><img src="/images/flickr.png" width="50" height="50" alt=""></a>
                                <a href="#"><img src="/images/flickr.png" width="50" height="50" alt=""></a>
                            </div>
                        </div>
                        <div class="clients">
                            <h4 class="title-footer">Featured Clients</h4>
                            <div data-flex="vaxis">
                                <a href="#"><img src="/images/nyt.png" width="168" height="24" alt=""></a>
                                <a href="#"><img src="/images/cc.png" width="83" height="25" alt=""></a>
                                <a href="#"><img src="/images/pixar.png" width="120" height="15" alt=""></a>
                                <a href="#"><img src="/images/ducati.png" width="89" height="17" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <h4 class="title-footer">Our Friends</h4>
                            <div class="links-footer" data-flex="col -center">
                                <a href="#">GraphicRiver</a>
                                <a href="#">ThemeForest</a>
                                <a href="#">NineteenEightyOne</a>
                                <a href="#">SuiteTuts</a>
                                <a href="#">WeAreRuckus</a>
                            </div>
                        </div>
                        <div>
                            <h4 class="title-footer">Pages</h4>
                            <div class="links-footer" data-flex="col -center">
                                <a href="#">Home</a>
                                <a href="#">About</a>
                                <a href="#">Work</a>
                                <a href="#">Blog</a>
                                <a href="#">Contact</a>
                            </div>
                        </div>
                    </section>
                    <section class="copyright" data-flex="axis">
                        <span>Copyright 2011 | Nineteen Eighty-One</span>
                        <div class="links-final" data-flex="end -center w">
                            <a href="#">FAQ</a>/
                            <a href="#">Privacy Policy</a>/
                            <a href="#">API</a>/
                            <a href="#">Advertise</a>
                        </div>
                    </section>
                </footer>
            </div>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>