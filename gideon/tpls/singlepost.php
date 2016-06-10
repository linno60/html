<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gideon 300</title>
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
    <body data-flex="col between">
        <div class="single-post">
            <?= require_tpl('common/header') ?>
            <div class="lwrap content-wrap" data-flex="stripe">
                <div class="content">
                    <div class="article-wrap">
                        <figure><img src="/images/img2.jpg" width="838" height="388" alt=""></figure>
                        <article data-flex>
                            <time class="lbl lbl-date" datetime="2016-04-16"><big>16</big><small>April</small><span>2016</span></time>
                            <div>
                                <div class="details-wrap">
                                    <h3>I Went On The Weirdest Spring Break Trip</h3>
                                    <hr>
                                    <div class="details">
                                        <span class="lbl lbl-default">Inspiration</span>
                                        <span class="name">Steve Smith</span>
                                    </div>
                                </div>
                                <div>
                                    <p>Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. Nam est lacus, consequat vita eil semper tristique, temp us in magna. Nullam sit amet metus eget dolor semper laoreet. Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa.</p>
                                    <p>A love lock or love padlock is a padlock which sweethearts lock to a bridge, fence, gate, or similar public fixture to symbolize their love. Typically the sweethearts’ names or initials are inscribed on the padlock, and its key is thrown away to symbolise unbreakable love. Since the 2000s, love locks have proliferated at an increasing number of locations worldwide. They are often treated by municipal authorities as litter or vandalism, and there is some cost to their removal. public fixture to symbolize their love. proliferated at an increasing number of locations worldwide. They are often treated by municipal authorities as litter or vandalism, and there is some cost to their removal.</p>
                                    <blockquote class="blockquote-default">Nullam sit amet metus eget dolor semper laoreet. Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa.</blockquote>
                                    <p>A love lock or love padlock is a padlock which sweethearts lock to a bridge, fence, gate, or similar public fixture to symbolize their love. Typically the sweethearts’ names or initials are inscribed on the padlock, and its key is thrown away to symbolise unbreakable love. Since the 2000s, love locks have proliferated at an increasing number of locations worldwide. They are often treated by municipal authorities as litter or vandalism, and there is some cost to their removal. public fixture to symbolize their love</p>
                                </div>
                            </div>
                        </article>
                        <div>
                        <div class="author clearfix">
                            <figure><img src="/images/imgcircle.png" width="103" height="103" alt=""></figure>
                            <h4>Steve Smith</h4>
                            <p>A love lock or love padlock is a padlock which sweethearts lock to a bridge, fence, gate, or similar public fixture to symbolize their love.</p>
                            <a href="#" class="read-alt">Read more..</a>
                        </div>
                        <div class="links-share" data-flex="end w" data-childs="center -center">
                            <span>Share with:</span>
                            <a href="#"><i class="icon-share-fb"></i></a>
                            <a href="#"><i class="icon-share-tw"></i></a>
                            <a href="#"><i class="icon-share-pin"></i></a>
                            <a href="#"><i class="icon-share-inst"></i></a>
                            <a href="#"><i class="icon-share-gp"></i></a>
                        </div>
                        <div>
                            <h2>3 Comments Found</h2>
                            <div class="comment">
                                <div class="clearfix">
                                    <figure><img src="/images/imgcircle.png" width="103" height="103" alt=""></figure>
                                    <div data-flex="-start between">
                                        <div>
                                            <h4>Micheal Bevan</h4>
                                            <time>19 May 2015</time>
                                        </div>
                                        <a href="#">Reply</a>
                                    </div>
                                    <p>When thinking of User Experience, we often think of a simple, beautiful, and easy to use feature-set of a product, that makes the user’s life easier.</p>
                                </div>
                                <div class="comment">
                                    <div class="clearfix">
                                        <figure><img src="/images/imgcircle.png" width="103" height="103" alt=""></figure>
                                        <div data-flex="-start between">
                                            <div>
                                                <h4>Anita John</h4>
                                                <time>19 May 2015</time>
                                            </div>
                                            <a href="#">Reply</a>
                                        </div>
                                        <p>They are only a few of many thinkable solutions for a user’s problem the product tries to solve. Thinking in products means thinking</p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="clearfix">
                                    <figure><img src="/images/imgcircle.png" width="103" height="103" alt=""></figure>
                                    <div data-flex="-start between">
                                        <div>
                                            <h4>Richard Bravo</h4>
                                            <time>19 May 2015</time>
                                        </div>
                                        <a href="#">Reply</a>
                                    </div>
                                    <p>When thinking of User Experience, we often think of a simple, beautiful, and easy to use feature-set of a product, that makes the user’s life easier.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2>Leave Your Comment</h2>
                            <form action="#" method="post" data-flex="col -center">
                                <input type="text" name="post" placeholder="Name*" required="">
                                <input type="email" name="post" placeholder="Email*" required="">
                                <textarea name="post" placeholder="Message*" required=""></textarea>
                                <a href="#" class="btn btn-default">Send</a>
                            </form>
                        </div>
                    </div>
                    </div>                    
                </div>
                <aside class="sidebar">
                    <form action="#" method="post" data-flex class="search-sidebar">
                        <input type="search" name="search" placeholder="Search">
                        <button class="btn btn-search"></button>
                    </form>
                    <div class="about">
                        <h2>about me</h2>
                        <figure><img src="/images/img5.jpg" width="270" height="194" alt=""><a href="#" class="btn btn-more"></a></figure>   
                        <article data-flex="vaxis">
                            <strong>Steve Smith</strong>
                            <small> - Professional blogger</small>
                            <p>Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. Nam est lacus.</p>
                        </article>
                    </div>
                    <div>
                        <h2>follow me</h2>
                        <div class="links-follow" data-flex="center w" data-childs="center -center">
                            <a href="#"><i class="icon-follow-tw"></i></a>
                            <a href="#"><i class="icon-follow-fb"></i></a>
                            <a href="#"><i class="icon-follow-inst"></i></a>
                            <a href="#"><i class="icon-follow-pin"></i></a>
                            <a href="#"><i class="icon-follow-gp"></i></a>
                        </div>
                    </div>
                    <div>
                        <h2>popular post</h2>
                        <article>
                            <figure><img src="/images/img12.jpg" width="222" height="194" alt=""></figure>
                            <p>How The New York Times web page uses uniquely typography</p>
                        </article>
                        <article>
                            <figure><img src="/images/img12.jpg" width="222" height="194" alt=""></figure>
                            <p>Some part of text may be in bold, highlighted, or italicized...</p>
                        </article>
                        <article>
                            <figure><img src="/images/img12.jpg" width="222" height="194" alt=""></figure>
                            <p>Increased font sizes are seen mostly often in headings..</p>
                        </article>
                    </div>
                    <div>
                        <h2>twitter</h2>
                        <blockquote data-flex="col -center" class="blockquote-tw"><i>“</i><q>Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa.</q><time>1 hour ago</time></blockquote>
                    </div>
                    <div>
                        <h2>tags</h2>
                        <div class="links-tags" data-flex="w" data-childs="center -center">
                            <a href="#">Blog</a>
                            <a href="#">Design</a>
                            <a href="#">Inspiration</a>
                            <a href="#">Travel</a>
                            <a href="#">Life</a>
                            <a href="#">Fashion</a>
                            <a href="#">Blog Post</a>
                            <a href="#">Image</a>
                            <a href="#">Video file</a>
                            <a href="#">Audio</a>
                            <a href="#">Post</a>
                        </div>
                    </div>
                    <div>
                        <figure><img src="/images/img12.jpg" width="222" height="194" alt=""></figure>
                    </div>
                </aside>
            </div>
        </div>
        <?= require_tpl('common/footer') ?>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>