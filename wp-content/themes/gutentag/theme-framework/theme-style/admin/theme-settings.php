<?php 
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version		1.0.0
 * 
 * Theme Admin Settings
 * Created by CMSMasters
 * 
 */

/* Color Settings */
function gutentag_theme_options_color_fields($options, $tab) {
	$defaults = gutentag_color_schemes_defaults();
	
	
	if ($tab != 'header' && $tab != 'navigation' && $tab != 'header_top') {
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'gutentag' . '_' . $tab . '_secondary', 
			'title' => esc_html__('Secondary Color', 'gutentag'), 
			'desc' => esc_html__('Secondary color for some elements', 'gutentag'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['secondary'] : $defaults['default']['secondary'] 
		);
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_color_fields_filter', 'gutentag_theme_options_color_fields', 10, 2);