<?php $showCategoryIcon = isset($showCategoryIcon) ?: false; ?>
<div class="j-block-container block-style-2">
	<?php if ($posts_query->have_posts()): ?>
		<?php while ($posts_query->have_posts()): ?>
			<?php $posts_query->the_post(); ?>
			<div class="block-style-2-featured natue-post<?php if (!$showCategoryIcon) : ?> small-box<?php endif; ?>">
				<?php if(has_post_thumbnail(get_the_ID())) : ?>
	 		    <div class="block-style-image j-block-image">
	            <a href="<?php echo get_permalink( $post->ID ); ?>">
	                <?php
                        $params = [ 'width' => 360, 'height' => 240, 'crop' => true ];
	                    echo "<img class='lazy' src='" .  bfi_thumb( wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ), $params) . "'/>";
	                ?>
	            </a>

                <?php if ($showCategoryIcon && $category = get_main_category( get_the_ID() )): ?>
                    <a href="<?php echo get_category_link( $category->term_id );  ?>" class="category-icon">
                        <img src="<?php bloginfo('template_url'); ?>/images/category-icon/icon-<?php echo $category->slug; ?>.svg"/>
                    </a>
                    <span class="category-name"><?php echo $category->name; ?></span>
                <?php endif; ?>

	        </div>
	   		<?php endif; ?>

		    <div class="j-block-info" >
		    	<span class="title"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></span>
		    	<br />
                <div class="post-excerpt">
                    <?php jmaxwp_excerpt('jmaxwp_small'); ?>
                    <br/>
                </div>
	        <a class="read-more" href="<?php echo get_permalink($post->ID); ?>">Saiba mais</a>
		    </div>
			</div>
		<?php endwhile; ?>
	<?php else: ?>
		<!-- article -->
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'jmax' ); ?></h2>
		</article>
		<!-- /article -->
	<?php endif;  ?>
	<div class="j-clear"></div>
</div>