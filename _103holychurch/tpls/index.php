<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HolyChurch</title>
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
            var LAYOUT_WIDTH = 980;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="top-bar">
                <div class="lwrap" data-flex="axis">
                    <span>Next Worship: Sunday at 10:00am</span>
                    <div class="links-header" data-flex="-center end w">
                        <a href="#">Need Prayer</a>|
                        <a href="#">Sermons</a>|
                        <a href="#">Online Giving</a>|
                        <a href="#">Praying Groups</a>|
                        <a href="#">Worship Services</a>
                    </div>
                </div>
            </div> 
            <div class="header">
                <div class="lwrap" data-flex="axis">
                    <a href="#" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="269" height="58" alt="Holy Church">
                    </a>
                    <a href="#" class="btn btn-default">new here? get involved</a>
                </div>
            </div> 
        </header>
        <div class="lwrap">
            <div class="links-nav" data-flex="-center around w" data-flex-800="-center center w">
                <a href="#">home</a>|
                <a href="#" class="active">our mission</a>|
                <a href="#">service</a>|
                <a href="#">study</a>|
                <a href="#">sermons</a>|
                <a href="#">prayers</a>|
                <a href="#">photos</a>|
                <a href="#">contacts</a>
            </div>
            <div data-flex="vaxis">
                <div class="slider-lg" data-flex="stripe" data-flex-800="vstripe">
                    <div class="video">
                        <figure data-video="16:9">
                            <iframe src="https://www.youtube.com/embed/nROkAPd4a_4" frameborder="0" allowfullscreen></iframe>
                        </figure>
                    </div>
                    <div class="slider-caption" data-flex="col -end">
                        <h1 class="title">If We Confess Iur Sins. He is Faithful and Just to Forgive</h1>
                        <p>Ut orci turpis, viverra vitae porta sodales, consequat quis purus. Nam sit amet quam vitae metus dapibus condimentum sit amet ut mauris. Etiam ligula mauris, semper eu condimentum ac, ultricies a velit. Ut orci turpis, viverra vitae porta sodales, consequat.</p>
                        <a href="#" class="btn btn-default">view more</a>
                    </div>
                </div>
                <div class="links-controls" data-flex="-center center">
                    <a href="#"></a>
                    <a href="#" class="active"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </div>
            </div>
            <div data-flex="stripe" data-flex-480="vstripe">
                <div class="content">
                    <div>
                        <hgroup>
                            <h3 class="title">Rooted & Grounded in Love</h3>
                            <h4>Do You Know Jesus Christ From Nazareth</h4>  
                        </hgroup>
                        <p>Curabitur quis arcu sapien, nec pharetra nisi. Aenean porttitor diam id lectus pharetra nec accumsan risus consequat. In gravida dapibus dolor, ut porta felis cursus vel. Integer a tellus nulla. Integer eget orci a elit sollicitudin dapibus eu non elit. Vivamus cursus sem vitae nunc mattis tincidunt praesent ac nisi mi. Aenean porttitor diam id lectus phare&shy;tra nec accumsan risus consequat. In gravida dapibus dolor, ut porta felis cursus vel integer a tellus nulla. </p>
                        <a href="#" class="more">View More</a>
                    </div>
                    <div>
                        <h3 class="title">Worship Photos & Videos</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin sed leo justo, sit amet venenatis tellus. Ut vehicula pharetra aliquet. Pellentesque ut nisi ac quam varius posuere id id velit. Vestibulum ut nulla ligula. Donec vel leo sed erat ullamcorper laoreet non nec quam. </p>
                        <div class="slider-sm" data-flex="axis">
                            <a href="#"><i class="icon-prev"></i></a>
                            <div data-flex="stripe w">
                                <div class="video">
                                    <figure data-video="16:9">
                                        <iframe src="https://www.youtube.com/embed/nROkAPd4a_4" frameborder="0" allowfullscreen></iframe>
                                    </figure>  
                                </div>
                                <figure><img src="/images/img.png" width="132" height="103" alt=""></figure>                                   
                                <div class="video hidden-sm">
                                    <figure data-video="16:9">
                                        <iframe src="https://www.youtube.com/embed/nROkAPd4a_4" frameborder="0" allowfullscreen></iframe>
                                    </figure>  
                                </div>
                                <figure class="hidden-md"><img src="/images/img.png" width="132" height="103" alt=""></figure> 
                            </div>
                            <a href="#"><i class="icon-next"></i></a>
                        </div>
                        <a href="#" class="more">View All</a>
                    </div>
                </div>
                <aside class="sidebar" data-flex-480="-start between">
                    <div>
                        <h3 class="title">Worship Services</h3>
                        <ul class="list-default" data-childs="">
                            <li>Tuesdays at 19:00 am</li>
                            <li>Fridays at 9:45 am</li>
                            <li>Saturdays at 20:00 am</li>
                            <li>Sundays at 10:00 am</li>
                        </ul>
                    </div>
                    <figure><img src="/images/fblike.png" width="243" height="356" alt=""></figure>
                </aside>
            </div>
        </div>
        <footer>
            <div class="lwrap" data-flex="stripe" data-flex-640="vstripe">
                <div data-flex="stripe" data-flex-480="vstripe">
                    <div>
                        <h3 class="title">Our Location</h3>                    
                        <div data-flex-480="stripe">
                            <address>Holy Church<br>9 Moses Road<br>Jerusalem, ON S6LJ2</address>
                            <div data-flex="col">
                                <span><strong>Telephone: </strong>(+123) 456-789</span>
                                <span><strong>Email: </strong><a href="mailto:ministry@church.com">ministry@church.com</a></span>
                            </div>
                        </div>                                               
                    </div>
                    <div>
                        <figure><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d171337.03543942622!2d35.17535355!3d47.856229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1449773041469" allowfullscreen></iframe></figure>
                    </div>
                </div>
                <div data-flex="stripe">
                    <div>
                        <h3 class="title">Our Church</h3>
                        <nav class="links-footer" data-flex="col -start">
                            <a href="#">&bull; Our Mission</a>
                            <a href="#">&bull; Service</a>
                            <a href="#">&bull; Study</a>
                            <a href="#">&bull; Sermons</a>
                            <a href="#">&bull; Prayers</a>
                        </nav>
                    </div>
                    <div>
                        <h3 class="title">Get Connected</h3>
                        <nav class="links-footer" data-flex="col -start" data-childs="-center">
                            <a href="#"><i class="icon-facebook"></i>Facebook</a>
                            <a href="#"><i class="icon-twitter"></i>Twitter</a>
                            <a href="#"><i class="icon-youtube"></i>YouTube</a>
                            <a href="#"><i class="icon-linkedin"></i>Linkedin</a>
                            <a href="#"><i class="icon-skype"></i>Skype</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="lwrap">
                    <span>Copyright &copy; 2012 HolyChurch. Design by <a href="#">ChocoTemplates.com</a></span>
                </div>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>