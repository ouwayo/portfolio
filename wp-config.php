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
define( 'DB_NAME', 'personalData' );

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
define( 'AUTH_KEY',         '<;{YT}6Zb?*-8C)cm1)EWNLG!cO[e.7+c+>nqe.FAd#>S$]kX~0y$ALt_;.FY}V+' );
define( 'SECURE_AUTH_KEY',  'a-Jq-uv?6`aXdPgS[4@mKk7M:9[QpW5s:OWiS0HT%VZ<9;FQ`PbbQE;.XjbEPm9&' );
define( 'LOGGED_IN_KEY',    'yfA-RP3%}2hD29z8[4.~+L#pfLSRgaLz%[@$eoN<bUt8O=o:zh,QSE_y77`xvB#@' );
define( 'NONCE_KEY',        '3V2K3qgSN**jiJ-01|%LTer><9JNB&;*-Xm/i_gxSuxk5rFR0Ue+$4xcQX048d8D' );
define( 'AUTH_SALT',        'b5L`{rjw%I4Qz5cX?K}rWz:O)=%kcaG+XR?W,.GDpuv;cJV%69f{@C9R0 v:~+kK' );
define( 'SECURE_AUTH_SALT', 'qk-^cq`(mS*N&+47WEENZr.C#gK$?Io*qJ9>S-uiGao(.uAb$b;2H,FE^N_]C/]T' );
define( 'LOGGED_IN_SALT',   ',E/3[qcf6jWx.!pZc@u?zDo#.sKr;.JiUZqR=8%V?w8}6e 5e8JH(9I:liP0)5pB' );
define( 'NONCE_SALT',       'JU-JhfIASq<WkrV:ARKc8Y+c3}hgE09kq`O;}X4UdJ[c%/ma{nwa]X+qxf$[@#%t' );

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
