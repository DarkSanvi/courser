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
define( 'DB_NAME', 'Courser_properlymy' );

/** Database username */
define( 'DB_USER', 'Courser_properlymy' );

/** Database password */
define( 'DB_PASSWORD', '5db2bc598631785a939871c65e5af1096ebba9b6' );

/** Database hostname */
define( 'DB_HOST', '170.h.filess.io' );

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
define( 'AUTH_KEY',         ')C(+T{N*C?nx7V&8Ge,ANj}^,Kc/TAo&G(t}T[#2D5Aii}o6~*fpkqJ6?fVK?do?' );
define( 'SECURE_AUTH_KEY',  '% #B01IqfdI_qsNDi9|:DG;k$ TXH](.:2*v_#qeXamz~6sA+a~94!9nCw2jXVd~' );
define( 'LOGGED_IN_KEY',    ',sW2i=e]|-/.]P7@T&_17ryV=N[OvGO#W4BsWb@hD|%NXpaoe_FwFWX-Mv[jkyS(' );
define( 'NONCE_KEY',        '>i$83 jbJEY3{]UR%`f`M>m6{5ptN.*AdF{, Vs~Ak&C fQA!gCauBY8`54n-1=C' );
define( 'AUTH_SALT',        'y46,@M|y^f:Ez^9Dmb3qu],D.CIjN`6[mCnj|9;:JY_*7TVj*=Pl9j2=b+sRh Pn' );
define( 'SECURE_AUTH_SALT', 'r-F]!M&QQj$05:)ugpj~3HfYW}S6A|@Gyu$F;N>S>@p@ubsumr>OeUeJAP4nJCpi' );
define( 'LOGGED_IN_SALT',   'f(!b2K5!7?{=P_$tOF?-3Oy$O7hEgv.]1Ms!j+zsY{Tof(rlt~@DdA-CW!G~vt&z' );
define( 'NONCE_SALT',       '{<^*]~Y5jfHU{2jmXjY1ikT&bT$=Tw8`dMc`vCX`4j;-Zs>[V_v#?IZwSUKThf4n' );

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
