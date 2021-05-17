<div class="j-block-container">
	<?php $count=1; if ($posts_query->have_posts()): while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
	<article>
	<div class="j-block">
				<?php if(has_post_thumbnail(get_the_ID())) : ?>
		   		    <div class="j-block-image j-image-border-block">
		   		    <a class="j-category <?php echo get_current_slug() ?>-slug" href="#"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>
		   		    <a  href="<?php the_permalink(); ?>" class="cool-hover"><?php jmax_post_format_icon(); ?></a>
		   		    	 <a href="<?php the_permalink(); ?>">
		   		    	 <?php $params = array( 'width' => 725, 'height' => 260, 'crop' => true );
						echo "<img class='lazy' src='" . bfi_thumb(  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ), $params ) . "'/>";?>
						</a>
		   		    </div>
		   		 <?php endif; ?>
		   		    <div class="j-block-info j-padding-block">
		   		    	<?php jmax_meta_info('date'); ?>
		   		    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		   		    	<?php jmax_post_rating(); ?>
                        <?php jmaxwp_excerpt('jmaxwp_large'); ?>
                        <a class="j-more-info" href="<?php the_permalink(); ?>">
                        	<?php _e('MORE...','jmax'); ?>
                        </a>
		   		    </div>
		   		    
	</div>
	</article>
	<?php $count++; endwhile; ?>
	<?php else: ?>

		<!-- article -->
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'jmax' ); ?></h2>
		</article>
		<!-- /article -->

	<?php endif;  ?>
	<div class="j-clear"></div>
</div>