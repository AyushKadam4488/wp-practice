<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wp-prac' );

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
define( 'AUTH_KEY',         'x,UpmphX %|=2tX?lX!P&GWI~8L}gszWy?bS}QzjH_(b;-hXW)Rh~fdJ^NuT}gvN' );
define( 'SECURE_AUTH_KEY',  '{Vy$f<ja#dWYeW% J`um3F?XY81f U@U&2i4z<kmp>X-P+ju+?H*3I?xu2^)fPay' );
define( 'LOGGED_IN_KEY',    '5OM>zRh.((HxsSp/R-utb1cQVg=2_hhCW_tszv?H +Tr{UvaGf&hrn=dF}5SG+@~' );
define( 'NONCE_KEY',        'g0[{PR[#o_Y]0<:m>x:y*/):xA#|:U|8i^L<(dbQQXHb%Lcr0pWqJ;dN}:UN|ax1' );
define( 'AUTH_SALT',        '1T&%081smA$$y1x&x F4#D[g#0#2RGYu9O_v_C~Hh@aT85N>LamE*ak(Pj!8k>GR' );
define( 'SECURE_AUTH_SALT', 'MH939g{+?uvH+Yyd36XS0:oR/bvbM}7+CFLkJKNH}{%i~DWQ,Lf,(,?ZECI+!cZ5' );
define( 'LOGGED_IN_SALT',   't]qvBlE iz=G%q8Os8XAm j>guHWf|/#9sB|!iEz(8MQsLHsY:A*`q.kM$]_xS>6' );
define( 'NONCE_SALT',       '/x3tCfWwK@r6P04x@f`HOmoq6DG;)u7bz^v,4*WjAi*`b4o| JFCfM ?e11pFoJ!' );

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
