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
define('DB_NAME', 'db_chemical');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'YyJg0v2w}7eAL;p KABQ@>8MMN[qBicd>Rlup~..3vh|c2&>4PUvkE%v_7dF9u^x');
define('SECURE_AUTH_KEY',  '?=M+|jh,~~]tEYr-WW!va*(R6x1l+EDHZjQ+E3X7Q~ZK.@`yd`*%[^sybSU+5_P)');
define('LOGGED_IN_KEY',    '#T,bSWe-soFu0~JBo^GJQE2^NgBlvCPvJ[70QZ{{fOtbg?8:}1PU_)jLhW2ttgaN');
define('NONCE_KEY',        '!I |d!8VukDaJh)ET`rTob/[n8!>O+^Z5P}MoDwDT9 }m;HA%uOJk$s*~n;:QW<N');
define('AUTH_SALT',        'Qp9itu5(0Iw+gjE0MG`m`<v/rHZ*f/FpZ/a8Q7(KK%&6,ij]O>`fc?V.]uG.^l(V');
define('SECURE_AUTH_SALT', '[feG+|8tx2Zcf;L`JfKVQ^gbWolbo={aPfjCXbLn#FAH>|(!#i]JsFq kpYhiK!$');
define('LOGGED_IN_SALT',   '&nac)Fei+=aEK--<[&yM6KAmi{1$D|Gq1@IujIIisQbopHaF3w:9]3-#oF0Rw%yT');
define('NONCE_SALT',       'B>(1%.JOu!71RLkHYT8J+sgfASR+347^|A{T`Z:$:KfbA&L5cbbzV-W?Pj2C6R%a');

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