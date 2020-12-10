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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'intposterarchive' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&T~>`N)Pj2~NMyE`o|!YFFT$4Ly<]*@7A=XdM[hapwBzD=f;giv|L;NT{:gfj`I@' );
define( 'SECURE_AUTH_KEY',  'fONiAen~;5eW[`YFyQ?Ti19t_s$^?b?,l46)AvoK2MBC?z|$JN}gC}Zif=H6c M,' );
define( 'LOGGED_IN_KEY',    'WM-iH+D#aUg`[p2sQrK}leCvThs.IF`t)T_Py.t9t{*=29@S93j|=*K3co!#LLEv' );
define( 'NONCE_KEY',        'v@~~oB)aCM;EsH_P+1WrxQ9@,X!P4o`U/wO0GvI$I+h  Y+a1y2<dfeuhPe~M5m|' );
define( 'AUTH_SALT',        'YzE0t|DGxqx<(x~<{qMk)DIO=swic#-R%,0b`ND![CvHau8Dn]OZn)PmW*$b^F:L' );
define( 'SECURE_AUTH_SALT', 'L]CBoC60z2I~z@1Uj@ml7)092ecNoh2%Pg3a,&eR57kqIT{$t]6z6ipCcusLL1*X' );
define( 'LOGGED_IN_SALT',   'hEq<LASS>nzOx};$)!hqdD9~2bc2/oIiGqLC_9Se/vvx1qT8?|8R 9}G/x2sN=.;' );
define( 'NONCE_SALT',       '@WEjI#?Ky)=?6pzSsTz9K0`;Jtfj[i;f_&0)&Mr|+:oP99AkdCNL#8pH_#cv8.JE' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
