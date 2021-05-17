<?php
    if (is_page() && ot_get_option('enable_comments_on_pages','off')=='off') :
        return;
    elseif ( comments_open() ) :
?>
    <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="10" data-width="100%" data-colorscheme="light"></div>
<?php endif; ?>
