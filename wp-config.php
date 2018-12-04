<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'phuk41530366684');

/** MySQL database username */
define('DB_USER', 'phuk41530366684');

/** MySQL database password */
define('DB_PASSWORD', 'kR,gay6DB!SU');

/** MySQL hostname */
define('DB_HOST', 'phuk41530366684.db.41530366.7ad.hostedresource.net:3310');

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
define('AUTH_KEY',         'h2@1Dk3O_2rNI*)0Epf_');
define('SECURE_AUTH_KEY',  '(XIczY!E8bN!r5QwqPHW');
define('LOGGED_IN_KEY',    '24@x4qB6ArqU%+%ab3c(');
define('NONCE_KEY',        'AE@4pjgC9dMdwzw6hm5C');
define('AUTH_SALT',        '@-Z@HIT8xd2haZ$9XQ/V');
define('SECURE_AUTH_SALT', 'XE 1 xWy81Yr#I$PYIa&');
define('LOGGED_IN_SALT',   'tEsVaF9_ks@rCf*J5g9)');
define('NONCE_SALT',       '5Pa7J(y1V6F8x)V7Kwch');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_2a7dnabawf_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
//define( 'WP_CACHE', true );
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0705 & ~ umask()));
define('FS_CHMOD_FILE', (0604 & ~ umask()));


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');