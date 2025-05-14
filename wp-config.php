<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'practicalaboral' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '#l[im[-Ts:Q/+TPy{#0Y`n9Q+2 !F4;UzN@T[JM+N?fnKC2R`4+`)6gI5:[$t0yo');
define('SECURE_AUTH_KEY',  '4Di3<^{I9{2?P~];0T^#$|I>v^_;Y?nh}:a@YN/nk<`cAjBWdK-T]XP 1%n-um+S');
define('LOGGED_IN_KEY',    'T;q/*5l))=Ubg1q8}o(0BNYNGWP=Ra|7lL2(Q=|chtt&U_/9A-;QzWmg{ 0phFC8');
define('NONCE_KEY',        '} tk3?pA)Q^W O+D|GLI6xMy%-_f(*+fY=WvY=xqIwOc:$l$%|=5kdG3($o&]7p&');
define('AUTH_SALT',        '!MzCaB>pk$q,b<6B)cK0SE0nB9/8~`L39b+d[h(3Oa|F+]fx#ko^>D~+N:N#.:1r');
define('SECURE_AUTH_SALT', 'Ps|Ji E$#%@W2*b+#VlLOve<eLauS5@6y{8 %MuA}{%&qXC%[I&/Zz35Ru]3k@(y');
define('LOGGED_IN_SALT',   '2HcbT}h-?yru>r5D@Y^RPg#9F}*$MnB/qa?/@D%*i<ifhx:u) F;;aYr-KRZc,1&');
define('NONCE_SALT',       '5FDPO+>`*v+t@-n=(+4fHS.||CMI@sdb+{2>E#^LS[<+Z-m_6AB6Ef`!-Di||b#<');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
