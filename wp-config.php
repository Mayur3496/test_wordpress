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
define('DB_NAME', 'test_git_mayur');

/** MySQL database username */
define('DB_USER', 'root');1

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
define('AUTH_KEY',         'G+R[dr^MqL=*ifh[O#iT@%!uS)}}5l~|2NMwyEt%@=M`xMHso58LF$84,gu<lWww');
define('SECURE_AUTH_KEY',  'OJcMKF(z aiK[5L?0>CLJrx(>qwOsd!G$2]AE6dIch,v`Gj4OX,kv|aYL^Qlp(CQ');
define('LOGGED_IN_KEY',    '*@5w?|Hg7K .kuvXqrZKFfjZ3bx2I$^`!nQ9C:{8y0Q,WRb-sB+iFyV2LJK2jB?^');
define('NONCE_KEY',        '!8||Ic:5a,cc(_vvyaRrx+j:@[U}_Qt#T#<kUz`:o{D!B29Tv&H%,kQ[SL duEB;');
define('AUTH_SALT',        'G4Bx`6T=.$~fF?6M#})?lJku@.Bt~#cM0E}G-jqh>3+9vM8RNA>L1)/N!Bcm{2A|');
define('SECURE_AUTH_SALT', 'Hs/;?uqUXtPX_/Nv6DT5$`n?f9aq6K=*uy{Uh]bnuGGb:>d%>Lo=#pNcoa*RV747');
define('LOGGED_IN_SALT',   'pC->GUwYAvfj_G7;Ek<J5b~[F14R;ElU^{6O+C7&I>12]. <hWeF ^}XhB1iU*Ee');
define('NONCE_SALT',       'l7{S_X!mTfUq/(NJRnS0*Xg:}H|<98h$&!7w8~t^7t:&kV$LCkPmnz.kYWQ}5QZ)');

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
