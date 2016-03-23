<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Caprice</title>
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
            var LAYOUT_WIDTH = 1010;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="lwrap" data-flex data-flex-640="vstripe">
            <aside class="sidebar" data-flex="col -start" data-flex-640="vaxis">
                <a href="#" title="Return to the homepage" id="logo">
                    <img src="/images/Logo.png" width="138" height="59" alt="Caprice">
                </a>
                <nav class="links-nav" data-flex="col" data-childs="-center" data-flex-640="center w" data-childs-640="center -center">
                    <a href="#" class="active">About</a>
                    <a href="#">Portfolio</a>
                    <a href="#">Social</a>
                    <a href="#">Blog</a>
                    <a href="#">Contact</a>
                </nav>
            </aside>
            <div class="content">
                <h1>About Me</h1>
                <blockquote>Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</blockquote>
                <article class="about">
                    <figure><img src="/images/img1.png" width="700" height="306" alt=""></figure>
                    <h2>Ipsum Tortor Vestibulum Sollicitudin</h2>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Cum sociis natoque penatibus et magnis dis parturient montes, nasce&shy;tur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                </article>
                <div class="grid" data-flex="stripe w" data-flex-480="vstripe">
                    <article>
                        <h2 data-flex="-center"><i class="icon-screen"></i>Web Design</h2>
                        <p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, posuere velit aliquet. Donec id elit non mi porta gravida at eget metus. </p>
                    </article>
                    <article>
                        <h2 data-flex="-center"><i class="icon-palette"></i>Illustration</h2>
                        <p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, posuere velit aliquet. Donec id elit non mi porta gravida at eget metus. </p>
                    </article>
                    <article>
                        <h2 data-flex="-center"><i class="icon-video"></i>Motion Graphic</h2>
                        <p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, posuere velit aliquet. Donec id elit non mi porta gravida at eget metus. </p>
                    </article>
                    <article>
                        <h2 data-flex="-center"><i class="icon-box"></i>Package Design</h2>
                        <p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, posuere velit aliquet. Donec id elit non mi porta gravida at eget metus. </p>
                    </article>
                </div>
                <div class="slider">
                    <h2 data-flex="axis">Our Latest Works
                        <div data-flex="end">
                            <a href="#" class="btn btn-thumb prev"></a>
                            <a href="#" class="btn btn-thumb next"></a>
                        </div>
                    </h2>
                    <div data-flex="stripe w">
                        <figure><img src="/images/img2.png" width="163" height="124" alt=""></figure>
                        <figure><img src="/images/img2.png" width="163" height="124" alt=""></figure>
                        <figure><img src="/images/img2.png" width="163" height="124" alt=""></figure>
                        <figure><img src="/images/img2.png" width="163" height="124" alt=""></figure>
                    </div>
                </div>
                <div>
                    <h2>Malesuada Condimentum Inceptos Vehicula</h2>
                    <p>Sed posuere consectetur est at lobortis. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                    <ul class="list-default" data-childs="">
                        <li>Sed posuere consectetur est at lobortis, Nullam id dolor id nibh ultricies vehicula</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                        <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>