<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/css/reset-elements.css">
        <link type="text/css" rel="stylesheet" href="/css/styles.css?<?= time() ?>">    
    </head>
    <body>
        <?= require_tpl('common/header') ?>
        <div class="breadcrumb-wrap">
            <ul class="breadcrumb">
                <li><a href="#">Home</a><span>></span></li>
                <li>Contact Us</li>
            </ul> 
        </div>
        <div class="wrap-base column contact-us">
            <h1 class="h1">Contact Us</h1>
            <p>If after products comparing you find it hard to choose, you can write to our live support.</p>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d343211.58112709835!2d35.39233352636798!3d47.774845586626085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sua!4v1434445371062"   frameborder="0" style="border:0"></iframe>            
            </div>
            <div class="contacts-wrap">
                <div>
                    <h3 class="h3">leave comment</h3>
                    <form action="#" method="post">  
                        <div>
                            <div class="form-wrap">
                                <div>
                                <label class="lbl lbl-form"><i class="icon-label-username"></i>Name*</label> 
                                <input type="text" placeholder="Marek Mnishek">
                            </div>
                            <div>
                                <label class="lbl lbl-form"><i class="icon-label-mail"></i>Email*</label> 
                                <input type="text" placeholder="marek.mnishek@gmail.com">
                            </div>
                            </div>
                            <div class="form-wrap">
                                <div>
                                <label class="lbl lbl-form"><i class="icon-label-subject"></i>Subject</label> 
                                <input type="text" placeholder="Interdum et Malesuada">
                            </div>
                            <div class="attach">
                                <a href="#" class="lbl lbl-form"><i class="icon-label-attach"></i>Attach File</a> 
                                <label>No file chousen.</label>
                            </div>
                            </div>
                            <p class="visible">Your email address will not be published. Required fields are marked <span>*</span></p>
                        </div>
                        <div>
                            <label class="lbl lbl-form"><i class="icon-label-compose"></i>Your comment*</label> 
                            <textarea class="textarea" name="text" rows="10" cols="45" placeholder="Nullam nunc quam, aliquet at diam ac, placerat condimentum velit. Praesent sodales vel lacus eget suscipit. Donec scelerisque, mauris porttitor vulputate ornare, ipsum risus tempus metus."></textarea>                
                            <div>
                            <div>
                                <input type="text" placeholder="Enter the code">
                                <img src="images/captcha.png" alt="">
                            </div>
                                <p class="hidden-tablet">Your email address will not be published. Required fields are marked <span>*</span></p>
                            <button><span class="btn btn-submit">submit</span></button>
                            </div>
                            <p class="hidden-desktop">Your email address will not be published. Required fields are marked <span>*</span></p>
                        </div>
                    </form>
                </div>
                <aside>
                    <h3 class="h3">contact details</h3>
                    <ul>
                        <li>
                            <div class="lbl lbl-contact"><i class="icon-contact-phone"></i></div>
                            <div>
                                <span>0203 280 3703</span>
                                <span>0203 281 3704</span>
                            </div>
                        </li>
                        <li>
                            <div class="lbl lbl-contact"><i class="icon-contact-mobile"></i></div>
                            <div>
                                <span>445-115-747-38</span>
                                <span>445-170-029-32</span>
                            </div>
                        </li>
                        <li>
                            <div class="lbl lbl-contact"><i class="icon-contact-mail"></i></div>
                            <div>
                                <a href="mailto:Venedor@gmail.com">Venedor@gmail.com</a>
                                <a href="mailto:Venedor@aol.com">Venedor@aol.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="lbl lbl-contact"><i class="icon-contact-skype"></i></div>
                            <div>
                                <a href="#">Venedor_store</a>
                                <a href="#">Venedor_support</a>
                            </div>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
        <?= require_tpl('common/footer') ?>
    </body>
</html>
