<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'refeed-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'J=Za?/DCY1>7vuoXuZ{HD+}1TAhxhUx{6KxLe$Y9@0,xrGHNxx(#$DEd|t&,f0/{' );
define( 'SECURE_AUTH_KEY',  '4{BD9Dkm@XUso1`a {)5-aY}gy=t,(Tr&!e/N3V~l8ICeFn-;No rEWcDrqy&vKj' );
define( 'LOGGED_IN_KEY',    '&) {5L%6Z+afl|hX0$esw?{K7KCK%%LD:VkHY&iSz~ki`4rHZmt A[{6[%%#O]OW' );
define( 'NONCE_KEY',        '!OJS.4pz/^Gx+k$pc#K5WjP[nwLr,J9G5YP~u??sb4[d9v<zWuVZt>sh%)8m|R69' );
define( 'AUTH_SALT',        'Qri<6sv8)hcA#F|pA5614:TfuXZH$8o>SY9Bja!FJc2vOw903!-j+8:8i./W- 8@' );
define( 'SECURE_AUTH_SALT', '!]R@)3!!np-_kNw7UI ]nVxg[}RI=;;V>;YBj$|iSi{54JfjnlO^[l|Rn1ob83&y' );
define( 'LOGGED_IN_SALT',   '86hrDMj7mGlBXJRyLjPmOg*kO?.C%bcVwCJ62-J<r>yh]:R7A[)&;Dm(Qz&#{ggH' );
define( 'NONCE_SALT',       'scXw>3Nhhya~Z.tF|(}Sv:^//%-`?&]{-eK[Xitf}/!Y5(Jc&BU94C0VAbBVB+8h' );

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
