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
define('DB_NAME', 'restaurant');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'aB6ZW=80A/}3yz6wFAviOJZOt-dM461_4.|*~O&xo%nL=bQ?t.J>(5}&*@yN;g#l');
define('SECURE_AUTH_KEY',  't|evX+<|P;}Y-@&-XU6c?A@lI^&b-$b8#@+H{w;95kCre}_4l>A$yw(ujFf~Amz;');
define('LOGGED_IN_KEY',    'l:*B{U.DAh}^]ua#jF~Js^ho|5*Z~FleK6H9q|aYhny1O2XcsBsVE@%IcoNHYd#[');
define('NONCE_KEY',        '.16;$h+8o#T<mY:PFcUeu88!xXBY Qa{ |76,9ZRh*[BT.@jKz+]Vv^#-6v+5:93');
define('AUTH_SALT',        'k.4c]!HS&/`OU%3hEd=;-Ty::0&N&yRjy.amp4:x55NO/sJ&v:h!8_68fUx:s$`|');
define('SECURE_AUTH_SALT', '?;Rm:-|a+*E$$pP$XkbF7%f{D.Ub!-oAnw<].FNRj,+5rC.RgY QApMF46JYhmiA');
define('LOGGED_IN_SALT',   'L# #B>%qdU+b)KNhK:{$l>Q+8*u22!+S)2r?0_DH*0xKB&Tw$!&]^Csmdn2b*k#(');
define('NONCE_SALT',       '3y0r1tf-Whq|bMn7K]vEv$iA}-jJM${,6Y7YqNGbZ@zB!-Da a3}{4D82-+a[m=0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rest_';

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
