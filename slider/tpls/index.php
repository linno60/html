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
            <h2 class="h2">Slider #2</h2>
            <div class='csslider2 lwrap'>
                <input name="cs_anchor2" id='cs_slide1_0' type="radio" class='slide'>
                <input name="cs_anchor2" id='cs_slide1_1' type="radio" class='slide'>
                <input name="cs_anchor2" id='cs_slide1_2' type="radio" class='slide'>
                <input name="cs_anchor2" id='cs_play1' type="radio" checked>
                <ul>
                    <li><img src="/images/forest.jpg"></li>
                    <li class='num0 slide'><img src='/images/forest.jpg' alt='Forest' title='Forest'></li>
                    <li class='num1 slide'><img src='/images/plant.jpg' alt='Plant' title='Plant'></li>
                    <li class='num2 slide'><img src='/images/forestfloor.jpg' alt='Forest Floor' title='Forest Floor'></li>
                </ul>
                <div class='cs_description' data-childs="col">
                    <label class='num0'>Forest<small>Light path in the woods</small></label>
                    <label class='num1'>Plant<small>Green moss</small></label>
                    <label class='num2'>Forest Floor</label>
                </div>
                <div class='cs_play_pause'>
                    <label class='cs_play' for='cs_play1'></label>
                    <label class='cs_pause num0' for='cs_pause1_0'></label>
                    <label class='cs_pause num1' for='cs_pause1_1'></label>
                    <label class='cs_pause num2' for='cs_pause1_2'></label>
                </div>
                <div class='cs_arrowprev'>
                    <label class='num0' for='cs_slide1_0'><img src='/images/forest.jpg' alt='Forest' title='Forest'></label>
                    <label class='num1' for='cs_slide1_1'><img src='/images/plant.jpg' alt='Plant' title='Plant'></label>
                    <label class='num2' for='cs_slide1_2'><img src='/images/forestfloor.jpg' alt='Forest Floor' title='Forest Floor'></label>
                </div>
                <div class='cs_arrownext'>
                    <label class='num0' for='cs_slide1_0'><img src='/images/forest.jpg' alt='Forest' title='Forest'></label>
                    <label class='num1' for='cs_slide1_1'><img src='/images/plant.jpg' alt='Plant' title='Plant'></label>
                    <label class='num2' for='cs_slide1_2'><img src='/images/forestfloor.jpg' alt='Forest Floor' title='Forest Floor'></label>
                </div>
                <div class='cs_bullets' data-flex>
                    <label class='num0' for='cs_slide1_0'><figure><img src='/images/forestsm.jpg' alt='Forest' title='Forest'></figure></label>
                    <label class='num1' for='cs_slide1_1'><figure><img src='/images/plantsm.jpg' alt='Plant' title='Plant'></figure></label>
                    <label class='num2' for='cs_slide1_2'><figure><img src='/images/forestfloorsm.jpg' alt='Forest Floor' title='Forest Floor'></figure></label>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h2 class="h2">Slider #1</h2>
        <div class='csslider1 lwrap'>
            <input name="cs_anchor1" id='slide1-0' type="radio">
            <input name="cs_anchor1" id='slide1-1' type="radio">
            <input name="cs_anchor1" id='slide1-2' type="radio">
            <input name="cs_anchor1" id='play1' type="radio" checked>                
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