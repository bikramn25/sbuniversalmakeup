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
define( 'DB_NAME', 'sbuniversal' );

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
define( 'AUTH_KEY',         '9!dyYKpR5:yxa64z_53*uIp6T&~)0T`M<$,VSQx#1W3evz(FRb4#5RpliSrRJlu]' );
define( 'SECURE_AUTH_KEY',  'I^8]2<+iJ>&4o4mJ-z>-=)9@P~,Ald& XwbN#xP+>nJD:@a)QbB_a@G+t$Y<)!tc' );
define( 'LOGGED_IN_KEY',    'NG<dyd0}=t$U}:Q.N7b8y^f^Jx6^T^WH~*t3O,J@ $i0C%gc?SkJW/Q4^.ou#+Uq' );
define( 'NONCE_KEY',        'kC4pGc(0|,!D?${_pzwc`P`]d<19U,N7NWe`I?R+0zv|6g-OLbHr6Knlq8[AQC]+' );
define( 'AUTH_SALT',        'h{r_d?<M=`M-G|;EHrV`ZQ-%<c2KUy1kcX|(hlX`HEzh) xr5~uZ+zV@RU[g<&#f' );
define( 'SECURE_AUTH_SALT', ';~[#o?mz7QGTkRd92zMm.Mjzy`f3?<yD6 ,lX${m;78H|_aHPk7:O?A?Fkz-I]~g' );
define( 'LOGGED_IN_SALT',   'R5%KjlSNkELijEsJ;%AXEFdEJ>sH7l*2V~fg;bj~> dgH+@Cc-47=wYI,asaW,6y' );
define( 'NONCE_SALT',       'Pf(qk8v8E%z5g-~Y7jYZ`ww45%E53X7_T?48G5fwbY^4h27n{V~GIXm)zW,DU^4;' );

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
