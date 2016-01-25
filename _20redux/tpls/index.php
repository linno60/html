<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Redux</title>
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
        <header>
            <div class="lwrap">
                <div class='nav' data-flex='axis'>
                    <div data-flex="axis">
                        <a href="/" title="Return to the homepage" id="logo">
                            <img src="/images/logo.png" width="96" height="32" alt="Redux">
                        </a>
                        <small>|&ensp;Super-Dooper Business</small>
                    </div>
                    <nav class="links-nav" data-flex="end w" data-childs="-center center">
                        <a href='#'>Features<i class='icon-arrow'></i></a>
                        <a href='#'>Templates<i class='icon-arrow'></i></a>
                        <a href='#'>Shortcodes</a>
                        <a href='#'>Portfolio</a>
                        <a href='#'>Blog</a>
                        <a href='#' class='active'>Contact</a>
                    </nav>
                </div> 
                <h1>The Theme You've Been Waiting For. Seriously.</h1>
                <p>A beautiful, unique, powerful, WordPress theme that oooozes quality, is jammed-packed with features, is ripe for customisation and better yet, kind to your wallet - sounds almost too good to be true!</p>
                <div class="slider" data-flex='axis'>
                    <a href="#"><i class="icon-prev"></i></a>
                    <div data-flex='-end between'> 
                        <figure><img src="/images/left.png"></figure>
                        <figure class='cover'><img src="/images/middle.png"></figure>
                        <figure><img src="/images/right.png"></figure>
                    </div>
                    <a href="#"><i class="icon-next"></i></a>
                </div>                       
        </header>
        <section class='feature'>
            <div class='lwrap' data-flex='stripe'>
                <div>
                    <article class='clearfix'>
                        <figure>
                            <a href='#' class='btn btn-plus'><i class='icon-plus'></i></a>
                            <img src="images/img1.png">
                        </figure>
                        <h6>Pixel Perfect Design</h6>
                        <p>Gorgeous design with time and attention dedicated to each and every pixel.</p>
                    </article> 
                    <article class='clearfix'>
                        <figure>
                            <a href='#' class='btn btn-plus'><i class='icon-plus'></i></a>
                            <img src="images/img1.png">
                        </figure>
                        <h6>Pixel Perfect Design</h6>
                        <p>Gorgeous design with time and attention dedicated to each and every pixel.</p>
                    </article> 
                </div>
                <div>
                    <article class='clearfix'>
                        <figure>
                            <a href='#' class='btn btn-plus'><i class='icon-plus'></i></a>
                            <img src="images/img1.png">
                        </figure>
                        <h6>Pixel Perfect Design</h6>
                        <p>Gorgeous design with time and attention dedicated to each and every pixel.</p>
                    </article> 
                    <article class='clearfix'>
                        <figure>
                            <a href='#' class='btn btn-plus'><i class='icon-plus'></i></a>
                            <img src="images/img1.png">
                        </figure>
                        <h6>Pixel Perfect Design</h6>
                        <p>Gorgeous design with time and attention dedicated to each and every pixel.</p>
                    </article> 
                </div>
                <div>                        
                    <h6>Pixel Perfect Design</h6>
                    <p>Gorgeous design with time and attention dedicated to every pixel. Gorgeous design with time and attention dedicated to every pixel. Time and attention</p>
                    <a href='#' class='btn btn-default'>Feature Tour</a>
                    <a href='#' class='btn btn-default'>Purchase Now!</a>
                </div>
            </div>
        </section>
        <section class='content'>
            <div class='lwrap'>
                <div class='about' data-flex='stripe'>
                    <div>
                        <h5>Endlessly configurable content.</h5>
                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>
                        <p>Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper.</p>
                    </div>
                    <div>
                        <h5>The right blend of widgets and options.</h5>
                        <figure>
                            <a href='#' class='btn btn-plus'><i class='icon-plus'></i></a>
                            <img src="/images/img2.png">
                        </figure>
                        <span class='caption' data-flex='-center center'>Only options that are needed, none of the bloat.</span>
                        <figure>
                            <a href='#' class='btn btn-plus'><i class='icon-plus'></i></a>
                            <img src="/images/img3.png">
                        </figure>
                        <span class='caption' data-flex='-center center'>12 extra helpings of widgety goodness. Mmmm.</span>
                    </div>
                    <div>
                        <h5>Take a look behind the scenes.</h5>
                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus</p>
                        <div class='overview' data-flex="col -center center">
                            <a href='#' class='btn btn-plus'><i class='icon-plus'></i></a>
                            <figure><img src="/images/logo.png" width="96" height="32" alt=""></figure> 
                            <small>Overview of options and widgets</small>
                        </div>
                        <span class='caption' data-flex='-center center'>Overview of options and widgets - 2 mins 33 secs.</span>
                    </div>
                </div>
                <div class='callout' data-flex='axis'>
                    <div>
                        <h2>Join the cool kids and get your copy of Redux now...</h2>
                        <p>Redux is avalaible for the ridiculously low, one-time cost of $37! That's right, I'm practically giving it away!</p>
                    </div>
                    <a href='#' class='btn btn-default'>Yes, I want this theme now!</a>  
                </div> 
                <div class='blog' data-flex='stripe'>
                    <div>
                        <h5>Ramblings from the Redux Blog.</h5>
                        <article class='clearfix'>
                            <figure data-flex><img src="images/img4.png"></figure>
                            <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor</p>
                            <time>November 7 2010,</time>
                            <a href='#'>2 Comments</a>
                        </article>
                        <article class='clearfix'>
                            <figure data-flex><img src="images/img4.png"></figure>
                            <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor</p>
                            <time>November 7 2010,</time>
                            <a href='#'>2 Comments</a>
                        </article>
                        <article class='clearfix'>
                            <figure data-flex><img src="images/img4.png"></figure>
                            <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor</p>
                            <time>November 7 2010,</time>
                            <a href='#'>2 Comments</a>
                        </article>
                        <article class='clearfix'>
                            <figure data-flex><img src="images/img4.png"></figure>
                            <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor</p>
                            <time>November 7 2010,</time>
                            <a href='#'>2 Comments</a>
                        </article>  
                    </div>
                    <div>
                        <h5>Musings in 140 characters or less.</h5>
                        <p><a href='#'>@JamesBliss</a> Hard to get get a balance for those that know their way around WP/HTML/CSS and those that don't I find <time>33 minutes ago</time></p>
                        <p><a href='#'>@JamesBliss</a> Hard to get get a balance for those that know their way around WP/HTML/CSS and those that don't I find <time>33 minutes ago</time></p>
                        <p><a href='#'>@JamesBliss</a> Hard to get get a balance for those that know their way around WP/HTML/CSS and those that don't I find <time>33 minutes ago</time></p>
                        <p><a href='#'>@JamesBliss</a> Hard to get get a balance for those that know their way around WP/HTML/CSS and those that don't I find <time>33 minutes ago</time></p>                        
                    </div>
                    <div>
                        <h5>What customers are sayin'.</h5>  
                        <article class="clearfix">
                            <figure><img src="images/img4.png"></figure>
                            <h3>Marcin Gora</h3>
                            <span>Managing Director Apple UK</span>
                            <a href='#'>Apple.co.uk</a>
                            <blockquote>"Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet..."</blockquote>                        
                        </article>
                        <article class="clearfix">
                            <figure><img src="images/img4.png"></figure>
                            <h3>Steven Bluck</h3>
                            <span>Technical Director Audi International</span>
                            <a href='#'>Audi.com</a>
                        </article>
                        <blockquote>"Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet..."</blockquote>                        
                    </div>
                </div>
            </div>
        </section>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>