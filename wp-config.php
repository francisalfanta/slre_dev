<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'slre_dev');

/** MySQL database username */
define('DB_USER', 'slre_dev_user');

/** MySQL database password */
define('DB_PASSWORD', 'Fv7TmAH7LEdc2pXm');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q^PUVJwv/OF+_-uL<INYaf8>xpx2N+66A+&+^1a]?>aoM0(`t#dK@/!.w!]`t,VF');
define('SECURE_AUTH_KEY',  ',M+N~^O LS5ReBOfCu&pR!@dCk{|we&0N)mpvP7O[kxZ{-nMH;VRm<qPGw~06*rw');
define('LOGGED_IN_KEY',    '!Ppv.)#ld}ZnpK{@!=~{s?(1wya8Olg0;.#H9z-H#<Is|=Pm`,TjPy1VwQN/z-o+');
define('NONCE_KEY',        '9+B,qcMZV:hUoAr+n/a62facAP-?{Q2oeCakA?-T+tE,-?R0V&c3p*7o|8K]|ngP');
define('AUTH_SALT',        '{;ZmFezj-JWPB$^(p]^0z^&Ry9VkIr{`z-)+yq#UC=t[PxK$| ZPC5#Ew[zQge:n');
define('SECURE_AUTH_SALT', 'x|~w. 4YS>HsD-Y%MINChl{y$%1,,&?r8p{^Op>MOf(YKMI^,=#b6bx$b,a32?A$');
define('LOGGED_IN_SALT',   'Su9&y+BhZV>>Q>.c9<.2W(kh+t6Lzw/[];|&JG|(:HW)o-s+Ohw`5F?;|ZBC8W$+');
define('NONCE_SALT',       '+xX`v1{wAF^Jf>U~=sFQy?~@#/IRI9|eS^t;+4Z#if-T/Nb P-/m1L-`]G!K9`Kr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
