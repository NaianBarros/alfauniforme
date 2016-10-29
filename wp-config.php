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
define('DB_NAME', 'alfauniformes');

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

define('FS_METHOD', 'direct');

define( 'WP_MEMORY_LIMIT', '256M' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AYd^.*CqM4G(eI`5Hg@@T|@5mmq<REy(]i]./f#R,rPsJ)/pj,ifYO)fVwP>7^9]');
define('SECURE_AUTH_KEY',  'T{Cej;?%#dW6dR;LrbeI/xsMTmqC|3pmom|*mHL6(:S=!,afn2D vE684ECx@((k');
define('LOGGED_IN_KEY',    'D(}W2rr 9}Y0KXBuP8kbl:nQ_EX0h{,rM>O}pE~20+-qG?sZJUWfX ?xdkCwf{<?');
define('NONCE_KEY',        'm#-s8DB4=9j{8K$TALlO1at4lL{+ Q{/rh%+X_#NF3_wY`lS$rVrf>@O05LN |;O');
define('AUTH_SALT',        ' /y3cp-PA3$/^68a2-/|]-DS:sm m&@M/UTN{y@|)P{hvYV5aqks`i1tX,1bs[0:');
define('SECURE_AUTH_SALT', '<7/ga]>]4r_M[31.mFys>JiDD&t=G+K]a85J<cTRMsn#LUHURJ@|[Smd`}D9/g@j');
define('LOGGED_IN_SALT',   ',a64uq@O>Qn3vit$xmH7hCFNFDEh#&N5h,-Vu%$9d$rCtQ6!goZj&CSE@[BC^X..');
define('NONCE_SALT',       's*#ZR}kxM0-By[@d(}~T8aFef0=.x.(}:glJiRXG=p*LtTm-I9OBUX3luB5<3Asb');

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


