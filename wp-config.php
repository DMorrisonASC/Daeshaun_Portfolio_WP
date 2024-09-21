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
define( 'AUTH_KEY',         '9ldFcl`EvzZeP4C23V#O|4CiyITQH}iba?l)2)N!WthcXQ|yXPCStY9xiw[)B:M/' );
define( 'SECURE_AUTH_KEY',  '5foBVuhPD7B7pQx}ueO5lz4z=*Q%%1=H@#B}>Jog1)wIrpL&EZ&H_=F&$`</*gU!' );
define( 'LOGGED_IN_KEY',    'LjYUq,i)_w.UEITV{pG;^NH1]f9Z.<Qhu|zcU+m_/~a<]sV(KBF^JN.{:^se?&[@' );
define( 'NONCE_KEY',        'uhxi(Bj:p&1xyf/IbtNb6O;72b1,A`K~3`^=O+;BM^Jp n,op: [/FFVeTP|Jx/Z' );
define( 'AUTH_SALT',        'p+K-L3~fpHi{IcHF1FmY^>)mIiF$<F- 17XxO48ACWY!}P|nN>/hSsiFhk0Lx?-G' );
define( 'SECURE_AUTH_SALT', 'H2tD{o-E_cS#S_@,A8=oo_[0+x:I,5{[@Xu/m{_Z{{x,7pjKGp|5(zkSHe8yPgDQ' );
define( 'LOGGED_IN_SALT',   'AFqY=q0.,6[~;8?>_Vj_0uRmGp/q:NZ_?toyDOL=WSJabuF*2OJ$>|{~?uBqh&|H' );
define( 'NONCE_SALT',       '%WeiZ,(Ef}IW@V6@<t*lqeq/i9;U~!3iIYs-5U}plywjsJM|0F>vN1&SN1Ex,1f%' );

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
