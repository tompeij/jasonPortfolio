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
define('DB_NAME', 'jasonPortfolio');

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
define('AUTH_KEY',         ';9U1/xt8=&M%FJqotYCA6mZJ@}wpT13519HX:c|7P~fgKkUekq)G*Dt@oGlwyzFS');
define('SECURE_AUTH_KEY',  'X(g5j/246L_NI:7+*Y(RA1kjJK,k?/)|ETp[hExt#Au552 WJA+h|?t x^1VcW0i');
define('LOGGED_IN_KEY',    'reU;o`]i %V;U>Q1!rHkj)l|Zydj%TZl,cqCyf$, ^*,9-9g!<MJq}?j*;u//;~~');
define('NONCE_KEY',        '1^vJ$N8E`!vPXH]cQ~D8Tc-^)sO]0#.]5N`=ej^]0}xs!>)tjhlfqUrGSWtxa+SL');
define('AUTH_SALT',        'cX*iKxI$-PdMO*A0TL_;Aw1J}AK4oFqOUuNlz;wXZC6a+@rIJMB(c4 *i<t+g?-=');
define('SECURE_AUTH_SALT', 'w-u:XDR>FG-;?85Y+3?Ej:jJs(b.W@c=.b2R9:FS-K*^#sK/G1+ngP; 6`1pv%Ce');
define('LOGGED_IN_SALT',   'M([YoDwQHV>:L )bJBJ7,isOPxWQ-aTLd2tV7;`QY#MTM(Pz7H*$&tfQ6#CDintZ');
define('NONCE_SALT',       'mm1-$3CKkR%fw@4f%r;zJK{SBEuR~29qDRcv!VL<stfvZX.Y~PPhm2GNTTScBaPK');

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
