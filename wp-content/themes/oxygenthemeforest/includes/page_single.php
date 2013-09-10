<!-- BEGIN .content-wrapper -->
<div class="content-wrapper">

<!-- BEGIN .content -->
<div class="content">

<!-- BEGIN .left-side -->
<div class="left-side">

	<!-- BEGIN .left-side -->
	<div class="article-wrapper">
	
		<!-- BEGIN .section-header -->
		<div class="section-header">
			<h2><?php the_title();?></h2>
			<h3>					
				<?php
					global $post;
					$subtitle = get_post_meta($post->ID, "subtitle"); 
					echo $subtitle[0];
				?>
			</h3>
		<!-- END .menu-primary-wrapper -->
		</div>
		
		<!-- BEGIN .text -->
		<div class="text">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php remove_filter( 'the_content', 'wpautop' ); ?>
				<?php add_filter('the_content', 'wrap_img_tags'); ?>
				<?php add_filter( 'the_content', 'wpautop' ); ?>
				<?php the_content(); ?>

		<!-- END .text -->
		</div>	
			
		<!-- BEGIN .article-footer -->
		<div class="article-footer">
			<a href="<?php bloginfo("url");?>" class="btn-1 btn-align-left btn-previous"><i>&nbsp;</i><b><span><?php printf(__('Back to homepage','oxygen')); ?></span></b><u>&nbsp;</u></a>
		<!-- END .article-footer -->
		</div>
		
	<!-- END .left-side -->
	</div>

	<?php if ( comments_open() ) : ?>
	<!-- BEGIN .section-spacer -->
	<table class="section-spacer">
		<tr>
			<td class="left"></td>
			<td class="middle">
				<span><?php printf(__('Comments','oxygen')); ?></span>
			</td>
			<td class="right"></td>
		</tr>
	<!-- END .section-spacer -->
	</table>
	

	<!-- BEGIN .comments-wrapper -->
	<div class="comments-wrapper">
		<?php comments_template(); // Get wp-comments.php template ?>
	<!-- END .comments-wrapper -->
	</div>
	
	<?php endif ;?>
	<?php endwhile; else: ?>
	<p><?php printf(__('Sorry, no posts matched your criteria.','oxygen')); ?></p>
	<?php endif; ?>
<!-- END .left-side -->
</div>
