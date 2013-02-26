<?php
/*
Plugin Name: Feed Anonymizer
Plugin URI: http://wordpress.org/extend/plugins/feed-anonymizer/
Description: Replaces individual author names in feeds with the site name.
Author: Owen Winkler
Version: 1.0
Author URI: http://asymptomatic.net
*/

class AnonymizerPlugin {

	const MY_PLUGIN_VERSION = '1.0';

	public function __construct() {
		add_filter('the_author', array($this, 'filter_the_author'), 10, 1);
	}

	public function filter_the_author($author) {
		if(is_feed()) {
			$author = apply_filters('bloginfo_rss', get_bloginfo_rss('name'), 'name') . apply_filters('wp_title_rss', get_wp_title_rss('&#187;'));
		}
		return $author;
	}
}

new AnonymizerPlugin();

?>