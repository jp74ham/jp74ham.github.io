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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '(-_r@`Ee`[oBb^X~$EqUbpKlB+(8pWycXRVg62%]_MYy=z!aM:6M}oY%bkqt-YLI' );
define( 'SECURE_AUTH_KEY',   'cU6NpH_*4zUTv3]lib_K/@Pt^k2-Y2VU,T7>jQ,qu=oq(g.c]lugeDLZC|FrlMzs' );
define( 'LOGGED_IN_KEY',     'fpDwUgz@G*F3qjt?D{BB~fLc`lwuaV>bv$:Kzy zl$q!HJB4PaR37[;nW*2c?6t6' );
define( 'NONCE_KEY',         '9Op8Afcy+<h=v05UGDD.Ctqbpl+hWR]<2.6: !RY&Iq$/aP<.1wr/p%R6@J7fya2' );
define( 'AUTH_SALT',         'FQ,_0uuMm=a$~l1Umyaw/]>@;pM}zeK&F];d{:y#DCi1Pg`$!6L@&SrPg5o@z6aq' );
define( 'SECURE_AUTH_SALT',  'jY23>EXW8hi=.Os3ChY>&s9U8w&{sxV^zMviT@:l]Q|;mXzox )5BeTN[j|klja|' );
define( 'LOGGED_IN_SALT',    '@ w04Dk(QPMi+>;=Dx=mU=Cm<eULz01)3/YjW5dHpc@u)d.(XPl,)T`EV7*g(NBE' );
define( 'NONCE_SALT',        'i|qjM#OS=DNUg1@<Dk51:! ?LLGtWjt;n4j25HI:u{Qzf283t+3y_v5R<p*`uw!S' );
define( 'WP_CACHE_KEY_SALT', '[>vH+06^q6A5NPU2$Fd`ym@@C;i@a$o?C}:#3,1Y{LG*7Eu88L3doD?%41)#:5PB' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
