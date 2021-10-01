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
define( 'DB_NAME', 'fictional-university' );

/** MySQL database username */
define( 'DB_USER', 'alou' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dakar1996' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '@G&<-16T{m]:kvjXGAq6ggbIw-;tQ@Rj<U,dz{=^i3?co~S.PrN8={H5#iovUZ!P' );
define( 'SECURE_AUTH_KEY',  '$$kDC(]IR~Vjn7nE,70n3)@ {#M+h4RqYqt&&1Xb$EBK?@2.x[U0?g;x7&:0VHK1' );
define( 'LOGGED_IN_KEY',    'HQ_Zgsd#-L1p1V+<p %^`Ju^~T2SY4@I4<UGCehG<bL<Q(cP]*<a8XfrTE[2V=gY' );
define( 'NONCE_KEY',        '`eTjb5#@W8VqivBQwD*n4%ba0Y9*=c&Ipw@m/`|%y1D>T>/R/fuJ`Amq&1)L-df[' );
define( 'AUTH_SALT',        'dm;%GSAknrc#yebFY@F6Z`7^IR#pmF{j7X~Gr=Pu{Q3#oL)KqBs:jq}=J[n-W)dA' );
define( 'SECURE_AUTH_SALT', '^{#uH)7yLg]1pGfA/#6iH]*_szIbF}9sfz4$OVuHMS$@zz)nd{h!D[<ZlUmdIIH^' );
define( 'LOGGED_IN_SALT',   '4bU?wRKv.PxktI)3mJAiH;r]RS4-3;y$+Mp[bEovd|A,G:1$v`*^_Sgd{kU6T^zI' );
define( 'NONCE_SALT',       '6|}5K=xb/ LNKB?m2]htdq8D#<8V6 f)Dlf)IsHP&;^l:,_>j7TqC,4V4m3o0b.)' );

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
