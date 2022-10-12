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
define( 'DB_NAME', 'jtrc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '(C|eblZyNuo=(j:PakP[|f7i1.,d~)sG@pX~Sy9!O07MX5Rkzz+Iy;h%zIEj7nF!' );
define( 'SECURE_AUTH_KEY',  '@*@#UC^AolI30JH5a#6+?DvVM.4x{9o0N(7a2;Q*~?$}s?5X9<l.E5?V8 +J!B!D' );
define( 'LOGGED_IN_KEY',    'Ck-8OE?)E?6<I]~Ug|ceg6Un$iY2~I.U5:zJW7:mo>u/){{{:f~/8Vu,6>A{f]~T' );
define( 'NONCE_KEY',        '%&y|xc=$1XuOL=f/182}1Hcjg&#7i}b>G)Wz7h_pq!RdK_iH,&@@2[x2yPYDY=|U' );
define( 'AUTH_SALT',        'cNHn/J_U>reBxNU1X=ra8M4)S]8,(+x)[k&b:Q|6kh~o!5qaw)D n %,4jyQoxnb' );
define( 'SECURE_AUTH_SALT', '69{E~r}dDVOA8_}%33;2~Sg;(r0KQ>gvA85gYDfimh`*,%Nd*X:,,UNpu4X3fOZB' );
define( 'LOGGED_IN_SALT',   'LgHF9#Fr@,JySQk`3#vRDLsps_?5V%eO@f|^S+ZCm*}kLXe)rK)DeW@yErC&YMIK' );
define( 'NONCE_SALT',       '(PTgYCFo-l>F<$jZK3NoQwPorB46]@Ojv+uu!,?-Yw~Q^ LS&hGjTOy`-mObYlV[' );

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
