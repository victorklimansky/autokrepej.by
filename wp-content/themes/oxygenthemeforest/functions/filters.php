<?php
function new_excerpt_length($length) {
	return 35;
}

function new_excerpt_more($more) {
	return '...';
}

function remove_objects($content)
{
	$content = preg_replace('/\<div(.*?)\>(.*?)\<\/div\>/s', '', $content);
	$content = preg_replace('/\<object(.*?)\>(.*?)\<\/object\>/s', '', $content);
	return $content;
}

function remove_images($content)
{
	$content = preg_replace('#(<[/]?a.*><[/]?img.*></a>)#U', '', $content);
	$content = preg_replace('#(<[/]?img.*>)#U', '', $content);
	$content = preg_replace("/\[caption(.*)\](.*)\[\/caption\]/Usi", "", $content);
    return $content;
}

function filter_where( $where = '' ) {
	// posts in the last 30 days
	$where .= " AND post_date > '" . date('Y-m-d', strtotime('-30 days')) . "'";
	return $where;
}

function page_read_more($content) {
	$result = preg_split('/<span id="more-\d+"><\/span>/', $content);
	return $result[0];
}
 
function wrap_img_tags($content)
{
    $content = preg_replace('#(<[/]?img.*>)#U', '<p class="img">$1</p>', $content);
    return $content;
}

function remove_shortcode_from_index($content) {
  if ( is_home() ) {
    $content = strip_shortcodes( $content );
  }
  return $content;
}
load_theme_textdomain( 'oxygen', TEMPLATEPATH . '/languages' );
$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable( $locale_file ) )
require_once( $locale_file );

add_filter('excerpt_length', 'new_excerpt_length');
add_filter('excerpt_more', 'new_excerpt_more');
add_filter('the_content', 'remove_shortcode_from_index');
remove_filter('the_excerpt', 'wpautop');

?>