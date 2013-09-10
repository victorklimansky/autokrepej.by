<!-- BEGIN .content-wrapper -->
<div class="content-wrapper">

	<!-- BEGIN .content -->
	<div class="content">
	
		<!-- BEGIN .left-side -->
		<div class="left-side">
			<?php if ( (is_home() || is_front_page()) && get_option('theme_slider_enabled') == "on") {
				include (THEME_INCLUDES . '/slider.php');
			}
			?>	
						
			<!-- BEGIN .section-spacer -->
			<table class="section-spacer">
				<tr>
					<td class="left"></td>
					<td class="middle">
						<span>
							 <?php 
				                 if ( is_home() || is_front_page() ) { echo (__('Latest posts' , 'oxygen')); }
				                 elseif ( is_search() ) { print (__('Search results' , 'oxygen')); }
				                 elseif (is_category() ) { single_cat_title();}
							 ?>
						</span>
					</td>
					<td class="right"></td>
				</tr>
			<!-- END .section-spacer -->
			</table>
						
			<!-- BEGIN .news-list-index -->
			<div class="news-list-index">
			<?php $posts_per_page = get_option("posts_per_page"); $counter = 1; ?>
			<?php global $query_string; ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						<!-- BEGIN .news-item -->
						<div class="news-item <?php if($counter == $posts_per_page) { echo "last-item"; } ?> ">
							<table>
								<tr>
									<?php
										if(get_option("theme_show_first_thumb") == "on") {
											$image = get_post_thumb($post->ID,130,130);
											if($image['show'] == true) { ?>
												<td class="image">
													<a href="<?php the_permalink();?>">
														<img src="<?php echo $image['src'];?>" alt="<?php the_title(); ?>" />
													</a>
												</td>
											<?php } 
										}
									?>
									<td class="text">
										<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
										<h3><?php echo the_time("j. F, Y"); ?><span>|</span><?php the_category(", ");?><span>|</span><b><?php  comments_popup_link(__('No comments' , 'oxygen'),__('One comment' , 'oxygen'),__('% comments' , 'oxygen'));?></b></h3>
										<?php if(get_option("theme_show_first_pictures") == "off") { add_filter('the_content', 'remove_images'); } ?>
										<?php if(get_option("theme_show_first_objects") == "off") { add_filter('the_content', 'remove_objects'); } ?>
										<?php the_content(__('Read more','oxygen')); ?>
									</td>
								</tr>
							</table>
						<!-- END .news-item -->
						</div>
						<?php $counter++; ?>				
				<?php endwhile; else: ?>
				<p><?php printf(__('No posts where found','oxygen')); ?></p>
				<?php endif; ?>

			<!-- BEGIN .news-list-index -->
			</div>
			
			<!-- BEGIN .list-footer -->
				<?php
				    if (is_search()) {
						global $query_string;
						customized_nav_btns($paged, $wp_query->max_num_pages, $query_string);
					 } else {
						customized_nav_btns($paged, $wp_query->max_num_pages);
					 } 
				?>
			<!-- END .list-footer -->
			
		
		<!-- END .left-side -->
		</div>
