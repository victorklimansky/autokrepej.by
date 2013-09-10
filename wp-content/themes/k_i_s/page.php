<?php get_header(); ?>
	<div id="content" class="narrowcolumn" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post box" id="post-<?php the_ID(); ?>">
			<div class="box-t">
				<div class="box-b">
					<h2><?php the_title(); ?></h2>
					<div class="entry">
						<?php the_content('<p class="serif">Читать далее &raquo;</p>'); ?>
						<?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; endif; ?>
		<?php edit_post_link('Редактировать.', '<p>', '</p>'); ?>
		<?php comments_template(); ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
