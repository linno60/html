<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Flat-Web</title>
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
            var LAYOUT_WIDTH = 1140;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <section class="lwrap" data-flex="axis" data-flex-480="vaxis">
                <a href="/" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="184" height="36" alt="Flat-Web">
                </a>
                <nav class="links-nav" data-flex="center w" data-childs="-center center">
                    <a href="#" class="active">Home</a>
                    <a href="#">Our services</a>
                    <a href="#">References / Works</a>
                    <a href="#">Career</a>
                    <a href="#">Contact us</a>
                </nav>
                <form action="#" method="post">
                    <input type="search" name="search" placeholder="search term...">
                </form>
            </section>
            <section class="header">
                <div class="lwrap" data-flex="-end">
                    <h1>We are your best choice</h1>                    
                </div>
            </section>
        </header>
        <section class="info">
            <div class="lwrap" data-flex="stripe w" data-childs="col -center">
                <article>
                    <h3 class="hdr">lorem ipsum</h3>
                    <i class="icon-sun"></i>
                    <p>Aenean consequat at tortor ac feugiat. Praesent at tristique ipsum. Cras henrit volutpat vulputate.</p>
                    <a href="#">more info</a>
                </article>
                <article>
                    <h3 class="hdr">dolor sit amet</h3>
                    <i class="icon-music"></i>
                    <p>Aenean consequat at tortor ac feugiat. Praesent at tristique ipsum. Cras henrit volutpat vulputate.</p>
                    <a href="#">more info</a>
                </article>
                <article>
                    <h3 class="hdr">nullam in ultricies</h3>
                    <i class="icon-record"></i>
                    <p>Aenean consequat at tortor ac feugiat. Praesent at tristique ipsum. Cras henrit volutpat vulputate.</p>
                    <a href="#">more info</a>
                </article>
                <article>
                    <h3 class="hdr">vestibulum at sapie</h3>
                    <i class="icon-video"></i>
                    <p>Aenean consequat at tortor ac feugiat. Praesent at tristique ipsum. Cras henrit volutpat vulputate.</p>
                    <a href="#">more info</a>
                </article>
            </div>
        </section>
        <section class="advantages">
            <div class="lwrap">
                <h2>We are no. 1 ... <strong>WHY?</strong></h2>
                <div data-flex="stripe" data-flex-480="vstripe">
                    <ul class="list-default" data-childs>
                        <li>Best hardware around the world</li>
                        <li>10 TB Storage for all our clients</li>
                        <li>Easy powerfull control panel with special tools</li>
                    </ul>
                    <ul class="list-default" data-childs>
                        <li>Free updates every month</li>
                        <li>Managed uptime, OS support & security</li>
                        <li>24/7 customer via phone and email to help you implement</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="customers">
            <div class="lwrap" data-flex="-center center">
                <p>Our company have more than <strong>200.000 customers</strong> around the world!</p>
            </div>
        </section>
        <section class="logos lwrap" data-flex="stripe w">
            <figure><img src="/images/1.png"></figure>
            <figure><img src="/images/2.png"></figure>
            <figure><img src="/images/3.png"></figure>
            <figure><img src="/images/4.png"></figure>
            <figure><img src="/images/5.png"></figure>
            <figure><img src="/images/6.png"></figure>
            <figure><img src="/images/7.png"></figure>
            <figure><img src="/images/8.png"></figure>
        </section>
        <footer>
            <section class="lwrap" data-flex="stripe w"> 
                <div>
                    <h3 class="hdr-alt">company</h3>
                    <div class="links-footer" data-flex="col -start" data-childs="-start">
                        <a href="#">About us</a>
                        <a href="#">Career</a>
                        <a href="#">Our works / References</a>
                        <a href="#">Contact us</a>
                    </div>
                </div>
                <div>
                    <h3 class="hdr-alt">our services</h3>
                    <div class="links-footer" data-flex="col -start" data-childs="-start">
                        <a href="#">Lorem ipsum</a>
                        <a href="#">Dolor sit amet</a>
                        <a href="#">Nullam in ultricies</a>
                        <a href="#">Vestibulum at sapie</a>
                    </div>
                </div>
                <div>
                    <h3 class="hdr-alt" data-flex="center">contact us</h3>
                    <div data-flex="col -center">
                        <b>588 125 4666</b>
                        <a href="mailto:support@yourdomain.com" class="mail">support@&shy;yourdomain.com</a>
                        <address>5 Place Road Park New York 24856</address>
                    </div>
                </div>
                <div data-flex="-start center">
                    <figure><img src="/images/paypal.png"></figure>
                </div>
            </section>
        </footer>
    </header>
    <script src="/js/jquery/jquery-2.1.4.min.js"></script>
    <script src="/js/tabs-accordions.js"></script>
    <script src="/js/index.js"></script>
</body>
</html>