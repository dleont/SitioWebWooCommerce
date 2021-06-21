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
define( 'DB_NAME', 'word58' );

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
define( 'AUTH_KEY',         'Jp,K7qZc5WVk_na.NJ+*@znbzk .76<EDG%4b;9t|OP,exRbxe]Fpkt4y:M%2hk!' );
define( 'SECURE_AUTH_KEY',  'A8vPOFg/1Z0.WXmc?|@gmZ&i`%j(^(X<7W#:b?~g]i8>/}#?zy0eu!pnTs/^B),.' );
define( 'LOGGED_IN_KEY',    '+7w.QVhhj{nYmpgvLikZI_k)nuD9<M^.HvFBI;>|7M[.76fs-3jimneGb/0T:^VA' );
define( 'NONCE_KEY',        'h(QQ>8ctbkB<f@7)y7@[C1Epikr9[Dbt9XqQ?1bF<,Gx?qdEVp_%j~n]7TE5*=_{' );
define( 'AUTH_SALT',        'xRR:b%3U[I]-RxSuTh!KWVP]FCU?CIR$hj:MGm`F$iM5[1)$mR-E`A-F?%WFWAtG' );
define( 'SECURE_AUTH_SALT', '06>c4)%+!i>m>=6{+E*RR{wT;~aw&P?EH3A!8LsS7k7diq=j+0fNaa+_!y=F$h2A' );
define( 'LOGGED_IN_SALT',   '1|rmvz|{H]>3{c*-cya^]jbumQ/`7|u0ze+0S(~7}KyK}J&Y>Y~z31D:q+qpK`ND' );
define( 'NONCE_SALT',       'E#!N$wc2rdA[S3CtvOyqq=(lt63F>:F{+<V}z}%DZ{EzW$wp!~zWw E2U3}_^]4u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hp_';

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
