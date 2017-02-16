<h>Tabs</h>

<div class="tabs" data-tabs>

    <div class="tablist">
        <a href="#tab1" class="active">fashion</a>
        <a href="#tab2">cinema</a>
    </div>

    <div class="tabset">
        <a href="#tab1" class="active">fashion</a>
        <div id="tab1" class="tabpanel active">Tab number 1</div>
        <a href="#tab2">fashion</a>
        <div id="tab2" class="tabpanel">Tab number 2</div>
    </div>

</div>

<div class="tabs" id="tabs1">
    <div class="tablist" data-flex="between end">
        <button id="prev1"><span class="btn btn-nav prev"></span></button>
        <ul data-flex="center">
            <li><a href="#tabs-1-1">Fetured</a></li>
            <li><a href="#tabs-1-2">New Itme</a></li>
            <li><a href="#tabs-1-3">Top Seller</a></li>
            <li><a href="#tabs-1-4">Top Ratting</a></li>
        </ul> 
        <button id="next1"><span class="btn btn-nav next"></span></button>
    </div>
    <div class="tabset" data-childs="stripe">
        <div id="tabs-1-1" class="tabpanel">
            tab 1
        </div>
        <div id="tabs-1-2" class="tabpanel">
            tab 2
        </div>
        <div id="tabs-1-3" class="tabpanel">
            tab 3
        </div>
        <div id="tabs-1-4" class="tabpanel">
            tab 4
        </div>
    </div>
</div>

<h>Accordion</h>

<div class="accordion">
    <a href="#" class="active">fashion</a>
    <div class="active">Tab number 1</div>
    <a href="#">fashion</a>
    <div>Tab number 2</div>
    <a href="#">fashion</a>
    <div>Tab number 3</div>
</div>