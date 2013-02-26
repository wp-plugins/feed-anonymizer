=== Plugin Name ===
Contributors: ringmaster
Tags: feed, anonymous, feeds, rss, rss2, atom, rdf
Requires at least: 3.5
Tested up to: 3.5.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Replaces individual author names in feeds with the site name.

== Description ==

This plugin performs the simple task of replacing individual author names in feeds with the site name.

This is useful for blogs that are written by multiple authors that have the "authoritative voice" of the blog itself,
rather than attributing each post to its individual author.  This plugin makes the posts in the feeds (all feeds: rss,
rss2, atom, rdf, etc) appear to be written anonymously, instead using the name of the site as the publishing author,
rather than the name of the author.  This prevents admins from having to edit core files to make posts in the feed anonymous.

== Installation ==

1. Upload `feedanonymizer.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.0 =
* Initial, and probably final, release.
