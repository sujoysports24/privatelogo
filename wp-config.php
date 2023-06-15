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
define( 'DB_NAME', 'privatelogo' );

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
define( 'AUTH_KEY',         '@`84#8nu*4b*,]@$@X3}(i)SO &X+fn<Nkj/f{YFq27@-6E|70Y}hAqR@?8#4la^' );
define( 'SECURE_AUTH_KEY',  'O&pbfUxE:s;2DweUgYr$|f!|dFbg%2t0m!1W${8D4vJuc|&,1(`s`.vX:3Albb12' );
define( 'LOGGED_IN_KEY',    'LKE-}IOXSjHmr)JIDoMiE%zvIkXr;@&%@rTz2c1Ius`J^ r$/1o3kJR(-55qIR`w' );
define( 'NONCE_KEY',        'b#!2(8DqBzmu7UbjPbaktXO}<&9Zx0qsG):hJ$|=jYKK/)rBp/v7I:P>pGRf!ct&' );
define( 'AUTH_SALT',        'InjTi(lnj+bD>rf%t.Njk9cK8G{.%LDo`HNenUIhbINcCL/<+k,zyW^$<%{- f2R' );
define( 'SECURE_AUTH_SALT', '2&~Q(46 6rtl}i?2t?Tqs67^eN]9~N3Y;%3sem^6OJo9LE@&r9:X|XE$Q2Ccei[L' );
define( 'LOGGED_IN_SALT',   'p,kX:wsjbu5|hW>}YLENE85z.MuEim*,?mQ%V{QLK;/!OX-kz4BK>qV9de*?e`m@' );
define( 'NONCE_SALT',       'N7sCUsL7eN1i84MH5oMu0$)pZ7M,xd;aVYc -ls8Gxs+X>,-B|mLiW-%}6KzGe!N' );

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
