<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Summer</title>
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
            var LAYOUT_WIDTH = 838;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="lwrap">
            <header data-flex='col -center'>
                <div data-flex='axis'>
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="100" height="100" alt="Summer">
                    </a>
                </div>                
                <h2>what is the most fascinating thing about summer?</h2>
            </header>
            <div class="wrap">
                <div class="banner">
                    <figure>
                        <img src="/images/img1.png" width="600" height="400" alt="">
                        <figcaption>
                            <hgroup>
                                <h1>summer's coming</h1>
                                <hr>
                                <h3>trimm your sheeps</h3>
                            </hgroup>
                        </figcaption>
                    </figure>
                </div>
                <div class='content'>
                    <h2>best articles in this month</h2>
                    <div data-flex='stripe'>
                        <article>
                            <figure>
                                <img src="/images/img2.png" width="255" height="150" alt="">
                                <a href='#' class='more'>more</a>
                            </figure>
                            <h4>What is it like to be young and free minded in North Korea</h4>
                            <p>Fusce amet ligula ornare tempus vulputate ipsum semper. Praesent non lorem odio. Fusce sed dui massa, eu viverra erat.</p>
                        </article>
                        <article>
                            <figure>
                                <img src="/images/img3.png" width="255" height="150" alt="">
                                <a href='#' class='more'>more</a>
                            </figure>
                            <h4>Mysterious rolls in the fields</h4>
                            <p>Fusce amet ligula ornare tempus vulputate ipsum semper. Praesent non lorem odio. Fusce sed dui massa, eu viverra erat.</p>
                        </article>
                    </div>
                    <article>
                        <figure>
                            <img src="/images/img4.png" width="540" height="220" alt="">
                            <a href='#' class='more'>more</a>
                        </figure>
                        <h4>Life's like Vertigo comic books</h4>
                        <p>Fusce amet ligula ornare tempus vulputate ipsum semper. Praesent non lorem odio. Fusce sed dui massa, eu viverra erat.</p>
                    </article>
                    <footer data-flex='stripe' data-childs='col'>
                        <div>
                            <h5>Brannon & Douglas, Inc.</h5>
                            <address>1600 Amphitheatre Parkway Mountain View, CA 94043 </address>
                            <span>Help & Support Center: 0000 000 000 </span>
                            <span>Website: <a href='#'>www.yourcompany.com</a></span>
                        </div>
                        <div>
                            <div class="links-social" data-flex="end w" data-childs="-center center">
                                <a href="#" class="fb"><i class="icon-fb"></i></a>
                                <a href="#" class="tw"><i class="icon-tw"></i></a>
                                <a href="#" class="tb"><i class="icon-tb"></i></a>
                                <a href="#" class="rss"><i class="icon-rss"></i></a>
                            </div>
                            <a href='#'>Visit website</a>
                            <a href='#'>Mobile version</a>
                        </div>
                    </footer>
                </div>                
            </div>
            <p class='message'>Don‘t want to recieve further emails? You can unsibscribe <a href='#'>here</a></p>
        </div>        
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>