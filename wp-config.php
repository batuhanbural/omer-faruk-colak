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
define( 'DB_NAME', 'epiz_28139708_w496' );

/** MySQL database username */
define( 'DB_USER', '28139708_6' );

/** MySQL database password */
define( 'DB_PASSWORD', '(KSLp3)885' );

/** MySQL hostname */
define( 'DB_HOST', 'sql109.byetcluster.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hljszdwotdiofzwutzd6osnxureysechahnqxf8weoybriynmxn4lrxxjwh8kg8a' );
define( 'SECURE_AUTH_KEY',  'mpb87om4epxvnjo3yah0gndbmposi7wwilcml44u7nroxxlnmdgaxmeuebvljsqt' );
define( 'LOGGED_IN_KEY',    'o0dfqynwjwx4xtaztxgq5sqo4fahvooajdhz5yse7jpptfupveeneymivkfbdgg0' );
define( 'NONCE_KEY',        '4x3y36ggxdgykqusasbbsqi2dfo72knih611qn3qjbddt1uy2htntxinikf96rbr' );
define( 'AUTH_SALT',        'u6lzh02wwq4nofeglbkh1enadixeiqlncltopvmsognjhikjfmirzd2ckedwka6q' );
define( 'SECURE_AUTH_SALT', 'qaujzzvjwjjmnkqm3pimusdgtpszpxuvvqxpni6kpxxrhir3qoqevhuz2mner5he' );
define( 'LOGGED_IN_SALT',   '8jxibkib6ic7ajzy2ptunut5yb1mlfwgc0uiftqpowectozqgigkvnqdxgls1grg' );
define( 'NONCE_SALT',       'nwxyekmv0a81n8v61e7uslttppvl7bup0n98vbupgwi30pj7pxysnexitcsvicfp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpoz_';

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
