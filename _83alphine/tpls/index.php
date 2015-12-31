<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Alphine</title>
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
        <a href="#" name="top"></a>
        <div class="lwrap">
            <header data-flex="col -start">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="144" height="33" alt="Alphine">
                </a>
                <nav class="links-nav" data-flex="w" data-childs="-center center">
                    <a href="#" class="active">home</a>
                    <a href="#">portfolio</a>
                    <a href="#">about</a>
                    <a href="#">service</a>
                    <a href="#">news</a>
                    <a href="#">contact</a>
                </nav>
            </header>
            <blockquote>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus aliquet.</blockquote>
            <div class="filter" data-flex="-center w">
                <span>filter:</span>
                <a href="#">web design</a>/
                <a href="#">motion graphics</a>/
                <a href="#">photography</a>
            </div>
            <div class="grid" data-flex="stripe w">
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
                <figure><img src="/images/img1.png" width="225" height="170" alt=""></figure>
            </div>
        </div>
        <footer>
            <div class="footer lwrap" data-flex="stripe" data-flex-480="vstripe">
                <div>
                    <div class="footer-item about">
                        <h2 class="hdr" data-flex="-center w"><strong>about us</strong><small>/&ensp;company biography</small></h2>
                        <div>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam.</p>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                            <a href="#" class="btn btn-default">Hire Us</a>
                        </div>
                    </div>
                    <div class="footer-item contact">
                        <h2 class="hdr" data-flex="-center w"><strong>contact us </strong><small>/&ensp;get in touch with us</small></h2>
                        <div>
                            <p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                            <form action="#" method="post" data-childs-640="vstripe">
                                <div data-flex="-center">
                                    <label for="i1">Name:</label>
                                    <input type="text" name="input" id="i1">
                                </div>
                                <div data-flex="-center">
                                    <label for="i2">Email:</label>
                                    <input type="text" name="input" id="i2">
                                </div>
                                <div data-flex="-center">
                                    <label for="i3">Subject:</label>
                                    <input type="text" name="input" id="i3">
                                </div>
                                <div data-flex="-start">
                                    <label for="t1">Message:</label>
                                    <div>
                                        <textarea id="t1"></textarea>
                                        <button><span class="btn btn-submit">Submit</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="footer-item services">
                        <h2 class="hdr" data-flex="-center w"><strong>our services </strong><small>/&ensp;what do i do</small></h2>
                        <div>
                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id ligula porta felis euismod</p>
                            <h3>photography</h3>
                            <p>Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris</p>
                            <h3>web design</h3>
                            <p>Sed posuere consectetur est at lobortis. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut </p>
                            <h3>motion graphics</h3>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis</p>
                        </div>
                    </div>
                    <div class="footer-item posts">
                        <h2 class="hdr" data-flex="-center w"><strong>popular posts </strong><small>/&ensp;posts got most attention</small></h2>
                        <div data-flex="col">
                            <div class="post">
                                <figure><img src="/images/img2.png" width="72" height="72" alt=""></figure>                               
                                <h4><a href="#">Inceptos Pellentesque Risus Ipsum</a></h4>
                                <div><time>12 November 2011&nbsp;&nbsp;/&ensp;</time><a href="#">117 Comments</a></div>                                
                            </div>
                            <div class="post">
                                <figure><img src="/images/img2.png" width="72" height="72" alt=""></figure>                               
                                <h4><a href="#">Ligula Ipsum Mollis Ridiculus Parturient</a></h4>
                                <div><time>12 November 2011&nbsp;&nbsp;/&ensp;</time><a href="#">117 Comments</a></div>                               
                            </div>
                            <div class="post">
                                <figure><img src="/images/img2.png" width="72" height="72" alt=""></figure>                              
                                <h4><a href="#">Pharetra Condiment um Lorem Elit Dolor Sem Euismod Tortor Inceptos Elit</a></h4>
                                <div><time>12 November 2011&nbsp;&nbsp;/&ensp;</time><a href="#">117 Comments</a></div>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="lwrap" data-flex="axis">
                    <span>&copy; 2011 Zeences Design. All Right Reserved</span>
                    <a href="#top" class="btn btn-anchor"></a>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>