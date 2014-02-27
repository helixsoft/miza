<?php
/*
Template Name: Lab
*/
get_header('lab'); ?>
<div class="nav-waypoint">
    <section id="lab-section" class="lab-section content-section lab-border">
        <div class="grid-container">
			<div class="timer">
</div>
			<div class="grid-100 tablet-grid-100 mobile-grid-100 about-box grid-parent" >
				<h1 class="lab-big-title">Our Trophies</h1>
			</div>
			<div class="grid-100 tablet-grid-100 mobile-grid-100 about-box grid-parent" >
				<ul id="portfolio-filter" class="portfolio-filter opacityRun">
					<li class="filter active" data-filter="all">All</li>
					<li class="filter" data-filter="web">Web</li>
					<li class="filter" data-filter="mobile">Mobile</li>
					<li class="filter" data-filter="graphic">Graphic</li>
					<li class="filter" data-filter="branding">Branding</li>
				</ul>
			</div>
			<div class="grid-100 tablet-grid-100 mobile-grid-100 about-box grid-parent" >
				<div id="homepage-projects-list">
					<?php 
						$args = array( 'post_type' => 'labs', 'posts_per_page' => -1,'post_status'=>'publish' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<?php
						$category = get_the_category(); 
						$catname = $category[0]->slug;
					?>
						<a class="mix <?php echo $catname;?> homepage-projects-list-container" href="<?php echo get_permalink($post->ID)?>">
							<img class="homepage-projects-list-container-image-bw" src="<?php the_field('grayscale_image'); ?>">
							<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
							<img class="homepage-projects-list-container-image-color" src="<?php echo $url;?>">
							<div class="homepage-projects-list-container-text">
								<div class="orange-up"></div>
								<h4 class="homepage-projects-list-container-text-title"><?php the_title();?></h4>
								<div class="homepage-projects-list-container-text-tag"><?php echo $catname;?></div>
							</div>
						</a>
					<?php 
						endwhile;
					?>
					
					<a class="gap"></a>
					<a class="gap"></a>
				</div>
			</div>
		</div>
		<script>
		$(document).ready(function() {
			$('#homepage-projects-list').mixitup();
		});
		</script>
		<div class="lab_down_arrow"></div>
		<div class='lab_hire_area'>
			<div class="grid-container">
				<div class="grid-100 tablet-grid-100 mobile-grid-100 about-box grid-parent lab-grid-hire"><div class="orange-up"></div></div>
				<div class="grid-100 tablet-grid-100 mobile-grid-100 about-box grid-parent" >
					<div class="grid-55 tablet-grid-100 mobile-grid-100 about-box grid-parent" >
						<h1 class="lab-hire-title">Ready to<br/>Get Started ?</h1>
					</div>
					<div class="grid-45 tablet-grid-100 mobile-grid-100 about-box grid-parent lab-grid-hire" >
						
						<a href="#" class="rev-button">Hire Us</a>
					</div>
				</div>
			</div>
		</div>
	</section>
				
</div>
<?php get_footer();?>