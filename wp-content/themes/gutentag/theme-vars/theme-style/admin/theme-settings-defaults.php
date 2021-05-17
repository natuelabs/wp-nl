<?php 
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version		1.0.0
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('gutentag_settings_general_defaults')) {

function gutentag_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'gutentag' . '_theme_layout' => 		'liquid', 
			'gutentag' . '_logo_type' => 			'image', 
			'gutentag' . '_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'gutentag' . '_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'gutentag' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'Gutentag', 
			'gutentag' . '_logo_subtitle' => 		'', 
			'gutentag' . '_logo_custom_color' => 	0, 
			'gutentag' . '_logo_title_color' => 	'', 
			'gutentag' . '_logo_subtitle_color' => 	'' 
		), 
		'bg' => array( 
			'gutentag' . '_bg_col' => 			'#ffffff', 
			'gutentag' . '_bg_img_enable' => 	0, 
			'gutentag' . '_bg_img' => 			'', 
			'gutentag' . '_bg_rep' => 			'no-repeat', 
			'gutentag' . '_bg_pos' => 			'top center', 
			'gutentag' . '_bg_att' => 			'scroll', 
			'gutentag' . '_bg_size' => 			'cover' 
		), 
		'header' => array( 
			'gutentag' . '_fixed_header' => 				1, 
			'gutentag' . '_header_overlaps' => 				0, 
			'gutentag' . '_header_top_line' => 				0, 
			'gutentag' . '_header_top_height' => 			'48', 
			'gutentag' . '_header_top_line_short_info' => 	'', 
			'gutentag' . '_header_top_line_add_cont' => 	'social', 
			'gutentag' . '_header_styles' => 				'c_nav', 
			'gutentag' . '_header_mid_height' => 			'160', 
			'gutentag' . '_header_bot_height' => 			'70', 
			'gutentag' . '_header_search' => 				0, 
			'gutentag' . '_header_add_cont' => 				'social', 
			'gutentag' . '_header_add_cont_cust_html' => 	''
		), 
		'content' => array( 
			'gutentag' . '_layout' => 					'r_sidebar', 
			'gutentag' . '_archives_layout' => 			'r_sidebar', 
			'gutentag' . '_search_layout' => 			'r_sidebar', 
			'gutentag' . '_other_layout' => 			'r_sidebar', 
			'gutentag' . '_heading_alignment' => 		'center', 
			'gutentag' . '_heading_bg_image_enable' => 	0, 
			'gutentag' . '_heading_bg_image' => 		'', 
			'gutentag' . '_heading_bg_repeat' => 		'no-repeat', 
			'gutentag' . '_heading_bg_attachment' => 	'scroll', 
			'gutentag' . '_heading_bg_size' => 			'cover', 
			'gutentag' . '_heading_bg_color' => 		'', 
			'gutentag' . '_heading_height' => 			'280', 
			'gutentag' . '_breadcrumbs' => 				1, 
			'gutentag' . '_bottom_sidebar' => 			1, 
			'gutentag' . '_bottom_sidebar_layout' => 	'14141414' 
		), 
		'footer' => array( 
			'gutentag' . '_footer_type' => 					'default', 
			'gutentag' . '_footer_additional_content' => 	'nav', 
			'gutentag' . '_footer_logo' => 					1, 
			'gutentag' . '_footer_logo_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'gutentag' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'gutentag' . '_footer_nav' => 					0, 
			'gutentag' . '_footer_social' => 				1, 
			'gutentag' . '_footer_html' => 					'', 
			'gutentag' . '_footer_copyright' => 			'This is a sample website - cmsmasters' . ' &copy; ' . date('Y') . ' / ' . esc_html__('All Rights Reserved', 'gutentag') 
		) 
	);
	
	
	$settings = apply_filters('gutentag_settings_general_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}


/* Theme Settings Fonts Default Values */
if (!function_exists('gutentag_settings_font_defaults')) {

function gutentag_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'gutentag' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Quattrocento:400,700', 
				'font_size' => 			'18', 
				'line_height' => 		'32', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'gutentag' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Quattrocento:400,700', 
				'font_size' => 			'18', 
				'line_height' => 		'32', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'gutentag' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'gutentag' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Josefin+Sans:300,400,600,700', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'gutentag' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Josefin+Sans:300,400,600,700', 
				'font_size' => 			'11', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			) 
		), 
		'heading' => array( 
			'gutentag' . '_h1_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Josefin+Sans:300,400,600,700', 
				'font_size' => 			'50', 
				'line_height' => 		'60', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'gutentag' . '_h2_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Josefin+Sans:300,400,600,700', 
				'font_size' => 			'36', 
				'line_height' => 		'48', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'gutentag' . '_h3_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Josefin+Sans:300,400,600,700', 
				'font_size' => 			'26', 
				'line_height' => 		'32', 
				'font_weight' => 		'600', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'gutentag' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Josefin+Sans:300,400,600,700', 
				'font_size' => 			'17', 
				'line_height' => 		'28', 
				'font_weight' => 		'600', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'gutentag' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Josefin+Sans:300,400,600,700', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'gutentag' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'none', 
				'font_size' => 			'10', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'gutentag' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'none', 
				'font_size' => 			'13', 
				'line_height' => 		'50', 
				'font_weight' => 		'600', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'gutentag' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Quattrocento:400,700', 
				'font_size' => 			'16', 
				'line_height' => 		'28', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'gutentag' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Quattrocento:400,700', 
				'font_size' => 			'16', 
				'line_height' => 		'32', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'gutentag' . '_quote_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Quattrocento:400,700', 
				'font_size' => 			'26', 
				'line_height' => 		'40', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal' 
			) 
		),
		'google' => array( 
			'gutentag' . '_google_web_fonts' => array( 
				'Titillium+Web:300,400,700|Titillium Web', 
				'Josefin+Sans:300,400,600,700|Josefin+Sans',
				'Quattrocento:400,700|Quattrocento'
			) 
		) 
	);
	
	$settings = apply_filters('gutentag_settings_font_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#333333', 
		'#9ED546', 
		'#7A7A7A', 
		'#000000', 
		'#FFFFFF', 
		'#F3F3F3', 
		'#E7E7E7', 
		'#CDED99' 
	);
	
	
	return apply_filters('cmsmasters_color_picker_palettes_filter', $palettes);
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('gutentag_color_schemes_defaults')) {

function gutentag_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#333333', 
			'link' => 		'#9ED546', 
			'hover' => 		'#7A7A7A', 
			'heading' => 	'#000000', 
			'bg' => 		'#FFFFFF', 
			'alternate' => 	'#F3F3F3', 
			'border' => 	'#E7E7E7',
			'secondary' =>  '#CDED99' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'#333333', 
			'mid_link' => 		'#000000', 
			'mid_hover' => 		'#9ED546', 
			'mid_bg' => 		'#FFFFFF', 
			'mid_bg_scroll' => 	'#FFFFFF', 
			'mid_border' => 	'#FFFFFF', 
			'bot_color' => 		'#333333', 
			'bot_link' => 		'#000000', 
			'bot_hover' => 		'#9ED546', 
			'bot_bg' => 		'#FFFFFF', 
			'bot_bg_scroll' => 	'#FFFFFF', 
			'bot_border' => 	'rgba(0, 0, 0, 0)' 
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#000000', 
			'title_link_hover' => 		'#000000', 
			'title_link_current' => 	'#000000', 
			'title_link_subtitle' => 	'#D6D6D6', 
			'title_link_bg' => 			'rgba(0, 0, 0, 0)', 
			'title_link_bg_hover' => 	'rgba(0, 0, 0, 0)', 
			'title_link_bg_current' => 	'#CDED99', 
			'title_link_border' => 		'rgba(0, 0, 0, 0)', 
			'dropdown_text' => 			'#ADAAAA', 
			'dropdown_bg' => 			'#FFFFFF', 
			'dropdown_border' => 		'#E7E7E7', 
			'dropdown_link' => 			'#000000', 
			'dropdown_link_hover' => 	'#8AC230', 
			'dropdown_link_subtitle' => '#ADAAAA', 
			'dropdown_link_highlight' => 'rgba(0, 0, 0, 0)', 
			'dropdown_link_border' => 	'#E7E7E7' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'#333333', 
			'link' => 					'#000000', 
			'hover' => 					'#717171', 
			'bg' => 					'#E1E1E1', 
			'border' => 				'rgba(0, 0, 0, 0)', 
			'title_link' => 			'#000000', 
			'title_link_hover' => 		'#717171', 
			'title_link_bg' => 			'rgba(0, 0, 0, 0)', 
			'title_link_bg_hover' => 	'rgba(0, 0, 0, 0)', 
			'title_link_border' => 		'rgba(0, 0, 0, 0)', 
			'dropdown_bg' => 			'#FFFFFF', 
			'dropdown_border' => 		'#E7E7E7', 
			'dropdown_link' => 			'#000000', 
			'dropdown_link_hover' => 	'#8AC230', 
			'dropdown_link_highlight' => 'rgba(0, 0, 0, 0)', 
			'dropdown_link_border' => 	'rgba(0, 0, 0, 0)'
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'#333333', 
			'link' => 		'#9ED546', 
			'hover' => 		'#7A7A7A', 
			'heading' => 	'#000000', 
			'bg' => 		'#FFFFFF', 
			'alternate' => 	'#F3F3F3', 
			'border' => 	'rgba(0, 0, 0, 0)',
			'secondary' =>  '#CDED99'
		)
	);
	
	
	$settings = apply_filters('gutentag_color_schemes_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('gutentag_settings_element_defaults')) {

function gutentag_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'gutentag' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'gutentag' . '_social_icons' => array( 
				'cmsmasters-icon-facebook-squared|#|' . esc_html__('Facebook', 'gutentag') . '|true|#000000|#9ed546', 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'gutentag') . '|true|#000000|#9ed546', 
				'cmsmasters-icon-instagram|#|' . esc_html__('Instagram', 'gutentag') . '|true|#000000|#9ed546', 
				'cmsmasters-icon-youtube-play|#|' . esc_html__('YouTube', 'gutentag') . '|true|#000000|#9ed546', 
				'cmsmasters-icon-pinterest-circled|#|' . esc_html__('Pinterest', 'gutentag') . '|true|#000000|#9ed546'
			) 
		), 
		'lightbox' => array( 
			'gutentag' . '_ilightbox_skin' => 					'dark', 
			'gutentag' . '_ilightbox_path' => 					'vertical', 
			'gutentag' . '_ilightbox_infinite' => 				0, 
			'gutentag' . '_ilightbox_aspect_ratio' => 			1, 
			'gutentag' . '_ilightbox_mobile_optimizer' => 		1, 
			'gutentag' . '_ilightbox_max_scale' => 				1, 
			'gutentag' . '_ilightbox_min_scale' => 				0.2, 
			'gutentag' . '_ilightbox_inner_toolbar' => 			0, 
			'gutentag' . '_ilightbox_smart_recognition' => 		0, 
			'gutentag' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'gutentag' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'gutentag' . '_ilightbox_controls_toolbar' => 		1, 
			'gutentag' . '_ilightbox_controls_arrows' => 		0, 
			'gutentag' . '_ilightbox_controls_fullscreen' => 	1, 
			'gutentag' . '_ilightbox_controls_thumbnail' => 	1, 
			'gutentag' . '_ilightbox_controls_keyboard' => 		1, 
			'gutentag' . '_ilightbox_controls_mousewheel' => 	1, 
			'gutentag' . '_ilightbox_controls_swipe' => 		1, 
			'gutentag' . '_ilightbox_controls_slideshow' => 	0 
		), 
		'sitemap' => array( 
			'gutentag' . '_sitemap_nav' => 			1, 
			'gutentag' . '_sitemap_categs' => 		1, 
			'gutentag' . '_sitemap_tags' => 		1, 
			'gutentag' . '_sitemap_month' => 		1, 
			'gutentag' . '_sitemap_pj_categs' => 	1, 
			'gutentag' . '_sitemap_pj_tags' => 		1 
		), 
		'error' => array( 
			'gutentag' . '_error_color' => 				'#292929', 
			'gutentag' . '_error_bg_color' => 			'#fbfbfb', 
			'gutentag' . '_error_bg_img_enable' => 		0, 
			'gutentag' . '_error_bg_image' => 			'', 
			'gutentag' . '_error_bg_rep' => 			'no-repeat', 
			'gutentag' . '_error_bg_pos' => 			'top center', 
			'gutentag' . '_error_bg_att' => 			'scroll', 
			'gutentag' . '_error_bg_size' => 			'cover', 
			'gutentag' . '_error_search' => 			1, 
			'gutentag' . '_error_sitemap_button' => 	1, 
			'gutentag' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'gutentag' . '_custom_css' => 			'', 
			'gutentag' . '_custom_js' => 			''
		), 
		'recaptcha' => array( 
			'gutentag' . '_recaptcha_public_key' => 	'', 
			'gutentag' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	$settings = apply_filters('gutentag_settings_element_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('gutentag_settings_single_defaults')) {

function gutentag_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'gutentag' . '_blog_post_layout' => 		'r_sidebar', 
			'gutentag' . '_blog_post_title' => 			1, 
			'gutentag' . '_blog_post_date' => 			1, 
			'gutentag' . '_blog_post_cat' => 			1, 
			'gutentag' . '_blog_post_author' => 		1, 
			'gutentag' . '_blog_post_comment' => 		1, 
			'gutentag' . '_blog_post_tag' => 			1, 
			'gutentag' . '_blog_post_like' => 			1, 
			'gutentag' . '_blog_post_nav_box' => 		1, 
			'gutentag' . '_blog_post_nav_order_cat' => 	0, 
			'gutentag' . '_blog_post_share_box' => 		1, 
			'gutentag' . '_blog_post_author_box' => 	1,
			'gutentag' . '_blog_post_read_more' => 	esc_html__('Read More...', 'gutentag'),  
			'gutentag' . '_blog_more_posts_box' => 		'popular', 
			'gutentag' . '_blog_more_posts_count' => 	'3', 
			'gutentag' . '_blog_more_posts_pause' => 	'5' 
		), 
		'project' => array( 
			'gutentag' . '_portfolio_project_title' => 			1, 
			'gutentag' . '_portfolio_project_details_title' => 	esc_html__('Project details', 'gutentag'), 
			'gutentag' . '_portfolio_project_date' => 			1, 
			'gutentag' . '_portfolio_project_cat' => 			1, 
			'gutentag' . '_portfolio_project_author' => 		1, 
			'gutentag' . '_portfolio_project_comment' => 		0, 
			'gutentag' . '_portfolio_project_tag' => 			0, 
			'gutentag' . '_portfolio_project_like' => 			1, 
			'gutentag' . '_portfolio_project_link' => 			0, 
			'gutentag' . '_portfolio_project_share_box' => 		1, 
			'gutentag' . '_portfolio_project_nav_box' => 		1, 
			'gutentag' . '_portfolio_project_nav_order_cat' => 	0, 
			'gutentag' . '_portfolio_project_author_box' => 	1, 
			'gutentag' . '_portfolio_more_projects_box' => 		'popular', 
			'gutentag' . '_portfolio_more_projects_count' => 	'4', 
			'gutentag' . '_portfolio_more_projects_pause' => 	'5', 
			'gutentag' . '_portfolio_project_slug' => 			'project', 
			'gutentag' . '_portfolio_pj_categs_slug' => 		'pj-categs', 
			'gutentag' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'gutentag' . '_profile_post_title' => 			1, 
			'gutentag' . '_profile_post_details_title' => 	esc_html__('Profile details', 'gutentag'), 
			'gutentag' . '_profile_post_cat' => 			1, 
			'gutentag' . '_profile_post_comment' => 		1, 
			'gutentag' . '_profile_post_like' => 			1, 
			'gutentag' . '_profile_post_nav_box' => 		1, 
			'gutentag' . '_profile_post_nav_order_cat' => 	0, 
			'gutentag' . '_profile_post_share_box' => 		1, 
			'gutentag' . '_profile_post_slug' => 			'profile', 
			'gutentag' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	$settings = apply_filters('gutentag_settings_single_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('gutentag_project_puzzle_proportion')) {

function gutentag_project_puzzle_proportion() {
	return 1;
}

}


/* Project Puzzle Proportion */
if (!function_exists('gutentag_project_puzzle_large_gar_parameters')) {

function gutentag_project_puzzle_large_gar_parameters() {
	$parameter = array ( 
		'container_width' 		=> 1160, 
		'bottomStaticPadding' 	=> 2 
	);
	
	
	return $parameter;
}

}


/* Theme Image Thumbnails Size */
if (!function_exists('gutentag_get_image_thumbnail_list')) {

function gutentag_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		60, 
			'height' => 	60, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		300, 
			'height' => 	300, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'gutentag') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	375, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'gutentag') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	390, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project', 'gutentag') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Project', 'gutentag') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	480, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'gutentag') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'gutentag') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	750, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'gutentag') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	648, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Full', 'gutentag') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'gutentag') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('gutentag_project_labels')) {

