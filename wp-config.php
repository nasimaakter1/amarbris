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
define( 'DB_NAME', 'amarbris' );

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
define( 'AUTH_KEY',         '^Ky!LcTRbmrZ]j7reEJ,d53==D/R2^l{cOx)g)V8<;YFX6SYIjIl/OLI>YdBL<B[' );
define( 'SECURE_AUTH_KEY',  'Xss{?!l`S}vmWn*>}q2K6~0@b}!P8r[n+TyN9]idally^;uvC!FB!*a80FgAbN7Y' );
define( 'LOGGED_IN_KEY',    'poj3=E+X*oD>%r5k,0f@tO1}.%m%Dx(()5@KEFC}:4$^h8+Ec7 j31ys9`Pe:+y/' );
define( 'NONCE_KEY',        'E&qv41/}:T~.]10DtK}N{&TG}UCxxCp%XHnpV]!}:ay,.}1b;BxNEB]@G<+&<$?O' );
define( 'AUTH_SALT',        '2(3wkI:m(lGx<gLxR$`arkYE+Erqf0RI03pIb2p5PB S)urY|I9yW:>Qj~;eN;&Y' );
define( 'SECURE_AUTH_SALT', 'o^[Hut,UxX)hp<@|[,aXJZsqm{jNX3f_~>/7s>FHT9{@z=2@QrC%8Mi^nroGZ>(>' );
define( 'LOGGED_IN_SALT',   '&i)drJ5c5N9E)^c4krr!2JLx2Zz^UCKBuPiic=?NpKA,i)_n(|)6tnsiBMx&KT}!' );
define( 'NONCE_SALT',       'a%UHR^oL{%lLo^Q+2JbB?>5@R>6d]Q@o`NaRHH9r@r0@,CGjCpXmXc]*[r;xG`h3' );

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
