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
define('DB_NAME', 'addinhos_wp');

/** MySQL database username */
define('DB_USER', 'addinhos_admin');

/** MySQL database password */
define('DB_PASSWORD', 'U569WJALUR');

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
define('AUTH_KEY',         'Xi`#Ke!Ll1uX(vVD)b<|?qU]An<1](go8BhaU<pV8giPq[bs_QKz?SBa[|e in);');
define('SECURE_AUTH_KEY',  '?ID=B6BLls2898:dx)Z_JaD`Ny8 S$B(#DLuQM/I7H3_BLhw?!Hsq.bQC.Ar62fi');
define('LOGGED_IN_KEY',    'xmV_UNgPQ (Y<iEq/O:NYutiSkw2O5|T<hpL#>:1Qp3LAbQnD81X*qGMb]Syz_-X');
define('NONCE_KEY',        'PeVBCk<%JUAy!KX)((MJ53)<nQg#j!4 )`8v5XQ,>I:FgB6VLe9:gG~p::!*2(p0');
define('AUTH_SALT',        '~U`ZXYm7[.[Kf#%NdRzQ<`7pToHQeOYFL;4oEsb!Ho!Pw!MiwOUmLfz$<lSG!z0U');
define('SECURE_AUTH_SALT', 'K3.X[g:RaJ+Am^I, ^+VG@z{mxPcv4p%9N@RlcY*<4DUZi(*-mBoGbJ1t,Y.Ugfq');
define('LOGGED_IN_SALT',   '{S(8Dz2h8|Bm2@2dA2Z09QHE^_V>K=WJf.`(=35fwh9jfQ/-g,Xg qmio1C^2S[*');
define('NONCE_SALT',       'DcaABJV.[glz=|uNP6KBa858=HEtv7{daZhB1Urm~n_ 31S8vFi$14 ISCG(Z3sK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dh_';

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
