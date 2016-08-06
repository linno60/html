<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Display</title>
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
        <div>
            <header class="lwrap">
                <div data-flex="between -end">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" height="50" width="163" alt="">
                    </a>
                    <div class="links-social" data-flex="end w" data-childs="center -center">
                        <a href="#" class="twitter"><i class="icon-tw"></i></a>
                        <a href="#" class="facebook"><i class="icon-fb"></i></a>
                        <a href="#" class="rss"><i class="icon-rs"></i></a>
                        <a href="#" class="pinterest"><i class="icon-pt"></i></a>
                        <a href="#" class="google-plus"><i class="icon-gp"></i></a>
                        <a href="#" class="dribble"><i class="icon-db"></i></a>
                    </div>
                </div>
                <nav class="links-nav" data-flex="w">
                    <a href="#" class="active">home</a>
                    <a href="#">about</a>
                    <a href="#">work</a>
                    <a href="#">contact</a>
                </nav>
            </header>
            <div class="slider">
                <div class="lwrap" data-flex="center -end">
                    <figure><img src="/images/img.png" width="830" height="472" alt=""></figure>
                </div>  
            </div>
            <div class="lwrap callout">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu eratiuy lacus, vel congue mauris. Fusce velitaria justo, faucibus eu.</h2>
                <a href="#" class="btn btn-default">browse portfolio</a>
            </div>
            <div class="video-wrap">
                <div class="lwrap clearfix">
                    <div class="video"><figure data-video="16:9"><iframe src="https://www.youtube.com/embed/uh8y-K-xC-E" frameborder="0" allowfullscreen></iframe></figure></div>
                    <h3>get to know us a little better!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu erat lacus, vel congue mauris. Fusce velit justo, faucibus eu sagittis ac, gravida quis tortor. Suspendisse non urna mi, quis tincidunt eros. Nullam tellus turpis, fringilla sit amet congue ut, luctus a nulla. Donec sit amet sapien neque, id ullamcorper diam. Nulla facilisi. Pellentesque pellentesque arcu a elit congue lacinia.</p>
                    <p>Nullam tellus turpis, fringilla sit amet congue ut, luctus a nulla. Donec sit amet sapien neque, id ullamcorper diam. Nulla facilisi. Pellentesque pellentesque arcu a elit congue lacinia.</p>
                </div>
            </div>
            <div class="portfolio">
                <div class="lwrap">
                    <h3>a couple of our featured projects</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu erat lacus, vel congue mauris. Fusce velit justo, faucibus eu sagittis ac, gravida quis tortor. Suspendisse non urna mi, quis tincidunt eros.</p>                
                </div>
                <div class="gallery" data-flex="stripe w">
                    <figure><img src="/images/img3.png" width="300" height="200" alt=""><div class="overlay" data-flex="center -center"><a href="#" class="btn btn-circle"><i class="icon-link"></i></a></div></figure>
                    <figure><img src="/images/img2.png" width="300" height="200" alt=""><div class="overlay" data-flex="center -center"><a href="#" class="btn btn-circle"><i class="icon-link"></i></a></div></figure>
                    <figure><img src="/images/img3.png" width="300" height="200" alt=""><div class="overlay" data-flex="center -center"><a href="#" class="btn btn-circle"><i class="icon-link"></i></a></div></figure>
                    <figure class="hidden"><img src="/images/img4.png" width="300" height="200" alt=""><div class="overlay" data-flex="center -center"><a href="#" class="btn btn-circle"><i class="icon-link"></i></a></div></figure>
                    <figure class="hidden-md"><img src="/images/img3.png" width="300" height="200" alt=""><div class="overlay" data-flex="center -center"><a href="#" class="btn btn-circle"><i class="icon-link"></i></a></div></figure>
                    <figure class="hidden-sm"><img src="/images/img2.png" width="300" height="200" alt=""><div class="overlay" data-flex="center -center"><a href="#" class="btn btn-circle"><i class="icon-link"></i></a></div></figure>
                </div>
                <div class='lwrap slider-portfolio' data-flex="axis">
                    <input name="anchor" id='slide-0' type="radio">
                    <input name="anchor" id='slide-1' type="radio">
                    <input name="anchor" id='slide-2' type="radio">
                    <input name="anchor" id='play' type="radio" checked>
                    <div class='arrowprev'>
                        <label class='num0' for='slide-0'></label>
                        <label class='num1' for='slide-1'></label>
                        <label class='num2' for='slide-2'></label>
                    </div>
                    <ul data-childs="col -center">
                        <li>
                            <h4>dark ui kit freebie</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu erat lacus, vel congue mauris. Fusce velit justo, faucibus eu sagittis.</p>
                        </li>
                        <li class='num0'>
                            <h4>dark ui kit freebie</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu erat lacus, vel congue mauris. Fusce velit justo, faucibus eu sagittis.</p>
                        </li>
                        <li class='num1'>
                            <h4>dark ui kit freebie</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu erat lacus, vel congue mauris. Fusce velit justo, faucibus eu sagittis.</p>
                        </li>
                        <li class='num2'>
                            <h4>dark ui kit freebie</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu erat lacus, vel congue mauris. Fusce velit justo, faucibus eu sagittis.</p>
                        </li>
                    </ul>                                       
                    <div class='arrownext'>
                        <label class='num0' for='slide-0'></label>
                        <label class='num1' for='slide-1'></label>
                        <label class='num2' for='slide-2'></label>
                    </div>
                </div>
            </div>
            <div class="findout">
                <div class="lwrap" data-flex="axis" data-flex-480="vaxis">
                    <h2>are you ready to be blown away?</h2>
                    <a href="#" class="btn btn-default">click here to find out</a>
                </div>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="axis w">
                <span>copyright 2013 display. all rights reserved.</span>
                <nav class="links-navfooter" data-flex="-center end w">
                    <a href="#">home</a>/
                    <a href="#">about</a>/
                    <a href="#">work</a>/
                    <a href="#">contact</a>
                </nav>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>