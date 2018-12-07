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
define('DB_NAME', 'itp302_final');

/** MySQL database username */
define('DB_USER', 'itp302_user');

/** MySQL database password */
define('DB_PASSWORD', 'Pears@WY5');

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
define('AUTH_KEY',         '-) df(y2&)$e?ZT{0]lHi Q,6xl{GSo<<b9V@m/fX?<L2v$l]-vzy~sID<.$gf3&');
define('SECURE_AUTH_KEY',  ',KSA4VuFae(V9wHV]:D{E.r06W9CI75>I2vpQO9n%`CbyLw`ieMy s/r0}k[SE?A');
define('LOGGED_IN_KEY',    ' #]` n~y]0M8uhBP<|aelIO9#QLQ9VXW]uD<dPl1SU}M+@}*<,B5!hnp0#xpeq9:');
define('NONCE_KEY',        'en,+~1z/pKNWhJ6 ?DBMm!5mo[mK#AjEwg9LJhiBp3#4izHbCnc$t.NRJ#$LA?F1');
define('AUTH_SALT',        'RKdjkXM:n]kT(SCJWU.rH$fsLg^7FW!}GKs,K];%%N)<B2Q.rM|+O;h8V?bpps;!');
define('SECURE_AUTH_SALT', 'niAWD;]qJB8;:u>XY_9sl!ZyxrN+{)E,1N:)ddid:iUi]h( s^hx@;<]{(6Mg?s1');
define('LOGGED_IN_SALT',   'Tz?FsoI<SD$fViNV9$_|Ne6hV0U8Z$/qqKqByTaiwsLK/);|?ZZTj8UdtEw@z7mT');
define('NONCE_SALT',       'm&gv&WcT!b0FJe9K]4r5(6/s3o~>W/@n%ciKAE#h]:)|U*;rlQUV4lMh?5$m9]5;');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
