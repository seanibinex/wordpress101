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
define('DB_NAME', 'wordpress101');

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
define('AUTH_KEY',         'Lw$<or>ePEEBV36SnbmDO5-B_#T]MsZ+)Kk?9llWH>c!s]/JNZ{~X#g%P3YW<W,F');
define('SECURE_AUTH_KEY',  ';wszH%zW4Q?YgT-W81h{yJv>0Ao*{K)O][L<eUSr0=9yE$vTmn]I>]gxg6KG)zH^');
define('LOGGED_IN_KEY',    'K+K3)50bg1XciL/| |1pll2rH5q9gB[N.&b$I9]J.nW<;Wd}nGi.~p3=D6RN@$O5');
define('NONCE_KEY',        'x<E_Fn`V!m+U.Pnc4S:w_EkAvbdB7>3zB#7 u]#[I:$S}=%&EmV`&|q+<#F!zarZ');
define('AUTH_SALT',        'ntBqKdmtQ1wy{p,5N@reW2MycHCA9N]vgK >H]qIO.9pB/^*M]lOdx7Sf /P74;`');
define('SECURE_AUTH_SALT', 'r.v4Yj_8m_8JR&|/t!L6{+mcU*4( 42 |Sh@oC[l=}?6A+XBvIN_9%bt.q.$PSGs');
define('LOGGED_IN_SALT',   'lrszsGR]%dBa#kG55W3ry+Un5RZwa| qd5@CBuq b0*6 /QHzZ0BB@V4lE}%O>r.');
define('NONCE_SALT',       'QLrj~64e~QW%rsk:A0mvuAv,8{n[)t_)dI?7HX$-NPQ}ofm8*hL3bE+^B<@*ta[&');

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
