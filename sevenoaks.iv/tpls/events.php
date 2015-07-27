<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About</title>
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
                    <h1>Events</h1>
                </div>
            </section>
        </header>
        <section class="content events" data-flex="row--between">
            <div class="grid events" data-flex="row--around">
                <figure>
                    <a href="#" data-flex="col">
                        <img src="images/img4.png">
                        <figcaption data-flex="row--between">
                            <span data-flex="row-center">family sunday</span>
                            <div class="date-box" data-flex="col-center-center">
                                <small>30th</small>
                                <span>july</span>
                            </div>
                        </figcaption> 
                    </a>                   
                </figure>
                <figure>
                    <a href="#" data-flex="col">
                        <img src="images/img5.png">
                        <figcaption data-flex="row--between">
                            <span data-flex="row-center">festival</span>
                            <div class="date-box" data-flex="col-center-center">
                                <small>30th</small>
                                <span>july</span>
                            </div>
                        </figcaption> 
                    </a>                   
                </figure>
                <figure>
                    <a href="#" data-flex="col">
                        <img src="images/img6.png">
                        <figcaption data-flex="row--between">
                            <span data-flex="row-center">seminar</span>
                            <div class="date-box" data-flex="col-center-center">
                                <small>30th</small>
                                <span>july</span>
                            </div>
                        </figcaption> 
                    </a>                   
                </figure>
                <figure>
                    <a href="#" data-flex="col">
                        <img src="images/img4.png">
                        <figcaption data-flex="row--between">
                            <span data-flex="row-center">family sunday</span>
                            <div class="date-box" data-flex="col-center-center">
                                <small>30th</small>
                                <span>july</span>
                            </div>
                        </figcaption> 
                    </a>                   
                </figure>
                <figure>
                    <a href="#" data-flex="col">
                        <img src="images/img5.png">
                        <figcaption data-flex="row--between">
                            <span data-flex="row-center">festival</span>
                            <div class="date-box" data-flex="col-center-center">
                                <small>30th</small>
                                <span>july</span>
                            </div>
                        </figcaption> 
                    </a>                   
                </figure>
                <figure>
                    <a href="#" data-flex="col">
                        <img src="images/img6.png">
                        <figcaption data-flex="row--between">
                            <span data-flex="row-center">seminar</span>
                            <div class="date-box" data-flex="col-center-center">
                                <small>30th</small>
                                <span>july</span>
                            </div>
                        </figcaption> 
                    </a>                   
                </figure>
            </div>
        </section>        
        <?= require_tpl('common/footer') ?>
    </body>
</html>
