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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'JA9:Ynyy<B2% Iku#qr!P|W%qT1Rt9zN4Um>zX+$+KYiKRC G;ikU!giRTJ]%P+M' );
define( 'SECURE_AUTH_KEY',  'j{upGMeIPaU?-rGUWb>@PyUcxJchf-6m~$~r_&w)AdVqLm7K@}4Qx(j!,<t6b:Us' );
define( 'LOGGED_IN_KEY',    'x#(Y1n=`LKl_n+57%+8J5g.(ltS*?>2jEpD>~{P`riM&oX_9Z%/}I _-s:`zvV /' );
define( 'NONCE_KEY',        'sq%?uzpZOW3G&XWc4EY@uu+_N8s c$G`t+y ,FqN(.[,9m2Kg-G$S.;m@BXmoMCs' );
define( 'AUTH_SALT',        '%/o.*rmEn5ko3UzMsY<##XyVC5glgOlw76exuW0avnwq~1TLRsbeQJ^h%oQGDIv6' );
define( 'SECURE_AUTH_SALT', '1D3H|)..|w4}Ui[idk*.1Uh6UQs#]mIR>l.t+^3t*}ARWIE;-x;vd[.:|4k|qo,c' );
define( 'LOGGED_IN_SALT',   'mzUvM4s65ul&!WIo$}0M}t;/8/ymm6XZDo0AX///7Ei+PuYN{E|jH{E$tZv9DZZL' );
define( 'NONCE_SALT',       'G,UwjiXN60,9YGQ>ah`[A24jqJvX;9,E<-&oDLyB>Jf-T]uufib)Td1=;|Y^)WF^' );

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
