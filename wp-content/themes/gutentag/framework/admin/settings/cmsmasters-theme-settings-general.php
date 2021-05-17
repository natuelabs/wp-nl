<?php 
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function gutentag_options_general_tabs() {
	$cmsmasters_option = gutentag_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'gutentag');
	
	if ($cmsmasters_option['gutentag' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'gutentag');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'gutentag');
	}
	
	$tabs['header'] = esc_attr__('Header', 'gutentag');
	$tabs['content'] = esc_attr__('Content', 'gutentag');
	$tabs['footer'] = esc_attr__('Footer', 'gutentag');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function gutentag_options_general_sections() {
	$tab = gutentag_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'gutentag');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'gutentag');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'gutentag');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'gutentag');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'gutentag');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'gutentag');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function gutentag_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = gutentag_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = gutentag_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'gutentag' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'gutentag') . '|liquid', 
				esc_html__('Boxed', 'gutentag') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'gutentag' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'gutentag') . '|image', 
				esc_html__('Text', 'gutentag') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'gutentag' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'gutentag'), 
			'desc' => esc_html__('Choose your website logo image.', 'gutentag'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['gutentag' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'gutentag' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'gutentag'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'gutentag'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['gutentag' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'gutentag' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'gutentag'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['gutentag' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'gutentag' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'gutentag'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['gutentag' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'gutentag' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'gutentag'), 
			'desc' => esc_html__('enable', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'gutentag' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'gutentag'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['gutentag' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'gutentag' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'gutentag'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['gutentag' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'gutentag' . '_bg_col', 
			'title' => esc_html__('Background Color', 'gutentag'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['gutentag' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'gutentag' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'gutentag' . '_bg_img', 
			'title' => esc_html__('Background Image', 'gutentag'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'gutentag'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['gutentag' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'gutentag' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'gutentag') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'gutentag') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'gutentag') . '|repeat-y', 
				esc_html__('Repeat', 'gutentag') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'gutentag' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'gutentag'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['gutentag' . '_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'gutentag') . '|top left', 
				esc_html__('Top Center', 'gutentag') . '|top center', 
				esc_html__('Top Right', 'gutentag') . '|top right', 
				esc_html__('Center Left', 'gutentag') . '|center left', 
				esc_html__('Center Center', 'gutentag') . '|center center', 
				esc_html__('Center Right', 'gutentag') . '|center right', 
				esc_html__('Bottom Left', 'gutentag') . '|bottom left', 
				esc_html__('Bottom Center', 'gutentag') . '|bottom center', 
				esc_html__('Bottom Right', 'gutentag') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'gutentag' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'gutentag') . '|scroll', 
				esc_html__('Fixed', 'gutentag') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'gutentag' . '_bg_size', 
			'title' => esc_html__('Background Size', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'gutentag') . '|auto', 
				esc_html__('Cover', 'gutentag') . '|cover', 
				esc_html__('Contain', 'gutentag') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'gutentag' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'gutentag'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => gutentag_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'gutentag' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'gutentag'), 
			'desc' => esc_html__('enable', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'gutentag' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'gutentag'), 
			'desc' => esc_html__('enable', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'gutentag' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'gutentag' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'gutentag'), 
			'desc' => esc_html__('pixels', 'gutentag'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['gutentag' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'gutentag' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'gutentag'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'gutentag') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['gutentag' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'gutentag' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'gutentag') . '|none', 
				esc_html__('Top Line Social Icons', 'gutentag') . '|social', 
				esc_html__('Top Line Navigation (will be shown if set in Appearance - Menus tab)', 'gutentag') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'gutentag' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'gutentag') . '|default', 
				esc_html__('Compact Style Left Navigation', 'gutentag') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'gutentag') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'gutentag') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'gutentag' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'gutentag'), 
			'desc' => esc_html__('pixels', 'gutentag'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['gutentag' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'gutentag' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'gutentag'), 
			'desc' => esc_html__('pixels', 'gutentag'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['gutentag' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'gutentag' . '_header_search', 
			'title' => esc_html__('Header Search', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'gutentag' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'gutentag') . '|none', 
				esc_html__('Header Social Icons', 'gutentag') . '|social', 
				esc_html__('Header Custom HTML', 'gutentag') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'gutentag' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'gutentag'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'gutentag') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['gutentag' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'gutentag'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'gutentag'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['gutentag' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'gutentag'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Archive Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'gutentag'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['gutentag' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'gutentag'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Search Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'gutentag'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['gutentag' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'gutentag'), 
			'desc' => 'Layout for pages of non-listed types', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['gutentag' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'gutentag') . '|left', 
				esc_html__('Right', 'gutentag') . '|right', 
				esc_html__('Center', 'gutentag') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'gutentag'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'gutentag'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['gutentag' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'gutentag') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'gutentag') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'gutentag') . '|repeat-y', 
				esc_html__('Repeat', 'gutentag') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'gutentag') . '|scroll', 
				esc_html__('Fixed', 'gutentag') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'gutentag') . '|auto', 
				esc_html__('Cover', 'gutentag') . '|cover', 
				esc_html__('Contain', 'gutentag') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'gutentag'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['gutentag' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'gutentag'), 
			'desc' => esc_html__('pixels', 'gutentag'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['gutentag' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'gutentag' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'gutentag'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['gutentag' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'gutentag' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'gutentag') . '|default', 
				esc_html__('Small', 'gutentag') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'gutentag' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'gutentag') . '|none', 
				esc_html__('Footer Navigation', 'gutentag') . '|nav', 
				esc_html__('Social Icons', 'gutentag') . '|social', 
				esc_html__('Custom HTML', 'gutentag') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'gutentag' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'gutentag' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'gutentag'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'gutentag'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['gutentag' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'gutentag' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'gutentag'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'gutentag'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['gutentag' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'gutentag' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'gutentag' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'gutentag' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'gutentag'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'gutentag') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['gutentag' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'gutentag' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'gutentag'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['gutentag' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);	
}

