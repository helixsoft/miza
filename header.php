<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">       
        <link rel="stylesheet" href="<?php echo THEMEROOT?>/css/reset.css" media="all">
        <link rel="stylesheet" href="<?php echo THEMEROOT?>/css/ut-fontface.css" media="all">
        <link rel="stylesheet" href="<?php echo THEMEROOT?>/css/ut-responsive-grid.css" media="all">
        <link rel="stylesheet" href="<?php echo THEMEROOT?>/css/fontello.css">
        <link rel="stylesheet" href="<?php echo THEMEROOT?>/css/animation.css">
        <!--[if IE 7]>
        <link rel="stylesheet" href="<?php echo THEMEROOT?>/css/fontello-ie7.css">
        <![endif]-->
        <link rel="stylesheet" href="<?php echo THEMEROOT?>/style.css" media="all">
        <!--[if lt IE 9]>
            <script src="<?php echo THEMEROOT?>/js/html5.js"></script>
            <![endif]-->

       <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="ie8-and-down.css" />
        <style>.hero .hero-holder {
            margin-left:-410px;
        }
        </style>
        <![endif]-->
        
        <!--[if IE]>
            <link rel="stylesheet" type="text/css" href="<?php echo THEMEROOT?>/css/ie.css" />
        <![endif]-->
        <script src="<?php echo THEMEROOT?>/js/jquery.min.js"></script>
        <script src="<?php echo THEMEROOT?>/js/SmoothScroll.js"></script>
        <script src="<?php echo THEMEROOT?>/js/modernizr.js"></script>
        <script src="<?php echo THEMEROOT?>/js/device.min.js"></script>
        <?php wp_head();?>
    </head>
    <body id="mainsite">
        <a id="top"></a>
         <video class='fullscreen fill' width="1920" height="1080" autoplay loop muted='muted'>
                <source src="<?php echo THEMEROOT?>/video/august_video_04.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
                <source src="<?php echo THEMEROOT?>/video/august_video_04.ogv" type="video/ogg">
                <source src="<?php echo THEMEROOT?>/video/august_video_04.webmhd.webm" type="video/webm">
            </video>
        <header id="header-section" class="ha-header ha-header-hide">
            <div class="grid-container">
                <div class="ha-header-perspective">
                    <div class="ha-header-front">
                        <div class="grid-20 tablet-grid-20 hide-on-mobile grid-parent">
                            <h1 class="logo"><a href="#top"><img src="<?php echo IMAGES?>/smalllogo.png" alt="logo"></a></h1>
                        </div>
                        <nav id="ut-navigation" class="grid-80 tablet-grid-80 hide-on-mobile">
                            <a id="sev-nav1" href="#service">Services</a>
                            <a href="<?php echo site_url('/lab/')?>">LAB</a>
                            <a href="#">Blog</a>
                            <a id="hire1" href="#address-section">Hire Us</a>
                            <a href="#" class="icon"></a>
                        </nav>
                    </div>
                </div>
            </div> 
        </header>
		<header id="header-section1" class="ha-header transparent">
			<div class="grid-container">
                <div class="ha-header-perspective">
                    <div class="ha-header-front">
                        <nav id="ut-navigation" class="grid-100 tablet-grid-80 hide-on-mobile">
                            <a href="#" class="icon1"></a>
                        </nav>
                    </div>
                </div>
            </div>
		</header>
        <div class="clear"></div>
        <section class="hero  parallax-section parallax-background" > 
            <div class="parallax-overlay parallax-overlay-1"></div>
            <div class="grid-container">  
                <div class="hero-holder grid-100 tablet-grid-100 mobile-grid-100 ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-small">
                    <div class="hero-inner" >
                        <div class="small-head small-header-small" >
                            <div class="main-logo" ><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo IMAGES?>/biglogo.png" alt="logo"></a></div>
                            <div class="nav">
                                <a id="sev-nav2" href="#service">Services</a>
                                <a href="<?php echo site_url('/lab/')?>">LAB</a>
                                <a href="#">Blog</a>
                                <a id="hire2" href="#address-section">Hire Us</a>
                            </div>
                        </div>
                        <div class="hero-title-holder" ><h1 class="hero-title">Every Brand Has a Story<br/>Let Us Tell You Ours</h1></div>
                        <span class="btn-holder"><a id="to-about-section" class="hero-btn"></a></span>
                    </div>
                </div>                                                  
            </div>
        </section>
        <div class="clear"></div>
        <div id="main-content" class="wrap">
