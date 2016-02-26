<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portfoliox</title>
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
            <div class="lwrap">
                <div data-flex="axis">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="301" height="18" alt="Portfoliox">
                    </a>
                    <div class="links-social" data-flex="-center end w">
                        <a href="#"><i class="icon-tw"></i></a> 
                        <a href="#"><i class="icon-fb"></i></a> 
                        <a href="#"><i class="icon-vimeo"></i></a> 
                        <a href="#"><i class="icon-be"></i></a> 
                        <a href="#"><i class="icon-db"></i></a> 
                    </div>
                </div>
                <div class="slider">
                    <figure>
                        <a href="#" class="btn btn-slide"><i class="icon-prev"></i></a>
                        <img src="/images/slider.png"> 
                        <a href="#" class="btn btn-slide"><i class="icon-next"></i></a>                        
                    </figure>
                    <div class="links-controls" data-flex="center w">
                        <a href="#"></a>
                        <a href="#" class="active"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                </div>                
            </div>            
        </header>
        <div class="content lwrap">
            <hgroup>
                <h2>~ Welcome to my portfolio ~</h2>
                <h1>&ldquo;I make beautiful things happen&rdquo;</h1>
            </hgroup>
            <div data-flex="stripe" data-flex-480="vstripe">
                <article>
                    <h3><i class="icon-user"></i>A little about me...</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ligula diam. Donec a nibh sit amet justo posuere convallis. Cura&shy;bitur suscipit consectetur nisl, vel mattis sem tempor quis. Aenean enim lectus, aliquet sed dignissim vel, laoreet et justo. Nulla turpis nulla, dapibus in porttitor sit amet, luctus ac erat.</p>
                </article>
                <article>
                    <h3><i class="icon-cloud"></i>I'm really good at...</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ligula diam. Donec a nibh sit amet justo posuere convallis. Cura&shy;bitur suscipit consectetur nisl, vel mattis sem tempor quis. Aenean enim lectus, aliquet sed dignissim vel, laoreet et justo. Nulla turpis nulla, dapibus in porttitor sit amet, luctus ac erat.</p>
                </article>
                <article>
                    <h3><i class="icon-set"></i>Services I provide...</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ligula diam. Donec a nibh sit amet justo posuere convallis. Cura&shy;bitur suscipit consectetur nisl, vel mattis sem tempor quis. Aenean enim lectus, aliquet sed dignissim vel, laoreet et justo. Nulla turpis nulla, dapibus in porttitor sit amet, luctus ac erat.</p>
                </article>
            </div>
        </div>
        <div class='portfolio'>
            <div class='lwrap' data-flex="-start between" data-flex-480="vstripe">
                <div data-flex="stripe w">
                    <figure><img src='/images/img1.png'></figure>
                    <figure><img src='/images/img2.png'></figure>
                    <figure><img src='/images/img3.png'></figure>
                    <figure><img src='/images/img4.png'></figure>
                    <figure><img src='/images/img5.png'></figure>
                    <figure><img src='/images/img6.png'></figure>
                </div>
                <figure>
                    <img src='/images/img7.png'>
                    <figcaption data-flex="axis">
                        <a href="#" class="btn btn-slide"><i class="icon-prev"></i></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc&shy;ing elit. Sed at ligula diam. Donec a nibh sit amet justo posuere convallis.</p>
                        <a href="#" class="btn btn-slide"><i class="icon-next"></i></a>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="contacts lwrap" data-flex="stripe w" data-flex-480="vstripe">
            <form action="#" method="post">
                <input type="text" name="input" placeholder="Enter your name"> 
                <input type="email" name="input" placeholder="Enter your email address"> 
                <input type="url" name="input" placeholder="Enter your website url"> 
                <textarea placeholder="Message"></textarea> 
                <button><span class="btn btn-submit">Submit</span></button>
            </form>
            <div class="resume">                
                <figure><img src="/images/photo.png"></figure>
                <h6>John Doe / Designer & Developer</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ligula diam. Donec&nbsp; a nibh sit amet justo posuere convallis. Curabitur suscipit consectetur nisl, vel mattis sem tempor quis. Aenean enim lectus, aliquet sed dignissim vel, laoreet et justo. Nulla turpis nulla, dapibus in port&shy;titor sit amet, luctus ac erat.</p>
                <div data-flex="col">
                    <em>Contact me: <span>123.456.789</span></em>
                    <em>Email me: <a href="mailto:johndoe@gmail.com">johndoe@gmail.com</a></em>                  
                </div>
                <div class="links-follow" data-flex="w">
                    <span>Follow me:&nbsp;</span>
                    <a href="#">Twitter</a><em>/</em>    
                    <a href="#">Facebook</a><em>/</em>   
                    <a href="#">Dribbble</a><em>/</em>  
                    <a href="#">Flickr</a>    
                </div>
            </div>
            <footer data-flex="axis">       
                <span>Copyright &copy; 2015 John Doe. All rights reserved.</span>
                <div class="links-social" data-flex="-center end w">
                    <a href="#"><i class="icon-tw"></i></a> 
                    <a href="#"><i class="icon-fb"></i></a> 
                    <a href="#"><i class="icon-vimeo"></i></a> 
                    <a href="#"><i class="icon-be"></i></a> 
                    <a href="#"><i class="icon-db"></i></a> 
                </div>          
            </footer>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>