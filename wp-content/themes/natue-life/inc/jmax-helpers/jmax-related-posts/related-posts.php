<script type="text/javascript">
var $j = jQuery.noConflict();
    $j(function() {
        $j('#<?php echo 'carousel-block-'.$block_id ;?>').flexslider({
                        animation: "slide",
                        animationLoop: true,
                        itemWidth: <?php if($related_full=='full') : echo '257'; else: echo '225'; endif; ?>,
                         itemMargin: <?php if($related_full=='full') : echo '24'; else: echo '25'; endif; ?>,
                         directionNav: false,
                });
        $j('.block-style-carousel-prev-<?php echo $block_id ;?>').on('click', function(){
                    $j('#<?php echo 'carousel-block-'.$block_id ;?>').flexslider('prev')
                    return false;
                });
                $j('.block-style-carousel-next-<?php echo $block_id ;?>').on('click', function(){
                    $j('#<?php echo 'carousel-block-'.$block_id ;?>').flexslider('next')
                    return false;
                });
    });


</script>
<div class="block-style-carousel <?php  if($related_full=='full') : echo 'full'; endif; ?> j-block" id="<?php echo 'carousel-block-'.$block_id ;?>">
    <div class="j-block-title ">
        <span><?php echo $block_title; ?></span>
        <div class="j-clear"></div>
     </div>
     <div class="block-style-carousel-controls ">
        <a class="block-style-carousel-next-<?php echo $block_id ;?>" href="#"><span class="fa fa-chevron-right"></span></a>
        <a class="block-style-carousel-prev-<?php echo $block_id ;?>" href="#"><span class="fa fa-chevron-left"></span></a>
     </div>
     <ul class="slides">
     <?php if($posts_query -> have_posts()) : while($posts_query->have_posts()) : $posts_query -> the_post(); ?>
     <li class="block-item">
            <div class="block-style-image j-block-image">

                <a  href="<?php the_permalink(); ?>" class="cool-hover"><?php jmax_post_format_icon(); ?></a>
             <a href="<?php the_permalink(); ?>">
             <?php

             if($related_full=='full') : $params = array( 'width' => 257, 'height' => 150, 'crop' => true ); else: $params = array( 'width' => 225, 'height' => 150, 'crop' => true ); endif;
            echo "<img class='lazy' src='" . bfi_thumb(  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ), $params ) . "'/>";?>
            </a>
            </div>
            <div class="block-style-info">
            <?php jmax_meta_info('date'); ?>
                <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                <?php jmax_post_rating(); ?>
                <?php jmaxwp_excerpt('jmaxwp_tiny'); ?>
                <a class="j-more-info " href="<?php the_permalink(); ?>">
                    <?php _e('MORE +','jmax'); ?>
                </a>
            </div>
     </li>
     <?php endwhile; endif; ?>
     </ul>
</div><!--BLOCK CAROUSEL-->
