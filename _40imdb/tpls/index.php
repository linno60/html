<!DOCTYPE html>
<html lang="en">
    <head>
        <title>IMDB</title>
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
            var LAYOUT_WIDTH = 798;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="wrap">
            <header class="lwrap">
                <section data-flex="-center end">
                    <em>pull</em>
                    <a href="#" class="btn btn-reset"></a>
                </section>
                <section class="nav" data-flex="axis" data-flex-480="col -center">
                    <nav class="links-nav" data-flex="-center w" data-childs="-center center" data-flex-480="-center center w">
                        <a href="#" class="active">movies<i class="icon-down"></i></a><div></div>
                        <a href="#">tv<i class="icon-down"></i></a><div></div>
                        <a href="#">news<i class="icon-down"></i></a><div></div>
                        <a href="#">videos<i class="icon-down"></i></a><div></div>
                        <a href="#">community<i class="icon-down"></i></a><div></div>
                        <a href="#">imdb pro<i class="icon-down"></i></a><div></div>
                    </nav>
                    <form action="#" method="post" class="form-search" data-flex="axis">
                        <input type="search" name="search" placeholder="Search line">
                        <input type="image" name="image" src="/images/icons/search.png">
                    </form>
                </section>
                <section data-flex="-start between" data-flex-480="-start between w">
                    <div data-flex="-start between">
                        <a href="/" title="Return to the homepage" id="logo">
                            <img src="/images/logo.png" width="156" height="76" alt="IMDB">
                        </a>                        
                    </div> 
                    <div class="header" data-flex-480="stripe">
                        <a href="#" class="title">x-men: first class</a>
                        <nav class="links-add" data-flex="-center w" data-childs="-center center" data-flex-480="-center end w">
                            <a href="#" class="active">desk<i class="icon-down"></i></a><div></div>
                            <a href="#">information<i class="icon-down"></i></a><div></div>
                            <a href="#">media<i class="icon-down"></i></a>
                        </nav>
                    </div>
                    <div class="rating">
                        <div>                          
                            <div data-flex='-end'>
                                <i class='icon-star'></i>
                                <b>8,1</b>
                                <small>/10</small>
                            </div> 
                            <span>adventure</span>
                            <time data-flex="axis">2011</time>
                        </div>
                    </div>           
                </section>
            </header>
            <section class="slider lwrap" data-flex="-center center">
                <div data-flex="end">
                    <a href="#" class="btn btn-slide prev">prev</a>
                </div>
                <div data-flex="col">
                    <div data-flex="-start" data-flex-640="vstripe" class="hidden">
                        <div data-flex="col">
                            <div data-flex>
                                <div>
                                    <div data-flex>
                                        <figure><img src="/images/1.png"></figure>
                                        <figure><img src="/images/2.png"></figure>
                                        <figure><img src="/images/3.png"></figure>
                                        <figure><img src="/images/4.png"></figure>
                                    </div>
                                    <div data-flex="-start">
                                        <div data-flex="col">
                                            <figure><img src="/images/5.png"></figure>
                                            <figure><img src="/images/6.png"></figure>
                                        </div>
                                        <figure data-flex="-start"><img src="/images/7.png"></figure>
                                    </div>
                                </div>
                                <div data-flex="col -start between">
                                    <div class="insert">
                                        <p>Taylor Layrnerer was considered to play Hank McCoy but dropped out due to scheduling conflict</p>
                                    </div>
                                    <div data-flex="col -start">
                                        <figure data-flex="-start"><img src="/images/8.png"></figure>
                                        <div data-flex="-start">
                                            <figure><img src="/images/9.png"></figure>
                                            <figure><img src="/images/9.png"></figure>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                            <div data-flex="-start">
                                <figure><img src="/images/26.png"></figure>
                                <figure><img src="/images/27.png"></figure>
                                <figure><img src="/images/28.png"></figure>
                                <figure><img src="/images/29.png"></figure>
                                <figure><img src="/images/28.png"></figure>
                            </div>
                        </div>
                        <div data-flex="-start">
                            <div data-flex="col">                            
                                <figure class="name">
                                    <img src="/images/10.png">
                                    <span class="lbl lbl-name">james mc awoy</span>
                                </figure>
                                <div data-flex>
                                    <figure><img src="/images/11.png"></figure>
                                    <figure><img src="/images/12.png"></figure>
                                </div>
                                <div class="insert alt">
                                    <p>In 1962, charles xavier starts up a school and later a team for humans and superhuman abilities. Among them is Erik Lensherr, his best friend... and future alchemy.</p>
                                </div> 
                                <figure><img src="/images/10.png"></figure>                              
                            </div>
                            <div data-flex="col">
                                <div data-flex="-start">
                                    <figure><img src="/images/13.png"></figure>
                                    <figure><img src="/images/14.png"></figure>
                                </div>
                                <figure><img src="/images/15.png"></figure>
                                <div data-flex="-start">
                                    <div data-flex="col">
                                        <figure><img src="/images/16.png"></figure> 
                                        <figure><img src="/images/16.png"></figure> 
                                        <figure><img src="/images/16.png"></figure> 
                                    </div>
                                    <div data-flex="col">
                                        <figure><img src="/images/17.png"></figure> 
                                        <figure><img src="/images/18.png"></figure> 
                                    </div>                                
                                </div>
                            </div>
                            <div data-flex="col">
                                <div data-flex="-start">
                                    <figure><img src="/images/19.png"></figure> 
                                    <figure><img src="/images/20.png"></figure> 
                                </div>                            
                                <figure class="name">
                                    <span class="lbl lbl-name">devis marker</span>
                                    <img src="/images/21.png">
                                </figure>
                                <div data-flex="row-start">
                                    <figure><img src="/images/22.png"></figure>
                                    <figure><img src="/images/23.png"></figure>
                                </div>
                                <div data-flex="-start">
                                    <figure><img src="/images/24.png"></figure> 
                                    <figure><img src="/images/25.png"></figure> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-flex="-start" data-flex-640="vstripe">
                        <div data-flex="col">
                            <div data-flex="-start">
                                <figure><img src="/images/30.png"></figure> 
                                <figure><img src="/images/31.png"></figure> 
                                <figure><img src="/images/32.png"></figure> 
                                <figure><img src="/images/33.png"></figure> 
                            </div>
                            <div data-flex="-start">
                                <div data-flex="col">
                                    <figure><img src="/images/34.png"></figure> 
                                    <div data-flex="-start">
                                        <figure><img src="/images/35.png"></figure> 
                                        <figure><img src="/images/36.png"></figure> 
                                    </div>
                                </div>
                                <div data-flex="col">
                                    <div data-flex="-start">
                                        <div class="insert cash" data-flex="col -center center">
                                            <h2>$ 55 million</h2>
                                            <span>opening weekend</span>
                                        </div>
                                        <figure><img src="/images/37.png"></figure>
                                    </div>
                                    <div data-flex="-start">
                                        <figure><img src="/images/38.png"></figure> 
                                        <figure><img src="/images/39.png"></figure> 
                                        <figure><img src="/images/40.png"></figure> 
                                    </div>
                                    <div data-flex="-start">
                                        <figure><img src="/images/41.png"></figure> 
                                        <figure><img src="/images/42.png"></figure> 
                                        <figure><img src="/images/43.png"></figure> 
                                        <figure><img src="/images/44.png"></figure> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-flex>
                            <div data-flex="col">
                                <figure><img src="/images/45.png"></figure>
                                <div data-flex="-start">                                
                                    <figure><img src="/images/46.png"></figure>
                                    <figure><img src="/images/47.png"></figure>
                                </div>
                            </div>
                            <div data-flex="vstripe">
                                <ul class="links-actions" data-childs="axis">
                                    <li><a href="#">buy on amazon</a><span>15 $</span></li>
                                    <li><a href="#">watch on netflix</a><span>7 $</span></li>
                                    <li><a href="#">subscribe on updates</a></li>
                                </ul>
                                <div data-flex="-start">
                                    <div data-flex="col">
                                        <figure><img src="/images/48.png"></figure>
                                        <figure><img src="/images/49.png"></figure>
                                    </div>
                                    <figure><img src="/images/50.png"></figure>
                                </div>
                            </div>
                            <div data-flex="col">
                                <figure><img src="/images/51.png"></figure>
                                <figure><img src="/images/52.png"></figure>
                                <figure><img src="/images/53.png"></figure>
                                <figure><img src="/images/54.png"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="#" class="btn btn-slide next">next</a>
                </div>
            </section>
            <div class="details lwrap">
                <section class='rate' data-flex='-center'>
                    <span>your rate:</span>
                    <figure><img src="/images/stars-active.png"></figure>
                    <figure><img src="/images/stars.png"></figure>
                </section>
                <section class="accordion">
                    <a href="#" data-flex="axis">
                        <div data-flex="-center w">
                            <span>cast</span>
                            <div data-flex='-center w' data-childs="-center">
                                <figure><img src="/images/s1.png"></figure>
                                <figure><img src="/images/s2.png"></figure>
                                <figure><img src="/images/s3.png"></figure>
                                <figure><img src="/images/s4.png"></figure>
                                <figure><img src="/images/s5.png"></figure>
                                <figure><img src="/images/s6.png"></figure>
                            </div>
                        </div>
                        <small data-flex="row-center">show more</small>
                    </a>
                    <div>Tab number 1</div>
                    <a href="#" data-flex="axis">
                        <div data-flex="-center w">
                            <span>media</span>
                            <div data-flex='-center w' data-childs="-center">
                                <figure><img src="/images/s7.png"></figure>
                                <figure><img src="/images/s8.png"></figure>
                                <figure><img src="/images/s9.png"></figure>
                                <figure><img src="/images/s10.png"></figure>
                                <figure><img src="/images/s11.png"></figure>
                                <figure><img src="/images/s12.png"></figure>
                                <figure><img src="/images/s13.png"></figure>
                                <figure><img src="/images/s14.png"></figure>
                                <figure><img src="/images/s15.png"></figure>
                                <figure><img src="/images/s16.png"></figure>
                                <figure><img src="/images/s17.png"></figure>
                                <figure><img src="/images/s18.png"></figure>
                                <figure><img src="/images/s19.png"></figure>
                                <figure><img src="/images/s20.png"></figure>
                                <figure><img src="/images/s21.png"></figure>
                            </div>
                        </div>
                        <small>show more</small>
                    </a>
                    <div>Tab number 2</div>
                    <a href="#" data-flex="axis">
                        <span>details</span>
                        <small data-flex="-center">show more</small>
                    </a>
                    <div>Tab number 3</div>
                    <a href="#" data-flex="axis">
                        <span>recommendations</span>
                        <small data-flex="-center">show more</small>
                    </a>
                    <div>Tab number 4</div>
                </section>
            </div>
        </div>
        <footer class="lwrap" data-flex="stripe" data-flex-480="vstripe r">
            <div class="copyright" data-flex="col -end">
                <a href="/" title="Return to the homepage" id="logoalt">
                    <img src="/images/logoalt.png" width="154" height="54" alt="IMDB">
                </a>
                <span>Copyright 1990 - 2011 Imdb.Com, Inc. <a href="#">Terms</a> and <a href="#">Privacy Policy</a> under which this service is provided to you</span>
                <figure><img src="/images/amazon.png"></figure>
            </div>
            <div>
                <h6>community</h6>
                <article>
                    <p><a href="#">EarthMoments was created to offer music producers and maybe that</a></p>
                    <time>June 7, 2011</time> <span>&bull;</span> <a href="#">12 comments</a>
                </article>
                <article>
                    <p><a href="#">I create new design!</a></p>
                    <time>June 9, 2011</time> <span>&bull;</span> <a href="#">12 comments</a>
                </article>
                <div class="links-social" data-flex="w">
                    <a href="#"><i class="icon-tw"></i></a>
                    <a href="#"><i class="icon-fb"></i></a>
                    <a href="#"><i class="icon-rss"></i></a>
                </div>
            </div>
            <div>
                <h6>from twitter</h6>
                <article>
                    <p><a href="#">EarthMoments was created to offer music producers and other</a></p>
                    <time>June 7, 2011</time>
                </article>
                <article>
                    <p><a href="#">Yoohoo! There is interesting article from John Back. Read it!</a></p>
                    <time>June 7, 2011</time>
                </article>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>