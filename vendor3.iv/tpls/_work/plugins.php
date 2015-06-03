<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <html lang="en">
        <head>
            <title>Plugins</title>
            <meta name="HandheldFriendly" content="True">
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
            <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>
            <link href="/css/reset.css" rel="stylesheet" type="text/css"/>
            <link rel="stylesheet" href="/js/jquery/plugins/sequence/modern-slide-in/css/sequencejs-theme.modern-slide-in.css"> 
            <link href="/css/styles.css" rel="stylesheet" type="text/css"/>    
            <style>
                body{
                    background-color:#808080;
                }
                .padd{
                    padding-left:30px;
                }
                .hdr-elements{
                    color:#fff;
                    font-family:"Arial";
                    font-weight:600;
                }
                h1.hdr-elements{                    
                    font-size:24px;
                    padding-top:20px;
                    padding-bottom:20px;
                    border-bottom: 1px solid white;
                    margin-bottom: 20px;
                }
                h2.hdr-elements{
                    font-size: 20px;
                    margin: 15px 0px;
                }
                h3.hdr-elements {
                    display: inline-block;
                    font-size: 16px;
                    margin: 15px 10px 15px 0;
                    width: 100px;
                    text-align: right;
                }
                .alt-bg {
                    display: inline-block;
                    border: 1px dashed white;
                    background: #4d5a9e;
                }
                .author-label {
                    position: fixed;
                    top: 100px;
                    left: -43px;
                    transform: rotate(-90deg);
                    font: 600 20px "Arial";
                    color: #FFF;
                    padding: 5px;
                    background-color: #229DEE;
                    border-radius: 0px 0px 10px 10px;
                    width: 120px;
                    text-align: center;
                    text-transform: uppercase;
                }
                .author-label.artur-label{
                    top:230px;
                    padding:0px;
                    left: -48px;
                    background-color:lightgray;
                }
                .author-label.artur-label a{
                    display:block;
                    color:#555;
                    font: 500 13px/22px "Arial";
                }
            </style>
        </head>
        <body>
            <div class="author-label">Ivan</div>
            <div class="author-label artur-label"><div><a href="http://artur.eug/plugins">Artur</a></div></div>
            <div class="elements">
                <h1 class="hdr-elements">SEQUENCE</h1>
            </div>                
            <div id="sequence">
                <a class="sequence-prev btn-prev"></a>
                <a class="sequence-next btn-next"></a>
                <ul class="sequence-canvas">
                    <li class="slide-one animate-in">
                        <div class="title">
                            <h2>SPECIAL OFFER -25%</h2>
                            <p>Performance & Design. Taken right to the edge.</p>
                            <a class="btn btn-default btn-middle">LEARN MORE</a>
                        </div>
                        <div class="model">
                            <div class="label-wrap">
                                <span class="label">
                                <span>$1450</span>
                            </span> 
                            </div>                                                       
                            <img src="images/macair.png" alt="" width="557" height="621"> 
                        </div>
                    </li>
                    <li class="slide-two">
                        <div class="title">                            
                            <h2>THE NEXT BIG THING...</h2> 
                            <p>Take, view and share photos with<br>
                                the 13MP camera and stunning 5" display.</p>
                            <a class="btn btn-default btn-middle">LEARN MORE</a>
                        </div>
                        <div class="model">
                            <div class="label-wrap">
                                <span class="label">
                                <span>$1450</span>
                            </span> 
                            </div>                           
                            <img class="balls" src="images/slide2_2.png" alt="" width="802" height="471">
                            <img class="transparent" src="images/slide2_1.png" alt="" width="357" height="559">
                        </div>
                    </li>
                    <li class="slide-three">
                        <div class="title">                            
                            <h2>CONTROL. NAVIGATE. BE RECOGNIZED.</h2>
                            <p>Smart Interaction lets you interact with your TV as never before.</p>
                            <a class="btn btn-default btn-middle">LEARN MORE</a> 
                        </div>
                        <div class="model">
                            <img class="man" src="images/slide3_1.png" alt="" width="545" height="405">
                            <img class="img-1" src="images/slide3_4.png" alt="" width="77" height="147">
                            <img class="img-2" src="images/slide3_2.png" alt="" width="101" height="206">
                            <img class="img-3" src="images/slide3_3.png" alt="" width="360" height="367">
                        </div>
                    </li>
                </ul>
                <ul class="sequence-pagination">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <div class="elements">
                <h1 class="hdr-elements">OWL CAROUCEL</h1>
            </div>
            <script src="/js/jquery/jquery-2.1.1.min.js"></script>
            <script src="/js/jquery/plugins/sequence/modern-slide-in/scripts/jquery.sequence-min.js"></script>
            <script>
                $(document).ready(function () {
                    var options = {
                        nextButton: true,
                        prevButton: true,
                        pagination: true,
                        animateStartingFrameIn: true,
                        //        autoPlay: true,
                        //        autoPlayDelay: 3000,
                        preloader: true,
                        preloadTheseFrames: [1],
                        preloadTheseImages: [
                            "images/tn-model1.png",
                            "images/tn-model2.png",
                            "images/tn-model3.png"
                        ]
                    };

                    var mySequence = $("#sequence").sequence(options).data("sequence");
                });
            </script>
        </body>
    </html>