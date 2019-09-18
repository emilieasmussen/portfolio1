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
define( 'DB_NAME', 'emilieasmussen_dk' );

/** MySQL database username */
define( 'DB_USER', 'emilieasmussen_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EZ8uAeDoR52cHbvqQAThSbxd' );

/** MySQL hostname */
define( 'DB_HOST', 'emilieasmussen.dk.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'oSjK[z5W^h}tj+.Vt#C@@hOuXbWf>|0VIu7AAY<GI#:-:YDq}LvTq,QAU?&eZaV-');
define('SECURE_AUTH_KEY',  'v^.:+4pn6H?*u;J$a9}jLfTQE[Jb72]/ UtmVb>0J3@wYD]7E&yNdbe]ar;]+E-W');
define('LOGGED_IN_KEY',    'KAX}hRc2D-_m-S(^*t*w]xZ v:M!UZ*0:A*WtNEdOJuV$l;6[FeYa,Q;S%z-fY:?');
define('NONCE_KEY',        '2H4~s>u[;AK_{F_G/gcb{hxC:~zcamPBtdzCy)A~}27tszD6KLPo^w5#2!SPTV H');
define('AUTH_SALT',        'Sr%Ey)+V>La?v+C.,goO0yGiL6]dWy{x:V]-7M.ql|Z-5q{IlyKn6wy_24Mba!+4');
define('SECURE_AUTH_SALT', 'L@4xW;.8O4N+dZ+:If~pCkpr:9DFSn>BEjZI~0o|G2+2&:8)sF@;fo~@f}bYw5SH');
define('LOGGED_IN_SALT',   '6GGsCJdvQO--<=9Kw;Ungw_)>8&--(m1vYilcWrL-*^lzr_c-S1I+U_}ELk^:]D0');
define('NONCE_SALT',       '&IV)1Lei@V)p~@:Nv9s$NHp^ oJ/PNv{8WwU]{kF+?#Fg$>%(K#C-jt7=3d&S~P7');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portfoliowp_';

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
