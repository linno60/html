<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lipsum</title>
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
            var LAYOUT_WIDTH = 1000;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="lwrap">
            <header>
                <div class="header" data-flex="-center">
                    <a href="#" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" height="56" width="205" alt="Lipsum">
                    </a>
                    <div data-flex="col center">
                        <h2>lorem ipsum dolor sit amet</h2>
                        <span>consectetur adipisicing elit, sed do eiusmod tempor incididunt</span>
                    </div>
                </div>
                <nav class="links-nav" data-flex="-center w">
                    <a href="#">home</a>
                    <a href="#">products</a>
                    <a href="#">news</a>
                    <a href="#">about us</a>
                    <a href="#">contact us</a>
                </nav>
            </header>
            <section class="featured">
                <h2>featured products</h2>
                <div data-flex="-start between">
                    <div class="slider">
                        <figure data-flex="col">
                            <img src="images/img1.png">
                            <figcaption data-flex="axis">
                                <a href="#" class="btn btn-left"><i class="icon-left"></i></a>
                                <a href="#">Lipsum comoodo Manager</a>
                                <a href="#" class="btn btn-right"><i class="icon-right"></i></a>    
                            </figcaption>
                        </figure>
                    </div>
                    <div class="preview" data-flex="col -end">
                        <figure data-flex>
                            <img src="images/img2.png">
                            <figcaption data-flex="col">
                                <small>preview release available!</small>
                                <span>lispum data comoodo</span>
                            </figcaption>
                        </figure>
                        <p>The mission of Orlin Research, Inc. is to produce software products that multiply the power and efficiency of empirical scientific research in the social sciences.</p>
                        <p> A central goal is to expand access to complex data sources and to the advanced methods of scientific investigation needed to analyze them.</p>
                        <a href="#" class="btn btn-more"><em>More</em><i class="icon-arrow"></i></a>
                    </div>
                </div>
            </section>
            <section class="content" data-flex="stripe">
                <div class="news">
                    <h4>latest news</h4>
                    <div data-childs="-start">
                        <article>
                            <div class="date" data-flex="col">
                                <span>27</span>
                                <small>nov</small>
                            </div>
                            <div>
                                <h5><a href="#">An early access preview</a></h5>
                                <p>An early access preview of the Orlin Data Manager is available...</p>
                            </div>
                        </article>
                        <article>
                            <div class="date" data-flex="col">
                                <span>27</span>
                                <small>nov</small>
                            </div>
                            <div>
                                <h5><a href="#">An early access preview</a></h5>
                                <p>An early access preview of the Orlin Data Manager is available...</p>
                            </div>
                        </article>
                        <article>
                            <div class="date" data-flex="col">
                                <span>27</span>
                                <small>nov</small>
                            </div>
                            <div>
                                <h5><a href="#">An early access preview</a></h5>
                                <p>An early access preview of the Orlin Data Manager is available...</p>
                            </div>
                        </article>  
                    </div>                    
                </div>
                <div class="description">
                    <h4>who we are ?</h4>
                    <p>Lorem ipsum dolor sit amet, consec&shy;tetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div data-flex="end">
                        <a href="#" class="btn btn-more"><em>More</em><i class="icon-arrow"></i></a>
                    </div>    
                </div>
                <div class="contact">
                    <h4>contact us</h4>
                    <div data-flex="-center">
                        <i class="icon-phone"></i>
                        <span>(626) 921-4592</span>
                    </div>
                    <div data-flex="-center">
                        <i class="icon-fax"></i>
                        <span>(626) 921-4592</span>
                    </div>
                    <div data-flex="-center">
                        <i class="icon-mail"></i>
                        <a href="mailto:info@orlinresearch.com">info@orlinresearch.com</a>
                    </div>
                    <div data-flex="-start">
                        <i class="icon-address"></i>
                        <address data-flex="col">
                            <span>Orlin Research, Inc.</span>
                            <span>7412 Ridgewood Ave</span>
                            <span>Chevy Chase, MD 20815</span>
                            <span>USA</span>
                        </address>
                    </div>
                </div>
            </section>
            <section class="clients" data-flex="stripe">
                <h3>our clients</h3>
                <figure><img src="images/at.png"></figure>
                <figure><img src="images/inc.png"></figure>
                <figure><img src="images/autoimunne.png"></figure>
                <figure><img src="images/visa.png"></figure>
                <figure><img src="images/polar.png"></figure>
                <figure><img src="images/gap.png"></figure>
            </section>
            <footer data-flex="vaxis">
                <a href="#" title="Return to the homepage" id="logo-alt">
                    <img src="/images/logo-alt.png" width="119" height="33" alt="Lipsum">
                </a>
                <nav class="links-footer" data-flex="-center center w">
                    <a href="#">home</a>|
                    <a href="#">products</a>|
                    <a href="#">news</a>|
                    <a href="#">about us</a>|
                    <a href="#">contact us</a>
                </nav>
                <span class="copyright"><span>&copy; 2009</span> Orlin Research, Inc </span>
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>