<?php
/**
 * The file of the big slider.
 *
 * @package jmax
 */
//SLider Settings
$enable_slider=ot_get_option('enable_slider','on');
$carousel_title=ot_get_option('carousel_title',__('Latest Posts','jmax'));
$carousel_categories=ot_get_option('carousel_categories');
$carousel_number_posts=ot_get_option('carousel_number_posts','8');
$carousel_order_by=ot_get_option('carousel_order_by','date');
$carousel_order=ot_get_option('carousel_order','desc');
$carousel_slideshow=ot_get_option('carousel_slideshow', 'on');
if($carousel_slideshow=='on') : $carousel_slideshow='true'; else: $carousel_slideshow='false'; endif;
$carousel_speed=ot_get_option('carousel_speed','7000');
$carousel_easing=ot_get_option('carousel_easing');
$query = new WP_Query(array('category__in' => $carousel_categories,
'showposts' => $carousel_number_posts, 'orderby' => $carousel_order_by, 'order' => $carousel_order));
if($enable_slider=='on') :
?>
<script type="text/javascript">
  var $j = jQuery.noConflict();
      $j(function() {
        $j('.big-carousel').flexslider({
          directionNav: false,
          animation: 'slide',
          slideshow: <?php echo $carousel_slideshow; ?>,
          slideshowSpeed: <?php echo $carousel_speed; ?>,
          controlNav: false,
          animationLoop: true,
          itemWidth: 350,
          itemMargin: 25,
          <?php if($carousel_easing): ?>
           easing: '<?php echo $carousel_easing; ?>',
           useCSS: false
          <?php endif; ?>
        });
        $j('.big-carousel-prev').on('click', function(){
            $j('.big-carousel').flexslider('prev')
            return false;
        });
        $j('.big-carousel-next').on('click', function(){
            $j('.big-carousel').flexslider('next')
            return false;
        });
      });
</script>
<div class="big-carousel-container">
<div class="big-carousel">
  <div class="big-carousel-controls">
              <a class="big-carousel-next" href="#"><span class="fa fa-chevron-right"></span></a>
              <a class="big-carousel-prev" href="#"><span class="fa fa-chevron-left"></span></a>
   </div>
  <ul class="slides">
  <?php
    if($query->have_posts()) :
          while($query->have_posts()) :
             $query->the_post();  ?>
  	<li>
  	<div class="carousel-post-item">

        <div class="carousel-post-image">
                      <a class="j-category <?php echo get_current_slug() ?>-slug" href="#"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>

          <a href="#" class="zoom featured-post-image">
            <?php $params = array( 'width' => 350, 'height' => 500, 'crop' => true );
        echo "<img class='lazy' src='" . bfi_thumb(  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ), $params ) . "'/>";?>
          </a>
        </div>

		    <div class="carousel-post-info">
           <?php jmax_meta_info('date'); ?>
					   <h2> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_the_title(); ?></a></h2>
		    		<?php jmax_post_rating(); ?>
            <p><?php jmaxwp_excerpt('jmaxwp_tiny'); ?></p>
           <a class="j-more-info" href="<?php the_permalink(); ?>">
                          <?php _e('MAIS +','jmax'); ?>
                        </a>
		    	</div>
		 </div>
  	</li>
  	<?php
          endwhile;
         endif;
         wp_reset_query();
      ?>
  </ul>
 </div>
</div>
<!--BIG CAROUSEL-->
<?php endif; ?>
