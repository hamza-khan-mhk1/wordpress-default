<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpapp' );

/** Database username */
define( 'DB_USER', 'ict' );

/** Database password */
define( 'DB_PASSWORD', 'Testing@12345' );

/** Database hostname */
define( 'DB_HOST', 'mysqldbtesting.mysql.database.azure.com' );

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
define( 'AUTH_KEY',         'ei[yZv}3FfTe1lzWGTo8f@s$$qX>>v}0*SU=Ukr_Aki799pDQ_kR?b/>5&AP,uN7' );
define( 'SECURE_AUTH_KEY',  ':MM(I#A@E!j>g4ip3]q3ojA{HB*}T>t{3tlF+b-DlUI@IEe:,h16oeNCc}vG@yC0' );
define( 'LOGGED_IN_KEY',    '}/x<aiY!+ksJnUBYm~DMzZJj5SZy96zH+O5$]MnzMMd)X-O<7|q1z[EB@+6*[9$A' );
define( 'NONCE_KEY',        'WK,k:ty!gcEGaE__71l8>B$NfsKJ}LV%yUD^p?G{2 .>3}$Fg{TjXYi.H3=1W=/7' );
define( 'AUTH_SALT',        'K4b(yNWh]+U2,X)/9r^_cIKcv.36`rmF(HMCi>siE3~jLw;$@d{WYu(tg]{rcZWb' );
define( 'SECURE_AUTH_SALT', 'wr8whHIg&zN$;bipU:`ZTUWCvSP8q7^Z$q6ox|1W0[DLeKcJ/>l/K3yI1p`#p4o~' );
define( 'LOGGED_IN_SALT',   'OpW*Cq@[So&7ac!g R9+1vQ/^oZO43oUa35-p#UcFL03x:0+L7=8k1u1({9h=+qb' );
define( 'NONCE_SALT',       'ABC3L[P-2vrv0xU{zzHIh$PK,uoyK6[OhM3=>9>Y>F{D-rM({ X wp{]v@.L2f#x' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
