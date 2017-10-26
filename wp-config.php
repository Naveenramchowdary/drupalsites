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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'naveen');

/** MySQL database password */
define('DB_PASSWORD', 'himaNaveen@143');

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
define('AUTH_KEY',         'W.l5!p|nKMe>4P.F2T,:5}.=,.+)Z)yMK5F@&Xi{kbVY(ww-]8;<o|];#}zI1&&g');
define('SECURE_AUTH_KEY',  'KS{33q+$wtk1 (P3sZxY|@BiK@|d~9*Z-w:QZ,W+=g)+EO7B8Tpkqf8p,^]}Pu|P');
define('LOGGED_IN_KEY',    '5BEJ7}BkZ+I -#Fr<5D=0^EWJGLYC_xUp}7:A4^#6M`r/neC8%#H:4aG0H&/#5+U');
define('NONCE_KEY',        '&I/77++|VzwjW%twp-xJ!*9C3I|*|L xwP[8cADNNBMWu2>&.%+M_(FFjf`i04Db');
define('AUTH_SALT',        'p<.qJkylGa=mm|T]E%O5hS;hQP+G=xL1g;Y`}nwzH7gXn}b)t:#09!@aMKFa3.+B');
define('SECURE_AUTH_SALT', 'jl+sv}x_jhN@vm6wWF4>X)fhB=]zAdTekyrGyh-OTn3pcvBTI^&R<}u1S+Cp+Xgk');
define('LOGGED_IN_SALT',   '?wDNwT+{1)f(t!&+QZvwv-</>6D`qHUu07U;sieUX]xual!%K?h/(.Nz?4I=s>K-');
define('NONCE_SALT',       'Xt=#7%M:M:9-_BO]<z(R:xJM.Nq,Ola:+GODF`mJ) c,7*Lx]+(cxG.U=uT&,3zx');

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
