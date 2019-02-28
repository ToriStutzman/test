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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '-},W_~HAe8c%K=/G>KJEpb9&S6tB% hUBm?CM1vW^|CL*1?UE3]NoPOyH!%zIsz|' );
define( 'SECURE_AUTH_KEY',  'uD*Os*m4rVCW}R;qndZotW~b4Y~^t%C`zzwjZ)}0`lFWEtdQzJpT~8c_qC+o, OF' );
define( 'LOGGED_IN_KEY',    ')aqQm%9Ba&ybLcOFsbtxqV3{P:?ELYZbw;(drDxvzx:a)PgKRM[E |<oU>~j(~*f' );
define( 'NONCE_KEY',        'qR;#FE?@0$$C|mc1/?GT&B;{_6B?`CiVB~WS05077l wNg{G<OY3E|_ZG%XF(TN4' );
define( 'AUTH_SALT',        'O)6s$,F@XW;@@?,KNq{g#F4(nN+LS2^TY)t-~=MdB3JFf`oK*XB#&6$+Ra[)I( q' );
define( 'SECURE_AUTH_SALT', 'ACHH&mOw!Z;0lSLu?kN6_RbX[s]wH)-by(eyM~$0YCsRZI,X5>cs[[Oe#}bck!A=' );
define( 'LOGGED_IN_SALT',   '[{QUM I%0 ~y^ob+`yjNYdxq}2NIib28I:C&{:}EhgxpykuH>Y[}J@-Uui|E>P|V' );
define( 'NONCE_SALT',       'Oytcfp;!n[t+5T!)%/sfvY|+~p3+X?aY&(rXxyB)kpn$rYn>@O]s>OHiD%gOz`[%' );

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
