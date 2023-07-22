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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'PeGS8e1;p<IilJ&COcz+GdSU5=]qd|@dAO=nREiq-Gr=,T9wY<N2Vh*7$OzJS5Wh' );
define( 'SECURE_AUTH_KEY',  'm6+VANt&rA4B.G^6bB/|S!/2(`Ovdgj*<(iXGl*ZJz$+~mJoUyEsUIf~:=W*hC+r' );
define( 'LOGGED_IN_KEY',    'e^YtdgpiHHy;7;&&`g9m/Qwx^sT_2?=}9!,>_(C6y`9^xmV>QmU>?<Q[~<Dq.ZZg' );
define( 'NONCE_KEY',        '`:O8N%emd~Hr4d7e3y@r0S}/0R3|@DexoR9D9>X(c95#-%:S=>sCXv^=%v2wIWMl' );
define( 'AUTH_SALT',        '24CsS<@wl{&7w$sxx7<`{7@>^8w ye=>ygd<0^XEgU.oG*hnC#i/r:G{G,1[]Y0j' );
define( 'SECURE_AUTH_SALT', 'Yk)^a[REM;7BO#^L`|D2.DS^jc_en)qAP%s9;q{czP*cd4q`!2UNKv)?I<zg#XUR' );
define( 'LOGGED_IN_SALT',   'p_b_J{He4ueAwoY,VSbP*Yn%qCQxTx{X.nw+K`T}Y-ERMDhC2@2C76-5//en`V!e' );
define( 'NONCE_SALT',       '%%GI*2~RTBD*RVOyR|:yRZSd2$U+(VMP:ENY#`.tnAls;-Fexd0O`E I(: nATv?' );

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
