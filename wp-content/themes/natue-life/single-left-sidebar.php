<?php
/*
Template Name Posts: Post With Left Sidebar
*/
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package jmax
 */
$sidebar='left';
get_header(); ?>
	<div class="content-container">

<?php echo get_site_url() ?>

	<div id="primary" class="<?php echo $sidebar; ?> content-area j-content single post-content">
		<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
			<?php include('breadcrumb.php'); ?>
		<main id="main" class="site-main" role="main">
		<?php if(have_posts()) : while(have_posts()) : the_post() ; ?>
		<article>
			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<?php jmax_meta_info('single'); ?>
			<!-- /post title -->

			<!-- post thumbnail -->
			<?php get_featured_thing(); // Fullsize image for the single post ?>
			<!-- /post thumbnail -->

            <?php include('share-buttons.php'); ?>

			<div class="content-content">
				<?php
			   if(get_post_meta(get_the_ID() ,'jmax_review_position', true)=='top') :
			   echo '<br/>';
			   jmax_single_review();
			   endif;
			   ?>
			   <?php the_content(); // Dynamic Content ?>
			   <?php if(get_post_meta(get_the_ID() ,'jmax_review_position', true)=='bottom') :
			   jmax_single_review();
			   endif;
			   ?>
			</div>

			<?php wp_link_pages('before=<div class="pagination">Pages: &after=</div>'); ?>
			<?php jmax_post_tags(); ?>
			<?php include('inc/jmax-helpers/jmax-author-box.php'); ?>
            <?php include('inc/jmax-helpers/jmax-related-posts/jmax-related-posts.php'); ?>
			<?php comments_template(); ?>
			<?php next_prev(); ?>
			<div class="j-clear"></div>
		</article>
		<?php endwhile; endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="j-sidebar <?php echo $sidebar; ?>"><?php if($cat_style!=5) : get_sidebar(); endif; ?></div>
	<div class="j-clear"></div>
</div>
<?php get_footer(); ?>
