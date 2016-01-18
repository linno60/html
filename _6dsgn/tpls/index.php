<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DSGN</title>
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
            var LAYOUT_WIDTH = 1342;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header data-flex='center' data-flex-480="vstripe">
            <div class='header-left' data-flex='end'>
                <div data-flex="stripe">
                    <div data-flex="vaxis">
                        <div data-flex="col">
                            <a href="/" title="Return to the homepage" class="logo" id="logo">
                                <img src="/images/logo.png" width="164" height="208" alt="DSGN">
                            </a>
                            <span>associates</span>
                            <span>studio</span>
                            <span>design</span>
                        </div>
                        <div class="links-social" data-flex="axis">
                            <a href="#"><i class="icon-facebook"></i></a>
                            <a href="#"><i class="icon-twitter"></i></a>
                            <a href="#"><i class="icon-linkedin"></i></a>
                            <a href="#"><i class="icon-gplus"></i></a>
                        </div>
                    </div>
                    <div data-flex="-center"><figure><img src="images/img1.png"></figure></div>
                </div>
            </div>
            <div class='header-right'>
                <div data-flex="col" data-flex-480="stripe w">                          
                    <div class="nav" data-flex="end" data-flex-480>
                        <input type="radio" name="nav" id="r1">
                        <label for="r1" data-flex="-center center"></label>
                        <nav class="links-nav" data-flex="axis" data-flex-480="axis r">
                            <div data-flex="axis" data-flex-480="axis w">
                                <a href="#">home</a>
                                <a href="#">projects</a>
                                <a href="#">studio</a>
                                <a href="#">news</a>
                                <a href="#">contact</a> 
                            </div>
                            <input type="radio" name="nav" id="r2">
                            <label for="r2"><i class="icon-close"></i></label>                             
                        </nav>
                    </div>
                    <address data-flex="col">
                        <span>90802 california</span>
                        <span>long-beach</span>
                        <span>po box 68799</span>
                        <span>300 east ocean</span>
                        <span>boulevard</span>
                    </address>
                    <div data-flex="center" data-flex-800>
                        <div data-flex="col">
                            <span>+64 9 345 6758</span>
                            <a href="mailto:info@dsgn-studio.com">info@dsgn-studio.com</a>
                        </div>                   
                    </div>
                </div>
            </div>
        </header>
        <section class="projects" data-flex='center' data-flex-800="vstripe">
            <div class="projects-left" data-flex="vstripe">
                <div class="wrapper one" data-flex="end">
                    <div class="wrap" data-flex="end" data-flex-480="vstripe">
                        <div class="projects-hdr" data-flex="col center" data-flex-480="stripe">
                            <div  data-flex="col -center end">
                                <div class="links-default" data-flex="col -start">
                                    <a href="#" class="active">all</a>
                                    <a href="#">house</a>
                                    <a href="#">commercial</a>
                                    <a href="#">personal</a>
                                    <a href="#">studio lab</a>
                                </div>
                            </div>
                            <h3 data-flex="end">projects</h3>
                        </div>
                        <div class="fondue">
                            <figure><img src="images/img2.png"></figure>
                            <div class="description" data-flex="vaxis">
                                <div data-flex="col">
                                    <h2>fondue</h2>
                                    <dl data-childs>
                                        <div><dt>project assistant:</dt><dd>francesco dompieri</dd></div>
                                        <div><dt>material:</dt><dd>glass and metal</dd></div>
                                        <div><dt>typology:</dt><dd>suspension lamp</dd></div>
                                        <div><dt>client:</dt><dd>david design</dd></div>
                                        <div><dt>year:</dt><dd>2014</dd></div>
                                    </dl> 
                                    <a href="#" class="view">view project</a>
                                </div>                                                                  
                                <a href="#" class="like">+&nbsp;200</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper two" data-flex="end">
                    <div class="wrap" data-flex="end" data-flex-480="vstripe">
                        <div class="louis" data-flex="-end end">
                            <figure><img src="images/img5.png"></figure>
                            <div class="description" data-flex="vaxis">
                                <div data-flex="col">
                                    <h2>louis xx</h2>
                                    <dl data-childs>
                                        <div><dt>designer:</dt><dd>philippe starck</dd> </div>
                                        <div><dt>ypology:</dt><dd>chairs</dd></div>
                                        <div><dt>client:</dt><dd>vitra</dd></div>
                                        <div><dt>year:</dt><dd>2012</dd></div>
                                    </dl>
                                    <a href="#" class="view">view project</a>  
                                </div>                           
                                <a href="#" class="like">+&nbsp;200</a>
                            </div>
                        </div>
                        <div class="set" data-flex="-end">
                            <figure><img src="images/img6.png"></figure>
                            <div class="description" data-flex="stripe" data-flex-640="vaxis" data-flex-480="col -end">
                                <div>
                                    <h2>395-396 p22</h2>
                                    <dl data-childs>
                                        <div><dt>designer:</dt><dd>patrick norguet</dd></div>
                                        <div><dt>typology:</dt><dd>armchairs</dd></div>
                                        <div><dt>client:</dt><dd>cassina</dd></div>
                                        <div><dt>year:</dt><dd>2013</dd></div>
                                    </dl> 
                                </div>
                                <div data-flex="vaxis">
                                    <a href="#" class="view">view project</a>                                 
                                    <a href="#" class="like">+&nbsp;200</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projects-right" data-flex-800="stripe" data-flex-640="vstripe">
                <div class="wrapper four" data-flex>
                    <div class="wrap" data-flex>
                        <div class="potter" data-flex-800="-end">
                            <figure><img src="images/img3.png"></figure>
                            <div class="description" data-flex="vaxis">
                                <div>                                    
                                    <h2>potter</h2>
                                    <dl data-flex><dt>for</dt><dd>&nbsp;stelton</dd></dl>
                                    <p>Potter focuses on the functionali&shy;ty and process of preparing tea. a big sieve allows the flavor of to evenly brewed.</p>
                                    <a href="#" class="view">view project</a> 
                                </div>
                                <a href="#" class="like">+&nbsp;200</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper five" data-flex>
                    <div class="wrap" data-flex>
                        <div class="tabano">
                            <figure><img src="images/img4.png"></figure>
                            <div class="description">
                                <h2>tabano</h2>
                                <div data-flex="-start">
                                    <dl data-childs>
                                        <div><dt>designer:</dt><dd>patricia urquiola</dd></div>
                                        <div><dt>typology:</dt><dd>armchairs</dd></div>
                                        <div><dt>client:</dt><dd>b&b italia</dd></div>
                                        <div><dt>year:</dt><dd>2014</dd></div>
                                    </dl>
                                    <a href="#" class="view">view project</a>                                  
                                    <a href="#" class="like">+&nbsp;200</a>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper six" data-flex>
                    <div class="wrap" data-flex>
                        <div class="fiji" data-flex="-end">
                            <figure><img src="images/img7.png"></figure>
                            <div class="description" data-flex="vaxis">
                                <div>
                                    <h2>fiji</h2>
                                    <dl data-childs>
                                        <div><dt>designer:</dt><dd>cuno frommherz</dd></div>
                                        <div><dt>typology:</dt><dd>armchairs</dd></div>
                                        <div><dt>year:</dt><dd>2012</dd></div>
                                    </dl>
                                </div>
                                <a href="#" class="view">view project</a>
                                <a href="#" class="like">+&nbsp;200</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="timeline-wrap" data-flex='center' data-flex-640="vstripe"> 
            <div class="timeline-left">
                <div class="wrapper three" data-flex="end">
                    <div class="wrap" data-flex="end" data-flex-480="vstripe">
                        <div class="sesann">
                            <figure><img src="images/img8.png"></figure>
                            <div class="description">
                                <h2>sesann</h2>
                                <div data-flex="-start around">
                                    <dl data-childs>                                        
                                        <div><dt>designer:</dt><dd>gianfranco frattini</dd></div>
                                        <div><dt>typology:</dt><dd>armchairs</dd></div>
                                        <div><dt>client:</dt><dd>cassina</dd></div>
                                        <div><dt>year:</dt><dd>1970</dd></div>
                                    </dl>
                                    <a href="#" class="view">view project</a>                                   
                                    <a href="#" class="like">+&nbsp;200</a>
                                </div>
                            </div>
                        </div>
                        <div class="alessi">
                            <figure><img src="images/img9.png"></figure>
                            <div class="description" data-flex="vaxis">
                                <div data-flex="col">
                                    <h2>alessi</h2>
                                    <dl data-childs>
                                        <div><dt>designer:</dt><dd>piero lissoni</dd>   </div>
                                        <div><dt>client:</dt><dd>alessi</dd> </div>
                                        <div><dt>year:</dt><dd>2013</dd>  </div>
                                    </dl>
                                    <a href="#" class="view">view project</a>  
                                </div>
                                <a href="#" class="like">+&nbsp;200</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timeline-right" data-flex>
                <div>
                    <h3>timeline</h3>
                    <div class="links-default" data-flex="col -start">
                        <a href="#" class="active">2014</a>
                        <a href="#">2013</a>
                        <a href="#">2012</a>
                        <a href="#">2011</a>
                        <a href="#">2010</a>
                    </div>
                </div>
            </div>
        </section>
        <section data-flex='center' data-flex-640="vstripe">
            <div class="studio-left" data-flex="end" data-flex-640="center"> 
                <div data-flex="-center center">
                    <h3>studio</h3>
                </div>
            </div>
            <div class="studio-right" data-flex>                  
                <div data-flex="stripe" data-flex-480="vstripe">
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc&shy;ing elit. Phasellus sollicitudin eros sit amet nulla rhoncus dictum.</p>
                        <p>Nam rhoncus fringilla dolor vitae vulputate. Nullam quis eros lorem. Integer cursus erat a orci congue feugiat. Cras rhoncus mollis libero, id aliquet purus varius sed.</p>
                        <hr>
                        <p>Aenean ullamcorper porta nisl, ac lobortis elit com&shy;modo placerat. </p>
                        <p>Vivamus eget laoreet enim. Sed nunc dui, egestas vel diam convallis, faucibus iaculis sapien. Sed ut vulputate nisi.</p>
                        <p>Proin tempor risus tellus. Maecenas sit amet fringilla urna, vel iaculis velit. Sed ac felis et sem mollis dictum sed id orci.</p>
                    </div>
                    <div>
                        <figure><img src="images/img10.png"></figure>
                        <h5>awards</h5>
                        <div data-flex="stripe" class="awards">
                            <div data-flex="col">
                                <span>aenean ullamcorper porta</span>
                                <span>nisl,</span>
                                <span>ac lobortis elit</span>
                                <span>commodo placerat.</span>
                                <span>vivamus</span>
                            </div>
                            <div data-flex="col">
                                <span>aenean ullamcorper porta</span>
                                <span>nisl,</span>
                                <span>ac lobortis elit</span>
                                <span>commodo placerat.</span>
                                <span>vivamus</span>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="designers">
            <div class="lwrap" data-flex="stripe w">
                <div>
                    <h5>staff</h5>
                    <p>Sit amet laoreet sapien dictum. Sed eget eros augue. Pellentesque tempor mi sit amet nisi tincid&shy;unt tincidunt. Fusce malesuada lectus sed mauris pharetra faucibus. </p>
                    <p>Aenean diam tortor, hendrerit ac pulvinar vel, con&shy;dimentum ac velit. Phasellus eu odio elit. Aenean volutpat mi quam, ut ornare augue tempus ut. </p>
                    <p>Morbi sagittis diam mauris, in adipiscing nulla convallis ut.</p>
                </div>
                <div>
                    <figure><img src="images/img11.png"></figure>
                    <h4>philippe starck</h4>
                    <span>designer</span>
                    <div data-flex="stripe">
                        <a class="arrow" data-flex="-center" href="#">cv</a>
                        <div class="links-socialsm" data-flex="axis" data-childs="-center center">
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-tw"></i></a>
                            <a href="#"><i class="icon-in"></i></a>
                            <a href="#"><i class="icon-gp"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <figure><img src="images/img12.png"></figure>
                    <h4>mario bellini</h4>
                    <span>designer</span>
                    <div data-flex="stripe">
                        <a class="arrow" data-flex="-center" href="#">cv</a>
                        <div class="links-socialsm" data-flex="axis" data-childs="-center center">
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-tw"></i></a>
                            <a href="#"><i class="icon-in"></i></a>
                            <a href="#"><i class="icon-gp"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <figure><img src="images/img13.png"></figure>
                    <h4>patricia urquiola</h4>
                    <span>designer</span>
                    <div data-flex="stripe">
                        <a class="arrow" data-flex="-center" href="#">cv</a>
                        <div class="links-socialsm" data-flex="axis" data-childs="-center center">
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-tw"></i></a>
                            <a href="#"><i class="icon-in"></i></a>
                            <a href="#"><i class="icon-gp"></i></a>
                        </div>
                    </div>
                </div>
            </div>            
        </section>
        <section data-flex='center' data-flex-640="vstripe">
            <div class="news-left" data-flex="end" data-flex-640="center">
                <div data-flex="col -center center">                    
                    <h3>news</h3>
                </div>
            </div>
            <div class="news-right">
                <div data-flex="-center center">                    
                    <div data-flex="stripe" data-flex-480="vstripe">
                        <article>
                            <h2>Mauris et dui sed justo placerat tristique. </h2>
                            <time>11.07.2014</time>
                            <figure><img src="images/img14.png"></figure>
                            <p>Maecenas imperdiet nisi lorem, sed fermentum tortor pretium eget. Sed mollis lacus quis nunc cursus cursus. Quisque et magna sit amet sapien fermentum scelerisque eu id massa. Mauris ornare massa vel mauris tempus, vitae tempus urna tincidunt. </p>
                            <div data-flex="end"><a href="#">read more</a></div>
                        </article>
                        <article>
                            <h2>Proin vehicula nibh massa </h2>
                            <time>11.06.2014</time>
                            <figure><img src="images/img15.png"></figure>
                            <p>Praesent non mauris nec orci scelerisque faucibus. Nulla ac varius est. Aenean auctor nisl elit, nec sollicitudin lectus iaculis sed. Maecenas aliquam ligula vitae pharetra scelerisque. </p>
                            <div data-flex="end"><a href="#">read more</a></div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <footer data-flex data-flex-640="vstripe">
            <div>
                <i class="icon-point"></i>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8505.038451901682!2d43.965580613990085!3d26.328825230878778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1436953049202" allowfullscreen></iframe>   
            </div>
            <div class="footer">
                <div>
                    <div data-flex="stripe">
                        <address data-flex="col">
                            <span>90802 california</span>
                            <span>long-beach</span>
                            <span>po box 68789</span>
                            <span>300 east ocean</span>
                            <span>boulevard</span>
                            <div data-flex="col">
                                <span>+64 93456758</span>
                                <a href="mailto:info@design-studio.com">info@dsgn-studio.com</a>
                            </div>
                        </address> 
                        <div data-flex="col -center">
                            <div data-flex="col">
                                <a href="#" title="Return to the homepage" class="logo" id="logo-alt">
                                    <img src="/images/logo.png" width="164" height="208" alt="DSGN">
                                </a>
                                <span>associates</span>
                                <span>studio</span>
                                <span>design</span>
                            </div>
                            <div class="links-social" data-flex="axis">
                                <a href="#"><i class="icon-facebook"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-linkedin"></i></a>
                                <a href="#"><i class="icon-gplus"></i></a>
                            </div>
                        </div>                  
                    </div>
                    <span class="copy"><span>&copy;</span> 2014&ensp;DSGN. All rights reserved - Designed by theuncreativelab.com</span> 
                </div>  
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>