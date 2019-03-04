<?php

// Custom Functions must hook into the init action hook
add_action( 'init', 'rr_launch_vehicle_post_type' );

// Custom function to call the register_post_type
function rr_launch_vehicle_post_type() {
        
    // Set various pieces of text, $labels is used inside the $args array
    $labels = array(
        'name'              => __('Launch Vehicles'),
        'singular_name'     => __('Launch Vehicle'),
        'add_new'           => __('Add New Launch Vehicle'),
        'add_new_item'      => __('Add New Launch Vehicle'),
        'edit_item'         => __('Edit Launch Vehicle'),
        'new_item'          => __('New Launch Vehicle'),
        'view_item'         => __('View Launch Vehicle'),
        'view_items'        => __('View Launch Vehicle'),
        'search_items'      => __('Search Launch Vehicles'),
        'not_found'         => __('No Launch Vehicles Found'),
        'all_items'         => __('All Launch Vehicles'),
        'archives'          => __('Launch Vehicle Archives'),
        'attributes'        => __('Launch Vehicle Attributes'),
        'insert_into_item'  => __('Insert into Launch Vehicle')
    );

    // Set various pieces of information about the post type
    $args = array(
        'labels'            => $labels,
        'description'       => 'Launch Vehicle Post Type',
        'public'            => true,
        'menu_position'     => 5,
        'menu_icon'         => 'dashicons-welcome-add-page',
        //'menu_icon'         => plugins_url('rr_rocket_reference_plugin/icons/engine.png'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'has_archive'       => true,
        'rewrite'           => array(
                                'slug' => 'launch_vehicle',
                                'with_front' => false
        ),
        'taxonomies'        => array('category'),
        'show_in_rest'      => true
    );

    // Call the actual WordPress function
    // Parameter 1 is the name of the post type, Paramter 2 is always $args
    register_post_type( 'launch_vehicle', $args );
}

?>