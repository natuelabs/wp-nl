<?php
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * Visual Portfolio Colors Rules
 * Created by CMSMasters
 * 
 */


function gutentag_woocommerce_colors($custom_css) {
	$cmsmasters_option = gutentag_get_global_options();
		
		
		$custom_css .= "
/***************** Start Visual Portfolio Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	.vp-portfolio__items-style-fly .vp-portfolio__item-overlay,
	.vp-portfolio__items-style-fade .vp-portfolio__item-overlay,
	.vp-portfolio__items-style-fade .vp-portfolio__item-overlay .vp-portfolio__item-meta {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	.required, 
	.cmsmasters_star_rating .cmsmasters_star_color_wrap, 
	.comment-form-rating .stars > span a:hover, 
	.comment-form-rating .stars > span a.active, 
	#page .remove:hover, 
	.cmsmasters_product .price ins, 
	.cmsmasters_single_product .price ins, 
	.shop_table thead th, 
	.shop_table a:not(.button):hover, 
	.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal th, 
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal td, 
	.shop_table.woocommerce-checkout-review-order-table .product-name strong, 
	.shop_table.order_details tfoot tr:last-child th, 
	.shop_table.order_details tfoot tr:last-child td, 
	.shop_table.order_details .product-name strong, 
	.shop_table.order_details tfoot tr:first-child th, 
	.shop_table.order_details tfoot tr:first-child td, 
	.widget_layered_nav ul li a:hover, 
	.widget_layered_nav ul li.chosen a, 
	.widget_layered_nav_filters ul li a:hover, 
	.widget_layered_nav_filters ul li.chosen a, 
	.widget_product_categories ul li a:hover, 
	.widget_product_categories ul li.current-cat a, 
	.widget > .product_list_widget a:hover, 
	.widget > .product_list_widget ins .amount, 
	.widget_shopping_cart .cart_list a:hover, 
	.widget_shopping_cart .cart_list .quantity, 
	.woocommerce-store-notice .woocommerce-store-notice__dismiss-link {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_link']) . "
	}
	
	.input-checkbox + label:after, 
	.input-radio + label:after, 
	input.shipping_method + label:after, 
	.onsale, 
	ul.order_details li, 
	.widget_price_filter .ui-slider-handle, 
	.woocommerce-store-notice {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_link']) . "
	}
	
	.select2-container.select2-container-active .select2-choice, 
	.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	.select2-drop.select2-drop-active, 
	.select2-drop.select2-drop-above.select2-drop-active,
	.select2-container.select2-container--open .select2-selection--single,
	.select2-container.select2-container--focus .select2-selection--single {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta-title a:hover,
	.vp-portfolio__items-style-fly.swiper-wrapper .vp-portfolio__item-meta-title:hover,
	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta-date,
	.vp-portfolio__items-style-fly .vp-portfolio__item-meta-date,
	.vp-portfolio__items-style-fade .vp-portfolio__item-meta-date,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span a:hover,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-date,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-title a:hover,
	.vp-portfolio[data-vp-layout=tiles] .vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-read-more:hover,
	.vp-portfolio__pagination-wrap .vp-pagination.vp-pagination__style-default .vp-pagination__item.vp-pagination__item-active,
	.vp-portfolio__pagination-wrap .vp-pagination.vp-pagination__style-default .vp-pagination__item.vp-pagination__item-active a,
	.vp-portfolio__pagination-wrap .vp-pagination.vp-pagination__style-default .vp-pagination__item:hover,
	.vp-portfolio__pagination-wrap .vp-pagination.vp-pagination__style-default .vp-pagination__item a:hover,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-read-more:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	[data-vp-layout=slider] .vp-portfolio__items-arrow svg,
	.cmsmasters_vp_portfolio_noimage,
	.cmsmasters_vp_portfolio_noimage:before,
	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta a,
	.vp-portfolio__items-style-fly .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category,
	.vp-portfolio__items-style-fade .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category a, 
	.vp-portfolio__items-style-fade .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category a:hover, 
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span a,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_footer > span,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span.cmsmasters_portfolio_category a:hover,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span.cmsmasters_portfolio_category span,
	.vp-portfolio[data-vp-layout=tiles] .vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-read-more,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-categories a,
	.vp-portfolio[data-vp-layout=tiles] .vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .cmsmasters_portfolio_categories_data_wrap .vp-portfolio__item-meta-categories li a,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-read-more,
	.vp-portfolio__pagination-wrap .vp-pagination .vp-pagination__item.vp-pagination__item-next, 
	.vp-portfolio__pagination-wrap .vp-pagination .vp-pagination__item.vp-pagination__item-prev,
	.vp-portfolio__filter-wrap .vp-filter .vp-filter__item,
	.vp-portfolio__filter-wrap .vp-filter .vp-filter__item a,
	.vp-portfolio__filter-wrap .vp-filter .vp-filter__item:hover,
	.vp-portfolio__filter-wrap .vp-filter .vp-filter__item a:hover,
	.vp-portfolio__pagination-wrap .vp-pagination.vp-pagination__style-default .vp-pagination__item,
	.vp-portfolio__pagination-wrap .vp-pagination.vp-pagination__style-default .vp-pagination__item a {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_heading']) . "
	}
	
	.vp-portfolio__items-style-fly .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category,
	.vp-portfolio__items-style-fade .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category,
	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category a:hover,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span.cmsmasters_portfolio_category a:hover,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-categories a,
	.vp-portfolio[data-vp-layout=tiles] .vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .cmsmasters_portfolio_categories_data_wrap .vp-portfolio__item-meta-categories li a:hover,
	.vp-portfolio__pagination-wrap .vp-pagination .vp-pagination__item.vp-pagination__item-next:hover, 
	.vp-portfolio__pagination-wrap .vp-pagination .vp-pagination__item.vp-pagination__item-prev:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	.woocommerce-store-notice, 
	.woocommerce-store-notice p a, 
	.woocommerce-store-notice p a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span.cmsmasters_portfolio_category a:hover,
	[data-vp-layout=slider] .vp-portfolio__items-arrow:hover,
	.vp-portfolio[data-vp-layout=tiles] .vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay,
	.vp-portfolio[data-vp-layout=tiles] .vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .cmsmasters_portfolio_categories_data_wrap .vp-portfolio__item-meta-categories li a:hover,
	.vp-portfolio__pagination-wrap .vp-pagination .vp-pagination__item.vp-pagination__item-next:hover, 
	.vp-portfolio__pagination-wrap .vp-pagination .vp-pagination__item.vp-pagination__item-prev:hover,
	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category a:hover  {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	.vp-portfolio__items-style-fly.swiper-wrapper .vp-portfolio__item-img-wrap .vp-portfolio__item-img .cmsmasters_vp_portfolio_noimage,
	.cmsmasters_vp_portfolio_noimage,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay,
	.vp-portfolio__filter-wrap .vp-filter .vp-filter__item,
	.vp-portfolio__items-style-fly.swiper-wrapper .vp-portfolio__item-meta,
	.vp-portfolio__items-style-fly .vp-portfolio__item-overlay,
	.vp-portfolio__items-style-fade .vp-portfolio__item-overlay {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_alternate']) . "
	}

	.vp-portfolio__filter-wrap .vp-filter .vp-filter__item {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	.cmsmasters_star_rating .cmsmasters_star_trans_wrap, 
	.comment-form-rating .stars > span {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_border']) . "
	}
	
	.cmsmasters_open_portfolio .cmsmasters_portfolio_footer > span {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_border']) . "
	}
	
	.vp-portfolio[data-vp-layout=tiles] .vp-portfolio__items .vp-portfolio__item-wrap {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_border']) . "
	}
	/* Finish Borders Color */


	/* Start Secondary Color */
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span.cmsmasters_portfolio_category a,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span.cmsmasters_portfolio_category span,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-categories a:hover,
	.vp-portfolio[data-vp-layout=tiles] .vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .cmsmasters_portfolio_categories_data_wrap .vp-portfolio__item-meta-categories li a,
	.vp-portfolio__pagination-wrap .vp-pagination .vp-pagination__item.vp-pagination__item-next, 
	.vp-portfolio__pagination-wrap .vp-pagination .vp-pagination__item.vp-pagination__item-prev,
	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category a,
	.vp-portfolio__items-style-fly.swiper-wrapper .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category:hover,
	[data-vp-layout='slider'] .vp-portfolio__items-bullets>span.swiper-pagination-bullet-active,
	.vp-portfolio__filter-wrap .vp-filter .vp-filter__item:hover,
	[data-vp-layout=slider] .vp-portfolio__items-arrow,
	.vp-portfolio__filter-wrap .vp-filter .vp-filter__item.vp-filter__item-active {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_secondary']) . "
	}

	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span.cmsmasters_portfolio_category a,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span.cmsmasters_portfolio_category span,
	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category a,
	.vp-portfolio__items-style-fly.swiper-wrapper .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category:hover,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-categories a:hover,
	.vp-portfolio[data-vp-layout=tiles] .vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .cmsmasters_portfolio_categories_data_wrap .vp-portfolio__item-meta-categories li a,
	.vp-portfolio__pagination-wrap .vp-pagination .vp-pagination__item.vp-pagination__item-next, 
	.vp-portfolio__pagination-wrap .vp-pagination .vp-pagination__item.vp-pagination__item-prev {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_secondary']) . "
	}
	/* Finish Secondary Color */

/***************** Finish Visual Portfolio Color Scheme Rules ******************/

";
	
	
	return $custom_css;
}

add_filter('gutentag_theme_colors_secondary_filter', 'gutentag_woocommerce_colors');

