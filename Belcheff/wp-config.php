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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'belcheff_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<bCC#e%L,<4F>YcRF{:0TE&d-rQ.mq2;4>e%g@/aA!=#Hl96{W)<$gd)F07J|FXa' );
define( 'SECURE_AUTH_KEY',  'pWEdRf[13%g>&{Q93=OS65c6PUSuQFpA:9SmDrXyhgT>5h_X;~!7.7y?:Mef^wi|' );
define( 'LOGGED_IN_KEY',    '/1Hn,npZOj:j{MeJ^_Ct1j,MZ82h@XS@VA~G[`]X3>iH(EZUlT)A174KYIP  yWW' );
define( 'NONCE_KEY',        'ZzFJ xFq*Qj^/BSE*^v37Si+1k0xv03,0KY<JLrlbwe(B]VMH&?ZDFl=vf8jqjdY' );
define( 'AUTH_SALT',        '2HT{/d*u+l(1-9K;K96:$52TjHM=WnwXfoI[2v~+6?%y1roorU3K>N#G[QU3@JA_' );
define( 'SECURE_AUTH_SALT', 'T@!%Zk(Oses]J|U8$4;]v;7Q^,s1aq?#Tr4Zs`T3xDZu-azj6-2}OsmE|ywqq}%8' );
define( 'LOGGED_IN_SALT',   'INB3|7dIlJX? sVNXX,h;Ocw 7Sme,<~>3y[B!^focvJg%vmFg_u0*MH=[[z?e5S' );
define( 'NONCE_SALT',       'Ze9rd[C!2ra~7Kg<f/Xfet)eGx:*OIpm4[knA1;SB|fUN[`+>6+E;m#sjb./xSAl' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
