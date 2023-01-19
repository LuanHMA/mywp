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
define( 'DB_NAME', 'mywp_database' );

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
define( 'AUTH_KEY',         ']8^/r%7Hif.Q? EZ@q*MdUPc.%y>wHJI0:fPH?.zsviYtw!hUt`N!lQ%]05d*x@E' );
define( 'SECURE_AUTH_KEY',  '-Q7uJl-zqIadN_I4:DN,/ELDgJSnze]uLR,`C)^[fxS!^>)=!x3^j)ykY`ZQUY-K' );
define( 'LOGGED_IN_KEY',    '4vGn4G$rA$umN0R;WZ`4t{/?v7{gGRGabFaGa%(I)O*!#lj*XmK,oX<CmMdwPLU^' );
define( 'NONCE_KEY',        '^pk(`+s(5SV3}m:>DKX*?kei#|wh=.IsU7iY2p]C%Tm]#(`3v7HiU/pq(Vec1HT*' );
define( 'AUTH_SALT',        'kdNOqKOzUdf#v643b?oh/fCu*=VavWws!xG]2n<Bz.8r_7_gqu7@X!zIyNWQuHnl' );
define( 'SECURE_AUTH_SALT', '{6(%%1z8KAw/cYe$C;(IX*m<<$X2hgf8$>7,!W@&H+KrJMYp@a9sP}Cm*CE;e0F6' );
define( 'LOGGED_IN_SALT',   'kuj1?f qVx?k(AQtavM.s L.M>0ME V1pY^0[;+8cw&.GlrM#^E~:8lv6U,qXVv<' );
define( 'NONCE_SALT',       ' sU2Hz`bSG8)O:#o1!JIpj7LT`fO&[)ytU5c}%=q7Zm6Am e6mRG*ih}S-ItxA9v' );

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
define("FS_METHOD", "direct");
