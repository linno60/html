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
                    <button><span class="btn btn-default">Submit</span></button>                   
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

                </aside>
                <hr>
                <section class="addition">

                </section>
                <footer>
                    <section class="footer" data-flex="stripe w">
                        <div>
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
                        <div>
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