<?php
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * Gutenberg Module Colors Rules
 * Created by CMSMasters
 * 
 */


function gutentag_gutenberg_module_colors($custom_css = '', $is_editor = false) {
	$cmsmasters_option = gutentag_get_global_options();
	
	$editor = ($is_editor ? '.editor-styles-wrapper' : '');
	
	$custom_css .= "
/***************** Start Gutenberg Module Custom Colors Scheme Rules ******************/

	{$editor} div.wp-block ul > li:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag' . '_default_border']) . "
	}
	
	{$editor} .wp-block-quote,
	.wp-block-quote__citation, .wp-block-quote cite, 
	.wp-block-quote footer,
	.editor-styles-wrapper .wp-block-freeform blockquote,
	.editor-styles-wrapper .wp-block-freeform blockquote p {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag' . '_default_heading']) . "
	}

	.editor-styles-wrapper .wp-block-image figcaption, 
	.block-editor-page.kt-editor-width-default .wp-block-image figcaption {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag' . '_default_bg']) . "
	}
	

	.editor-styles-wrapper div.wp-block ul li:before, 
	body.block-editor-page.kt-editor-width-default div.wp-block ul li:before,
	.editor-styles-wrapper .ghostkit-accordion .ghostkit-accordion-item .ghostkit-accordion-item-heading .editor-rich-text:after, 
	body.wp-admin.block-editor-page.kt-editor-width-default .ghostkit-accordion .ghostkit-accordion-item .ghostkit-accordion-item-heading .editor-rich-text:after,
	.editor-styles-wrapper .ghostkit-tabs .ghostkit-tabs-buttons .ghostkit-tabs-buttons-item:after, 
	body.wp-admin.block-editor-page.kt-editor-width-default .ghostkit-tabs .ghostkit-tabs-buttons .ghostkit-tabs-buttons-item:after,
	{$editor} .ghostkit-pricing-table-item,
	{$editor} .wp-block-verse:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag' . '_default_secondary']) . "
	}
	
	/* Start Table Colors */
	{$editor} .wp-block-table th,
	{$editor} .wp-block-table td,
	{$editor} .wp-block-table.is-style-stripes th,
	{$editor} .wp-block-table.is-style-stripes td,
	.editor-styles-wrapper .wp-block-freeform .mce-item-table th,
	.editor-styles-wrapper .wp-block-freeform table th,
	.editor-styles-wrapper .wp-block-freeform .mce-item-table tbody tr th,
	.editor-styles-wrapper .wp-block-freeform .mce-item-table tbody tr td,
	.editor-styles-wrapper .wp-block-freeform table tbody tr th,
	.editor-styles-wrapper .wp-block-freeform table tbody tr td {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag' . '_default_border']) . "
	}
	
	{$editor} .wp-block-table.is-style-stripes tr:nth-child(odd) th,
	{$editor} .wp-block-table.is-style-stripes tr:nth-child(odd) td {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag' . '_default_alternate']) . "
	}
	/* Finish Table Colors */

	.editor-styles-wrapper .wp-block-quote:before, 
	.block-editor-page.kt-editor-width-default .wp-block-quote:before, 
	.editor-styles-wrapper .wp-block-quote.is-large:before, 
	.block-editor-page.kt-editor-width-default .wp-block-quote.is-large:before, 
	.editor-styles-wrapper .wp-block-quote.is-style-large:before,
	 .block-editor-page.kt-editor-width-default .wp-block-quote.is-style-large:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag' . '_default_secondary']) . "
	 }

	 .editor-styles-wrapper .wp-block-quote.is-style-large::before, 
	 body.wp-admin.block-editor-page.kt-editor-width-default .wp-block-quote.is-style-large::before, 
	 .editor-styles-wrapper .wp-block-quote.is-large.is-style-large::before, 
	 body.wp-admin.block-editor-page.kt-editor-width-default .wp-block-quote.is-large.is-style-large::before, 
	 .editor-styles-wrapper .wp-block-quote.is-style-large.is-style-large::before, 
	 body.wp-admin.block-editor-page.kt-editor-width-default .wp-block-quote.is-style-large.is-style-large::before {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag' . '_default_secondary']) . "
	 }

