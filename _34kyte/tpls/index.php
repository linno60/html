<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kyte</title>
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
            var LAYOUT_WIDTH = 1190;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <section class="lwrap" data-flex="axis">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="99" height="38" alt="Kyte">
                </a>
                <nav class="links-nav" data-flex="end w">
                    <a href="#" class='active'>home</a>
                    <a href="#">about</a>
                    <a href="#">portfolio</a>
                    <a href="#">journal</a>
                    <a href="#">features</a>
                    <a href="#">contact</a>
                </nav>
            </section>
        </header>
        <section class="slider" data-flex="col -center center">
            <h1>i&rsquo;m kyte brooten</h1>
            <span>frelance photographer</span>
            <div class="links-social alt" data-flex="center" data-childs="-center center">
                <a href="#"><i class="icon-twitter"></i></a>
                <a href="#"><i class="icon-instagram"></i></a>
                <a href="#"><i class="icon-dribble"></i></a>
                <a href="#"><i class="icon-mail"></i></a>
            </div>
        </section>
        <section>
            <div class='hdr'>
                <h2 class="lwrap">a little about me</h2>
            </div>
            <div class="about lwrap" data-flex="col -center">
                <article data-flex="-center" data-flex-480="col -center">
                    <figure><img src="/images/circle.png"></figure>
                    <div data-flex="col">
                        <span>Vestibulum ligut praesent commodo cursus magna, scelerisque  sit consectetur et. Cum sociis natoque penatibus et magnis dis tellus parturient pharetra montes.</span>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit, fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                </article>
                <div data-flex="stripe w" data-flex-640="vstripe">
                    <article>
                        <h4>what i do</h4>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.  Consectetur adipiscing vestibulum id ligula porta felis euismod semper. Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum ullamcorper.</p>
                    </article>
                    <article>
                        <h4>what my process</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </article>
                    <article>
                        <h4>what my skills</h4>
                        <p>Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam.</p>
                    </article>
                </div>
                <a href="#" class="btn btn-default"><i class="icon-mail-alt"></i>hire me</a>
            </div>
        </section>
        <section>
            <div class='hdr'>
                <h2 class="lwrap">my portfolio</h2>
            </div>
            <div class="portfolio">
                <div class="lwrap">
                    <h3>conceptual</h3>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                </div>
                <div data-flex="stripe">
                    <figure><img src="/images/img1.png"> </figure>
                    <figure><img src="/images/img2.png"> </figure>
                    <figure><img src="/images/img3.png"> </figure>
                </div>
                <div class="lwrap">
                    <h3>black & white</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. </p>
                </div>
                <div data-flex="stripe">
                    <figure><img src="/images/img4.png"> </figure>
                    <figure><img src="/images/img5.png"> </figure>
                    <figure><img src="/images/img3.png"> </figure>
                </div>
            </div>
        </section>
        <section class="blog">
            <div class='hdr'>
                <h2 class="lwrap">latest blog posts</h2>
            </div>
            <div class="lwrap" data-flex="stripe w" data-flex-480="vstripe">
                <article>
                    <figure>
                        <img src="/images/img6.png" width="565" height="280" alt="">
                        <figcaption data-flex="axis">
                            <span><time>21 may 2013</time>&ensp;|&ensp;<a href="#">macro</a>,<a href="#">photography</a></span>
                            <a href="#" data-flex="-center">27<i class="icon-heart"></i></a>
                        </figcaption>
                    </figure>
                    <h5><a href="#">Tortor Ullamcorper Fringilla Cras Euismod</a></h5>
                    <p>Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus  augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                </article>
                <article>
                    <figure>
                        <img src="/images/img6.png" width="565" height="280" alt="">
                        <figcaption data-flex="axis">
                            <span><time>15 may 2013</time>&ensp;|&ensp;<a href="#">macro</a>,<a href="#">photography</a></span>
                            <a href="#" data-flex="-center">17<i class="icon-heart"></i></a>
                        </figcaption>
                    </figure>
                    <h5><a href="#">Maecenas sed diam eget risus varius blandit</a></h5>
                    <p>Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus  augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                </article>
                <article>
                    <figure>
                        <img src="/images/img6.png" width="565" height="280" alt="">
                        <figcaption data-flex="axis">
                            <span><time>11 may 2013</time>&ensp;|&ensp;<a href="#">macro</a>,<a href="#">photography</a></span>
                            <a href="#" data-flex="-center">53<i class="icon-heart"></i></a>
                        </figcaption>
                    </figure>
                    <h5><a href="#">Risus Fermentum Malesuada Justo Tellus</a></h5>
                    <p>Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus  augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                </article>
                <article>
                    <figure>
                        <img src="/images/img6.png" width="565" height="280" alt="">
                        <figcaption data-flex="axis">
                            <span><time>09 may 2013</time>&ensp;|&ensp;<a href="#">macro</a>,<a href="#">photography</a></span>
                            <a href="#" data-flex="-center">35<i class="icon-heart"></i></a>
                        </figcaption>
                    </figure>
                    <h5><a href="#">Fringilla Parturient Consectetur Egestas Inceptos</a></h5>
                    <p>Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus  augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                </article>
            </div>
        </section>
        <section class="contacts">
            <div class='hdr'>
                <h2 class="lwrap">get in touch</h2>
            </div>
            <div class="lwrap" data-flex="stripe" data-flex-480="vstripe">
                <form action="#" method="post">
                    <input name="input" type="text" placeholder="your name">
                    <input name="input" type="text" placeholder="e-mail">
                    <input name="input" type="text" placeholder="the subject">
                    <textarea placeholder="your message"></textarea>
                    <button><span class="btn btn-default"><i class="icon-mail-alt"></i>submit</span></button>                   
                </form>
                <div>
                    <h3>Contact details</h3>
                    <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia.</p>
                    <address data-flex="col -start" data-childs>
                        <span><i class="icon-location"></i>Moonshine Street No: 14/05</span>
                        <span><i class="icon-phone"></i>Light City, Jupiter</span>
                        <span><i class="icon-letter"></i>0247 541 65 87</span>
                    </address>
                </div>
            </div>
        </section>
        <footer data-flex="col -center center">
            <span>&copy; 2013 Kyte. All rights reserved. Theme by elemis.</span>
            <div class="links-social" data-flex="center w" data-childs="-center center">
                <a href="#"><i class="icon-twitter-footer"></i></a>
                <a href="#"><i class="icon-instagram-footer"></i></a>
                <a href="#"><i class="icon-dribble-footer"></i></a>
                <a href="#"><i class="icon-mail-footer"></i></a>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>