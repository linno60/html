<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Obscura</title>
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
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="88" height="29" alt="Obscura">
                </a>
                <div class="links-nav" data-flex="end w">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Portfolio</a>
                    <a href="#">Social</a>
                    <a href="#">Contact</a>
                </div>      
            </div>
        </header>
        <div class="lwrap content">
            <em>Nulla vitae libero, a pharetra augue. Vivamus sagittis lacus augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum ligula porta euismod semper.</em>
            <div class="links-social" data-flex="center w" data-childs="-center center">
                <a href="#"><i class="icon-rss"></i></a>
                <a href="#"><i class="icon-fb"></i></a>
                <a href="#"><i class="icon-tw"></i></a>
                <a href="#"><i class="icon-db"></i></a>
                <a href="#"><i class="icon-pin"></i></a>
            </div>
            <div class="grid" data-flex="-start between w" data-flex-480="vstripe">
                <div>
                    <article>
                        <figure><img src="/images/img1.png" width="465" height="298" alt=""></figure>
                        <div>
                            <h2>Aenean Malesuada Consectetur Risus</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur mollis ornare vel leo.</p>
                        </div>
                        <div class="caption" data-childs="-center" data-flex="axis">
                            <time><i class="icon-image"></i>25 August, 2012</time>
                            <a href="#"><i class="icon-heart"></i>32</a>
                        </div>
                    </article>
                    <article>
                        <figure class="video" data-video="16:9"><iframe width="560" height="315" src="https://www.youtube.com/embed/RkjDcfdHo-c" frameborder="0" allowfullscreen></iframe></figure>
                        <div>
                            <h2>Ullamcorper Ipsum Parturient Cursus Etiam</h2>
                            <p>Nulla vitae elit libero, a pharetra augue aenean leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                        </div>
                        <div class="caption" data-childs="-center" data-flex="axis">
                            <time><i class="icon-video"></i>25 August, 2012</time>
                            <a href="#"><i class="icon-heart"></i>47</a>
                        </div>
                    </article>
                    <article class="audio">
                        <div>
                            <div data-flex="-start between">
                                <figure><img src="/images/img3.png" width="120" height="120" alt=""></figure>
                                <div>
                                    <div class="player" data-flex="axis">
                                        <div class="play"></div>
                                        <div class="load" data-flex></div>
                                    </div>
                                    <ul class="list-default" data-childs>
                                        <li><i class="icon-note"></i>Beautiful Song</li>
                                        <li><i class="icon-user"></i>Awesome Group</li>
                                        <li><i class="icon-record"></i>Self-titled</li>
                                    </ul>
                                </div>
                            </div>
                            <h2>Vehicula Commodo Vestibulum Sit</h2>
                            <p>Pellentesque ornare lacinia quam venetians vestibulum.</p>
                        </div>
                        <div class="caption" data-childs="-center" data-flex="axis">
                            <time><i class="icon-note"></i>25 August, 2012</time>
                            <a href="#"><i class="icon-heart"></i>32</a>
                        </div>
                    </article>
                </div>
                <div>
                    <article>
                        <figure><img src="/images/img2.png" width="465" height="298" alt="">
                            <div class="thumbs" data-flex>
                                <a href="#" class="btn btn-thumb prev"></a>
                                <a href="#" class="btn btn-thumb next"></a>
                            </div>
                        </figure>
                        <div>
                            <h2>Dolor Purus Aenean Ultricies</h2>
                            <p>Cras mattis consectetur purus sit amet fermentum nulla vitae elit.</p>
                        </div>
                        <div class="caption" data-childs="-center" data-flex="axis">
                            <time><i class="icon-image"></i>25 August, 2012</time>
                            <a href="#"><i class="icon-heart"></i>27</a>
                        </div>
                    </article>
                    <article>
                        <div>
                            <h2>Tristique Risus Mattis Ullamcorper</h2>
                            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis.</p>
                            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit consectetur.</p>
                        </div>
                        <div class="caption" data-childs="-center" data-flex="axis">
                            <time><i class="icon-pen"></i>25 August, 2012</time>
                            <a href="#"><i class="icon-heart"></i>18</a>
                        </div>
                    </article>
                    <article>
                        <div>
                            <blockquote data-flex="col -start">
                                <q>Aenean eu leo quam. Pellentesque ornare lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget mollis.</q>
                                <cite>- John Doe</cite>
                            </blockquote>
                        </div>
                        <div class="caption" data-childs="-center" data-flex="axis">
                            <time><i class="icon-balloon"></i>25 August, 2012</time>
                            <a href="#"><i class="icon-heart"></i>32</a>
                        </div>
                    </article>
                    <article class="chat">
                        <div>
                            <h2>Two Best Friends</h2>
                            <p><strong>Barney:&nbsp;</strong> Pellentesque ornare lacinia quam venenatis vestibulum.</p>
                            <p><strong>Ted:&nbsp;</strong> Commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                            <p><strong>Barney:&nbsp;</strong> Nullam quis risus eget mollis.</p>
                        </div>
                        <div class="caption" data-childs="-center" data-flex="axis">
                            <time><i class="icon-boobbles"></i>25 August, 2012</time>
                            <a href="#"><i class="icon-heart"></i>29</a>
                        </div>
                    </article>
                </div>
            </div>
            <a href="#" class="btn btn-default">Older Posts</a>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe w" data-flex-480="vstripe">
                <div>
                    <h5>Popular Posts</h5>
                    <article>
                        <p><a href="#">Vivamus sagittis lacus vel augue laoreet rutrum dolor auctor.</a></p>
                    </article>
                    <article>
                        <p><a href="#">Scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem</a></p>
                    </article>
                    <article>
                        <p><a href="#">Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus,</a></p>
                    </article>
                </div>
                <div>
                    <h5>Twitter</h5>
                    <article>
                        <p><a href="#">Praesent commodo id cursus magna</a> - <time>21 hours ago</time></p>
                    </article>
                    <article>
                        <p><a href="#">Vestibulum id ligula porta euismod semper, auctory dolor idfermentum.</a> - <time>2 days ago</time></p>
                    </article>
                    <article>
                        <p><a href="#">Donec ullamcorper nulla non metus auctor.</a> - <time> 3 days ago</time></p>
                    </article>
                </div>
                <div>
                    <h5>A Little About Me</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                    <p>Donec id elit non porta gravida at eget metus. Nullam quis risus eget urna mollis ornare vel.</p>
                </div>
                <div>
                    <h5>Custom Text</h5>
                    <p>Maecenas faucibus mollis interdum. Vivamus sagittis lacus  faucibus dolor auctor. Etiam porta sem malesuada magna elit.</p>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Malesuada magna mollis euismod.</p>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>