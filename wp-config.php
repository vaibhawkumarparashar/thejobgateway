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
define( 'DB_NAME', 'vaibhawk_thejobgateway22' );

/** Database username */
define( 'DB_USER', 'vaibhawk_thejobgateway22' );

/** Database password */
define( 'DB_PASSWORD', '91!H.SE4Ip' );

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
define( 'AUTH_KEY',         '377wzlob0sniw2mazs92ohwe1gd36pycmp3qcpaeznz45knk8d1sliycncuxyqb9' );
define( 'SECURE_AUTH_KEY',  'cjeaucddfsfntrwcv9slrnsew9jpes40a1cs6g95tzejpdccolxd9yvyjnyksprh' );
define( 'LOGGED_IN_KEY',    'tskx3dpmxmlnzkpidgzcfowogmzytcibw67skmrqzduyaaiwtffcmza13e4xi9ru' );
define( 'NONCE_KEY',        'urwt9xacoctigozm1ez6snlejitejxodt5u4xvkkxrpquivgjjp3zeiv8bywadny' );
define( 'AUTH_SALT',        '65dfaku1wf8iwwbrncjy5l9do3ktmnjaxltbcor191hfmpqrjzloubfmftjjkwhx' );
define( 'SECURE_AUTH_SALT', 'e9lwvonzqxdvukffv2lqgezfrtypdbcviqc0gwn2u65jquw0golo3it9s5a4h2uo' );
define( 'LOGGED_IN_SALT',   'iuw2gxwpyeqpibo5skh1vmdcqbakuoujwegb6hxxeixwmpitcvlwqv3glb3fqjri' );
define( 'NONCE_SALT',       'qun5hiiyrwmdhqchjidtdgaxiew6znvsdn6lgh8r0ivqztd1qh4dvqntxcf3n2pq' );

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
$table_prefix = 'tjg_';

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
