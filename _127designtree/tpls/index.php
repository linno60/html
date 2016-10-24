<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Design Tree</title>
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
            var LAYOUT_WIDTH = 996;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col">
        <div>
            <header>
                <div class="lwrap" data-flex="-start between" data-flex-480="vaxis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="272" height="63" alt="Design Tree">
                    </a>
                    <nav class="links-nav" data-flex="end w" data-flex-480="center w" data-childs="center -center">
                        <a href="#" class="active">home</a>
                        <a href="#" class="dropdown-link">services</a>
                        <a href="#">portfolio</a>
                        <a href="#">blog</a>
                        <a href="#">about us</a>
                        <a href="#">contact</a>
                    </nav>
                </div>
            </header>
            <section class="banner">
                <div class="lwrap" data-flex="stripe" data-flex-800="vstripe">
                    <div class="figure"><figure><img src="/images/image.png" width="604" height="386" alt=""></figure></div>
                    <div class="about" data-flex="col around -start">
                        <article>
                            <h1>I Create Beautiful Sites for My Clients</h1>
                            <p>Volutpat sodales. Cras sit amet posuere elit. Integer a pretium mau lla facilisi. Etiam libero metus, mollis at pretium non, convallis id tell sed arcu neque</p>
                            <p>Vestibulum posuere hendrerit justo, eget cursus metus tincidunt Curabitur aliquet nibh a lectus dapibus ultricies.</p>
                        </article>
                        <a href="#" class="btn btn-default lg">view portfolio</a>
                    </div>
                </div>
            </section>
            <div class="lwrap" data-flex="stripe w" data-flex-640="vstripe">
                <section class="latest-posts newsticker">
                    <div class="hdr">
                        <div data-flex="axis">
                            <h2>latest blog posts</h2>
                            <div class="pagination-posts" data-flex data-childs="center -center">
                                <a href="#" id='newsticker1-prev'><i class="icon-next"></i></a>
                                <a href="#" id='newsticker1-next'><i class="icon-prev"></i></a>
                            </div> 
                        </div>
                    </div>
                    <ul id='newsticker1'>
                        <li class="clearfix">
                            <figure><img src="/images/image2.png" width="177" height="127" alt=""></figure>
                            <h3><a href="#">nulla ullamcorper vulp utate sapien</a></h3>
                            <div class="details" data-flex="-center w"><small>Posted by charlie&emsp;|</small> <span>design</span> - <span>php</span> - <span>wordpress</span></div>
                            <article>
                                <p>Cras posuere, ipsum nec lobortis iaculis, metus quam convallis eros, at suscipit ante …</p>
                            </article>
                            <div data-flex="end"><a href="#" class="btn btn-default sm">read more</a></div>
                        </li>
                        <li class="clearfix">
                            <figure><img src="/images/image2.png" width="177" height="127" alt=""></figure>
                            <h3><a href="#">nulla ullamcorper vulp utate sapien</a></h3>
                            <div class="details" data-flex="-center w"><small>Posted by charlie&emsp;|</small> <span>design</span> - <span>php</span> - <span>wordpress</span></div>
                            <article>
                                <p>Cras posuere, ipsum nec lobortis iaculis, metus quam convallis eros, at suscipit ante …</p>
                            </article>
                            <div data-flex="end"><a href="#" class="btn btn-default sm">read more</a></div>
                        </li>
                        <li class="clearfix">
                            <figure><img src="/images/image2.png" width="177" height="127" alt=""></figure>
                            <h3><a href="#">nulla ullamcorper vulp utate sapien</a></h3>
                            <div class="details" data-flex="-center w"><small>Posted by charlie&emsp;|</small> <span>design</span> - <span>php</span> - <span>wordpress</span></div>
                            <article>
                                <p>Cras posuere, ipsum nec lobortis iaculis, metus quam convallis eros, at suscipit ante …</p>
                            </article>
                            <div data-flex="end"><a href="#" class="btn btn-default sm">read more</a></div>
                        </li>
                        <li class="clearfix">
                            <figure><img src="/images/image2.png" width="177" height="127" alt=""></figure>
                            <h3><a href="#">nulla ullamcorper vulp utate sapien</a></h3>
                            <div class="details" data-flex="-center w"><small>Posted by charlie&emsp;|</small> <span>design</span> - <span>php</span> - <span>wordpress</span></div>
                            <article>
                                <p>Cras posuere, ipsum nec lobortis iaculis, metus quam convallis eros, at suscipit ante …</p>
                            </article>
                            <div data-flex="end"><a href="#" class="btn btn-default sm">read more</a></div>
                        </li>
                        <li class="clearfix">
                            <figure><img src="/images/image2.png" width="177" height="127" alt=""></figure>
                            <h3><a href="#">nulla ullamcorper vulp utate sapien</a></h3>
                            <div class="details" data-flex="-center w"><small>Posted by charlie&emsp;|</small> <span>design</span> - <span>php</span> - <span>wordpress</span></div>
                            <article>
                                <p>Cras posuere, ipsum nec lobortis iaculis, metus quam convallis eros, at suscipit ante …</p>
                            </article>
                            <div data-flex="end"><a href="#" class="btn btn-default sm">read more</a></div>
                        </li>
                    </ul>
                </section>
                <section class="topical-posts">
                    <div class="newsticker" >  
                        <div class="pagination-topical" data-flex data-childs="center -center">
                            <a href="#" id='newsticker2-prev'><i class="icon-down"></i></a>
                            <a href="#" id='newsticker2-next'><i class="icon-up"></i></a>
                        </div>                  
                        <h2>ut rutrum suscipit convallisris</h2>
                        <ul id='newsticker2' data-childs="stripe w">
                            <li data-childs="col -end">
                                <article>
                                    <h4><i class="icon-box"></i>ut rutrum sus cipit con</h4>
                                    <p>Praesent varius faucibus nibh, nec imperdiet metus semper id. sent laoreet, leo quis gravida</p>
                                    <a href="#" class="btn btn-more">more</a>
                                </article>
                                <article>
                                    <h4><i class="icon-paint"></i>ut rutrum sus cipit con</h4>
                                    <p>Praesent varius faucibus nibh, nec imperdiet metus semper id. sent laoreet, leo quis gravida</p>
                                    <a href="#" class="btn btn-more">more</a>
                                </article>
                            </li>
                            <li data-childs="col -end">
                                <article>
                                    <h4><i class="icon-pen"></i>ut rutrum sus cipit con</h4>
                                    <p>Praesent varius faucibus nibh, nec imperdiet metus semper id. sent laoreet, leo quis gravida</p>
                                    <a href="#" class="btn btn-more">more</a>
                                </article>
                                <article>
                                    <h4><i class="icon-lamp"></i>ut rutrum sus cipit con</h4>
                                    <p>Praesent varius faucibus nibh, nec imperdiet metus semper id. sent laoreet, leo quis gravida</p>
                                    <a href="#" class="btn btn-more">more</a>
                                </article>
                            </li>
                            <li data-childs="col -end">
                                <article>
                                    <h4><i class="icon-box"></i>ut rutrum sus cipit con</h4>
                                    <p>Praesent varius faucibus nibh, nec imperdiet metus semper id. sent laoreet, leo quis gravida</p>
                                    <a href="#" class="btn btn-more">more</a>
                                </article>
                                <article>
                                    <h4><i class="icon-paint"></i>ut rutrum sus cipit con</h4>
                                    <p>Praesent varius faucibus nibh, nec imperdiet metus semper id. sent laoreet, leo quis gravida</p>
                                    <a href="#" class="btn btn-more">more</a>
                                </article>
                            </li>
                            <li data-childs="col -end">
                                <article>
                                    <h4><i class="icon-pen"></i>ut rutrum sus cipit con</h4>
                                    <p>Praesent varius faucibus nibh, nec imperdiet metus semper id. sent laoreet, leo quis gravida</p>
                                    <a href="#" class="btn btn-more">read more</a>
                                </article>
                                <article>
                                    <h4><i class="icon-lamp"></i>ut rutrum sus cipit con</h4>
                                    <p>Praesent varius faucibus nibh, nec imperdiet metus semper id. sent laoreet, leo quis gravida</p>
                                    <a href="#" class="btn btn-more">read more</a>
                                </article>
                            </li>
                            <li data-childs="col -end">
                                <article>
                                    <h4><i class="icon-box"></i>ut rutrum sus cipit con</h4>
                                    <p>Praesent varius faucibus nibh, nec imperdiet metus semper id. sent laoreet, leo quis gravida</p>
                                    <a href="#" class="btn btn-more">read more</a>
                                </article>
                                <article>
                                    <h4><i class="icon-paint"></i>ut rutrum sus cipit con</h4>
                                    <p>Praesent varius faucibus nibh, nec imperdiet metus semper id. sent laoreet, leo quis gravida</p>
                                    <a href="#" class="btn btn-more">read more</a>
                                </article>
                            </li>
                            <li data-childs="col -end">
                                <article>
                                    <h4><i class="icon-pen"></i>ut rutrum sus cipit con</h4>
                                    <p>Praesent varius faucibus nibh, nec imperdiet metus semper id. sent laoreet, leo quis gravida</p>
                                    <a href="#" class="btn btn-more">read more</a>
                                </article>
                                <article>
                                    <h4><i class="icon-lamp"></i>ut rutrum sus cipit con</h4>
                                    <p>Praesent varius faucibus nibh, nec imperdiet metus semper id. sent laoreet, leo quis gravida</p>
                                    <a href="#" class="btn btn-more">read more</a>
                                </article>
                            </li>
                        </ul>  
                    </div>
                    <div class="twitter-posts">
                        <h3 data-flex="-center"><i class="icon-monitor"></i><span>follow me on twitter</span></h3>
                        <article>
                            <p>A nice shot of my upcoming landing page design for the new category at <a href="#">#themeforest</a> <a href="#" class="link">http://drbl.in/DRH</a></p>
                            <time>2 days ago</time>
                        </article>
                        <article>
                            <p>A nice shot of my upcoming landing page design for the new category at <a href="#">#themeforest</a> <a href="#" class="link">http://drbl.in/DRH</a></p>
                            <time>2 days ago</time>
                        </article>
                    </div>
                </section>    
            </div>
        </div>       
        <footer>
            <div class="lwrap">
                <div class="footer" data-flex="stripe w">
                    <section class="text-widget" data-flex="col -end">
                        <h5>Text Widget</h5>
                        <p>Mauris ultrices sodales pretium. Nulla ullamcorper vulpu&shy;tate sapien ut accumsan. Etiam volutpat, purus ut dignis&shy;sim tincidunt, quam erat consectetur Vestibulum sit amet accumsan ipsum</p>
                        <p>metus, eget pharetra dolor mi vel anteQuisque<br> posuere dolor sed ligula faci …</p>
                        <a href="#" class="btn btn-alt sm">read more</a>
                    </section>
                    <section>
                        <h5>Get in Touch</h5>
                        <div class="links-social" data-childs="" data-flex="col -start">
                            <a href="#"><i class="icon-fb"></i>Like me on FaceBook</a>
                            <a href="#"><i class="icon-tw"></i>Follow me on Twitter</a>
                            <a href="#"><i class="icon-rss"></i>Subscribe to my RSS Feeds</a>
                            <a href="#"><i class="icon-mail"></i>Get in touch by Mail</a>
                            <a href="#"><i class="icon-fl"></i>My shots on Flickr</a>
                            <a href="#"><i class="icon-in"></i>My LinkedIn profile</a>
                        </div>
                    </section>
                    <section>
                        <h5>Quick contact</h5>
                        <p>Aenean blandit auctor ullamcorper. Mauris eu enim vitae tellu ultrices vulputate in ac nibh. In viverra, enim ut varius </p>
                        <form action="#" method="post">
                            <div data-flex="stripe" data-flex-480="vstripe">
                                <fieldset data-flex="col">
                                    <input type="text" name="contact" placeholder="Name">
                                    <input type="email" name="contact" placeholder="E-Mail">
                                    <input type="text" name="contact" placeholder="Subject">
                                </fieldset>                          
                                <textarea name="contact"></textarea>
                            </div>
                            <button><span class="btn btn-alt lg">submit</span></button>
                        </form>
                    </section>
                </div>
                <div class="copyright" data-flex="axis">
                    <span>&copy; 2010 bubblelicious.com&nbsp; | &nbsp;All Rights Reserved</span>
                    <div class="links-footer" data-flex="end w">
                        <a href="#">About</a>
                        <a href="#">Facebook</a>
                        <a href="#">Twitter</a>
                        <a href="#">Contact</a>
                    </div>
                </div>
            </div>
        </footer>       
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/jquery/plugins/jquery-advanced-news-ticker-master/jquery.newsTicker.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
        <script>
            var nt_example1 = $('#newsticker1').newsTicker({
                row_height: 217,
                max_rows: 3,
                duration: 4000,
                prevButton: $('#newsticker1-prev'),
                nextButton: $('#newsticker1-next')
            });
            nt_example1.newsTicker('stop');
            var nt_example2 = $('#newsticker2').newsTicker({
                row_height: 150,
                max_rows: 2,
                duration: 4000,
                prevButton: $('#newsticker2-prev'),
                nextButton: $('#newsticker2-next')
            });
            nt_example2.newsTicker('stop');
        </script>
    </body>
</html>