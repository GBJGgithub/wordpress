<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'bdUNIR_streaming' );

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
define( 'AUTH_KEY',         'mcc2w0Jq_k&^J`U.GmwwdUnq$Mrvw24n9a*#RbryOZ3LM7N*#,M9&qpd]l!tLP(=' );
define( 'SECURE_AUTH_KEY',  '#euQVkB}$6l[i(obgNn#=PyqDu*ITie,VcI#Z`TV6xb_y<v38!G!*2b?:{t4Tomv' );
define( 'LOGGED_IN_KEY',    'qZTY^hk|Rf}FGW$Q+7Z{j2fhiOikwPbsnNP^+R1jd]JZKL(zu$0eZ1!(!bqoO>CJ' );
define( 'NONCE_KEY',        'aY6AocE}Bj<2TTFY)C&={ ;<RGGMrop-f=~gMpq3R4 T_[,Ba=20Gx()925E)dT$' );
define( 'AUTH_SALT',        'e@mNlcA2W4Kwsz6|XHyZU701w556~sQv]e34]_yUZFGgzGC/N:JjqRriaD1hb2G!' );
define( 'SECURE_AUTH_SALT', 'I=*:dyk.=((f|V0:mp;Q4MEyb5pRR:5?c#xI9GlN5N#Dp_:L:Ms-ILxQP]dZGBV#' );
define( 'LOGGED_IN_SALT',   ')i]WSn}!g8~m^UoA5_Rr@xFX@O/sTKbX2z|IYyCxtP*#[WzgZ>w*[9p&BD&cu29[' );
define( 'NONCE_SALT',       'qm(G//YpY)M4_ww-|! 1:9f06|yj>;D/+8}~z8$=g/yWYYKuq9tvGma}T#Z.xYLr' );

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
