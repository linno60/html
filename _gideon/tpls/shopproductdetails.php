<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gideon</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
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
    <body>
        <div class="shop-product-details">
            <?= require_tpl('common/header') ?>
            <section class="product-detail">
                <div class="lwrap clearfix">
                    <div class="main">
                        <figure><span class="lbl-circle lg">15% Off</span><img src="/images/main.png" width="571" height="478" alt=""></figure>
                        <div class="clearfix">
                            <figure><img src="/images/img18.jpg" width="136" height="133" alt=""></figure>
                            <figure><img src="/images/img18.jpg" width="136" height="133" alt=""></figure>
                            <figure><img src="/images/img18.jpg" width="136" height="133" alt=""></figure>
                        </div>
                    </div>
                    <div class="detail">
                        <h2>Modern Wooden Spoon</h2>
                        <div class="sub-details clearfix">
                            <figure><img src="/images/star3.png" width="82" height="13" alt=""></figure>
                            <div class="clearfix">
                                <a href="#" class="wishlist">Add to wishlist</a>
                                <a href="#" class="write">Write Review</a>
                            </div>
                        </div>
                        <div class="price clearfix">
                            <div>
                                <big>$45</big>
                                <small> +&ensp;Free Shipping</small>
                            </div>
                            <form action="#" method="post" class="clearfix">                                
                                <input type="number" id="number1" class="counter" placeholder="01">
                                <label>Quantity</label>
                            </form>
                        </div>
                        <div class="add clearfix">
                            <div>
                                <a href="#" class="btn-default">Add to cart</a>
                                <a href="#" class="btn-default">Buy now</a>
                            </div>
                            <span>Sold by John Doe</span>
                        </div>
                        <form class="availability" action="#" method="post">
                            <label>Check Availability at</label>
                            <input type="password" id="password2" name="password" placeholder="Enter your pincode">
                            <button><span class="btn-default">Check</span></button>
                        </form>
                        <div>
                            <p>Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. Nam est lacus, consequat vita eil semper tristique, temp us in magna. Nullam sit amet metus eget dolor semper laoreet. Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. </p>
                            <a href="#" class="btn-default">Read More</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="lwrap tabwrap">
                <div class="tabs">
                    <input id="tab1" type="radio" name="tabs">
                    <label for="tab1">Description</label> 
                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2">Feature</label>
                    <input id="tab3" type="radio" name="tabs" checked>
                    <label for="tab3">Reviews</label>
                    <div id="content1">
                        <p>Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. Nam est lacus, consequat vita eil semper tristique, temp us in magna. Nullam sit amet metus eget dolor semper laoreet. Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. Nam est lacus, consequat vita eil semper tristique, temp us in magna. Nullam sit amet metus eget dolor semper laoreet. Cras sit amet dui ac lectus molestie porttitor. </p>
                        <ul class="list-default">
                            <li>Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa.</li>
                            <li>Nam est lacus, consequat vita eil semper tristique, temp us in magna. </li>
                            <li>Nullam sit amet metus eget dolor semper laoreet. </li>
                        </ul>
                        <div class="ftr-details clearfix">
                            <div class="links-marks">
                                <a href="#">Kitchen Set</a>, 
                                <a href="#">Gift</a>, 
                                <a href="#">Spoon</a>, 
                                <a href="#">Wooden</a>, 
                                <a href="#">material</a>, 
                                <a href="#">Accessories</a> 
                            </div>
                            <div class="links-sharesm">
                                <a href="#"><i class="icon-sharesm-pin"></i></a>
                                <a href="#"><i class="icon-sharesm-in"></i></a>
                                <a href="#"><i class="icon-sharesm-gp"></i></a>
                                <a href="#"><i class="icon-sharesm-tw"></i></a>
                                <a href="#"><i class="icon-sharesm-fb"></i></a>
                                <span>Share :</span> 
                            </div>
                        </div>  
                    </div>
                    <div id="content2">Tab number 2</div> 
                    <div id="content3">
                        <div>
                            <h3>Reviews of Modern Wooden Spoon</h3>
                            <div class="review-item clearfix">
                                <div>
                                    <i class="icon-user"></i>
                                    <a href="#">Clark Marino</a>
                                </div>
                                <article>
                                    <div class="clearfix">
                                        <figure><img src="/images/review4.png" width="68" height="13" alt=""></figure>
                                        <time data-time="2016-09-24">24 Sep, 2016</time>
                                    </div>
                                    <p>Nice wooden material. Excellent more Quality of the product what I’m expecting, I highly Recommend this Product.</p>
                                </article>
                            </div>
                            <div class="review-item clearfix">
                                <div>
                                    <i class="icon-user"></i>
                                    <a href="#">Steve Waugh</a>
                                </div>
                                <article>
                                    <div class="clearfix">
                                        <figure><img src="/images/review5.png" width="68" height="13" alt=""></figure>
                                        <time data-time="2016-06-24">24 Sep, 2016</time>
                                    </div>
                                    <p>Nam est lacus, consequat vita eil semper tristique, temp us in magna. Nullam sit amet metus eget dolor semper laoreet. Cras sit amet dui ac lectus molestie porttitor.</p>
                                </article>
                            </div>
                        </div>
                        <form action="#" method="post" class="form-review">
                            <h3>Write a Review</h3>
                            <span>Rate it:&ensp;<figure><img src="/images/stars2.png" width="87" height="15" alt=""></figure></span>
                            <div class="clearfix">
                                <fieldset>
                                    <label for="text1">Name*</label>
                                    <input type="text" id="text1" name="review" required> 
                                </fieldset>
                                <fieldset>
                                    <label for="text2">E-mail*</label>
                                    <input type="text" id="text2" name="review" required> 
                                </fieldset>
                                <div>
                                    <label for="text3">Review*</label>
                                    <textarea id="text3" name="review" required></textarea>
                                </div>
                            </div> 
                            <button><span class="btn-default">Submit</span></button>
                        </form>
                        <div class="ftr-details clearfix">
                            <div class="links-marks">
                                <a href="#">Kitchen Set</a>, 
                                <a href="#">Gift</a>, 
                                <a href="#">Spoon</a>, 
                                <a href="#">Wooden</a>, 
                                <a href="#">material</a>, 
                                <a href="#">Accessories</a> 
                            </div>
                            <div class="links-sharesm">
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
            </section>
        </div>
        <footer>
            <div class="lwrap footer-title">
                <h2>related items</h2>
            </div>
            <?= require_tpl('common/galleryalt') ?>
            <?= require_tpl('common/footer') ?>             
        </footer> 
        <script>
            var userName = prompt("Who's come?", '');

            if (userName == "Admin") {

                var pass = prompt("Enter password", '');

                if (pass == "Black Lord") {
                    alert("Welcome");
                }
                else if (pass == null) {
                    alert("Entry canceled");
                }
                else {
                    alert("password incorrect");
                }
            }
            else if (userName == null) {
                alert("Entry canceled");
            }
            else {
                alert("I don't know you");
            }
        </script>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>