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
define( 'DB_NAME', 'azzurripdbnew' );

/** Database username */
define( 'DB_USER', 'azzurripdbnew' );

/** Database password */
define( 'DB_PASSWORD', '5e6Ve[6pU%L5' );

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
define( 'AUTH_KEY',         '1wX8}KoCMA|vlbW8[U&V}uXL-Fy8=x4X$7[gV+n}0V**eGWlLz`KHSMe03OgTZo*' );
define( 'SECURE_AUTH_KEY',  'D{$gm7!:88G:CZD$0>RxP/&6n@mkeC<56L<@_LnV,01&qlo|-dTy^W6IDohL2Cb+' );
define( 'LOGGED_IN_KEY',    'Ks#*vb#a6S7z5Q-L.<N#0:L,6i^j+H.R;7ZX:0/;7[_sb{|hY;;zhf8wb+dkVly~' );
define( 'NONCE_KEY',        'ZExp/Cq{~GJ<6Q]$AA<+-Ac7Yw42+M X|#rC6pFG::EEbf$@sQQ}f/bLUtVrJ|PP' );
define( 'AUTH_SALT',        'Q!F`]9A[4-5MT4Firs)F@:qkrh{s.9Up3xiYdVO=5w;@~3]}[4@+#2z NdhK) mX' );
define( 'SECURE_AUTH_SALT', '0rr<g*usqCT$a^s0Zkh o7UisLD6p 5@$ZCPTk)A^&[Gi|%S;m2ddud@|$,I)N K' );
define( 'LOGGED_IN_SALT',   'DnP$;40QNq`<iUzzN9QB_vQ*)%8S)Xp,Z<rAYZc<OSKINu=/h5o@#*-[%hY{,Pnf' );
define( 'NONCE_SALT',       'rvSCL_~iBy=CqyV`ihw97~c|feql9. $VwCmR8(a!qC4Sg1[l`$:~#cBLE,QaH?$' );

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
