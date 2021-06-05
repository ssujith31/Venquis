<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'venquis' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';mQAP>fb=OFkK@av[ycDP_w6o_V-b!U[7BNd]Ft`(N7wb-Bh|g`qZ+<F_f!Z^@Hg' );
define( 'SECURE_AUTH_KEY',  'M3/**b0wBs=}Vz)vkAu6F>yJX7g3n&+si;+8_q5lF$U/cWsOs>N[Qj^EktG>,=;k' );
define( 'LOGGED_IN_KEY',    'NHIz(Y{JOX#UL#{E=TA~#bc}K|eyYc=^)q=c3%Qvlp1z>,W ;gVXo&36Lb}a~2.$' );
define( 'NONCE_KEY',        ':4*A-Cu1}Pd>|[Cy+6Mx/nEZM20R~r&4^`><q@&tf&J7dFh;ySvu,QU(KlNY&|/I' );
define( 'AUTH_SALT',        '5+GC?#_HA,ubBxw]o9F$^}I8dx.E@kDzp+{COWU=;v+Xxg!< ^-~R4IT1(K+_DZD' );
define( 'SECURE_AUTH_SALT', 'UMn<y,70sMI3r-S`#JJ$*Td$gEQ?:SbKx>t%X,49l+3`EsQ6H}1+Hwr)#$,A#73-' );
define( 'LOGGED_IN_SALT',   't%b& mX.(+ECV zxU.<$o@Dq&Y/o12jHCVCMsn?x]Tq@U!oQY;8gP@H[IG@cBbon' );
define( 'NONCE_SALT',       'coY)=C~DjjK.]*(Iy#?qF_h.~Vza^n?DC)=zQ!+.,B*OUKvW^/o$X+LzVNXR;R3o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
