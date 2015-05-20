<?php

add_image_size( 'admin-thumb', 80, 9999 );

/*************************************************
 * LIBRARIES
 *************************************************/
require_once get_template_directory() . '/aviators/libraries/Twig/Autoloader.php';
require_once get_template_directory() . '/aviators/libraries/Twig/ExtensionInterface.php';
require_once get_template_directory() . '/aviators/libraries/Twig/Extension.php';

require_once get_template_directory() . '/aviators/libraries/wpalchemy/MetaBox.php';
require_once get_template_directory() . '/aviators/libraries/wpalchemy/MediaAccess.php';

require_once get_template_directory() . '/aviators/libraries/aq_resizer.php';

/*************************************************
 * PLUGINS
 *************************************************/
require_once get_template_directory() . '/aviators/core/plugins/admin/admin.php';
require_once get_template_directory() . '/aviators/core/plugins/templates/templates.php';
require_once get_template_directory() . '/aviators/core/plugins/views/views.php';
require_once get_template_directory() . '/aviators/core/plugins/flash/flash.php';
require_once get_template_directory() . '/aviators/core/plugins/settings/settings.php';
require_once get_template_directory() . '/aviators/core/plugins/customizations/customizations.php';

require_once get_template_directory() . '/aviators/core/helpers.php';