<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mostrare</title>
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
            var LAYOUT_WIDTH = 860;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div data-flex data-flex-640="vstripe">
            <div class="sidebar" data-flex="end">
                <aside>
                    <div data-flex-640="axis" data-flex-480="vaxis">
                        <a href="/" title="Return to the homepage" id="logo">
                            <img src="/images/logo.png" width="181" height="59" alt="Mostrare">
                        </a>
                        <nav class="links-nav" data-flex="col -start" data-flex-640="end w" data-flex-480="center w">
                            <a href="#">all projects</a>
                            <a href="#">fashion</a>
                            <a href="#">portraits</a>
                            <a href="#">editorial</a>
                            <a href="#" class="hidden"></a>
                            <a href="#">about me</a>
                            <a href="#">contact</a>
                            <a href="#" class="hidden"></a>
                            <a href="#">my journal</a>
                        </nav>
                    </div>
                    <div class="hidden">
                        <h3><i class="icon-tw"></i>tweet</h3>
                        <p class="tweet"><a href="#">@Lorem</a> ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet felis at ipsum gravida dictum condimentum in purus. <time>17 minutes ago</time></p>
                        <h3>social</h3>
                        <div class="links-social" data-flex="-center w">
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-v"></i></a>
                            <a href="#"><i class="icon-beh"></i></a>
                            <a href="#"><i class="icon-db"></i></a>
                            <a href="#"><i class="icon-yt"></i></a>
                            <a href="#"><i class="icon-for"></i></a>
                        </div>
                        <span>Copyright &copy; 2015 Mostrare.<br> All rights reserved.</span>  
                    </div>   
                </aside>
            </div>
            <div>
                <div class="content">
                    <hgroup data-flex="col">
                        <h1>my journal</h1>
                        <h2>a day in the life of me</h2>
                    </hgroup>
                    <div class="post">
                        <h3>Brand New Photoshoot in Downtown LA</h3>
                        <figure><img src="/images/img1.png" width="620" height="210" alt=""></figure>
                        <div class="post-details" data-flex="w" data-childs="-center">
                            <span><i class="icon-user"></i>Posted by&nbsp;<a href="#">admin</a></span>
                            <span><i class="icon-calendar"></i><time>Sept 28, 2015</time></span>
                            <span><i class="icon-mark"></i><a href="#">photo</a>, <a href="#">sessions</a></span>
                            <span><i class="icon-bubble"></i><a href="#">12</a>&nbsp;Comments</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non augue eu tortor porttitor tempor nec sed dolor. Sed dui nulla, commodo eu pretium in, scelerisque quis dolor. In tempus justo id nulla dapibus interdum. Aenean a ante velit, nec rutrum arcu. Nullam mi nulla, con&shy;sectetur ut gravida eget, ullamcorper nec magna. Proin sed mattis massa. Pellentesque neque mi, gravida id orna<br>re vel, hendrerit et urna.</p>
                        <p>Quisque iaculis, erat id volutpat rhoncus, justo erat congue risus, dapibus vestibulum odio leo quis nibh. Maecenas imperdiet accumsan posuere. Donec tellus leo, varius ac porta ac, biben&shy;dum ac mi. Integer iaculis orci interdum neque porta ac molestie ipsum aliquet. Vestibulum malesuada sem sed ipsum aliquet pharetra vulputate eget nunc. Cras enim ipsum, viverra non posuere eu, commodo et odio. Morbi sagittis tincidunt justo.</p>
                        <blockquote>“Vestibulum malesuada sem sed ipsum aliquet pharetra vulputate eget nunc. Cras enim ipsum, viverra non posuere eu, commodo et odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non augue eu tortor porttitor tempor nec sed.”</blockquote>
                        <p>Commodo et odio. Morbi sagittis tincidunt justo, a interdum tortor sagittis dictum. Suspendisse pharetra, quam quis semper auctor, elit sem pharetra nulla, id fringilla quam turpis ut quam. Praesent id massa felis. Cras dignissim mollis dui, vitae consequat orci posuere nec.</p>
                    </div>
                    <div class="comments">
                        <h2>2 comments so far</h2>
                        <div data-childs="-start">
                            <article>
                                <figure><img src="images/img2.png" width="58" height="58" alt=""></figure>
                                <div>
                                    <span><a href="#">JOHN DOE</a> on Oct 15, 2015 <a href="#">reply</a></span>
                                    <p>Commodo et odio. Morbi sagittis tincidunt justo, a interdum tortor sagittis dictum. Sus&shy;pendisse pharetra, quam quis semper auctor, elit sem pharetra nulla, id fringilla quam turpis ut quam. Praesent id massa felis. Cras dignissim mollis dui, vitae consequat orci posuere nec.</p>
                                </div>
                            </article>
                            <article>
                                <figure><img src="images/img2.png" width="58" height="58" alt=""></figure>
                                <div>
                                    <span><a href="#">JOHN DOE</a> on Oct 15, 2015 <a href="#">reply</a></span>
                                    <p>Commodo et odio. Morbi sagittis tincidunt justo, a interdum tortor sagittis dictum. Sus&shy;pendisse pharetra, quam quis semper auctor, elit sem pharetra nulla, id fringilla quam turpis ut quam. Praesent id massa felis. Cras dignissim mollis dui, vitae consequat orci posuere nec.</p>
                                </div>
                            </article>
                        </div>
                        <form action="#" method="post" data-flex="col -start">
                            <legend>leave a comment</legend>
                            <input type="text" name="input" placeholder="Your Name">
                            <input type="email" name="input" placeholder="Your Email Address">
                            <input type="url" name="input" placeholder="Web Address">
                            <textarea placeholder="Your Message"></textarea>
                            <button><span class="btn btn-submit">Post Comment</span></button>
                        </form>
                    </div>                                        
                </div>
                <div class="hidden alt">
                    <h3><i class="icon-tw"></i>tweet</h3>
                    <p class="tweet"><a href="#">@Lorem</a> ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet felis at ipsum gravida dictum condimentum in purus. <time>17 minutes ago</time></p>
                    <h3>social</h3>
                    <div class="links-social" data-flex="-center w">
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-v"></i></a>
                        <a href="#"><i class="icon-beh"></i></a>
                        <a href="#"><i class="icon-db"></i></a>
                        <a href="#"><i class="icon-yt"></i></a>
                        <a href="#"><i class="icon-for"></i></a>
                    </div>
                    <span>Copyright &copy; 2015 Mostrare.<br> All rights reserved.</span>  
                </div>
            </div>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>