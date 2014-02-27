<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header('blog-single'); ?>
<?php while ( have_posts() ) : the_post();?>
<style>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	.parallax-banner-2 { background:url(<?php echo $url;?>); background-position: center center; }
</style>
<section id="parallax-section-2" class="hero parallax-section parallax-background parallax-section-2" >
			<div class="parallax-overlay parallax-overlay-blog"></div>
            <div class="grid-container">  
                <div class="grid-100 tablet-grid-100 mobile-grid-100 ha-waypoint grid-parent" >
                    <div class="hero-inner" >
                        <div class="hero-blog-single-title-holder" ><h1 class="hero-blog-single-title"><a href="<?php echo site_url();?>">Blog</a></h1></div>
                    </div>
                </div>
				<div class="orange-up"></div>				
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
									<h1 class="blog-title"><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?> "><?php the_title();?></a></h1>
								</div>
								<div class="grid-10  tablet-grid-100 mobile-grid-100 about-box grid-parent blog-content-tag" >
									<p class="blog-author"><span class="blog-by">By</span><?php the_author(); ?></p>
									<p class="blog-date"><?php echo get_the_date();?></p>
								</div>
							</div>
							<div class="grid-100 tablet-grid-100 mobile-grid-100 about-box grid-parent" >
								<div class="grid-100  tablet-grid-100 mobile-grid-100 about-box grid-parent blog-content" >
									<?php the_content();?>
								</div>
							</div>
						</div>
					</div>
				</section>
		</div>
		<?php endwhile; ?>
		<script type='text/javascript'>
                    /* <![CDATA[ */
                    var fangohr_dynload = {"postType":"post","startPage":"1","maxPages":"<?php echo $wp_query->max_num_pages;;?>","nextLink":"<?php echo get_vogaye_next_link(get_next_posts_link( ''));?>","startPostPage":"1","nextPostPageLink":"<?php echo $first_post?>"};
                    /* ]]> */
                    </script>
<?php get_footer();?>