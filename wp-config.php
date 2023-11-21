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
define( 'DB_NAME', 'bd_modelagency' );

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
define( 'AUTH_KEY',         'FK}1gN.zO/:>/|M@Z.o]o;a2,U^x@GGf21@886 ~^e5h9ZAY[iZ2l3XT_&fbsjal' );
define( 'SECURE_AUTH_KEY',  ']zQ?o}I#6JdLqevb#bbQJu=nYjpSQ3hQy:!Rg^R*YcfOI0k+H)DZaKDiO9?4K[B&' );
define( 'LOGGED_IN_KEY',    '[9Tvd!8v|#{f5`+d028pN^U)v55h.-_4`oAmNsFN:@;;~oSK9lyFMdT3CInh._!-' );
define( 'NONCE_KEY',        '%O24lrC60K_*DXHB<?+Ru]Fr04/9JDwFX;pik}nB?A}@;FUa[|KV:`&f*kPfPpS|' );
define( 'AUTH_SALT',        '-RGUc#]J[Z-9r*6?QOKcW#U 2goiLLJjJ<;AJvTLukqaSn!RomN_mK)3Q,K!~,Xg' );
define( 'SECURE_AUTH_SALT', 'uY,wMtQu#G:(AZ83nD*d`>J$[|[idpWC,S4{V#ZAvqh:2?.tth-gkNT?4U3PZ3_I' );
define( 'LOGGED_IN_SALT',   'r1N>@G}&!:PS^Xy;?;wr1R4`=|uD5vvU]n-+[+)D!c=NakQJ_K;gQqk<0dbm2605' );
define( 'NONCE_SALT',       '#8%Nk4Dm6O1BNb1d`@r]xj!Um!$(tr#ADrC+M6-6~CyfVZn +lTy4^y}3p7oLl;.' );

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
