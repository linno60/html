<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portfolio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
        <link rel="stylesheet" href="/css/addons/data-flex.css">
        <link rel="stylesheet" href="/css/addons/data-tabs.css">
        <link rel="stylesheet" href="/css/addons/generic.css">  
        <link rel="stylesheet" href="/css/elements.css">  
        <link rel="stylesheet" href="/css/styles.css">  
        <script>
            var LAYOUT_WIDTH = 902;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header data-flex='vaxis'>
            <i class="icon-logo"></i>
            <h1>working<br> with design lab</h1>
            <p>we've been helping startups launch and grow their businesses. we help you to fill the gap between development, design and product management.</p>
            <i class="icon-mouse"></i>
        </header>
        <section class='about-wrap' data-flex='col -center center'>
            <div class='about' data-flex='col -center center'>
                <h2>about us</h2>
                <p>When you work with, you are part of a team fo committed collaborators. All aspects of our software development process are integrated, iterative and agile.</p>
                <p>Our apprach unifies design, development and product management to create exceptional products. We start each project by understanding your business goals, the user's needs and the product requirenments. Then we help translate them into effective and elegant solutions.</p>
            </div>
        </section>
        <section class='services-wrap' data-flex='col -center center'>
            <div class='services' data-flex='col -center center'>
                <h2>services</h2>
                <p>Before we sign a contract or write a line of code our team will spend the necessary time needed to understand your product vision. The outcome of theis scoping session is a proposal or hight-level statement  or work. Based on your requirements, we can provide a complete offering or just the pieces you need.</p>        
            </div>
        </section>
        <section class='direction-wrap' data-flex='vaxis'>
            <div class='direction' data-flex='vaxis'>
                <h2>what&nbsp;we&nbsp;do</h2>
                <article>
                    <i class='icon-pen'></i>
                    <h3>design</h3>
                    <p>Our design pracitce offers a full range of services including branding strategy, interaction and visual design and user experience testing. Throughout your project, our designers create and implement visual designs and workflows, solicit user feedback, and work with you to make sure what gets built is what is needed.</p>
                </article>
                <article>
                    <i class='icon-folder'></i>
                    <h3>development</h3>
                    <p>All engineers are fluent in the latest enterprise, mobile and web deveopment technologies. They collaborate with your team to write, test, and improve code on a daily basis, using proven practices such as test-driven development and pair programing.</p>
                </article>
                <article>
                    <i class='icon-note'></i>
                    <h3>product management</h3>
                    <p>Planning and development is iterative. Because we are constantly coding and testing, the products we build are always ready to go live. This iterative process allows for changes as business requirements evolve.</p>
                </article>
            </div>
        </section>
        <section class='works'>            
            <div data-flex="stripe">
                <figure>
                    <img src="/images/img3.png">
                    <a href='#'>topworkz</a>
                </figure>
                <figure>
                    <img src="/images/img4.png">
                    <a href='#'>joint</a>
                </figure>
                <figure>
                    <img src="/images/img5.png">
                    <a href='#'>market</a>
                </figure>
            </div>
            <div data-flex="stripe">
                <figure>
                    <img src="/images/img6.png">
                    <a href='#'>worktop</a>
                </figure>
                <figure>
                    <img src="/images/img7.png">
                    <a href='#'>lable</a>
                </figure>
                <figure>
                    <img src="/images/img8.png">
                    <a href='#'>kyiv</a>
                </figure>
            </div>
        </section>
        <section class='contacts-wrap' data-flex='col -center center'>
            <div class='contacts' data-flex='col -center center'>
                <h2>contact us</h2>
                <p>Planning and development is iterative. Because we are constantly coding and testing, the produsts we build are always ready to go live. This iterative process allows for changes as business requirements evolve.</p>
                <a href='#' class='btn btn-contact'>contact us</a>
            </div>
        </section>
        <footer data-flex='-center center'>
            <i class='icon-logo-footer'></i>
            <span>&copy; 2014. All Rights Reserved Ellipsis.com</span>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>