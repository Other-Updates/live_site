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
define('DB_NAME', 'cof2fsol_siTe2021');

/** MySQL database username */
define('DB_USER', 'cof2fsol_SA2021');

/** MySQL database password */
define('DB_PASSWORD', 'I~*{]$c0Y6uZ');

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
define('AUTH_KEY',         'q&c=g(r18KdJ!F36P3z7777d06<ZZAg]juKz%T<q* K>t;O_S|n+Yh<k#|_R~6=RG@^#');
define('SECURE_AUTH_KEY',  '.X=.GRSx5~b{Xi5~7777{%PeRm[hIlcw/F3Q$bnl,dtb$Vk:tr2t=tqhG8_v!+2Hv]]');
define('LOGGED_IN_KEY',    'lx/]ETJ>5&yIS7j?,7777z=5-uT3B+ov~St7>4a,2D7@p>9$VMce~I&|5zft#2Ie((t[');
define('NONCE_KEY',        's*Z6.73~AEb<3#t,7777W4ce_bLo]<B4KT?FtW^eU3D8NCYur*Q.V^4;f[mRhw2-`s7+');
define('AUTH_SALT',        '3,k98k?`XBW,9dp$7777*5dCF$?9+f=7h2BQ>l<=f;qEgCjIWTbp-Z<%X~/c4(?lIPXM');
define('SECURE_AUTH_SALT', 'W`@699u$AEF!5v-Rc02}7777so%HsQ2K-oc1rOSZ?ztZ 2LTnQH^%SEjKBn,:X&g;0z6');
define('LOGGED_IN_SALT',   '4V+/JKWrY[)HzEUX,3!7777mD3&Mx@3A&~Xawt0^uI/%o2RL0+X=Qg{B6p?s{% luaB^');
define('NONCE_SALT',       'g0wjidSFbFYD1Z*&rd+4/7777QJ$;~@bdQTP:A1NF_q,GSj4J*Fd2n-Ij)/%_w>|`yWO');

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
