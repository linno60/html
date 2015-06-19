<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Compare Product</title>
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
                <li>Compare Product</li>
            </ul> 
        </div>
        <div class="wrap-base column compare">
            <h1 class="h1">Compare Product</h1>
            <p>If after products comparing you find it hard to choose, you can write to our live support.</p>
            <table class="tbl-striped">                      
                <tbody>
                    <tr>
                        <td>product name</td>
                        <td>
                            <img src="images/shape10.png" alt="">
                            <h2>Lowlands Lace Blouse</h2>
                        </td>
                        <td>
                            <img src="images/shape10.png" alt="">
                            <h2>Samsung Galaxy Ace</h2>
                        </td>
                        <td>
                            <img src="images/shape10.png" alt="">
                            <h2>Iphone Case Cover Original</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>price</td>
                        <td>
                            <span class="subtotal">$130</span>
                        </td>
                        <td>
                            <span class="subtotal">$1475</span>
                        </td>
                        <td>
                            <span class="subtotal">$1475</span>
                        </td>
                    </tr>
                    <tr>
                        <td>brand</td>
                        <td>
                            <span class="brand">sony</span>
                        </td>
                        <td>
                            <span class="brand">samsung</span>
                        </td>
                        <td>
                            <span class="brand">toshiba</span>
                        </td>
                    </tr>
                    <tr>
                        <td>availability</td>
                        <td>In Stock</td>
                        <td>Out of Stock</td>
                        <td>In Stock</td>
                    </tr>
                    <tr>
                        <td>rating</td>
                        <td>
                            <div class="ratings-result"></div>
                            <span>9 reviews</span>
                        </td>
                        <td>
                            <div class="ratings-result"></div>
                            <span>2 reviews</span>
                        </td>
                        <td>
                            <div class="ratings-result"></div>
                            <span>5 reviews</span>
                        </td>
                    </tr>
                    <tr>
                        <td>summary</td>
                        <td>
                            <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aeneanvolutpat lacus at dolor blandit, lobortis ante semper. </p>
                        </td>
                        <td>
                            <p>Vivamus et cursus leo, eu sagittis erat. Integer sed ultricies ligula. Sedelementum arcu libero, nec consectetur orci interdumsed. Cras euismod rhoncus.</p>
                        </td>
                        <td>
                            <p>Aliquam suscipit augue at dolor rhoncus feugiat. Etiam sapien mi, dictum sed urna id, suscipit iaculisturpis. Nunc tincidunt dapibus tortor, a rutrum lorem.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>weight</td>
                        <td>1.2 Kg</td>
                        <td>0.9 Kg</td>
                        <td>1.7 Kg</td>
                    </tr>
                    <tr>
                        <td>demensions</td>
                        <td>45 cm x 35 cm  x 68 cm</td>
                        <td>21 cm x 32 cm  x 60 cm</td>
                        <td>24 cm x 75 cm  x 19 cm</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-close"><i class="icon-close"></i></a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-add disable">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-close"><i class="icon-close"></i></a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-close"><i class="icon-close"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="tbl-striped-hidden">
                <tr>
                    <td colspan="2">product name</td>
                </tr>
                <tr>
                    <td>
                        <img src="images/shape10.png" alt="">
                            <h2>Lowlands Lace Blouse</h2>
                    </td>
                    <td>
                        <img src="images/shape10.png" alt="">
                            <h2>Samsung Galaxy Ace</h2>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">price</td>
                </tr>
                <tr>
                    <td>
                        <span class="subtotal">$130</span>
                    </td>
                    <td>
                        <span class="subtotal">$130</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">brand</td>
                </tr>
                <tr>
                    <td>
                        <span class="brand">sony</span>
                    </td>
                    <td>
                        <span class="brand">samsung</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">availability</td>
                </tr>
                <tr>
                    <td>
                        In Stock
                    </td>
                    <td>
                        Out of Stock
                    </td>
                </tr>
                <tr>
                    <td colspan="2">rating</td>
                </tr>
                <tr>
                    <td>
                        <div class="ratings-result"></div>
                            <span>9 reviews</span>
                    </td>
                    <td>
                        <div class="ratings-result"></div>
                            <span>9 reviews</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">summary</td>
                </tr>
                <tr>
                    <td>
                        <p>Vivamus et cursus leo, eu sagittis erat. Integer sed ultricies ligula. Sedelementum arcu libero, nec consectetur orci interdumsed. Cras euismod rhoncus.</p>
                    </td>
                    <td>
                            <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aeneanvolutpat lacus at dolor blandit, lobortis ante semper. </p>                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">weight</td>
                </tr>
                <tr>
                    <td>
                        1.2 Kg
                    </td>
                    <td>
                        0.9 Kg
                    </td>
                </tr>
                <tr>
                    <td colspan="2">demensions</td>
                </tr>
                <tr>
                    <td>
                        45 cm x 35 cm x 68 cm
                    </td>
                    <td>
                        21 cm x 32 cm x 60 cm
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#" class="btn btn-add">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-close"><i class="icon-close"></i></a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-add disable">add&nbsp;to&nbsp;cart</a>
                            <a href="#" class="btn btn-close"><i class="icon-close"></i></a>
                    </td>
                </tr>
            </table>
        </div>
        <?= require_tpl('common/footer') ?>
    </body>
</html>
