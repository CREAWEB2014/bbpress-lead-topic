<?php
/*
Plugin Name:    BBPress Lead Topic
Description:    Forces BBPress to show lead topic before replies.
Version:        1.0
Author:         Nicholas Cloud
License:        MIT
License URI:    https://opensource.org/licenses/MIT
*/

/**
 * @param $show_lead
 * @return array
 * @see https://codex.bbpress.org/bbp_show_lead_topic/
 * @see https://bbpress.org/forums/topic/lead-topic/
 */
function custom_bbp_show_lead_topic( $show_lead ) {
	$show_lead[] = 'true';
	return $show_lead;
}

add_filter('bbp_show_lead_topic', 'custom_bbp_show_lead_topic' );