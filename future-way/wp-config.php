<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'future_way');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ')|^w;[QgA<fP=O;JVC$4c~zaF#P:2r3LMxsTXlLLH6{U,jWk:+~;k*18qldAK`i8');
define('SECURE_AUTH_KEY',  '5bJ]1nOR@W fD;=V rJD,](+nuZ@d}co;!_?5FOf6=3Uo#t<Nm]h0m(/V?v uqce');
define('LOGGED_IN_KEY',    'je2({`}qb%4+ q;(g]!g|HD$b+C[&9v8^.-^-&&+uhb#>VGT4.JL]s 3nW4rd{&U');
define('NONCE_KEY',        'a6itRD5@)a3uc%[p,Y`A?0r-^~PB~SA$7b<ZB]U?oDWIg/TaP$RH|67[qVq<a*+p');
define('AUTH_SALT',        'b;FKbtP7`3~{fonx?-1(P$O7bwh?,*_2C]DEA(P=ANGDC2BgP]ME|R, #:CoIOg]');
define('SECURE_AUTH_SALT', 'fc~~(4zRa!mFn&wqwb6?[&m>[Z.007J=dXE,NeU7.I8[m^M:H`Am~4W*_eKU[L<r');
define('LOGGED_IN_SALT',   '=Y<j|#>|/>r]IpC@^[ZCdZ^az 4cG#h:],Xg/ts0x[ipS8QipJ-PSj3T!#~*u22|');
define('NONCE_SALT',       'P8cgpL8e_H}U?4.. Ben9F(QkQ;-=hJv~WJ91]g1f(yjG0 ~N&+POhql7oq`8YUU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
