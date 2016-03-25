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
define('DB_NAME', 'jrwordpress');

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
define('AUTH_KEY',         '@t*H`P:YVkbHj[Hh@6c>[`EAy6a#m@wvP(}7qM@tw&5Rn{*fr@zq+eD?p?lIvR4R');
define('SECURE_AUTH_KEY',  's4#EF`$tbG~y7acs*)c?Iq3X!?JK,~0iZ=9$Rykfjcg][KjX;,0^ A)0Fs1ue(dJ');
define('LOGGED_IN_KEY',    'X$/<}+U-Z,(,)#GqY1|=a,D)Np%ulOBb[hbHCWn|LHG1IJ~/CO@|DBhRe,ym4&Rm');
define('NONCE_KEY',        '?n%EZ]E0 =$@-1x REX9n.52N/{DHPiiHy2X7~R}(NAV<&w=Xgi}vx^8p_-~56YE');
define('AUTH_SALT',        'gGB(x<myJkWrc6c&tzrZX;cjYQ|?h607/o/P`N3=`(;GSXg7hFZk77w-m{_exk4S');
define('SECURE_AUTH_SALT', ':93jvU!!!]RI]v:Xr(]^lp<lf2e]OTE*|06+-p|XcF5Xt{vzU-)ZG_c,?EFj#~34');
define('LOGGED_IN_SALT',   'a-+V{,!qc?E6bl)i,h80^u*,^wD1-<p+}K6ik|#S!J=Y:x%S+,f(AGN+DIi|}9y]');
define('NONCE_SALT',       'Cu,Ig527U50s~V:}4;^@4mQ2<;{]f.oWP.aAM7?)AHeqr58|Bu%l:_@)V0{HD>0v');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
