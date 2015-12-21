<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lucid</title>
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
            var LAYOUT_WIDTH = 1040;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth/LAYOUT_WIDTH+'px' : '1px';
            window.onresize = function() {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth/LAYOUT_WIDTH+'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="topbar">
                <div class="lwrap">
                    <nav class="links-nav" data-flex="end w">
                        <a href="#">home</a>
                        <a href="#">about</a>
                        <a href="#">categories</a>
                        <a href="#">contact us</a>
                    </nav>
                </div>
            </div> 
            <div class="lwrap header" data-flex="axis w">
                <a href="#" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="350" height="37" alt="Lucid">
                </a>
                <div class="social" data-flex="col" data-childs="-center">
                    <a href="#"><div data-flex="-center center"><i class="icon-rss"></i></div>subscribe to our rss feed</a>
                    <a href="#"><div data-flex="-center center"><i class="icon-mail"></i></div>contact us now!</a>
                </div>
            </div>
        </header>
        <div class="lwrap">
            <div class="content-wrap" data-flex="stripe" data-flex-640="vstripe">
                <div class="content">
                    <div class="post-item" data-flex="stripe" data-flex-480="vstripe">
                        <div class="post-side" data-flex-480="-start between">
                            <dl data-childs="-center w">
                                <div><div data-flex="-center"><i class="icon-baloon"></i></div><dt>comments:</dt><dd> <a href="#">12</a></dd></div>
                                <div><div data-flex="-center"><i class="icon-heart"></i></div><dt>liked:</dt><dd> <a href="#">31 people</a></dd></div>
                                <div><div data-flex="-center"><i class="icon-user"></i></div><dt>by:</dt><dd> <a href="#">admin</a></dd></div>
                            </dl>
                            <dl data-flex="w">
                                <dt>category: </dt> <dd> <a href="#"> unnamed 1</a></dd>
                            </dl>
                            <dl class="tags" data-flex="col">
                                <dt>tags:</dt>
                                <dd class="links-tag" data-flex="col -start">
                                    <a href="#">DEMO TAG 1</a>
                                    <a href="#">DEMO TAG 2</a>
                                    <a href="#">DEMO TAG 3</a>
                                    <a href="#">DEMO TAG 4</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="post-wrap">
                            <div class="post">
                                <h2>the post title</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam magna nulla, porta a commodo eu, vehicula ac lectus. Phasellus eros libero, euismod quis quis bibendum ac, porta non mi. Nam in odio sit amet nisi tempor fermentum nec ac est. Morbi at nisi neque, eu consectetur augue. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam ac felis eget nunc convallis vulputate. Vivamus fermentum egestas nunc nec feugiat. Sed fringilla ligula vel ilgula tincidunt placerat. In ac arcu ipsum, nec mattis urna. Vivamus auctor tincidunt nulla vitae feugiat. Ut sed augue odio, ac hendrerit tortor.</p>
                                <p>Nulla at velit et est hedrerit pharetra at et sapien. Proin iaculis enim eget olio convallis verus. Donec autctor ante in nisl venenatis at iaculis diam viverra. Integer massa urna, venenatis a placerat ut, elementum sed lectus. Curabitur vel ultireces ligula. Nunc euismod, ante vel tincidunt placerat, velit lacus laoreet elit, nec viverra quam ante eu urna. Nulllam portitor bibendum lorem, at convallis sapien suscipit sit amet. Etiam aliquam auctor augue, et pharetra justo dignissim at. Aenean aliquet interdum eusismod.</p>                            
                            </div>
                            <div data-flex>
                                <figure><img src="/images/img1.png" width="75" height="61" alt=""></figure>
                                <figure><img src="/images/img2.png" width="75" height="61" alt=""></figure>
                                <figure><img src="/images/img3.png" width="75" height="61" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="post-item" data-flex="stripe">
                        <div class="post-side">
                            <dl data-childs="-center w">
                                <div><div data-flex="-center"><i class="icon-baloon"></i></div><dt>comments:</dt><dd><a href="#">12</a></dd></div>
                                <div><div data-flex="-center"><i class="icon-heart"></i></div><dt>liked:</dt><dd><a href="#">31 people</a></dd></div>
                                <div><div data-flex="-center"><i class="icon-user"></i></div><dt>by:</dt><dd><a href="#">admin</a></dd></div>
                            </dl>
                            <dl data-flex="w">
                                <dt>category:</dt><dd><a href="#">unnamed 1</a></dd>
                            </dl>
                            <dl class="tags" data-flex="col">
                                <dt>tags:</dt>
                                <dd class="links-tag" data-flex="col -start">
                                    <a href="#">DEMO TAG 1</a>
                                    <a href="#">DEMO TAG 2</a>
                                    <a href="#">DEMO TAG 3</a>
                                    <a href="#">DEMO TAG 4</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="post-wrap">
                            <div class="post">
                                <h2>the post title 2</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam magna nulla, porta a commodo eu, vehicula ac lectus. Phasellus eros libero, euismod quis quis bibendum ac, porta non mi. Nam in odio sit amet nisi tempor fermentum nec ac est. Morbi at nisi neque, eu consectetur augue. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam ac felis eget nunc convallis vulputate. Vivamus fermentum egestas nunc nec feugiat. Sed fringilla ligula vel ilgula tincidunt placerat. In ac arcu ipsum, nec mattis urna. Vivamus auctor tincidunt nulla vitae feugiat. Ut sed augue odio, ac hendrerit tortor.</p>
                                <p>Nulla at velit et est hedrerit pharetra at et sapien. Proin iaculis enim eget olio convallis verus. Donec autctor ante in nisl venenatis at iaculis diam viverra. Integer massa urna, venenatis a placerat ut, elementum sed lectus. Curabitur vel ultireces ligula. Nunc euismod, ante vel tincidunt placerat, velit lacus laoreet elit, nec viverra quam ante eu urna. Nulllam portitor bibendum lorem, at convallis sapien suscipit sit amet. Etiam aliquam auctor augue, et pharetra justo dignissim at. Aenean aliquet interdum eusismod.</p>                            
                            </div>
                            <div data-flex>
                                <figure><img src="/images/img1.png" width="75" height="61" alt=""></figure>
                                <figure><img src="/images/img2.png" width="75" height="61" alt=""></figure>
                                <figure><img src="/images/img3.png" width="75" height="61" alt=""></figure>
                                <figure><img src="/images/img1.png" width="75" height="61" alt=""></figure>
                                <figure><img src="/images/img2.png" width="75" height="61" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="post-item" data-flex="stripe">
                        <div class="post-side">
                            <dl data-childs="-center w">
                                <div><div data-flex="-center"><i class="icon-baloon"></i></div><dt>comments:</dt><dd><a href="#">12</a></dd></div>
                                <div><div data-flex="-center"><i class="icon-heart"></i></div><dt>liked:</dt><dd><a href="#">31 people</a></dd></div>
                                <div><div data-flex="-center"><i class="icon-user"></i></div><dt>by:</dt><dd><a href="#">admin</a></dd></div>
                            </dl>
                            <dl data-flex="w">
                                <dt>category:</dt><dd><a href="#">unnamed 1</a></dd>
                            </dl>
                            <dl class="tags" data-flex="col">
                                <dt>tags:</dt>
                                <dd class="links-tag" data-flex="col -start">
                                    <a href="#">DEMO TAG 1</a>
                                    <a href="#">DEMO TAG 2</a>
                                    <a href="#">DEMO TAG 3</a>
                                    <a href="#">DEMO TAG 4</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="post-wrap">
                            <div class="post">
                                <h2>the post title 3</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam magna nulla, porta a commodo eu, vehicula ac lectus. Phasellus eros libero, euismod quis quis bibendum ac, porta non mi. Nam in odio sit amet nisi tempor fermentum nec ac est. Morbi at nisi neque, eu consectetur augue. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam ac felis eget nunc convallis vulputate. Vivamus fermentum egestas nunc nec feugiat. Sed fringilla ligula vel ilgula tincidunt placerat. In ac arcu ipsum, nec mattis urna. Vivamus auctor tincidunt nulla vitae feugiat. Ut sed augue odio, ac hendrerit tortor.</p>
                                <p>Nulla at velit et est hedrerit pharetra at et sapien. Proin iaculis enim eget olio convallis verus. Donec autctor ante in nisl venenatis at iaculis diam viverra. Integer massa urna, venenatis a placerat ut, elementum sed lectus. Curabitur vel ultireces ligula. Nunc euismod, ante vel tincidunt placerat, velit lacus laoreet elit, nec viverra quam ante eu urna. Nulllam portitor bibendum lorem, at convallis sapien suscipit sit amet. Etiam aliquam auctor augue, et pharetra justo dignissim at. Aenean aliquet interdum eusismod.</p>                            
                            </div>
                            <div data-flex>
                                <figure><img src="/images/img1.png" width="75" height="61" alt=""></figure>
                                <figure><img src="/images/img2.png" width="75" height="61" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="links-pagination" data-flex data-childs="-center center">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                    </div>
                </div>
                <aside class="sidebar" data-flex="vstripe">
                    <div>
                        <div class="follow" data-flex="stripe">
                            <div data-flex="vaxis">
                                <a href="#" class="btn btn-follow"><i class="icon-tlg"></i></a>
                                <span>599</span>
                                <small>followers</small>
                            </div>
                            <div data-flex="vaxis">
                                <a href="#" class="btn btn-follow"><i class="icon-twlg"></i></a>
                                <span>624</span>
                                <small>followers</small>
                            </div>
                        </div>
                        <form action="#" method="post">
                            <input type="search" name="search" placeholder="site search">
                            <a href="#" class="btn btn-search">search</a>
                        </form>
                        <div class="grid" data-flex="stripe w">
                            <figure><img src="/images/img.png" width="104" height="104" alt=""></figure>
                            <figure><img src="/images/img.png" width="104" height="104" alt=""></figure>
                            <figure><img src="/images/img.png" width="104" height="104" alt=""></figure>
                            <figure><img src="/images/img.png" width="104" height="104" alt=""></figure>
                        </div>
                        <h3>focus</h3>
                        <div class="links-focus" data-flex="col -start">
                            <a href="#" class="active">all</a>
                            <a href="#">code & design</a>
                            <a href="#">graphic art</a>
                            <a href="#">illustations</a>
                            <a href="#">miscellaneous</a>
                        </div>
                    </div>
                    <div class="social" data-flex="col" data-childs="-center">
                        <a href="#"><div data-flex="-center center"><i class="icon-rss"></i></div>subscribe to our rss feed</a>
                        <a href="#"><div data-flex="-center center"><i class="icon-mail"></i></div>contact us now!</a>
                    </div>
                </aside>
            </div>
            <footer data-flex="stripe w">
                <div data-flex="col">
                    <span>&copy; 2011 lucid theme</span>
                    <a href="#">by weeklyy.com</a>
                </div>
                <nav class="links-footer" data-flex="end w">
                    <a href="#">home</a>
                    <a href="#">about</a>
                    <a href="#">categories</a>
                    <a href="#">contact us</a>
                </nav>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>