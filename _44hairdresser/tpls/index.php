<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hairdresser</title>
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
            var LAYOUT_WIDTH = 1100;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="nav lwrap" data-flex="axis" data-flex-640="vaxis">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="210" height="27" alt="Hairdresser">
                </a>
                <nav class="links-nav" data-flex="-center end" data-childs="-center center" data-flex-640="center -center w">
                    <a href="#" class="active">home</a>
                    <a href="#">tour</a>
                    <a href="#">buzz</a>
                    <a href="#">pricing</a>
                    <a href="#">sign up</a>
                    <a href="#">legal</a>
                    <a href="#">contact</a>
                </nav>
            </div>
            <div class="header lwrap" data-flex="stripe" data-flex-640="vstripe">
                <div data-flex-640="stripe w" data-flex-480="vstripe">
                    <hgroup class="hgroup" data-flex="col -start">
                        <h1>try out the free trial!</h1>
                        <h3>by simply filling out the form below</h3>
                    </hgroup>
                    <form action="#" method="post" data-flex="col">
                        <input type="text" name="input" placeholder="your name">
                        <input type="email" name="input" placeholder="your email address">
                        <input type="password" name="input" placeholder="password">
                    </form>
                    <a href="#" class="btn btn-start" data-childs="col center"><span><strong>start the free trial</strong><small>and enjoy it for 2 months!</small></span></a>
                    <div data-flex="w" class="btns">
                        <a href="#" class="btn btn-app"><i class="icon-appstore"></i></a>
                        <a href="#" class="btn btn-app"><i class="icon-gp"></i></a>
                    </div>
                </div>
                <div>
                    <figure><img src="/images/phone1.png" width="276" height="516" alt=""></figure>
                    <figure><img src="/images/phone2.png" width="385" height="700" alt=""></figure>
                </div>
            </div>           
        </header>
        <section class="features lwrap" data-flex="stripe" data-flex-640="stripe w">
            <div data-flex="col -start between">
                <article>
                    <h2>features<br><span>& benefits</span></h2>
                    <p>Phasellus ornare dui non arcu posuere suscipit</p>  
                </article>
                <a href="#" class="btn btn-default"><i class="icon-arrow"></i>all features</a>
            </div>
            <div data-flex="col -center">
                <i class="icon-scissors"></i>
                <article>
                    <h3>ut commodo mi id mi</h3>
                    <p>Quisque dictum tortor volutpat, scelerisque lectus id, suscipit risus.</p>  
                </article>
            </div>
            <div data-flex="col -center">
                <i class="icon-currency"></i>
                <article>
                    <h3>morbi aliquam</h3>
                    <p>Cras sed orci id turpis laoreet aliquam in nec libero.</p>
                </article>
            </div>
            <div data-flex="col -center">
                <i class="icon-dryer"></i>
                <article>
                    <h3>ut dolor</h3>
                    <p>Curabitur bibendum est in ipsum ullamcorper</p>
                </article>
            </div>
        </section>
        <section class="testimonials lwrap">
            <hgroup class="hgroup-alt" data-flex="col -center">
                <h2><i class="icon-heart"></i>our clients love our app..</h2>
                <h4>just check out what they say:</h4>
            </hgroup>
            <blockquote data-flex="col -center" data-childs="col -center">
                <q>"Praesent id tellus justo. Quisque dictum tortor volutpat, scelerisque lectus id, suscipit risus. Donec tellus dolor, vehicula nec fermentum a, bibendum ut neque. Duis at turpis odio. Morbi aliquam at lacus vel scelerisque. Cras sed orci id turpis laoreet aliquam in nec libero."</q>
                <cite><span>Justin Lin</span><small>(Award winning hair stylist, NYC)</small></cite>
            </blockquote>
        </section> 
        <footer data-flex="col -center">
            <span>Copyright 2013 &copy; <a href="#">hairdresser</a>. All rights Reserved.</span>            
            <small>follow us on:</small>
            <div class="links-social" data-flex="center w" data-childs="-center center">                    
                <a href="#"><i class="icon-fb"></i></a>
                <a href="#"><i class="icon-tw"></i></a>
                <a href="#"><i class="icon-fl"></i></a>
            </div>               
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>