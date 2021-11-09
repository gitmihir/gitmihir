<?php
$slide_args = array(
    "post_type" => "standard_slider",
    "posts_per_page" => -1,
           );
    $slide_count = 0;
    $slide_query = new WP_Query($slide_args);
    while ($slide_query->have_posts()):$slide_query->the_post();
    // Your code goes here
    endwhile;

// Wordpress DB Query
global $wpdb;
$pricexauto_maincar_query = $wpdb->get_results("SELECT * FROM wp_usermeta WHERE `user_id` = '$userid_for_fetching_other_data' AND `meta_key` = 'peepso_user_field_285' GROUP BY user_id");
// Foreach this query for displaying results
