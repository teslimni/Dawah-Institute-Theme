<?php
/*
 * Add Redux Framework
 */

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array());
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), '0.1.0', true );
}

function all_excerpts_get_more_link($post_excerpt) {

    return $post_excerpt . ' ...' . ' <p><a class="btn btn-primary understrap-read-more-link" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More...', 'understrap')  . '</a></p>';
}
add_filter('wp_trim_excerpt', 'all_excerpts_get_more_link');

/**
 * Modify the excerpt
 *
 */
function custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

require get_stylesheet_directory() . '/inc/resources.php';
require get_stylesheet_directory() . '/admin/admin-init.php';
require get_stylesheet_directory() . '/inc/opt-in.php';

function child_understrap_home_bottom() {
    register_sidebar( array(
        'name' => __( 'Home Bottom', 'child-understrap' ),
        'id' => 'home-bottom',
        'description' => __( 'Widgets in this area will be shown at the bottom sidebar of the homepage.', 'child-understrap' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Sidebar Top', 'child-understrap' ),
        'id' => 'sidebar-top',
        'description' => __( 'Widgets in this area will be shown at the top sidebar.', 'child-understrap' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer One', 'child-understrap' ),
        'id' => 'footer-one',
        'description' => __( 'This is the first footer area widget area.', 'child-understrap' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Two', 'child-understrap' ),
        'id' => 'footer-two',
        'description' => __( 'This is the second footer area widget area.', 'child-understrap' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Three', 'child-understrap' ),
        'id' => 'footer-three',
        'description' => __( 'This is the third footer area widget area.', 'child-understrap' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'child_understrap_home_bottom' );
