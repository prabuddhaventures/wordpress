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
define('DB_NAME', 'a5693337_buddha');
//define('DB_NAME', 'enukes_prabuddha');
//define('DB_NAME', 'enukes_prabuddha_new');

/** MySQL database username */
define('DB_USER', 'admin');
//define('DB_USER', 'enukes_prabuddha');
//define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');
//define('DB_PASSWORD', 'prabuddha');
//define('DB_PASSWORD', '');
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
define('AUTH_KEY',         'Q)j-P7us;P|3gl8qp#&Ji)bt|.HDMcSTC.3nbE(SI KZcWHqtqx}WH7Bog)^z-8^');
define('SECURE_AUTH_KEY',  'iw){CL>qXU^<:L-`H&%+}dHKyYw//k{kmN{bq_rhp#j.N%$8%ilwwBTpuuSsxa:e');
define('LOGGED_IN_KEY',    '9QjC=t[)@wd$U@4|WUUH_EL&)u|Pp3/in;3?K/+=QD oP%Gj}r!)<iB[pQuwMHIl');
define('NONCE_KEY',        'BqH}b+]+d`g&nWs&-=#WW96--o2sO2QV3s|F-p6T_+GH4+AQ%Sj,-$L)Cqb7)kd^');
define('AUTH_SALT',        'Aw<ds]1L5L||9+9|-gr3^,kbdH< JzY.RJ vdal+~Kkf%Q-Ra3Ecg{IQ`=Dy*ZHP');
define('SECURE_AUTH_SALT', '66N(72_!S<dxNu^]#x&5jm aaaZ^4g``g0=*T/E0RTNuaPqx%28s8rylrc-mmTCF');
define('LOGGED_IN_SALT',   'bpC~weci>}~)]AUl8U7=:$-43y+@_hWz%(7_7nFs5k%ZM$ gP/xml33l[B+G1$!c');
define('NONCE_SALT',       'xs#ACmz>2cY~.c=Z3YZ+,[/lh(D9I|<0Q|;g~XulZ4:Na{R,`cJ$<gDW+U<+)XVV');

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
