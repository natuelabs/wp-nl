<?php
//THIS FUNCTION HELP TO WRITE FEATURED VIDEO OR PHOTO OR SOUNDCLOUD
function get_featured_embed() {
	if(get_post_meta(get_the_ID(), '_tern_wp_youtube_video', true)) :
		$embed_url="http://www.youtube.com/watch?v=".get_post_meta(get_the_ID(), '_tern_wp_youtube_video', true);
		echo wp_oembed_get($embed_url);
	elseif(get_post_meta(get_the_ID() ,'jmax_video_url', true)) :
		$embed_url=get_post_meta(get_the_ID(), 'jmax_video_url', true);
		echo wp_oembed_get($embed_url);
	else:
		$embed_url=null;
		$params = array( 'width' => 1100, 'height' => 500, 'crop' => true );
	echo '<a class="popup-photo" href="'.wp_get_attachment_url( get_post_thumbnail_id($post->ID) ).'"><img class="featured-img lazy" src="' . bfi_thumb(  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ), $params ) . '"/></a>';
	endif;
}
function get_featured_soundcloud() {
	if(get_post_meta(get_the_ID() ,'jmax_audio_url', true)) :
		$embed_url=get_post_meta(get_the_ID(), 'jmax_audio_url', true);
		echo wp_oembed_get($embed_url);
	else:
		$embed_url=null;
		$params = array( 'width' => 1100, 'height' => 500, 'crop' => true );
	echo '<a class="popup-photo" href="'.wp_get_attachment_url( get_post_thumbnail_id($post->ID) ).'"><img class="featured-img lazy" src="' . bfi_thumb(  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ), $params ) . '"/></a>';
	endif;
}
function get_featured_audio() {
	$audio_file=get_post_meta(get_the_ID(), 'jmax_audio_file', true);
	if($audio_file) :
		$params = array( 'width' => 1100, 'height' => 500, 'crop' => true );
		echo '<div class="audio_file_container"><a class="popup-photo" href="'.wp_get_attachment_url( get_post_thumbnail_id($post->ID) ).'"><img class="featured-img lazy" src="' . bfi_thumb(  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ), $params ) . '"/></a>'.'<div class="audio_file">';
		echo wp_audio_shortcode(array('src' => $audio_file['url']));
		echo '</div></div>';
	else:
		$audio_file=null;
		$params = array( 'width' => 1100, 'height' => 500, 'crop' => true );
	echo '<a class="popup-photo" href="'.wp_get_attachment_url( get_post_thumbnail_id($post->ID) ).'"><img class="featured-img lazy" src="' . bfi_thumb(  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ), $params ) . '"/></a>';
	endif;
}
function get_featured_video() {
	$video_file=get_post_meta(get_the_ID(), 'jmax_video_file', true);
	if($video_file) :
		//echo do_shortcode("[video width='1080' url='".$video_file['url']."']");
	?>
	<video width="320" height="240" controls>
	  <source src="<?php echo $video_file['url']; ?>" type="video/mp4">
	  Your browser does not support the video tag.
	</video>
	<?php
	else:
		$video_file=null;
		$params = array( 'width' => 1100, 'height' => 500, 'crop' => true );
	echo '<a class="popup-photo" href="'.wp_get_attachment_url( get_post_thumbnail_id($post->ID) ).'"><img class="featured-img lazy" src="' . bfi_thumb(  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ), $params ) . '"/></a>';
	endif;
}
function get_featured_thing() {
	if( get_post_meta(get_the_ID() ,'jmax_hide_featured', true)!='on') {
		if(get_post_meta(get_the_ID(), '_tern_wp_youtube_video', true)) :
			$embed_url="http://www.youtube.com/watch?v=".get_post_meta(get_the_ID(), '_tern_wp_youtube_video', true);
		elseif(get_post_meta(get_the_ID() ,'jmax_video_url', true)) :
			$embed_url=get_post_meta(get_the_ID(), 'jmax_video_url', true);
		else:
			$embed_url=null;
		endif;
		$audio_url=get_post_meta(get_the_ID(), 'jmax_audio_url', true);
		$video_file=get_post_meta(get_the_ID(), 'jmax_video_file', true);
		$audio_file=get_post_meta(get_the_ID(), 'jmax_audio_file', true);
		if($video_file): get_featured_video();
		elseif($audio_file) : get_featured_audio();
		elseif($embed_url) : get_featured_embed();
		elseif($audio_url) : get_featured_soundcloud();
		else: $params = array( 'width' => 1100, 'height' => 500, 'crop' => true );
		echo '<a class="popup-photo" href="'.wp_get_attachment_url( get_post_thumbnail_id() ).'"><img class="featured-img lazy" src="' . bfi_thumb(  wp_get_attachment_url( get_post_thumbnail_id() ), $params ) . '"/></a>';
		endif;
	}
}
?>
