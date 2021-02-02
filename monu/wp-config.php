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
define( 'DB_NAME', 'monu' );

/** MySQL database username */
define( 'DB_USER', 'rahat1' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '+@[9>xb`68GyQ;.cV7Fb}$Z,]#0xJV:F76cN-x6TSCcR?eHHjEGFKt.lyMJ1TX$+' );
define( 'SECURE_AUTH_KEY',  'tl-d$(c3yUHomz1cz{rX>F`BPIJ^)d7Fu pff. @aq~znY:2g5md,FBi.BjMX.X?' );
define( 'LOGGED_IN_KEY',    '*hxGV7O)AL?i|Cz{*<Yw^mM@?z L-z*2+LPxs/Gd*  nZ*F[t>%*[Abr|C4]^`jE' );
define( 'NONCE_KEY',        'KE!KK)ZX|c+|}2%3tB]sC#qfDBe d^># N&Iq8*22rgB2|(JjW5xG$gzSB@moVM=' );
define( 'AUTH_SALT',        'Cx/!(uc_jGTPJNhbR& .a?-L^~hXg$S7kJjTBG3Fa)z`&$j`RsX$}3md#LGDYHCs' );
define( 'SECURE_AUTH_SALT', 'x?Yf+e&.-72FqjcV;*{i+rWmpc&G_OaB#BF(7/&Bg`R,o)Cbvc/:Lg<PJ4lTch>u' );
define( 'LOGGED_IN_SALT',   '%H[h^,pE5tS?gqnPO3jI#l#=HQ;@1>}.$&UCu32GUQCSrXbMyug vTLdl~!-@ty]' );
define( 'NONCE_SALT',       'yZgfZVO/,A?WJinvg_^L]/v-DP+JrI9.Z6nG6DSVVl0_+%$Q%;mu@p!`h$.e@^6N' );

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
