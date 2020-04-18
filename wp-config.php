

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
define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gatsbytest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '4$S(dDxun#)Fs`{FOa],4P^D#aV)xgye!#Pb}_3:S02*0gq)+cn`4s3ZW+u76`(]' );
define( 'SECURE_AUTH_KEY',  '.]|96sv={}4&WA!QW|;=$`jD^u6q-WOKV KST^rS-YH=Nl/doVs/YFSO<ma/]SX+' );
define( 'LOGGED_IN_KEY',    '>g|WAo1M d4Uqo+G:_rLBu#L)tacZ.&nG])rK!G$M/2d/]CsTAYt5|@7{E6&z^Cv' );
define( 'NONCE_KEY',        'H?-JS3W4V.;j^>C($]|./MEq`t(>m*{.p~OCB#etF]ai:=uGJ BQ6F#y!9:gBE%!' );
define( 'AUTH_SALT',        ')GUIfX2FMy( [/xRWG.h1f4]G +&/|[H*.XtUzYC]~|;$j>Ku[^rVTdn}>Z|x:B1' );
define( 'SECURE_AUTH_SALT', 'jxv6;mlzn9,Y{CBy)1ci])wNQmvL>ezWy!pxlFRhSM911zfs>]--;8oI_v$^S),h' );
define( 'LOGGED_IN_SALT',   ']6ZE}|<LG8o`[F0?N/CKmw(jxA.(Gi9Ya6sZSkD8yNEiV<+Q<v8)(E#q/=+5_R/.' );
define( 'NONCE_SALT',       '}t:$3@NlnGo3v>7y*F7~6F%=ZaprW^GsJRKw&/~Qy@n;PUf#j0J=d;=a+Gt{R=~:' );

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
