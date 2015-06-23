<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Category</title>
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
        <div class="slider-mobile-wrap">
            <div class="slider-mobile">
                <div>
                    <img src="images/iphone4.png" alt=""> 
                </div>
                <div>
                    <h1>Mobile</h1>
                    <p>Aenean dictum libero vitae magna sagittis, eu convallis dolor blandit. Fusce consectetur tincidunt pretium. Etiam non tellus massa. Aenean tincidunt in augue nec tempus. Nulla porta libero sit amet lorem pellentesque posuere...</p>
                    <a href="#" class="btn btn-more">learn more</a>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap alt">
            <ul class="breadcrumb">
                <li><a href="#">Home</a><span>></span></li>
                <li><a href="#">Electronics</a><span>></span></li>
                <li>Mobile</li>
            </ul> 
        </div>
        <div class="wrap-base category">
            <section class="content">
                <form action="#" method="post" class="filter main">
                    <div class="filter-left">
                        <button><span class="btn btn-compare">compare</span></button>
                        <div>
                            <label class="lbl-filter">sort by:</label>
                            <span class="select select-filter">
                                <select>
                                    <option selected="">Default</option>
                                    <option>Name (A - Z)</option>
                                    <option>Name (Z - A)</option>
                                    <option>Price (Low &gt; High)</option>
                                    <option>Price (High &gt; Low)</option>
                                    <option>Rating (Highest)</option>
                                    <option>Rating (Lowest)</option>
                                    <option>Model (A - Z)</option>
                                    <option>Model (Z - A)</option>           
                                </select>
                            </span>
                        </div>
                        <div class="btn btn-grid active"><i class="icon-grid"></i></div>
                        <div class="btn btn-list"><i class="icon-list"></i></div>
                    </div>
                    <div class="filter-right">
                        <div class="select-wrap">
                            <label class="lbl-filter">view:</label>
                            <span class="select select-filter view">
                                <select>
                                    <option selected="">15</option>
                                    <option>20</option>
                                    <option>30</option>
                                    <option>40</option>
                                    <option>50</option>
                                    <option>all</option>            
                                </select>
                            </span>
                        </div>
                        <ul class="pagination clearfix">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next"><a href="#"><i class="icon-page-arrow"></i></a></li>
                        </ul>
                        <div class="grid-list">
                            <div class="btn btn-grid active"><i class="icon-grid"></i></div>
                            <div class="btn btn-list"><i class="icon-list"></i></div>
                        </div>
                    </div>
                </form>
                <form action="#" method="post" class="filter alt">
                    <div class="filter-left">
                        <button><span class="btn btn-compare">compare</span></button>
                        <label class="lbl-filter">view:</label>
                        <span class="select select-filter view">
                            <select>
                                <option selected="">15</option>
                                <option>20</option>
                                <option>30</option>
                                <option>40</option>
                                <option>50</option>
                                <option>all</option>            
                            </select>
                        </span>
                        </span>
                        <div class="btn btn-grid active"><i class="icon-grid"></i></div>
                        <div class="btn btn-list"><i class="icon-list"></i></div>
                    </div>
                    <div class="filter-right">
                        <label class="lbl-filter">view:</label>
                        <span class="select select-filter">
                            <select>
                                <option selected="">15</option>
                                <option>20</option>
                                <option>30</option>
                                <option>40</option>
                                <option>50</option>
                                <option>all</option>            
                            </select>
                        </span>
                        <ul class="pagination clearfix">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next"><a href="#"><i class="icon-page-arrow"></i></a></li>
                        </ul>
                    </div>
                </form>
                <div class="grid">
                    <figure>
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-price">$40</div>
                            <img src="images/shape1.png" alt="">                            
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result"></div>
                            </div>                                        
                        </div>
                        <figcaption><a href="#">Lowlands Lace Blouse</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure> 
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-price">$435</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings"></div>                                        
                        </div>
                        <figcaption><a href="#">Samsung Galaxy Ace</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure>                                    
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-price">$19</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result"></div>
                            </div>                                        
                        </div>
                        <figcaption><a href="#">Iphone Case Cover Original</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure>                                   
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-price">$1050</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings"></div>                                        
                        </div>
                        <figcaption><a href="#">PowerMac Desktop Computer</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure>                                    
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-price"><span>$870</span>$710</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result"></div>
                            </div>                                        
                        </div>
                        <figcaption><a href="#">Cam Optia AF Webcam</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure>   
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-price">$168</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result"></div>
                            </div>                                        
                        </div>
                        <figcaption><a href="#">Cuisinart Brew Central Coffeemaker</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure> 
                    <figure class="hidden-category">
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-discount">-45%</div>
                            <div class="lbl lbl-price">$40</div>
                            <img src="images/shape1.png" alt="">                            
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result"></div>
                            </div>                                        
                        </div>
                        <figcaption><a href="#">Sony VAIO Tap 20</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure class="hidden-category"> 
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-discount">-30%</div>
                            <div class="lbl lbl-price">$435</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings"></div>                                        
                        </div>
                        <figcaption><a href="#">BenQ E2220HD</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure class="hidden-category">                                    
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-price">$19</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result"></div>
                            </div>                                        
                        </div>
                        <figcaption><a href="#">Philips MP Digital Camera</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <div></div>
                    <figure class="hidden-category">                                   
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-price">$1875</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings"></div>                                        
                        </div>
                        <figcaption><a href="#">Asus UX 21 Tap</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure class="hidden hidden-category">                                    
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-price">$75</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result"></div>
                            </div>                                        
                        </div>
                        <figcaption><a href="#">BenQ E2220HD</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure class="hidden hidden-category">   
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-price disable">$378</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result"></div>
                            </div>                                        
                        </div>
                        <figcaption><a href="#">Nikon COOLPIX Digital Camera</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add disable"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add disable">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like disable"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check disable"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure class="hidden hidden-category">                                   
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-price">$1054</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings"></div>                                        
                        </div>
                        <figcaption><a href="#">Maytag French Door Refrigerator</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure class="hidden hidden-category">                                    
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-price">$147</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result"></div>
                            </div>                                        
                        </div>
                        <figcaption><a href="#">Focal 706 V Stand Mount Speakers</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure class="hidden hidden-category">   
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-price">$38</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings">
                                <div class="ratings-result"></div>
                            </div>                                        
                        </div>
                        <figcaption><a href="#">Nikon COOLPIX Digital Camera</a></figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="compare-product" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                </div>
                <div class="filter bottom">
                    <div class="select-wrap">
                        <label class="lbl-filter">view:</label>
                        <span class="select select-filter view">
                            <select>
                                <option selected="">15</option>
                                <option>20</option>
                                <option>30</option>
                                <option>40</option>
                                <option>50</option>
                                <option>all</option>            
                            </select>
                        </span>
                    </div>
                    <ul class="pagination clearfix">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="next"><a href="#"><i class="icon-page-arrow"></i></a></li>
                    </ul>
                </div>
            </section>

            <aside>
                <div class="accordion category">
                    <input type="checkbox" name="accordion" id="acc1" checked>
                    <label for="acc1">category<span class="btn"><i class="icon-accarrow"></i></span></label>                    
                    <div class="acc-panel list-panel">
                        <ul>
                            <li>
                                <input type="checkbox" name="check-plus" id="l1" checked>
                                <label for="l1"><span>+</span>Mobile Phones (341)</label>
                            </li>
                            <li>
                                <input type="checkbox" name="check-plus" id="l2">
                                <label for="l2"><span>+</span>Smartphones (55)</label>
                            </li>
                            <li>
                                <input type="checkbox" name="check-plus" id="l3">
                                <label for="l3"><span>+</span>Communicators (24)</label>
                            </li>
                            <li>
                                <input type="checkbox" name="check-plus" id="l4">
                                <label for="l4"><span>+</span>CDMA Phones (14)</label>
                            </li>
                            <li>
                                <input type="checkbox" name="check-plus" id="l5">
                                <label for="l5"><span>+</span>Accessories (83)</label>
                            </li>
                            <li>
                                <input type="checkbox" name="check-plus" id="l6">
                                <label for="l6"><span>+</span>Chargers (8)</label>
                            </li>
                            <li>
                                <input type="checkbox" name="check-plus" id="l7">
                                <label for="l7"><span>+</span>Memory Cards (6)</label>
                            </li>
                            <li>
                                <input type="checkbox" name="check-plus" id="l8">
                                <label for="l8"><span>+</span>Protectors (12)</label>
                            </li>
                            <li>
                                <input type="checkbox" name="check-plus" id="l9">
                                <label for="l9"><span>+</span>Travelism (5)</label>
                            </li>
                        </ul>
                        <div class="scroll-wrap">
                            <div class="scroll">
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <input type="checkbox" name="accordion" id="acc2">
                    <label for="acc2">brand<span class="btn"><i class="icon-accarrow"></i></span></label>                    
                    <div class="acc-panel">
                        <ul>
                            <li><a href="#">Apple (20)</a></li>
                        </ul>
                    </div>
                    <input type="checkbox" name="accordion" id="acc3" checked>
                    <label for="acc3">price<span class="btn"><i class="icon-accarrow"></i></span></label>                    
                    <div class="acc-panel range-panel">
                        <form action="#" method="post">
                            <div class="range-wrap">
                                <div class="range">
                                    <div class="range-handle"></div>
                                    <div class="range-handle"></div>
                                </div>
                            </div>
                            <div class="wrap-input">
                                <label for="r1">from</label>
                                <input type="text" id="r1">
                                <label for="r2">to</label>
                                <input type="text" id="r2">
                            </div>
                            <div>
                                <button><span class="btn btn-range ok">ok</span></button> 
                                <button type="reset"><span class="btn btn-range">clear</span></button> 
                            </div>
                        </form>
                    </div>
                    <input type="checkbox" name="accordion" id="acc4" checked>
                    <label for="acc4">color<span class="btn"><i class="icon-accarrow"></i></span></label>                    
                    <div class="acc-panel color-panel">
                        <input type="checkbox" id="c1" name="color">
                            <label for="c1"></label>
                        <input type="checkbox" id="c2" name="color">
                            <label for="c2"></label>
                        <input type="checkbox" id="c3" name="color">
                            <label for="c3"></label>
                        <input type="checkbox" id="c4" name="color">
                            <label for="c4"></label>
                        <input type="checkbox" id="c5" name="color">
                            <label for="c5"></label>
                        <input type="checkbox" id="c6" name="color">
                            <label for="c6"></label>
                        <input type="checkbox" id="c7" name="color">
                            <label for="c7"></label>
                        <input type="checkbox" id="c8" name="color">
                            <label for="c8"></label>
                        <input type="checkbox" id="c9" name="color">
                            <label for="c9"></label>
                        <input type="checkbox" id="c10" name="color">
                            <label for="c10"></label>
                        <input type="checkbox" id="c11" name="color">
                            <label for="c11"></label>
                        <input type="checkbox" id="c12" name="color">
                            <label for="c12"></label>
                        <input type="checkbox" id="c13" name="color">
                            <label for="c13"></label>
                        <input type="checkbox" id="c14" name="color">
                            <label for="c14"></label>
                        <input type="checkbox" id="c15" name="color">
                            <label for="c15"></label>
                    </div>
                    <input type="checkbox" name="accordion" id="acc5">
                    <label for="acc5">size<span class="btn"><i class="icon-accarrow"></i></span></label>                    
                    <div class="acc-panel"></div>
                    <input type="checkbox" name="accordion" id="acc6">
                    <label for="acc6">weight<span class="btn"><i class="icon-accarrow"></i></span></label>                    
                    <div class="acc-panel"></div>
                    <input type="checkbox" name="accordion" id="acc7">
                    <label for="acc7">processor<span class="btn"><i class="icon-accarrow"></i></span></label>                    
                    <div class="acc-panel"></div>
                </div>
                <section class="featured">
                    <div class="hdr-wrap">
                        <h3>featured</h3>
                        <div class="arrows">
                            <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-small-left"></i></a>
                            <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-small-right"></i></a>
                        </div>
                    </div>
                    <div class="featured-product">
                        <a href="#">
                            <img src="images/shape5.png" alt="">
                        </a>
                        <div>
                            <h5><a href="#">Jacket Suiting Blazer</a></h5>
                            <div class="ratings-result"></div>
                            <span>$40</span>
                        </div>
                    </div>
                    <div class="featured-product">
                        <a href="#">
                            <img src="images/shape5.png" alt="">
                        </a>
                        <div>
                            <h5><a href="#">Gap Graphic Cuffed</a></h5>
                            <div class="ratings-result"></div>
                            <span>$18.5</span>
                        </div>
                    </div>
                    <div class="featured-product">
                        <a href="#">
                            <img src="images/shape5.png" alt="">
                        </a>
                        <div>
                            <h5><a href="#">Women's Lauren Dress</a></h5>
                            <span>$30</span>
                        </div>
                    </div>
                    <div class="featured-product">
                        <a href="#">
                            <img src="images/shape5.png" alt="">
                        </a>
                        <div>
                            <h5><a href="#">Woman's Tulip Dress</a></h5>
                            <span>$22.8</span>
                        </div>
                    </div>
                </section>
                <section class="banners">
                    <div>
                        <h1>free <span>shipping</span></h1>
                        <p>on orders over <span>$150</p>
                        <img src="/images/truck.png" width="168" height="120" alt="">
                        <p>The offers is valid on all our store item!</p>
                    </div>                    
                    <div class="controls">
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                </section>
            </aside>
        </div>
        <?= require_tpl('common/footer') ?>
    </body>
</html>
