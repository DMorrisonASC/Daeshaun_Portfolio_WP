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
define( 'DB_NAME', 'portfolioDB' );

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
define( 'AUTH_KEY',         '}eb>C~p|Ds`V.6jNCx/4zxUwi):&,L%SaTJ^(1uwp7@~5 k~#YG@LG)&Xe158Bgn' );
define( 'SECURE_AUTH_KEY',  'Y.Os+XEV70g9Kv8~b46;tHNs%@RG2`cI#&/erGZ4NByTKJ$<&}|*.*7U,OeXkPex' );
define( 'LOGGED_IN_KEY',    'HD *Z-wX*`;zT=nM=3DAPock!l!.N(@!*UKb em2x,[v.%.)=QhM,W:@(<iY4n<e' );
define( 'NONCE_KEY',        '?a2*H5nLuX/T`]i!C1O~Y^ ` xSgH2LZSrr+Z :pR4zha,JH,. D(JfHI|;C+OxT' );
define( 'AUTH_SALT',        ')Z{R_fyz1OZ?$:j.>gV^8|^XG#s _1.xc!k[d|Ap_4B0gC-`sP}=pFJbTH.x=a&c' );
define( 'SECURE_AUTH_SALT', '@t3X!1$DpvJOERxn(|R:uu:kmM[&etA1.*C^VsIW%X;t3nS~q2QQj&0kKs#Dy(Y-' );
define( 'LOGGED_IN_SALT',   '+ae,P^8%<ZWJRMUd1u^ }zM}KT8~of+tB,$A>UO*>}no{C6d{u:2a4+X:B5]smEu' );
define( 'NONCE_SALT',       '%KLx-7$]v5Bgfu>t^1]69[,^zIl)?&K}/ub/N-]APU7|Qv+|K?F5{YLE)KWi,7RX' );

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
