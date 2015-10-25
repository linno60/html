<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Desain</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/reset-elements.css">
        <link rel="stylesheet" href="/css/styles.css">    
    </head>
    <body data-flex>
        <div class="side-wrap" data-flex="row--end">
            <aside class="sidebar">
                <a href="#" class="logo" data-flex><img src="/images/logo.png" width="223" height="215" alt=""></a>
                <form class="form-search" action="#" method="post" data-flex="row-center-between">
                    <input type="search" placeholder="search...">
                    <a href="#" data-flex="row-center-center"><i class="icon-search"></i></a>    
                </form>
                <h3 class="title-sm">About Me</h3>
                <div data-flex="row-start-between" class="about">
                    <p>Hi! Welcome to my blog. My name is Mohammad Jeprie. I am a bla-bla-bla and all that bull shit ....</p>
                    <figure data-flex><img src="/images/avatar.png" width="80" height="80" alt=""></figure>
                </div>
                <nav>
                    <h3 class="title-sm">Category</h3>
                    <div class="links links-nav">
                        <a href="#">Trip</a>
                        <a href="#">Family</a>
                        <a href="#">Kids</a>
                        <a href="#">Work</a>
                        <a href="#">Other Stuff</a>
                    </div>
                    <h3 class="title-sm">Pages</h3>
                    <div class="links links-nav">
                        <a href="#">About me</a>
                        <a href="#">Contact</a>
                        <a href="#">Portfolio</a>
                    </div>
                    <h3 class="title-sm">Follow Me</h3>
                    <div class="links links-nav">
                        <a href="#">Twitter</a>
                        <a href="#">Facebook</a>
                        <a href="#">My Space</a>
                    </div>
                </nav>
            </aside>
        </div>
        <div class="content-wrap" data-flex>
            <div class="content">
                <section class="post-wrap">
                    <div class="hdr" data-flex="row--between">
                        <div class="post-side">
                            <div class="lbl lbl-default"><div>Video</div></div>
                        </div>
                        <div class="post">
                          <h3 class="title-lg">Videos of My Trip to Hawaai</h3>  
                        </div>
                    </div>
                    <div class="post-main" data-flex="row--between">
                        <div class="post-side">
                            <div class="details">
                                <div data-flex="col">
                                    <span>Date:</span>
                                    <time>15/03/2010</time>
                                </div>
                                <div>
                                    <span>Category:</span>
                                    <div>
                                        <a href="#">Trip</a>,
                                        <a href="#">Family</a>.
                                    </div>
                                </div>
                                <div>
                                    <span>Tags:</span>
                                    <div>
                                        <a href="#">Personal</a>,
                                        <a href="#">Travel</a>.
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="post">
                            <figure data-flex><img src="/images/video.png" width="451" height="276" alt=""></figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed sem quis nunc viverra feugiat ac vel lorem. Praesent tortor mauris, dictum nec aliquam eget, congue non tellus. Integer tristique commodo neque sit amet laoreet. Nunc sit amet suscipit velit. Aenean consectetur est id dui varius dapibus. Etiam id purus lorem. Nullam ullamcorper vulputate gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Proin metus sapien, vulputate sed malesuada at, bibendum eu erat. Duis consequat, sapien eget blandit eleifend, ipsum nisi pulvinar mi, nec aliquam erat lacus non turpis. Etiam eget ligula turpis, vitae pretium sapien. Nunc adipiscing porta volutpat. Integer vulputate mi sit amet libero laoreet nec vehicula urna iaculis. Cras sed turpis vel ante rhoncus vehicula at non mauris. Donec volutpat felis id dolor ornare auctor.</p>
                        </div>
                    </div>
                </section>                
<!--                <section class="post-wrap">
                    <div class="hdr" data-flex="row--between">
                        <div class="post-side">
                            <div class="lbl lbl-default"><div>Article</div></div>
                        </div>
                        <div class="post">
                            <h3 class="title-lg">Story of My Life</h3>
                        </div>    
                    </div>
                    <div class="post-main" data-flex="row--between">
                        <div class="post-side">
                            <div class="details">
                                <div data-flex="col">
                                    <span>Date:</span>
                                    <time>15/03/2010</time>
                                </div>
                                <div>
                                    <span>Category:</span>
                                    <div>
                                        <a href="#">Trip</a>,
                                        <a href="#">Family</a>.
                                    </div>
                                </div>
                                <div>
                                    <span>Tags:</span>
                                    <div>
                                        <a href="#">Personal</a>,
                                        <a href="#">Travel</a>.
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="post">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed sem quis nunc viverra feugiat ac vel lorem. Praesent tortor mauris, dictum nec aliquam eget, congue non tellus. Integer tristique commodo neque sit amet laoreet. Nunc sit amet suscipit velit. Aenean consectetur est id dui varius dapibus. Etiam id purus lorem. Nullam ullamcorper vulputate gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Proin metus sapien, vulputate sed malesuada at, bibendum eu erat. Duis consequat, sapien eget blandit eleifend, ipsum nisi pulvinar mi, nec aliquam erat lacus non turpis. Etiam eget ligula turpis, vitae pretium sapien. Nunc adipiscing porta volutpat. Integer vulputate mi sit amet libero laoreet nec vehicula urna iaculis. Cras sed turpis vel ante rhoncus vehicula at non mauris. Donec volutpat felis id dolor ornare auctor.</p>
                        </div>
                    </div>
                </section>-->
            </div>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>