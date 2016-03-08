<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cleanpress</title>
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
            var LAYOUT_WIDTH = 992;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>       
        <header>
            <div class="lwrap" data-flex="end">
                <a href="#" class="btn btn-login">login /&ensp;<strong>register</strong></a>
            </div>
            <div class="header">
                <div class="lwrap" data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="290" height="46" alt="Cleanpress">
                    </a>
                    <nav class="links-nav" data-flex="-center center w">
                        <a href="#" class="active">home</a>
                        <a href="#">pages</a>
                        <a href="#">features</a>
                        <a href="#">portfolio</a>
                        <a href="#">blog</a>
                        <a href="#">contact</a>
                    </nav>
                </div>
            </div>
        </header>
        <div class="slider-wrap">
            <div class="lwrap">
                <div class="slider" data-flex="stripe">
                    <div data-flex="-center">
                        <figure><img src="/images/side.png" width="216" height="365" alt=""></figure>
                        <figure><img src="/images/middle.png" width="216" height="365" alt=""></figure>
                        <figure><img src="/images/side.png" width="216" height="365" alt=""></figure>
                    </div>
                    <div>
                        <h2><strong>great </strong>designing</h2>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip. </p>
                        <a href="#" class="btn btn-alt">read&nbsp;<strong>more</strong></a>
                        <a href="#" class="btn btn-default">visit&nbsp;<strong>website</strong></a>                            
                    </div>
                </div>
                <div class="links-controls" data-flex="-center center" data-childs="-center center">
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#" class="active"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>