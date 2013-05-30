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
define('DB_NAME', 'mandiric_waske');

/** MySQL database username */
define('DB_USER', 'mandiric_waske');

/** MySQL database password */
define('DB_PASSWORD', 'qwerty2736');

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
define('AUTH_KEY',         'r,^7Ww]=s/.*L20n_jIt&IIFKk--O#UJ-zWU5wl(;F,x-l+i9+Kx|c`Ou;.)m]`A');
define('SECURE_AUTH_KEY',  '=&m.Z:-$I@h,mHJ6W-= jlSTEr>lUHTMw!AQcWVWqH;K_4dXZN|#G+;Nnf[!A=e%');
define('LOGGED_IN_KEY',    ':H#2XLH(V|Vm.H!];Iq)`t<%o+2- *eX$e7~pf|7!Z[&^Z2hb`v%=B~|iQNRO,ka');
define('NONCE_KEY',        ' *k*)W(?*zyzL[cMrP-qNN_eDYXD*Y|CT-Q<mwAnYy/N1v>fz4mlP{`([2zfH Ab');
define('AUTH_SALT',        '.FjU6iq=-iobE(%Bjh[mmPdD>S?CRf]J^<?#xWUi#gsi]B9bZ#fF--N<[zTq %Ia');
define('SECURE_AUTH_SALT', 'T`6X+u|-Zsj8|F r9G1WkIDgC1KOpj?_CG*Cb5|++5G;}C*F>(MfSQtbw}T3~|WX');
define('LOGGED_IN_SALT',   '-[&yz*43]Vw:|< &XHVXn|eu,O}z<JM&2grC%q;$L5TMj;pitqi22X {V63[{jA;');
define('NONCE_SALT',       '6 [L_RPe0/6T5Y!i9tv<HEjL,;-r:P,H}O3a#=,n^4e`hST7!UUEoT/`3CfLU,gv');

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
