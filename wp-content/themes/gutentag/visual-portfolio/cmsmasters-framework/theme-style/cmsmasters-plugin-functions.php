<?php
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * visual-portfolio Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts */
require_once(get_template_directory() . '/visual-portfolio/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/plugin-options.php');
require_once(get_template_directory() . '/visual-portfolio/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-colors.php');
require_once(get_template_directory() . '/visual-portfolio/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-fonts.php');
require_once(get_template_directory() . '/visual-portfolio/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-template-functions.php');


/* Register CSS Styles and Scripts */
function gutentag_visual_portfolio_register_styles_scripts() {
	// Styles
	wp_enqueue_style('gutentag-visual-portfolio-style', get_template_directory_uri() . '/visual-portfolio/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('gutentag-visual-portfolio-adaptive', get_template_directory_uri() . '/visual-portfolio/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	
	if (is_rtl()) {
		wp_enqueue_style('gutentag-visual-portfolio-rtl', get_template_directory_uri() . '/visual-portfolio/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
	
	// Scripts
	wp_enqueue_script('gutentag-visual-portfolio-script', get_template_directory_uri() . '/visual-portfolio/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/js/jquery.plugin-script.js', array('jquery'), '1.0.0', true);
	
}

add_action('wp_enqueue_scripts', 'gutentag_visual_portfolio_register_styles_scripts');

add_filter('vpf_include_template_style', '__return_false');


add_action( 'save_post_vp_lists', 'cmsmasters_vpf_save_post', 10, 3 );
function cmsmasters_vpf_save_post( $post_ID, $post, $update ){
	if ($update == true) {
		add_post_meta( $post_ID, 'cmsmasters_vp_list_isset', true );
	}
}


function cmsmasters_vpf_options($result, $name, $post_id) {
	$cmsmasters_option = gutentag_get_global_options();

	$cmsmasters_vp_list_isset = get_post_meta($post_id, 'cmsmasters_vp_list_isset', true);

	$cmsmasters_vp_list_isset_style_view = get_post_meta($post_id, 'cmsmasters_vp_list_isset_style_view', true);
	$cmsmasters_vp_list_isset_style_block = get_post_meta($post_id, 'cmsmasters_vp_list_isset_style_block', true);

	if ($cmsmasters_vp_list_isset == false || $cmsmasters_vp_list_isset == "") {
		if ($name == "vp_tiles_type") {
			$result = "1|1,0.5|";
		} elseif ($name == "vp_items_gap") {
			$result = "15";
		} elseif ($name == "vp_items_count") {
			$result = "10";
		} elseif ($name == "vp_items_style") {
			if($cmsmasters_vp_list_isset_style_view == "1" && $cmsmasters_vp_list_isset_style_block == "") {
				$result = "default";
				add_post_meta( $post_id, 'cmsmasters_vp_list_isset_style_block', true );
			} elseif ($cmsmasters_vp_list_isset_style_view == "") {
				$result = "default";
			}

			add_post_meta( $post_id, 'cmsmasters_vp_list_isset_style_view', true );
		} elseif ($name == "vp_items_style_default__show_date") {
			$result = "true";
		} elseif ($name == "vp_items_style_default__show_date") {
			$result = "true";
		} elseif ($name == "vp_items_style_emerge__show_date") {
			$result = "true";
		} elseif ($name == "vp_items_style_fade__show_date") {
			$result = "true";
		} elseif ($name == "vp_items_style_fly__show_date") {
			$result = "true";
		} elseif ($name == "vp_items_style_default__show_read_more") {
			$result = "true";
		} elseif ($name == "vp_items_style_default__read_more_label") {
			$result = "Read More...";
		} elseif ($name == "vp_pagination") {
			$result = "paged";
		} elseif ($name == "vp_items_style_fly__bg_color") {
			$result = $cmsmasters_option['gutentag_default_alternate'];
		} elseif ($name == "vp_items_style_fly__text_color") {
			$result = $cmsmasters_option['gutentag_default_heading'];
		} elseif ($name == "vp_items_style_fade__bg_color") {
			$result = $cmsmasters_option['gutentag_default_alternate'];
		} elseif ($name == "vp_items_style_fade__text_color") {
			$result = $cmsmasters_option['gutentag_default_heading'];
		} elseif ($name == "vp_items_style_emerge__bg_color") {
			$result = $cmsmasters_option['gutentag_default_bg'];
		} elseif ($name == "vp_items_style_emerge__text_color") {
			$result = $cmsmasters_option['gutentag_default_heading'];
		} 
	}

	return $result;
}

add_filter('vpf_get_layout_option', 'cmsmasters_vpf_options', 10, 3);