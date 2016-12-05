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
            var LAYOUT_WIDTH = 1044;
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
            <section class='slider'>
                <div class='lwrap' data-flex='stripe w'>
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
                        <button><span class="btn btn-default"><i class="icon-arrow"></i>je consulte l'annuaire</span></button>
                    </form>
                </div>
            </section>
            <main class="content">
                <div class='lwrap' data-flex='stripe w' data-childs="col">
                    <div class="content-item" data-childs="col -center">
                        <div class="hdr">
                            <div class="lbl lbl-sm"><i class="icon-userw"></i></div>
                            <h2>professionnels</h2>
                        </div>
                        <article>
                            <h3>Tout en 1 !</h3>
                            <div data-flex="center -center"><div class="lbl lbl-default"><i class="icon-sitemap"></i></div></div>
                            <p><strong>Annuaire,</strong> un annuaire téléphonique tout en 1 très performant pour la France et ses régions.</p>
                        </article>
                    </div>
                    <div class="content-item" data-childs="col -center">
                        <div class="hdr">
                            <div class="lbl lbl-sm"><i class="icon-userw"></i></div>
                            <h2>particuliers</h2>
                        </div>
                        <article>
                            <h3>Multi-Opérateurs</h3>
                            <div data-flex="center -center"><div class="lbl lbl-default"><i class="icon-comp"></i></div></div>
                            <p><strong>Annuaire</strong> met à votre disposition un moteur de recherche très pertinent avec la collaboration des opérateurs téléphoniques.</p>
                        </article>
                    </div>
                    <div class="content-item" data-childs="col -center">
                        <div class="hdr">
                            <div class="lbl lbl-sm"><i class="icon-refresh"></i></div>
                            <h2>inversé</h2>
                        </div>
                        <article>
                            <h3>32 millions</h3>
                            <div data-flex="center -center"><div class="lbl lbl-default"><i class="icon-globe"></i></div></div>
                            <p>Vous avez accès à un annuaire téléphonique contenant près de <strong>32 millions</strong> de numéros de téléphone de professionnels et particuliers.</p>
                        </article>
                    </div>
                </div>
            </main>
        </div>
        <footer>
            <section class='lwrap footer' data-flex='stripe w'>
                <div>
                    <h5>annuaires</h5>
                    <div class='links-footer' data-flex='col -start'>
                        <a href='#'>Annuaire des particuliers</a>
                        <a href='#'>Annuaire des professionnels</a>
                        <a href='#'>Annuaire inversé</a>
                    </div>
                </div>
                <div>
                    <h5>conditions</h5>
                    <span>Contact</span>
                    <ul class="list-default">
                        <li><a href="#">Informations legalés</a></li>
                    </ul>
                </div>
                <div>
                    <h5>besoin d'assistance</h5>
                    <strong>0000 000 000<mark>*</mark></strong>
                    <small><mark>*</mark>1€35/appel + 0€34/min</small>
                </div>
                <div>
                    <h5>certification</h5>
                    <a href="#"><img src="/images/stars.png" width="229" height="53" alt=""></a>
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