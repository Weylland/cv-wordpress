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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'RqBi6ZJ2c#YR!d$eb{5LOUl#v=3w:hyWz6^)6$t,XoJa&)`z#Ku~d.B0Qx;8!&1>');
define('SECURE_AUTH_KEY',  '?1KQRV}F0FMPjMK8|P5cm)%k5|&`R0NLp<;^|9-b<bndy1.8C k~7fddpvZmk<8#');
define('LOGGED_IN_KEY',    'c.e1x}#1[Cy^4@p~RJ_3}xQqIJCuc8DN$l.{b`Y+Fr;qejdSW}]|0C<bqVUW#-iE');
define('NONCE_KEY',        '3+x}2-=D@EoT0jN1_g_qMc;3@&lT/A2iw4m7W#^uGD7jAchH9cKa]PiYTr36[Ej=');
define('AUTH_SALT',        't@M+OVhJ/9d}+FH7:!JdnTcy(DKe!#3+i)n}hpUdf6/_2r4Ak[eB$qqiA<$|2#x+');
define('SECURE_AUTH_SALT', 'C[B41Ui(Rdc;J67{q$1WL[{S3(68/f!fP=dUw.%Yj[ a6?WC<!CTXGcRfZY,0:>2');
define('LOGGED_IN_SALT',   'Sn4?|X7ue:Tj[fvtnY_&$_;_L=}Mi,A3{Ypr<3A[VWu-W*(obQBkT3O_,0Qjom!h');
define('NONCE_SALT',       'BjyB5C0Y_0;t]*te%VHhI`120j{@ -+=E_p,K*mF;k.89b?Gl31*s6/,>EuX)`EF');

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
