<?php
function next_prev() {
	
?>
<div class="newer-older">
			<?php 
              $prev_post = get_previous_post();
              $next_post = get_next_post();
              $next_post_title=$next_post->post_title;
              $prev_post_title=$prev_post->post_title; 
			?>
			<?php if (!empty( $prev_post )): ?>
			<div class="older">
				<p><?php previous_post_link('%link', __('Previous','jmax')) ?><br/>
	            <a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo substr($prev_post_title, 0, 50).'...'; ?></a>
				</p>
			</div>
			<?php endif; ?>
			<div class="speacer"></div>
			<?php if (!empty( $next_post )): ?>
			<div class="newer">
				<p><?php next_post_link('%link', __('Next','jmax')) ?><br/>
	            <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo substr($next_post_title, 0, 50).'...'; ?></a>
	            </p>
            </div>
            <?php endif; ?>
			<div class="clear"></div>
</div><!--.newer-older-->
<?php
}
?>