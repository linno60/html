<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Products</title>
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link type="text/css" rel="stylesheet" href="/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/css/reset-elements.css">
        <link type="text/css" rel="stylesheet" href="/css/styles.css">    
    </head>
    <body>          
        <?= require_tpl('common/header') ?>       
        <section class="top-wrap products">
            <div class="top products" data-flex>
                <div></div>
                <div data-flex="col--center">
                    <div data-flex>
                        <div class="lbl lbl-default">$145,99</div>
                    <h1>Pink Shoes 2013 Collection</h1>
                    </div>
                    <p>Nunc non fermentum nunc. Sed ut ante eget leo tempor consequat sit amet eu orci. Donec dignissim dolor eget..</p>
                </div>
            </div>
        </section>
        <section class="filter-wrap">
            <form class="filter" data-flex="row-center-end">
                <label>Shop by</label>
                <span class="select">
                    <select>
                        <option selected>Brands</option>
                        <option>A-Z</option>
                        <option>Z-A</option>        
                    </select>
                </span>
                <span class="select">
                    <select>
                        <option selected>Categories</option>
                        <option>A-Z</option>
                        <option>Z-A</option>        
                    </select>
                </span>
                <span class="select">
                    <select data-flex="row-center-center">
                        <option selected>Price</option>
                        <option>A-Z</option>
                        <option>Z-A</option>        
                    </select>
                </span>
            </form>
        </section>
        <section class="seller-wrap products">
            <div class="hdr" data-flex="row-center-between">
                <div data-flex>
                    <h2>All Products</h2>
                    <ul class="breadcrumb" data-flex="row-center">
                        <li><a href="#">Home</a></li>
                        <li>>&ensp;All Products</li>
                    </ul>
                </div>
                <form action="#" method="post" data-flex="row-center">
                    <label>View as</label>
                    <a href="#" class="btn btn-view active"><i class="icon-grid"></i></a>
                    <a href="#" class="btn btn-view"><i class="icon-list"></i></a>
                    <span class="select">
                        <select>
                            <option selected>Sort alphabetically</option>
                            <option>A-Z</option>
                            <option>Z-A</option>         
                        </select>
                    </span>
                </form>
            </div>
            <div class="grid" data-flex="row--around">
                <figure href="#" data-flex="col">                    
                    <img src="images/img1.png">
                    <div class="caption" data-flex="row-center">
                        <span class="title">Even&Odd</span>
                        <div class="actions" data-flex="row-center">
                            <a href="#" class="btn"><i class="icon-eye"></i></a>
                            <a href="#" class="btn"><i class="icon-star"></i></a>
                            <a href="#" class="btn"><i class="icon-share"></i></a>
                            <a href="#" class="btn"><i class="icon-cart"></i></a>
                        </div>
                    </div>
                    <div class="lbl lbl-default">$145.99</div>
                </figure> 
                <figure href="#" data-flex="col"> 
                    <div class="lbl lbl-sale">on sale!</div>
                    <img src="images/img2.png">
                    <div class="caption" data-flex="row-center">
                        <span class="title">Even&Odd</span>
                        <div class="actions" data-flex="row-center">
                            <a href="#" class="btn"><i class="icon-eye"></i></a>
                            <a href="#" class="btn"><i class="icon-star"></i></a>
                            <a href="#" class="btn"><i class="icon-share"></i></a>
                            <a href="#" class="btn"><i class="icon-cart"></i></a>
                        </div>
                    </div>
                    <div class="lbl lbl-default">$145.99</div>
                </figure> 
                <figure href="#" data-flex="col">                    
                    <img src="images/img3.png">
                    <div class="caption" data-flex="row-center">
                        <span class="title">Buffalo Decollete</span>
                        <div class="actions" data-flex="row-center">
                            <a href="#" class="btn"><i class="icon-eye"></i></a>
                            <a href="#" class="btn"><i class="icon-star"></i></a>
                            <a href="#" class="btn"><i class="icon-share"></i></a>
                            <a href="#" class="btn"><i class="icon-cart"></i></a>
                        </div>
                    </div>
                    <div class="lbl lbl-default">$145.99</div>
                </figure>
                <figure href="#" data-flex="col">                    
                    <img src="images/img4.png">
                    <div class="caption" data-flex="row-center">
                        <span class="title">Even&Odd</span>
                        <div class="actions" data-flex="row-center">
                            <a href="#" class="btn"><i class="icon-eye"></i></a>
                            <a href="#" class="btn"><i class="icon-star"></i></a>
                            <a href="#" class="btn"><i class="icon-share"></i></a>
                            <a href="#" class="btn"><i class="icon-cart"></i></a>
                        </div>
                    </div>
                    <div class="lbl lbl-default">$145.99</div>
                </figure> 
                <figure href="#" data-flex="col">                    
                    <img src="images/img5.png">
                    <div class="caption" data-flex="row-center">
                        <span class="title">Even&Odd</span>
                        <div class="actions" data-flex="row-center">
                            <a href="#" class="btn"><i class="icon-eye"></i></a>
                            <a href="#" class="btn"><i class="icon-star"></i></a>
                            <a href="#" class="btn"><i class="icon-share"></i></a>
                            <a href="#" class="btn"><i class="icon-cart"></i></a>
                        </div>
                    </div>
                    <div class="lbl lbl-default">$145.99</div>
                </figure> 
                <figure href="#" data-flex="col"> 
                    <div class="lbl lbl-stock">out of stock</div>
                    <img src="images/img6.png">
                    <div class="caption" data-flex="row-center">
                        <span class="title">Buffalo Decollete</span>
                        <div class="actions" data-flex="row-center">
                            <a href="#" class="btn"><i class="icon-eye"></i></a>
                            <a href="#" class="btn"><i class="icon-star"></i></a>
                            <a href="#" class="btn"><i class="icon-share"></i></a>
                            <a href="#" class="btn"><i class="icon-cart"></i></a>
                        </div>
                    </div>
                    <div class="lbl lbl-default">$145.99</div>
                </figure>
                <figure href="#" data-flex="col">                    
                    <img src="images/img1.png">
                    <div class="caption" data-flex="row-center">
                        <span class="title">Even&Odd</span>
                        <div class="actions" data-flex="row-center">
                            <a href="#" class="btn"><i class="icon-eye"></i></a>
                            <a href="#" class="btn"><i class="icon-star"></i></a>
                            <a href="#" class="btn"><i class="icon-share"></i></a>
                            <a href="#" class="btn"><i class="icon-cart"></i></a>
                        </div>
                    </div>
                    <div class="lbl lbl-default">$145.99</div>
                </figure> 
                <figure href="#" data-flex="col"> 
                    <div class="lbl lbl-sale">on sale!</div>
                    <img src="images/img2.png">
                    <div class="caption" data-flex="row-center">
                        <span class="title">Even&Odd</span>
                        <div class="actions" data-flex="row-center">
                            <a href="#" class="btn"><i class="icon-eye"></i></a>
                            <a href="#" class="btn"><i class="icon-star"></i></a>
                            <a href="#" class="btn"><i class="icon-share"></i></a>
                            <a href="#" class="btn"><i class="icon-cart"></i></a>
                        </div>
                    </div>
                    <div class="lbl lbl-default">$145.99</div>
                </figure> 
                <figure href="#" data-flex="col">                    
                    <img src="images/img3.png">
                    <div class="caption" data-flex="row-center">
                        <span class="title">Buffalo Decollete</span>
                        <div class="actions" data-flex="row-center">
                            <a href="#" class="btn"><i class="icon-eye"></i></a>
                            <a href="#" class="btn"><i class="icon-star"></i></a>
                            <a href="#" class="btn"><i class="icon-share"></i></a>
                            <a href="#" class="btn"><i class="icon-cart"></i></a>
                        </div>
                    </div>
                    <div class="lbl lbl-default">$145.99</div>
                </figure>
            </div>
        </section>
        <?= require_tpl('common/footer') ?>
    </body>
</html>
