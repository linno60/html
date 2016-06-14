<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Booking</title>
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
            var LAYOUT_WIDTH = 1124;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <section class="lwrap" data-flex="end">
                <div class="contact" data-flex="-center w" data-childs="-center">
                    <a href="mailto:info@chicagorentfinders.com"><div data-flex class="lbl lbl-contact"><i class="icon-mail"></i></div>info@chicagorentfinders.com</a>  
                    <a href="312-493-8446"><div data-flex class="lbl lbl-contact"><i class="icon-phone"></i></div>312 - 493 - 8446</a>  
                </div>
            </section>
            <section class="nav">
                <nav class="links-nav lwrap" data-flex="-center end w" data-childs="-center">
                    <a href="#" class="active"><span>Home</span><i class="icon-down"></i></a>
                    <a href="#">FAQ</a>.
                    <a href="#">Apartment Search</a>.
                    <a href="#">Contact Us</a>.
                    <a href="#">Neighborhoods</a>.
                    <a href="#">Rent Your Condo</a>.
                    <a href="#">Blog</a>
                </nav>
            </section>
            <section class="slider" data-flex="axis">
                <a href="#"><i class="icon-prev"></i></a>   
                <div class="lwrap" data-flex="axis" data-flex-640="vstripe">
                    <div data-flex="col -center">
                        <hgroup>
                            <h1>We Help <strong>you Find</strong></h1>
                            <h2>Apartment <strong>That Best</strong> Fit You</h2>
                        </hgroup>
                        <div data-flex="-center center w">
                            <a href="#" class="btn btn-contact">Contact Us Now</a>
                            <a href="#" class="btn btn-default">Search our site</a>
                        </div>
                    </div>
                    <form action="#" method="post" class="form-wrap">
                        <div class="steps" data-flex="axis">
                            <div class="lbl lbl-number complete">1<span class="lbl lbl-accept"></span></div>
                            <div class="lbl lbl-number active">2<span class="lbl lbl-accept"></span></div>
                            <div class="lbl lbl-number">3<span class="lbl lbl-accept"></span></div>
                            <div class="lbl lbl-number">4<span class="lbl lbl-accept"></span></div>
                        </div>
                        <legend>
                            <span><strong>Search</strong> Rentals</span><br>
                            <small>Want to find you home fast filll this up</small>
                        </legend>
                        <fieldset>
                            <div data-flex="-center w">
                                <label><strong>Monthly</strong> Rent&nbsp;:</label>
                                <input type="range" name="range" value="39">
                            </div>
                            <span data-flex="end" class="range-title">$500 to $5000</span>
                        </fieldset>
                        <fieldset>
                            <label><strong>Neighborhoods</strong></label>
                            <div data-flex="stripe w">
                                <input type="checkbox" name="checktop" id="t1">
                                <label for="t1">Streeterville</label>
                                <input type="checkbox" name="checktop" id="t2" checked>
                                <label for="t2">Gold Coast</label>
                                <input type="checkbox" name="checktop" id="t3">
                                <label for="t3">West Loop</label>
                                <input type="checkbox" name="checktop" id="t4">
                                <label for="t4">River North</label>
                                <input type="checkbox" name="checktop" id="t5">
                                <label for="t5">South Loop</label>
                                <input type="checkbox" name="checktop" id="t6">
                                <label for="t6">Old Town</label>
                                <input type="checkbox" name="checktop" id="t7">
                                <label for="t7">River West</label>
                                <input type="checkbox" name="checktop" id="t8" checked>
                                <label for="t8">Lakeshore East</label>
                            </div>                                
                        </fieldset>
                        <fieldset>
                            <div data-flex="axis">
                                <label><strong>Number of</strong> Bedrooms :</label>
                                <select>
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select> 
                            </div>
                        </fieldset>
                        <div data-flex="end">
                            <button><span class="btn btn-default">Search Now</span></button>
                        </div>
                    </form>  
                </div>
                <a href="#" class="btn btn-slide-lg next"><i class="icon-next"></i></a>
            </section>
        </header>
        <section class="welcome lwrap">
            <h2>Focusing on several Chicago premier <strong>luxury neighborhood locations</strong></h2>
            <p>River North, River West, Gold Coast, Streeterville, <strong>Loop,</strong> <strong>Printers Row,</strong> <strong>South Loop,</strong> <strong>West Loop,</strong> <strong>Lakeshore East</strong>, and Fulton River District. In addition to those locations, <strong>we also can assist with your Chicago apartment search</strong> in finding properties in neighborhoods such as </p>
        </section>
        <section class="featured">
            <div class="lwrap">
                <h3 class="hdr">Featured <strong>Apartments</strong></h3>
                <div data-flex="stripe">
                    <a href="#" class="btn btn-slide prev"></a>
                    <div class="featured-slider" data-flex="stripe" data-childs="vstripe">
                        <div>
                            <figure><img src="/images/img1.png"></figure>
                            <div class="figcaption" data-flex="stripe w">
                                <div data-flex="axis w">
                                    <h5><a href="#">river north</a></h5>
                                    <div><img src="/images/rating.png"></div>
                                </div>
                                <span data-flex="-center">United States</span>
                                <span class="price" data-flex="-center center">1 899 &euro;</span>
                            </div>
                        </div>
                        <div>
                            <figure><img src="/images/img2.png"></figure>
                            <div class="figcaption" data-flex="stripe w">
                                <div data-flex="axis w">
                                    <h5><a href="#">streeterville</a></h5>
                                    <div><img src="/images/rating.png"></div>
                                </div>
                                <span data-flex="-center">Canada</span>
                                <span class="price" data-flex="-center center">11 899 &euro;</span>
                            </div>
                        </div>
                        <div class="hidden">
                            <figure><img src="/images/img3.png"></figure>
                            <div class="figcaption" data-flex="stripe w">
                                <div data-flex="axis w">
                                    <h5><a href="#">Gold Coast</a></h5>
                                    <div><img src="/images/rating.png"></div>
                                </div>
                                <span data-flex="-center">United Kingdom</span>
                                <span class="price" data-flex="-center center">111 899 &euro;</span>
                            </div>
                        </div>
                        <div class="hidden-sm">
                            <figure><img src="/images/img4.png"></figure>
                            <div class="figcaption" data-flex="stripe w">
                                <div data-flex="axis w">
                                    <h5><a href="#">lakeshore east</a></h5>
                                    <div><img src="/images/rating.png"></div>
                                </div>
                                <span data-flex="-center">Miami City</span>
                                <span class="price" data-flex="-center center">15 899 &euro;</span>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-slide next"></a>
                </div>
            </div>
        </section>
        <div class="lwrap">
            <section class="rent">
                <h3 class="hdr">Rent Finders</h3>
                <div class="clearfix">
                    <div class="video">
                        <div data-video="16:9">
                            <iframe src="https://www.youtube.com/embed/ZUpxniZBb5s"></iframe>
                        </div>
                    </div>
                    <h4>specializing in <strong>all 60+ luxury high-rise</strong></h4>
                    <p>Chicago Rent Finders is Chicago's leading luxury downtown apartment rental locating company. We guarantee that our professionalism/customer service, combined with our expert licensed agents, you will be comfortable in finding Chicago's most suitable apartments. The best part is that we find you rentals all absolutely 100% FREE.</p>
                    <p>Offering the most superior finishes and amenities in all of downtown Chicago, we can fulfill any of your needs and wants.  </p>
                    <form action="#" method="post" data-flex="stripe w">
                        <fieldset>
                            <input type="checkbox" name="checkdef" id="d1" checked>
                            <label for="d1">You could end up paying 20% more, if you</label>
                            <input type="checkbox" name="checkdef" id="d2" checked>
                            <label for="d2">You could end up missing the</label>    
                        </fieldset>
                        <fieldset>
                            <input type="checkbox" name="checkdef" id="d3" checked>
                            <label for="d3">We will tell you the best deals</label> 
                            <input type="checkbox" name="checkdef" id="d4" checked>
                            <label for="d4">The best part is, we are free</label>
                        </fieldset>
                    </form> 
                </div>
            </section>
            <section class="clients">
                <h3 class="hdr">Our <strong>Clients</strong></h3>
                <div data-flex="stripe" data-childs="-center center">
                    <div><figure><img src="/images/aflac.png"></figure></div>
                    <div><figure><img src="/images/saeco.png"></figure></div>
                    <div><figure><img src="/images/turnstyle.png"></figure></div>
                    <div><figure><img src="/images/ncr.png"></figure></div>
                    <div><figure><img src="/images/mosswarner.png"></figure></div>
                </div>
            </section>
        </div>
        <footer>
            <section class="lwrap" data-flex="stripe" data-childs="col" data-flex-640="stripe w">
                <div>
                    <h6>contact us at:</h6>
                    <address>Via Ludovisi 39-45, Rome, 54267, Italy</address>
                    <span>Pho: 1.800.245.356 & Fax: 1/800.245.357</span>
                    <span>Email: <a href="mailto:info@yourcompanyname.com">info@yourcompanyname.com</a></span>
                </div>
                <div>
                    <h6>Useful Links</h6>
                    <div class="links-footer" data-flex="col -start">
                        <a href="#">Service Upadate</a>
                        <a href="#">Held Desk</a>
                        <a href="#">Apartments</a>
                    </div>
                </div>
                <div>
                    <h6>Navigation&nbsp;:</h6>
                    <div class="links-footer" data-flex="col -start">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact Us</a>
                    </div>
                </div>
                <div>
                    <h6>Featured Properties&nbsp;:</h6>                    
                    <div class="links-footer" data-flex="col -start">
                        <a href="#">River North</a>
                        <a href="#">Streeeterville</a>
                        <a href="#">Golad Coast</a>
                        <a href="#">Lakeshore East</a>
                    </div>
                </div>
                <div>
                    <h6>About Us&nbsp;:</h6>
                    <p>offering the most superior finishes and amenities in all </p>
                    <p>of downtown Chicago, we can fulfill any of your needs </p>
                </div>
            </section>
            <section class="copyright">
                <div class="lwrap" data-flex="stripe" data-flex-480="vaxis">
                    <span>&copy; Copyright 2012 | your company. All rights reserved</span>
                    <div class="links-social" data-flex="-center end w" data-flex-480="-center center w">
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-digg"></i></a>
                        <a href="#"><i class="icon-vimeo"></i></a>
                        <a href="#"><i class="icon-yt"></i></a>
                        <a href="#"><i class="icon-skype"></i></a>
                    </div>
                </div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>