<?php
	function add_twitter_contactmethod( $contactmethods ) {
	// Add Twitter
	$contactmethods['twitter'] = 'Twitter';
	
	// Remove Yahoo IM
	unset($contactmethods['yim']);
	
	return $contactmethods;
}
add_filter('user_contactmethods','add_twitter_contactmethod',10,1);
function add_facebook_contactmethod( $contactmethods ) {
	// Add Twitter
	$contactmethods['facebook'] = 'Facebook';
	
	// Remove Yahoo IM
	unset($contactmethods['yim']);
	
	return $contactmethods;
}
add_filter('user_contactmethods','add_facebook_contactmethod',10,1);
function add_google_plus_contactmethod( $contactmethods ) {
	// Add Twitter
	$contactmethods['google_plus'] = 'Google +';
	
	// Remove Yahoo IM
	unset($contactmethods['yim']);
	
	return $contactmethods;
}
add_filter('user_contactmethods','add_google_plus_contactmethod',10,1);
function add_instagram_contactmethod( $contactmethods ) {
	// Add Twitter
	$contactmethods['instagram'] = 'Instagram';
	
	// Remove Yahoo IM
	unset($contactmethods['yim']);
	
	return $contactmethods;
}
add_filter('user_contactmethods','add_instagram_contactmethod',10,1);
function add_linkedin_contactmethod( $contactmethods ) {
	// Add Twitter
	$contactmethods['linkedin'] = 'Linkedin';
	
	// Remove Yahoo IM
	unset($contactmethods['yim']);
	
	return $contactmethods;
}
add_filter('user_contactmethods','add_linkedin_contactmethod',10,1);
function add_youtube_contactmethod( $contactmethods ) {
	// Add Twitter
	$contactmethods['youtube'] = 'Youtube';
	
	// Remove Yahoo IM
	unset($contactmethods['yim']);
	
	return $contactmethods;
}
add_filter('user_contactmethods','add_youtube_contactmethod',10,1);
function add_pinterest_contactmethod( $contactmethods ) {
	// Add Twitter
	$contactmethods['pinterest'] = 'Pinterest';
	
	// Remove Yahoo IM
	unset($contactmethods['yim']);
	
	return $contactmethods;
}
add_filter('user_contactmethods','add_pinterest_contactmethod',10,1);
function add_vimeo_contactmethod( $contactmethods ) {
	// Add Twitter
	$contactmethods['vimeo'] = 'Vimeo';
	
	// Remove Yahoo IM
	unset($contactmethods['yim']);
	
	return $contactmethods;
}
add_filter('user_contactmethods','add_vimeo_contactmethod',10,1);
function add_flickr_contactmethod( $contactmethods ) {
	// Add Twitter
	$contactmethods['flickr'] = 'Flickr';
	
	// Remove Yahoo IM
	unset($contactmethods['yim']);
	
	return $contactmethods;
}
add_filter('user_contactmethods','add_flickr_contactmethod',10,1);
function add_github_contactmethod( $contactmethods ) {
	// Add Twitter
	$contactmethods['github'] = 'Github';
	
	// Remove Yahoo IM
	unset($contactmethods['yim']);
	
	return $contactmethods;
}
add_filter('user_contactmethods','add_github_contactmethod',10,1);
?>