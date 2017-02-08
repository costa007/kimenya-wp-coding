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
define('DB_NAME', 'kimenya');

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
define('AUTH_KEY',         '%^R(2vART+/A~Uv<3yl7b)pv9@AW`uIOG5{x@stC?YD~xuUcD*Bz)E_m6!%Zo^4;');
define('SECURE_AUTH_KEY',  'C^goT>q*t{7AFF6veqGYUsd;dT$7dLL-cWd.4[MO{k1F0y#U08r>sF2xo.`N]9*s');
define('LOGGED_IN_KEY',    '$Vl}#@Lj[S]a7K{AuY MvgQ$4?VUZ(yD:C<^]YYX3bxu:szCBsCXX-p6RZy3Veh2');
define('NONCE_KEY',        '|4g:a3#GU&FYqF8P=,R+C;O)n:4u!SNTIZ)%iYIlhPt,l, /?n{lIFfB&!#NRVSC');
define('AUTH_SALT',        '~CBpQrZ>a#LV8QLi?,MZLFvYBvJS<]gN*pYK^#@LdB2j%( :_1;iUB0C*g^eGA)l');
define('SECURE_AUTH_SALT', 'I5=pclJWtF~7pQA{o^lPC0 *.lB;X,:+(DQB5`,n$~cDCqB52v?J!Tftm9&^n!}A');
define('LOGGED_IN_SALT',   'fPQH`-DetCkO;~AippW#l+K#/(Z}Dusv[,rplcK4k/T/EA{zh-jVN[mZfN+,#Evc');
define('NONCE_SALT',       'Q=~W|ySn6cT!5Wt @(kaS0wAO]QrPRDt|^bI@..W_=,6mem5I0xWd*bIoJw#4?Gp');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
