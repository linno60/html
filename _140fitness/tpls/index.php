<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fitness</title>
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
                <div class="lwrap">
                    <section class="header">
                        <div data-flex="axis">
                            <a href="/" title="Return to the homepage" id="logo">
                                <img src="/images/logo.png" width="151" height="47" alt="Fitness">
                            </a>
                            <nav class="links-nav" data-flex="end w">
                                <a href="#">about</a>
                                <a href="#">how it works</a>
                                <a href="#">services</a>
                                <a href="#">faq</a>
                                <a href="#">contact</a>
                            </nav>
                        </div>
                    </section>
                    <hgroup>
                        <h1>fitness in a can<mark>/</mark></h1>
                        <h5>yes you can<mark>/</mark></h5>
                    </hgroup>
                </div>
            </header>
            <main>
                <section class="features lwrap" data-flex="stripe w" data-childs='col between -start' data-flex-480="vstripe">
                    <article>
                        <div>
                            <i class="icon-case"></i>
                            <h4>Resources</h4>
                            <p>Easily manage your inspiration and work-in-progress by dragging images into projects and sharable client groups. Easily manage your inspiration and.</p>
                        </div>
                        <a href="#">Explore more &rarr;</a>
                    </article>
                    <article>
                        <div>
                            <i class="icon-clock"></i>
                            <h4>Training & Funding</h4>
                            <p>Easily manage your inspiration and work-in-progress by dragging images into projects and sharable client groups.</p>
                        </div>
                        <a href="#">Browse training &rarr;</a>
                    </article>
                    <article>
                        <div>
                            <i class="icon-cloud"></i>
                            <h4>Connect</h4>
                            <p>Easily manage your inspiration and work-in-progress by dragging images into projects and sharable client groups. Easily manage your inspiration.</p>
                        </div>
                        <a href="#">Connect now &rarr;</a>
                    </article>
                    <article>
                        <div>
                            <i class="icon-bubble"></i>
                            <h4>Communicate</h4>
                            <p>Easily manage your inspiration and work-in-progress by dragging images into projects and sharable client groups. Easily</p>
                        </div>
                        <a href="#">Start now &rarr;</a>
                    </article>
                </section>
                <section class="gallery-main grid lwrap" data-childs="axis" data-childs-480="vstripe">
                    <div class="row">
                        <article data-flex="col -center">
                            <hgroup class="hdr">
                                <h6>it's all about</h6>
                                <h2>fitness first</h2>
                                <i class="icon-dropgray"></i>
                            </hgroup>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                            <a href="#" class="more">read more</a>
                        </article>
                        <figure><img src="/images/img1.png" width="780" height="394" alt=""><span class="details"><a href="#">Active Users</a> <span>(34)</span><i class="icon-dropred"></i></span></figure>   
                    </div>
                    <div class="row">                        
                        <article data-flex="col -center">
                            <hgroup class="hdr">
                                <h6>love your</h6>
                                <h2>your body</h2>
                                <i class="icon-dropgray"></i>
                            </hgroup>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                            <a href="#" class="more">read more</a>
                        </article>
                        <figure><img src="/images/img2.png" width="780" height="394" alt=""><span class="details"><a href="#">Products USed</a> <span>(658)</span><i class="icon-dropred"></i></span></figure>
                    </div>
                </section>
            </main>
            <section class='gallery-add grid lwrap' data-childs='stripe' data-childs-480="vstripe">
                <div class="row" data-childs="col">
                    <div>
                        <figure><img src="/images/img3.png" width="401" height="330" alt=""></figure>
                        <article>
                            <hgroup class="hdr" data-flex='stripe'>
                                <div>
                                    <h6>track your</h6>
                                    <h2>lifestyle</h2>
                                </div>
                                <i class="icon-user"></i>
                            </hgroup>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p> 
                        </article>
                    </div>
                    <div>
                        <figure><img src="/images/img4.png" width="779" height="329" alt=""><span class="details"><time>24th august</time><a href="#">health & fitness<i class="icon-mark"></i></a></span></figure>
                        <article>
                            <h5>summer of fun</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p> 
                        </article>
                    </div> 
                </div>
                <div class="row" data-childs="col">
                    <div>
                        <figure><img src="/images/img6.png" width="401" height="359" alt=""></figure>
                        <article>
                            <hgroup class="hdr" data-flex='stripe'>
                                <div>
                                    <h6>improve your</h6>
                                    <h2>eating habits</h2>
                                </div>
                                <i class="icon-aiwa"></i>
                            </hgroup>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p> 
                        </article>
                    </div>
                    <div>
                        <figure><img src="/images/img5.png" width="779" height="359" alt=""></figure>
                        <article>
                            <hgroup class="hdr" data-flex='stripe'>
                                <div>
                                    <h6>track your</h6>
                                    <h2>get involved in yourself</h2> 
                                </div>
                                <i class="icon-strawberry"></i>
                            </hgroup>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur.</p> 
                        </article>
                    </div>
                </div>
            </section>
            <section class='banner'>
                <div class="lwrap">
                    <h3>We launch leaders with big ideas</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </section>
        </div>
        <footer>
            <section class='lwrap' data-flex='stripe w' data-flex-640="vstripe">
                <article>
                    <h5>Resources</h5>
                    <p>Easily manage your inspiration and work-in-progress by dragging images into projects and sharable client groups. work-in-progress by dragging images into projects and sharable client group</p>
                </article>
                <div data-flex='stripe w' data-flex-640="vstripe">
                    <article>
                        <h5>About us</h5>
                        <p>Easily manage your inspiration and work-in-progress by dragging images into projects and sharable client groups. work-in-progress by dragging images into projects and sharable client group</p>
                    </article>
                    <div>
                        <h5>Stay in touch</h5>
                        <div class="links-social" data-flex="end w" data-flex-640="w">
                            <a href="#" class="fb"></a>
                            <a href="#" class="tw"></a>
                            <a href="#" class="yt"></a>
                            <a href="#" class="in"></a>
                        </div>
                    </div>
                    <form action='#' method='post' data-flex='stripe' data-flex-480="vstripe">
                        <input type="text" name="form" class="input-default" placeholder="Your Name">
                        <input type="email" name="form" class="input-default" placeholder="Your Email">
                        <button><span class='btn btn-default'>join news&shy;let&shy;ter<i class="icon-arrow"></i></span></button>
                    </form>
                </div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>