<div class="sidecont rightsector">
	
	<div class="sidebar">

    
    <?php if(get_theme_option('video') != '') {
    		?>
    		<div class="sidebarvideo">
    			<ul> <li><h2 style="margin-bottom: 7px;">Популярное видео</h2>
    			<object width="290" height="220"><param name="movie" value="http://www.youtube.com/v/<?php echo get_theme_option('video'); ?>&hl=en&fs=1&rel=0&border=1"></param>
    				<param name="allowFullScreen" value="true"></param>
    				<param name="allowscriptaccess" value="always"></param>
    				<embed src="http://www.youtube.com/v/<?php echo get_theme_option('video'); ?>&hl=en&fs=1&rel=0&border=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="290" height="220"></embed>
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
				
				
				<?php include (TEMPLATEPATH . '/recent-comments.php'); ?>
				<?php if (function_exists('get_recent_comments')) { get_recent_comments(); } ?>
				
				
					
			<?php endif; ?>
		</ul>
        
        
	</div>
</div>