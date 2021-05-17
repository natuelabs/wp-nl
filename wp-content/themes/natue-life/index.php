<?php
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
$cat_style=ot_get_option('home_page_style','2');
$home_sidebar=ot_get_option('home_sidebar','right');
get_header(); ?>

<meta name="keywords" content="portal de saude, receitas saudaveis, dietas para emagrecer, fitness, dicas de treino, portal fitness, como perder peso, atividades físicas">
    <?php get_template_part('carousel'); ?>
<div class="content-container">

    <div id="primary" class="<?php echo $home_sidebar; ?> content-area j-content home-content <?php if($cat_style==5) : echo "full"; endif; ?>">

        <main id="main" class="site-main" role="main">

            <?php dynamic_sidebar('natue_widgets_home');   ?>

            <?php if($cat_style!=1) : get_template_part('pagination'); endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <div class="j-sidebar <?php echo $home_sidebar; ?>"><?php if($cat_style!=5) : get_sidebar(); endif; ?></div>
    <div class="j-clear"></div>
</div>
<?php get_footer(); ?>