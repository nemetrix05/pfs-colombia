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
define('DB_NAME', 'pfsr3a1t_colombia');

/** MySQL database username */
//define('DB_USER', 'pfsr3a1t_colombiadb');
define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'fpM-}znUnogZ');
define('DB_PASSWORD', 'AqV9JLbVNT6prILX');

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
define('AUTH_KEY',         '.>YuIphL}3HB6ovkQik&N5ek2%Nmwe$ b97cOeYZ_E*LGeA6_iKQ+3Mlw.RQjn]^');
define('SECURE_AUTH_KEY',  'RMs$=m{whPB:yz~<|U`a,faJ[sa+qDu7sG/,}:#yHPo Rcqk~yf%KJw#ObO`8y~(');
define('LOGGED_IN_KEY',    ' WLQHKs53vs`*Ml2u1f^qX9j}Z9ts$h:tU<fYI3oRLf|(BG-(k_YHKl/0Roa_o!7');
define('NONCE_KEY',        'Ap=$;=jG(_Tx%%V_~f!~U%vbQ[,-=[Pu7Hj_)aA4zANsB%4L]x9YIYE,U}B-y^r0');
define('AUTH_SALT',        'BAK.u/:`& $h^()V~j5?V& .$G%*0X4n[c;#9,Jc8c&n:4OH_vm^l$5}r-Ht!n/<');
define('SECURE_AUTH_SALT', 'XYp&97@ yGRuUe+:[?tK<ck_:ERl/WTT4X&#;Fkx~ tGnhMPhC`6r(r([CDo#u*&');
define('LOGGED_IN_SALT',   'am*f$d5~mu5,Wz7MNvzq>{Y*C<h9(<[+:k{n$3 KPXh0@i~6a;Q^XN1>S[*AQc`P');
define('NONCE_SALT',       'BnwX8:Lxh%wzW!l9PZ@OL%+Aj`CWwYH#$Y|W6v<TjExwqfZTL#JEuFXG3iPr(<P(');

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
