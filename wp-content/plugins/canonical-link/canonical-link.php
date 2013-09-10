<?php
/*
Plugin Name: Canonical Link
Version: 1.2
Plugin URI: http://bryanhadaway.com/super-simple-dynamic-canonical-link-code/
Description: Inserts canonical link code into header. After activation, from your WordPress Settings, change Permalinks to Custom Structure: (<a href="http://wordpress.org/extend/plugins/canonical-link/installation/" target="_blank">please see instructions page</a>) and you're done, no further steps are needed. If you have any problems please visit: <a href="http://wordpress.org/extend/plugins/canonical-link/installation/" target="_blank">http://wordpress.org/extend/plugins/canonical-link/installation/</a> for full detailed instructions.
Author: Bryan Hadaway
Author URI: http://bryanhadaway.com/

This code is completely free and open source.
*/

function canonicalink() {
    $request_uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    echo "<link rel=\"canonical\" href=\"http://{$_SERVER['HTTP_HOST']}{$request_uri}\" />";
}

add_action('wp_head','canonicalink',1,1);
?>