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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/mnt/storage/Paul/Developer/Web/AbsolutePressure/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'absolute_pressure');

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
define('AUTH_KEY',         'Un f#fR-|uo+2_Of{wMF,W(.}Nd.O/eT[7Gl=9+cniP=*z4or](4W|/qD)O|G?2>');
define('SECURE_AUTH_KEY',  'Bco-H,#4|qWV)h>)|FG[1xLUuQ#&~_;r|n[q ?|k*PUraK]G(UZez-$mJ*tiABAQ');
define('LOGGED_IN_KEY',    '8^|,D<%t>`S_DhR-VY49C 3S1b=hJ~?AkJ,^-(-%<-0g8]>$AYN#)#)VsG&:ZsBz');
define('NONCE_KEY',        'K{LnL)tKzOUPV`!lQR%LOe(ZsAPsGXbRH]&+K6[zU dv>nI/;HP{1}MH_X4_ n c');
define('AUTH_SALT',        'J<k03}f_V,GQ0S1Rm:98`Lu;OQM$gv(8v I;+qw++i%M6<(~IL0q|4-umW+%`3dD');
define('SECURE_AUTH_SALT', 'kIu)^Nehp:-B-/L/2TQ.$q#ZEv}X[QU;Day[t5`q6~e_4mx*tBll%=&dZsy|Y;n[');
define('LOGGED_IN_SALT',   'zW]I-uLKR[#}H~ <;*:.~vl[MX9cL?eqs~;bpUp=WhV/#a&+Ric9cM{!GJe5(Y l');
define('NONCE_SALT',       'H!jAHAPnzknd/FPd1N|dWwF<<avDdZ*9#D;_$Pe[p&ymEYil~fdu[+-?@0c*H9i5');

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
