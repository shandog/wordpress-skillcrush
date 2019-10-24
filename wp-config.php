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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'h#9D?Hr|X?8(J7q8.7~p,9Z&s@a)6AP^{7DV>dIX*a.|Gk=lr<-CNfv)YP+y2:j^');
define('SECURE_AUTH_KEY',  '8?C9hOZK@|xY9puq=j7=-*Z[g[p6Zkg&Eqfh/5#pWA_&yCz-N&pU=+^LDXiyBE2P');
define('LOGGED_IN_KEY',    '(LnBQSR>6`a$_>$-m@i{2yxVJ8[bG2#TjJYh+{(>9G6&5oR%,(Ky?uw=Isfh[+FH');
define('NONCE_KEY',        'yc-J&PY|IY)eu-]XEs3BEoKNDV5:%TE@33(# ?XwWas,T}vHB1=l%=/Uc+6s -!/');
define('AUTH_SALT',        '6 <$]+ruGa6Qa.E-)o>l!y%:go%/RS@sfVW]*EC{&ZY*A(}OTn]pDuXD}].i.[W#');
define('SECURE_AUTH_SALT', 'S[-jg;Aiq#6V9l`T,CRSw!Xv98=t| >A>tV5a+l9>|zh003cxTV?>V7vt}-%}~e6');
define('LOGGED_IN_SALT',   'A;=vUz7p~=W}A?:)?h`a!^R(VoDxD/2-:_Q5E Nvk`U/|2Fr3};T9hC0] 4>!r6q');
define('NONCE_SALT',       'P>k5d%UkoN&4}o3:kU~[czCE|#:[z1SiIQ:zPoDhir|<$,4I7c;?4Xyl/n@!6^2{');

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
