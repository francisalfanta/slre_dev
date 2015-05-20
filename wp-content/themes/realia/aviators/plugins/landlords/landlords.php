<?php

require_once get_template_directory() . '/aviators/plugins/landlords/utils.php';


/**
 * Meta options for custom post type
 */
$landlord_metabox = new WPAlchemy_MetaBox( array(
	'id'       => '_landlord_meta',
	'title'    => __( 'Landlord', 'aviators' ),
	'template' => get_template_directory() . '/aviators/plugins/landlords/meta.php',
	'types'    => array( 'landlord', ),
	'prefix'   => '_landlord_',
	'mode'     => WPALCHEMY_MODE_EXTRACT,
) );

