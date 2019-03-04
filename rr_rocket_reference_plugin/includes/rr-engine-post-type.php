<?php

// Custom Functions must hook into the init action hook
add_action( 'init', 'rr_engine_post_type' );

// Custom function to call the register_post_type
function rr_engine_post_type() {
        
    // Set various pieces of text, $labels is used inside the $args array
    $labels = array(
        'name'              => __('Engines'),
        'singular_name'     => __('Engine'),
        'add_new'           => __('Add New Engine'),
        'add_new_item'      => __('Add New Engine'),
        'edit_item'         => __('Edit Engine'),
        'new_item'          => __('New Engine'),
        'view_item'         => __('View Engine'),
        'view_items'        => __('View Engines'),
        'search_items'      => __('Search Engines'),
        'not_found'         => __('No Engines Found'),
        'all_items'         => __('All Engines'),
        'archives'          => __('Engine Archives'),
        'attributes'        => __('Engine Attributes'),
        'insert_into_item'  => __('Insert into Engine')
    );

    // Set various pieces of information about the post type
    $args = array(
        'labels'            => $labels,
        'description'       => 'Engines Post Type',
        'public'            => true,
        'menu_position'     => 5,
        'menu_icon'         => 'dashicons-welcome-add-page',
        //'menu_icon'         => plugins_url('rr_rocket_reference_plugin/icons/engine.png'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'has_archive'       => true,
        'rewrite'           => array(
                                'slug' => 'engine',
                                'with_front' => false
        ),
        'taxonomies'        => array('category'),
        'show_in_rest'      => true
    );

    // Call the actual WordPress function
    // Parameter 1 is the name of the post type, Paramter 2 is always $args
    register_post_type( 'engine', $args );
}

?>