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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '31V1M6L/CiP60atlV<:^r|w_Yucah~Z>VOv!m)&cCTK+w7HLmfBi6d&HaFGw?<lZ' );
define( 'SECURE_AUTH_KEY',  '<wNS4=@ v?$l1x#h-?uUpF][uVT!?zrI#3B2O,vjj2ZbGR>g9?v)D+~>+Kx0(Pdl' );
define( 'LOGGED_IN_KEY',    '91M9hU!45Le_458h^_c#U|9l-IV/`AM20]0QyY,WIeu394c{9.jC=,{4#q63Kfc(' );
define( 'NONCE_KEY',        'Q!dLA8#giA,xZlC0P1G6yaS)07<,S<*w{>&YE+wrS&zxm^wtY+y,6 j7o1NF=yW7' );
define( 'AUTH_SALT',        '?psc!)^ Z^~{Kf7N[m[TylZq3yCZrC-s{9UPze+)zctM;y7u!&VmC@!)lE$0Ua_.' );
define( 'SECURE_AUTH_SALT', '%#A#ej9]WEK]i@q*VhZHf</S8XTRQ !k^/.NS?k~U@@FMgTQAtS$6XBad@,BInF3' );
define( 'LOGGED_IN_SALT',   'Soz/6Uh@efI(X+akkwP0/?OM:ME-/S}&wFHztM`!/7$;3_r4H{D}1PAGszc0J,Tu' );
define( 'NONCE_SALT',       'Dki|?YC +.yqYH$X>$x+-89[h+;xnu2bk(kgTfqNzKN:%g:7A+%m04DN2oWoh~lU' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
