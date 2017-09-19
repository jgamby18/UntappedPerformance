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
define('DB_NAME', 'Untapped Performance');

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
define('AUTH_KEY',         'G|@Y>}NkSwUv+lnewSDo.TIoS,ytYA&Gb;ju/F <)m<NJlpMHP{3.vTX:mB)SDHs');
define('SECURE_AUTH_KEY',  'y<&%Fy%l8Ov+xXw-@|K(R1+dBI)YqX<YxS+%KX<kp+k^X)Ds}6^m76=tJ@[qC4=q');
define('LOGGED_IN_KEY',    '#/th,lL[#EX7~Mvw=A@fUS=CW+bj  +fY;x&!>TY7jq6`,?E`Pv39?w|+}e)-~:h');
define('NONCE_KEY',        'N6~%c.|FuP7?kGwmGL-<?gS_mkn$OPG=-@]?ey})H}JE?q_&{V[34LmJ)~.Qe]<>');
define('AUTH_SALT',        'i6}mJ=&.xo?s8CC%#ep7sP3wBupM@:Oz6,or1/^m[1lo/@2M9C5)FWQ?]7|CLG2(');
define('SECURE_AUTH_SALT', 'huxsucn!LI#wf@pJ}PIs!top$wMh-<7{>+A77 `HDB-`s $`E~I_&l]%,8G92+Yp');
define('LOGGED_IN_SALT',   'aPQvU%p-8iz{<, <u;?c^s9S2:1vMD:!a&E5QbC^ 4`n-c5+GldNRdu]gNAnw,G;');
define('NONCE_SALT',       'Aqm8bJ5r,.XOB5^073M]#&ad:_Ol_kc4O(]ghRh0;]v65sHp(<D2P:J]*RBOoNhL');

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
