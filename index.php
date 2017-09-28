<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>OPG</title>
        <meta name="description" content="Made in Ontario">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
        <link rel="stylesheet" href="css/main.css"> 
        <link rel="stylesheet" href="css/mobile.css"> 
        <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Nav start-->
        <div class="header">

        	<nav class="nav">

                <a class="logo" href="/"><img src="assets/media/img/logo.png"></a>

        		<ul class="nav-holder">

        			<li class="nav-el environment"><a href="#intro1">Environment</a></li>

        			<li class="nav-el economy"><a href="#intro2">Economy</a></li>

        			<li class="nav-el communities"><a href="#intro3">Communities</a></li>

        			<li class="nav-el innovation"><a href="#intro4">Innovation</a></li>

        		</ul>

        	</nav>

        	<a class="sound-toggle" href="#">Best experienced with sound <i class="fa fa-volume-up" aria-hidden="true"></i></a>

        </div>

        <div class="main">

        	<div class="video-overlay">
                <!--[if lte IE 8]><img src="assets/media/power.jpg"><![endif]-->
                <div class="hero-text"> 
                    <h1>Made in Ontario</h1>
                    <h4>At Ontario Power Generation, the power we generate doesn't just make electricity for Ontarians.</h4>
                </div>
                <div id="more">
                    <a class="scroll-link" href="#scrollPoint">
                        <p>SCROLL</p>
                        <svg height="70" width="70">
                            <polygon points="25,15 35,40 45,15" stroke="grey" stroke-width="3" fill="grey"/>
                        </svg>
                    </a>
                </div>
    			<video class="top-video video" id="video" autoplay loop muted playsinline>
        			<!-- <source type="video/webm" src="assets/media/trees.webm"></source> -->
        			<source type="video/mp4" src="assets/media/video/trees.mp4"></source>
    			</video>
                <span id="scrollPoint" style="position:relative; top:-50px;"></span>
			</div>

            <div class="rows" id="scroll-trigger">

                <a href="#intro1"><div class="slide-down" id="row1">
                    <h2>IT MAKES THE ENVIRONMENT GREENER.</h2>
                </div></a>

                <a href="#intro2"><div class="slide-down" id="row2">
                    <h2>IT MAKES ECONOMIC INVESTMENTS.</h2>
                </div></a>

                <a href="#intro3"><div class="slide-down" id="row3">
                    <h2>IT MAKES COMMUNITIES MORE LIVABLE.</h2>
                </div></a>

                <a href="#intro4"><div class="slide-down" id="row4">
                    <h2>IT MAKES HOPE FOR FUTURE GENERATIONS.</h2>
                </div></a>

            </div>

            <div class="content intro" id="intro1">

                <img class="ontario-img" src="assets/media/img/ontario_silhouette.gif">

                <div class="intro-environment" id="scroll-trigger">
                   
                    <h1>Nature: Made in Ontario</h1>

                    <p>Ontario Power Generation is committed to keeping Ontario’s environment as clean as possible. That’s why in 2014 we closed the last of our last coal plants. Now our electricity is more than 99% free of smog and carbon emissions, which helps battle climate change and keeps the air fresh for all Ontarians.</p>

                </div>

            </div>

            <video class="breaths-video video" id="video" autoplay loop muted playsinline>
                <!-- <source type="video/webm" src="assets/media/waves.webm"></source> -->
                <source type="video/mp4" src="assets/media/video/river.mp4"></source>
            </video>

            <div class="content slides" id="slides1">
                <div class="slides1-wrap">

                    <div class="caption-overlay">
                        <p>
                            In addition to clean air emissions, Ontario Power Generation is making our environment greener though projects such as biodiversity protection and tree planting.
                            <br><br>
                            <span class="lightbox-link" id="salmon">
                                <a href="./assets/media/img/opg-slide1.jpg" class="lightbox_trigger">
                                    Salmon Program <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </a>
                            </span>
                            <br>
                            <span class="lightbox-link" id="bee">
                                <a href="./assets/media/img/opg-slide1.jpg" class="lightbox_trigger">
                                    Let it Bee <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </a>
                            </span>
                            <br>
                            <span class="lightbox-link" id="rangers">
                                <a href="./assets/media/img/opg-slide1.jpg" class="lightbox_trigger">
                                    Earth Rangers <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </a>
                            </span>
                        </p>

                        <div id="lightbox">
                            <p>Click to Close</p>
                            <div id="content">
                                <img src="#" />
                            </div>
                        </div>

                    </div>

                    <div class="container">

                        <div style="display: inline-block;">
                            <img src="./assets/media/img/opg-slide1.jpg" class="slider-image">
                        </div>
                        <div>
                            <img src="./assets/media/img/opg-slide2.jpg" class="slider-image">
                        </div>
                        <div>
                            <img src="./assets/media/img/opg-slide3.jpg" class="slider-image">
                        </div>

                    </div>

                    <button class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    <button class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>

                </div>
            </div>

            <div class="content intro" id="intro2">

                <img class="ontario-img" src="assets/media/img/ontario_silhouette.gif">

                <div class="intro-environment">
                   
                    <h1>Jobs: Made in Ontario</h1>

                    <p>Ontario Power Generation proudly employs over 9,300 people from from a wide range of backgrounds with a wide range of skills. You can meet a few of them in our Worker Profile Series below.</p>

                </div>

            </div>

            <div class="content slides" id="slides2">
                <div class="slides1-wrap">

                     <div class="caption-overlay">
                        <p>In addition to clean air emissions, Ontario Power Generation is making our environment greener though projects such as biodiversity protection and tree planting.</p>
                    </div>

                    <div class="container">

                        <div style="display: inline-block;">
                            <video class="breaths-video video slider-image" id="video" autoplay loop muted playsinline>
                                <!-- <source type="video/webm" src="assets/media/waves.webm"></source> -->
                                <source type="video/mp4" src="assets/media/video/waves.mp4"></source>
                            </video>
                            <!-- <img src="./assets/media/opg-slide1.jpg" class="slider-image"> -->
                        </div>
                        <div>
                            <video class="breaths-video video slider-image" id="video" autoplay loop muted playsinline>
                                <!-- <source type="video/webm" src="assets/media/waves.webm"></source> -->
                                <source type="video/mp4" src="assets/media/video/waterfall.mp4"></source>
                            </video>
                            <!-- <img src="./assets/media/opg-slide2.jpg" class="slider-image"> -->
                        </div>
                        <div>
                            <video class="breaths-video video slider-image" id="video" autoplay loop muted playsinline>
                                <!-- <source type="video/webm" src="assets/media/waves.webm"></source> -->
                                <source type="video/mp4" src="assets/media/video/trees.mp4"></source>
                            </video>
                            <!-- <img src="./assets/media/opg-slide3.jpg" class="slider-image"> -->
                        </div>
                        <div>
                            <video class="breaths-video video slider-image" id="video" autoplay loop muted playsinline>
                                <!-- <source type="video/webm" src="assets/media/waves.webm"></source> -->
                                <source type="video/mp4" src="assets/media/video/river.mp4"></source>
                            </video>
                            <!-- <img src="./assets/media/opg-slide4.jpeg" class="slider-image"> -->
                        </div>

                    </div>

                    <button class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    <button class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>

                </div>
            </div>

            <div class="content intro" id="intro3">

                <img class="ontario-img" src="assets/media/img/ontario_silhouette.gif">

                <div class="intro-environment">
                   
                    <h1>Communities: Made in Ontario</h1>

                    <p>In 2014, Ontario Power Generation closed its last coal plant and with it, the smokestacks that emit dirty smog and carbon dioxide. Now the emissions from all 71 of our plants are 99% smog and carbon-free, which helps to keep the air fresh for all Ontarians.</p>

                </div>

            </div>

            <div class="content slides" id="slides3">
                <div class="slides1-wrap">

                    <div class="caption-overlay">
                        <p>In addition to clean air emissions, Ontario Power Generation is making our environment greener though projects such as biodiversity protection and tree planting.</p>
                    </div>

                    <div class="container">

                        <div style="display: inline-block;">
                            <img src="./assets/media/img/opg-slide1.jpg" class="slider-image">
                        </div>
                        <div>
                            <img src="./assets/media/img/opg-slide2.jpg" class="slider-image">
                        </div>
                        <div>
                            <img src="./assets/media/img/opg-slide3.jpg" class="slider-image">
                        </div>
                        <div>
                            <img src="./assets/media/img/opg-slide4.jpeg" class="slider-image">
                        </div>

                    </div>

                    <button class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    <button class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>

                </div>
            </div>

            <video class="content doc-video video" id="video" autoplay loop muted playsinline>
                <!-- <source type="video/webm" src="assets/media/river.webm"></source> -->
                <source type="video/mp4" src="assets/media/video/river.mp4"></source>
            </video>

            <div class="content intro" id="intro4">

                <img class="ontario-img" src="assets/media/img/ontario_silhouette.gif">

                <div class="intro-environment">
                   
                    <h1>Innovation: Made in Ontario</h1>

                    <p>In 2014, Ontario Power Generation closed its last coal plant and with it, the smokestacks that emit dirty smog and carbon dioxide. Now the emissions from all 71 of our plants are 99% smog and carbon-free, which helps to keep the air fresh for all Ontarians.</p>

                </div>

            </div>

            <div class="content slides" id="slides4">
                <div class="slides1-wrap">

                    <div class="caption-overlay">
                        <p>In addition to clean air emissions, Ontario Power Generation is making our environment greener though projects such as biodiversity protection and tree planting.</p>
                    </div>

                    <div class="container">

                        <div style="display: inline-block;">
                            <img src="./assets/media/img/opg-slide1.jpg" class="slider-image">
                        </div>
                        <div>
                            <img src="./assets/media/img/opg-slide2.jpg" class="slider-image">
                        </div>
                        <div>
                            <img src="./assets/media/img/opg-slide3.jpg" class="slider-image">
                        </div>
                        <div>
                            <img src="./assets/media/img/opg-slide4.jpeg" class="slider-image">
                        </div>

                    </div>

                    <button class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    <button class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>

                </div>
            </div>

            <video class="content waterfall-video video" id="video" autoplay loop muted playsinline>
                <!-- <source type="video/webm" src="assets/media/waterfall.webm"></source> -->
                <source type="video/mp4" src="assets/media/video/waterfall.mp4"></source>
            </video>

        </div>

        <div class="content footer">

            <div class="footer-text">
                <h1>Made In Ontario</h1>

                <h3>From environmental responsibility, to new job opportunities, community involvement, and the future of energy generation, Ontario Power Generation is committed to ensuring the electricity we produce is done in a way that all Ontarians can be proud of. After all, we’re Ontarians too.<br><br>To learn more about our projects or to get involved with our community initiatives, visit opg.com.</h3>

                
                <div class="cta-button">
                    <a href="#">
                        <h2>CTA</h2>
                    </a>
                </div>
                
            </div>

            

        </div>   

        <div class="footer-links">
            <div class="link email-link"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></div>
            <div class="link youtube-link"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></div>
            <div class="link twitter-link"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
        </div>


        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.4.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/app.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>