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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'n&dv]/aoN@%!+T.NbBDWEU:}0*=aOP*c S?om|l7]jYQ+q_o#m[=J%#tDub|(oWc' );
define( 'SECURE_AUTH_KEY',   'XxHb6IOEWp|qajfxpr[L&3*vt_mMB2ZM)#aDJQC2D69ND#5hv%nz07vC/ti-3:,B' );
define( 'LOGGED_IN_KEY',     'p{a`,[UQNqTe;q#s%gU!I7d:FZ+@piJ1PIGeT-h5~6&F2U -=&G{xP|3| S3OY73' );
define( 'NONCE_KEY',         'v=;w4VpyGAWc*alJ8wH+3BL7c*N=6!93?V[gAoU]w,teX>PS0=4J;Xh&eVqwF(DP' );
define( 'AUTH_SALT',         'tVnF[.K> eN?!|uMx-<QlQDAiRc+RO-Bfk:{b?!0(F4,YF_>St?`R4sG[;zf=bJV' );
define( 'SECURE_AUTH_SALT',  'z-[n09E FAml||hWf9{E<|clz{4190w2jj!ZPzNMi#*|M|F^64Yq}4t-5.}RpcVK' );
define( 'LOGGED_IN_SALT',    '4da..*tfOk-67(A8*s_tfLhBVp^k1{%nI1|^5_4*6M2H<~jo<z{fPKB<+gKHn?&0' );
define( 'NONCE_SALT',        '[Q]1zV>PsvBk5{RV5Cn{D.(rnL,+_*zaC(1@.+f=9X)($qE/T(a/E6#gx=ONL#}r' );
define( 'WP_CACHE_KEY_SALT', '4:O%:$TKkbh@Ak=mX+8i*l}f6JHNvY0ELz!4{nW;Z5&uGHKopY&WFWM`qw  *hk5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
