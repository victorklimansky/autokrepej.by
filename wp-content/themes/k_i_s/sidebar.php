	<div id="sidebar" role="complementary">
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<li style="height: 100%">
				<h2>Искать</h2>
				<ul>
				    <li class="no-li"><?php get_search_form(); ?></li>
				</ul>
				<div class="cl">&nbsp;</div>
			</li>
			
			<?php /*
			// For some reason IE6 cannot handle below comment properlly if it's directly in the HTML
			<!-- 
			Раскомментируйте, если хотите использовать
			<li>
				<h2>Автор</h2>
				<p>Немного про Вас, про автора. Всего-то пару предложений.</p>
			</li>
			-->
			*/ ?>

			

		</ul>
		<ul role="navigation">
			<?php wp_list_pages('title_li=<h2>Страницы</h2>' ); ?>

			<li><h2>Архивы</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php wp_list_categories('show_count=1&title_li=<h2>Рубирики</h2>'); ?>
		</ul>
		<ul>
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>

				<li><h2>Управление</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="<?php bloginfo('rss2_url'); ?>">Публикации RSS</a></li>
					<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Комментарии RSS</a></li>
					<li><a href="http://wordpress-ru.ru">Wordpress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>

			<?php endif; ?>
		</ul>
	</div>

