<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Businessstack</title>
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
            <div class="lwrap" data-flex="axis" data-flex-480="vaxis">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="236" height="45" alt="Businessstack">
                </a>
                <nav class="links-nav" data-flex="end w" data-flex-480="center w"> 
                    <a href="#">Home</a>
                    <a href="#" class="active">Pages</a>
                    <a href="#">Team</a>
                    <a href="#">Blog</a>
                    <a href="#">Portfolio</a>
                    <a href="#">Contact</a>
                </nav>
            </div>
        </header>
        <div class="breadcrumbs">
            <div class="lwrap" data-flex="w">
                <a href="#">Home</a><span>/</span>        
                <a href="#">Page</a><span>/</span>
                <a href="#">2 Col. Page</a>
            </div>
        </div>
        <div class="hdr">
            <h1 class="lwrap">2 Columns Layout</h1>
        </div>
        <div class="content-wrap lwrap" data-flex="stripe" data-flex-640="vstripe">
            <div class="content">
                <section>
                    <p>Look again at that dot. That's here. That's home. That's us. On it everyone you love, everyone you know, everyone you ever heard of, every human being who ever was, lived out their lives. </p>
                    <p>The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every "superstar," every "supreme leader," every saint and sinner in the history of our species lived </p>                    
                </section>
                <section>
                    <h3>Blockquote</h3>
                    <blockquote data-flex>
                        <q>Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</q>
                    </blockquote>
                    <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul. The Earth is the only world known so far to harbor life. There is nowhere else, at least in the near future, to which our species </p>
                </section>
                <section>
                    <h3>Accordion</h3>
                    <div class="accordion" data-childs="axis">   
                        <a href="#" class="active">Accordion 1</a>
                        <div class="active">
                            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
                        </div>
                        <a href="#">Accordion 2</a>
                        <div>Tab number 2</div>
                        <a href="#">Accordion 3</a>
                        <div>Tab number 3</div>
                        <a href="#">Accordion 4</a>
                        <div>Tab number 4</div>
                    </div>
                </section>
                <section>
                    <h3>Multiple Tab</h3>
                    <div class="tabs" data-tabs="">
                        <div class="tablist">
                            <a href="#tab1">Tab 1</a>
                            <a href="#tab2" class="active">Tab 2</a>
                            <a href="#tab3">Tab 3</a>
                            <a href="#tab4">Tab 4</a>
                        </div>
                        <div class="tabset">
                            <div id="tab1" class="tabpanel">Tab number 1</div>
                            <div id="tab2" class="tabpanel active">
                                <p>The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every "superstar," every "supreme leader," </p>
                            </div>
                            <div id="tab3" class="tabpanel">Tab number 3</div>
                            <div id="tab4" class="tabpanel">Tab number 4</div>
                        </div>
                    </div>
                </section>
            </div>
            <aside class="sidebar" data-flex-640="stripe w">
                <section>
                    <h3>Blog Categories</h3>
                    <ul class="links-categories" data-childs="axis">
                        <li><a href="#">Design</a><span>1</span></li>
                        <li><a href="#">Programming</a><span>3</span></li>
                        <li><a href="#">Art</a><span>5</span></li>
                        <li><a href="#">Opinion</a><span>3</span></li>
                        <li><a href="#">Lifestyle</a><span>10</span></li>
                    </ul>
                </section>
                <section>
                    <h3>Side Menu</h3>
                    <nav class="links-side" data-flex="col"> 
                        <a href="#">Home</a>
                        <a href="#" class="active">Pages</a>
                        <a href="#">Team</a>
                        <a href="#">Blog</a>
                        <a href="#">Portfolio</a>
                        <a href="#">Contact</a>
                    </nav>
                </section>
                <section>
                    <h3>Recent Tweet</h3>
                    <div data-childs="-start">
                        <article>
                            <div class="lbl lbl-twit"><i class="icon-tw"></i></div>
                            <div>
                                <p><a href="#">ur posturings, our imagined self-importan&shy;ce, the delusion ...</a></p>
                                <time>Fri Sep 21 08:25:04</time>
                            </div>
                        </article>
                        <article>
                            <div class="lbl lbl-twit"><i class="icon-tw"></i></div>
                            <div>
                                <p><a href="#">ur posturings, our imagined self-importan&shy;ce, the delusion ...</a></p>
                                <time>Fri Sep 21 08:25:04</time>
                            </div>
                        </article>
                        <article>
                            <div class="lbl lbl-twit"><i class="icon-tw"></i></div>
                            <div>
                                <p><a href="#">ur posturings, our imagined self-importan&shy;ce, the delusion ...</a></p>
                                <time>Fri Sep 21 08:25:04</time>
                            </div>
                        </article>
                    </div>
                </section>
            </aside>
        </div>
        <footer>
            <div class="lwrap">
                <div data-flex="stripe w">
                    <section class="text">
                        <h3>Text Widget</h3>
                        <p>It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom ...</p>
                    </section>
                    <section class="links">
                        <h3>Links Widget</h3>
                        <div class="links-widget" data-flex="col -start" data-childs="-start">
                            <a href="#">these words will</a>
                            <a href="#">you of the price paid</a>
                            <a href="#">will remind</a>
                            <a href="#">by Grissom...</a>
                            <a href="#">Career, Press Release</a>
                            <a href="#">will remind</a>
                        </div>
                    </section>
                    <section class="twitter">
                        <h3>Twitter Widget</h3> 
                        <div data-flex="-start">
                            <div class="lbl lbl-twidget"><i class="icon-tw"></i></div>
                            <article>
                                <time>2 Days Ago</time>
                                <p><a href="#">I believe that this nation should commit itself to achieving the goal ...</a> </p>
                                <a href="#">#jegtheme</a>
                            </article>
                        </div>                        
                    </section>
                    <section class="form">
                        <h3>Form Widget</h3> 
                        <form action="#" method="post">
                            <input type="text" name="input" placeholder="Name">
                            <input type="text" name="input" placeholder="Email">
                            <div class="textarea" data-flex="col -end">
                                <textarea placeholder="Message"></textarea>
                                <button><span class="btn btn-default">Send</span></button>
                            </div>
                        </form>
                    </section>
                </div>
                <div class="links-social" data-flex="w">
                    <a href="#"><i class="icon-f"></i></a>
                    <a href="#"><i class="icon-t"></i></a>
                    <a href="#"><i class="icon-g"></i></a>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>