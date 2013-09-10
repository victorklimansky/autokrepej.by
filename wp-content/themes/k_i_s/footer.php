		<div class="cl">&nbsp;</div>
	</div>
	<div id="footer" class="nav">
		<p style="padding:15px;">Все права защищены &copy; <?php echo date('Y'); ?> <a href="/"><strong><?php bloginfo('name'); ?></strong></a>. <?php bloginfo('description'); ?>
<?php if ($user_ID) : ?><?php else : ?><br /><span style="font-size:9px; color:#888;">Thanks: 
<?php if (is_home()) { ?><a href="http://strana-creditov.ru/" style="color:#888;text-decoration: none;">Strana-creditov</a>
<?php } elseif (is_single()) {?><a href="http://africanstates.ru/" style="color:#888;text-decoration: none;">Africanstates</a>
<?php } elseif (is_category()) {?><a href="http://justtop.ru/" style="color:#888;text-decoration: none;">Justtop</a>
<?php } elseif (is_archive()) {?><a href="http://www.so4ikar.ru/" style="color:#888;text-decoration: none;">So4ikar</a>
<?php } elseif (is_page()) {?><a href="http://allamyr.ru/" style="color:#888;text-decoration: none;">Allamyr</a>
<?php } else {?><?php } ?></span><?php endif; ?></p>
		<div class="cl">&nbsp;</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
