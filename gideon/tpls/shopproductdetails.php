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
            var LAYOUT_WIDTH = 1190;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col">
        <div class="shop-product-details">
            <?= require_tpl('common/header') ?>
            <section class="product-detail">
                <div class="lwrap" data-flex="stripe" data-flex-640="vstripe">
                    <div class="main">
                        <figure><span class="lbl lbl-circle lg">15% Off</span><img src="/images/main.png" width="571" height="478" alt=""></figure>
                        <div data-flex="stripe w">
                            <figure><img src="/images/img18.jpg" width="136" height="133" alt=""></figure>
                            <figure><img src="/images/img18.jpg" width="136" height="133" alt=""></figure>
                            <figure><img src="/images/img18.jpg" width="136" height="133" alt=""></figure>
                        </div>
                    </div>
                    <div class="detail">
                        <h2>Modern Wooden Spoon</h2>
                        <div class="sub-details" data-flex="axis">
                            <figure><img src="/images/star3.png" width="82" height="13" alt=""></figure>
                            <div data-flex="end w" data-childs>
                                <a href="#"><i class="icon-penb"></i>Write Review</a>
                                <a href="#"><i class="icon-heartb"></i>Add to wishlist</a>
                            </div>
                        </div>
                        <div class="price" data-flex="axis w">
                            <div data-flex="-end w">
                                <big>$45</big>
                                <small> + &ensp;Free Shipping</small>
                            </div>
                            <form action="#" method="post">
                                <label>Quantity</label>
                                <input type="number" id="number1" class="counter" placeholder="01">
                            </form>
                        </div>
                        <div class="add" data-flex="axis w">
                            <div data-flex="w">
                                <a href="#" class="btn btn-default">Add to cart</a>
                                <a href="#" class="btn btn-default">Buy now</a>
                            </div>
                            <span>Sold by John Doe</span>
                        </div>
                        <form class="availability" action="#" method="post" data-flex="w">
                            <label data-flex="-center"><i class="icon-locationsm"></i>Check Availability at</label>
                            <input type="password" id="password2" name="password" placeholder="Enter your pincode">
                            <button><span class="btn btn-default">Check</span></button>
                        </form>
                        <div>
                            <p>Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. Nam est lacus, consequat vita eil semper tristique, temp us in magna. Nullam sit amet metus eget dolor semper laoreet. Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. </p>
                            <a href="#" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="lwrap tabwrap">
                <div class="tabs" data-tabs>
                    <div class="tablist">
                        <a href="#tab1" class="active">Description</a>
                        <a href="#tab2">Feature</a>
                        <a href="#tab3">Reviews</a>
                    </div>
                    <div class="tabset">
                        <div id="tab1" class="tabpanel active">
                            <p>Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. Nam est lacus, consequat vita eil semper tristique, temp us in magna. Nullam sit amet metus eget dolor semper laoreet. Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. Nam est lacus, consequat vita eil semper tristique, temp us in magna. Nullam sit amet metus eget dolor semper laoreet. Cras sit amet dui ac lectus molestie porttitor. </p>
                            <ul class="list-default" data-childs="">
                                <li>Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa.</li>
                                <li>Nam est lacus, consequat vita eil semper tristique, temp us in magna. </li>
                                <li>Nullam sit amet metus eget dolor semper laoreet. </li>
                            </ul>
                            <div class="ftr-details" data-flex="axis w">
                                <div class="links-marks">
                                    <a href="#">Kitchen Set</a>, 
                                    <a href="#">Gift</a>, 
                                    <a href="#">Spoon</a>, 
                                    <a href="#">Wooden</a>, 
                                    <a href="#">material</a>, 
                                    <a href="#">Accessories</a> 
                                </div>
                                <div class="links-sharesm" data-flex="end -center w" data-childs="center -center">
                                    <span>Share :</span>
                                    <a href="#"><i class="icon-sharesm-fb"></i></a>
                                    <a href="#"><i class="icon-sharesm-tw"></i></a>
                                    <a href="#"><i class="icon-sharesm-gp"></i></a>
                                    <a href="#"><i class="icon-sharesm-in"></i></a>
                                    <a href="#"><i class="icon-sharesm-pin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tabpanel">Tab number 2</div>
                        <div id="tab3" class="tabpanel">
                            <section>
                                <h3>Reviews of Modern Wooden Spoon</h3>
                                <div class="review-item" data-flex>
                                    <div data-flex="col -center">
                                        <i class="icon-user"></i>
                                        <a href="#">Clark Marino</a>
                                    </div>
                                    <article data-flex="col -start">
                                        <div data-flex="axis w">
                                            <figure><img src="/images/review4.png" width="68" height="13" alt=""></figure>
                                            <time data-time="2016-09-24">24 Sep, 2016</time>
                                        </div>
                                        <p>Nice wooden material. Excellent more Quality of the product what I’m expecting, I highly Recommend this Product.</p>
                                    </article>
                                </div>
                                <div class="review-item" data-flex>
                                    <div data-flex="col -center">
                                        <i class="icon-user"></i>
                                        <a href="#">Steve Waugh</a>
                                    </div>
                                    <article data-flex="col -start">
                                        <div data-flex="axis w">
                                            <figure><img src="/images/review5.png" width="68" height="13" alt=""></figure>
                                            <time data-time="2016-06-24">24 Sep, 2016</time>
                                        </div>
                                        <p>Nam est lacus, consequat vita eil semper tristique, temp us in magna. Nullam sit amet metus eget dolor semper laoreet. Cras sit amet dui ac lectus molestie porttitor.</p>
                                    </article>
                                </div>
                            </section>
                            <form action="#" method="post" class="form-review">
                                <h3>Write a Review</h3>
                                <span data-flex="-start w">Rate it:&ensp;<figure><img src="/images/stars2.png" width="87" height="15" alt=""></figure></span>
                                <div data-flex="stripe w" data-childs="col">
                                    <fieldset>
                                        <label for="text1">Name*</label>
                                        <input type="text" id="text1" name="review" required=""> 
                                    </fieldset>
                                    <fieldset>
                                        <label for="text2">E-mail*</label>
                                        <input type="text" id="text2" name="review" required=""> 
                                    </fieldset>
                                    <div>
                                        <label for="text3">Review*</label>
                                        <textarea id="text3" name="review" required=""></textarea>
                                    </div>
                                </div> 
                                <button><span class="btn btn-default">Submit</span></button>
                            </form>
                            <div class="ftr-details" data-flex="axis w">
                                <div class="links-marks">
                                    <a href="#">Kitchen Set</a>, 
                                    <a href="#">Gift</a>, 
                                    <a href="#">Spoon</a>, 
                                    <a href="#">Wooden</a>, 
                                    <a href="#">material</a>, 
                                    <a href="#">Accessories</a> 
                                </div>
                                <div class="links-sharesm" data-flex="end -center w" data-childs="center -center">
                                    <span>Share :</span>
                                    <a href="#"><i class="icon-sharesm-fb"></i></a>
                                    <a href="#"><i class="icon-sharesm-tw"></i></a>
                                    <a href="#"><i class="icon-sharesm-gp"></i></a>
                                    <a href="#"><i class="icon-sharesm-in"></i></a>
                                    <a href="#"><i class="icon-sharesm-pin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <div class="lwrap footer-title" data-flex="center -center">
                <h2>related items</h2>
            </div>
            <?= require_tpl('common/galleryalt') ?>
            <?= require_tpl('common/footer') ?>  
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>

