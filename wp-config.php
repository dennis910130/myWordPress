<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'cs910130');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ')(le~/C[Y=];5BhZKi5z{O-vi-1y*86UK8Jw+9rJ@%-6H{fGVtEIt-|GH&N]^g[&');
define('SECURE_AUTH_KEY',  'xy4:/:wY,4K0^NEN8e!hj*n< ~BU(ITVzRnH^cu>G@9jd84X>-z)Z_t5l{YI<.OZ');
define('LOGGED_IN_KEY',    '3CP_m]G1gZa#5NfGxA36@T38l#)Qx|M+7=LQ;?y+LauHa|1gaP<|h#^F]K@-=j]q');
define('NONCE_KEY',        'g-Oow!(2Z4VL?RM*d%:tlT46]B+0jONWV.86Z!B+Qz$]CnD=Ij67DNC)XtgBvwGn');
define('AUTH_SALT',        'V1D|4RLeCrmyDV+,V]QP]Q~hT56-ID$Pdle07b[P=dY35^}|h+o);y:Qm,4*5+j[');
define('SECURE_AUTH_SALT', '1o5qtOFMdvA,a2J|@.-Y%qWP+VqTN+:;|>g,<+g-4A_2WWu(F{Mi-%(Kj+#NlP4&');
define('LOGGED_IN_SALT',   'Ax7Wo |YaC4+T[{qF(^LyVt@vBs ~|?hRq+9dhup18Nbv{NPqH#/Ri%!z>_tu=1V');
define('NONCE_SALT',       'jx*$B%.|N5F%G{22*2l-r}9kQ=XO`*f(3J+]thOT=SAY2BaHpM}PcQirNz4&jjRJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_1';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

