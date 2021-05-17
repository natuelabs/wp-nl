<?php
/*
 *  Author: Merrasse Mouhcine | @m_merrasse
 *  URL: wp207.com | @wp207
 *  Custom functions, support, custom post types and more.
 */



    // Theme Options
    add_filter('OT_SHOW_PAGES', '__return_false');
    add_filter('OT_SHOW_NEW_LAYOUT', '__return_false');
    add_filter('OT_THEME_MODE', '__return_true');
    include_once( 'option-tree/ot-loader.php');
    include_once( 'inc/jmax-theme-options.php');
    /*------------------------------------*\
        External Modules/Files
    \*------------------------------------*/
    // add post meta box
    include_once('inc/jmax-plugins/meta-box-class/my-meta-box-class.php');              // create new meta-boxes
    include_once('inc/jmax-plugins/meta-box-class/post-settings.php');                  // config for posts-block
    // helpers
    include_once('inc/jmax-helpers/jmax-time-ago.php');                                 // '2 days ago' instead of exact date
    include_once('inc/jmax-helpers/jmax-meta-info.php');                                // add meta-info to posts view - ex. time-ago - strange formatting, php code needs review
    include_once('inc/jmax-helpers/jmax-get-featured.php');                             // display media assets: video, images, 3rd parties
    include_once('inc/jmax-helpers/jmax-contact-methods.php');                          // theme methods for getting social media contact-links
    include_once('inc/jmax-helpers/jmax-social-icons.php');                             // social icons for authors - methods to get social icons
    include_once('inc/jmax-helpers/jmax-next-prev.php');                                // next/prev links in post page
    include_once('inc/jmax-helpers/jmax-authors-list.php');                             // social icons for authors - redundant
    include_once('inc/jmax-helpers/jmax-review.php');                                   // review-stars for posts
    include_once('inc/jmax-plugins/custom-category-templates/init.php');                // build category-archive page templates
    // widgets
    include_once('inc/jmax-widgets/jmax-posts/jmax-posts.php');                         // module for inserting post information
    include_once('inc/jmax-widgets/jmax-embed-widget.php');                             // embed 3rd parties (Youtube, Soundcloud, ...) -jmax-get-featured probably uses it
    include_once('inc/jmax-widgets/sidebar-login/sidebar-login.php');                   // editor/author login on the sidebar
    //category backgound
    include_once('inc/jmax-plugins/tax-meta-class/tax-meta-class.php');                 // create new meta-fields [derived from meta-box-class]
    include_once('inc/jmax-plugins/tax-meta-class/category-background.php');            // instance of meta-box-class to change category background
    //custom-post-template
    include_once('inc/jmax-plugins/custom-post-template/custom-post-templates.php');    // multiple post templates while editing
    //BFI Thumb
    include_once('inc/jmax-thumb.php');                                                 // resize and filter images to create thumbnails

    // Admin CSS
    function admin_css() {

      $admin_handle = 'admin_css';
      $admin_stylesheet = get_template_directory_uri() . '/css/admin.css';

      wp_enqueue_style( $admin_handle, $admin_stylesheet );
    }

    add_action('admin_print_styles', 'admin_css', 11 );

    /*------------------------------------*\
        Theme Support
    \*------------------------------------*/

    //Adding the Open Graph in the Language Attributes
    function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#"';
    }

    add_filter('language_attributes', 'add_opengraph_doctype');
    if (!isset($content_width))
    {
      $content_width = 700;
    }

    if( is_admin() ) {
    //include_once('inc/jmax-update.php');
    }

