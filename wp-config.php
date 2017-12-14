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
define('DB_NAME', 'i3157645_wp16');

/** MySQL database username */
define('DB_USER', 'i3157645_wp16');

/** MySQL database password */
define('DB_PASSWORD', 'Z*tjes(@&d2E8H&e0Q^72^&8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4ogbvj8WtDjBEGD3vAzG9Kpst3HSa9dnQXqKS4YY9iakk8htwX3zqTBrioayO60B');
define('SECURE_AUTH_KEY',  'p8lW3vmez5KOmRKHpZccEycVISITftF3lL87cobP9a0FTvbznC3J2Koc1lQUrWcI');
define('LOGGED_IN_KEY',    'OGY2gT5si8yqOJlgsDbLBqmrf2gwRRYHbwQjcZhNoqIndcBbka2HKhjfeCy5waxQ');
define('NONCE_KEY',        'kBHLSvd3nvoZAT353nRt0bLKmbJriJRHq6DYiJl15yzupKX2ORrxUOD92s5iMK41');
define('AUTH_SALT',        'NzbB7oKm4Euaql1BtdU42u4ELhxlwXL1e7FyOxn1KjcdKZL2KhWxn73bI0Hr4ihx');
define('SECURE_AUTH_SALT', 'xgJJ2DXvCMjcIenXjpyevYpRG16axI7EkTChQotW1DqyiGGleUv7WBciQyt1HkhX');
define('LOGGED_IN_SALT',   'EPzIm24DAfiD5bsbHjSfTS36IjGKe9u57cbnQexCRG6HRfSoDAu61hY9ZhETBMFC');
define('NONCE_SALT',       'RDZVOC2HJEYH5TAeGne1uHV23R99ltF5WNAYeOJ5laZyfFYf8sd34GtMBqMOmAJ8');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
