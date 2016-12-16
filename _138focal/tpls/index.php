<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Focal</title>
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
            var LAYOUT_WIDTH = 1200;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex="col">
        <div>
            <header>
                <section class="header-wrap">
                    <div class="slider-header lwrap">
                        <input name="anchor-h" id='slideh-0' type="radio">
                        <input name="anchor-h" id='slideh-1' type="radio">
                        <input name="anchor-h" id='slideh-2' type="radio">
                        <input name="anchor-h" id='play-h' type="radio" checked>
                        <ul data-childs="vaxis">
                            <li>
                                <h1>web & graphic designer</h1>
                                <a href="#" class="btn btn-alt">learn more</a>
                            </li>
                            <li class='num0'>
                                <h1>web & graphic designer</h1>
                                <a href="#" class="btn btn-alt">learn more</a>
                            </li>
                            <li class='num1'>
                                <h1>web & graphic designer</h1>
                                <a href="#" class="btn btn-alt">learn more</a>
                            </li>
                            <li class='num2'>
                                <h1>web & graphic designer</h1>
                                <a href="#" class="btn btn-alt">learn more</a>
                            </li>
                        </ul> 
                        <div class='bullets' data-flex="col">
                            <label class='num0' for='slideh-0'></label>
                            <label class='num1' for='slideh-1'></label>
                            <label class='num2' for='slideh-2'></label>
                        </div>
                    </div>
                </section>
                <section class="nav">
                    <div class="lwrap" data-flex="axis">
                        <a href="/" title="Return to the homepage" id="logo">
                            <img src="/images/logo.png" height="45" width="106" alt="Focal">
                        </a>
                        <nav class="links-nav" data-flex="end w">
                            <a href="#">home</a>
                            <a href="#" class="active">about me</a>
                            <a href="#">skills</a>
                            <a href="#">resume</a>
                            <a href="#">testimonials</a>
                            <a href="#">portfolio</a>
                            <a href="#">contact me</a>
                        </nav>  
                    </div>
                </section>
            </header>
            <section class="features">
                <div class="lwrap" data-flex="stripe w" data-flex-480="vstripe">
                    <article>
                        <h2>values</h2>
                        <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
                    </article>
                    <article>
                        <h2>goals</h2>
                        <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
                    </article>
                    <article>
                        <h2>hobbies</h2>
                        <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
                    </article>
                </div>
            </section>
            <section class="about">
                <div class="lwrap clearfix">
                    <figure><img src="/images/about.png" width="610" height="754" alt=""></figure>
                    <article data-flex="col">
                        <h2>about me</h2>
                        <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri.</p>
                        <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei.</p>
                    </article>
                    <div class="articles" data-flex="stripe w" data-childs data-flex-800="vstripe">
                        <article>
                            <i class="icon-globe"></i>
                            <div>
                                <h3>web design</h3>
                                <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.</p>
                            </div>
                        </article>
                        <article>
                            <i class="icon-pen"></i>
                            <div>
                                <h3>graphic design</h3>
                                <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.</p>
                            </div>
                        </article>
                        <article>
                            <i class="icon-users"></i>
                            <div>
                                <h3>online marketing</h3>
                                <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.</p>
                            </div>
                        </article>
                        <article>
                            <i class="icon-clip"></i>
                            <div>
                                <h3>seo</h3>
                                <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.</p>
                            </div>
                        </article> 
                    </div>
                </div>
            </section>
            <section class="skills lwrap" data-flex="stripe w" data-flex-480="vstripe">
                <h2>my skills</h2>
                <article>
                    <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. </p>
                    <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
                    <a href="#" class="btn btn-default">contact me</a>
                </article>
                <ul class="list-skills" data-childs="col">
                    <li>photoshop<span>90%</span></li>
                    <li>illustrator<span>80%</span></li>
                    <li>html / css<span>90%</span></li>
                    <li>php / mysql<span>70%</span></li>    
                </ul>
            </section>
            <section class="resume">
                <div class="lwrap" data-flex="vaxis">
                    <h2>resume</h2>
                    <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. </p>
                    <a href="#" class="btn btn-default">download resume</a>
                </div>
            </section>
            <section class="education lwrap" data-childs="stripe w" data-childs-800="vstripe">
                <div>
                    <h2>my education</h2>
                    <article>
                        <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. </p>
                        <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
                    </article>
                    <div>
                        <article>
                            <h3>graphic design diploma</h3>
                            <div><strong>Reeves College</strong> &nbsp;/&nbsp; <time> June 2008 - May 2010</time></div>
                            <span class="lbl lbl-default">4.0 GPA</span>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei</p>
                        </article>
                        <article>
                            <h3>cit diploma</h3>
                            <div><strong>Lethbridge College</strong> &nbsp;/&nbsp; <time> June 2006 - May 2008</time></div>
                            <span class="lbl lbl-default">4.0 GPA</span>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei</p>
                        </article>
                    </div>
                </div>
                <hr>
                <div>
                    <h2>work experience</h2>
                    <article>
                        <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. </p>
                        <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
                    </article>
                    <div>
                        <article>
                            <h3>lead web designer</h3>
                            <div><strong>ABC Company, Saskatoon</strong> &nbsp;/&nbsp; <time> June 2011 - Present</time></div>
                            <span class="lbl lbl-default">3 Years</span>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei</p>
                        </article>
                        <article>
                            <h3>junior designer</h3>
                            <div><strong>XYZ Company, Lethbridge</strong> &nbsp;/&nbsp; <time> June 2008 - May 2009</time></div>
                            <span class="lbl lbl-default">1 Years</span>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei</p>
                        </article>
                        <article>
                            <h3>web developer</h3>
                            <div><strong>The Company, Lethbridge</strong> &nbsp;/&nbsp; <time> June 2007 - May 2008</time></div>
                            <span class="lbl lbl-default">1 Years</span>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei</p>
                        </article>
                    </div>
                </div>
            </section>
            <section class="slider-testimonials">
                <input name="anchor-t" id='slidet-0' type="radio">
                <input name="anchor-t" id='slidet-1' type="radio">
                <input name="anchor-t" id='slidet-2' type="radio">
                <input name="anchor-t" id='play-t' type="radio" checked>
                <ul class="lwrap">
                    <li>
                        <blockquote class="blockquote-testimonial" data-flex="vaxis">
                            <q>“Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.”</q>
                            <cite>john stone</cite>
                        </blockquote>
                    </li>
                    <li class='num0'>
                        <blockquote class="blockquote-testimonial" data-flex="vaxis">
                            <q>“Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.”</q>
                            <cite>john stone</cite>
                        </blockquote>
                    </li>
                    <li class='num1'>
                        <blockquote class="blockquote-testimonial" data-flex="vaxis">
                            <q>“Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.”</q>
                            <cite>john stone</cite>
                        </blockquote>
                    </li>
                    <li class='num2'>
                        <blockquote class="blockquote-testimonial" data-flex="vaxis">
                            <q>“Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.”</q>
                            <cite>john stone</cite>
                        </blockquote>
                    </li>
                </ul> 
                <div class='bullets' data-flex="center -center">
                    <label class='num0' for='slidet-0'></label>
                    <label class='num1' for='slidet-1'></label>
                    <label class='num2' for='slidet-2'></label>
                </div>
            </section>
            <section class="portfolio lwrap" data-flex="vaxis">
                <h2>portfolio</h2>
                <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. </p>
                <div class="gallery" data-flex="stripe w" data-flex-480="vstripe">
                    <div>
                        <h4>filter by category</h4>
                        <div class="links-categories" data-flex="col -start w">
                            <a href="#">All</a>
                            <a href="#">Themes</a>
                            <a href="#">Icons</a>
                            <a href="#">Patterns</a>
                            <a href="#">Mockups</a>
                            <a href="#">UI Kits</a>
                        </div>
                    </div>
                    <figure><img src="/images/img1.png" width="366" height="300" alt=""><div class="overlay"><a href="#"></a></div></figure> 
                    <figure><img src="/images/img2.png" width="366" height="300" alt=""><div class="overlay"><a href="#"></a></div></figure> 
                    <figure><img src="/images/img3.png" width="366" height="300" alt=""><div class="overlay"><a href="#"></a></div></figure> 
                    <figure><img src="/images/img4.png" width="366" height="300" alt=""><div class="overlay"><a href="#"></a></div></figure> 
                    <figure><img src="/images/img5.png" width="366" height="300" alt=""><div class="overlay"><a href="#"></a></div></figure> 
                    <figure><img src="/images/img6.png" width="366" height="300" alt=""><div class="overlay"><a href="#"></a></div></figure> 
                    <figure><img src="/images/img7.png" width="366" height="300" alt=""><div class="overlay"><a href="#"></a></div></figure> 
                    <figure><img src="/images/img8.png" width="366" height="300" alt=""><div class="overlay"><a href="#"></a></div></figure> 
                </div>
            </section>
        </div>
        <footer>
            <section class="footer lwrap" data-flex="stripe w" data-flex-480="vstripe">
                <h2>contact me</h2>
                <div>
                    <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei.</p>
                    <address>122 33rd Street East<br>Saskatoon, SK<br>S7K 1R9</address>
                    <dl data-childs="w">
                        <li><dd>Email:&emsp; </dd> <dt><a href="mailto:info@focal.com">info@focal.com</a></dt></li>
                        <li><dd>Phone:&emsp; </dd> <dt>1-306-222-2323</dt></li>
                    </dl>
                </div>
                <form action="#" method="post" data-flex="col -start">
                    <label>Name <sup>*</sup></label>
                    <input type="text" name="form" class="input-default">
                    <label>Email Address <sup>*</sup></label>
                    <input type="email" name="form" class="input-default">
                    <label>Email Address <sup>*</sup></label>
                    <textarea name="form" class="textarea-default"></textarea>
                    <button><span class="btn btn-submit">contact me</span></button>
                </form>
            </section>
            <section class="copyright">
                <div class="lwrap">
                    <span>copyright 2014 focal - built with passion</span>
                    <div class="links-social" data-flex="center" data-childs="center -center">
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-pt"></i></a>
                        <a href="#"><i class="icon-gp"></i></a>
                        <a href="#"><i class="icon-db"></i></a>
                        <a href="#"><i class="icon-in"></i></a>
                    </div>
                </div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>