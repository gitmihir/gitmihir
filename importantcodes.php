<?php
// Remove conflicts between ACF plugin and Wordpress Default Meta fields
add_filter('acf/settings/remove_wp_meta_box', '__return_false');
