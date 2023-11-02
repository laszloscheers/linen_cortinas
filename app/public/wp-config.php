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


define('AUTH_KEY',         '3Qb2QwkhgKA3v553WfrBRhtm3kbGv8u4/ZaXlulSmHzaTbUld8/ukvRxCLFidERUvZ+9KWgaQgFQNKwmYW7gVA==');
define('SECURE_AUTH_KEY',  '6scxOSvt40G8dngJiHL9J7dr6pZYUP3ymALxXCKJR7oKu0a/zKMgt7xjieBzzcNLHoGeMkfsAXujfEMhc8udxQ==');
define('LOGGED_IN_KEY',    'CLCKbkca9rs+z4M/d44yKBtDDr7URS/VFArMQfLT0IpyTVpUNpyqykRY8r4NqRZFrWQO36QkBZv4L+lLgzxFfg==');
define('NONCE_KEY',        'F7s8hXueZ4xnWHZSv3rEV9nFb42UA8tDzHILU/5YXX0s50i0n6VqBF/dWWpZDQ8bmezhbsBB+FyBTpmoP3KfwQ==');
define('AUTH_SALT',        'kHW2VdXAA8vq6k2fNm1AcQnwOnJ0/kQQQ9g10egcZxlhIbxoFd1UM4zy9PigpxhA6zsWMTVA9i+yd2G0UUeuwQ==');
define('SECURE_AUTH_SALT', 'e7+/MxTFMICJTQeS2DD0i/2ye5y5SWly8Sush6dexTpoYkWchJJ3NSqm9Jwwu6wPAWseI8zUR8TdwtstQTYUYQ==');
define('LOGGED_IN_SALT',   'N7Jx+dWY3Bam6bCyqdQ6a7ANexgW4oh8FnUjHO0B56fft1NnJgmi4melU+QX5W7/qnfnkCjpTp9fHPw34icliQ==');
define('NONCE_SALT',       'KVH7b2a9c8UkLz9IunQvPkPJRFMbYr0R8pqQvKSQhMZPwDR2qpKpGKVCTNFuhTyqcY+V/YbVhr7zn0yLLRF3Yg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
