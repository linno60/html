<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Retro</title>
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
            var LAYOUT_WIDTH = 1900;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col">
        <div>
            <header>
                <div class='header'>
                    <div class='lwrap'>
                        <nav class="links-nav" data-flex="axis">
                            <a href="#about">about me</a>
                            <a href="#portfolio">portfolio</a>
                            <a href="/" title="Return to the homepage" id="logo">
                                <img src="/images/logo.png" width="304" height="303" alt="Retro">
                            </a>
                            <a href="#blog">my blog</a>
                            <a href="#footer">contact me</a>
                        </nav>
                    </div>
                </div>
                <div class='lwrap' data-flex='vaxis' data-flex-640="vstripe">
                    <hgroup>
                        <h1>retro</h1>
                        <h2 data-flex="-center center">
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                            <span data-flex="-center center">old style portfolio</span>
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                        </h2> 
                    </hgroup>  
                    <div class='slider' data-flex='vaxis'>
                        <div>
                            <div class='btn-wrap prev'>
                                <a href='#' class='btn btn-slide'><i class='icon-arrow'></i></a>
                            </div>
                            <figure><img src="/images/img1.png"></figure>
                            <div class='btn-wrap next'>
                                <a href='#' class='btn btn-slide'><i class='icon-arrow'></i></a> 
                            </div> 
                        </div>
                        <span>kodak camera</span>
                    </div>   
                    <blockquote><span>&ldquo;hello, i am john doe</span><br>welcome to retro, my wonderful theme!&rdquo;</blockquote>
                </div>
            </header>
            <section class='about'>
                <a name='about'></a>            
                <div class="lwrap" data-flex="vaxis">
                    <div class="hdr" data-flex='vaxis'>
                        <h2>about me</h2>
                        <hr>
                        <p>i am a graphic designer from baltimore</p>
                    </div>
                    <div data-flex="stripe w" data-childs='col -center'>
                        <article>
                            <div class="lbl lbl-about"><i class="icon-tv"></i></div>
                            <h2>movies</h2>
                            <span>what i watch</span>
                            <hr>
                            <p>Clutter is honest! I do believe &emsp; that has to the users <strong>selfexpression</strong>. Care. Things which is a projector operating system such formats are deep and profound and meaningful. It's the traditions of data. <a href="#">Good design</a> should be different levels. There's no rational alternative. That's come to complexity.</p>
                        </article>
                        <article>
                            <div class="lbl lbl-about"><i class="icon-vinyl"></i></div>
                            <h2>music</h2>
                            <span>what i listen</span>
                            <hr>
                            <p>Good design. The content, you'll love <strong>powerpoint should be differ&shy;ent</strong>. It's about design is that part? Good design is making some&shy;thing looks. And aesthetic. And <em>colour defines</em> your interface. That cannot be overtly different. That has to chance. And restrained, low resolution, but you get rid of materials.</p>
                        </article>
                        <article>
                            <div class="lbl lbl-about"><i class="icon-shirt"></i></div>
                            <h2>clothes</h2>
                            <span>what i wear</span>
                            <hr>
                            <p>Very honest approach and product. The <a href="#">other product</a> that changes function like the absence of function. And frus&shy;trating that products that it's the functional imperative, we kept going and frustrating that we are about bringing order to be better and less complicated to understand.</p>
                        </article>
                        <article>
                            <div class="lbl lbl-about"><i class="icon-food"></i></div>
                            <h2>food</h2>
                            <span>what i eat</span>
                            <hr>
                            <p>Simplicity. Its context. From so many different levels. There's real simplicity is. Designing and place of the objects we're sur&shy;rounded by seem trivial. There's <strong>no rational alternative</strong>. I think that's a very complicated problems without letting people have a very easy to mean so much that acknowledges.</p>
                        </article>
                    </div>
                </div>
            </section>
            <section class='portfolio'>
                <a name='portfolio'></a>
                <div class="lwrap" data-flex="vaxis">
                    <div class="hdr" data-flex="vaxis">
                        <h2>portfolio</h2>
                        <hr>
                        <p>simplicity is the ultimate sophistication</p>
                    </div>
                    <div class="links-filter" data-flex="-center w" data-childs='-center center'>
                        <span>Filter by</span>
                        <a href="#">design</a>
                        <a href="#">logo</a>
                        <a href="#">photography</a>
                        <a href="#">poster</a>
                        <a href="#">recources</a>
                        <a href="#">retro</a>
                        <a href="#">t-shirts</a>
                        <a href="#">videos</a>
                    </div>
                    <div class="gallery" data-flex='stripe w' data-childs='vaxis'>
                        <div>
                            <figure><img src="images/img2.png"></figure>
                            <div class="lbl lbl-figure"><i class="icon-photo"></i></div>
                            <a href="#">galleries are funny</a>
                        </div>
                        <div>
                            <figure><img src="images/img2.png"></figure>
                            <div class="lbl lbl-figure"><i class="icon-tv-sm"></i></div>
                            <a href="#">a vimeo reel</a>
                        </div>
                        <div>
                            <figure><img src="images/img2.png"></figure>
                            <div class="lbl lbl-figure"><i class="icon-volume"></i></div>
                            <a href="#">love for old cameras</a>
                        </div>
                        <div>
                            <figure><img src="images/img2.png"></figure>
                            <div class="lbl lbl-figure"><i class="icon-note"></i></div>
                            <a href="#">detailed project page</a>
                        </div>
                        <div>
                            <figure><img src="images/img2.png"></figure>
                            <div class="lbl lbl-figure"><i class="icon-tv-sm"></i></div>
                            <a href="#">youtube video</a>
                        </div>
                        <div>
                            <figure><img src="images/img2.png"></figure>
                            <div class="lbl lbl-figure"><i class="icon-clip"></i></div>
                            <a href="#">another external link</a>
                        </div>
                        <div>
                            <figure><img src="images/img2.png"></figure>
                            <div class="lbl lbl-figure"><i class="icon-photo"></i></div>
                            <a href="#">a lightbox image</a>
                        </div>
                        <div>
                            <figure><img src="images/img2.png"></figure>
                            <div class="lbl lbl-figure"><i class="icon-volume"></i></div>
                            <a href="#">the dark tempest</a>
                        </div>            
                    </div>
                    <hr>
                    <a href='#' class="more">browse all</a>
                </div>
            </section>
            <section class='blog'>
                <a name='blog'></a>
                <div class='lwrap' data-flex="vaxis">
                    <div class="hdr" data-flex="vaxis">
                        <h2>my blog</h2>
                        <hr>
                        <p>news from my house</p>
                    </div>
                    <div data-flex='vstripe'>
                        <article>
                            <figure><img src="images/img3.png"></figure>
                            <div>
                                <div class="hdr-article">                                
                                    <h4>The Magic Wheel</h4>
                                    <div data-flex="stripe">
                                        <span><time>july 28, 2014</time> // <span>admin</span> // <a href="#">fun</a>, <a href="#">travel</a>, <a href="#">trends</a></span>
                                        <span>1 response</span>
                                    </div>
                                    <hr>
                                </div>
                                <p>It's not it to understand them in the objects we're playing. Products fulfilling a product more innovative, bullets grunts, powerful or stay at every multivariate spacetime point of analysis. People have enormous serial correlation. Good design is derived from so deep and then there's no other product useful. <a href="#">(MORE...)</a></p>
                            </div>                    
                        </article>
                        <article>
                            <figure><img src="images/img3.png"></figure>
                            <div>
                                <div class="hdr-article">                                
                                    <h4>The lonely road</h4>
                                    <div data-flex="stripe">
                                        <span><time>july 28, 2014</time> // <span>admin</span> // <a href="#">fun</a>, <a href="#">travel</a>, <a href="#">trends</a>, <a href="#">web-design</a></span>
                                        <span>3 responses</span>
                                    </div>
                                    <hr>                              
                                </div>
                                <p>If you've studied design at all, you've probably encountered Lorem Ipsum place&shy;holder text at some point. Anywhere there is text, but the meaning of that text isn't particularly important, you might see Lorem Ipsum. <a href="#">(MORE...)</a></p>
                            </div>                    
                        </article>
                        <article>
                            <figure><img src="images/img3.png"></figure>
                            <div>
                                <div class="hdr-article">                                
                                    <h4>I love gasoline smell</h4>
                                    <div data-flex="stripe">
                                        <span><time>july 28, 2014</time> // <span>admin</span> // <a href="#">fun</a>, <a href="#">trends</a>, <a href="#">web-design</a></span>
                                        <span>no responses</span>
                                    </div>
                                    <hr>
                                </div>
                                <p>Many of the content, and often about their precious turfpossessed selves and principles are shortcomings of seeing and colors to cover up a paucity of design. Zero out your interface. I think that are deep and profound indeed, these tasks and showing. <a href="#">(MORE...)</a></p>
                            </div>                    
                        </article>
                    </div>
                    <hr>
                    <a href='#' class="more">show all posts</a>
                </div>
            </section>
        </div>
        <footer>
            <a name='footer'></a>
            <div class="lwrap" data-flex="vaxis">
                <div class="hdr" data-flex="vaxis">
                    <h2>contact me</h2>
                    <hr>
                    <p>i'll be glad to answer your questions!</p>
                </div>
                <form action='#' method='post'>
                    <input type='text' name='input' placeholder='Name'>
                    <input type='email' name='input' placeholder='Email address'>
                    <input type='text' name='input' placeholder='Subject'>
                    <textarea placeholder='Your message'></textarea>
                    <button><span class="btn btn-default">Send Message</span></button>
                </form>
                <div data-flex='vaxis'>
                    <h3>i am social</h3>
                    <hr>
                    <div class='links-social' data-flex='center w' data-childs='-center center'>
                        <a href='#'><i class='icon-twitter'></i></a>
                        <a href='#'><i class='icon-facebook'></i></a>
                        <a href='#'><i class='icon-gplus'></i></a>
                        <a href='#'><i class='icon-pinterest'></i></a>
                        <a href='#'><i class='icon-linkedin'></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>