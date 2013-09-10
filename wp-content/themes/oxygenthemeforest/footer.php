	<div class="clear-footer"></div>

	<!-- END .container -->
	</div>
		<!-- BEGIN .footer-wrapper -->
		<div class="footer-wrapper">

			<!-- BEGIN .footer -->
			<div class="footer">

				<!-- BEGIN .social -->
				<div class="social">
					<?php
						$twitter = get_option("theme_twitter_url");
						$facebook = get_option("theme_facebook_url");
						$linkedin = get_option("theme_linkedin_url");
						$digg = get_option("theme_digg_url");						$phone = get_option("theme_phone");						$mail = get_option("theme_mail");
						if(get_option("show_rss_icon")) {
							$rss = get_option("theme_rss_url");
							if($rss == "") $rss = get_bloginfo("rss_url");
						} else {$rss = false;}
					?>
					<?php if($linkedin) { ?><a href="<?php echo $linkedin; ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/ico-linkedin-2.png" alt="LinkedIn" /></a><?php } ?>
					<?php if($digg) { ?><a href="<?php echo $digg; ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/ico-digg-2.png" alt="Digg.com" /></a><?php } ?>
					<?php if($facebook) { ?><a href="<?php echo $facebook; ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/ico-facebook-2.png" alt="Facebook" /></a><?php } ?>
					<?php if($twitter) { ?><a href="<?php echo $twitter; ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/ico-twitter-2.png" alt="Twitter" /></a><?php } ?>
					<?php if($rss) { ?><a href="<?php echo $rss; ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/ico-rss-2.png" alt="RSS" /></a><?php } ?>
				<!-- END .social -->					<?php if($phone) { ?><p class="phone"><?php echo $phone;?></p><?php } ?>					<?php if($mail) { ?><p class="email"><a href="mailto:<?php echo $mail;?>"><?php echo $mail;?></a></p><?php } ?>
				</div>
				<!-- BEGIN .footer-right -->
				<div class="footer-right">
					<a href="http://www.orange-themes.com/" target="_blank"><img src="<?php echo get_option("theme_footer_image"); ?>" alt="<?php echo get_option("theme_footer_text"); ?>" /></a><br />Локализация <a href="http://morestyle.ru/" title="шаблоны wordpress" target="_blank"><img alt="темы wordpress" src="http://favicon.yandex.net/favicon/morestyle.ru"></a>
					<p><?php echo stripslashes(get_option("theme_footer_text")); ?></p>
				<!-- END .footer-right -->
				</div>

			<!-- END .footer -->
			</div>

		<!-- END .footer-wrapper -->
		</div>
		<?php wp_footer(); ?>
	</body>
</html>