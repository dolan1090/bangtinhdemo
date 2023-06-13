<?php
global $wpdb;
$imagesList = $wpdb->get_results("SELECT ID, guid FROM wp_posts WHERE post_type = 'attachment'");
$imagesIDList = $wpdb->get_results("SELECT ID FROM wp_posts WHERE post_type = 'attachment'");
$imagesGuidList = $wpdb->get_results("SELECT guid FROM wp_posts WHERE post_type = 'attachment'");
