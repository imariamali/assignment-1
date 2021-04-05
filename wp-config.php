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
define( 'DB_NAME', 'quiz' );

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
define( 'AUTH_KEY',         'S+bP z|k=Z|p90A_<^N-?3w:Y~r|%.0o-4,Gz7kEZ^h&l]]yEUSIuu>;KT5i;xTw' );
define( 'SECURE_AUTH_KEY',  'l%x=pZR0 JLoXvR{BRKn,[}C{07.ix&RT,ShHhpTg/@&F$aP3}OU<tb4jQ3:D]II' );
define( 'LOGGED_IN_KEY',    'Ro]z.u|Ee7<@~=zS|iN-e~:qGGoMSuk.PdC:DJYN:u$95?@*{QT@l0mE+{-6+0R(' );
define( 'NONCE_KEY',        'LHd}Oyxz3r~@l6(IU!PC X7a3OfJ!!sT1:,6Y`tO4%za@H=!XN;U>g;|XN$j3#d$' );
define( 'AUTH_SALT',        'r5|(vWV||_cA!<T5rQ@9{uw*~Gu|tJ #]x={m2xx7_l6%}C-48AR$3AJTMiRf62;' );
define( 'SECURE_AUTH_SALT', 'L%9rnIkiA DnN9jI;KZ=QPsFx`s1vdYc3ddWYQ?PJ(j;-*T@$fgEIQ27s]GUc^`D' );
define( 'LOGGED_IN_SALT',   '8I5?xb]U0bX$GQ~M7d=>l>i_$:kc<vl816I76o2K:*wvlflj*#rrx*}$Dl%sqN2_' );
define( 'NONCE_SALT',       '%WVn]LO/5w2=:GoB>`b3r1c>Ms^d<:S0OG,i/,,qy@&.L9(aG@n8=jn=8LQLc9EB' );

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
