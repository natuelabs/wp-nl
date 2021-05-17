<?php
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version		1.0.0
 * 
 * Project Single Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = gutentag_get_global_options();

$cmsmasters_portfolio_title = get_post_meta(get_the_ID(), 'cmsmasters_project_title', true);

$cmsmasters_portfolio_category = get_the_terms(get_the_ID(), 'portfolio_category');

$cmsmasters_portfolio_tags = get_the_terms(get_the_ID(), 'portfolio_tag');


list($cmsmasters_layout) = gutentag_theme_page_layout_scheme();

if ($cmsmasters_layout == 'fullwidth') {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-masonry-thumb';
} else {
	$cmsmasters_image_thumb_size = 'cmsmasters-masonry-thumb';
}


$cmsmasters_portfolio_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_project_sharing_box', true);

?>
<!-- Start Post Single Article -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_portfolio'); ?>>
	<?php 
	if ($cmsmasters_portfolio_title == 'true') {
		gutentag_project_title_nolink(get_the_ID(), 'h2');
	}
	
	
	if (
		$cmsmasters_option['gutentag' . '_blog_post_date'] || 
		$cmsmasters_option['gutentag' . '_blog_post_cat'] 
	) {
		echo '<div class="cmsmasters_portfolio_cont_info entry-meta">';
			
			echo '<span class="cmsmasters_portfolio_category">';
				foreach( $cmsmasters_portfolio_category as $cmsmasters_portfolio_cat ){
					echo '<span>' . $cmsmasters_portfolio_cat->name . '</span>';
				}
			echo '</span>';

			gutentag_get_project_date('page');			
			
		echo '</div>';
	}


	$cmsmasters_portfolio_image_show = get_post_meta(get_the_ID(), 'cmsmasters_post_image_show', true);
	
	if ($cmsmasters_portfolio_image_show != 'true') {
		gutentag_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'cmsmasters_open_post_img', false, false, false, true, false);
	}
	
	
	if (get_the_content() != '') {
		echo '<div class="cmsmasters_portfolio_content entry-content">';
			
			the_content();
			
			
			wp_link_pages(array( 
				'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'gutentag') . ':</strong>', 
				'after' => '</div>', 
				'link_before' => '<span>', 
				'link_after' => '</span>' 
			));
			
		echo '</div>';
	}
	
	
	if (
		$cmsmasters_option['gutentag' . '_blog_post_tag']
	) {
		echo '<footer class="cmsmasters_portfolio_footer entry-meta">';
			
			gutentag_get_post_tags();

			
			foreach( $cmsmasters_portfolio_tags as $cmsmasters_portfolio_tag ){
				echo '<span class="cmsmasters_portfolio_tags">' . $cmsmasters_portfolio_tag->name . '</span>';
			}
			
		echo '</footer>';
	}
	?>
</article>
<!-- Finish Post Single Article -->
<?php 

if ($cmsmasters_portfolio_sharing_box == 'true') {
	gutentag_sharing_box(esc_html__('Like this post?', 'gutentag'), 'h2');
}


if (get_the_tags()) {
	$tgsarray = array();
	
	foreach (get_the_tags() as $tagone) {
		$tgsarray[] = $tagone->term_id;
	}
} else {
	$tgsarray = '';
}


if ($cmsmasters_option['gutentag' . '_blog_post_nav_box']) {
	$order_cat = (isset($cmsmasters_option['gutentag' . '_blog_post_nav_order_cat']) ? $cmsmasters_option['gutentag' . '_blog_post_nav_order_cat'] : false);
	
	gutentag_prev_next_posts($order_cat, 'category');
}



echo gutentag_get_pings(get_the_ID(), 'h2');


comments_template();

