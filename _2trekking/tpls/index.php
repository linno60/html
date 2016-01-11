<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trekking</title>
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
            var LAYOUT_WIDTH = 1110;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="lwrap" data-flex='vaxis'>                
                <div data-flex="axis">
                    <a href='#'><i class='icon-shoe'></i></a>
                    <nav class="links-nav" data-flex='-center end'>
                        <a href='#'>Home</a>
                        <a href='#'>Products</a>
                        <a href='#'><i class='icon-cart'></i></a>
                    </nav>
                </div>
                <div data-flex='vaxis'>
                    <h1>Our clothing , your comfort</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore<br> magna aliqua.</p>
                </div>
                <a href='#'><i class='icon-check'></i></a>
            </div>
        </header>
        <section class='filter-wrap'>
            <div class='lwrap' data-flex='axis w'>
                <form data-flex="w">
                    <input type='checkbox' name='check' id='c1' checked>
                    <label data-flex='-center' for='c1'>men</label>
                    <input type='checkbox' name='check' id='c2' checked>
                    <label data-flex='-center' for='c2'>women</label>
                    <input type='checkbox' name='check' id='c3'>
                    <label data-flex='-center' for='c3'>children</label>
                </form>
                <a href='#' class='btn btn-default'>see all products</a>
            </div>
        </section>
        <section class='lwrap products'>
            <div>
                <h2 class="title" data-flex="axis">men</h2>
                <div class='pagination' data-flex='col -end'>
                    <div><span>1</span> / <span>5</span></div>
                    <div>
                        <a href='#'><i class='icon-left'></i></a>
                        <a href='#'><i class='icon-right'></i></a>
                    </div>
                </div>
                <div class='grid' data-flex='stripe' data-flex-480='vstripe'>
                    <div class='product' data-flex='vaxis'>
                        <form action="#" method="post" data-flex='axis'>
                            <select>
                                <option>size</option>
                                <option>l</option>
                                <option>m</option>
                            </select>
                            <div  data-flex="end">
                                <input type="radio" name="color" class='blue' id="r1">
                                <label for="r1"></label>
                                <input type="radio" name="color" class='yellow' id="r2">
                                <label for="r2"></label>
                                <input type="radio" name="color" class='black' id="r3">
                                <label for="r3"></label>
                            </div>
                        </form>
                        <figure><img src="/images/1.png"></figure>
                        <div data-flex='axis'>
                            <a href="#" class='name'>t-shirt</a>
                            <span class='price'>5,00&euro;</span>
                        </div>
                    </div>
                    <div class='product' data-flex='vaxis'>
                        <form action="#" method="post" data-flex='axis'>
                            <select>
                                <option>size</option>
                                <option>l</option>
                                <option>m</option>
                            </select>
                        </form>
                        <figure><img src="/images/2.png"></figure>
                        <div data-flex='axis'>
                            <a href='#' class='name'>pants forclaz</a>
                            <span class='price'>30,00&euro;</span>
                        </div>
                    </div>
                    <div class='product' data-flex='vaxis'>
                        <form action="#" method="post" data-flex='axis'>
                            <select>
                                <option>10 litri</option>
                                <option>l</option>
                                <option>m</option>
                            </select>
                        </form>
                        <figure><img src="/images/3.png"></figure>
                        <div data-flex='axis'>
                            <a href='#' class='name'>backpack</a>
                            <span class='price'>60,00&euro;</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="title" data-flex="axis r">women</h2>
                <div class='pagination' data-flex='col'>
                    <div><span>1</span> / <span>5</span></div>
                    <div>
                        <a href='#'><i class='icon-left'></i></a>
                        <a href='#'><i class='icon-right'></i></a>
                    </div>
                </div>
                <div class='grid' data-flex='stripe' data-flex-480='vstripe'>
                    <div class='product' data-flex='vaxis'>
                        <form action="#" method="post" data-flex='axis'>
                            <select>
                                <option>size</option>
                                <option>l</option>
                                <option>m</option>
                            </select>
                        </form>
                        <figure><img src="/images/4.png"></figure>
                        <div data-flex='axis'>
                            <a href='#' class='name'>giaket</a>
                            <span class='price'>60,00&euro;</span>
                        </div>
                    </div>
                    <div class='product' data-flex='vaxis'>
                        <form action="#" method="post" data-flex='axis'>
                            <select>
                                <option>size</option>
                                <option>l</option>
                                <option>m</option>
                            </select>
                        </form>
                        <figure><img src="/images/5.png"></figure>
                        <div data-flex='axis'>
                            <a href='#' class='name'>trekking shoes</a>
                            <span class='price'>80,00&euro;</span>
                        </div>
                    </div>
                    <div class='product' data-flex='vaxis'>
                        <form action="#" method="post" data-flex='axis'>
                            <select>
                                <option>size</option>
                                <option>l</option>
                                <option>m</option>
                            </select>
                            <div data-flex="end">
                                <input type="radio" name="color" class='pink' id="r4">
                                <label for="r4"></label>
                                <input type="radio" name="color" class='white' id="r5">
                                <label for="r5"></label>
                            </div>
                        </form>
                        <figure><img src="/images/6.png"></figure>
                        <div data-flex='axis'>
                            <a href='#' class='name'>t-shirt</a>
                            <span class='price'>20,00&euro;</span>
                        </div>
                    </div>
                </div>
            </div>  
        </section>
        <section class='about-wrap' data-flex='-center center'>
            <div data-flex='col -center center'>
                <h3>about&nbsp;us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
        </section>
        <section class='twitter-wrap'>
            <div class="lwrap" data-flex='-center'>
                <i class='icon-twitter'></i>
                <p>" E-commerce psd theme available "</p>
            </div>
        </section>
        <footer>
            <div class='lwrap' data-flex="axis w" data-flex-640="vstripe">
                <div>
                    <h4>trekking</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div data-flex="col -end">
                    <nav class="links-footer" data-flex='-center end w'>
                        <a href='#'>credits</a>|
                        <a href='#'>privacy</a>|
                        <a href='#'>about</a>|
                        <a href='#'>contact</a>
                    </nav>
                    <span>Design by gianluca cosetta</span>
                </div>  
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>