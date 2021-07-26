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
define('DB_NAME', 'local_cilsy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'bismillah');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_ALLOW_REPAIR', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'F.qHW25F>ipT&fqXwj`I*Zq:(;<,>_<mDCgBc(UZHf|NTlJ(|2:Fc^Y:R@9V0u<c');
define('SECURE_AUTH_KEY',  '+,W{!v7NJ$|@g;|D<:Yfr4qZLI/{n1FI8<^!sCuht]|O=j[|+[+$!z~.#u^.vhUI');
define('LOGGED_IN_KEY',    '][_g=C{yHp#|8?uw|6`v6h.R_:z9nT):re4(1Sc*,|Dej8<LamO)xt{Z?^n?x[]w');
define('NONCE_KEY',        '+!Y4sYR]5X9dsv0(K&y`9A)1~*U?$d.k/+Al[^A)}+Xm/3Y)=4xNBdbFI0j:TveS');
define('AUTH_SALT',        'tF|Zz56y=|Nqt+#~d#l E{5:`bM|z17Ya`VH&eYAB~ X:]7-S1KVpu-N`h Y]]a1');
define('SECURE_AUTH_SALT', 'CWweQzteQCaRKkFkr>z:A,9@ `z8r#@HD1l[wYZSmm>N<J6>WyVnZ687ea)=l6Zd');
define('LOGGED_IN_SALT',   'S2`@n,oMzROJRSO3 34uOF;_}34VpkEpt {;aP ,G(:7/8[yyNLc{k<]/|Q>T%TB');
define('NONCE_SALT',       'r|DTS3Dc$Pye1Q1qC~~N =iIXD=(#dx.~##Qg(J= zIJwg(BCdJCe?.{Iewg%tJm');

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
