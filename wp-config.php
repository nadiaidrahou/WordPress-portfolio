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
define( 'DB_NAME', 'base4' );

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
define( 'AUTH_KEY',         'a_Wv@EzQ?l%2R.Tqc7+sM9XJYV4Wmkd 8Xu2ao^B^k<!A&lOWMw?d+mL4)(NB=7r' );
define( 'SECURE_AUTH_KEY',  'eRqF0(4F4 cG8Z>tH]gE fFEhA5m3GtAu$bq}-]D)Q$Fy[%s8E>GBh2.];_JNu]0' );
define( 'LOGGED_IN_KEY',    'L>.q>kw=LxF0g[5N;ZODq%62u~!:*}X5)+v,bS`Hqz6g BZR3oGxO6bsso7Dihhh' );
define( 'NONCE_KEY',        '@Y!-2$fB!#r*51$Xc#E$PwA>xdZm JcN hKNOi,8>Bn>[sz%-VjcD#,!;p~f{T4=' );
define( 'AUTH_SALT',        'rQ%tuJa2n.iYwDqO3]_5E3Khx!|/%oL2J)/p#Fn4/[FR&1fCZ8==CyD0dBe]+!)d' );
define( 'SECURE_AUTH_SALT', ';.)w6_!SnZkyC:|!TY),]vH81unV]W^d#.,W6ggX=+:rxq&|vkEPjkM_i6P]f`W{' );
define( 'LOGGED_IN_SALT',   'Aa>GRx%VNFxxf6@J.Rh+}2[Nft~!EBKLvQSH<z-cni3id]M7)+d~pNekc0Of^IVK' );
define( 'NONCE_SALT',       '|z,.EjYm.J8rG0d)@e29 pw<-M+6)bsb_`r/3;OgS@.Cx}TU//VzS!-A5<2*C]jQ' );

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
