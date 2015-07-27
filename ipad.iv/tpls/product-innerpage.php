<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blog inner</title>
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link type="text/css" rel="stylesheet" href="/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/css/reset-elements.css">
        <link type="text/css" rel="stylesheet" href="/css/styles.css?<?= time() ?>">    
    </head>
    <body>
        <?= require_tpl('common/header') ?>
        <section class="content-wrap">
            <div class='content'>
                <div class="hdr" data-flex="row-center-between">
                    <h1 data-flex='col'>
                        <b>Dublin's iphone apps Online Demmonstration</b>
                        <small>Lorem Ipsum is simply dummy</small>
                    </h1>
                    <form action="#" method="post" data-flex='row-center' class="search-wrap">
                        <i class='icon-search'></i>
                        <input type='search' placeholder="Search...">
                    </form>
                </div>
                <div class="product-inner">
                    <div data-flex="col-center">
                    <h1 data-flex='col'>
                        <b>Dublin's iphone applications</b>
                        <small>Lorem Ipsum is simply dummy</small>
                    </h1>
                        <div class='lbl lbl-price' data-flex='col-center-center'>
                            <span>250$</span>
                            <small>Special Season </small>
                            <small>Offer</small>
                        </div>
                    <img src="images/img9.png">
                    <a href='#' class='btn btn-default'>Buy now</a>
                </div>
                    <h1><b>Dublin's iphone applications</b></h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <div>
                        <h1><b>Dublin's iphone applications</b></h1>
                    <ul class='list list-bullet'>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting </li>
                                <li>Industry. Lorem Ipsum has been the industry's standard </li>
                                <li>Dummy text ever since the 1500s, when an unknown printer </li>
                                <li>Took a galley of type and scrambled it to make a type specimen book. </li>
                                <li>It has survived not only five centuries, but also the </li>
                                <li>Dummy text ever since the 1500s, when an unknown printer </li>
                            </ul>
                    </div>                    
                </div>
            </div>    
        </section>        
        <?= require_tpl('common/footer') ?>
    </body>
</html>
