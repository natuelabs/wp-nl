<?php
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * Theme Vars Functions
 * Created by CMSMasters
 * 
 */


/* Register CSS Styles */
function gutentag_vars_register_css_styles() {
	wp_enqueue_style('gutentag-theme-vars-style', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/vars-style.css', array('gutentag-retina'), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'gutentag_vars_register_css_styles');

