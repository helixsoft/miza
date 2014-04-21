<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">       
        <?php wp_head();?>
    </head>
    <body id="mainsite">
        <a id="top"></a>
        <header id="header-section" class="ha-header ha-header-hide">
            <div class="grid-container">
                <div class="ha-header-perspective">
                    <div class="ha-header-front">
                        <div class="grid-20 tablet-grid-20 hide-on-mobile grid-parent">
                            <h1 class="logo"><a href="<?php echo site_url()?>"><img src="<?php echo IMAGES?>/smalllogo.png" alt="logo" height="55" width="44"></a></h1>
                        </div>
                        <nav id="ut-navigation" class="grid-80 tablet-grid-80 hide-on-mobile">
                            <a id="sev-nav1" href="<?php echo site_url('#service')?>">Services</a>
                            <a href="<?php echo site_url('/lab/')?>">LAB</a>
                            <a href="<?php echo site_url('/blog/')?>">Blog</a>
                            <a id="hire1" href="<?php echo site_url('#address-section')?>">Hire Us</a>
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
        <section class="parallax-section parallax-background ha-waypoint labpage" id="parallax-slider" data-animate-up="ha-header-hide" data-animate-down="ha-header-small">
			<div class="slidewrap2" data-autorotate="5000">
				<ul class="labslider">
                    <?php 
                        $args = array( 
                            'post_type' => 'labs', 
                            'posts_per_page' => -1,
                            'post_status'=>'publish',
                            'meta_query' => array(
                                        array(
                                            'key' => 'slider',
                                            'value' => '1',
                                            'compare' => '=='
                                        ),
                                    ), 
                        );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
					<li class="labslide">	
						<img src="<?php echo get_field('cover_image')?>">
					</li>
                    <?php 
                        endwhile;
                    ?>
				</ul>
			</div>
			<div class="grid-container">
				<div class="white-up"></div>
			</div>
        </section>
		<script>
		jQuery(document).ready(function($) {
			$('.slidewrap2').carousel({
				slider: '.labslider',
				slide: '.labslide',
				addNav: false,
				addPagination: true,
				speed: 300 // ms.
			});
		});
		</script>
        <div class="clear"></div>
        <div id="main-content" class="wrap">
