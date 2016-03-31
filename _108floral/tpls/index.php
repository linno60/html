<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Floral</title>
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
                <a href="#" title="Return to the homepage" id="logo">
                    <img src="images/logo.png" width="270" height="81" alt="Floral">
                </a>
                <nav class="links-nav" data-flex data-flex-800="w" data-childs="-center center">
                    <a href="#" class="active">Home</a>
                    <a href="#">Articles</a>
                    <a href="#">Tutorials</a>
                    <a href="#">Contact</a>
                </nav>
            </div>
        </header>
        <div class="wrap">
            <div class="lwrap" data-flex="stripe" data-flex-480="vstripe">
                <div class="content">
                    <div class="post" data-flex="col -end">
                        <div data-flex="axis">
                            <h2>Some Tittle Goes Here</h2>
                            <div data-flex="col -end">
                                <em class="author">John Doe</em>
                                <time>may. 26. 2011</time>
                            </div>
                        </div>
                        <figure><img src="images/img1.png" width="602" height="220" alt=""></figure>
                        <em>Phasellus vel arcu vitae neque sagittis aliquet ac at purus. Vestibulum varius eros in dui sagittis non ultrices orci hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </em>
                        <p><strong>Sed euismod feugiat sodales.</strong> Vivamus dui ipsum, laoreet vitae euismod sit amet, euismod ac est. Sed turpis massa, convallis vitae facilisis eget, malesuada ullamcorper nibh. Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, enim sit amet volutpat sodales, lorem velit fringilla metus, et semper metus sapien non odio. Nulla facilisi.&ensp; <a href="#">Praesent gravida suscipit leo</a>, eget fermentum magna malesuada ac. Maecenas pulvinar malesuada elementum. </p>
                        <a href="#" class="more" data-flex="-center">Read More</a>
                    </div>
                    <hr class="border">
                    <div class="post" data-flex="col -end">
                        <div data-flex="axis">
                            <h2>Some Tittle Goes Here</h2>
                            <div data-flex="col -end">
                                <em class="author">John Doe</em>
                                <time>may. 26. 2011</time>
                            </div>
                        </div>
                        <figure><img src="images/img2.png" width="602" height="220" alt=""></figure>
                        <em>Phasellus vel arcu vitae neque sagittis aliquet ac at purus. Vestibulum varius eros in dui sagittis non ultrices orci hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </em>
                        <p><strong>Sed euismod feugiat sodales.</strong> Vivamus dui ipsum, laoreet vitae euismod sit amet, euismod ac est. Sed turpis massa, convallis vitae facilisis eget, malesuada ullamcorper nibh. Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, enim sit amet volutpat sodales, lorem velit fringilla metus, et semper metus sapien non odio. Nulla facilisi.&ensp; <a href="#">Praesent gravida suscipit leo</a>, eget fermentum magna malesuada ac. Maecenas pulvinar malesuada elementum. </p>
                        <a href="#" class="more" data-flex="-center">Read More</a>
                    </div>
                    <div class="pagination" data-flex="axis">
                        <a href="#">Prev <<</a>
                        <div data-flex="-center center w">
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
                <aside class="sidebar" data-flex="col" data-flex-480="w">
                    <div>
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
                        </div>
                        <div>
                            <h2 class="title">Recent Comments</h2>
                            <ul class="links-sidebar comments" data-flex="col">
                                <li><p><a href="#">Donec consequat</a> suscipit leo at accumsan. In hac habitasse platea dictumst.</p></li>
                                <li><p><a href="#">Aliquam erat ipsum,</a> consequat id venenatis suscipit, venenatis sed leo. Ut nec lacus in sem eleifend semper id ac dolor.</p></li>
                                <li><p><a href="#">Etiam aliquet convallis enim ut Donec at pretium dui</p></a></li>
                                <li><p><a href="#">Nulla sed massa sagittis</a> venenatis Praesent nec tortor nec massa</p></li>
                                <li><p><a href="#">Donec faucibus mollis dolor in ullamcorper.</p></a></li>
                            </ul>
                            <a href="#" class="more" data-flex="-center">View More</a>
                        </div>
                    </div>
                    <a href="#" class="btn btn-default">FreePSDFiles&shy;.net</a>
                    <a href="#" class="btn btn-default alt">Web&shy;-Backgrounds.net</a>
                </aside>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe w">
                <div>
                    <h3 class="title">About Us</h3>
                    <p>Nullam ac urna velit. Pellentesque in arcu tortor. Pellen&shy;tesque nec est et elit varius pulvinar eget vitae sapien. Aenean vehicula accumsan gravida. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus et lectus in urna consequat consectetur ut eget risus. Nunc augue diam, mattis eu tristique luctus, aliquam vitae massa. Praesent lacinia nisi sit amet risus cursus porta.</p>
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
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>