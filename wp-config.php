<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'myapp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '3}Gb5-K/1BtB]W[*D5A:x <M9$+}[7S::?2,|Q`!|NaYiv<[$u]*0S2Jn.]K>gnP');
define('SECURE_AUTH_KEY',  'i!PDV/,bF2k49F{^N|M@]+u-8i+[z:QxGmgg~FuQfl~1[Wwv5uJ_FyR^58l+g(f8');
define('LOGGED_IN_KEY',    '3Ax9YCtk[3aP@/d,44r-0iL?mn7hI/%~o`G3^7I+9kkX/35yuHt62e[Wmx4n[eF<');
define('NONCE_KEY',        ')3_6Tgxb55<+a];VNESqmOBbM?xF1qv;=4((i(aley?nsgIDN.cy14*al(uuxV-n');
define('AUTH_SALT',        '4>ij#C>.E/;A>X-6Sgb kg?A@a]d/rLPfF+G#B#U$|%-x=5;k;Q+ByLw_N42|3bE');
define('SECURE_AUTH_SALT', 'Js7v&X7%HFYYT%@/~[wDn|],8Zjl4:&FY&8R%^LiXPV+_].4Z41)VK{=tNvTTC79');
define('LOGGED_IN_SALT',   'Y#(nMB5WBmJ7w(0^g7PSboLGq@B1UG $|`?L|YjA #N$a{#KNMJJo9W#KuyZv+zL');
define('NONCE_SALT',       '23;]_KiAOD@g1q]Xl6^/VikAr(I]`qe%RkD@.Z9F|!!Gy_0T[dv#pD#6v T(&)i9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
