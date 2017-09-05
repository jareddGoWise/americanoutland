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
define('DB_NAME', 'ameri037_wp5a5b');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'U~q3KQGLX_4Sv2[M{hzFQWG{z|%YR/@my|5B~<XnK>c&@qhWiFW/</(EG-SVo1TA');
define('SECURE_AUTH_KEY',  'jOg/L%|k99LRa;XU{x2g8`ziV}:[P-YE WrnpzFKGL1-@yPUl{]-7*(hIM2&pb!J');
define('LOGGED_IN_KEY',    '_3=(^5L[e*N8~2)V7eB/p*]QP%TQ)m?:BO08J^BPA l%LIQECo{&,0Pt6mNnpZ*a');
define('NONCE_KEY',        'mcqh}-qHz7H)(p(g Sex&8[_KvGl52lI{1ZWg)FxI=pd6:V[J># 4$xxEw@?-Fmw');
define('AUTH_SALT',        '1O-Y]9rv%2.[d4w[pV& q|,w]b^)8@DXX1aD<?qi[=S528nR[fREW:wk374%egn*');
define('SECURE_AUTH_SALT', '{FQqulzJgYCskDlG#J;Q;tci(/m.0aS-h/@W)lme3T,F!Vkw!2<4fhuQwm#,|Q({');
define('LOGGED_IN_SALT',   '/_H=b~a/;K8HtMuN#QU_>kSbm7cU77Gpo5k?o(aLO)-@Bbrx lENYg$vt$D?{VCe');
define('NONCE_SALT',       '5jfQp-u1XS6AL^[r3LMXZs`Yt|+Gfi)NJwlB_K$tL)M00k&,}:^/s~ejaUs)myX&');
define('WP_HOME','http://localhost/americanoutland');
define('WP_SITEURL','http://localhost/americanoutland');

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
