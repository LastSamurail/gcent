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

define( 'DB_NAME', "gcent" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


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

define( 'AUTH_KEY',         'Yf5,w&(uOT>MK~7MC$7ECmX8W]W,!E|SfCz)Ii45X_@[GS0>1@!Ty[Zrq-l#Kn%A' );

define( 'SECURE_AUTH_KEY',  'ctCnI7>6W7]eSi6pmo|+rqD[<l[bB!B5I_G{Ss:eTI(+`gp5xf@FBHVySn+Aa>A<' );

define( 'LOGGED_IN_KEY',    ';Q]ZR7hb,>]W!6V54+)BBz`S_4z`a/.AIb*~4*00c0E9:u&w,1BO=0H/dR# =w[]' );

define( 'NONCE_KEY',        'dUzkU&*-DtUC*>e$_>9Jly)2q?XGu6iIOWk>4JL5qdkDD`P(uB,/?dGwo118BS9%' );

define( 'AUTH_SALT',        '8]xJ~mL7RAKsVu, 0W:c/%Y2w@!>#O1G*>uchF1raQJnYl+KNJ:BZACdpcv4CN0-' );

define( 'SECURE_AUTH_SALT', 'u;eFrjv!}PlW1t2gWrQ[CgiC~PO9+uQ$j}PXy#OvU{r`v{&X~:;!p>L`y= tz.Jw' );

define( 'LOGGED_IN_SALT',   'Ws3ljCL<2&BYPC,9ZB2,rH5EOT_%-Bs{anv#o[KnS|U%Qtr(@0;6@bsqZw?$=rD;' );

define( 'NONCE_SALT',       'H_Ie}P@{B.`5ylaU?=:d7R_-]N>BQ&:zDz+N;^KczcME AkXSULWE_avn_8 lkGH' );


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

