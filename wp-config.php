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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'haha' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         ',fkd=a^wI*B%$=B@ybyhubE-GSTOhPjr*%8`&Q0t[V@k=M=8XkEqN`4e_3oOFUVt' );
define( 'SECURE_AUTH_KEY',  '?o~IT{np@HrXcIJ p)RKxyH${d(})yrYW35ONlp87Fm*fPwppOnd_nZ|~U &y (?' );
define( 'LOGGED_IN_KEY',    'A:983pIRA8Qr7Z]M}u[HxM<dYJYJx(#JZB7[`1Jm_-A!O`WD{lhPdH8dd4o4$-m*' );
define( 'NONCE_KEY',        'W?aZqhlQi%_AYFm%)+#t2Dd*y<glvdI*)RiT 67Tci_6kc1EU66-|/;Y$ 7.;^G|' );
define( 'AUTH_SALT',        'l+js-`2n)c5mJ]-4yJxP+c?mbZfXHi=;d=QAW@#;DPIh4>%}cMKQsgRGbQGeY1<}' );
define( 'SECURE_AUTH_SALT', 'Dd(I!I`C+Q}3Hk^~1G4z((8!d fc?m`l4@+nXZ%#UaRBl53:PZ:h9FQiB*,0Z,:^' );
define( 'LOGGED_IN_SALT',   'J-(QqUZ&K!7}0D)Uibr8^9f Sdi~@B&)Zil;:vP7lo=N:~M~NCKf30(Pzo,m+{<1' );
define( 'NONCE_SALT',       '(Ay5p?p$R~Jl-IfI~v{qUwTT[Bv3xQ,a 4?LF/JjVi m,MA,9?Eh(9Kd7Jw+~^,-' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
