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
define( 'DB_NAME', 'woody-asm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '2NrufVkhnttxmzheBHOsA8i4cu0oPMgi8HoujKQYy4vimnhHmUplP52lRS5eY8xX' );
define( 'SECURE_AUTH_KEY',  'MhJ8vryZhA5LhDrkkbaCsUxRLzWVjltCk9etDPHFfKPFDLJ8WTlTce9ckvVHtPlf' );
define( 'LOGGED_IN_KEY',    'ReZLRY8PEVglI6KnK7vlSrJV94oggGWirjKAl496I4Svt9InQGa46AJWWo7ZE5j9' );
define( 'NONCE_KEY',        'LdcZOCCnHj7lweFHtzwRqIpQvJ08uNqC6A4CGEqNbeNTOVqU8n6mvKby5GAyHZXg' );
define( 'AUTH_SALT',        'UP9LYqSDaX68v9rZNiXk9YMCdu0BlweK2JYLbLgsEgTRuPaoTRctcP01aq1qeGGo' );
define( 'SECURE_AUTH_SALT', '2CJuIBhFAWGiHOZFFBQqHnzxK7nwK5n0yoHohWT19WsgKY2LJuE71xq62KOw6F3U' );
define( 'LOGGED_IN_SALT',   'lVjSCmIH3Rc8bOp4EoKAPYJZDVgqoiT8LvaDpOS0HbOmQbaGcoLNr2REduaD385j' );
define( 'NONCE_SALT',       'UqFHYPRzLHjNKFmGvCuTkR1gGd4qGaWBUmFXGoesnyebeRvs5IhgPQGRrBCuVCND' );

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
