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
define( 'DB_NAME', 'world_shopping_center' );

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
define( 'AUTH_KEY',         '0:Y^Kz5VeIm)zK<n fx2knNd>4[y`4r/q&p(vlx3E[O<AZFC0waGw@[:5em&(T a' );
define( 'SECURE_AUTH_KEY',  '3K3v<F[Q R>Xi8yLn~$@]aJlL}q+e68SkoNEN-zH{fte3zbg+197 $v03 Y|kSJ^' );
define( 'LOGGED_IN_KEY',    '>g0!%6s-KKvyipjrEXXIZ`SCxX!kbWBuxs5/0ju=W{#7!~9oh?h{MFL=Qcn}}ffY' );
define( 'NONCE_KEY',        'G)^F?9.Ne<%b.qI$no(,V7D`RN!)hR_K08$jRRe`1~ii +LEixpRzG[FQKI?{OqM' );
define( 'AUTH_SALT',        'E4k1$a^9(MqyR=@g+0$Bo7,6-E;Jk7G]qvBrd7jV@+]#`wHx~un+&AQs`DpeFpN>' );
define( 'SECURE_AUTH_SALT', ';l^<2ccOWwd&*}7yDE>VmX9H~;7T/k+-uxYm-Qa`x4r0br(9Ng3L4GFP]Kdc <J+' );
define( 'LOGGED_IN_SALT',   'HP;CptA(A c:m`X5]/:gKHPd9UzTl ydR74y.$y_`ct}:@8CbADoDCIpMq>f s]&' );
define( 'NONCE_SALT',       '%S]Q7P4haTFbDnNpa&1I]hRScAw=f6 7Vi+B~a/1n8^T:8>k<b:4gE{Fx-bxa&5!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
// define( 'WP_DEBUG', false );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );



/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
