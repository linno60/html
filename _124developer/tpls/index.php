<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Developer</title>
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
            var LAYOUT_WIDTH = 982;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="lwrap">
            <a href="#" id="top"></a>
            <div class="wrap" data-flex="stripe w" data-flex-640="vstripe r">
                <div data-flex="stripe w" data-flex-480="vstripe">
                    <h1 class="title"><strong>adrian olivier</strong>web developer</h1>
                    <section>
                        <h2 class="title">about me</h2>
                        <p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. <a href="#">Curabitur et ligula.</a> </p>
                        <p>Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. <br>Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit</p>
                    </section>
                    <section>
                        <h2 class="title">work</h2>
                        <div class="links-default" data-flex="col -start">
                            <a href="#">Lorem ipsum dolor sit amet enim</a>
                            <a href="#">Etiam ullamcorper</a>
                            <a href="#">Suspendisse a pellentesque dui, non felis</a>
                            <a href="#">Maecenas malesuada elit lectus felis, malesuada ultricies</a>
                            <a href="#">Ut molestie a, ultricies porta urna</a>
                            <a href="#">Vestibulum commodo volutpat</a>
                        </div>
                    </section>
                    <section>
                        <hgroup>
                            <h2 class="title">get in touch</h2>
                            <h4 class="subtitle">send me a message</h4>
                        </hgroup>                        
                        <form class="form-message" action="#" method="post" data-flex="between -end">
                            <div data-flex="col">
                                <input type="text" name="message" placeholder="Your Name:">
                                <input type="email" name="message" placeholder="Email Address:">
                                <textarea name="message" placeholder="Message:"></textarea>
                            </div>
                            <button><span class="btn btn-default">Send</span></button>
                        </form>
                    </section>
                    <section class="contacts">
                        <h4 class="subtitle">contact details</h4>
                        <div data-flex="stripe w">
                            <div>
                                <span class="lbl lbl-default"><i class="icon-mail"></i></span>
                                <span>Emaill Address:</span>
                                <a href="mailto:contact@adrianolivier.com">contact@adrian<wbr>olivier.com</a>
                            </div>
                            <div>
                                <span class="lbl lbl-default"><i class="icon-skype"></i></span>
                                <span>Skype</span>
                                <a href="#">adrianolivier</a>
                            </div>
                            <div>
                                <span class="lbl lbl-default"><i class="icon-address"></i></span>
                                <span>Address:</span>
                                <address>Poland, 30-229 Cracow,<br> ul. Zielona 2</address>
                            </div>
                            <div>
                                <span class="lbl lbl-default"><i class="icon-phone"></i></span>
                                <span>Telephone:</span>
                                <a href="tel:+48 999 99 00">+48 999 99 00</a>
                            </div>
                        </div>
                    </section>
                </div>
                <div data-flex-640="stripe w" data-flex-480="vstripe">
                    <h1 class="title hidden"><strong>adrian olivier</strong>web developer</h1>
                    <nav class="links-nav" data-childs="center -center" data-flex="end w">
                        <a href="#" class="active"><span>home</span></a>
                        <a href="#"><span>work</span></a>
                        <a href="#"><span>get in touch</span></a>
                        <a href="#"><span>skills</span></a>
                    </nav>
                    <section>
                        <h2 class="title">welcome</h2>
                        <p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. </p>
                        <p>Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. <br>Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit</p>
                    </section>
                    <section class='slider' data-flex="axis">
                        <input name="anchor1" id='slide1-0' type="radio">
                        <input name="anchor1" id='slide1-1' type="radio">
                        <input name="anchor1" id='slide1-2' type="radio">
                        <input name="anchor1" id='play1' type="radio" checked>
                        <div class='arrowprev'>
                            <label class='num0' for='slide1-0'></label>
                            <label class='num1' for='slide1-1'></label>
                            <label class='num2' for='slide1-2'></label>
                        </div>
                        <ul>
                            <li><img src="/images/almost.png" width="443" height="460" alt=""></li>
                            <li class='num0'><img src="/images/almost.png" width="443" height="460" alt=""><a href="#" class="overlay"><span></span></a></li>
                            <li class='num1'><img src="/images/slider2.jpg" width="443" height="460" alt=""><a href="#" class="overlay"><span></span></a></li>
                            <li class='num2'><img src="/images/slider3.jpg" width="443" height="460" alt=""><a href="#" class="overlay"><span></span></a></li>
                        </ul>
                        <div class='arrownext'>
                            <label class='num0' for='slide1-0'></label>
                            <label class='num1' for='slide1-1'></label>
                            <label class='num2' for='slide1-2'></label>
                        </div>
                    </section>
                    <section class="skills-wrap">
                        <hgroup>
                            <h2 class="title">skills</h2>
                            <h4 class="subtitle">technical skills</h4>
                        </hgroup>
                        <div class="skills" data-flex="between -end">
                            <div><span>php</span></div>
                            <div><span>asp/perl</span></div>
                            <div><span>seo</span></div>
                            <div><span>xhtml/css</span></div>
                            <div><span>photoshop</span></div>
                            <div><span>ruby on rails</span></div>
                            <div><span>wordpress</span></div>
                        </div>
                    </section>
                    <section class="technology">
                        <h4 class="subtitle">technology</h4>
                        <div data-flex="axis w" data-flex-960="around -center w">
                            <a href="#"><i class="icon-wp"></i></a>
                            <a href="#"><i class="icon-joomla"></i></a>
                            <a href="#"><i class="icon-jquery"></i></a>
                            <a href="#"><i class="icon-mysql"></i></a>
                            <a href="#"><i class="icon-php"></i></a>
                        </div>
                    </section>
                </div>
            </div> 
            <div>
                <section class="services">                    
                    <div data-flex="center -center">
                        <figure><img src="/images/photo.png" width="181" height="200" alt=""></figure>
                        <div>
                            <h2 class="title">how can i help?</h2>
                            <ul class="list-default">
                                <li>Standards compliant XHTML/CSS</li>
                                <li>Cross-Browser Testing &amp; Fixing</li>
                                <li>Coding Email Newsletters</li>
                                <li>CMS Templates</li>
                                <li>Hosting/Linux Server Admin</li>
                                <li>Delivering Email Campaigns</li>
                            </ul>
                        </div>
                    </div>
                    <div data-flex="end">
                        <a href="#top" class="btn btn-default anchor">top</a>
                    </div>
                </section>
                <footer>Design by Webvilla.pl 2012</footer>
            </div>
        </div>        
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>