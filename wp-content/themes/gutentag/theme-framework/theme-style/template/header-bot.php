<?php 
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version		1.0.0
 * 
 * Header Bottom Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = gutentag_get_global_options();


if ($cmsmasters_option['gutentag' . '_header_styles'] != 'default') {
	echo '<div class="header_bot" data-height="' . esc_attr($cmsmasters_option['gutentag' . '_header_bot_height']) . '">' . 
		'<div class="header_bot_outer">' . 
			'<div class="header_bot_inner">';
				do_action('cmsmasters_before_header_bot', $cmsmasters_option);

				
				echo '<!-- Start Navigation -->' . 
				'<div class="bot_nav_wrap">' .
					'<div class="resp_bot_nav_wrap">' . 
					'<div class="resp_bot_nav_outer">' . 
						'<a class="responsive_nav resp_bot_nav cmsmasters-icon-custom-menu" href="' . esc_js("javascript:void(0)") . '"></a>' . 
					'</div>' . 
				'</div>';

				if (
					$cmsmasters_option['gutentag' . '_header_search'] && 
					$cmsmasters_option['gutentag' . '_header_styles'] != 'default'
				) {
					echo '<div class="header_bot_search_cart_wrap"><div class="bot_search_but_wrap">' . 
						'<a href="' . esc_js("javascript:void(0)") . '" class="bot_search_but cmsmasters_header_search_but cmsmasters-icon-custom-magnifying-glass"></a>' . 
					'</div></div>';
				} 
					echo '<nav>';
						
						$nav_args = array( 
							'theme_location' => 	'primary', 
							'menu_id' => 			'navigation', 
							'menu_class' => 		'bot_nav navigation', 
							'link_before' => 		'<span class="nav_item_wrap">', 
							'link_after' => 		'</span>', 
							'fallback_cb' =>         false
						);
						
						
						if (class_exists('Walker_Cmsmasters_Nav_Mega_Menu')) {
							$nav_args['walker'] = new Walker_Cmsmasters_Nav_Mega_Menu();
						}
						
						
						wp_nav_menu($nav_args);
						
					echo '</nav>';
				echo '</div>' . 
				'<!-- Finish Navigation -->';
				
				
				do_action('cmsmasters_after_header_bot', $cmsmasters_option);
			echo '</div>' . 
		'</div>' . 
	'</div>';
}

