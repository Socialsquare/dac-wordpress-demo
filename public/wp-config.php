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
define('DB_NAME', getenv('MYSQL_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('MYSQL_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('MYSQL_HOST'));

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
define('AUTH_KEY',         '$].kyla=?W[1 y-rTqS.`qA4hLOFZG7pc/ai(YC4a>e6LFPj?c>N//N//g}qeqxq');
define('SECURE_AUTH_KEY',  '56I^q!90DzV6wLp.;ai0nG=.girS/+up}/8rhLYvgA;EI.$b7idA$RT0AS%JQsC$');
define('LOGGED_IN_KEY',    'L5`-.:2]KmJya$Yc4=H.yIrTIb&fWO8BvD0<n-}]}h;kk_HSGTfUkXx!1vB<(O?P');
define('NONCE_KEY',        'i@YN8)sd-$lUP9wAbXFI3mnFk_u@Fc/_hl};p5=<@:ZCQ`T3%4/7T_ZS|=|b>&Sz');
define('AUTH_SALT',        'y4ZPIUEN&jfr+OsXdJRe@-2WKl-6xQR ,?eIL8cyY*rx@PSggMU/?D&K]Q9`b-8E');
define('SECURE_AUTH_SALT', 'U;-$WI@I~aV6`T5P=^$}`J0a5~t^=H1vtp >BBO:^f ^x!SE|FR$MBNIRHj+TJ/Z');
define('LOGGED_IN_SALT',   ',[Q7)a<Vw1dq=8A!Z#pHJ~eC<LJ8[zUy?*0-2<$Mu`E]Yrt~+^jAaQfe4tN|~e~s');
define('NONCE_SALT',       'm; GfvGY@&)vH}Z4IZQsV#@9[LT|-RR87Kb6qV0Q<.AVl|^Z>FB{+s-1xf5*M.[Z');

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

/**
 * Other options.
 */
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content');
define('DISALLOW_FILE_MODS', true);
define('DISALLOW_FILE_EDIT', true);

// Danish language
define('WPLANG', 'da_DK');

/* That's all, stop editing! Happy blogging. */

// Absolute path to the WordPress directory.
if (!defined('ABSPATH'))
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
