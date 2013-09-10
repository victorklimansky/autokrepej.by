<?php get_header(); ?>
	<div id="content" class="narrowcolumn" role="main">
	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
			<div class="post box" id="post-<?php the_ID(); ?>">
				<div class="box-t">
					<div class="box-b">

						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на запись <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<small class="date"><?php the_time('d M Y') ?> <!-- Автор: <?php the_author() ?> --></small>

						<div class="entry">
							<?php the_content('Читать далее &raquo;'); ?>
						</div>

						<div class="post-meta">
							<div class="post-meta-b">
								<div class="cl">&nbsp;</div>
								<div class="left">
									<p>Опубликовано в <?php the_category(', ') ?></p>
									<?php the_tags('<p>Теги: ', ', ', '</p>'); ?>
								</div>
								<div class="right">
									<p><?php comments_popup_link('0 комментариев', '1 комментарий', '% комментариев'); ?></p>
									<!-- <p><?php edit_post_link('Редактировать', '', ''); ?></p> -->
								</div>
								
								<div class="cl">&nbsp;</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		<?php endwhile; ?>

		<div class="page-nav">
			<div class="alignleft"><?php next_posts_link('&laquo; Старые записи') ?></div>
			<div class="alignright"><?php previous_posts_link('Новые записи &raquo;') ?></div>
		</div>

	<?php else : ?>
		<h2 class="center">Не найдено.</h2>
		<p class="center">Ничего не удалось найти. Попробуйте изменить поисковый запрос.</p>
		<?php get_search_form(); ?>
	<?php endif; ?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
