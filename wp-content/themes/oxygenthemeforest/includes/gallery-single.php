<?php get_header(); ?>
<?php include (THEME_INCLUDES . '/top.php'); ?>

<!-- BEGIN .content-wrapper -->
<div class="content-wrapper">

<!-- BEGIN .gallery -->
<div class="gallery" style="padding: 0px 0!important ;">

	<!-- BEGIN .gallery-left-side -->
	<div class="gallery-left-side" style="padding: 0 0 0 12px; margin-right:13px!important;">				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php 
			$g = get_the_ID();
			global $query_string;
			$query_vars = explode('&',$query_string);
			foreach($query_vars as $key) {
				if(strpos($key,'page=') !== false) {
					$i = substr($key,8,12);
					break;
				}
			}
			
			if($i == 0) $i=0;
						
			$gallery_page = get_option("theme_gallery_page");
			$page = get_post($gallery_page);
			$gallery_slug = $page->post_name;
			
			$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $g, 'order'=> 'ASC' ); 
			$attachments = get_posts($args);
			if ($attachments) {
				$file = $attachments[$i]->guid;
				$count = count($attachments);
			
			?>
				<!-- BEGIN .title -->
				<div class="open-title" style="margin:0 0 0 0!important;">
					<h1><?php the_title();?></h1>
				<!-- END .title -->
				</div>
				
				<div class="open-navigation">
					<a href="<?php the_permalink(); if($i> 0) {echo $i-1;} elseif($i!=0) {echo $i;} ?>" class="btn-1 btn-align-left btn-previous"><i>&nbsp;</i><b><span><?php printf(__('Previous picture' , 'oxygen')); ?></span></b><u>&nbsp;</u></a>
					<a href="<?php the_permalink(); if($i+1 < $count) {echo $i + 1;} elseif($i!=0) {echo $i;} ?>" class="btn-1 btn-align-left btn-next"><i>&nbsp;</i><b><span><?php printf(__('Next picture' , 'oxygen')); ?></span></b><u>&nbsp;</u></a>
					<div>
						<a href="<?php echo get_page_link(get_gallery_page());?>" class="allgalleries"><?php printf(__('Gallery home' , 'oxygen')); ?></a>
					</div>
				<!-- END .open-navigation -->
				</div>
			
				<!-- BEGIN .open-image -->
				<table class="open-image">
					<tr>
						<td>
							<a href="<?php the_permalink(); if($i+1 < $count) {echo $i + 1;} elseif($i!=0) {echo $i;} ?>"><img src="<?php echo bloginfo('template_url'); ?>/timthumb.php?src=/<?php
				$imgs = explode("/wp-content/", $file); echo "wp-content/".$imgs[1];?>&amp;w=630&amp;h=420&amp;zc=1&amp;q=100" alt="<?php the_title();?>" /></a>
						</td>
					</tr>
				<!-- END .open-image -->
				</table>
				
				<!-- BEGIN .open-navigation -->
				<div class="open-navigation">
					<a href="<?php the_permalink(); if($i> 0) {echo $i-1;} elseif($i!=0) {echo $i;} ?>" class="btn-1 btn-align-left btn-previous"><i>&nbsp;</i><b><span><?php printf(__('Previous picture' , 'oxygen')); ?></span></b><u>&nbsp;</u></a>
					<a href="<?php the_permalink(); if($i+1 < $count) {echo $i + 1;} elseif($i!=0) {echo $i;} ?>" class="btn-1 btn-align-left btn-next"><i>&nbsp;</i><b><span><?php printf(__('Next picture' , 'oxygen')); ?></span></b><u>&nbsp;</u></a>
					<div>
						<s><?php printf ( __( 'Photo added by ', 'oxygen' )); the_author(); ?>, <?php the_date("d.m.Y, H:i",'','');?></s>
					</div>
				<!-- END .open-navigation -->
				</div>
				
				<!-- BEGIN .open-thumbnails -->
				<div class="open-thumbnails">
					<ul>
					<?php
					$c=0;
					foreach($attachments as $attachment)
					{
						$file = $attachment->guid;
						?>
							<li <?php if($c == $i) echo "class=\"active\""; ?>>
								<a href="<?php the_permalink(); echo $c.'/'; ?>"></a>
								<img src="<?php echo bloginfo('template_url'); ?>/timthumb.php?src=/<?php
					$imgs = explode("/wp-content/", $file); echo "wp-content/".$imgs[1];?>&amp;w=80&amp;h=80&amp;zc=1&amp;q=100" alt="<?php the_title();?>"/>
							</li>
						<?php
						$c++;
					}
					?>
					</ul>
				<!-- END .open-thumbnails -->
				</div>		
				
				<?php if (get_the_content() != "") { ?>
					<!-- BEGIN .open-description -->
					<div class="open-description">
						<?php
							add_filter('the_content','remove_images');
							add_filter('the_content','remove_objects');
							the_content();
						?>
					<!-- END .open-description -->
					</div>
				<?php } ?>
			<?php } else {
				echo "This gallery has no pictures!";
			
			} ?>	
			
			<?php endwhile; ?>
			<?php endif;?>
	<!-- END .gallery-left-side -->
	</div>
	
	<!-- BEGIN .gallery-right-side -->
	<div class="gallery-right-side">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Gallery") ) : ?>
		<?php endif; ?>
	<!-- END .gallery-right-side -->
	</div>
<!-- END .gallery -->	
</div>

<!-- END .content-wrapper -->
</div>

<?php get_footer(); ?>