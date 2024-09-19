<?php
/**
 * This will delete the plugin data From DB
 *
 * @package MyPlugin
 */

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

// Delete data from the Database using wordpress (NoSQL)

/*
$books = get_posts([ 'post_type' => 'book', 'numberposts' => -1 ]);
foreach ($books as $book) {
wp_delete_post($book->ID, true);
}
 */

// Deleting posts by directly writing (SQL) in the database using $wpdb

global $wpdb;
$wpdb->query(" DELETE FROM wp_posts WHERE post_type = 'book' ");
$wpdb->query(" DELETE FROM wp_postmeta WHERE post_id NOT IN ( SELECT id FROM wp_posts ) ");
