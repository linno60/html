<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Slider</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
        <link rel="stylesheet" href="/css/addons/data-flex.css">
        <link rel="stylesheet" href="/css/addons/data-tabs.css">
        <link rel="stylesheet" href="/css/addons/generic.css">  
        <link rel="stylesheet" href="/css/elements.css">  
        <link rel="stylesheet" href="/css/styles1.css"> 
        <link rel="stylesheet" href="/css/styles2.css"> 
        <link rel="stylesheet" href="/css/styles3.css"> 
        <link rel="stylesheet" href="/css/styles4.css"> 
        <link rel="stylesheet" href="/css/styles5.css"> 
        <link rel="stylesheet" href="/css/styles6.css"> 
        <link rel="stylesheet" href="/css/styles7.css"> 
        <link rel="stylesheet" href="/css/styles8.css">
        <script>
            var LAYOUT_WIDTH = 1024;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <div>
            <h2 class="h2">Slider #8</h2>
            <div class='csslider8 lwrap'>
                <input name="anchor8" id='slide8-0' type="radio">
                <input name="anchor8" id='slide8-1' type="radio">
                <input name="anchor8" id='slide8-2' type="radio">
                <input name="anchor8" id='slide8-3' type="radio">
                <input name="anchor8" id='play8' type="radio" checked>
                <ul> 
                    <li><img src='/images/polaroid.jpg' width="830" height="360" alt='Polaroid' title='Polaroid'></li>
                    <li class='num0'><img src='/images/polaroid.jpg' width="830" height="360" alt='Polaroid' title='Polaroid'></li>
                    <li class='num1'><img src='/images/kodak.jpg' width="830" height="360" alt='Kodak' title='Kodak'></li>
                    <li class='num2'><img src='/images/nikon.jpg' width="830" height="360" alt='Nikon' title='Nikon'></li>
                    <li class='num3'><img src='/images/pentax.jpg' width="830" height="360" alt='Pentax' title='Pentax'></li>
                </ul>
                <div class='description'>
                    <label class='num0'><big><span>Polaroid</span></big><small><span>Instant photo</span></small></label>
                    <label class='num1'><big><span>Camera</span></big><small><span>Retro</span></small></label>
                    <label class='num2'><big><span>Photography</span></big><small><span>Analog</span></small></label>
                    <label class='num3'><big><span>Camera</span></big><small><span>Nostalgia</span></small></label>
                </div>
                <div class='arrowprev'>
                    <label class='num0' for='slide8-0'></label>
                    <label class='num1' for='slide8-1'></label>
                    <label class='num2' for='slide8-2'></label>
                    <label class='num3' for='slide8-3'></label>
                </div>
                <div class='arrownext'>
                    <label class='num0' for='slide8-0'></label>
                    <label class='num1' for='slide8-1'></label>
                    <label class='num2' for='slide8-2'></label>
                    <label class='num3' for='slide8-3'></label>
                </div>
                <div class='bullets' data-flex="col" data-childs="-center center">
                    <label class='num0' for='slide8-0'><figure><img src='/images/polaroid.jpg' width="207" height="90" alt='Polaroid' title='Polaroid'></figure></label>
                    <label class='num1' for='slide8-1'><figure><img src='/images/kodak.jpg' width="207" height="90" alt='Kodakv' title='Kodak'></figure></label>
                    <label class='num2' for='slide8-2'><figure><img src='/images/nikon.jpg' width="207" height="90" alt='Nikon' title='Nikon'></figure></label>
                    <label class='num3' for='slide8-3'><figure><img src='/images/pentax.jpg' width="207" height="90" alt='Pentax' title='Pentax'></figure></label>
                </div>		
            </div>
        </div>
        <div>
            <h2 class="h2">Slider #7</h2>
            <div class='csslider7 lwrap'>
                <input name="anchor7" id='slide7-0' type="radio">
                <input name="anchor7" id='slide7-1' type="radio">
                <input name="anchor7" id='slide7-2' type="radio">
                <input name="anchor7" id='play7' type="radio" checked>
                <ul>
                    <li><img src="/images/vintage.jpg"></li>
                    <li class='num0'><img src='/images/vintage.jpg' width="960" height="500" alt='Vintage' title='Vintage'></li>
                    <li class='num1'><img src='/images/vespa.jpg' width="960" height="500" alt='Vespa' title='Vespa'></li>
                    <li class='num2'><img src='/images/street.jpg' width="960" height="500" alt='Street' title='Street'></li>
                </ul>
                <div class='description' data-childs="col -end">
                    <label class='num0'><big><span>Scooter</span></big><small><span>Vintage</span></small></label>
                    <label class='num1'><big><span>Scooter</span></big><small><span>Vespa</span></small></label>
                    <label class='num2'><big><span>Scooter</span></big><small><span>Street</span></small></label>
                </div>
                <div class='arrowprev'>
                    <label class='num0' for='slide7-0'><span><i></i></span></label>
                    <label class='num1' for='slide7-1'><span><i></i></span></label>
                    <label class='num2' for='slide7-2'><span><i></i></span></label>
                </div>
                <div class='arrownext'>
                    <label class='num0' for='slide7-0'><span><i></i></span></label>
                    <label class='num1' for='slide7-1'><span><i></i></span></label>
                    <label class='num2' for='slide7-2'><span><i></i></span></label>
                </div>
                <div class='bullets' data-flex="center">
                    <label class='num0' for='slide7-0'><figure><img src='/images/vintagesm.jpg' width="172" height="90" alt='Vintage' title='Vintage'></figure></label>
                    <label class='num1' for='slide7-1'><figure><img src='/images/vespasm.jpg' width="172" height="90" alt='Vespa' title='Vespa'></figure></label>
                    <label class='num2' for='slide7-2'><figure><img src='/images/streetsm.jpg' width="172" height="90" alt='Street' title='Street'></figure></label>
                </div>
            </div>
            <div class="wrapper"><div class="item"></div></div>
        </div>
        <div>
            <h2 class="h2">Slider #6</h2>
            <div class='csslider6 lwrap'>
                <input name="anchor6" id='slide6-0' type="radio">
                <input name="anchor6" id='slide6-1' type="radio">
                <input name="anchor6" id='slide6-2' type="radio">
                <input name="anchor6" id='play6' type="radio" checked>
                <input name="anchor6" id='pause6-0' type="radio">
                <input name="anchor6" id='pause6-1' type="radio">
                <input name="anchor6" id='pause6-2' type="radio">
                <ul>
                    <li><img src="/images/mustang.jpg"></li>
                    <li class='num0'><img src='/images/mustang.jpg' alt='Mustang' title='Mustang'></li>
                    <li class='num1'><img src='/images/volga.jpg' alt='Volga' title='Volga'></li>
                    <li class='num2'><img src='/images/mercedes.jpg' alt='Mercedes' title='Mercedes'></li>
                </ul>
                <div class='description' data-childs="col -start">
                    <label class='num0'><span>Mustang</span><small>Power on wheels</small></label>
                    <label class='num1'><span>Rarity Volga</span><small>Wedding car</small></label>
                    <label class='num2'><span>Mercedes</span><small>Classic car</small></label>
                </div>
                <div class='play-pause' data-childs="-center center">
                    <label class='play' for='play6'></label>
                    <label class='pause num0' for='pause6-0'></label>
                    <label class='pause num1' for='pause6-1'></label>
                    <label class='pause num2' for='pause6-2'></label>
                </div>
                <div class='arrowprev' data-childs="-center center">
                    <label class='num0' for='slide6-0'></label>
                    <label class='num1' for='slide6-1'></label>
                    <label class='num2' for='slide6-2'></label>
                </div>
                <div class='arrownext' data-childs="-center center">
                    <label class='num0' for='slide6-0'></label>
                    <label class='num1' for='slide6-1'></label>
                    <label class='num2' for='slide6-2'></label>
                </div>
                <div class='bullets' data-flex="center">
                    <label class='num0' for='slide6-0'><figure><img src='/images/mustangsm.jpg' alt='Mustang' title='Mustang'></figure></label>
                    <label class='num1' for='slide6-1'><figure><img src='/images/volgasm.jpg' alt='Volga' title='Volga'></figure></label>
                    <label class='num2' for='slide6-2'><figure><img src='/images/mercedessm.jpg' alt='Mercedes' title='Mercedes'></figure></label>
                </div>
            </div>
        </div>
        <div>
            <h2 class="h2">Slider #5</h2>
            <div class='csslider5 lwrap'>
                <input name="anchor5" id='slide5-0' type="radio">
                <input name="anchor5" id='slide5-1' type="radio">
                <input name="anchor5" id='slide5-2' type="radio">
                <input name="anchor5" id='play5' type="radio" checked>
                <input name="anchor5" id='pause5-0' type="radio">
                <input name="anchor5" id='pause5-1' type="radio">
                <input name="anchor5" id='pause5-2' type="radio">
                <ul>
                    <li><img src="/images/piano.jpg" width="830" height="360"></li>
                    <li class='num0'><img src="/images/piano.jpg" width="830" height="360" alt='Piano' title='Piano'></li>
                    <li class='num1'><img src="/images/linen.jpg" width="830" height="360" alt='Linen' title='Linen'></li>
                    <li class='num2'><img src="/images/keyboard.jpg" width="830" height="360" alt='Keyboard' title='Keyboard'></li>
                </ul>
                <div class='description' data-childs="col">
                    <label class='num0'>Piano<small>Sleek black and white keys</small></label>
                    <label class='num1'>Linen<small>Clean and Tidy</small></label>
                    <label class='num2'>Keyboard</label>
                </div>
                <div class='play-pause'>
                    <label class='play' for='play5'></label>
                    <label class='pause num0' for='pause5-0'></label>
                    <label class='pause num1' for='pause5-1'></label>
                    <label class='pause num2' for='pause5-2'></label>
                </div>
                <div class='arrowprev'>
                    <label class='num0' for='slide5-0'><img src="/images/pianosm.jpg" width="80" height="80" alt='Piano' title='Piano'></label>
                    <label class='num1' for='slide5-1'><img src="/images/linensm.jpg" width="80" height="80" alt='Linen' title='Linen'></label>
                    <label class='num2' for='slide5-2'><img src="/images/keyboardsm.jpg" width="80" height="80" alt='Keyboard' title='Keyboard'></label>
                </div>
                <div class='arrownext'>
                    <label class='num0' for='slide5-0'><img src="/images/pianosm.jpg" width="80" height="80" alt='Piano' title='Piano'></label>
                    <label class='num1' for='slide5-1'><img src="/images/linensm.jpg" width="80" height="80" alt='Linen' title='Linen'></label>
                    <label class='num2' for='slide5-2'><img src="/images/keyboardsm.jpg" width="80" height="80" alt='Keyboard' title='Keyboard'></label>
                </div>
                <div class='bullets' data-flex>
                    <label class='num0' for='slide5-0'><figure><img src="/images/pianosm.jpg" width="80" height="80" alt='Piano' title='Piano'></figure></label>
                    <label class='num1' for='slide5-1'><figure><img src="/images/linensm.jpg" width="80" height="80" alt='Linen' title='Linen'></figure></label>
                    <label class='num2' for='slide5-2'><figure><img src="/images/keyboardsm.jpg" width="80" height="80" alt='Keyboard' title='Keyboard'></figure></label>
                </div>
            </div>
        </div>
        <div>
            <h2 class="h2">Slider #4</h2>
            <div class='csslider4 lwrap'>
                <input name="anchor4" id='slide-4-0' type="radio">
                <input name="anchor4" id='slide-4-1' type="radio">
                <input name="anchor4" id='slide-4-2' type="radio">
                <input name="anchor4" id='slide-4-3' type="radio">
                <input name="anchor4" id='play4' type="radio" checked>
                <input name="anchor4" id='pause-4-0' type="radio">
                <input name="anchor4" id='pause-4-1' type="radio">
                <input name="anchor4" id='pause-4-2' type="radio">
                <input name="anchor4" id='pause-4-3' type="radio">
                <ul>
                    <li><img src="/images/cat1.jpg"></li>
                    <li class='num0'><img src='/images/cat1.jpg' alt='Elegant Cat' title='Elegant Cat' width="830" height="560"></li>
                    <li class='num1'><img src='/images/cat2.jpg' alt='Graceful Cat' title='Graceful Cat' width="830" height="560"></li>
                    <li class='num2'><img src='/images/cat3.jpg' alt='Proud Cat' title='Proud Cat' width="830" height="560"></li>
                    <li class='num3'><img src='/images/cat4.jpg' alt='Curious Cat' title='Curious Cat' width="830" height="560"></li>
                </ul>
                <div class='description'>
                    <label class='num0'>Elegant Cat</label>
                    <label class='num1'>Graceful Cat</label>
                    <label class='num2'>Proud Cat</label>
                    <label class='num3'>The Curious Cat</label>
                </div>
                <div class='play-pause'>
                    <label class='play' for='play4'></label>
                    <label class='pause num0' for='pause-4-0'></label>
                    <label class='pause num1' for='pause-4-1'></label>
                    <label class='pause num2' for='pause-4-2'></label>
                    <label class='pause num3' for='pause-4-3'></label>
                </div>
                <div class='arrowprev'>
                    <label class='num0' for='slide-4-0'><img src='/images/cat1sm.jpg' alt='Elegant Cat' title='Elegant Cat' width="150" height="99"></label>
                    <label class='num1' for='slide-4-1'><img src='/images/cat2sm.jpg' alt='Graceful Cat' title='Graceful Cat' width="150" height="99"></label>
                    <label class='num2' for='slide-4-2'><img src='/images/cat3sm.jpg' alt='Proud Cat' title='Proud Cat' width="150" height="99"></label>
                    <label class='num3' for='slide-4-3'><img src='/images/cat4sm.jpg' alt='Curious Cat' title='Curious Cat' width="150" height="99"></label>
                </div>
                <div class='arrownext'>
                    <label class='num0' for='slide-4-0'><img src='/images/cat1sm.jpg' alt='Elegant Cat' title='Elegant Cat' width="150" height="99"></label>
                    <label class='num1' for='slide-4-1'><img src='/images/cat2sm.jpg' alt='Graceful Cat' title='Graceful Cat' width="150" height="99"></label>
                    <label class='num2' for='slide-4-2'><img src='/images/cat3sm.jpg' alt='Proud Cat' title='Proud Cat' width="150" height="99"></label>
                    <label class='num3' for='slide-4-3'><img src='/images/cat4sm.jpg' alt='Curious Cat' title='Curious Cat' width="150" height="99"></label>
                </div>
                <div class='bullets' data-flex="end" data-childs="-center center">
                    <label class='num0' for='slide-4-0'><figure><img src='/images/cat1sm.jpg' alt='Elegant Cat' title='Elegant Cat' width="150" height="99"></figure></label>
                    <label class='num1' for='slide-4-1'><figure><img src='/images/cat2sm.jpg' alt='Graceful Cat' title='Graceful Cat' width="150" height="99"></figure></label>
                    <label class='num2' for='slide-4-2'><figure><img src='/images/cat3sm.jpg' alt='Proud Cat' title='Proud Cat' width="150" height="99"></figure></label>
                    <label class='num3' for='slide-4-3'><figure><img src='/images/cat4sm.jpg' alt='Curious Cat' title='Curious Cat' width="150" height="99"></figure></label>
                </div>
            </div>
        </div>
        <div>
            <h2 class="h2">Slider #3</h2>
            <div class='csslider3 lwrap'>
                <input name="anchor3" id='slide-3-0' type="radio">
                <input name="anchor3" id='slide-3-1' type="radio">
                <input name="anchor3" id='slide-3-2' type="radio">
                <input name="anchor3" id='play3' type="radio" checked>
                <input name="anchor3" id='pause-3-0' type="radio">
                <input name="anchor3" id='pause-3-1' type="radio">
                <input name="anchor3" id='pause-3-2' type="radio">
                <ul>
                    <li><img src="/images/herbage.jpg" width="960" height="500"></li>
                    <li class='num0'><img src='/images/herbage.jpg' alt='Night Herb' title='Night Herb' width="960" height="500"></li>
                    <li class='num1'><img src='/images/pasture.jpg' alt='Pasture Herbage' title='Pasture Herbage' width="960" height="500"></li>
                    <li class='num2'><img src='/images/flowers.jpg' alt='Summer Field' title='Summer Field' width="960" height="500"></li>
                </ul>
                <div class='description'>
                    <label class='num0'>Night Herb</label>
                    <label class='num1'>Pasture Herbage</label>
                    <label class='num2'>Summer Field</label>
                </div>
                <div class='play-pause'>
                    <label class='play' for='play3'></label>
                    <label class='pause num0' for='pause-3-0'></label>
                    <label class='pause num1' for='pause-3-1'></label>
                    <label class='pause num2' for='pause-3-2'></label>
                </div>
                <div class='arrowprev'>
                    <label class='num0' for='slide-3-0'></label>
                    <label class='num1' for='slide-3-1'></label>
                    <label class='num2' for='slide-3-2'></label>
                </div>
                <div class='arrownext'>
                    <label class='num0' for='slide-3-0'></label>
                    <label class='num1' for='slide-3-1'></label>
                    <label class='num2' for='slide-3-2'></label>
                </div>
                <div class='bullets' data-flex="center">
                    <label class='num0' for='slide-3-0'><figure><img src='/images/herbagesm.jpg' alt='Night Herb' title='Night Herb' width="92" height="48"></figure></label>
                    <label class='num1' for='slide-3-1'><figure><img src='/images/pasturesm.jpg' alt='Pasture Herbage' title='Pasture Herbage' width="92" height="48"></figure></label>
                    <label class='num2' for='slide-3-2'><figure><img src='/images/flowerssm.jpg' alt='Summer Field' title='Summer Field' width="92" height="48"></figure></label>
                </div>
            </div>
        </div>
        <div>
            <h2 class="h2">Slider #2</h2>
            <div class='csslider2 lwrap'>
                <input name="anchor2" id='slide2-0' type="radio">
                <input name="anchor2" id='slide2-1' type="radio">
                <input name="anchor2" id='slide2-2' type="radio">
                <input name="anchor2" id='play2' type="radio" checked>
                <input name="anchor2" id='pause2-0' type="radio">
                <input name="anchor2" id='pause2-1' type="radio">
                <input name="anchor2" id='pause2-2' type="radio">
                <ul>
                    <li><img src="/images/forest.jpg" width="1024" height="768"></li>
                    <li class='num0'><img src='/images/forest.jpg' alt='Forest' title='Forest' width="1024" height="768"></li>
                    <li class='num1'><img src='/images/plant.jpg' alt='Plant' title='Plant' width="1024" height="768"></li>
                    <li class='num2'><img src='/images/forestfloor.jpg' alt='Forest Floor' title='Forest Floor' width="1024" height="768"></li>
                </ul>
                <div class='description' data-childs="col">
                    <label class='num0'>Forest<small>Light path in the woods</small></label>
                    <label class='num1'>Plant<small>Green moss</small></label>
                    <label class='num2'>Forest Floor</label>
                </div>
                <div class='play-pause'>
                    <label class='play' for='play2'></label>
                    <label class='pause num0' for='pause2-0'></label>
                    <label class='pause num1' for='pause2-1'></label>
                    <label class='pause num2' for='pause2-2'></label>
                </div>
                <div class='arrowprev'>
                    <label class='num0' for='slide2-0'><img src='/images/forest.jpg' alt='Forest' title='Forest' width="1024" height="768"></label>
                    <label class='num1' for='slide2-1'><img src='/images/plant.jpg' alt='Plant' title='Plant' width="1024" height="768"></label>
                    <label class='num2' for='slide2-2'><img src='/images/forestfloor.jpg' alt='Forest Floor' title='Forest Floor' width="1024" height="768"></label>
                </div>
                <div class='arrownext'>
                    <label class='num0' for='slide2-0'><img src='/images/forest.jpg' alt='Forest' title='Forest' width="1024" height="768"></label>
                    <label class='num1' for='slide2-1'><img src='/images/plant.jpg' alt='Plant' title='Plant' width="1024" height="768"></label>
                    <label class='num2' for='slide2-2'><img src='/images/forestfloor.jpg' alt='Forest Floor' title='Forest Floor' width="1024" height="768"></label>
                </div>
                <div class='bullets' data-flex>
                    <label class='num0' for='slide2-0'><figure><img src='/images/forestsm.jpg' alt='Forest' title='Forest' width="96" height="72"></figure></label>
                    <label class='num1' for='slide2-1'><figure><img src='/images/plantsm.jpg' alt='Plant' title='Plant' width="96" height="72"></figure></label>
                    <label class='num2' for='slide2-2'><figure><img src='/images/forestfloorsm.jpg' alt='Forest Floor' title='Forest Floor' width="96" height="72"></figure></label>
                </div>
            </div>
        </div>
        <div>
            <h2 class="h2">Slider #1</h2>
            <div class='csslider1 lwrap'>
                <input name="anchor1" id='slide1-0' type="radio">
                <input name="anchor1" id='slide1-1' type="radio">
                <input name="anchor1" id='slide1-2' type="radio">
                <input name="anchor1" id='play1' type="radio" checked>                
                <ul>
                    <li><img src="/images/chicago.jpg" width="960" height="500" alt="Chicago" title="Chicago"></li>
                    <li class='num0'><img src="/images/chicago.jpg" width="960" height="500" alt="Chicago" title="Chicago"></li>
                    <li class='num1'><img src="/images/moscow.jpg" width="960" height="500" alt="Moscow" title="Moscow"></li>
                    <li class='num2'><img src="/images/newyork.jpg" width="960" height="500" alt="New York" title="New York"></li>
                </ul>
                <div class='description'>
                    <label class='num0'>Chicago</label>
                    <label class='num1'>Moscow</label>
                    <label class='num2'>New York</label>
                </div>
                <div class='arrowprev'>
                    <label class='num0' for='slide1-0'><img src='/images/chicagosm.jpg' width="172" height="90" alt='Chicago' title='Chicago'></label>
                    <label class='num1' for='slide1-1'><img src='/images/moscowsm.jpg' width="172" height="90" alt='Moscow' title='Moscow'></label>
                    <label class='num2' for='slide1-2'><img src='/images/newyorksm.jpg' width="172" height="90" alt='New York' title='New York'></label>
                </div>
                <div class='arrownext'>
                    <label class='num0' for='slide1-0'><img src='/images/chicagosm.jpg' width="172" height="90" alt='Chicago' title='Chicago'></label>
                    <label class='num1' for='slide1-1'><img src='/images/moscowsm.jpg' width="172" height="90" alt='Moscow' title='Moscow'></label>
                    <label class='num2' for='slide1-2'><img src='/images/newyorksm.jpg' width="172" height="90" alt='New York' title='New York'></label>
                </div>
            </div>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>