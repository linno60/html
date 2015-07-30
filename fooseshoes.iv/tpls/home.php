<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link type="text/css" rel="stylesheet" href="/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/css/reset-elements.css">
        <link type="text/css" rel="stylesheet" href="/css/styles.css">    
    </head>
    <body>          
        <?= require_tpl('common/header') ?>
        <header>
            <div class="header" data-flex="row-center-between">
                <a href="#" class="logo"></a>
                <div data-flex="row-center">
                    <input type="search">
                    <i class="icon-search"></i>
                    <a href="#" class="login" data-flex="row-center-center">LOGIN or REGISTER</a>
                </div>
            </div>            
        </header> 
        <div class="nav" data-flex="row--between">
            <nav data-flex>
                <a href="#" class="btn">Home</a>
                <a href="#" class="btn">Products</a>
                <a href="#" class="btn">About</a>
                <a href="#" class="btn">Pages</a>
                <a href="#" class="btn">Blog</a>
                <a href="#" class="btn">Contact</a>
            </nav>
            <div>

            </div>
        </div>
        <section class="top-wrap">
            <div class="top" data-flex>
                <div></div>
                <div data-flex="col--center">
                    <div class="lbl lbl-default">$145,99</div>
                    <h1>Pink Shoes 2013 Collection</h1>
                    <p>Nunc non fermentum nunc. Sed ut ante eget leo tempor consequat sit amet eu orci. Donec dignissim dolor eget..</p>
                </div>
            </div>
        </section>
        <?= require_tpl('common/footer') ?>
    </body>
</html>
