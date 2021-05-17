<?php if(ot_get_option('enable_author_box','on')== 'on'  && get_the_author_meta('description')) : ?>
    <div class="j-block-author">
        <div class="nice-heading">
            <h3><?php _e('About','jmax'); ?>&nbsp;<?php the_author(); ?></h3>
            <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" title="<?php _e('More posts by','jmax'); echo ' '; the_author(); ?>" class="more-from-author"><?php _e('MORE+','jmax');  ?></a>
        </div>

        <div id="post-author">
            <p class="gravatar"><?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '80' ); /* This avatar is the user's gravatar (http://gravatar.com) based on their administrative email address */  } ?></p>

            <div class="authorDescription" id="authorDescription">
                <?php the_author_meta('description') ?>
                <div class="author_social_links single_box">
                <?php get_author_social_icons(); ?>
                </div><!--#author-description -->
            </div>

            <div class="j-clear"></div>
        </div><!--#post-author-->
    </div><!--block-->
<?php endif; ?>
