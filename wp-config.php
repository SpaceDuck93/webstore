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
define('DB_NAME', 'wp46');

/** MySQL database username */
define('DB_USER', 'wp46');

/** MySQL database password */
define('DB_PASSWORD', '-S30!B92Up');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'vrfdwhfqwrfupzihmtyhsg9evaczgzckl198wn4ziyq09yw7eupp6lvrksbbexic');
define('SECURE_AUTH_KEY',  'psv6qptzn2knteewrxzbpmg42itk8eqfbaim2ngtzawnpxr2p2ux2s1185lj8kaa');
define('LOGGED_IN_KEY',    'qyoedcazb5op1stbkscvz9daeisf1f6igz59sw2ibrncjrnr829wvhdp7ulplwuh');
define('NONCE_KEY',        'uconwrzovqsy2tjzfra5mwbuizwvnbm5klahh79is3jstto4lowcbzmonazh4jgt');
define('AUTH_SALT',        'x8oqtun21kpm7mrd9ueiatcu5mxha1lkws0pujan4gv8mcmkf9nlkopwbadanudw');
define('SECURE_AUTH_SALT', 'izkfs8glpugwnufmtfy3dih5vxauhmccosjdehc4azh5pqyjvmlkyekyut5xjucy');
define('LOGGED_IN_SALT',   'vdwt7ijydksepivzn1g5vnhjfrc7vnme6q8zv8rzk2rdyx4a6yjbkfnqfkcdbx8m');
define('NONCE_SALT',       'erng0bwjkvzzqadquobastuvbdto4h003ffghrqclcdfzj8lq57fqytik3fxpmc4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpg7_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
