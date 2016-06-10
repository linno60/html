<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Metroblog</title>
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
            var LAYOUT_WIDTH = 1134;
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
                    <img src="/images/logo.png" width="232" height="48" alt="Metroblog">
                </a>
                <nav class="links-nav" data-flex="end w" data-childs="-center center">
                    <a href="#" class="active">Home</a>
                    <a href="#">About</a>
                    <a href="#">Articles</a>
                    <a href="#">Pages</a>
                </nav>
            </div>   
        </header>
        <div class="lwrap">
            <div class="banner" data-flex="axis">
                <div>
                    <h1 data-flex="col"><big>Apple iPad</big> <small>Reviews</small></h1>
                    <a href="#" class="btn btn-default"><i class="icon-camera"></i>Video review</a>
                </div>
                <figure><img src="/images/banner.png" width="817" height="384" alt=""></figure>
            </div>
            <div data-flex="stripe" data-flex-640="vstripe">
                <div class="content">
                    <div class="slider clearfix">
                        <figure><img src="/images/img.png" width="308" height="242" alt=""></figure>
                        <article>
                            <h3>Lorem Ipsum is simply cssauthor.com</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus&shy;try's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram&shy;bled it to make a type specimen book. It has survived not only five centuries</p>
                        </article>
                        <div class="thumbs" data-flex="-end end">
                            <a href="#" class="btn btn-thumb prev"></a>
                            <a href="#" class="btn btn-thumb next"></a>
                        </div>
                    </div>
                    <div class="posts" data-flex="stripe w" data-flex-480="vstripe">
                        <article>
                            <h4><a href="#">Apple i phone variations</a></h4>
                            <span><time>30/12/12</time> By : <a href="#">Mariya</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        </article>
                        <article>
                            <h4><a href="#">The standard chunk Lorem Ipsum</a></h4>
                            <span><time>30/12/12</time> By : <a href="#">Andriana Solorzana</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        </article>
                        <article>
                            <h4><a href="#">This book is one of treatise</a></h4>
                            <span><time>30/12/12</time> By : <a href="#">Andriana Solorzana</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        </article>
                        <article>
                            <h4><a href="#">Apple i phone variations</a></h4>
                            <span><time>30/12/12</time> By : <a href="#">Mariya</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        </article>
                        <article>
                            <h4><a href="#">The standard chunk Lorem Ipsum</a></h4>
                            <span><time>30/12/12</time> By : <a href="#">Andriana Solorzana</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        </article>
                        <article>
                            <h4><a href="#">This book is one of treatise</a></h4>
                            <span><time>30/12/12</time> By : <a href="#">Andriana Solorzana</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        </article>
                        <article>
                            <h4><a href="#">Apple i phone variations</a></h4>
                            <span><time>30/12/12</time> By : <a href="#">Mariya</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        </article>
                        <article>
                            <h4><a href="#">The standard chunk Lorem Ipsum</a></h4>
                            <span><time>30/12/12</time> By : <a href="#">Andriana Solorzana</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        </article>
                        <article>
                            <h4><a href="#">This book is one of treatise</a></h4>
                            <span><time>30/12/12</time> By : <a href="#">Andriana Solorzana</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        </article>
                    </div>
                </div>
                <aside class="sidebar" data-flex-640="-start between w" data-flex-480="vstripe" data-childs="vaxis">
                    <div class="add">
                        <hgroup>
                            <h4>The ultimate apple</h4>
                            <h2>i pad Guide</h2>
                            <figure><img src="/images/ipad.png" width="236" height="187" alt=""></figure>
                        </hgroup>
                    </div>
                    <div class="join">
                        <div class="lbl lbl-default"><strong>12</strong><small>week</small></div>
                        <hgroup>
                            <h2>lorem ipsum</h2>
                            <h4>Lorem Ipsum is simply dummy</h4>
                        </hgroup>
                        <a href="#" class="btn btn-alt">join us now!</a>
                    </div>
                    <div class="form-wrap">
                        <h5>join our mailing</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>    
                        <form action="#" method="post" data-flex="vaxis" data-flex-640="around w">
                            <input type="text" name="input" placeholder="Name">
                            <input type="email" name="input" placeholder="email address">
                            <button class="btn btn-submit">sign me up!</button>
                        </form>
                    </div>                   
                </aside>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="axis">
                <span></span>
                <span>All Rights Reserved to <a href="#">cssauthor.com</a></span>
                <div class="links-social" data-flex="end w">
                    <a href="#"><i class="icon-fb"></i></a>
                    <a href="#"><i class="icon-tw"></i></a>
                    <a href="#"><i class="icon-youtube"></i></a>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>