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
define( 'DB_NAME', 'kitchen_world' );

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
define( 'AUTH_KEY',         'UC~DS[)tt?NIV@I+c2o6zB$hY8QA9MR@P>0sK@!Kg6JV+EbA00z22YA&C<~TM1H>' );
define( 'SECURE_AUTH_KEY',  '&MxkyEbM@By{{KIQwO3xusWjL!:$V)W_Q.h=~Z3qu__k@Tdo6m5(3;WKCiKuJDe=' );
define( 'LOGGED_IN_KEY',    '6;m7 ~G7Z3#Z%)#}DA5]&Rl<3IQ!L|@FZ5ba@GkviW!kRMW},o|g?DN6/QLW9#3:' );
define( 'NONCE_KEY',        '[|6*Uv72l:IzS[PL1Qt>XHlL.IoD%gDwGaUB{zfU^Bn [_kznZ&C6;//_fQcu`Ml' );
define( 'AUTH_SALT',        ':3w@F,fzoF>Fix<^n0I6l;)9ixGH?]4fY?5vEov0}|I34~H:4!h03m4d+~vTYRUs' );
define( 'SECURE_AUTH_SALT', 't;,r2FG>NE<<2-D0mz5/&e -17%Kqeer/}$D,.|tifh|?~MT|}XeoBz)igfQ_I1f' );
define( 'LOGGED_IN_SALT',   'ts:hyT)k1Y)Qksq%fHmWV]|f~cdJ P7<%Af__o-YhXz{mPX<I!HzZf<Y&vxY%|We' );
define( 'NONCE_SALT',       'JJ^+&k-C4*L>6~7`QtCCS22Nj8Aq6sKY WXp^2fnEfZ]D2nm[,dcM_/D8/+},?RS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kitchen_';

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
