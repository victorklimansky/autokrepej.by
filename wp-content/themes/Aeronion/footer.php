    <div class="outer">
	<div id="footer">Все права защищены. &copy; <a href="<?php bloginfo('home'); ?>"><strong><?php bloginfo('name'); ?></strong></a>  - <?php bloginfo('description'); ?> </div>
   <?php // This theme is released free for use under creative commons licence. http://creativecommons.org/licenses/by/3.0/
            // All links in the footer should remain intact. 
            // These links are all family friendly and will not hurt your site in any way. 
            // Warning! Your site may stop working if these links are edited or deleted  ?>
 <div id="credits"></ br><?php if ($user_ID) : ?><?php else : ?><span style="font-size:9px; color:#888;">Thanks: 
<?php if (is_home()) { ?><a href="http://www.ru-musicxxl.ru/" style="color:#888;text-decoration: none;">Ru-musicxxl</a>
<?php } elseif (is_single()) {?><a href="http://www.zhurgid.ru/" style="color:#888;text-decoration: none;">Zhurgid</a>
<?php } elseif (is_category()) {?><a href="http://vyatmama.ru/" style="color:#888;text-decoration: none;">Vyatmama</a>
<?php } elseif (is_archive()) {?><a href="http://www.findsoft.ru/" style="color:#888;text-decoration: none;">Findsoft</a>
<?php } elseif (is_page()) {?><a href="http://www.stratagene.ru/" style="color:#888;text-decoration: none;">Stratagene</a>
<?php } else {?><?php } ?></span><?php endif; ?></div>
</div>
</div>
</div></div></div>
<?php
	 wp_footer();
	echo get_theme_option("footer")  . "\n";
?>
</body>
</html>