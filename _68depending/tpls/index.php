<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Depending</title>
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
        <a name="top"></a>
        <div class="lwrap">
            <header data-flex="axis" data-flex-640="-center around w">                
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="165" height="19" alt="Depending">
                </a>
                <nav class="links-nav" data-flex="w" data-childs="-center center" data-flex-640="center w">
                    <a href="#" class="active">home</a>
                    <a href="#">pages</a>
                    <a href="#">portfolio</a>
                    <a href="#">blog</a>
                    <a href="#">contact</a>
                </nav>
                <form action="#" method="post" data-flex="axis" class="form-search">   
                    <input type="search" name="search">
                    <input type="image" name="image" src="/images/icons/search.png">   
                </form>
            </header> 
            <figure class="banner">
                <img src="/images/img1.png" width="1170" height="512" alt="">
                <h1>our blog</h1>
            </figure>
            <div class="content-wrap" data-flex="stripe" data-flex-640="vstripe">
                <div class="content">
                    <div class="post">
                        <h2>How To Build Long-Term Client Relationships</h2>
                        <div class="links-post" data-flex="w" data-childs="-center">
                            <span><i class="icon-clock"></i><time>Jul 05, 2012</time></span>
                            <span><i class="icon-cloud"></i><a href="#">12 comments</a></span>
                            <span><i class="icon-mark"></i><a href="#">Business</a>,<a href="#">IOS</a>,<a href="#">IPad</a></span>
                        </div>
                        <figure><img src="/images/post.png" width="573" height="288" alt=""></figure>
                        <p>Everyone loves a happy ending: the hero slays the dragon, true love conquers all, the Death Star is destroyed, the new website is launched and both client and users alike are thrilled. While this last example may not have the Hollywood ending that the first few examples do, for those of us in the Web design industry, it is the story ending we want for all our project.</p>
                    </div>
                    <div>
                        <h2 class="title">3 thoughts on <span>How To Build Long-Term Client Relationships</span></h2>
                        <blockquote data-flex="col">
                            <q>Hi, this is a comment.<br> To delete a comment, just log in and view the post's comments. There you will have the option to edit or delete them.</q>
                            <cite><a href="#">Mr WordPress</a> on <time>October 25, 2012 at 12:30 pm</time></cite>
                        </blockquote>
                        <blockquote data-flex="col">
                            <q>Hi, this is a comment.<br> To delete a comment, just log in and view the post's comments. There you will have the option to edit or delete them.</q>
                            <cite><a href="#">Mr WordPress</a> on <time>October 25, 2012 at 12:30 pm</time></cite>
                        </blockquote>
                    </div>
                    <div>
                        <h2 class="title">leave a reply</h2>
                        <form action="#" method="post" data-flex="col -start">
                            <input type="text" name="input" placeholder="Enter your Name *">
                            <input type="email" name="input" placeholder="Enter your Email *">
                            <input type="url" name="input" placeholder="Enter your Site">
                            <textarea placeholder="Enter your Message *"></textarea>
                            <button><span class="btn btn-submit">Submit</span></button>
                        </form>
                    </div>
                </div>
                <aside class="sidebar" data-flex-640="stripe w">
                    <div>
                        <h3 class="title">categories</h3>
                        <div class="links-default" data-flex="col -start">
                            <a href="#">Design</a>
                            <a href="#">Awards & Recognition</a>
                            <a href="#">Competitions</a>
                            <a href="#">Travel & Tourism</a>
                            <a href="#">Direct Mail</a>
                        </div>
                    </div>
                    <div>
                        <h3 class="title">archives</h3>
                        <div class="links-default" data-flex="col -start">
                            <a href="#">August 2012</a>
                            <a href="#">September 2012</a>
                            <a href="#">October 2012</a>
                            <a href="#">November 2012</a>
                            <a href="#">Desember 2012</a>
                        </div>
                    </div>
                    <div>
                        <h3 class="title">text widget</h3> 
                        <p>Everyone loves a happy ending: the hero slays the dragon, true love con&shy;quers all, the Death Star is destroyed, the new website is launched and both client and users alike are thrilled. </p>
                        <p>While this last example may not have the Hollywood ending that the ...</p>
                    </div>
                    <div>
                        <h3 class="title">photos</h3> 
                        <div data-flex="stripe">
                            <figure><img src="/images/img2.png" width="79" height="79" alt=""></figure>
                            <figure><img src="/images/img3.png" width="80" height="79" alt=""></figure>
                            <figure><img src="/images/img4.png" width="80" height="79" alt=""></figure>
                        </div>
                    </div>
                    <h4 class="title-tw">last tweets</h4>
                    <div class="tweets">
                        <p>
                            <time>about 24 hours ago </time>
                            Envato Co-founder Cyan gives Minted Mag some tips for growing Freelance Business! Check it out 
                            <a href="#">enva.to/PNGCEx</a>
                        </p> 
                        <p>
                            <time>about a day ago </time>
                            Need some advice on start&shy;ing a small business? Check out this interview with Envato CEO @Collis
                            <a href="#">enva.to/QCV0fQ</a>
                        </p> 
                        <p>
                            <time>about 24 hours ago </time>
                            Envato Co-founder Cyan gives Minted Mag some tips for growing Freelance Business! Check it out 
                            <a href="#">enva.to/PNGCEx</a>
                        </p> 
                        <p>
                            <time>about a day ago </time>
                            Need some advice on starting a small business? Check out this interview with Envato CEO @Collis 
                            <a href="#">enva.to/QCV0fQ</a>
                        </p> 
                        <p>
                            <time>about a day ago </time>
                            Need some advice on starting a small business? Check out this interview with Envato CEO @Collis
                            <a href="#">enva.to/QCV0fQ</a>
                        </p> 
                    </div>                     
                </aside> 
                <a href="#top" class="btn btn-anchor"></a>
            </div>
            <footer data-flex="axis" data-flex-640="vaxis">
                <span>copyright 2012<strong>&nbsp;&middot;</strong><a href="#">depending</a>. all rights reserved.</span>
                <div class="links-social" data-flex="end w" data-flex-640="center w">
                    <a href="#"><i class="icon-fb"></i></a>
                    <a href="#"><i class="icon-in"></i></a>
                    <a href="#"><i class="icon-pin"></i></a>
                    <a href="#"><i class="icon-tw"></i></a>
                </div> 
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>