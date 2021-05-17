<?php
/**
 * @package jmax
 */
$cat_style=ot_get_option('search_layout','2');
$showCategoryIcon = true;
$search_sidebar=ot_get_option('search_sidebar','right');
get_header(); ?>
	<div class="content-container">

	<div id="primary" class="<?php echo $search_sidebar; ?> content-area j-content <?php if($cat_style==5) : echo "full"; endif; ?>">
	    
		<main id="main" class="site-main" role="main">
		<?php /* Start the Loop */ ?>
<div class="category-heading"><h1><?php echo $wp_query->found_posts, ' '; _e( 'Search Results for', 'jmax' ); echo ' ', get_search_query(); ?></h1>
<div class="j-clear"></div></div> 
				<?php

		$posts_query=new WP_Query( array ( 's' => $s, 'paged' => $paged) );
		include_once('loop.php');
		 ?>


			<?php get_template_part('pagination'); ?>



		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="j-sidebar <?php echo $search_sidebar; ?>"><?php if($cat_style!=5) : get_sidebar(); endif; ?></div>
	<div class="j-clear"></div>
</div>
<?php get_footer(); ?>
