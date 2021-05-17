<?php
/**
 * Item meta template.
 *
 * @var $args
 * @var $opts
 * @package visual-portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$tag = 'a';
if ( ! $args['url'] ) {
    $tag = 'span';
}
?>

<<?php echo esc_html( $tag ); ?>
    <?php if ( $args['url'] ) : ?>
        href="<?php echo esc_url( $args['url'] ); ?>"
    <?php endif; ?>
    class="vp-portfolio__item-overlay vp-portfolio__item-align-<?php echo esc_attr( $opts['align'] ); ?>">
    <div class="vp-portfolio__item-meta">
        <?php

         // Show Categories.
         if ( $opts['show_categories'] && $args['categories'] && ! empty( $args['categories'] ) ) {
            ?>
            <ul class="vp-portfolio__item-meta-categories">
                <?php
                $count = $opts['categories_count'];
                foreach ( $args['categories'] as $category ) {
                    if ( ! $count ) {
                        break;
                    }
                    ?>
                    <li class="vp-portfolio__item-meta-category">
                        <span><?php echo esc_html( $category['label'] ); ?></span>
                    </li>
                    <?php
                    $count--;
                }
                ?>
            </ul>
            <?php
        }

        // Show Title.
        if ( $opts['show_title'] && $args['title'] ) {
            ?>
            <h2 class="vp-portfolio__item-meta-title">
                <?php
                echo esc_html( $args['title'] );
                ?>
            </h2>
            <?php
        }

        // Show Date.
        if ( $opts['show_date'] ) {
            ?>
            <div class="vp-portfolio__item-meta-date">
                <?php echo esc_html( $args['published'] ); ?>
            </div>
            <?php
        }

        // Show Excerpt.
        if ( $opts['show_excerpt'] && $args['excerpt'] ) {
            ?>
            <div class="vp-portfolio__item-meta-excerpt">
                <?php echo esc_html( $args['excerpt'] ); ?>
            </div>
            <?php
        }

        ?>
    </div>
</<?php echo esc_html( $tag ); ?>>
