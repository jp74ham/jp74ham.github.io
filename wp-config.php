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
define( 'AUTH_KEY',          'e9JvOZ>eTG8=7JhKKDIyZM+fnZw0-]ppVPI?D|yLdh^9r_K,@vu6>YYdl4, .LO3' );
define( 'SECURE_AUTH_KEY',   'Aj^=DszUy/](=7P#C1U@qTR?Zsf$J7%bY`J@fs4Ytxu,dA>*]9^x<CgAVlrT9^gA' );
define( 'LOGGED_IN_KEY',     '*<%$`X-gT y2k^NXo@%%h&;3eMvch$A_hQi<moneiD^n=0l_W=jx7=Sv;Xb&).&z' );
define( 'NONCE_KEY',         'cB>mq5f0).(^-f(=shJ}&94CK^$iX.%,I{}l8uGb`s>DweasPT1}emIa Mz0t,/D' );
define( 'AUTH_SALT',         '/=rL7X;calCBG/JlL&NdB!;/q[jNN0RapQ%&!e}V|[Nun6QBVzm^IA!pr=[UctM?' );
define( 'SECURE_AUTH_SALT',  'm#2d$L<JdY 0-]e(g;}FT>S!qrPmlrbERH;SL9%;wJ-qy!v>u3^@x~qh4LEUk0?3' );
define( 'LOGGED_IN_SALT',    '=XOib4bM&&FBmNM2}C8C*004kT3d8b=9?bHMV^i$?ho c;qXtc!G~cDV}Q>Ph6;R' );
define( 'NONCE_SALT',        'wDb9U!l/KGO26#A.DP5+up6[8ulFe8%UGFfwI&$2gJLsiL bR(NLMuVK0VUI2%_l' );
define( 'WP_CACHE_KEY_SALT', '[.B;_,w+.X^pV~,EZ;YVxVnyf`$6}QyNZc$,Poda,n!y!K4uOh;}nCM+rW4mfBZ#' );


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
