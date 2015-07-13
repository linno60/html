<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trekking</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/css/reset-elements.css">
        <link type="text/css" rel="stylesheet" href="/css/styles.css">    
    </head>
    <body>
        <header data-flex='col-center-between'>
            <nav class="nav" data-flex='row-center-between'>
                <a href='#'><i class='icon-shoe'></i></a>
                <div data-flex='row-center'>
                    <a href='#'>Home</a>
                    <a href='#'>Products</a>
                    <a href='#'><i class='icon-cart'></i></a>
                </div>
            </nav>
            <div data-flex='col-center-center'>
                <h1>Our clothing , your comfort</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <a href='#'><i class='icon-check'></i></a>
        </header>
        <section class='filter-wrap'>
            <div class='filter' data-flex='row-center-between'>
                <div class='checks' data-flex='row-center'>
                    <input type='checkbox' name='check' id='c1' checked>
                    <label data-flex='row-center' for='c1'><span data-flex='row-center-center'><i class='icon-checkbox'></i></span>men</label>
                    <input type='checkbox' name='check' id='c2' checked>
                    <label data-flex='row-center' for='c2'><span data-flex='row-center-center'><i class='icon-checkbox'></i></span>women</label>
                    <input type='checkbox' name='check' id='c3'>
                    <label data-flex='row-center' for='c3'><span data-flex='row-center-center'><i class='icon-checkbox'></i></span>children</label>
                </div>
                <a href='#' class='btn btn-products'>see all products</a>
            </div>
        </section>
        <section class='products'>
            <div class='hdr' data-flex='row-center-between'>
                <h2>men</h2>
                <div class='line'></div>
            </div>
            <div class='pagination' data-flex='col-end'>
                <span>1 / 5</span>
                <div>
                    <a href='#'><i class='icon-left'></i></a>
                    <a href='#'><i class='icon-right'></i></a>
                </div>
            </div>
            <div class='grid' data-flex='row-start'>
                <a href='#' class='product' data-flex='col-center-between'>
                    <div data-flex='row-center-between'>
                        <span class='size' data-flex='row-center'>size<i class='icon-down'></i></span>
                        <div class='color'>
                            <span class='blue'></span>
                            <span class='yellow'></span>
                            <span class='black'></span>
                        </div>
                    </div>
                    <img src="images/1.png">
                    <div data-flex='row-center-between'>
                        <span class='name'>t-shirt</span>
                        <span class='price'>5,00 &euro;</span>
                    </div>
                </a>
                <a href='#' class='product' data-flex='col-center-between'>
                    <div data-flex='row-center-between'>
                        <span class='size' data-flex='row-center'>size<i class='icon-down'></i></span>
                        <div class='color'></div>
                    </div>
                    <img src="images/2.png">
                    <div data-flex='row-center-between'>
                        <span class='name'>pants forclaz</span>
                        <span class='price'>30,00 &euro;</span>
                    </div>
                </a>
                <a href='#' class='product' data-flex='col-center-between'>
                    <div data-flex='row-center-between'>
                        <span class='size' data-flex='row-center'>10 litr<i class='icon-down'></i></span>
                        <div class='color'></div>
                    </div>
                    <img src="images/3.png">
                    <div data-flex='row-center-between'>
                        <span class='name'>backpack</span>
                        <span class='price'>60,00 &euro;</span>
                    </div>
                </a>
            </div>
            <div class='hdr women' data-flex='row-center-between'>
                <h2>women</h2>
                <div class='line'></div>
            </div>
            <div class='pagination' data-flex='col'>
                <span>1 / 5</span>
                <div>
                    <a href='#'><i class='icon-left'></i></a>
                    <a href='#'><i class='icon-right'></i></a>
                </div>
            </div>
            <div class='grid' data-flex='row-start-between'>
                <a href='#' class='product' data-flex='col-center-between'>
                    <div data-flex='row-center-between'>
                        <span class='size' data-flex='row-center'>size<i class='icon-down'></i></span>
                        <div class='color'></div>
                    </div>
                    <img src="images/4.png">
                    <div data-flex='row-center-between'>
                        <span class='name'>giaket</span>
                        <span class='price'>60,00 &euro;</span>
                    </div>
                </a>
                <a href='#' class='product' data-flex='col-center-between'>
                    <div data-flex='row-center-between'>
                        <span class='size' data-flex='row-center'>size<i class='icon-down'></i></span>
                        <div class='color'></div>
                    </div>
                    <img src="images/5.png">
                    <div data-flex='row-center-between'>
                        <span class='name'>trekking shoes</span>
                        <span class='price'>80,00 &euro;</span>
                    </div>
                </a>
                <a href='#' class='product' data-flex='col-center-between'>
                    <div data-flex='row-center-between'>
                        <span class='size' data-flex='row-center'>size<i class='icon-down'></i></span>
                        <div class='color'>
                            <span class='pink'></span>
                            <span class='white'></span>
                        </div>
                    </div>
                    <img src="images/6.png">
                    <div data-flex='row-center-between'>
                        <span class='name'>t-shirt</span>
                        <span class='price'>20,00 &euro;</span>
                    </div>
                </a>
            </div>
        </section>
        <section class='about-wrap' data-flex='row-center-center'>
            <div class='about' data-flex='col-center-center'>
                <h3>about&nbsp;us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
        </section>
        <section class='twitter-wrap'>
            <div class='twitter' data-flex='row-center'>
                <i class='icon-twitter'></i>
                <p>" E-commerce psd theme available "</p>
            </div>
        </section>
        <footer>
            <div class='footer' data-flex="row-center-between">
                <div class="description">
                    <h4>trekking</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="footer-nav" data-flex="col-end">
                    <div>
                        <a href="#">credits<span>|</span></a>
                    <a href="#">privacy<span>|</span></a>
                    <a href="#">our teams</a>
                    </div>
                    <span>Copyright by phototime - all right reserved</span>
                </div> 
            </div>
        </footer>
    </body>
</html>
