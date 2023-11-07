<?php

//------------------Register Custom Post Review Service----------------------
function review_post_type()
{
    $labels = array(
        'name'                  => _x('Review', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Review', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Review', 'text_domain'),
        'all_items'             => __('Review', 'text_domain'),
        'add_new_item'          => __('Add Review', 'text_domain'),
        'add_new'               => __('Add Review', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Review', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('thumbnail', 'title', 'editor', 'excerpt'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 4,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
    );
    register_post_type('review', $args);
}

add_action('init', 'review_post_type', 0);
