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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '/$l#COm>tf^?o182+8)`+ZgtliP=Ro4XV1A`{)PaZMa5rYhr?GsIhO<?}D/~QqnY');
define('SECURE_AUTH_KEY',  '-~b.^?][0Thbi9mG.%$b ]N}#2pa$e{!%TL4-(8l^Wwg:vYpc$4}wn|uUrd:M.Lg');
define('LOGGED_IN_KEY',    '{|6H)~iHH8_tN4m3`g0cP[`*D:v?l#@15+<X]cXY51u]/#v%o6BrB%VArs3O45d`');
define('NONCE_KEY',        'u y|^YEwU5KI-@Z5aEQb,h;%;)[KTqiD/zhr7|-M~nf*q0/E% vkj_|%Bo[QC *D');
define('AUTH_SALT',        'L`kuUBL1_@7TA;<%#@5J8$GzB4NATG2P2~Y5Y)~M40.o(sn9I.*8>EKRXIO~{jKb');
define('SECURE_AUTH_SALT', 'HL:0soj)@,4;}Q5r{=q3f$_81Obie_8E, L3%`oz+6Z%U6PCjI)%9ehSZVPZx4#`');
define('LOGGED_IN_SALT',   'u4q*:&2-cO3qA{6sEAIY&O?lsUq8rM@.(RU1$|G`])&)y~z~!j+1n9CYCiT|J=)V');
define('NONCE_SALT',       '}<VJv ]GwW{X|^cQ,2PxmZTy@aSjF:Rp7w=nqy>c]T|wIDO7?AO3=qA87dsfAUWm');

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
