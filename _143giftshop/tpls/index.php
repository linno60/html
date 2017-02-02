<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gift Shop</title>
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
            var LAYOUT_WIDTH = 1190;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            };
        </script>
    </head>
    <body>
        <div class="lwrap">
            <header>
                <section data-flex="between -end">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/copyright-logo.png" width="171" height="108" alt="Gift Shop">
                    </a> 
                    <div>
                        <div class="links-topbar" data-flex="end w">
                            <a href="#">sell</a>
                            <a href="#">registry</a>
                            <a href="#">community</a>
                            <a href="#">blogs</a>
                            <a href="#">mobile</a>
                            <a href="#">gift cards</a>
                        </div>
                        <div class="links-menu" data-flex="end w" data-childs="center -center">
                            <a href="#">register</a>
                            <a href="#">sign in</a>
                            <a href="#">whislost</a>
                            <a href="#">cart</a>
                        </div>
                    </div>
                </section>
                <nav class="links-nav" data-flex="center w" data-childs="center -center">
                    <a href="#">art</a>
                    <a href="#" class="active">home &amp; living</a>
                    <a href="#">jewelry</a>
                    <a href="#">women</a>
                    <a href="#">men</a>
                    <a href="#">kids</a>
                    <a href="#">vintage</a>
                    <a href="#">weddings</a>
                    <a href="#">more</a>
                </nav>
            </header>
            <main>
                <section class="showing" data-childs="stripe">
                    <div class="row">
                        <figure>
                            <img src="/images/mens.png" width="670" height="570" alt="">
                            <figcaption>
                                <hgroup class='title'>
                                    <h2>men's wear</h2>
                                    <h5>lorem ipsum is simply dummy text of the printing and typesetting industry. lorem</h5>
                                </hgroup> 
                                <h3 class='title-sub'>lorem ipsum is simply dummy text</h3>
                            </figcaption>
                        </figure>
                        <div>
                            <figure>
                                <img src="/images/womens.png" width="494" height="320" alt="">
                                <figcaption>
                                    <hgroup class='title'>
                                        <h3>women's wear</h3>
                                        <h6>lorem ipsum is simply dummy text of the printing and typesetting</h6>
                                    </hgroup> 
                                </figcaption>
                            </figure>
                            <figure>
                                <img src="/images/kids.png" width="494" height="245" alt="">
                                <figcaption>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="row">
                        <div data-flex="col">
                            <form action="#" method="post" data-flex="center -center" class="form-search">
                                <fieldset class="input-wrap">
                                    <input type="search" name="search" class="input-search" id="input-search">
                                    <label for="input-search" id="label-placeholder">Search your product here <span id="placeholder-child">( e.g.: Silver diamond ring )</span></label>
                                </fieldset>
                                <button><i class="icon-search"></i></button>
                            </form>
                            <figure>
                                <img src="/images/Layer-34.png" width="670" height="335" alt="">
                                <figcaption>

                                </figcaption>
                            </figure>
                        </div>
                        <figure>
                            <img src="/images/jewelry.png" width="494" height="510" alt="">
                            <figcaption>

                            </figcaption>
                        </figure>
                    </div>
                </section>
                <section>
                    <h2 class="hdr"><span>new products</span></h2>
                </section>
                <section>
                    <h2 class="hdr"><span>featured products</span></h2>
                </section>
                <section class="about">
                    <h2 class="hdr"><span>who we are</span></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <div data-flex="col -center">
                        <div class="steps" data-flex="stripe w" data-childs="around -center">
                            <div>
                                <i class="icon-stepchose"></i>
                                <span>choose products</span>
                            </div>
                            <div>
                                <i class="icon-stepregister"></i>
                                <span>register login</span>
                            </div>
                            <div>
                                <i class="icon-stepcheck"></i>
                                <span>checkout</span>
                            </div>                   
                        </div>
                        <a href="#" class="btn btn-default lg">register now</a>
                    </div>
                </section>
            </main>
            <footer data-flex="stripe w">
                <div>
                    <h5>shopping with us</h5>
                    <div class="links-default" data-flex="col -start">
                        <a href="#">why shop with us?</a>
                        <a href="#">how it works</a>
                        <a href="#">delivery</a>
                        <a href="#">returns</a>
                        <a href="#">where's my order</a>
                        <a href="#">contact & help</a>
                        <a href="#">wedding list</a>
                        <a href="#">wish lists</a>
                        <a href="#">gift vouchers</a>
                    </div>
                </div>
                <div>
                    <h5>about us</h5>
                    <div class="links-default" data-flex="col -start">
                        <a href="#">our story</a>
                        <a href="#">customer contact</a>
                        <a href="#">awards</a>
                        <a href="#">press centre</a>
                        <a href="#">work with us</a>
                        <a href="#">terms & conditions</a>
                        <a href="#">privacy & cookies</a>
                    </div>
                </div>
                <div>
                    <h5>selling with us</h5>
                    <div class="links-default" data-flex="col -start">
                        <a href="#">why join?</a>
                        <a href="#">faqs</a>
                        <a href="#">apply to sell with us</a>
                        <a href="#">affiliates</a>
                    </div>
                </div>
                <div>
                    <h5>signup newsletter</h5>
                    <form action="#" method="post" data-flex="col">
                        <input type="email" name="email" class="input-email" placeholder="e.g.:abc@domain.com">
                        <button><span class="btn btn-default md">subscribe now</span></button>
                    </form>
                    <h5>keep in touch</h5>
                    <div class="links-social" data-flex="w">
                        <a href="#"><i class="icon-Rss"></i></a>
                        <a href="#"><i class="icon-Facebook"></i></a>
                        <a href="#"><i class="icon-twitter"></i></a>
                        <a href="#"><i class="icon-flickr"></i></a>
                        <a href="#"><i class="icon-Google"></i></a>
                    </div>
                </div>
                <div class="copyright" data-flex="axis">
                    <span>Copyright &copy; 2014 Gift Shop, All right reserved</span>
                    <span>Designed by <a href="#">Amysxain</a></span>
                </div>
            </footer>
        </div>
        <script>
            document.getElementById('input-search').onblur = function () {
                var placeholder = document.getElementById('label-placeholder');
                var placeholderChild = document.getElementById('placeholder-child');
                this.value === '' ? placeholder.style.color = '#424242' : placeholder.style.color = 'transparent';
                this.value === '' ? placeholderChild.style.color = '#c2c2c2;' : placeholderChild.style.color = 'transparent';
            };
        </script>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>