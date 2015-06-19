<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register account</title>
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
                <li>Register Account</li>
            </ul> 
        </div>
        <div class="wrap-base column account">
            <h1 class="h1">Register Account</h1>
            <p>If you already have an account with us, please login at the <a href="#">login page</a>.</p>
            <div class="register-account">
                <div class="register-account-half">
                    <h3 class="h3">your personal details</h3>
                    <form action="#" method="post"> 
                        <div>
                            <label class="lbl lbl-form"><i class="icon-label-username"></i>First Name*</label> 
                            <input type="text" placeholder="Marek">
                        </div>
                        <div>
                            <label class="lbl lbl-form"><i class="icon-label-username"></i>Last Name*</label> 
                            <input type="text" placeholder="Mnishek">
                        </div>
                        <div>
                            <label class="lbl lbl-form"><i class="icon-label-mail"></i>Email*</label> 
                            <input type="text" placeholder="marek.mnishek@gmail.com">
                        </div>
                        <div>
                            <label class="lbl lbl-form"><i class="icon-label-phone"></i>Telephone*</label> 
                            <input type="text" placeholder="+(744) 584 784 25">
                        </div>
                        <div>
                            <label class="lbl lbl-form"><i class="icon-label-fax"></i>Fax</label> 
                            <input type="text" placeholder="+(744) 478 635 98">
                        </div>
                    </form>
                    <div class="visible">
                        <h3 class="h3">your password</h3>
                        <form action="#" method="post"> 
                            <div>
                                <label class="lbl lbl-form"><i class="icon-label-password"></i>Password*</label> 
                                <input type="password" placeholder="**********">
                            </div>
                            <div>
                                <label class="lbl lbl-form"><i class="icon-label-password"></i>Password*</label> 
                                <input type="password" placeholder="**********">
                            </div>
                        </form>
                        <h3 class="h3">newsletter</h3>
                        <form action="#" method="post"> 
                            <input type="checkbox" name="check-plus" class="subscribe" id="l1" checked>
                            <label for="l1"><span>+</span>I wish to subscribe to the Venedor newsletter</label>
                            <input type="checkbox" name="check-plus" id="l2">
                            <label for="l2"><span>+</span>I have reed and agree to the <a href="#">Privacy Policy</a></label>
                            <a href="#" class="btn btn-account">create my account</a>
                        </form>
                    </div>
                </div>
                <div class="register-account-half">
                    <h3 class="h3">your address</h3>
                    <form action="#" method="post"> 
                        <div>
                            <label class="lbl lbl-form"><i class="icon-label-company"></i>Company*</label> 
                            <input type="text" placeholder="PromoKit">
                        </div>
                        <div>
                            <label class="lbl lbl-form"><i class="icon-label-address"></i>Address 1*</label> 
                            <input type="text" placeholder="Oxford street, 156/14">
                        </div>
                        <div>
                            <label class="lbl lbl-form"><i class="icon-label-address"></i>Address 2*</label> 
                            <input type="text" placeholder="Giles High Street, 147/23">
                        </div>
                        <div>
                            <label class="lbl lbl-form"><i class="icon-label-city"></i>City*</label> 
                            <input type="text" placeholder="London">
                        </div>
                        <div>
                            <label class="lbl lbl-form"><i class="icon-label-post"></i>Post Code</label> 
                            <input type="text" placeholder="125795">
                        </div>
                        <div>
                            <label class="lbl lbl-form"><i class="icon-label-country"></i>Country*</label> 
                            <span class="select">
                                <select>
                                    <option selected>Great Britain</option>
                                    <option>Germany</option>
                                    <option>Spain</option>
                                    <option>Italy</option>
                                    <option>France</option>           
                                </select>
                            </span>
                        </div>
                        <div>
                            <label class="lbl lbl-form"><i class="icon-label-region"></i>Region / State*</label> 
                            <span class="select">
                                <select>
                                    <option selected>Kent</option>
                                    <option>York</option>
                                    <option>Texas</option>
                                    <option>Main</option>
                                    <option>Alaska</option>           
                                </select>
                            </span>
                        </div>
                    </form>
                    <div class="hidden">
                        <h3 class="h3">your password</h3>
                        <form action="#" method="post"> 
                            <div>
                                <label class="lbl lbl-form"><i class="icon-label-password"></i>Password*</label> 
                                <input type="password" placeholder="**********">
                            </div>
                            <div>
                                <label class="lbl lbl-form"><i class="icon-label-password"></i>Password*</label> 
                                <input type="password" placeholder="**********">
                            </div>
                        </form>
                        <h3 class="h3">newsletter</h3>
                        <form action="#" method="post"> 
                            <input type="checkbox" name="check-plus" class="subscribe" id="l3" checked>
                            <label for="l3"><span>+</span>I wish to subscribe to the Venedor newsletter</label>
                            <input type="checkbox" name="check-plus" id="l4">
                            <label for="l4"><span>+</span><strong>I have reed and agree to the <a href="#">Privacy Policy</a></strong></label>
                            <a href="#" class="btn btn-account">create my account</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?= require_tpl('common/footer') ?>
</body>
</html>
