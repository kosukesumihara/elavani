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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
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
define('AUTH_KEY',         'gL99iUysFNnAyCEZ+aIzZni1lLA5zQXOJQsKnmLKrnqMt22WmoNSR7acsg/I1itIYVh2HdpkdgmL12oHbfb4dQ==');
define('SECURE_AUTH_KEY',  'GL7J+JTrSmGNUn4vYr3GOp2e42GWBi7ru9xQFDXPgoq8m1uoohjh/fSs+yKSzLUXiVHkEiKm/PWpth08p6sgXQ==');
define('LOGGED_IN_KEY',    'Nyu4vLFBcWFxCS0cJu8V6nh5IF/LtkBdlMrr4+roDYwWOyFZbXGDAdt8MvhBkpPyXSXMBbPtOdiwDZxBQFFg/Q==');
define('NONCE_KEY',        'wBwnluKXDiaTEoF2za+OMJ7dE3O7m7QmBnHpjOFMTng6TeKLUljjiMNzXvsv+oLUBivCF2yCqma7mz7Ap3mTOw==');
define('AUTH_SALT',        'n3nxnbdsHvmYodDBPha7kDhfCluPRpjwy557b4aKVzy810R49LCvHoU0V5t2kftF+eiz1qx/MJV24Wykf1Rvkw==');
define('SECURE_AUTH_SALT', 'KN5QL1ZJgNL7hiZywKKsih7XwodWNZGC6n4lb4ce2SHKRfm6apJ83ovX/NzsDeKyb8g04vzIO51u85cr8/a+jw==');
define('LOGGED_IN_SALT',   'rzw/H5zYUEaZQedhx1Ahf5ol1m1pEvYNcAyvlVG+IcYkK1fPyMAKoRx/wDvxttMXkBWxSYfdW+HbZL2UIKie/g==');
define('NONCE_SALT',       'v/kG//75WTOAywR0IrphNBhE8pzbqzsqBOr3qiQvUBKzQxB8XWQzKEIZP/iGZHYuHmZRSf8awGih97scGtgGTw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
