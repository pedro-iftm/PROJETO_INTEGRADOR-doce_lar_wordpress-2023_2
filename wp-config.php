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
define( 'AUTH_KEY',         ' *z29tn$e<VSTMGMBLN~?bV8ruH)Bgey63Ey[19uY(&2#BN;Kv*TLyQOR(E?-Ak;' );
define( 'SECURE_AUTH_KEY',  '}ZF7X?98[hh(h)M+&^>s|CZs/PgrlZ6{Ap6>U;/[+hK1#6 $z?fhlmRki2+^QYW7' );
define( 'LOGGED_IN_KEY',    'vxf!PX^1!:T9TPNMS(j6TOmL;r~7*!V+<vcbTMz+85U.Pz|iK[]L[1JYW9SF[@yk' );
define( 'NONCE_KEY',        '2>l:BI:;w[OPH=ZDi>@H5wxo2H~$Y:HFEl>{swgmMJ][$--@tB$`bv`#Pg:qWGF~' );
define( 'AUTH_SALT',        'ZNsn7wOG=},aiL?uOkNSFqbv;^+9T.^rTnyb,* ?{1,Wr1lf-3DNo@SETKL!sq c' );
define( 'SECURE_AUTH_SALT', '0(hqjpZ*$z;jW~h50OyRj|U>r~+B3P5WsQ7&8RC]dg_O]qj~kc|>5KkMC}Bk_&fm' );
define( 'LOGGED_IN_SALT',   'czWm;Nc=ayV~S uyS+a&>^8]gM)gihr]Y2LA~0A1!}{aio@.Nk7]r_U<A(O;A-~C' );
define( 'NONCE_SALT',       '3*YMbB&T, `L.5)hbE)uG;)+XimFRI}n:0?:mj-t~(g!5atR0k)s9@Qcp/kw[/Fe' );

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
define('UPLOADS', 'wp-content/uploads');
define('FS_METHOD', 'direct');
require_once ABSPATH . 'wp-settings.php';

