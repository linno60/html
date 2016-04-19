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
            <h2 class="h2">Slider #4</h2>
            <div class='csslider4 lwrap'>
                <input name="anchor4" id='cs_slide1_0' type="radio" class='slide'>
                <input name="anchor4" id='cs_slide1_1' type="radio" class='slide'>
                <input name="anchor4" id='cs_slide1_2' type="radio" class='slide'>
                <input name="anchor4" id='cs_slide1_3' type="radio" class='slide'>
                <input name="anchor4" id='cs_play1' type="radio" checked>
                <input name="anchor4" id='cs_pause1_0' type="radio" class='pause'>
                <input name="anchor4" id='cs_pause1_1' type="radio" class='pause'>
                <input name="anchor4" id='cs_pause1_2' type="radio" class='pause'>
                <input name="anchor4" id='cs_pause1_3' type="radio" class='pause'>
                <ul>
                    <li><img src="/images/cat1.jpg"></li>
                    <li class='num0 slide'><img src='/images/cat1.jpg' alt='no-jQuery Content Slider' title='Elegant Cat'></li>
                    <li class='num1 slide'><img src='/images/cat2.jpg' alt='Content Slider with Zero jQuery' title='Graceful Cat'></li>
                    <li class='num2 slide'><img src='/images/cat3.jpg' alt='Wordpress Content Slider with CSS only' title='Proud Cat'></li>
                    <li class='num3 slide'><img src='/images/cat4.jpg' alt='Responsive Content Slider w/o jQuery' title='The Curious Cat'></li>
                </ul>
                <div class='cs_description'>
                    <label class='num0'>Elegant Cat</label>
                    <label class='num1'>Graceful Cat</label>
                    <label class='num2'>Proud Cat</label>
                    <label class='num3'>The Curious Cat</span></span></label>
                </div>
                <div class='cs_play_pause'>
                    <label class='cs_play' for='cs_play1'></label>
                    <label class='cs_pause num0' for='cs_pause1_0'></label>
                    <label class='cs_pause num1' for='cs_pause1_1'></label>
                    <label class='cs_pause num2' for='cs_pause1_2'></label>
                    <label class='cs_pause num3' for='cs_pause1_3'></label>
                </div>
                <div class='cs_arrowprev'>
                    <label class='num0' for='cs_slide1_0'><img src='/images/cat1sm.jpg' alt='Elegant Cat' title='Elegant Cat'></label>
                    <label class='num1' for='cs_slide1_1'><img src='/images/cat2sm.jpg' alt='Graceful Cat' title='Graceful Cat'></label>
                    <label class='num2' for='cs_slide1_2'><img src='/images/cat3sm.jpg' alt='Proud Cat' title='Proud Cat'></label>
                    <label class='num3' for='cs_slide1_3'><img src='/images/cat4sm.jpg' alt='The Curious Cat' title='The Curious Cat'></label>
                </div>
                <div class='cs_arrownext'>
                    <label class='num0' for='cs_slide1_0'><img src='/images/cat1sm.jpg' alt='Elegant Cat' title='Elegant Cat'></label>
                    <label class='num1' for='cs_slide1_1'><img src='/images/cat2sm.jpg' alt='Graceful Cat' title='Graceful Cat'></label>
                    <label class='num2' for='cs_slide1_2'><img src='/images/cat3sm.jpg' alt='Proud Cat' title='Proud Cat'></label>
                    <label class='num3' for='cs_slide1_3'><img src='/images/cat4sm.jpg' alt='The Curious Cat' title='The Curious Cat'></label>
                </div>
                <div class='cs_bullets' data-flex="end" data-childs="-center center">
                    <label class='num0' for='cs_slide1_0'><figure><img src='/images/cat1sm.jpg' alt='Elegant Cat' title='Elegant Cat'></figure></label>
                    <label class='num1' for='cs_slide1_1'><figure><img src='/images/cat2sm.jpg' alt='Graceful Cat' title='Graceful Cat'></figure></label>
                    <label class='num2' for='cs_slide1_2'><figure><img src='/images/cat3sm.jpg' alt='Proud Cat' title='Proud Cat'></figure></label>
                    <label class='num3' for='cs_slide1_3'><figure><img src='/images/cat4sm.jpg' alt='The Curious Cat' title='The Curious Cat'></figure></label>
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
                    <label class='num0' for='slide-3-0'><span><i></i><b></b></span></label>
                    <label class='num1' for='slide-3-1'><span><i></i><b></b></span></label>
                    <label class='num2' for='slide-3-2'><span><i></i><b></b></span></label>
                </div>
                <div class='arrownext'>
                    <label class='num0' for='slide-3-0'><span><i></i><b></b></span></label>
                    <label class='num1' for='slide-3-1'><span><i></i><b></b></span></label>
                    <label class='num2' for='slide-3-2'><span><i></i><b></b></span></label>
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