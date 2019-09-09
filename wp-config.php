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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{qd~x$4PD|X.s!u$O`7T@!QWd=y ]`LXh=xrc%|9ZSK&[{:|T`!7@ytb|#h5+jx;' );
define( 'SECURE_AUTH_KEY',  'Jq/U4+=$.>n;f:Ul9|p9[kq~QlXD.qWweoHLfzb%X1f~xXlO&B,10]3g<^1`Ks0}' );
define( 'LOGGED_IN_KEY',    'l^YEX</dN?G7Ljq2H~ghfDdaZi/g[ppt7P63na:WXlERKyv09A2a?u/NYS-JIKW&' );
define( 'NONCE_KEY',        'n*,]fnm%6|ZgKa[}=LkFH02JBqDS?-PY?gDL.!ZT5~c.PO[K?g(floA%0roPI/*`' );
define( 'AUTH_SALT',        'hRR$BvB!08[99amp;Vb@gq>xbKWEQ%BGoFf_)WK^2$6[kHkBU^zxAt.Db5OYh+o}' );
define( 'SECURE_AUTH_SALT', 't>3Q{Aixc8~zYk$DS#f/wFNws2sS}n%7idMsJu8qO|$/0<NPE<Wof@#=T`k2taIa' );
define( 'LOGGED_IN_SALT',   'P90&oY8quIiIyUZoJee&xK89a1&*ZpI2CKjz9EweU3Mz1[gvNE-vS>L{$U~1-x,I' );
define( 'NONCE_SALT',       'C-:~:{AhL}*,c$fmB{*ZaEV/Z{X<<@`Ej;7v{-J|qxf1>dZhD^C=}msG+C/7gv2$' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
