<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Woodsman</title>
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
            <header>
                <nav class="links-nav" data-flex="-center around" data-flex-480="-center around w">
                    <a href="#">home</a>
                    <a href="#">about</a>
                    <a href="#" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="411" height="127" alt="Woodsman">
                    </a>
                    <a href="#">archive</a>
                    <a href="#">email</a>
                </nav>
            </header>
            <div class="wrap" data-flex="stripe" data-flex-640="vstripe">
                <div class="blog">
                    <p class="preview">Hello and welcome! My name is John Doe, I'm an interactive designer and entreprenuer. I enjoy creating mobile & web apps with simple style. <a href="#">Learn more.</a></p>
                    <div data-childs="stripe" data-childs-800='stripe w'> 
                        <article>
                            <time>May 21st, 2011</time>
                            <div data-flex="-start between w">
                                <h2>Nulla Facilisi. Duis Aliquet In Blandit</h2>
                                <p>Vestibulum ante in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin.  <a href="#">Continue reading...</a></p>
                                <span><i class="icon-user"></i>by <a href="#">John Doe</a> in <a href="#">Web Design</a> with <a href="#">3 comments</a></span>
                                <a href="#" class='share'>Share</a>
                            </div>
                        </article>
                        <article>
                            <time>May 25st, 2011</time>
                            <div data-flex="-start between w">
                                <h2>Ut In Nulla Enim. Phasellus Molestie</h2>
                                <p>Vestibulum ante in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin.  <a href="#">Continue reading...</a></p>
                                <span><i class="icon-user"></i>by <a href="#">John Doe</a> in <a href="#">Web Design</a> with <a href="#">3 comments</a></span>
                                <a href="#" class='share'>Share</a>
                            </div>
                        </article>
                        <article>
                            <time>June 8th, 2011</time>
                            <div data-flex="-start between w">
                                <h2>Donec Semper Quam Scelerisque Gravida</h2>
                                <p>Vestibulum ante in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin.  <a href="#">Continue reading...</a></p>
                                <span><i class="icon-user"></i>by <a href="#">John Doe</a> in <a href="#">Web Design</a> with <a href="#">3 comments</a></span>
                                <a href="#" class='share'>Share</a>
                            </div>
                        </article>
                    </div>
                    <div data-flex="axis w">
                        <span>Page 1 of 57</span>
                        <div class="pagination" data-flex="stripe" data-childs="-center center">
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                            <a href="#">7</a>
                            <a href="#">8</a>
                            <a href="#">9</a>
                            <a href="#">10</a>
                            <a href="#">11</a>
                            <a href="#">12</a>
                            <a href="#">13</a>
                            <a href="#" class='gap'>...</a>
                            <a href="#">Next</a>
                            <a href="#">Last</a>
                        </div>
                    </div>
                </div>
                <aside class="sidebar" data-flex="col" data-flex-640="stripe w">
                    <div class="links-subscribe" data-flex="axis" data-childs="-center" data-flex-480="around">
                        <span><a href="#"><i class="icon-rss"></i></a> 10,023</span>
                        <span><a href="#"><i class="icon-twitter"></i></a> 7,508</span>
                        <span><a href="#"><i class="icon-facebook"></i></a> 6,491</span>
                    </div>
                    <div class='search' data-flex="-center center">
                        <form class="form-search" action="#" method="post" data-flex="axis">
                            <input type="search" placeholder="Type your search and hit enter...">
                            <input type="image" src="/images/icons/search.png">
                        </form>
                    </div>
                    <div>
                        <h3>categories</h3>
                        <div data-flex="stripe w" data-flex-480='vstripe'>
                            <ul class="links-side">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mobile Apps</a></li>
                                <li><a href="#">Geek gadgets</a></li>
                                <li><a href="#">Video games</a></li>
                                <li><a href="#">Photography</a></li>
                            </ul>
                            <ul class="links-side">
                                <li><a href="#">Typography</a></li>
                                <li><a href="#">Personal</a></li>
                                <li><a href="#">Freelance</a></li>
                                <li><a href="#">Tips & Advice</a></li>
                                <li><a href="#">Educational</a></li>
                                <li><a href="#">View all...</a></li>
                            </ul>
                        </div>                       
                    </div>
                    <div>
                        <h3>archives <small>by</small> month</h3>
                        <div data-flex="stripe w" data-flex-480='vstripe'>
                            <ul class="links-side">
                                <li><a href="#">April 2011</a></li>
                                <li><a href="#">February 2011</a></li>
                                <li><a href="#">January 2011</a></li>
                                <li><a href="#">December 2010</a></li>
                                <li><a href="#">October 2010</a></li>
                                <li><a href="#">July 2010</a></li>
                            </ul>
                            <ul class="links-side">
                                <li><a href="#">August 2009</a></li>
                                <li><a href="#">March 2009</a></li>
                                <li><a href="#">February 2009</a></li>
                                <li><a href="#">September 2008</a></li>
                                <li><a href="#">April 2008</a></li>
                                <li><a href="#">Further back...</a></li>
                            </ul>
                        </div>                       
                    </div>
                    <div class="flickr">
                        <h3>latest <small>on</small> flickr</h3>
                        <div data-flex="stripe w" data-flex-960="around w">
                            <a href='#'><img src="/images/thumbnail.png" width="60" height="60" alt=""></a>
                            <a href='#'><img src="/images/thumbnail.png" width="60" height="60" alt=""></a>
                            <a href='#'><img src="/images/thumbnail.png" width="60" height="60" alt=""></a>
                            <a href='#'><img src="/images/thumbnail.png" width="60" height="60" alt=""></a>
                            <a href='#'><img src="/images/thumbnail.png" width="60" height="60" alt=""></a>
                            <a href='#'><img src="/images/thumbnail.png" width="60" height="60" alt=""></a>
                        </div>                  
                    </div>
                    <div class="sponsors">
                        <h3>visit <small>our</small> sponsors</h3>
                        <div data-flex="vaxis">
                            <figure><img src="/images/img.png" width="130" height="99" alt=""></figure> 
                            <p>Nulla at nulla justo. Duis aliquet egestas purus in blandit. Curabitur vulputate.</p> 
                        </div>
                    </div>
                </aside>
            </div>
            <footer data-flex="center">&copy; 2011 John Doe. All Rights Reserved.</footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>