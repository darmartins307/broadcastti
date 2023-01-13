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
define( 'DB_NAME', 'broad' );

/** Database username */
define( 'DB_USER', 'dev' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '4Hcu6{hFi6[B>>q=?3k_;wNSl5?T#%1f9=d0DB_JQ9g~;&8y_,i7/^sNzUKM|xK>' );
define( 'SECURE_AUTH_KEY',  '9;+BX6rG9pxRc#bCG=_L4j@/Vn66-cc<CkMc_sO^m6j@lVeP@-(,FZ!sa^1/2.iL' );
define( 'LOGGED_IN_KEY',    '+RxVL#/1}o,U^X(`f^*[$:3g}(V#wVP1kR|f:-70?fz[OUW9Iq&jJgsaT*~G=sRt' );
define( 'NONCE_KEY',        'b9%v5-R&@zu!`8PE`].Lw9m~I3Y[c6i-&~nVj8``O~E?J=b{=Np0Ufm/cu(n<_!}' );
define( 'AUTH_SALT',        'HaKN oVAh+D:|ll.hQ#hHakVcG~rOisu:KNNt;NZ*)/;<YZ!BU=cqJT:,][0v(VC' );
define( 'SECURE_AUTH_SALT', 'b7p#?5pnb#68zb;r36/+opUw2`cG4=)F_k6J4tev8Ud]D(`rzpH>O`hgXixE<_.~' );
define( 'LOGGED_IN_SALT',   'R@PRkaoTv;Cx#DI-Z5ZV91`Nv`9wHhb$@^A%%%,Ta63h|kj_-<94[nj[<hO<idT)' );
define( 'NONCE_SALT',       '9rm^PdrC3SKfsS#BEoJZ}_Ar6bW8-fT(N<}.@rf@Ojq=%6D*z&5vNn`q0F3MP/4T' );

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
