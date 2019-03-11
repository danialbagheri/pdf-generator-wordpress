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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'oEC)}u]Wde52xs`i&]8<EP#Br-*z5a(q$z#kL6d|[J#2a3x3?~-eD%`&s/gfcg^n' );
define( 'SECURE_AUTH_KEY',  '}BduPUGK?*u_0&^H8<*^7LPlQuK?jKQ<ju^]w+ou!z o&rN$2S$lJ?7s<a|VarQi' );
define( 'LOGGED_IN_KEY',    'E!#xMBTqhS[O^qw.}uIOC5@VE&b@tFF%+&C Q-w4UbBNP:/,*bB^-+SN`a3Qu2@)' );
define( 'NONCE_KEY',        '6p#:y!zKoa1iy<tj)|*#b)^!@Fs%K7J|2J8N?S;O^lyfD?{e{MBUXg<d0`&M*`4x' );
define( 'AUTH_SALT',        'MSm.P1o9Fr}gdG+~`j+2=u@tRuTwmJeRFm7F7Oa(K*A:|,[8smo$3_q7c:>*oSL$' );
define( 'SECURE_AUTH_SALT', '&;2`S?IXZF(LZgEqo_IYQ<P26;Mf3@jbk40r7tk!2` #~hTWr<CIfu]!($^Wu!(?' );
define( 'LOGGED_IN_SALT',   'G,8{{$> !Uq@DiZIt8X^x;59tw#nj/1g&mMJo0 mG]]+tvLB -n9fe}Tg-ZYouXc' );
define( 'NONCE_SALT',       'WxK*SD>L(Z1.{{1L`veEEUg+M)go0mj- 4WKN&V0AY-cvJV>EfTRxz(`x=P)@nUr' );

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
