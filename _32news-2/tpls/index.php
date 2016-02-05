<!DOCTYPE html>
<html lang="en">
    <head>
        <title>News-2</title>
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
            var LAYOUT_WIDTH = 640;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="lwrap" data-flex="axis">
                <p>Having trouble reading this email? <a href="#">View it in your browser</a></p>
                <div class="links-top" data-flex="end w" data-childs="-center">
                    <a href="#">Online Version</a>
                    <a href="#">Forward to a Friend</a>
                </div>
            </div>         
        </header>
        <div class="lwrap">
            <section class="header" data-flex="axis">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="273" height="36" alt="News-2">
                </a>
                <time>17 January 2012</time>
            </section>
            <section class="featured">
                <figure>
                    <img src="/images/headerfigure.png" width="157" height="100" alt="">
                    <figcaption data-flex="col -start between" data-flex-640="col -start around">
                        <h1>Great Photos Every Day</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry unknown printer took a galley</p>
                        <a href="#" class="btn btn-alt">read more</a>
                    </figcaption>
                </figure>
            </section>
            <section class="content-wrap">
                <div data-flex="stripe" data-flex-480="vstripe">
                    <div class="content">
                        <article>
                            <h2>Beautiful Day in Paradise - In the Morning</h2>
                            <figure><img src="/images/img1.png" width="366" height="209" alt=""></figure>
                            <div data-flex="stripe" data-flex-640="stripe w">
                                <figure><img src="/images/img2.png" width="83" height="51" alt=""></figure>
                                <figure><img src="/images/img2.png" width="83" height="51" alt=""></figure>
                                <figure><img src="/images/img2.png" width="83" height="51" alt=""></figure>
                                <figure><img src="/images/img2.png" width="83" height="51" alt=""></figure>
                            </div>
                            <p>In ultricies bibendum risus sit amet placerat. Vivamus porttitor ornare mattis. Curabitur laoreet nisl felis, non blandit turpis. Quisque vitae metus mi. Integer volutpat, metus quis.</p>
                            <a href="#" class="btn btn btn-default">read more</a>
                        </article>
                        <article>
                            <h2>Beautiful Day in Paradise - In the Afternoon</h2>
                            <figure><img src="/images/img1.png" width="366" height="209" alt=""></figure>
                            <div data-flex="stripe" data-flex-640="stripe w">
                                <figure><img src="/images/img2.png" width="83" height="51" alt=""></figure>
                                <figure><img src="/images/img2.png" width="83" height="51" alt=""></figure>
                                <figure><img src="/images/img2.png" width="83" height="51" alt=""></figure>
                                <figure><img src="/images/img2.png" width="83" height="51" alt=""></figure>
                            </div>
                            <p>Etiam sit amet orci lorem, nec iaculis arcu. Aenean hendrerit augue id magna convallis sodales. Donec neque mauris, placerat quis ultrices vitae, rhoncus in enim nullam semper commodo.</p>
                            <a href="#" class="btn btn btn-default">read more</a>
                        </article>
                        <article>
                            <h2>Beautiful Day in Paradise - At Night</h2>
                            <figure><img src="/images/img1.png" width="366" height="209" alt=""></figure>
                            <div data-flex="stripe" data-flex-640="stripe w">
                                <figure><img src="/images/img2.png" width="83" height="51" alt=""></figure>
                                <figure><img src="/images/img2.png" width="83" height="51" alt=""></figure>
                                <figure><img src="/images/img2.png" width="83" height="51" alt=""></figure>
                                <figure><img src="/images/img2.png" width="83" height="51" alt=""></figure>
                            </div>
                            <p>In ultricies bibendum risus sit amet placerat. Vivamus porttitor ornare mattis. Curabitur laoreet nisl felis, non blandit turpis. Quisque vitae metus mi. Integer volutpat, metus quis.</p>
                            <a href="#" class="btn btn btn-default">read more</a>
                        </article>
                    </div>
                    <aside class="sidebar" data-flex-480="stripe w">
                        <div>
                            <h2>Sidebar List</h2>
                            <p>Quisque vitae ligula arcu, in dona  eu rutrum magna.</p>
                            <ul class="links-default" data-childs="-start">
                                <li><a href="#">Lorem lipsum dolor</a></li>
                                <li><a href="#">Etiam in diam lacus in amet</a></li>
                                <li><a href="#">Praesent lobortis enim nec</a></li>
                                <li><a href="#">Quisque eget sapien dolor</a></li>
                            </ul>
                        </div>
                        <article>
                            <h2>New Additions</h2>
                            <figure><img src="/images/img3.png" width="157" height="100" alt=""></figure>
                            <p>Quisque vitae ligula arcu, in dona  eu rutrum magna.</p>
                            <a class="btn btn btn-default">view all photos</a>
                        </article>
                        <div data-flex="col -start">
                            <h2>Advertisement</h2>
                            <figure><img src="/images/photo.png" width="121" height="416" alt=""></figure>
                            <a href="#" class="btn btn-download">Free Download</a>
                        </div>
                    </aside>
                </div>
                <section data-flex="around w" data-flex-480="center w" data-childs="-center" class="links-social">
                    <span>Follow Me</span>
                    <a href="#"><i class="icon-fb"></i>facebook</a>
                    <a href="#"><i class="icon-tw"></i>twitter</a>
                    <a href="#"><i class="icon-rss"></i>rss feed</a>
                    <a href="#"><i class="icon-ms"></i>myspace</a>
                    <a href="#"><i class="icon-sk"></i>john.doe.123</a>
                </section>
            </section>
            <footer data-flex="center">
                <p>This daily newsletter was sent to johndoe@sitename.com from Company Name because you subscribed. Rather not receive our newsletter anymore? <a href="#">Unsubscribe</a> instantly</p>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>