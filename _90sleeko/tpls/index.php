<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sleeko</title>
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
        <a href="#" name="top"></a>
        <div class="lwrap">
            <header data-flex="col -center">
                <a href="#" title="Return to the homepage" id="logo">
                    <img src="/images/logo.png" width="241" height="84" alt="Sleeko">
                </a>
                <nav class="links-nav" data-flex="around w" data-childs="-center">
                    <a href="#" class="active">home.</a>
                    <a href="#">portfolio.</a>
                    <a href="#">what i do.</a>
                    <a href="#">contact me.</a>
                </nav>
            </header>
        </div>
        <div class="item banner">
            <div class="lwrap" data-flex="col -center">                
                <div class="item-wrap">
                    <div class="item-wrapper" data-flex="vaxis">
                        <div class="preview" data-flex="col -center center">
                            <h1 data-text='hello'><span>hello</span></h1>
                            <p>My name is Rafi. I am a Graphic Designer, and this is my online space to showcase my works.</p>
                            <a href="#" class="btn btn-default">see my works</a>
                        </div>
                        <p><span>Pixelatic's Blog Update: </span>Complete Guide to Blog Advertising <a href="#">http://bit.ly/bINts7</a></p>
                        <a href="#top" class="btn btn-top">go to top</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item portfolio">
            <div class="lwrap" data-flex="col -center">
                <nav class="links-nav" data-flex="around w" data-childs="-center">
                    <a href="#" class="active">home.</a>
                    <a href="#">portfolio.</a>
                    <a href="#">what i do.</a>
                    <a href="#">contact me.</a>
                </nav>
                <div class="item-wrap">
                    <div class="item-wrapper" data-flex="col -center">
                        <div class="links-filter" data-flex="w">
                            <a href="#" class="active">Show All</a>
                            <a href="#">Web Design</a>
                            <a href="#">Logo Design</a>
                            <a href="#">Interface Design</a>
                            <a href="#">Miscellaneous</a>
                        </div>
                        <div class="grid" data-flex="stripe w" data-flex-480="vstripe">
                            <article>
                                <figure><img src="/images/img1.png" width="265" height="170" alt=""></figure>
                                <h4>Tittle of the design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, tortor eu </p>
                                <a href="#">See Design</a>
                            </article>
                            <article>
                                <figure><img src="/images/img2.png" width="265" height="170" alt=""></figure>
                                <h4>Tittle of the design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, tortor eu </p>
                                <a href="#">See Design</a>
                            </article>
                            <article>
                                <figure><img src="/images/img3.png" width="265" height="170" alt=""></figure>
                                <h4>Tittle of the design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, tortor eu </p>
                                <a href="#">See Design</a>
                            </article>
                            <article>
                                <figure><img src="/images/img4.png" width="265" height="170" alt=""></figure>
                                <h4>Tittle of the design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, tortor eu </p>
                                <a href="#">See Design</a>
                            </article>
                            <article>
                                <figure><img src="/images/img5.png" width="265" height="170" alt=""></figure>
                                <h4>Tittle of the design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, tortor eu </p>
                                <a href="#">See Design</a>
                            </article>
                            <article>
                                <figure><img src="/images/img6.png" width="265" height="170" alt=""></figure>
                                <h4>Tittle of the design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, tortor eu </p>
                                <a href="#">See Design</a>
                            </article>
                            <article>
                                <figure><img src="/images/img7.png" width="265" height="170" alt=""></figure>
                                <h4>Tittle of the design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, tortor eu </p>
                                <a href="#">See Design</a>
                            </article>
                            <article>
                                <figure><img src="/images/img8.png" width="265" height="170" alt=""></figure>
                                <h4>Tittle of the design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, tortor eu </p>
                                <a href="#">See Design</a>
                            </article>
                            <article>
                                <figure><img src="/images/img9.png" width="265" height="170" alt=""></figure>
                                <h4>Tittle of the design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, tortor eu </p>
                                <a href="#">See Design</a>
                            </article>
                        </div>
                        <a href="#top" class="btn btn-top">go to top</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item testimonials-wrap">
            <div class="lwrap" data-flex="col -center">
                <nav class="links-nav" data-flex="around w" data-childs="-center">
                    <a href="#" class="active">home.</a>
                    <a href="#">portfolio.</a>
                    <a href="#">what i do.</a>
                    <a href="#">contact me.</a>
                </nav>
                <div class="item-wrap">
                    <div class="item-wrapper testimonials" data-flex="col -center">
                        <h2 class="title"><span>Clean, Wonderful & Effective</span><br>websites that can really improve your business</h2>
                        <blockquote data-flex="-center">
                            <figure><img src="/images/testimonial.png" width="266" height="66" alt="Testimonial"></figure>
                            <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, tortor eu aliquam posuere, sem tortor semper urna, nec lacinia nibh nisi vel elit. Phasellus placerat, felis id rhoncus vulputate. </q>
                        </blockquote>
                        <div data-flex="stripe w" data-flex-800="vstripe">
                            <article>
                                <h3>Web Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, tortor eu aliquam posuere, sem tortor semper urna, nec lacinia nibh nisi vel elit. Phasellus placerat, felis id rhoncus vulputate, purus velit elementum lectus, nec fermentum libero nunc at diam. In tempor, orci in rhoncus suscipit, velit orci blandit ipsum, a dapibus nisl massa in nunc. </p>
                            </article>
                            <article>
                                <h3>Web Marketing</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, tortor eu aliquam posuere, sem tortor semper urna, nec lacinia nibh nisi vel elit. Phasellus placerat, felis id rhoncus vulputate, purus velit elementum lectus, nec fermentum libero nunc at diam. In tempor, orci in rhoncus suscipit, velit orci blandit ipsum, a dapibus nisl massa in nunc. </p>
                            </article>
                            <article>
                                <h3>Social Media</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, tortor eu aliquam posuere, sem tortor semper urna, nec lacinia nibh nisi vel elit. Phasellus placerat, felis id rhoncus vulputate, purus velit elementum lectus, nec fermentum libero nunc at diam. In tempor, orci in rhoncus suscipit, velit orci blandit ipsum, a dapibus nisl massa in nunc. </p>
                            </article>
                        </div>
                        <a href="#top" class="btn btn-top">go to top</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item footer">
            <div class="lwrap" data-flex="col -center">
                <nav class="links-nav" data-flex="around w" data-childs="-center">
                    <a href="#" class="active">home.</a>
                    <a href="#">portfolio.</a>
                    <a href="#">what i do.</a>
                    <a href="#">contact me.</a>
                </nav>
                <div class="item-wrap">
                    <div class="item-wrapper" data-flex="col -center">
                        <div data-flex="stripe" data-flex-480="vstripe">
                            <div class="form-wrap">
                                <h2 class="title"><span>Thank you!</span><br>Get in touch with me now.</h2>
                                <form action="#" method="post" data-flex="col -center">
                                    <input type="text" name="input" placeholder="Your Name">
                                    <input type="email" name="input" placeholder="Your Email Address">
                                    <input type="text" name="input" placeholder="Your Estimated Budget">
                                    <textarea placeholder="Your Project Description"></textarea>
                                    <button><span class="btn btn-default">submit now</span></button>
                                </form>
                            </div>
                            <div class="contact" data-flex-480="axis w">
                                <div class="lbl-wrap" data-flex="end">
                                    <div class="lbl lbl-available"><h6 data-text="Available For Hire"><span>Available For Hire</span></h6></div>
                                </div>
                                <div class="social" data-flex="col -start" data-flex-480="vaxis">
                                    <span>Connect with me via:</span>
                                    <div class="links-social" data-flex="w" data-childs="-center center">
                                        <a href="#"><i class="icon-tw"></i></a>
                                        <a href="#"><i class="icon-fb"></i></a>
                                        <a href="#"><i class="icon-in"></i></a>
                                        <a href="#"><i class="icon-mail"></i></a>
                                    </div>
                                </div>
                                <div class="copyright" data-flex="col -end" data-flex-480="vaxis">
                                    <a href="#" title="Return to the homepage" id="logoalt">
                                        <img src="/images/logoalt.png" width="103" height="33" alt="Sleeko">
                                    </a>
                                    <p>This is a FREE single page website design created in Photoshop format exclusively for Pixelactic.com's readers. This deisgn is created by Rafi. Hope you'll like this design. Thanks!</p>
                                    <span>&copy; Copyright. All rights reserved.</span>
                                </div>   
                            </div>
                        </div>
                        <a href="#top" class="btn btn-top">go to top</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>