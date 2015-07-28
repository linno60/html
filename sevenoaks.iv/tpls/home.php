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
        <header data-flex="col-center-between">            
            <?= require_tpl('common/header') ?>
            <a href="#" class="btn btn-arrow left"><i class="icon-arrow-left"></i></a>
            <a href="#" class="btn btn-arrow right"><i class="icon-arrow-right"></i></a>
            <section class="banner" data-flex="col-start-end">
                <div class="banner-box">
                    <h1>Welcome to SevenOaks website <span>which is run by the friends of SevenOaks</span></h1>
                </div>
            </section>
        </header>
        <section class="content">
            <div class="grid" data-flex="row--around">
                <figure class="stories" data-flex>
                    <img src="images/img1.png">
                    <figcaption data-flex="col-end-end">
                        <h4>stories</h4>
                        <a href="#" class="btn btn-info"><em>Read stories of Seven Oaks</em><div class="lbl lbl-info"><i class="icon-arrow"></i></div></a>
                    </figcaption>                    
                </figure>
                <figure class="give" data-flex>
                    <img src="images/img2.png">
                    <figcaption data-flex="col-end-end">
                        <h4>give online</h4>                        
                        <a href="#" class="btn btn-info"><em>Quick & easy online ginving</em><div class="lbl lbl-info"><i class="icon-arrow"></i></div></a>
                    </figcaption>                    
                </figure>
                <figure class="prayer" data-flex>
                     <img src="images/img3.png">
                    <figcaption data-flex="col-end-end">
                        <h4>prayer</h4>                       
                        <a href="#" class="btn btn-info"><em>Submint your prayer request</em><div class="lbl lbl-info"><i class="icon-arrow"></i></div></a>
                    </figcaption>                   
                </figure>
            </div>
            <div class="events-wrap" data-flex="row--between">
                <div>
                    <h3>upcoming events</h3>
                    <div class="event-item" data-flex="row-center-between">
                        <div data-flex>
                            <div class="date" data-flex="col-center">
                                <span>20</span>
                                <small>july</small>
                            </div>
                            <div class="hdr" data-flex="col--center">
                                <h6>family sunday</h6>
                                <time>Sunday | <span>9:30am</span></time>
                            </div>
                        </div>
                        <a href="#" class="btn btn-default">more</a>
                    </div>
                    <div class="event-item" data-flex="row-center-between">
                        <div data-flex>
                            <div class="date" data-flex="col-center">
                                <span>20</span>
                                <small>july</small>
                            </div>
                            <div class="hdr" data-flex="col--center">
                                <h6>family sunday</h6>
                                <time>Sunday | <span>9:30am</span></time>
                            </div>
                        </div>
                        <a href="#" class="btn btn-default">more</a>
                    </div>
                    <div class="event-item" data-flex="row-center-between">
                        <div data-flex>
                            <div class="date" data-flex="col-center">
                                <span>20</span>
                                <small>july</small>
                            </div>
                            <div class="hdr" data-flex="col--center">
                                <h6>family sunday</h6>
                                <time>Sunday | <span>9:30am</span></time>
                            </div>
                        </div>
                        <a href="#" class="btn btn-default">more</a>
                    </div>
                </div>
                <article>
                    <h3>sevenoaks</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <a href="#" class="read">read more >></a>
                </article>
            </div>
        </section>        
        <?= require_tpl('common/footer') ?>
    </body>
</html>
