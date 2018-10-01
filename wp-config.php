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
define('DB_NAME', 'kays');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '$Io.<wBuQGg@g&z_O4cdC((A/#PkREoe2+9o0)9B9BN?YGX#6C3Ixj6T>S4.EJ9j');
define('SECURE_AUTH_KEY',  'ETu<z&;f]1>r?wX45f%%B7qw!7jnO0@<8%FU-%_cI+3e-|@4{|QolhXI&lu`<dyK');
define('LOGGED_IN_KEY',    '_>ZG/r EIc&_aPL^uhDUgd2hS04S)I^3y?U8Cj(nk?C5K$6)3C%[A[~O!{gbK|Gj');
define('NONCE_KEY',        '7]Cm#^04sn{~o$o*m;lU{+9 #rh:^=.CVJL2r{&+)}TC-5?nm}&#v]k<,@OXkZW7');
define('AUTH_SALT',        'lFKPi;egL=+3:72]GvreRc.W)~d 2uT_T Qt6EWX3<k)a)[<ueOqH<<[}q_Qq,mZ');
define('SECURE_AUTH_SALT', '50c=KVnV0e*pDti%<=)~|D}Qeck~oh+ED |_NtQfdH@jHE|7UKQH:?wg4DLh2kW-');
define('LOGGED_IN_SALT',   'n1Iy0n#XMN!ZnTqb>>K)0YRncS14z]ETD4^F2ep-;L](l4}( /=sRli}w|{_m#&W');
define('NONCE_SALT',       '*Emj)?,ST!}6vlK]Njf_I+B:d*|UBA47vB(D#q rpK/N2?68TopvK(dRP;=?8Q@5');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

// login details
// username: kays
// password: #x*XnkM3*SCeuYCpQa