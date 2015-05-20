<?php

require_once get_template_directory() . '/aviators/plugins/submission/utils.php';
require_once get_template_directory() . '/aviators/plugins/submission/renderers.php';


/**
 * Meta options for custom post type
 */
$transaction_metabox = new WPAlchemy_MetaBox( array(
	'id'       => '_transaction_meta',
	'title'    => __( 'Transaction', 'aviators' ),
	'template' => get_template_directory() . '/aviators/plugins/submission/meta.php',
	'types'    => array( 'transaction' ),
	'prefix'   => '_transaction_',
	'mode'     => WPALCHEMY_MODE_EXTRACT,
) );

