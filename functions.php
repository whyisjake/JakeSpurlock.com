<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/* Add custom functions below */

function add_twitter_card_support() {
	return '<meta name="twitter:widgets:csp" content="on">';
}

add_filter('wp_head', 'add_twitter_card_support');