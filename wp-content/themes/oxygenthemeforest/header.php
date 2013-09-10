<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- BEGIN html -->
<html xmlns="http://www.w3.org/1999/xhtml">

	<!-- BEGIN head -->
	<head profile="http://gmpg.org/xfn/11">
	
		<!-- Title -->
		<title>
			<?php
                 if ( is_single() ) { single_post_title(); print ' - '; bloginfo('name'); }      
                 elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' - '; bloginfo('description'); }
                 elseif ( is_page() ) { single_post_title(''); }
                 elseif ( is_search() ) { bloginfo('name'); print ' - Search results ' . wp_specialchars($s); }
                 elseif ( is_404() ) { bloginfo('name'); print ' - Page not found'; }
                 else { bloginfo('name'); wp_title('-'); }
			?>
	   </title>
		
		<!-- Meta Tags -->
		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

		
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
		
		<!-- Stylesheets -->
		<link id="main_stylesheet" rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/style.css" type="text/css" />
		<?php
			$color = get_option("theme_color");
			if($color != "") {
				?><link rel="stylesheet" href="<?php echo $color; ?>" type="text/css" /><?php
			}
		?>
		<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/shortcodes.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/gallery.css" type="text/css" />
				
		<!--[if lte IE 7]>
		<style type="text/css">
			html .jqueryslidemenu { height: 1%; } /* Holly Hack for IE7 and below */
		</style>
		<![endif]-->
		<?php wp_enqueue_script('jquery'); ?>
		<?php wp_head(); ?>
		
		<!-- Scripts --> 
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/colors.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/scripts.js"></script>
		<?php if ( !is_single() ) { ?>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.scrollTo-min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/aktuals.js"></script>
		<?php } ?>

       <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts'), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
       <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments'), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
       <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
	<!-- END head -->
	</head>	
	<body <?php body_class(); ?>>