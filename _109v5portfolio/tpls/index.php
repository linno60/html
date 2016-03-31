<!DOCTYPE html>
<html lang="en">
    <head>
        <title>V5Portfolio</title>
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
            var LAYOUT_WIDTH = 768;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth/LAYOUT_WIDTH+'px' : '1px';
            window.onresize = function() {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth/LAYOUT_WIDTH+'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="lwrap" data-flex="vstripe">            
            <div>
                <header data-flex="-start between" data-flex-480='vaxis'>
                    <a href="#" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="275" height="46" alt="V5Portfolio">
                    </a>
                    <nav class="links-nav" data-flex="-start end w" data-flex-480="-center center w" data-childs="-center center">
                        <a href="#" class="active">about me</a>
                        <a href="#">portfolio</a>
                        <a href="#">contact</a>
                    </nav>
                </header>
                <div class="about">
                    <h2>about me</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae congue sem. Etiam non nisl ut ligula facilisis cursus quis sed eros. Praesent non augue ultricies turpis posuere dignissim ac non velit. Sed eget mauris purus, elementum aliquet erat. Suspendisse aliquam commodo nisl vel fring&shy;illa. Sed tempus neque pretium velit lacinia in ultrices felis sagittis. Vivamus nisi nisi, aliquam et fringilla semper, iaculis vel velit. Vestibulum pretium nibh a sapien sodales condimentum. Phasellus semper placerat arcu, a lobortis tellus consectetur a. Nam faucibus laoreet elit, commodo euismod mi consectetur at. </p>
                    <div class="links-social" data-flex="stripe" data-childs="-center end" data-flex-480='center w'>
                        <a href="#">Follow me on Twitter!<i class="icon-tw"></i></a>
                        <a href="#">Find me on Facebook!<i class="icon-fb"></i></a>
                        <a href="#">See My Photos on Picasa!<i class="icon-pic"></i></a>
                    </div>
                </div>
                <div class="portfolio">
                    <h2>portfolio</h2>
                    <div data-flex="axis">
                        <a href="#"><i class="icon-prev"></i></a>
                        <div data-flex="stripe w">
                            <figure><img src="/images/img1.png" width="190" height="123" alt=""></figure>
                            <figure><img src="/images/img2.png" width="190" height="123" alt=""></figure>
                            <figure><img src="/images/img3.png" width="190" height="123" alt=""></figure>
                            <figure><img src="/images/img4.png" width="190" height="123" alt=""></figure>
                            <figure><img src="/images/img5.png" width="190" height="123" alt=""></figure>
                            <figure><img src="/images/img6.png" width="190" height="123" alt=""></figure>
                        </div>
                        <a href="#"><i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
            <footer data-flex="vstripe">
                <div class="footer" data-flex="stripe" data-flex-480="vstripe">
                    <div>
                        <h2>get interested? hire me!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi&shy;scing elit. Proin vitae congue sem. Etiam non nisl ut ligula facilisis cursus quis sed eros. Praesent non augue ultricies turpis posuere dignissim ac non velit. Sed eget mauris purus, elementum aliquet erat. </p>
                        <figure><img src="/images/face.png" width="200" height="165" alt=""></figure>
                    </div>
                    <form action='#' method='post' data-flex='col'>
                        <label for='i1'>What's your name?</label>
                        <input type="text" id='i1' placeholder="Enter your name here...">
                        <label for='i2'>Your E-Mail?</label>
                        <input type="email" id='i2' placeholder="Enter your e-mail address here...">
                        <label for='i3'>Okay, What can I do for you?</label>
                        <textarea id='i3' placeholder="Enter your question here..."></textarea>
                        <div data-flex='center'><button><span class="btn btn-submit">Submit</span></button></div>
                    </form>
                </div>
                <div class="copyright" data-flex="center">&copy; Sitename.com. Design by ChocoTemplates.com</div>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>