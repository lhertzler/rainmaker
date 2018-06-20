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
define('DB_NAME', 'rainmaker');

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
define('AUTH_KEY',         '`33}*OLy^YFR(4 fBL6Wf*OAcF2w+-#pGDCKs!Wn6#<:G5qW^8H)A{v>JGif[fAq');
define('SECURE_AUTH_KEY',  '^<6*2I@x9B<@zqnv.}[,b 7%FTSQ8q{^{=ME6OZb]=gDEpSG()10P@X,OtRgwLF$');
define('LOGGED_IN_KEY',    '#Hm7,}:E}v}wX2:H2sF/rkF+9Jc9kJ+ELy;7M@4i31mAH*Tv)?X.3zD27zdKjTVD');
define('NONCE_KEY',        'O5r64w+gQx#S?> ]cq&0m~W$uB(>JR?6d;h*!],eonN@m6m,i$=z74Od^kF+kJss');
define('AUTH_SALT',        'Vk^Sw8I^@eQ}L^[|[bea}t~5EO+%E8uOW-gm`fIb&)Q[FXrEJ:C-w it|3^F/{PU');
define('SECURE_AUTH_SALT', '`[G@y5)epJeLfK*~!J{813c&KP:O<RqYFM{^+#o98i2z.IhgbzKpt|0ZKl>?}{7:');
define('LOGGED_IN_SALT',   'ytR?*T*gIvLu9ESRa>v$];(U]uO50W^L]oIW$[4QSalEfkB@^H/+g`ym6%p|fTPs');
define('NONCE_SALT',       'ooz{90Q6(jEk0e#hpiL.OHHdCf7QuqH)zADpk;`-xKj)7KC/ _0gy3HS3B]sH~y/');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
