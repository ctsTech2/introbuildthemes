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
define('DB_NAME', 'introbuiDBeyy6e');

/** MySQL database username */
define('DB_USER', 'introbuiDBeyy6e');

/** MySQL database password */
define('DB_PASSWORD', 'K0IHTyt6Zn');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         ':oE;*+m*+iePpmTP6eL62*P52~p2*+ie~-lSOlSO51{yubyvbYEjfMI{E<,u{');
define('SECURE_AUTH_KEY',  'nI{$7<yoZN8VG1w4[zkwgVzkJ4VF|J4,z0!gR5#x_teSxhH1O9]~D:s]~pOshSdO');
define('LOGGED_IN_KEY',    'aQnUEM3,I3.q<yfQufP6TE*!oZwgR8cN8>C}zk>zg@oUFjUF0J4,vSD;H1_t1~p');
define('NONCE_KEY',        'x5brv,ru>7B<{AUXEIbqubfu<{y${EI2LPiLPim*.[CGZdJZcwzgvz}vz}0F}0JN');
define('AUTH_SALT',        '^7M3BFYfjrYbj$^nuy{7.<AEXf6EXbu$Tmqy{q.<6PJdko!|gow@|:4C@|}4Vc');
define('SECURE_AUTH_SALT', 'ZRo!1-[:GK0GJdg<AEXADTi+ei+];x]9HP#9HLSaHOSat+~at-~5w]1n<EIQjEIQj');
define('LOGGED_IN_SALT',   'Mr^,fy$,7E^,7EMQXEMQjqu:GORZsNRZs-@ksw@08C@08CJd8CJckswRksv@0rv@0');
define('NONCE_SALT',       'uA.*6MEPA2PIfXum4}JGcVskVNkczs[!g@v}|C4>!80NFcVF7UNkcnYQng@v},vn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
