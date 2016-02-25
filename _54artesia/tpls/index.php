<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Artesia</title>
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
            <header data-flex="axis">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="143" height="26" alt="Artesia">
                </a>
                <nav class="links-nav" data-childs="-center center" data-flex="end w">
                    <a href="#">home</a>
                    <a href="#" class="active">blog</a>
                    <a href="#">gallery</a>
                    <a href="#">services</a>                    
                    <a href="#">contact</a>
                </nav>
            </header>
            <div class="title" data-flex="axis w">
                <hgroup data-flex="-end w">
                    <h1>the blog</h1>
                    <h3>read about our latest adventures</h3>
                </hgroup>
                <div data-flex="end w" class="breadcrumbs">
                    <a href="#">Home</a><span>/</span>
                    <a href="#">Blog</a>
                </div>
            </div>
            <div data-flex="stripe">
                <div class="content" data-flex>
                    <div class="info" data-flex="col">
                        <time class="lbl lbl-date">oct<span>15</span></time>
                        <div class="lbl lbl-default">3<span>comments</span></div>
                        <a href="#" class="btn btn-default">share</a>
                    </div>
                    <div>
                        <article class="post">
                            <figure><img src="/images/img1.png" width="619" height="245" alt=""></figure>
                            <h2>this is the title of the post in this spot</h2>
                            <div class="hdr">
                                <span>posted by <a href="#">admin </a>in <a href="#">photoshop</a>, <a href="#">news </a>on oct 15, 2015</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non augue eu tortor porttitor tempor nec sed dolor. Sed dui nulla, commodo eu pretium in, scelerisque quis dolor. In tempus justo id nulla dapibus interdum. Aenean a ante velit, nec rutrum arcu. Nullam mi nulla, consectetur ut gravida eget, ullamcorper nec magna. Proin sed mattis massa. Pellentesque neque mi, gravida id ornare vel, hendrerit et urna.</p>
                            <p>Quisque iaculis, erat id volutpat rhoncus, justo erat congue risus, dapibus vestibulum odio leo quis nibh. Maecenas imperdiet accumsan posuere. Donec tellus leo, varius ac porta ac, bibendum ac mi. Integer iaculis orci interdum neque porta ac molestie ipsum aliquet. Vestibulum malesuada sem sed ipsum ali&shy;quet pharetra vulputate eget nunc. Cras enim ipsum, viverra non posuere eu, commodo et odio. Morbi sagittis tincidunt justo, a interdum tortor sagittis dictum. Suspendisse pharetra, quam quis semper auctor, elit sem pharetra nulla, id fringilla quam turpis ut quam. Praesent id massa felis. Cras dignissim mollis dui, vitae consequat orci posuere nec.</p>
                            <blockquote data-flex="">&ldquo;Vestibulum malesuada sem sed ipsum aliquet pharetra vulpu­tate eget nunc. Cras enim ipsum, viverra non posuere eu, com­modo et odio.&rdquo;</blockquote>
                            <p>Commodo et odio. Morbi sagittis tincidunt justo, a interdum tortor sagittis dictum. Suspendisse pharetra, quam quis semper auctor, elit sem pharetra nulla, id fringilla quam turpis ut quam. Praesent id massa felis. Cras dignissim mollis dui, vitae consequat orci posuere nec.</p>
                        </article>
                        <article class="about clearfix">
                            <figure><img src="/images/img2.png"></figure>                            
                            <h2>about the author</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non augue eu tortor porttitor tempor nec sed dolor. Sed dui nulla, commodo eu pretium in, scelerisque quis dolor. In tempus justo id nulla dapibus interdum. Aenean a ante velit, nec rutrum arcu. Gravida id ornare vel, hendrerit et urna.</p>
                        </article>
                        <div class="comments">
                            <h2>2 comments so far</h2>
                            <article data-flex="-start">
                                <figure><img src="/images/img3.png"></figure>
                                <div>
                                    <span><a href="#">JOHN DOE</a> <time>on Oct 15, 2015</time> <a href="#">reply</a></span>
                                    <p>Commodo et odio. Morbi sagittis tincidunt justo, a interdum tortor sagittis dictum. Sus&shy;pendisse pharetra, quam quis semper auctor, elit sem pharetra nulla, id fringilla quam turpis ut quam. Praesent id massa felis. Cras dignissim mollis dui, vitae consequat orci posuere nec.</p>
                                </div>
                            </article>
                            <article data-flex="-start">
                                <figure><img src="/images/img3.png"></figure>
                                <div>
                                    <span><a href="#">JOHN DOE</a> <time>on Oct 15, 2015</time> <a href="#">reply</a></span>
                                    <p>Commodo et odio. Morbi sagittis tincidunt justo, a interdum tortor sagittis dictum. Sus&shy;pendisse pharetra, quam quis semper auctor, elit sem pharetra nulla, id fringilla quam turpis ut quam. Praesent id massa felis. Cras dignissim mollis dui, vitae consequat orci posuere nec.</p>
                                </div>
                            </article>
                        </div> 
                        <div class="form">
                            <h2>leave a comment</h2>
                            <form action="#" method="post" data-flex="col">
                                <input type="text" name="input" placeholder="your name">
                                <input type="email" name="input" placeholder="your email address">
                                <input type="url" name="input" placeholder="website url">
                                <textarea placeholder="comments"></textarea>
                                <div data-flex><button><span class="btn btn-default">submit comment</span></button></div>
                            </form>
                        </div>                        
                    </div>
                </div>
                <aside class="sidebar">
                    <div>
                        <h2>categories</h2>
                        <ul class="links-default">
                            <li><a href="#">photoshop</a></li>
                            <li><a href="#">illustrator</a></li>
                            <li><a href="#">graphic design</a></li>
                            <li><a href="#">recent trends</a></li>
                            <li><a href="#">latest news</a></li>
                            <li><a href="#">tutorials</a></li>
                        </ul>
                    </div>
                    <div class="posts">
                        <h2>recent posts</h2>
                        <ul class="links-default">
                            <li><p><a href="#">Lorem ipsum dolor sit amet, con&shy;sectetur adipiscing elit</a></p></li>
                            <li><p><a href="#">In tempus justo id nulla dapibus interdum</a></p></li>
                            <li><p><a href="#">Pellentesque neque mi, gravida id ornare vel, hendrerit et urna</a></p></li>
                            <li><p><a href="#">Nullam mi nulla, consectetur ut gravida eget</a></p></li>
                            <li><p><a href="#">Aenean a ante velit, nec rutrum arcu nullam mi nulla</a></p></li>
                        </ul>
                    </div>
                    <div>
                        <h2>archives</h2>
                        <ul class="links-default">
                            <li><a href="#">september 2015</a></li>
                            <li><a href="#">august 2015</a></li>
                            <li><a href="#">july 2015</a></li>
                            <li><a href="#">june 2015</a></li>
                            <li><a href="#">may 2015</a></li>
                            <li><a href="#">april 2015</a></li>
                        </ul>                        
                    </div>
                    <form action="#" method="post">
                        <input type="search" name="input" placeholder="search">
                    </form> 
                </aside>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe w">
                <section>
                    <h5>our company</h5>
                    <p>Lorem ipsum dolor sit amet, con&shy;sectetur adipiscing elit. Etiam non augue eu tortor porttitor tempor nec sed dolor. Sed dui nulla, commodo eu pretium in, scelerisque quis dolor. In tempus justo id nulla dapibus inter&shy;dum. Aenean a ante velit, nec rutrum arcu.</p>
                </section>
                <section>
                    <h5>latest posts</h5>
                    <p><a href="#">Lorem ipsum dolor sit amet, con&shy;sectetur adipiscing elit. </a></p>
                    <p><a href="#">Etiam non augue eu tortor porttitor tempor nec sed dolor. </a></p>
                    <p><a href="#">Sed dui nulla, commodo eu pretium in, scelerisque quis dolor. </a></p>
                </section>
                <section>
                    <h5>recent tweets</h5>
                    <p><a href="#">@Loremipsum</a> dolor sit amet, con&shy;sectetur adipiscing elit. <time>3 days ago</time></p>
                    <p>Etiam non augue eu tortor porttitor tempor nec sed dolor.<time> 4 days ago</time></p>
                    <p><a href="#">@Sedduinulla</a>, commodo eu pretium in, scelerisque quis dolor. <time>5 days ago</time></p>
                </section>
                <section>
                    <h5>flickr feed</h5>
                    <div class="flickr" data-flex="stripe w">
                        <a href="#"><img src="/images/img5.png"></a>
                        <a href="#"><img src="/images/img5.png"></a>
                        <a href="#"><img src="/images/img5.png"></a>
                        <a href="#"><img src="/images/img5.png"></a>
                        <a href="#"><img src="/images/img5.png"></a>
                        <a href="#"><img src="/images/img5.png"></a>
                    </div>
                </section>
                <section class="copyright" data-flex="axis">
                    <span>Copyright &copy; 2015 Company Name. All right reserved.</span>
                    <div data-flex="-center w">
                        <span>Follow us:</span> 
                        <div class="links-social" data-flex="end w">
                            <a href="#">Facebook</a>|
                            <a href="#">Twitter</a>|
                            <a href="#">Linkedin</a>
                        </div>
                    </div>
                </section>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>