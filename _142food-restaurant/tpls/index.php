<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Food Restaurant</title>
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
    <body>
        <header data-flex="col">
            <section class="top-bar">
                <div class="lwrap" data-flex="axis">
                    <div class="logo-wrap" data-flex="center">
                        <a href="/" title="Return to the homepage" id="logo">
                            <img src="/images/logo.png" width="167" height="87" alt="Food Restaurant">
                        </a> 
                    </div>
                    <ul class="list-duty" data-childs="-center" data-flex="w">
                        <li><i class="icon-clocksm"></i>Order Foods 24/7</li>
                        <li><i class="icon-phonesm"></i>061 9876 5432</li>
                    </ul>
                    <div class="links-social sm" data-flex="-center w">
                        <a href="#"><i class="icon-fbsm"></i></a>
                        <a href="#"><i class="icon-gpsm"></i></a>
                        <a href="#"><i class="icon-twsm"></i></a>
                        <a href="#"><i class="icon-insm"></i></a>
                        <a href="#"><i class="icon-pnsm"></i></a>
                        <a href="#"><i class="icon-ytsm"></i></a>
                        <a href="#"><i class="icon-wasm"></i></a>
                        <a href="#"><i class="icon-igsm"></i></a>
                    </div>
                </div>
            </section>
            <section class="nav-bar">
                <nav class="links-nav lwrap" data-childs="center -center" data-flex="end w">
                    <a href="#">home</a>
                    <a href="#">menu</a>
                    <a href="#">pages</a>
                    <a href="#">delivery</a>
                    <a href="#">news</a>
                    <a href="#">features</a>
                    <a href="#" class="active">table booking</a>   
                </nav>
            </section>
            <section class="banner lwrap" data-flex="col center -center">
                <h1>Foody love</h1>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. </p>
                <a href="#" class="btn btn-alt">Click here</a>
            </section>
        </header>
        <section class="about">
            <div class="lwrap">
                <div class="figure">
                    <figure><img src="/images/aboutimg1.jpg" width="350" height="289" alt=""></figure>
                    <figure><img src="/images/aboutimg2.jpg" width="350" height="289" alt=""></figure>
                </div>
                <article>
                    <hgroup class="hdr">
                        <h2>About us</h2>
                        <h3>we are tasty</h3>
                    </hgroup>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu&shy;stry's stan</p>
                    <p>dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type&shy;set&shy;tingdard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
                    <a href="#" class="btn btn-default">Click here</a>
                </article>
            </div>
        </section>
        <section class="recipes">
            <div class="lwrap" data-flex="axis">
                <article>
                    <hgroup class="hdr">
                        <h2>Special Recipes</h2>
                        <h3>taste of precious</h3>
                    </hgroup>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stan</p>
                    <p>dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesettingdard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
                    <a href="#" class="btn btn-default">Click here</a>
                </article>
                <figure><img src="/images/resipesimg.png" width="670" height="554" alt=""></figure>
            </div>
        </section>
        <section class="experience">
            <div class="lwrap">
                <hgroup class="hdr">
                    <h2>Delightful</h2>
                    <h3>experience</h3>
                </hgroup>
                <div data-flex="stripe w">
                    <figure>
                        <img src="/images/del1.png" width="293" height="305" alt="">
                        <figcaption class="overlay"><span>italian source mushroom</span><big>$12</big><a href="#" class="btn btn-default sm">Click here</a></figcaption>
                    </figure>
                    <figure>
                        <img src="/images/del2.png" width="293" height="305" alt="">
                        <figcaption class="overlay"><span>italian source mushroom</span><big>$12</big><a href="#" class="btn btn-default sm">Click here</a></figcaption>
                    </figure>
                    <figure>
                        <img src="/images/del3.png" width="293" height="305" alt="">
                        <figcaption class="overlay"><span>italian source mushroom</span><big>$12</big><a href="#" class="btn btn-default sm">Click here</a></figcaption>
                    </figure>
                    <figure>
                        <img src="/images/del4.png" width="293" height="305" alt="">
                        <figcaption class="overlay"><span>italian source mushroom</span><big>$12</big><a href="#" class="btn btn-default sm">Click here</a></figcaption>
                    </figure>
                    <figure>
                        <img src="/images/del5.png" width="293" height="305" alt="">
                        <figcaption class="overlay"><span>italian source mushroom</span><big>$12</big><a href="#" class="btn btn-default sm">Click here</a></figcaption>
                    </figure>
                    <figure>
                        <img src="/images/del6.png" width="293" height="305" alt="">
                        <figcaption class="overlay"><span>italian source mushroom</span><big>$12</big><a href="#" class="btn btn-default sm">Click here</a></figcaption>
                    </figure>
                    <figure>
                        <img src="/images/del7.png" width="293" height="305" alt="">
                        <figcaption class="overlay"><span>italian source mushroom</span><big>$12</big><a href="#" class="btn btn-default sm">Click here</a></figcaption>
                    </figure>
                    <figure>
                        <img src="/images/del8.png" width="293" height="305" alt="">
                        <figcaption class="overlay"><span>italian source mushroom</span><big>$12</big><a href="#" class="btn btn-default sm">Click here</a></figcaption>
                    </figure>
                </div>
            </div>
        </section>
        <section class="menu">
            <div class="lwrap">
                <hgroup class="hdr">
                    <h2>Amazing</h2>
                    <h3>delicious</h3>
                </hgroup>
                <div data-childs="axis">
                    <div class="menu-item">
                        <figure><img src="/images/drinks.png" width="668" height="536" alt=""></figure>
                        <div>
                            <h4>Drinks</h4>
                            <dl class="list-menu" data-childs="axis">
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                            </dl>
                        </div>
                    </div>
                    <div class="menu-item">
                        <figure><img src="/images/main.png" width="668" height="536" alt=""></figure>
                        <div>
                            <h4>Main course</h4>
                            <dl class="list-menu" data-childs="axis">
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                            </dl>
                        </div>
                    </div>
                    <div class="menu-item">
                        <figure><img src="/images/dessert.png" width="668" height="536" alt=""></figure>
                        <div>
                            <h4>Desserts</h4>
                            <dl class="list-menu" data-childs="axis">
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                                <li>
                                <dd>
                                    <figure><img src="/images/menuimg.png" width="52" height="52" alt=""></figure>
                                    Tuna Roast Source
                                </dd>
                                <dt>$24.5</dt>
                                </li>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="apps">
            <div class="lwrap" data-flex="stripe">
                <figure><img src="/images/iphone.png" width="271" height="553" alt=""></figure>
                <div>
                    <hgroup>
                        <h6>Happy to Announce</h6>
                        <h2>mobile app</h2>
                        <h5>is available in every os platform.</h5>
                    </hgroup>
                    <div data-flex="stripe w">
                        <a href="#"><img src="/images/googleplay.png" width="243" height="84" alt=""></a>
                        <a href="#"><img src="/images/appstore.png" width="269" height="84" alt=""></a>
                    </div>
                </div>
            </div>
        </section>  
        <footer>
            <section class="footer">
                <div class="lwrap" data-flex="stripe">
                    <div data-flex="vaxis" class="contacts">
                        <div>
                            <h5>Take it easy with location</h5>
                            <address>112-Legere ancillae vix ne.<br> Te elit putent propriae eum,<br> aliquip nominati</address>
                            <dl>
                                <li>
                                <dd>phone:</dd>
                                <dt>00 000 000</dt>
                                </li>
                                <li>
                                <dd>Email:</dd>
                                <dt><a href="mailto:support@templatemela.com">support@templatemela.com</a></dt>
                                </li>
                            </dl> 
                        </div>
                        <div class="links-social" data-flex="center -center w">
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-gp"></i></a>
                            <a href="#"><i class="icon-tw"></i></a>
                            <a href="#"><i class="icon-in"></i></a>
                            <a href="#"><i class="icon-pn"></i></a>
                            <a href="#"><i class="icon-yt"></i></a>
                            <a href="#"><i class="icon-wa"></i></a>
                            <a href="#"><i class="icon-ig"></i></a>
                        </div>
                    </div>
                    <div class="working">
                        <h5>Working Hours</h5>
                        <h6>Monday To Friday</h6>
                        <ul>
                            <li>8:00am to 10:00pm(Breakfast)</li>
                            <li>11:00am to 10:00pm(Lunch/Dinner)</li>
                        </ul>
                        <h6>Saturday & Sunday</h6>
                        <ul>
                            <li>10:00am to 11:00pm(Breakfast)</li>
                            <li>11:00am to 12:00pm(Lunch/Dinner)</li>
                        </ul>
                    </div>
                    <div class="form-wrap">
                        <h5>Feedback form</h5>
                        <form action="#" method="post">
                            <input class="input-default" type="text" name="form" placeholder="Name">
                            <input class="input-default" type="email" name="form" placeholder="Email">
                            <input class="input-default" type="tel" name="form" placeholder="Phone">
                            <textarea class="textarea-default" placeholder="Message"></textarea>
                            <button><span class="btn btn-default">Submit</span></button>
                        </form>
                    </div>
                </div>
            </section>
            <section class="copyright lwrap">
                <span>Copyright &copy; 2016 PSDFreebies.com</span>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>