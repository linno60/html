<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Shop</title>
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link type="text/css" rel="stylesheet" href="/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/css/reset-elements.css">
        <link type="text/css" rel="stylesheet" href="/css/styles.css">    
    </head>
    <body>    
        <header data-flex="col-center-between">
            <?= require_tpl('common/header') ?>
            <section class="banner" data-flex="col-start-end">
                <div class="banner-box">
                    <h1>Shop</h1>
                </div>
            </section>
        </header>
        <section class="content shop" data-flex="row--between">
            <div class="grid shop" data-flex="row--around">
                <figure>
                    <a href="#" data-flex="col">
                        <img src="images/img7.png">
                        <figcaption data-flex="row--between">
                            <span data-flex="row-center">E-Book</span>
                            <div class="date-box" data-flex="col-center-center">
                                <small>&pound;4.99</small>
                            </div>
                        </figcaption> 
                    </a>                   
                </figure>
                <figure>
                    <a href="#" data-flex="col">
                        <img src="images/img8.png">
                        <figcaption data-flex="row--between">
                            <span data-flex="row-center">SevenOaks Mug</span>
                            <div class="date-box" data-flex="col-center-center">
                                <small>&pound;1.99</small>
                            </div>
                        </figcaption> 
                    </a>                   
                </figure>
                <figure>
                    <a href="#" data-flex="col">
                        <img src="images/img9.png">
                        <figcaption data-flex="row--between">
                            <span data-flex="row-center">SevenOaks T-Shirt</span>
                            <div class="date-box" data-flex="col-center-center">
                                <small>&pound;15.99</small>
                            </div>
                        </figcaption> 
                    </a>                   
                </figure>
                <figure>
                    <a href="#" data-flex="col">
                        <img src="images/img7.png">
                        <figcaption data-flex="row--between">
                            <span data-flex="row-center">E-Book</span>
                            <div class="date-box" data-flex="col-center-center">
                                <small>&pound;4.99</small>
                            </div>
                        </figcaption> 
                    </a>                   
                </figure>
                <figure>
                    <a href="#" data-flex="col">
                        <img src="images/img8.png">
                        <figcaption data-flex="row--between">
                            <span data-flex="row-center">SevenOaks Mug</span>
                            <div class="date-box" data-flex="col-center-center">
                                <small>&pound;1.99</small>
                            </div>
                        </figcaption> 
                    </a>                   
                </figure>
                <figure>
                    <a href="#" data-flex="col">
                        <img src="images/img9.png">
                        <figcaption data-flex="row--between">
                            <span data-flex="row-center">SevenOaks T-Shirt</span>
                            <div class="date-box" data-flex="col-center-center">
                                <small>&pound;15.99</small>
                            </div>
                        </figcaption> 
                    </a>                   
                </figure>
            </div>
        </section>        
        <?= require_tpl('common/footer') ?>
    </body>
</html>
