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
define( 'DB_NAME', 'sport_island' );

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
define( 'AUTH_KEY',         '{Uk2Sx>~p$^pTED:5<sQ~b!HUM>^1NhO<~k$pu=z%xzZuMH)`N$bZ~^LMK]6~<]T' );
define( 'SECURE_AUTH_KEY',  'T_ffuk,7(c`@M`:,aX-aNRWJ9@I9y;:j+tEdzZ0mx7{~~^+[h2HQ^ 4^P|]8#Gg?' );
define( 'LOGGED_IN_KEY',    'Z Ec_X/PGwg-J!p&8QH![t[jw0}`K@X^]!A)/;G#3|Z6A$Yx_]Q@L=nQiU*ns_[D' );
define( 'NONCE_KEY',        '.1S{13<gIk|17ECOYB|_uXk jlk@PPNl5(W5>Yx2[plNigM9TFPC]a5ziD}vHQv_' );
define( 'AUTH_SALT',        'maK=|j==>D>qTVkJJ#Aa_s,=[{`Fp83.N(1FRZW?Es*H4y/Ufj^Ye?!`U^ddPIq3' );
define( 'SECURE_AUTH_SALT', 'EvoH0oKdmf1GPss-KExkSPH9$$TqYzwsT=bf#t2%mG1P$B*OB4U5G XS$CCv=18o' );
define( 'LOGGED_IN_SALT',   'Urtc}^@RJ0T1efn+@B%GgsM+5ES{iN{.v=abt=D6zWY?Bu>JO4(p.Bcc*+i+Ei-O' );
define( 'NONCE_SALT',       'aoAW}hd<34_r|.@5APauT]r^bij>,JTz-w@SSRf&u:P2/6+1^?is{+F)J,tu AJc' );

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
