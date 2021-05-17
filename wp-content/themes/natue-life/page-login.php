<?php
/*
Template Name: Page Login
*/
/**
 * @package jmax
 */
$sidebar='full';
get_header(); ?>
	
<div class="content-container">

	<div id="primary" class="<?php echo $sidebar; ?> content-area j-content ">
	    
		<main id="main" class="site-main" role="main">
		<?php if(have_posts()) : while(have_posts()) : the_post() ; ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="aligncenter four-columns-title">
				<!-- post title -->
				<h1><i style="font-size:120px" class="fa fa-lock title-icon"></i><br/><?php the_title(); ?></h1>
				<!-- /post title -->
			</div>
			<div class="content-content ">
				<div class="login-form">
					<?php wp_login_form(array('redirect' => get_home_url())); ?>
				</div>
			</div>
			<div class="j-clear"></div>
		</article>
		<!-- /article -->
		<?php endwhile; endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="j-clear"></div>
</div>
<?php get_footer(); ?>