<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ' JGR{=M0co0+lnC0>7hEk$+HY,!6b<1et=Mp=?PO;@z<ObEbR`+|YhB{:4c`5:0j' );
define( 'SECURE_AUTH_KEY',  'Cf+bgf0==/EC%Hbrh9x(qs4kS %0[Z~T1v?s6W(Mgg{+-?-42hY^5F.GpWBDLeVw' );
define( 'LOGGED_IN_KEY',    '<,; 9h@&k_`S/*`wSP]8Oc!/q&+Y0ON?<WLJFNqfN_Cp+.}t69?iSxLG`gS_Y78`' );
define( 'NONCE_KEY',        '/!2Ig.s]`[xD7x)X$,ZJ=3QD#_=0Hk;)+*wYPd7l0;gDv%s!gGIjyaniCD4x8x@1' );
define( 'AUTH_SALT',        '^O;)fn2KnYRf(Q[Q>s~_xGi9S;X#D(Krnk$~^QV_j 3B:W()ZOltETaGxf.{}W55' );
define( 'SECURE_AUTH_SALT', '1%Znr!Be52l]Zc:4?5gL8IEF#<.l,#Vsu7;k0jF(oT`7bX7q+zJC;8Kul{174W2<' );
define( 'LOGGED_IN_SALT',   'CnZZ< ?ve>e5*9IgIlV}SFFrKy*#rzn{Hw>4f2{h,wUf0+23api lu?KW-G2cF$)' );
define( 'NONCE_SALT',       '`N?VG,;OdF<pD}r4(@3]zR=Pw%KFqZs-9Y80qPf16nNi{]u!,GS[TCVM(DppbA)k' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
