<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('AUTH_KEY',         'M++<Ut8qMmum!g-/femvYK4wUHMJX!7BBbVd@Lx.vQ`|?R9n;$$Ey+{)N(fe<$N?');
define('SECURE_AUTH_KEY',  'rggq,Qk*:|jOX?=8QET3vjB5c8,gwtq)]np1qXY #|i(HCvQ|Uq6`B*[g(C.Nu)U');
define('LOGGED_IN_KEY',    'y`Tu1_;C`EPVD[DmMWyMPHUBOQ-)~aeEG?NU+7GR}%HhM@z<1B?vIKaw~=c-YW2X');
define('NONCE_KEY',        'Xzm.4>rJo!($Z@UE[hxQRth5p>+J~V]Od:O|~&5k=xD&Jy~0amXow]1CMv1T9t!B');
define('AUTH_SALT',        '.O MX3]W<@BD d2#j-Rx}1 3{LQEta_*Muj{O@51R2VKq+7aCm+Bu5S8Z.jzmqf}');
define('SECURE_AUTH_SALT', '1Oehja<.$J2ch_T,^|;%EXU[&A6-E-dD@xa+jQiJ!dT,!m[8*L99R21Y|9<&dVqr');
define('LOGGED_IN_SALT',   'W8NWWt~/$eM-Oda26XcD{5+p4$2+l@{jtr33#oE*!RQK<U2g=_a%E`/=A?,a|-/-');
define('NONCE_SALT',       'J<2-o,B>zSA|^k%YLae!<7Hx/fbZNY0LL|YL8*s(c{cih/onn4Cq R`Xv(Lb|&Zr');

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
