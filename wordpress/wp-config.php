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
define( 'DB_NAME', 'wp-bd' );

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
define( 'AUTH_KEY',         'U)M2eF+WsWP=-}#UBvlg$FEaVL(quYHex!NBHkd$rWT{v;|QZ7AhR-ZZ)rQCS.l2' );
define( 'SECURE_AUTH_KEY',  'HM]#@9q8n+|q8AZk5&mOkPqv*4_<bL3On)zf/_^zl6_.NeENV[lJ}^NU_UB|nCt6' );
define( 'LOGGED_IN_KEY',    '-rQ>xII4&j*h1@d(#@xGg^}PZm3gT/H}|u]*KV{pO0vi M!+/ANvNT0jEq;l&BzX' );
define( 'NONCE_KEY',        'IT0n-$4+RSL+3NoO<?tPnQ}]tmo=irXkr/P]pM-xU/oD8`:XaA< s0opGd5IQ^u#' );
define( 'AUTH_SALT',        'Y<M:&NTS/B=qXWFTyeWv:fr}/)Xo6)a Lg@bd>|z52,nxxUPf_DNx(#q}sJ$m<z8' );
define( 'SECURE_AUTH_SALT', 'OGf8o!Q+b$qP=mE|^@cx%PzrCAh!:Dj`6`G6MY#@Wk>y^3AS<#zZC<`kV,8b#j9o' );
define( 'LOGGED_IN_SALT',   'kPP&N*AH$>NxO#E4K4_^$+g#h6wg.EfXXrX.TbP>pp-6.GA-eHE#@7E=*1eRhXK[' );
define( 'NONCE_SALT',       'h{/)nvWdNw//qt+y()=-X>,_cDs^MkO|cGR_G!MeMS]S2F^5>`{$nCned>D0<9h?' );

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
