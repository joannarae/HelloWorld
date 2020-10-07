<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'joannaro_wp783' );

/** MySQL database username */
define( 'DB_USER', 'joannaro_wp783' );

/** MySQL database password */
define( 'DB_PASSWORD', '2p4y(.j7S5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y6mn1snpjtp5ek1sp4utqyfw4f8qiurf3zqzqdv7c18y2hvsfoi15ueqq5aaqmz2' );
define( 'SECURE_AUTH_KEY',  's0m0mmaglacf5qxqem5pmepfc3xzys1os9jiddszaets10c4bbzbpwor4nbjzkhz' );
define( 'LOGGED_IN_KEY',    'v9zu4v5a8krsfj11ctr8wl6dgc3bqgiyarkus27yeslkeralvv1kloxgsoubgjpd' );
define( 'NONCE_KEY',        'y8owhr5e1rah62cmzs1seetqsrfrsimvnnbtijs4gpbt3ocmyboobofhqxfmd6em' );
define( 'AUTH_SALT',        'cp8rlnfdihoxudgmftsx9o8aaskzzdgcq0uanw0lpzbdoau0kocldiyziv8zqevv' );
define( 'SECURE_AUTH_SALT', 'sesicocoutmmb1vcwkijecseergmsce7pjzld8kqnq2azhp4szei7bdo1bk0yknn' );
define( 'LOGGED_IN_SALT',   'qjspcv45l9hgkcjextq0fsyf45y976dxdla8ziffjvcf4nkt7pnol1qpiippmysh' );
define( 'NONCE_SALT',       'kkldtqxolemre2gw5bqszdfudze8ue6g0xyoiquqfwwh899lvv7ijwjzlcavs2r9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpnk_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
