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
        <link href="/js/jquery/plugins/noUiSlider.8.5.1/nouislider.min.css" rel="stylesheet">
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
        <div class="shop">
            <?= require_tpl('common/header') ?>
            <div class="main-product">
                <div class="lwrap" data-flex="stripe" data-flex-480="vstripe">
                    <figure><img src="/images/img14.jpg" width="571" height="677" alt=""><a href="#" class="btn btn-default">Shop Now</a></figure>
                    <div data-flex="stripe w">
                        <figure>
                            <img src="/images/img13.jpg" width="270" height="3318" alt="">
                            <figcaption data-flex="vaxis" data-childs="col -center">
                                <div>
                                    <span>Wooden Spoon</span>
                                    <a href="#" class="btn btn-plus"></a>
                                </div>
                                <a href="#" class="btn btn-default">Shop Now</a>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="/images/img15.jpg" width="270" height="318" alt="">
                            <figcaption data-flex="vaxis" data-childs="col -center">
                                <div>
                                    <span>Wooden Spoon</span>
                                    <a href="#" class="btn btn-plus"></a>
                                </div>
                                <a href="#" class="btn btn-default">Shop Now</a>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="/images/img16.jpg" width="270" height="329" alt="">
                            <figcaption data-flex="vaxis" data-childs="col -center">
                                <div>
                                    <span>Wooden Spoon</span>
                                    <a href="#" class="btn btn-plus"></a>
                                </div>
                                <a href="#" class="btn btn-default">Shop Now</a>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="/images/img17.jpg" width="270" height="329" alt="">
                            <figcaption data-flex="vaxis" data-childs="col -center">
                                <div>
                                    <span>Wooden Spoon</span>
                                    <a href="#" class="btn btn-plus"></a>
                                </div>
                                <a href="#" class="btn btn-default">Shop Now</a>
                            </figcaption>
                        </figure>
                    </div>
                </div> 
            </div>
            <div class="lwrap" data-flex="stripe" data-flex-640="vstripe">
                <div class="content">
                    <div class="sorting" data-flex="axis">
                        <select class="select-sorting">
                            <option>Default Sorting</option>
                            <option>Default Sorting</option>
                            <option>Default Sorting</option>
                            <option>Default Sorting</option>
                            <option>Default Sorting</option>
                        </select>
                        <span>Showing all <mark>12</mark> results of <mark>200</mark> results</span>
                    </div>
                    <div data-flex="stripe w" class="products">
                        <figure data-childs="col center -center">
                            <img src="/images/img1.jpg" width="271" height="359" alt="">
                            <div>
                                <a href="#" class="btn btn-overlay"><i class="icon-zoom"></i></a>
                                <a href="#" class="btn btn-overlay"><i class="icon-heart"></i></a>
                            </div>
                            <figcaption><span>Black Metal Spoon Set</span><mark>$120</mark></figcaption>
                        </figure>
                        <figure data-childs="col center -center">
                            <img src="/images/img4.jpg" width="271" height="359" alt="">
                            <div>
                                <a href="#" class="btn btn-overlay"><i class="icon-zoom"></i></a>
                                <a href="#" class="btn btn-overlay"><i class="icon-heart"></i></a>
                            </div>
                            <figcaption><span>Inhouse Planter</span><mark>$85</mark></figcaption>
                        </figure>
                        <figure data-childs="col center -center">
                            <img src="/images/img1.jpg" width="271" height="359" alt="">
                            <div>
                                <a href="#" class="btn btn-overlay"><i class="icon-zoom"></i></a>
                                <a href="#" class="btn btn-overlay"><i class="icon-heart"></i></a>
                            </div>
                            <figcaption><span>Portable Books Shelf</span><mark>$45</mark></figcaption>
                        </figure>                       
                        <figure data-childs="col center -center">
                            <img src="/images/img4.jpg" width="271" height="359" alt="">
                            <div>                                
                                <a href="#" class="btn btn-overlay"><i class="icon-zoom"></i></a>
                                <a href="#" class="btn btn-overlay"><i class="icon-heart"></i></a>
                            </div>
                            <figcaption><span>Creative Pen Set</span><mark>$25</mark></figcaption>
                        </figure>
                        <figure data-childs="col center -center">
                            <span class="lbl lbl-sold">Sold Out</span>
                            <img src="/images/img1.jpg" width="271" height="359" alt="">
                            <div>
                                <a href="#" class="btn btn-overlay"><i class="icon-zoom"></i></a>
                                <a href="#" class="btn btn-overlay"><i class="icon-heart"></i></a>
                            </div>
                            <figcaption><span>Wooden Egg Stand</span><mark>$55</mark></figcaption>
                        </figure>
                        <figure data-childs="col center -center">
                            <img src="/images/img4.jpg" width="271" height="359" alt="">
                            <div>
                                <a href="#" class="btn btn-overlay"><i class="icon-zoom"></i></a>
                                <a href="#" class="btn btn-overlay"><i class="icon-heart"></i></a>
                            </div>
                            <figcaption><span>Polythine Text Bag</span><mark>$15</mark></figcaption>
                        </figure>
                        <figure data-childs="col center -center">
                            <img src="/images/img1.jpg" width="271" height="359" alt="">
                            <div>
                                <a href="#" class="btn btn-overlay"><i class="icon-zoom"></i></a>
                                <a href="#" class="btn btn-overlay"><i class="icon-heart"></i></a>
                            </div>                            
                            <figcaption><span>Carry Bottles Stand</span><mark>$33</mark></figcaption>
                        </figure>
                        <figure data-childs="col center -center">
                            <img src="/images/img4.jpg" width="271" height="359" alt="">
                            <div>
                                <a href="#" class="btn btn-overlay"><i class="icon-zoom"></i></a>
                                <a href="#" class="btn btn-overlay"><i class="icon-heart"></i></a>
                            </div>
                            <figcaption><span>Black & White Watch</span><mark>$15</mark></figcaption>
                        </figure>
                        <figure data-childs="col center -center">
                            <img src="/images/img1.jpg" width="271" height="359" alt="">
                            <div>
                                <a href="#" class="btn btn-overlay"><i class="icon-zoom"></i></a>
                                <a href="#" class="btn btn-overlay"><i class="icon-heart"></i></a>
                            </div>
                            <figcaption><span>Chandlier Lights</span><mark>$15</mark></figcaption>
                        </figure>
                        <figure data-childs="col center -center">
                            <img src="/images/img4.jpg" width="271" height="359" alt="">
                            <div>
                                <a href="#" class="btn btn-overlay"><i class="icon-zoom"></i></a>
                                <a href="#" class="btn btn-overlay"><i class="icon-heart"></i></a>
                            </div>
                            <figcaption><span>Wall Mount Lights</span><mark>$25</mark></figcaption>
                        </figure>
                        <figure data-childs="col center -center">
                            <img src="/images/img1.jpg" width="271" height="359" alt="">
                            <div>
                                <a href="#" class="btn btn-overlay"><i class="icon-zoom"></i></a>
                                <a href="#" class="btn btn-overlay"><i class="icon-heart"></i></a>
                            </div>
                            <figcaption><span>WHite Wall Clock</span><mark>$55</mark></figcaption>
                        </figure>
                        <figure data-childs="col center -center">
                            <img src="/images/img4.jpg" width="271" height="359" alt="">
                            <div>
                                <a href="#" class="btn btn-overlay"><i class="icon-zoom"></i></a>
                                <a href="#" class="btn btn-overlay"><i class="icon-heart"></i></a>
                            </div>
                            <figcaption><span>Power LED Lights</span><mark>$45</mark></figcaption>
                        </figure>
                    </div>
                    <div class="pagination" data-flex="center w" data-childs="center -center">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">.....</a>
                        <a href="#">20</a>
                        <a href="#">Next</a>
                    </div>
                </div>
                <aside class="sidebar" data-flex-640="-start between w">
                    <form action="#" method="post" data-flex class="search-sidebar">
                        <input type="search" name="search" id="searchside4" placeholder="Search">
                        <button class="btn btn-search"></button>
                    </form>
                    <section class="categories-check">
                        <input type="checkbox" id="c1" class="expand">
                        <div class="hdr" data-flex="axis">
                            <h3>categories</h3>                            
                            <label for="c1" class="btn btn-expand"></label>
                        </div>
                        <form action="#" method="post" data-flex="col -start" data-childs="-start">
                            <input type="checkbox" class="check all" name="check" id="check1-1">
                            <label for="check1-1">All</label>
                            <input type="checkbox" class="check" name="check1" id="check1-2">
                            <label for="check1-2">Soft Toys</label>
                            <input type="checkbox" class="check" name="check1" id="check1-3">
                            <label for="check1-3">Trendy Key Chains</label>
                            <input type="checkbox" class="check" name="check1" id="check1-4">
                            <label for="check1-4">Flower Bouquet</label>
                            <input type="checkbox" class="check" name="check1" id="check1-5">
                            <label for="check1-5">Ceramic Dolls</label>
                            <input type="checkbox" class="check" name="check1" id="check1-6">
                            <label for="check1-6">Fancy Mug</label>
                            <input type="checkbox" class="check" name="check1" id="check1-7">
                            <label for="check1-7">Candles</label>
                            <input type="checkbox" class="check" name="check1" id="check1-8">
                            <label for="check1-8">Other</label>
                        </form>
                    </section>
                    <section class="price-wrap">
                        <input type="checkbox" id="c2" class="expand">
                        <div class="hdr" data-flex="axis">
                            <h3>price</h3>                            
                            <label for="c2" class="btn btn-expand"></label>
                        </div>
                        <form  action="#" method="post" data-flex="col -center">
                            <div data-flex="center -center">
                                <span class="example-val" id="slider-snap-value-lower"></span>                              
                                <span>&nbsp;-&nbsp;</span>
                                <span class="example-val" id="slider-snap-value-upper"></span>
                            </div>
                            <div id="slider-snap"></div>
                            <a href="#" class="btn btn-default">Filter</a>
                        </form>
                    </section>
                    <section class="brand">
                        <input type="checkbox" id="c3" class="expand">
                        <div class="hdr" data-flex="axis">
                            <h3>brand</h3>                            
                            <label for="c3" class="btn btn-expand"></label>
                        </div>
                        <form  action="#" method="post" data-flex="col -start" data-childs="-start">
                            <input type="checkbox" class="check all" name="check2" id="check2-1">
                            <label for="check2-1">All</label>
                            <input type="checkbox" class="check" name="check2" id="check2-2">
                            <label for="check2-2">Watches</label>
                            <input type="checkbox" class="check" name="check2" id="check2-3">
                            <label for="check2-3">Bags</label>
                            <input type="checkbox" class="check" name="check2" id="check2-4">
                            <label for="check2-4">Kitchen Items</label>
                            <input type="checkbox" class="check" name="check2" id="check2-5">
                            <label for="check2-5">Book Rack</label>
                            <input type="checkbox" class="check" name="check2" id="check2-6">
                            <label for="check2-6">Light Sets</label>
                            <input type="checkbox" class="check" name="check2" id="check2-7">
                            <label for="check2-7">Mugs</label>
                            <input type="checkbox" class="check" name="check2" id="check2-8">
                            <label for="check2-8">Clock</label>
                            <input type="checkbox" class="check" name="check2" id="check2-9">
                            <label for="check2-9">Pen Set</label>
                            <input type="checkbox" class="check" name="check2" id="check2-10">
                            <label for="check2-10">Tables</label>
                            <input type="checkbox" class="check" name="check2" id="check2-11">
                            <label for="check2-11">Chairs</label>
                        </form>
                    </section>
                    <section class="rating">
                        <input type="checkbox" id="c4" class="expand">
                        <div class="hdr" data-flex="axis">
                            <h3>product rating</h3>
                            <label for="c4" class="btn btn-expand"></label>
                        </div>
                        <form action="#" method="post" data-flex="col -start" data-childs="-start">
                            <input type="checkbox" class="check" name="check3" id="check3-1">
                            <label for="check3-1"><img src="/images/rating5.png" width="85" height="13" alt=""></label>
                            <input type="checkbox" class="check" name="check3" id="check3-1">
                            <label for="check3-1"><img src="/images/rating4.png" width="85" height="13" alt=""></label>
                            <input type="checkbox" class="check" name="check3" id="check3-1">
                            <label for="check3-1"><img src="/images/rating3.png" width="85" height="13" alt=""></label>
                            <input type="checkbox" class="check" name="check3" id="check3-1">
                            <label for="check3-1"><img src="/images/rating2.png" width="85" height="13" alt=""></label>
                            <input type="checkbox" class="check" name="check3" id="check3-1">
                            <label for="check3-1"><img src="/images/rating1.png" width="85" height="13" alt=""></label>
                        </form>
                    </section>
                    <section class="discount">
                        <input type="checkbox" id="c5" class="expand">
                        <div class="hdr" data-flex="axis">
                            <h3>discount</h3>                            
                            <label for="c5" class="btn btn-expand"></label>
                        </div>
                        <form  action="#" method="post" data-flex="col -start" data-childs="-start">
                            <input type="checkbox" class="check" name="check2" id="check4-1">
                            <label for="check4-1">Less than 5%</label>
                            <input type="checkbox" class="check" name="check2" id="check4-2">
                            <label for="check4-2">5% - 10%</label>
                            <input type="checkbox" class="check" name="check2" id="check4-3">
                            <label for="check4-3">10% - 20%</label>
                            <input type="checkbox" class="check" name="check2" id="check4-4">
                            <label for="check4-4">20% - 30%</label>
                            <input type="checkbox" class="check" name="check2" id="check4-5">
                            <label for="check4-5">30% - 40%</label>
                        </form>
                    </section>
                    <section class="availability-wrap">
                        <input type="checkbox" id="c6" class="expand">
                        <div class="hdr" data-flex="axis">
                            <h3>availabi&shy;lity</h3>                            
                            <label for="c6" class="btn btn-expand"></label>
                        </div>
                        <form  action="#" method="post" data-flex="col -start" data-childs="-start">
                            <input type="checkbox" class="check all" name="check2" id="check5-1">
                            <label for="check5-1">All</label>
                            <input type="checkbox" class="check" name="check2" id="check5-2">
                            <label for="check5-2">Exclude Out of stock</label>
                            <input type="checkbox" class="check" name="check2" id="check5-3">
                            <label for="check5-3">Include Out of stock</label>
                        </form>
                    </section>
                </aside>
            </div>
        </div>
        <footer>
            <div class="lwrap footer-title" data-flex="center -center">
                <h2>popular items</h2>
            </div>
            <?= require_tpl('common/galleryalt') ?>
            <?= require_tpl('common/footer') ?>  
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
        <script src="/js/jquery/plugins/noUiSlider.8.5.1/nouislider.min.js"></script>
        <script src="/js/jquery/plugins/wnumb-1.0.2/wNumb.js"></script>
        <script>
            var snapSlider = document.getElementById('slider-snap');
            noUiSlider.create(snapSlider, {
                start: [10, 300],
                range: {
                    'min': 0,
                    'max': 372
                },
                format: wNumb({
                    decimals: 0,
                    prefix: '$'
                })
            });
            var snapValues = [
                document.getElementById('slider-snap-value-lower'),
                document.getElementById('slider-snap-value-upper')
            ];
            snapSlider.noUiSlider.on('update', function (values, handle) {
                snapValues[handle].innerHTML = values[handle];
            });
        </script>
    </body>
</html>

