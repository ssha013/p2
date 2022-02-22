<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'p2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         '1iuUOSglRqLsRxWSmhQRl7B8NK0ESD8d6fZ0s4gH9OBFcHs9x0c05G5Amz0c0ZvyX2eVNZ5o2hJg352MZPrCtQ==');
define('SECURE_AUTH_KEY',  'cDsy3B3ILguueT4oZkJ7iSu+2hRHTXld0t5xx1UHeR1g0lOXwCpG+IRicIeCvo0V68YrtSiE8Oc/IdKi4ALgXA==');
define('LOGGED_IN_KEY',    'FAYq149OJ/9Uqm6Jax3MufNEkCUDxk8fvjq6Tvc7t8/WNQNfNZU4r/ioyGF6LMD948LwpicCYfN9wM4IUvylHA==');
define('NONCE_KEY',        'BS3F8Mjs6mqz3q3vrYtHFblQw9MplE1/Y9j/TL/PGkSegpMa8AiXBt2bLxE+tvIpmfHUIq/JQgtY5IGMd6k6Gg==');
define('AUTH_SALT',        'wo/4n4mrwM9Iy3aW+zulrZ0Xvg3GEX3F95HbJM7dJ74EwvxQKkHYhwjQtdxxV+ICQnDtu3jStWQXKNvnfzNeDA==');
define('SECURE_AUTH_SALT', '7uOj8/T87XdvsdWG5Pqs5+HmjWc6JU4iCUcdsljSTtBvRar1tcqGpC3+3OxHmnr3MHK9/WHVwqUE/MumpDdn4w==');
define('LOGGED_IN_SALT',   'IojVS6ztR6Kn85Ct1FTpojoQRDbFhGCmudgBinUOyjQYjAm0ohH0fLXUliv3qy+cs3+IMEpHfECQKYT4gRAm7A==');
define('NONCE_SALT',       'pBLoubiNlO+JoeM4g1q6KM0mhq8aRLmeXXn385V4mpoWZKekWjlZdLim8txovjDFI4embO8dO2FGI3RNZ/n5pw==');

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
