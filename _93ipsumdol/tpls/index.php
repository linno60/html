<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ipsumdol</title>
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
        <div class="lwrap">
            <header>
                <div class="header" data-flex="axis" data-flex-480="vaxis">
                    <a href="#" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="259" height="23" alt="Ipsumdol">
                    </a>
                    <div class="contact" data-flex="col -end"  data-flex-480="vaxis">
                        <small>Have you any questions? <strong>Call Us!</strong></small>
                        <span>+000 555 123 456</span>
                    </div>
                </div>
                <nav class="links-nav" data-flex="-center around w">
                    <a href="#">main page</a><div></div>
                    <a href="#">about company</a><div></div>
                    <a href="#">services</a><div></div>
                    <a href="#">something special</a><div></div>
                    <a href="#">references</a><div></div>
                    <a href="#">contact us now</a>    
                </nav>
            </header>
            <div class="slider" data-flex="-center">
                <a href="#"></a>
                <figure><img src="/images/img.png" width="950" height="261" alt=""></figure>
                <a href="#"></a>
            </div>
            <div class="about" data-flex="-start" data-flex-640="vstripe">
                <div>
                    <blockquote>Laoreet praesent volutpat minim commodo in duis lobortis tationdolor, duis magna nulla commodo. Velit ipsum velit molestie ad exerci autem elit eum delenit blandit, eum iriure...</blockquote>
                    <a href="#" class="btn btn-more">more about us</a>
                </div>
                <div>
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p class="preview">Aliquip minim iusto erat aliquip volutpat veniam vel, enim consequat vel hendrerit nibh minim ipsum. Et feugait eu autem esse odio molestie feugiat illum, illum amet magna feugait eum ea, nisl, wisi ullamcorper lobortis zzril, veniam nulla accumsan blandit adipiscing. Luptatum, ex vulputate </p>
                    <p><strong>Ullamcorper dolore qui, in,</strong> ut iriure accumsan minim, feugiat suscipit dolore wisi eros volutpat. Ad vero eum elit iriure te, iusto duis dolore, ea praesent et vulputate vel ut. <strong>Dolore, lorem tincidunt</strong> augue consequat duis consequat feugait nostrud exerci, qui enim duis vero tation in accumsan eu <strong>dolor velit molestie</strong> nostrud consectetuer. Te duis at ut illum <a href="#">nostrud tincidunt</a> vero nulla dolore sed nulla. Tation, sit duis ea et luptatum zzril ut odio.</p>
                    <div class="btn-wrap" data-flex="-center">
                        <a href="#" class="btn btn-default">about company</a>
                    </div>
                </div>
            </div>
            <footer>
                <div class="footer" data-flex="stripe w">
                    <div>
                        <h5>about us</h5>
                        <p>Laoreet praesent volutpat minim commodo in duis lobortis tation dolor</p>
                        <p>Laoreet praesent volutpat minim commodo in duis</p>
                    </div>
                    <div>
                        <h5>menu</h5>
                        <div class="links-default" data-flex="col -start">
                            <a href="#">About us</a>
                            <a href="#">We are</a>
                            <a href="#">References</a>
                            <a href="#">Services</a>
                            <a href="#">Contact</a>
                        </div>
                    </div>
                    <div>
                        <h5>contact us</h5>
                        <address data-flex="col">
                            <span>LOREM IPSUM COMPANY ltd.</span>
                            <span>Laoreet praesent volutpat minim commodo in duis lobortis tation dolor, duis magna </span>
                            <span>E-mail: <a href="mailto:lorem@ipsum.dolor">lorem@ipsum.dolor</a></span>
                            <span>Phone: 09873673 838393</span>
                        </address>
                    </div>
                    <div>
                        <h5>p.o. box</h5>
                        <address data-flex="col">
                            <span>LOREM IPSUM COMPANY ltd.</span>
                            <span>Laoreet praesent volutpat minim</span>
                            <span>E-mail: <a href="mailto:lorem@ipsum.dolor">lorem@ipsum.dolor</a></span>
                            <span>Phone: 09873673 838393</span>
                        </address>
                    </div>
                </div>
                <div class="copyright" data-flex="axis w" data-flex-480="vaxis">
                    <span>Copyright 2012 | Lorem ipsum company | All rights reserved</span>
                    <span>Created by: <a href="#">Tempees.com</a></span>
                </div>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>