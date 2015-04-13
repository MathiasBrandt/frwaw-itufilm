<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'itufilm');

/** MySQL database username */
define('DB_USER', 'itufilm');

/** MySQL database password */
define('DB_PASSWORD', 'itufilm');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '_.&Ixr_zHPj]+*%&(jbqM:l)b?,,+cgra4PWs4XsFWcUqlhS`_=a!B$)F%|bD+cp');
define('SECURE_AUTH_KEY',  'pH6WSb}o%u[xr:xj+et[B|gLfZF&%@-EQe.37B<D;:PH``>dQU,RFC<B/w25DfgB');
define('LOGGED_IN_KEY',    'JE-r@8#P!_2!nfP<||AH<;kp]xCh]_/`MJZ6E0MLQ]mbv61CJ@u3BRu(^k_bK40k');
define('NONCE_KEY',        'FB .-!u@|#V-/qYeU9{jl|9& je$gb|v)QCuCno<_(oMO|L>Lzl,7E-~hz>F if(');
define('AUTH_SALT',        '(WR@pJ8ot7-iihYe%(n<jEXJ#Dm82[/i|NBX&.07Wevph=_amB*MRp5A/Q3EIOl/');
define('SECURE_AUTH_SALT', 'tQoMX*b[k[G-OLJL>0rN${pVLgQjy(^X*ku~G?TgPLHev`;5Y?U[85.g-mNvyTHt');
define('LOGGED_IN_SALT',   'mp+jd<+`W5|#KD39QnSdXNwF/EB>vy@?wm)6Ql~q>jIxOJy?kmA|&J=d]>+o<M.V');
define('NONCE_SALT',       '6Mdvg$)j8_[e N6siukBB0ThkDU!>foD]*N!!eBB/dh9>9pB6&UQoj|KdW?.;o.b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
