<div class="j-posts-widgets">
<?php if($posts_query -> have_posts()) : while($posts_query->have_posts()) : $posts_query -> the_post(); ?>
    <div class="widget-item">
                  <div class="widget-block-image j-block-image">
                      <a  href="<?php the_permalink(); ?>" class="cool-hover"><?php jmax_post_format_icon('small'); ?></a>
                    <a href="<?php the_permalink(); ?>">
                     <?php $params = array( 'width' => 100, 'height' => 75, 'crop' => true );
                      echo "<img class='lazy' src='" . bfi_thumb(  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ), $params ) . "'/>";?>
                    </a>
                  </div>
                  <div class="widget-block-info">
                     <?php jmax_meta_info('date'); ?>
                     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                     <?php jmax_post_rating(); ?>
                  </div>
                  <div class="j-clear"></div>
               </div>
<?php endwhile; endif; wp_reset_query();?>
</div>