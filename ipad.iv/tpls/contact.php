<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact</title>
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
                        <b>Keep in touch with us</b>
                        <small>Lorem Ipsum is simply dummy</small>
                    </h1>
                    <form action="#" method="post" data-flex='row-center' class="search-wrap">
                        <i class='icon-search'></i>
                        <input type='search' placeholder="Search...">
                    </form>
                </div>
                <div class="contact" data-flex="row-start">
                    <form action="#" method="post" data-flex="col-end">
                        <input type="text" placeholder="Your name">
                        <input type="text" placeholder="email address">
                        <input type="text" placeholder="Phone number">
                        <textarea placeholder="Your message"></textarea>
                        <button><span class='btn btn-default'>Submit</span></button>
                    </form>
                    <div data-flex="col-center">
                        <div class="contact-cloud" data-flex="col--between">
                            <div data-flex="col">
                            <h5>Dublin i Pad Applications</h5>
                            <span>Lorem Ipsum</span>
                            <span>simply, dummytext</span>
                            <span>printing</span>
                            <div data-flex>
                                <div data-flex="col-end">
                                    <span>email: </span>
                                    <span>: </span>
                                </div>
                                <div data-flex="col">
                                    <a href="mailto:mail@yourdomainname.com">mail@yourdomainname.com</a>
                                    <a href="mailto:mail@yourdomainname.com">into@yourdomainname.com</a>
                                </div>
                            </div>
                            <span>Phone: +99 54412477, +99 984561142</span>
                            </div>
                            <div class="border"></div>
                        </div>
                        <div class="map" data-flex>
                            <img src="images/map.png">
                        </div>
                    </div>                  
                </div>
            </div>    
        </section>        
        <?= require_tpl('common/footer') ?>
    </body>
</html>
