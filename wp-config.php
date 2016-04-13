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
define('AUTH_KEY',         'c*>@0+K1J_)E<s2`nf,*,26ASh/d;28az :1{*D<rml+9M]&x!E]Vq~@79u64_M8');
define('SECURE_AUTH_KEY',  'yDd}knn66lt(~L )gO#{W~|^-)U3Vbw+Yv3K5lI]Xm}}ODE|@^;4lvLn5MPOPaj0');
define('LOGGED_IN_KEY',    'L}hDm{|l#:F{kq}o#Hs@cuwh$&9D.T=-3_CX>X+4:ev-6Qz@Fq->zCj][=SXDqh1');
define('NONCE_KEY',        '>|H Rj-MuE^t-J hhqQ-S9. Z>#R?DH.s_gpG[g~ {_|^s^n{g#[n?`o|d@XeT#i');
define('AUTH_SALT',        '=Kr!TH+fa/$yk|r^<&E^_AsP2ksXG+`-6vpe2k5Kt*5pM@&]L,%W8p#KEl>UI+q|');
define('SECURE_AUTH_SALT', 'da9lR@1dw0D8_pZ|%^`pj|-} b,VivYw;|1>=nHDIs1} y WvT>|^U(;d<b/_%.g');
define('LOGGED_IN_SALT',   'CCi%e~mm1FHR*=O][6ecd$.NKyi7RU#9b}~U|su>3q5l.mS$?,0NiV)??yaRg^vy');
define('NONCE_SALT',       'oViEV;1;UO{zTJGG8`rGxALsvR96PTL#Xx?J*|^,V5%>FdP(`chD6E!TsP0nPKS8');

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
