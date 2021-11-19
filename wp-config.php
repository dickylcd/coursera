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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'L97788332lcd' );

/** MySQL hostname */
define( 'DB_HOST', 'wordpress.cqiqxehex8td.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '&Ft}=(rZb4(Rb?#:R<=gE!w?^L~<JWXuJ&D4o4`%q`XnKL$>}<x} l06r@l:gQ+b');
define('SECURE_AUTH_KEY',  '2hZu=|b}0*b8Hpl2?++@,p:G{+MU$Pm*X0ZhIUD:-Z),:*!Y=~kSHION(l|emB)0');
define('LOGGED_IN_KEY',    't$su,{tQ|DsAyT--XV:)O;pv;iJ~V]Jz@,G@3V0-Wp#{-pO XR*PgpN_^7/,La:o');
define('NONCE_KEY',        'a/ogz<N%fSI5w[*AFfSNP:{@x$zyO-;WJ4y|+m=#hkB)H/C/G[}m[d ^#aD1(r&c');
define('AUTH_SALT',        '>S b8x2]i||P)p^eOw=bjw-~=_lay/L u8@ky$9-J/O0]yNz->J p^AQX|h.Uo)(');
define('SECURE_AUTH_SALT', 'm(dv4%[i-9wp8[y*g-A>Nyd.yaaQ_G>>D60gUg0-JbVKC*ebh]kfWlr)LDyNg$Ik');
define('LOGGED_IN_SALT',   'q`F0xJS:~G=Iyz/})=z:5a0_a+vWeM-PMx@Ejydj{DdvWp6snD86i8+8W-_9u3h0');
define('NONCE_SALT',       '|CKwQ-A1psC.X+wAi.02VGAavyA&T@:A/Cf-oA`QnZG&r-P^pW~tzD/8r)7+( *[');
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
