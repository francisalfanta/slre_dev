<?php

require_once get_template_directory() . '/aviators/plugins/agents/utils.php';
require_once get_template_directory() . '/aviators/plugins/agents/widgets.php';


$agent_metabox = new WPAlchemy_MetaBox( array(
	'id'       => '_agent_meta',
	'title'    => __( 'Agent Options', 'aviators' ),
	'template' => get_template_directory() . '/aviators/plugins/agents/meta.php',
	'types'    => array( 'agent', ),
	'prefix'   => '_agent_',
	'mode'     => WPALCHEMY_MODE_EXTRACT,
) );

/**
 * Change posts per page
 */
function aviators_modify_posts_per_agents_page() {
	add_filter( 'option_posts_per_page', 'aviators_option_posts_per_agents_page' );
}

add_action( 'init', 'aviators_modify_posts_per_agents_page', 0 );

function aviators_option_posts_per_agents_page( $value ) {
	if ( is_post_type_archive( 'agent' ) ) {
		return aviators_settings_get_value( 'agents', 'agents', 'per_page' );
	}

	return $value;
}