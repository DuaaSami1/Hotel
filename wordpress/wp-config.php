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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landing' );

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
define( 'AUTH_KEY',         '}mT1E)<f3BqH_FcWk7x)M+QQ(A2g4`x)hmJ(+t(p6p O kyoTk7WZiYWb*M|<m]c' );
define( 'SECURE_AUTH_KEY',  'Ah[emgDQ}H <gwf$iw6fJUjq(e+X75~}w[wls;<?C1><)h~V96lei4PA]:6SbKJi' );
define( 'LOGGED_IN_KEY',    '_E^DU0hM[e^|=3fHx|6hQ HVfGMt928g;,i[x|cCCo1MyC-*OHHpSyv{sVEv>lN:' );
define( 'NONCE_KEY',        'KoC4D]O]absF4Z)o7hK8}f+Mrg0_nQ2Y*[g>I][s&RB_3F#wVZGM3bAPg//I7o l' );
define( 'AUTH_SALT',        'D;LM%C5GfS!7k+n$)AxZ]=Zi|=8|N%S2Z&Z7S5J/d-!.mQ1;@Y6TT|NH#~YTR(7P' );
define( 'SECURE_AUTH_SALT', '?v rVz;;;&$`P4_*ai)S2~ge>?=zb5xN:p]]=,_uA<W_ m`|%v9N.8 B9#5Xn~u.' );
define( 'LOGGED_IN_SALT',   '2f0gx0d]=anZ?SUx1q N4f}hejwpkEExP_&~5#9FAo-nVbe?/j-_gwalIr#JtYP ' );
define( 'NONCE_SALT',       'm#kFO9[nUxNs$%0fje;li|6rB9a+XphkGdIQk/AmE^IHWHh*/GY+M%P(I]pMms;=' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
