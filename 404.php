<?php
/**
 * he template for displaying 404 pages (Not Found)
 *
 */

get_header('blog-single'); ?>
<style>
	<?php $url = IMAGES.'/blog_pic.jpg'; ?>
</style>
<section class="parallax-section parallax-background ha-waypoint labpage" id="parallax-slider" data-animate-up="ha-header-hide" data-animate-down="ha-header-small">
		 <div class="cover-image">
                <img src="<?php echo $url?>">
	            <div class="grid-container absolute">  
	                <div class="grid-100 tablet-grid-100 mobile-grid-100 ha-waypoint grid-parent" >
	                    <div class="hero-inner" >
	                        <div class="hero-blog-single-title-holder" ><h1 class="hero-blog-single-title"><a href="<?php echo site_url();?>">Home</a></h1></div>
	                    </div>
	                </div>
					<div class="orange-up"></div>				
	            </div>
            </div>
        </section>
        <div class="clear"></div>
        <div id="main-content" class="wrap">
		<div class="nav-waypoint">
                <section id="blog-section" class="blog-section content-section blog-border">
                    <div class="grid-container">
						<div class="grid-100 tablet-grid-100 mobile-grid-100 about-box grid-parent blog-single-container" >
							<div class="grid-100 tablet-grid-100 mobile-grid-100 about-box grid-parent yellow-border-bottom" >
								<div class="grid-45  tablet-grid-100 mobile-grid-100 about-box grid-parent" >
									<h1 class="blog-title">Not Found</h1>
								</div>
							</div>
							<div class="grid-100 tablet-grid-100 mobile-grid-100 about-box grid-parent" >
								<div class="grid-100  tablet-grid-100 mobile-grid-100 about-box grid-parent blog-content" >
									<?php _e( 'You must be lost. Let us show you the way back.', 'miza' ); ?>
								</div>
							</div>
						</div>
					</div>
				</section>
		</div>
		<script type='text/javascript'>
                    /* <![CDATA[ */
                    var fangohr_dynload = {"postType":"post","startPage":"1","maxPages":"<?php echo $wp_query->max_num_pages;;?>","nextLink":"<?php echo get_vogaye_next_link(get_next_posts_link( ''));?>","startPostPage":"1","nextPostPageLink":"<?php echo $first_post?>"};
                    /* ]]> */
                    </script>
<?php get_footer();?>