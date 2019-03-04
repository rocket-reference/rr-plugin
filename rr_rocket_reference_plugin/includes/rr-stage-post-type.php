<?php

// Custom Functions must hook into the init action hook
add_action( 'init', 'rr_stage_post_type' );

// Custom function to call the register_post_type
function rr_stage_post_type() {
        
    // Set various pieces of text, $labels is used inside the $args array
    $labels = array(
        'name'              => __('Stages'),
        'singular_name'     => __('Stage'),
        'add_new'           => __('Add New Stage'),
        'add_new_item'      => __('Add New Stage'),
        'edit_item'         => __('Edit Stage'),
        'new_item'          => __('New Stage'),
        'view_item'         => __('View Stage'),
        'view_items'        => __('View Stages'),
        'search_items'      => __('Search Stages'),
        'not_found'         => __('No Stages Found'),
        'all_items'         => __('All Stages'),
        'archives'          => __('Stage Archives'),
        'attributes'        => __('Stage Attributes'),
        'insert_into_item'  => __('Insert into Stage')
    );

    // Set various pieces of information about the post type
    $args = array(
        'labels'            => $labels,
        'description'       => 'Stages Post Type',
        'public'            => true,
        'menu_position'     => 5,
        'menu_icon'         => 'dashicons-welcome-add-page',
        //'menu_icon'         => plugins_url('rr_rocket_reference_plugin/icons/engine.png'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'has_archive'       => true,
        'rewrite'           => array(
                                'slug' => 'stage',
                                'with_front' => false
        ),
        'taxonomies'        => array('category'),
        'show_in_rest'      => true
    );

    // Call the actual WordPress function
    // Parameter 1 is the name of the post type, Paramter 2 is always $args
    register_post_type( 'stage', $args );
}

?>