<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Stream</title>
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
            var LAYOUT_WIDTH = 1440;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header class="lwrap" data-flex="axis w">
            <a href="#">dribbble.com/sok</a>
            <a href="#" class="btn btn-psd">psd</a>
        </header>
        <div class="wrap lwrap">
            <div class="top-bar">
                <div class="links-top" data-flex="">
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </div>
            </div>
            <div class="nav" data-flex="axis" data-flex-640="vstripe">
                <div data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="117" height="26" alt="Stream">
                    </a>
                    <nav class="links-nav" data-flex="center w">
                        <a href="#" class="active">stream</a>
                        <a href="#">activity<i class="icon-notification"></i></a>
                        <a href="#">collections</a>
                        <a href="#">soundbox</a>
                    </nav>
                </div>
                <div data-flex="axis" data-flex-640="-center center">
                    <form action="#" method="post" data-flex="axis" class="form-search">
                        <input type="image" src="/images/icons/search.png">
                        <input type="search" name="search">
                    </form>
                    <a href="#" class="btn btn-avatar"><img src="/images/kate.png"></a>
                    <a href="#" class="btn btn-plus"></a>
                </div>
            </div>
            <div class="slider" data-flex="col -start center">
                <h1>Superman: Man of Steel</h1>
                <a href="#" class="btn btn-default alt">explore</a>
                <div class="links-controls" data-flex="">
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#" class="active"></a>
                </div>                
            </div>
            <div>
                <div data-flex="stripe">
                    <div class="profile" data-flex="col -center">
                        <div data-flex="axis">
                            <input type="checkbox" name="checkbox" id="c1" checked>
                            <label for="c1"></label>
                            <figure><img src="/images/fabio.png"></figure>
                        </div>
                        <a href="#" class="name">Fabio Basile</a>
                        <time>8:34 am</time>
                        <hr>
                        <a href="#" class="seek" data-flex="-center">Seeking Contri&shy;butions</a>
                    </div>
                    <div data-flex="stripe" class="movies-wrap" data-flex-640="vstripe">
                        <div class="movies" data-flex="stripe w" data-flex-480="vstripe">
                            <div>
                                <figure><img src="/images/gameoftrones.png"></figure>
                                <h5><a href="#">Game of Thrones</a></h5>
                                <time>S03 E05</time>
                            </div>
                            <div>
                                <figure><img src="/images/hangover.png"></figure>
                                <h5><a href="#">The Hangover 2</a></h5>
                                <time>2011</time>
                            </div>
                            <div class="hidden">
                                <figure><img src="/images/end.png"></figure>
                                <h5><a href="#">This is the End</a></h5>
                                <time>2013</time>
                            </div>
                            <div class="hidden">
                                <figure><img src="/images/twoguns.png"></figure>
                                <h5><a href="#">2Guns</a></h5>
                                <time>2013</time>
                            </div>
                        </div>
                        <div class="btns" data-flex="col -center" data-flex-640="-center w">
                            <a href="#" class="btn btn-default"><i class="icon-collect"></i>collect</a>
                            <a href="#" class="btn btn-default"><span>gallery</span><span>8</span></a>
                            <a href="#" class="btn btn-add"></a>
                        </div>
                    </div>
                </div>
                <div data-flex="stripe">
                    <div class="profile" data-flex="col -center">
                        <div data-flex="axis">
                            <input type="checkbox" name="checkbox" id="c2">
                            <label for="c2"></label>
                            <figure><img src="/images/charlie.png"></figure>
                        </div>
                        <a href="#" class="name">Charlie Waite</a>
                        <time>7:15 am</time>
                        <hr>
                    </div>
                    <div data-flex="stripe" data-flex-640="vstripe" class="movies-wrap">
                        <div class="movies" data-flex="stripe w" data-flex-480="vstripe">
                            <div>
                                <figure><img src="/images/wolf.png"></figure>
                                <h5><a href="#">Wolf of Wall Street</a></h5>
                                <time>2013</time>
                            </div>
                            <div>
                                <figure><img src="/images/br.png"></figure>
                                <h5><a href="#">Breaking Bad</a></h5>
                                <time>S01 E03</time>
                            </div>
                            <div class="hidden">
                                <figure><img src="/images/elysium.png"></figure>
                                <h5><a href="#">Elysium</a></h5>
                                <time>2013</time>
                            </div>
                            <div class="hidden">
                                <figure><img src="/images/icesoldiers.png"></figure>
                                <h5><a href="#">Ice Soldiers</a></h5>
                                <time>2013</time>
                            </div>
                        </div>
                        <div class="btns" data-flex="col -center" data-flex-640="-center w">
                            <a href="#" class="btn btn-default"><i class="icon-collect"></i>collect</a>
                            <a href="#" class="btn btn-default"><span>gallery</span><span>12</span></a>
                        </div>
                    </div>                            
                </div>
            </div> 
            <footer data-flex="axis" data-flex-480="axis w">
                <div data-flex="-center">
                    <a href="#"><i class="icon-repeat"></i></a>
                    <a href="#"><i class="icon-pause"></i></a>
                    <a href="#"><i class="icon-shuffle"></i></a>
                </div>
                <div class="range" data-flex>
                    <a href="#" class="range-handle"></a>
                </div>
                <div data-flex="-center">
                    <span>-&nbsp;1.35</span>
                    <a href="#" class="active"><i class="icon-thumbsup"></i></a>
                    <a href="#"><i class="icon-thumbsdown"></i></a>
                    <a href="#"><i class="icon-volume"></i></a>
                </div>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>