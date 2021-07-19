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
define( 'DB_NAME', 'seven_icch' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '5,W8! @{ZiwZBbG6H^0Lj)*XOKpJBmL`{V :YdqdTv+G4&xXJdr37ab0q:7H.a</' );
define( 'SECURE_AUTH_KEY',  ',,mO:E<#ZAgxct@bAeI9n!)6.ID R]:9RR}[3RKzvw% M#@4?~7zPJJn;xAM;*di' );
define( 'LOGGED_IN_KEY',    'qy^ VS;vCo0_:v~z&PVq#*n?gP;B-)Sr=yP|BbNAS#qEqnLsS@4SJvm<*5GgFFLC' );
define( 'NONCE_KEY',        '@}QZbc5Cn]j]5|93JU8*e?2;A~e3@ZHE{fQI3m#@R?h,ub4Ii/TxwLWayk=CJ.&_' );
define( 'AUTH_SALT',        '~Eyb!Z=wI3)iPlnMd3CMBB&UQUuQXZs0+K.5K_j0#EfeevH-WnMpD3+I}z|i0INX' );
define( 'SECURE_AUTH_SALT', '<|,ZaA<83;>_Kc>B~f/oW:>TO>-[>:a^L3[#RE.;G*)pOK)rmi-3lH),}uaW &cB' );
define( 'LOGGED_IN_SALT',   'RDW2 x@,/rRGlkn-Rg6=ouOE_fa:EFJf@{n65-?}-iDG,sufC0^=,#uGeYz=U-qI' );
define( 'NONCE_SALT',       'hkLGID2s<j:53t2QEV=<F6#Bc,X<ZVW`sRT?X$WE0ik|Ieh!NG0u=S%/U>#jsilE' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'icch_';

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
