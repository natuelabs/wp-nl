<?php
	$category_query = new WP_Query(
	  	array(
	  	 'category__in' => $cat,
	  	 'showposts' => $posts_to_show,
	  	)
	 );
	$block_id='category-slider';
?>
<script type="text/javascript">
var $j = jQuery.noConflict();
	$j(function() {
		$j("#<?php echo 'slider-block-'.$block_id ;?>").flexslider({
		    		 	animation: "slide",
					    animationLoop: false,

					     directionNav: false,
		    	});
		$j('.block-style-slider-prev-<?php echo $block_id ;?>').on('click', function(){
				    $j('#<?php echo 'slider-block-'.$block_id ;?>').flexslider('prev')
				    return false;
				});
				$j('.block-style-slider-next-<?php echo $block_id ;?>').on('click', function(){
				    $j('#<?php echo 'slider-block-'.$block_id ;?>').flexslider('next')
				    return false;
				});
	});

</script>
<div class="block-style-slider-container">

<div class="block-style-slider j-block" id="<?php echo 'slider-block-'.$block_id ;?>">
		      	 <div class="block-style-slider-controls <?php echo $block_category_class; ?>">
		         	<a class="block-style-slider-next-<?php echo $block_id ;?>" href="#"><span class="fa fa-chevron-right"></span></a>
		      		<a class="block-style-slider-prev-<?php echo $block_id ;?>" href="#"><span class="fa fa-chevron-left"></span></a>
		         </div>

		         <ul class="slides">
		         <?php if($category_query -> have_posts()) : while($category_query->have_posts()) : $category_query -> the_post(); ?>
		         <li class="block-slider-item">
		         		<div class="block-style-image j-block-image">
		   		    	 <a href="<?php the_permalink(); ?>">

			   		    	<div class="block-style-image-reponsive-mobile">
								<?php $params = array( 'width' => 350, 'height' => 500, 'crop' => true );
								echo "<img class='lazy' src='" . bfi_thumb(  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ), $params ) . "'/>";?>
							</div>

							<div class="block-style-image-reponsive-desktop">
				   		    	<?php $params = array( 'width' => 725, 'height' => 450, 'crop' => true );
								echo "<img class='lazy' src='" . bfi_thumb(  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ), $params ) . "'/>";?>
							</div>
							
						</a>
		           		</div>
		           		<div class="block-slider-back"></div>
		           		<div class="block-style-info">
		           		<?php jmax_meta_info('date'); ?>
		           			<span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
		           			<?php jmax_post_rating(); ?>
		           			<?php jmaxwp_excerpt('jmaxwp_tiny'); ?>
		           			<a class="j-more-info <?php echo $block_category_class; ?>" href="<?php the_permalink(); ?>">
                        		<?php _e('MORE +','jmax'); ?>
                        	</a>
			    		</div>
		         </li>
		         <?php endwhile; endif; wp_reset_query(); ?>
		         </ul>
		      </div><!--BLOCK CAROUSEL-->
</div>
