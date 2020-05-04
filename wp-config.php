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
define( 'DB_NAME', 'ingeba' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '+@&FY-E1FNr7]u3rC0nmyC&XtH^cqUfSSuMf3[H:!q)ix[PF%wJ>v.i([LxF;lj1' );
define( 'SECURE_AUTH_KEY',  '$fJ{SEsd2rUM}1}2.ESJ.Ip/Ws8r~~Gq<c]@qHQ.Wem@V7evr2~#Zl 2F0o!#Efy' );
define( 'LOGGED_IN_KEY',    'xe<k1@T/s,TpF]Wf4v$ctCushv!ebn9BS~hNr1@SVVs-5@.lKK3/&o7$$by%?YwP' );
define( 'NONCE_KEY',        '/9~Sy(I%(#dazyS/J0Q&8un39:Wd^yDd%,=j!.Czxym4ElZPN,&$>`AI]psp_DR~' );
define( 'AUTH_SALT',        '3U}7<86?32!&iIpmHL?dJ2;D#9/>CUgBV(^P2Ex&Touzl*zN3>+eTMy/tV0B?Zv4' );
define( 'SECURE_AUTH_SALT', '{z<Fk*%CVN{6,)z7Y]MPUP~l{VKdV)ek$mj;yde~2|.F)](Itu?-d[,$+Wl>9s4:' );
define( 'LOGGED_IN_SALT',   'boNN!-#L/mX_%p%^x$0He^XJ;PZ}j-M;B5;l7s/XV~e!h?93_~URh2P-T%XULWg_' );
define( 'NONCE_SALT',       '`Qk9^1=g z/lh ;W|3sD}+@!Gkk ~nN*a<pFE*>pVG%LY;:Lnd@+e2NaCh> .*oH' );

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
