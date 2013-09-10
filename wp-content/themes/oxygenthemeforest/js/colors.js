jQuery(document).ready(function() {
	jQuery('.color_button').click(function() {
		var color = jQuery(this).attr("id");
		var href = jQuery("#custom_color_stylesheet").attr("href");
		if(href == undefined) {
			var hrefbase = jQuery("#main_stylesheet").attr("href");
			var array = hrefbase.split("/");
			var count = array.length;
			array[count-1] = color + ".css";
			var href = implode("/",array);
			jQuery('<link id="custom_color_stylesheet" rel="stylesheet" href="'+ href +'" type="text/css" />').insertAfter("#main_stylesheet");
		} else {
		var array = href.split("/");
		var count = array.length;
		array[count-1] = color + ".css";
		href = implode("/",array);
		jQuery("#custom_color_stylesheet").attr("href",href);
		}
		return false;
	});
	
	jQuery('#dark_menu').click(function() {
		jQuery('#menu_wrapper').attr("class","menu-primary-wrapper menu-primary-color-dark");
		jQuery('#dark_menu').addClass("active");
		jQuery('#light_menu').removeClass("active");
		return false;
	});
	
	jQuery('#light_menu').click(function() {
		jQuery('#menu_wrapper').attr("class","menu-primary-wrapper menu-primary-color-light");
		jQuery('#dark_menu').removeClass("active");
		jQuery('#light_menu').addClass("active");
		return false;
	});
	
	function implode( glue, pieces ) {  
		return ( ( pieces instanceof Array ) ? pieces.join ( glue ) : pieces );  
	} 
});

