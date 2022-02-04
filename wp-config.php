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
define( 'DB_NAME', 'coco' );

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
define( 'AUTH_KEY',         'rk>,x3>f4)9LouwB+uy]^n$^jZ=N9jBY=e4pVpf#EA 9u%)~/RE&V{i_%gX9iOCG' );
define( 'SECURE_AUTH_KEY',  'r1HDD?v`*Tj@R%o)5wi+|eawHyJ&{ujh,2jf>M;)#5VRo:Bd_zYWyd2pmYl]g/{B' );
define( 'LOGGED_IN_KEY',    'Z~,7Q dP5MFF?1!AB*aYoE0E6Akr5b*SbzQa<-;;KR+{SUz!M}k^{Vs$v7S@MMF|' );
define( 'NONCE_KEY',        '5Tfq_E&z7)SgVAZ~`5ZL(A|Vpwax_Tz{G,SdI!9`!H&-Nl<9EqQN ?b(p:p|)_hI' );
define( 'AUTH_SALT',        ']_;}(*Pkfu1rL4`3~@7_GS|)?3Q`dW<_]_cDxVLn<%tHjn/ou%HlZ:hiKm+kM{Q/' );
define( 'SECURE_AUTH_SALT', 'C0j#D<}a`5JAa/HYK2(<&3>Rc/@Fbc)|m.;q,Ql}X{IrOs~mC|cY8NOV`%lsH2a:' );
define( 'LOGGED_IN_SALT',   'oxmAd{4.!Q{r7-/PY0cQnrzG|MLzAjPl|Tdl1u3Tp.G`RDGR)G$o5]W:&b3nR=o8' );
define( 'NONCE_SALT',       '7sb.,t-,~}_Kqa9,=qrJmolp#ov;~|;(Ed?`Pw&BD:9a1Hv(3$ouUV }K/M)H]V6' );

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
