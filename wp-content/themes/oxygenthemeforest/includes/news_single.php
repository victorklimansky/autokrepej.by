<!-- BEGIN .content-wrapper -->
<div class="content-wrapper">

<!-- BEGIN .content -->
<div class="content">

<!-- BEGIN .left-side -->
<div class="left-side">

	<!-- BEGIN .left-side -->
	<div class="article-wrapper">
	
		<!-- BEGIN .title -->
		<div class="title">
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		<!-- END .title -->
		</div>
		
		<!-- BEGIN .info -->
		<div class="info">
			<div class="align-left"><?php echo the_time("j. F, Y"); ?><span>|</span><?php the_category(", ");?><span>|</span><b><?php  comments_popup_link(__('No comments' , 'oxygen'),__('One comment' , 'oxygen'),__('% comments' , 'oxygen'));?></b></div>
			<div class="align-right">
				<?php 
				$via = get_option("theme_twitter_url");
				if($via != "") {
					$via = explode("/",$via);
					$via = $via[count($via)-1];
				}
				if(get_option("theme_twitter_url") != "") {
					?>
						<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php echo $via; ?> "><?php printf(__('Tweet' , 'oxygen')); ?></a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
					<?php
				} 
				?>
			</div>
		<!-- END .info -->
		</div>
		
		<!-- BEGIN .text -->
		<div class="text">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<?php if(get_option("theme_show_single_thumb") == "on") { add_filter('the_content', 'add_image_thumb'); }?>
				<?php add_filter('the_content', 'wrap_img_tags'); ?>
				<?php the_content(); ?>
				<?php remove_filter('the_content', 'add_image_thumb'); ?>
				
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
	<?php endif; ?>
	<?php endwhile; else: ?>
	<p><?php printf(__('Sorry, no posts matched your criteria.','oxygen')); ?></p>
	<?php endif; ?>
<!-- END .left-side -->
</div>
