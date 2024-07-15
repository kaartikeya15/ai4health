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
define( 'DB_NAME', "aihealth_wp" );

/** MySQL database username */
define( 'DB_USER', "aihealth_wpuser" );

/** MySQL database password */
define( 'DB_PASSWORD', "=D9c{F,](c#q" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '4L?niqgKS1qf9?+Xe =R{WcIU;#y4E~<x<i ?2QN~ Of`{x@,&<-0n]a*i&l,|?x' );
define( 'SECURE_AUTH_KEY',  '8Xl)B4T46?8SdgIm(yE&siIPJ#l5RuW4..F_3A=IcEy6{$}RL+OT}fKlt#0m%}.Z' );
define( 'LOGGED_IN_KEY',    'K_)?)3[bG#[Co7/tDX1|=C%Q}V|>-!e}ej-vo+7`07cbIzEd<r$Bq^VZ<NF##EO,' );
define( 'NONCE_KEY',        'qN5?[f[VDTbE9:D;RQ06%aRoHt%7y*3d>U}7t_CtZ)6UG_Ig_SaE&bOX{f/^aaBu' );
define( 'AUTH_SALT',        'XrfF~4dA_Ay.e#k(_sXEDuJYcm.<2uia|EUBcq?nHUkR,<*#m3g7B.E!acdol|^j' );
define( 'SECURE_AUTH_SALT', 'sMhigS_F]N<f.To{Zxb@cV!xdPGW!|r*m%;PZOzBRx2, ^,#m cgZlTM19R!o= !' );
define( 'LOGGED_IN_SALT',   'HT<Oyf-.CVU_xkI:y@&EV-/)w@yHrI~~%WlJcr]]6pdojd=6O0/ANp%.EHKr*;*2' );
define( 'NONCE_SALT',       ';-!5$&D_ mzB`;8qn+,}FlIrJ22Kf$^B>JUWMav.csI2R^&m#^%Tqgp%3X>GQEfJ' );

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
define( 'ALLOW_UNFILTERED_UPLOADS', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
