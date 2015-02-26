<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'markupshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Update base url if we're in staging **/
$host = $_SERVER['HTTP_HOST'];

if($host && strstr($host,'staging')){
	define('WP_HOME','http://staging.markupshop.com');
	define('WP_SITEURL','http://staging.markupshop.com');
}


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TED}9P>>[IWyyd]CvRZ[k>/K*fUHLpzf1X@~F*.g H4{osC-REZn};H TFbU[30W');
define('SECURE_AUTH_KEY',  'LyF#J;,;N2eSVx6$/Fh=~Z)G.)2R-elzs|-5`_FhJzv}kdH(f5wj+42~.I a$W[F');
define('LOGGED_IN_KEY',    'R:2Te/f13viM]Q]3drXRe#}v9,e+|F>QNe`@(T5w!Vfs5v8k$[[soe6:Ds3aFAA<');
define('NONCE_KEY',        'Pf(CKbSz8=}s,*Oyp`l8J$^)aJrC6-Y-`dlJ1$-U;JI#M*&Go.&2P-%im(FJ*z+-');
define('AUTH_SALT',        'i= <]-8q0PF(D5Hc-+XIvRC2{+t4QtH=[>P7MRJ|4FIa{R<)4~]V`iq7x5S/V@MY');
define('SECURE_AUTH_SALT', 'Kbo+PXy]_pjUbOUi$+aS~(H#+H,7&QXB7**2y2+HwVHW-0o<{/NdI]|TM<gf;ze-');
define('LOGGED_IN_SALT',   '|s+|&T<SV:.wVYCPhxe3@N6-3g@@m<Vs4p:CS?xfKohI=j`#s!Po#7ChzI?VURw0');
define('NONCE_SALT',       ' Iu-1vLR$Ab;:4uI^rctsP@bl!jKLPh+=|9QZF`G+fDl16+Cm;qw7xC-S~Lg-sV:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
