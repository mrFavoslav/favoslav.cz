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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', '12ab18kd35s36' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_unicode_ci' );

define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         'T/K,8d82-7{:#XX3vbu7NHa*u8LghOgzJk)SMaJ|6wS+VC-S1-ucy*Xe`G_J0URj');
define('SECURE_AUTH_KEY',  'hGq-fDK?K&J-#*RQ]EPdpqvP/M}OH,+UBhnGeO@0A@Gn6hkF_XD Escpu&jRdLd|');
define('LOGGED_IN_KEY',    '.d+.Jx#&&Se +*O-YCq3*-RM_>j!Gkc/zw|*-X~|w>8H9r !3C3ZA:X+uO5 {Pao');
define('NONCE_KEY',        '&Z~r0JsD)Ul&wVYarI`6Ah^c{@axSdRd`&efAw lduVHox -9)/;W*$A5ZF=uHE0');
define('AUTH_SALT',        'T|o]+UV[-4yWPUOy)>Q!$83Jhn6l5ay)fu;.yV24|7]t16=X|TE!dc&,lCgH~^Am');
define('SECURE_AUTH_SALT', '^+w^VO$>Hj,hc?Pbp|6FYEF/]N(&:sPFJsdpr`4uHp&|PydmN$/*o^pR)PKJ3C&#');
define('LOGGED_IN_SALT',   '-!-&UVI<g<,jjo%@DJ8H5U+b)E;~LMqY?qnD>Ux&k(GLK_KI5_9FD0+d1|_0Ii.=');
define('NONCE_SALT',       '(Y*=I1Mo1g7KE/Ywh.{!LvLX}dn/|*AA?/IrtG+z]f9s2~Vic/0P,Dfj{Z^=xlO{');

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
