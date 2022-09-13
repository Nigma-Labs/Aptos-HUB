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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u768209680_K4vxJ' );

/** Database username */
define( 'DB_USER', 'u768209680_Ve1rv' );

/** Database password */
define( 'DB_PASSWORD', 'jddJ6KlXav' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '_d[aJM`y:BgCEay:+r_iMRpf.47-G6>=k;`]pAj<QraBJ[.,6-!/{Qd$09Kz8t1?' );
define( 'SECURE_AUTH_KEY',   'sxN OE=SZ0qiS)eXNVi-ZTy{p8-Mg_D)]c_00xl)k-C9,gIO;Zt;Z[-YOj$SDtuH' );
define( 'LOGGED_IN_KEY',     '~MwRcG[{Sma7 ~126bo{yiJ%_u#SyR,gls9[9,bH)NPn?.=)LFl!uMB7AkMI&gN,' );
define( 'NONCE_KEY',         '^;)GVnqvTSQz8}F/Lzjf+F<-$cp}>?)4~Y{zja-*sJ^^FYB:z_A#rPY ig?t.HZt' );
define( 'AUTH_SALT',         'l]dq&BlM[rI0u3QS5=`4m8?/;u9(.?PdL:d^J_%ACJfmVB1{Ol-fMuH db00r5B0' );
define( 'SECURE_AUTH_SALT',  ' PO~s&vb{Zs3ygF:elPSn2Z<>7 6,}RDz|>LXj%aHczd68&NWF>@?.Z$&*52O0.=' );
define( 'LOGGED_IN_SALT',    'Sz!xr/)M=h9=]7H8*.AW<)+y+adgtU0i2v@u9eo>gGa{@)?Twj;UA:i^`TDQKCu*' );
define( 'NONCE_SALT',        'SII,!cXA?ClPbes)(NU_;|o)iOwlja~/fWC]!SXwUpp4*71nJN;P=_&CC6%s& Yo' );
define( 'WP_CACHE_KEY_SALT', 'g}4I^-/L0PtkRgLJvaoizOvM/l:Y7<fsxl5s97UcRI/Ja-WLZL 2I]bL9auC+dQ.' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
