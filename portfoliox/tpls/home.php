<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portfoliox</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link type="text/css" rel="stylesheet" href="/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/css/reset-elements.css">
        <link type="text/css" rel="stylesheet" href="/css/styles.css">    
    </head>
    <body>
        <header>
            <div class="lwrap">
                <div class="header" data-flex="row-center-between">
                    <a href="#" class="logo">John R. Doe / Designer & Developer</a>
                    <div data-flex="row-center" class="social">
                        <a href="#"><i class="icon-tw"></i></a> 
                        <a href="#"><i class="icon-fb"></i></a> 
                        <a href="#"><i class="icon-vimeo"></i></a> 
                        <a href="#"><i class="icon-be"></i></a> 
                        <a href="#"><i class="icon-db"></i></a> 
                    </div>
                </div>
                <div class="slider-wrap" data-flex="col-center">
                    <figure data-flex>
                        <a href="#" class="btn btn-slide prev"><i class="icon-prev"></i></a>
                        <img src="/images/slider.png"> 
                        <a href="#" class="btn btn-slide next"><i class="icon-next"></i></a>                        
                    </figure>
                    <div class="controls" data-flex>
                        <a href="#"></a>
                        <a href="#" class="active"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                </div>
                <div>
                    <h2>~ Welcome to my portfolio ~</h2>
                    <h1>“I make beautiful things happen”</h1>
                    <div class="grid" data-flex="fluidblocks">
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
            </div>            
        </header>
        <div  class='portfolio'>
            <div class='lwrap' data-flex='fluidblocks'>
                <div data-flex='fluidblocks'>
                    <figure data-flex>
                        <img src='/images/img1.png'>
                    </figure>
                    <figure data-flex>
                        <img src='/images/img2.png'>
                    </figure>
                    <figure data-flex>
                        <img src='/images/img3.png'>
                    </figure>
                    <figure data-flex>
                        <img src='/images/img4.png'>
                    </figure>
                    <figure data-flex>
                        <img src='/images/img5.png'>
                    </figure>
                    <figure data-flex>
                        <img src='/images/img6.png'>
                    </figure>
                </div>
                <figure data-flex="col">
                    <img src='/images/img7.png'>
                    <div class="info" data-flex="row-center-between">
                        <a href="#" class="btn btn-slide"><i class="icon-prev"></i></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc&shy;ing elit. Sed at ligula diam. Donec a nibh sit amet justo posuere convallis.</p>
                        <a href="#" class="btn btn-slide"><i class="icon-next"></i></a>
                    </div>
                </figure>
            </div>
        </div>
        <div class="contact lwrap" data-flex="2cols">
            <form action="#" method="post" data-flex="col">
                <div class="form-wrap" data-flex="row-center">
                    <i class="icon-userform"></i>
                    <input type="text" placeholder="Enter your name"> 
                </div>
                <div class="form-wrap" data-flex="row-center">
                    <i class="icon-mail"></i>
                    <input type="text" placeholder="Enter your email address"> 
                </div>
                <div class="form-wrap" data-flex="row-center">
                    <i class="icon-globe"></i>
                    <input type="text" placeholder="Enter your website url"> 
                </div>
                <div class="form-wrap" data-flex="row-center">
                    <textarea type="text" placeholder=""></textarea> 
                </div>
                <div><button><span class="btn btn-submit">Submit</span></button></div>
            </form>
            <div class="resume" data-flex="col">
                <div data-flex="row-start">
                    <figure data-flex>
                        <img src="/images/photo.png">
                    </figure>
                    <div>
                        <h6>John Doe / Designer & Developer</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ligula diam. Donec a nibh sit amet justo posuere convallis. Curabitur suscipit consectetur nisl, vel mattis sem tempor quis. Aenean enim lectus, aliquet sed dignissim vel, laoreet et justo. Nulla turpis nulla, dapibus in port&shy;titor sit amet, luctus ac erat.</p>
                    </div>
                </div>
                <span>Contact me:<small>123.456.789</small></span>
                <span>Email me:<a href="mailto:johndoe@gmail.com">johndoe@gmail.com</a></span>
                <span>Follow me: <a href="#">Twitter</a><span class="divider">/</span><a href="#">Facebook</a><span class="divider">/</span><a href="#">Dribbble</a><span class="divider">/</span><a href="#">Flickr</a></span>                
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="row-center-between">
                <span>Copyright &copy; 2015 John Doe. All rights reserved.</span>
                <div data-flex="row-center" class="social">
                    <a href="#"><i class="icon-tw"></i></a> 
                    <a href="#"><i class="icon-fb"></i></a> 
                    <a href="#"><i class="icon-vimeo"></i></a> 
                    <a href="#"><i class="icon-be"></i></a> 
                    <a href="#"><i class="icon-db"></i></a> 
                </div>
            </div>            
        </footer>
    </body>
</html>
