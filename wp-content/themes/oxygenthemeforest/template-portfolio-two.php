<?php
/*
Template Name: Portfolio Two Columns
*/	
?>
<?php
get_header();
include (THEME_INCLUDES . '/top.php');
?>

			<!-- BEGIN .content-wrapper -->
			<div class="content-wrapper">
			
				<!-- BEGIN .content -->
				<div class="content">
				
					
					<!-- BEGIN .full-width-wrapper -->
					<div class="full-width-wrapper">
						
						<!-- BEGIN .full-width-header -->
						<div class="full-width-header">
							<h2><?php the_title();?></h2>
							<h3>
								<?php				
									global $post;
									$subtitle = get_post_meta($post->ID, "subtitle"); 
									echo $subtitle[0];
								?>
							</h3>
						<!-- END .full-width-header -->
						</div>
						
						<!-- BEGIN .portfolio-wrapper -->
						<div class="portfolio-wrapper portfolio-two">
							<ul>
								<?php 
									$paged = get_query_string_paged();
									$counter = 1;
									$posts_per_page = get_option('theme_show_portfolio_items');
									if($posts_per_page == "") {
										$posts_per_page = get_option('posts_per_page');
									}
									$my_query = new WP_Query(array('post_type' => 'portfolio', 'paged' => $paged, 'posts_per_page' => $posts_per_page));
									if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
									<?php $image = get_post_thumb($post->ID,435,250); ?>
									<li class="image">
										<a href="<?php the_permalink();?>"><img src="<?php echo $image['src'];?>" alt="<?php the_title();?>" /></a>
										<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
										<?php
											global $more;    // Declare global $more (before the loop).
											$more = 0;       // Set (inside the loop) to display content above the more tag.
										?>
										<?php add_filter('the_content', 'remove_images'); ?>
										<?php add_filter('the_content', 'remove_objects'); ?>
										<p><?php the_content(__('Read more' , 'oxygen')); ?></p>
									</li>
									
									<?php if($counter%2 == 0) { ?>
										<li class="spacer">&nbsp;</li>
									<?php } ?>
									<?php $counter++;?>
									
								<?php endwhile; else: ?>
								<?php endif; ?>	
							</ul>
						<!-- END .portfolio-wrapper -->
						</div>
						
						<!-- BEGIN .pages -->
						<div class="pages">
							<?php gallery_nav_btns($paged, $my_query->max_num_pages); ?>
						<!-- END .pages -->
						</div>
						
					<!-- END .full-width-wrapper -->
					</div>


				<!-- END .content -->
				</div>
				
			<!-- END .content-wrapper -->
			</div>

<?php
get_footer();
?>