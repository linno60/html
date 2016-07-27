<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blitz</title>
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
        <div class="lwrap">
            <header data-flex="axis">
                <a href="/" title="Return to the homepage">
                    <img src="/images/logo.png" width="88" height="41" alt="">
                </a>
                <div class="links-nav" data-flex="end w" data-childs="col -start">
                    <a href="#" class="active">
                        <small>homepage</small>
                        <strong>home</strong>
                    </a>
                    <a href="#">
                        <small>who are we?</small>
                        <strong>about</strong>
                    </a>
                    <a href="#">
                        <small>my portfolio</small>
                        <strong>projects</strong>
                    </a>
                    <a href="#">
                        <small>latest news</small>
                        <strong>blog</strong>
                    </a>
                    <a href="#">
                        <small>get in touch</small>
                        <strong>contact</strong>
                    </a>
                </div>
            </header>
            <section class="slider">
                <input name="anchor7" id='slide-0' type="radio">
                <input name="anchor7" id='slide-1' type="radio">
                <input name="anchor7" id='slide-2' type="radio">
                <input name="anchor7" id='slide-3' type="radio">
                <input name="anchor7" id='play' type="radio" checked>
                <div>
                    <figure>
                        <img src="/images/slider.png" width="940" height="425" alt="">
                        <figcaption>
                            <small>this months</small>
                            <big>featured work</big>
                        </figcaption>
                    </figure>
                    <figure class='num0'>
                        <img src="/images/slider.png" width="940" height="425" alt="">
                        <figcaption>
                            <small>this months</small>
                            <big>featured work</big>
                        </figcaption>
                    </figure>
                    <figure class='num1'>
                        <img src="/images/slider.png" width="940" height="425" alt="">
                        <figcaption>
                            <small>next months</small>
                            <big>best work</big>
                        </figcaption>
                    </figure>
                    <figure class='num2'>
                        <img src="/images/slider.png" width="940" height="425" alt="">
                        <figcaption>
                            <small>last months</small>
                            <big>last work</big>
                        </figcaption>
                    </figure>
                    <figure class='num3'>
                        <img src="/images/slider.png" width="940" height="425" alt="">
                        <figcaption>
                            <small>all months</small>
                            <big>all work</big>
                        </figcaption>
                    </figure>
                </div>
                <div class='bullets'>
                    <label class='num0' for='slide-0'></label>
                    <label class='num1' for='slide-1'></label>
                    <label class='num2' for='slide-2'></label>
                    <label class='num3' for='slide-3'></label>
                </div>
            </section>
            <section class="description">
                <h2>jesus typography wallpaper</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non diam et lacus pulvinar venenatis et vestibulum velit. Pellentesque interdum faucibus dui hendrerit ultrices. Aliquam erat volutpat. Duis commodo turpis id diam pulvinar hendrerit.</p>
            </section>
            <section class="featured" data-flex="stripe w">
                <article>
                    <h3><i class="icon-glass"></i>check out our latest projects</h3>
                    <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. Nam mi erat, porta id ultrices nec, pellentesque vel nunc. Cras varius fermentum iaculis. Aenean sodales nibh non lectus tempor a interdum justo ultricies.</p>
                    <a href="#" class="link">find out more</a>
                </article>
                <article>
                    <h3><i class="icon-star"></i>guarantee 5 star quality work</h3>
                    <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. Nam mi erat, porta id ultrices nec, pellentesque vel nunc. Cras varius fermentum iaculis. Aenean sodales nibh non lectus tempor a interdum justo ultricies.</p>
                    <a href="#" class="link">find out more</a>
                </article>
                <article>
                    <h3><i class="icon-message"></i>stay conntectd by reading the blog</h3>
                    <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. Nam mi erat, porta id ultrices nec, pellentesque vel nunc. Cras varius fermentum iaculis. Aenean sodales nibh non lectus tempor a interdum justo ultricies.</p>
                    <a href="#" class="link">find out more</a>
                </article>
            </section>
            <section class="works">
                <h2 class="hdr" data-flex="center -center"><span>my latest work</span></h2>
                <div data-flex="stripe w">
                    <article>
                        <figure><img src="/images/img1.png" width="220" height="120" alt=""></figure>
                        <h4>vallarta brochure</h4>
                        <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. </p>
                        <a href="#" class="link">view project</a>
                    </article>
                    <article>
                        <figure><img src="/images/img2.png" width="220" height="120" alt=""></figure>
                        <h4>photoshop tutorial</h4>
                        <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. </p>
                        <a href="#" class="link">view project</a>
                    </article>
                    <article>
                        <figure><img src="/images/img3.png" width="220" height="120" alt=""></figure>
                        <h4>business cards</h4>
                        <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. </p>
                        <a href="#" class="link">view project</a>
                    </article>
                    <article>
                        <figure><img src="/images/img4.png" width="220" height="120" alt=""></figure>
                        <h4>website design</h4>
                        <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. </p>
                        <a href="#" class="link">view project</a>
                    </article>
                </div>
            </section>
        </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="axis">
                <span>All Content Copyright 2012 - <a href="#">Blitz</a>. All Rights Reserved.</span>
                <span>Site Developed by <a href="#">Best PSD Freebies</a></span>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>