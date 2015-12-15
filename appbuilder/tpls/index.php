<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Appbuilder</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/reset-elements.css">
        <link rel="stylesheet" href="/css/data-flex.css">
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
        <div class="lwrap">
            <header>
                <div data-flex='axis'>
                    <a href="#" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="176" height="29" alt="Appbuilder">
                    </a>
                    <span class="lbl lbl-default">we're hiring</span>
                </div>
                <nav class="links-nav" data-flex="-center w">
                    <a href="#">Portfolio</a>
                    <a href="#">Articles</a>
                    <a href="#">Partners</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact</a>
                </nav>
            </header>
            <div class='content' data-flex='axis'>
                <div>
                    <h1>We build small iPhone applications</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div data-flex='axis'>
                        <span class='price'>$ 0.99</span>
                        <a href='#'><img src="/images/store.png" width="146" height="51" alt=""></a>
                    </div>
                </div>
                <figure><img src="/images/iphone.png" width="377" height="626" alt=""></figure>
            </div>
            <div class='articles'>
                <div data-flex='stripe w'>
                <article>
                    <h2>From Popcorn to Popova</h2>
                    <time>Friday 23 April, 2010</time>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                </article>
                <article>
                    <h2>One Man Band</h2>
                    <time>Monday 19 April, 2010</time>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
                </article>
                <article>
                    <h2>Yields of this site</h2>
                    <time>Sunday 18 April, 2010</time>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.</p>
                </article>
                <article>
                    <h2>Adobe TV</h2>
                    <time>Saturday 17 April, 2010</time>
                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea com&shy;modi consequatur?</p>
                </article>
                </div>
            </div>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>