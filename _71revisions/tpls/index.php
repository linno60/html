<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Revisions</title>
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
        <div class="lwrap">
            <header data-flex="axis">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="293" height="61" alt="Revisions">
                </a>
                <nav class="links-nav" data-flex="end w">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Portfolio</a>
                    <a href="#">Contact</a>
                </nav>
                <div class="links-social" data-flex="col -start">
                    <a href="#"><i class="icon-tw"></i></a>
                    <a href="#"><i class="icon-rss"></i></a>
                    <a href="#"><i class="icon-fb"></i></a>
                </div>
            </header>
            <div class="content-wrap">             
                <div class="featured" data-flex-480="vstripe">
                    <figure><img src="/images/img1.png" width="461" height="214" alt=""></figure>
                    <h2>icon pack</h2>
                    <p>Nunc iaculis malesuada commodo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum viverra suscipit odio sed rhoncus.</p>
                    <div><a href="#" class="btn btn-sm">visit one</a></div>
                </div>
                <div class="info" data-flex="stripe" data-childs="-center" data-flex-480="vstripe">
                    <div>
                        <i class="icon-info"></i>
                        <div>
                            <h3 class="title">Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi&shy;scing elit. Donec iaculis, dolor at venenatis dapibus, odio orci egestas lectus, in molestie eros sem sed est. Nulla nec interdum nibh.</p>
                            <a href="#" class="more">More info...</a>
                        </div>
                    </div>
                    <div>
                        <i class="icon-tick"></i>
                        <div>
                            <h3 class="title">Dolor sit amet</h3>
                            <p>In sollicitudin, turpis in bibendum imperdiet, libero sapien malesuada felis, vel rhoncus ligula arcu convallis nisl. Fusce pharetra pellentesque leo quis eleifend.</p>
                            <a href="#" class="more">More info...</a>
                        </div>
                    </div>
                </div>
                <div class="content" data-flex="col -center">
                    <h3 class="title">Space for more of your content</h3>
                    <p>Nulla hendrerit dictum augue, in egestas nisi tristique scelerisque. Morbi porta elementum arcu nec adipiscing. Curabitur mattis lorem sed arcu lobortis ornare. Aliquam scelerisque tempus purus vitae malesuada. Vivamus eleifend egestas euismod. Aliquam erat volutpat. Vivamus pellentesque fringilla nisl et tempor. Pellentesque et justo vitae arcu tempus dignissim. Pellentesque lacinia quam ut velit malesuada consequat laoreet justo tincidunt. Vestibulum lacus nibh, iaculis ut accumsan et, bibendum nec sapien. Praesent eu venenatis urna. Phasellus non nunc vitae lacus pulvinar molestie. Morbi eget augue dui, vitae scelerisque lacus. Mauris sceleris&shy;que molestie ligula in laoreet. Vestibulum tristique fermentum sollicitudin. </p>
                    <div data-flex="stripe" data-flex-480="around w">
                        <figure><img src="/images/img2.png" width="260" height="145" alt=""></figure> 
                        <figure><img src="/images/img3.png" width="259" height="146" alt=""></figure> 
                        <figure><img src="/images/img4.png" width="258" height="147" alt=""></figure> 
                    </div>
                    <a href="#" class="btn btn-lg">go get it</a>
                </div>
            </div>
            <footer>
                <span>Some copyright for you business. Design by <a href="#">iMatt.si</a></span>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>