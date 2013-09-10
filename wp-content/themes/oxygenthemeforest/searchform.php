<!-- BEGIN .searchform -->
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>" class="searchform" name="searchform">
	<input type="text" class="input-text" value="<?php $sr = wp_specialchars($s, 1); if($sr) echo $sr; else echo "поиск"; ?>"  onfocus="if (this.value == 'поиск') {this.value = '';};" name="s" id="s" />
	<input type="image" class="input-button" onclick="document.forms.searchform.submit()" value="Meklēt!" src="<?php bloginfo('template_url'); ?>/images/searchform-input-button-bg.png" />
<!-- END .searchform -->
</form>