<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Smart Investor</title>
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
            var LAYOUT_WIDTH = 1020;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex='col'>
        <div>
            <header>
                <div class='header'>
                    <div class='lwrap'>
                        <div class='topbar' data-flex='-center end'>
                            <time>24 jan 10</time>
                            <div class="links-topbar" data-flex="center w" data-childs="center -center">
                                <a href="#" class="dropdown">about us</a><span></span>
                                <a href="#">contact us</a><span></span>
                                <a href="#" class="dropdown">help</a>
                            </div>
                        </div>
                        <div class="search-wrap" data-flex='axis'>
                            <a href="/" title="Return to the homepage" id='logo'>
                                <img src="/images/logo.png" width="306" height="49" alt="Smart Investor">
                            </a>
                            <form class="form-search" action="#" method="post" data-flex="end">
                                <input type="search" name="search" placeholder="Axs Code, Company name or Keyword">
                                <button><span class="btn btn-search">go</span></button>
                            </form>
                        </div>
                        <nav class="links-navsup" data-flex="w" data-childs="center -center">
                            <a href="#">All the Latest</a>
                            <a href="#" class="active">Recommendations</a>
                            <a href="#">Companies</a>
                            <a href="#">Portfolios</a>
                            <a href="#">Investor's College</a>
                            <a href="#" class="sign">sign up today</a>
                        </nav>
                    </div>
                </div>
                <div class="links-navsub">
                    <nav class='lwrap' data-flex="-center w" data-childs="center -center">
                        <a href="#">Recent Changes</a><span></span>
                        <a href="#" class="active">Buys <span>(16)</span></a><span></span>
                        <a href="#">Sells <span>(27)</span></a><span></span>
                        <a href="#">Holds<span>(53)</span></a><span></span>
                        <a href="#">Recommendation terms</a>
                    </nav>
                </div>
            </header>
            <div class='lwrap'>
                <div class="alert" data-flex="stripe" data-childs="-center">
                    <big>special alert</big>
                    <span>Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam</span>
                </div>
                <div class='content' data-flex='stripe w'>
                    <section>
                        <div class="tabs default" data-tabs="">
                            <div class="tablist" data-flex="stripe">
                                <a href="#tab-d1" class="active">stocks in brief<i class="icon-rsssm"></i></a>
                                <a href="#tab-d2">latest feeds<i class="icon-rsssm"></i></a>
                            </div>
                            <div class="tabset">
                                <div id="tab-d1" class="tabpanel active">
                                    <ul class="links-brief" data-flex="col" data-childs="axis">
                                        <li><a href="#">BHP Billiton (BHP)</a><span>($34.87)</span></li>
                                        <li><a href="#">Quantas (QTS)</a><span>($12.10)</span></li>
                                        <li><a href="#">RIO Tinto (RIO)</a><span>($74.00)</span></li>
                                        <li><a href="#">Aristacrat</a><span>($8.01)</span></li>
                                    </ul>
                                </div>
                                <div id="tab-d2" class="tabpanel">Tab number 2</div>
                            </div>
                            <div class="tab-ftr" data-flex="axis">
                                <span>updated <time>08 Mar10, 4:00:00 PM AEST</time></span>
                                <a href="#"><span>&gt;</span> More</a>
                            </div>
                        </div>
                    </section>
                    <section>
                        <article>
                            <hgroup>
                                <h6>stock in detail</h6>
                                <h3><a href="#">Article Headline goes here</a></h3>
                                <p><time>18 jan 10</time> | <strong class="price">Buy 2.70</strong> | Lorem ipsum dolor sit amet, conse ctetuer adipi scing elit. Praesent aliquam,  justo convallis luctus.</p>
                            </hgroup>
                        </article>
                        <article>
                            <hgroup>
                                <h6>stock in detail</h6>
                                <h3><a href="#">Article Headline goes here</a></h3>
                                <p><time>18 jan 10</time> | Lorem ipsum dolor sit amet, conse ctetuer adipi scing elit. Praesent aliquam,  justo convallis luctus.</p>
                            </hgroup>
                        </article>
                        <article>
                            <hgroup>
                                <h6>stock in detail</h6>
                                <h3><a href="#">Article Headline goes here</a></h3>
                                <p><time>18 jan 10</time> | Lorem ipsum dolor sit amet, conse ctetuer adipi scing elit. Praesent aliquam,  justo convallis luctus.</p>
                            </hgroup>
                        </article>
                        <article>
                            <hgroup>
                                <h6>stock in detail</h6>
                                <h3><a href="#">Article Headline goes here</a></h3>
                                <p><time>18 jan 10</time> | Lorem ipsum dolor sit amet, conse ctetuer adipi scing elit. Praesent aliquam,  justo convallis luctus.</p>
                            </hgroup>
                        </article>
                        <ul class="links-default" data-childs="axis">
                            <li><span><small>></small><a href="#">Nam blandit quam ut lacus. Quisque ornare</a></span></li>
                            <li><span><small>></small><a href="#">Ligula. Phasellus tristique purus a augue condimentum adipiscing Suspendisse potenti.</a></span></li>
                        </ul>
                    </section>
                    <section>
                        <div class="tabs podcasts" data-tabs="">
                            <div class="tablist" data-flex="axis">
                                <a href="#tab-p1" class="active">podcasts</a>
                                <a href="#tab-p2">video</a>
                                <a href="#tab-p3">blogs</a>
                                <a href="#tab-p4">special reports</a>
                            </div>
                            <div class="tabset">
                                <div id="tab-p1" class="tabpanel active" data-flex>
                                    <figure><img src="/images/pod.png" width="71" height="103" alt=""></figure>
                                    <div class="links-options" data-flex="col">
                                        <a href="#">consectetuer adipiscing elit.</a>
                                        <a href="#">Praesent aliquam, justo</a>
                                        <a href="#">convallis luctus rutrum, erat</a>
                                        <a href="#">nulla fermentum diam, at</a>
                                        <a href="#">nonummy quam  ante ac quam</a>
                                    </div>
                                </div>
                                <div id="tab-p2" class="tabpanel">Tab number 2</div>
                                <div id="tab-p3" class="tabpanel">Tab number 3</div>
                                <div id="tab-p4" class="tabpanel">Tab number 4</div>
                            </div>
                        </div>
                        <div class='membership' data-flex='axis w'>
                            <big><span>membership</span> upgrade</big>
                            <a href="#" class="btn btn-default">renew</a>
                        </div>
                        <div class="links-social" data-flex="around w" data-childs="center -center">
                            <span>Follow us on:</span>
                            <a href="#"><i class="icon-fb"></i>Facebook</a>
                            <a href="#"><i class="icon-tw"></i>Twitter</a>
                            <a href="#"><i class="icon-rss"></i>RSS</a>
                        </div>
                        <div class="tabs default" data-tabs="">
                            <div class="tablist" data-flex="stripe">
                                <a href="#tab-d1" class="active">stocks in brief<i class="icon-rsssm"></i></a>
                                <a href="#tab-d2">latest feeds<i class="icon-rsssm"></i></a>
                            </div>
                            <div class="tabset">
                                <div id="tab-d1" class="tabpanel active">
                                    <div class="links-asks" data-flex="col -start">
                                        <a href="#">Justo convallis luctus rutrum, erat nulla</a>
                                        <a href="#">Germentum diam, at nonummy quam  ante ac</a>
                                        <a href="#">Wuam. Maecenas urna purus, fermentum id,</a>
                                        <a href="#">Molestie in, commodo  porttitor</a>
                                    </div>
                                </div>
                                <div id="tab-d2" class="tabpanel">Tab number 2</div>
                            </div>
                            <div class="tab-ftr" data-flex="axis">
                                <span> </span>
                                <a href="#"><span>&gt;</span> More</a>
                            </div>
                        </div>
                    </section>
                </div>
                <section class='features'>
                    <h2>feature spotlights</h2>
                    <div data-flex='stripe w'>
                        <figure>
                            <img src="/images/img1.png" width="175" height="130" alt="">
                            <figcaption>announcement:<a href='#'>Title of goes here (328kb)</a></figcaption>
                        </figure>
                        <figure>
                            <img src="/images/img2.png" width="175" height="130" alt="">
                            <figcaption>pdf: <a href='#'>Title of goes here (328kb)</a></figcaption>
                        </figure>
                        <figure>
                            <img src="/images/img3.png" width="175" height="130" alt="">
                            <figcaption>article: <a href='#'>Justo convallis luctus</a></figcaption>
                        </figure>
                        <figure>
                            <img src="/images/img4.png" width="175" height="130" alt="">
                            <figcaption>article: <a href='#'>Consectetuer adipiscing elit. Praesent aliquam, justo convallis luctus rutrum</a></figcaption>
                        </figure>
                        <figure>
                            <img src="/images/img5.png" width="175" height="130" alt="">
                            <figcaption>video: <a href='#'>Video title goes here</a></figcaption>
                        </figure>
                    </div>
                </section>
                <section class='topic'>
                    <div class="hdr" data-flex="w">
                        <h2>stock research</h2>
                        <div class="links-tags" data-flex="-center">
                            <a href="#">blue chips</a>|
                            <a href="#">second line</a>|
                            <a href="#">speculative</a>
                        </div>
                    </div>
                    <div class='columns' data-flex='stripe w'>
                        <div>
                            <article class='clearfix'>
                                <figure><img src="/images/graph.png" width="150" height="98" alt=""></figure>
                                <h4><a href='#'>BHP gets a bullet</a></h4>
                                <p><time>18 jan 10</time> | Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy .</p>
                            </article>
                            <ul class="links-default" data-childs="axis">
                                <li><span><time>18 jan 10 | </time><a href="#">Lorem ipsum dolor sit amet</a></span></li>
                                <li><span><time>18 jan 10 | </time><a href="#">Praesent aliquam,  justo convallis</a></span></li>
                                <li><span><time>18 jan 10 | </time><a href="#">fermentum diam, at nonummy</a></span></li>
                                <li><span><time>18 jan 10 | </time><a href="#">Maecenas urna purus, fermentum id</a></li>
                                <li><span><time>18 jan 10 | </time><a href="#">Commodo  porttitor, felis. Nablandit</a></span></li>
                            </ul>
                        </div>
                        <div>
                            <div class='box'>
                                <h4 class="title">video</h4>
                                <figure data-video='16:9'><iframe width="560" height="315" src="https://www.youtube.com/embed/F3QpgXBtDeo" frameborder="0" allowfullscreen></iframe></figure>
                                <div>
                                    <a href='#'>Fermentum id</a>,
                                    <a href='#'>molestie in</a>,
                                    <a href='#'>commodo  porttitor</a>,
                                    <a href='#'>felis</a>.
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class='info-box'>
                                <div class="panel-heading sup" data-flex="axis w">
                                    <h3>blogs</h3>
                                    <a href="#">&gt; More</a>
                                </div>
                                <div class='panel'>
                                    <ul class="links-default" data-childs="axis">
                                        <li><span><time>18 jan 10 | </time><a href="#">Lorem ipsum dolor sit amet</a></span></li>
                                        <li><span><time>18 jan 10 | </time><a href="#">Praesent aliquam,  justo convallis</a></span></li>
                                        <li><span><time>18 jan 10 | </time><a href="#">fermentum diam, at nonummy</a></span></li>
                                        <li><span><time>18 jan 10 | </time><a href="#">Maecenas urna purus, fermentum id</a></span></li>
                                        <li><span><time>18 jan 10 | </time><a href="#">Commodo  porttitor, felis. Nablandit</a></span></li>
                                    </ul>
                                </div>
                                <div class="panel-heading" data-flex="axis w">
                                    <h3>latest comments</h3>
                                </div>
                                <div class='panel'>
                                    <ul class="links-default" data-childs="axis">
                                        <li><span><small>></small><a href="#">Lorem ipsum dolor sit amet</a></span></li>
                                        <li><span><small>></small><a href="#">Praesent aliquam,  justo convallis</a></span></li>
                                        <li><span><small>></small><a href="#">fermentum diam, at nonummy</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class='topic'>
                    <div class="hdr" data-flex="w">
                        <h2>investor's college</h2>
                        <div class="links-tags" data-flex="-center">
                            <a href="#">masterclass</a>|
                            <a href="#">psychology</a>|
                            <a href="#">valuation</a>|
                            <a href="#">fundamentals</a>
                        </div>
                    </div>
                    <div class='columns' data-flex='stripe w'>
                        <div>
                            <article class='clearfix'>
                                <figure><img src="/images/graph2.png" width="150" height="98" alt=""></figure>
                                <h4><a href='#'>BHP gets a bullet</a></h4>
                                <p><time>18 jan 10</time> | Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy .</p>
                            </article>
                            <ul class="links-default" data-childs="axis">
                                <li><span><time>18 jan 10 | </time><a href="#">Lorem ipsum dolor sit amet</a></span></li>
                                <li><span><time>18 jan 10 | </time><a href="#">Praesent aliquam,  justo convallis</a></span></li>
                                <li><span><time>18 jan 10 | </time><a href="#">fermentum diam, at nonummy</a></span></li>
                                <li><span><time>18 jan 10 | </time><a href="#">Maecenas urna purus, fermentum id</a></li>
                                <li><span><time>18 jan 10 | </time><a href="#">Commodo  porttitor, felis. Nablandit</a></li>
                            </ul>
                        </div>
                        <div>
                            <div class='box'>
                                <h4 class="title">insight</h4>
                                <div>
                                    <article data-flex='-center'>
                                        <i class="icon-insight"></i>
                                        <p><strong>Lorem ipsum dolor sit</strong> amet, conse ctetuer adipiscing elit. praesent aliquam. conse ctetuer</p>
                                    </article>
                                    <div>
                                        <a href='#'>Fermentum id</a>,
                                        <a href='#'>molestie in</a>,
                                        <a href='#'>commodo  porttitor</a>,
                                        <a href='#'>felis</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="tabs default" data-tabs="">
                                <div class="tablist" data-flex="stripe">
                                    <a href="#tab-d1" class="active">top rated</a>
                                    <a href="#tab-d2">editor's pick</a>
                                </div>
                                <div class="tabset">
                                    <div id="tab-d1" class="tabpanel active">
                                        <div class="links-asks" data-flex="col -start">
                                            <a href="#">Justo convallis luctus rutrum, erat nulla</a>
                                            <a href="#">Germentum diam, at nonummy quam  ante ac</a>
                                            <a href="#">Wuam. Maecenas urna purus, fermentum id,</a>
                                            <a href="#">Molestie in, commodo  porttitor</a>
                                        </div>
                                    </div>
                                    <div id="tab-d2" class="tabpanel">Tab number 2</div>
                                </div>
                                <div class="tab-ftr" data-flex="axis">
                                    <span>updated <time>08 Mar10, 4:00:00 PM AEST</time></span>
                                    <a href="#"><span>&gt;</span> More</a>
                                </div>
                            </div>
                            <div class='membership' data-flex='axis w'>
                                <big><span>membership</span> upgrade</big>
                                <a href="#" class="btn btn-default">renew</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class='topic'>
                    <div class="hdr" data-flex="w">
                        <h2>podcasts & videos</h2>
                        <div class="links-tags" data-flex="-center">
                            <a href="#">dumb questions</a>|
                            <a href="#">stocktake</a>|
                            <a href="#">boss talk</a>|
                            <a href="#">specials</a>
                        </div>
                    </div>
                    <div class='columns' data-flex='stripe w'>
                        <div>
                            <article class='clearfix'>
                                <figure><img src="/images/graph.png" width="150" height="98" alt=""></figure>
                                <h4><a href='#'>BHP gets a bullet</a></h4>
                                <p><time>18 jan 10</time> | Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy .</p>
                            </article>
                            <ul class="links-podcasts" data-childs="axis">
                                <li><span><time>18 jan 10 | </time><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></span><span class="lbl lbl-sm audio">audio</span></li>
                                <li><span><time>18 jan 10 | </time><a href="#">Praesent aliquam,  justo convallis luctus rutrum</a></span><span class="lbl lbl-sm video">video</span></li>
                                <li><span><time>18 jan 10 | </time><a href="#">fermentum diam, at nonummy quam  ante ac</a></span><span class="lbl lbl-sm video">video</span></li>
                                <li><span><time>18 jan 10 | </time><a href="#">Maecenas urna purus, fermentum id, molestie</a></span><span class="lbl lbl-sm audio">audio</span></li>
                            </ul>
                        </div>
                        <div>
                            <div class='box'>
                                <h4 class="title">podcast</h4>
                                <figure data-video='16:9'><iframe width="560" height="315" src="https://www.youtube.com/embed/F3QpgXBtDeo" frameborder="0" allowfullscreen></iframe></figure>
                                <div>
                                    <a href='#'>Fermentum id</a>,
                                    <a href='#'>molestie in</a>,
                                    <a href='#'>commodo  porttitor</a>,
                                    <a href='#'>felis</a>.
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class='info-box'>
                                <div class="panel-heading sup" data-flex="axis w">
                                    <h3>blogs</h3>
                                    <a href="#">&gt; More</a>
                                </div>
                                <div class='panel'>
                                    <ul class="links-default" data-childs="axis">
                                        <li><span><time>18 jan 10 | </time><a href="#">Lorem ipsum dolor sit amet</a></span><span>(9)</span></li>
                                        <li><span><time>18 jan 10 | </time><a href="#">Praesent aliquam,  justo convallis</a></span><span>(2)</span></li>
                                        <li><span><time>18 jan 10 | </time><a href="#">fermentum diam, at nonummy</a></span><span>(11)</span></li>
                                        <li><span><time>18 jan 10 | </time><a href="#">Maecenas urna purus, fermentum id</a></span><span>(1)</span></li>
                                        <li><span><time>18 jan 10 | </time><a href="#">Commodo  porttitor, felis. Nablandit</a></span><span>(32)</span></li>
                                    </ul>
                                </div>
                                <div class="panel-heading" data-flex="axis w">
                                    <h3>latest comments</h3>
                                </div>
                                <div class='panel'>
                                    <ul class="links-default" data-childs="axis">
                                        <li><span><small>></small><a href="#">Lorem ipsum dolor sit amet</a></span></li>
                                        <li><span><small>></small><a href="#">Praesent aliquam,  justo convallis</a></span></li>
                                        <li><span><small>></small><a href="#">fermentum diam, at nonummy</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <footer>
            <div class='footer'>
                <div class='lwrap' data-flex="stripe w">
                    <div data-flex>
                        <div>
                            <h6>Main Heading</h6>
                            <div class="links-footer" data-flex="col -start">
                                <a href="#">justo convallis luctus rutrum</a>
                                <a href="#">Erat nulla fermentum</a>
                                <a href="#">Diam, at nonummy quam</a>
                                <a href="#">Ante ac quam.</a>
                                <a href="#">Maecenas urna purus</a>
                                <a href="#">Fermentum id, molestie in</a>
                                <a href="#">Porttitor, felis</a>
                            </div>
                        </div>
                        <div>
                            <h6>Main Heading</h6>
                            <div class="links-footer" data-flex="col -start">
                                <a href="#">justo convallis luctus rutrum</a>
                                <a href="#">Erat nulla fermentum</a>
                                <a href="#">Diam, at nonummy quam</a>
                                <a href="#">Ante ac quam.</a>
                                <a href="#">Maecenas urna purus</a>
                                <a href="#">Fermentum id, molestie in</a>
                                <a href="#">Porttitor, felis</a>
                            </div>
                        </div>
                        <div>
                            <h6>Main Heading</h6>
                            <div class="links-footer" data-flex="col -start">
                                <a href="#">justo convallis luctus rutrum</a>
                                <a href="#">Erat nulla fermentum</a>
                            </div>
                            <h6>Main Heading</h6>
                            <div class="links-footer" data-flex="col -start">
                                <a href="#">Maecenas urna purus</a>
                                <a href="#">Fermentum id, molestie in</a>
                                <a href="#">Porttitor, felis</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h6>Contact details</h6>
                        </div>
                        <div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class='lwrap'>
                <span>Copyright &copy; 2010 The Smart Investor.</span><br>
                <span>ABN 1234 567 890 .Financial Serice Number 000000</span>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>