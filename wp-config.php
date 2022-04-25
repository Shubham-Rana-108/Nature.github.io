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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'UOGDz2B ;ph%[DSaP0Vt~ebP%l,w$Nx[T~vowIWc8Z{ |**COh^EPUF22J$,dc_4' );
define( 'SECURE_AUTH_KEY',  '-cv9IOz{S=0tUe1K}/ ?*7Ks_P*)^.C?dEkT>%[z9m4`h0VLskk8OQ:6)wWh2a1z' );
define( 'LOGGED_IN_KEY',    'q+a?[p>vQU[rqw_3AAZ;|4N;b`1;<F12$vLf~#CIig>UK2qIhFxE]q712f<-]!B`' );
define( 'NONCE_KEY',        '!IC?$Eme[[5#ir.,[2r``xfIcP>eUqZ@H!S!S-?;/}psLw(,kD1Mqg]32d(l1y,7' );
define( 'AUTH_SALT',        '{$f,_dCAdSz4i:;IAuV)RJG)_iBP@t`kC ?EfL5 u2=!j2>HxwY4B~b%^e$1iZ*8' );
define( 'SECURE_AUTH_SALT', 'qfl1> )vFC#>+93Ppv+cc#OH~_D]M&%RKyG~2yY`2a0;AZkigUmZ#|fDX-.R[Y>2' );
define( 'LOGGED_IN_SALT',   ']z;vUbM!h~]m}!k}ef#=@ @U=zZ/5HYe^iD9l)qe3I[DGt K2!.B6swt`}i3=V+D' );
define( 'NONCE_SALT',       'JG*v64u_Z=>^I~3f]hE7dzq&H,SQ4zf4haIm(H!O=fI6yPMk%g!4VQn6BflC8J90' );

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