/***************** Finish Gutenberg Module Custom Colors Scheme Rules ******************/





/***************** Start Gutenberg Module General Colors Scheme Rules ******************/
	/* Start Main Content Font Color */
	body .editor-styles-wrapper,
	.editor-styles-wrapper select,
	.editor-styles-wrapper p.wp-block-subhead,
	{$editor} .wp-block-image figcaption,
	{$editor} .wp-block-audio figcaption,
	{$editor} .wp-block-video figcaption,
	{$editor} .wp-caption dd,
	{$editor} .wp-block-latest-posts .wp-block-latest-posts__post-date,
	{$editor} .wp-block-latest-comments .wp-block-latest-comments__comment-date {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag' . '_default_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	.editor-styles-wrapper a,
	.editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce a,
	.editor-styles-wrapper .wp-block-file .wp-block-file__textlink .editor-rich-text__tinymce {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag' . '_default_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	.editor-styles-wrapper a:hover,
	.editor-styles-wrapper a:active,
	.editor-styles-wrapper h1 a:hover,
	.editor-styles-wrapper h1 a:active,
	.editor-styles-wrapper h2 a:hover,
	.editor-styles-wrapper h2 a:active,
	.editor-styles-wrapper h3 a:hover,
	.editor-styles-wrapper h3 a:active,
	.editor-styles-wrapper h4 a:hover,
	.editor-styles-wrapper h4 a:active,
	.editor-styles-wrapper h5 a:hover,
	.editor-styles-wrapper h5 a:active,
	.editor-styles-wrapper h6 a:hover,
	.editor-styles-wrapper h6 a:active,
	.editor-styles-wrapper .wp-block-image figcaption a:hover,
	.editor-styles-wrapper div.wp-block .wp-block-freeform.block-library-rich-text__tinymce a:hover,
	.editor-styles-wrapper div.wp-block .wp-block-freeform.block-library-rich-text__tinymce a:active {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag' . '_default_hover']) . "
	}
	
	.editor-styles-wrapper select:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag' . '_default_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	.editor-post-title__block .editor-post-title__input,
	.editor-styles-wrapper h1,
	.editor-styles-wrapper h1 a,
	.editor-styles-wrapper h2,
	.editor-styles-wrapper h2 a,
	.editor-styles-wrapper h3,
	.editor-styles-wrapper h3 a,
	.editor-styles-wrapper h4,
	.editor-styles-wrapper h4 a,
	.editor-styles-wrapper h5,
	.editor-styles-wrapper h5 a,
	.editor-styles-wrapper h6,
	.editor-styles-wrapper h6 a,
	.editor-styles-wrapper .wp-block-image figcaption a,
	.editor-styles-wrapper .ghostkit-tabs .ghostkit-tabs-buttons .ghostkit-tabs-buttons-item, 
	body.wp-admin.block-editor-page.kt-editor-width-default .ghostkit-tabs .ghostkit-tabs-buttons .ghostkit-tabs-buttons-item,
	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-popular-badge,
	{$editor} .ghostkit-pricing-table-item .ghostkit-button,
	{$editor} .ghostkit-progress .ghostkit-progress-bar-count>div,
	{$editor} .wp-block-pullquote {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag' . '_default_heading']) . "
	}
	
	{$editor} .wp-block-pullquote.is-style-solid-color {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag' . '_default_heading']) . "
	}
	
	{$editor} .wp-block-pullquote {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag' . '_default_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$editor} .wp-block-pullquote.is-style-solid-color {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag' . '_default_bg']) . "
	}
	
	body .editor-styles-wrapper,
	.editor-styles-wrapper select,
	{$editor} .ghostkit-pricing-table-item .ghostkit-button,
	.editor-styles-wrapper .ghostkit-carousel > .editor-inner-blocks > .editor-block-list__layout > .editor-block-list__block > .editor-block-list__block-edit::before,
	.editor-styles-wrapper .ghostkit-testimonial .ghostkit-testimonial-content {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag' . '_default_bg']) . "
	}

	{$editor} .ghostkit-pricing-table-item .ghostkit-button:hover {
		border-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['gutentag' . '_default_bg']) . ", 1) !important;
	}
	/* Finish Main Background Color */


	/* Start Alternate Background Color */
	{$editor} .ghostkit-progress .ghostkit-progress-bar-count>div,
	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-popular-badge {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag' . '_default_alternate']) . "
	}

	{$editor} .ghostkit-grid .ghostkit-progress .ghostkit-progress-bar-count>div::after {
		border-top-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['gutentag' . '_default_alternate']) . ", 1) !important;
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$editor} .wp-block-separator.is-style-dots:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag' . '_default_border']) . "
	}
	
	{$editor} .wp-block-separator:not(.is-style-dots):before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag' . '_default_border']) . "
	}

	.editor-styles-wrapper select,
	.editor-styles-wrapper .wp-block-freeform hr,
	.editor-styles-wrapper .ghostkit-testimonial, 
	{$editor} .kt-block-spacer .kt-divider,
	.editor-styles-wrapper .ghostkit-tabs .ghostkit-tabs-content, 
	body.wp-admin.block-editor-page.kt-editor-width-default .ghostkit-tabs .ghostkit-tabs-content,
	body.wp-admin.block-editor-page.kt-editor-width-default .ghostkit-testimonial {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag' . '_default_border']) . "
	}
	/* Finish Borders Color */
	
	
	/* Start Buttons Colors */
	{$editor} .wp-block-button .wp-block-button__link:not(.has-text-color):not(.has-background),
	{$editor} .wp-block-file .wp-block-file__button,
	{$editor} .wp-block-file a.wp-block-file__button {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag' . '_default_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag' . '_default_link']) . "
	}
	
	{$editor} .wp-block-button .wp-block-button__link:not(.has-text-color):not(.has-background):hover,
	{$editor} .wp-block-button .wp-block-button__link:not(.has-text-color):not(.has-background):focus,
	{$editor} .wp-block-button .wp-block-button__link:not(.has-text-color):not(.has-background):active,
	{$editor} .wp-block-file .wp-block-file__button:hover,
	{$editor} .wp-block-file .wp-block-file__button:focus,
	{$editor} .wp-block-file .wp-block-file__button:active,
	{$editor} .wp-block-file a.wp-block-file__button:hover,
	{$editor} .wp-block-file a.wp-block-file__button:focus,
	{$editor} .wp-block-file a.wp-block-file__button:active {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag' . '_default_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag' . '_default_hover']) . "
	}
	
	{$editor} .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):not(.has-background) {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag' . '_default_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag' . '_default_bg']) . "
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag' . '_default_link']) . "
	}
	
	{$editor} .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):not(.has-background):hover,
	{$editor} .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):not(.has-background):focus,
	{$editor} .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):not(.has-background):active {
		" . cmsmasters_color_css('color', $cmsmasters_option['gutentag' . '_default_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag' . '_default_link']) . "
		" . cmsmasters_color_css('border-color', $cmsmasters_option['gutentag' . '_default_link']) . "
	}
	/* Finish Buttons Colors */


	/* Start Secondary Colors */
	.editor-styles-wrapper .wp-block-freeform blockquote:before, 
	.wp-admin.block-editor-page.kt-editor-width-default .wp-block-freeform blockquote:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['gutentag_default_secondary']) . "
	}
	/* Finish Secondary Colors */

/***************** Finish Gutenberg Module General Colors Scheme Rules ******************/

";
	
	
	return $custom_css;
}

add_filter('gutentag_theme_colors_secondary_filter', 'gutentag_gutenberg_module_colors');

