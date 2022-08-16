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
define( 'DB_NAME', 'theme_davelop' );

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
define( 'AUTH_KEY',         'dfEHVDxrI0i.LJ.bj[_g+p]bBWqASA/8)3xXz3QKCcCTBOUTcHoK.SeqYrlA)CGf' );
define( 'SECURE_AUTH_KEY',  '{VPWW9Nx:L}~i5SF2;P3&I,0MVl.~oj?)(+TpM$C|!#v&;Y X#Ha4cHUUE`SY!fJ' );
define( 'LOGGED_IN_KEY',    'A$v0H~4;mo5QWe|PRr6$G|jD:rJp7CJH=ulhdLO x8H+sFu:# DY,8}=xEP@$nnN' );
define( 'NONCE_KEY',        '_-T`9a<S/ZD9HZKh>%PAJ`7x<:Po~475n/m~>m=* 5v~Dm*P`Bbp+KVH;zdj`Q+f' );
define( 'AUTH_SALT',        ':0/{,:80s0Zf43eCl<NDBoo^I={E-D~Ue?:hk[(<iG5i#T7[bErJ{xb0:g,!E5z|' );
define( 'SECURE_AUTH_SALT', '.Ps=$6;wD) !D7un9Xb[C`EOJjNCL][YNhwV(_{j`tOmJ>3c;>]KLk;/OxY,l4dd' );
define( 'LOGGED_IN_SALT',   'Ko4c~qZ~Bg%_EwnioZO}tyhY,-sr:jcVYB|w0JqPw@k<CYX^Ow,@{7WYFY4ar1&E' );
define( 'NONCE_SALT',       '+0RQmN*E,q89ee^LV3GX20yRW}S.#G Qy)E_1.~E1DVVGPC7Tj7XWIWJuuzmW:-H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'awp_';

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
