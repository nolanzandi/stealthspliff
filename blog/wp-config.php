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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'eGb}aTzyGjD^s2W :{8v,{`{ic(5|:yZ8&zby^VG7zSx)y)FfyAEx=%0zuX9X3oI');
define('SECURE_AUTH_KEY',  'M}:wr-{#q#*[rtD/eepVn.4n?Ii:{Spa$niujiT >M$ER{z]AMZkg1ICBw!<pj0Z');
define('LOGGED_IN_KEY',    'n`|yI|HvS$+/B)qe0Rvy+~~O?DffuvFweg%WUm.H Z2LYp608dT&%BTnF|^(rtw9');
define('NONCE_KEY',        ':l5C{9MV&W<$w}J5 :M.jWkewcFmWToWmf%qC^V6%-eg8|Dr`R8~|=08^G2c/H/A');
define('AUTH_SALT',        't{wCtk8!Sz.`mBCP;MT{je*AzE-WGa.|;6ej.;q:,AS!x&n,Z=XG1`p~PA.mO3{b');
define('SECURE_AUTH_SALT', 'TB Q:wahJZbDKKz77*dz,Df(o>lTTbJHF2LsA-OJFQD2pw<dzb=1Ws?+bXY(^XvG');
define('LOGGED_IN_SALT',   'atxt-1]nFVhKU_J_1V))!bE81j:_0y0t+C>a|,rkR(K2fn%Et/C;Lx!5/4-P2b==');
define('NONCE_SALT',       'uZV>^@7uEK$s_)d$z72).D$WnGPx/0BmnkbHJp~_B9  $1Rx.6+qTN.ev]}$=4 X');

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
