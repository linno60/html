<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Graphixcorp</title>
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
            var LAYOUT_WIDTH = 980;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="header-wrap">
            <div class="lwrap">
                <header class="header" data-flex="axis w" data-flex-480="vaxis">
                    <a href="#" title="Return to the homepage" id="logo" >
                        <img src="/images/logo.png" width="221" height="60" alt="Graphixcorp">
                    </a>
                    <span class="call">Call: <span>123-456-7890</span>
                </header>
                <div class="nav" data-flex="axis w" data-flex-800="vstripe w">
                    <nav class="links-nav" data-flex="stripe w" data-childs="-center center" data-flex-800="center w">
                        <a href="#" class="active">home</a>
                        <a href="#">about us</a>
                        <a href="#">services</a>
                        <a href="#">products</a>
                        <a href="#">testimonials</a>
                        <a href="#">blog</a>
                        <a href="#">contact us</a>
                    </nav>
                    <form action="#" method="post">
                        <select>
                            <option selected>English</option>
                            <option>German</option>
                            <option>French</option>          
                        </select>
                    </form>
                </div>
                <div class="slider-wrap" data-flex="col -center">
                    <div class="slider" data-flex="axis">
                        <div data-flex-480="col -center around">
                            <h1>Quality Graphic Design</h1>
                            <p>Pellentesque augue nunc, volutpat ac fringilla ut, aliquet nec risus. Sed vitae nisi hendrerit magna interdum sodales a sed diam. Donec at ligula nibh, quis ullamcorper odio. </p>
                            <a href="#" class="btn btn-more">Read More&ensp;></a>
                        </div>
                        <figure data-flex><img src="/images/bags.png" width="360" height="316" alt=""></figure>
                    </div>
                    <div class="links-categories" data-flex="stripe w" data-childs="-center center">
                        <a href="#"><i class="icon-globe"></i>web design</a>
                        <a href="#" class="active"><i class="icon-clock"></i>graphic design</a>
                        <a href="#"><i class="icon-note"></i>icon design</a>
                        <a href="#"><i class="icon-target"></i>logo design</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="lwrap content-wrap">
            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor tortor tellus, ut consectetur arcu. Nulla consequat egestas dapibus. Nullam eu quam sit amet justo imperdiet viverra.
                <cite> --&ensp;John Doe, <a href="#">Graphicsfuel.comcom</a></cite>
            </blockquote>
            <div class="content" data-flex="stripe" data-flex-480="vstripe">
                <article>
                    <h2 data-flex="-center"><i class="icon-user"></i>Who we are</h2>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor tortor tellus, ut consectetur arcu. </p>
                        <p>Nulla consequat egestas dapibus. Nullam eu quam sit amet justo imperdiet viverra. Vivamus leo lacus, interdum ac interdum </p>
                        <span class="more"><a href="#">read more</a> ></span>
                    </div>
                </article>
                <figure class="divider" data-flex="-center">
                    <img src="/images/shadowarticle.png" width="10" height="190" alt="">
                </figure>
                <article>
                    <h2 data-flex="-center"><i class="icon-gear"></i>Our Services</h2>
                    <p>Pellentesque augue nunc, volutpat ac fringilla ut, aliquet nec risus. Sed vitae nisi hendrerit magna interdum sodales a sed diam. Donec at ligula nibh, quis ullamcorper odio. Fusce ullamcorper condimentum eleifend. Aliquam erat volutpat.</p>
                    <span class="more"><a href="#">read more</a> ></span>
                </article>
                <figure class="divider" data-flex="-center">
                    <img src="/images/shadowarticle.png" width="10" height="190" alt="">
                </figure>
                <article>
                    <h2 data-flex="-center"><i class="icon-star"></i>From the blog</h2>
                    <div class="post" data-childs="col">
                        <div>
                            <time>6th June</time>
                            <p>Pellentesque augue nunc, volutpat ac fringilla ut, aliquet nec risus. <span class="more"><a href="#">read&nbsp;more</a>&nbsp;></span></p>
                        </div>
                        <div>
                            <time>6th June</time>
                            <p>Pellentesque augue nunc, volutpat ac fringilla ut, aliquet nec risus. <span class="more"><a href="#">read&nbsp;more</a>&nbsp;></span></p>
                        </div>
                        <div>
                            <time>6th June</time>
                            <p>Pellentesque augue nunc, volutpat ac fringilla ut, aliquet nec risus. <span class="more"><a href="#">read&nbsp;more</a>&nbsp;></span></p>
                        </div> 
                    </div>   
                </article>
            </div> 
        </div>
        <footer>
            <div class="lwrap">    
                <div class="footer">
                    <form action='#' method='post' data-flex='axis' data-flex-480="vstripe">
                        <input type="text" placeholder="Your Name" name='input'>
                        <input type="email" placeholder="Email address"  name='input'>
                        <button><span class="btn btn-submit">subscribe</span></button>
                    </form>
                    <div data-flex='stripe' data-flex-480="vstripe">
                        <div data-flex='col'>
                            <nav class="links-footer" data-flex="-center w">
                                <a href="#" class="active">Home</a>|
                                <a href="#">About Us</a>|
                                <a href="#">Services</a>|
                                <a href="#">Products</a>|
                                <a href="#">Testimonials</a>|
                                <a href="#">Blog</a>|
                                <a href="#">Contact Us</a>
                            </nav>
                            <span class="copyright visible">Copyright &copy; GrafixPSD. All rights reserved. This design is created by <a href='#'>GraphicsFuel.com</a></span>
                            <div class="links-social" data-flex>
                                <a href="#"><i class="icon-tw"></i></a>
                                <a href="#"><i class="icon-rss"></i></a>
                                <a href="#"><i class="icon-fb"></i></a>
                                <a href="#"><i class="icon-in"></i></a>
                            </div>
                        </div>
                        <div>
                            <h5>Our Locations</h5>
                            <figure data-flex><img src="/images/map.png" width="226" height="104" alt=""></figure>
                            <span class="copyright hidden">Copyright &copy; GrafixPSD. All rights reserved. This design is created by <a href='#'>GraphicsFuel.com</a></span>                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>