function gutentag_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'gutentag'), 
		'singular_name' => 			esc_html__('Project', 'gutentag'), 
		'menu_name' => 				esc_html__('Projects', 'gutentag'), 
		'all_items' => 				esc_html__('All Projects', 'gutentag'), 
		'add_new' => 				esc_html__('Add New', 'gutentag'), 
		'add_new_item' => 			esc_html__('Add New Project', 'gutentag'), 
		'edit_item' => 				esc_html__('Edit Project', 'gutentag'), 
		'new_item' => 				esc_html__('New Project', 'gutentag'), 
		'view_item' => 				esc_html__('View Project', 'gutentag'), 
		'search_items' => 			esc_html__('Search Projects', 'gutentag'), 
		'not_found' => 				esc_html__('No projects found', 'gutentag'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'gutentag') 
	);
}

}

// add_filter('cmsmasters_project_labels_filter', 'gutentag_project_labels');


if (!function_exists('gutentag_pj_categs_labels')) {

function gutentag_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'gutentag'), 
		'singular_name' => 			esc_html__('Project Category', 'gutentag') 
	);
}

}

// add_filter('cmsmasters_pj_categs_labels_filter', 'gutentag_pj_categs_labels');


if (!function_exists('gutentag_pj_tags_labels')) {

function gutentag_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'gutentag'), 
		'singular_name' => 			esc_html__('Project Tag', 'gutentag') 
	);
}

}

// add_filter('cmsmasters_pj_tags_labels_filter', 'gutentag_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('gutentag_profile_labels')) {

function gutentag_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'gutentag'), 
		'singular_name' => 			esc_html__('Profiles', 'gutentag'), 
		'menu_name' => 				esc_html__('Profiles', 'gutentag'), 
		'all_items' => 				esc_html__('All Profiles', 'gutentag'), 
		'add_new' => 				esc_html__('Add New', 'gutentag'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'gutentag'), 
		'edit_item' => 				esc_html__('Edit Profile', 'gutentag'), 
		'new_item' => 				esc_html__('New Profile', 'gutentag'), 
		'view_item' => 				esc_html__('View Profile', 'gutentag'), 
		'search_items' => 			esc_html__('Search Profiles', 'gutentag'), 
		'not_found' => 				esc_html__('No Profiles found', 'gutentag'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'gutentag') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'gutentag_profile_labels');


if (!function_exists('gutentag_pl_categs_labels')) {

function gutentag_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'gutentag'), 
		'singular_name' => 			esc_html__('Profile Category', 'gutentag') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'gutentag_pl_categs_labels');

