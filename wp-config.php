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
define( 'DB_NAME', 'WPBBDD' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'pirineus' );

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
define( 'AUTH_KEY',         '$>rwRQSy)_/]g$yV$ Y~jMCq:_k]T(4ulscwbeEDmDP=GepnH}+t/[wEiwY.ML.e' );
define( 'SECURE_AUTH_KEY',  'M+Pil4D!v}8=~S4G%I[C4DyWoR0X=g;YhA!mV]r=)ngJCaXu!D$u{Ist9nljGW:(' );
define( 'LOGGED_IN_KEY',    '0G{,s2dw{HN6{$0z?]Mn9&_3YRd}7j%Et9w<bPqw@PZh)mNc#tk>?glWTX4OQUlf' );
define( 'NONCE_KEY',        'X?IB>EZ?]uxe=5)a^h*h(`pY8^]nrwlz&>(>s7;R w]S8oxz(Sydd8@Kx5OYMd:V' );
define( 'AUTH_SALT',        'dBkXjYN7ZW&^MSd,hai9tE5P6xpM%A%1Gf,S~Xn9l/4:H G.Cm;,9A+v?EZ<dMZO' );
define( 'SECURE_AUTH_SALT', 'cmm86Gz+.xl{DXZ2jk~,cRF>6INTO})$BV[mi!x+FbwUNV0nD?7R5+13L/!&3bVa' );
define( 'LOGGED_IN_SALT',   'B!Vt&x$:wN!.U!0#qUK2R{8bC17ziRT8Y0SUw @V*-638#nnCsbvLsW3o&-B}M+Z' );
define( 'NONCE_SALT',       'c &OD|NA/.t/F!74,k-W(ug.p!FF7Tz}YGZ|CyRly_ep,siEn</Fo5+&+S;9oSbX' );

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
