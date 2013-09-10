<?php
add_shortcode('button', 'button_handler');

function button_handler($atts, $content=null, $code="") {
	$class="";
	
	/* Size */
	if($atts["size"] == "small" || !isset($atts["size"])) {	
		$btn_type = "btn-1";
	} elseif ($atts["size"] == "big") {
		$btn_type = "btn-2";
	}
	$class.= $btn_type;	//btn-1
	
	/* Color */
	if($atts["color"] == "yellow" || !isset($atts["color"])) {
		$class.= " ".$btn_type."-color-yellow";
	} elseif($atts["color"] == "red") {
		$class.= " ".$btn_type."-color-red";
	} elseif($atts["color"] == "blue") {
		$class.= " ".$btn_type."-color-blue";
	} elseif($atts["color"] == "green") {
		$class.= " ".$btn_type."-color-green";
	} elseif($atts["color"] == "black") {
		$class.= " ".$btn_type."-color-black";
	} elseif($atts["color"] == "purple") {
		$class.= " ".$btn_type."-color-purple";
	} elseif($atts["color"] == "gray") {
		$class.= " ".$btn_type."-color-gray";
	}
	
	
	/* Align */
	if($atts["align"] == "left" || !isset($atts["align"])) {
		$class.= " btn-align-left";
	} elseif($atts["align"] == "right") {
		$class.= " btn-align-right";
	} elseif($atts["align"] == "center") {
		$align_center = true;
	}
	
	/* Direction */
	if($atts["direction"] == "right") {
		$class.= " btn-next";
	} elseif($atts["direction"] == "left") {
		$class.= " btn-previous";
	}
	
	/* link */
	if(isset($atts["link"])) {
		$link = $atts["link"];
	} else {
		$link = "#";
	}
	
	if($align_center == true) {
		$return = '<table class="btn-align-center"><tbody><tr><td><a class="'.$class.'" href="'.$link.'"><i>&nbsp;</i><b><span>'.$content.'</span></b><u>&nbsp;</u></a></td></tr></tbody></table>';
	} else {
		$return = '<a class="'.$class.'" href="'.$link.'"><i>&nbsp;</i><b><span>'.$content.'</span></b><u>&nbsp;</u></a>';
	}
	
	return $return;
}

?>