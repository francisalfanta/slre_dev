<?php

require_once get_template_directory() . '/aviators/plugins/partners/utils.php';

require_once get_template_directory() . '/aviators/plugins/partners/widgets/partners.php';

/**
 * Meta options for custom post type
 */
$partner_metabox = new WPAlchemy_MetaBox( array(
	'id'       => '_partner_meta',
	'title'    => __( 'Partner Options', 'aviators' ),
	'template' => get_template_directory() . '/aviators/plugins/partners/meta.php',
	'types'    => array( 'partner', ),
	'prefix'   => '_partner_',
	'mode'     => WPALCHEMY_MODE_EXTRACT,
) );