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
define( 'DB_NAME', 'ambayard' );

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
define( 'AUTH_KEY',         'ni.^M0Jacgoov;~)o&uUJ<vR;a`/UCYX5Tc7l1xv#du+|R0?z{*M9oQ}+1y.{LPG' );
define( 'SECURE_AUTH_KEY',  '{11Hy]vL_x*HE[rs$M$IdAiyi}Par1=.ALg(+Bwqc5h0wU>R)ImpD^-+-(vGmKKe' );
define( 'LOGGED_IN_KEY',    'v1v+qsL$&;.Is(2t9YWyN5=1!M3&ef~Jzs`c:8&h$Mka>lD^8[Y@eT3hs Dj?^f.' );
define( 'NONCE_KEY',        'G39Xi)*XpdKqQ&^;ddrinJi,2rT}F4C>E7b72R{G*|:9!zU+_4C/@C%68,8- e+B' );
define( 'AUTH_SALT',        'bTD2m:FR`SB4yFH|eRm?PAQ&IATW$i@1rTf<~NW]}U/5|&ia$7NycsfI,Mj]BEWB' );
define( 'SECURE_AUTH_SALT', 'AoJOnYE9[{O#H(CL(}=d$MGStYhAs1|f:pfzDx3Fw9okK=>DZEm3qIPX_boc)&@d' );
define( 'LOGGED_IN_SALT',   '*i1>)K:%WFmAXY.ZaRa#2=nx]3[R9o4jEh :7nT_6nLd/n?Ju@H97bz,HPe~q=*U' );
define( 'NONCE_SALT',       'H~<HxMG_Q(2{,Q9(dFVcrA})/dg=5,a&DUNjo>c|H.d5C)BNLQvL@UKGG`X=YPXq' );

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
