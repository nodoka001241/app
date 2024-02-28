<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'LAA1585899-ofcnkm' );

/** Database username */
define( 'DB_USER', 'LAA1585899' );

/** Database password */
define( 'DB_PASSWORD', 'SrKLKXyceJmuEYbP' );

/** Database hostname */
define( 'DB_HOST', 'mysql302.phy.lolipop.lan' );

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
define( 'AUTH_KEY',          '{mfN*|P)7Pci_8$W~NaT.8VD5!Gia#jo4d5-nV]B*KMUUQ8S-sF]/;?<@R+%1GPL' );
define( 'SECURE_AUTH_KEY',   'Y6)w(aBJJSx<ypYfAVc-Vim0+|oq+KtHSq9.SJlA0(Zv4 JmK>|<Aj`L+9HHh-.}' );
define( 'LOGGED_IN_KEY',     'bER_s c:I}pOk}KZXz^na%~[Rkp g<R|24t2? 1Ka2-}^>)_HCu>hP*8tCpt6SE(' );
define( 'NONCE_KEY',         'uq7.yYyvVDyT}GV}E,}^9x3`CmTfC@eE(=(n4webl;}_pH@Cm}9[ELtgx3F?aG[`' );
define( 'AUTH_SALT',         '^.IQU><<,IJjPP0K[v,198f6a$ufrg@6<~R_n.9,%RS1p>at[x=.zqK9l7[<ORc/' );
define( 'SECURE_AUTH_SALT',  '1P|@K+m_oo51x{=iBLBtqsOM5]7)7qA4nkbAK}|C ^T{qjJA3;[H=.<0DXK%j0xM' );
define( 'LOGGED_IN_SALT',    '5mjM|(,+67)(|Ju}WJ:Bdg#{-.+H8_%q6TP|`) YlM[xtc~?N@dXG?*32=ULQ>aC' );
define( 'NONCE_SALT',        'X[Xl-(Ss30i8(*eLQ P[t<@NzYA^@8j9i*8hhDI]SbqAX!XQB?sKXn*4kHn<SdZP' );
define( 'WP_CACHE_KEY_SALT', 'SHR_Ix*^.L}rSMzcaeG`y~$qfp.MuONsyVg%^{:*}@tP$m6kNt;E-g&vd@wU!_{-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp20240226182908_';

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


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
