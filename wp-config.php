<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e_commerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'w&|pa]nVe[o`wFk+aB<u>89Os6fIs>ZHBgIXt/?%32&ZA!_m)#K[)3$%xEBNSIn{' );
define( 'SECURE_AUTH_KEY',  'pG 5U od9vk`B/X],-<xF}tKP}7uk{C43}35V-I1IovO*Lx-al{lhu%DWP2N7]8I' );
define( 'LOGGED_IN_KEY',    'Ur ?aX)v&XT+cESOg+<0:%ef0lO/z9R_q4JE7j+@~onexr|~<f!hWmdNLo>>;zhH' );
define( 'NONCE_KEY',        'L+m}juB[B0=a|R7H&+TIO{6-}S*:O5B@2g -skb?hG^2C,Z1_>v=z]5Tug5LB/!M' );
define( 'AUTH_SALT',        ':uV*m3oG?44I(odwl]}uO:t-:+5z{fo H=)QUne3LRzn{,[!?l(7arm::zK!!Kw9' );
define( 'SECURE_AUTH_SALT', '+/|h6h]fYjo`)r-Jh6BkJUC?eA|>8j3ji#h`gAY21@je+Owhl:Akbw$g?BR1o@Fp' );
define( 'LOGGED_IN_SALT',   '</M,-f<z%?_gqWkNjN:n(iH)q6KSXG FH;F6tolq03a-c,p|t&-{XrlSH16uQ7Y<' );
define( 'NONCE_SALT',       'm5WzbqVE7ul)JkNMY=m.7=k$]L4Lkob(^eL1#Rz;1Cctd+Fp:43#wS)et^$^*SF{' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
