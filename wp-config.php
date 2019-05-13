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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web_jhk' );

/** MySQL database username */
define( 'DB_USER', 'web_usjhk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'soloyo200' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts. ahora
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1SIfVhvV:z[;m(scK);C420io&8IPCm^$}pQ1KHjS2)%HA^oXmY29WK7f8(No;}/' );
define( 'SECURE_AUTH_KEY',  ';3%k{VNSdk3[ct8&Ez!i;{bw/c}MB1:Tr&D!^K`u63>@-M+/%xd8pUlt>shVCCAx' );
define( 'LOGGED_IN_KEY',    ']||%I|2,`sH~/QwSo9kmS9`8/?tRNCEfmzQ$vngEROM7Kxj^#`%j!F4A[{gutL#d' );
define( 'NONCE_KEY',        'Kh4Rz~JP{;^CQrV1S,%,*I%k%zJ7<<hYtk8yAyARAVV`mI*$+w0)N-W_N+!rE>y}' );
define( 'AUTH_SALT',        ']pcj;#E-5C#F$J!GB)9dT@T)JnMSW%)kI2DIehOK-tR,6= J>Xc5=!O2<BS37YHT' );
define( 'SECURE_AUTH_SALT', 'H51X<<KfE!. U=7tat(tu3?HpJkgv{ROx3M`34caeEsc..*@9[]d>T^U6gS_sG82' );
define( 'LOGGED_IN_SALT',   '+ =/Sl3Pf&8My =z<glk1_#(qosq!0|5&s&v><jj%rUz)R<#CkyBEiD&Us4:L#Dj' );
define( 'NONCE_SALT',       '&<{bu~l|4@!a(8Ppb@~v0c<rR!yonhv*_OXQu- )=.hn{k*x4sW1fcgmzrhNfd1C' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
