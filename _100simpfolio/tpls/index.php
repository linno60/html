<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Simpfolio</title>
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
            <header>
                <div class="lwrap" data-flex="axis">
                    <a href="#" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="132" height="30" alt="Simpfolio">
                    </a>
                    <nav class="links-nav" data-flex="end w" data-childs="-center center">
                        <a href="#" class="active">portfolio</a>
                        <a href="#">about</a>
                        <a href="#">contact</a>
                    </nav>
                </div>
            </header>
            <div class="lwrap" data-flex="col -center">
                <h1 class="hdr" data-flex="col around">Welcome to My Folio! I am John Doe, GUI Designer. This is my website where I showcase my design works. Browse thru and enjoy!</h1>            
                <div data-childs="axis w">
                    <div class="post">
                        <figure><img src="/images/img1.png" width="960" height="400" alt=""></figure>
                        <div>
                            <h2>Project Name and title </h2>
                            <p>Lorem ipsum dolor sit amet, consectetueruer adipiscing elit, sed diam nonummy nibhhhitest euismod tincidunt ut laoreet dolore magnamus aliquam erat volutpat.</p>
                        </div>
                        <a href="#" class="btn btn-web">visit&ensp; website <i class="icon-arroww"></i></a>
                    </div>
                    <div class="post">
                        <figure><img src="/images/img2.png" width="960" height="400" alt=""></figure>
                        <div>
                            <h2>Project Name and title </h2>
                            <p>Lorem ipsum dolor sit amet, consectetueruer adipiscing elit, sed diam nonummy nibhhhitest euismod tincidunt ut laoreet dolore magnamus aliquam erat volutpat.</p>
                        </div>
                        <a href="#" class="btn btn-web">visit&ensp; website <i class="icon-arroww"></i></a>
                    </div>
                    <div class="post">
                        <figure><img src="/images/img3.png" width="960" height="400" alt=""></figure>
                        <div>
                            <h2>Project Name and title </h2>
                            <p>Lorem ipsum dolor sit amet, consectetueruer adipiscing elit, sed diam nonummy nibhhhitest euismod tincidunt ut laoreet dolore magnamus aliquam erat volutpat.</p>
                        </div>
                        <a href="#" class="btn btn-web">visit&ensp; website <i class="icon-arroww"></i></a>
                    </div>
                    <div class="post">
                        <figure><img src="/images/img4.png" width="960" height="400" alt=""></figure>
                        <div>
                            <h2>Project Name and title </h2>
                            <p>Lorem ipsum dolor sit amet, consectetueruer adipiscing elit, sed diam nonummy nibhhhitest euismod tincidunt ut laoreet dolore magnamus aliquam erat volutpat.</p>
                        </div>
                        <a href="#" class="btn btn-web">visit&ensp; website <i class="icon-arroww"></i></a>
                    </div>
                </div>
                <div class="links-pagination" data-flex="center" data-childs="-center center">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                </div>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="-start between w">
                <div data-flex="col">
                    <div class="links-social" data-flex="w">
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-fl"></i></a>
                        <a href="#"><i class="icon-yt"></i></a>
                    </div>
                    <a href="#">Visit my blog <i class="icon-arrowg"></i></a>
                </div>
                <span>Copyright &copy; 2011 WordFolio. All rights reserved.</span>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>