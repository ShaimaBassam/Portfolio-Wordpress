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
define( 'DB_NAME', 'Portfolio' );

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
define( 'AUTH_KEY',         'f7<1DdoN<c:tFL~Xp|~UeoiCSUs}x.-s*`=U,KOE&Y>UQuuMZ@zuW6vK[EDM42? ' );
define( 'SECURE_AUTH_KEY',  'I;1AF{bA(;j$0(2f]?@h88wX1$48dM^q-Pf?84DryE?>n4CUtSfA^WnEo[Y8G$7Q' );
define( 'LOGGED_IN_KEY',    'Qm[[a_gYb]^pboRU1@{KtA12#?~`Gqqq?#wepfav)h}HJ&+NFz,UN1DdkSnJX(_r' );
define( 'NONCE_KEY',        'RYYjd`$Q|:(.]URA? =U}W?JO8;QY1NsTVBX.CvR1EC#d|:t6w-d=L(h[6I=Q+I`' );
define( 'AUTH_SALT',        'C+[Trs>0=n^6mZ#Z66vb>_5Vj;e^OqcY_ke]7(#g^W<oc=8bcG_#7vEUi]k^zP(b' );
define( 'SECURE_AUTH_SALT', ':/^Q6=W[Z:cl4#w1;]Il$M>(9^B$~Y}}w:e!O~5--?vxgg-s`b}R7S?joJF9rFE_' );
define( 'LOGGED_IN_SALT',   ',M;b<k0<NcrD5<spZy-]mbLuT9B)ldjlzF%On.9?U.H/M#C=KTg3{MM^&K>6iw* ' );
define( 'NONCE_SALT',       '7{iQjpQ!)?UWa+J7,d;FF/VTvryeChOK*b/[e+oy79K?sg=ul=4kxdd$SRS2)SJy' );

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
