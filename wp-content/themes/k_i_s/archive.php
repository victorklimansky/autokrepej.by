<?php get_header(); ?>

	<div id="content" class="narrowcolumn" role="main">

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Архивы для &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Посты с тегом &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Архивы за <?php the_time('d M Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Архивы за <?php the_time('F Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Архивы за <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Авторские архивы</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Архивы блога</h2>
 	  <?php } ?>


		<?php while (have_posts()) : the_post(); ?>
			<div class="post box" id="post-<?php the_ID(); ?>">
				<div class="box-t">
					<div class="box-b">

						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на статью <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
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
									<p><?php comments_popup_link('0 Комментариев', '1 комментарий', '% комментариев'); ?></p>
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
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Извините, в этой категории ещё нет записей.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>За эту дату нет постов.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Здесь ещё нет постов.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>Посты не найдены.</h2>");
		}
		get_search_form();

	endif;
?>

	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>