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
define('AUTH_KEY',         '+z4Ac2fIDjK9k0ByyIpxp6lzJFQhr5NkXLue/Q+G0w8oa0FmZ2mjKJgL9rLMlqbjt3QMwFotJCKjxkbCTBuFCw==');
define('SECURE_AUTH_KEY',  'MzDlOQhZso48Oy222tKkU37RYG7L94slK7Z0xJsLOcuCED+jng9UL/90zQDnhNvY+uDRmXjtbvn3DZeP5HKntQ==');
define('LOGGED_IN_KEY',    'VsE35nsrjatfohipKMtWt+S6cAj4PQFmfoGJS4fUcymOJ7Cg213uYyejqnkQKpV8OdUWvxdVq/SDuSp7+H1kgw==');
define('NONCE_KEY',        '0Sbd3+iuJJqRdCnBmt82IBTDjGrNG/nSt7cF4hfyLqmjmIUOO3U+BvQg8I4rPzXx4did7vZt8NdAqDE+J2a0FQ==');
define('AUTH_SALT',        'dyXlTwraJbALq/q7JRDzP0aTNl2oNx1yqxYlvZ8UXIlpFIDIBH3nnXtb006iTJ54rJgjSn+HMQqI7e8/1MXxBQ==');
define('SECURE_AUTH_SALT', 'bv5LUTdkWCBqYq6JiyWbrInU7SeD/2QjXoJKFtBdFxibVATFXfzyJpGHe6QVAVxpCL4goUDme+g8Ae95t5+UnA==');
define('LOGGED_IN_SALT',   'EYwFnSsVZFz8gA/fS4TuS3+3rWxGtvEqcVh2y87ykAx1pP8yP0QxDJx2Rot4M5p/CPbcBtV2rPyjC5pwTuKrfQ==');
define('NONCE_SALT',       'GYpaAODwwzOQ/Y3SiV73/cqf/BybH1tAQPUOzAtjIo9JynP5fyUFwX8MZ/tX4vH5yixJ04qEl/JJ1xeN3BVBUA==');

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
