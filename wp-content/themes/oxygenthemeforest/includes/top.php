<!-- BEGIN .container -->
<div class="container">

	<!-- BEGIN .header-wrapper -->
	<div class="header-wrapper">
	
		<!-- BEGIN .header -->
		<div class="header">
					
			<!-- BEGIN .logo -->
			<div class="logo">
				<?php 
					$logo = get_option('theme_logo');
					if($logo)
					{
						?><h1><a href="<?php echo bloginfo('url'); ?>"><img src="<?php echo $logo;?>" alt="<?php echo bloginfo('name'); ?>" /></a></h1><?php
					}
					else
					{
						?><h1><a href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a></h1><?php
					}
				?>
			<!-- END .logo -->
			</div>
			
			<!-- BEGIN .header-right -->
			<div class="header-right">
			
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
								
			<!-- END .header-right -->
			</div>
			
		<!-- END .header -->	
		</div>
		
	<!-- END .header-wrapper -->
	</div>
	
	<?php
		$menu_color = get_option("theme_menu_color");
		if($menu_color == "") $menu_color = "dark";
	?>
	<!-- BEGIN .menu-primary-wrapper -->
	<div id="menu_wrapper" class="menu-primary-wrapper menu-primary-color-<?php echo $menu_color;?>">
		<!-- BEGIN .menu-primary -->
		<div id="menu1" class="menu-primary jqueryslidemenu menu-primary-slidemenu">

						
			<!-- BEGIN .social -->
			<div class="social">
				<?php
					$twitter = get_option("theme_twitter_url");
					$facebook = get_option("theme_facebook_url");
					$linkedin = get_option("theme_linkedin_url");
					$digg = get_option("theme_digg_url");
					if(get_option("show_rss_icon")) {
						$rss = get_option("theme_rss_url");
						if($rss == "") $rss = get_bloginfo("rss_url");
					} else {$rss = false;}
				?>
			
				<?php if($rss) { ?><a href="<?php echo $rss; ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/ico-rss-1.png" alt="RSS" /></a><?php } ?>
				<?php if($twitter) { ?><a href="<?php echo $twitter; ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/ico-twitter-1.png" alt="Twitter" /></a><?php } ?>
				<?php if($facebook) { ?><a href="<?php echo $facebook; ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/ico-facebook-1.png" alt="Facebook" /></a><?php } ?>
				<?php if($digg) { ?><a href="<?php echo $digg; ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/ico-digg-1.png" alt="Digg.com" /></a><?php } ?>
				<?php if($linkedin) { ?><a href="<?php echo $linkedin; ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/ico-linkedin-1.png" alt="LinkedIn" /></a><?php } ?>
			<!-- END .social -->
			</div>
			
		<?php			
			if ( function_exists( 'register_nav_menus' ))
			{
				$args = array(
					'theme_location' => 'top_menu',
					"fallback_cb" => '',
					"container" => '',
					"menu_id" => '',
					"menu_class" => '',
					 'depth' => 3,
					"echo" => false
				);
				echo add_menu_arrows(wp_nav_menu($args));
			}
		?>		
		<!-- END .menu-primary -->
		</div>

	<!-- END .menu-primary-wrapper -->
	</div>

	