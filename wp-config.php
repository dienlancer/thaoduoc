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
define('DB_NAME', 'thaoduoc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '7R?~Ex7J7wZr4J7w:%U+ O&P{SfaIZ.xBE]kRvgdZkj&ua<Y^4by.mm[W]ot<zeh');
define('SECURE_AUTH_KEY',  'Zv|GxQ]+rX]2K+:9g$N w{<S(bf3^/u/(LbQqF7X7}V_%*GL5cI|%_{nLY !+EBD');
define('LOGGED_IN_KEY',    'vQ,v9@.F6GOCoh<myz0~jK{=&vJ}aqVRp,xsI-DKQ]}0||*hn,[+]#ND~y*>.T.b');
define('NONCE_KEY',        'Lsd$,~<1T$uBtqc6NY4!F|~.l{0Jl/j3 >H`mrI&VYm;|<rsx(e!;RF6+/GhC[^D');
define('AUTH_SALT',        'eGHn[7xy{b0:fKKY{}#~X#P,aP<jGR)Yt.ZdS@|(Rm5b}mC->TbB8^u9X@GhTO)m');
define('SECURE_AUTH_SALT', '&wi1Ay,x@1!{@=mLW]#PYR)dym&OQnAc@pPwzD>e5F()[kQ-w~8bzsZUn<]WW;[t');
define('LOGGED_IN_SALT',   'IXnuDs`H</s?nC_N4ivbk5uFO1+2_*-k}KRje9f{U>(gcShOCeHtLl6yHYxJ:^:$');
define('NONCE_SALT',       '&8~h@(YAo4hc2w^`?!bXm,y2{PJGLA2ApibG%LxIm+eomY?84-mmo?ZQrZ(yyE^Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tdu_';

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
