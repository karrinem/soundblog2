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
define('DB_NAME', 'soundblog2');

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
define('AUTH_KEY',         '+9eI:RL|eZE:rj!P~}n^wXkWV!m<-$XpikpW@9#?GbLnTa~x `*qm2^foX5~AP#,');
define('SECURE_AUTH_KEY',  '$>~?&Cbq.IFy8O6Uey[m~]fpG}Zxl`UMEsYrt=bpNnb1#;%idDf<5Z}$T11oCLv`');
define('LOGGED_IN_KEY',    '-/*10#R==H=y]l[hDj-s<VXjcIiRa%6-_6jW wt$!:xqy:]{_wW12e(CJDSYD>=5');
define('NONCE_KEY',        '^i3var>!Ga7S_h/gf%tkFMd+4(o524N)v4YUA4<)4)%sP6cUlDDuCh44H3U/:L]8');
define('AUTH_SALT',        '8PeDb77W>;#GP^Z1YPQ;b08i/zpiL^]< C33kVIAJmaVMM9;0#:c]gd2[$v`@Jm_');
define('SECURE_AUTH_SALT', '%(t2sVymgrA2JK#3mL;JY)@{7b;xMeN}d{&^zM7Ao}Zq6NiW;4jrQE1%[1xCv>rP');
define('LOGGED_IN_SALT',   'Shi^ssR*!`ss[]Ci&Q}?7=J?:|*{5]PG:Ybwq6aT0Yp~#M2RZ[AU93rAYZB+KaA%');
define('NONCE_SALT',       'U,|=:_|d<BM0]Ot3+<$<nE=i@oiq<HbXE/=P]}?`g/OSM/$M<B6~>t4i;l7-*r{P');

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
