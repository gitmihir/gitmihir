<?php
// Remove conflicts between ACF plugin and Wordpress Default Meta fields
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

// If you want to create separate template for comment form. Pass post ID in URL and get that id on desired template 
if (isset($_GET['writeyourreviewid'])) {
    $pricexpostid = $_GET['writeyourreviewid'];
    comment_form($args = array(), $post_id = $pricexpostid);
}
