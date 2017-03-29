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
define('DB_NAME', 'hctv2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^+o}J9v/?mg#@VIT+r6lB45gtL&%5]F~JfH5_+31s9f&&1S/}e+GcI#]_E.<-auC');
define('SECURE_AUTH_KEY',  'Gr<OQoOcl{QC7nAfur@%2t08yWc!9coZ8LUd+DvdO&uqgNdz8N^L%Uc  8.<5Kp&');
define('LOGGED_IN_KEY',    'o1dKon;*~E>a4X1^`ve<LeOIf+^vYL=1x3Z0Ptdqx3o)J^|g<vE.| TwLV2>C)VG');
define('NONCE_KEY',        'yq%Kb%xMp:O3fhtdj4~/|?V;0OTJ0<),1}`$YX@k;=mAs}~,Z~[VMv7k=p?)T`vf');
define('AUTH_SALT',        'x^}*32{zcx8eiW4 xRR`HDePsZtM DwsXRVTQQ@x9A!1N7*4~_KKoGD+;xK`S:8Y');
define('SECURE_AUTH_SALT', 'JftwY8$S{*z*A}Q3=l!6UP7?i=c-%f&.#[?J`<@#E<qp9wTNCX7rmNaEFgr8gID!');
define('LOGGED_IN_SALT',   ':vD&iy>6}1If1_xBI[R.Vui4xAa54/==glfn[5x5~Q/H/)gW)E &=N)5vh(.CtZZ');
define('NONCE_SALT',       ' kV{*iX8I_zAPl(612)*ZcGE%/RW9.07$.J[f_#[6=tI)~yNe75#;S&^&;v0TJmB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
