<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fashion</title>
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
            var LAYOUT_WIDTH = 1010;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="lwrap">
            <header>
                <div class="top-bar" data-flex='end w'>
                    <div class="links-language" data-flex="end w" data-childs="-center">
                        <a href="#" class="active"><i class="icon-uk"></i>English</a>
                        <a href="#"><i class="icon-sp"></i>Spanish</a>
                    </div>
                    <form action="#" method="post" class="form-search" data-flex="axis">
                        <input type="search" placeholder="What are you looking for?">
                        <input type="image" src="/images/icons/search.png">
                    </form>
                </div>
                <div class="header" data-flex="axis">
                    <a href="/" title="Return to the homepage" id='logo'>
                        <img src="/images/logo.png" width="217" height="25" alt="Fashion">
                    </a>
                    <nav class="links-nav" data-flex="center w">
                        <a href="#" class="active">dead spacer</a>
                        <a href="#">dead zone</a>
                        <a href="#">rack snatch</a>
                        <a href="#">tagger watch</a>
                    </nav>
                    <form action="#" method="post" data-flex='-center end w'>
                        <div class="links-subscribe" data-flex="end">
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-tw"></i></a>
                            <a href="#"><i class="icon-rss"></i></a>
                        </div>
                        <label>subscribe</label>
                    </form>
                </div>
            </header>
            <div class="slider">
                <figure>
                    <img src="/images/img1.png">
                    <figcaption>
                        <hgroup data-flex="col -start">
                            <h1>dolce&gabbana</h1>
                            <h3>new winter 2011 collection</h3>
                        </hgroup>
                    </figcaption>
                </figure>
                <div class="links-slider" data-flex="col" data-childs="col center" data-flex-800='stripe w' data-flex-480='vstripe'>
                    <a href="#" class="active">
                        <span>dolce &amp; gabbana</span>
                        <small>New winter collection of 2011</small>
                    </a>
                    <a href="#">
                        <span>the alexander mcqueen exhibit</span>
                        <small>Sweet exhibit in the cneter of New York</small>
                    </a>
                    <a href="#">
                        <span>discounted rachel comey's</span>
                        <small>Summer collection in the Wirehouse Stock</small>
                    </a>
                    <a href="#">
                        <span>freja beha</span>
                        <small>Cover this month's British Vogue</small>
                    </a>
                    <a href="#">
                        <span>new calvin klein watches</span>
                        <small>Only 250$!</small>
                    </a>
                    <a href="#">
                        <span>best bet</span>
                        <small>John Barrett's braid bar.</small>
                    </a>
                </div>
            </div>
            <div class="content-wrap" data-flex="-start between" data-flex-640="-start between w" data-flex-480='vstripe'>
                <aside class="sidebar latest" data-flex="col">
                    <h3 class='hdr'>the latest</h3>
                    <div data-childs="col">
                        <article>
                            <figure><img src="/images/img2.png"></figure>
                            <h6><a href='#'>Calvin Klein Watches</a></h6>
                            <p>Earlier this summer, the announcement that the John Barrett Salon inside Bergdorf Goodman</p>
                            <em>by <a href='#'>Sergio La Puerta</a></em>
                            <em><time>on Jun 4, 2011 </time>&ensp;<a href='#'>24 comments</a></em>
                        </article>
                        <article>
                            <figure><img src="/images/img3.png"></figure>
                            <h6><a href='#'>Calvin Klein Watches</a></h6>
                            <p>Earlier this summer, the announcement that the John Barrett Salon inside Bergdorf Goodman</p>
                            <em>by <a href='#'>Sergio La Puerta</a></em>
                            <em><time>on Jun 4, 2011 </time>&ensp;<a href='#'>24 comments</a></em>
                        </article>
                        <article>
                            <figure><img src="/images/img4.png"></figure>
                            <h6><a href='#'>Calvin Klein Watches</a></h6>
                            <p>Earlier this summer, the announcement that the John Barrett Salon inside Bergdorf Goodman</p>
                            <em>by <a href='#'>Sergio La Puerta</a></em>
                            <em><time>on Jun 4, 2011 </time>&ensp;<a href='#'>24 comments</a></em>
                        </article>
                    </div>
                    <a href='#' class='btn btn-default'>more offers<i class='icon-arrow'></i></a>
                </aside>
                <div class="content">
                    <h3 class='hdr'>best offers</h3>
                    <figure>
                        <div class="lbl lbl-discount">25<small data-flex="-center">%</small></div>
                        <img src="/images/img5.png">
                        <figcaption><a href='#'>discounted rachel comey's</a></figcaption>
                    </figure>
                    <div data-flex='stripe'>
                        <figure>
                            <img src="/images/img6.png">
                            <figcaption><a href='#'>freja beha</a></figcaption>
                        </figure>
                        <figure>
                            <img src="/images/img7.png">
                            <figcaption><a href='#'>lacoste discount: 50%</a></figcaption>
                        </figure>
                    </div>
                    <figure>
                        <div class="lbl lbl-discount">60<small data-flex="-center">%</small></div>
                        <img src="/images/img8.png">
                        <figcaption><a href='#'>discounted rachel comey's</a></figcaption>
                    </figure>
                    <div data-flex='stripe'>
                        <figure>
                            <img src="/images/img9.png">
                            <figcaption><a href='#'>freja beha</a></figcaption>
                        </figure>
                        <figure>
                            <img src="/images/img10.png">
                            <figcaption><a href='#'>lacoste discount: 50%</a></figcaption>
                        </figure>
                    </div>
                    <h2 class='title'>interesting article</h2>
                    <p>Designer Edmar Cisneros has an interesting and unique philosophy regarding design that. &nbsp;It's always entertaining to explore the works of a great caricature artist. &nbsp;This showcase from Web Designer Depot features some amazing and hilarious caricatures from Athony Geoffroy. &nbsp;This showcase from Web Designer Depot.</p>
                    <a href='#' class='link'>Read more...</a>
                </div>
                <aside class="sidebar">
                    <h3 class='hdr'>subscribe</h3>                   
                    <form action="#" method="post" data-flex="axis" class="form-subscribe">
                        <input type="email" placeholder="mr.madbyte@gmail.com">
                        <button></button>
                    </form>
                    <div class="links-social" data-flex="w">
                        <a href="#"><i class="icon-fb-lg"></i></a>
                        <a href="#"><i class="icon-tw-lg"></i></a>
                        <a href="#"><i class="icon-rss-lg"></i></a>                                
                    </div>
                    <form action='#' method='post' class='form-vote' data-flex='col'>
                        <h3 class='hdr'>vote</h3>
                        <legend>What do you think about new Calvin Klein Summer 2011 Collection?</legend>
                        <ul class="radio" data-childs>
                            <li>
                                <input name="radio" type="radio" id="r1">
                                <label for="r1">It's very interesting</label>
                            </li>
                            <li>
                                <input name="radio" type="radio" id="r2" checked="">
                                <label for="r2">Not bad</label>
                            </li><li>
                                <input name="radio" type="radio" id="r3">
                                <label for="r3">Bad</label>
                            </li>
                            <li>
                                <input name="radio" type="radio" id="r4">
                                <label for="r4">Worst collection in the season</label>
                            </li>                               
                        </ul>
                        <button><span class='btn btn-default'>vote for this</span></button>
                    </form>
                    <h3 class='hdr'>most popular now</h3>
                    <ul class="links-popular" data-childs="">
                        <li><span>34</span><a href="#">Interview with Freja Beha</a></li>
                        <li><span>67</span><a href="#">Top summer discounts in Paris</a></li>
                        <li><span>47</span><a href="#">Alexander McQueen Exhibit</a></li>
                        <li><span>3</span><a href="#">Best runaway shows in Moscow</a></li>
                        <li><span>43</span><a href="#">Interview with Freja Beha</a></li>
                        <li><span>27</span><a href="#">Top summer discounts in Paris</a></li>
                        <li><span>79</span><a href="#">Alexander McQueen Exhibit</a></li>
                        <li><span>3</span><a href="#">Best runaway shows in Moscow</a></li>
                    </ul>
                    <h3 class='hdr'>from twitter</h3>
                    <p class='tweet'><a href='#'>@hummer: </a>Earlier this summer the announcement that the John Barrett Salon inside Bergdorf Goodman</p>
                    <p class='tweet'><a href='#'>@hummer: </a>Earlier this summer the announcement that the John Barrett Salon inside Bergdorf Goodman</p>
                </aside>
            </div>
            <footer data-flex>
                <div data-flex='col -end'>
                    <a href="/" title="Return to the homepage" id='logo-alt'>
                        <img src="/images/logo-alt.png" width="157" height="19" alt="Fashion">
                    </a>
                    <em>The best blog about fashion. We love fashion and we can't live without it. See always the latest news and reviews</em>
                </div>
                <div>
                    <nav class="links-footer" data-flex="w">
                        <a href="#" class="active">dead spacer</a>
                        <a href="#">dead zone</a>
                        <a href="#">rack snatch</a>
                        <a href="#">tagger watch</a>
                        <a href="#">advertise</a>
                        <a href="#">privacy policy</a>
                        <a href="#">terms of use</a>
                    </nav>
                    <div class='footer-items' data-flex='stripe' data-childs='col -start' data-flex-480='vstripe'>
                        <div>
                            <h6 class="title-alt">about this site</h6>
                            <div class='footer-item' data-flex='-center'>
                                <p>The best blog about wine. We love wine and we can't live without it. See always the latest news and reviews</p>
                            </div>
                        </div>
                        <div>
                            <h6 class="title-alt">subscribe</h6>
                            <div class='footer-item' data-flex='-center'>
                                <span data-flex="w">Follow us: </span>
                                <div class="links-follow" data-flex="w" data-childs="-center">
                                    <a href="#"><i class="icon-tw"></i>Twitter</a>
                                    <a href="#"><i class="icon-fb"></i>Facebook</a>
                                    <a href="#"><i class="icon-rss"></i>RSS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>