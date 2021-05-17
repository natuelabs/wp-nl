<?php
/**
 * Item image template.
 *
 * @var $args
 * @var $opts
 * @package visual-portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

?>

<div class="vp-portfolio__item-img-wrap">
    <div class="vp-portfolio__item-img">
        <?php
        if ( $args['url'] && $args['image'] != "" ) {
            ?>
            <a href="<?php echo esc_url( $args['url'] ); ?>">
                <?php echo wp_kses( $args['image'], $args['image_allowed_html'] ); ?>
            </a>
            <?php
        } elseif (!$args['url'] && $args['image'] != "") {
            echo wp_kses( $args['image'], $args['image_allowed_html'] );
        } else {
            echo '<div class="cmsmasters_vp_portfolio_noimage cmsmasters-icon-image"></div>';
        }
        ?>
    </div>
</div>
