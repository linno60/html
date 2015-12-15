<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BTemplate</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/reset-elements.css">
        <link rel="stylesheet" href="/css/data-flex.css">
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
                <nav data-flex='col' class='links-nav'>
                    <a href='#' class='active'>Home</a>
                    <a href='#'>About</a>
                    <a href='#'>Consulting</a>
                    <a href='#'>Contact</a>
                </nav>
            </div>
        </header>
        <div class='lwrap' data-flex='stripe' data-flex-480='vstripe r'>
            <div class='content' data-flex='vaxis'>
                <div class='post'>
                    <div data-flex class='post-caption'>
                        <time class='lbl lbl-default' data-flex='vstripe' data-childs='-center center'><span>4</span><small>jan</small></time>
                        <div>
                            <h2>Will the new Macbook be ultra thin?</h2>
                            <span>Posted by <a href='#'>Jonnotie</a> on <time>4 January 2008</time> &mdash; <a href='#'>8 Comments</a></span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</blockquote>
                    <p>Lorem ipsum dolor sit amet, consec&shy;tetur adipi&shy;sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com&shy;modo consequat. Duis aute irure dolor in reprehenderit in Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <p>voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <span class='more' data-flex='end'><a href='#'>Continue reading</a> &raquo;</span>
                </div>
                <div class='post'>
                    <div data-flex class='post-caption'>
                        <time class='lbl lbl-default' data-flex='vstripe' data-childs='-center center'><span>3</span><small>jan</small></time>
                        <div>
                            <h2>Let's talk about the amazing Jonno</h2>
                            <span>Posted by <a href='#'>Jonnotie</a> on <time>3 January 2008</time> &mdash; <a href='#'>235 Comments</a></span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <span class='more' data-flex='end'><a href='#'>Continue reading</a> &raquo;</span>
                </div>
                <div class='post'>
                    <div data-flex class='post-caption'>
                        <time class='lbl lbl-default' data-flex='vstripe' data-childs='-center center'><span>2</span><small>jan</small></time>
                        <div>
                            <h2>How to be a succesful entrepeneur</h2>
                            <span>Posted by <a href='#'>Jonnotie</a> on <time>2 January 2008</time> &mdash; <a href='#'>4 Comments</a></span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <span class='more' data-flex='end'><a href='#'>Continue reading</a> &raquo;</span>
                </div>
                <div class='pagination' data-flex>
                    <a href='#' class='btn btn-default'>&laquo;<span>Previous page</span></a>
                    <a href='#' class='btn btn-default'><span>Next page</span>&raquo;</a>
                </div>
            </div>
            <aside class='sidebar'>
                <h3>About me</h3>
                <div class='about' data-flex='-start'>
                    <figure><img src="/images/photo.png" width="87" height="104" alt=""></figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis trud exercitation ullamco laboris nisi.</p>
                </div>
                <h3>Subscribe</h3>
                <ul data-flex='col' class='links-subscribe marker'>
                    <li><a href='#'>Recent articles</a></li>
                    <li><a href='#'>Recent comments</a></li>
                </ul>
                <h3>Categories</h3>
                <ul data-flex='col' data-childs='axis' class='links-categories'>
                    <li><a href='#'>General</a><span>12 articles</span></li>
                    <li><a href='#'>Fame</a><span>3 articles</span></li>
                    <li><a href='#'>PR</a><span>4 articles</span></li>
                    <li><a href='#'>Blogs</a><span>2 articles</span></li>
                    <li><a href='#'>Social networks</a><span>6 articles</span></li>
                    <li><a href='#'>Money</a><span>3 articles</span></li>
                    <li><a href='#'>Networks</a><span>10 articles</span></li>
                </ul>
            </aside>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>