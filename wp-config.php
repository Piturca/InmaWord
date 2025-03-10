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
define( 'AUTH_KEY',         '[7+)j.5j;gbP9q+;hWhve/:#6!iUmrP69!gL>Q?W;|qKw`+QGwuy?vF:/P_fJL>m' );
define( 'SECURE_AUTH_KEY',  'JivXZE,x!6-3GbPc)2OO>@(N+O`9k%oWM2x2vYW5Zz.VTnAG%d6M7[XHC65Ss&yW' );
define( 'LOGGED_IN_KEY',    'yF1i[1*-WxWdmaH!(z9)l[;[*{_b-4KlF.b*i@fzSC2KKdH21EE_g=8BB:lT`?zr' );
define( 'NONCE_KEY',        'i#pZR;eIUSnq2Wnd.-Gwv0P0wNhb)#7cmJ>J{Mm{@vQD0n*&4XI-W4?[Jwur_#s/' );
define( 'AUTH_SALT',        ':.Y<+yahgT22<|XsG %+Vw&~7gFMPa(pTdFo/^yYOoV3H~wlC}39UI[FVDX]lr@ ' );
define( 'SECURE_AUTH_SALT', '&1[Y^O8R#5%UsyEh{25uu,5zOxE&lvGZg#p_yz*Q&/z8bkJBgxIBa8]X*4=c.:?;' );
define( 'LOGGED_IN_SALT',   '02g$t<6p1n0y&>1_d+]AQzeYj.yW!Fk:D?a3^NP~KQx)@hgcTel@anc_pa,LXL?3' );
define( 'NONCE_SALT',       'yZz*L7^g%,RbYtf]#o;3+NG+qF~f^_g=91+OJCti0MZ>g]E#iITKFs.! P>.z6>a' );

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
