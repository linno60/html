<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Product-demo</title>
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
                        <b>Dublin's iphone apps Online Demonstration</b>
                        <small>Lorem Ipsum is simply dummy</small>
                    </h1>
                    <form action="#" method="post" data-flex='row-center' class="search-wrap">
                        <i class='icon-search'></i>
                        <input type='search' placeholder="Search...">
                    </form>
                </div>
                <section class='specification-wrap'>
                    <h1 data-flex='col'>
                        <b>There are many variations of passages</b>
                        <small>Lorem Ipsum is simply dummy</small>
                    </h1>
                    <div data-flex='row--between' class='specification'>
                        <div data-flex="col">
                            <img src="images/img3.png">
                        </div>
                        <div data-flex="col">
                            <ul class='list list-bullet'>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting </li>
                                <li>Industry. Lorem Ipsum has been the industry's standard </li>
                                <li>Dummy text ever since the 1500s, when an unknown printer </li>
                                <li>Took a galley of type and scrambled it to make a type specimen book. </li>
                                <li>It has survived not only five centuries, but also the </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class='steps-wrap'>
                    <div class='steps'>
                        <div data-flex='row-center-between'>
                            <div class='lbl lbl-step'>1</div>
                            <div class='lbl lbl-step active'>2</div>
                            <div class='lbl lbl-step'>3</div>
                            <div class='lbl lbl-step'>4</div>
                        </div>
                        <div class='steps-line'></div>
                    </div>
                    <h1 data-flex='col'>
                        <b>There are many variations of passages</b>
                        <small>Lorem Ipsum is simply dummy</small>
                    </h1>
                    <div class='media' data-flex='row-center-around'>
                        <a href='#' class='btn btn-media'><i class='icon-play'></i></a>
                        <a href='#' class='btn btn-media'><i class='icon-pause'></i></a>
                        <a href='#' class='btn btn-media'><i class='icon-info'></i></a>
                    </div>
                    <div>
                        <h2>Play now</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuadipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliua. Ut enim ad minim veniam, quis nostud exercitation ullamco laboris nisi ut aluip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <section class='specification-wrap'>
                        <div data-flex='row--between' class='specification'>
                            <div data-flex='row--center'>
                                <img src="images/img4.png">
                            </div>
                            <div data-flex="col">
                                <h1 data-flex='col'>
                                    <b>There are many variations of passages</b>
                                </h1>
                                <ul class='list list-bullet'>
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting </li>
                                    <li>Industry. Lorem Ipsum has been the industry's standard </li>
                                    <li>Dummy text ever since the 1500s, when an unknown printer </li>
                                    <li>Took a galley of type and scrambled it to make a type specimen book. </li>
                                    <li>It has survived not only five centuries, but also the </li>
                                </ul>
                                <div data-flex>
                                    <a href='#' class='btn btn-default'>Read More</a>
                                    <a href='#' class='btn btn-default alt'>Download</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>            
        </section>        
        <?= require_tpl('common/footer') ?>
    </body>
</html>
