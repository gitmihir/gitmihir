function standard_post_type_for_Resources() {
    $supports = array(
        'title',
        'editor',
        'author',
        'thumbnail',
        'excerpt',
        'custom-fields',
        'comments',
        'revisions',
        'post-formats',
    );
    $labels = array(
        'name' => _x('Resources', 'plural'),
        'singular_name' => _x('Resources', 'singular'),
        'menu_name' => _x('Resources', 'admin menu'),
        'name_admin_bar' => _x('Resources', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Resources'),
        'new_item' => __('New Resources'),
        'edit_item' => __('Edit Resources'),
        'view_item' => __('View Resources'),
        'all_items' => __('All Resources'),
        'search_items' => __('Search Resources'),
        'not_found' => __('No Resources found.'),
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'menu_position' => 99,
        'menu_icon' => 'dashicons-media-archive',
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'pricexauto-resources'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('pricexauto-resources', $args);
}

add_action('init', 'standard_post_type_for_Resources');

function standard_create_tax_for_resources() {
    register_taxonomy(
            'resources-category', 'pricexauto-resources', array(
        'label' => __('Category'),
        'rewrite' => array('slug' => 'resources-category'),
        'hierarchical' => true,
        'show_admin_column' => true,
            )
    );
}

add_action('init', 'standard_create_tax_for_resources');
