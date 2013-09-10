<?php
/*
Template Name: Full Width Page
*/
?>
<?php get_header(); ?>
<?php include (THEME_INCLUDES . '/top.php'); ?>

<!-- BEGIN .content-wrapper -->
<div class="content-wrapper">

	<!-- BEGIN .content -->
	<div class="content">
		
		<!-- BEGIN .full-width-wrapper -->
		<div class="full-width-wrapper">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<!-- BEGIN .full-width-header -->
			<div class="full-width-header">
				<h2><?php the_title();?></h2>
				<h3>
					<?php				
						$subtitle = get_post_meta(get_the_ID(), "subtitle"); 
						echo $subtitle[0];
					?>
				</h3>
			<!-- END .full-width-header -->
			</div>
				
				<?php if(get_option("theme_show_single_thumb") == "on") { add_filter('the_content', 'add_image_thumb'); }?>
				<?php add_filter('the_content', 'wrap_img_tags'); ?>
				<?php the_content(); ?>
				<?php remove_filter('the_content', 'add_image_thumb'); ?>
			
			<?php endwhile; else: ?>
			<p><?php  printf (__('Sorry, no posts matched your criteria.' , 'oxygen')); ?></p>
			<?php endif; ?>
			
		<!-- END .full-width-wrapper -->
		</div>


	<!-- END .content -->
	</div>
	
<!-- END .content-wrapper -->
</div>

<?php get_footer(); ?>