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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
 define('AUTH_KEY',         '<z`qIATCg?EPj$u1yhh63u(p:M%H]MyyJZ+.D;b:O45|;bbNxE._{+vnZcZ,2IB;');
 define('SECURE_AUTH_KEY',  ';,$Ci8E0{ ]KsK&+A)v,WQGct[--W/sjjSZ&5AjKLD)D|L|0Q7ub_HGflBoEZ1LJ');
 define('LOGGED_IN_KEY',    'c={HU8mG-j@NNWgMS<EnGE,s2O)gq()w+)QnS|Be_uZ`Mk/aBv+4od<ea|?m LO|');
 define('NONCE_KEY',        'jI*pCF<Q#P{FvYVX!{?Q ]gV]B1}`%]410neSw$<<84Vv6y!t=+Mq`5V:3fJ-VIy');
 define('AUTH_SALT',        '`Wp3|f-(?U%QT]+_}fbNfRFRy0tV>Y!-!#pJmm89foU`OpK|%vXl qBYkAA7XFol');
 define('SECURE_AUTH_SALT', '1,73XgfF|]Mqr57wm2J,&#q(`Pbz17qef-(~wb7_s}xzaIN|fv+JJCY_b+-a4{dW');
 define('LOGGED_IN_SALT',   'aQ;.a5D`7@(o^?`7Mu||ksE@iiwQv-;-.M1V!X@v*Cp+*]6mdl}.qWykcXZ~r7QV');
 define('NONCE_SALT',       '$XlX.h7/;[z][|$C6akpI7EN1]5 JZT|>$c|@nIZs}iOWhvIw2;j0gQ3PUTA(ilS');

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
define( 'DISALLOW_FILE_EDIT', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
