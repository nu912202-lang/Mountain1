<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'mysite1_db' );

/** Database username */
define( 'DB_USER', 'mysite1_user' );

/** Database password */
define( 'DB_PASSWORD', '1s2s3s4s' );

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
define( 'AUTH_KEY',         '(-!gK-L$7%~eV=2~j*k|uStzzqo*TcD42Jwz|&VDf~D$A22NmW06)J&/LD~x&Wv*' );
define( 'SECURE_AUTH_KEY',  '[ozMPP*1,toz4x&zZ8i_=4oomml!pK]6hPxLh&wmDD=vHP}oAIxsG-)+IL,)R9#N' );
define( 'LOGGED_IN_KEY',    'F+uO{ZR2^xy$b-/;p)QAJZwRoBWV@sL.g{,0N)k,D&efsn;.LqcH<ZX9p$4m@HtJ' );
define( 'NONCE_KEY',        ',O>{USSgz,^],J%i&5^69~)MNcFCh6h1Y@6wwb:xiYp8DnjngO%3F=eX}Fvq=Iu1' );
define( 'AUTH_SALT',        '/u&+ldJ rU*.jtzL|9=&kItO6T7AV[;6=z9QPhT1pk,1(OY[TC=qiq#T{QkzCc;n' );
define( 'SECURE_AUTH_SALT', 'MW(=5V$wM8(^zAW<<c/{AM2$2 |{f6}x%~s>1WY?1;mM$b7:1#K-wCU>vwjBbqKj' );
define( 'LOGGED_IN_SALT',   'oB$MUlEu2ojtT.!#p!@BG,x#ag6RyEm+bn[H1U3B/( J(+8<L6q[.TFH.,x4qn-D' );
define( 'NONCE_SALT',       'iG8][u:G4>Vk5.I#d1X6JMp*K?k~qZDXU[Y&Y^a?Zu%ZaC KQyvv0}P7dX7i=Rx[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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



define( 'SURECART_ENCRYPTION_KEY', 'F+uO{ZR2^xy$b-/;p)QAJZwRoBWV@sL.g{,0N)k,D&efsn;.LqcH<ZX9p$4m@HtJ' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
