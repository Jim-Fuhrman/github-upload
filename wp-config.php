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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
	define( 'DB_NAME', 'wordpress' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'dbwfu3rjkq9zhh' );
	define( 'DB_USER', 'u9brdqmba6nxv' );
	define( 'DB_PASSWORD', 'Pleasedonothackme' );
	define( 'DB_HOST', '127.0.0.1' );
}


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
define( 'AUTH_KEY',         '*)usOW^Ck(1i:*S`I4cA>+1:9_up`^CQq~/QX_<sD,@OL:,Abqk^>fO6Ve#vQ.&y' );
define( 'SECURE_AUTH_KEY',  'h=2jk8wY%]jTaXyz)iw(N+tt}=wdemeL]yw<d6k%O2`ml0l+L3b.yrK8i:t,_:RK' );
define( 'LOGGED_IN_KEY',    'cnYR%IX/mS@8eIG3^u^*4vS]$w8]U]M:FRVU9RPR@D#0]slW%.!ff2isK$OD??ic' );
define( 'NONCE_KEY',        'goMru]mE8i&w[?(A bye[FB}KFS<6/|c1a7ElVGBe|9ZKBv,MJBrfh!Cw aff||L' );
define( 'AUTH_SALT',        'P.M62F8M*i>?{VMB`{[4q[vB8Bp!#]+8znE9OaIjO<HWDnnB9@7yR[ TErdK& ab' );
define( 'SECURE_AUTH_SALT', '4L2(?^Xq~9+R`8l}N<?(1{oA[#gkUF;t!^AzYFGgOLmg$!&O%YpI&%sV5Pyluu7e' );
define( 'LOGGED_IN_SALT',   '86x#t6]R!VnQ(R2rh-BN5OhtK,G`;83S2Htr_PO?3jmalR.=jm7P.IYttym({.t[' );
define( 'NONCE_SALT',       'M=} k%PrYDG[3P`OgbcN*fN^ECwPBr8S`.v<GNttlu-#!Hh+oaN?/PYhv)Es2dP2' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
