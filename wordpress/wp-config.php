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
define('DB_NAME', 'qrtestewp');

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
define('AUTH_KEY',         '_dBcJRJ++KL>;:SktNJ0]a-MH~R4SUkk}R+NWRSs&OmM}nb2B+J-NLvw+lA$Z#Al');
define('SECURE_AUTH_KEY',  'blLHn6@D<2(>D-l^Wb|:9zb}-!~VF_<iqfB}&J(xqL -6%Ea Uxg`Rmf<%9dKe~C');
define('LOGGED_IN_KEY',    '94[Z(t &mq9!%ib7=&-#zT{aKZLWO@^G9K[![|j-r55_B-@1@TBdGx9vOJj;o}{Z');
define('NONCE_KEY',        'tW<N/5#+ m|p!RLVw[j0qWo.P9%wQPD8Lx|E<[a+Ogey8MOWjk#?vL&8iegk+Xf5');
define('AUTH_SALT',        '[_]y;z%wFFLs]ty(~-6|mhc=;k4.(zQKTQM=R89$uEfhzKCYwkp1:o;g&0gw|~`X');
define('SECURE_AUTH_SALT', '}`{q*S49jG*})70kT[a3tR0h7/YZo!qOB}%#M=K9;:1eQk sMg@)d3 J$|E)w$Cs');
define('LOGGED_IN_SALT',   '>[GX;Lg{1lPyEMGr~f7c1Azh6oB_D{*bewHi<#1CEW4o7mf:{El-K588m/AvI6`o');
define('NONCE_SALT',       'n2S==U&7.W`G.# VwUh:A+s/|(gzGe`SJ;+}P7qz1i=J3} !{a%jty?.!xr/lk%*');

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
