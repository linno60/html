<!DOCTYPE html>
<html lang="en">
    <head>
        <title>UI Brush</title>
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
            <header>
                <div class="lwrap" data-flex="between -end">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="116" height="23" alt="UI Brush">
                    </a>
                    <nav class="links-nav" data-flex="end w">
                        <a href="#" class="active">ho­me</a>
                        <a href="#">ab­out us</a>
                        <a href="#">tes­timo­nial</a>
                        <a href="#">pri­cing</a>
                        <a href="#">con­tact us</a>
                    </nav>
                </div>
            </header>
            <section class="banner">
                <div class="lwrap">
                    <h1>lorem ipsum dolor sit amet</h1>
                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    <a href="#" class="btn btn-default lg">download</a>
                </div>
            </section>
            <section class="about lwrap">
                <h2 class="hdr">about us</h2>
                <div data-flex="-start between">
                    <figure><img src="/images/about.png" width="560" height="373" alt=""></figure>
                    <article>
                        <a href="#" class="btn btn-default">our history</a>
                        <a href="#" class="btn btn-default alt">our mission</a>
                        <p>Lorem &nbsp;ipsum dolor &nbsp;sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignis&shy;sim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. </p>
                    </article>
                </div>
            </section>
            <section class="features-wrap">
                <div class="lwrap">
                    <h2 class="hdr">features</h2>
                    <div class="features" data-flex="stripe" data-childs="col around">
                        <div>
                            <article>
                                <h5>Free PSD</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> 
                            </article>
                            <article>
                                <h5>Bootstrap Layout</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> 
                            </article>
                            <article>
                                <h5>Easy To Customize</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> 
                            </article>
                        </div>
                        <figure><img src="/images/ipad.png" width="327" height="484" alt=""></figure>
                        <div>
                            <article>
                                <h5>Clean Design</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> 
                            </article>
                            <article>
                                <h5>Organised In Folders</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> 
                            </article>
                            <article>
                                <h5>Font Awesome Icons</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> 
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <section class="testimonial lwrap">
                <h2 class="hdr">testimonial</h2>
            </section>
            <section class="pricing lwrap">
                <h2 class="hdr">pricing</h2>
                <div data-flex="stripe" data-childs="col">
                    <div class="pricing-item">
                        <strong>$19.99</strong>
                        <div class="lbl lbl-default">starter</div>
                        <ul class="list-default">
                            <li>1 Domain</li>
                            <li>5 GB Storage</li>
                            <li>100 GB Bandwidth</li>
                            <li>24x7 Support</li>
                        </ul>
                        <a href="#" class="btn btn-default available">buy now</a>
                    </div>
                    <div class="pricing-item">
                        <strong>$29.99</strong>
                        <div class="lbl lbl-default">intermediate</div>
                        <ul class="list-default">
                            <li>5 Domains</li>
                            <li>50 GB Storage</li>
                            <li>500 GB Bandwidth</li>
                            <li>24x7 Support</li>
                        </ul>
                        <a href="#" class="btn btn-default">buy now</a>
                    </div>
                    <div class="pricing-item">
                        <strong>$49.99</strong>
                        <div class="lbl lbl-default">professional</div>
                        <ul class="list-default">
                            <li>Unlimited Domains</li>
                            <li>100 GB Storage</li>
                            <li>1 TB Bandwidth</li>
                            <li>24x7 Support</li>
                        </ul>
                        <a href="#" class="btn btn-default">buy now</a>
                    </div>
                    <div class="pricing-item">
                        <strong>$99.99</strong>
                        <div class="lbl lbl-default">corporate</div>
                        <ul class="list-default">
                            <li>Unlimited Domains</li>
                            <li>500 GB Storage</li>
                            <li>Unlimited Bandwidth</li>
                            <li>24x7 Support</li>
                        </ul>
                        <a href="#" class="btn btn-default available">buy now</a>
                    </div>
                </div>
            </section>
            <section class="contacts-wrap">
                <div class="lwrap">
                    <h2 class="hdr">contact us</h2>
                    <div class="contacts" data-flex="stripe">
                        <div>
                            <h4>write to us:</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                            <form action="#" method="post" data-flex="col">
                                <div data-flex="stripe">
                                   <input type="text" name="form" class="input-default" placeholder="Name...">
                                   <input type="email" name="form" class="input-default" placeholder="E-Mail...">
                                </div>
                                <textarea class="textarea-default" placeholder="Message..."></textarea>
                                <button><span class="btn btn-default">submit</span></button>
                            </form>
                        </div>
                        <div>
                            <h4>address:</h4>
                            <figure>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1301.2999695455226!2d35.16131706222752!3d47.822893291193566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1479920026460"></iframe>
                            </figure>
                            <ul class="list-contacts" data-childs="-center">
                                <li><div><i class="icon-loc"></i></div><address>1397 Meadowcrest Lane, Lexington</address></li>
                                <li><div><i class="icon-phone"></i></div>606-463-2014</li>
                                <li><div><i class="icon-mail"></i></div><a href="mailto:Email@domain.com">Email@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <div class="lwrap">
                <span>Copyright &copy; UIBrush 2015</span>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>