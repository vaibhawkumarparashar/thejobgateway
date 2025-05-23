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
define( 'DB_NAME', 'vaibhawk_wp603' );

/** Database username */
define( 'DB_USER', 'vaibhawk_wp603' );

/** Database password */
define( 'DB_PASSWORD', '6g0S-[p580' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'dxya9ca5lfdpcrnogw6gwtv053m4ahck4k0rc0xusy4zbnvag1aenokmzkvaztxk' );
define( 'SECURE_AUTH_KEY',  'rfymh6pfwvdjmfqxmfsoglxilvvjdrnkydsdnrcguhbtki1jbto1v7a0enaun8mo' );
define( 'LOGGED_IN_KEY',    '9inl9jmtgarsxnsztyko87fapwraf1pn8a5sgnmdlndtye0ug0ve4xzs4ulm2uxw' );
define( 'NONCE_KEY',        'x2mjen5zc6mluluo2iaupcq0870makercahqjyqtuzl05q0cyt678ixk4jsnvigz' );
define( 'AUTH_SALT',        '8ouwqsqfwy2uraymmvc6o5y2qekzttiwwqyboxezserz5819yxe5s76i4mdracw3' );
define( 'SECURE_AUTH_SALT', 'daopiwgpzz5tg4jmaz2gkhknu2wdpxbbp2t1cax21tvbrs9lwvdk3pslof7irfuv' );
define( 'LOGGED_IN_SALT',   '6jwwvjlqolioxb7sye79p0use9xagfuet9tbnopfy561bhorilkuxod9npkex9lf' );
define( 'NONCE_SALT',       'lr4aihbqe5a2zrmttb4apqwfpmeeqxxfqqxmotflu8ss2dowdpifbsgnvmzn2qy0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpzz_';

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
