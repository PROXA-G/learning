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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'learning');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'jv1Ppm@*p! 6yvz`j6VRKI)/|!qL-.4n{Rl^=-eP~~vi8r7e5G)y/%^t3{lN%{yI');
define('SECURE_AUTH_KEY', 'NMcb]jCCP-To?-oW#x+*,F4 *%j/e`o!/?,*+JW=+8i}T6`sV<XSOBr$5ulX}3,X');
define('LOGGED_IN_KEY', '~jkNCd[%2CL+!;K:333Q;v&iED!T|Ra)(*32DC,AEfyll]Hlzs%IY-e*cq#_GMcC');
define('NONCE_KEY', 'U.L[%CD}Q{L!4wzs@wv7SR!kn~=:7qgdvCuVhLt7|PQ-M`/AlVKr{psm@CWIM`L<');
define('AUTH_SALT', 'Y2)./mU6csp$L384kn0dz2O/3d7G.LKgg[:F#`TY95enGdMpn-;BGWSg*QywJ|h_');
define('SECURE_AUTH_SALT', 'G_[SXQ<tT;mC:FVp`b2BSLc;x1CwjMJQPZ<)G9W(58<NQdFl^QS2D ;Q%;MiA#:O');
define('LOGGED_IN_SALT', '2[_+8*P9ziiJ_Ncm3^ _M/|k#M7ii0M+7ub~[MSWuBa$.G]crf*yQ&xcRE$ooeCV');
define('NONCE_SALT', 'YEY{8m.Zy~>iU$Ds>ZV_hfVNZq[52q k: Es,NP($n?QZQ{Mp=6$8Mq?V lz40Kq');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
