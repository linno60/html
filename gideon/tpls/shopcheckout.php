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
            var LAYOUT_WIDTH = 1190;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col">
        <div class="shop-checkout">
            <?= require_tpl('common/header') ?>
            <div>
                <div class="lwrap">
                    <div data-flex="-start between w" data-flex-480="vstripe">
                        <form action="#" method="post" data-flex="stripe w">
                            <h4>Billing Details</h4>
                            <select class="select-checkout" id="selectcountry2">
                                <option>Select your Country</option>
                                <option>USA</option>
                                <option>UK</option>
                                <option>Canada</option>
                                <option>Australia</option>
                            </select>
                            <input name="checkout" id="i1" class="half" type="text" placeholder="First Name">
                            <input name="checkout" id="i2" class="half" type="text" placeholder="Last Name">
                            <input name="checkout" id="i3" type="text" placeholder="Company Name">
                            <input name="checkout" id="i4" type="text" placeholder="Street Address">
                            <input name="checkout" id="i5" type="text" placeholder="Apartment, Suite, Unit ECT. (Optional)">
                            <input name="checkout" id="i6" class="half" type="text" placeholder="State / Country">
                            <input name="checkout" id="i7" class="half" type="text" placeholder="Postalcode / Zip">
                            <input name="checkout" id="i8" class="half" type="email" placeholder="Email">
                            <input name="checkout" id="i9" class="half" type="tel" placeholder="Phone">
                            <span><input type="checkbox" id="checkbox1"><label for="checkbox1">Create an account?</label></span>
                        </form>
                        <form action="#" method="post" data-flex="stripe w" id="selectcountry3">
                            <h4>Ship to a Different Address?</h4>
                            <select class="select-checkout">
                                <option>Select your Country</option>
                                <option>USA</option>
                                <option>UK</option>
                                <option>Canada</option>
                                <option>Australia</option>
                            </select>
                            <input name="checkout" id="i10" class="half" type="text" placeholder="First Name">
                            <input name="checkout" id="i11" class="half" type="text" placeholder="Last Name">
                            <input name="checkout" id="i12" type="text" placeholder="Company Name">
                            <input name="checkout" id="i13" type="text" placeholder="Street Address">
                            <input name="checkout" id="i14" type="text" placeholder="Apartment, Suite, Unit ECT. (Optional)">
                            <input name="checkout" id="i15" class="half" type="text" placeholder="State / Country">
                            <input name="checkout" id="i16" class="half" type="text" placeholder="Postalcode / Zip">
                            <input name="checkout" id="i17" class="half" type="email" placeholder="Email">
                            <input name="checkout" id="i18" class="half" type="tel" placeholder="Phone">
                            <textarea name="checkout" id="t1" placeholder="Note about your order, Eg, Special nots for your delivery"></textarea>
                        </form>
                    </div>
                    <div data-flex="col -center">
                        <table class="table extend">
                            <caption>billing details</caption>
                            <thead>
                                <tr>
                                    <td>Product</td>
                                    <td></td>
                                    <td>Total</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Black Spoon Set x 1</td>
                                    <td></td>
                                    <td>$15</td>
                                </tr>
                                <tr>
                                    <td>Wall Clock</td>
                                    <td></td>
                                    <td>$50</td>
                                </tr>
                                <tr>
                                    <td>Cart Subtotal</td>
                                    <td></td>
                                    <td>$75</td>
                                </tr>
                                <tr>
                                    <td>Shipping and Handling</td>
                                    <td></td>
                                    <td>Free Shipping</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Order Total</td>
                                    <td></td>
                                    <td>$75</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="accordion acc-radio">
                            <a href="#" class="active">direct bank transfer</a>
                            <div class="active">
                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                            </div>
                            <a href="#">cheque payment</a>
                            <div>Tab number 2</div>
                            <a href="#">paypal</a>
                            <div>Tab number 3</div>
                        </div>
                        <a href="#" class="btn btn-default">Place Order</a>
                    </div>
                </div>
            </div>            
        </div>
        <footer>
            <div class="lwrap footer-title" data-flex="center -center">
                <h2>related items</h2>
            </div>
            <?= require_tpl('common/galleryalt') ?>
            <?= require_tpl('common/footer') ?>  
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>

