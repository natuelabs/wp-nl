<?php
/**
 * @package 	WordPress
 * @subpackage 	Gutentag Child
 * @version		1.0.0
 * 
 * Child Theme Functions File
 * Created by CMSMasters
 * 
 */


function gutentag_child_enqueue_styles() {
    wp_enqueue_style('gutentag-child-style', get_stylesheet_uri(), array(), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'gutentag_child_enqueue_styles', 11);


// Remove the word Category from title in category pages
function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );
?>