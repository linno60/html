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
            var LAYOUT_WIDTH = 960;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col between">
        <div>
            <?= require_tpl('common/header') ?>
            <div class="shop-cart">
                <div class="lwrap">
                    <div>
                        <table class="table cart">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Product</td>
                                    <td>Price</td>
                                    <td>Quantity</td>
                                    <td>Total</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#"><i class="icon-closepopup"></i></a></td>
                                    <td><figure><img src="/images/spoons.png" width="69" height="69" alt=""></figure></td>
                                    <td>Black Spoon</td>
                                    <td>$15</td>
                                    <td><div class="spinner" data-flex="" data-childs="center -center"><a href="#">-</a><input type="number" placeholder="1"><a href="#">+</a></div></td>
                                    <td>$15</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="#"><i class="icon-closepopup"></i></a></td>
                                    <td><figure><img src="/images/clock.png" width="69" height="69" alt=""></figure></td>
                                    <td>Wall Clock</td>
                                    <td>$50</td>
                                    <td><div class="spinner" data-flex="" data-childs="center -center"><a href="#">-</a><input type="number" placeholder="1"><a href="#">+</a></div></td>
                                    <td>$50</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="#"><i class="icon-closepopup"></i></a></td>
                                    <td><figure><img src="/images/eggs.png" width="69" height="69" alt=""></figure></td>
                                    <td>Egg Tray</td>
                                    <td>$10</td>
                                    <td><div class="spinner" data-flex="" data-childs="center -center"><a href="#">-</a><input type="number" placeholder="1"><a href="#">+</a></div></td>
                                    <td>$10</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <form action="#" method="post" data-flex="axis w">
                            <div data-flex="-center">
                                <input name="checkout" type="password" placeholder="Enter Coupon Code">
                                <button><span class="btn btn-default">Apply Coupon</span></button>
                            </div>
                            <div data-flex="-center end w">
                                <button><span class="btn btn-default">Update Cart</span></button>
                                <button><span class="btn btn-default">Proceed to Checkout</span></button>
                            </div>
                        </form>
                    </div>
                    <div data-flex="stripe" class="total-wrap">
                        <div>
                            <h2 class="title-shopcart">Cart Totals</h2>
                            <form action="#" method="post" data-flex="col">
                                <select class="select-checkout">
                                    <option>SELECT A COUNTRY</option>
                                    <option>USA</option>
                                    <option>UK</option>
                                    <option>Canada</option>
                                    <option>Australia</option>
                                </select>
                                <input name="checkout" type="text" placeholder="state/country">
                                <input name="checkout" type="text" placeholder="postcode/zip">
                                <button><span class="btn btn-default">Update Total</span></button>
                            </form>
                        </div>
                        <div>
                            <h2 class="title-shopcart">Cart Totals</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Cart Subtotal:</td>
                                        <td>$75.00</td>
                                    </tr>
                                    <tr>
                                        <td>Sheeping and Handing:</td>
                                        <td>Order Total:</td>
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
                    </div>
                </div>
            </div>            
        </div>
        <?= require_tpl('common/footer') ?>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>

