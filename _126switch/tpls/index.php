<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Switch</title>
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
            var LAYOUT_WIDTH = 940;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col">        
        <div>
            <header>
                <div class="lwrap" data-flex="vaxis">
                    <div class="navigation" data-flex="axis">
                        <nav class="links-nav" data-flex="w">
                            <a href="#" class="active">Home</a>
                            <a href="#">What we do?</a>
                            <a href="#">Testimonial</a>
                            <a href="#">Contact Us</a>
                        </nav>
                        <a href="/" title="Return to the homepage" id="logo">
                            <img src="/images/logo.png" width="62" height="19" alt="Switch">
                        </a>             
                        <form action="#" method="post">
                            <input type="search" placeholder="Search...">
                        </form>
                    </div>
                    <div class="hdr-group" data-flex="col center -center">
                        <h1>Art is Eternal Happiness</h1>
                        <a href="#" class="btn btn-default lg">work with us</a>
                    </div>
                    <a href="#" class="btn btn-scroll">scroll down</a>
                </div>
            </header>
            <section class="about">
                <div class="lwrap">
                    <hgroup>
                        <h2>what we do</h2>
                        <hr class="hr">
                        <h6>Lorem ipsum dolor sit amet. <span>Proin gravida nibh vel velit auctor aliquet.</span></h6>
                    </hgroup>
                    <div data-flex="stripe w" data-childs="col -center">
                        <article>
                            <span class="lbl lbl-default"><i class="icon-camera"></i></span>
                            <h3>Lorem Ipsum</h3>
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,</p>
                            <a href="#" class="btn btn-default">Learn more</a>
                        </article>
                        <article>
                            <span class="lbl lbl-default"><i class="icon-camera"></i></span>
                            <h3>Lorem Ipsum</h3>
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,</p>
                            <a href="#" class="btn btn-default">Learn more</a>
                        </article>
                        <article>
                            <span class="lbl lbl-default"><i class="icon-camera"></i></span>
                            <h3>Lorem Ipsum</h3>
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,</p>
                            <a href="#" class="btn btn-default">Learn more</a>
                        </article>
                    </div>
                </div>
            </section>
            <section class="works">
                <div class="lwrap">
                    <hgroup>
                        <h2>our latest work</h2>
                        <hr class="hr">
                        <h6>Lorem ipsum dolor sit amet. <span>Proin gravida nibh vel velit auctor aliquet.</span></h6>
                    </hgroup>
                    <div class="tabs" data-tabs="" data-flex="col -center">
                        <div class="tablist" data-flex="center">
                            <a href="#tab1" class="active">Photography</a>
                            <a href="#tab2">Design</a>
                            <a href="#tab3">Print</a>
                        </div>
                        <div class="tabset">
                            <div id="tab1" class="tabpanel active" data-flex="stripe w">
                                <figure><img src="/images/img1.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img2.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img3.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img4.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img5.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img6.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img7.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img8.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img9.png" width="160" height="160" alt=""></figure>
                                <figure><img src="/images/img10.png" width="160" height="160" alt=""></figure>
                            </div>
                            <div id="tab2" class="tabpanel">Tab number 2</div>
                            <div id="tab3" class="tabpanel">Tab number 3</div>
                        </div>
                        <a href="#" class="btn btn-more alt">View more work</a>
                    </div>
                </div>
            </section>
            <section class="testimonials">
                <div class="lwrap">
                    <hgroup>
                        <h2>testimonials</h2>
                        <hr class="hr">
                        <h6>Lorem ipsum dolor sit amet. <span>Proin gravida nibh vel velit auctor aliquet.</span></h6>
                    </hgroup>
                </div>
            </section>
            <section class="clients">
                <div class="lwrap">
                    <hgroup>
                        <h2>our happy client</h2>
                        <hr class="hr">
                        <h6>Lorem ipsum dolor sit amet. <span>Proin gravida nibh vel velit auctor aliquet.</span></h6>
                    </hgroup>
                </div>
            </section>
            <section class="team">
                <div class="lwrap">
                    <hgroup>
                        <h2>meet the team</h2>
                        <hr class="hr">
                        <h6>Lorem ipsum dolor sit amet. <span>Proin gravida nibh vel velit auctor aliquet.</span></h6>
                    </hgroup>
                </div>
            </section>
        </div>
        <footer>

        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>