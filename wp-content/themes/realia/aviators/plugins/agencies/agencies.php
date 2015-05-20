<?php

require_once get_template_directory() . '/aviators/plugins/agencies/utils.php';

require_once 'widgets/agencies.php';
require_once 'widgets/assigned_agencies.php';

/**
 * Meta options for custom post type
 */
$agent_metabox = new WPAlchemy_MetaBox( array(
	'id'       => '_agency_meta',
	'title'    => __( 'Agency Options', 'aviators' ),
	'template' => get_template_directory() . '/aviators/plugins/agencies/meta.php',
	'types'    => array( 'agency', ),
	'prefix'   => '_agency_',
	'mode'     => WPALCHEMY_MODE_EXTRACT,
) );