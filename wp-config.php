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
define('DB_NAME', 'sashafreaks');

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
define('AUTH_KEY',         'RBRijO%;IMF~P.[&/ekE`a{0n_@k9g<wu51Zl3jPg$pqk_pG-uj!.!mg@{6S_bD_');
define('SECURE_AUTH_KEY',  'ta3*c?Nu&:+e|da*&k~_)NLke)}.f:1$|-  a~}tZIQVt$z-xMXNqaqpB+Nci.Th');
define('LOGGED_IN_KEY',    '|Yj|mz-x8w87&6@DK^`zk+uHgO~KeKB8g;9g1louA}?slYpe;SEBN#0sN1+4lDEX');
define('NONCE_KEY',        '~lOJa;e|>RJ$!5qhrS`I_E^I?B)#Z=~L%)gqxw=x^aOcx7MpH|E[T8BB80^MSe(h');
define('AUTH_SALT',        '2oA,X;1}u%WS14au/aqhry1J}H.Yfr8Pukp|?rBWp|wvA;om7Dw^@O|gFgb+>*9>');
define('SECURE_AUTH_SALT', 'dn[=Nj=`?2EaLt.fNN8^M#4b0K{f0h|a|i8qi5Ca,zkLR F:>Vh?:i=6ZsckYrJw');
define('LOGGED_IN_SALT',   '-<d|Uh78RU@4Otn8}=xxu]]o4[g<miw?(S|EMpdxOFJDOv_Hv0nP<=.4|:?g3<!+');
define('NONCE_SALT',       'fr+qeBL 6% -qS]Nr@[<ob~qmy)g&oRkU_fHAizT<q{mwMoJ@q`X[|qFmCZGWc@+');

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
