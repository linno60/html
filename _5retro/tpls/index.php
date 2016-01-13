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
            var LAYOUT_WIDTH = 1880;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class='header'>
                <div class='lwrap'>
                    <nav class="links-nav" data-flex="stripe">
                        <a href="#about">about me</a>
                        <a href="#portfolio">portfolio</a>
                        <a href="#blog">my blog</a>
                        <a href="#footer">contact me</a>
                    </nav>
                </div>
            </div>
            <div class='lwrap' data-flex='vaxis'>
                <h1>retro</h1>
                <div data-flex="-center center">
                    <i class="icon-dot"></i>
                    <i class="icon-dot"></i>
                    <i class="icon-dot"></i>
                    <i class="icon-dot"></i>
                    <span class="hdr-caption" data-flex="-center center">old style portfolio</span>
                    <i class="icon-dot"></i>
                    <i class="icon-dot"></i>
                    <i class="icon-dot"></i>
                    <i class="icon-dot"></i>
                </div>                    
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
                    <h1>about me<span>about me</span></h1>
                    <div class="divider"></div>
                    <p>i am graphic designer from baltimore</p>
                </div>
                <div data-flex="stripe" data-childs='col -center'>
                    <article>
                        <div class="lbl lbl-about"><i class="icon-tv"></i></div>
                        <h2>movies</h2>
                        <span>what i watch</span>
                        <div class="separator"></div>
                        <p>Clutter is honest! I do believe &emsp; that has to the users <a href="#" class="link-bold">selfexpression</a>. Care. Things which is a projector operating system such formats are deep and profound and meaningful. It's the traditions of data. <a href="#" class="link-underline">Good design</a> should be different levels. There's no rational alternative. That's come to complexity.</p>
                    </article>
                    <article>
                        <div class="lbl lbl-about"><i class="icon-vinyl"></i></div>
                        <h2>music</h2>
                        <span>what i listen</span>
                        <div class="separator"></div>
                        <p>Good design. The content, you'll love <a href="#" class="link-bold">powerpoint should be differ&shy;ent</a>. It's about design is that part? Good design is making some&shy;thing looks. And aesthetic. And <a href="#" class="link-italic">colour defines</a> your interface. That cannot be overtly different. That has to chance. And restrained, low resolution, but you get rid of materials.</p>
                    </article>
                    <article>
                        <div class="lbl lbl-about"><i class="icon-shirt"></i></div>
                        <h2>clothes</h2>
                        <span>what i wear</span>
                        <div class="separator"></div>
                        <p>Very honest approach and product. The <a href="#" class="link-underline">other product</a> that changes function like the absence of function. And frus&shy;trating that products that it's the functional imperative, we kept going and frustrating that we are about bringing order to be better and less complicated to understand.</p>
                    </article>
                    <article>
                        <div class="lbl lbl-about"><i class="icon-food"></i></div>
                        <h2>food</h2>
                        <span>what i eat</span>
                        <div class="separator"></div>
                        <p>Simplicity. Its context. From so many different levels. There's real simplicity is. Designing and place of the objects we're sur&shy;rounded by seem trivial. There's <a href="#" class="link-bold">no rational alternative</a>. I think that's a very complicated problems without letting people have a very easy to mean so much that acknowledges.</p>
                    </article>
                </div>
            </div>
        </section>
        <section class='portfolio'>
            <a name='portfolio'></a>
            <div class="lwrap" data-flex="vaxis">
                <div class="hdr" data-flex="vaxis">
                    <h1>portfolio<span>portfolio</span></h1>
                    <div class="divider"></div>
                    <p>simplicity is the ultimate sophistication</p>
                </div>
                <div class="links-filter" data-flex="w" data-childs='-center center'>
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
                <div data-flex='stripe w' data-childs='vaxis'>
                    <figure>
                        <img src="images/img2.png">
                        <div class="lbl lbl-figure"><i class="icon-photo"></i></div>
                        <figcaption><a href="#">galleries are funny</a></figcaption>
                    </figure>
                    <figure>
                        <img src="images/img2.png">
                        <div class="lbl lbl-figure"><i class="icon-tv-sm"></i></div>
                        <figcaption><a href="#">a vimeo reel</a></figcaption>
                    </figure>
                    <figure>
                        <img src="images/img2.png">
                        <div class="lbl lbl-figure"><i class="icon-volume"></i></div>
                        <figcaption><a href="#">love for old cameras</a></figcaption>
                    </figure>
                    <figure>
                        <img src="images/img2.png">
                        <div class="lbl lbl-figure"><i class="icon-note"></i></div>
                        <figcaption><a href="#">detailed project page</a></figcaption>
                    </figure>
                    <figure>
                        <img src="images/img2.png">
                        <div class="lbl lbl-figure"><i class="icon-tv-sm"></i></div>
                        <figcaption><a href="#">youtube video</a></figcaption>
                    </figure>
                    <figure>
                        <img src="images/img2.png">
                        <div class="lbl lbl-figure"><i class="icon-clip"></i></div>
                        <figcaption><a href="#">another external link</a></figcaption>
                    </figure>
                    <figure>
                        <img src="images/img2.png">
                        <div class="lbl lbl-figure"><i class="icon-photo"></i></div>
                        <figcaption><a href="#">a lightbox image</a></figcaption>
                    </figure>
                    <figure>
                        <img src="images/img2.png">
                        <div class="lbl lbl-figure"><i class="icon-volume"></i></div>
                        <figcaption><a href="#">the dark tempest</a></figcaption>
                    </figure>            
                </div>
                <div class="separator"></div>
                <a href='#' class="more">browse all</a>
            </div>
        </section>
        <section class='blog'>
            <a name='blog'></a>
            <div class='lwrap' data-flex="vaxis">
                <div class="hdr" data-flex="vaxis">
                    <h1>my blog<span>my blog</span></h1>
                    <div class="divider"></div>
                    <p>news from my house</p>
                </div>
                <div data-flex='vstripe'>
                    <article>
                        <figure><img src="images/img3.png"></figure>
                        <div>
                            <div class="hdr-article">                                
                                <h4><a href="#">The Magic Wheel</a></h4>
                                <div data-flex="stripe">
                                    <span>july 28, 2014 // admin // fun, travel, trends</span>
                                    <span>1 response</span>
                                </div>
                                <div class="separator"></div>
                            </div>
                            <p>It's not it to understand them in the objects weв're playing. Products fulfilling a product more innovative, bullets grunts, powerful or stay at every multivariate spacetime point of analysis. People have enormous serial correlation. Good design is derived from so deep and then there's no other product useful. <a href="#">(MORE...)</a></p>
                        </div>                    
                    </article>
                    <article>
                        <figure><img src="images/img3.png"></figure>
                        <div>
                            <div class="hdr-article">                                
                                <h4><a href="#">The lonely road</a></h4>
                                <div data-flex="stripe">
                                    <span>july 28, 2014 // admin // fun, travel, trends, web-design</span>
                                    <span>3 responses</span>
                                </div>
                                <div class="separator"></div>                               
                            </div>
                            <p>If you've studied design at all, you've probably encountered Lorem Ipsum placeholder text at some point. Anywhere there is text, but the meaning of that text isn't particularly important, you might see Lorem Ipsum. <a href="#">(MORE...)</a></p>
                        </div>                    
                    </article>
                    <article>
                        <figure><img src="images/img3.png"></figure>
                        <div>
                            <div class="hdr-article">                                
                                <h4><a href="#">I love gasoline smell</a></h4>
                                <div data-flex="stripe">
                                    <span>july 28, 2014 // admin // fun, trends, web-design</span>
                                    <span>no responses</span>
                                </div>
                                <div class="separator"></div>
                            </div>
                            <p>Many of the content, and often about their precious turfpossessed selves and principles are shortcomings of seeing and colors to cover up a paucity of design. Zero out your interface. I think that are deep and profound indeed, these tasks and showing. <a href="#">(MORE...)</a></p>
                        </div>                    
                    </article>
                </div>
                <div class="separator"></div>
                <a href='#' class="more">show all posts</a>
            </div>
        </section>
        <footer>
            <a name='footer'></a>
            <div class="lwrap" data-flex="vaxis">
                <div class="hdr" data-flex="vaxis">
                    <h1>contact me<span>contact me</span></h1>
                    <div class="divider"></div>
                    <p>i'll be glad to answer your questions!</p>
                </div>
                <form action='#' method='post'>
                    <input type='text' name='input' placeholder='Name'>
                    <input type='email' name='input' placeholder='Email address'>
                    <input type='text' name='input' placeholder='Subject'>
                    <textarea placeholder='Your message'></textarea>
                    <button><span class="btn btn-default">Send Message</span></button>
                </form>
                <div class='social' data-flex='vaxis'>
                    <h1>i am social</h1>
                    <div class="separator"></div>
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