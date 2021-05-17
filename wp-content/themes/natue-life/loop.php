<?php
   if($cat_style==3) : include('inc/jmax-blog-styles/image-plus-info.php');
   elseif($cat_style==2) : include('inc/jmax-blog-styles/image-plus-info-below.php');
   elseif($cat_style==4) : include('inc/jmax-blog-styles/two-columns.php');
   elseif($cat_style==5) : include('inc/jmax-blog-styles/three-columns.php');
   elseif($cat_style==1) : include('blocks.php');
   else : include_once('inc/jmax-blog-styles/image-plus-info.php'); endif;
 ?>
