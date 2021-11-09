<?php
function pricexauto_left_profile_widgets_init() {
    register_sidebar(array(
        'name' => __('PriceXauto Left Profile Sidebar', 'textdomain'),
        'id' => 'pricexauto-left-profile-sidebar',
        'description' => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="pricexautowidgettitle">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'pricexauto_left_profile_widgets_init');
