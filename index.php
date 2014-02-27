<?php
/**
 * The main template file.
 */

get_header('blog');?>
<div class="nav-waypoint">
                <section id="blog-section" class="blog-section content-section blog-border">
                    <div class="grid-container">
						<?php $i=0;$first_post=""; if ( have_posts() ) : while ( have_posts() ) : the_post();?>
						<?php if($i==0){$first_post=get_permalink();$i++;} ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endwhile;endif; ?>
						<div class="more_posts_2 more-post-container"  style="float: left;"></div>
					</div>
					<div class="down_arrow"></div>
					<a id='view_more_posts' class='view_more_posts' href="#" onClick="_gaq.push(['_trackEvent', 'Homepage', 'Dynamic Load Posts', 'more posts 2']);"><?php _e('Load More','Miza')?></a>
					<script type='text/javascript'>
					/* <![CDATA[ */
					var fangohr_dynload = {"postType":"post","startPage":"1","maxPages":"<?php echo $wp_query->max_num_pages;;?>","nextLink":"<?php echo get_vogaye_next_link(get_next_posts_link( ''));?>","startPostPage":"1","nextPostPageLink":"<?php echo $first_post?>"};
					/* ]]> */
					</script>
				</section>
				
</div>

<?php get_footer();?>