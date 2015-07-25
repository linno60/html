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
        <section class="slider-main" data-flex='row--center'>
            <div data-flex='col-end'>
                <h1 data-flex='col-end'>
                    <b>dublin's</b>
                    <small>iPad&nbsp;<span>Apps</span></small>
                </h1>
                <p>Free and paid apps for your iPad</p>
                <a href='#' class='btn btn-default'>Read More</a>
            </div>
            <div data-flex="col">
                <img src="images/ipad-main.png">
            </div>
            <a href="#" class="btn btn-slider-left"><i class="icon-arrow-sliderleft"></i></a>
            <a href="#" class="btn btn-slider-right"><i class="icon-arrow-sliderright"></i></a>
        </section>
        <section class='boxes-wrap' data-flex='row--around'>
            <div class='box' data-flex="col-center">
                <div data-flex="row-start-between">
                    <i class="icon-e"></i>
                    <img src="images/img1.png">                    
                </div>
                <span class="title">E Book Reader pro</span>
            </div>
            <div class='box' data-flex="col-center-center">
                <div data-flex="row-center-center">
                <img src="images/img2.png">
                </div>
                <span class="title">Image viewer pro</span>
            </div>
            <div class='box' data-flex="col-center-center">
                <div data-flex="row-center-center">
                    <img src="images/media.png">
                </div>
                <span class="title">Media mannager</span>
            </div>
            <div class='box' data-flex="col-center-center">                
                <div data-flex="row-center-center">
                    <img src="images/leo.png">
                </div>
                <span class="title">Leo Entertainment</span>
                <div class="lbl lbl-corner"><span>New</span></div>
            </div>
        </section>
        <section class='categories' data-flex='row--around'>
            <article>
                <div class='hdr' data-flex>
                    <i class='icon-discover'></i>
                    <div>
                        <h4>Discover Apps</h4>
                        <span>Lorem Ipsum is simply dummy</span>
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinc</p>
            </article>
            <article>
                <div class='hdr' data-flex>
                    <i class='icon-browse'></i>
                    <div>
                        <h4>Browse Apps</h4>
                        <span>Lorem Ipsum is simply dummy</span>
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinc</p>
            </article>
            <article>
                <div class='hdr' data-flex>
                    <i class='icon-dev'></i>
                    <div>
                        <h4>Development</h4>
                        <span>Lorem Ipsum is simply dummy</span>
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinc</p>
            </article>
        </section>
        <section class='slider-news' data-flex='row-center-around'>
            <a class='btn' href='#'>
                <i class='icon-arrow-slide-left'></i>
            </a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <a href='#'>Ipsum has been the industry's</a> standard dummy text </p>
            <a class='btn' href='#'>
                <i class='icon-arrow-slide-right'></i>
            </a>
        </section>
        <section class='specification-wrap'>
            <h1 data-flex='col'>
                <b>There are many variations of passages</b>
                <small>Lorem Ipsum is simply dummy</small>
            </h1>            
            <div data-flex class='specification'>
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
                    <div data-flex>
                        <a href='#' class='btn btn-default'>Read More</a>
                        <a href='#' class='btn btn-default'>Download</a>
                    </div>
                </div>
            </div>
            <ul class='list list-plus'>
                <li>Lorem Ipsum is simply dummy text of the printing and typesetting Industry. Lorem Ipsum has been the industry's standard </li>
                <li>Dummy text ever since the 1500s, when an unknown printer Took a galley of type and scrambled it to make a type specimen book. </li>
                <li>It has survived not only five centuries, but also the </li>
                <li>Lorem Ipsum is simply dummy text of the printing and typesetting Industry. Lorem Ipsum has been the industry's standard </li>
                <li>Dummy text ever since the 1500s, when an unknown printer Took a galley of type and scrambled it to make a type specimen book. </li>
            </ul>
        </section>
        <?= require_tpl('common/footer') ?>
    </body>
</html>
