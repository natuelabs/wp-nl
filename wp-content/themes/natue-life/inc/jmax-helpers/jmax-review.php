<?php
function jmax_post_review_check() {
	$enable_rating=get_post_meta(get_the_ID() ,'jmax_enable_post_review', true);
	$ratings = get_post_meta(get_the_ID(), 'jmax_reviews', true);
	if($enable_rating=='on' && $ratings!=null) {
		return true;
	} else {
		return null;
	}
}
function jmax_single_review() {
	if(jmax_post_review_check()) {
		echo '<div itemscope itemtype="http://data-vocabulary.org/Review" class="j-review">';
		$post_id = get_the_ID();
		$post_title = get_the_title();
		$ratings = get_post_meta($post_id, 'jmax_reviews', true);
		$overall_name = get_post_meta($post_id, 'jmax_review_overall_name', true);
		$overall_summary = get_post_meta($post_id, 'jmax_review_overall_summary', true);
		$ratings_count=count($ratings);
		echo '<div class="review-title" itemprop="itemreviewed" style="display:none;">'.$post_title.'</div>';
		if($ratings_count>1) {
			echo '<div class="j-review-list">';
			for($i=0; $i<=$ratings_count-1; $i++) {
				if($i==$ratings_count-1) {
					echo '<div class="j-review-list-item last">';
				} else {
					echo '<div class="j-review-list-item">';
				}
				echo '<div class="j-review-list-name">'.$ratings[$i]['jmax_review_criteria_name'].'</div>';
				echo '<div class="j-review-list-rating">'.jmax_rating($ratings[$i]['jmax_review_criteria_rating']).'</div>';
				echo '</div>';
			}
			echo '<div class="j-clear"></div></div>';
		}
		if($ratings_count>1) {
		  echo '<div class="j-review-overall">';
		} else {
		   echo '<div class="j-review-overall j-review-overall-single">';
		}
		echo '<div class="j-review-overall-name" itemprop="summary">'.$overall_name.'</div>';
		echo '<div class="j-review-overall-rating" itemprop="rating">'.jmax_rating(jmax_overall_rating()).'</div>';
		echo '<div class="j-clear"></div></div>';
		if($overall_summary) {
			echo '<div class="j-review-summary" itemprop="description">';
			echo '<p>'.$overall_summary.'</p>';
			echo '</div>';
		}
		echo '</div><!--j-review-->';
    }
}
function jmax_overall_rating() {
	$post_id = get_the_ID();
	$ratings = get_post_meta($post_id, 'jmax_reviews', true);
	$ratings_count=count($ratings);
	$ratings_sum=0;
	for($i=0; $i<=$ratings_count-1; $i++) {
		$ratings_sum=$ratings_sum+$ratings[$i]['jmax_review_criteria_rating'];
	}
	$overall_rating=$ratings_sum/$ratings_count;
	return $overall_rating;
}
function jmax_post_rating() {
	if(jmax_post_review_check()==true) {
		$post_id = get_the_ID();
		$ratings = get_post_meta($post_id, 'jmax_reviews', true);
		$ratings_count=count($ratings);
		$ratings_sum=0;
		for($i=0; $i<=$ratings_count-1; $i++) {
			$ratings_sum=$ratings_sum+$ratings[$i]['jmax_review_criteria_rating'];
		}
	    $overall_rating=$ratings_sum/$ratings_count;
		echo jmax_rating($overall_rating);
    }
}
function jmax_rating($rating) {
		if (empty($rating)) {
			return;
		}
		$round = round(($rating * 2), 0) / 2; //rounding to nearest half
		$html = sprintf('<div class="rating" title="%s">', $rating);
		for ($i = 1; $i <= 5; $i++) {
			if ($i <= $round) {
				$html .= '<i class="fa fa-star"></i>';
			} elseif ($i - $round == 0.5) {
				$html .= '<i class="fa fa-star-half-o"></i>';
			} else {
				$html .= '<i class="fa fa-star-o"></i>';
			}
		}
		$html .= '</div>';
		return $html;
}

?>