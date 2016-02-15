<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Threezine</title>
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
            <section class="lwrap" data-flex="axis">
                <nav class="links-top" data-flex="w">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Terms of Use</a>
                    <a href="#">Contact</a>
                </nav>
                <div class="links-social" data-flex="end w">
                    <a href="#"><i class="icon-fb"></i></a>
                    <a href="#"><i class="icon-del"></i></a>
                    <a href="#"><i class="icon-fl"></i></a>
                    <a href="#"><i class="icon-ff"></i></a>
                    <a href="#"><i class="icon-tb"></i></a>
                    <a href="#"><i class="icon-tw"></i></a>
                </div>
            </section>
        </header>
        <div class="lwrap">
            <div data-flex>
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="182" height="30" alt="">
                </a>
            </div>
            <nav class="links-nav" data-flex="w">
                <a href="#">home</a>
                <a href="#">graphic design</a>
                <a href="#">tutorials</a>
                <a href="#">freebies</a>
                <a href="#">psd templates</a>
                <a href="#">photography</a>
            </nav>
            <section class="slider" data-flex="-start between" data-flex-960="vstripe">
                <figure>
                    <img src="/images/img1.png">
                    <figcaption>
                        <h3>Curabitur bibendum tortor in diam viverra</h3>
                        <p>Curabitur adipiscing lacus quis diam tincidunt accumsan. Suspendisse in est orci. Nulla facilisi. Morbi lacus urna..<a href="#">(Read More)</a></p>
                    </figcaption>
                </figure>
                <div class="posts" data-flex-960="stripe w" data-flex-480="vstripe">
                    <article class="clearfix">
                        <figure><img src="/images/img2.png"></figure>
                        <p><a href="#">Curabitur bibendum tortor in diam viverra</a></p>
                    </article>
                    <article class="clearfix">
                        <figure><img src="/images/img3.png"></figure>
                        <p><a href="#">Pellentesque phare tramy mollis tortor volutpat</a></p>
                    </article>
                    <article class="clearfix">
                        <figure><img src="/images/img4.png"></figure>
                        <p><a href="#">Cras ac felis eget quampos consectetur sagittis</a></p>
                    </article>
                    <article class="clearfix">
                        <figure><img src="/images/img5.png"></figure>
                        <p><a href="#">Sed imperdiet lorem in ipsum ultrices</a></p>
                    </article>
                </div>
            </section>
            <section class="content-wrap" data-flex="stripe" data-flex-640="stripe w">
                <aside class="sidebar">
                    <div class="posts">
                        <h3 class="hdr">recent posts</h3>
                        <article class="clearfix">
                            <figure><img src="/images/img6.png"></figure>
                            <p><a href="#">Curabitur bibendum tortor in diam viverra</a></p>
                            <a href="#">9 Comments</a>        
                        </article>
                        <article class="clearfix">
                            <figure><img src="/images/img3.png"></figure>
                            <p><a href="#">Pellentesque phare tramy mollis tortor volutpat</a></p>
                            <a href="#">13 Comments</a>        
                        </article>
                        <article class="clearfix">
                            <figure><img src="/images/img7.png"></figure>
                            <p><a href="#">Cras ac felis eget quampos consectetur sagittis</a></p>
                            <a href="#">21 Comments</a>        
                        </article>
                        <article class="clearfix">
                            <figure><img src="/images/img2.png"></figure>
                            <p><a href="#">Sed imperdiet lorem in ipsum ultrices</a></p>
                            <a href="#">15 Comments</a>         
                        </article>
                    </div>
                    <div class="posts">
                        <h3 class="hdr">popular posts</h3>
                        <article class="clearfix">
                            <figure><img src="/images/img8.png"></figure>
                            <p><a href="#">Curabitur bibendum tortor in diam viverra</a></p>
                            <a href="#">9 Comments</a>        
                        </article>
                        <article class="clearfix">
                            <figure><img src="/images/img9.png"></figure>
                            <p><a href="#">Pellentesque phare tramy mollis tortor volutpat</a></p>
                            <a href="#">13 Comments</a>       
                        </article>
                        <article class="clearfix">
                            <figure><img src="/images/img5.png"></figure>
                            <p><a href="#">Cras ac felis eget quampos consectetur sagittis</a></p>
                            <a href="#">21 Comments</a>      
                        </article>
                        <article class="clearfix">
                            <figure data-flex><img src="/images/img3.png"></figure>
                            <p><a href="#">Sed imperdiet lorem in ipsum ultrices</a></p>
                            <a href="#">15 Comments</a>       
                        </article>
                    </div>
                    <div class="comments">
                        <h3 class="hdr">recent comments</h3>
                        <div data-flex="col">                                                          
                            <p><a href="#">  Violet: </a>Duis turpis risus, blanditut rhoncus iaculis, vulputate... <a href="#">  »</a></p>                         
                            <p><a href="#">  Aaron: </a>Vestibulum ante ipsumor primis in faucibus orci luctus... <a href="#">  »</a></p>                               
                            <p><a href="#">  Eric: </a>Cras lorem arcu, euismod in pulvinar nec, luctus in purus... <a href="#">  »</a></p>                              
                            <p><a href="#">  Julia: </a>Nunc vel nunc lectus, vitae dui odio cursus mauris... <a href="#">  »</a></p>
                        </div>                        
                    </div>
                    <div class="flickr">
                        <h3 class="hdr">flickr</h3>
                        <div data-flex="stripe w" data-flex-960="around w">
                            <a href="#"><img src="images/img16.png"> </a>
                            <a href="#"><img src="images/img16.png"> </a>
                            <a href="#"><img src="images/img16.png"> </a>
                            <a href="#"><img src="images/img16.png"> </a>
                            <a href="#"><img src="images/img16.png"> </a>
                            <a href="#"><img src="images/img16.png"> </a>
                        </div>
                    </div>
                    <div class="twitter">
                        <h3 class="hdr">twitter</h3>
                            <p><a href="#">#psd #newsletter </a>| Download "Locus Newsletter" layout 1 PSD here: <a href="#">http://is.gd/gcrc2  - about 3 hours ago</a></p>
                            <p><a href="#">#pattern #notepad </a>| Download 9 notepad patterns here: <a href="#">http://is.gd/gcr8s about 3 hours ago</a></p>                            
                        <a href="mailto:@elemisdesign">@elemisdesign</a>
                    </div>
                </aside>
                <div class="content">
                    <article class="blog">
                        <h2>class aptent taciti sociosu ad litora</h2>
                        <div class="links-meta" data-flex="w" data-childs="-center">
                            <a href="#"><i class="icon-calendar"></i>21 Oct 2010</a>
                            <a href="#"><i class="icon-user"></i>by admin</a>
                            <a href="#"><i class="icon-cloud"></i>12 Comments</a>
                            <a href="#"><i class="icon-link"></i>Permalink</a>
                        </div>
                        <figure><img src="/images/img13.png"></figure>
                        <p>Nulla nec ante sit amet felis gravida tincidunt et non mi. Ut accumsan hep sollicitudin neque sit amet ullamcorper. Quisque viverra sem id quamir imperdiet et dictum metus scelerisque. Fusce pellentesque vulputate nisi semper accumsan. Proin leo nibh, scelerisque quis vehicula intep kemry, pellentesque et nunc. Phasellus non eros sit amet nunc vulputate pulvinar. Ut id enim mi, eu semper purus. Ut tristique eros consectetur antemor vulputate ac cursus eros condimentum. Morbi sed neque nisl. Duis venena libero ac velit sagittis tristique. Sed euismod consectetur tincidunt. Vivamus malesuada sem id nulla condimentum pretium. Aenean hendrerit bibendum mi nec tristique. Nulla vehicula bibendum quam, ac accumsan leo consectetur ac. Aliquam viverra quam eu erat rhoncus adipiscing. Quisque viverra sem id quamir imperdiet et dictum metus scelerisque. Fusce pellentesque vulputate nisi semper accumsan. Proin leo nibh, scelerisque quis vehicula intep kemry, pellentesque et nunc. Phasellus non eros sit amet nunc vulputate pulvinar. Ut id enim mi, eu semper purus. Ut tristique eros consectetur antemor.</p>
                        <div class="links-tag" data-flex="-center w">
                            <i class="icon-mark"></i>
                            <a href="#">Graphic Design</a>, 
                            <a href="#">Web Design</a>
                        </div>
                    </article>
                    <article class="about">
                        <h3 class="hdr">about the author</h3>
                        <div class="clearfix">
                            <figure><img src="/images/img14.png"></figure>
                            <p>Aliquam viverra quam eu erat rhoncus adipisc. Quisque viverra sem id quamir imperdiet et dictum metus. Fusce pellentesque vulputate nisi semper accumsan. Proin leo nibh, scelerisque quis vehicula intep kemry, pellentesque et nunc etrapuqe at semper leo, negue sed.</p>
                        </div>
                    </article>
                    <div class="responses">
                        <h3>2 responses to "class aptent taciti sociosu ad litora"</h3>
                        <div>
                            <article class="clearfix">
                                <figure><img src="/images/img15.png"></figure>
                                <h4>barmey simpler</h4>
                                <p><a href="#">Vivamus a turpis justo, nec lobortis felis. Donec id diam enim euismod gravida. Sed non dui nec sapien mollis ornare.</a></p> 
                            </article>
                            <article class="clearfix">
                                <figure><img src="/images/img15.png"></figure>
                                <h4>barney simpler</h4>
                                <p><a href="#">Vivamus a turpis justo, nec lobortis felis. Donec id diam enim euismod gravida. Sed non dui nec sapien mollis ornare.</a></p> 
                            </article>
                        </div>
                        <h3>leave a comment</h3>
                        <form action="#" method="post">
                            <input type="text" name="input" placeholder="Name">
                            <input type="email" name="input" placeholder="Email">
                            <input type="url" name="input" placeholder="Website">
                            <textarea placeholder="Message"></textarea>
                            <button><span class="btn btn-default">Submit</span></button> 
                        </form>
                    </div>
                </div>
                <aside class="sidebar">
                    <div class="search">
                        <h3 class="hdr">search</h3>
                        <form action="#" method="post">
                            <input type="search" name="input" placeholder="Search">
                        </form>
                    </div>
                    <div class="posts">
                        <h3 class="hdr">featured posts</h3>
                        <article class="clearfix">
                            <figure data-flex><img src="/images/img4.png"></figure>
                            <p><a href="#">Curabitur bibendum tortor in diam viverra</a></p>
                            <a href="#">9 Comments</a>        
                        </article>
                        <article class="clearfix">
                            <figure data-flex><img src="/images/img8.png"></figure>
                            <p><a href="#">Pellentesque phare tramy mollis tortor volutpat</a></p>
                            <a href="#">13 Comments</a>        
                        </article>
                        <article class="clearfix">
                            <figure data-flex><img src="/images/img10.png"></figure>
                            <p><a href="#">Cras ac felis eget quampos consectetur sagittis</a></p>
                            <a href="#">21 Comments</a>         
                        </article>
                        <article class="clearfix">
                            <figure><img src="/images/img11.png"></figure>
                            <p><a href="#">Sed imperdiet lorem in ipsum ultrices</a></p>
                            <a href="#">15 Comments</a>        
                        </article>
                    </div>
                    <div class="tags">
                        <h3 class="hdr">tags</h3>
                        <div class="links-tags" data-childs="-center center" data-flex="w">
                            <a href="#">Photography</a>
                            <a href="#">Web Design</a>
                            <a href="#">Drawings</a>
                            <a href="#">Coding</a>
                            <a href="#">Vector</a>
                            <a href="#">Manipulation</a>
                            <a href="#">Textures</a>
                            <a href="#">Print</a>
                            <a href="#">Animation</a>
                            <a href="#">Black & White</a>
                            <a href="#">Digital Art</a>
                            <a href="#">Graphic Design</a>
                        </div>
                    </div>
                    <div class="archives">
                        <h3 class="hdr">archives</h3>
                        <div class="links-archive" data-flex="col -start">
                            <a href="#">October 2010</a>
                            <a href="#">September 2010</a>
                            <a href="#">August 2010</a>
                            <a href="#">July 2010</a>
                            <a href="#">June 2010</a>
                            <a href="#">May 2010</a>
                            <a href="#">April 2010</a>
                            <a href="#">March 2010</a>  
                        </div>
                    </div>
                    <div class="advertisement">
                        <h3 class="hdr">advertisement</h3>
                        <figure><img src="/images/img12.png"></figure>
                        <figure><img src="/images/img12.png"></figure>
                    </div>
                </aside>
            </section>
        </div>
        <footer>
            <div class="lwrap" data-flex="-center">
                <span>&copy; Copyright Threezine WordPress Theme - Designed by elemis</span>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>