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
define( 'DB_NAME', 'daeshaundb' );

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
define( 'AUTH_KEY',         '{!9eI:|A}|83`N%*;k{lV:wU GxCy&cg^]hp?Av}7.##Dt.L?he+Mj-lgMB!8a9|' );
define( 'SECURE_AUTH_KEY',  ',JHL5{R1he1OW5UaDrH^9x +*O+^~+cpQuuAZ}V4V?_=OcK#pmL7?&a{*Hp7x>!]' );
define( 'LOGGED_IN_KEY',    'eaG7(4{{X_j?~AZe;p5>(rT(y|gqb1dW[}Hj4x:{Y%awdxy`:SZ@`hji8sY^<[A;' );
define( 'NONCE_KEY',        ')>{YDoZ%.g~Sws87bi*fj*(`)p%lOp3`E|_I&fmv78k2Xr)Hk)PH_A^!AaY]E@9W' );
define( 'AUTH_SALT',        '0/GG%~(GBy8 1kxrssQzuLHAvCC`J)@AGk.XzgXio)|(R4D%_{.AuD5Yeo~-XA`n' );
define( 'SECURE_AUTH_SALT', '%qVGe)Rs&pDgQ@SZhy#qT@;@}brQ(m)acz~1oZ5qg1<z10iZ)vtbe`Q.)f-g~]Ru' );
define( 'LOGGED_IN_SALT',   'sR$x14&`at8#xiAN2z=9d51x__*@:V` Y#A)_qU=z:yqYQ4/^6l#^L[>y@#+O O5' );
define( 'NONCE_SALT',       '&zTM-1SGKh8=!?H?J;B(/UgOiN|,o<|,Nl7+.J]dBMKFDF14eBJse@a@$4MOcxB<' );

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
