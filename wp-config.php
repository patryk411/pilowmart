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
define( 'DB_NAME', 'pilowmart_db' );

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
define( 'AUTH_KEY',         'Q6Bo6| ~:UW=2(g~G*M,S<.J%]}[l6`}KN)I4mpSwVNA}6A+#zh}Y;^$;`E02scH' );
define( 'SECURE_AUTH_KEY',  ']Adc`3 n5ESuYm_5&%7qioPGWpTh*xNk(H1#{];>fR [?Ch0Dw` l:%#<QV}H#b2' );
define( 'LOGGED_IN_KEY',    '*k)N@^Cz<ssJytdybR]Oh<KB(=ze<v[0Ps7Jiko2Ld45E5y~0N/=*i(fdx7Oz]]V' );
define( 'NONCE_KEY',        'ng`0d,XyTSUo$:|$pvD4R<`j0+QEt]teYr.Ht4hl(v+B_(6Tl*4:;D|^=/3w=d6/' );
define( 'AUTH_SALT',        'p{J33Q<-a>N_*2Fj@FRNUsPu))fT.f vyM7T~##h`+dq$v$osk3fe^w0 *~b,GrW' );
define( 'SECURE_AUTH_SALT', '`~ N H${KIebpp|GIm(+YS__zj&ifes1tBH#)m31teu^f aer1YkTs?am@(J6_s8' );
define( 'LOGGED_IN_SALT',   'ja84eCy3yE6%J..0m+Fe*eu.YHAKH6k6h_4nO][Y_dS>w=YG%$?D1@91i2GL2i{+' );
define( 'NONCE_SALT',       't)EfT%H?5zEmg@Vrz qM<IywA^G~9u*=z#?=6>cFaJ/kJ7a#dYY$B)B3QW6Jbh$^' );

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
