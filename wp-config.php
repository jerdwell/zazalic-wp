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
define( 'DB_NAME', 'dbs488650' );

/** MySQL database username */
define( 'DB_USER', 'dbu841926' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Link_132798798' );

/** MySQL hostname */
define( 'DB_HOST', 'db5000509129.hosting-data.io' );

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
define( 'AUTH_KEY',         '#qjkMjMEV2N#?xx|)2G_U7L:RL?BKx6T)2)VDNtJ/xai(HuLK_5.%D!{.lI(e}FN' );
define( 'SECURE_AUTH_KEY',  '/=$XVg[U,yI9B)$nZ[C |l^dY:oMT~Z@wj(2}Zaqp>bt4Sn@rA,Z3~z39V#w8Lt-' );
define( 'LOGGED_IN_KEY',    'c7+[s >e8{@f~}`04+,QMgl-?*G$0b-hr(:[B5[[tsZL;>&u~?5Ka2r@P1K,D;6I' );
define( 'NONCE_KEY',        't1fP,/.B%PZRJ:p=3ftL~GKE[[,1^Fe,-|BF=XS|$G0BLEu|vBbRGmTR-If`s&YV' );
define( 'AUTH_SALT',        't Ts.sQ:mZQ,)qSQcA#C^w[v|Le,O|.buH&N[zv(aOThW2Cs<uh+Dx$>gUvs]7];' );
define( 'SECURE_AUTH_SALT', '()H2n0Gi`5hDI.kdIW`]Z?&q]v MajO87Sz~i~LHJHPvzF@4Mu4CVu~b>3&z6t_h' );
define( 'LOGGED_IN_SALT',   'geN:fCf^O>rr4NVM,zQK:imsF/P**pa?&PLNNqxVs^&6nN{yl$#la8.TpLktB&d[' );
define( 'NONCE_SALT',       '!a(g.$qN*wt-6{,or#gP_d#OdyFy;mE8zx](v+5=!>q*%4MO(*lIC~YZaaDo2jcu' );

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
