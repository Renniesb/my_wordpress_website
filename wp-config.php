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
define('DB_NAME', 'renniewebcreations');

/** MySQL database username */
define('DB_USER', 'rennpress');

/** MySQL database password */
define('DB_PASSWORD', 'uZ4jRASA4M4bd3fY');

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
define('AUTH_KEY',         '1+!|bPFMil[^FY|9&Rqi|4y<]:M*`r-a(Vc)G3lP|~L+y3t%P.u|./t2{<pvy%j&');
define('SECURE_AUTH_KEY',  '}os:iAN/6vkV+-H71QeV@0%w&5xY7e~QdAQUM~DL]+j-zY7yN%Xj%1{;kEeL5[}`');
define('LOGGED_IN_KEY',    'hIQ-&LR(=780{^4U1-+b6*6Z/A.T|N3I<M%aZlTl!+.>)#l9;RJz2 &U-/G SwVj');
define('NONCE_KEY',        '^<$?%h4[,muS26Nn*YE(>mG?(>|S{e-5d:)UI=z)ELTo,$;kyl!8=*RYjBGr+5S!');
define('AUTH_SALT',        ';=P_*N_Edqg;M-agy<WgM3N+IX5RF$~a[Y9X0mV|l$|IMbUZ~@Sblc0Z/)g-poe8');
define('SECURE_AUTH_SALT', 'S)p]h-+|- a9mi&eGg]]7vo|,&(;/]]|r+3S59cOq:)k3^Z 3t_loLxVnbi}W`B.');
define('LOGGED_IN_SALT',   '1xf6ym/81IIjbjC)jI7T~Z_/*UP@GG&w;oG)xb&D#n<d5dhSA}fK^,/O(R=/p8f,');
define('NONCE_SALT',       'bZ2e3Tn6@7q3X:9E|{U#?(,8Ag-&jkww:pJ!Z/**xJ/Jv578!|lJZh.v73/9T0`@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbrb_';

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
