<?php
/*
Plugin Name: Demo MetaBox
Plugin URI: http://en.bainternet.info
Description: My Meta Box Class usage demo
Version: 3.1.0
Author: Bainternet, Ohad Raz
Author URI: http://en.bainternet.info
*/

//include the main class file

if (is_admin()){
  /*
   * prefix of meta keys, optional
   * use underscore (_) at the beginning to make keys hidden, for example $prefix = '_ba_';
   *  you also can make prefix empty to disable it
   *
   */
  $prefix = 'jmax_';
  /*
   * configure your meta box
   */
  $config = array(
    'id'             => 'demo_meta_box',          // meta box id, unique per meta box
    'title'          => 'Post Settings',          // meta box title
    'pages'          => array('post', 'page'),      // post types, accept custom post types as well, default is array('post'); optional
    'context'        => 'normal',            // where the meta box appear: normal (default), advanced, side; optional
    'priority'       => 'high',            // order of meta box: high (default), low; optional
    'fields'         => array(),            // list of meta fields (can be added by field arrays)
    'local_images'   => false,          // Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => false          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );


  /*
   * Initiate your meta box
   */
  $my_meta =  new AT_Meta_Box($config);

  /*
   * Add fields to your meta box
   */
  $my_meta->addCheckbox($prefix.'hide_featured',array('name'=> 'Hide featured Image, Video or Audio on this post'));
  //text field
  $my_meta->addText($prefix.'video_url',array('name'=> 'Video URL (Youtube, Vimeo, Daily Motion...'));
  $my_meta->addText($prefix.'audio_url',array('name'=> 'Sound Cloud URl'));
  //Image field
  $my_meta->addImage($prefix.'post_background',array('name'=> 'Custom post background '));
  //file upload field
  //$my_meta->addFile($prefix.'file_field_id',array('name'=> 'Upload video'));
  //file upload field with type limitation
  $my_meta->addFile($prefix.'audio_file',array('name'=> 'Upload MP3 audio file','ext' =>'mp3'));
  $my_meta->addFile($prefix.'video_file',array('name'=> 'Upload Video','ext' => array('flv', 'avi', 'mp4')));
  /*
   * Don't Forget to Close up the meta box Declaration
   */
  //Finish Meta Box Declaration
  $my_meta->Finish();
  /*
   * configure your meta box
   */
  /*
   * configure your meta box
   */
  $config2 = array(
    'id'             => 'post_review',          // meta box id, unique per meta box
    'title'          => 'Post review',          // meta box title
    'pages'          => array('post'),          // post types, accept custom post types as well, default is array('post'); optional
    'context'        => 'normal',               // where the meta box appear: normal (default), advanced, side; optional
    'priority'       => 'high',                 // order of meta box: high (default), low; optional
    'fields'         => array(),                // list of meta fields (can be added by field arrays)
    'local_images'   => false,                  // Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => false                   //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );


/*
   * Initiate your 2nd meta box
   */
  $my_meta2 =  new AT_Meta_Box($config2);

  /*
   * Add fields to your 2nd meta box
   */
  $my_meta2->addCheckbox($prefix.'enable_post_review',array('name'=> 'Enable review for this post'));
  $my_meta2->addSelect($prefix.'review_position',array('bottom'=>'Bottom','top'=>'Top','hide'=>'Hide'),array('name'=> 'Review Position '));
  $my_meta2->addText($prefix.'review_overall_name',array('name'=> 'Overall Name '));
  $my_meta2->addTextarea($prefix.'review_overall_summary',array('name'=> 'Overall Summary '));

  /*
   * To Create a reapeater Block first create an array of fields
   * use the same functions as above but add true as a last param
   */
  $repeater_fields[] = $my_meta2->addText($prefix.'review_criteria_name',array('name'=> 'Criteria Name '),true);
  $repeater_fields[] = $my_meta2->addSelect($prefix.'review_criteria_rating',array('1.0'=>'1.0','1.5'=>'1.5','2.0'=>'2.0','2.5'=>'2.5','3.0'=>'3.0','3.5'=>'3.5','4.0'=>'4.0','4.5'=>'4.5','5.0'=>'5.0'),array('name'=> 'Criteria Rating '),true);

  /*
   * Then just add the fields to the repeater block
   */
  //repeater block
  $my_meta2->addRepeaterBlock($prefix.'reviews',array(
    'inline'   => true,
    'name'     => 'Add Criteria',
    'fields'   => $repeater_fields,
    'sortable' => true
  ));



  /*
   * Don't Forget to Close up the meta box Declaration
   */
  //Finish Meta Box Declaration
  $my_meta2->Finish();

}
