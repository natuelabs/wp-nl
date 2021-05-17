<?php
function jmax_auhtors_list() {

$query 		= get_users('orderby=post_count&order=desc&who=authors');

echo '<ul class="j-block-authors-list">';

foreach($query as $q) { ?>
	<li>
		<div id="post-author">

				<div class="gravatar">
					<a href="<?php echo get_author_posts_url($q->ID);?>"> 
					<?php echo get_avatar( $q->ID, 80 ); ?>
					</a>
				</div>
				<div class="authorDescription" ="authorDescription">	
					<h3 style="margin-bottom:10px;"><a href="<?php echo get_author_posts_url($q->ID);?>">  
	                    <?php echo get_the_author_meta('display_name', $q->ID);?>  
	                </a>  </h3>
					<?php echo get_the_author_meta('description', $q->ID); ?>
					<div class="author_social_links single_box">
					<?php 
						//SOCIAL ICONS
				        $facebook=get_the_author_meta('facebook', $q->ID);
				        $twitter=get_the_author_meta('twitter', $q->ID);
				        $google_plus=get_the_author_meta('google_plus', $q->ID);
				        $instagram=get_the_author_meta('instagram', $q->ID);
				        $youtube=get_the_author_meta('youtube', $q->ID);
				        $vimeo=get_the_author_meta('vimeo', $q->ID);
				        $linkedin=get_the_author_meta('linkedin', $q->ID);
				        $flickr=get_the_author_meta('flickr', $q->ID);
				        $pinterest=get_the_author_meta('pinterest', $q->ID);
				        $github=get_the_author_meta('github', $q->ID);
				        $website=get_the_author_meta('user_url', $q->ID);
				        if($facebook)
				            echo '<a href="'.$facebook.'"><i class="fa fa-facebook"></i></a>';;
				        if($twitter)
				            echo '<a href="'.$twitter.'"><i class="fa fa-twitter"></i></a>';;
				        if($google_plus)
				            echo '<a href="'.$google_plus.'"><i class="fa fa-google-plus"></i></a>';;
				        if($instagram)
				            echo '<a href="'.$instagram.'"><i class="fa fa-instagram"></i></a>';;
				        if($linkedin)
				            echo '<a href="'.$linkedin.'"><i class="fa fa-linkedin-square"></i></a>';;
				        if($youtube)
				            echo '<a href="'.$youtube.'"><i class="fa fa-youtube-play"></i></a>';;
				        if($vimeo)
				            echo '<a href="'.$vimeo.'"><i class="fa fa-vimeo-square"></i></a>';;
				        if($flickr)
				            echo '<a href="'.$flickr.'"><i class="fa fa-flickr"></i></a>';;
				        if($pinterest)
				            echo '<a href="'.$pinterest.'"><i class="fa fa-pinterest"></i></a>';;
				        if($github)
				            echo '<a href="'.$github.'"><i class="fa fa-github"></i></a>';;
				        if($website)
				            echo '<a href="'.$website.'"><i class="fa fa-link"></i></a>';;
					?>
					</div><!--#author-description -->		
				</div>
				
				<div class="j-clear"></div>
			</div><!--#post-author-->
	</li>

<?php } 

echo '</ul>';

?>
<?php
}
?>
