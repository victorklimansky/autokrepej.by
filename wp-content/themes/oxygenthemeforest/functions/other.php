<?php

function mytheme_comment($comment, $args, $depth) {

	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	
	<?php if($comment->user_id == get_the_author_meta('ID')) {$author = 'author';} else {$author='';} ?>
	<li <?php comment_class($author); ?> id="li-comment-<?php comment_ID(); ?>">
		<div class="comments-item" id="comment-<?php comment_ID(); ?>">
			<a href="<?php comment_author_url(); ?>" class="user"><?php echo get_avatar( $comment, 36); ?></a>
			<h2><a href="<?php comment_author_url(); ?>"><b><?php comment_author(); ?></b></a><span>|</span><?php comment_time('G:i'); ?>, <?php comment_date('j. F, Y');?> <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></h2>	

			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em>Your comment is awaiting moderation</em>
				<br />
			<?php endif; ?>
			
			<p><?php comment_text(); ?></p>
		</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	endswitch;
}

function add_menu_arrows($menu) {
	$c=0;
	$pos = strpos($menu,"</a>");
	while($pos !== false) {
		$pos_next_a = strpos($menu,"</a>",$pos + 1);
		$pos_next_ul = strpos($menu,"<ul",$pos + 1);

		if($pos_next_a > $pos_next_ul && $pos_next_ul > 0) {
			$insert_end = $pos + strlen("<span>");
			$insert_start = strrpos($menu,"<a",$insert_end-strlen($menu));
			$insert_start = strpos($menu,">",$insert_start) + strlen(">");
			
			$start = substr($menu,0,$insert_start);
			$end = substr($menu,$insert_start);
			$menu = $start."<span>".$end;
			
			$start = substr($menu,0,$insert_end);
			$end = substr($menu,$insert_end);
			$menu = $start."</span>".$end;
			
			$pos = $pos + strlen("<span></span>");
		}
		
		$pos = strpos($menu,"</a>",$pos + 1);
	}
	return $menu;
} 


function word_trim($string, $count){
  $words = explode(' ', $string);
  if (count($words) > $count){
    array_splice($words, $count);
    $string = implode(' ', $words);
  }
  return $string;
}

function remove_br($subject) {
	$subject = str_replace("<br/>", " ", $subject );
	$subject = str_replace("<br>", " ", $subject );
	$subject = str_replace("<br />", " ", $subject );
	return $subject;
}

function get_query_string_paged() {
	global $query_string;
	$pos = strpos($query_string,"paged=");
	if($pos !== false ) {
		$sub = substr($query_string,$pos);
		$posand = strpos($sub,"&");
		if ($posand == 0) {$paged = substr($sub,6);}
		else { $paged = substr($sub,6,$posand-6);}
		return $paged;
	}
	return 0;
}

function get_gallery_page() {
	$pages = get_pages();
	foreach($pages as $p) {
		$meta = get_post_custom_values("_wp_page_template",$p->ID);
		if($meta[0] == "template-gallery.php") {
			return $p->ID;
		}
	}
	return false;
}

function update_slider() {
  $updateRecordsArray = $_POST['recordsArray'];
 
	$listingCounter = 1;
	foreach ($updateRecordsArray as $recordIDValue) {
		global $wpdb;

		$wpdb->query( $wpdb->prepare("UPDATE $wpdb->posts SET menu_order = ".$listingCounter." WHERE ID = " . $recordIDValue  ) ); 

		$listingCounter = $listingCounter + 1;

	}

	echo '<pre>';
	print_r($updateRecordsArray);
	echo '</pre>';
	echo 'If you refresh the page, you will see that records will stay just as you modified.';
}


add_action('wp_ajax_update_slider', 'update_slider');


 
 /* -------------------------------------------------------------------------*
 * 							OTHER THEMES									*
 * -------------------------------------------------------------------------*/
 
 function other_themes () {
?>
		<!-- BEGIN more-orange-themes -->
		<div class="more-orange-themes">

			<div class="header">
				<img src="<?php echo THEME_IMAGE_MTHEMES_URL; ?>title-more-themes.png" alt="" width="447" height="23" />
				<p>
					<a href="http://www.themeforest.net/user/orange-themes/portfolio?ref=orange-themes" class="btn-1" target="_blank"><span><u class="themeforest">Check our portfolio at themeforest.net</u></span></a>
					<a href="http://www.twitter.com/#!/orangethemes" class="btn-1" target="_blank"><span><u class="twitter">Follow us on twitter</u></span></a>
					<a href="http://www.orange-themes.com" class="btn-1" target="_blank"><span><u class="orangethemes">Orange-themes.com</u></span></a>
				</p>
			</div>

			<?php 
				$xml = theme_get_latest_theme_version(THEME_NOTIFIER_CACHE_INTERVAL); 
				foreach ( $xml->item as $entry ) {
				$title = explode("Private: ", $entry->title);
			?>
			
			<!-- BEGIN .item -->
			<div class="item">
				<div class="image">
					<a href="<?php echo $entry->purchase; ?>"><img src="<?php echo $entry->image; ?>" /></a>
				</div>
				<div class="text">
					<h2><a href="<?php echo $entry->purchase; ?>"><?php echo $title[1]; ?></a></h2>
					<p><?php echo $entry->content; ?></p>
					<p class="link"><a href="<?php echo $entry->demo; ?>" target="_blank">Demo website</a></p>
					<p class="link"><a href="<?php echo $entry->purchase; ?>" target="_blank">Purchase at ThemeForest.net</a></p>
					<?php if ( $entry->html ) { ?>
						<p class="link"><a href="<?php echo $entry->html; ?>" target="_blank">HTML version</a></p>
					<?php } ?>
				</div>
			<!-- END .item -->
			</div>
			<?php } ?> 
			
		<!-- END more-orange-themes -->
		</div>
<?php
	
}


?>