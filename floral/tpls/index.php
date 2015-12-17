<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Floral</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/reset-elements.css">
        <link rel="stylesheet" href="css/data-flex.css">
        <link rel="stylesheet" href="css/styles.css">  
        <script>
            var LAYOUT_WIDTH = 980;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="vstripe">
        <div>
            <header>
                <div class="lwrap" data-flex="axis">
                    <a href="#" title="Return to the homepage" id="logo">
                        <img src="images/logo.png" width="270" height="81" alt="Floral">
                    </a>
                    <nav class="links-nav" data-flex="center" data-childs="-center center">
                        <a href="#" class="active">Home</a>
                        <a href="#">Articles</a>
                        <a href="#">Tutorials</a>
                        <a href="#">Contact</a>
                    </nav>
                </div>
            </header>
            <div class="wrap">
                <div class="lwrap" data-flex="stripe">
                    <div class="content">
                        <div class="post">
                            <div data-flex="axis">
                                <h2>Some Title Goes Here</h2>
                                <div data-flex="col -end">
                                    <em class="author">John Doe</em>
                                    <time>may.26.2011</time>
                                </div>
                            </div>
                            <figure><img src="images/img1.png" width="602" height="220" alt=""></figure>
                            <em>Phasellus vel arcu vitae neque sagittis aliquet ac at purus. Vestibulum varius eros in dui sagittis non ultrices orci hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </em>
                            <p><strong>Sed euismod feugiat sodales.</strong> Vivamus dui ipsum, laoreet vitae euismod sit amet, euismod ac est. Sed turpis massa, convallis vitae facilisis eget, malesuada ullamcorper nibh. Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, enim sit amet volutpat sodales, lorem velit fringilla metus, et semper metus sapien non odio. Nulla facilisi. <a href="#">Praesent gravida suscipit leo</a>, eget fermentum magna malesuada ac. Maecenas pulvinar malesuada elementum. </p>
                            <div data-flex="end"><a href="#" class="more" data-flex="-center">Read more</a></div>
                        </div>
                        <div class="border"></div>
                        <div class="post">
                            <div data-flex="axis">
                                <h2>Some Title Goes Here</h2>
                                <div data-flex="col -end">
                                    <em class="author">John Doe</em>
                                    <time>may.26.2011</time>
                                </div>
                            </div>
                            <figure><img src="images/img2.png" width="602" height="220" alt=""></figure>
                            <em>Phasellus vel arcu vitae neque sagittis aliquet ac at purus. Vestibulum varius eros in dui sagittis non ultrices orci hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </em>
                            <p><strong>Sed euismod feugiat sodales.</strong> Vivamus dui ipsum, laoreet vitae euismod sit amet, euismod ac est. Sed turpis massa, convallis vitae facilisis eget, malesuada ullamcorper nibh. Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, enim sit amet volutpat sodales, lorem velit fringilla metus, et semper metus sapien non odio. Nulla facilisi. <a href="#">Praesent gravida suscipit leo</a>, eget fermentum magna malesuada ac. Maecenas pulvinar malesuada elementum. </p>
                            <div data-flex="end"><a href="#" class="more" data-flex="-center">Read more</a></div>
                        </div>
                        <div class="pagination" data-flex="axis">
                            <a href="#">Prev <<</a>
                            <div data-flex="axis">
                                <a href="#">1</a>|
                                <a href="#">2</a>|
                                <a href="#">3</a>|
                                <a href="#" class="active">4</a>|
                                <a href="#">5</a>|
                                <a href="#">6</a>|
                                <a href="#">7</a>|
                                <a href="#">8</a>|
                                <a href="#">9</a>|
                                <a href="#">10</a>|
                                <a href="#">11</a>|
                                <a href="#">12</a>
                            </div>
                            <a href="#">>> Next</a>
                        </div>
                    </div>
                    <aside class="sidebar">
                        <div>
                            <h2 class="title">Categories</h2>
                            <ul class="links-sidebar" data-flex="col">
                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#">Consectetur adipiscing elit</a></li>
                                <li><a href="#">Etiam aliquet convallis enim ut </a></li>
                                <li><a href="#">Donec at pretium dui</a></li>
                                <li><a href="#">Nulla sed massa sagittis venenatis</a></li>
                                <li><a href="#">Praesent nec tortor nec massa </a></li>
                            </ul>
                            <h2 class="title">Recent Comments</h2>
                            <div>
                                <p><a href="#">Donec consequat</a> suscipit leo at accumsan. In hac habitasse platea dictumst.</p>
                                <p><a href="#">Aliquam erat ipsum,</a> consequat id venenatis suscipit, venenatis sed leo. Ut nec lacus in sem eleifend semper id ac dolor.</p>
                                <p><a href="#">Etiam aliquet convallis enim ut Donec at pretium dui</a></p>
                                <p><a href="#">Nulla sed massa sagittis</a> venenatis Praesent nec tortor nec massa </p>
                                <p><a href="#">Donec faucibus mollis dolor in ullamcorper.</a></p>
                                <a href="#" class="more" data-flex="-center">Read more</a>
                            </div>
                        </div>
                        <a href="#" class="btn btn-default">FreePSDFiles.net</a>
                        <a href="#" class="btn btn-default active">Web-Backgrounds.net</a>
                    </aside>
                </div>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe">
                <div>
                    <h3 class="title">About Us</h3>
                    <p>Nullam ac urna velit. Pellentesque in arcu tortor. Pellentesque nec est et elit varius pulvinar eget vitae sapien. Aenean vehicula accumsan gravida. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus et lectus in urna consequat consectetur ut eget risus. Nunc augue diam, mattis eu tristique luctus, aliquam vitae massa. Praesent lacinia nisi sit amet risus cursus porta.</p>
                </div>
                <div>
                    <h3 class="title">Site Page</h3>
                    <div class="links-footer" data-flex="col -start">
                        <a href="#">Home</a>
                        <a href="#">About Us</a>
                        <a href="#">Gallery</a>
                        <a href="#">Contact</a>
                    </div>
                </div>
                <div>
                    <h3 class="title">Praesent pharetra</h3>
                    <div class="links-footer" data-flex="col -start">
                        <a href="#">Vestibulum iaculis scelerisque</a>
                        <a href="#">Cras aliquam erat</a>
                        <a href="#">Morbi imperdiet ipsum</a>
                        <a href="#">Donec faucibus mollis</a>
                        <a href="#">Praesent lacinia nisi</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>