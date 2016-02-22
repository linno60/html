<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kitchenwall</title>
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
        <header>
            <div class="lwrap" data-flex="axis">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="122" height="24" alt="Kitchenwall">
                </a>
                <nav class="links-nav" data-flex="end w">
                    <a href="#" class="active">Home</a>
                    <a href="#">Portfolio</a>
                    <a href="#">Journal</a>
                    <a href="#">Social</a>
                    <a href="#">Contact</a>
                </nav>
            </div>
        </header>
        <div class="lwrap" data-flex="-start between" data-flex-640="vstripe">
            <div class="content">
                <div class="blog">
                    <article>
                        <h1>Ullamcorper Mollis Pellentesque</h1>
                        <div class="hdr" data-flex="axis">
                            <div data-flex="-center w">
                                <time>28 Sep, 2012</time><span>|</span>
                                <span><span>Photography,</span> <span>Wine,</span> <span>Food</span></span><span>|</span>
                                <a href="#">12 Comments</a>
                            </div>
                            <a href="#" class="like">21</a>
                        </div>
                        <figure><img src="/images/img1.png"></figure>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum.</p>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas faucibus mollis interdum.</p>
                    </article>
                    <div class="gallery" data-flex="stripe w">
                        <figure><img src="/images/img2.png"></figure>
                        <figure><img src="/images/img2.png"></figure>
                        <figure><img src="/images/img2.png"></figure>
                        <figure><img src="/images/img2.png"></figure>
                        <figure class="hidden"><img src="/images/img2.png"></figure>
                    </div>
                    <article>
                        <h2>Nibh Pharetra Venenatis Magna</h2>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo.</p>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cum sociis natoque penatibus et magnis dis parturient.</p>                    
                    </article>
                    <ul class="list-default">
                        <li>Vestibulum id ligula porta felis euismod semper.</li>
                        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </li>
                        <li>Nullam quis risus eget urna mollis ornare vel eu leo. Fusce dapibus, tellus ac cursus commodo.</li>
                        <li>Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam.</li>
                    </ul> 
                </div>                               
                <div class="related">
                    <h3>Related Posts</h3>
                    <div data-flex="stripe">
                        <article>
                            <figure><img src="/images/img3.png"></figure>
                            <h4><a href="#">Dapibus Elit Amet Parturient</a></h4>
                            <span>28 Sep, 2012</span>
                            <span>|</span>
                            <a href="#">14 Comments</a>                    
                        </article>
                        <article>
                            <figure><img src="/images/img3.png"></figure>
                            <h4><a href="#">Consectetur Cursus Etiam</a></h4>
                            <span>21 Sep, 2012</span>
                            <span>|</span>
                            <a href="#">15 Comments</a>                      
                        </article>
                        <article class="hidden">
                            <figure><img src="/images/img3.png"></figure>
                            <h4><a href="#">Venenatis Amet Euismod</a></h4>
                            <span>14 Sep, 2012</span>
                            <span>|</span>
                            <a href="#">23 Comments</a>                      
                        </article>
                    </div>
                </div>
                <div class="responses">
                    <h3>2 Responses to "Ullamcorper Mollis Pellentesque"</h3>
                    <article data-flex="-start">                         
                        <figure><img src="/images/img4.png"></figure>
                        <div>
                            <h6><a href="#">Barney Stinson</a></h6>
                            <p>Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing ligula euismod semper.</p>
                        </div>
                    </article> 
                    <article data-flex="-start"> 
                        <figure><img src="/images/img4.png"></figure>
                        <div>
                            <h6><a href="#">Admin</a></h6>
                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida metus.</p>
                        </div>
                    </article>
                </div>
                <div class="form-wrap">
                    <h3>Submit a Comment</h3>
                    <form action="#" method="post" data-flex="col">
                        <legend>Your email address will not be published. Required fields are marked *</legend>
                        <input type="text" name="input" placeholder="Name *">
                        <input type="text" name="input" placeholder="E-mail *">
                        <input type="text" name="input" placeholder="Website">
                        <textarea placeholder="Message"></textarea>
                        <div><button><span class="btn btn-default">Submit</span></button></div>
                    </form>
                </div>
            </div>
            <aside class="sidebar" data-flex-640="stripe w" data-flex-480="vstripe">
                <div class="popular">
                    <h3>Popular Posts</h3>
                    <article class="clearfix">
                        <figure><img src="/images/img4.png"></figure>                       
                        <p><a href="#">Vestibum Malesuada Etiam Magna</a></p>
                        <time>22 Nov, 2012</time>
                    </article>
                    <article class="clearfix">
                        <figure><img src="/images/img4.png"></figure>
                        <p><a href="#">Mattis Egestas Fringilla Consectetur</a></p>
                        <time>15 Nov, 2012</time>
                    </article>
                    <article class="clearfix">
                        <figure><img src="/images/img4.png"></figure>
                        <p><a href="#">Justo  Fermentum Tero Ultricies Pharetra</a></p>
                        <time>12 Nov, 2012</time>
                    </article>
                </div>
                <div class="search">
                    <h3>Search</h3>
                    <form action="#" method="post" data-flex="col">
                        <input type="search" name="input" placeholder="Search and hit enter">
                    </form>                    
                </div>
                <div class="about">
                    <h3>A Little About Me</h3>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum. </p>
                    <p>Sed posuere consectetur est at mant lobortis. Sed posuere consectetur est lobortis. Fusce  mauris condimentum.</p>
                </div>
                <div>
                    <h3>Categories</h3>
                    <div class="links-default" data-flex="col -start">
                        <a href="#">Photography (21)</a>
                        <a href="#">Food (17)</a>
                        <a href="#">Gourmet (15)</a>
                        <a href="#">Salads (14)</a>
                        <a href="#">Wine (12)</a>
                    </div>
                </div>
            </aside>
        </div>
        <footer>
            <div class="lwrap" data-flex="axis">
                <span>© 2012 Kitchenwall. Theme by elemis</span>
                <div class="links-social" data-flex="end w">
                    <a href="#"><i class="icon-rss"></i></a>
                    <a href="#"><i class="icon-fb"></i></a>
                    <a href="#"><i class="icon-tw"></i></a>
                    <a href="#"><i class="icon-dl"></i></a>
                    <a href="#"><i class="icon-fl"></i></a>
                    <a href="#"><i class="icon-pin"></i></a>
                    <a href="#"><i class="icon-t"></i></a>
                </div>
            </div>   
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>