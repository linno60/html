<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Primo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
        <link rel="stylesheet" href="/css/addons/data-flex.css">
        <link rel="stylesheet" href="/css/addons/data-tabs.css">
        <link rel="stylesheet" href="/css/addons/generic.css">
        <link rel="stylesheet" href="/js/jquery/plugins/wSelect-master/wSelect.css"> 
        <link rel="stylesheet" href="/css/elements.css">  
        <link rel="stylesheet" href="/css/styles.css"> 
        <script>
            var LAYOUT_WIDTH = 960;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            };
        </script>
    </head>
    <body data-flex="col">
        <div>
            <header>
                <section class="topbar">
                    <div class="lwrap" data-flex="stripe">
                        <div class="links-topnav" data-flex="w" data-childs="center -center">
                            <a href="/" class="active"><i class="icon-home"></i>home</a>
                            <a href="/"><i class="icon-account"></i>my account</a>
                            <a href="/"><i class="icon-cart"></i>shopping cart</a>
                            <a href="/"><i class="icon-check"></i>checkout</a>
                        </div>
                        <div class="select-box" data-flex="end">
                            <select class="select-default" id='select-lang'>
                                <option value="eng" data-icon="/images/icons/uk.png">English</option>
                                <option value="ger" data-icon="/images/icons/germany.png">German</option>
                                <option value="fra" data-icon="/images/icons/france.png">French</option>
                                <option value="spa" data-icon="/images/icons/spain.png">Spain</option>
                            </select>
                            <select class="select-default" id='select-cur'>
                                <option value="usd" data-icon="/images/icons/usd.png">Doller</option>
                                <option value="gbp" data-icon="/images/icons/gbp.png">Pound</option>
                                <option value="eur" data-icon="/images/icons/eur.png">Euro</option>
                            </select>
                        </div>
                    </div>
                </section>
                <section class="header">
                    <div class="lwrap" data-flex="axis">
                        <a href="/" title="Return to the homepage" id="logo">
                            <img src="/images/logo.png" width="80" height="29" alt="Primo">
                        </a>
                        <div data-flex="end -center">
                            <span class="login"><a href="/">log in</a> or <a href="/">creat account</a></span>
                            <div class="quick-start" data-flex>
                                <div class="btn btn-quick">
                                    <i class="icon-note"></i>
                                    <span class="lbl lbl-counter">03</span>
                                    <div class="dropdown">
                                        <div data-flex="col -center">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th colspan="3">Showing 2 of 2 items added</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <figure><img src="/images/girl1.png" width="47" height="58" alt=""></figure>
                                                        </td>
                                                        <td>
                                                            <h6><a href="/">beautiful croad</a></h6>
                                                            <dl>
                                                                <li><dt>Size:</dt> <dd>One size</dd></li>
                                                                <li><dt>Quantity:</dt> <dd>01</dd></li>
                                                            </dl>
                                                        </td>
                                                        <td><b>$30</b><a href="/"><i class="icon-close-sm"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><figure><img src="/images/girl2.png" width="47" height="58" alt=""></figure></td>
                                                        <td>
                                                            <h6><a href="/">dress $ t-shirt</a></h6>
                                                            <dl>
                                                                <li><dt>Size:</dt> <dd>One size</dd></li>
                                                                <li><dt>Quantity:</dt> <dd>01</dd></li>
                                                            </dl>
                                                        </td>
                                                        <td><b>$30</b><a href="/"><i class="icon-close-sm"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><figure><img src="/images/girl2.png" width="47" height="58" alt=""></figure></td>
                                                        <td>
                                                            <h6><a href="/">dress $ t-shirt</a></h6>
                                                            <dl>
                                                                <li><dt>Size:</dt> <dd>One size</dd></li>
                                                                <li><dt>Quantity:</dt> <dd>01</dd></li>
                                                            </dl>
                                                        </td>
                                                        <td><b>$30</b><a href="/"><i class="icon-close-sm"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="dropdown-ftr">
                                                <a href="/" class="btn btn-continue">continue to cart<i class="icon-quotes"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn btn-quick">
                                    <i class="icon-basket"></i>
                                    <span class="lbl lbl-counter">02</span>
                                    <div class="dropdown">
                                        <div data-flex="col -center">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th colspan="3">Showing 2 of 2 items added</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <figure><img src="/images/girl1.png" width="47" height="58" alt=""></figure>
                                                        </td>
                                                        <td>
                                                            <h6><a href="/">beautiful croad</a></h6>
                                                            <dl>
                                                                <li><dt>Size:</dt> <dd>One size</dd></li>
                                                                <li><dt>Quantity:</dt> <dd>01</dd></li>
                                                            </dl>
                                                        </td>
                                                        <td><b>$30</b><a href="/"><i class="icon-close-sm"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><figure><img src="/images/girl2.png" width="47" height="58" alt=""></figure></td>
                                                        <td>
                                                            <h6><a href="/">dress $ t-shirt</a></h6>
                                                            <dl>
                                                                <li><dt>Size:</dt> <dd>One size</dd></li>
                                                                <li><dt>Quantity:</dt> <dd>01</dd></li>
                                                            </dl>
                                                        </td>
                                                        <td><b>$30</b><a href="/"><i class="icon-close-sm"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2">Total excluding delivry:</td>
                                                        <td><b>$80</b></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="dropdown-ftr">
                                                <a href="/" class="btn btn-default">view cart</a>
                                                <a href="/" class="btn btn-continue">continue to checkout<i class="icon-quotes"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="nav">
                    <div class="lwrap" data-flex="axis">
                        <nav class="links-menu" data-flex="w" data-childs="center -center">
                            <a href="/">smart phone</a>
                            <a href="/" class="active">dasktop</a>
                            <a href="/">laptop</a>
                            <a href="/">accessories</a>
                            <a href="/">networking</a>
                            <a href="/">software</a>
                        </nav>
                        <form action="#" method="post">
                            <input class="input-search" type="search" name="search" placeholder="Search Your Item........">
                            <button class="btn btn-search"></button>
                        </form>
                    </div>
                </section>
            </header>
            <section class="slider">

            </section>
            <section class="infobar">
                <ul class="list-info lwrap" data-flex="stripe" data-childs="center -center">
                    <li>
                        <i class="icon-fly"></i>
                        <div>
                            <span>first shipping</span>
                            <small>get you every whare</small>
                        </div>
                    </li>
                    <li>
                        <i class="icon-lock"></i>
                        <div>
                            <span>secure store</span>
                            <small>100% secure store</small>
                        </div>
                    </li>
                    <li>
                        <i class="icon-clock"></i>
                        <div>
                            <span>save time</span>
                            <small>save your time</small>
                        </div>
                    </li>
                    <li>
                        <i class="icon-carg-lg"></i>
                        <div>
                            <span>pay on delivery</span>
                            <small>get you every whare</small>
                        </div>
                    </li>
                </ul>
            </section>
            <div class="lwrap">
                <section class="products">
                    <div class="tabs" id="tabs1">
                        <div class="tablist" data-flex="between end">
                            <button id="prev1"><span class="btn btn-nav prev"></span></button>
                            <ul data-flex="center">
                                <li><a href="#tabs-1-1">Fetured</a></li>
                                <li><a href="#tabs-1-2">New Itme</a></li>
                                <li><a href="#tabs-1-3">Top Seller</a></li>
                                <li><a href="#tabs-1-4">Top Ratting</a></li>
                            </ul> 
                            <button id="next1"><span class="btn btn-nav next"></span></button>
                        </div>
                        <div class="tabset" data-childs="stripe">
                            <div id="tabs-1-1">
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img1.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <figure>
                                        <span class="lbl lbl-discount"><span>-20%</span></span>
                                        <img src="/images/img2.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img3.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tabs-1-2">
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img4.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img4.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img4.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tabs-1-3">
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img5.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img5.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img5.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tabs-1-4">
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img6.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img6.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img6.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="offer" data-flex="axis">
                    <figure><div class="lbl lbl-price"> <s>$ 2300</s> <span>$ 1150</span> </div><img src="/images/phones.png" width="463" height="342" alt=""></figure>
                    <article>
                        <hgroup>
                            <h1>50% off</h1>
                            <h2>for waltron primo gh+</h2>
                            <h3>Power packed performance</h3>
                        </hgroup>
                        <p>Powered by a mighty 1.3 GHz Quad Core Processor and 1 GB fast RAM, the Primo GH+ allows seamless multitasking, faster webpage loading, smoother UI transitions and ultra fast power-up.</p>
                        <div id="countdown" data-flex="center">
                            <time class="lbl lbl-time">
                                <strong class="days"></strong>
                                <small>Days</small>
                            </time>
                            <time class="lbl lbl-time">
                                <strong class="hours"></strong>
                                <small>Hours</small>
                            </time>
                            <time class="lbl lbl-time">
                                <strong class="minutes"></strong>
                                <small>Minutes</small>
                            </time>
                            <time class="lbl lbl-time">
                                <strong class="seconds"></strong>
                                <small>Seconds</small>
                            </time>
                        </div>
                    </article>
                </section>
            </div>
            <section class="subscribe">
                <div class="lwrap">
                    <hgroup>
                        <h2>subscribe for get offer update</h2>
                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6>
                    </hgroup>
                    <form action="#" method="post" data-flex="center">
                        <input class="input-subscribe" type="email" name="subscribe" placeholder="Type your email">
                        <button><span class="btn btn-subscribe">Lets go!</span></button>
                    </form>
                </div>
            </section>
            <div class="lwrap">
                <section class="products">
                    <div class="tabs" id="tabs2">
                        <div class="tablist" data-flex="between end">
                            <button id="prev2"><span class="btn btn-nav prev"></span></button>
                            <ul data-flex="center">
                                <li><a href="#tabs-2-1">Laptop</a></li>
                            </ul> 
                            <button id="next2"><span class="btn btn-nav next"></span></button>
                        </div>
                        <div class="tabset" data-childs="stripe">
                            <div id="tabs-2-1">
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img4.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <figure>
                                        <span class="lbl lbl-discount"><span>-20%</span></span>
                                        <img src="/images/img5.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img6.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="products">
                    <div class="tabs" id="tabs3">
                        <div class="tablist" data-flex="between end">
                            <button id="prev3"><span class="btn btn-nav prev"></span></button>
                            <ul data-flex="center">
                                <li><a href="#tabs-3-1">Desktop</a></li>
                            </ul> 
                            <button id="next3"><span class="btn btn-nav next"></span></button>
                        </div>
                        <div class="tabset" data-childs="stripe">
                            <div id="tabs-3-1">
                                <div class="product-item">
                                    <figure>
                                        <span class="lbl lbl-discount"><span>new</span></span>
                                        <img src="/images/img1.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img2.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <figure>
                                        <img src="/images/img3.png" width="296" height="312" alt="">
                                        <figcaption>Smart Phone Primo V1</figcaption>
                                    </figure>
                                    <div class="product-actions" data-flex="col end">
                                        <strong><s>$10000</s> $8000</strong>
                                        <div class="rating"></div>
                                        <div class="overlay" data-flex="axis">
                                            <a href="/" class="btn btn-add"><i class="icon-addcart"></i>Add to cart</a>
                                            <a href="/" class="btn btn-cart"><i class="icon-notemd"></i></a>
                                            <a href="/" class="btn btn-cart"><i class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="brands" data-flex="col -center">
                    <h2 class="lbl lbl-default lg">our brand</h2>
                    <ul data-flex="stripe">
                        <li><img src="/images/microformats.png" width="140" height="62" alt=""></li>
                        <li><img src="/images/tricefy.png" width="140" height="62" alt=""></li>
                        <li><img src="/images/trimscape.png" width="140" height="62" alt=""></li>
                        <li><img src="/images/microformats.png" width="140" height="62" alt=""></li>
                        <li><img src="/images/jasmine.png" width="140" height="62" alt=""></li>
                        <li><img src="/images/outsourced.png" width="140" height="62" alt=""></li>
                    </ul>
                </section>
            </div>
        </div>
        <footer>
            <section class="footer lwrap" data-flex="stripe w">
                <div>
                    <h4>information</h4>
                    <div class="links-footer" data-flex="col -start">
                        <a href="/">about us</a>
                        <a href="/">customar service</a>
                        <a href="/">privacy policy</a>
                        <a href="/">site map</a>
                        <a href="/">contact</a>
                    </div>
                </div>
                <div>
                    <h4>why buy from us</h4>
                    <div class="links-footer" data-flex="col -start">
                        <a href="/">about us</a>
                        <a href="/">shipping & returns</a>
                        <a href="/">international shippinh</a>
                        <a href="/">affiliates</a>
                        <a href="/">group sales</a>
                    </div>
                </div>
                <div>
                    <h4>my account</h4>
                    <div class="links-footer" data-flex="col -start">
                        <a href="/">sign in</a>
                        <a href="/">view cart</a>
                        <a href="/">my wishlist</a>
                        <a href="/">track my order</a>
                        <a href="/">help</a>
                    </div>
                </div>
                <div>
                    <h4>contact</h4>
                    <ul class="list-default" data-childs="-start">
                        <li>
                            <i class="icon-loc"></i>
                            <address>east box nagar, sarulia demra, dhaka-1361</address>
                        </li>
                        <li>
                            <i class="icon-phone"></i>
                            <div>
                                <a href="tel:+880 1768760504">+880 1768760504</a>
                                <a href="tel:+880 1735982113">+880 1735982113</a>
                            </div>
                        </li>
                        <li>
                            <i class="icon-mail"></i>
                            <a href="mailto:binburan1@gmail.com">binburan1@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="access-bar">
                <div class="lwrap" data-flex="stripe" data-childs="-start">
                    <div>
                        <h3 class="lbl lbl-default sm">we accept</h3>
                        <div class="links-payment" data-flex="w">
                            <a href="/"><i class="icon-visa"></i></a>
                            <a href="/"><i class="icon-mastercard"></i></a>
                            <a href="/"><i class="icon-ae"></i></a>
                            <a href="/"><i class="icon-cirrus"></i></a>
                        </div>
                    </div>
                    <div>
                        <h3 class="lbl lbl-default sm">fllow us</h3>
                        <div class="links-social" data-flex="w">
                            <a href="/"><i class="icon-fb"></i></a>
                            <a href="/"><i class="icon-tw"></i></a>
                            <a href="/"><i class="icon-gp"></i></a>
                            <a href="/"><i class="icon-be"></i></a>
                            <a href="/"><i class="icon-db"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="copyright">
                <div class="lwrap">
                    <span>Copyright by : company name</span>
                </div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
        <script src="/js/jquery/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script> 
        <script src="/js/jquery/plugins/jquery-ui.tabs.neighbors.js"></script>         
        <script src="/js/jquery/plugins/wSelect-master/wSelect.js"></script>

        <script>
            $(function () {
                $('#tabs1').tabs({
                    neighbors: {
                        prev: $('#prev1'),
                        next: $('#next1')
                    }
                });
                $('#tabs2').tabs({
                    neighbors: {
                        prev: $('#prev2'),
                        next: $('#next2')
                    }
                });
                $('#tabs3').tabs({
                    neighbors: {
                        prev: $('#prev3'),
                        next: $('#next3')
                    }
                });
            });
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
////////////////////////////////////////////////////////////////////////////////////           
            function getTimeRemaining(endtime) {
                var t = Date.parse(endtime) - Date.parse(new Date());
                var seconds = Math.floor((t / 1000) % 60);
                var minutes = Math.floor((t / 1000 / 60) % 60);
                var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
                var days = Math.floor(t / (1000 * 60 * 60 * 24));
                return {
                    'total': t,
                    'days': days,
                    'hours': hours,
                    'minutes': minutes,
                    'seconds': seconds
                };
            }

            function initializeClock(id, endtime) {
                var clock = document.getElementById(id);
                var daysSpan = clock.querySelector('.days');
                var hoursSpan = clock.querySelector('.hours');
                var minutesSpan = clock.querySelector('.minutes');
                var secondsSpan = clock.querySelector('.seconds');

                function updateClock() {
                    var t = getTimeRemaining(endtime);

                    daysSpan.innerHTML = t.days;
                    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                    if (t.total <= 0) {
                        clearInterval(timeinterval);
                    }
                }

                updateClock();
                var timeinterval = setInterval(updateClock, 1000);
            }

            var deadline = '2017-03-08';
            initializeClock('countdown', deadline);
/////////////////////////////////////////////////////////////////////////////            
            $('select').wSelect();
        </script>
    </body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         