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
define( 'DB_NAME', 'wp-meu' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'passworD@123' );

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
define( 'AUTH_KEY',         'Pdj,s@+>afKx}7VL;p&a,4!mv7=GkCHk5I:Wfr@!knK%7hS*>@eHF`Pmn#p#W*nF' );
define( 'SECURE_AUTH_KEY',  'h<L#m`X0rlRVRCDBIcD3O}UWldMq]W`5l^&wC.+P$rqWE_w5`RNP!ZZ$YLMM#Q)Z' );
define( 'LOGGED_IN_KEY',    '.M=E|RZn/[/WcZRSQF]BT]=&Dw]-Jk$jS,u;o<dGu2SesZ<Sr6>|g1j 4<EqutT;' );
define( 'NONCE_KEY',        '.~<N{M_Tbu9:b>H;T8cUE4n]YQ[{Pz_qFhy2mVs.t(b&83[{&Gx*wQ9{Z8RE<3~=' );
define( 'AUTH_SALT',        '5g2&0og2d.[:ft>@9r!F<w/@bNv%G,d24$bjI(AZ]d~/3m6KZDY;V1$S]DsMP75Z' );
define( 'SECURE_AUTH_SALT', 'AVFyUQe-0dp=/dkL(<az8}m.9W_L8tZLXDZ>7>);2)}rQFZf$K/:F|KIEA~>({(w' );
define( 'LOGGED_IN_SALT',   'x/LC?}u^):zzu=NRD+H!9jn<v#&>QNk!J~I91h_VU[?Ej=L*{m78X8p U1_u>:iT' );
define( 'NONCE_SALT',       'tL_x(JX1Mq}E3w3b9xxrB?&ux6`!63T-=!i#fBne4OYQOe2mEoXDZQk!(LQ#dSan' );

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
define('FS_METHOD','direct');
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
