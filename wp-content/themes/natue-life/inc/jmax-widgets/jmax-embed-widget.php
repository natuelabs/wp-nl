<?php
/*
Plugin Name: JMAX - Embed Widget
Description: Display Embed Video or audio from supported ombed_get providers like Youtube, Vimeo, Soundcloud, DailyMotion...
Author: Merrasse Mouhcine
Version: 1.0
Author URI: http://wp207.net/
*/


class jmaxEmbedWidget extends WP_Widget
{

  function jmaxEmbedWidget()
  {
    $widget_ops = array('classname' => 'jmaxEmbedWidget', 'description' => 'Display Embed Video or audio from supported ombed_get providers like Youtube, Vimeo, Soundcloud, DailyMotion...' );
    parent::__construct('jmaxEmbedWidget', 'JMAX - Embed Widget', $widget_ops);
  }
 
  function form($instance)
  {
    $defaults = array(
        'widget_title' => 'Video Box',
        'embed_url' => '',
    );
    $instance = wp_parse_args( (array) $instance, $defaults );
    $widget_title = $instance['widget_title'];
    $embed_url = $instance['embed_url'];
?>
  <p><label for="<?php echo $this->get_field_id('embed_url'); ?>">Widget Title: <input class="widefat" id="<?php echo $this->get_field_id('widget_title'); ?>" name="<?php echo $this->get_field_name('widget_title'); ?>" type="text" value="<?php echo esc_attr($widget_title); ?>" /></label></p>
   <p><label for="<?php echo $this->get_field_id('embed_url'); ?>">Embed URL( Youtube, Vimeo, Soundcloud, Dailymotion...): <input class="widefat" id="<?php echo $this->get_field_id('embed_url'); ?>" name="<?php echo $this->get_field_name('embed_url'); ?>" type="text" value="<?php echo esc_attr($embed_url); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['widget_title'] = $new_instance['widget_title'];
    $instance['embed_url'] = $new_instance['embed_url'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $widget_title = $instance['widget_title'];
    if (!empty($widget_title))
      echo $before_title . $widget_title . $after_title;;
    $embed_url = $instance['embed_url'];
    echo wp_oembed_get($embed_url);
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("jmaxEmbedWidget");') );?>
