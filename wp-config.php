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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lknsln' );

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
define( 'AUTH_KEY',         '{]27Le]K,_E4$;cMfqx]0ca`tA#X.Qq8cn{Zg.wd-Tx_4H.q:(r=SDSr|VY1S|Xz' );
define( 'SECURE_AUTH_KEY',  '*qua`UBdS.}kZ<kPC<8fB&=q}a&!QM_oR_P/<-,9s~qv9paC-gyk!cxUON3_w41C' );
define( 'LOGGED_IN_KEY',    'k2r2(fW<A(Qj}XTaiglU+;W.jWxlwlPa-]yM$h@-.2)l(@b*H[viRvrk;|;FGYh?' );
define( 'NONCE_KEY',        'aq@QP*;c^<6l-3^.UTxPRKga)M.c 9creBO~}7FA=gb?zDKq4/@xs>QNzkVb]w92' );
define( 'AUTH_SALT',        'C&Fiytb(e{Uht`0K~F[}dnCkH=Wx!4ff|A|?(w{D4SO=+h,R(!}Xj$AUmjQO f2(' );
define( 'SECURE_AUTH_SALT', '`Tup!?73&t5O7wsC`1b=I3FAT_[N=Z FY6WAGbk=O=D&D&LY~f/Q)5Me=4Ae697S' );
define( 'LOGGED_IN_SALT',   'x7Pr?_yD8OeTWazTT~$B.8.c7ou?H&&OYT4slx&^tDXBuqEwnm.amh<6W6I+lVOo' );
define( 'NONCE_SALT',       'U/5IuPcSk2#}#?pV5Ar`o~=9hA,Vu+9>|@)wDElXc_>c6-e_};+bYiflcF1Wc&2r' );

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
