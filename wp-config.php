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
define( 'AUTH_KEY',         'v9tpm$aZfw|m]N6]?XWkXz-/~-+eD$tA4|)^(%_QB#R%,XiyN:(/(Mn+D6@tN8B ' );
define( 'SECURE_AUTH_KEY',  '3W 2|nBEUs~aYqets5t9|6?0]%F8|rSIu3P$PeGAM^Wvc^]6kAX_V.<S_Yka$D`,' );
define( 'LOGGED_IN_KEY',    'VST1u/_,z)fn=VOv_OL{[T`?zKzabWUj?teBfldGov.]RLk#e~|;?07>$72W2rqd' );
define( 'NONCE_KEY',        ':xs~c<I*X#aH~|5%<+Us>[+XS6g$~y<}UC7qQV94X;}!Dw0maWi=Z`[9:!>j!V5$' );
define( 'AUTH_SALT',        'tDgce]g:Jl@23Ky86tg0arVU)7*`yPH=SFw]|n?J)8_[jb3?LerTD%0#@vE{(Rxk' );
define( 'SECURE_AUTH_SALT', 'KjD9]A-13kc@:>zFr&d0fE(*JX?_hU^cr/#vyC:m1Pf2ktBZO]AbxYHNSH7Z8qc4' );
define( 'LOGGED_IN_SALT',   '^eGQhr$?[r^JVA<DI6#<kXDw`5K;7q0^%dS4FmZO4%W$u9xWZ?<T_,t@iV)Y/$B%' );
define( 'NONCE_SALT',       '`.clMc[f-hNa.0KTsJ@v9U4 UR[GH*bnfVX+jkO|,C#+P-ma1<GK`$q5^8vGM_|:' );

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
