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
define('DB_NAME', 'a6839074_se');

/** MySQL database username */
define('DB_USER', 'a6839074_se');

/** MySQL database password */
define('DB_PASSWORD', 'se123456');

/** MySQL hostname */
define('DB_HOST', 'mysql14.000webhost.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3B7QtaXbII{1?113LR0znwx~DI78<qpOoG|5>47K-v/kEB]lvF#QZx/h0x}YRJ$Y');
define('SECURE_AUTH_KEY',  '|SbAi$gmwh>>Ys,n-J oxdpRF0)AxO!L92KZx,U*>o`!uucZ3`klF|`fY,azcv|6');
define('LOGGED_IN_KEY',    'u/.])YB4b?=!%*<D!+y!@1G?eiU^&%N;YO7PC=--kD*,HK/Ied|JJogM{R:WwrW>');
define('NONCE_KEY',        ')7+3!l0ErXlM]-Z~vA8sJwKC<HQ>Bg@V>[#Et`<V~xk;Z)_!P_dT= m?XHBo;&Vy');
define('AUTH_SALT',        'BM PdN;-^t`K4L A}q {;P>t!%j)<P)%>Zhw_)N*RUH6<2n[:B-4&MbbB(yOri{D');
define('SECURE_AUTH_SALT', 'lv~nGs(J;;upuY)(I31?8/X|K+yLPb2:&V(/zk[ow)9~N{a<>X|8_q+^]D@mGg/P');
define('LOGGED_IN_SALT',   '*0yq?t`h(ZTkUk2HT+YOx--$bl_!>&?My<olxAi8(_4Ii0e>ufe%Gv[<;IvjBxJ|');
define('NONCE_SALT',       '_8LsD4Z#15zlum<Yl7`3%HBvV5):{L=}k`cVJ-}K2|*X#renSs:]#%|+i7rpln)P');

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
