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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         '/|P@=o0C.K?PSOsv;b)NVC_cI;d#1}o~jQB5f`ppm,u.$qRF!NT2HYG0R%uB1c5z');
define('SECURE_AUTH_KEY',  '&$&Bct@_C|Ul_5<+.K_*5dCh3O*K3/7FV#|7ri/?cnRl5%I$UsF^kb@~eX_,cqH<');
define('LOGGED_IN_KEY',    ' hwoy<m69nU6)S7CbFE&BG3zQopjZz#PNUS>1ZJ^9hOQZ(D|]%~z!CfN<%N8*a&b');
define('NONCE_KEY',        'U$D1/yr?&,3fA.KxG]VxXLsP+Ne`YIj2Zr.><F1t0qkrj>uRgydOMV$&QOuDXc8u');
define('AUTH_SALT',        'Z(Hh081Fz52EvJ2%Z{tg^a2<*TmKkv:JvE)R$&:=X db6%I.>Mn|UX||+f&/&rcr');
define('SECURE_AUTH_SALT', ')!0lE,%?<CZl1^n-VOP|cp++Elg%YGf)cr~y4!M7;CiP/-^9>YH=+YCBrYn+G,.w');
define('LOGGED_IN_SALT',   'Tv~#i_e;BEJhu>DN@Dvr~Y%L]TG3:%OUq[K<g7R~e4KZr|PeVdBPqDe0:6Fm8~QN');
define('NONCE_SALT',       'vB7@o?j5c|p`j4&JAA~Lrg0V#Y]gy;Sv9Hd!TU3+e!b:VK9!~((ZC?qQS/cJds^[');

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
