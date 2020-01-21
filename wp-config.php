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
define( 'DB_NAME', 'db_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gt71awsQmU:tC};Jm|[|*iBk;=W~IgRr4o2BwM2f4B=e8(#0%!<T,7)ZZQ{OU7!P' );
define( 'SECURE_AUTH_KEY',  '-[/|T<#+V/2l(Dt8&5fz%^>JRj.t5Tk~Sn?9on?t_F (}cE1`?9mUqKe&*-xU-5d' );
define( 'LOGGED_IN_KEY',    '&ILqJT~Ts&^Q&yR{V/Ojf*>$a 7T&/wI]0>gwv ECa==YqR1uo{L[eA=ccr3^o }' );
define( 'NONCE_KEY',        'O?wm9E~x]m*5c9<gm=nJVkbM95sJoue]1<jsY&>Y?Qn!-ZNO4[]W97@.Duz}D2ub' );
define( 'AUTH_SALT',        ')5?Bq`=dOE}6*&J Z=zB{T+nd|_bH^~=j>H4 8b/sshIr8F_g5;0,%B;68t ]e=C' );
define( 'SECURE_AUTH_SALT', '=w)3qZ  ^+2Te[4/Nt 4{@],eC)3x97Y*<8POo2:=&z5Qr]N77M^Vh9S-4j>#B&c' );
define( 'LOGGED_IN_SALT',   'ez AI0!3]`Y1Dsyg[R;M^Zj Ru(yp>k<*t9Ooz21=kkw_L(TOA1U1%F7g*8.h6wf' );
define( 'NONCE_SALT',       '.$,/cI)P>YmMK%@5m!IztJuzH-b*p>b0eep.M8)xWBB[|P9Uub3;|Kj.}FbhMyq{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
