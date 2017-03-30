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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'h^CN5*}Y}vPO#(DH;w#hg)f@FATFF&{Mk$t^m<&ss^X-hP?3ZaFOhHU!ORci u<*');
define('SECURE_AUTH_KEY',  'S6Q<PM 1 v-^`syMq[f.[,QMBs!:Xu*@DP2{[_bB/B5l[`8##YBh.FK/AQLU(99l');
define('LOGGED_IN_KEY',    ',Ab47#IFL=e{Zq^x5ihHLT8i>75@#wH~ra-+}dT1iXE 1+~SP1n2o}K9qI8=:^Mh');
define('NONCE_KEY',        '^5:WFu54#{|Z,*Xw0WX@hg;}3b)y3{-/Ayk@?_;:.DU0Rw5@N]8^Au.Z(xg,9N4L');
define('AUTH_SALT',        '#)95x#hc/bo;<]qUsgly)+l4<6-V15L5Cbj!oI|k>PE2xIN9E0Bi`6^^>^)jU7q?');
define('SECURE_AUTH_SALT', 'A+~nUb0eaph/GkXI~GE|}]~?@:H*gN07UVty`qTM(jC(MsW]N4V0{Aw?)7|XT3sF');
define('LOGGED_IN_SALT',   '3@K/2;R|UPvzk)QbM`RV/&AF#tMmiIC{Uh6EjD,~+~Vg(|ICg #2A>@07m.4zvIj');
define('NONCE_SALT',       ']t=lNA+GBNC$UI1P_qdW1fe.j^$BI;(]Q*7Mb&N~=:.sZ:y;6VCav(BZ%@kzTJ;e');

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
