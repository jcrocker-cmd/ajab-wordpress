<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u987956616_sI30J' );

/** Database username */
define( 'DB_USER', 'u987956616_7RnvD' );

/** Database password */
define( 'DB_PASSWORD', 'PtWQTDFXL4' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'jk*hLP~XO]b)i _f}euSaPJ0ih&||jULv(5|8h>~qEa<xQf>iGRpydcr#h,dVszg' );
define( 'SECURE_AUTH_KEY',   'm e9R3$My*|RB.c*Xw7<Li[ujS(X/hf);Y3tW^r@_YN8O4S):pTfjsrfZU{w K8k' );
define( 'LOGGED_IN_KEY',     '-y#3qlT$ylTCAWo->s#t&*tGqmqCxg^@JV|A-`gxL0h)/]eBV&n7qb_HS[{hy)g)' );
define( 'NONCE_KEY',         '}$+mOf>p;g4+1wEq0BB@&&`4duMGSUv^/3KXrJ;_},Jh]qG2e5;@L}}_3%q%nhM ' );
define( 'AUTH_SALT',         'Qp{)QT3(c;xD1?Uh~HV_z$2s]0J]#vPhQP;yxX{;09e$>-bYTi~~|7_EbXR4)zN/' );
define( 'SECURE_AUTH_SALT',  '+<$4W,Czk!t@lj8ICu#we KFM-=i>=Gp<s1vy_2q~GqjLp4)J;q-Hlmq{]h0uDxo' );
define( 'LOGGED_IN_SALT',    ')jDChW&d~A(Pq~>Kn];e,^e4ID?`` miFJb*5ls}/LyBEOG@FZ~l8kfb3s(g{itK' );
define( 'NONCE_SALT',        '#zQa:@^[QeSgmKkQ$P4nCc-C-`l*QTKKcdXrup2$Y#$b9mQ(n_q{76nTVd5`$wxy' );
define( 'WP_CACHE_KEY_SALT', '-.V$S*uPcCmON=e{A+m~W2dKg kS{/siC,%!hjVg@vj7JV(xqS9/n-wUd;W$RV)3' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '052517be47a5d2f9a2574255b17fb577' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
