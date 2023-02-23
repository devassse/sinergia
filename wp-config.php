<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sinergia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yyeU%dO)d<]sesNOaUEhd%#5v83OpSB{Nk8p|ABat^mkm(uOxqyFmxJzv![<EmMF' );
define( 'SECURE_AUTH_KEY',  ' vp_6-8*OO=fq+A5SgEWKr#9Ay37TP/$gE+t=,<}l/PI;+oWj~d<g<XkeLndZ1!~' );
define( 'LOGGED_IN_KEY',    ']=ka4r$rABY7)tTcU],VY+2yQD$1]X/t1f`,55BuvMLInC99^I^#j0sm/R1YxB~v' );
define( 'NONCE_KEY',        '[%LtlK@R};3Aze-#z{6E)Lr(oXHfY:}!K5{d,&e}{fIqz~0nzIt[BGY~ox6jfC@5' );
define( 'AUTH_SALT',        'L:ANEK[vJ@P5F}VJ2jaf<kI lm}%pi|EGj(7fmV6Ogkw 45:I`Hwa]jtK0CiV=b%' );
define( 'SECURE_AUTH_SALT', '-*qh,K0: XB)4*F>P~J@2;2yf>n$3TY7?6)CuWu#1ucOfl~!LI=93-Ur[r1m@j3B' );
define( 'LOGGED_IN_SALT',   'DiBB<dT7hu>l15)HWO,deBrmRPk1j,<7+.[^B>[T!E<|MwFf/A[nQhy?3YSHDTjY' );
define( 'NONCE_SALT',       'c%v.9z K)Q3uQ)(8!uwhu@1=~Y^9_Yq6-jR|<JD:$bh%1$Pf;ekmcEff}Y@W(`e$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct'); 

// @ini_set( 'upload_max_filesize' , '40000M' );
// @ini_set( 'post_max_size', '40000M');
// @ini_set( 'memory_limit', '2000M' );
// @ini_set( 'max_execution_time', '300' );
// @ini_set( 'max_input_time', '300' );