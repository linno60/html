<!DOCTYPE html>
<html lang="en">
    <head>
        <title>IStudio</title>
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
    <body data-flex="vstripe">
        <div>
            <a href="#" name="top"></a>
            <header>
                <div class="lwrap" data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="271" height="98" alt="IStudio">
                    </a>
                    <div>
                        <div data-flex="-center">                    
                            <nav class="links-nav" data-flex="-center end w">
                                <a href="#">home</a><span></span>
                                <a href="#">sobre</a><span></span>
                                <a href="#">serviços</a><span></span>
                                <a href="#">portfolio</a><span></span>
                                <a href="#">contato</a><span></span>
                            </nav>
                            <form action="#" method="post" class="form-search">
                                <input type="button" name="button">
                                <input type="search" name="search" placeholder="buscar...">
                            </form>
                        </div>
                        <div class="tweet" data-flex="-end end">
                            <i class="icon-twbird"></i>
                            <p><a href="#">@&nbsp;FernandynhoMC</a>&ensp;This was the most rewarding educational experience that I have ever had"</p>
                        </div>
                    </div>  
                </div>
            </header>
            <div class="slider-wrap">
                <div class="lwrap">
                    <div class="slider" data-flex="col -center">
                        <figure><img src="/images/slider.png" width="908" height="224" alt=""></figure>
                        <div class="links-controls" data-flex="center">
                            <a href="#" class="active"></a>
                            <a href="#"></a>
                            <a href="#"></a>
                            <a href="#"></a>
                            <a href="#"></a>
                        </div>
                    </div>   
                </div>
            </div>
            <div class="lwrap">
                <div class="slider-sm" data-flex="axis">
                    <a href="#" class="btn btn-thumb prev"></a>
                    <div data-flex="stripe w">
                        <figure><img src="/images/img1.png" width="179" height="99" alt=""></figure>
                        <figure><img src="/images/img2.png" width="179" height="99" alt=""></figure>
                        <figure><img src="/images/img3.png" width="179" height="99" alt=""></figure>
                        <figure><img src="/images/img4.png" width="179" height="99" alt=""></figure>
                    </div>
                    <a href="#" class="btn btn-thumb next"></a>
                </div>
                <div data-flex="stripe">
                    <div class="content" data-flex="stripe">
                        <article>
                            <figure><img src="/images/img5.png" width="275" height="156" alt=""></figure>
                            <h3>Lorem ipsum  dolor</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere tellus quis sem ultricies posuere quis in nisl. Fusce in diam quis eros interdum placerat varius in mauris. Aenean pharetra placerat gravida. </p>
                        </article>
                        <article>
                            <figure><img src="/images/img6.png" width="274" height="156" alt=""></figure>
                            <h3>Lorem ipsum dolor</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere tellus quis sem ultricies posuere quis in nisl. Fusce in diam quis eros interdum placerat varius in mauris. Aenean pharetra placerat gravida. </p>
                        </article>
                    </div>
                    <aside class="sidebar">
                        <div>
                            <h3>Lorem ipsum  dolor?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere tellus quis sem ultricies.</p>
                        </div>
                        <div>
                            <h2>Categorias</h2>
                            <div class="links-categories" data-flex="col" data-childs="-center">
                                <a href="#">Impressões</a>
                                <a href="#">Impressões</a>
                                <a href="#">Impressões</a>
                                <a href="#">Impressões</a>
                                <a href="#">Impressões</a>
                            </div>
                        </div>
                        <a href="#" class="btn btn-anchor"></a>
                    </aside>
                </div>
            </div>
        </div>        
        <footer>
            <hr>
            <div class="lwrap">
                <div class="footer" data-flex="-start between">
                    <div>
                        <h5>Useful Links</h5>
                        <div class="links-footer" data-flex="col -start">
                            <a href="#">This is a link</a>
                            <a href="#">Another Link</a>
                            <a href="#">Yes, A Link Too</a>
                            <a href="#">This is a link</a>
                            <a href="#">A Small Link</a>
                        </div>
                    </div>
                    <div>
                        <h5>Useful Links</h5>
                        <div class="links-footer" data-flex="col -start">
                            <a href="#">This is a link</a>
                            <a href="#">Another Link</a>
                            <a href="#">Yes, A Link Too</a>
                            <a href="#">This is a link</a>
                            <a href="#">A Small Link</a>
                        </div>
                    </div>
                    <div>
                        <h5>Useful Links</h5>
                        <div class="links-footer" data-flex="col -start">
                            <a href="#">This is a link</a>
                            <a href="#">Another Link</a>
                            <a href="#">Yes, A Link Too</a>
                            <a href="#">This is a link</a>
                            <a href="#">A Small Link</a>
                        </div>
                    </div>
                    <div>
                        <h5>Useful Links</h5>
                        <div class="links-footer" data-flex="col -start">
                            <a href="#">This is a link</a>
                            <a href="#">Another Link</a>
                            <a href="#">Yes, A Link Too</a>
                            <a href="#">This is a link</a>
                            <a href="#">A Small Link</a>
                        </div>
                    </div>                    
                    <a href="/" title="Return to the homepage" id="logo-alt">
                        <img src="/images/logo.png" width="271" height="98" alt="IStudio">
                    </a>
                </div>
                <div class="copyright" data-flex="axis">
                    <span>&copy; Copyright 2010 Locus Onepage. All Rights Reserved.</span>
                    <div class="links-social" data-flex="end w">
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-fl"></i></a>
                        <a href="#"><i class="icon-tb"></i></a>
                        <a href="#"><i class="icon-vimeo"></i></a>
                        <a href="#"><i class="icon-dl"></i></a>
                        <a href="#"><i class="icon-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>