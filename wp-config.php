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
/**
     * Composer's autoloader, used throughout the project
     */
    require_once( __DIR__ . '/vendor/autoload.php' );
     
    /**
     * Dynamic home and site URLs to handle both websites in all environments.
     */
    define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/core' );
    define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'].'/');
     
    /**
     * Custom plugins directory shared across both websites.
     */
    define( 'WP_PLUGIN_DIR', dirname( __FILE__ ) . '/content/plugins' );
    define( 'WP_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content/plugins' );
     
    /**
     * Custom must-use plugins directory shared across both websites.
     */
    define ( 'WPMU_PLUGIN_DIR', dirname ( __FILE__ ) . '/content/mu-plugins' );
    define ( 'WPMU_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content/mu-plugins' );
     
    /**
     * Custom content directory per site based on defined constant.
     */
    define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
    define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' ); 




// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define( 'AUTH_KEY',         '=aB(#l@Ju+91k`OvP.+C7p|wnC8*72cvf]|M?fOu}}xE%,obPV0gD`LDxq$[o}!,' );
define( 'SECURE_AUTH_KEY',  'Z[<gYXNbdAx|,lVr5WY9xg70tX Q!)_7.L;p;!&*`ZH9FyU4QuH,r%U3F/On5E3G' );
define( 'LOGGED_IN_KEY',    '^U)$h{}(tUKX[$fYjj;jJ5(HH/q_BMQ-&,)~T;/Y4:*3F(/Yf&`7FmBlQr-$T$[w' );
define( 'NONCE_KEY',        '-_}/Jw_TFD6oG,C(2[Stq>gahnUCg~)r)[j4J&q(diUhO}GWi@kApD[:#e52|e:(' );
define( 'AUTH_SALT',        '6{_*i2Se0Sp5YOZ$vRw.U[b,bz4qH{2Dzs).R?m,meg?u[c)|z)}/*{G;m6Ev@GC' );
define( 'SECURE_AUTH_SALT', '[i@C4t Jx~|(mW.>D=mM-O_9s>yi^Tnx) T4bccl#v6Rh)(YdSY5GbF5]+:gQk^D' );
define( 'LOGGED_IN_SALT',   'Bl}u*(F*lN,#t3INd!;SjB`AlQBHuJ4K&Npt[-Hbh~*cy78uX_xC:fx!:oMy~B|[' );
define( 'NONCE_SALT',       'zn>T1-Qt/0E{SXx4VS<-A!eyYF%#`h@rFG80.})PN]?Fsx5;>z3BdJgDTl/Hdn<#' );

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
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);
define('SAVEQUERIES', false);
// Disallow file edit
define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
