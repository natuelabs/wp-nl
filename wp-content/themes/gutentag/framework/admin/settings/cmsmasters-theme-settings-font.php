<?php 
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version		1.0.0
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function gutentag_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'gutentag');
	$tabs['link'] = esc_attr__('Links', 'gutentag');
	$tabs['nav'] = esc_attr__('Navigation', 'gutentag');
	$tabs['heading'] = esc_attr__('Heading', 'gutentag');
	$tabs['other'] = esc_attr__('Other', 'gutentag');
	$tabs['google'] = esc_attr__('Google Fonts', 'gutentag');
	
	return apply_filters('cmsmasters_options_font_tabs_filter', $tabs);
}


function gutentag_options_font_sections() {
	$tab = gutentag_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'gutentag');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'gutentag');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'gutentag');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'gutentag');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'gutentag');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'gutentag');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_sections_filter', $sections, $tab);
} 


function gutentag_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = gutentag_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = gutentag_settings_font_defaults();
	
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'gutentag'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['gutentag' . '_content_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'gutentag' . '_link_font', 
			'title' => esc_html__('Links Font', 'gutentag'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['gutentag' . '_link_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'gutentag' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'gutentag'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['gutentag' . '_link_hover_decoration'], 
			'choices' => gutentag_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'gutentag' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'gutentag'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['gutentag' . '_nav_title_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'gutentag' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'gutentag'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['gutentag' . '_nav_dropdown_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'gutentag' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'gutentag'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['gutentag' . '_h1_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'gutentag' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'gutentag'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['gutentag' . '_h2_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'gutentag' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'gutentag'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['gutentag' . '_h3_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'gutentag' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'gutentag'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['gutentag' . '_h4_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'gutentag' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'gutentag'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['gutentag' . '_h5_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'gutentag' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'gutentag'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['gutentag' . '_h6_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'gutentag' . '_button_font', 
			'title' => esc_html__('Button Font', 'gutentag'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['gutentag' . '_button_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'gutentag' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'gutentag'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['gutentag' . '_small_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'gutentag' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'gutentag'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['gutentag' . '_input_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'gutentag' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'gutentag'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['gutentag' . '_quote_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'gutentag' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'gutentag'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => $defaults[$tab]['gutentag' . '_google_web_fonts'] 
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'gutentag' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'gutentag'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'gutentag') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'gutentag') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'gutentag') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'gutentag') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'gutentag') . '|' . 'greek', 
				esc_html__('Greek Extended', 'gutentag') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'gutentag') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'gutentag') . '|' . 'japanese', 
				esc_html__('Korean', 'gutentag') . '|' . 'korean', 
				esc_html__('Thai', 'gutentag') . '|' . 'thai', 
				esc_html__('Bengali', 'gutentag') . '|' . 'bengali', 
				esc_html__('Devanagari', 'gutentag') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'gutentag') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'gutentag') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'gutentag') . '|' . 'hebrew', 
				esc_html__('Kannada', 'gutentag') . '|' . 'kannada', 
				esc_html__('Khmer', 'gutentag') . '|' . 'khmer', 
				esc_html__('Malayalam', 'gutentag') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'gutentag') . '|' . 'myanmar', 
				esc_html__('Oriya', 'gutentag') . '|' . 'oriya', 
				esc_html__('Sinhala', 'gutentag') . '|' . 'sinhala', 
				esc_html__('Tamil', 'gutentag') . '|' . 'tamil', 
				esc_html__('Telugu', 'gutentag') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_fields_filter', $options, $tab);	
}

