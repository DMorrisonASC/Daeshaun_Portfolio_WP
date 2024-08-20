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
define( 'AUTH_KEY',         'OgIiF_^ez,X~5g7Nc1&!OOOR$A}oT`D==6P^*`ROd:bH*}t!pDu]7{/C_,zx>>yb' );
define( 'SECURE_AUTH_KEY',  'aH+4tQB{<bS:JXfX+u!3+=lu KV!4@E0t &c#*m@rfX]~o:6<p{4)$0W3CPd#[Gf' );
define( 'LOGGED_IN_KEY',    '$&Msm+9|68x*Yf:0`lU@$MLDw>jZA^Ti0;+^DU&[OnVj8eIvlR}6yryDRGu!t7C(' );
define( 'NONCE_KEY',        '/({.%,{)]ZU6&`1%5}^$#D5$eom[{0<5,*}/PJb%WHI!N+[HreKtB*Z5TWdrXJvX' );
define( 'AUTH_SALT',        'stJ$HO6jGEJ} xr-WMnhK:+Xn>d3}4PF=>!u:vR]*Px8im8S<Rj&CuFucj<8DCKB' );
define( 'SECURE_AUTH_SALT', 'fvu?JZg*eQH(~#GeTQz?=>j&*=aFSFq6HqBtYuiM?2S|bp,!]H#Jy@Dn~R+E,nfM' );
define( 'LOGGED_IN_SALT',   '>iZuZuFG4tBK^6V:>csc%HQmR9zjpo1E|JI:T_rcuA&YbCGL?F{9v[v8D>iiF,=L' );
define( 'NONCE_SALT',       'AJ^X2!Lzr[u+b.i@pUE&s?P];Z$|pY*R*b}0uMBu#/FAPcQ9^SWo)U}j&@?J4+6P' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */
define('WP_MEMORY_LIMIT', '256M');




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
