<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Checkout</title>
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
                <li>Checkout</li>
            </ul> 
        </div>
        <div class="wrap-base cart">
            <h1 class="h1">Checkout</h1>
            <p>Quisque elementum nibh at dolor pellentesque, a eleifend libero pharetra.</p>
            <div class="accordion">
                <input type="checkbox" name="accordion" id="acc1" checked>
                <label for="acc1"><span><strong>1 Step:</strong> checkout option</span><span class="btn"><i class="icon-accarrow"></i></span></label>                    
                <div class="acc-panel">
                    <div class="register-account">
                        <div class="register-account-half">
                            <h3 class="h3">new customer</h3>
                            <p>Register with us for future convenience:</p>
                            <form action="#" method="post"> 
                                <input type="checkbox" name="check-plus" class="subscribe" id="l1" checked>
                                <label for="l1"><span><i class="icon-checkbox"></i></span>Checkout as Guest</label>
                                <input type="checkbox" name="check-plus" class="subscribe" id="l2">
                                <label for="l2"><span><i class="icon-checkbox"></i></span>Register</label>
                                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                <a href="#" class="btn btn-account">continue</a>
                            </form>                          
                        </div>
                        <div class="register-account-half">
                            <h3 class="h3">registered customers</h3>
                            <p>If you have an account with us, please log in.</p>
                            <form action="#" method="post"> 
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-mail"></i>Email*</label> 
                                    <input type="text" placeholder="marek.mnishek@gmail.com">
                                </div>
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-password"></i>Password*</label> 
                                    <input type="password" placeholder="**********">
                                </div>
                                <a href="#" class="reminder">Forgotten your password?</a>
                                <input type="checkbox" class="checkbox" name="check-plus" id="l3" checked>
                                <label for="l3"><span><i class="icon-checkbox"></i></span>Remember password</label>
                                <a href="#" class="btn btn-account">login</a>
                            </form>
                        </div>
                    </div>
                </div>
                <input type="checkbox" name="accordion" id="acc2" checked>
                <label for="acc2"><span><strong>2 Step:</strong> billing information</span><span class="btn"><i class="icon-accarrow"></i></span></label>                    
                <div class="acc-panel">
                    <div class="register-account">
                        <div class="register-account-half">
                            <h3 class="h3">your personal details</h3>
                            <form action="#" method="post"> 
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-username"></i>First Name*</label> 
                                    <input type="text" placeholder="Marek">
                                </div>
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-username"></i>Last Name*</label> 
                                    <input type="text" placeholder="Mnishek">
                                </div>
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-mail"></i>Email*</label> 
                                    <input type="text" placeholder="marek.mnishek@gmail.com">
                                </div>
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-phone"></i>Telephone*</label> 
                                    <input type="text" placeholder="+(744) 584 784 25">
                                </div>
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-fax"></i>Fax</label> 
                                    <input type="text" placeholder="+(744) 478 635 98">
                                </div>
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-company"></i>Company*</label> 
                                    <input type="text" placeholder="PromoKit">
                                </div>
                            </form>
                            <form action="#" method="post"> 
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-password"></i>Password*</label> 
                                    <input type="password" placeholder="**********">
                                </div>
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-password"></i>Password*</label> 
                                    <input type="password" placeholder="**********">
                                </div>
                                <input type="checkbox" name="check-plus" class="subscribe" id="l4" checked>
                                <label for="l4"><span><i class="icon-checkbox"></i></span>I wish to subscribe to the Trego Store newsletter</label>
                                <input type="checkbox" name="check-plus" class="subscribe" id="l5">
                                <label for="l5"><span><i class="icon-checkbox"></i></span>My delivery and billing addresses are the same.</label>                            
                            </form>
                        </div>
                        <div class="register-account-half">
                            <h3 class="h3">your address</h3>
                            <form action="#" method="post">                                 
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-address"></i>Address 1*</label> 
                                    <input type="text" placeholder="Oxford street, 156/14">
                                </div>
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-address"></i>Address 2*</label> 
                                    <input type="text" placeholder="Giles High Street, 147/23">
                                </div>
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-city"></i>City*</label> 
                                    <input type="text" placeholder="London">
                                </div>
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-post"></i>Post Code</label> 
                                    <input type="text" placeholder="125795">
                                </div>
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-country"></i>Country*</label> 
                                    <span class="select">
                                        <select>
                                            <option selected>Great Britain</option>
                                            <option>Germany</option>
                                            <option>Spain</option>
                                            <option>Italy</option>
                                            <option>France</option>           
                                        </select>
                                    </span>
                                </div>
                                <div>
                                    <label class="lbl lbl-form"><i class="icon-label-region"></i>Region / State*</label> 
                                    <span class="select">
                                        <select>
                                            <option selected>Kent</option>
                                            <option>York</option>
                                            <option>Texas</option>
                                            <option>Main</option>
                                            <option>Alaska</option>           
                                        </select>
                                    </span>
                                </div>
                                <input type="checkbox" name="check-plus" id="l6">
                                <label for="l6"><span><i class="icon-checkbox"></i></span>I have reed and agree to the <a href="#">Privacy Policy</a></label>
                                <a href="#" class="btn btn-account">continue</a>
                            </form>
                        </div>
                    </div>
                </div>
                <input type="checkbox" name="accordion" id="acc3">
                <label for="acc3"><span><strong>3 Step:</strong> delivery details</span><span class="btn"><i class="icon-accarrow"></i></span></label>                    
                <div class="acc-panel"></div>
                <input type="checkbox" name="accordion" id="acc4">
                <label for="acc4"><span><strong>4 Step:</strong> delivery method</span><span class="btn"><i class="icon-accarrow"></i></span></label>                    
                <div class="acc-panel"></div>
                <input type="checkbox" name="accordion" id="acc5">
                <label for="acc5"><span><strong>5 Step:</strong> payment method</span><span class="btn"><i class="icon-accarrow"></i></span></label>                    
                <div class="acc-panel"></div>
                <input type="checkbox" name="accordion" id="acc6" checked>
                <label for="acc6"><span><strong>6 Step:</strong> confirm order</span><span class="btn"><i class="icon-accarrow"></i></span></label>                    
                <div class="acc-panel panel-table">
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
                                    <span class="subtotal">$130</span>
                                    <a href="#" class="btn btn-close"><i class="icon-close"></i></a> 
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
                                    <span class="subtotal">$1475</span>
                                    <a href="#" class="btn btn-close"><i class="icon-close"></i></a> 
                                </td>
                            </tr>
                            <tr>
                            <tr class="tbl-total">
                                <td colspan="4">subtotal:</td>                        
                                <td>$434,50</td>
                            </tr>
                            <tr class="tbl-total">
                                <td colspan="4">shipping:</td>                        
                                <td>$6.00</td>
                            </tr>
                            <tr class="tbl-total">
                                <td colspan="4">tax (0%):</td>                        
                                <td>$0.00</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="tbl-total">
                                <td colspan="4">total:</td>                        
                                <td>$440.50</td>
                            </tr>
                        </tfoot>
                    </table>
                    <table class="tbl-total hidden" border="0">                       
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
                    <a href="#" class="btn btn-account">confirm order</a>
                </div>
            </div>
        </div>
        <?= require_tpl('common/footer') ?>
    </body>
</html>