//RANDOM POST LINK
  add_action('init','random_post');
  function random_post() {
    global $wp;
    $wp->add_query_var('random');
    add_rewrite_rule('random/?$', 'index.php?random=1', 'top');
  }

  add_action('template_redirect','random_template');
  function random_template() {
    if (get_query_var('random') == 1) {
      $posts = get_posts('post_type=post&orderby=rand&numberposts=1');
      foreach($posts as $post) {
        $link = get_permalink($post);
      }

      wp_redirect($link,307);
      exit;
    }
  }

  if (function_exists('add_theme_support'))
  {
    // Add Menu Support
    add_theme_support('menus');
    add_theme_support( 'post-formats', array( 'video', 'gallery', 'image', 'audio') );
    // Add Thumbnail Theme Support
    add_theme_support( 'post-thumbnails', array( 'post', 'page', 'product' ) );
    add_image_size('large', 725, 300, true);
    add_image_size('large-2', 725, '', true);
    add_image_size('medium', 350, 150, true);
    add_image_size('carre', 280, 280, true);
    add_image_size('small', 200, 113, true); // Small Thumbnail
    add_image_size('mini', 100, 100, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('jmax', get_template_directory() . '/languages');

    //Woocommerce - since version 1.3
    add_theme_support( 'woocommerce' );

  }

  function custom_size_gallery($attr) {
    // Change size here - medium, large, full
    $attr['size'] = 'carre';
    return gallery_shortcode($attr);
  }

  // Load jmax scripts (footer.php)
  function jmax_header_scripts()
  {
    if (!is_admin()) {
        wp_enqueue_script("jquery");
    }
  }


  // Load jmax styles
  function jmax_assets()
  {
    //styles
    wp_register_style('jmax', get_template_directory_uri() . '/style.css', array(), '1.2.10', 'all');
    wp_enqueue_style('jmax'); // Enqueue it!
    wp_register_style('flexslider', get_template_directory_uri() . '/js/flex-slider/flexslider.css', array(), '1.0', 'all');
    wp_enqueue_style('flexslider'); // Enqueue it!
    wp_register_style('mCustomScrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css', array(), '1.0', 'all');
    wp_enqueue_style('mCustomScrollbar'); // Enqueue it!
    wp_register_style('tooltipster', get_template_directory_uri() . '/css/tooltipster.css', array(), '1.0', 'all');
    wp_enqueue_style('tooltipster'); // Enqueue it!
    wp_register_style('magnific-popup', get_template_directory_uri() . '/js/magnific-popup/magnific-popup.css', array(), '1.0', 'all');
    wp_enqueue_style('magnific-popup'); // Enqueue it!
    wp_register_style('font-awesome', get_template_directory_uri() . '/css/foa/css/font-awesome.min.css', array(), '1.0', 'all');
    wp_enqueue_style('font-awesome'); // Enqueue it!
    //register scripts
    wp_register_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js');
    wp_register_script('inview', get_template_directory_uri() . '/js/jquery.inview.js');
    wp_register_script('mCustomScrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.js');
    wp_register_script('tooltipster', get_template_directory_uri() . '/js/jquery.tooltipster.js');
    wp_register_script('fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js');
    wp_register_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js');
    wp_register_script('magnific-popup', get_template_directory_uri() . '/js/magnific-popup/magnific-popup.js');
    wp_register_script('flexslider', get_template_directory_uri() . '/js/flex-slider/jquery.flexslider-min.js');
    wp_register_script('webticker', get_template_directory_uri() . '/js/jquery.webticker.min.js');
    wp_register_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.min.js');
    wp_register_script('isotope', get_template_directory_uri() . '/js/isotope.min.js');
    wp_register_script('sticky', get_template_directory_uri() . '/js/jquery.sticky.js');
    wp_register_script('splio', get_template_directory_uri() . '/js/splio-widget.js');
    wp_register_script('chaordic', get_template_directory_uri() . '/js/chaordic.js');
    //enqueu scripts
    wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array( 'jquery', 'easing' ));
    wp_enqueue_script('inview', get_template_directory_uri() . '/js/jquery.inview.js', array('jquery', 'inview'));
    wp_enqueue_script('tooltipster', get_template_directory_uri() . '/js/jquery.tooltipster.js', array('jquery', 'tooltipster'));
    wp_enqueue_script('fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array('jquery', 'fitvids'));
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js', array('jquery', 'jquery-ui'));
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/magnific-popup/magnific-popup.js', array('jquery', 'magnific-popup'));
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/flex-slider/jquery.flexslider-min.js', array('jquery', 'flexslider'));
    wp_enqueue_script('webticker', get_template_directory_uri() . '/js/jquery.webticker.min.js', array('jquery', 'webticker'));
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.min.js', array('jquery', 'imagesloaded'));
    wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.min.js', array('jquery', 'isotope'));
    wp_enqueue_script('sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array('jquery', 'sticky'));
    wp_enqueue_script('splio', get_template_directory_uri() . '/js/splio-widget.js', array('jquery', 'splio'));
    wp_enqueue_script('chaordic', get_template_directory_uri() . '/js/chaordic.js', array('jquery', 'chaordic'));
  }

  function load_footer_scripts()
  {
    wp_enqueue_script('menu-aim', get_template_directory_uri() . '/js/jquery.menu-aim.js');
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr-latest.js');
    wp_enqueue_script('natue', get_template_directory_uri() . '/js/main.natue.js', ['jquery', 'modernizr', 'menu-aim']);
  }


// Register jmax Navigation
  function register_jmax_menu()
  {
    register_nav_menus(array( // Using array to specify more menus if needed
        'main-menu' => __('Main Menu', 'jmax'), // Main Navigation
        'top-menu' => __('Top Menu', 'jmax'), // Top Navigation
        'footer-menu' => __('Footer Menu', 'jmax'), // Footer Navigation
    ));
  }

  // Remove the <div> surrounding the dynamic navigation to cleanup markup
  function my_wp_nav_menu_args($args = '')
  {
    $args['container'] = false;
    return $args;
  }

  // Remove Injected classes, ID's and Page ID's from Navigation <li> items
  function my_css_attributes_filter($var)
  {
    return is_array($var) ? array() : '';
  }

  // Remove invalid rel attribute values in the categorylist
  function remove_category_rel_from_category_list($thelist)
  {
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
  }

  // Add page slug to body class, love this - Credit: Starkers Wordpress Theme
  function add_slug_to_body_class($classes)
  {
    global $post;
    if (is_home()) {
      $key = array_search('blog', $classes);
      if ($key > -1) {
        unset($classes[$key]);
      }
    } elseif (is_page()) {
      $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
      $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
  }

  // TRACK VIEWS
  function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
  }

  function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
  }

  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  function jmax_widget_title($title)
  {
    return $title == '&nbsp;' ? '' : $title;
  }

  add_filter('widget_title', 'jmax_widget_title');

  // If Dynamic Sidebar Exists
  if (function_exists('register_sidebar'))
  {
    // Default Sidebar
    register_sidebar(array(
      'name' => __('Default Sidebar', 'jmax'),
      'description' => __('Add sidebar widgets here...', 'jmax'),
      'id' => 'sidebar-widgets',
      'before_widget' => '<div id="%1$s" class="%2$s widget-area">',
      'after_widget' => '<div class="j-clear"></div></div>',
      'before_title' => '<div class="widget-heading"><span>',
      'after_title' => '</span><div class="j-clear"></div></div>'
  ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
      'name' => __('Footer Widgets Area', 'jmax'),
      'description' => __('Add footer widgets here...', 'jmax'),
      'id' => 'footer-widgets',
      'before_widget' => '<div id="%1$s" class="%2$s widget-footer widget-area">',
      'after_widget' => '<div class="j-clear"></div></div>',
      'before_title' => '<div class="widget-heading"><span>',
      'after_title' => '</span><div class="j-clear"></div></div>'
    ));

  }

  // Remove wp_head() injected Recent Comment styles
  function my_remove_recent_comments_style()
  {
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
  }

  // Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
  function jmaxwp_pagination()
  {
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
  }

  // Create the Custom Excerpts callback
  function jmaxwp_excerpt($length_callback = '')
  {
    $content = strip_shortcodes(get_the_content());
    if($length_callback=='jmaxwp_small') :
      $length=20;
    elseif($length_callback=='jmaxwp_very_tiny') :
      $length=4;
    elseif($length_callback=='jmaxwp_tiny') :
      $length=14;
    elseif($length_callback=='jmaxwp_medium') :
      $length=18;
    elseif($length_callback=='jmaxwp_large') :
      $length=100;
    elseif($length_callback=='jmaxwp_slider') :
      $length=58;
    elseif($length_callback=='jmaxwp_custom_post') :
      $length=40;
    else:
      $length=40;
    endif;
    echo '<p>'. wp_trim_words( $content , $length ).'</p>';
  }

  // Custom View Article link to Post
  function jmax_blank_view_article($more)
  {
    global $post;
    return '';
  }

  // Remove Admin bar
  function remove_admin_bar()
  {
    return false;
  }

  // Remove 'text/css' from our enqueued stylesheet
  function jmax_style_remove($tag)
  {
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
  }

  // Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
  function remove_thumbnail_dimensions( $html )
  {
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
  }

  // Custom Gravatar in Settings > Discussion
  function jmaxgravatar ($avatar_defaults)
  {
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
  }

  // Threaded Comments
  function enable_threaded_comments()
  {
    if (!is_admin()) {
      if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
        wp_enqueue_script('comment-reply');
      }
    }
  }



  /*------------------------------------*\
      Actions + Filters + ShortCodes
  \*------------------------------------*/

  // Add Actions
  add_action('init', 'jmax_header_scripts'); // Add Custom Scripts to wp_head
  add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
  add_action('wp_enqueue_scripts', 'jmax_assets'); // Add Theme Stylesheet
  add_action('init', 'register_jmax_menu'); // Add jmax Menu
  add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
  add_action('init', 'jmaxwp_pagination'); // Add our jmax Pagination
  add_action('wp_footer', 'load_footer_scripts');

  // Remove Actions
  remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
  remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
  remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
  remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
  remove_action('wp_head', 'index_rel_link'); // Index link
  remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
  remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
  remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'rel_canonical');
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

  // Add Filters
  add_filter('avatar_defaults', 'jmaxgravatar'); // Custom Gravatar in Settings > Discussion
  add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
  add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
  add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
  add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
  // add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
  // add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
  // add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
  add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
  add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
  add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
  add_filter('excerpt_more', 'jmax_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
  //add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
  add_filter('style_loader_tag', 'jmax_style_remove'); // Remove 'text/css' from enqueued stylesheet
  add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
  add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

  // Remove Filters
  remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether
  // Category colors helpers
  function get_cat_slug($cat_id) {
    $cat_id = (int) $cat_id;
    $cat= get_category($cat_id);
    $category = &$cat;
    return $category->slug;
  }

  function get_current_slug() {
    $categories = get_the_category();
    $category_id = $categories[0]->cat_ID;
    $cat_id = $category_id;
    $cat= get_category($cat_id);
    $category = &$cat;
    return $category->slug;
  }

  function wpa_category_nav_class( $classes, $item ){
    if( 'category' == $item->object ){
        $category = get_category( $item->object_id );
        $classes[] =  $category->slug.'-slug';
    }
    return $classes;
  }

  add_filter( 'nav_menu_css_class', 'wpa_category_nav_class', 10, 2 );

  /* =============================================================================
    Include the Option-Tree Google Fonts Plugin
    ========================================================================== */

    // load the ot-google-fonts plugin if the loader class is available
    if( class_exists( 'OT_Loader' ) ):

      global $ot_options;
      $ot_options = get_option( 'option_tree' );

      // default fonts used in this theme, even though there are no google fonts
      $default_theme_fonts = array(
        'arial' => 'Arial, Helvetica, sans-serif',
        'helvetica' => 'Helvetica, Arial, sans-serif',
        'georgia' => 'Georgia, "Times New Roman", Times, serif',
        'tahoma' => 'Tahoma, Geneva, sans-serif',
        'times' => '"Times New Roman", Times, serif',
        'trebuchet' => '"Trebuchet MS", Arial, Helvetica, sans-serif',
        'verdana' => 'Verdana, Geneva, sans-serif'
      );

      defined('OT_FONT_DEFAULTS') or define('OT_FONT_DEFAULTS', serialize($default_theme_fonts));
      defined('OT_FONT_API_KEY') or define('OT_FONT_API_KEY', 'AIzaSyC8UsdQgZMvPpFWxsAHSqBGdaI8lD3nQM4'); // enter your own Google Font API key here
      defined('OT_FONT_CACHE_INTERVAL') or define('OT_FONT_CACHE_INTERVAL', 0); // Checking once a week for new Fonts. The time interval for the remote XML cache in the database (21600 seconds = 6 hours)

    endif;

    //custom login logo
    function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.ot_get_option('login_logo').') !important; }
    </style>';
    }

    add_action('login_head', 'my_custom_login_logo');


    add_filter('next_post_link', 'post_link_attributes');
    add_filter('previous_post_link', 'post_link_attributes');

    function post_link_attributes($output) {
      $code = 'class="post_title"';
      return str_replace('<a href=', '<a '.$code.' href=', $output);
    }

  /**
   * Include the TGM_Plugin_Activation class.
   */
    require_once get_stylesheet_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

    add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
    /**
     * Register the required plugins for this theme.
     *
     * In this example, we register two plugins - one included with the TGMPA library
     * and one from the .org repo.
     *
     * The variable passed to tgmpa_register_plugins() should be an array of plugin
     * arrays.
     *
     * This function is hooked into tgmpa_init, which is fired within the
     * TGM_Plugin_Activation class constructor.
     */
    function my_theme_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */

    $plugins = array(
        array(
          'name'               => 'Custom Sidebars', // The plugin name.
          'slug'               => 'custom-sidebars', // The plugin slug (typically the folder name).
          'source'             => 'http://downloads.wordpress.org/plugin/custom-sidebars.zip', // The plugin source.
          'required'           => true, // If false, the plugin is only 'recommended' instead of required.
          'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
          'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
          'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
          'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
          'name'               => 'Shortcodes Ultimate', // The plugin name.
          'slug'               => 'shortcodes-ultimate', // The plugin slug (typically the folder name).
          'source'             => 'http://downloads.wordpress.org/plugin/shortcodes-ultimate.zip', // The plugin source.
          'required'           => true, // If false, the plugin is only 'recommended' instead of required.
          'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
          'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
          'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
          'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
          'name'               => 'WP Fatest Cache', // The plugin name.
          'slug'               => 'wp-fatest-cache', // The plugin slug (typically the folder name).
          'source'             => 'http://downloads.wordpress.org/plugin/wp-fastest-cache.zip', // The plugin source.
          'required'           => false, // If false, the plugin is only 'recommended' instead of required.
          'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
          'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
          'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
          'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
      'default_path' => '',                      // Default absolute path to pre-packaged plugins.
      'menu'         => 'tgmpa-install-plugins', // Menu slug.
      'has_notices'  => true,                    // Show admin notices or not.
      'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
      'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
      'is_automatic' => false,                   // Automatically activate plugins after installation or not.
      'message'      => '',                      // Message to output right before the plugins table.
      'strings'      => array(
        'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
        'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
        'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
        'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
        'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
        'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
        'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
        'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
        'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
        'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
        'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
        'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
        'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
        'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
        'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
        'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
        'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
        'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
      )
    );

    tgmpa( $plugins, $config );

  }

  function get_main_category( $postID ) {
    $categories = get_the_category( $postID );
    $mainCategories = array_filter( $categories, function ( $category ) {
      return $category->category_parent === 0;
    } );

    return reset($mainCategories);
  }
?>
