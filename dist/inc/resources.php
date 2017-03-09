<?php
function dwwp_register_post_type() {
    $singular = 'Download';
    $plural = 'Downloads';
    $labels = array(
        'name' => $plural,
        'singular_name' => $singular,
        'add_name' => 'Add New',
        'add_new_item' => 'Add New ' . $singular,
        'edit_item'           => __( 'Edit ' . $singular ),
        'new_item'            => __( 'New ' . $singular ),
        'view_item'           => __( 'View ' . $singular ),
        'search_items'        => __( 'Search ' . $plural ),
        'not_found'           => __( 'No ' . $plural .' found' ),
        'not_found_in_trash'  => __( 'No ' . $plural . 'in Trash' ),
        'parent_item_colon'   => __( 'Parent:' . $singular ),
        'menu_name'           => __( $plural ),
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'description'         => 'description',
        'taxonomies'          => array(),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-download',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array(
            'slug' => 'resources',
            'with_front' => true,
            'pages' => true,
            'feeds' => false,
            ),
        'capability_type'     => 'page',
        'supports'            => array(
            'title'
            )
    );
    register_post_type('resource', $args);
}
add_action('init', 'dwwp_register_post_type');

/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function dwwp_register_taxonomy() {
    $plural = 'Resources';
    $singular = 'Resource';

    $labels = array(
        'name'                        => $plural,
        'singular_name'               => $singular,
        'search_items'                => __( 'Search ' . $plural, 'text-domain' ),
        'popular_items'               => __( 'Popular ' . $plural, 'text-domain' ),
        'all_items'                   => __( 'All ' . $plural, 'text-domain' ),

        'edit_item'                   => __( 'Edit ' . $singular, 'text-domain' ),
        'update_item'                 => __( 'Update ' . $singular, 'text-domain' ),
        'add_new_item'                => __( 'Add New ' . $singular, 'text-domain' ),
        'new_item_name'               => __( 'New ' . $singular . ' Name', 'text-domain' ),
        'add_or_remove_items'         => __( 'Add or remove ' . $plural, 'text-domain' ),
        'choose_from_most_used'       => __( 'Choose from most used ' . $plural, 'text-domain' ),
        'menu_name'                   => __( $plural, 'text-domain' ),
        'separate_items_with_commas'  => __('Separate ' . $plural . ' with commas'),
        'not_found'                   => __('No ' . $plural . ' found'),
    );

    $args = array(
        'labels'                 => $labels,
        'public'                 => true,
        'show_in_nav_menus'      => true,
        'show_admin_column'      => true,
        'hierarchical'           => false,
        'show_tagcloud'          => true,
        'show_ui'                => true,
        'query_var'              => true,
        'rewrite'                => array('slug' => 'resource'),
        'query_var'              => true,
        'update_count_callback'  => 'update_post_term_count',
        'capabilities'           => array(),
    );

    register_taxonomy( 'resource', 'resource', $args );
}

add_action( 'init', 'dwwp_register_taxonomy' );
