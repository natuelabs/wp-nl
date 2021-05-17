<?php
/*
Template Name: Page Authors
*/
/**
 * @package jmax
 */
$sidebar='right';
get_header(); ?>
	
<div class="content-container">
	<div id="primary" class="<?php echo $sidebar; ?> content-area j-content post-content">
		<main id="main" class="site-main" role="main">
		<?php if(have_posts()) : while(have_posts()) : the_post() ; ?>
		<article>
			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<div class="content-content"><?php jmax_auhtors_list(); // Dynamic Content ?></div>
			<div class="j-clear"></div>
		</article>
		<?php endwhile; endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="j-sidebar <?php echo $sidebar; ?>"><?php if($cat_style!=5) : get_sidebar(); endif; ?></div>
	<div class="j-clear"></div>
</div>
<?php get_footer(); ?>