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
define( 'DB_NAME', 'wp_rocketin' );

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
define( 'AUTH_KEY',         'IvN6).~pXylX1}XAE?nyRAgd}SR#PJVF@h>cNGpK]`z_^|WXu/a*vorG$:C_X|4=' );
define( 'SECURE_AUTH_KEY',  'dV*gk+T$=Y95sw[;4d/,8; [U]*H}EmTDU@5`-E]6GnKN@AVTKH>0l5Df`rOljSi' );
define( 'LOGGED_IN_KEY',    'NCn!W/kxf+!g3B.2k8FWf5hn5,[<4Z|JC)G{r`U9{Ti<)11%yO3w^$:>&7tRXE+g' );
define( 'NONCE_KEY',        'UharC0`)|aJ`D_|j)G vqa^;q~!H)m:.laCtH9%1V*ZbVq)/i_chx[*h::YPm7j`' );
define( 'AUTH_SALT',        '|z$JceN{YneEWIS/)Igx/~5bFlr Zf,MQ-p}!Ry6ap3CV9);dM39yF38?o[!Px{r' );
define( 'SECURE_AUTH_SALT', 'T%^NjFz|~U@{0A(umt.zkBFt|HG2yAyTH N,$?L/HY~Nng,y}j)?GT#Wu-O#)}N!' );
define( 'LOGGED_IN_SALT',   'IFVO&Yf85#k]fJj{*rYR3<o9l/E^DZXk3661C%y436;7-D-*d=5p[*m@,/v&^U8&' );
define( 'NONCE_SALT',       '=qs0N0~#HG@+{2nm%af%(3!J+Xu(95(|29e_.^>49{s[y@@^e[ipAZeGtsDgLYM-' );

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
