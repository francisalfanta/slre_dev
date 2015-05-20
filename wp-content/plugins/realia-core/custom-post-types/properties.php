<?php

/**
 * Custom post type
 */
function aviators_properties_create_post_type() {
    $labels = array(
        'name' => __('Properties', 'aviators'),
        'singular_name' => __('Property', 'aviators'),
        'add_new' => __('Add New', 'aviators'),
        'add_new_item' => __('Add New Property', 'aviators'),
        'edit_item' => __('Edit Property', 'aviators'),
        'new_item' => __('New Property', 'aviators'),
        'all_items' => __('All Properties', 'aviators'),
        'view_item' => __('View Property', 'aviators'),
        'search_items' => __('Search Property', 'aviators'),
        'not_found' => __('No properties found', 'aviators'),
        'not_found_in_trash' => __('No properties found in Trash', 'aviators'),
        'parent_item_colon' => '',
        'menu_name' => __('Properties', 'aviators'),
    );

    register_post_type(
        'property',
        array(
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'comments', 'author'),
            'public' => TRUE,
            'has_archive' => TRUE,
            'rewrite' => array('slug' => __('properties', 'aviators')),
            'menu_position' => 32,
            'categories' => array('property_types'),
            'menu_icon' => get_template_directory_uri() . '/aviators/plugins/properties/assets/img/properties.png',
        )
    );
}

add_action('init', 'aviators_properties_create_post_type');

/**
 * Custom taxonomies
 */
function aviators_properties_create_taxonomies() {

    $property_contracts_labels = array(
        'name' => __('Contract Types', 'aviators'),
        'singular_name' => __('Contract Type', 'aviators'),
        'search_items' => __('Search Contract Types', 'aviators'),
        'all_items' => __('All Contract Types', 'aviators'),
        'parent_item' => __('Parent Contract Type', 'aviators'),
        'parent_item_colon' => __('Parent Contract Type:', 'aviators'),
        'edit_item' => __('Edit Contract Type', 'aviators'),
        'update_item' => __('Update Contract Type', 'aviators'),
        'add_new_item' => __('Add New Contract Type', 'aviators'),
        'new_item_name' => __('New Contract Type', 'aviators'),
        'menu_name' => __('Contract Type', 'aviators'),
    );

    register_taxonomy(
        'property_contracts',
        'property',
        array(
            'labels' => $property_contracts_labels,
            'hierarchical' => TRUE,
            'query_var' => 'property_contract',
            'rewrite' => array('slug' => __('property-contract', 'aviators')),
            'public' => TRUE,
            'show_ui' => TRUE,
        )
    );

    $property_types_labels = array(
        'name' => __('Property Types', 'aviators'),
        'singular_name' => __('Property Type', 'aviators'),
        'search_items' => __('Search Property Types', 'aviators'),
        'all_items' => __('All Property Types', 'aviators'),
        'parent_item' => __('Parent Property Type', 'aviators'),
        'parent_item_colon' => __('Parent Property Type:', 'aviators'),
        'edit_item' => __('Edit Property Type', 'aviators'),
        'update_item' => __('Update Property Type', 'aviators'),
        'add_new_item' => __('Add New Property Type', 'aviators'),
        'new_item_name' => __('New Property Type', 'aviators'),
        'menu_name' => __('Property Type', 'aviators'),
    );

    register_taxonomy(
        'property_types',
        'property',
        array(
            'labels' => $property_types_labels,
            'hierarchical' => TRUE,
            'query_var' => 'property_type',
            'rewrite' => array('slug' => __('property-type', 'aviators')),
            'public' => TRUE,
            'show_ui' => TRUE,
        )
    );

    $property_locations_labels = array(
        'name' => __('Locations', 'aviators'),
        'singular_name' => __('Location', 'aviators'),
        'search_items' => __('Search Location', 'aviators'),
        'all_items' => __('All Locations', 'aviators'),
        'parent_item' => __('Parent Location', 'aviators'),
        'parent_item_colon' => __('Parent Location:', 'aviators'),
        'edit_item' => __('Edit Location', 'aviators'),
        'update_item' => __('Update Location', 'aviators'),
        'add_new_item' => __('Add New Location', 'aviators'),
        'new_item_name' => __('New Location', 'aviators'),
        'menu_name' => __('Location', 'aviators'),
    );
    register_taxonomy(
        'locations',
        'property',
        array(
            'labels' => $property_locations_labels,
            'hierarchical' => TRUE,
            'query_var' => 'location',
            'rewrite' => array('slug' => __('location', 'aviators')),
            'public' => TRUE,
            'show_ui' => TRUE,
            'show_admin_column' => TRUE,
        )
    );

    $amenities_labels = array(
        'name' => __('Amenities', 'aviators'),
        'singular_name' => __('Amenity', 'aviators'),
        'search_items' => __('Search Amenity', 'aviators'),
        'all_items' => __('All Amenities', 'aviators'),
        'parent_item' => __('Parent Amenity', 'aviators'),
        'parent_item_colon' => __('Parent Amenity:', 'aviators'),
        'edit_item' => __('Edit Amenity', 'aviators'),
        'update_item' => __('Update Amenity', 'aviators'),
        'add_new_item' => __('Add New Amenity', 'aviators'),
        'new_item_name' => __('New Amenity', 'aviators'),
        'menu_name' => __('Amenity', 'aviators'),
    );

    register_taxonomy(
        'amenities',
        'property',
        array(
            'labels' => $amenities_labels,
            'hierarchical' => TRUE,
            'query_var' => 'amenity',
            'rewrite' => array('slug' => __('amenity', 'aviators')),
            'public' => TRUE,
            'show_ui' => TRUE,
            'show_admin_column' => TRUE,
        )
    );
}

add_action('init', 'aviators_properties_create_taxonomies', 0);