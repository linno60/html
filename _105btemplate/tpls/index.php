<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Btemplate</title>
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
            var LAYOUT_WIDTH = 900;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class='lwrap' data-flex='axis'>
                <a href="#" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="177" height="28" alt="Btemplate">
                </a>
                <nav data-flex="col" class="links-nav">
                    <a href="#" class="active">Home</a>
                    <a href="#">About</a>
                    <a href="#">Consulting</a>
                    <a href="#">Contact</a>
                </nav>
            </div>
        </header>
        <div class='lwrap' data-flex='stripe' data-flex-640='vstripe r'>
            <div class='content' data-flex='vaxis'>
                <div class='post'>
                    <div class='post-caption clearfix'>
                        <time class='lbl lbl-default' data-childs='-center center'><span>4</span><small>jan</small></time>
                        <h2>Will the new Macbook be ultra thin?</h2>
                        <span>Posted by <a href='#'>Jonnotie</a> on <time>4 January 2008</time> &mdash; <a href='#'>8 Comments</a></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</blockquote>
                    <p>Lorem ipsum dolor sit amet, consec&shy;tetur adipi&shy;sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com&shy;modo consequat. Duis aute irure dolor in reprehenderit in Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <p>voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <em class='more' data-flex='end'><a href='#'>Continue reading</a> &raquo;</em>
                </div>
                <div class='post'>
                    <div class='post-caption'>
                        <time class='lbl lbl-default' data-childs='-center center'><span>3</span><small>jan</small></time>
                        <h2>Let's talk about the amazing Jonno</h2>
                        <span>Posted by <a href='#'>Jonnotie</a> on <time>3 January 2008</time> &mdash; <a href='#'>235 Comments</a></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <span class='more' data-flex='end'><a href='#'>Continue reading</a> &raquo;</span>
                </div>
                <div class='post'>
                    <div class='post-caption'>
                        <time class='lbl lbl-default' data-childs='-center center'><span>2</span><small>jan</small></time>
                        <h2>How to be a succesful entrepeneur</h2>
                        <span>Posted by <a href='#'>Jonnotie</a> on <time>2 January 2008</time> &mdash; <a href='#'>4 Comments</a></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <span class='more' data-flex='end'><a href='#'>Continue reading</a> &raquo;</span>
                </div>
                <div class="pagination" data-flex="around" data-childs="-center center">
                    <a href='#'>&laquo;<span>Previous page</span></a>
                    <a href='#'><span>Next page</span>&raquo;</a>
                </div>
            </div>
            <aside class='sidebar' data-flex-640="stripe w">
                <div class='about'>
                    <h3>About me</h3>
                    <div class="clearfix">
                        <figure><img src="/images/photo.png" width="87" height="104" alt=""></figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis trud exercitation ullamco laboris nisi.</p>
                    </div>
                </div>
                <div>
                    <h3>Subscribe</h3>
                    <ul class="links-subscribe">
                        <li><a href="#">Recent articles</a></li>
                        <li><a href="#">Recent comments</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Categories</h3>
                    <ul data-childs="axis" class="links-categories">
                        <li><a href="#">General</a><em>12 articles</em></li>
                        <li><a href="#">Fame</a><em>3 articles</em></li>
                        <li><a href="#">PR</a><em>4 articles</em></li>
                        <li><a href="#">Blogs</a><em>2 articles</em></li>
                        <li><a href="#">Social networks</a><em>6 articles</em></li>
                        <li><a href="#">Money</a><em>3 articles</em></li>
                        <li><a href="#">Networks</a><em>10 articles</em></li>
                    </ul>
                </div>
            </aside>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>