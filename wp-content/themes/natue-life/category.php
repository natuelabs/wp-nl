<?php
$cat_style=ot_get_option('category_layout','2');
$category_sidebar=ot_get_option('category_sidebar','right');
get_header(); ?>

<div class="content-container">
  <div id="primary" class="<?php echo $category_sidebar; ?> content-area j-content <?php if($cat_style==5) : echo "full"; endif; ?>">
    <main id="main" class="site-main" role="main">
      <div class="category-heading">
        <h1><?php echo get_cat_name($cat); ?></h1>
        <div class="j-clear"></div>
      </div>
      <?php
             $enable_category_slider=ot_get_option('enable_category_slider', 'off');
             if($enable_category_slider=='on' && $cat_style!=5) :
                 $posts_to_show=ot_get_option('category_slider_posts','5');
                 include_once('category-slider.php');
             endif;
            $posts_query=new WP_Query( array ( 'cat' => $cat, 'paged' => $paged) );
            include_once('loop.php');
            ?>
      <?php get_template_part('pagination'); ?>
    </main>
    <!-- #main -->
    <section class="category-description">
        <?php
            echo category_description($cat);
        ?>
    </section>
  </div>
  <!-- #primary -->
  <div class="j-sidebar <?php echo $category_sidebar; ?>">
    <?php
        if($cat_style!=5) :
            get_sidebar();
        endif;
    ?>
  </div>
  <div class="j-clear"></div>
</div>
<?php get_footer(); ?>

