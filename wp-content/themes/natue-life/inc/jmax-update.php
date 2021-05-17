<?php


function update_notifier_menu() {  
	$xml = get_latest_theme_version(20); //This tells the function to cache the remote call for 21600 seconds (6 hours)
	$theme_data = wp_get_theme(); //Get theme data from style.css (current version is what we want)
	$theme_name=$theme_data->name;
	if(version_compare($theme_data->version, $xml->latest) == -1 && $theme_name=='JMAX') {
		add_theme_page( $theme_data->name . 'Theme Updates', $theme_data->name . '<span class="update-plugins count-1"><span class="update-count">New Updates</span></span>', 'administrator', strtolower($theme_data->name) . '-updates', update_notifier);
	}
}  

add_action('admin_menu', 'update_notifier_menu');

function update_notifier() { 
	$xml = get_latest_theme_version(20); //This tells the function to cache the remote call for 21600 seconds (6 hours)
	$theme_data = wp_get_theme(); // Get theme data from style.css (current version is what we want) ?>
	
	<style>
		.update-nag {display: none;}
		#instructions {max-width: 800px;}
		h3.title {margin: 30px 0 0 0; padding: 30px 0 0 0; border-top: 1px solid #ddd;}
	</style>

	<div class="wrap">
	
		<div id="icon-tools" class="icon32"></div>
		<h2><?php echo $theme_data->name; ?> Theme Updates</h2>
	    <div id="message" class="updated below-h2"><p><strong>There is a new version of the <?php echo $theme_data->name; ?> theme available.</strong> You have version <?php echo $theme_data->version; ?> installed. Update to version <?php echo $xml->latest; ?>.</p></div>
        
        <img style="float: left; margin: 0 20px 20px 0; border: 5px solid #fff; max-width: 50%;" src="<?php echo get_template_directory_uri() . '/screenshot.png'; ?>" />
        
        <div id="instructions" style="max-width: 800px;">
            <h3>Update Download and Instructions</h3>
            <p><strong>Please note:</strong> make a <strong>backup</strong> of the Theme inside your WordPress installation folder <strong>/wp-content/themes/<?php echo strtolower($theme_data->name); ?>/</strong></p>
            <p>To update the Theme, login to your account, head over to your <strong>downloads</strong> section and re-download the theme like you did when you bought it.</p>
            <p>Extract the zip's contents, look for the extracted theme folder, and after you have all the new files upload them using FTP to the <strong>/wp-content/themes/<?php echo strtolower($theme_data->name); ?>/</strong> folder overwriting the old ones (this is why it's important to backup any changes you've made to the theme files).</p>
            <p>If you didn't make any changes to the theme files, you are free to overwrite them with the new ones without the risk of losing theme settings, pages, posts, etc, and backwards compatibility is guaranteed.</p>
        </div>
        
            <div class="clear"></div>
	    
	    <h3 class="title">Changelog</h3>
	    <?php echo $xml->changelog; ?>

	</div>
    
<?php } 

//This function retrieves a remote xml file on my server to see if there's a new update 
//For performance reasons this function caches the xml content in the database for XX seconds ($interval variable)
function get_latest_theme_version($interval) {
	$headers = array( 
                 "Cache-Control" => "no-store, no-cache, must-revalidate" 
    ); 
	//remote xml file location
	$notifier_file_url = 'http://wp207.net/themes/jmax/api/update-jmax.xml';
	
	$db_cache_field = 'jmax-update-notifier-cache';
	$db_cache_field_last_updated = 'jmax-update-notifier-last-updated';
	$last = get_option( $db_cache_field_last_updated );
	$now = time();
	//check the cache
	if ( !$last || (( $now - $last ) > $interval) ) {
		//cache doesn't exist, or is old, so refresh it
		$response = wp_remote_get($notifier_file_url, array( 'timeout' => 0, 'headers' => $headers ));
		$body = wp_remote_retrieve_body($response);
		
		if ($body ) {			
			//we got good results
			update_option( $db_cache_field, $body );
			update_option( $db_cache_field_last_updated, time() );			
		}
		//read from the cache file
		$notifier_data = get_option( $db_cache_field );
	}
	else {
		//cache file is fresh enough, so read from it
		$notifier_data = get_option( $db_cache_field );
	}
	
	$xml = simplexml_load_string($notifier_data); 
	
	return $xml;
}

?>
