<?php

/**
 * Creates agent custom post type
 */
function aviators_agents_create_post_type() {
    $labels = array(
        'name'               => __( 'Agents', 'aviators' ),
        'singular_name'      => __( 'Agent', 'aviators' ),
        'add_new'            => __( 'Add New', 'aviators' ),
        'add_new_item'       => __( 'Add New Agent', 'aviators' ),
        'edit_item'          => __( 'Edit Agent', 'aviators' ),
        'new_item'           => __( 'New Agent', 'aviators' ),
        'all_items'          => __( 'All Agents', 'aviators' ),
        'view_item'          => __( 'View Agent', 'aviators' ),
        'search_items'       => __( 'Search Agent', 'aviators' ),
        'not_found'          => __( 'No agents found', 'aviators' ),
        'not_found_in_trash' => __( 'No agents found in Trash', 'aviators' ),
        'parent_item_colon'  => '',
        'menu_name'          => __( 'Agents', 'aviators' ),
    );

    register_post_type( 'agent',
        array(
            'labels'        => $labels,
            'rewrite'       => array(
                'slug' => __( 'agents', 'aviators' ),
            ),
            'hierarchical'  => true,
            'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
            'public'        => true,
            'has_archive'   => true,
            'menu_position' => 32,
            'menu_icon'     => get_template_directory_uri() . '/aviators/plugins/agents/assets/img/agents.png',
        )
    );
}

add_action( 'init', 'aviators_agents_create_post_type' );