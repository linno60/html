<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Shopping cart</title>
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
                <li>Shopping Cart</li>
            </ul> 
        </div>
        <div class="wrap-base column cart">
            <h1 class="h1">Shopping Cart</h1>
            <p>Just this week, you can use the free premium delivery.</p>
            <table class="tbl-cart">
                <thead>
                    <tr>
                        <th class="hidden">3 Products In Your Cart</th>
                        <th>product name</th>
                        <th>product code</th>
                        <th>unit price</th>
                        <th>quantity</th>
                        <th>subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <img src="images/shape9.png" alt=""> 
                                <div>
                                    <h2>Lowlands Lace Blouse</h2>
                                    <dl>
                                        <dt>Color:</dt><dd> Black</dd>
                                        <dt>Size:</dt><dd> XL</dd>
                                    </dl>
                                </div>
                                <div class="narrow">
                                    <dl>
                                        <dt>Product Code:</dt><dd> MP125984154</dd>
                                        <dt>Unit Price:</dt><dd class="price"> $130</dd>
                                    </dl>
                                    <div class="spinner">
                                        <input type="text" placeholder="1">
                                        <div class="btns">
                                            <div class="btn"><i class="icon-spinner-up"></i></div>
                                            <div class="btn"><i class="icon-spinner-down"></i></div>
                                        </div>
                                    </div>
                                    <dl>
                                        <dt>Subtotal:</dt><dd class="subtotal"> $130</dd>
                                    </dl>
                                    <a href="#" class="btn btn-close"><i class="icon-close"></i></a> 
                                </div>                                
                            </div>                            
                        </td>
                        <td class="product-code">
                            mp125984154
                        </td>
                        <td>
                            <span class="price">$130</span>
                        </td>
                        <td>
                            <div class="spinner">
                                <input type="text" placeholder="1">
                                <div class="btns">
                                    <div class="btn"><i class="icon-spinner-up"></i></div>
                                    <div class="btn"><i class="icon-spinner-down"></i></div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="subtotal-wrap">
                                <span class="subtotal">$130</span>
                            <a href="#" class="btn btn-close"><i class="icon-close"></i></a> 
                            </div>                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <img src="images/shape9.png" alt=""> 
                                <div>
                                    <h2>Samsung Galaxy Ace</h2>
                                    <dl>
                                        <dt>Color:</dt><dd> Black</dd>
                                        <dt>Size:</dt><dd> XL</dd>
                                    </dl>
                                </div>
                                <div class="narrow">
                                    <dl>
                                        <dt>Product Code:</dt><dd> MP125984154</dd>
                                        <dt>Unit Price:</dt><dd class="price"> $130</dd>
                                    </dl>
                                    <div class="spinner">
                                        <input type="text" placeholder="2">
                                        <div class="btns">
                                            <div class="btn"><i class="icon-spinner-up"></i></div>
                                            <div class="btn"><i class="icon-spinner-down"></i></div>
                                        </div>
                                    </div>
                                    <dl>
                                        <dt>Subtotal:</dt><dd class="subtotal"> $130</dd>
                                    </dl>
                                    <a href="#" class="btn btn-close"><i class="icon-close"></i></a> 
                                </div> 
                            </div>
                        </td>
                        <td class="product-code">
                            mp125984154
                        </td>
                        <td>
                            <span class="price">$1475</span>
                        </td>
                        <td>
                            <div class="spinner">
                                <input type="text" placeholder="2">
                                <div class="btns">
                                    <div class="btn"><i class="icon-spinner-up"></i></div>
                                    <div class="btn"><i class="icon-spinner-down"></i></div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="subtotal-wrap">
                            <span class="subtotal">$1475</span>
                            <a href="#" class="btn btn-close"><i class="icon-close"></i></a> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <img src="images/shape9.png" alt=""> 
                                <div>
                                    <h2>Iphone Case Cover Original</h2>
                                    <dl>
                                        <dt>Color:</dt><dd> Black</dd>
                                        <dt>Size:</dt><dd> XL</dd>
                                    </dl>
                                </div>
                                <div class="narrow">
                                    <dl>
                                        <dt>Product Code:</dt><dd> MP125984154</dd>
                                        <dt>Unit Price:</dt><dd class="price"> $130</dd>
                                    </dl>
                                    <div class="spinner">
                                        <input type="text" placeholder="1">
                                        <div class="btns">
                                            <div class="btn"><i class="icon-spinner-up"></i></div>
                                            <div class="btn"><i class="icon-spinner-down"></i></div>
                                        </div>
                                    </div>
                                    <dl>
                                        <dt>Subtotal:</dt><dd class="subtotal"> $130</dd>
                                    </dl>
                                    <a href="#" class="btn btn-close"><i class="icon-close"></i></a> 
                                </div> 
                            </div>
                        </td>
                        <td class="product-code">
                            mp125984154
                        </td>
                        <td>
                            <span class="price">$1475</span>
                        </td>
                        <td>
                            <div class="spinner">
                                <input type="text" placeholder="1">
                                <div class="btns">
                                    <div class="btn"><i class="icon-spinner-up"></i></div>
                                    <div class="btn"><i class="icon-spinner-down"></i></div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="subtotal-wrap">
                            <span class="subtotal">$1475</span>
                            <a href="#" class="btn btn-close"><i class="icon-close"></i></a> 
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="product-middle cart">
                <div class="tab">
                    <input type="radio" id="tab1" name="tab-label" checked>
                    <label for="tab1">estimate shipping & taxes</label>
                    <div class="tab-pane">
                        <span>Enter your destination to get a shipping estimate</span>
                        <form action="#" method="post">  
                            <div>
                                <label>Country<span>*</span></label>
                                <span class="select select-quote">                            
                                    <select>
                                        <option selected>--Please Select--</option>
                                        <option>Germany</option>
                                        <option>Spain</option>
                                        <option>Italy</option>
                                        <option>France</option>           
                                    </select>
                                </span>
                            </div>
                            <div>
                                <label>Region/State<span>*</span></label>
                                <span class="select select-quote">                            
                                    <select>
                                        <option selected>--Please Select--</option>
                                        <option>Texas</option>
                                        <option>Main</option>
                                        <option>Massachusets</option>
                                        <option>Virginia</option>           
                                    </select>
                                </span>
                            </div>
                            <div>
                                <label>Post code</label>
                                <input class="input-quote" type="text" placeholder="154789">
                            </div>
                            <button><span class="btn btn-add">get quotes</span></button>
                        </form>
                    </div>
                    <input type="radio" id="tab2" name="tab-label">
                    <label for="tab2">discount code</label>
                    <div class="tab-pane">
                        2
                    </div>
                    <input type="radio" id="tab3" name="tab-label">
                    <label for="tab3">gift voucher</label>
                    <div class="tab-pane">
                        3
                    </div>                    
                </div>
                <aside>
                    <table class="tbl-total">                       
                        <tbody>
                            <tr>
                                <td>subtotal:</td>
                                <td>$434.50</td>
                            </tr>
                            <tr>
                                <td>shipping:</td>
                                <td>$6.00</td>
                            </tr>
                            <tr>
                                <td>tax (0%):</td>
                                <td>$0.00</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>total:</td>
                                <td>$440.50</td>
                            </tr>
                        </tfoot>
                    </table>
                    <div>
                        <button><span class="btn btn-add">continue shopping</span></button>
                        <button><span class="btn btn-add">checkout</span></button>
                    </div>
                </aside>
            </div>

            <section class="sale">
                <div class="hdr-wrap">
                    <div>
                        <h1 class="h1">Also Purchased</h1>
                        <p>Note the similar products - after buying for more than $500 you can get a discount.</p>
                    </div>
                    <div class="arrows">
                        <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-left"></i></a>
                        <a href="#" class="btn slider-arrow"><i class="icon-sliderarrow-right"></i></a>
                    </div>
                </div>
                <div class="sale-row">
                    <figure>                                    
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
                        <figcaption>Sony VAIO Tap 20</figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="#" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure>                                    
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-discount">-30%</div>
                            <div class="lbl lbl-price">$435</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings"></div>                                        
                        </div>
                        <figcaption>BenQ E2220HD</figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="#" class="btn btn-check"><i class="icon-product-check"></i></a>
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
                        <figcaption>Philips MP Digital Camera</figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="#" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                    <figure>                                    
                        <a href="#" class="figure-wrapper">
                            <div class="lbl lbl-discount">-30%</div>
                            <div class="lbl lbl-price">$75</div>
                            <img src="images/shape1.png" alt="">
                        </a>
                        <div class="ratings-container clearfix">
                            <div class="ratings"></div>                                        
                        </div>
                        <figcaption>BenQ E2220HD</figcaption>
                        <div class="btns">
                            <a href="#" class="btn btn-hidden-add"><i class="icon-hidden-add"></i></a>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-like"><i class="icon-product-like"></i></a>
                            <a href="#" class="btn btn-check"><i class="icon-product-check"></i></a>
                        </div>
                    </figure>
                </div>
            </section>
        </div>
        <?= require_tpl('common/footer') ?>
    </body>
</html>
