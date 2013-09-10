<?php
	add_shortcode('list', 'list_handler');
	add_shortcode('item', 'list_handler');

	function list_handler($atts, $content=null, $code="") {
		if($code == "item") {
			return '<li>'.$content.'</li>';
		} elseif($code == "list") {
			if($atts['style'] == 'check') {
				$content = '<ul class="list-style-check">'.$content.'</ul>';
			} elseif($atts['style'] == "cross") {
				$content = '<ul class="list-style-cross">'.$content.'</ul>';
			} elseif($atts['style'] == "star") {
				$content = '<ul class="list-style-star">'.$content.'</ul>';
			} elseif($atts['style'] == "atomic") {
				$content = '<ul class="list-style-atomic">'.$content.'</ul>';
			} elseif($atts['style'] == "diamond") {
				$content = '<ul class="list-style-diamond">'.$content.'</ul>';
			} elseif($atts['style'] == "block") {
				$content = '<ul class="list-style-block">'.$content.'</ul>';
			} elseif($atts['style'] == "default") {
				$content = '<ul class="list-style-default">'.$content.'</ul>';
			} else {
				$content = '<ul class="list-style-default">'.$content.'</ul>';
			}
		}
		$content = do_shortcode($content);
		$content = remove_br($content);
		return $content;
	}
	
?>