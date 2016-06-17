<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blanka</title>
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
    <body data-flex="col">
        <div>
            <header>
                <div class="lwrap" data-flex="axis">
                    <nav class="links-nav" data-flex="w" data-childs="col -center">
                        <a href="#" class="active">home</a>
                        <a href="#">templates</a>
                        <a href="#">portfolio</a>
                        <a href="#">services</a>
                        <a href="#">blog</a>
                        <a href="#">contact us</a>
                    </nav>
                    <form class="form-search" action="#" method="post" data-flex="axis">
                        <input type="search" name="search">
                        <input type="image" name="image" src="/images/icons/glass.png">
                    </form>
                </div>
            </header>
            <div class="lwrap">
                <div data-flex="vaxis" class="about">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" height="159" width="209" alt="Blanka">
                    </a>
                    <h2 class="hdr" data-flex="axis">about us</h2>
                    <h1>Hello and welcome to our website!</h1>
                    <p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. <a href="#">Nunc eu ullamcorper orci</a>. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nunc eu <a href="#">ullamcorper orci</a>. Quisque egetNunc eu ullamcorper orci.</p>                            
                </div>
                <div class="works">
                    <h2 class="hdr" data-flex="axis">recent works</h2>
                    <div data-flex="stripe w">
                        <figure><img src="/images/thumb.png" width="200" height="145" alt=""></figure>
                        <figure><img src="/images/thumb.png" width="200" height="145" alt=""></figure>
                        <figure><img src="/images/thumb.png" width="200" height="145" alt=""></figure>
                        <figure><img src="/images/thumb.png" width="200" height="145" alt=""></figure>
                    </div>
                </div>
                <div class="services">
                    <h2 class="hdr" data-flex="axis">what we do</h2>
                    <div data-flex="stripe w" data-flex-640="vstripe">
                        <article>
                            <h3 class="title">Website Design</h3>
                            <p>Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget.</p>
                            <a href="#">read more »</a>
                        </article>
                        <article>
                            <h3 class="title">Front-end Coding</h3>
                            <p>Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget.</p>
                            <a href="#">read more »</a>
                        </article>
                        <article>
                            <h3 class="title">Word&shy;Press Themes</h3>
                            <p>Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget.</p>
                            <a href="#">read more »</a>
                        </article>
                    </div>
                </div>
                <div class="blog">
                    <h2 class="hdr" data-flex="axis">from our blog</h2>
                    <div data-flex="stripe w" data-flex-480="vstripe">
                        <article>
                            <h4><a href="#">Hand-Drawn Web Free icon set released</a></h4>
                            <p>Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio.</p>
                            <time>Posted March 28th at 21:0145</time>
                        </article>
                        <article>
                            <h4><a href="#">BeerStat - our first iOS app hits the App Store</a></h4>
                            <p>Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio.</p>
                            <time>Posted March 28th at 21:0145</time>
                        </article>
                        <article>
                            <h4><a href="#">Less is More WordPress theme available, finally!</a></h4>
                            <p>Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio.</p>
                            <time>Posted March 28th at 21:0145</time>
                        </article>
                        <article class="tweet" data-flex>
                            <i class="icon-twitter"></i>
                            <div>
                                <p>what do you look for in a <a href="#">#wordpress</a> theme? either premium or free. What features do you find the most important?</p>
                                <time>About 19 hours ago</time>
                                <p>Follow <a href="#">@blankatheme</a> on twitter</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="lwrap">
                <span>© 2011 by <a href="#">Blanka</a>&ensp; All rights reserved.&ensp; Designed by <a href="#">High on Pixels</a></span>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>