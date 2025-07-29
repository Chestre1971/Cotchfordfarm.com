<?php
if ( file_exists( dirname( __FILE__ ) . '/gd-config.php' ) ) {
	require_once( dirname( __FILE__ ) . '/gd-config.php' );
	define( 'FS_METHOD', 'direct' );
	define( 'FS_CHMOD_DIR', ( 0705 & ~ umask() ) );
	define( 'FS_CHMOD_FILE', ( 0604 & ~ umask() ) );
}
define( 'WP_CACHE', 1 ); // Added by WP Rocket

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "q3ha45137931614" );

/** Database username */
define( 'DB_USER', "q3ha45137931614" );

/** Database password */
define( 'DB_PASSWORD', "B7g@Mj)ke@7}1" );

/** Database hostname */
define( 'DB_HOST', "q3ha45137931614.db.45137931.544.hostedresource.net:3313" );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '2OF4QUS2lohq(B$hw)RsC^znHE*~j_ig6_*)T|!rB(~0@KDA48JLxb9Q=N}f.Pv|' );
define( 'SECURE_AUTH_KEY',   'Oz2DpL~5sg7nrrZ@p@%f1s8Z*NFyLZzM1[u<IM1YJ2s?p]qRhaRm:]L1!7Wy#ckk' );
define( 'LOGGED_IN_KEY',     'o|F8ld^z_xa?s95[-$cFi<iPjO#l((MI!^lu`}6r~}MX<A<7iPL}eX2+ce_mv5?r' );
define( 'NONCE_KEY',         'JjMZ5Z~ U%v`GHFsu/HjIyI%=E,/OBDuD#OX<bGL!hKQkO.`49Af$w{E-8nEy%KK' );
define( 'AUTH_SALT',         'cBTd,;)[H41 :8f0HG|@$?ThAQ|cadgO{]~#JOs`EKu3vCOpJYesM6Q0u0zx>#}K' );
define( 'SECURE_AUTH_SALT',  'X2B1zbx iTPUXfSX2z*HPk`ZOtD4RkT*H]m(1I5A#3I:C=/>/W6(aNX+Jdv;vFC$' );
define( 'LOGGED_IN_SALT',    'rDNcnjQD0o*E)040L@ZX6>NX$`d&KoK]On ^:qe2.fryFd8O;G}$bGJ 8KAk])FJ' );
define( 'NONCE_SALT',        'j)umeO#I,9eeP,Z(?m)8N8DT0F+~V)f%RCr9,4}8[+SFrc1P6Ol09;SAb{$GlAu1' );
define( 'WP_CACHE_KEY_SALT', 'm^m&d=P msp10XNIYc<V[SX4+DCUu,a|>+_V@3s@NDm@A`a%bNPht& anq@}|j}z' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = "wp_xqrp5mvvdp_";


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FORCE_SSL_ADMIN', true );
	
define( 'WP_MEMORY_LIMIT', '256M' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system