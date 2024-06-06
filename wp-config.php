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
define( 'AUTH_KEY',          '[ou1CB>[[EchMBQtvq@:CZ[XaxgJ2K3@!pCZf|B&J|`{K@iCrCsQ@HHM<tkmJjM.' );
define( 'SECURE_AUTH_KEY',   '+wg>i|*j6E7Fh-iEV]2S||5U< y<PR}D<r4tf%k693@N;QltOX<U_CHW}Ci.98}i' );
define( 'LOGGED_IN_KEY',     'm>i)GETJw-j#01PRJkb5.K]OX@P1uCi]phY+s)`D`oJvRZSA:~?--@.D4PW2U8d2' );
define( 'NONCE_KEY',         '8chize]z[XJd09~(c%?,sDvr(w_h0pd |,H|B0;l{SuG%lK~l$/mE~>rK^JzvE5Q' );
define( 'AUTH_SALT',         ' nWUOkfb?y]:(SG]w<fQQurzdzJP*h Dg[IYVxu3xcZ ]GgS$z`Kk/:NgWPX3.[.' );
define( 'SECURE_AUTH_SALT',  '=HgUS)/L!i{@>?63Hn0]zaN^SnlHQLF3kAu7`%Q/|^FG_H3RhuF6|TF-S/A?<cc^' );
define( 'LOGGED_IN_SALT',    'e?,G(&[_&EEun8*erXk#bk }E!w _udy@&wIQ!2`LpL^V/MfR2pPS$<=~>.!)=L7' );
define( 'NONCE_SALT',        '}Xd@AtsEiubI+z6RI7=La{Jl&vi=080FtmB_+;6iKNe:d-cJ)Z1T$(I{j4Dz2(b=' );
define( 'WP_CACHE_KEY_SALT', 'vqz5}rw$*GEK/F+-o^lo,2/.nUo3Qv*,C{sc?an}yBBQZoIBgTdC^vp1{gd/45Pg' );


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
