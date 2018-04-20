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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Password123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XkX>1H_BB|Avk)+dW-)KS<SV$)=EiyRTDaN/jXtEN;DM#Z(T3O.=>PD VTx?w[E8');
define('SECURE_AUTH_KEY',  '_uX]BkO+i$;kJUPt}Hf!-5 b6pKN4{s1=H0Ie)PoYKIrm|E0QS%;]Q)RN/2F~FKj');
define('LOGGED_IN_KEY',    'hV}SthYOc]T%WwM`gGK4*Cb?/G5Xrde@4D,.z>ck>[G-JtR5UtBX{RE4`%71^8P8');
define('NONCE_KEY',        'b^Y2Es4Ub^Y~aPv2J;lmTZVKSeZC`|b_vvv0CgwvdwoDp^m6$(@n_N`pGGQf~c1g');
define('AUTH_SALT',        'Bg=o3O/$vdtt?19)RG^HiJp^=j0>=b#.|=#QcJG TLxcF#,vF3;4Lr5VPf/E&bPj');
define('SECURE_AUTH_SALT', ' @J;5%]PIK%YZ>eZDnIo48K`yW=^a8&vYsZc,</&FOs>D~_/~i~:}gL04%r_L:|*');
define('LOGGED_IN_SALT',   'dkbo5S)9V8n)Jbgik[ 3Q+E/5ipJ;nX7%A6O]!R>kfiFB8^5sWIR`v29(L0bh/Nk');
define('NONCE_SALT',       '),W.Po[s[m-4(qd*>K&V.ste@]BQp9=!]Gs)197hKwmQs^~q*c)`;d0,i0:*r@Zg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
