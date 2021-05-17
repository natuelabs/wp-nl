<?php
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function gutentag_theme_fonts() {
	$cmsmasters_option = gutentag_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body,
	.comment-respond .comment-form-cookies-consent label,
	.error .error_subtitle,
	.about_author .about_author_cont a,
	#wp-calendar td, 
	#wp-calendar th,
	#wp-calendar td a, 
	#wp-calendar th a,
	.cmsmasters_footer_default .footer_copyright,
	.cmsmasters_footer_small .footer_copyright {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_content_font_google_font']) . $cmsmasters_option['gutentag' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_icon_list_items li:before {
		line-height:" . $cmsmasters_option['gutentag' . '_content_font_line_height'] . "px;
	}

	.header_top .meta_wrap {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_content_font_font_size'] - 3) . "px;
	}

	.comment-respond .comment-form-cookies-consent label,
	.cmsmasters_footer_default .footer_copyright,
	.cmsmasters_footer_small .footer_copyright {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_content_font_font_size'] - 2) . "px;
	}

	.widget_rss ul li .rssSummary,
	.widget_rss ul li cite {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_content_font_line_height'] - 6) . "px;
	}

	#wp-calendar td, 
	#wp-calendar th,
	#wp-calendar td a, 
	#wp-calendar th a {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_content_font_font_size'] - 4) . "px;
		font-weight: 700;
	}

	.error .error_subtitle {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_content_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_content_font_line_height'] + 2) . "px;
	}
	/* Finish Content Font */


	/* Start Link Font */
	a {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_link_font_google_font']) . $cmsmasters_option['gutentag' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_link_font_text_decoration'] . ";
	}

	.cmsmasters_footer_default .footer_copyright a,
	.cmsmasters_footer_small .footer_copyright a {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_link_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_link_font_line_height'] - 2) . "px;
	}
	
	a:hover {
		text-decoration:" . $cmsmasters_option['gutentag' . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	.navigation > li > a,
	nav > div > ul > li.menu-item-mega .menu-item-mega-container > ul > li > a, 
	.top_line_nav > li > a, 
	.footer_nav > li > a {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_nav_title_font_google_font']) . $cmsmasters_option['gutentag' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_nav_title_font_text_transform'] . ";
		letter-spacing: 1px;
	}

	.top_line_nav > li > a {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_nav_title_font_font_size'] - 3) . "px;
	}

	@media only screen and (max-width: 1024px) {
		.navigation > li > a,
		nav > div > ul > li.menu-item-mega .menu-item-mega-container > ul > li > a {
			font-weight: 400;
			font-size:" . ((int) $cmsmasters_option['gutentag' . '_nav_title_font_font_size'] - 3) . "px;
		}
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	.navigation ul li a,
	.top_line_nav ul li a {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['gutentag' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_nav_dropdown_font_text_transform'] . ";
		letter-spacing: 1px;
	}

	.header_bot .bot_nav_wrap nav > div > ul li .nav_tag {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_nav_dropdown_font_font_size'] - 3) . "px;
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	.ghostkit-counter-box-number,
	.cmsmasters_header_search_form_field input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.logo .title, 
	.cmsmasters_open_post .cmsmasters_post_header .cmsmasters_post_title,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h1_font_google_font']) . $cmsmasters_option['gutentag' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_dropcap {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h1_font_google_font']) . $cmsmasters_option['gutentag' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['gutentag' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h1_font_google_font']) . $cmsmasters_option['gutentag' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['gutentag' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:36px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:20px; /* static */
	}

	.ghostkit-counter-box-number {
		line-height: initial;
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.cmsmasters_post_default .cmsmasters_post_header .cmsmasters_post_title,
	.cmsmasters_post_default .cmsmasters_post_header .cmsmasters_post_title a,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h2_font_google_font']) . $cmsmasters_option['gutentag' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h2_font_text_decoration'] . ";
	}

	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h2_font_font_size'] - 1) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h2_font_font_size'] - 1) . "px;
	}

	.headline_outer .headline_inner.align_left .headline_icon {
		padding-top:" . ((int) $cmsmasters_option['gutentag' . '_h2_font_font_size'] + 15) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-top:" . ((int) $cmsmasters_option['gutentag' . '_h2_font_font_size'] + 15) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option['gutentag' . '_h2_font_line_height'] + 15) . "px;
	}
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a,
	.about_author .about_author_title, 
	.cmsmasters_single_slider .cmsmasters_single_slider_title,
	.post_comments .post_comments_title,
	.comment-respond .comment-reply-title,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h3_font_google_font']) . $cmsmasters_option['gutentag' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h3_font_text_decoration'] . ";
		letter-spacing: 1px;
	}

	.about_author .about_author_title,
	.comment-respond .comment-reply-title,
	.cmsmasters_single_slider .cmsmasters_single_slider_title,
	.post_comments .post_comments_title {
		text-transform: uppercase;
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a, 
	.cmsmasters_wrap_pagination ul li a,
	.cmsmasters_wrap_pagination ul li .page-numbers,
	.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.share_posts .share_posts_title,
	.cmsmasters_comments_closed,
	.about_author .about_author_cont_title,
	.about_author .about_author_cont_title span,
	.headline_outer .headline_inner .headline_text .entry-subtitle,
	.cmsmasters_comment_item .cmsmasters_comment_item_title,
	.cmsmasters_comment_item .cmsmasters_comment_item_title a,
	.ghostkit-progress .ghostkit-progress-caption,
	.ghostkit-tabs .ghostkit-tabs-buttons>.ghostkit-tabs-buttons-item,
	.wp-block-kadence-tabs .kt-tabs-title-list > .kt-title-item a,
	.ghostkit-accordion .ghostkit-accordion-item-heading,
	.widget .widgettitle,
	.widget .widgettitle a,
	.subpage_nav > strong,
	div.subpage_nav > span, 
	div.subpage_nav > a,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h4_font_google_font']) . $cmsmasters_option['gutentag' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h4_font_text_decoration'] . ";
		letter-spacing: 1px;
	}
	
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat {
		padding-top:" . ((int) $cmsmasters_option['gutentag' . '_h4_font_line_height'] * 2 + 13) . "px;
	}
	
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat_container {
		height:" . ((int) $cmsmasters_option['gutentag' . '_h4_font_line_height'] * 2 + 220 + 13) . "px;
	}

	.ghostkit-accordion .ghostkit-accordion-item-heading {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h4_font_font_size'] - 2) . "px;
	}

	.ghostkit-progress .ghostkit-progress-caption {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h4_font_font_size'] - 1) . "px;
	}

	.about_author .about_author_cont_title,
	.headline_outer .headline_inner .headline_text .entry-subtitle,
	.ghostkit-tabs .ghostkit-tabs-buttons>.ghostkit-tabs-buttons-item,
	.wp-block-kadence-tabs .kt-tabs-title-list > .kt-title-item a,
	.ghostkit-accordion .ghostkit-accordion-item-heading,
	.widget .widgettitle,
	.widget .widgettitle a,
	.cmsmasters_comment_item .cmsmasters_comment_item_title,
	.cmsmasters_comment_item .cmsmasters_comment_item_title a,
	.ghostkit-progress .ghostkit-progress-caption,
	.cmsmasters_comments_closed,
	.about_author .about_author_cont_title span {
		text-transform: uppercase;
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span a,
	.cmsmasters_archive_type .cmsmasters_archive_item_info > span,
	.cmsmasters_archive_type .cmsmasters_archive_item_info > span a,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title a,
	.cmsmasters_comment_item .cmsmasters_comment_item_date,
	.post_nav > span.cmsmasters_prev_post,
	.post_nav > span.cmsmasters_prev_post a,
	.post_nav > span.cmsmasters_next_post,
	.post_nav > span.cmsmasters_next_post a,
	.comment-respond .comment-form .comment-form-author label, 
	.comment-respond .comment-form .comment-form-email label,
	.comment-respond .comment-form-comment label,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner span,
	blockquote cite,
	.widget_pages ul li a, 
	.widget_categories ul li a, 
	.wp-block-file a,
	.widget_archive ul li a, 
	.widget_meta ul li a, 
	.widget_recent_comments ul li a, 
	.widget_recent_entries ul li a,
	.widget_pages ul li, 
	.widget_categories ul li, 
	.widget_archive ul li, 
	.widget_meta ul li,
	.widget_recent_comments ul li, 
	.widget_recent_entries ul li,
	.widget_nav_menu .menu ul a,
	.widget_tag_cloud a,
	.widget_nav_menu .menu > li > a,
	.widget_custom_contact_info_entries span,
	.widget_custom_contact_info_entries span a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab li,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab li a,
	.cmsmasters_post_default .cmsmasters_post_read_more,
	.cmsmasters_post_default .cmsmasters_post_cont_info > div span,
	.cmsmasters_post_default .cmsmasters_post_cont_info > span.cmsmasters_post_author a,
	#wp-calendar caption,
	.comment-reply-link,
	.comment-edit-link,
	.cmsmasters-form-builder label,
	.wp-block-image figcaption,
	.wp-block-image figcaption a,
	.wp-block-quote cite,
	.wp-block-quote.is-style-large cite,
	.wp-block-pullquote cite,
	h5 a {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h5_font_google_font']) . $cmsmasters_option['gutentag' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h5_font_text_decoration'] . ";
		letter-spacing: 1px;
	}

	.cmsmasters_open_post .cmsmasters_post_cont_info > span a,
	.cmsmasters_archive_type .cmsmasters_archive_item_info > span,
	.cmsmasters_archive_type .cmsmasters_archive_item_info > span a,
	.share_posts .share_posts_title,
	.post_nav > span.cmsmasters_prev_post,
	#wp-calendar caption,
	.post_nav > span.cmsmasters_prev_post a,
	.post_nav > span.cmsmasters_next_post,
	.post_nav > span.cmsmasters_next_post a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab li,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab li a,
	.comment-reply-link,
	.comment-edit-link,
	.wp-block-image figcaption,
	.wp-block-image figcaption a,
	.wp-block-quote cite,
	.wp-block-quote.is-style-large cite,
	.wp-block-pullquote cite,
	.cmsmasters_comment_item .cmsmasters_comment_item_date,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title a,
	.comment-respond .comment-form .comment-form-author label, 
	.comment-respond .comment-form .comment-form-email label,
	.comment-respond .comment-form-comment label,
	.widget_pages ul li a, 
	.widget_categories ul li a,
	.wp-block-file a, 
	.widget_archive ul li a, 
	.widget_meta ul li a, 
	.widget_recent_comments ul li a, 
	.widget_recent_entries ul li a,
	.widget_pages ul li, 
	.widget_categories ul li, 
	.widget_archive ul li, 
	.widget_meta ul li,
	.widget_recent_comments ul li, 
	.widget_recent_entries ul li,
	.widget_nav_menu .menu ul a,
	.widget_tag_cloud a,
	.widget_nav_menu .menu > li > a,
	.cmsmasters_post_default .cmsmasters_post_read_more,
	.widget_custom_contact_info_entries span,
	.widget_custom_contact_info_entries span a,
	.cmsmasters_post_default .cmsmasters_post_cont_info > div span,
	.cmsmasters_post_default .cmsmasters_post_cont_info > span.cmsmasters_post_author a,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner span,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span {
		text-transform: uppercase;
	}

	.cmsmasters_post_default .cmsmasters_post_read_more {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h5_font_font_size'] + 1) . "px;
	}

	#wp-calendar caption,
	.cmsmasters-form-builder label,
	.comment-respond .comment-form-comment label,
	.comment-respond .comment-form .comment-form-author label,
	.comment-respond .comment-form .comment-form-email label {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h5_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_h5_font_line_height'] - 2) . "px;
		text-transform: uppercase;
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a,
	.cmsmasters_post_default .cmsmasters_post_cont_info > span.cmsmasters_post_category a,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span.cmsmasters_post_category a,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span.cmsmasters_post_category span,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_category a,
	.widget_rss ul li .rss-date,
	.cmsmasters_sticky_block,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab li abbr,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > .published,
	.cmsmasters_open_post .cmsmasters_post_footer > span a {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h6_font_google_font']) . $cmsmasters_option['gutentag' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h6_font_text_decoration'] . ";
		letter-spacing: 1px;
	}

	.cmsmasters_post_default .cmsmasters_post_cont_info > span.cmsmasters_post_category a,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span.cmsmasters_post_category a,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span.cmsmasters_post_category span,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_category a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab li abbr,
	.widget_rss ul li .rss-date,
	.cmsmasters_sticky_block,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > .published,
	.cmsmasters_open_post .cmsmasters_post_footer > span a {
		text-transform: uppercase;
	}

	.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_sticky_block,
	.cmsmasters_post_default .cmsmasters_post_cont_info > span.cmsmasters_post_category a,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span.cmsmasters_post_category a,
	.cmsmasters_open_post .cmsmasters_post_cont_info > span.cmsmasters_post_category span {
		font-weight: 700;
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button, 
	.wp-block-button .wp-block-button__link,
	.ghostkit-button-wrapper .ghostkit-button,
	.wp-block-file .wp-block-file__button,
	.comment-respond .comment-reply-title small a,
	.kt-button,
	.button, 
	input[type=submit], 
	input[type=button], 
	button {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_button_font_google_font']) . $cmsmasters_option['gutentag' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_button_font_text_transform'] . ";
		letter-spacing: 1px;
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option['gutentag' . '_button_font_font_size'] . "px !important;
	}

	.comment-respond .comment-reply-title small a {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_button_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_button_font_line_height'] - 21) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option['gutentag' . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option['gutentag' . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small, 
	form .formError .formErrorContent {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_small_font_google_font']) . $cmsmasters_option['gutentag' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_small_font_text_transform'] . ";
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_small_font_google_font']) . $cmsmasters_option['gutentag' . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option['gutentag' . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option['gutentag' . '_small_font_line_height'] . "px !important;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	textarea,
	select,
	option {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_input_font_google_font']) . $cmsmasters_option['gutentag' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_input_font_font_style'] . ";
	}
	
	.gform_wrapper input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option['gutentag' . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote,
	.wp-block-pullquote p,
	.wp-block-quote.is-style-large p {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_quote_font_google_font']) . $cmsmasters_option['gutentag' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_quote_font_font_style'] . ";
	}
	
	q {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_quote_font_google_font']) . $cmsmasters_option['gutentag' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['gutentag' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_quote_font_font_style'] . ";
	}

	.wp-block-quote p {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_quote_font_font_size'] - 8) . "px;
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";
	
	
	return apply_filters('gutentag_theme_fonts_filter', $custom_css);
}

