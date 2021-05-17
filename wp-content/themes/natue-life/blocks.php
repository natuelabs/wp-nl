<?php
/**
 * The file of the modular homepage.
 *
 * @package jmax
 */
if ( function_exists( 'ot_get_option' ) && ot_get_option( 'home_blocks' ) ) :			
 	$blocks = ot_get_option( 'home_blocks' );
 	$block_id=1;
	foreach( $blocks as $block ) :
	  $block_categories=$block['block_categories']; 
	  $block_style=$block['block_style'];
	  $block_title=$block['title'];
	  $block_reviews=$block['block_only_reviews'];
	  if(!$block_title) : 
	  	$block_title_bool='yes';
	  endif;
	  $block_order_by=$block['block_order_by'];
	  if($block_order_by=='views') :
			$block_order_by='meta_value_num';
			$block_order_meta='post_views_count';
	else:
			$block_order_meta=null;
	endif;
	  $block_order=$block['block_order'];
	  $posts_to_show=$block['posts_to_show'];
	  $block_post_format=$block['block_post_format'];
	  if($block_post_format!='all') : 
	  	$post_format='post-format-'.$block_post_format;
	  	
		$block_post_format= array(
		    array(
		      'taxonomy' => 'post_format',
		      'field' => 'slug',
		      'terms' => $post_format
		    )
		  );

	  endif;
	  if($block_reviews=='on') :
	  	$block_reviews= array(
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
	  endif;
	  if(!$block_title) : 
	  	if(count($block_categories)==1) :
		    $block_title=get_cat_name(reset($block_categories));
		else :
			$block_title='New Block';
		endif;
	  endif;
	  if($block_style==1) : 
	  	include('inc/jmax-block-styles/block-style-1.php');
	  elseif($block_style==2) :
	  	include('inc/jmax-block-styles/block-style-2.php');
	  elseif($block_style==3) :
	  	include('inc/jmax-block-styles/block-style-3.php');
	  elseif($block_style==4) :
	  	include('inc/jmax-block-styles/block-style-4.php');
	  elseif($block_style==5) :
	  	include('inc/jmax-block-styles/block-style-5.php');
	  elseif($block_style==6) :
	  	include('inc/jmax-block-styles/block-style-6.php');
	  endif;
	  $block_id++;
	endforeach; //loop
	wp_reset_query();
endif; //function_exists
?>