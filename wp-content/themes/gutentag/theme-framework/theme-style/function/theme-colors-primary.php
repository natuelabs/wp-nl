<?php
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function gutentag_theme_colors_primary() {
	$cmsmasters_option = gutentag_get_global_options();
	
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
		
		
	$custom_css .= "

	/* Start Main Content Font Color */
	input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	textarea,
	select,
	option {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_color']) . "
	}
	
	input::-webkit-input-placeholder,
	textarea::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_color']) . "
	}
	
	input:-moz-placeholder,
	textarea:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	a,
	h1 a:hover,
	h2 a:hover,
	h3 a:hover,
	h4 a:hover,
	h5 a:hover,
	h6 a:hover,
	.color_2,
	.cmsmasters_dropcap.type1,
	.cmsmasters_icon_wrap a .cmsmasters_simple_icon,
	.cmsmasters_wrap_more_items.cmsmasters_loading:before,
	.cmsmasters_header_search_form button:hover, 
	.cmsmasters_icon_box.cmsmasters_icon_top:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left .icon_box_heading:before,
	.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:before,
	.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before, 
	.bypostauthor > .comment-body .alignleft:before,
	.widget_custom_contact_info_entries > span:before,
	.widget_custom_contact_info_entries .adress_wrap:before,
	.widget_custom_contact_info_entries span a:hover,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a:hover,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a:hover,
	.cmsmasters_archive_type .cmsmasters_archive_item_cont_wrap .cmsmasters_archive_item_link a:hover,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a:hover,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a:hover,
	.headline_outer .headline_inner .headline_icon:before,
	#wp-calendar td a:hover, 
	#wp-calendar th a:hover,
	.widget_tag_cloud a:hover,
	.share_posts a:hover,
	#wp-calendar tbody td a:hover,
	.widget_recent_comments ul li a.url:hover,
	.cmsmasters_attach_img .cmsmasters_attach_img_edit a, 
	.cmsmasters_attach_img .cmsmasters_attach_img_meta a {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_link']) . "
	}

	.footer_nav > li > a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_footer_link']) . "
	}
	
	.cmsmasters_dropcap.type2,
	.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon,
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:after, 
	.cmsmasters-form-builder .check_parent input[type=checkbox] + label:after, 
	.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:after, 
	.cmsmasters-form-builder .check_parent input[type=radio] + label:after, 
	#slide_top:hover,
	#page .cmsmasters_social_icon {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_link']) . "
	}
	
	select:focus,
	.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:after, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus,
	textarea:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	a:hover,
	a.cmsmasters_cat_color:hover,
	.wp-block-image figcaption a:hover,
	.cmsmasters_wrap_pagination ul li a:hover,
	.cmsmasters_icon_wrap a:hover .cmsmasters_simple_icon,
	.cmsmasters_header_search_form .cmsmasters_header_search_form_close:hover,
	.cmsmasters_attach_img .cmsmasters_attach_img_edit a:hover, 
	.cmsmasters_attach_img .cmsmasters_attach_img_meta a:hover,
	.post_nav > span.cmsmasters_next_post:hover a,
	.post_nav > span.cmsmasters_prev_post:hover a,
	.cmsmasters_archive_type .cmsmasters_archive_item_info > span a:hover,
	.cmsmasters_wrap_pagination ul li span,
	.cmsmasters_comment_item .cmsmasters_comment_item_date,
	.headline_outer .headline_inner .headline_text .entry-subtitle,
	.widget_pages ul li, 
	.widget_categories ul li, 
	.widget_archive ul li, 
	.widget_meta ul li,
	.widget_recent_comments ul li, 
	.widget_recent_entries ul li,
	.widget_nav_menu .menu > li,
	.widget_recent_comments ul li a.url,
	.widget_pages ul li a:hover, 
	.widget_categories ul li a:hover, 
	.widget_archive ul li a:hover, 
	.widget_meta ul li a:hover,  
	.widget_recent_comments ul li a:hover, 
	.widget_recent_entries ul li a:hover, 
	.widget_nav_menu .menu ul a:hover,
	.widget_nav_menu .menu > li > a:hover,
	.cmsmasters_footer_default .footer_copyright a:hover, 
	.cmsmasters_footer_small .footer_copyright a:hover,
	#wp-calendar td, 
	#wp-calendar th,
	.search_bar_wrap .search_button button:hover,
	.widget_rss ul li .rss-date,
	.widget_custom_contact_info_entries span,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span,
	.cmsmasters_archive_type .cmsmasters_archive_item_info > span,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner span,
	.cmsmasters_post_default .cmsmasters_post_cont_info > span.cmsmasters_post_author a:hover,
	.cmsmasters_post_default .cmsmasters_post_date,
	.cmsmasters_post_default .cmsmasters_post_header .cmsmasters_post_title a:hover,
	.cmsmasters_post_default .cmsmasters_post_read_more:hover,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a:hover,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > .published,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab li,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab li .color_2,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab li a:hover,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span a:hover,
	#wp-calendar caption,
	div.subpage_nav > span, 
	div.subpage_nav > a:hover,
	.subpage_nav > span {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_hover']) . "
	}
	
	#page .cmsmasters_social_icon:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	h1 a,
	h2 a,
	h3 a,
	h4 a,
	h5 a,
	h6 a,
	fieldset legend,
	blockquote footer,
	.wp-block-image figcaption,
	.wp-block-image figcaption a,
	table caption,
	.img_placeholder_small, 
	.cmsmasters_header_search_form button, 
	.cmsmasters_header_search_form .cmsmasters_header_search_form_close,
	.comment-respond .comment-reply-title small a:hover,
	.cmsmasters_post_default .cmsmasters_post_cont_info > span.cmsmasters_post_category a,
	.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_title_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	.cmsmasters_post_default .cmsmasters_post_read_more,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > ul li a:before,
	.cmsmasters_archive_type .cmsmasters_archive_item_cont_wrap .cmsmasters_archive_item_link a,
	.cmsmasters_wrap_pagination ul li a,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span a,
	.cmsmasters_open_post .cmsmasters_post_footer > span a,
	.cmsmasters_archive_type .cmsmasters_archive_item_info > span a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a:hover,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item.current_tab a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a,
	.post_nav > span.cmsmasters_next_post a,
	.post_nav > span.cmsmasters_prev_post a,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner span.breadcrumbs_sep,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span.cmsmasters_post_category a:hover,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span.cmsmasters_post_category span,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_category a:hover,
	.cmsmasters_post_default .cmsmasters_post_cont_info > span.cmsmasters_post_author a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab li a,
	div.subpage_nav > a,
	button,
	.button,
	input[type=submit], 
	input[type=button], 
	.widget_custom_contact_info_entries span a,
	.ghostkit-button,
	.kt-button,
	.wp-block-button .wp-block-button__link:hover,
	button:hover,
	.button:hover,
	.ghostkit-button:hover,
	.kt-button:hover,
	input[type=submit]:hover, 
	input[type=button]:hover, 
	.share_posts a,
	.widget_pages ul li a, 
	.widget_categories ul li a, 
	.widget_archive ul li a, 
	.widget_meta ul li a, 
	.widget_recent_comments ul li a, 
	.widget_recent_entries ul li a,
	.widget_nav_menu .menu ul a,
	.widget_nav_menu .menu > li > a,
	#wp-calendar td a, 
	#wp-calendar th a,
	.ghostkit-tabs .ghostkit-tabs-buttons>.ghostkit-tabs-buttons-item,
	.wp-block-kadence-tabs .kt-tabs-title-list > .kt-title-item a,
	.cmsmasters_wrap_pagination ul li .page-numbers.next span, 
	.cmsmasters_wrap_pagination ul li .page-numbers.prev span,
	.ghostkit-carousel .ghostkit-carousel-arrow-prev svg,
	.ghostkit-carousel .ghostkit-carousel-arrow-next svg,
	#wp-calendar tbody td a,
	.wp-block-file a.wp-block-file__button:hover,
	.wp-block-file a.wp-block-file__button,
	.footer_inner a,
	.widget_tag_cloud a,
	.wp-block-button__link:not(.has-background), 
	.ghostkit-accordion .ghostkit-accordion-item.ghostkit-accordion-item-active .ghostkit-accordion-item-collapse svg,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > ul li a:before,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li a:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_heading']) . "
	}

	.footer_nav > li > a {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_footer_heading']) . "
	}

	.cmsmasters_header_search_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_heading']) . "
	}
	
	.cmsmasters_header_search_form input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_heading']) . "
	}
	
	.cmsmasters_header_search_form input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_heading']) . "
	}
	
	.cmsmasters_icon_list_items .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	form .formError .formErrorContent {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_heading']) . "
	}

	.cmsmasters_open_post .cmsmasters_post_cont_info > span.cmsmasters_post_category a:hover,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_category a:hover,
	.wp-block-button .wp-block-button__link:hover,
	.button:hover, 
	.cmsmasters_wrap_pagination ul li .page-numbers.next:hover, 
	.cmsmasters_wrap_pagination ul li .page-numbers.prev:hover,
	.ghostkit-carousel .ghostkit-carousel-arrow-next:hover,
	.ghostkit-carousel .ghostkit-carousel-arrow-prev:hover,
	.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_post_category a:hover,
	input[type=submit]:hover, 
	.ghostkit-button:hover,
	.kt-button:hover,
	input[type=button]:hover, 
	.wp-block-file .wp-block-file__button:hover,
	.wp-block-button.is-style-outline a.wp-block-button__link,
	.wp-block-button.is-style-outline a.wp-block-button__link:not(.has-background),
	button:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_heading']) . "
	}

	#slide_top {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['gutentag_default_heading']) . ", .2);
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	mark,
	#slide_top,
	form .formError .formErrorContent,
	.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	
	input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	textarea,
	select,
	.wp-block-button .wp-block-button__link:hover,
	.wp-block-image figcaption,
	.button:hover, 
	input[type=submit]:hover, 
	.ghostkit-button:hover,
	.kt-button:hover,
	input[type=button]:hover, 
	button:hover,
	.ghostkit-testimonial .ghostkit-testimonial-content,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span.cmsmasters_post_category a:hover,
	.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_post_category a:hover,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_category a:hover,
	.ghostkit-carousel .ghostkit-carousel-arrow-next:hover,
	.ghostkit-carousel .ghostkit-carousel-arrow-prev:hover,
	.wp-block-file .wp-block-file__button:hover,
	.cmsmasters_header_search_form, 
	.cmsmasters_wrap_pagination ul li .page-numbers.next:hover, 
	.cmsmasters_wrap_pagination ul li .page-numbers.prev:hover,
	option {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	.cmsmasters_dropcap.type2,
	.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon_wrap, 
	.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	#page .cmsmasters_social_icon {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_alternate']) . "
	}
	
	fieldset,
	fieldset legend,
	.img_placeholder_small, 
	.cmsmasters_featured_block,
	.cmsmasters_icon_box.cmsmasters_icon_box_top,
	.cmsmasters_icon_box.cmsmasters_icon_box_left,
	.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	.gallery-item .gallery-icon,
	.gallery-item .gallery-caption,
	.cmsmasters_img.with_caption,
	#wp-calendar thead,
	#wp-calendar tbody,
	#wp-calendar tfoot,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_inner, 
	.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	.cmsmasters_open_post .cmsmasters_post_footer > span a,
	.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	.comment-respond .comment-reply-title small a,
	.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_sticky_block,
	.cmsmasters-form-builder .check_parent input[type=radio] + label:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_alternate']) . "
	}

	.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_sticky_block {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	.ghostkit-accordion .ghostkit-accordion-item .ghostkit-accordion-item-collapse svg {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_border']) . "
	}

	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li:before,
	.post_nav:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_border']) . "
	}
	
	.cmsmasters_attach_img .cmsmasters_attach_img_info, 
	input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	textarea,
	option,
	hr,
	.cmsmasters_divider,
	.share_posts,
	.cmsmasters_widget_divider,
	.cmsmasters_img.with_caption,
	.cmsmasters_icon_wrap .cmsmasters_simple_icon, 
	.cmsmasters_icon_box.cmsmasters_icon_box_top,
	.cmsmasters_icon_box.cmsmasters_icon_box_left,
	.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item,
	.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_icon:after,
	.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:after, 
	.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	.post_nav > span.cmsmasters_prev_post,
	.post_nav > span.cmsmasters_next_post,
	.cmsmasters_search > .about_author, 
	.cmsmasters_archive > .about_author,
	.cmsmasters_archive_type,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li,
	.widget_archive ul li,
	.widget_categories ul li,
	.widget_pages ul li a,
	.widget_meta ul li,
	.widget_recent_comments ul li,
	.widget_nav_menu .menu > li > a,
	.widget_rss ul li,
	.widget_recent_entries ul li,
	.widget_nav_menu .menu ul a,
	table td,
	table.wp-block-table td,
	.widget_categories ul li .children,
	.cmsmasters_single_slider,
	.about_author,
	table:not([class]):not([id]) th, 
	table:not([class]):not([id]) td,
	.ghostkit-tabs .ghostkit-tabs-content,
	.ghostkit-testimonial,
	.cmsmasters_pings_list .pingslist .pingback,
	.cmsmasters_post_default,
	.wp-block-code,
	.post_nav,
	select,
	#wp-calendar thead th,
	.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	.cmsmasters-form-builder .check_parent input[type=radio] + label:before {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_border']) . "
	}
	/* Finish Borders Color */


	/* Start Secondary Color */
	blockquote.wp-block-quote.is-style-large:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_secondary']) . "
	}

	ul li:before,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span.cmsmasters_post_category a,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span.cmsmasters_post_category span,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_category a,
	.about_author .about_author_title:after,
	.cmsmasters_single_slider .cmsmasters_single_slider_title:after,
	.post_comments .post_comments_title:after,
	.comment-respond .comment-reply-title:after,
	.comment-respond .comment-reply-title small a:hover,
	.post_nav > span.cmsmasters_prev_post:hover > span,
	.post_nav > span.cmsmasters_next_post:hover > span,
	.widget .widgettitle:after,
	blockquote:before,
	.wp-block-button.is-style-outline .wp-block-button__link:hover,
	.button, 
	.owl-buttons > div:hover, 
	input[type=submit], 
	input[type=button], 
	.ghostkit-button,
	.kt-button,
	.ghostkit-carousel .ghostkit-carousel-arrow-next,
	.ghostkit-carousel .ghostkit-carousel-arrow-prev,
	.cmsmasters_wrap_pagination ul li .page-numbers.next, 
	.cmsmasters_wrap_pagination ul li .page-numbers.prev,
	.ghostkit-counter-box .ghostkit-counter-box-number:after,
	.ghostkit-tabs .ghostkit-tabs-buttons > .ghostkit-tabs-buttons-item:after,
	.wp-block-kadence-tabs .kt-tabs-title-list > .kt-title-item a:after,
	.cmsmasters_post_default .cmsmasters_post_cont_info > span.cmsmasters_post_category a,
	.ghostkit-accordion .ghostkit-accordion-item-heading .ghostkit-accordion-item-label:after,
	.content_wrap .content ul li:before,
	.wp-block-button__link:not(.has-background),
	.wp-block-file a.wp-block-file__button,
	.wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):hover,
	button,
	.cmsmasters_open_post .cmsmasters_post_footer > span a:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_secondary']) . "
	}

	.cmsmasters_open_post .cmsmasters_post_cont_info > span.cmsmasters_post_category a,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span.cmsmasters_post_category span,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_category a,
	.post_nav > span.cmsmasters_prev_post:hover > span,
	.button, 
	.owl-buttons > div:hover, 
	.ghostkit-button,
	.kt-button,
	input[type=submit], 
	input[type=button], 
	.ghostkit-carousel .ghostkit-carousel-arrow-next,
	.ghostkit-carousel .ghostkit-carousel-arrow-prev,
	.cmsmasters_wrap_pagination ul li .page-numbers.next, 
	.cmsmasters_wrap_pagination ul li .page-numbers.prev,
	.cmsmasters_post_default .cmsmasters_post_cont_info > span.cmsmasters_post_category a,
	.wp-block-pullquote blockquote,
	.wp-block-file a.wp-block-file__button,
	button,
	.post_nav > span.cmsmasters_next_post:hover > span {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_secondary']) . "
	}
	/* Finish Secondary Color */
	
	
	/* Start Custom Rules */
	::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . ";
	}
	
	::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	";
	
	
	
	$custom_css .= "
	/* Finish Custom Rules */
	
	.cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_link']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_bg_hover:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	
	
	.cmsmasters_button.cmsmasters_but_bd_underline {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_link']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_bd_underline:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_link']) . "
	}
	
	
	.cmsmasters_button.cmsmasters_but_bg_slide_left, 
	.cmsmasters_button.cmsmasters_but_bg_slide_right, 
	.cmsmasters_button.cmsmasters_but_bg_slide_top, 
	.cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	.cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	.cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	.cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_link']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_bg_slide_left:hover, 
	.cmsmasters_button.cmsmasters_but_bg_slide_right:hover, 
	.cmsmasters_button.cmsmasters_but_bg_slide_top:hover, 
	.cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, 
	.cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, 
	.cmsmasters_button.cm.sms_but_bg_expand_hor:hover, 
	.cmsmasters_button.cmsmasters_but_bg_expand_diag:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_bg_slide_left:after, 
	.cmsmasters_button.cmsmasters_but_bg_slide_right:after, 
	.cmsmasters_button.cmsmasters_but_bg_slide_top:after, 
	.cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, 
	.cmsmasters_button.cmsmasters_but_bg_expand_vert:after, 
	.cmsmasters_button.cmsmasters_but_bg_expand_hor:after, 
	.cmsmasters_button.cmsmasters_but_bg_expand_diag:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_link']) . "
	}
	
	
	.cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_shadow:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:hover, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:hover, 
	.cmsmasters_button.cmsmasters_but_icon_divider:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_icon_divider:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_link']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_icon_inverse:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_link']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_icon_inverse:hover:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_icon_inverse:hover:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_link']) . "
	}
	
	
	.cmsmasters_button.cmsmasters_but_icon_slide_left, 
	.cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_link']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_icon_slide_left:hover, 
	.cmsmasters_button.cmsmasters_but_icon_slide_right:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	
	
	.cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	.cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	.cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . "
	}
	
	.cmsmasters_button.cmsmasters_but_icon_hover_slide_left:hover, 
	.cmsmasters_button.cmsmasters_but_icon_hover_slide_right:hover, 
	.cmsmasters_button.cmsmasters_but_icon_hover_slide_top:hover, 
	.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag_default_bg']) . "
	}


";
	
	
	return apply_filters('gutentag_theme_colors_primary_filter', $custom_css);
}

