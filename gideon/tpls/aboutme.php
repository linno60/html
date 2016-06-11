<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gideon 300</title>
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
    <body data-flex="col between">
        <div>
            <?= require_tpl('common/header') ?>
            <?= require_tpl('common/slider') ?>
            <div class="lwrap wrap about">
                <figure><img src="/images/img7.jpg" width="1170" height="794" alt=""></figure>
                <div>
                    <div class="about-author" data-flex="col -center">
                        <h2>Steve Smith</h2>
                        <div><span>Professional Blogger</span> / <span>Writter</span> / <span>Designer</span></div>
                        <div class="links-socialalt" data-flex="center w" data-childs="center -center">
                            <a href="#" class="tw"><i class="icon-social-tw"></i></a>
                            <a href="#" class="fb"><i class="icon-social-fb"></i></a>
                            <a href="#" class="gp"><i class="icon-social-gp"></i></a>
                            <a href="#" class="in"><i class="icon-social-in"></i></a>
                            <a href="#" class="db"><i class="icon-social-db"></i></a>
                            <a href="#" class="sk"><i class="icon-social-sk"></i></a>
                        </div>
                        <p>Cras sit amet dui ac lectus molestie porttitor. Aenean sagittis imperdiet massa. Nam est lacus, consequat vita eil semper tristique, temp us in magna. At nos hinc posthac, sitientis piros Afros. At nos hinc posthac, sitientis piros Afros. Magna pars studiorum,
                            prodita quaerimus. commodi consequat.  Cras mattis iudicium purus sit amet fermentum.  Cras sit amet dui ac lectus
                            molestie porttitor. Aenean sagittis imperdiet massa. Nam  est lacus,  consequat vita eil semper tristique,
                            temp us in magna. At nos hinc posthac, sitientis piros Afros. At nos </p>
                    </div>
                    <div class="skills">
                        <h2>my skills</h2>
                        <div data-flex='stripe' data-childs="col -center">
                            <article>
                                <div class="percentage" data-flex="center -center"><span></span><big>85</big></div>
                                <span>Professional Blog</span>
                            </article>
                            <article>
                                <div class="percentage" data-flex="center -center"><span></span><big>75</big></div>
                                <span>Design</span>
                            </article>
                            <article>
                                <div class="percentage" data-flex="center -center"><span></span><big>80</big></div>
                                <span>Photography</span>
                            </article>
                            <article>
                                <div class="percentage" data-flex="center -center"><span></span><big>60</big></div>
                                <span>Story Writting</span>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= require_tpl('common/footer') ?>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>