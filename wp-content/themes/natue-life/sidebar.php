<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package jmax
 */
?>
    <div id="secondary" role="complementary">
        <div id="jmax_about_widget-2" class="jmax_about_widget widget-area">
            <div class="widget-heading">
                <span>redes sociais</span>
                <div class="j-clear"> </div>
            </div>

            <div class="about-widget"><p></p>
                <div class="about-social-icons">
                    <a class="facebook" href="https://www.facebook.com/NatueOficial"><i class="fa fa-facebook"></i></a>
                    <a class="instagram" href="https://instagram.com/natueoficial"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="j-clear"></div>
        </div>

        <aside id="search" class="widget widget_search">
            <?php get_search_form(); ?>
        </aside>

        <?php dynamic_sidebar('natue_widgets_categories_sidebar'); ?>
        <?php do_action( 'before_sidebar' ); ?>
        <?php if ( ! dynamic_sidebar( 'sidebar-widgets' ) ) : ?>
            <aside id="archives" class="widget">
                <h1 class="widget-title"><?php _e( 'Archives', 'jmax' ); ?></h1>
                <ul>
                    <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                </ul>
            </aside>

            <aside id="meta" class="widget">
                <h1 class="widget-title"><?php _e( 'Meta', 'jmax' ); ?></h1>
                <ul>
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                    <?php wp_meta(); ?>
                </ul>
            </aside>
        <?php endif; // end sidebar widget area ?>

        <div chaordic="top"></div>

        <div class="j-clear"></div>

    </div><!-- #secondary -->

