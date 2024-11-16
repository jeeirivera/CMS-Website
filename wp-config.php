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
define( 'DB_NAME', 'bscs_db' );

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
define( 'AUTH_KEY',         '+UA.eAQN#pAex)r]fmsCTUs!D5S%p`(4R&j|R$p^OK<5foD1pI^uhIFgYCv{&bzc' );
define( 'SECURE_AUTH_KEY',  'Ilwh>h|167E@g89+!i#jrV/M>&O=LxzMzXx_P?I=]Pr@(P{83lt^},?ytZM#5zTc' );
define( 'LOGGED_IN_KEY',    'z8M:9wj*b}dL?Hmi9)j0j3X5ijzOQhd 4ZXba_m#=x #3_i C&8-rfC~!!f `X!d' );
define( 'NONCE_KEY',        'j9z6p1?A7-^9x:{Y%b/_Um?54nW99IQr&NVtJYTf:+H&+xBil#Q]#U`5wCh5z)bu' );
define( 'AUTH_SALT',        'Ok}fZMN}8y,S=T~zdcV|}<JA)J+,|a3<%I!@4C8|{,|[{j1WDE `G#LLLf7&3%SB' );
define( 'SECURE_AUTH_SALT', 'X~bIj)Ql-4(g5j?M%_kZ*MUEHFvS:%hWM). m VocU:0UPGaLHt5avnC3WSMIl)d' );
define( 'LOGGED_IN_SALT',   ' ikP!4Ag3yOv_gwW|WqQO2N|)V3vuhP86J>Ip|BCDV-h@YJwbygqFuL%3,J*6R]@' );
define( 'NONCE_SALT',       'oQQ-F($x<( FLgALpy7ueU] {*=YT/q8M4Lp4CF9X=h4m0e1:mPh^>|cIcEMp1`!' );

/**#@-*/


@ini_set( 'upload_max_size' , '500M' );
@ini_set( 'post_max_size', '150M');
@ini_set( 'memory_limit', '95M' );

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
