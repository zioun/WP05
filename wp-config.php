<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp05' );

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
define( 'AUTH_KEY',         ';=eDt$.M{$IVA*mfT!6X96R{lrDc*iWVP>_9ke8fM&6]Dk3?X7&i|EcAl^/k+.rq' );
define( 'SECURE_AUTH_KEY',  'qybct|XMpkSIL/AnYqlJ&,4G>yM7mR/XC[dk`D /(q?18$kfSxP2nuX2qC[k1CCS' );
define( 'LOGGED_IN_KEY',    '`Z34ZA#K$wgA/iw2~Uq+1+z13kY_+MV;TlZAa#I)z?$Omt[#0A:9ZMne)3gs1]TZ' );
define( 'NONCE_KEY',        'RR5f{2]fHn::!7td &o&b3ZHzEPXm.%YnD=!TdDxgH)s<JTP9kwoBGHw ZA[;@$S' );
define( 'AUTH_SALT',        'qW,V:FK#V)Wyfyb`bn5$&,;CPf,Dalt}ljyL4s4P{;BE}dP9dpbGAqB#@|?xMzp^' );
define( 'SECURE_AUTH_SALT', 'zrPbg[NPdj2/KTy5[=_00qxb/eO6B?Y%Q_m_DIqH|O8Dr(L{qWml?&%:>Hs3+Lqb' );
define( 'LOGGED_IN_SALT',   'DRnQk?w(Hvn484RHn7)}|W `Yl(s:cs_ 6`;wJm8=Cg@dru(sVn}m)y/$TjW56[X' );
define( 'NONCE_SALT',       'SuUlBsmez9}:* oaeUlS1uakSjbed6C$g6+^a!%OE8bAGxn{;qiCH1clb,El9@F2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
