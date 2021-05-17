<?php
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


require_once(get_template_directory() . '/framework/class/class-tgm-plugin-activation.php');


if (!function_exists('gutentag_register_theme_plugins')) {

function gutentag_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'gutentag'), 
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.9', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Importer', 'gutentag'), 
			'slug'					=> 'cmsmasters-importer', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-importer.zip', 
			'required'				=> true, 
			'version'				=> '1.0.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Custom Fonts', 'gutentag'), 
			'slug'					=> 'cmsmasters-custom-fonts', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-custom-fonts.zip', 
			'required'				=> true, 
			'version'				=> '1.0.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'gutentag'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '6.8.2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'gutentag'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '5.4.8.3', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('Envato Market', 'gutentag'), 
			'slug'					=> 'envato-market', 
			'source'				=> 'https://envato.github.io/wp-envato-market/dist/envato-market.zip', 
			'required'				=> false 
		),
		array( 
			'name'					=> esc_html__('Advanced WordPress Backgrounds', 'gutentag'), 
			'slug'					=> 'advanced-backgrounds', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('GhostKit', 'gutentag'), 
			'slug'					=> 'ghostkit', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('Visual Portfolio', 'gutentag'), 
			'slug'					=> 'visual-portfolio', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('Kadence Blocks - Gutenberg Page Builder Toolkit', 'gutentag'), 
			'slug'					=> 'kadence-blocks', 
			'required'				=> false 
		),  
		array( 
			'name'					=> esc_html__('GDPR Cookie Consent', 'gutentag'), 
			'slug'					=> 'cookie-law-info', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('Instagram Feed', 'gutentag'), 
			'slug'					=> 'instagram-feed', 
			'required'				=> false 
 		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'gutentag'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WordPress SEO by Yoast', 'gutentag'), 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		), 
		array( 
			'name'					=> esc_html__('MailPoet 3', 'gutentag'), 
			'slug'					=> 'mailpoet', 
			'required'				=> false 
		) 
	);
	
	
	$config = array( 
		'id' => 			'gutentag', 
		'menu' => 			'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	esc_html__('Theme Required & Recommended Plugins', 'gutentag'), 
			'menu_title' => 	esc_html__('Theme Plugins', 'gutentag'), 
			'return' => 		esc_html__('Return to Theme Required & Recommended Plugins', 'gutentag') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'gutentag_register_theme_plugins');

