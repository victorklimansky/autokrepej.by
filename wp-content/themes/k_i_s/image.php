<?php get_header(); ?>

	<div id="content" class="widecolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post box" id="post-<?php the_ID(); ?>">
			<div class="box-t">
				<div class="box-b">
					
					<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
				
					<div class="entry">
						<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
						<div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>
		
						<?php the_content('<p class="serif">Читать полностью &raquo;</p>'); ?>
		
						<div class="image-page-nav">
							
							<div class="alignleft"><?php previous_image_link() ?></div>
							<div class="alignright"><?php next_image_link() ?></div>
						</div>
						
						<div class="cl">&nbsp;</div>
		
						<p class="postmetadata alt">
							<small>
								Этот пост был опубликован <?php the_time('l, d M Y') ?> в <?php the_time() ?>. Рубрика: <?php the_category(', ') ?>.
								<?php the_taxonomies(); ?>
								Вы можете следить за записью при помощи <?php post_comments_feed_link('RSS 2.0'); ?> ленты.
		
								<?php if ( comments_open() && pings_open() ) {
									// Both Comments and Pings are open ?>
									Вы моежте <a href="#respond">оставить комментарий</a> или <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> со своего сайта.
		
								<?php } elseif ( !comments_open() && pings_open() ) {
									// Only Pings are Open ?>
									Комментирование закрыто, но вы можете оставить <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> со своего сайта.
		
								<?php } elseif ( comments_open() && !pings_open() ) {
									// Comments are open, Pings are not ?>
									Комментарии разрешены. Пинг запрещён.
		
								<?php } elseif ( !comments_open() && !pings_open() ) {
									// Neither Comments, nor Pings are open ?>
									И комментарии, и пинг запрещены.
		
								<?php } edit_post_link('Редактировать.','',''); ?>
		
							</small>
						</p>
					</div>
				</div>
			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Извините, ничего не найдено по вашему критерию.</p>

<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
