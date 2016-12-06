<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Annuaire</title>
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
            var LAYOUT_WIDTH = 1380;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body data-flex='col'>
        <a name="top"></a>
        <div>
            <header>
                <div class='lwrap' data-flex='axis'>
                    <a href="/" title="Return to the homepage" id='logo'>
                        <img src="/images/logo.png" width="247" height="45" alt="Annuaire">
                    </a>
                    <div data-flex="end w">
                        <a href="#" class="btn btn-sign">Se connecter ou</a>
                        <a href="#" class="btn btn-sign active">S'inscrire</a>
                    </div>
                </div>
            </header> 
            <section class='banner'>
                <div class='lwrap' data-flex='stripe w' data-flex-640="vstripe">
                    <div data-flex="-end" class="figure"><figure><img src="/images/hand.png" width="429" height="476" alt=""></figure></div>
                    <form action='#' method='post'>
                        <label>
                            <big>Vous cherchez un numéro de téléphone ? Vous avez un nom ou une adresse ?</big>
                            <small>Utilisez notre annuaire téléphonique performant afin d'effectuer votre recherche !</small>
                        </label>
                        <div data-flex='stripe w'>
                            <input type="text" name="form" class="input-default" placeholder="Quoi ?">
                            <input type="text" name="form" class="input-default" placeholder="Qui ?">
                            <input type="text" name="form" class="input-default" placeholder="Où ?">
                        </div>
                        <button><span class="btn btn-default"><i class="icon-arrow"></i>je con&shy;sulte l'an&shy;nuai&shy;re</span></button>
                    </form>
                </div>
            </section>
            <main class="content">
                <div class='lwrap' data-childs='stripe w'>
                    <section data-childs="col between">
                        <div class="hdr active">
                            <div class="prompt">Ef&shy;fec&shy;tuer une re&shy;cher&shy;che</div>
                            <h2>
                                <div class="hidden" data-flex="center -center">
                                    <div class="lbl lbl-sm"><i class="icon-usersm"></i></div>
                                    <a href="#"></a>
                                </div>
                                pro&shy;fes&shy;sion&shy;nels
                            </h2>
                        </div>
                        <div class="hdr">
                            <div class="prompt">Ef&shy;fec&shy;tuer une re&shy;cher&shy;che</div>
                            <h2>
                                <div class="hidden" data-flex="center -center">
                                    <div class="lbl lbl-sm"><i class="icon-userlg"></i></div>
                                    <a href="#"></a>
                                </div>
                                par&shy;ti&shy;cu&shy;liers
                            </h2>
                        </div>
                        <div class="hdr">
                            <div class="prompt">Ef&shy;fec&shy;tuer une re&shy;cher&shy;che</div>
                            <h2>
                                <div class="hidden" data-flex="center -center">
                                    <div class="lbl lbl-sm"><i class="icon-refresh"></i></div>
                                    <a href="#"></a>
                                </div>
                                in&shy;ver&shy;sé
                            </h2>
                        </div>
                    </section>
                    <section data-flex-480="vstripe">                       
                        <article class="content-item">
                            <h3>Tout en 1 !</h3>
                            <div data-flex="center -center"><div class="lbl lbl-default"><i class="icon-sitemap"></i></div></div>
                            <p><strong>Annuaire,</strong> un annuaire télé&shy;phonique tout en 1 très perfor&shy;mant pour la France et ses régions.</p>
                        </article> 
                        <article class="content-item">
                            <h3>Mul&shy;ti-Opé&shy;ra&shy;teurs</h3>
                            <div data-flex="center -center"><div class="lbl lbl-default"><i class="icon-comp"></i></div></div>
                            <p><strong>Annuaire</strong> met à votre disposition un moteur de recherche très pertinent avec la colla&shy;boration des opérateurs télépho&shy;niques.</p>
                        </article>                       
                        <article class="content-item">
                            <h3>32 mil&shy;lions</h3>
                            <div data-flex="center -center"><div class="lbl lbl-default"><i class="icon-globe"></i></div></div>
                            <p>Vous avez accès à un annuaire télépho&shy;nique contenant près de <strong>32 millions</strong> de numéros de téléphone de pro&shy;fession&shy;nels et par&shy;ticu&shy;liers.</p>
                        </article>
                    </section>                    
                </div>
            </main>
        </div>
        <footer>
            <section class='lwrap footer' data-flex='stripe w'>
                <div>
                    <h5>an&shy;nuai&shy;res</h5>
                    <div class='links-footer' data-flex='col -start'>
                        <a href='#'>An&shy;nuai&shy;re des parti&shy;culiers</a>
                        <a href='#'>An&shy;nuai&shy;re des pro&shy;fession&shy;nels</a>
                        <a href='#'>An&shy;nuai&shy;re in&shy;versé</a>
                    </div>
                </div>
                <div>
                    <h5>con&shy;di&shy;tions</h5>
                    <span>Con&shy;tact</span>
                    <ul class="list-default">
                        <li><a href="#">Infor&shy;mations lega&shy;lés</a></li>
                    </ul>
                </div>
                <div>
                    <h5>be&shy;soin d'assis&shy;tance</h5>
                    <strong>0000 000 000<mark>*</mark></strong>
                    <small><mark>*</mark>1€35/appel + 0€34/min</small>
                </div>
                <div>
                    <h5>cer&shy;tifi&shy;ca&shy;tion</h5>
                    <a href="#" class="certification"><img src="/images/trust.png" width="134" height="15" alt=""></a>
                    <div data-flex="axis"><span><big>Bon</big> <span>7,4 sur 10</span></span> <a href="#"><img src="/images/stars.png" width="229" height="53" alt=""></a></div>
                </div>
            </section>
            <a href='#top' class='btn btn-anchor'></a>
            <section class='copyright'>
                <div class='lwrap' data-flex='axis'>
                    <span>&copy; 2015 <strong>Annuaire.</strong> Tous droits réservés.</span>
                    <div class="links-social" data-flex="end w">
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-fb"></i></a>
                        <a href="#"><i class="icon-rss"></i></a>
                    </div>
                </div>
            </section>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>