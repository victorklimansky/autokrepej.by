<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body >
<div id="shell">
	<div id="header">
		<div class="blog-info">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<span class="blog-desc"><?php bloginfo('description'); ?></span>
		</div>
		<div id="navigation" class="nav">
			<ul>
				<li <?php if(is_home()) echo 'class="current_page_item"'; ?>><a href="<?php echo get_option('home'); ?>/" >Главная</a></li>
			    <?php wp_list_pages('title_li=&parent=0&'); ?>
			</ul>
			<a href="<?php bloginfo('rss_url'); ?>" class="rss">Подписаться</a>
		</div>
	</div>
	<div id="main">
		<div class="cl">&nbsp;</div>