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
        <div class="shop-cart">
            <?= require_tpl('common/header') ?>
            <div class="lwrap">
                <section>
                    <table class="table cart">
                        <thead>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Pro&shy;duct</td>
                                <td>Pri&shy;ce</td>
                                <td>Quan&shy;tity</td>
                                <td>To&shy;tal</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#"><i class="icon-closepopup"></i></a></td>
                                <td><figure><img src="/images/spoons.png" width="69" height="69" alt=""></figure></td>
                                <td><span>Black Spoon</span></td>
                                <td><span>$15</span></td>
                                <td>
                                    <div class="spinner clearfix">
                                        <a href="#">&minus;</a><input type="number" id="num1" placeholder="1"><a href="#">+</a>
                                    </div>
                                </td>
                                <td><span>$15</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#"><i class="icon-closepopup"></i></a></td>
                                <td><figure><img src="/images/clock.png" width="69" height="69" alt=""></figure></td>
                                <td><span>Wall Clock</span></td>
                                <td><span>$50</span></td>
                                <td>
                                    <div class="spinner clearfix">
                                        <a href="#">&minus;</a><input type="number" id="num2" placeholder="1"><a href="#">+</a>
                                    </div>
                                </td>
                                <td><span>$50</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#"><i class="icon-closepopup"></i></a></td>
                                <td><figure><img src="/images/eggs.png" width="69" height="69" alt=""></figure></td>
                                <td><span>Egg Tray</span></td>
                                <td><span>$10</span></td>
                                <td>
                                    <div class="spinner clearfix">
                                        <a href="#">&minus;</a><input type="number" id="num3" placeholder="1"><a href="#">+</a>
                                    </div>
                                </td>
                                <td><span>$10</span></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="#" method="post" class="clearfix">
                        <div class="clearfix">
                            <input name="checkout" type="password" id="password1" placeholder="Enter Coupon Code">
                            <button><span class="btn-default">Apply Coupon</span></button>
                        </div>
                        <div class="clearfix">
                            <button><span class="btn-default">Update Cart</span></button>
                            <button><span class="btn-default">Proceed to Checkout</span></button>
                        </div>
                    </form>
                </section>
                <section class="total-wrap">
                    <div>
                        <h2 class="title-shopcart">Calculate Shipping</h2>
                        <form action="#" method="post">
                            <select class="select-checkout" id="selectcountry1">
                                <option>SELECT A COUNTRY</option>
                                <option>USA</option>
                                <option>UK</option>
                                <option>Canada</option>
                                <option>Australia</option>
                            </select>
                            <input name="checkout" type="text" id="state1" placeholder="state/country">
                            <input name="checkout" type="text" id="postcode1" placeholder="postcode/zip">
                            <button><span class="btn-default">Update Total</span></button>
                        </form>
                    </div>
                    <div>
                        <h2 class="title-shopcart">Cart Totals</h2>
                        <table class="table total">
                            <tbody>
                                <tr>
                                    <td>Cart Subtotal:</td>
                                    <td>$75.00</td>
                                </tr>
                                <tr>
                                    <td>Shipping and Handling:</td>
                                    <td>Free Shipping:</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Order Total:</td>
                                    <td>$75.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </section>
            </div>
        </div>
        <footer>
            <div class="lwrap footer-title">
                <h2>related items</h2>
            </div>
            <?= require_tpl('common/galleryalt') ?>
            <?= require_tpl('common/footer') ?>             
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>