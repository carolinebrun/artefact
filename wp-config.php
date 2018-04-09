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
define('DB_NAME', 'carolineaubdd');

/** MySQL database username */
define('DB_USER', 'carolineaubdd');

/** MySQL database password */
define('DB_PASSWORD', 'Uqtrhgr87');

/** MySQL hostname */
define('DB_HOST', 'carolineaubdd.mysql.db');

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
define('AUTH_KEY',         ',jmAINgh#8-|fx)@{sC.TZ1|d|^EodzONkt(=4yN5H#qY4H{EwKFW5d7cx57~,9(');
define('SECURE_AUTH_KEY',  '|A-r!xH-g/O)0txr;@)G##K@Hsjkn*<4e}ko9zO@;p1l=pWvHG3c53APmia:+YTe');
define('LOGGED_IN_KEY',    'l(%<fFs??Usf,9>Ui8aDUv*0G9[27b0oy}OkKD*nd!d<P5QE[kQM=CDF-hg9C.t<');
define('NONCE_KEY',        'or:N?dBUkl`O/Ld[DDYY!T%mrf$POe1;e2)6;Sm49Qf.Q9XeQ2)Y<B)gO>ZR|pY5');
define('AUTH_SALT',        'vM8U}cUl)p/@@$eLMG~WkH[=pJs*8:(X6N.06blJ~y>HipuLMY_+BKU.?.f;Yrk0');
define('SECURE_AUTH_SALT', 'Mq^M9AkVGjOP8&IXejQX<ZQe~7ACG,fk/c*-IKahfO8)^dBp#QRyPthxf+GiQIMF');
define('LOGGED_IN_SALT',   '$~ls_V@iyXi{r{{j,5rkCNL[~.?6L;wT7=nN;dh>(meT_C3SKN~g2LFh:3{YU.k-');
define('NONCE_SALT',       '+RzPD?#xf=&EWrp`K5M+m:y[6c&hA?6?a8+Q70#!3QnYc:HeqPln`-C=S?N+}2f&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'art_bc_';

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
