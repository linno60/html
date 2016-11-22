<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Elsta</title>
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
            var LAYOUT_WIDTH = 1190;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col">
        <div>
            <header>
                <div class="lwrap" data-flex>
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="142" height="133" alt="Elsta">
                    </a>  
                </div>
                <div class="slider" data-flex="axis">
                    <input name="anchor" id='slide-0' type="radio">
                    <input name="anchor" id='slide-1' type="radio">
                    <input name="anchor" id='slide-2' type="radio">
                    <input name="anchor" id='play' type="radio" checked>
                    <div class="empty"></div>
                    <ul class="lwrap" data-childs="axis" data-childs-480="vstripe">
                        <li>
                            <article>
                                <h2>Awesome Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labornisi ut aliquip ex ea commodo consequa</p>
                                <a href="#" class="btn btn-default">down&shy;load</a>
                            </article>
                            <figure><img src="/images/iphone.png" width="244" height="526" alt=""></figure>
                        </li>
                        <li class='num0'>
                            <article>
                                <h2>Awesome Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labornisi ut aliquip ex ea commodo consequa</p>
                                <a href="#" class="btn btn-default">down&shy;load</a>
                            </article>
                            <figure><img src="/images/iphone.png" width="244" height="526" alt=""></figure>
                        </li>
                        <li class='num1'>                        
                            <article>
                                <h2>Awesome Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labornisi ut aliquip ex ea commodo consequa</p>
                                <a href="#" class="btn btn-default">down&shy;load</a>
                            </article>
                            <figure><img src="/images/iphone2.png" width="244" height="526" alt=""></figure>
                        </li>
                        <li class='num2'>
                            <article>
                                <h2>Awesome Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labornisi ut aliquip ex ea commodo consequa</p>
                                <a href="#" class="btn btn-default">down&shy;load</a>
                            </article>
                            <figure><img src="/images/iphone3.png" width="244" height="526" alt=""></figure>
                        </li>
                    </ul>
                    <div class='bullets'>
                        <label class='num0' for='slide-0'></label>
                        <label class='num1' for='slide-1'></label>
                        <label class='num2' for='slide-2'></label>                    
                    </div>
                </div>
            </header>
            <section class="intro lwrap">
                <h1>Welcome To elsta</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </section>
            <section class="apps">
                <div class="lwrap" data-flex="axis" data-flex-480="vstripe">
                    <article>
                        <h4>Get The App</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa</p>
                        <a href="#" class="btn btn-default">down&shy;load</a>
                    </article>
                    <div class="video">
                        <figure data-video="16:9"><iframe width="560" height="315" src="https://www.youtube.com/embed/-BrDlrytgm8" frameborder="0" allowfullscreen></iframe></figure>
                    </div>
                </div>
            </section>
            <section class="features lwrap" data-flex="stripe w">
                <article>
                    <i class="icon-mail"></i>
                    <hr>
                    <h4>Great concept</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </article>
                <article>
                    <i class="icon-user"></i>
                    <hr>
                    <h4>User Friendly</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </article>
                <article>
                    <i class="icon-settings"></i>
                    <hr>
                    <h4>Easy to Costmize</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </article>
                <article>
                    <i class="icon-key"></i>
                    <hr>
                    <h4>Secure Page</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </article>
            </section>
            <hr class="hr upper">
            <section class="testimonials lwrap">
                <blockquote data-flex="col -center">
                    <cite>
                        <figure><img src="/images/john.png" width="152" height="152" alt=""></figure>
                        John Smith, CEO
                    </cite>
                    <big>&rdquo;</big>
                    <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa</q>
                    <big>&rdquo;</big>
                </blockquote>
            </section>
            <hr class="hr under">
            <section class="pricing lwrap">
                <hgroup>
                    <h3>Pricing Plans</h3>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h5>
                </hgroup>
                <div data-flex="stripe w">
                    <div class="plan-item">
                        <div class="lbl lbl-default"> <span>$<big>25</big></span> <small>/month</small></div>
                        <hgroup>
                            <h4>Basic</h4>
                            <h6>Description hoes here</h6>
                        </hgroup>
                        <ul class="list-default">
                            <li>Feature 1</li>
                            <li>Feature 2</li>
                            <li>Feature 3</li>
                            <li>Feature 4</li>
                        </ul>
                        <a href="#" class="btn btn-default alt">pur­chase</a>
                    </div>
                    <div class="plan-item">
                        <div class="lbl lbl-default"> <span>$<big>50</big></span> <small>/month</small></div>
                        <hgroup>
                            <h4>Standard</h4>
                            <h6>Description hoes here</h6>
                        </hgroup>
                        <ul class="list-default">
                            <li>Feature 1</li>
                            <li>Feature 2</li>
                            <li>Feature 3</li>
                            <li>Feature 4</li>
                        </ul>
                        <a href="#" class="btn btn-default alt">pur­chase</a>
                    </div>
                    <div class="plan-item active">
                        <div class="lbl lbl-default"> <span>$<big>75</big></span> <small>/month</small></div>
                        <hgroup>
                            <h4>Deluxe</h4>
                            <h6>Description hoes here</h6>
                        </hgroup>
                        <ul class="list-default">
                            <li>Feature 1</li>
                            <li>Feature 2</li>
                            <li>Feature 3</li>
                            <li>Feature 4</li>
                        </ul>
                        <a href="#" class="btn btn-default alt">pur­chase</a>
                    </div>
                    <div class="plan-item">
                        <div class="lbl lbl-default"> <span>$<big>99</big></span> <small>/month</small></div>
                        <hgroup>
                            <h4>Premium</h4>
                            <h6>Description hoes here</h6>
                        </hgroup>
                        <ul class="list-default">
                            <li>Feature 1</li>
                            <li>Feature 2</li>
                            <li>Feature 3</li>
                            <li>Feature 4</li>
                        </ul>
                        <a href="#" class="btn btn-default alt">pur­chase</a>
                    </div>
                </div>
            </section>
            <section class="contacts lwrap" data-flex="col -center">
                <hgroup>
                    <h3>Contact Us</h3>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h5>
                </hgroup>
                <form action="#" method="post" data-flex="col -center">
                    <div data-flex="stripe" data-flex-480="vstripe">                        
                        <input type="text" name="form" class="input-default" placeholder="Name">
                        <input type="email" name="form" class="input-default" placeholder="Email">
                    </div>
                    <textarea name="form" class="textarea-default" placeholder="Message....."></textarea>
                    <button><span class="btn btn-default">send</span></button>
                </form>
            </section>
        </div>
        <footer>
            <div class="lwrap" data-flex="axis">
                <div data-flex="col -start">
                    <a href="/" title="Return to the homepage" id="logoalt">
                        <img src="/images/logoalt.png" width="119" height="52" alt="Elsta">
                    </a>
                    <span>All Rights Reserved &copy; 2014</span>
                </div>
                <div class="links-social" data-flex="end w">
                    <a href="#"><i class="icon-fb"></i></a>
                    <a href="#"><i class="icon-tw"></i></a>
                    <a href="#"><i class="icon-gp"></i></a>    
                </div> 
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>