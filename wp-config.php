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
define( 'DB_NAME', 'massar_bd' );

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
define( 'AUTH_KEY',         'X4C1R#:Uz>Kh<DX=fd$~gwn|&)=@j9fRO%:5ThWl)?,,wX3xDozpKXXG(A?;QHH]' );
define( 'SECURE_AUTH_KEY',  'rjz(ZE+?z++SG6wbhobOE7&n[},}<__(`8y@$sjA6w<0ogPKkF gpar6MBZ3sNRq' );
define( 'LOGGED_IN_KEY',    'mI##_n]D#F,&dv=8$)_mYLlVsH]}gpd).,vN(^K;Ro|OR][u7ShF0 8r%V[c<MF@' );
define( 'NONCE_KEY',        'CT^aOTA,-Xq# 4RUl]#L`QGkm*6-94RksHribUKp/D8ADLOw}6V?~Qd$u-sC]KX0' );
define( 'AUTH_SALT',        '*{)Xw~RPWJ!gn5+]8y#dpS5#|mOF*u!Z^pZEqdw,A_e@&`o*;k8o20IZQrFtifgU' );
define( 'SECURE_AUTH_SALT', 'E b.vwzHg]D)Pd0o6kjuI.xT]zf bJ<EflQW^tH1O@Eb,p;OBm~Jy_qJCSG~H<$:' );
define( 'LOGGED_IN_SALT',   'NrUVV^=W+IM?a$FHVCKGI8&d^9tbYg_6*wS3{s4*mNj94qY66d$]D4it3h;GC:Jf' );
define( 'NONCE_SALT',       ']WoPi]YAuF3J/^(MC$.<4H`1qOy?NdimM-Li,KQJ?5BY-y,.[)~jeK,{x)qbvC++' );

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
