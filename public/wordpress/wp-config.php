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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

// include wp config options
if (getenv('APP_ENV') == "local") {
    if (file_exists('../../../set-wp-env.php')) {
        include '../../../set-wp-env.php';
    }

    if (file_exists('../../set-wp-env.php')) {
        include '../../set-wp-env.php';
    }
}

if(getenv('WP_FORCE_ADMIN') == '1') {
    define('FORCE_SSL_ADMIN', true);
} else {
    define('FORCE_SSL_ADMIN', getenv('WP_FORCE_ADMIN'));
}

// in some setups HTTP_X_FORWARDED_PROTO might contain
// a comma-separated list e.g. http,https
// so check for https existence
if (FORCE_SSL_ADMIN === true && strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
    $_SERVER['HTTPS']='on';
}

define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));

define( 'DB_NAME', getenv('DB_DATABASE') );
define( 'DB_USER', getenv('DB_USERNAME') );
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );
define( 'DB_HOST', getenv('DB_HOST') );
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


/** AWS Settings */
// define('DBI_AWS_ACCESS_KEY_ID', getenv('DBI_AWS_ACCESS_KEY_ID'));
// define('DBI_AWS_SECRET_ACCESS_KEY', getenv('DBI_AWS_SECRET_ACCESS_KEY'));

// define( 'AS3CF_SETTINGS', serialize([
//     'provider' => 'aws',
//     'access-key-id' => getenv('DBI_AWS_ACCESS_KEY_ID'),
//     'secret-access-key' => getenv('DBI_AWS_SECRET_ACCESS_KEY'),
// ]));

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o)%Weujga&t,_KEI$>^O[B-^q>!c-Vh)(]orQ/0p<1qT[RCRn jx*,VyxqB1W$9-' );
define( 'SECURE_AUTH_KEY',  '2=WS:&4w;OwfSo#mn yr?<3Lsol3zs6e/Rs1]7Va73e1^x?HK8o_<pbJ]p~6nuF`' );
define( 'LOGGED_IN_KEY',    'g23>3&t]DCV71tbTjwH+Jnz`(E[6)uFLqA}6EdM2&qV^=%IjL?T|ElY0I6+9Fl.J' );
define( 'NONCE_KEY',        '1<7Gm}RBwN +*Lgs[1Pt4C.cbo!$/n@7F!&{U;:6oWMG$/Gm`]LOFCj?,:_e%~y9' );
define( 'AUTH_SALT',        '#[X}Xm8qX^/zHYQG^u-81@U|p.8=2B176L}]SLo1Z:jUJW&br~xY%l!R/zz,CR>]' );
define( 'SECURE_AUTH_SALT', 'W3yA0pM|7h9N2QC:,guL#G-1@6T(4Ws,PWQ: x`bFaeI[o3wSt~AI<S0?~v+_4iF' );
define( 'LOGGED_IN_SALT',   '^-z{@iUNluh`MwHw=c`GIc^~R@!6Y.YVmx:Ft7*rLFvHx%/(;bOlE,T^M5/Ha{5m' );
define( 'NONCE_SALT',       'LGT}nRaTNxctATLcaVtLTNF_QoSdX!Ng)7uEZBp+zbZ@!_=QP ngfRMmDF_7773~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
