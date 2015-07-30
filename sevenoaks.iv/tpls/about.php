<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About</title>
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link type="text/css" rel="stylesheet" href="/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/css/reset-elements.css">
        <link type="text/css" rel="stylesheet" href="/css/styles.css">    
    </head>
    <body>    
        <header data-flex="col-center-between">
            <?= require_tpl('common/header') ?>
            <section class="banner" data-flex="col-start-end">
                <div class="banner-box">
                    <h1>About Seven Oaks</h1>
                </div>
            </section>
        </header>
        <section class="content about" data-flex="row--between">
            <article class="mission">
                <h2>our mission</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </article>
            <aside>
                <ul class="list">
                    <li data-flex="row-center"><a href="#" data-flex="row-center"><i class="icon-list"></i>missionary & vision</a></li>
                    <li data-flex="row-center"><a href="#" data-flex="row-center"><i class="icon-list"></i>membership</a></li>
                    <li data-flex="row-center"><a href="#" data-flex="row-center"><i class="icon-list"></i>our history</a></li>
                    <li data-flex="row-center"><a href="#" data-flex="row-center"><i class="icon-list"></i>our staff</a></li>
                    <li data-flex="row-center"><a href="#" data-flex="row-center"><i class="icon-list"></i>job opportunities</a></li>
                </ul>
            </aside>
        </section>        
        <?= require_tpl('common/footer') ?>
    </body>
</html>
