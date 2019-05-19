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
define( 'DB_NAME', 'testwebsite_db' );

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
define( 'AUTH_KEY',         '@1Bgb_6J[*048NN*EX/^[ku16G$ :-DmaRTqbjs<N:e.XZ}69q)GyG)}jTRZ/rtu' );
define( 'SECURE_AUTH_KEY',  'kuD;n4KJz$5@0bi[r.Es4.Z[8^o&[7v<_ :`myk@z~eiLcBZP I%jaw~^77iK3SC' );
define( 'LOGGED_IN_KEY',    'Hv@0UwCT)16&li!?=2SDYqsw:=i.*[iC-|E>Ggx^k2.|sleNdUunIoGWok2zHxj{' );
define( 'NONCE_KEY',        '6=ps>#y9Wx!fHk,?OBf`3Tc<Vys>~!Q$=!bUNq3?-,,F3nereRLbZ|D0Yu?Y +_~' );
define( 'AUTH_SALT',        'kQOF<O%mT``9Y8i($xh+Jr1iE@roK}XE,~0+kl1`u2]OXm1F6k#5I0n:P/YX /]T' );
define( 'SECURE_AUTH_SALT', 'hc/hwZ6%W6!NjV1H;zNSy*hcC0EgL~Pm&;le+!$8xYT]hwzeZ?wpdk!p7H5GHMs8' );
define( 'LOGGED_IN_SALT',   'NQJg#<J/q_VS3Vip:%lW6-]I%V}/,gubi ~)v^MskOKiK%yrSFs2cYOdg4.cFqz{' );
define( 'NONCE_SALT',       'VrF;P5Qu!!&,/FWtD>/0r0ITQLb~A-Zx8rnZWQ$*#7<$t3ADcF$fQ%)f3D3{l(+p' );

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
