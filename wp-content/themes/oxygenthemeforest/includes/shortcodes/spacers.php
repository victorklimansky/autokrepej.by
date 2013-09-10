<?php
	add_shortcode('spacer', 'spacer_handler');

	function spacer_handler($atts, $content=null, $code="") {
		if($atts['style'] == 'solid-dotted') {
			return '<div class="spacer-solid-dotted">&nbsp;</div>';
		} elseif($atts['style'] == 'triple-dotted') {
			return '<div class="spacer-triple-dotted">&nbsp;</div>';
		} elseif($atts['style'] == 'thin-dotted') {
			return '<div class="spacer-thin-dotted">&nbsp;</div>';
		} elseif($atts['style'] == 'thick-dashed') {
			return '<div class="spacer-thick-dashed">&nbsp;</div>';
		} elseif($atts['style'] == 'thick-triangles') {
			return '<div class="spacer-thick-triangles">&nbsp;</div>';
		} elseif($atts['style'] == 'thin-star') {
			return '<div class="spacer-thin-star">&nbsp;</div>';
		} elseif($atts['style'] == 'thick-insignia') {
			return '<div class="spacer-thick-insignia">&nbsp;</div>';
		} elseif($atts['style'] == 'dotted-emblem') {
			return '<div class="spacer-dotted-emblem">&nbsp;</div>';
		} else {
			return '<div class="spacer-solid-dotted">&nbsp;</div>';
		}
	}
?>