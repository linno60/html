<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DGallery</title>
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
    <body data-flex="col">  
        <div>
            <header class="nav">
                <div class="lwrap" data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="169" height="28" alt="DGallery">
                    </a>
                    <nav class="links-nav" data-flex="end w">
                        <a href="#" class="active">Home</a>
                        <a href="#">Brushes</a>
                        <a href="#">Patterns</a>
                        <a href="#">Graphics</a>
                        <a href="#">Submit</a>
                        <a href="#">Advertise</a>
                        <a href="#">About Us</a>
                        <a href="#">Contact Us</a>
                    </nav>
                </div>  
            </header>
            <div class="lwrap">
                <div class="form-wrap" data-flex="axis">
                    <div class="links-social" data-flex="w" data-childs="-center">
                        <span><a href="#"><i class="icon-rss"></i></a>12,345</span>
                        <span><a href="#"><i class="icon-tw"></i></a>12,345</span>
                    </div>
                    <form action="#" method="post" class="form-search" data-flex="axis">
                        <input type="search" name="search" placeholder="Search">
                        <input type="image" name="image" src="/images/icons/search.png">
                    </form>
                </div>
                <div class="slider" data-flex="stripe" data-flex-640="vstripe">
                    <div>
                        <figure>
                            <div class="lbl lbl-default">featured</div>
                            <img src="/images/slider.png" width="740" height="306" alt="">
                        </figure>
                    </div>
                    <div data-flex="vaxis" data-flex-640="stripe">
                        <a href="#"><img src="/images/slider2.png" width="159" height="95" alt=""></a>
                        <a href="#"><img src="/images/slider3.png" width="159" height="96" alt=""></a>
                        <a href="#"><img src="/images/slider4.png" width="159" height="95" alt=""></a>
                    </div>
                </div>
                <div data-flex="stripe" data-flex-640="vstripe">
                    <div class="content">
                        <div class="gallery">
                            <div data-flex="stripe w" data-childs="col">
                                <div>
                                    <figure><img src="/images/img1.png" width="300" height="200" alt=""></figure>
                                    <span><a href="#">Lorem ipsum dolor sit amet</a></span>
                                </div>
                                <div>
                                    <figure><img src="/images/img2.png" width="300" height="200" alt=""></figure>
                                    <span><a href="#">Lorem ipsum dolor sit amet</a></span>
                                </div>
                                <div>
                                    <figure><img src="/images/img3.png" width="300" height="200" alt=""></figure>
                                    <span><a href="#">Lorem ipsum dolor sit amet</a></span>
                                </div>
                                <div>
                                    <figure><img src="/images/img4.png" width="300" height="200" alt=""></figure>
                                    <span><a href="#">Lorem ipsum dolor sit amet</a></span>
                                </div>
                                <div>
                                    <figure><img src="/images/img5.png" width="300" height="200" alt=""></figure>
                                    <span><a href="#">Lorem ipsum dolor sit amet</a></span>
                                </div>
                                <div>
                                    <figure><img src="/images/img6.png" width="300" height="200" alt=""></figure>
                                    <span><a href="#">Lorem ipsum dolor sit amet</a></span>
                                </div>
                            </div>
                            <div class="pagination" data-flex="center">
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#" class="active">...</a>
                                <a href="#">Next ></a>
                            </div>
                        </div>
                        <div class="popular">
                            <h2>Popular Downloads</h2>
                            <div data-flex="stripe w">
                                <a href="#"><img src="/images/img12.png" width="192" height="142" alt=""></a>
                                <a href="#"><img src="/images/img13.png" width="192" height="142" alt=""></a>
                                <a href="#"><img src="/images/img14.png" width="192" height="142" alt=""></a>
                            </div>
                        </div>  
                    </div>
                    <aside class="sidebar" data-flex-640="stripe w" data-flex-480="vstripe">
                        <div class="sponsors">
                            <h3>Sponsors</h3>
                            <div data-flex="stripe w">
                                <figure><img src="/images/img7.png" width="125" height="125" alt=""></figure>
                                <figure><img src="/images/img8.png" width="125" height="125" alt=""></figure>
                                <figure><img src="/images/img9.png" width="125" height="125" alt=""></figure>
                                <figure><img src="/images/img10.png" width="125" height="125" alt=""></figure>
                                <figure><img src="/images/img11.png" width="260" height="125" alt=""></figure>
                            </div> 
                        </div>                    
                        <div class="download">
                            <h2>Most Downloaded files</h2>
                            <div class="links-files" data-flex="col -start">
                                <a href="#">Free flower photos download</a>
                                <a href="#">Christmas greeting card PSD</a>
                                <a href="#">Wooden bookshelf PSD & icons</a>
                                <a href="#">Arrow buttons PSD pack</a>
                                <a href="#">Sale tag PSD pack</a>
                                <a href="#">Christmas Photoshop text styles</a>
                                <a href="#">Cracked wall textures pack</a>
                                <a href="#">Christmas candles PSD download</a>
                                <a href="#">Free nature photos download</a>
                                <a href="#">3D shapes PSD & icons</a>
                            </div>
                            <div class="fb">
                                <figure><img src="/images/fb.png" width="264" height="265" alt=""></figure>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe w" data-flex-480="vstripe">
                <div>
                    <h5>browse by category</h5>
                    <div data-flex="stripe w">
                        <div class="links-footer" data-flex="col -start">
                            <a href="#">Website Templates</a>
                            <a href="#">Icons</a>
                            <a href="#">Patterns</a>
                            <a href="#">Graphics</a>
                            <a href="#">Wallpapers</a>
                            <a href="#">Textures</a>
                            <a href="#">Others</a>
                        </div>
                        <div class="links-footer" data-flex="col -start">
                            <a href="#">Website Templates</a>
                            <a href="#">Icons</a>
                            <a href="#">Patterns</a>
                            <a href="#">Graphics</a>
                            <a href="#">Wallpapers</a>
                            <a href="#">Textures</a>
                            <a href="#">Others</a>
                        </div>
                    </div>
                </div>
                <div>
                    <h5>about us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt pharetra metus a viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce rhoncus tincidunt nibh quis sodales. Nulla dictum consequat nisi at malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div>
                    <h5>flickr gallery</h5>
                    <div class="flickr" data-flex="stripe w" data-flex-480="around w">
                        <a href="#"><img src="/images/img-sm.png" width="69" height="69" alt=""></a>
                        <a href="#"><img src="/images/img-sm.png" width="69" height="69" alt=""></a>
                        <a href="#"><img src="/images/img-sm.png" width="69" height="69" alt=""></a>
                        <a href="#"><img src="/images/img-sm.png" width="69" height="69" alt=""></a>
                        <a href="#"><img src="/images/img-sm.png" width="69" height="69" alt=""></a>
                        <a href="#"><img src="/images/img-sm.png" width="69" height="69" alt=""></a>
                    </div>
                </div>
            </div> 
            <div class="nav">
                <div class="lwrap" data-flex="axis">
                    <nav class="links-nav" data-flex="w">
                        <a href="#" class="active">Home</a>
                        <a href="#">Brushes</a>
                        <a href="#">Patterns</a>
                        <a href="#">Graphics</a>
                        <a href="#">Submit</a>
                        <a href="#">Advertise</a>
                        <a href="#">About Us</a>
                        <a href="#">Contact Us</a>
                    </nav>
                    <a href="/" title="Return to the homepage" id="logo-alt">
                        <img src="/images/logo.png" width="169" height="28" alt="DGallery">
                    </a>
                </div>  
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>