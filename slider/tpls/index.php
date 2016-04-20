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
        <script>
            var LAYOUT_WIDTH = 960;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
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
                    <li class='num0 img slide'><img src="/images/piano.jpg" width="830" height="360" alt='Piano' title='Piano'></li>
                    <li class='num1 img slide'><img src="/images/linen.jpg" width="830" height="360" alt='Linen' title='Linen'></li>
                    <li class='num2 img slide'><img src="/images/keyboard.jpg" width="830" height="360" alt='Keyboard' title='Keyboard'></li>
                </ul>
                <div class='description' data-childs="col">
                    <label class='num0'>Piano<small>Sleek black and white keys</small></label>
                    <label class='num1'>Linen<small>Clean and Tidy</small></label>
                    <label class='num2'>Keyboard</label>
                </div>
                <div class='play-pause'>
                    <label class='cs_play' for='play5'></label>
                    <label class='cs_pause num0' for='cs_pause1_0'></label>
                    <label class='cs_pause num1' for='cs_pause1_1'></label>
                    <label class='cs_pause num2' for='cs_pause1_2'></label>
                </div>
                <div class='arrowprev'>
                    <label class='num0' for='cs_slide1_0'><img src="/images/pianosm.jpg" width="80" height="80" alt='Piano' title='Piano'></label>
                    <label class='num1' for='cs_slide1_1'><img src="/images/linensm.jpg" width="80" height="80" alt='Linen' title='Linen'></label>
                    <label class='num2' for='cs_slide1_2'><img src="/images/keyboardsm.jpg" width="80" height="80" alt='Keyboard' title='Keyboard'></label>
                </div>
                <div class='arrownext'>
                    <label class='num0' for='cs_slide1_0'><img src="/images/pianosm.jpg" width="80" height="80" alt='Piano' title='Piano'></label>
                    <label class='num1' for='cs_slide1_1'><img src="/images/linensm.jpg" width="80" height="80" alt='Linen' title='Linen'></label>
                    <label class='num2' for='cs_slide1_2'><img src="/images/keyboardsm.jpg" width="80" height="80" alt='Keyboard' title='Keyboard'></label>
                </div>
                <div class='bullets' data-flex>
                    <label class='num0' for='cs_slide1_0'><figure><img src="/images/pianosm.jpg" width="80" height="80" alt='Piano' title='Piano'></figure></label>
                    <label class='num1' for='cs_slide1_1'><figure><img src="/images/linensm.jpg" width="80" height="80" alt='Linen' title='Linen'></figure></label>
                    <label class='num2' for='cs_slide1_2'><figure><img src="/images/keyboardsm.jpg" width="80" height="80" alt='Keyboard' title='Keyboard'></figure></label>
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
                    <li class='num-0'><img src='/images/cat1.jpg' alt='Elegant Cat' title='Elegant Cat' width="830" height="560"></li>
                    <li class='num-1'><img src='/images/cat2.jpg' alt='Graceful Cat' title='Graceful Cat' width="830" height="560"></li>
                    <li class='num-2'><img src='/images/cat3.jpg' alt='Proud Cat' title='Proud Cat' width="830" height="560"></li>
                    <li class='num-3'><img src='/images/cat4.jpg' alt='Curious Cat' title='Curious Cat' width="830" height="560"></li>
                </ul>
                <div class='description'>
                    <label class='num-0'>Elegant Cat</label>
                    <label class='num-1'>Graceful Cat</label>
                    <label class='num-2'>Proud Cat</label>
                    <label class='num-3'>The Curious Cat</label>
                </div>
                <div class='play-pause'>
                    <label class='play' for='play4'></label>
                    <label class='pause num-0' for='pause-4-0'></label>
                    <label class='pause num-1' for='pause-4-1'></label>
                    <label class='pause num-2' for='pause-4-2'></label>
                    <label class='pause num-3' for='pause-4-3'></label>
                </div>
                <div class='arrowprev'>
                    <label class='num-0' for='slide-4-0'><img src='/images/cat1sm.jpg' alt='Elegant Cat' title='Elegant Cat' width="150" height="99"></label>
                    <label class='num-1' for='slide-4-1'><img src='/images/cat2sm.jpg' alt='Graceful Cat' title='Graceful Cat' width="150" height="99"></label>
                    <label class='num-2' for='slide-4-2'><img src='/images/cat3sm.jpg' alt='Proud Cat' title='Proud Cat' width="150" height="99"></label>
                    <label class='num-3' for='slide-4-3'><img src='/images/cat4sm.jpg' alt='Curious Cat' title='Curious Cat' width="150" height="99"></label>
                </div>
                <div class='arrownext'>
                    <label class='num-0' for='slide-4-0'><img src='/images/cat1sm.jpg' alt='Elegant Cat' title='Elegant Cat' width="150" height="99"></label>
                    <label class='num-1' for='slide-4-1'><img src='/images/cat2sm.jpg' alt='Graceful Cat' title='Graceful Cat' width="150" height="99"></label>
                    <label class='num-2' for='slide-4-2'><img src='/images/cat3sm.jpg' alt='Proud Cat' title='Proud Cat' width="150" height="99"></label>
                    <label class='num-3' for='slide-4-3'><img src='/images/cat4sm.jpg' alt='Curious Cat' title='Curious Cat' width="150" height="99"></label>
                </div>
                <div class='bullets' data-flex="end" data-childs="-center center">
                    <label class='num-0' for='slide-4-0'><figure><img src='/images/cat1sm.jpg' alt='Elegant Cat' title='Elegant Cat' width="150" height="99"></figure></label>
                    <label class='num-1' for='slide-4-1'><figure><img src='/images/cat2sm.jpg' alt='Graceful Cat' title='Graceful Cat' width="150" height="99"></figure></label>
                    <label class='num-2' for='slide-4-2'><figure><img src='/images/cat3sm.jpg' alt='Proud Cat' title='Proud Cat' width="150" height="99"></figure></label>
                    <label class='num-3' for='slide-4-3'><figure><img src='/images/cat4sm.jpg' alt='Curious Cat' title='Curious Cat' width="150" height="99"></figure></label>
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
                    <li class='num-0'><img src='/images/herbage.jpg' alt='Night Herb' title='Night Herb' width="960" height="500"></li>
                    <li class='num-1'><img src='/images/pasture.jpg' alt='Pasture Herbage' title='Pasture Herbage' width="960" height="500"></li>
                    <li class='num-2'><img src='/images/flowers.jpg' alt='Summer Field' title='Summer Field' width="960" height="500"></li>
                </ul>
                <div class='description'>
                    <label class='num-0'>Night Herb</label>
                    <label class='num-1'>Pasture Herbage</label>
                    <label class='num-2'>Summer Field</label>
                </div>
                <div class='play-pause'>
                    <label class='play' for='play3'></label>
                    <label class='pause num-0' for='pause-3-0'></label>
                    <label class='pause num-1' for='pause-3-1'></label>
                    <label class='pause num-2' for='pause-3-2'></label>
                </div>
                <div class='arrowprev'>
                    <label class='num-0' for='slide-3-0'><span><i></i><b></b></span></label>
                    <label class='num-1' for='slide-3-1'><span><i></i><b></b></span></label>
                    <label class='num-2' for='slide-3-2'><span><i></i><b></b></span></label>
                </div>
                <div class='arrownext'>
                    <label class='num-0' for='slide-3-0'><span><i></i><b></b></span></label>
                    <label class='num-1' for='slide-3-1'><span><i></i><b></b></span></label>
                    <label class='num-2' for='slide-3-2'><span><i></i><b></b></span></label>
                </div>
                <div class='bullets' data-flex="center">
                    <label class='num-0' for='slide-3-0'><figure><img src='/images/herbagesm.jpg' alt='Night Herb' title='Night Herb' width="92" height="48"></figure></label>
                    <label class='num-1' for='slide-3-1'><figure><img src='/images/pasturesm.jpg' alt='Pasture Herbage' title='Pasture Herbage' width="92" height="48"></figure></label>
                    <label class='num-2' for='slide-3-2'><figure><img src='/images/flowerssm.jpg' alt='Summer Field' title='Summer Field' width="92" height="48"></figure></label>
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
                    <li class='num-0'><img src='/images/forest.jpg' alt='Forest' title='Forest' width="1024" height="768"></li>
                    <li class='num-1'><img src='/images/plant.jpg' alt='Plant' title='Plant' width="1024" height="768"></li>
                    <li class='num-2'><img src='/images/forestfloor.jpg' alt='Forest Floor' title='Forest Floor' width="1024" height="768"></li>
                </ul>
                <div class='description' data-childs="col">
                    <label class='num-0'>Forest<small>Light path in the woods</small></label>
                    <label class='num-1'>Plant<small>Green moss</small></label>
                    <label class='num-2'>Forest Floor</label>
                </div>
                <div class='play-pause'>
                    <label class='play' for='play2'></label>
                    <label class='pause num-0' for='pause2-0'></label>
                    <label class='pause num-1' for='pause2-1'></label>
                    <label class='pause num-2' for='pause2-2'></label>
                </div>
                <div class='arrowprev'>
                    <label class='num-0' for='slide2-0'><img src='/images/forest.jpg' alt='Forest' title='Forest' width="1024" height="768"></label>
                    <label class='num-1' for='slide2-1'><img src='/images/plant.jpg' alt='Plant' title='Plant' width="1024" height="768"></label>
                    <label class='num-2' for='slide2-2'><img src='/images/forestfloor.jpg' alt='Forest Floor' title='Forest Floor' width="1024" height="768"></label>
                </div>
                <div class='arrownext'>
                    <label class='num-0' for='slide2-0'><img src='/images/forest.jpg' alt='Forest' title='Forest' width="1024" height="768"></label>
                    <label class='num-1' for='slide2-1'><img src='/images/plant.jpg' alt='Plant' title='Plant' width="1024" height="768"></label>
                    <label class='num-2' for='slide2-2'><img src='/images/forestfloor.jpg' alt='Forest Floor' title='Forest Floor' width="1024" height="768"></label>
                </div>
                <div class='bullets' data-flex>
                    <label class='num-0' for='slide2-0'><figure><img src='/images/forestsm.jpg' alt='Forest' title='Forest' width="96" height="72"></figure></label>
                    <label class='num-1' for='slide2-1'><figure><img src='/images/plantsm.jpg' alt='Plant' title='Plant' width="96" height="72"></figure></label>
                    <label class='num-2' for='slide2-2'><figure><img src='/images/forestfloorsm.jpg' alt='Forest Floor' title='Forest Floor' width="96" height="72"></figure></label>
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
                    <li class='num-0'><img src="/images/chicago.jpg" width="960" height="500" alt="Chicago" title="Chicago"></li>
                    <li class='num-1'><img src="/images/moscow.jpg" width="960" height="500" alt="Moscow" title="Moscow"></li>
                    <li class='num-2'><img src="/images/newyork.jpg" width="960" height="500" alt="New York" title="New York"></li>
                </ul>
                <div class='description'>
                    <label class='num-0'>Chicago</label>
                    <label class='num-1'>Moscow</label>
                    <label class='num-2'>New York</label>
                </div>
                <div class='arrowprev'>
                    <label class='num-0' for='slide1-0'><img src='/images/chicagosm.jpg' width="172" height="90" alt='Chicago' title='Chicago'></label>
                    <label class='num-1' for='slide1-1'><img src='/images/moscowsm.jpg' width="172" height="90" alt='Moscow' title='Moscow'></label>
                    <label class='num-2' for='slide1-2'><img src='/images/newyorksm.jpg' width="172" height="90" alt='New York' title='New York'></label>
                </div>
                <div class='arrownext'>
                    <label class='num-0' for='slide1-0'><img src='/images/chicagosm.jpg' width="172" height="90" alt='Chicago' title='Chicago'></label>
                    <label class='num-1' for='slide1-1'><img src='/images/moscowsm.jpg' width="172" height="90" alt='Moscow' title='Moscow'></label>
                    <label class='num-2' for='slide1-2'><img src='/images/newyorksm.jpg' width="172" height="90" alt='New York' title='New York'></label>
                </div>
            </div>
        </div>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>