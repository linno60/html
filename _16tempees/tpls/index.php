<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tempees</title>
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
            var LAYOUT_WIDTH = 960;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="lwrap" data-flex="axis">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="158" height="42" alt="Tempees">
                </a>
                <nav class="links-nav" data-flex="end w">
                    <a href="#">About us</a>
                    <a href="#">Services</a>
                    <a href="#">Prices</a>
                    <a href="#">Contact</a>
                </nav>
            </div>
        </header>
        <section class="slider">
            <div class="lwrap" data-flex="stripe">
                <div data-flex="-end">
                    <figure><img src="images/phone.png"></figure>
                </div>
                <div data-flex="vstripe">
                    <div></div>
                    <div>
                        <h1>iOS apps for free</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus augue vitae est volutpat eleifend.</p>
                        <a href="#" class="btn btn-slider">more info</a>
                    </div>
                    <div class="links-controls" data-flex="end">
                        <a href="#" class="active"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="services lwrap">
            <h2 class="title" data-flex="-center center">our services</h2>
            <div data-flex="stripe" data-childs="col -center" data-flex-480="vstripe">
                <article>
                    <i class="icon-apple"></i>
                    <h3>heading 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus augue vitae est volutpat eleifend. </p>
                    <a href="#" class="btn btn-default">more info</a>
                </article>
                <article>
                    <i class="icon-android"></i>
                    <h3>heading 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus augue vitae est volutpat eleifend. </p>
                    <a href="#" class="btn btn-default">more info</a>
                </article>
                <article>
                    <i class="icon-win8"></i>
                    <h3>heading 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus augue vitae est volutpat eleifend. </p>
                    <a href="#" class="btn btn-default">more info</a>
                </article>
            </div>
        </section>
        <section class="about">            
            <div class="lwrap">                
                <h2 class="title" data-flex="-center center">about</h2>
                <div data-flex="stripe" data-flex-480="vstripe">
                    <div>
                        <h3>Tempees.com</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus augue vitae est volutpat eleifend. Donec lobortis tellus quis nulla varius nec sagittis dui vestibulum. Mauris volutpat tellus id est suscipit placerat. Integer ut feugiat nisi. Etiam dictum condimentum mauris, nec pellen&shy;tesque augue dignissim ut. Integer commodo vulputate ipsum at vehicula. Fusce sit amet metus quam. In hac habitasse platea dictumst.</p>
                        <h4>skills</h4>
                        <ul class="list-skills" data-childs="stripe">
                            <li>html / html5</li>
                            <li>css / css3</li>
                            <li>Photoshop / illustrator</li>
                            <li>mobile design / responsive design</li>
                        </ul>
                    </div>
                    <div data-flex="col">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8505.038451901682!2d43.965580613990085!3d26.328825230878778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1436953049202"></iframe>   
                        <form action="#" method="post" data-flex="col">
                            <input type="text" name="input" placeholder="name">
                            <input type="email" name="input" placeholder="e-mail">
                            <input type="tel" name="input" placeholder="phone">
                            <textarea placeholder="message"></textarea>
                            <div data-flex="end">
                                <button><span class="btn btn-default">send</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <footer data-flex="-center center">
        <span>Copyright 2013 © <a href="#">Tempees.com</a> All Rights Reserved.</span>
    </footer>
    <script src="/js/jquery/jquery-2.1.4.min.js"></script>
    <script src="/js/tabs-accordions.js"></script>
    <script src="/js/index.js"></script>
</body>
</html>