<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  
  /* OptionTree is not loaded yet */
  if ( ! function_exists( 'ot_settings_id' ) )
    return false;
    
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => __( 'GENERAL', 'jmax' )
      ),
      array(
        'id'          => 'customization',
        'title'       => __( 'CUSTOMIZATION', 'jmax' )
      ),
      array(
        'id'          => 'news_ticker',
        'title'       => __( 'NEWS TICKER', 'jmax' )
      ),
      array(
        'id'          => 'home_slider',
        'title'       => __( 'HOME SLIDER', 'jmax' )
      ),
      array(
        'id'          => 'home_page',
        'title'       => __( 'HOME PAGE', 'jmax' )
      ),
      array(
        'id'          => 'social_links',
        'title'       => __( 'SOCIAL LINKS', 'jmax' )
      ),
      array(
        'id'          => 'ads_manager',
        'title'       => __( 'ADS MANAGER', 'jmax' )
      ),
      array(
        'id'          => 'category_layouts',
        'title'       => __( 'CATEGORY SETTINGS', 'jmax' )
      ),
      array(
        'id'          => 'pages_layouts',
        'title'       => __( 'PAGES LAYOUTS', 'jmax' )
      ),
      array(
        'id'          => 'post_settings',
        'title'       => __( 'POST &amp; PAGE SETTINGS', 'jmax' )
      ),
      array(
        'id'          => 'copyrights__amp__analytics',
        'title'       => __( 'FOOTER COPYRIGHTS &amp; ANALYTICS', 'jmax' )
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'logo',
        'label'       => __( 'Logo', 'jmax' ),
        'desc'        => __( 'Upload your logo here!', 'jmax' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'login_logo',
        'label'       => __( 'Login Logo', 'jmax' ),
        'desc'        => __( 'The size of your logo should be no bigger than 323 pixels wide by 67 pixels high.', 'jmax' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'favicon',
        'label'       => __( 'Favicon', 'jmax' ),
        'desc'        => __( 'Upload your favicon here!', 'jmax' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'date_format',
        'label'       => __( 'Date format', 'jmax' ),
        'desc'        => __( 'If you don\'t want to use time ago function you can put here your desired date format that will be used in theme, you can see more about formatting date and time in this link : http://codex.wordpress.org/Formatting_Date_and_Time', 'jmax' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'enable_top_menu',
        'label'       => __( 'Enable top menu', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'enable_main_menu',
        'label'       => __( 'Enable main menu', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'menu_style',
        'label'       => __( 'Main Menu style', 'jmax' ),
        'desc'        => '',
        'std'         => 'dark',
        'type'        => 'radio',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'dark',
            'label'       => __( 'Dark', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'light',
            'label'       => __( 'Light', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'principal_color',
        'label'       => __( 'Principal color', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'customization',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'link_hover_color',
        'label'       => __( 'Link hover color', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'customization',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'selection_color',
        'label'       => __( 'Selection color', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'customization',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'layout',
        'label'       => __( 'Layout', 'jmax' ),
        'desc'        => '',
        'std'         => 'boxed',
        'type'        => 'radio',
        'section'     => 'customization',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'boxed',
            'label'       => __( 'Boxed', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'stretched',
            'label'       => __( 'Stretched', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'body_background',
        'label'       => __( 'Body Background', 'jmax' ),
        'desc'        => __( 'For boxed layout only!', 'jmax' ),
        'std'         => '',
        'type'        => 'background',
        'section'     => 'customization',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'full_screen_background',
        'label'       => __( 'Full-screen background', 'jmax' ),
        'desc'        => __( 'To make a full-screen effect for the body background image', 'jmax' ),
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'customization',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'body_font',
        'label'       => __( 'Paragraphs font', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'customization',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'menus_font',
        'label'       => __( 'Menus font', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'customization',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'headings_font',
        'label'       => __( 'Headings font', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'customization',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'enable_news_ticker',
        'label'       => __( 'Enable news ticker', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'news_ticker',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'news_ticker_title',
        'label'       => __( 'News ticker title', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'news_ticker',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'news_ticker_categories',
        'label'       => __( 'Categories', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'category-checkbox',
        'section'     => 'news_ticker',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'news_ticker_order_by',
        'label'       => __( 'Order by', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'news_ticker',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'date',
            'label'       => __( 'Date', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'title',
            'label'       => __( 'Title', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'comment_count',
            'label'       => __( 'Comments', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'views',
            'label'       => __( 'Views', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'rand',
            'label'       => __( 'Random', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'news_ticker_order',
        'label'       => __( 'Order method', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'news_ticker',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'desc',
            'label'       => __( 'Descending', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'asc',
            'label'       => __( 'Ascending', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'news_ticker_show_posts',
        'label'       => __( 'Number of posts', 'jmax' ),
        'desc'        => '',
        'std'         => '10',
        'type'        => 'numeric-slider',
        'section'     => 'news_ticker',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'news_ticker_speed',
        'label'       => __( 'Ticker Speed ( Pixels per second )', 'jmax' ),
        'desc'        => '',
        'std'         => '50',
        'type'        => 'text',
        'section'     => 'news_ticker',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'news_ticker_direction',
        'label'       => __( 'Ticker direction', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'news_ticker',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'left',
            'label'       => __( 'Left', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'right',
            'label'       => __( 'Right', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'enable_slider',
        'label'       => __( 'Enable slider', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'home_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'carousel_categories',
        'label'       => __( 'Categories', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'category-checkbox',
        'section'     => 'home_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'carousel_order_by',
        'label'       => __( 'Order by', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'home_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'date',
            'label'       => __( 'Date', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'title',
            'label'       => __( 'Title', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'comment_count',
            'label'       => __( 'Comments', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'views',
            'label'       => __( 'Views', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'rand',
            'label'       => __( 'Random', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'carousel_order',
        'label'       => __( 'Order method', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'home_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'desc',
            'label'       => __( 'Descending', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'asc',
            'label'       => __( 'Ascending', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'carousel_number_posts',
        'label'       => __( 'Number of posts', 'jmax' ),
        'desc'        => '',
        'std'         => '10',
        'type'        => 'numeric-slider',
        'section'     => 'home_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'carousel_slideshow',
        'label'       => __( 'Enable slideshow', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'home_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'carousel_speed',
        'label'       => __( 'Slideshow speed', 'jmax' ),
        'desc'        => '',
        'std'         => '7000',
        'type'        => 'text',
        'section'     => 'home_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'carousel_easing',
        'label'       => __( 'Easing', 'jmax' ),
        'desc'        => __( 'Find more easing effects here <a href="http://jqueryui.com/resources/demos/effect/easing.html">jQuery UI effects</a>', 'jmax' ),
        'std'         => 'swing',
        'type'        => 'text',
        'section'     => 'home_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'home_page_style',
        'label'       => __( 'Home page style', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'home_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => __( 'Modular Home Page', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => __( 'Latest posts ( One column image + info bellow )', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '3',
            'label'       => __( 'Latest posts ( One column image + info )', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '4',
            'label'       => __( 'Latest posts ( Tow columns )', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '5',
            'label'       => __( 'Latest posts ( Three columns withut sidebar  )', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'home_sidebar',
        'label'       => __( 'Home sidebar', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'home_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'right',
            'label'       => __( 'Right', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'left',
            'label'       => __( 'Left', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'home_blocks',
        'label'       => __( 'Home page moduls', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'home_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'block_categories',
            'label'       => __( 'Categories', 'jmax' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'category-checkbox',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'block_order_by',
            'label'       => __( 'Order by', 'jmax' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'select',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and',
            'choices'     => array( 
              array(
                'value'       => 'date',
                'label'       => __( 'Date', 'jmax' ),
                'src'         => ''
              ),
              array(
                'value'       => 'title',
                'label'       => __( 'Title', 'jmax' ),
                'src'         => ''
              ),
              array(
                'value'       => 'comment_count',
                'label'       => __( 'Comments', 'jmax' ),
                'src'         => ''
              ),
              array(
                'value'       => 'rand',
                'label'       => __( 'Random', 'jmax' ),
                'src'         => ''
              ),
              array(
                'value'       => 'views',
                'label'       => __( 'Views', 'jmax' ),
                'src'         => ''
              )
            )
          ),
          array(
            'id'          => 'block_order',
            'label'       => __( 'Order', 'jmax' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'select',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and',
            'choices'     => array( 
              array(
                'value'       => 'desc',
                'label'       => __( 'Descending', 'jmax' ),
                'src'         => ''
              ),
              array(
                'value'       => 'asc',
                'label'       => __( 'Ascending', 'jmax' ),
                'src'         => ''
              )
            )
          ),
          array(
            'id'          => 'posts_to_show',
            'label'       => __( 'Number of posts ( Only for carousel block style )', 'jmax' ),
            'desc'        => '',
            'std'         => '9',
            'type'        => 'numeric-slider',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'block_post_format',
            'label'       => __( 'Post format', 'jmax' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'select',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and',
            'choices'     => array( 
              array(
                'value'       => 'all',
                'label'       => __( 'All', 'jmax' ),
                'src'         => ''
              ),
              array(
                'value'       => 'gallery',
                'label'       => __( 'Gallery', 'jmax' ),
                'src'         => ''
              ),
              array(
                'value'       => 'video',
                'label'       => __( 'Video', 'jmax' ),
                'src'         => ''
              ),
              array(
                'value'       => 'audio',
                'label'       => __( 'Audio', 'jmax' ),
                'src'         => ''
              )
            )
          ),
          array(
            'id'          => 'block_only_reviews',
            'label'       => __( 'Show only posts with reviews', 'jmax' ),
            'desc'        => '',
            'std'         => 'off',
            'type'        => 'on-off',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'block_style',
            'label'       => __( 'Block style', 'jmax' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'select',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and',
            'choices'     => array( 
              array(
                'value'       => '5',
                'label'       => __( 'Slider', 'jmax' ),
                'src'         => ''
              ),
              array(
                'value'       => '1',
                'label'       => __( 'Featured posts + 4 additional posts beside', 'jmax' ),
                'src'         => ''
              ),
              array(
                'value'       => '2',
                'label'       => __( 'Tow categories side by side ( Need to select tow categories )', 'jmax' ),
                'src'         => ''
              ),
              array(
                'value'       => '3',
                'label'       => __( 'Carousel', 'jmax' ),
                'src'         => ''
              ),
              array(
                'value'       => '4',
                'label'       => __( 'Tabbed Categories', 'jmax' ),
                'src'         => ''
              ),
              array(
                'value'       => '6',
                'label'       => __( 'News In Images', 'jmax' ),
                'src'         => ''
              )
            )
          )
        )
      ),
      array(
        'id'          => 'facebook',
        'label'       => __( 'Facebook', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'twitter',
        'label'       => __( 'Twitter', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'google_plus',
        'label'       => __( 'Google plus', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'instagram',
        'label'       => __( 'Instagram', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'youtube',
        'label'       => __( 'Youtube', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'vine',
        'label'       => __( 'Vine', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'linkedin',
        'label'       => __( 'Linkedin', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'flickr',
        'label'       => __( 'Flickr', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pinterest',
        'label'       => __( 'Pinterest', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'soundcloud',
        'label'       => __( 'Soundcloud', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'github',
        'label'       => __( 'Github', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'rss',
        'label'       => __( 'Show rss link', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'social_links',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'header_ad_link',
        'label'       => __( 'Header ad link', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'ads_manager',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'header_ad_title',
        'label'       => __( 'Header ad title', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'ads_manager',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'header_ad_image',
        'label'       => __( 'Header ad image', 'jmax' ),
        'desc'        => __( 'Max size 728x90px', 'jmax' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'ads_manager',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'header_ad_code',
        'label'       => __( 'Header ad code', 'jmax' ),
        'desc'        => __( 'If you have a custom ad code put it here!', 'jmax' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads_manager',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bottom_ad_link',
        'label'       => __( 'Bottom ad link', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'ads_manager',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bottom_ad_title',
        'label'       => __( 'Bottom ad title', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'ads_manager',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bottom_ad_image',
        'label'       => __( 'Bottom ad image', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'ads_manager',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bottom_ad_code',
        'label'       => __( 'Bottom ad code', 'jmax' ),
        'desc'        => __( 'If you have a custom ad code put it here!', 'jmax' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads_manager',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'category_layout',
        'label'       => __( 'Category Layout', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'category_layouts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => '3',
            'label'       => __( 'Image + Info Beside', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => __( 'Image + Info Bellow', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '4',
            'label'       => __( 'Tow Columns', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '5',
            'label'       => __( 'Three Columns ( Without Sidebar )', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'category_sidebar',
        'label'       => __( 'Category Sidebar', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'category_layouts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'right',
            'label'       => __( 'Right', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'left',
            'label'       => __( 'Left', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'enable_category_slider',
        'label'       => __( 'Enable Category Slider', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'category_layouts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'category_slider_posts',
        'label'       => __( 'Category Slider Posts', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'numeric-slider',
        'section'     => 'category_layouts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'tag_layout',
        'label'       => __( 'Tag Layout', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'pages_layouts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => '3',
            'label'       => __( 'Image + Info Beside', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => __( 'Image + Info Bellow', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '4',
            'label'       => __( 'Tow Columns', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '5',
            'label'       => __( 'Three Columns ( Without Sidebar )', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'tag_sidebar',
        'label'       => __( 'Tag Sidebar', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'pages_layouts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'right',
            'label'       => __( 'Right', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'left',
            'label'       => __( 'Left', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'archives_layout',
        'label'       => __( 'Archives Layout', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'pages_layouts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => '3',
            'label'       => __( 'Image + Info Beside', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => __( 'Image + Info Bellow', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '4',
            'label'       => __( 'Tow Columns', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '5',
            'label'       => __( 'Three Columns ( Without Sidebar )', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'archives_sidebar',
        'label'       => __( 'Archives Sidebar', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'pages_layouts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'right',
            'label'       => __( 'Right', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'left',
            'label'       => __( 'Left', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'author_layout',
        'label'       => __( 'Author Page Layout', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'pages_layouts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => '3',
            'label'       => __( 'Image + Info Beside', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => __( 'Image + Info Bellow', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '4',
            'label'       => __( 'Tow Columns', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '5',
            'label'       => __( 'Three Columns ( Without Sidebar )', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'author_sidebar',
        'label'       => __( 'Author Page Sidebar', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'pages_layouts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'right',
            'label'       => __( 'Right', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'left',
            'label'       => __( 'Left', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'search_layout',
        'label'       => __( 'Search Layout', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'pages_layouts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => '3',
            'label'       => __( 'Image + Info Beside', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => __( 'Image + Info Bellow', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '4',
            'label'       => __( 'Tow Columns', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => '5',
            'label'       => __( 'Three Columns ( Without Sidebar )', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'search_sidebar',
        'label'       => __( 'Search Sidebar', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'pages_layouts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'right',
            'label'       => __( 'Right', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'left',
            'label'       => __( 'Left', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'enable_related_posts',
        'label'       => __( 'Enable Related Posts', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'post_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'related_posts_block_title',
        'label'       => __( 'Related Posts Block Title', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'post_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'related_posts_showposts',
        'label'       => __( 'Related posts number', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'numeric-slider',
        'section'     => 'post_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'enable_author_box',
        'label'       => __( 'Enable Author Box', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'post_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'enable_comments_on_pages',
        'label'       => __( 'Enable Comments On Pages', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'post_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'enable_sharing_buttons',
        'label'       => __( 'Enable Sharing Buttons', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'post_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'enable_footer_widgets',
        'label'       => __( 'Enable Footer Widgets', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'copyrights__amp__analytics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_columns',
        'label'       => __( 'Footer Columns', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'radio',
        'section'     => 'copyrights__amp__analytics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'footer-three-columns',
            'label'       => __( 'Three Columns', 'jmax' ),
            'src'         => ''
          ),
          array(
            'value'       => 'footer-four-columns',
            'label'       => __( 'Four Columns', 'jmax' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'enable_footer_copyrights',
        'label'       => __( 'Enable Footer Copyrights', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'copyrights__amp__analytics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_copyrights',
        'label'       => __( 'Footer Copyrights', 'jmax' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'copyrights__amp__analytics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'analytics_tracking_id',
        'label'       => __( 'Analytics Tracking ID', 'jmax' ),
        'desc'        => __( 'Google Analytics ID Must be like UA-XXXXXXXX-XX', 'jmax' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'copyrights__amp__analytics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}