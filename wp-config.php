<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dm' );

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
define( 'AUTH_KEY',         '}hikCz&0zMB{Z1ywP,:hR&ypJ1XffkN27!^T$2ZK`-^kyURy_-DoyqK^=`/e!L*X' );
define( 'SECURE_AUTH_KEY',  '..cVbfi^or70oc3>wJjUH)_@9C!)/PS+Ny @jjXRSy9m8A[6Qf@D3.&w;`{?QOdn' );
define( 'LOGGED_IN_KEY',    '6&*#s%>kC*e@8R1KwpHfl[<*`<xNM@W+C,JLC+0npfqWN_:Lj+(t^]2v>MN&==`2' );
define( 'NONCE_KEY',        '+yo_VFq *|f_P^!f|_<K9naQt;nc9)M- ^OI3N+0@#7.szDb[YTBFfvZ;Dydt_9[' );
define( 'AUTH_SALT',        'iXS$qZUo-H^%J+5|[`GF|yJ33/jo,-ygF{h.kB&;Z.L2tq++^Uzh{|c-g<%u^}O_' );
define( 'SECURE_AUTH_SALT', 'mXLI|&w/Rn>PhS$NvVdGEwx`(F |.mBG7#%ZCBtL9tJ_$d%L!ln@U^3k:{4ScB~`' );
define( 'LOGGED_IN_SALT',   'n|c9Dc0qY}>XOfaCkCy]~ 7L1,sduWnTr/0vS7y[b{DVv$w`yuMWDkj#,*x5I3lo' );
define( 'NONCE_SALT',       'L-OcO:l08J+SX!lybi,{0BO7ep-*Q9Jv,a+h.a:iG`E,qZT<,~l@ejze:5F9KXir' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
