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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F2wIgsmW06opFdZCRVepzeef2rODPT4kgR3iOSr822BmJ/THenamVQbeIm0PuAcZPnPuiOuWb/KoLMkheUi2aA==');
define('SECURE_AUTH_KEY',  '7vY1XbbJ37YOxirnDJE/IiPeupvGHCTh3g9hQae45G/MxlwVkGcnZSBaWCOgRcpZ/WHFHvZVYhP78+ZUfUCwLw==');
define('LOGGED_IN_KEY',    'qxCRFkgB1IwMgX9OBnzglPZe4Y9vi1Zq4ZuQWV2VUl/7w9Hh4wGbGHtypqVE+jQP7ILHfORwT5NSoeqQp1pJOQ==');
define('NONCE_KEY',        'kMe6ZzI3C0deiow+bsIoSloPbIgaq3MM470BQAneW+Ce7vyA8lV3XYddlEqeU/iwiZB1otAlIoYPCAhCKyI1kg==');
define('AUTH_SALT',        'JZ9ji+sbUfO1Nu/PHmOYDg4xTQoUj1sPqQqDcmtB9zWLtthKpPJ0Bq226gzhtJkZ12MdUmJndxmOthDPVx3FSw==');
define('SECURE_AUTH_SALT', 'RrpSJ9n/2R427/cjl1+h6ZJmgR3ViphnR0/Ud9x4W743zEmkEM+keFUTIaHcx2E/4Dgh49TKiDiBgE845ZFvoQ==');
define('LOGGED_IN_SALT',   'DulUJYplRxTALgML5ZDWTvgnjD1RPzLYkl/VglKkaEXUn/Wx+yk99TgAs6+q1sDDXnyM2Qn7mp8XxJMiSIGjNw==');
define('NONCE_SALT',       'AEw3ZIMO+fTC5N7pfetqBXc3xgvd5XCSBI0uz/2eC8+CsJuZYtFJ+VCWoUlnJA5Ua1z1VRBRaIGJnVd1BEaIWA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
