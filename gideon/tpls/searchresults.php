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
        <div>
            <?= require_tpl('common/header') ?>
            <figure class='result'>
                <img src="/images/imgcategory.jpg" width="1920" height="250" alt="">
                <div data-flex="col -center around">
                    <strong>search:<big> inspiration</big></strong>
                    <small>3 results found for "Inspiration"</small>
                </div>
            </figure>
            <div class="lwrap content-wrap" data-flex="stripe">
                <div class="content">
                    <div class="article-wrap">
                        <figure><img src="/images/img2.jpg" width="838" height="388" alt=""></figure>
                        <article data-flex>
                            <time class="lbl lbl-date" datetime="2016-04-16"><big>16</big><small>April</small><span>2016</span></time>
                            <div>
                                <h3>I Went On The Weirdest Spring Break Trip</h3>
                                <div data-flex>
                                    <div class="details">
                                        <span class="lbl lbl-default">Inspiration</span>
                                        <span class="name">Steve Smith</span>
                                    </div>
                                    <div>
                                        <p>Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. Nam est lacus, consequat vita eil semper tristique, temp us in magna. Nullam sit amet metus eget dolor semper laoreet. Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa.</p>
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="article-wrap">
                        <figure data-video="16:9"><iframe width="560" height="315" src="https://www.youtube.com/embed/J6ytVPNXy4A" frameborder="0" allowfullscreen></iframe></figure>
                        <article data-flex>
                            <time class="lbl lbl-date" datetime="2016-04-17"><big>17</big><small>April</small><span>2016</span></time>
                            <div>
                                <h3>The Day Gabby Returned to Congress to Make Her Voice</h3>
                                <div data-flex>
                                    <div class="details">
                                        <span class="lbl lbl-default">Business</span>
                                        <span class="name">Steve Smith</span>
                                    </div>
                                    <div>
                                        <p>Since we’re all at here at Sunstone, and specifically in this session, I’m going to make an assumption that you have all, at some point, felt that you were not Mormon enough — whatever that means. Today I’m going to share a story about a time when I was sure I was not Mormon enough.</p>
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="article-wrap">
                        <figure>
                            <img src="/images/img3.jpg" width="838" height="269" alt="">
                            <blockquote class="blockquote-lg" data-flex="">
                                <span class="lbl lbl-quotes"></span>
                                <q>Back in Washington, there was a big vote coming up. There was going to be a vote on the debt ceiling — essentially, a vote on whether or not our government should pay the bills it had already.</q>
                            </blockquote>
                        </figure>
                        <article data-flex>
                            <time class="lbl lbl-date" datetime="2016-04-09"><big>09</big><small>April</small><span>2016</span></time>
                            <div>
                                <h3>Sunstone is an organization that brings together</h3>
                                <div data-flex>
                                    <div class="details">
                                        <span class="lbl lbl-default">Business</span>
                                        <span class="name">Steve Smith</span>
                                    </div>
                                    <div>
                                        <p>Since we’re all at here at Sunstone, and specifically in this session, I’m going to make an assumption that you have all, at some point, felt that you were not Mormon enough — whatever that means. Today I’m going to share a story about a time when I was sure I was not Mormon enough.</p>
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="article-wrap">
                        <figure><img src="/images/img2.jpg" width="838" height="388" alt=""></figure>
                        <article data-flex>
                            <time class="lbl lbl-date" datetime="2016-04-30"><big>30</big><small>April</small><span>2016</span></time>
                            <div>
                                <h3>Taking Liberties, Taking Shortcuts</h3>
                                <div data-flex>
                                    <div class="details">
                                        <span class="lbl lbl-default">Fashion</span>
                                        <span class="name">Steve Smith</span>
                                    </div>
                                    <div>
                                        <p>In a recent interview, photographer Bruce Gilden said, “…you have to be sneaky to get the picture…” He said other things about respecting his subjects, his need to get very close and that only by veering into abstraction could he get closer. Let us not mistake being close for being sympathetic, though.</p>
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div data-flex="stripe" class="thumbs pg" data-childs="col">
                        <a href="#">Old Story</a>
                        <a href="#">New Story</a>
                    </div>
                </div>
                <aside class="sidebar">
                    <form action="#" method="post" data-flex class="search-sidebar">
                        <input type="search" name="search" placeholder="Search">
                        <button class="btn btn-search"></button>
                    </form>
                    <div>
                        <h2>categories</h2>
                        <div class="links-categories" data-flex="col -start" data-childs="-start">
                            <a href="#">All</a>
                            <a href="#">Inspiration</a>
                            <a href="#">Business</a>
                            <a href="#">Photography</a>
                            <a href="#">Fashion</a>
                            <a href="#">Life Style</a>
                        </div>
                    </div>
                    <div>
                        <div class="tabs" data-tabs="">
                            <div class="tablist">
                                <a href="#tab1" class="active">Recent</a>
                                <a href="#tab2">Popular</a>
                            </div>
                            <div class="tabset">
                                <a href="#tab1" class="active">Recent</a>
                                <div id="tab1" class="tabpanel active">
                                    <article class="clearfix">
                                        <figure><img src="/images/img19.jpg" width="60" height="60" alt=""></figure>
                                        <p>Li European lingues es members del sam</p>
                                        <time>19 Oct 2016</time>
                                    </article>
                                    <article class="clearfix">
                                        <figure><img src="/images/img19.jpg" width="60" height="60" alt=""></figure>
                                        <p>Li European lingues es members del sam</p>
                                        <time>19 Oct 2016</time>
                                    </article>
                                    <article class="clearfix">
                                        <figure><img src="/images/img19.jpg" width="60" height="60" alt=""></figure>
                                        <p>Li European lingues es members del sam</p>
                                        <time>19 Oct 2016</time>
                                    </article>
                                    <article class="clearfix">
                                        <figure><img src="/images/img19.jpg" width="60" height="60" alt=""></figure>
                                        <p>Li European lingues es members del sam</p>
                                        <time>19 Oct 2016</time>
                                    </article>
                                    <article class="clearfix">
                                        <figure><img src="/images/img19.jpg" width="60" height="60" alt=""></figure>
                                        <p>Li European lingues es members del sam</p>
                                        <time>19 Oct 2016</time>
                                    </article>
                                </div>
                                <a href="#tab2">Popular</a>
                                <div id="tab2" class="tabpanel">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2>twitter</h2>
                        <blockquote data-flex="col -center" class="blockquote-tw"><i>“</i><q>Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa.</q><time>1 hour ago</time></blockquote>
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