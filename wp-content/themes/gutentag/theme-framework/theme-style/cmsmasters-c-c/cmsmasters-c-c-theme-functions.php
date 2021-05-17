<?php
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * Theme Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function gutentag_theme_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('gutentag-composer-shortcodes-extend', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-theme-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('gutentag-composer-shortcodes-extend', 'cmsmasters_theme_shortcodes', array( 
			'example_translation1' => 		esc_attr__('Example Translation 1', 'gutentag'), 
			'example_translation2' => 		esc_attr__('Example Translation 2', 'gutentag') 
		));
	}
}

add_action('admin_enqueue_scripts', 'gutentag_theme_register_c_c_scripts');

