<!DOCTYPE html>
<html lang="en">
    <head>
        <title>burgers.co</title>
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
    <body data-flex="col">
        <div>
            <header>
                <div class="lwrap" data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="168" height="21" alt="burgers.co" >
                    </a>
                    <nav class="links-nav" data-flex="end w" data-childs="center -center">
                        <a href="#" class="active">home</a>
                        <a href="#">our burgers</a>
                        <a href="#">what else?</a>
                        <a href="#">photos</a>
                        <a href="#">contact</a>
                    </nav>
                </div>
            </header>
            <section class="presentation" data-flex="stripe">
                <div data-flex="end">
                    <div>
                        <h1>We create Burgers.</h1>
                        <p>Beautiful hand crafted burgers with tangy sauce lettuce, onions, pickles and our specials.</p>
                    </div>
                </div>
                <div data-flex>
                    <div>
                        <h1>Delicious.</h1>
                        <p>Oh yes, they are as they are made with hands and our chef loves them to the core.</p>
                        <span>Are they really?</span><a href="#" class="btn btn-default">Show me<i class="icon-burger"></i></a>
                    </div>
                </div>
            </section>
            <section class="lwrap menu">
                <div>
                    
                </div>
            </section>
        </div>
        <footer>
            <div class="lwrap" data-childs="col" data-flex="stripe">
                <form action="#" method="post">
                    <label>Fill this form to get in touch with us.</label>
                    <input class="input-default" type="text" name="form" placeholder="Write your full name here">
                    <input class="input-default" type="email" name="form" placeholder="Email Address here">
                    <input class="input-default" type="tel" name="form" placeholder="Phone Number">
                    <textarea class="textarea-default" placeholder="Message you want to deliver..."></textarea>
                    <button><span class="btn btn-submit">Submit Now</span></button>
                </form>
                <div class="contacts">
                    <figure><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d21424.490993895964!2d35.1460846!3d47.83840435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1479413902031"></iframe></figure>
                    <address>272 Collin Street, Melbourne 3000</address>
                    <div><small>Call |</small><big>09005896</big></div>
                </div>
            </div>
            <div class="copyright">
                <div class="lwrap" data-flex="axis">
                    <span>all rights reserved - 2016 DesignCoon</span>
                    <a href="#">www.selfy.com/designcoon</a>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>