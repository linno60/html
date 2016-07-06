<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gideon</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
        <link rel="stylesheet" href="/css/addons/generic.css">  
        <link rel="stylesheet" href="/css/elements.css">  
        <link rel="stylesheet" href="/css/styles.css">  
        <script>
            var LAYOUT_WIDTH = 1190;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div class="contact">
            <?= require_tpl('common/header') ?>
            <?= require_tpl('common/slider') ?>
            <div class="lwrap content-wrap">
                <section class="article-wrap">
                    <figure><img src="/images/img7.jpg" width="1170" height="794" alt=""></figure>
                    <div class="contact-details clearfix">
                        <div>
                            <i class="icon-location"></i>
                            <address>9870 Race Street<br> San Jose, CA 95127</address>
                        </div> 
                        <div>
                            <i class="icon-phone"></i>
                            <div>
                                <span>+ 871 2357 8520</span><br>
                                <span>+ 061 5542 6234</span>
                            </div>
                        </div> 
                        <div>
                            <i class="icon-letter"></i>
                            <div>
                                <a href="mailto:Info@itsme.com">Info@<wbr>itsme.com</a><br>
                                <a href="mailto:contact@itsme.com">contact@<wbr>itsme.com</a>
                            </div>
                        </div> 
                    </div>
                    <table>
                        
                    </table>
                    <form action="#" method="post">
                        <div class="clearfix">
                            <input type="text" name="contact" id="firstname" placeholder="First Name" required="">
                            <input type="text" name="contact" id="lastname" placeholder="Last Name" required="">
                            <input type="email" name="contact" id="email" placeholder="Email" required="">
                            <input type="url" name="contact" id="website" placeholder="Website" required="">
                            <textarea name="contact" id="message" placeholder="Message" required=""></textarea>
                        </div>
                        <div><button><span class="btn-default">Send Message</span></button></div>
                    </form>
                </section>
            </div>
        </div>
        <footer>
            <div class="lwrap footer-title">
                <h2>follow me on instagram</h2>
            </div>
            <?= require_tpl('common/gallery') ?>
            <?= require_tpl('common/footer') ?>             
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>