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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'R1BR%r5bb,=<BXRtm8:EHB:|/j$lvW0aAPPJI_ju5C0;xsAD%y#JXn;[7{nfk*#r' );
define( 'SECURE_AUTH_KEY',  '#&2aW4f14Y#-%0SJ;))rpOZ 9*LU:{JzaM-3HP=%<21h9_:Z/GR.[DzpW-V/AD_-' );
define( 'LOGGED_IN_KEY',    '3u/*&cFTA_HwbcX7) RG#)@Z?_eGV1=w>kLR-Z#!$JdQFL(j&P?h6m1K|a6X<a+I' );
define( 'NONCE_KEY',        '}b?O=e*(sbR/?g4uL=EZlG/Cag|y[Tt4W+041w2ZnrmuR!jXsKgA_u{,MgBH!ygg' );
define( 'AUTH_SALT',        ',R6-PJj~nuW5CR+/JZI5*SX]XGH*iqu(Ed=L!Lt>Gqz>b$K[xg+:C(;pWO_PPX9L' );
define( 'SECURE_AUTH_SALT', 'Q(/6KjLRu}V/^`]&epASe<Hiq(9J w7xU`}Il.!6;aJc2t%BT:;E_YPa9C[N9[rg' );
define( 'LOGGED_IN_SALT',   '^Z*Xi8JkDx@>HZUaZQf&S;RePr 8aq#W8=2q%/x+rC r@6ud:o[SJRMlxNs?`g*%' );
define( 'NONCE_SALT',       '[nu!q-Tc|S+BX9PO{,iwYsz166nM)0Rs9)Iz~sSrZp^RE(ntwXkWf5co^A#|lH*/' );

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

//SMTP Email
define('SMTP_USER', 'dillowhenrick@gmail.com');
define('SMTP_PASS', '12345678');
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_FROM', 'dillowhenrick@gmail.com');
define('SMTP_NAME', 'Whenrick');
define('SMTP_PORT', '587');
define('SMTP_SECURE', 'tls');
define('SMTP_AUTH', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
