<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Apprmb</title>
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
    <body data-flex="col between">
        <div>
            <header>
                <div class="lwrap" data-flex="axis">
                    <div data-flex="col -start">
                        <a href="/" title="Return to the homepage" id="logo">
                            <img src="/images/logo.png" height="45" width="106" alt="Apprmb">
                        </a>
                        <span>save all what do you like on one place / in one app :)</span>
                    </div>
                    <a href="#" class="btn btn-alt">download app</a>
                    <div class="links-top" data-flex="-center center w">
                        <a href="#">more info</a>|
                        <a href="#">contact us</a>
                    </div>
                </div>
            </header>
            <div class="slider">
                <div class="lwrap" data-flex="axis">
                    <figure><img src="/images/iphone.png" width="318" height="407" alt=""></figure>
                    <div>
                        <figure class="wrap">
                            <div class="video" data-video="16:9"><iframe width="560" height="315" src="https://www.youtube.com/embed/5_8Zreg1RRQ" frameborder="0" allowfullscreen></iframe></div>
                        </figure>
                        <div class="action">Don't miss the chance and download this app :)</div>
                    </div>
                </div>
            </div>
            <div class="lwrap content">
                <div class="hdr" data-flex="axis">
                    <h2>More info</h2>
                    <a href="#" class="btn btn-alt">download app</a>
                </div>
                <div data-flex="stripe">
                    <aside class="sidebar">
                        <article class="wrap">
                            <h3>About app</h3>
                            <em>Morbi egestas adipiscing bibendum. Nullam consequat aliquam massa sed posuere. Aenean sodales est non sapien laoreet accumsan. </em>
                            <p>Integer molestie bibendum est, ac sol&shy;licitudin erat bibendum a. Proin convallis elit eu felis iaculis placerat. Vivamus in nisi ipsum. Etiam dignissim tristique lectus, eget consectetur metus auctor eu. Donec vitae risus lacus, eu bibendum ipsum.</p>
                        </article>
                        <div>
                            <h4>Newsletter</h4>
                            <form action="#" method="post" data-flex="col -end">
                                <input type="email" name="input" placeholder="your e-mail">
                                <button><span class="btn btn-default">submit</span></button>
                            </form>
                        </div>
                        <div data-flex="w">
                            <h4>Follow us</h4>
                            <div class="links-social" data-flex="w" data-childs="-center"> 
                                <a href="#"><i class="icon-tw"></i>twitter</a>
                                <a href="#"><i class="icon-fb"></i>facebook</a>
                            </div>
                        </div>
                    </aside>
                    <div>
                        <div class="wrap functions">
                            <h3>Functions</h3>
                            <div data-flex="stripe w">
                                <article>
                                    <h4 data-flex="-center"><i class="icon-microphone"></i>Music</h4>
                                    <p>Suspendisse a metus sit amet odio elementum suscipit id lectus sed accumsan ipsum.</p>
                                </article>
                                <article>
                                    <h4 data-flex="-center"><i class="icon-images"></i>Photos</h4>
                                    <p>Vestibulum laoreet mollis felis vitae volutpat. Vivamus malesuada metus vitae neque adipiscing sollicitudin.</p>
                                </article>
                                <article>
                                    <h4 data-flex="-center"><i class="icon-marker"></i>Places</h4>
                                    <p>Proin posuere sem ac justo pulvinar malesuada. Suspendisse facilisis quam sed arcu dictum congue nisi iaculis.</p>
                                </article>
                                <article>
                                    <h4 data-flex="-center"><i class="icon-bubbles"></i>Hot discussions</h4>
                                    <p>Praesent dictum elit quis est pharetra vitae venenatis nunc posuere. Sed vet est volutpat ultrices et sed sapien.</p>
                                </article>
                                <article>
                                    <h4 data-flex="-center"><i class="icon-mail"></i>Messages</h4>
                                    <p>Donec egestas bibendum neque, posuere pulvinar lacus porta at.</p>
                                </article>
                                <article>
                                    <h4 data-flex="-center"><i class="icon-fav"></i>Favorite</h4>
                                    <p>Etiam quis nibh quis nulla placerat scelerisque.</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="lwrap">
                <h2>Contact us</h2>
                <div data-flex="-start between">
                    <div class="contact">
                        <div data-flex="stripe">
                            <div>
                                <address>123 Appdrive STR.<br>New York, 12345</address>
                                <span>phone: (238)&ndash;123&ndash;4567</span>
                                <span>email: <a href="mailto:tempees@temppees.com">tempees@tempees.com</a></span>
                            </div>
                            <figure><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d171337.03543942622!2d35.17535355!3d47.856229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1449773041469" allowfullscreen></iframe></figure>
                        </div>
                        <span class="question" data-flex="end">Any questions?</span>
                    </div>
                    <form action="#" method="post" data-flex="-start between">
                        <div>
                            <input type="text" name="input" placeholder="name">
                            <input type="email" name="input" placeholder="email">
                            <input type="text" name="input" placeholder="phone">
                        </div>
                        <div data-flex="-start end w">
                            <textarea placeholder="message"></textarea>
                            <div class="captcha" data-flex="-center end"><span>2 + 3 =</span><input type="text"></div>
                            <button><span class="btn btn-default">send</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>