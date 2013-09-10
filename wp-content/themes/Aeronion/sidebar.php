<div class="sidecont rightsector">

	   <div class="rss-search"><span class="rss">
					<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/rss.png"  style="margin:0 4px 0 0;"  /></a>		<?php if(get_theme_option('facebook') != '') { ?><a rel="nofollow" href="<?php echo get_theme_option('facebook'); ?>" title="<?php echo get_theme_option('facebooktext'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png"  style="margin:0 4px 0 0; "  title="<?php echo get_theme_option('facebooktext'); ?>" /></a><?php } ?>
					<?php if(get_theme_option('twitter') != '') { ?><a rel="nofollow" href="<?php echo get_theme_option('twitter'); ?>" title="<?php echo get_theme_option('twittertext'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png"  style="margin:0 4px 0 0; "  title="<?php echo get_theme_option('twittertext'); ?>" /></a><?php } ?>
				</span>
                
				<span class="search">
					<?php get_search_form(); ?> 
				</span></div>

	<div class="sidebar">

    
    <?php if(get_theme_option('video') != '') {
    		?>
    		<div class="sidebarvideo">
    			<ul> <li><h2 style="margin-bottom: 7px;">Популярное видео</h2>
    			<object width="284" height="240"><param name="movie" value="http://www.youtube.com/v/<?php echo get_theme_option('video'); ?>&hl=en&fs=1&rel=0&border=1"></param>
    				<param name="allowFullScreen" value="true"></param>
    				<param name="allowscriptaccess" value="always"></param>
    				<embed src="http://www.youtube.com/v/<?php echo get_theme_option('video'); ?>&hl=en&fs=1&rel=0&border=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="284" height="240"></embed>
    			</object>
    			</li>
    			</ul>
    		</div>
    	<?php
    	}
    	?>
        
		<ul>
			<?php 
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

				
				<li><h2><?php _e('Недавние записи'); ?></h2>
			               <ul>
					<?php wp_get_archives('type=postbypost&limit=5'); ?>  
			               </ul>
				</li>
				
				<li><h2>Архивы</h2>
					<ul>
					<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</li>
				
				<li> 
					<h2>Календарь</h2>
					<?php get_calendar(); ?> 
				</li>
				
				<?php wp_list_categories('hide_empty=0&show_count=1&depth=1&title_li=<h2>Рубрики</h2>'); ?>
				
				<li id="tag_cloud"><h2>Теги</h2>
					<?php wp_tag_cloud('largest=16&format=flat&number=20'); ?>
				</li>
				
				<li><h2>Админ-панель</h2>
					<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="<?php bloginfo('rss2_url'); ?>">Публикации RSS</a></li>
					<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Комментарии RSS</a></li>
					<li><a href="http://wordpress-ru.ru">Wordpress</a></li>
					</ul>
				</li>
				
				
				<?php include (TEMPLATEPATH . '/recent-comments.php'); ?>
				<?php if (function_exists('get_recent_comments')) { get_recent_comments(); } ?>
				
									
			<?php endif; ?>
		</ul>
        
      
	</div>
</div>
