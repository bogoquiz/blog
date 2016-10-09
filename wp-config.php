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
define('DB_NAME', 'wpt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '0yYQ5mJ6ag, zO+?/T-SZpG3!U8zD^LMq?DBdr`7QMV&?CTAZg|8&yw5S51co8Gn');
define('SECURE_AUTH_KEY',  'u|y9{bk=C|~{ M=itW|cW/3&LamLz9_^J~p#aZh5([v`q{cS9[en8O!tY9H%mw &');
define('LOGGED_IN_KEY',    'yXTW|G:8kmAF.UMjpu;reUc{c _V*bYFy n]_a0;?rC@Q5BzD>QNQXPZ3#hecg>q');
define('NONCE_KEY',        'S4)vdva&0*4}q&4%8T|`73ki+7c)X`e}sgeY^h<5Vtj}h-Rjv@%X6I~w8K~aT-Pk');
define('AUTH_SALT',        '8zruSPqU8cxe*ln*E3VPbQ$,E`/`]S1FI*<QTm7p!6D;~*j+RnSPeNg]&x+Rn8/A');
define('SECURE_AUTH_SALT', 'j/wYnmK!RtEYsB)=][yhHey?tyb*g:4Z1:[I22J(w~+4krd%o8K;mS,hBL2U+tp:');
define('LOGGED_IN_SALT',   '&6/)6P!cntFU=]CT,6^7LT-2qu[lw0EWpR6k|&SF~&:&2/&tVYeu%( 6 h% AUg0');
define('NONCE_SALT',       'TCB=f=![yTp/,|pNT~jY?o-<J@qIoM(8&9-K#xe3RE`Qd3(:ULa)qw5|oa>Jl?Do');

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
