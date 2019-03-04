<?php

// Custom Functions must hook into the init action hook
add_action( 'init', 'rr_propellants_post_type' );

// Custom function to call the register_post_type
function rr_propellants_post_type() {
        
    // Set various pieces of text, $labels is used inside the $args array
    $labels = array(
        'name'              => __('Propellants'),
        'singular_name'     => __('Propellant'),
        'add_new'           => __('Add New Propellant'),
        'add_new_item'      => __('Add New Propellant'),
        'edit_item'         => __('Edit Propellant'),
        'new_item'          => __('New Propellant'),
        'view_item'         => __('View Propellant'),
        'view_items'        => __('View Propellants'),
        'search_items'      => __('Search Propellants'),
        'not_found'         => __('No Propellants Found'),
        'all_items'         => __('All Propellants'),
        'archives'          => __('Propellant Archives'),
        'attributes'        => __('Propellant Attributes'),
        'insert_into_item'  => __('Insert into Propellant')
    );

    // Set various pieces of information about the post type
    $args = array(
        'labels'            => $labels,
        'description'       => 'Propellants',
        'public'            => true,
        'menu_position'     => 5,
        'menu_icon'         => 'dashicons-welcome-add-page',
        //'menu_icon'         => plugins_url('rr_rocket_reference_plugin/icons/engine.png'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'has_archive'       => true,
        'rewrite'           => array(
                                'slug' => 'reference',
                                'with_front' => false
        ),
        'taxonomies'        => array('category'),
        'show_in_rest'      => true
    );

    // Call the actual WordPress function
    // Parameter 1 is the name of the post type, Paramter 2 is always $args
    register_post_type( 'propellant', $args );
}

?>