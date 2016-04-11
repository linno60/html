<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Obscura</title>
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
                    <img src="/images/logo.png" width="88" height="29" alt="Obscura">
                </a>
                <div class="links-nav" data-flex="end w">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Portfolio</a>
                    <a href="#">Social</a>
                    <a href="#">Contact</a>
                </div>      
            </div>
        </header>
        <div class="lwrap content">
            <em>Nulla vitae libero, a pharetra augue. Vivamus sagittis lacus augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum ligula porta euismod semper.</em>
            <div class="links-social" data-flex="center w" data-childs="-center center">
                <a href="#"><i class="icon-rss"></i></a>
                <a href="#"><i class="icon-fb"></i></a>
                <a href="#"><i class="icon-tw"></i></a>
                <a href="#"><i class="icon-db"></i></a>
                <a href="#"><i class="icon-pin"></i></a>
            </div>
            <div class="grid" data-flex="-start between w">
                <div>
                    <article>
                        <figure><img src="/images/img1.png" width="465" height="298" alt=""></figure>
                        <h2>Aenean Malesuada Consectetur Risus</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur mollis ornare vel leo.</p>
                    </article>
                    <article>
                        <figure><img src="/images/img2.png" width="465" height="298" alt=""></figure>
                        <h2>Ullamcorper Ipsum Parturient Cursus Etiam</h2>
                        <p>Nulla vitae elit libero, a pharetra augue aenean leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                    </article>
                    <article>
                        <h2>Vehicula Commodo Vestibulum Sit</h2>
                    </article>
                </div>
                <div>
                    <article>
                        <figure><img src="/images/img2.png" width="465" height="298" alt=""></figure>
                        <h2>Dolor Purus Aenean Ultricies</h2>
                        <p>Cras mattis consectetur purus sit amet fermentum nulla vitae elit.</p>
                    </article>
                    <article>
                        <h2>Tristique Risus Mattis Ullamcorper</h2>
                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis.</p>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit consectetur.</p>
                    </article>
                    <article>
                        <blockquote data-flex="col -start">
                            <q>Aenean eu leo quam. Pellentesque ornare lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget mollis.</q>
                            <cite>- John Doe</cite>
                        </blockquote>
                    </article>
                    <article>
                        <h2>Two Best Friends</h2>
                    </article>
                </div>
            </div>
            <a href="#" class="btn btn-default">Older Posts</a>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe w">
                <div>
                    <h5>Popular Posts</h5>

                </div>
                <div>
                    <h5>Twitter</h5>
                </div>
                <div>
                    <h5>A Little About Me</h5>
                </div>
                <div>
                    <h5>Custom Text</h5>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>