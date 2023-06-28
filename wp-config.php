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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'language-pl' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'jSIDZ6AOE&ncIY0xfW/wMCeA%|O]DNIgj?d+`)w^L8k7]m}.L8x) 1+kiBCD0rZ2' );
define( 'SECURE_AUTH_KEY',  'gA+&Px>xE|Y]kO^_d/6N(!p90=k(B?%[GPj|M>GK,=@Na+}*l`j`</cKlMy8p@*]' );
define( 'LOGGED_IN_KEY',    '!Ba:f6DRiEn$bZv%o)mVA5Ado=KpV:FP  ?gSN74/w9[SMymLcT$Q2,_</y +Mm_' );
define( 'NONCE_KEY',        'E36Y>u,ir8pZ/I>w7e_u0b3NPy(sU?vPzme*} Ux}!<kCE? .T0nG:IgtUlNbmDK' );
define( 'AUTH_SALT',        'R.biw&ek<G^CJrkXXi>f.+(>ZWWWR{IVZwu!`#}N<}|q&xU#-Kvo&H57CUgIa!i|' );
define( 'SECURE_AUTH_SALT', ')_#5Skw[N1$@2a$bzqXetXp|O8Eex>Q|&IWIK}]$]&2.H?l>_m=R4R4_%pRnvYj6' );
define( 'LOGGED_IN_SALT',   'q?0DKdw@rF~uFBVI!JcfH0^UPZq/0f+9PW<@UXdIB8q*jYY@w1XMnGBS>G^vw}Rk' );
define( 'NONCE_SALT',       '(=m7ZJrmI8B =N:<%[.qaKG/S@hn~mG_PObv?J3vU>F;vo70[4K@QM/Vd^P3FXm_' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
