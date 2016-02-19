<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Aboutpage</title>
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
            var LAYOUT_WIDTH = 950;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <section class="lwrap" data-flex="col -center">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="188" height="43" alt="Aboutpage">
                </a>
                <nav class="links-nav" data-flex="around w" data-childs="col -center end" data-flex-480="center w">
                    <a href="#"><i class="icon-home"></i>Homepage</a>
                    <a href="#"><i class="icon-journal"></i>Journal</a>
                    <a href="#"><i class="icon-portfolio"></i>Portfolio</a>
                    <a href="#"><i class="icon-case"></i>About Me</a>
                    <a href="#"><i class="icon-mail"></i>Contact</a>
                </nav>
            </section>
        </header>
        <div class="lwrap">
            <article class="preview clearfix" data-flex-640="vstripe">
                <figure><img src="/images/photo.png"></figure>
                <h2>Hi. My name is John Doe. Egestas lorem ipsum dolor sit amet, consectetur adipiscing elit. </h2>
                <p>Duis lobortis magna id est condimentum eget faucibus metus ornar Maecenas lobortis tempus ipsum, ac venenatis ante tincidunt at. Mauris a purus a dui fringilla gravida. Phasellus fringilla ullamcorpe metus, eget imperdiet elit ornare vitae. </p> 
                <p>Donec varius massa eu felis commodo sed semper tortor pulvinar,  ehicula ne que quis lorem pellentesque vulputate facilisis lorem placerat. Sed a sapien vel est cursus rutrum eu id odio. Ut adipiscin auctor lorem id lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eleifend, risus nec iaculis sagittis, leo tortor commodo erat, a mollis augue nulla vitae elit.</p>
            </article>
            <div class="grid">
                <h3>what i do/what we do</h3>
                <div data-flex="stripe w" data-flex-640="vstripe">
                    <article class="clearfix">
                        <h4>Photography</h4>
                        <i class="icon-camera"></i>
                        <p>Lorem ipsum dolor sitame  consecte turpow hempor adipiscing elit. Namu hem iaculis mi felis. Insompuk elementum hendrerit vehicula opturemor Suspendi ac ligula risus, non vehicula lectus. Fusce iaculis lorem ac lorem condimentum ac ullamcorper erosome tristique. Duis sit amet luctus risus. Class aptent taciti sociosq  litoramy torquent per conubia nostra perin.</p>
                        <a href="#">View my Photography Portfolio</a>
                    </article>
                    <article class="clearfix">
                        <h4>Web Design</h4>
                        <i class="icon-web"></i>
                        <p>Lorem ipsum dolor sitame  consecte turpow hempor adipiscing elit. Namu hem iaculis mi felis. Insompuk elementum hendrerit vehicula opturemor Suspendi ac ligula risus, non vehicula lectus. Fusce iaculis lorem ac lorem condimentum ac ullamcorper erosome tristique. Duis sit amet luctus risus. Class aptent taciti sociosq  litoramy torquent per conubia nostra perin.</p>
                        <a href="#">View my Photography Portfolio</a>
                    </article>
                    <article class="clearfix">
                        <h4>Graphic Design</h4>
                        <i class="icon-graphic"></i>
                        <p>Lorem ipsum dolor sitame  consecte turpow hempor adipiscing elit. Namu hem iaculis mi felis. Insompuk elementum hendrerit vehicula opturemor Suspendi ac ligula risus, non vehicula lectus. Fusce iaculis lorem ac lorem condimentum ac ullamcorper erosome tristique. Duis sit amet luctus risus. Class aptent taciti sociosq  litoramy torquent per conubia nostra perin.</p>
                        <a href="#">View my Photography Portfolio</a>
                    </article>
                </div>
            </div>
            <footer data-flex="stripe" data-flex-480="vaxis">
                <span>&copy; 2010 John Doe. All Rights Reserved.</span>
                <div class="links-social" data-flex="end w" data-flex-480="center w">
                    <a href="#"><i class="icon-tw"></i></a>
                    <a href="#"><i class="icon-fb"></i></a>
                    <a href="#"><i class="icon-fl"></i></a>
                    <a href="#"><i class="icon-rss"></i></a>
                </div>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>