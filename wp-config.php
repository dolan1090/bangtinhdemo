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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bangtinh' );

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
define( 'AUTH_KEY',         'qPbca.4wZ0,v]=0E},8FRc$`Kcl:Yq:dck`K/6`|/6@&mElx`YNmO/cVAm9G:hql' );
define( 'SECURE_AUTH_KEY',  ':k{^~+0@sb,|uzH](;F*N.6~d|_w|iiJP1I,JxdJ!2]k`/X~,OSRYN0)+:as0b$<' );
define( 'LOGGED_IN_KEY',    's(D25k|p +Fj6?|AWo1E!@eN%fuAft)HA,EY-z01IdzT/|_lW}F7 !^3GOeN,T0]' );
define( 'NONCE_KEY',        'vM}gY~gh|8/#/&{|Lm!R63[rl0+bOS#+Zz9dc4/%!MHBVGHaRgu=Y&y!tzp`]6n1' );
define( 'AUTH_SALT',        '/!LiqlkCT;iH!->XWq5a,CrrR$:o!hFy:4B]6_&<%dRDpb8_FpV&aA|AmB{wXIMi' );
define( 'SECURE_AUTH_SALT', '7NgcG?B}$}z>~W_J]3*[/!VMj$Hzq>xEQL-n>iZ2ejmG{#W6YRa8{@HeLA>u3*}D' );
define( 'LOGGED_IN_SALT',   '~_S uBY&u@H{t.9E&zWoUSRg;X@qYDx]5o&o6E `~pPIOPzp:MKi}EOqz)RZiy|~' );
define( 'NONCE_SALT',       'bK.;wl`cU<e<U8sFON/:}W9FqXi4::mQ^HHXil3NpfBGLP^L%s2(z[oy/C_*?!86' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
