<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dexter</title>
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
            var LAYOUT_WIDTH = 1204;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="lwrap" data-flex="stripe">
                <div data-flex='col -start between'>
                        <a href="#" title="Return to the homepage" id="logo">
                            <img src="/images/logo.png" width="157" height="29" alt="Dexter">
                        </a> 
                    <div>
                        <h1>Dex&rsquo;s Laboratory: a funny freebie.</h1>
                        <p>Brought to You by Balkan Brothers studio...</p>
                        <a href='#' class='btn btn-default'>Le' Download</a>
                    </div>
                    <div data-flex='-center w'>
                        <p>We are never empty handed towards our dribbble community.</p>
                        <a href='#' class='btn btn-facebook'>Like</a>
                        <span class='counter'>1.6m</span>
                        <a href='#' class='btn btn-twitter'>Tweet</a>
                        <span class='counter'>93</span>
                    </div>  
                </div>
                <figure><img src="images/phone.png"></figure>
            </div>
        </header>
        <section class="about">
            <div class="lwrap" data-flex="stripe" data-childs="col -center">
                <figure>
                    <i class="icon-spaceship"></i>
                    <h3>5.5</h3>
                    <span>space trips</span>
                </figure>
                <figure>
                    <i class="icon-bulb"></i>
                    <h3>500+</h3>
                    <span>magic potions</span>
                </figure>
                <figure>
                    <i class="icon-touch"></i>
                    <h3>What</h3>
                    <span>does this button do ?</span>
                </figure>
            </div>
        </section>
        <section class="content lwrap">
            <div data-flex='axis'>
                <figure><img src="images/dexter.png"></figure>
                <div>
                    <h2>One Lonely Ginger</h2>
                    <p>One lonely ginger tried to learn french over night, but he f*ked up and now he speaks only about eggs and sheese.</p>
                    <blockquote>
                        <q>My name is Mandark and I am Dexter's rival. He and I have been competing in science and other things for years and this race is just one more of those things where we try to beat each other, except I try to win by being sneaky and bad!
                            <figure><img src="/images/mandark.png" width="104" height="104" alt=""></figure>
                        </q> 
                        <cite>Mandark, Dexter's rival</cite>
                    </blockquote>
                </div>
            </div>
            <div data-flex='axis'>               
                <div>
                    <h2>Fighting for Power</h2>
                    <p>In a world where nobody understands him and his brilliant mind. Dexter is the first ginger we ever fell in love with, he is the origi&shy;nal developer of evil deeds.</p>
                    <a href='#' class='btn btn-default'>Le' Download</a>
                </div>
                <figure><img src="images/dexters.png"></figure>
            </div>
        </section>
        <section class="team">
            <div class="lwrap" data-flex="stripe" data-childs="col -center">
                <article>
                    <figure><img src="images/img1.png"></figure>
                    <h3>Dexter</h3>
                    <span>&ldquo; the genius &rdquo;</span>
                    <p>Dexter is an extremely intelligent boy (a self de&shy;scribed "Boy Genius") who has been creating fantastic inventions since he was a baby. He considers Albert</p>
                    <a href="#">+ more</a>
                </article>
                <article>
                    <figure><img src="images/img2.png"></figure>
                    <h3>Dee Dee</h3>
                    <span>&ldquo; the sister &rdquo;</span>
                    <p>Dee Dee is Dexter's ex&shy;tremely ditzy, sim&shy;ple-minded, energetic, hy&shy;peractive older sister, who inexplicably makes "squishy" sounds with her</p>
                    <a href="#">+ more</a>
                </article>
                <article>
                    <figure><img src="images/img3.png"></figure>
                    <h3>Mandark</h3>
                    <span>&ldquo; the rival &rdquo;</span>
                    <p>Dexter's arch-nemesis. Ap&shy;proximately equal in intel&shy;ligence to Dexter, he too possesses his own labora&shy;tory, which has a very black&shy;and-red color</p>
                    <a href="#">+ more</a>
                </article>
            </div>
        </section>
        <section class="message" data-flex="-center center">
            <p>If you're watching this, than don't be a dick. Share & Like :)</p>
            <i class='icon-globe'></i>
        </section>
        <footer>
            <div class="lwrap" data-flex='stripe' data-childs>
                <div>
                    <i class='icon-mail'></i>
                    <div>
                        <h4><a href='mailto:info@balkan-brothers.com'>info@balkan-brothers.com</a></h4>
                        <a href='mailto:filip.justic91@gmail.com'>filip.justic91@gmail.com</a>
                        <a href='mailto:matej.justic@gmail.com'>matej.justic@gmail.com</a>
                    </div>
                </div>
                <div>
                    <i class='icon-location'></i>
                    <div>
                        <h4><address>Island Krk, Croatia</address></h4>
                        <p>We are located on a sunny little island in the Mediterranean.</p>
                    </div>
                </div>
                <div>
                    <i class='icon-skype'></i>
                    <div>
                        <h4><a href='#'>matej.justic</a></h4>
                        <a href='#'>filip.justic</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>