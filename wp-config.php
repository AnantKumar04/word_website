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
define( 'DB_NAME', 'word_website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Yor,oqT3]506S@Clj-2/PH0}4%?<O3Tr^zNhd|2fA7miM[d|lqElf10bvjeAWFx{' );
define( 'SECURE_AUTH_KEY',  'I-]<(PVy2hmE<xL=P:CaWue5()Wk4/]Hc!9e]c sT9vOa?dFs5[?E^4UPv&LN6sM' );
define( 'LOGGED_IN_KEY',    'U*y(GKEG[lA)l8FiG=G7cru+ZP|&yA9XM=^shB1hR.g~jyWy N8_`JD>um/wD+3P' );
define( 'NONCE_KEY',        'Bp7?Q>*za!f_b;=A[1Py^rXc`8qj}8rG`Jy`Rid2bf(s:#TB^cO}3n*Xh56vkf8H' );
define( 'AUTH_SALT',        'SQsE+e07TTGHN@7b*n1HK[n8wHYgMZ8>I-DMKi@6X}CyNU|R{tp$ugwj|;qED4dx' );
define( 'SECURE_AUTH_SALT', '`Uio?nc[eT: {[wEcie3/iGQ|6jNW?9;|So}PeKw!ZxqW(3S-EF-%E#Y~ C<vKlC' );
define( 'LOGGED_IN_SALT',   'O4lw-S5[XYwQ0,g0L?M(n>$X/z;1z/#%~y:Y|Vn+rON!;sI<~Zm1/QR0f1}1e7>a' );
define( 'NONCE_SALT',       '/eeu#0e(l?,Qt^O}Di7; _E==JNtfBj<>!<|/tBAl[34sAT~C}+cC]C=b/{mc39x' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
