<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Developer</title>
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
            var LAYOUT_WIDTH = 1000;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="wrap lwrap" data-flex="stripe w">
            <div>
                <h1 class="title"><strong>adrian olivier</strong>web developer</h1>
                <article>
                    <h2 class="title">about me</h2>
                    <p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. <a href="#">Curabitur et ligula.</a> </p>
                    <p>Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. <br>Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit</p>
                </article>
                <div>
                    <h2 class="title">work</h2>
                    <div class="links-default" data-flex="col -start">
                        <a href="#">Lorem ipsum dolor sit amet enim</a>
                        <a href="#">Etiam ullamcorper</a>
                        <a href="#">Suspendisse a pellentesque dui, non felis</a>
                        <a href="#">Maecenas malesuada elit lectus felis, malesuada ultricies</a>
                        <a href="#">Ut molestie a, ultricies porta urna</a>
                        <a href="#">Vestibulum commodo volutpat</a>
                    </div>
                </div>
                <div>
                    <h2 class="title">get in touch</h2>
                    <form action="#" method="post">
                        
                    </form>
                </div>
            </div>
            <div>
                <nav class="links-nav" data-childs="center -center" data-flex="end w">
                    <a href="#" class="active">home</a>
                    <a href="#">work</a>
                    <a href="#">get in touch</a>
                    <a href="#">skills</a>
                </nav>
                <article>
                    <h2 class="title">welcome</h2>
                    <p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. </p>
                    <p>Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. <br>Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit</p>
                </article>
            </div>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>