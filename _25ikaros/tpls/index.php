<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ikaros</title>
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
            <section class='lwrap' data-flex='axis'>
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="92" height="32" alt="Ikaros">
                </a>
                <nav class="links-nav" data-flex="end w" data-childs="-center center">
                    <a href='#' class='active'>home</a>
                    <a href='#'>service</a>
                    <a href='#'>portfolio</a>
                    <a href='#'>about</a>
                    <a href='#'>blog</a>
                    <a href='#'>contact</a>
                </nav>
            </section>            
        </header>
        <section class='lwrap'>
            <div class='slider'>
                <a href='#' class='btn btn-slider prev'></a>
                <figure><img src="/images/slide.png"></figure>
                <a href='#' class='btn btn-slider next'></a>
            </div>
            <div class='services'>
                <h2>Our Services</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                <div class="tabs" data-tabs>
                    <div class="tablist" data-flex="center">
                        <a href="#tab1" class="active">Web Design</a>
                        <a href="#tab2">Photography</a>
                        <a href="#tab3">Graphics</a>
                    </div>
                    <div class="tabset">
                        <div id="tab1" class="tabpanel active clearfix">
                            <figure><img src="/images/img1.png"></figure>
                            <h3>Ipsum Fusce Aenean Cursus Euismod</h3>
                            <p>Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum. </p>
                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur. </p>
                            <ul class='list-check' data-childs>
                                <li>Vestibulum id ligula porta felis euismod semper.</li>
                                <li>Donec ullamcorper nulla non metus auctor fringilla.</li>
                                <li>Etiam porta sem malesuada magna mollis euismod.</li>
                            </ul>
                        </div>
                        <div id="tab2" class="tabpanel">Tab number 2</div>
                        <div id="tab3" class="tabpanel">Tab number 2</div>
                    </div>
                </div>
            </div>
            <div class='projects'>
                <h2>Latest Staff of Our Projects</h2>
                <p>Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <div data-flex='stripe w'>
                    <figure><img src="/images/img2.png"></figure>
                    <figure><img src="/images/img3.png"></figure>
                    <figure><img src="/images/img4.png"></figure>
                    <figure><img src="/images/img5.png"></figure>
                    <figure><img src="/images/img6.png"></figure>
                    <figure><img src="/images/img7.png"></figure>
                </div>
            </div>
            <div class='blog'>
                <h2>Latest Blog</h2>
                <p>Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <div data-flex='stripe w' data-flex-480="vstripe">
                    <article data-flex>
                        <time class='lbl lbl-date' data-flex="col">
                            <span>23</span>
                            <small>jan</small>
                        </time>
                        <div>
                            <h5><a href='#'>Aenean Adipiscing Etiam Vestibulum</a></h5>
                            <p>Etiam porta sem malesuada magna lorem etor mollis euismod. Cras mattis consectetur purus.</p>
                            <div data-flex="-center w">
                                <a href='#'>Journal</a>,&nbsp;<a href='#'>Photography</a>,&nbsp;<a href='#'>Web Design</a>&ensp;|&ensp;
                                <a href='#'>9 Comments</a>
                            </div>
                        </div>
                    </article>                
                    <article data-flex>
                        <time class='lbl lbl-date' data-flex="col">
                            <span>15</span>
                            <small>jan</small>
                        </time>
                        <div>
                            <h5><a href='#'>Inceptos Purus Etiam Condimentum</a></h5>
                            <p>Aenean leo quam. Pellentesque ornare lacinia quam. Vestibulum. Integer venenatis dapibus posuere velit aliquet.</p>
                            <div data-flex="-center w">
                                <a href='#'>Journal</a>,&nbsp;<a href='#'>Photography</a>,&nbsp;<a href='#'>Web Design</a>&ensp;|&ensp;
                                <a href='#'>19 Comments</a> 
                            </div>
                        </div>
                    </article>
                    <article data-flex>
                        <time class='lbl lbl-date' data-flex="col">
                            <span>18</span>
                            <small>jan</small>
                        </time>
                        <div>
                            <h5><a href='#'>Commodo Sem Inceptos Fusce</a></h5>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec vestibulum ligula porta semper.</p>
                            <div data-flex="-center w">
                                <a href='#'>Journal</a>,&nbsp;<a href='#'>Photography.</a>&ensp;|&ensp;
                                <a href='#'>11 Comments</a>
                            </div>
                        </div>
                    </article>
                    <article data-flex>
                        <time class='lbl lbl-date' data-flex="col">
                            <span>13</span>
                            <small>jan</small>
                        </time>
                        <div>
                            <h5><a href='#'>Justo Etiam Bibendum Venenatis</a></h5>
                            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec id elit non mi porta gravida at eget metus.</p>
                            <div data-flex="-center w">
                                <a href='#'>Journal</a>,&nbsp;<a href='#'>Photography.</a>&ensp;|&ensp;
                                <a href='#'>21 Comments</a> 
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class='customers'>
                <h2>Our Customers</h2>
                <p>Aenean lacinia bibendum nulla sed consectetur. Vivamus augue laoreet rutrum faucibus dolor auctor. </p>
                <div data-flex='axis' data-flex-480='axis w'>
                    <figure><img src="/images/vimeo.png"></figure>
                    <figure><img src="/images/apple.png"></figure>
                    <figure><img src="/images/mers.png"></figure>
                    <figure><img src="/images/wb.png"></figure>
                    <figure><img src="/images/mt.png"></figure>
                    <figure><img src="/images/bmw.png"></figure>
                </div>
            </div>
        </section>
        <footer>
            <div class='lwrap' data-flex='stripe w'>
                <div class="posts">
                    <h6>popular posts</h6>
                    <div data-childs="col">
                        <p><a href="#">Vivamus sagittis lacus vel augue laoreet rutrum dolor auctor.</a><time>14 Nov, 2012</time></p>
                        <p><a href="#">Scelerisque nisl consectetur et.</a><time>22 May, 2012</time></p>
                        <p><a href="#">Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce</a><time>15 July, 2012</time></p> 
                    </div>
                </div>
                <div class="tweets">
                    <h6>twitter</h6>
                    <p><i class='icon-tweets'></i><a href="#">Praesent commodo cursus magna Morbi leo risus nulla consectetur.</a> -<time> 21 hours ago</time></p>
                    <p><i class='icon-tweets'></i><a href="#">Vestibulum id ligula porta euismod semper. auctor dolor fermentum.</a> -<time> 2 days ago</time></p>
                    <p><i class='icon-tweets'></i><a href="#">Donec ullamcorper nulla non metus auctor.</a> -<time> 3 days ago</time></p>
                </div>
                <div>
                    <h6>a little about me</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                    <p>Donec id elit non porta gravida at eget metus. Nullam quis risus eget urna mollis ornare vel.</p>
                </div>
                <div>
                    <h6>contact form</h6>
                    <form action='#' method='post' data-flex='col -start'>
                        <input type='text' name="input" placeholder="Name">
                        <input type='text' name="input" placeholder="Email">
                        <textarea placeholder="Message"></textarea>
                        <button><span class='btn btn-submit'>Submit</span></button>
                    </form>
                </div>
            </div>
            <div class='copyright'>
                <div class='lwrap' data-flex='axis'>
                    <span><small>&copy;</small> 2011 Ikaros. Theme by <a href='#'>elemis</a></span>
                    <div class='links-social' data-flex="end w">
                        <a href='#'><i class='icon-rss'></i></a>
                        <a href='#'><i class='icon-fb'></i></a>
                        <a href='#'><i class='icon-tw'></i></a>
                        <a href='#'><i class='icon-db'></i></a>
                        <a href='#'><i class='icon-pin'></i></a>
                        <a href='#'><i class='icon-in'></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>