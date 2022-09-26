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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'resume' );

/** Database username */
define( 'DB_USER', 'zerinresume' );

/** Database password */
define( 'DB_PASSWORD', 'zaker180108@@' );

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
define( 'AUTH_KEY',         'uig7,fY:Fqk(+N;j<OK4npKUQe.AVomhB^P#MZE!{;[~VqKJ7?(fS OVY.lgy@~U' );
define( 'SECURE_AUTH_KEY',  '6aoHNR7X*CFP9$qZZm!g.J[r!qw7KCILhwU8K.(9kexW5?s[V5t33Om9IEd9P)=j' );
define( 'LOGGED_IN_KEY',    'UX@8HOXm(H=uD)H9&JV?j[S1tF6hfQzbL[;.]|G-b!?.49}#l:)HSr%(+<^T4yX^' );
define( 'NONCE_KEY',        '^nrQ;;&1U@-O ]F^jR*@/J6*~DP^B7EE=%~3Zk;qZET_b}JKgEK~Pu;#*+ YTJU.' );
define( 'AUTH_SALT',        'Q{eH:B?=}<[Yux7xyY?8[wJTcrb,TQU,uFvyeTaPix[^&`D#vc0JZR6/1gtE!=l0' );
define( 'SECURE_AUTH_SALT', 'M8PyCgvQAmW:>MSz}oa-}:i^yz;%R8D7*QtAt<h^t/fa)o?;+8$ygbSQ!)KP.ftF' );
define( 'LOGGED_IN_SALT',   '%)2&&U40-OlRla=4nGcbBF;5k -9A2])B@N$~)>J<Ab`4!+7p|&1p#54qF[$&1xz' );
define( 'NONCE_SALT',       '+O4SHD-mCQ_z9iB#fh;hI3v*%Sv@IZdAnJckItl%M(G]Hhn$/,?/mky2XNpfne9O' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'resume_';

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
