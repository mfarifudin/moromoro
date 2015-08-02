<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'morowali');

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
define('AUTH_KEY',         '$.uIl@.$*r,y5-k y%Ev#,W3Fd|O5gn<ur/-XR{u,gH7tI7Z+l-f7)%vi||r~2sp');
define('SECURE_AUTH_KEY',  'q?&VTh$0LRdqKlD|F7yUh&@gd)aaZgwKR)YErJEk]n:)UX8iHq#umHx`,(ZJ+UD2');
define('LOGGED_IN_KEY',    '}8|B;p6>-!M[MQg8H;lC6( i5o|RDj5@!~Um@=B4g~eO)pQNV:8|ks<RZu;P1&]j');
define('NONCE_KEY',        'R?@X6Y>$F!uN#u@BE5e=!!yR7%UFzR%+Vd`/IK*.7I#p+;Bv+i+4nNh|b{MN]slX');
define('AUTH_SALT',        'IcB?:& O-E+-s_OnRL.*jit660#Et5vG2lk5Q8n+_w*{b3c:bM.C?{{G*UK80z |');
define('SECURE_AUTH_SALT', 'G.oCMX).T(Am+@/RL?*-n7^:+M@%5iWdwyxou]w7Y#4},Xd;c&+-CAdFF_oIf43v');
define('LOGGED_IN_SALT',   '1S>AZ:a9F60p1sKTR3Os{8K/x~t#<6?5O>+yqN26%86&OB]B*q+2H5!oPs0@:o4k');
define('NONCE_SALT',       'mCV4ga,d6<-.Df*F1JU_x?=Kx,<#N>|M=? [/QjnD<*J7; BArF${^HWM_!)D<Si');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
