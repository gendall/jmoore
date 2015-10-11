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
define('DB_NAME', 'jmoore_wp');

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
define('AUTH_KEY',         '+_eEA=sTk-WaIGBB&ehTa,C|zdE}wDnpVYt7[%Y|LFXDGCt4ae|T@Q1S;pmCtx)K');
define('SECURE_AUTH_KEY',  '<<eYWN0V<I/Ye O8I/zSYW_dY}N^oPVj*GvOM.gv1|!*v/xGimv=8xD,1qx|#j!z');
define('LOGGED_IN_KEY',    '|nihdY=8m)IL^prl@=OsfQwJ#jpDgjvMDgqgd}`o+5ZyoHn^FpOC`P!>TPD!C[8i');
define('NONCE_KEY',        'O{a<f6-,z%a.gAE!0DrG<_Lrb.wAy(p)F0;mE/>H)rD{SZhmUsulYT:nb+2Q}V+a');
define('AUTH_SALT',        ',M~36mY%4N~EAG$v6rD&PoetJF[Bp+bcGM{e0ug[*f#;WU<1!-f{;DroM7/wm)f*');
define('SECURE_AUTH_SALT', 'stgvu`9|#Rv[E?kiI$IbLw>7tB534+6</5nhA=Rmg<q<|jO@PfOiX.^37/Kn.E!t');
define('LOGGED_IN_SALT',   'Nkx9Z*6|]}G]A18{o8EjhDH[WG6FsY@}~(T]N62f{I~5WeFPZE(hhMnJsO5+K0ER');
define('NONCE_SALT',       'i_q;~<v%?-mL*#bb*4kRGVn5#>y=2Df$ddIlXSa|2Nv&eJeaHfnp4o&2_MHg|G! ');

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
