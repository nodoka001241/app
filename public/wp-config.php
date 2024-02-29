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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '[eF<1]MxK%6#9=,A %yO?pyZ:$<==i6Rg]HSS2H/^<nraTurV?S~V/0 6R`rZw{6' );
define( 'SECURE_AUTH_KEY',   '(]_[5cpA@g3h:UfRdqcW%N[%NiMa.0y*)RJu~2-!8)UgpU2x5} vG>]uDNK:]$i3' );
define( 'LOGGED_IN_KEY',     'QEXh6?gR*yjAcxwW,K:8~;_9yYnL2GU))uB|K`~RfPbcq@h $2<xl4A`z)kJ%[3L' );
define( 'NONCE_KEY',         ';|{,Lzr2-JWIK|?~C*;0?a!a2HK#^N$A1D@>I)^gE+4i+Rl}$]TGk`I/|8OB=[zL' );
define( 'AUTH_SALT',         'kdn`M&)>fc{N]AQo-P!0Dx&N&1mfgg3m$Yj@2[:v3k$OOA{+HdjQUiUGtqw3m{ C' );
define( 'SECURE_AUTH_SALT',  '*-BFvD@ix&n|=(Bh%dV5,B;Rsi62+{E]wssD:Sp-|i*9Hx7D`K6N}&CdIdkb2$xZ' );
define( 'LOGGED_IN_SALT',    '3O7F%LmNT~jS/px$5H}+4c.kY H@ycRf!W@&=*.W!y{Y=K3AU(dLg5P_*BB002iA' );
define( 'NONCE_SALT',        'BxPHjN?.LDJ?wTF.m>Uvr+Ls7[Y1QUnAEeJ@*%f0j{hx:^g(k!Y^R_A[[816kwpF' );
define( 'WP_CACHE_KEY_SALT', '7FB+`]sS* if By`?]jpSYW5}A?JfI8px(81YmJ0}#pj! 5LuAa>EN6&(QfS{4eQ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
