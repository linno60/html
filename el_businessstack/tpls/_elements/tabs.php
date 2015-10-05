<section class="tabs accordion">
    <div class="_nav">
        <a href="#acc1" class="active" data-flex="row-center-between">
            <span>Accordion1</span>
            <span class="btn btn-acc"><i class="icon-down"></i></span>
        </a>
        <a href="#acc2" data-flex="row-center-between">
            <span>Accordion2</span>
            <span class="btn btn-acc"><i class="icon-down"></i></span>
        </a>
        <a href="#acc3" data-flex="row-center-between">
            <span>Accordion3</span>
            <span class="btn btn-acc"><i class="icon-down"></i></span>
        </a>
        <a href="#acc4" data-flex="row-center-between">
            <span>Accordion4</span>
            <span class="btn btn-acc"><i class="icon-down"></i></span>
        </a>
    </div>
    <div class="_content">
        <div id="acc1">
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
        </div>
        <div id="acc2">
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
        </div>
        <div id="acc3">
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
        </div>
        <div id="acc4">
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
        </div>
    </div>
</section>
<section class="tabs tab">
    <div class="_nav">
        <a href="#tab1" data-flex="row-center-between">Tab 1</a>
        <a href="#tab2" data-flex="row-center-between" class="active">Tab 2</a>
        <a href="#tab3" data-flex="row-center-between">Tab 3</a>
        <a href="#tab4" data-flex="row-center-between">Tab 4</a>
    </div>
    <div class="_content">
        <div id="tab1">
            <p>1The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every "superstar," every "supreme leader," </p>
        </div>
        <div id="tab2">
            <p>The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every "superstar," every "supreme leader," </p></div>
        <div id="tab3">
            <p>3The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every "superstar," every "supreme leader," </p> </div>
        <div id="tab4">
            <p>4The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every "superstar," every "supreme leader," </p>
        </div>
    </div>
</section>
<script src="/js/jquery/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="/js/plugins/GFX_tabs/jquery.gfx_tabs.js" type="text/javascript"></script>
<script>
    $('.tab').GFX_tabs();
    $('.accordion').GFX_tabs({accordion_width: 2000, accordion_tab_height: "true"});
</script>