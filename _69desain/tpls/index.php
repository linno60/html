<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Desain</title>
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
            var LAYOUT_WIDTH = 970;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex data-flex-640="vstripe">
        <div class="side-wrap" data-flex="end">
            <aside class="sidebar" data-flex="col" data-flex-640="-start between w">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="200" height="213" alt="Desain">
                </a>  
                <div>
                    <form class="form-search" action="#" method="post" data-flex="stripe">
                        <input type="search" name="search" placeholder="search...">
                        <button></button> 
                    </form>
                </div>
                <div>
                    <h3 class="title-sm">About Me</h3>
                    <div class="clearfix">
                        <figure data-flex><img src="/images/avatar.png" width="80" height="80" alt=""></figure>
                        <p>Hi! Welcome to my blog. My name is Mohammad Jeprie. I am a bla-bla-bla and all that bull shit ....</p>
                    </div>  
                </div>
                <div>
                    <h3 class="title-sm">Category</h3>
                    <div class="links-default" data-flex="col -start">
                        <a href="#">Trip</a>
                        <a href="#">Family</a>
                        <a href="#">Kids</a>
                        <a href="#">Work</a>
                        <a href="#">Other Stuff</a>
                    </div>
                </div>
                <div>
                    <h3 class="title-sm">Pages</h3>
                    <div class="links-default" data-flex="col -start">
                        <a href="#">About Me</a>
                        <a href="#">Contact</a>
                        <a href="#">Portfolio</a>
                    </div>
                </div>
                <div>
                    <h3 class="title-sm">Follow Me</h3>
                    <div class="links-default" data-flex="col -start">
                        <a href="#">Twitter</a>
                        <a href="#">Facebook</a>
                        <a href="#">My Space</a>
                    </div>
                </div>
            </aside>
        </div>
        <div data-flex>
            <div class="content">
                <section class="post">
                    <div data-flex="stripe" data-flex-480="vstripe">
                        <div class="post-side">
                            <em class="lbl lbl-default">Video</em>
                        </div>
                        <h3 class="title-lg">Videos of My Trip to Hawaai</h3>  
                    </div>
                    <div data-flex="stripe" data-flex-480="vstripe">
                        <div class="post-side">
                            <div class="details" data-flex-480="around w">
                                <div>
                                    <span>Date:</span><br>
                                    <time>15/03/2010</time>
                                </div>
                                <div>
                                    <span>Category:</span><br>
                                    <a href="#">Trip</a>,
                                    <a href="#">Family</a>.
                                </div>
                                <div>
                                    <span>Tags:</span><br>
                                    <a href="#">Personal</a>,
                                    <a href="#">Travel</a>.
                                </div>    
                            </div>
                        </div>
                        <div>
                            <div class="video" data-video="16:9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/fJ4WsRolZ4E" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed sem quis nunc viverra feugiat ac vel lorem. Praesent tortor mauris, dictum nec aliquam eget, congue non tellus. Integer tristique commodo neque sit amet laoreet. Nunc sit amet suscipit velit. Aenean consectetur est id dui varius dapibus. Etiam id purus lorem. Nullam ullamcorper vulputate gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Proin metus sapien, vulputate sed malesuada at, bibendum eu erat. Duis consequat, sapien eget blandit eleifend, ipsum nisi pulvinar mi, nec aliquam erat lacus non turpis. Etiam eget ligula turpis, vitae pretium sapien. Nunc adipiscing porta volutpat. Integer vulputate mi sit amet libero laoreet nec vehicula urna iaculis. Cras sed turpis vel ante rhoncus vehicula at non mauris. Donec volutpat felis id dolor ornare auctor.</p>
                        </div>
                    </div>
                </section>                
                <section class="post">
                    <div data-flex="stripe" data-flex-480="vstripe">
                        <div class="post-side">
                            <em class="lbl lbl-default">Article</em>
                        </div>
                        <h3 class="title-lg">Story of My Life</h3>  
                    </div>
                    <div data-flex="stripe" data-flex-480="vstripe">
                        <div class="post-side">
                            <div class="details" data-flex-480="around w">
                                <div>
                                    <span>Date:</span><br>
                                    <time>15/03/2010</time>
                                </div>
                                <div>
                                    <span>Category:</span><br>
                                    <a href="#">Trip</a>,
                                    <a href="#">Family</a>.
                                </div>
                                <div>
                                    <span>Tags:</span><br>
                                    <a href="#">Personal</a>,
                                    <a href="#">Travel</a>.
                                </div>    
                            </div>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed sem quis nunc viverra feugiat ac vel lorem. Praesent tortor mauris, dictum nec aliquam eget, congue non tellus. Integer tristique commodo neque sit amet laoreet. Nunc sit amet suscipit velit. Aenean consectetur est id dui varius dapibus. Etiam id purus lorem. Nullam ullamcorper vulputate gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Proin metus sapien, vulputate sed malesuada at, bibendum eu erat. Duis consequat, sapien eget blandit eleifend, ipsum nisi pulvinar mi, nec aliquam erat lacus non turpis. Etiam eget ligula turpis, vitae pretium sapien. Nunc adipiscing porta volutpat. Integer vulputate mi sit amet libero laoreet nec vehicula urna iaculis. Cras sed turpis vel ante rhoncus vehicula at non mauris. Donec volutpat felis id dolor ornare auctor.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>