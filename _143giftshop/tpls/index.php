<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gift Shop</title>
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
            };
        </script>
    </head>
    <body>
        <div class="lwrap">
            <header>
                <section data-flex="between -end w" data-flex-640="axis w">
                    <div class="links-topbar" data-flex="end w">
                        <a href="#">sell</a>
                        <a href="#">registry</a>
                        <a href="#">community</a>
                        <a href="#">blogs</a>
                        <a href="#">mobile</a>
                        <a href="#">gift cards</a>
                    </div>
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/copyright-logo.png" width="171" height="108" alt="Gift Shop">
                    </a>
                    <div class="links-menu" data-flex="end w" data-childs="center -center" data-flex-640="center w">
                        <a href="#">register</a>
                        <a href="#">sign in</a>
                        <a href="#" class="drop">whislost<i class="icon-box"></i></a>
                        <a href="#" class="drop">cart<i class="icon-cart"></i></a>
                    </div>
                </section>
                <nav class="links-nav" id="nav" data-flex="center w" data-childs="center -center">
                    <a href="#">art</a>
                    <div>
                        <a href="#">home &amp; living</a>
                        <div class="dropdown">
                            <div>
                                <ul>
                                    <li class="clearfix">
                                        <figure><img src="/images/horse.png" width="76" height="76" alt=""></figure> 
                                        <h6><a href="#">item name here</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the</p>
                                        <a href="#" class="btn btn-default sm">more detail</a>
                                    </li>
                                    <li class="clearfix">
                                        <figure><img src="/images/horse.png" width="76" height="76" alt=""></figure> 
                                        <h6><a href="#">item name here</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the</p>
                                        <a href="#" class="btn btn-default sm">more detail</a>
                                    </li>
                                    <li class="clearfix">
                                        <figure><img src="/images/horse.png" width="76" height="76" alt=""></figure> 
                                        <h6><a href="#">item name here</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the</p>
                                        <a href="#" class="btn btn-default sm">more detail</a>
                                    </li>
                                </ul>
                                <a href="#">see all items</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="#">jewelry</a>
                        <div class="dropdown">
                            <div>
                                <ul>
                                    <li class="clearfix">
                                        <figure><img src="/images/horse.png" width="76" height="76" alt=""></figure> 
                                        <h6><a href="#">item name here</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the</p>
                                        <a href="#" class="btn btn-default sm">more detail</a>
                                    </li>
                                    <li class="clearfix">
                                        <figure><img src="/images/horse.png" width="76" height="76" alt=""></figure> 
                                        <h6><a href="#">item name here</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the</p>
                                        <a href="#" class="btn btn-default sm">more detail</a>
                                    </li>
                                    <li class="clearfix">
                                        <figure><img src="/images/horse.png" width="76" height="76" alt=""></figure> 
                                        <h6><a href="#">item name here</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the</p>
                                        <a href="#" class="btn btn-default sm">more detail</a>
                                    </li>
                                </ul>
                                <a href="#">see all items</a>
                            </div>
                        </div>
                    </div>
                    <a href="#">women</a>
                    <a href="#">men</a>
                    <a href="#">kids</a>
                    <a href="#">vintage</a>
                    <a href="#">weddings</a>
                    <div>
                        <a href="#">more</a>
                        <div class="dropdown">
                            <div>
                                <ul>
                                    <li class="clearfix">
                                        <figure><img src="/images/horse.png" width="76" height="76" alt=""></figure> 
                                        <h6><a href="#">item name here</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the</p>
                                        <a href="#" class="btn btn-default sm">more detail</a>
                                    </li>
                                    <li class="clearfix">
                                        <figure><img src="/images/horse.png" width="76" height="76" alt=""></figure> 
                                        <h6><a href="#">item name here</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the</p>
                                        <a href="#" class="btn btn-default sm">more detail</a>
                                    </li>
                                    <li class="clearfix">
                                        <figure><img src="/images/horse.png" width="76" height="76" alt=""></figure> 
                                        <h6><a href="#">item name here</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the</p>
                                        <a href="#" class="btn btn-default sm">more detail</a>
                                    </li>
                                </ul>
                                <a href="#">see all items</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <main>
                <section class="showing" data-childs="stripe" data-childs-480="vstripe">
                    <div class="row">
                        <figure>
                            <img src="/images/mens.png" width="670" height="570" alt="">
                            <figcaption>
                                <hgroup class='title'>
                                    <h2>men's wear</h2>
                                    <h5>lorem ipsum is simply dummy text of the printing and typesetting industry. lorem</h5>
                                </hgroup> 
                                <h3 class='title-sub'>lorem ipsum is simply dummy text</h3>
                            </figcaption>
                        </figure>
                        <div>
                            <figure>
                                <img src="/images/womens.png" width="494" height="320" alt="">
                                <figcaption>
                                    <hgroup class='title'>
                                        <h3>women's wear</h3>
                                        <h6>lorem ipsum is simply dummy text of the printing and typesetting</h6>
                                    </hgroup> 
                                </figcaption>
                            </figure>
                            <figure>
                                <img src="/images/kids.png" width="494" height="245" alt="">
                                <div data-flex="end" data-flex-640="end w">
                                    <span class="lbl lbl-default lg">baby shop</span>
                                    <a href="/" class="btn btn-box" data-tooltip="wishlist"></a>
                                    <a href="/" class="btn btn-cart" data-tooltip="add to cart"></a>
                                    <span class="lbl lbl-price lg sh"><span><small>$ </small>99.<sup>00</sup></span></span>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="row">
                        <div data-flex="col">
                            <form action="#" method="post" data-flex="center -center" class="form-search">
                                <fieldset class="input-wrap">
                                    <input type="search" name="search" class="input-search" id="input-search">
                                    <label for="input-search" id="label-placeholder">Search your product here <span id="placeholder-child">(&nbsp;e.g.: Silver diamond ring&nbsp;)</span></label>
                                </fieldset>
                                <input type="image" src="/images/icons/search.png">
                            </form>
                            <figure>
                                <img src="/images/bijou.png" width="670" height="335" alt="">
                                <div data-flex="end">
                                    <figcaption class="title" data-flex="center -center">crafts</figcaption>
                                    <a href="#" class="btn btn-box" data-tooltip="wishlist"></a>
                                    <a href="#" class="btn btn-cart" data-tooltip="add to cart"></a>
                                    <span class="lbl lbl-price lg"><span><small>$ </small>99.<sup>00</sup></span></span>
                                </div>
                            </figure>
                        </div>
                        <figure>
                            <img src="/images/jewelry.png" width="494" height="510" alt="">
                            <div>
                                <figcaption class="title side" data-flex="axis"><span>jewelry</span><a href="#" class="btn btn-open"></a></figcaption>
                            </div>
                        </figure>
                    </div>
                </section>
                <section class="new-products">
                    <h2 class="hdr" data-flex="between -end">
                        <span>new products</span>
                        <div data-flex="end">
                            <a class="btn btn-thumb prev" id="thumb1"></a>
                            <a class="btn btn-thumb next" id="thumb2"></a>
                        </div>
                    </h2>
                    <div class="carousel" id="carousel-1">
                        <ul>
                            <li>
                                <div>
                                    <figure>
                                        <img data-src="/images/new1.png" src="" width="370" height="200" alt="">
                                        <figcaption data-flex>
                                            <span class="lbl lbl-default lg">baby shop</span>
                                            <a href="#" class="btn btn-box" data-tooltip="wishlist"></a>
                                            <a href="#" class="btn btn-cart" data-tooltip="add to cart"></a>
                                            <span class="lbl lbl-price lg sh"><span><small>$ </small>99.<sup>00</sup></span></span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <figure>
                                        <img data-src="/images/new2.png" src="" width="370" height="200" alt="">
                                        <figcaption data-flex>
                                            <span class="lbl lbl-default lg">baby shop</span>
                                            <a href="#" class="btn btn-box" data-tooltip="wishlist"></a>
                                            <a href="#" class="btn btn-cart" data-tooltip="add to cart"></a>
                                            <span class="lbl lbl-price lg sh"><span><small>$ </small>99.<sup>00</sup></span></span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <figure>
                                        <img data-src="/images/new3.png" src="" width="370" height="200" alt="">
                                        <figcaption data-flex>
                                            <span class="lbl lbl-default lg">baby shop</span>
                                            <a href="#" class="btn btn-box" data-tooltip="wishlist"></a>
                                            <a href="#" class="btn btn-cart" data-tooltip="add to cart"></a>
                                            <span class="lbl lbl-price lg sh"><span><small>$ </small>99.<sup>00</sup></span></span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <figure>
                                        <img data-src="/images/new1.png" src="" width="370" height="200" alt="">
                                        <figcaption data-flex>
                                            <span class="lbl lbl-default lg">baby shop</span>
                                            <a href="#" class="btn btn-box" data-tooltip="wishlist"></a>
                                            <a href="#" class="btn btn-cart" data-tooltip="add to cart"></a>
                                            <span class="lbl lbl-price lg sh"><span><small>$ </small>99.<sup>00</sup></span></span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <figure>
                                        <img data-src="/images/new2.png" src="" width="370" height="200" alt="">
                                        <figcaption data-flex>
                                            <span class="lbl lbl-default lg">baby shop</span>
                                            <a href="#" class="btn btn-box" data-tooltip="wishlist"></a>
                                            <a href="#" class="btn btn-cart" data-tooltip="add to cart"></a>
                                            <span class="lbl lbl-price lg sh"><span><small>$ </small>99.<sup>00</sup></span></span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <figure>
                                        <img data-src="/images/new3.png" src="" width="370" height="200" alt="">
                                        <figcaption data-flex>
                                            <span class="lbl lbl-default lg">baby shop</span>
                                            <a href="#" class="btn btn-box" data-tooltip="wishlist"></a>
                                            <a href="#" class="btn btn-cart" data-tooltip="add to cart"></a>
                                            <span class="lbl lbl-price lg sh"><span><small>$ </small>99.<sup>00</sup></span></span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <figure>
                                        <img data-src="/images/new1.png" src="" width="370" height="200" alt="">
                                        <figcaption data-flex>
                                            <span class="lbl lbl-default lg">baby shop</span>
                                            <a href="#" class="btn btn-box" data-tooltip="wishlist"></a>
                                            <a href="#" class="btn btn-cart" data-tooltip="add to cart"></a>
                                            <span class="lbl lbl-price lg sh"><span><small>$ </small>99.<sup>00</sup></span></span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="featured">
                    <h2 class="hdr" data-flex="between -end">
                        <span>featured products</span>
                        <div data-flex="end">
                            <a class="btn btn-thumb prev" id="thumb3"></a>
                            <a class="btn btn-thumb next" id="thumb4"></a>
                        </div>
                    </h2>
                    <div class="carousel" id="carousel-2">
                        <ul>
                            <li>
                                <div>
                                    <figure>
                                        <img data-src="/images/girl1.png" src="" width="270" height="400" alt="">
                                        <span class="lbl lbl-default sm discount">20% off</span>
                                        <figcaption>
                                            <hgroup>
                                                <h5><a href="#">Product Title here</a></h5>
                                                <h6>Short Description here</h6>
                                            </hgroup>
                                            <div data-flex="stripe">
                                                <a href="#" class="btn btn-simple"><i class="icon-arrows"></i></a>
                                                <a href="#" class="btn btn-simple"><i class="icon-boxsm"></i></a>
                                                <a href="#" class="btn btn-simple"><i class="icon-cartsm"></i></a>
                                                <span class="lbl lbl-price md discount"><span><small>$ </small>99.<sup>00</sup></span></span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <figure>
                                        <img data-src="/images/girl2.png" src="" width="270" height="400" alt="">
                                        <figcaption>
                                            <hgroup>
                                                <h5><a href="#">Product Title here</a></h5>
                                                <h6>Short Description here</h6>
                                            </hgroup>
                                            <div data-flex="stripe">
                                                <a href="#" class="btn btn-simple"><i class="icon-arrows"></i></a>
                                                <a href="#" class="btn btn-simple"><i class="icon-boxsm"></i></a>
                                                <a href="#" class="btn btn-simple"><i class="icon-cartsm"></i></a>
                                                <span class="lbl lbl-price md discount"><span><small>$ </small>99.<sup>00</sup></span></span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li class="new">
                                <div>
                                    <figure>
                                        <img data-src="/images/girl3.png" src="" width="270" height="400" alt="">
                                        <span class="lbl lbl-default sm new">new</span>
                                        <figcaption>
                                            <hgroup>
                                                <h5><a href="#">Product Title here</a></h5>
                                                <h6>Short Description here</h6>
                                            </hgroup>
                                            <div data-flex="stripe">
                                                <a href="#" class="btn btn-simple"><i class="icon-arrows"></i></a>
                                                <a href="#" class="btn btn-simple"><i class="icon-boxsm"></i></a>
                                                <a href="#" class="btn btn-simple"><i class="icon-cartsm"></i></a>
                                                <span class="lbl lbl-price md new"><span><small>$ </small>99.<sup>00</sup></span></span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <figure>
                                        <img data-src="/images/girl4.png" src="" width="270" height="400" alt="">
                                        <figcaption>
                                            <hgroup>
                                                <h5><a href="#">Product Title here</a></h5>
                                                <h6>Short Description here</h6>
                                            </hgroup>
                                            <div data-flex="stripe">
                                                <a href="#" class="btn btn-simple"><i class="icon-arrows"></i></a>
                                                <a href="#" class="btn btn-simple"><i class="icon-boxsm"></i></a>
                                                <a href="#" class="btn btn-simple"><i class="icon-cartsm"></i></a>
                                                <span class="lbl lbl-price md discount"><span><small>$ </small>99.<sup>00</sup></span></span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <figure>
                                        <img data-src="/images/girl1.png" src="" width="270" height="400" alt="">
                                        <span class="lbl lbl-default sm discount">20% off</span>
                                        <figcaption>
                                            <hgroup>
                                                <h5><a href="#">Product Title here</a></h5>
                                                <h6>Short Description here</h6>
                                            </hgroup>
                                            <div data-flex="stripe">
                                                <a href="#" class="btn btn-simple"><i class="icon-arrows"></i></a>
                                                <a href="#" class="btn btn-simple"><i class="icon-boxsm"></i></a>
                                                <a href="#" class="btn btn-simple"><i class="icon-cartsm"></i></a>
                                                <span class="lbl lbl-price md discount"><span><small>$ </small>99.<sup>00</sup></span></span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <figure>
                                        <img data-src="/images/girl2.png" src="" width="270" height="400" alt="">
                                        <figcaption>
                                            <hgroup>
                                                <h5><a href="#">Product Title here</a></h5>
                                                <h6>Short Description here</h6>
                                            </hgroup>
                                            <div data-flex="stripe">
                                                <a href="#" class="btn btn-simple"><i class="icon-arrows"></i></a>
                                                <a href="#" class="btn btn-simple"><i class="icon-boxsm"></i></a>
                                                <a href="#" class="btn btn-simple"><i class="icon-cartsm"></i></a>
                                                <span class="lbl lbl-price md discount"><span><small>$ </small>99.<sup>00</sup></span></span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li class="new">
                                <div>
                                    <figure>
                                        <img data-src="/images/girl3.png" src="" width="270" height="400" alt="">
                                        <span class="lbl lbl-default sm new">new</span>
                                        <figcaption>
                                            <hgroup>
                                                <h5><a href="#">Product Title here</a></h5>
                                                <h6>Short Description here</h6>
                                            </hgroup>
                                            <div data-flex="stripe">
                                                <a href="#" class="btn btn-simple"><i class="icon-arrows"></i></a>
                                                <a href="#" class="btn btn-simple"><i class="icon-boxsm"></i></a>
                                                <a href="#" class="btn btn-simple"><i class="icon-cartsm"></i></a>
                                                <span class="lbl lbl-price md new"><span><small>$ </small>99.<sup>00</sup></span></span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="about">
                    <h2 class="hdr"><span>who we are</span></h2>
                    <article>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </article>
                    <div data-flex="col -center">
                        <div class="steps" data-flex="stripe w" data-childs="around -center">
                            <div>
                                <i class="icon-stepchose"></i>
                                <span>chose pro&shy;ducts</span>
                            </div>
                            <div>
                                <i class="icon-stepregister"></i>
                                <span>regi&shy;ster lo&shy;gin</span>
                            </div>
                            <div>
                                <i class="icon-stepcheck"></i>
                                <span>check&shy;out</span>
                            </div>                   
                        </div>
                        <a href="#" class="btn btn-default lg">register now</a>
                    </div>
                </section>
            </main>
            <footer>
                <section class="footer" data-flex="stripe w">
                    <div>
                        <h5>shop&shy;ping with us</h5>
                        <div class="links-default" data-flex="col -start">
                            <a href="#">why shop with us?</a>
                            <a href="#">how it works</a>
                            <a href="#">delivery</a>
                            <a href="#">returns</a>
                            <a href="#">where's my order</a>
                            <a href="#">contact & help</a>
                            <a href="#">wedding list</a>
                            <a href="#">wish lists</a>
                            <a href="#">gift vouchers</a>
                        </div>
                    </div>
                    <div>
                        <h5>about us</h5>
                        <div class="links-default" data-flex="col -start">
                            <a href="#">our story</a>
                            <a href="#">customer contact</a>
                            <a href="#">awards</a>
                            <a href="#">press centre</a>
                            <a href="#">work with us</a>
                            <a href="#">terms & conditions</a>
                            <a href="#">privacy & cookies</a>
                        </div>
                    </div>
                    <div>
                        <h5>sel&shy;ling with us</h5>
                        <div class="links-default" data-flex="col -start">
                            <a href="#">why join?</a>
                            <a href="#">faqs</a>
                            <a href="#">apply to sell with us</a>
                            <a href="#">affiliates</a>
                        </div>
                    </div>
                    <div>
                        <h5>signup news&shy;letter</h5>
                        <form action="#" method="post" data-flex="col">
                            <input type="email" name="email" class="input-email" placeholder="e.g.:abc@domain.com">
                            <button><span class="btn btn-default md">subscribe now</span></button>
                        </form>
                        <h5>keep in touch</h5>
                        <div class="links-social" data-flex="w">
                            <a href="#"><i class="icon-Rss"></i></a>
                            <a href="#"><i class="icon-Facebook"></i></a>
                            <a href="#"><i class="icon-twitter"></i></a>
                            <a href="#"><i class="icon-flickr"></i></a>
                            <a href="#"><i class="icon-Google"></i></a>
                        </div>
                    </div>
                </section>
                <section class="copyright" data-flex="axis">
                    <span>Copyright &copy; 2014 Gift Shop,&nbsp; All right reserved</span>
                    <span>Designed by <a href="#">Amysxain</a></span>
                </section>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
        <script src="/js/jquery/plugins/jquery.anoslide.js"></script>
        <script>
            // jquery carousel anoSlide.js
            $('#carousel-1 ul').anoSlide({
                items: 3,
                speed: 500,
                prev: '#thumb1',
                next: '#thumb2',
                lazy: true,
                responsiveOne: 460,
                responsiveTwo: 620
            });
            $('#carousel-2 ul').anoSlide({
                items: 4,
                speed: 500,
                prev: '#thumb3',
                next: '#thumb4',
                lazy: true,
                responsiveOne: 460,
                responsiveTwo: 620,
                responsiveThree: 780
            });
        </script>
        <script>
            // multicolor placeholder
            document.getElementById('input-search').onblur = function () {
                var placeholder = document.getElementById('label-placeholder');
                var placeholderChild = document.getElementById('placeholder-child');
                this.value === '' ? placeholder.style.color = '#424242' : placeholder.style.color = 'transparent';
                this.value === '' ? placeholderChild.style.color = '#c2c2c2' : placeholderChild.style.color = 'transparent';
            };
            // dropdown position by right side
            var arr = document.getElementsByClassName('dropdown');
            for (var i = 0; i < arr.length; i++) {
                if (arr[i].getBoundingClientRect().right >= nav.getBoundingClientRect().right) {
                    arr[i].style.right = '0px';
                    arr[i].style.left = 'auto';
                }
            }
        </script>
    </body>
</html>