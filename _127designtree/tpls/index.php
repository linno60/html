<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Design Tree</title>
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
            var LAYOUT_WIDTH = 996;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col">
        <div>
            <header>
                <div class="lwrap" data-flex="stripe">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="272" height="63" alt="Design Tree">
                    </a>
                    <nav class="links-nav" data-flex="end w" data-childs="center -center">
                        <a href="#" class="active">home</a>
                        <a href="#" class="dropdown-link">services</a>
                        <a href="#">portfolio</a>
                        <a href="#">blog</a>
                        <a href="#">about us</a>
                        <a href="#">contact</a>
                    </nav>
                </div>
            </header>
            <section class="banner">
                <div class="lwrap" data-flex="stripe">
                    <figure><img src="/images/image.png" width="604" height="386" alt=""></figure>
                    <div class="about" data-flex="col around -start">
                        <article>
                            <h1>I Create Beautiful Sitess for My Clients</h1>
                            <p>Volutpat sodales. Cras sit amet posuere elit. Integer a pretium mau lla facilisi. Etiam libero metus, mollis at pretium non, convallis id tell sed arcu neque</p>
                            <p>Vestibulum posuere hendrerit justo, eget cursus metus tincidunt Curabitur aliquet nibh a lectus dapibus ultricies.</p>
                        </article>
                        <a href="#" class="btn btn-default lg">view portfolio</a>
                    </div>
                </div>
            </section>
            <div class="lwrap" data-flex="stripe w">
                <section class="latest-posts">
                    <ul>
                        <li>
                            <article class="clearfix">
                                <figure><img src="/images/image2.png" width="177" height="127" alt=""></figure>
                                <h3><a href="#">nulla ullamcorper vulp utate sapien</a></h3>
                                <div class="details" data-flex="-center w"><span>Posted by charlie</span> | <span>design</span> - <span>php</span> - <span>wordpress</span></div>
                                <p>Cras posuere, ipsum nec lobortis iaculis, metus quam convallis eros, at suscipit ante …</p>
                                <div><a href="#" class="btn btn-default sm">read more</a></div>
                            </article>
                            <article class="clearfix">
                                <figure><img src="/images/image2.png" width="177" height="127" alt=""></figure>
                                <h3><a href="#">nulla ullamcorper vulp utate sapien</a></h3>
                                <div class="details" data-flex="-center w"><span>Posted by charlie</span> | <span>design</span> - <span>php</span> - <span>wordpress</span></div>
                                <p>Cras posuere, ipsum nec lobortis iaculis, metus quam convallis eros, at suscipit ante …</p>
                                <div><a href="#" class="btn btn-default sm">read more</a></div>
                            </article>
                            <article class="clearfix">
                                <figure><img src="/images/image2.png" width="177" height="127" alt=""></figure>
                                <h3><a href="#">nulla ullamcorper vulp utate sapien</a></h3>
                                <div class="details" data-flex="-center w"><span>Posted by charlie</span> | <span>design</span> - <span>php</span> - <span>wordpress</span></div>
                                <p>Cras posuere, ipsum nec lobortis iaculis, metus quam convallis eros, at suscipit ante …</p>
                                <div><a href="#" class="btn btn-default sm">read more</a></div>
                            </article>
                        </li>
                    </ul>
                </section>
                <section class="topical-posts">

                </section>
            </div>
        </div>
        <footer>
            <div class="lwrap">
                <div class="footer" data-flex="stripe w">
                    <section>
                        <h5>Text Widget</h5>
                        <p>Mauris ultrices sodales pretium. Nulla ullamcorper vulputate sapien ut accumsan. Etiam volutpat, purus ut dignissim tincidunt, quam erat consectetur Vestibulum sit amet accumsan ipsum</p>
                        <p>metus, eget pharetra dolor mi vel anteQuisque posuere dolor sed ligula faci …</p>
                        <a href="#" class="btn btn-alt sm">read more</a>
                    </section>
                    <section>
                        <h5>Get in Touch</h5>
                        <div class="links-social" data-childs="" data-flex="col -start">
                            <a href="#"><i class="icon-fb"></i>Like me on Facebook</a>
                            <a href="#"><i class="icon-tw"></i>Follow me on Twitter</a>
                            <a href="#"><i class="icon-rss"></i>Subscribe to my RSS Feeds</a>
                            <a href="#"><i class="icon-mail"></i>Get in touch by Mail</a>
                            <a href="#"><i class="icon-fl"></i>My shots on Flickr</a>
                            <a href="#"><i class="icon-in"></i>My LinkedIn profile</a>
                        </div>
                    </section>
                    <section>
                        <h5>Quick contact</h5>
                        <form action="#" method="post">
                            <div data-flex="stripe" data-childs="col">
                                <fieldset>
                                    <input type="text" name="contact" placeholder="Name">
                                    <input type="email" name="contact" placeholder="E-Mail">
                                    <input type="text" name="contact" placeholder="Subject">
                                </fieldset>                          
                                <textarea name="contact"></textarea>
                            </div>
                            <button><span class="btn btn-alt lg">submit</span></button>
                        </form>
                    </section>
                </div>
                <div class="copyright" data-flex="axis">
                    <span>&copy; 2010 bubblelicious.com | All Rights Reserved</span>
                    <div class="links-footer" data-flex="end w">
                        <a href="#">About</a>
                        <a href="#">Facebook</a>
                        <a href="#">Twitter</a>
                        <a href="#">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>