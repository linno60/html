<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Frosty</title>
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
            <div class='lwrap'>
                <div data-flex='axis'>
                    <a href="#" title="Return to the homepage" id="logo" data-flex>
                        <img src="/images/logo.png" width="225" height="87" alt="Frosty">
                    </a>
                    <div class='links-social' data-flex="end w">
                        <a href='#'><i class="icon-fb"></i></a>
                        <a href='#'><i class="icon-tw"></i></a>
                        <a href='#'><i class="icon-in"></i></a>
                    </div>
                </div>
                <nav class='links-nav' data-flex="w" data-childs="-center">
                    <a href='#' class='active'>Home</a>
                    <a href='#'>About us</a>
                    <a href='#'>Services</a>
                    <a href='#'>Projects</a>
                    <a href='#'>Gallery</a>
                    <a href='#'>Links</a>
                    <a href='#'>Blog</a>
                    <a href='#'>Contacts</a>
                </nav>
            </div>
        </header>
        <div class='lwrap'>
            <div class="content-wrap">
                <div class="slider" data-flex="col -center">
                    <a href='#' class='prev'><i class="icon-prev"></i></a>
                    <figure>
                        <img src="/images/photo.png" width="907" height="416" alt="">
                        <figcaption data-flex='col center'>
                            <h2>Here is some of our recent work</h2>
                            <span>Snow on the ground</span>
                        </figcaption>
                    </figure>
                    <a href='#' class='next'><i class="icon-next"></i></a>
                    <div class='links-controls' data-flex="center">
                        <a href='#' class='active'></a>
                        <a href='#'></a>
                        <a href='#'></a>
                        <a href='#'></a>
                    </div>
                </div>
                <h1 class="title" data-flex="axis">We work with you to create stunning results</h1>
                <div class="grid" data-flex="stripe w" data-flex-480="vstripe">
                    <div>
                        <h2 data-flex="-center"><i class="icon-monitor"></i>How we work</h2>
                        <p>tis antiis aut quidemo blaborem dolutemporum illese voluptate dolori dolores volupit optatur sus explabo. Pis nim ut quatem nos repratus alissimus venihil lorunti orecull uptaepudae illuptatios magnitibus doloribusae nessime sequias deliquis vollaut lab inventi omnihilitem es era dici int.</p>
                        <p>Nam, sam inullab inti officiet lab il ma comnis autem ea vitiati tetur</p>
                        <span class='more'>&raquo;<a href='#'>read more</a></span>
                    </div>
                    <div>
                        <h2 data-flex="-center"><i class="icon-location"></i>Our offices</h2>
                        <div data-childs="col">
                            <div class="item">
                                <span>London, UK</span>
                                <span class='more'>&raquo;<a href='#'>more details</a></span>
                            </div>
                            <div class="item">
                                <span>Paris, France</span>
                                <span class='more'>&raquo;<a href='#'>more details</a></span>
                            </div>
                            <div class="item">
                                <span>New York, USA</span>
                                <span class='more'>&raquo;<a href='#'>more details</a></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 data-flex="-center"><i class="icon-cloud"></i>What people say</h2>
                        <blockquote>"Ciationseque in repera derore, qui idelendae eaquias adisit odit molupic tet pratis eic to ea volore et que nobit imin et la de dolectusto eatur mod experch illuptatae parcipsum quatis alique mos et aut occaeqexpero odi solorpori blab id quametu sdamus atisciliam, sunt quostia venectur, officatem. Muscips aectotatet antoreperum rerunt offic te voloritibus, quuntur?"<cite>LC</cite></blockquote>
                        <span class='more'>&raquo;<a href='#'>read more</a></span>
                    </div>
                </div>
            </div>
            <footer data-flex="-center">
                <span>Copyright &copy; Ian Barnard Design</span>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>