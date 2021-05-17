<?php 
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function gutentag_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'gutentag');
	

	$tabs['icon'] = esc_attr__('Social Icons', 'gutentag');
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'gutentag');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'gutentag');
	$tabs['error'] = esc_attr__('404', 'gutentag');
	$tabs['code'] = esc_attr__('Custom Codes', 'gutentag');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'gutentag');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function gutentag_options_element_sections() {
	$tab = gutentag_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'gutentag');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'gutentag');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'gutentag');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'gutentag');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'gutentag');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'gutentag');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'gutentag');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function gutentag_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = gutentag_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = gutentag_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'gutentag' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'gutentag'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['gutentag' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'gutentag' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'gutentag'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['gutentag' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'gutentag'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'gutentag') . '|dark', 
				esc_html__('Light', 'gutentag') . '|light', 
				esc_html__('Mac', 'gutentag') . '|mac', 
				esc_html__('Metro Black', 'gutentag') . '|metro-black', 
				esc_html__('Metro White', 'gutentag') . '|metro-white', 
				esc_html__('Parade', 'gutentag') . '|parade', 
				esc_html__('Smooth', 'gutentag') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'gutentag'), 
			'desc' => esc_html__('Sets path for switching windows', 'gutentag'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'gutentag') . '|vertical', 
				esc_html__('Horizontal', 'gutentag') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'gutentag'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'gutentag'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'gutentag'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'gutentag'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'gutentag'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'gutentag'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'gutentag'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'gutentag'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'gutentag'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'gutentag'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'gutentag'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'gutentag'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'gutentag') . '|center', 
				esc_html__('Fit', 'gutentag') . '|fit', 
				esc_html__('Fill', 'gutentag') . '|fill', 
				esc_html__('Stretch', 'gutentag') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'gutentag'), 
			'desc' => esc_html__('Sets buttons be available or not', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'gutentag'), 
			'desc' => esc_html__('Enable the arrow buttons', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'gutentag'), 
			'desc' => esc_html__('Sets the fullscreen button', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'gutentag'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'gutentag'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'gutentag'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'gutentag'), 
			'desc' => esc_html__('Sets the swipe navigation', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'gutentag' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'gutentag'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'gutentag' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'gutentag' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'gutentag' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'gutentag' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'gutentag' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'gutentag' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'gutentag' . '_error_color', 
			'title' => esc_html__('Text Color', 'gutentag'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['gutentag' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'gutentag' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'gutentag'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['gutentag' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'gutentag' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'gutentag' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'gutentag'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'gutentag'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['gutentag' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'gutentag' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'gutentag') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'gutentag') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'gutentag') . '|repeat-y', 
				esc_html__('Repeat', 'gutentag') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'gutentag' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'gutentag'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['gutentag' . '_error_bg_pos'], 
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
			'section' => 'error_section', 
			'id' => 'gutentag' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'gutentag') . '|scroll', 
				esc_html__('Fixed', 'gutentag') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'gutentag' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['gutentag' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'gutentag') . '|auto', 
				esc_html__('Cover', 'gutentag') . '|cover', 
				esc_html__('Contain', 'gutentag') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'gutentag' . '_error_search', 
			'title' => esc_html__('Search Line', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'gutentag' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'gutentag' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'gutentag'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['gutentag' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'gutentag' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'gutentag'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['gutentag' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'gutentag' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'gutentag'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['gutentag' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'gutentag' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'gutentag'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['gutentag' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'gutentag' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'gutentag'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['gutentag' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

