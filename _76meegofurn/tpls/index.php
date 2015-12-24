<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Meegofurn</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
        <link rel="stylesheet" href="/css/addons/data-flex.css">
        <link rel="stylesheet" href="/css/addons/data-tabs.css">
        <link rel="stylesheet" href="/css/addons/generic.css">  
        <link rel="stylesheet" href="/css/elements.css">  
        <link rel="stylesheet" href="/css/styles.css">  
        <script>
            var LAYOUT_WIDTH = 980;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="lwrap">
                <div class="header" data-flex="axis w" data-flex-480="vaxis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="212" height="39" alt="Meegofurn">
                    </a>
                    <dl>
                        <dt>Call Us: </dt>
                        <dd>0548 784 44 66</dd>
                    </dl>
                </div>
                <div class="banner" data-flex="-start between" data-flex-640="vstripe">
                    <figure><img src="/images/img1.png" width="650" height="360" alt=""></figure>
                    <div>
                        <h2>March into the Sea</h2>
                        <p>Morbi sed lectus nibh ut velest elit. Curabitur at mauris at velit laoreet sedat odio. Nam ut biben sagittis tortora volutpat. Etiam nonet leo purus,elementum libero. Aenean vitae quam leo mure rutrum.</p>
                        <ul class="list" data-childs>
                            <li>Curabitur at mauris</li>
                            <li>Nam biben sagittis tortora</li>
                            <li>Etiam non leo elementum</li>
                        </ul>
                        <a href="#" class="btn btn-default">go to link</a>
                    </div>
                </div>                
            </div>
        </header>
        <div class="slider">
            <div class="lwrap" data-flex="axis">
                <a href="#"><i class="icon-prev"></i></a>
                <div data-flex="stripe w">
                    <figure><img src="/images/img2.png" width="118" height="88" alt=""></figure>
                    <figure><img src="/images/img3.png" width="118" height="88" alt=""></figure>
                    <figure><img src="/images/img4.png" width="118" height="88" alt=""></figure>
                    <figure><img src="/images/img5.png" width="118" height="88" alt=""></figure>
                    <figure class="hidden"><img src="/images/img6.png" width="118" height="88" alt=""></figure>
                    <figure class="hidden"><img src="/images/img7.png" width="118" height="88" alt=""></figure>
                </div>
                <a href="#"><i class="icon-next"></i></a>
            </div>
        </div>
        <div class="content-wrap">
            <div class="lwrap">
                <blockquote class="blockquote">Mauris sodales risus non enim tempor euro mat vehicula metus porta. Fusce eget molestie urna. Maecenas eu condimentum sem. Fusce in odio vitae risus tincidunt feugiat idet augue.</blockquote>
                <div class="services" data-flex="stripe" data-flex-640="vstripe">
                    <article>
                        <h4 data-flex="-center"><i class="icon-pallete"></i>Vestibulum tellus consequat</h4>
                        <p>Nunc sed quam mi, at bibendum leo. Fusce a lacus ligula. Vestibulum sollicitudin ultricesy viverra dolor egestas at. Aliquam congue, nec fringilla augue faucibus at. Nam at itaculis posuere justo, a rutrum urna lacinia non.</p>
                    </article>
                    <article>
                        <h4 data-flex="-center"><i class="icon-camera"></i>Cras commodo lacinia turpis</h4>
                        <p>Suspendisse dui velit, fermentum vitae alam vitae, consequat et ligula. Nam molestie at venenatis dignissim. Pellentesque nec purus ipsum, vel elementum ante. Cras eu mi lectu sedo non sapien massa.</p>
                    </article>
                    <article>
                        <h4 data-flex="-center"><i class="icon-folder"></i>Etiam volutpat porta magna</h4>
                        <p>Integer id nunc eu felis vulputate posuere sit amet blandit mauris. Suspendisse condintum sem rhoncus dolor sodales ultricies. In velvur fringilla leo. Vestibulum sagittis, est at phare dapibus, libero nulla facilisis ligula.</p>
                    </article>
                </div>
                <div class="testimonials-wrap" data-flex="stripe" data-flex-480="vstripe">
                    <div class="testimonials">
                        <h2>Here's what our customers are saying about MeegoFurn.</h2>
                        <div data-flex="stripe" data-flex-640="vstripe">
                            <blockquote class="testimonial" data-flex>
                                <q data-flex="col -start">Suspendisse quis turpis fringilla sollicitudin consequat vel eget nisl. Duis sedut sodales velit. Duis bibendum fermetum lorem, quis pharetra augue sagittis ac.
                                    <cite>by Tery Mandalay</cite>
                                </q>    
                            </blockquote>
                            <blockquote class="testimonial" data-flex>
                                <q data-flex="col -start">Suspendisse quis turpis fringilla sollicitudin consequat vel eget nisl. Duis sedut sodales velit.  In hac habitasse platea dictumst etiam tincidunt.
                                    <cite>by Anna Hateway</cite>
                                </q>    
                            </blockquote>
                        </div>
                    </div>
                    <div class="contacts">
                        <form method="post" action="#" data-flex>
                            <input type="email" name="input" placeholder="Your E-mail address">
                            <button><span class="btn btn-default">submit</span></button>
                        </form>
                        <address data-childs="-center">
                            <span><i class="icon-phone"></i>0548&nbsp;566&nbsp;77&nbsp;55&nbsp;/ 0548&nbsp;566&nbsp;77&nbsp;88</span>
                            <span><i class="icon-e-mail"></i><a href="mailto:mail@companyname.com">mail@companyname.com</a></span>
                            <span><i class="icon-website"></i><a href="http://www.companyname.com">www.companyname.com</a></span>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="axis">
                <span>&copy; Copyright 2010 Fadelicious. All Rights Reserved.</span>
                <div class="links-social" data-flex="end">
                    <a href="#"><i class="icon-fb"></i></a>
                    <a href="#"><i class="icon-db"></i></a>
                    <a href="#"><i class="icon-tw"></i></a>
                    <a href="#"><i class="icon-t"></i></a>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>