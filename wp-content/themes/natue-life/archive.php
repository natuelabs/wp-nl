<?php
/**
 * @package jmax
 */
$cat_style=ot_get_option('archives_layout','2');
$archives_sidebar=ot_get_option('archives_sidebar','right');
get_header(); ?>
	<div class="content-container">

	<div id="primary" class="<?php echo $archives_sidebar; ?> content-area j-content <?php if($cat_style==5) : echo "full"; endif; ?>">
	    
		<main id="main" class="site-main" role="main">
		<?php /* Start the Loop */ ?>
<div class="category-heading"><h1><?php echo single_month_title(' '); ?></h1><div class="j-clear"></div></div>
				<?php

		$posts_query=new WP_Query( array ( 'm' => $m, 'paged' => $paged) );
		include_once('loop.php');
		 ?>


			<?php get_template_part('pagination'); ?>



		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="j-sidebar <?php echo $archives_sidebar; ?>"><?php if($cat_style!=5) : get_sidebar(); endif; ?></div>
	<div class="j-clear"></div>
</div>
<?php get_footer(); ?>