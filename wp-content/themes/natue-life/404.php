<?php
/**
 * 400 Template.
 *
 * @package jmax
 */
$sidebar='full';
get_header(); ?>

<div class="content-container">

	<div id="primary" class="<?php echo $sidebar; ?> content-area j-content not-found">

		<main id="main" class="site-main" role="main">
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="aligncenter">
				<h1><i class="fa title-icon fa-question-circle"></i><br/><?php _e( 'Page not found', 'jmax' ); ?></h1>
			</div>
		</article>
		<!-- /article -->
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="j-clear"></div>
</div>
<?php get_footer(); ?>
