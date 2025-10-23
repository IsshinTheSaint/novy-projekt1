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
define( 'DB_NAME', 'wordpresik' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'o+:!;vWhG&3zax8F.F/u2oNSD3B zRNQL>I8MtJshw972J9VG5FuD#h6+jNa|OZ+' );
define( 'SECURE_AUTH_KEY',  '>%vh3M9ZyKeYP.;CNK7{hKSvYB+]p+C6xw*=nzoA5O|{?W3)UT$,`Hc(dc-=|3VG' );
define( 'LOGGED_IN_KEY',    ';!n|Jp-TA~38@7KmGwVJ~sGVA}`T+g.0J#QN%Jo8_H,ak?KGVEa&8OBV C,;m,f~' );
define( 'NONCE_KEY',        '$~#er}Q_NQ_)e@ccPwTh-+AI!~owB5ZOk&KXA{}eU&0$&Z9),$~_mfH^P/|_Iskc' );
define( 'AUTH_SALT',        'T@:1-APTJ9v5tZ>c_^LeoL8gZ@,__TnA~45*hMfvZK_{uzds!T8<U?7<iR+-gNN)' );
define( 'SECURE_AUTH_SALT', 'YX0ItC:ip>`q8jxGm_V_%nY&~Z4%81EY9I v,wxKKP~;b_u` O%B3=1ENiirBs6>' );
define( 'LOGGED_IN_SALT',   'W;FLe=SOv[QFoJOp$dOwX{>:r.lFV;UVcbxqCh 7;Luu(R2gT{%luoMJgBrCB6y/' );
define( 'NONCE_SALT',       ':Y:?U*t&zV<>g;E*2o`.RHa<[$|2T6J7^_Syuy3P*&;g:}3R)iWTusW02;5o<NN]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
