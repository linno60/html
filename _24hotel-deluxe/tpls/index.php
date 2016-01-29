<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hotel-Deluxe</title>
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
            var LAYOUT_WIDTH = 1200;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class='lwrap' data-flex='axis'>
                <div data-flex="-center">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="201" height="23" alt="Hotel-Deluxe">                    
                    </a>
                    <small>Hotel & Motel Theme</small>
                </div>                
                <nav class="links-nav" data-flex='end w' data-childs="-center center">
                    <a href='#' class='active'>start</a>
                    <a href='#'>facilities</a>
                    <a href='#'>restaurant</a>
                    <a href='#'>conference</a>
                    <a href='#'>bookings</a>
                    <a href='#'>contact us</a>
                </nav>
            </div>
        </header>
        <section class='banner' data-flex="col -center center">            
            <span><strong>Hello,</strong> You've Reached</span>
            <h1>hotel deluxe</h1>
            <p>hotel - spa saloon - fine dining</p>
        </section>
        <section class='booking'>
            <div class="lwrap" data-flex="col -center">
                <form action='#' method='post' data-flex='axis' data-childs="col">
                    <fieldset>
                        <label class="label-lg">Arrival</label>
                        <input type="text" name="date" placeholder="21/08/2013">                   
                    </fieldset>
                    <fieldset>
                        <label class="label-lg">Departure</label>
                        <input type="text" name="date" placeholder="21/08/2013"> 
                    </fieldset>
                    <fieldset>
                        <label class="label-lg">Room Type</label>
                        <select>
                            <option>Standard Single Room</option>
                            <option>Superrior Single Room</option>
                            <option>Standard Double Room</option>
                            <option>Superrior Single Rooom</option>
                        </select>
                    </fieldset>
                    <button><span class='btn btn-default'>View Prices</span></button> 
                </form>
                <h2>Book A Package</h2>
                <p>Sed euismod sem id consequat rutrum. Ut convallis lorem a orci mollis, eu vulputate libero aliquet. Praesent egestas nisi sed purus tincidunt faucibus. Aliquam lobortis orci lacus, sed faucibus augue dapibus vitae. Ut vitae mi sapien. Phasellus a eros justo. Curabitur odio massa, tincidunt nec nibh sit amet</p>
                <div class="slider" data-flex="axis">
                    <a href="#"><i class="icon-prev"></i></a>
                    <div data-flex="axis">
                        <figure><img src="/images/preview.png"></figure>
                        <figure><img src="/images/preview.png"></figure>
                        <figure><img src="/images/preview.png"></figure>
                    </div>
                    <a href="#"><i class="icon-next"></i></a>
                </div>  
            </div>
        </section>
        <section class='rooms'>
            <div class='lwrap'>
                <h2>Our Room Types</h2>
                <div data-flex='stripe w' data-childs="col -center">
                    <article>
                        <figure><img src="/images/img1.png"></figure>
                        <h3><a href="#">Standard Double Room</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Prae&shy;sent scelerisque lectus vitae dui sollicitudin commodo.</p>
                        <div class='options'>
                            <i class='icon-condition'></i>
                            <i class='icon-fan'></i>
                            <i class='icon-iron'></i>
                            <i class='icon-tv'></i>
                            <i class='icon-wifi'></i>
                            <i class='icon-cup'></i>                            
                        </div>
                    </article>
                    <article>
                        <figure><img src="/images/img2.png"></figure>
                        <h3><a href="#">Supperior Double Room</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Prae&shy;sent scelerisque lectus vitae dui sollicitudin commodo.</p>
                        <div class='options'>
                            <i class='icon-condition'></i>
                            <i class='icon-fan'></i>
                            <i class='icon-iron'></i>
                            <i class='icon-tv'></i>
                            <i class='icon-wifi'></i>
                            <i class='icon-cup'></i>                            
                        </div>
                    </article>
                    <article>
                        <figure><img src="/images/img3.png"></figure>
                        <h3><a href="#">Family Room</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Prae&shy;sent scelerisque lectus vitae dui sollicitudin commodo.</p>
                        <div class='options'>
                            <i class='icon-condition'></i>
                            <i class='icon-fan'></i>
                            <i class='icon-iron'></i>
                            <i class='icon-tv'></i>
                            <i class='icon-wifi'></i>
                            <i class='icon-cup'></i>                            
                        </div>
                    </article>
                    <article>
                        <figure><img src="/images/img4.png"></figure>
                        <h3><a href="#">Standard Single Room</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Prae&shy;sent scelerisque lectus vitae dui sollicitudin commodo.</p>
                        <div class='options'>
                            <i class='icon-condition'></i>
                            <i class='icon-fan'></i>
                            <i class='icon-iron'></i>
                            <i class='icon-tv'></i>
                            <i class='icon-wifi'></i>
                            <i class='icon-cup'></i>                            
                        </div>
                    </article>
                    <article>
                        <figure><img src="/images/img5.png"></figure>
                        <h3><a href="#">Supperior Single Room</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Prae&shy;sent scelerisque lectus vitae dui sollicitudin commodo.</p>
                        <div class='options'>
                            <i class='icon-condition'></i>
                            <i class='icon-fan'></i>
                            <i class='icon-iron'></i>
                            <i class='icon-tv'></i>
                            <i class='icon-wifi'></i>
                            <i class='icon-cup'></i>                            
                        </div>
                    </article>
                    <article>
                        <figure><img src="/images/img6.png"></figure>
                        <h3><a href="#">VIP Room</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Prae&shy;sent scelerisque lectus vitae dui sollicitudin commodo.</p>
                        <div class='options'>
                            <i class='icon-condition'></i>
                            <i class='icon-fan'></i>
                            <i class='icon-iron'></i>
                            <i class='icon-tv'></i>
                            <i class='icon-wifi'></i>
                            <i class='icon-cup'></i>                            
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class='located'>
            <div class='lwrap' data-flex="col center">
                <h2>143 City&nbsp;&nbsp;Located Hotels World Wide</h2>
                <blockquote>"Hospitality, Quality & Good Locations. We only provide you with the best hotels" <cite>- John Doe</cite></blockquote>
                <figure><img src="/images/man.png"></figure>
            </div>
        </section>
        <footer>
            <div class='lwrap' data-flex="stripe">
                <div>
                    <h5>about this hotel</h5>
                    <p>Suspendisse erat mi, tincidunt sit amet massa quis, commodo fermen&shy;tum diam. Sed nec dui nec nunc tempor interdum. </p>
                    <p>Ut vulputate augue urna, ut porta dolor imperdiet a. Vestibulum nec leo eu magna aliquam ornare.</p>
                </div>
                <div>
                    <h5>latest news</h5>
                    <span>
                        <a href="#">Grand Hotel joins DeluxeHotels</a>
                        <time>15 aug</time>
                    </span>
                    <span>
                        <a href="#">Happy Christmas To Everyone</a>
                        <time>15 aug</time>
                    </span>
                    <span>
                        <a href="#">Best Places To Visit 2014</a>
                        <time>15 aug</time>
                    </span>
                    <span>
                        <a href="#">Various Offers</a>
                        <time>15 aug</time>
                    </span>
                </div>
                <div class="join">
                    <h5>join deluxehotels</h5>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus vestibulum blandit egestas. Nam id lectus vel orci luctus consectetur eget id elit. In tortor odio, pellentesque eu arcu sit amet, lacinia euismod nisi. Aliquam sodales tristique mauris ac fermentum. Donec vel varius ipsum. Pellentesque vitae mollis massa. </p>
                    <p>There is no costs or whatsoever so sign up today!</p>
                    <a href='#' class='btn btn-default'>read more</a>
                </div>
                <div>
                    <h5>members area</h5>
                    <form action="#" method="post" data-flex="col -start">
                        <label>Username</label>
                        <input type="text" name="input">
                        <label>Password</label>
                        <input type="text" name="input">
                        <button><span class='btn btn-default'>login</span></button> 
                    </form>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>