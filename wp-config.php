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
define( 'DB_NAME', 'mitch' );

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
define( 'AUTH_KEY',         'OS?0ILiR$3Zi;|O4Os^mG!&zLV2zqYk!&mt,4cZWo7!G7Kh#.H3)jp=^_oYV,T|7' );
define( 'SECURE_AUTH_KEY',  'N{Qw%D;WCu1tDMk:28n<UBp2UB9MVfERF/hdYwhOFXO&&:S99]_hg.8bq,w[y.TJ' );
define( 'LOGGED_IN_KEY',    '0D4)_w+uH@c<bEY($Fk>sO-b5K_N]X|wa&Ej(n}zOPTfY]7Np5XZV$=b?FZ)o)M&' );
define( 'NONCE_KEY',        '{vs<HX}Bbk#9Gdv@<*v=3$g/d6o~>CXBegT~VyERqRrK/YQ#w3%4`rPZjG#D7OM]' );
define( 'AUTH_SALT',        'tuVW(ss[C398@4ScHbT-^fS1B!Ckp]VtH#4GcH,!NcZlF+>h{U8%{!,R*ik{bu,6' );
define( 'SECURE_AUTH_SALT', 'bSM=Wy_mF]K?:`?tCYB1QTK72y>1_~P?u|Mf#{=!Ey)ycQd1RfjaS*R1<X&)0NK6' );
define( 'LOGGED_IN_SALT',   'lmCGH#jt4MZu%ap2 gc%pD< |uLQ<*]#G4QgKU]DNZ~B(WZ8tkN1-`!,QJSB>>FO' );
define( 'NONCE_SALT',       'L[,d!p([3f9uz?P4Xn}?rq 9XUhEu&_t!rxRPIlnRkEcigi3B<%%|LInp,P8S ^Y' );

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
