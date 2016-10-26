<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bakery</title>
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
        <header>
            <div class="nav">
                <div class="lwrap" data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="140" height="44" alt="Gustoso">
                    </a> 
                    <nav class="links-nav" data-flex="around -center w">
                        <a href="#">welcome</a>~
                        <a href="#">menu</a>~
                        <a href="#">reservations</a>~
                        <a href="#">news</a>~
                        <a href="#">contact</a>
                    </nav>
                    <div class="links-social" data-flex="end -center w">
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-inst"></i></a>
                    </div>
                </div>
            </div>
            <div class="header lwrap" data-childs='center -center'>
                <h1>Pastry with love</h1>
                <hr>
                <p>We’re bringing you fresh ingredients every day in ways you can’t resist.</p>
                <a href="#" class="btn btn-header">our menu</a>
                <span class="lbl lbl-sm"><i class="icon-broad"></i></span>
            </div>
        </header>
        <section class="cakes">
            <div class="lwrap" data-flex="-start between w" data-flex-640='vstripe'>
                <article>
                    <hgroup>
                        <h2>Art of cakes</h2>
                        <h4>we create delicious memories</h4>
                    </hgroup>
                    <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed.Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed.</p>
                    <h3>Chef Cook</h3>
                    <div class='avatar' data-flex='axis' data-childs='center -center'>
                        <span>Benito</span>
                        <figure><img src="/images/gaspare.png" width="100" height="100" alt=""></figure>
                        <span>Gaspare</span>
                    </div>
                    <blockquote>
                        <span>“</span>
                        <q>Unique creations for unique occasions.</q>
                        <span>”</span>
                    </blockquote>
                </article>
                <div class='gallery' data-flex="stripe w">
                    <span class='lbl lbl-lg'>tastes so good!</span>
                    <figure><img src="/images/art1.png" width="295" height="250" alt=""></figure>
                    <figure><img src="/images/art2.png" width="295" height="250" alt=""></figure>
                    <figure><img src="/images/art3.png" width="295" height="250" alt=""></figure>
                    <figure><img src="/images/art4.png" width="295" height="250" alt=""></figure>
                </div>
            </div>
        </section>
        <section class="pancakes">
            <div class="lwrap">
                <div class="pancakes-preview" data-flex="stripe">
                    <figure><img src="/images/pancakes.png" width="419" height="512" alt=""><a href="#" class="btn btn-menu"></a></figure>                    
                    <div data-flex="col around">
                        <article>
                            <hgroup>
                                <h2>Tasty pancakes</h2>
                                <h4>season favourite</h4>
                            </hgroup>
                            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus.</p>
                        </article>
                        <div class="pancakes-slider" data-flex="axis">
                            <figure><img src="/images/slider1.png" width="90" height="90" alt=""></figure>
                        </div>
                    </div>
                    <span class="lbl lbl-time alt"><strong>ready in</strong><time><span>40</span><small>mins</small></time></span>
                </div>                
            </div>
        </section>
        <section class="breakfast">
            <div class="lwrap" data-flex='between -start'>
                <div class='menu'>
                    <hgroup>
                        <h2>Breakfast</h2>
                        <h4>7am breakfast? we're open!</h4>
                    </hgroup>
                    <div>
                        <article>
                            <h5>Full breakfast</h5>
                            <p>Duis ut tortor, et risus, vulputate pretium</p>
                            <big>$12.49</big>
                            <hr>
                        </article>
                        <article>
                            <h5>Toast & Jam</h5>
                            <p>Suspendisse, tempus, nterdum</p>
                            <big>$4.90</big>
                            <hr>
                        </article>
                        <article>
                            <h5>Muffins</h5>
                            <p>Fusce eget dui sodales est</p>
                            <big>$3.95</big>
                        </article>
                    </div>
                </div>
                <div class='description' data-flex>
                    <article data-flex='col around -center'>
                        <div class='hdr' data-flex='around'>
                            <span>est.</span>
                            <span>1893</span>
                        </div>
                        <h2>Your morning Escape with Flair</h2>
                        <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros<br> faucibus tincidunt. Duis leo.</p>
                        <a href="#" class="btn btn-default">read</a>
                    </article>
                </div>                
            </div>
        </section>
        <section class="sandwich">
            <div class="lwrap" data-flex='axis w'>
                <hgroup>
                    <h2>The Jibarito sandwich</h2>
                    <h4>the best sandwich you've ever tasted!</h4>
                </hgroup>
                <div class='products' data-flex='vaxis'>
                    <article>
                        <figure><img src="/images/sandwich1.png" width="100" height="100" alt=""></figure>
                        <h4>Class aptent</h4>
                        <p>Quot alienum persecuti ut eam, nam ad atqui primis nusquam.</p>
                    </article>
                    <article>
                        <figure><img src="/images/sandwich2.png" width="100" height="100" alt=""></figure>
                        <h4>Nulla eget</h4>
                        <p>Nullam dictum felis eu pede mollis pretium Integer tincidunt.</p>
                    </article>
                    <article>
                        <figure><img src="/images/sandwich3.png" width="100" height="100" alt=""></figure>
                        <h4>Sed nibh purus</h4>
                        <p>Aenean eleifend tellus leo ligula, porttitor eu, consequat vitae.</p>
                    </article>
                </div>
                <div class='recipe'>
                    <figure>
                        <a href="#" class="btn btn-alt">full recipe</a>
                        <img src="/images/sandwichlg.png" width="820" height="536" alt="">
                        <div class="cooking-time" data-flex="vaxis">
                            <span class="lbl lbl-time"><strong>prep</strong><time><span>15</span><small>mins</small></time></span>
                            <span class="lbl lbl-time"><strong>cook</strong><time><span>35</span><small>mins</small></time></span>
                            <span class="lbl lbl-time alt"><strong>ready in</strong><time><span>50</span><small>mins</small></time></span>
                        </div>
                    </figure>
                </div>
            </div>
        </section>
        <footer class="lwrap" data-flex='-center'>
            <div class="links-menu" data-flex="axis" data-childs="around -center w">
                <div>
                    <a href="#">our menu</a>~
                    <a href="#">gallery</a>~
                    <a href="#">culture</a>
                </div>
                <a href="/" title="Return to the homepage" id="logoalt">
                    <img src="/images/logoalt.png" width="140" height="44" alt="Gustoso">
                </a>
                <div>
                    <a href="#">events</a>~
                    <a href="#">catering</a>~
                    <a href="#">visit us</a>
                </div> 
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>