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
define( 'DB_NAME', 'wp2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'uk+V9bUkCr3L^z|UvnynHPI`)aT21~&%[OZP5:u+=el6/p0i$, +P)+SP}oZt0}h' );
define( 'SECURE_AUTH_KEY',  '%&xn0D?U,jjU1a`t|V(g@&CQXS}Hbs5Lft#bWSs(.CHORLG>=PrH[%sQ/UF uvRz' );
define( 'LOGGED_IN_KEY',    '3UT8PRLv6}H{M(rbHg? ?D!f)A:Gjra^QqP>P1VF^A0Sj9Sk4 L<b[,>!%~ })r2' );
define( 'NONCE_KEY',        '5o$n%PSN7W5T{$  zkq3,yw`G{yC0J/+!k[/F9[mPQfGyfpw]/{;e6OQd#JBR6DS' );
define( 'AUTH_SALT',        '!w(+e7bUB)/>-%T^AjR c,=1`,T]!TFlcBO~N#KkjEzv+^>[>NzXo8!wM.E)8])K' );
define( 'SECURE_AUTH_SALT', '~qh5r^^(tqG1/<M#19JtE<ygzvG7}mtoKf9sp@k^]@V%+dme_*l l!*ak]7tiz~p' );
define( 'LOGGED_IN_SALT',   'idEN~L9$ejZD185d1;/g<EYH?[q.y,@8&M(C KSB{;pIME~*$bjT+stR_)g0Q8RU' );
define( 'NONCE_SALT',       'h(zJpY<`fQ^2]+uaWw.B7uB[bw:_*+NJaX1LEmy9bf6qO-9z0OhrgcH8t810_ku5' );

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
