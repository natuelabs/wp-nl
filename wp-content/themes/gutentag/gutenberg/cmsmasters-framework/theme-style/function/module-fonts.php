<?php
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * Gutenberg Module Fonts Rules
 * Created by CMSMasters
 * 
 */


function gutentag_gutenberg_module_fonts($custom_css = '', $is_editor = false) {
	$cmsmasters_option = gutentag_get_global_options();
	
	$editor = ($is_editor ? '.editor-styles-wrapper' : '');
	
	$custom_css .= "
/***************** Start Gutenberg Module Custom Font Styles ******************/



/***************** Finish Gutenberg Module Custom Font Styles ******************/





/***************** Start Gutenberg Module General Font Styles ******************/

	/* Start Content Font */
	body .editor-styles-wrapper,
	body .editor-styles-wrapper p,
	{$editor} pre.wp-block-verse,
	{$editor} p.has-drop-cap:not(:focus)::first-letter,
	{$editor} .wp-block-gallery .blocks-gallery-image figcaption,
	{$editor} .wp-block-gallery .blocks-gallery-item figcaption,
	{$editor} .wp-block-gallery .gallery-item .gallery-caption,
	{$editor} .wp-block-audio figcaption,
	{$editor} .wp-block-video figcaption,
	{$editor} .wp-caption dd,
	{$editor} div.wp-block ul,
	{$editor} div.wp-block ul > li,
	{$editor} div.wp-block ol,
	{$editor} div.wp-block ol > li,
	{$editor} .wp-block-latest-comments.has-avatars .wp-block-latest-comments__comment-meta, 
	{$editor} .wp-block-latest-comments .wp-block-latest-comments__comment-meta,
	{$editor} .wp-block-latest-comments.has-avatars .wp-block-latest-comments__comment-excerpt p, 
	{$editor} .wp-block-latest-comments .wp-block-latest-comments__comment-excerpt p,
	{$editor} .wp-block-freeform,
	{$editor} .wp-block-freeform p,
	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-description,
	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-features li,
	{$editor} .wp-block-freeform.mce-content-body {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_content_font_google_font']) . $cmsmasters_option['gutentag' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_content_font_font_style'] . ";
	}
	
	{$editor} p.has-drop-cap:not(:focus)::first-letter {
		font-size:3em;
		line-height:1.2em;
	}

	.ghostkit-icon-box .ghostkit-icon-box-content div[data-type='core/paragraph'] p {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_content_font_font_size'] + 8) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_content_font_line_height'] + 8) . "px;
	}

	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-description,
	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-features li {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_content_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_content_font_line_height'] + 2) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	.editor-styles-wrapper a,
	.editor-styles-wrapper .wp-block-file .wp-block-file__textlink .editor-rich-text__tinymce {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_link_font_google_font']) . $cmsmasters_option['gutentag' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_link_font_text_decoration'] . ";
	}
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	{$editor} .wp-block-heading h1,
	{$editor} .wp-block-heading h1.editor-rich-text__tinymce,
	.editor-styles-wrapper h1,
	.editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h1,
	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-price .ghostkit-pricing-table-item-price-amount,
	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-price .ghostkit-pricing-table-item-price-currency,
	.ghostkit-counter-box .ghostkit-counter-box-number,
	.editor-post-title__block .editor-post-title__input {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h1_font_google_font']) . $cmsmasters_option['gutentag' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h1_font_text_decoration'] . ";
	}

	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-price .ghostkit-pricing-table-item-price-amount,
	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-price .ghostkit-pricing-table-item-price-currency {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h1_font_font_size'] + 13) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_h1_font_line_height'] + 13) . "px;
	}

	@media only screen and (min-width: 768px) and (max-width: 1024px) {
		{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-price .ghostkit-pricing-table-item-price-amount,
		{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-price .ghostkit-pricing-table-item-price-currency {
			font-size:" . ((int) $cmsmasters_option['gutentag' . '_h1_font_font_size'] - 2) . "px;
			line-height:" . ((int) $cmsmasters_option['gutentag' . '_h1_font_line_height'] - 2) . "px;
		}
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	{$editor} .wp-block-heading h2,
	{$editor} .wp-block-heading h2.editor-rich-text__tinymce,
	.editor-styles-wrapper h2,
	.editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h2,
	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-title,
	{$editor} h2.editor-rich-text__tinymce,
	{$editor} .wp-block-cover h2, 
	{$editor} .wp-block-cover .wp-block-cover-text, 
	{$editor} .wp-block-cover .wp-block-cover-image-text, 
	{$editor} .wp-block-cover-image h2, 
	{$editor} .wp-block-cover-image .wp-block-cover-text, 
	{$editor} .wp-block-cover-image .wp-block-cover-image-text {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h2_font_google_font']) . $cmsmasters_option['gutentag' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h2_font_text_decoration'] . ";
	}

	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-title {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h2_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_h2_font_line_height'] + 4) . "px;
	}

	@media only screen and (min-width: 768px) and (max-width: 1024px) {
		{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-title {
			font-size:" . ((int) $cmsmasters_option['gutentag' . '_h2_font_font_size'] - 6) . "px;
			line-height:" . ((int) $cmsmasters_option['gutentag' . '_h2_font_line_height'] - 6) . "px;
		}
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	{$editor} .wp-block-heading h3,
	{$editor} .wp-block-heading h3.editor-rich-text__tinymce,
	.editor-styles-wrapper h3,
	{$editor} .ghostkit-testimonial .ghostkit-testimonial-name,
	.editor-styles-wrapper .ghostkit-testimonial .ghostkit-testimonial-name,
	.editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h3 {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h3_font_google_font']) . $cmsmasters_option['gutentag' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h3_font_text_decoration'] . ";
		letter-spacing: 1px;
	}

	
	{$editor} .ghostkit-testimonial .ghostkit-testimonial-name {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h3_font_font_size'] - 4) . "px;
		font-weight: 400;
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	{$editor} .wp-block-heading h4,
	{$editor} .wp-block-heading h4.editor-rich-text__tinymce,
	{$editor} .wp-block-quote.is-large .wp-block-quote__citation,
	{$editor} .wp-block-quote.is-large cite,
	.editor-styles-wrapper h4,
	.editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h4,
	.editor-styles-wrapper .ghostkit-progress small,
	.editor-styles-wrapper .ghostkit-tabs .ghostkit-tabs-buttons .ghostkit-tabs-buttons-item, 
	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-price .ghostkit-pricing-table-item-price-repeat,
	body.wp-admin.block-editor-page.kt-editor-width-default .ghostkit-tabs .ghostkit-tabs-buttons .ghostkit-tabs-buttons-item,
	.editor-styles-wrapper .ghostkit-accordion .ghostkit-accordion-item .ghostkit-accordion-item-heading,
	body.wp-admin.block-editor-page.kt-editor-width-default .ghostkit-accordion .ghostkit-accordion-item .ghostkit-accordion-item-heading {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h4_font_google_font']) . $cmsmasters_option['gutentag' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h4_font_text_decoration'] . ";
		letter-spacing: 1px;
	}

	.editor-styles-wrapper .ghostkit-tabs .ghostkit-tabs-buttons .ghostkit-tabs-buttons-item, 
	body.wp-admin.block-editor-page.kt-editor-width-default .ghostkit-tabs .ghostkit-tabs-buttons .ghostkit-tabs-buttons-item,
	.editor-styles-wrapper .ghostkit-progress small,
	.editor-styles-wrapper .ghostkit-accordion .ghostkit-accordion-item .ghostkit-accordion-item-heading,
	body.wp-admin.block-editor-page.kt-editor-width-default .ghostkit-accordion .ghostkit-accordion-item .ghostkit-accordion-item-heading {
		text-transform: uppercase;
	}

	.editor-styles-wrapper .ghostkit-accordion .ghostkit-accordion-item .ghostkit-accordion-item-heading,
	body.wp-admin.block-editor-page.kt-editor-width-default .ghostkit-accordion .ghostkit-accordion-item .ghostkit-accordion-item-heading {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h4_font_font_size'] - 2) . "px;
	}

	.editor-styles-wrapper .ghostkit-progress small {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h4_font_font_size'] - 1) . "px;
	}

	{$editor} .wp-block-quote.is-large .wp-block-quote__citation,
	{$editor} .wp-block-quote.is-large cite {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h4_font_font_size'] + 1) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_h4_font_line_height'] + 1) . "px;
		text-transform: uppercase;
	}

	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-price .ghostkit-pricing-table-item-price-repeat {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h4_font_font_size'] + 3) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_h4_font_line_height'] + 2) . "px;
		text-transform: uppercase;
		font-weight: 600;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	{$editor} .wp-block-heading h5,
	{$editor} .wp-block-heading h5.editor-rich-text__tinymce,
	.editor-styles-wrapper h5,
	.editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h5,
	{$editor} .wp-block-image figcaption,
	{$editor} .wp-block-image figcaption a,
	{$editor} .ghostkit-progress .ghostkit-progress-bar-count>div,
	.block-editor-page.kt-editor-width-default .wp-block-image figcaption,
	.editor-styles-wrapper .wp-block .wp-block-image .mce-content-body, 
	body.wp-admin.block-editor-page.kt-editor-width-default .wp-block .wp-block-image .mce-content-body,
	.editor-styles-wrapper .wp-block-pullquote blockquote .wp-block-pullquote__citation, 
	body.wp-admin.block-editor-page.kt-editor-width-default .wp-block-pullquote blockquote .wp-block-pullquote__citation,
	.editor-styles-wrapper .wp-block-quote .wp-block-quote__citation,
	.wp-block-quote cite {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h5_font_google_font']) . $cmsmasters_option['gutentag' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h5_font_text_decoration'] . ";
		letter-spacing: 1px;
	}

	{$editor} .wp-block-image figcaption, 
	{$editor} .wp-block-image figcaption a,
	.block-editor-page.kt-editor-width-default .wp-block-image figcaption,
	body.wp-admin.block-editor-page.kt-editor-width-default .wp-block .wp-block-image figcaption.mce-content-body,
	.editor-styles-wrapper .wp-block .wp-block-image figcaption.mce-content-body,
	.editor-styles-wrapper .wp-block-quote .wp-block-quote__citation,
	.wp-block-quote cite,
	.editor-styles-wrapper .wp-block-pullquote blockquote .wp-block-pullquote__citation, 
	body.wp-admin.block-editor-page.kt-editor-width-default .wp-block-pullquote blockquote .wp-block-pullquote__citation {
		text-transform: uppercase;
	}

	{$editor} .wp-block-image figcaption,
	{$editor} .wp-block-image figcaption a,
	.block-editor-page.kt-editor-width-default .wp-block-image figcaption,
	.editor-styles-wrapper .wp-block .wp-block-image .mce-content-body, 
	body.wp-admin.block-editor-page.kt-editor-width-default .wp-block .wp-block-image .mce-content-body,
	.editor-styles-wrapper .wp-block-pullquote blockquote .wp-block-pullquote__citation, 
	body.wp-admin.block-editor-page.kt-editor-width-default .wp-block-pullquote blockquote .wp-block-pullquote__citation,
	.editor-styles-wrapper .wp-block-quote .wp-block-quote__citation {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h5_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_h5_font_line_height'] - 1) . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	{$editor} .wp-block-heading h6,
	{$editor} .wp-block-heading h6.editor-rich-text__tinymce,
	.editor-styles-wrapper h6,
	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-popular-badge,
	{$editor} .ghostkit-testimonial .ghostkit-testimonial-meta .ghostkit-testimonial-source,
	.editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h6 {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h6_font_google_font']) . $cmsmasters_option['gutentag' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h6_font_text_decoration'] . ";
		letter-spacing: 1px;
	}

	{$editor} .ghostkit-pricing-table-item .ghostkit-pricing-table-item-popular-badge,
	{$editor} .ghostkit-testimonial .ghostkit-testimonial-meta .ghostkit-testimonial-source {
		text-transform: uppercase;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	{$editor} .wp-block-button .wp-block-button__link,
	{$editor} .wp-block-file .wp-block-file__button,
	{$editor} .ghostkit-pricing-table-item .ghostkit-button,
	.editor-styles-wrapper .wp-block-button, 
	.editor-styles-wrapper .ghostkit-button,
	.editor-styles-wrapper div[data-type='ghostkit/button-single'] .ghostkit-button,
	.editor-styles-wrapper .wp-block[data-type='ghostkit/button-single'], 
	body.wp-admin.block-editor-page.kt-editor-width-default .wp-block[data-type='ghostkit/button-single'],
	body.wp-admin.block-editor-page.kt-editor-width-default .wp-block-button {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_button_font_google_font']) . $cmsmasters_option['gutentag' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_button_font_text_transform'] . ";
		letter-spacing: 1px;
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	{$editor} small,
	{$editor} .wp-block-latest-posts .wp-block-latest-posts__post-date,
	{$editor} .wp-block-latest-comments .wp-block-latest-comments__comment-date {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_small_font_google_font']) . $cmsmasters_option['gutentag' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_small_font_text_transform'] . ";
	}
	/* Finish Small Text Font */
	
	
	/* Start Text Fields Font */
	.editor-styles-wrapper select,
	.editor-styles-wrapper option {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_input_font_google_font']) . $cmsmasters_option['gutentag' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_input_font_font_style'] . ";
	}
	
	.editor-styles-wrapper select {
		line-height:1em;
	}
	/* Finish Text Fields Font */
	
	
	/* Start Blockquote Font */
	{$editor} .wp-block-quote.is-large,
	{$editor} .wp-block-quote.is-style-large,
	{$editor} .wp-block-pullquote,
	.editor-styles-wrapper .wp-block-quote, 
	body.wp-admin.block-editor-page.kt-editor-width-default .wp-block-quote,
	.editor-styles-wrapper .wp-block-freeform blockquote,
	.editor-styles-wrapper .wp-block-freeform blockquote p {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_quote_font_google_font']) . $cmsmasters_option['gutentag' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_quote_font_font_style'] . ";
	}
	
	{$editor} .wp-block-quote.is-large,
	{$editor} .wp-block-quote.is-style-large {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_quote_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_quote_font_line_height'] + 4) . "px;
	}
	
	{$editor} .wp-block-pullquote {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_quote_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_quote_font_line_height'] - 4) . "px;
	}
	
	.editor-styles-wrapper q {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_quote_font_google_font']) . $cmsmasters_option['gutentag' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['gutentag' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */

/***************** Finish Gutenberg Module General Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('gutentag_theme_fonts_filter', 'gutentag_gutenberg_module_fonts');

