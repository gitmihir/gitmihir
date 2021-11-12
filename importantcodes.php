<?php
// Remove conflicts between ACF plugin and Wordpress Default Meta fields
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

// If you want to create separate template for comment form. Pass post ID in URL and get that id on desired template 
if (isset($_GET['writeyourreviewid'])) {
    $yourpostid = $_GET['writeyourreviewid'];
    comment_form($args = array(), $post_id = $yourpostid);
}

// Use of dynamic address in map with php variable
$yourAddress = "Example Address or you can fetch address from backend options";
?>
<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $yourAddress; ?>&output=embed"></iframe>
