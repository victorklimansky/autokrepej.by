<?php
/* Template Name: Oxygen Gallery */
?>
<?php get_header(); ?>
<?php include (THEME_INCLUDES . '/top.php'); ?>

<!-- BEGIN .content-wrapper -->
<div class="content-wrapper">

		<!-- BEGIN .gallery -->
		<div class="gallery" style="padding: 0px 0!important ;">

			<!-- BEGIN .gallery-left-side -->
			<div class="gallery-left-side" style="padding: 24px 0 0 12px; margin-right:13px!important;">		
				<div class="section-header" style="margin:0 0 0 0!important;">
					<h2>Gallery</h2>
					<h3>	</h3>
					<!-- END .full-width-header -->
				</div>

			
				<!-- BEGIN .index-list -->
				<div class="index-list">
				<?php
					$paged = get_query_string_paged();
					$posts_per_page = get_option('theme_show_gallery_items');
					if($posts_per_page == "") {
						$posts_per_page = get_option('posts_per_page');
					}
					$my_query = new WP_Query(array('post_type' => 'gallery', 'paged' => $paged, 'posts_per_page' => $posts_per_page));
					$counter=1;
				
				?>
				<?php if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
					<?php if ($counter == 1) { ?><!-- BEGIN .row --><div class="row"> <?php } ?>
						<!-- BEGIN .index-item -->
						<div class="index-item">
							<?php $src = get_post_thumb($post->ID,114,114); ?>
							<a href="<?php the_permalink();?>"><img src="<?php echo $src["src"]; ?>" alt="<?php the_title();?>" /></a>
							<a href="<?php the_permalink();?>"><?php the_title();?></a>
						<!-- END .index-item -->
						</div>	
					<?php if ($counter == 5) { ?><!-- END .row --></div><?php $counter=0;} ?>
					<?php $counter++; ?>
				<?php endwhile; ?>
				<?php if($counter <= 5 && $counter != 1) { ?><!-- END .row --></div><?php } ?>
				<?php else : ?>
				<h2 class="title"><?php printf ( __( 'No galleries were found' , 'oxygen' ));?></h2>
				<?php endif; ?>
									
					<div class="pages">
					<?php gallery_nav_btns($paged, $my_query->max_num_pages); ?>
					</div>
				<!-- END .index-list -->
				</div>

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