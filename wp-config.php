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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressback' );

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
define( 'AUTH_KEY',         'h2ds.)VwtUr$tYntJ__>WPsw?(fV]2XmE9Bsg1Y4ALXIPyDu+O#uPu^z1eA_nr67' );
define( 'SECURE_AUTH_KEY',  '|w,Mg[YUCMl}It|,{{Ya^D+=/5EK,3=rm} uoD5jfq/Zk={ ^3vC>A<}:tDZ Qmj' );
define( 'LOGGED_IN_KEY',    'q5&{p/]4guv,i^]jj+bv1B8u2Hfb+cb8YpT(o{o6};~~=h:NtW#&HJCtUVm_];``' );
define( 'NONCE_KEY',        'sG5iO1HPG=~d`lh<HG?E)Lu:JyAM.42ytRN<j.91LVi,BxQuzLCMb%+fh*Zh40G{' );
define( 'AUTH_SALT',        ',m)Wy.<P5_C^5o7]J}]2kUb`] #M/&*ou(NPQE1dApu]R.!tlDL3b=gOI#Ob*CD=' );
define( 'SECURE_AUTH_SALT', 'cn-d{YCdFc2`o|F=,gIP,kpJRx*%^q/F{>g2kyHkT#)o=6XSUi^_+gZA3=Giy?gF' );
define( 'LOGGED_IN_SALT',   'y36a|s,y9$>fZ1t9|NMs#GD*>rakjy:,Sy]>x7<E%Nj5$u0@6{Qs,g~00FH5SdkL' );
define( 'NONCE_SALT',       '=S7c@|WvxcTl5Dl!))#{G#M|RTQPz[wDCNH&Rvnhd7F_g)@:P&6:A)HYzdN%~GYV' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
