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
define('DB_NAME', 'se_database');

/** MySQL database username */
define('DB_USER', 'mfang0126');

/** MySQL database password */
define('DB_PASSWORD', 'fangming');

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
define('AUTH_KEY',         '9G(<LqLkWJP{p^Vq) ,VF!F)zS @ir:p9@J/|d+CIZ!g1&iy_henqun,!HF3L +d');
define('SECURE_AUTH_KEY',  '&h4L<Yb/AQKXa%}g7z-N=yNzmGa4|!!$,TBC2 -|c+t|=]f$0gS685g2eTe>b@`k');
define('LOGGED_IN_KEY',    'oafy%<:Hd`+w!pB{,+iIyh!(]npIh9a!-l8W?B!~M}#/~p^_I>JX+f|o$wlO@}X ');
define('NONCE_KEY',        '}A`UL}r)^HvGe[a!PH-FcMV(PGGp[<rIs$x_!+D+<_.RNrh8JlxoR682Ch{JtLcf');
define('AUTH_SALT',        'J{m-*4GsoUFbny/+^aGKRNyH6,orAD!W9{!=#+l$sKSSam]+B1?sKD>|EK?_I.zv');
define('SECURE_AUTH_SALT', 'sr+V-7ZRBr[)87oC%t5KHn92w(y([(-~+OF`>d* B5hAvzD$|}i9@a<@M2Lp2aI}');
define('LOGGED_IN_SALT',   'VCh~=hdD!aue@wDaCXmy7h0r)q+n67euY/H@^brH$kJhZBYB3cm^m4a};XIVYQKz');
define('NONCE_SALT',       '4q17gj;2e@)T^+RwJI?Wvk:FR4~/O5&+gjS;KP)0kDD-XkGkT_=^5MGe<>Lw*&Y>');

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
