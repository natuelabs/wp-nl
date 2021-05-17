<?php if(ot_get_option('enable_related_posts','on')=='on') : ?>
<div class="related_posts_container">
<?php 
    global $post;
	$related_style=ot_get_option('related_posts_style', 4);
	$showposts=ot_get_option('related_posts_showposts', 6);
    $block_title=ot_get_option('related_posts_block_title',__('Related Posts', 'jmax'));
	$posts_query = new WP_Query(
        array(
         'category__in' => wp_get_post_categories($post->ID, array( 'fields' => 'ids' )),
         'tag__and' => wp_get_post_tags($post->ID, array( 'fields' => 'ids' )),
         'showposts' => $showposts,
         'orderby' => 'rand',
         'order' => 'desc',
         'post__not_in' => array(get_the_ID()),
        )
    );
    $block_id='related-posts';
    $count=$posts_query->post_count;
    if( $count > 3): 
        include('related-posts.php');

    else:
        $posts_query = new WP_Query(
            array(
             'category__in' => wp_get_post_categories($post->ID, array( 'fields' => 'ids' )),
             
             'showposts' => $showposts,
             'orderby' => 'rand',
             'order' => 'desc',
             'post__not_in' => array($post->ID),
            )
        );
        include('related-posts.php');
       
    endif;
    wp_reset_query();
?>
</div>
<?php endif; ?>