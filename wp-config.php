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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'canary' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';w8Vgck8#y_g8%S;d,gW*)DO@gz`TcV%#g!zrtOvYzVsQGd!CE2hGNjVjf+0n=.T' );
define( 'SECURE_AUTH_KEY',  'Dp(&iqM0?ZHQ(b}2Lf]eNv?~aQ*Um+r,QG96sK,?qjaI@D;-Tr}ln]ez&l2jkd[q' );
define( 'LOGGED_IN_KEY',    'VW&Hx;7(%b8Mvd,BXY7z<WAwO14h/anlrKA=xpek:U97TX3y~SC2<;%}^X&e0gA4' );
define( 'NONCE_KEY',        'XHr4q!yGNHWGL<$tT1EX$~nDyU1&8NXo_-+o<i]8 Als%ujE!|WB{Mq~Oq$!uIq2' );
define( 'AUTH_SALT',        'b Qz1{uQKp9tM4}u;[RyjI|qPijasS[8B$T.QjSCP(ER&pzl8]#TdUicd-r!AsNB' );
define( 'SECURE_AUTH_SALT', '&;XP:WT{9uE.)jLeMiHVFef?3qgeT+l+kJ(_Fs|M`YN<mD$9IIY<2G`+WQVs|3aO' );
define( 'LOGGED_IN_SALT',   'FimaoQOI1fv2u8VT=_|qSf+)pFeQo#iE$T9+@y e8e/)AU.! _Kp{5;}EC,m)SKo' );
define( 'NONCE_SALT',       '<l.NQa8uw$KHUA#4:g[GQQH90Lf8lz*x&<5WlgAu=:U=/B]KRKtL#!(|%2ks*>EE' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
