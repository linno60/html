<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gallaria</title>
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
            var LAYOUT_WIDTH = 1000;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="lwrap" data-flex="stripe" data-flex-480="vstripe">
            <aside class="sidebar" data-flex="col -start" data-flex-480="vaxis">                
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="150" height="97" alt="Gallery">
                </a>
                <nav class="links-nav" data-flex="col" data-childs="-center" data-flex-480="center w">
                    <a href="#"><span class="lbl lbl-nav"><i class="icon-home"></i></span>home</a>
                    <a href="#" class="active"><span class="lbl lbl-nav"><i class="icon-film"></i></span>videos</a>
                    <a href="#"><span class="lbl lbl-nav"><i class="icon-images"></i></span>images</a>
                    <a href="#"><span class="lbl lbl-nav"><i class="icon-articles"></i></span>articles</a>
                    <a href="#"><span class="lbl lbl-nav"><i class="icon-articles"></i></span>freebies</a>
                </nav>
                <div>
                    <h2>About Us</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
                <div>
                    <h2><i class="icon-tag"></i>Tags</h2>
                    <div class="links-tags" data-flex="w" data-childs="-center center">
                        <a href="#">Video</a>
                        <a href="#">Video</a>
                        <a href="#">Video</a>
                        <a href="#">Video</a>
                        <a href="#">Video</a>
                        <a href="#">Video</a>
                        <a href="#">Video</a>
                        <a href="#">Video</a>
                        <a href="#">Video</a>
                    </div>
                </div>
            </aside>
            <div class="content">
                <div class="featured">
                    <div data-flex="axis w">
                        <h2 data-flex="-center w"><i class="icon-camera"></i><strong>Featured&nbsp;</strong> Videos</h2>
                        <div class="links-social" data-flex="end" data-childs="-center center">
                            <a href="#" class="active"><i class="icon-tw"></i></a>
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-gp"></i></a>
                            <a href="#"><i class="icon-pin"></i></a>
                        </div>
                    </div>
                    <figure data-video="16:9"><iframe width="560" height="315" src="https://www.youtube.com/embed/pfs14PYFoNo" frameborder="0" allowfullscreen></iframe></figure>
                    <div class="player-title" data-flex="axis w">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicingelit</span>
                        <div data-flex="-center end w" data-childs="-center">
                            <a href="#"><i class="icon-link"></i>70</a>
                            <a href="#"><i class="icon-like"></i>150</a>
                            <a href="#"><i class="icon-share"></i></a>
                        </div>
                    </div>
                </div>
                <div class="posts">
                    <form action="#" method="post" data-flex="-center end w">
                        <label>Change view:</label>
                        <div data-flex>
                            <a href="#" class="btn btn-toggle active"><i class="icon-list"></i></a>
                            <a href="#" class="btn btn-toggle"><i class="icon-grid"></i></a>
                        </div>
                    </form>
                    <div>
                        <article class="clearfix">
                            <figure data-video="4:3"><iframe width="560" height="315" src="https://www.youtube.com/embed/pfs14PYFoNo" frameborder="0" allowfullscreen></iframe></figure>
                            <span class="lbl lbl-default"><i class="icon-lbl"></i></span>
                            <div>
                                <h4>Lorem ipsum dolor sit amet consectetur adipisicingelit</h4>
                                <div class="details" data-flex="-center w" data-childs="-center">
                                    <a href="#"><i class="icon-heart"></i>150</a>
                                    <a href="#"><i class="icon-cloud"></i>30</a>
                                    <time><i class="icon-clock"></i>2days ago</time>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
                                <a href="#" class="btn btn-default"></a>
                            </div>
                        </article>
                        <article class="clearfix">
                            <figure data-video="4:3"><iframe width="560" height="315" src="https://www.youtube.com/embed/pfs14PYFoNo" frameborder="0" allowfullscreen></iframe></figure>
                            <span class="lbl lbl-default"><i class="icon-lbl"></i></span>
                            <div>
                                <h4>Lorem ipsum dolor sit amet consectetur adipisicingelit</h4>
                                <div class="details" data-flex="-center w" data-childs="-center">
                                    <a href="#"><i class="icon-heart"></i>150</a>
                                    <a href="#"><i class="icon-cloud"></i>30</a>
                                    <time><i class="icon-clock"></i>2days ago</time>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
                                <a href="#" class="btn btn-default"></a>
                            </div>
                        </article>
                        <article class="clearfix">
                            <figure data-video="4:3"><iframe width="560" height="315" src="https://www.youtube.com/embed/pfs14PYFoNo" frameborder="0" allowfullscreen></iframe></figure>
                            <span class="lbl lbl-default"><i class="icon-lbl"></i></span>
                            <div>
                                <h4>Lorem ipsum dolor sit amet consectetur adipisicingelit</h4>
                                <div class="details" data-flex="-center w" data-childs="-center">
                                    <a href="#"><i class="icon-heart"></i>150</a>
                                    <a href="#"><i class="icon-cloud"></i>30</a>
                                    <time><i class="icon-clock"></i>2days ago</time>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
                                <a href="#" class="btn btn-default"></a>
                            </div>
                        </article>
                        <article class="clearfix">
                            <figure data-video="4:3"><iframe width="560" height="315" src="https://www.youtube.com/embed/pfs14PYFoNo" frameborder="0" allowfullscreen></iframe></figure>
                            <span class="lbl lbl-default"><i class="icon-lbl"></i></span>
                            <div>
                                <h4>Lorem ipsum dolor sit amet consectetur adipisicingelit</h4>
                                <div class="details" data-flex="-center w" data-childs="-center">
                                    <a href="#"><i class="icon-heart"></i>150</a>
                                    <a href="#"><i class="icon-cloud"></i>30</a>
                                    <time><i class="icon-clock"></i>2days ago</time>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
                                <a href="#" class="btn btn-default"></a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <footer class="lwrap" data-flex="axis">
            <div>
                <span>The gallaria the &nbsp;is designed&nbsp; By&nbsp; Css Author</span>
                <div class="links-footer" data-flex="-center w">
                    <a href="#">Home</a>|
                    <a href="#">About Us</a>|
                    <a href="#">Contact Us</a>
                </div>
            </div>
            <div class="links-follow" data-flex="end w">
                <a href="#"><i class="icon-twf"></i></a>
                <a href="#"><i class="icon-fbf"></i></a>
                <a href="#"><i class="icon-pinf"></i></a>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>