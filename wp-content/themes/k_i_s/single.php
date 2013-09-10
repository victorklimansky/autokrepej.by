<?php get_header(); ?>

	<div id="content" class="widecolumn" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="page-nav">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

		<div class="post box" id="post-<?php the_ID(); ?>">
			<div class="box-t">
				<div class="box-b">
					<h2><?php the_title(); ?></h2>

					<div class="entry">
						<?php the_content('<p class="serif">Читать далее &raquo;</p>'); ?>
						
						<?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		
						<?php the_tags( '<div class="post-meta"><div class="post-meta-b"><p>Теги: ', ', ', '</p></div></div>'); ?>
		
						<p class="postmetadata alt">
							<small>
								Запись была опубликована в
								<?php /* This is commented, because it requires a little adjusting sometimes.
									You'll need to download this plugin, and follow the instructions:
									http://binarybonsai.com/wordpress/time-since/ */
									/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
								 <?php the_time('l, d M Y') ?> <?php the_time(); ?>	в рубрике <?php the_category(', ') ?>.
								Вы можете следить за обновлениями при помощи <?php post_comments_feed_link('RSS 2.0'); ?> ленты.
		
								<?php if ( comments_open() && pings_open() ) {
									// Both Comments and Pings are open ?>
									Вы можете <a href="#respond">оставить комментарий</a> или <a href="<?php trackback_url(); ?>" rel="trackback">трекбек</a> со своего сайта.
		
								<?php } elseif ( !comments_open() && pings_open() ) {
									// Only Pings are Open ?>
									Комментирование закрыто, то вы можете оставить <a href="<?php trackback_url(); ?> " rel="trackback">трекебек</a> со своего сайта.
		
								<?php } elseif ( comments_open() && !pings_open() ) {
									// Comments are open, Pings are not ?>
									Можете это пропустить и спустится вниз. Пинги запрещены.
		
								<?php } elseif ( !comments_open() && !pings_open() ) {
									// Neither Comments, nor Pings are open ?>
									И комментирование, и пинги запрещены.
		
								<?php } edit_post_link('Редактировать запись','','.'); ?>
		
							</small>
						</p>
		
					</div>
				</div>
			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>
		<h2 class="pagetitle">Извините, ничего не найдено.</h2>

<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
