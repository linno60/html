<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blog Post</title>
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/css/reset-elements.css">
        <link type="text/css" rel="stylesheet" href="/css/styles.css?<?= time() ?>">    
    </head>
    <body>
        <?= require_tpl('common/header') ?>
        <div class="breadcrumb-wrap">
            <ul class="breadcrumb">
                <li><a href="#">Home</a><span>></span></li>
                <li>Blog Post</li>
            </ul> 
        </div>
        <div class="wrap-base column blog">
            <h1 class="h1">Blog Post</h1>
            <p>Curibatur sit amet urna at sem dignissim aliquam.</p>
            <div class="wrap-base blog-inner">
                <section class="content blog">
                    <div class="blog-item">
                        <div class="lbl lbl-date">15<span>AUG</span></div>
                        <div class="post">
                            <div class="post-wrap">
                                <div class="lbl lbl-date hidden">15<span>AUG</span></div>
                                <img src="images/shape11.png" alt="">
                            </div>                            
                            <h1>Etiam laoreet sem eget eros rhoncus.</h1>
                            <div class="blog-links">
                                <div>
                                    <a href="#"><i class="icon-blog-user"></i>By Admin</a>
                                    <a href="#"><i class="icon-blog-cloud"></i>3 Comments</a>
                                    <a href="#"><i class="icon-blog-folder"></i>Category</a>
                                </div>
                                <div>
                                    <a href="#"><i class="icon-blog-eye"></i>151</a>
                                    <a href="#"><i class="icon-blog-like"></i>87</a>
                                </div>
                            </div>
                            <p>Quisque elementum nibh at dolor pellentesque, a eleifend libero pharetra. Mauris neque felis, volutpat nec ullamcorper eget, sagittis vel enim. Nam sit amet ante egestas, gravida tellus vitae, semper eros. Nullam mattis mi at metus egestas, in porttitor lectus sodales.</p>
                            <p class="hidden">Aliquam sed sem odio. Morbi et ligula at quam adipiscing commodo vitae et enim. Donec lectus arcu, pretium iderat et, hendrerit tempus eros. Nullam ut pretium arcu, ac pretium tortor. Fusce sed nulla ac lorem porta auctor. Aliquam pulvinar lectus sed est aliquet faucibus.</p>
                            <blockquote>Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi eleifend molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti. Phasellus interdum risus at mi ullamcorper lobortis. In et metus aliquet, suscipit leo.</blockquote>
                            <p>Donec mauris ante, pretium in interdum porta, hendrerit vitae quam. Ut lobortis sapien eu est laoreet feugiat. Ut non elementum tellus, vitae vulputate ipsum. Mauris varius eros vel risus ultricies, pulvinar gravida sapien aliquet. Vestibulum hendrerit ultrices turpis sit amet tempor. In convallis sem vehicula semper feugiat. Quisque venenatis orci mauris, ut venenatis lectus luctus id.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar ultrices felis, ac luctus ipsum aliquam sed. Sed vitae orci faucibus, vulputate metus eget, ultrices purus. Aliquam egestas tempus orci, feugiat rhoncus felis scelerisque id. Suspendisse potenti. Donec lectus lacus, sodales nec accumsan in, posuere tempus urna.</p>
                            <div class="share-wrap">
                                <div class="add-this">
                                    <a href="#" class="btn btn-add-facebook"></a>
                                    <a href="#" class="btn btn-add-twitter"></a>
                                    <a href="#" class="btn btn-add-mail"></a>
                                    <a href="#" class="btn btn-add-print"></a>
                                    <a href="#" class="btn btn-add-this"></a>
                                    <div class="share-counter">2m</div>
                                </div>
                            </div>
                            <div class="about">
                                <img src="images/shape13.png" alt="">
                                <div>
                                    <h4>About the Author</h4>
                                    <p>Suspendisse potenti. In non tincidunt mauris. Sed accumsan augue a gravida posuere. Praesent sit amet mollis mi. Aliquam luctus est vitae adipiscing suscipit. Vestibulum suscipit, ipsum nec pretium molestie, turpis dolor...</p>
                                    <div>
                                        <a href="#" class="btn btn-post btn-facebook"><i class="icon-post-facebook"></i></a>
                                        <a href="#" class="btn btn-post btn-twitter"><i class="icon-post-twitter"></i></a>
                                        <a href="#" class="btn btn-post btn-rss"><i class="icon-post-rss"></i></a>
                                        <a href="#" class="btn btn-post btn-mail"><i class="icon-post-mail"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="about hidden">
                                <img src="images/shape13.png" alt="">
                                    <h4>About the Author</h4>
                                    <p>Suspendisse potenti. In non tincidunt mauris. Sed accumsan augue a gravida posuere. Praesent sit amet mollis mi. Aliquam luctus est vitae adipiscing suscipit. Vestibulum suscipit, ipsum nec pretium molestie, turpis dolor...</p>
                                    <div>
                                        <a href="#" class="btn btn-post btn-facebook"><i class="icon-post-facebook"></i></a>
                                        <a href="#" class="btn btn-post btn-twitter"><i class="icon-post-twitter"></i></a>
                                        <a href="#" class="btn btn-post btn-rss"><i class="icon-post-rss"></i></a>
                                        <a href="#" class="btn btn-post btn-mail"><i class="icon-post-mail"></i></a>
                                    </div>
                            </div>
                            <div class="comments-wrap">
                                <div class="hdr-wrap">
                                    <h5>comments (2)</h5>
                                </div>
                                <ul class="thread">
                                    <li>
                                        <div>
                                            <img src="images/avatar.png" alt="">
                                            <div>
                                                <h6>Duis tincidunt augue purus</h6>
                                                <div class="comment-details">
                                                    <a href="#" class="lnk-name">Anna Retallick</a>
                                                    <time>12.05.2013</time>
                                                    <a href="#">Reply</a>
                                                </div>
                                                <p>Cgestas metus id nunc vestibulum dictum. Etiam dapibus nunc nec risus egestas vel bibend eros vehicula. Suspendisse facilisis neque in augue feugiat tempor. Donec velit diam, pharetra lobortis non, ullamcorper eget lectus.</p>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <div>
                                                    <img src="images/avatar.png" alt="">
                                                    <div>
                                                        <h6>Phasellus interdum risus at ullamcorper</h6>
                                                        <div class="comment-details">
                                                            <a href="#" class="lnk-name">Tom Retallick</a>
                                                            <time>12.05.2013</time>
                                                            <a href="#">Reply</a>
                                                        </div>
                                                        <p>Donec mauris ante, pretium in interdum porta, hendrerit vitae quam. Ut lobortissapien eu est laoreet feugiat. Ut non elementum tellus, vitae vulputate ipsum.Mauris varius eros vel.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="contacts-wrap">
                                <div>
                                    <h3 class="h3">leave a reply</h3>
                                    <form action="#" method="post">  
                                        <div>
                                            <div class="form-wrap">
                                                <div>
                                                    <label class="lbl lbl-form"><i class="icon-label-username"></i>Name*</label> 
                                                    <input type="text" placeholder="Marek">
                                                </div>
                                                <div>
                                                    <label class="lbl lbl-form"><i class="icon-label-mail"></i>Email*</label> 
                                                    <input type="text" placeholder="marek.mnishek@gmail.com">
                                                </div>
                                            </div>
                                            <div class="form-wrap">
                                                <div>
                                                    <label class="lbl lbl-form"><i class="icon-label-subject"></i>Subject</label> 
                                                    <input type="text" placeholder="Interdum et Malesuada">
                                                </div>
                                                <p>Your email address will not be published. Required fields are marked <span>*</span></p>
                                            </div>
                                            
                                        </div>
                                        <div>
                                            <label class="lbl lbl-form"><i class="icon-label-compose"></i>Your comment*</label> 
                                            <textarea class="textarea" name="text" rows="10" cols="45" placeholder="Nullam nunc quam, aliquet at diam ac, placerat condimentum velit. Praesent sodales vel lacus eget suscipit. Donec scelerisque, mauris porttitor vulputate ornare, ipsum risus tempus metus."></textarea>                
                                            <div>
                                                <div>
                                                    <input type="text" placeholder="Enter the code">
                                                    <img src="images/captcha.png" alt="">
                                                </div>
                                                <button><span class="btn btn-submit">post comment</span></button>
                                            </div>
                                         </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <aside class="blog-post">
                    <div class="hdr-wrap">
                        <h3>category</h3>
                    </div>
                    <div class="accordion blog">
                        <input type="checkbox" name="accordion" id="acc1" checked>
                        <label for="acc1">electronics<span class="btn"></span></label>                    
                        <div class="acc-panel">
                            <ul>
                                <li><a href="#"><i class="icon-list-point"></i>Mobile</a></li>
                                <li><a href="#"><i class="icon-list-point"></i>Communicators</a></li>
                                <li><a href="#"><i class="icon-list-point"></i>CDMA Phones</a></li>
                                <li><a href="#"><i class="icon-list-point"></i>Accessories</a></li>
                                <li><a href="#"><i class="icon-list-point"></i>Charges</a></li>
                                <li><a href="#"><i class="icon-list-point"></i>Memory Cards</a></li>
                            </ul>
                        </div>
                        <input type="checkbox" name="accordion" id="acc2">
                        <label for="acc2">fasion<span class="btn"></span></label>                    
                        <div class="acc-panel">
                            <ul>
                                <li><a href="#"><i class="icon-list-point"></i>Mobile</a></li>
                                <li><a href="#"><i class="icon-list-point"></i>Communicators</a></li>
                            </ul>
                        </div>
                        <input type="checkbox" name="accordion" id="acc3">
                        <label for="acc3">at home<span class="btn"></span></label>                    
                        <div class="acc-panel range-panel">
                            <ul>
                                <li><a href="#"><i class="icon-list-point"></i>Mobile</a></li>
                                <li><a href="#"><i class="icon-list-point"></i>Communicators</a></li>
                            </ul>
                        </div>
                        <input type="checkbox" name="accordion" id="acc4">
                        <label for="acc4">books<span class="btn"></span></label>                    
                        <div class="acc-panel">
                            <ul>
                                <li><a href="#"><i class="icon-list-point"></i>Mobile</a></li>
                                <li><a href="#"><i class="icon-list-point"></i>Communicators</a></li>
                            </ul>
                        </div>
                    </div>
                    <section class="news">
                        <div class="hdr-wrap">
                            <h3>recent post</h3>
                            <div class="arrows">
                                <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-small-left"></i></a>
                                <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-small-right"></i></a>
                            </div>
                        </div>
                        <article>
                            <img src="/images/shape2.png" alt="">
                            <h5>35% Discount on second purchase!</h5>
                            <p>Sed blandit nulla nec nunc ullam corper tristique. Mauris adipiscing cursus ante ultricies dictum sed lobortis.</p>
                            <div>
                                <a href="#" class="lnk-read">Read More</a>
                                <time>12.05.2013</time>
                            </div>
                        </article>
                        <article>
                            <h5>Free shipping for regular customers.</h5>
                            <p>Aiquam mauris libero, suscipit sed ornare ac, suscipit non felis. Fusce sit amet orci justo, a ultrices urna cursus. Suspendisse mauris nibh, tristique eget consectetur.</p>
                            <div>
                                <a href="#" class="lnk-read">Read More</a>
                                <time>12.05.2013</time>
                            </div>
                        </article>
                    </section>
                    <section class="testimonials">
                        <div class="hdr-wrap">
                            <h3>testimonials</h3>
                            <div class="arrows">
                                <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-small-left"></i></a>
                                <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-small-right"></i></a>
                            </div>
                        </div>
                        <blockquote>
                            <h6>Best Service!</h6>
                            <p>Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi eleifend molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti.</p>
                        </blockquote> 
                        <div class="author">
                            <a href="#" class="avatar">
                                <img src="images/avatar.png" alt="">
                            </a>
                            <div>
                                <a href="#" class="lnk-name">Anna Retallick</a>
                                <time>12.05.2013</time>
                            </div>
                        </div>
                    </section>
                    <section class="tags">
                        <div class="hdr-wrap">
                            <h3>tag cioud</h3>
                        </div>
                        <div>
                            <a href="#">Category</a>
                            <a href="#">Phones</a>
                            <a href="#" class="hidden">Camera</a>
                            <a href="#">Chargers</a>
                            <a href="#">Accessories</a>
                            <a href="#">Memory</a>
                            <a href="#">Communicators</a>
                            <a href="#">Players</a>
                            <a href="#">Tablets</a>
                            <a href="#" class="hidden">laptops</a>
                            <a href="#">Consoles</a>
                            <a href="#">Samsung</a>
                        </div>
                    </section>
                    <section class="flickr">
                        <div class="hdr-wrap">
                            <h3>flickr</h3>                            
                        </div>
                        <div>
                            <img src="images/shape12.png" alt=""> 
                            <img src="images/shape12.png" alt=""> 
                            <img src="images/shape12.png" alt=""> 
                            <img src="images/shape12.png" alt=""> 
                            <img src="images/shape12.png" alt=""> 
                            <img src="images/shape12.png" alt=""> 
                        </div>                        
                    </section>
                </aside>
            </div>
        </div>
    </div>
    <?= require_tpl('common/footer') ?>
</body>
</html>
