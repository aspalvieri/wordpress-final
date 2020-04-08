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
define( 'DB_NAME', 'localdb' );

/** MySQL database username */
define( 'DB_USER', 'azure' );

/** MySQL database password */
define( 'DB_PASSWORD', '6#vWHD_$' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:51221' );

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
define( 'AUTH_KEY',         'N8H<6D&Lp0)4@Lxp}{B.CYwv_u.Am9i9@Xw?8O/%*k|i%vqb+/1e+8wl.gSiTefD' );
define( 'SECURE_AUTH_KEY',  '#H$0V75l+(vrW^xQYRro2n{g>fQtu|-Wd:RV+[y-3u1J#o[YX|i*-YT7%Y{4`opq' );
define( 'LOGGED_IN_KEY',    '9 ZlHi<l@rjbbo)t%bf~eM6/_3c3K)@pQZu;KK0Z`O6$Th+rb;m,EK;&XG:s@#sl' );
define( 'NONCE_KEY',        ').j%EKD)9Z9:bKV.J*o:$R/(l{JeJ&52orcwcsXl7<Bn sKq0f*`GvW;l}Y*g(]b' );
define( 'AUTH_SALT',        '=lb4![7]|DtiZZ,g#!$xa67tFSVI*~D~^)zr$3~G|]!OL8PnH@3P7Av^{id@[e9b' );
define( 'SECURE_AUTH_SALT', '0AHH=Q@BdCT*h%AZ,/sua&cENpLJovH:8!8yW>8a)xvjwF^i.OiIUd)K-kDl5p2C' );
define( 'LOGGED_IN_SALT',   '!m-X=GN40o%G~?(QEVTs-FkKkD49pr,z@$%)Arc[K%z$R_G:lh0f}J3!^L^ubfUO' );
define( 'NONCE_SALT',       'm0~, kwBD~ZdO~vtTrI,NSm]>,~[F*Qx!4l-MdwG,F-iY.l! ,es@v!:1`<+NHT[' );

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
