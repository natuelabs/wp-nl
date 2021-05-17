<?php
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * ghostkit Functions
 * Created by CMSMasters
 * 
 */


/* Register CSS Styles and Scripts */
function gutentag_ghostkit_register_styles_scripts() {

	// Scripts
	// wp_enqueue_script('gutentag-ghostkit-script', get_template_directory_uri() . '/ghostkit/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/js/jquery.plugin-script.js', array('jquery'), '1.0.0', false);
	
}

add_action('admin_enqueue_scripts', 'gutentag_ghostkit_register_styles_scripts');




// add_filter('vpf_include_template_style', '__return_false');


// /* Visual Portfolio Default */
// function gutentag_visual_portfolio_defaults() {
// 	// if (!get_option('cmsmasters_gutentag_visual_portfolio_first_active')) {
// 		if (CMSMASTRES_VISUAL_PORTFOLIO) {
// 			update_option('vp_layout', 'slider');
// 			update_option('vp_items_gap', 20);
			
// 			// add_option('cmsmasters_gutentag_visual_portfolio_first_active', 'true');
// 		}
// 	// }
// }

// add_action('init', 'gutentag_visual_portfolio_defaults');
