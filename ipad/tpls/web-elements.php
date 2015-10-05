<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Web elements</title>
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link type="text/css" rel="stylesheet" href="/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/css/reset-elements.css">
        <link type="text/css" rel="stylesheet" href="/css/styles.css?<?= time() ?>">    
    </head>
    <body>
        <?= require_tpl('common/header') ?>
        <section class="content-wrap">
            <div class='content web'>
                <div class="hdr" data-flex="row-center-between">
                    <h1 data-flex='col'>
                        <b>Web elements</b>
                        <small>Lorem Ipsum is simply dummy</small>
                    </h1>
                    <div class="cart-wrap" data-flex="col-center-center">
                        <div data-flex="row-center">
                            <i class="icon-cart"></i>
                            <div data-flex="col">
                                <b>154$</b>
                                <small>2 iteams</small>
                            </div>
                        </div>
                        <a href="#" data-flex="row-center"><span>Check out now </span><i class="icon-cart-arrow"></i></a>
                    </div>
                </div>
                <div class="web-elements" data-flex="row">
                    <form action="#" method="post" data-flex="col">
                        <div class="search-wrap rounded" data-flex='row-center'>
                            <i class='icon-search'></i>
                            <input type="search" placeholder="Search...">
                        </div>
                        <div class="search-wrap " data-flex='row-center'>
                            <i class='icon-search'></i>
                            <input type="search" placeholder="Search...">
                        </div>
                        <div class="search-wrap form" data-flex='row-center-between'>
                            <div data-flex="row-center">
                                <i class='icon-search'></i>
                                <input type="search" placeholder="Search...">
                            </div>
                            <button><span class='btn btn-search'>Search</span></button>
                        </div>
                        <span class="select">
                            <select>
                                <option selected>Search...</option>
                                <option>Germany</option>
                                <option>Spain</option>
                                <option>Italy</option>
                                <option>France</option>           
                            </select>
                        </span>
                        <div class="buttons" data-flex>
                            <button><span class='btn btn-default'>Submit</span></button>
                            <button><span class='btn btn-search'>Submit</span></button>
                            <button><span class='btn btn-alt'>Submit</span></button>
                        </div>
                        <div>
                            <a href="#" class="btn btn-link"><i class="icon-inform"></i></a>
                             <a href="#" class="btn btn-link"><i class="icon-close"></i></a>
                             <a href="#" class="btn btn-link"><i class="icon-check"></i></a>
                             <a href="#" class="btn btn-link"><i class="icon-download"></i></a>
                        </div>
                    </form>
                    <div>
                        <div class="element-box">
                            <div class="hdr" data-flex="row-center">
                                <h6>Web elements _boxes</h6>    
                            </div>
                            <div></div>
                        </div>
                        <div class="element-box cover">
                            <div class="hdr" data-flex="row-center">
                                <h6>Web elements _boxes</h6>
                            </div>
                            <div></div>
                        </div>
                    </div>                  
                </div>
            </div>    
        </section>        
        <?= require_tpl('common/footer') ?>
    </body>
</html>
