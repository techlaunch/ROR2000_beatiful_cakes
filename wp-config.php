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
define('DB_NAME', 'beautycakes');

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
define('AUTH_KEY',         ':]ETC,A(&XeXmgH* [{^nJ6[I_U,n08Z}jwDXwQ 4Sp?@w7*)82 SWIM02`:fn29');
define('SECURE_AUTH_KEY',  'e`#ZJQqKcToI=Fs+>oJ},kVD`-2m>Wx_clHfOhOA_cG4usE4:9j<m*`9@PSHf=K-');
define('LOGGED_IN_KEY',    'zRaz^%D_v$S_%m2-QT~]=[2?X919u|%XK1lgCcuWnRsI8ANJIC[w8fJO4%9~uG|P');
define('NONCE_KEY',        'Z&L;%1^GeYE1Pn`8%ln?nlZ/7@~lQ!ZZA-VSK5GrU$B39L9Wq+@=a07C]q:9Rb~S');
define('AUTH_SALT',        ' lUP,|!Qd[^gs6Pr F_Ki6RAv7k|g |R -N!w5TRmSl w$~vg#y&_l;P*j)tn|v4');
define('SECURE_AUTH_SALT', 'xb9~R21DtS7Nwz`%C& ;nl-`C(@Oy#QW42/s?I+Vgpa2+pC5;P*=xzJ.m.i|$V,U');
define('LOGGED_IN_SALT',   'tQsDji_Es$[t{nDCAjPRf,,ya~%,>VI%Rh1o?ux6k2g}BAl;@Q0_DUHuxZIEf{A.');
define('NONCE_SALT',       '3i*:D]m*~4[;)efoy 0`#AD9@.X-oPxiTglX1~7 5a<`e<lRM,Vz|y*xXA+GasdS');

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
