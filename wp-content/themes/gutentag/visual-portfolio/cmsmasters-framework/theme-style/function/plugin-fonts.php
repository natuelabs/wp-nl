<?php
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version 	1.0.0
 * 
 * Visual Portfolio Fonts Rules
 * Created by CMSMasters
 * 
 */


function gutentag_woocommerce_fonts($custom_css) {
	$cmsmasters_option = gutentag_get_global_options();
	
	
	$custom_css .= "
/***************** Start Visual Portfolio Font Styles ******************/

	/* Start Content Font */
	.vp-portfolio__items-style-fly .vp-portfolio__item-meta-excerpt,
	.vp-portfolio__items-style-fade .vp-portfolio__item-meta-excerpt {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_content_font_google_font']) . $cmsmasters_option['gutentag' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_content_font_font_style'] . ";
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	.cmsmasters_open_portfolio .cmsmasters_portfolio_header .cmsmasters_portfolio_title {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h1_font_google_font']) . $cmsmasters_option['gutentag' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h1_font_text_decoration'] . ";
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.vp-portfolio[data-vp-layout=tiles] .vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-title a {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h2_font_google_font']) . $cmsmasters_option['gutentag' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h2_font_text_decoration'] . ";
	}

	@media only screen and (max-width: 600px) {
		.vp-portfolio[data-vp-layout=tiles] .vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-title a {
			font-size:" . ((int) $cmsmasters_option['gutentag' . '_h2_font_font_size'] - 10) . "px;
			line-height:" . ((int) $cmsmasters_option['gutentag' . '_h2_font_line_height'] - 10) . "px;
		}
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta a,
	.vp-portfolio__items-style-fly .vp-portfolio__item-meta-title,
	.vp-portfolio__items-style-fade .vp-portfolio__item-meta-title,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-title,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-title a,
	.vp-portfolio__pagination-wrap .vp-pagination.vp-pagination__style-default .vp-pagination__item.vp-pagination__item-active,
	.vp-portfolio__pagination-wrap .vp-pagination.vp-pagination__style-default .vp-pagination__item a {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h4_font_google_font']) . $cmsmasters_option['gutentag' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h4_font_text_decoration'] . ";
		letter-spacing: 1px;
	}

	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta a,
	.vp-portfolio__items-style-fly .vp-portfolio__item-meta-title,
	.vp-portfolio__items-style-fade .vp-portfolio__item-meta-title,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-title,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-title a {
		text-transform: uppercase;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.vp-portfolio__items-style-fly .vp-portfolio__item-meta-date,
	.vp-portfolio__items-style-fade .vp-portfolio__item-meta-date,
	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta-date,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span a,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-date,
	.vp-portfolio[data-vp-layout=tiles] .vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-read-more,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-read-more,
	.vp-portfolio__filter-wrap .vp-filter .vp-filter__item,
	.vp-portfolio__filter-wrap .vp-filter .vp-filter__item a  {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h5_font_google_font']) . $cmsmasters_option['gutentag' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h5_font_text_decoration'] . ";
		letter-spacing: 1px;
	}
	
	.vp-portfolio__items-style-fly .vp-portfolio__item-meta-date,
	.vp-portfolio__items-style-fade .vp-portfolio__item-meta-date,
	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta-date,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span a,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-date,
	.vp-portfolio[data-vp-layout=tiles] .vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-read-more,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-read-more,
	.vp-portfolio__filter-wrap .vp-filter .vp-filter__item,
	.vp-portfolio__filter-wrap .vp-filter .vp-filter__item a  {
		text-transform: uppercase;
	}

	.vp-portfolio[data-vp-layout=tiles] .vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-read-more,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-read-more {
		font-weight: 600;
	}

	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-date {
		font-size:" . ((int) $cmsmasters_option['gutentag' . '_h5_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['gutentag' . '_h5_font_line_height'] - 1) . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.vp-portfolio__items-style-fly .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category,
	.vp-portfolio__items-style-fade .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category,
	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category,
	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category a,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span.cmsmasters_portfolio_category a,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span.cmsmasters_portfolio_category span,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_footer > span,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-categories a {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_h6_font_google_font']) . $cmsmasters_option['gutentag' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['gutentag' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['gutentag' . '_h6_font_text_decoration'] . ";
		letter-spacing: 1px;
	}
	
	.vp-portfolio__items-style-fly .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category,
	.vp-portfolio__items-style-fade .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category,
	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category,
	.vp-portfolio__items-style-emerge .vp-portfolio__item-meta-categories .vp-portfolio__item-meta-category a,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span.cmsmasters_portfolio_category a,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_cont_info > span.cmsmasters_portfolio_category span,
	.cmsmasters_open_portfolio .cmsmasters_portfolio_footer > span,
	.vp-portfolio__items.vp-portfolio__items-style-default .vp-portfolio__item-overlay .vp-portfolio__item-meta-categories a {
		text-transform:uppercase;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	/* Finish Button Font */
	
	
	/* Start Text Fields Font */
	.select2-dropdown {
		font-family:" . gutentag_get_google_font($cmsmasters_option['gutentag' . '_input_font_google_font']) . $cmsmasters_option['gutentag' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['gutentag' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['gutentag' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['gutentag' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['gutentag' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish Visual Portfolio Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('gutentag_theme_fonts_filter', 'gutentag_woocommerce_fonts');

