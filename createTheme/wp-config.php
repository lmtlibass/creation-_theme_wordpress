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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'createTheme' );

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
define( 'AUTH_KEY',         'sPTGK3m9vF1tArWXpOLccZnhZL6JzuSC4r0dvpZ0YbP7Luf9Pm4xG2WD6UrWt6UB' );
define( 'SECURE_AUTH_KEY',  'MmlLBUJ2IXoorglmzmR9Li0bruYSkSE7dX8AqZIGoQ2I80W8opNX0M6yppeplizw' );
define( 'LOGGED_IN_KEY',    'uQUGfxdsz9utwHyg0NBv56ZlTReYwIriliwa6PKEROsbuY9xdEj7zTuJF8tnsbSY' );
define( 'NONCE_KEY',        'jxXoYl8fdW2Oo2KIGO0HAsv0k3ElwnaYGuIM2jdnajDnQVMLMVUJhfzEcSyUoGZJ' );
define( 'AUTH_SALT',        'tnMR6himrXSHKJv3ajMWIqvnCIE5vhfDz305j9NqvLyRMi3jEyEA1Besroq0R9lp' );
define( 'SECURE_AUTH_SALT', 'Zkm8zkKNfb40zRQeChvgt2Y1JTf0tpFg1VO3XivOS9cCj5XbQwxFMVtanF86TyXZ' );
define( 'LOGGED_IN_SALT',   '3VFOB5wwGAtM9ICZ9blHoqiB2L6CFtNrFBsiXtF8m2mngjNUY7b2d3sel8bJyovm' );
define( 'NONCE_SALT',       'iNrKFEc1Nz5wr7z0pVkTEYTM9eqCwset192E6a1oMYvQMrJEFsCvR5drbLKC50o2' );

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
