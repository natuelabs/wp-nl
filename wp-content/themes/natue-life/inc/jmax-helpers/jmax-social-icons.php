<?php
	function get_top_social_icons() {
        //SOCIAL ICONS
        $facebook=ot_get_option('facebook');
        $twitter=ot_get_option('twitter');
        $google_plus=ot_get_option('google_plus');
        $instagram=ot_get_option('instagram');
        $youtube=ot_get_option('youtube');
        $vine=ot_get_option('vine');
        $linkedin=ot_get_option('linkedin');
        $flickr=ot_get_option('flickr');
        $pinterest=ot_get_option('pinterest');
        $github=ot_get_option('github');
        $soundcloud=ot_get_option('soundcloud');
        $rss=ot_get_option('rss');
        $rss_link=get_bloginfo('rss2_url');
        if($facebook)
            echo '<li><a href="'.$facebook.'"><i class="fa fa-facebook"></i></a></li>';;
        if($twitter)
            echo '<li><a href="'.$twitter.'"><i class="fa fa-twitter"></i></a></li>';;
        if($google_plus)
            echo '<li><a href="'.$google_plus.'"><i class="fa fa-google-plus"></i></a></li>';;
        if($instagram)
            echo '<li><a href="'.$instagram.'"><i class="fa fa-instagram"></i></a></li>';;
        if($youtube)
            echo '<li><a href="'.$youtube.'"><i class="fa fa-youtube-play"></i></a></li>';;
         if($linkedin)
            echo '<li><a href="'.$linkedin.'"><i class="fa fa-linkedin"></i></a></li>';;
        if($vine)
            echo '<li><a href="'.$vine.'"><i class="fa fa-vine"></i></a></li>';;
        if($flickr)
            echo '<li><a href="'.$flickr.'"><i class="fa fa-flickr"></i></a></li>';;
        if($soundcloud)
            echo '<li><a href="'.$soundcloud.'"><i class="fa fa-soundcloud"></i></a></li>';;
        if($pinterest)
            echo '<li><a href="'.$pinterest.'"><i class="fa fa-pinterest"></i></a></li>';;
        if($github)
            echo '<li><a href="'.$github.'"><i class="fa fa-github"></i></a></li>';;
        if($rss=='on')
            echo '<li><a href="'.$rss_link.'"><i class="fa fa-rss"></i></a></li>';;
    }
    function get_about_social_icons() {
        //SOCIAL ICONS
        $facebook=ot_get_option('facebook');
        $twitter=ot_get_option('twitter');
        $google_plus=ot_get_option('google_plus');
        $instagram=ot_get_option('instagram');
        $youtube=ot_get_option('youtube');
        $vine=ot_get_option('vine');
        $linkedin=ot_get_option('linkedin');
        $flickr=ot_get_option('flickr');
        $pinterest=ot_get_option('pinterest');
        $github=ot_get_option('github');
        $soundcloud=ot_get_option('soundcloud');
        $rss=ot_get_option('rss');
        $rss_link=get_bloginfo('rss2_url');
        echo '<div class="about-social-icons">';
        if($facebook)
            echo '<a class="facebook" href="'.$facebook.'"><i class="fa fa-facebook"></i></a>';;
        if($twitter)
            echo '<a class="twitter" href="'.$twitter.'"><i class="fa fa-twitter"></i></a>';;
        if($google_plus)
            echo '<a class="google-plus" href="'.$google_plus.'"><i class="fa fa-google-plus"></i></a>';;
        if($instagram)
            echo '<a class="instagram" href="'.$instagram.'"><i class="fa fa-instagram"></i></a>';;
        if($youtube)
            echo '<a class="youtube" href="'.$youtube.'"><i class="fa fa-youtube-play"></i></a>';;
         if($linkedin)
            echo '<a class="linkedin" href="'.$linkedin.'"><i class="fa fa-linkedin"></i></a>';;
        if($vine)
            echo '<a class="vine" href="'.$vine.'"><i class="fa fa-vine"></i></a>';;
        if($flickr)
            echo '<a class="flickr" href="'.$flickr.'"><i class="fa fa-flickr"></i></a>';;
        if($soundcloud)
            echo '<a class="soundcloud" href="'.$soundcloud.'"><i class="fa fa-soundcloud"></i></a>';;
        if($pinterest)
            echo '<a class="pinterest" href="'.$pinterest.'"><i class="fa fa-pinterest"></i></a>';;
        if($github)
            echo '<a class="github" href="'.$github.'"><i class="fa fa-github"></i></a>';;
        if($rss=='on')
            echo '<a class="rss" href="'.$rss_link.'"><i class="fa fa-rss"></i></a>';;
        echo '</div>';
    }
    function get_author_social_icons() {
        //SOCIAL ICONS
        $facebook=get_the_author_meta('facebook');
        $twitter=get_the_author_meta('twitter');
        $google_plus=get_the_author_meta('google_plus');
        $instagram=get_the_author_meta('instagram');
        $youtube=get_the_author_meta('youtube');
        $vimeo=get_the_author_meta('vimeo');
        $linkedin=get_the_author_meta('linkedin');
        $flickr=get_the_author_meta('flickr');
        $pinterest=get_the_author_meta('pinterest');
        $github=get_the_author_meta('github');
        $website=get_the_author_meta('user_url');
        if($facebook)
            echo '<a href="'.$facebook.'"><i class="fa fa-facebook"></i></a>';;
        if($twitter)
            echo '<a href="'.$twitter.'"><i class="fa fa-twitter"></i></a>';;
        if($google_plus)
            echo '<a href="'.$google_plus.'"><i class="fa fa-google-plus"></i></a>';;
        if($instagram)
            echo '<a href="'.$instagram.'"><i class="fa fa-instagram"></i></a>';;
        if($linkedin)
            echo '<a href="'.$linkedin.'"><i class="fa fa-linkedin"></i></a>';;
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
    }
?>