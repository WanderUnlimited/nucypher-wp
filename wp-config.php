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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nucipherdev_wp' );

/** MySQL database username */
define( 'DB_USER', 'nucipherdev_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nUc19H3R16' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<t3R- $?N69T^iD_jZ4a6x^ch3$tPOBNj~J7$V}]5SJ+:hq||U}6{Y5^gISmRPI2');
define('SECURE_AUTH_KEY',  'ne1LGlm=KfMK?fbebi,0hYQ#jKBRa9,g8<WInwu)Z;R{-n2z@|`^*s?Qlpi:&L<a');
define('LOGGED_IN_KEY',    'JCQM#YqEe|ae?C<k#~]q^YRuVKi1{~1t/4GQhMu_,G-?Q>=TTj07WUCnAzLA(G_^');
define('NONCE_KEY',        '-@WdsElnzbsslXgN^(o7|I0Y9s6GEZ,%Kw;vp+|g-z.S@,.:ic_;%,n$Sd6~Dz9l');
define('AUTH_SALT',        'AJBQc<i}Nv<+{g{SL]=TpROoM3hR`POf!4hm7,|d,ZjLcHfX5[esH+N{U|7P-||x');
define('SECURE_AUTH_SALT', '1s6aM<U=WSvRSK~ZM})Lny0$9|YNg6Pg7Q)B%g@_+b6bz*9/DazJ[|}WE-g@k2DW');
define('LOGGED_IN_SALT',   'y}Y9QF0h9>]=6}I.4KP~+Kf:?m-NnU`Kd6wJv>z)tkrNHUYWBG{*ciF97dx.+=MX');
define('NONCE_SALT',       'JLeyi+h(8wi{p>T66JYKQ]x_AOF/+*j;]1A3bxl7M/nBVd5,CcTI(8<l<hbixM[2');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

//define('FS_METHOD', 'ssh2');
//define('FTP_USER','wp-user');
//define('FTP_PASS','garrat-epsum-lufa-ziti');
//define('FTP_HOST','127.0.0.1:22');
//define('FTP_BASE', '/var/www/nucipher.dev.wanderunlimited.com/');
//define('FTP_CONTENT_DIR', '/var/www/nucipher.dev.wanderunlimited.com/wp-content/');
//define('FTP_PLUGIN_DIR', '/var/www/nucipher.dev..wanderunlimited.com/wp-content/plugins/');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
