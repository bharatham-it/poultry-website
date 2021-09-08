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
define( 'DB_NAME', 'bharau7m_joys_website' );

/** MySQL database username */
define( 'DB_USER', 'bharau7m_joys_website' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jvWLtrt}J$DW' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'STn31:aS^IjoQ% &L3[~.zEV]cNWOh_WtB(/0[_5s,4)&^=Qtl!DrGf9z&^QY9n/' );
define( 'SECURE_AUTH_KEY',  'G<vU4#WPeYJ)C_AIC^PLU+xR5Ah`]p5J3`=EB;CmBVg:Xdc5-V>Z^6Xp%DPAUML)' );
define( 'LOGGED_IN_KEY',    'v6r@L07LALoH=Fofi.<5tUb$%Z@KDoHsUF_(h|ceJ)lRIbv5B6@vhDE1w!EY7`Ow' );
define( 'NONCE_KEY',        'c/(>#|?Yg=$J;)}!wFkSeDCEm__&e6y,59N.=?*6,Gjn 3S3e?T:m2Zouk|0N(1t' );
define( 'AUTH_SALT',        'i;FwuK|w+F5bdG8J^aKt_kSu0-A6e9 j&?U=ZA~|TJntbw,on+<;NmNZpR`u&NMo' );
define( 'SECURE_AUTH_SALT', 'V!t`dT5j>$Yy9|5D=;Zr^|B? I8DR arn_/{c2_?xA-8}<to@<5oJ8Amm-J_is<V' );
define( 'LOGGED_IN_SALT',   'unz$eC.#6,U*Xa(Fs k2P93FQS=dR2pHX6%oS[J7JHC}it,Hd.;D!S{!Ui=p0|}n' );
define( 'NONCE_SALT',       'u-ze{+P~_Mx|ZAA4c8KvNieVZ;O5B8G7g8xi:<0TSQkR3(b<7!w a%~<ETqf44c:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pd_';

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
