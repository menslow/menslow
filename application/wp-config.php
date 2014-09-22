<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Local Environment Settings ** //
if ( file_exists( dirname( __FILE__ ) . '/.env') ) {
	require '.env';
} else {
	die('Please add your environment configuration settings.');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0|VsmiHTon3ccnmR[mQfUA[EEtT(q>{9Axt/trq-m,:,p?GC|F4[nfN<V||Z*xr|');
define('SECURE_AUTH_KEY',  ')):(:fP!5zaij]Cb`bG27_fU@|JYzs]Pmw)k[ a{qq_>$*9|nh!L}6%n_E8#RrP ');
define('LOGGED_IN_KEY',    'nR52FbkT5etohibn`0o!xVW$O^I9*A~zdibO@r|64Ks9+fv}=D6f6Xm8FFq.$|sx');
define('NONCE_KEY',        'TK},QjhPEgP!+T7q:RnXq4HT54(NEj3vtj:/Jrw=+z-#>|,t_j@gQ;ttc#fkTLfI');
define('AUTH_SALT',        ',}r*PSx;IUyIg=#eNY-B&;2 UZAHvmbUj!YWr5%uOw!zL|i8~:PUUhPZfbhNY<6+');
define('SECURE_AUTH_SALT', '9Q1gUq1|+X%yDF?U$]uv(U[%}PEKM~dK:BsqX)f.7cuYaNQEb9pB+ZyY#-,}*I:U');
define('LOGGED_IN_SALT',   'lg#Zi|mLwUF;;tIN+Fq{^K(S9M(_oxe-WMLOFQUD.=>k2fh`~P)]=+WB+52|+AD^');
define('NONCE_SALT',       '21}bk7q&d9UG+7s0iqM5=0+S+k,kK,5ODypxrjsU!PI)jsdrQHg6:8n[i$@b@c}=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpmez_';


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
