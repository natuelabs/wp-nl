<?php
/*
Category Template: Category Image + Info Bellow
*/
/**
 * @package jmax
 */
$cat_style=2;
$category_sidebar=ot_get_option('category_sidebar','right');
get_header(); ?>
	<div class="content-container">

	<div id="primary" class="<?php echo $category_sidebar; ?> content-area j-content <?php if($cat_style==5) : echo "full"; endif; ?>">
	    
		<main id="main" class="site-main" role="main">
		<?php /* Start the Loop */ ?>
<div class="category-heading"><h1><?php echo get_cat_name($cat); ?></h1><a target="_blank" title="<?php echo sprintf( __( 'Subsribe to %s ', 'jmax' ), get_cat_name($cat) ); ?>" href="<?php echo get_category_feed_link($cat); ?>" class="cat-rss-link"><i class="fa fa-rss"></i></a><div class="j-clear"></div></div>
				<?php
				$enable_category_slider=ot_get_option('enable_category_slider', 'on');
				if($enable_category_slider==on && $cat_style!=5) :
					$posts_to_show=ot_get_option('category_slider_posts','5');
					include_once('category-slider.php');
				endif;
				$posts_query=new WP_Query( array ( 'cat' => $cat, 'paged' => $paged) );
				include_once('loop.php');
		 		?>


			<?php get_template_part('pagination'); ?>



		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="j-sidebar <?php echo $category_sidebar; ?>"><?php if($cat_style!=5) : get_sidebar(); endif; ?></div>
	<div class="j-clear"></div>
</div>
<?php get_footer(); ?>