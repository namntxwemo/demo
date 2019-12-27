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
define('AUTH_KEY',         '3Y8nWeco8JF86orpbCTx0qEC/eySFPcYZdJ81wcchFkWAkf/ax4V1mmIR+nXV4pxuBgAfsCbpzUK2Sxc+qu1qQ==');
define('SECURE_AUTH_KEY',  'GsS/SOFsIg6FhUA9B4H8FzZp/ILAA8sluQJkdTyF90SVWv0joFpUrQacYanKco66f2DRY0t3426EJ0MlnAnt5A==');
define('LOGGED_IN_KEY',    'ZUlfkGGILFc49ND7DC+w8JfzwXrw/Dzfg9Rq2Eq10BwwEtJBBmgpURkxGoofJlIuDg2lc60vb4VECz4vSAAidQ==');
define('NONCE_KEY',        '4dHci7DVkQ0Atako1qmas8D+VRp8IifKAza9ePrz89wD2dWWEHsNQMVFB0ixp3EkMXUQx9bjDQO3FDIaLWVByA==');
define('AUTH_SALT',        '7aJurxezbV42Mi35nwpCZqYc0yWynlZv4l+qZbgEoSKwsynH6MaW/W9w9zQNMBMAM9VvK4lAq77lc4UyVylWEg==');
define('SECURE_AUTH_SALT', 'MsvUMZtTw76iKdGTQGpyp4IhpIpke+TkE61lw1810iKGPcGPnfM94OnDwhAf7Y8pqe1OILgemzQ00dqDsdzKOg==');
define('LOGGED_IN_SALT',   'E47ZTkvmhdXtHAMMdG+ZPDvLNgYrMmMAxzZBOUDBHmSl4aYdEQ90NOl64iFBoZcc8rmxqSCu0RAv5b6M1cY9jw==');
define('NONCE_SALT',       'qM1tQtTYQ2fWGMUz8rMQ242b/roQzrvWQG4ZtdlgRYjJyO2EiRqOZwTRiAJT2bWEaNuQkecTJR84O10/yo0Q3A==');

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
