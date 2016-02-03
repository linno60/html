<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blog</title>
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
            var LAYOUT_WIDTH = 1154;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="lwrap wrap">
            <header class="header">
                <div data-flex="-end between" data-flex-480="vaxis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="188" height="64" alt="Blog">
                    </a>
                    <div data-flex="-end end w" data-flex-480="center w">
                        <form action="#" method="post" data-flex="center">
                            <input type="search" name="search">
                            <button><span class="btn btn-search">search</span></button>
                        </form>
                        <div class="links-social" data-flex="end" data-childs="-center center" data-flex-640="end w" data-flex-480="center">
                            <a href="#" class="rss"><i class="icon-rss"></i></a>
                            <a href="#" class="fb"><i class="icon-fb"></i></a>
                            <a href="#" class="tw"><i class="icon-tw"></i></a>
                        </div>
                    </div>
                </div> 
                <nav class="links-nav" data-flex="w" data-childs="-center center" data-flex-800="center w">
                    <a href="#">home</a>
                    <a href="#">cinema</a>
                    <a href="#">magazine</a>
                    <a href="#">cssauthor.com</a>
                    <a href="#">topmenu</a>
                    <a href="#">archives</a>
                    <a href="#">contact us</a>
                </nav>
            </header>
            <h1>top stories</h1>
            <section class="slider" data-flex="stripe">
                <a href="#"></a>
                <div data-flex="stripe" data-childs="col" data-flex-480="vstripe">
                    <figure class="hidden-sm">
                        <img src="/images/img1.png">
                        <figcaption data-flex="col">
                            <a href="#" data-flex="-center">cinema</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </figcaption>
                    </figure>
                    <figure class="hidden">
                        <img src="/images/img2.png">
                        <figcaption data-flex="col">
                            <a href="#" data-flex="-center">travel</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="/images/img3.png">
                        <figcaption data-flex="col">
                            <a href="#" data-flex="-center">television</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </figcaption>
                    </figure>
                </div>
                <a href="#"></a>
            </section>
            <section data-flex="stripe" data-flex-640="vstripe">
                <div class="content">
                    <article>
                        <h2>
                            <time class="lbl lbl-default" data-flex="col -end" data-childs="-center center">
                                <strong>28</strong>
                                <small>feb</small>
                            </time>
                            Lorem Ipsum is simply dummy text of the printing
                        </h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing </p>
                        <div class="img-group">
                            <figure><img src="/images/img4.png"></figure>
                            <div data-flex="stripe">
                                <figure><img src="/images/img5.png"></figure>
                                <figure><img src="/images/img6.png"></figure>
                                <figure><img src="/images/img7.png"></figure>
                                <figure><img src="/images/img8.png"></figure>
                            </div>
                        </div>
                        <div data-flex="stripe w">
                            <div data-flex="w">
                                <span>Category : <a href="#">Movie</a></span>
                                <a href="#" data-flex><i class="icon-comments"></i>5 Com&shy;ments</a>
                            </div>
                            <a href="#">Read more</a>
                        </div>   
                    </article>
                    <article>                        
                        <h2>
                            <time class="lbl lbl-default" data-flex="col -end" data-childs="-center center">
                                <strong>28</strong>
                                <small>feb</small>
                            </time>
                            Lorem Ipsum is simply dummy text of the printing
                        </h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <div class="img-group">
                            <figure><img src="/images/img4.png"></figure>
                            <div data-flex="stripe">
                                <figure><img src="/images/img5.png"></figure>
                                <figure><img src="/images/img6.png"></figure>
                                <figure><img src="/images/img7.png"></figure>
                                <figure><img src="/images/img8.png"></figure>
                            </div>
                        </div>
                        <div data-flex="stripe w">
                            <div data-flex="w">
                                <span>Category : <a href="#">Movie</a></span>
                                <a href="#" data-flex><i class="icon-comments"></i>5 Com&shy;ments</a>
                            </div>
                            <a href="#">Read more</a>
                        </div>  
                    </article>
                    <a href="#" class="older">&laquo;&nbsp;older posts</a>
                </div>
                <aside class="sidebar" data-flex-640="stripe w" data-flex-480="vstripe">
                    <div>
                        <div data-flex><h2 class="hdr-alt">top stories</h2></div>                 
                        <div data-tabs>
                            <div class="tablist" data-childs="-center center">
                                <a href="#tab1">fashion</a>
                                <a href="#tab2" class="active">cinema</a>
                                <a href="#tab3">television</a>
                            </div>
                            <div class="tabset">
                                <a href="#tab1">fashion</a>
                                <div id="tab1" class="tabpanel">Tab number 1</div>
                                <a href="#tab2" class="active">cinema</a>
                                <div id="tab2" class="tabpanel active">
                                    <article class="clearfix">
                                        <figure><img src="/images/img9.png"></figure>
                                        <h4><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>                                   
                                    </article>
                                    <article class="clearfix">
                                        <figure><img src="/images/img9.png"></figure>                                    
                                        <h4><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                                    </article>
                                    <article class="clearfix">
                                        <figure><img src="/images/img9.png"></figure>                                    
                                        <h4><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>                                    
                                    </article>
                                </div>
                                <a href="#tab3">television</a>
                                <div id="tab3" class="tabpanel">Tab number 3</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="hdr">you might also like</h2>
                        <div class="medications">
                            <article class="clearfix">
                                <figure><img src="/images/img10.png"></figure>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="#">Medication&nbsp&raquo;</a>
                            </article>
                            <article class="clearfix">
                                <figure><img src="/images/img10.png"></figure>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="#">Medication&nbsp&raquo;</a>
                            </article>
                            <article class="clearfix">
                                <figure><img src="/images/img10.png"></figure>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="#">Medication&nbsp&raquo;</a>
                            </article>
                            <article class="clearfix">
                                <figure><img src="/images/img10.png"></figure>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="#">Medication&nbsp&raquo;</a>
                            </article>
                        </div>
                    </div>
                    <div>
                        <h2 class="hdr">archives</h2>
                        <ul class="links-aside" data-childs="-start">
                            <li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
                            <li><a href="#">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</a></li>
                            <li><a href="#">When an unknown printer took a galley of type and scrambled it to make a type specimen book. </a></li>
                            <li><a href="#">It has survived not only five centuries, but also the leap into electronic typesetting</a></li>
                            <li><a href="#">Remaining essentially unchanged. It was popular&shy;ised in the 1960s with the release of</a></li>
                            <li><a href="#">Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </a></li>
                            <li><a href="#">Software like Aldus PageMaker including versions of Lorem Ipsum.</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="hdr">tag cloud</h2>
                        <div class="tags">
                            <a href="#" data-weight="10">Angelina Jolie</a>
                            <a href="#" data-weight="17" class="active">Cssauthor</a>
                            <a href="#" data-weight="6">Aris&shy;tokrasi</a>
                            <a href="#" data-weight="6">Beyonc&egrave; Blake</a>
                            <a href="#" data-weight="4">Lively</a>
                            <a href="#" data-weight="4">Brad Pitt</a>
                            <a href="#" data-weight="4">Cameron <span data-weight="13">Diaz&nbsp;</span></a><a href="#" data-weight="13">Daniel <span data-weight="15">Rad&shy;cliffe</span></a>
                            <a href="#" data-weight="15">David <span data-weight="5">Beckham</span></a>
                            <a href="#" data-weight="5">Demi <span data-weight="4">Moore</span></a>
                            <a href="#" data-weight="4">Emma <span data-weight="8">Watson</span></a>
                            <a href="#" data-weight="8">Eva <span data-weight="1">Longoria</span></a>
                            <a href="#" data-weight="1">Gisele <span data-weight="10">Bun&shy;dchen</span></a>
                            <a href="#" data-weight="10">Gwyneth <span data-weight="5">Paltrow</span></a>
                            <a href="#" data-weight="5">Halle Berry</a>
                            <a href="#" data-weight="16">Harry Potter</a>
                            <a href="#" data-weight="6">Heidi Klum</a>
                            <a href="#" data-weight="1">James <span data-weight="4">&emsp;Franco</span></a>
                            <a href="#" data-weight="9">Jennifer <span data-weight="15">Lopez</span></a>
                            <a href="#" data-weight="15">Jessica <span data-weight="4">Alba</span></a>
                            <a href="#" data-weight="4">Johnny <span data-weight="1">Depp</span></a>
                            <a href="#" data-weight="1">Jon <span data-weight="12">Hamm</span></a>
                            <a href="#" data-weight="12">Jude <span data-weight="11">Law</span></a>
                            <a href="#" data-weight="11">Kate Moss</a>
                            <a href="#" data-weight="15">Kate<span data-weight="1"> Winslet</span></a>
                            <a href="#" data-weight="1">Katie Holmes</a>
                            <a href="#" data-weight="1">Katy <span data-weight="7">Perry</span></a>
                            <a href="#" data-weight="7">Kim <span data-weight="1">Kardashian</span></a>
                            <a href="#" data-weight="1">Kristen <span data-weight="15">Stewart</span></a>
                            <a href="#" data-weight="1">Lady <span data-weight="4">Gaga</span></a>
                            <a href="#" data-weight="4">Madonna</a>
                            <a href="#" data-weight="1">Megan Fox</a>
                            <a href="#" data-weight="10">Michelle Williams</a>
                            <a href="#" data-weight="1">&nbsp;Natalie <span data-weight="7">Portman</span></a>
                            <a href="#" data-weight="9">Nicole <span data-weight="8">Kidman</span></a>
                            <a href="#" data-weight="4">Penelope Cruz</a>
                            <a href="#" data-weight="1">Reese Witherspoon</a>
                            <a href="#" data-weight="4">Reklam</a>
                            <a href="#" data-weight="17">&nbsp;Rihanna</a>
                            <a href="#" data-weight="1">Robert <span data-weight="5">Pattin</span><span data-weight="11"> Son</span></a>
                            <a href="#" data-weight="11"> Sarah <span data-weight="1">Jessica</span> <span data-weight="4">Parker</span></a>
                            <a href="#" data-weight="4">Scar</a>
                        </div>
                    </div>
                </aside>
            </section>            
        </div>
        <footer class="lwrap" data-flex="-center center">
            <span>Designed by <a href="#"> Cssauthor.com</a></span>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>