<?php
/**
 * The default template for displaying content.
 */
?>	
<div id="post-<?php the_ID(); ?>" <?php post_class('grid-100 tablet-grid-100 mobile-grid-100 about-box grid-parent blog-container'); ?> >
	<div class="grid-100 tablet-grid-100 mobile-grid-100 about-box grid-parent" >
		<div class="grid-45  tablet-grid-100 mobile-grid-100 about-box grid-parent" >
			<h1 class="blog-title"><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?> "><?php the_title();?></a></h1>
		</div>
	</div>						
	<div class="grid-100 tablet-grid-100 mobile-grid-100 about-box grid-parent" >
		<div class="grid-45  tablet-grid-100 mobile-grid-100 about-box grid-parent" >
			<p class="blog-author"><span class="blog-by">By</span><?php the_author(); ?></p>
			<p class="blog-date"><?php echo get_the_date();?></p>
			<div class="img-container">
				<?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
			</div>
		</div>
		<div class="grid-50  tablet-grid-100 mobile-grid-100 about-box grid-parent excerpt-area" >
			<?php the_excerpt();?>
			<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="readmore">Read More</a>
		</div>
	</div>
</div>