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
define( 'DB_NAME', 'wp-test' );

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
define( 'AUTH_KEY',         '9n8Qc-1)z4GswSa_QqZ<%hd=N~`a5l)BB>59Cw;E)n;;4!kNHEXh04l>mL-rEB1J' );
define( 'SECURE_AUTH_KEY',  '`C_YNtvGU>GQXX;W7%_5zu[izx@F33RaJ~Wg4w=l!I/EA&|:j.ex|_y;4#>zOPgR' );
define( 'LOGGED_IN_KEY',    '%0 zh= xc0{Y3XZCmEz7s$kwK$+3U^Z&?F&Qn2pgKp_&:<&pTc%<iUB62-wV^7F=' );
define( 'NONCE_KEY',        'H>k.^otE!*4cou1TYyC0qGgtIq$Y,S^f*SJVGl`?y41cTo2mc[],edZ@MQ#DDJ#/' );
define( 'AUTH_SALT',        'w0[eKpjCH(y$WZ#t_3GXHXB5x0X 98=:d9@:!(3E xc&}f`pui^nVg&Ri!SS*yGj' );
define( 'SECURE_AUTH_SALT', 'STRvwBRwVxcPjzM6CZ6eLn{<P?_[}6-k >a8}YdM~?Y!gaopl8,?F&C)$KmH$ee[' );
define( 'LOGGED_IN_SALT',   '[-i%I6_J%o5jyL8cOkpcLdl=d9<yLyq 9QZvT$EhiYqdYp&Tc(P-F%]Hj{0.C4be' );
define( 'NONCE_SALT',       '|C?dxw0 WHR?j^ozo{4HZP,IEA)<vBv##*}*pDl0IR#bnW?&_1Qch*[7}YVw|S)F' );

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
