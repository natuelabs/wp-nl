<?php 
/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version		1.0.0
 * 
 * Admin Panel Post, Project, Profile Settings
 * Created by CMSMasters
 * 
 */


function gutentag_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'gutentag');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'gutentag');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'gutentag');
	}
	
	
	return apply_filters('cmsmasters_options_single_tabs_filter', $tabs);
}


function gutentag_options_single_sections() {
	$tab = gutentag_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'gutentag');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'gutentag');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'gutentag');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_sections_filter', $sections, $tab);
} 


function gutentag_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = gutentag_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = gutentag_settings_single_defaults();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'gutentag'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['gutentag' . '_blog_post_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'gutentag') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_blog_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_blog_post_date'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_blog_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_blog_post_author'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_blog_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_blog_post_tag'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_blog_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_blog_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_post_nav_order_cat', 
			'title' => esc_html__('Posts Navigation Order by Category', 'gutentag'), 
			'desc' => esc_html__('enable', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_blog_post_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_post_share_box', 
			'title' => esc_html__('Sharing Box', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_blog_post_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_blog_post_author_box'] 
		);

		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_post_read_more', 
			'title' => esc_html__('"Read More" Buttons Text', 'gutentag'), 
			'desc'	=> esc_html__('Enter the "Read More" button text that should be used in you blog shortcode', 'gutentag'),  
			'type'	=> 'text', 
			'std' => $defaults[$tab]['gutentag' . '_blog_post_read_more']
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'gutentag'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['gutentag' . '_blog_more_posts_box'], 
			'choices' => array( 
				esc_html__('Show Related Posts', 'gutentag') . '|related', 
				esc_html__('Show Popular Posts', 'gutentag') . '|popular', 
				esc_html__('Show Recent Posts', 'gutentag') . '|recent', 
				esc_html__('Hide More Posts Box', 'gutentag') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'gutentag'), 
			'desc' => esc_html__('posts', 'gutentag'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['gutentag' . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'gutentag' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'gutentag'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'gutentag'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['gutentag' . '_blog_more_posts_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_project_title'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'gutentag'), 
			'desc' => esc_html__('Enter a project details block title', 'gutentag'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_project_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_project_date'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_project_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_project_author'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_project_comment'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_project_tag'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_project_like'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_project_link'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_project_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_project_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_project_nav_order_cat', 
			'title' => esc_html__('Projects Navigation Order by Category', 'gutentag'), 
			'desc' => esc_html__('enable', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_project_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_project_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'gutentag'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_more_projects_box'], 
			'choices' => array( 
				esc_html__('Show Related Projects', 'gutentag') . '|related', 
				esc_html__('Show Popular Projects', 'gutentag') . '|popular', 
				esc_html__('Show Recent Projects', 'gutentag') . '|recent', 
				esc_html__('Hide More Projects Box', 'gutentag') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'gutentag'), 
			'desc' => esc_html__('projects', 'gutentag'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_more_projects_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'gutentag'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'gutentag'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_more_projects_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'gutentag'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'gutentag'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_project_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'gutentag'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'gutentag'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_pj_categs_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'gutentag' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'gutentag'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'gutentag'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['gutentag' . '_portfolio_pj_tags_slug'], 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'gutentag' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_profile_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'gutentag' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'gutentag'), 
			'desc' => esc_html__('Enter a profile details block title', 'gutentag'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['gutentag' . '_profile_post_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'gutentag' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_profile_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'gutentag' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_profile_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'gutentag' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_profile_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'gutentag' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_profile_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'gutentag' . '_profile_post_nav_order_cat', 
			'title' => esc_html__('Profiles Navigation Order by Category', 'gutentag'), 
			'desc' => esc_html__('enable', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_profile_post_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'gutentag' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'gutentag'), 
			'desc' => esc_html__('show', 'gutentag'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['gutentag' . '_profile_post_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'gutentag' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'gutentag'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'gutentag'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['gutentag' . '_profile_post_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'gutentag' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'gutentag'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'gutentag'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['gutentag' . '_profile_pl_categs_slug'], 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_fields_filter', $options, $tab);
}

