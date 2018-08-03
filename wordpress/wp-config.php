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
define('DB_NAME', 'whc-nature');

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
define('AUTH_KEY',         'LiGSS^?vkf<o=C*w>!YG%iPN/L(@?eL&8NdMm *~^=U!Tf=vK~LFq/hV_C!7!Y:m');
define('SECURE_AUTH_KEY',  '&EbiJ;mV^DJc3hohP7^d&J27dv~.w:YJn`L.~XJ[IZZ~a[:-dDkP4_g$VaZR=}w<');
define('LOGGED_IN_KEY',    '?_(kC(y&sA(=sn=bmF..AMqyeq(F8GY?9:a{uvC>NC@D; 5mc3Z6`W3rsm.oim$G');
define('NONCE_KEY',        'YD].[!;~|z{Qj[P/VHBL80hk3;)3#V;g&4k@V201ppXgrOH=}A-u>#O9otONO[(@');
define('AUTH_SALT',        'DGM=m dL(-,y.v_vhg9[{xn2*Ej?wG*w&]IA_KF/Vv=Cb^K=/c&PG!q7fJFn|S8B');
define('SECURE_AUTH_SALT', '8pcyDhpws)E.e~m7R}KPRpR[ls+5*<eNzd3ZXU,;,Pq*%V5qge#Im#+x[|#`aoCT');
define('LOGGED_IN_SALT',   '4i3(gFEf!ek|vCwu8eoO}jr(P<Zqjc#rXb{~S}d$^:UNUd})!LRnx-pMd2=*Ec:M');
define('NONCE_SALT',       'n6$522.#dP}_7cvx*63ucQFd.|pqSvlp!$1)CQ}7[k)4bK@wc+K?j~<KJ&,%dO_x');

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
