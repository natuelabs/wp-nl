<?php
/*
* Plugin Name: Media Upload Widget
* Plugin URI: http://www.paulund.co.uk
* Description: A widget that allows you to upload media from a widget
* Version: 1.0
* Author: Paul Underwood
* Author URI: http://www.paulund.co.uk
* License: GPL2

Copyright 2012  Paul Underwood

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License,
version 2, as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
*/
/**
 * Register the Widget
 */
add_action( 'widgets_init', create_function( '', 'register_widget("jmax_about_widget_widget");' ) );

class jmax_about_widget_widget extends WP_Widget
{
    /**
     * Constructor
     **/
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'jmax_about_widget',
            'description' => 'Widget that uses the built in Media library.'
        );

        parent::__construct( 'jmax_about_widget', 'About Widget', $widget_ops );

        add_action('admin_enqueue_scripts', array($this, 'upload_scripts'));
        add_action('admin_enqueue_scripts', array($this, 'upload_styles'));
    }

    /**
     * Upload the Javascripts for the media uploader
     */
    public function upload_scripts()
    {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_script('upload_media_widget', get_template_directory_uri().'/inc/jmax-widgets/jmax-about/upload-media.js');
    }

    /**
     * Add the styles for the upload media box
     */
    public function upload_styles()
    {
        wp_enqueue_style('thickbox');
    }

    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme
     * @param array  An array of settings for this widget instance
     * @return void Echoes it's output
     **/
    public function widget( $args, $instance )
    {
        extract($args, EXTR_SKIP);

        echo $before_widget;
        if($instance['text']) {
            echo '<div class="about-widget about-widget-full">';
        } else {
            echo '<div class="about-widget">';
        }
        $title = apply_filters('widget_title', $instance['title']);
        if ($title) {
            echo $before_title . $title . $after_title;
        }
        if($instance['image']) {
            echo '<img class="lazy" src="'.$instance['image'].'"/>';
        }
        echo '<p>'.nl2br($instance['text']).'</p>';
        if($instance['social']==on) {
            get_about_social_icons();
        }
        echo '</div>';
        echo $after_widget;
    }

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     **/
    public function update( $new_instance, $old_instance ) {

        // update logic goes here
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['image'] = $new_instance['image'];
        $instance['text'] = $new_instance['text'];
        $instance['social'] = $new_instance['social'];
        return $instance;
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void
     **/
    public function form( $instance )
    {
        $defaults = array(
          'social' => 'on',
        );
        $instance = wp_parse_args( (array) $instance, $defaults );
        $title = __('About Us','jmax');
        if(isset($instance['title']))
        {
            $title = $instance['title'];
        }

        $image = '';
        if(isset($instance['image']))
        {
            $image = $instance['image'];
        }
        $text = '';
        if(isset($instance['text']))
        {
            $text = $instance['text'];
        }
        ?>
        <p>
        You can let the fields empty and make sure that the social icons field is checked to show social icons only!
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:','jmax' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Logo:','jmax' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" />
            <input class="upload_image_button button button-primary" type="button" value="Upload Image" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'text' ); ?>"><?php _e( 'Text:','jmax' ); ?></label>
            <textarea rows="6" name="<?php echo $this->get_field_name( 'text' ); ?>" id="<?php echo $this->get_field_id( 'text' ); ?>" class="widefat"><?php echo esc_attr( $text ); ?></textarea>
        </p>
        <p>
        Show Social Icons :
        <input <?php if($instance['social']==on) : echo 'checked="checked"'; endif; ?> type="checkbox" id="<?php echo $this->get_field_id('social'); ?>" name="<?php echo $this->get_field_name('social'); ?>" class="widefat" />
    </p>
    <?php
    }
}
?>
