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
define('DB_NAME', 'hmcweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Genius071592684');

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
define('AUTH_KEY',         'vraxg3>JZT@?_>w*1J@9gQQUD#Y-r6Gvemxv#a:M{h7h1$MQTmdZ:0EqbJ_ck?G/');
define('SECURE_AUTH_KEY',  'W1-)eY4c`ranqm_L(+z~iiE-~YH)G,K2&v),ArA3W6C!=oWyZi-Q2GLvSDRXD?8V');
define('LOGGED_IN_KEY',    '1cd`E-s/cFv^o+Z_3)QvHR|;L`&TV@z(U{Er+A|Oc;2VK;L*7tR*/&Q2!lO=2k5s');
define('NONCE_KEY',        'qL:bZz^#tK+*Gb41Y,Do-7k,+}R*DOLJ%-GMNvvi,^;c8t^)g.8qMOB^h?)7[fGC');
define('AUTH_SALT',        'TQCU Q>LSu5.K3Bcb|-QIF:}|Wb/8c&J><`Y[;JQDSZ74,-Vn,ch9GkN|!_l$7u5');
define('SECURE_AUTH_SALT', 'enp7^DYEK,-|Yg#.^X1=+!Q_<^!}Entp+E(zGJ]iFS6|bGj8(Rl-xy7%:q0/.8xT');
define('LOGGED_IN_SALT',   'H71}dt!jf6?FmO]njKZSTYp|R5ZJNC4?~zUh{SAc.){Bxj($A2 |-yI+nw+d]%@H');
define('NONCE_SALT',       '-x@D}-$&-<`V*Br`X]G0QI(-x724x.G+FKBWXW9p<!L}#B0/K*o.9Uj)3r8=][>J');

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
