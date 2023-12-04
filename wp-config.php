<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '5fchurch_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '85}X|J~}gU*TE]ZfvhmNRzrcbHvmk>Ecc}leKC3//%VaA&J7#/Hw#X[|-$<da=}R' );
define( 'SECURE_AUTH_KEY',  '2$yLIhnf{<?0w0S/W@!~#zM-R)fJOLxDidFQiz{+g<^OLq-H7P[_cO$#@es9#pci' );
define( 'LOGGED_IN_KEY',    'zUz2G$v>842llgUK<qp<~uwA2Qz68n3|?em#8aEsz)k`N~%aXlbd)P$O}99kR5v+' );
define( 'NONCE_KEY',        '-F-w|Z*t8o._BsWw;@6m[AtV;3#Ewm_#vN;,hSmRxT[U&y3Zze9rTjI(g)oGJ1pF' );
define( 'AUTH_SALT',        'y>~:VaN<7Q)5?Q*1Oo&grq@!x|v2Gx HlrC;ZAqL~Zhe/MD:qaQS$r|Th.VW!=?e' );
define( 'SECURE_AUTH_SALT', '2V!OwpF$;MQ2:$LIbF:ZFSRd_~^~Ng{?/(L8$9$KbO0lrpN}/.wmM7jZg&+%{*3q' );
define( 'LOGGED_IN_SALT',   '.7(ln<.|Npm+IzJHt/PZt].tWO]k1]g~E6w{Q5o{ uBK3~)<wW`Q!d;&j(!kNcoJ' );
define( 'NONCE_SALT',       'cd0,>#OA[xh/l2Ea*fA&YRvjj6jkpFm9n0&d6G]zAzs(rE[jIek/kIl6L4+o!BWY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
