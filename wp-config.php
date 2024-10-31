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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '=~K:#1.`/a4C}TQwcmIJoT7I(f_]&5i5oV<^1U-2P=6LiLobQu6U3)&MA>`Q*s,-' );
define( 'SECURE_AUTH_KEY',  ':7c;gM(z2[Qb qyjL{Kil3.s=5A~-vxk.@A+lxM</Q+@b-, f!dXG$X6x^pf<<g!' );
define( 'LOGGED_IN_KEY',    'IA9B$JzupW==;0Fb<@s7|KHU9@-(@uHr|7h<tS{uZ%tfSc[F=TtNa-0h!Pvh=DH4' );
define( 'NONCE_KEY',        'F6OV_z*{e@n-(T;tfV#B5#j//Vs`.kEp2w-)_^Q+53/GBp*J4jM?VyY7|/43{X+ ' );
define( 'AUTH_SALT',        'TJ03=(;P_2KoXAFaL3?tH0/!Oig,TB5E$68gUZ()o?mX}s]m??.I5BpgT1d#tq0|' );
define( 'SECURE_AUTH_SALT', 'eMTIq7tZn50no`jzjcr/|K5!3ZLk~Vi[$@;,Z -yM}`,xmXw3|D?Nucrd<)oNvdf' );
define( 'LOGGED_IN_SALT',   'D_2veBwN%B>{SF@6fWuIzUTzu =^QiL+$WNl3A}VWRJRLY;d[I{#4^w)|+-f%FQj' );
define( 'NONCE_SALT',       'E[nVY{RK&HA^Q $nR)ulA^ &Xc`[#pns<(c`ju4,$qrv}>^}=ZKT`T-.Rd`rw;w&' );

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
