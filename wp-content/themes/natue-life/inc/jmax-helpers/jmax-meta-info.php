<?php
	function jmax_meta_info($mode='small') {
		if($mode=='small'):
?>
		<div class="j-meta-info">
			<?php echo jmax_time_ago(); ?>&nbsp;&nbsp;<?php _e('Por','jmax'); echo '&nbsp;&nbsp;'; the_author();  ?>
		</div>

<?php elseif($mode=='big'): ?>
	<div class="j-meta-info">
		<span class="fa fa-clock-o"></span>&nbsp;&nbsp;<?php echo jmax_time_ago(); ?>&nbsp;&nbsp;
		<span class="fa fa-comments"></span>&nbsp;&nbsp;<?php comments_popup_link( __( 'Sem Comentários', 'jmax' ), __( '1 Comentário', 'jmax' ), __( '% Comentários', 'jmax' )); ?>
	</div>

<?php elseif($mode=='date'): ?>
	<div class="j-meta-info ">
		<span class="fa fa-clock-o"></span>&nbsp;&nbsp;<?php echo jmax_time_ago(); ?>
	</div>

<?php elseif($mode=='single'): ?>
	<div class="j-meta-info single-meta">
		<?php echo jmax_time_ago(); ?>&nbsp;&nbsp;<?php _e('Por','jmax'); echo '&nbsp;&nbsp;'; the_author(); ?>&nbsp;&nbsp;
		<span class="fa fa-comments"></span>&nbsp;&nbsp;<?php comments_popup_link( __( 'Sem Comentários', 'jmax' ), __( '1 Comentário', 'jmax' ), __( '% Comentários', 'jmax' )); ?>
	</div>
<?php
endif;
//end jmax meta_info
}

function jmax_like_button($show) {
	$show_like_button=ot_get_option('show_like_button','both');
	if($show=='top') :
		if($show_like_button=='before_content' || $show_like_button=='both')
			echo "<div class='jmax_like'><div class='fb_page_share_widget'><span class='st_twitter_hcount' displayText='Tweet'></span>
			<span class='st_facebook_hcount' displayText='Facebook Like'  ></span>
			<span class='st_plusone_hcount' displayText='Google +1'></span></div></div>";;

	 elseif($show=='bottom') :
		if($show_like_button=='after_content' || $show_like_button=='both')
			echo "<div class='jmax_like'><div class='fb_page_share_widget'><span class='st_twitter_hcount' displayText='Tweet'></span>
			<span class='st_facebook_hcount' displayText='Facebook Like'  ></span>
			<span class='st_plusone_hcount' displayText='Google +1'></span></div></div>";;
   endif;
}

function jmax_post_tags() {
	echo '<div class="j-tags-list-container">';
	if(has_category()) :
	?>
		<div class="j-tags-lis-block"><div class="j-tags-title"><h4><?php _e('Categories', 'jmax') ?> - </h4></div><div class="list-tags"><?php the_category( ' '); // Separated by commas with a line break at the end ?></div><div class="j-clear"></div></div>
	<?php
	endif;
	echo '</div>';
	?>

<?php
}
	function jmax_post_format_icon($size=null) {
		if($size=='small') :
			if(has_post_format('image', get_the_ID())) :
				echo '<small><i class="fa fa-picture-o"></i></small>';
			elseif(has_post_format('gallery', get_the_ID())) :
				echo '<small><i class="fa fa-picture-o"></i></small>';
			elseif(has_post_format('video', get_the_ID())) :
				echo '<small><i class="fa fa-play"></i></small>';
			elseif(has_post_format('audio', get_the_ID())) :
				echo '<small><i class="fa fa-volume-up"></i></small>';
			else :
				echo '<small><i class="fa fa-file-text"></i></small>';
			endif;
		else:
			if(has_post_format('image', get_the_ID())) :
				echo '<i class="fa fa-picture-o"></i>';
			elseif(has_post_format('gallery', get_the_ID())) :
				echo '<i class="fa fa-picture-o"></i>';
			elseif(has_post_format('video', get_the_ID())) :
				echo '<i class="fa fa-play"></i>';
			elseif(has_post_format('audio', get_the_ID())) :
				echo '<i class="fa fa-volume-up"></i>';
			else :
				echo '<i class="fa fa-file-text"></i>';
			endif;
		endif;
	}
?>
