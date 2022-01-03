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
define( 'DB_NAME', '99F' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{Duc9A!3R<lQO</a3ai,_`.`N[K5bO+F>w)e)#J+<9}X_xZq(|^EYQ{`)La/.~L@' );
define( 'SECURE_AUTH_KEY',  'H%Qh}m+U;z`|W:l1I@]Gpr7,P.GEh$@2l DbuA0PHc1On$ai]@z=XKvoZi0~V!c}' );
define( 'LOGGED_IN_KEY',    '$65*%!0p_|rtD=fisH`.O|3(%L4re?6(x&-r*sm=;tBOMBVA]x))6%Zg0>Nc`%h|' );
define( 'NONCE_KEY',        '{u;rQj>ALte)Y1EqEL);O*ZiQ.k!E6^~[{(vMshIQ*Ix7bTM5) 7mg<Y2M<HN.Xn' );
define( 'AUTH_SALT',        '}Wz4?++P#5Cc?dE2PpC`9<nNcFir~H)hTu^FC4NicCXwLnZM`b!RZp4peA{*T`MT' );
define( 'SECURE_AUTH_SALT', '_)I>Fwe8)=FqYuWd+TlnNMD8lMd+~PyXt%sZhNvqAV.?cf2:$>a|$StZ2EiRS<W4' );
define( 'LOGGED_IN_SALT',   'ih,632AB`+J(I% {c/rq^EZ_CT{,W].;}y3PWr0qk8|QqG`_kn`C?Q{xG0,r9x&E' );
define( 'NONCE_SALT',       'woNJ}YU>]BPhw4hLHp3g$V|zj-}S.>++T$qePfMJw6b2yskN^ktCsqtb4zFKfR3K' );

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
