<?php
/*
Plugin Name: RSS by RGVWEBPRO
Plugin URI:  https://github.com/rgvwebpro/rgvwebprorss
Description: Adds extra tags to RSS feeds (ie. featured image).
Version:     0.1-alpha
Author:      RGVWEBPRO
Author URI:  http://rgvwebpro.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: rss-by-rgvwebpro

RSS by RGVWEBPRO is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

RSS by RGVWEBPRO is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with RSS by RGVWEBPRO. If not, see {License URI}.
*/


/**
 *
 *	Add image to RSS feed
 *
 *  Note: Custom elements like the one in this example are not a part of the
 *  RSS 2.0 specification, so adding it will mean your feed will technically be
 *  invalid RSS 2.0. Few, if any, RSS readers will make any use of the custom
 *  element.
 *
 *  @link https://codex.wordpress.org/Plugin_API/Action_Reference/rss2_item
 *
 */

add_action('rss2_item', 'rss_by_rgvwebpro_rss_node');

function rss_by_rgvwebpro_rss_node() {
  global $post;
    if(has_post_thumbnail($post->ID)):
      $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(640, 480));
      $url = $thumbnail[0];
    echo '<image>' . $url . '</image>';
  endif;
}
