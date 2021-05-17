<?php
/*
Plugin Name: JMAX - Posts Widget
Description: Display posts in different methods you will like
Author: Merrasse Mouhcine
Version: 1.0
Author URI: http://wp207.net/
*/


class jmaxPostsWidget extends WP_Widget
{
  function jmaxPostsWidget()
  {
    $widget_ops = array('classname' => 'jmaxPostWidget', 'description' => 'Display posts in different methods you will like' );
    parent::__construct('jmaxPostWidget', 'JMAX - Posts Widget', $widget_ops);
  }

  function form($instance)
  {
    $defaults = array(
        'title' => '',
        'categories' => 'all',
        'orderby' => 'date',
        'order' => 'desc',
        'order_arange' => 'all_time',
        'showposts' => 3,
        'reviews' => 1,
        'post_format' => 'all',
    );
    $instance = wp_parse_args( (array) $instance, $defaults );
    $title = $instance['title'];
    $categories = $instance['categories'];
    $orderby = $instance['orderby'];
    $order = $instance['order'];
    $showposts = $instance['showposts'];
    $reviews = $instance['reviews'];
    $post_format = $instance['post_format'];
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
  <!-- Category Select Menu -->
    <p>
     Select Category :<br/>
        <select id="<?php echo $this->get_field_id('categories'); ?>" name="<?php echo $this->get_field_name('categories'); ?>" class="widefat" style="width:100%;">
            <option <?php selected( $instance['categories'], 'all' ); ?> value="all">All Categories</option>
            <?php foreach(get_terms('category','parent=0&hide_empty=0') as $term) { ?>
            <option <?php selected( $instance['categories'], $term->term_id ); ?> value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
            <?php } ?>
        </select>
    </p>
    <!-- Order By -->
    <p>
    Order by :<br/>
        <select id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>" class="widefat" style="width:100%;">
            <option <?php selected( $instance['orderby'], 'date' ); ?> value="date">Date</option>
            <option <?php selected( $instance['orderby'], 'title' ); ?> value="title">Title</option>
            <option <?php selected( $instance['orderby'], 'rand' ); ?> value="rand">Random</option>
            <option <?php selected( $instance['orderby'], 'comment_count' ); ?> value="comment_count">Comments</option>
            <option <?php selected( $instance['orderby'], 'views' ); ?> value="views">Views</option>
        </select>
    </p>
     <!-- Order -->
    <p>
    Order :<br/>
        <select id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>" class="widefat" style="width:100%;">
            <option <?php selected( $instance['order'], 'asc' ); ?> value="asc">Ascending</option>
            <option <?php selected( $instance['order'], 'desc' ); ?> value="desc">Descending</option>
        </select>
    </p>

    <!-- Number Of Posts-->
    <p>
    Number Of Posts :<br/>
        <select id="<?php echo $this->get_field_id('showposts'); ?>" name="<?php echo $this->get_field_name('showposts'); ?>" class="widefat" style="width:100%;">
            <option <?php selected( $instance['showposts'], '1' ); ?> value="1">1</option>
            <option <?php selected( $instance['showposts'], '2' ); ?> value="2">2</option>
            <option <?php selected( $instance['showposts'], '3' ); ?> value="3">3</option>
            <option <?php selected( $instance['showposts'], '4' ); ?> value="4">4</option>
            <option <?php selected( $instance['showposts'], '5' ); ?> value="5">5</option>
            <option <?php selected( $instance['showposts'], '6' ); ?> value="6">6</option>
            <option <?php selected( $instance['showposts'], '7' ); ?> value="7">7</option>
            <option <?php selected( $instance['showposts'], '8' ); ?> value="8">8</option>
            <option <?php selected( $instance['showposts'], '9' ); ?> value="9">9</option>
            <option <?php selected( $instance['showposts'], '10' ); ?> value="10">10</option>
            <option <?php selected( $instance['showposts'], '11' ); ?> value="11">11</option>
            <option <?php selected( $instance['showposts'], '12' ); ?> value="12">12</option>
        </select>
    </p>
     <!-- Reviews -->
    <p>
    Show reviews only :
        <input <?php if($instance['reviews']==on) : echo 'checked="checked"'; endif; ?> type="checkbox" id="<?php echo $this->get_field_id('reviews'); ?>" name="<?php echo $this->get_field_name('reviews'); ?>" class="widefat" />
    </p>
    <!-- Post Format -->
    <p>
    Post Format :<br/>
        <select id="<?php echo $this->get_field_id('post_format'); ?>" name="<?php echo $this->get_field_name('post_format'); ?>" class="widefat" style="width:100%;">
            <option <?php selected( $instance['post_format'], 'all' ); ?> value="all">All</option>
            <option <?php selected( $instance['post_format'], 'video' ); ?> value="video">Video</option>
            <option <?php selected( $instance['post_format'], 'audio' ); ?> value="audio">Audio</option>
            <option <?php selected( $instance['post_format'], 'gallery' ); ?> value="gallery">Gallery</option>
        </select>
    </p>
     <!-- Order -->
<?php
  }

  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['categories'] = $new_instance['categories'];
    $instance['orderby'] = $new_instance['orderby'];
    $instance['order'] = $new_instance['order'];
    $instance['order_arange'] = $new_instance['order_arange'];
    $instance['showposts'] = $new_instance['showposts'];
    $instance['reviews'] = $new_instance['reviews'];
    $instance['post_format'] = $new_instance['post_format'];
    return $instance;
  }

  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);

    echo $before_widget;
    $title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
    $categories = $instance['categories'];
    if($categories=='all')
        $categories=get_all_category_ids();;
    $showposts = $instance['showposts'];
    $orderby = $instance['orderby'];
    if($orderby=='views') :
        $orderby='meta_value_num';
        $order_meta='post_views_count';
    else:
      $order_meta=null;
    endif;
    $widget_style = $instance['widget_style'];
    $order = $instance['order'];

    $widget_id=$this->id;
    // WIDGET CODE GOES HERE
    if($instance['reviews']==on) {
      $widget_reviews= array(
        array(
          'key' => 'jmax_enable_post_review',
          'value' => 'on',
        ),
        array(
          'key' => 'jmax_reviews',
          'value' => null,
          'compare' => '!='
        ),
      );
    }
    $post_format=$instance['post_format'];
    if($post_format!='all') {
      $post_format='post-format-'.$post_format;

      $widget_post_format= array(
        array(
          'taxonomy' => 'post_format',
          'field' => 'slug',
          'terms' => $post_format
        )
      );

    }
    $posts_query = new WP_Query(
        array(
         'category__in' => $categories,
         'showposts' => $showposts,
         'orderby' => $orderby,
         'order' => $order,
         'meta_key' => $order_meta,
         'meta_query' => $widget_reviews,
         'tax_query' => $widget_post_format,
        )
    );
    if(count($categories)==1 && $categories!='all') {
      $widget_category_class=get_cat_slug($categories).'-slug';
    }
    if(!empty($title)) {
      echo '<div class="widget-heading '.$widget_category_class.'"><span>';
      echo $title;
      echo '</span><div class="j-clear"></div></div>';
    }
    include('jmax-posts-block.php');
    echo $after_widget;
  }

}
add_action( 'widgets_init', create_function('', 'return register_widget("jmaxPostsWidget");') );?>
