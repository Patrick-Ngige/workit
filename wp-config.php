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
define( 'DB_NAME', 'workit' );

/** Database username */
define( 'DB_USER', 'workit' );

/** Database password */
define( 'DB_PASSWORD', 'workit' );

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
define( 'AUTH_KEY',         'F-uN>O2}^BM79{9t=X-L.;D!H,C`ehK:rh9%O[~4S;9*|-49K<{# TN<P}kUGqGJ' );
define( 'SECURE_AUTH_KEY',  '5}pGW!3s6{=RGHm3>hOSWCcEZ-9taPFXlI2H6(@0aLNS`(l7$mjT7c?@xh.$=Etx' );
define( 'LOGGED_IN_KEY',    '2c`#!1v%x+~Qm43WD]h7OukjRaH[rrx!#jG>(=m]&u(x`^$l%?Ai8oZYabZENn!i' );
define( 'NONCE_KEY',        '_Fa^->O+eAzsGP_MKij`6 --wA8Q-H-7os LJYkT}hHUC:N_GTYog3>B$&JO*CUq' );
define( 'AUTH_SALT',        'mT(sTCZr(Xw)$f^mVb+]V&[|{^~XN6[uiWX$lY-f@DOrXt(F<OXYI*Qg#%HazDi-' );
define( 'SECURE_AUTH_SALT', '@lGNQ!baDw6W(]fMnGC08kdQ!d3uv=!p2pdDo5>064$~n[o&H*-mPd(dkvrQjad~' );
define( 'LOGGED_IN_SALT',   's)Pq9_Wz(7!vFv/U7BRK}K**3w.]C*|I2W,rwz{5EkGM?g/}0fdh;l^ar_,Yc*w!' );
define( 'NONCE_SALT',       '$V_M],W<I_0rrh+t^PvJqi8$3_vE^B/$K7vx^)}4|%:(X4g!Ga1a,@q7zLjfGwid' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
