<?php
/*
Template Name: Page Sitemap
*/
/**
 * @package jmax
 */
$sidebar='full';
get_header(); ?>
	
<div class="content-container">

	<div id="primary" class="<?php echo $sidebar; ?> j-content ">
	    
		<main id="main" class="site-main" role="main">
		<?php if(have_posts()) : while(have_posts()) : the_post() ; ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="aligncenter four-columns-title">
				<!-- post title -->
				<h1><i style="font-size:120px" class="fa fa-sitemap title-icon"></i><br/><?php the_title(); ?></h1>
				<!-- /post title -->
			</div>
			<div class="content-content">
				
				<div class="four-columns">
					<div class="block-style-item"> 
					  <h2><?php _e('Pages', 'jmax'); ?></h2>
					  <?php wp_list_pages(array('title_li'=>'')); ?>
					</div>
					<div class="block-style-item"> 
					  <h2><?php _e('Categories', 'jmax'); ?></h2>
					  <?php wp_list_categories(array('title_li'=>'', 'show_count' => true)); ?>
					</div>
					<div class="block-style-item "> 
					  <h2><?php _e('Tags', 'jmax'); ?></h2>
                    <?php
                    $post_tags = get_tags();
                    foreach ($post_tags as $tagir){
                        
                        $tag_link = get_tag_link($tagir->term_id);
                        $html .= "<li><a href='{$tag_link}/' title='{$tagir->name} Tag' >{$tagir->name}</a>&nbsp;($tagir->count)</li>";
                    }
                    echo $html;

                    ?>
           
					</div>
					<div class="block-style-item last"> 
					  <h2><?php _e('Authors', 'jmax'); ?></h2>
					  <?php wp_list_authors(array('title_li'=>'', 'hide_empty'=> 0, 'optioncount' => 1)); ?>
					</div>
					<div class="j-clear"></div>
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