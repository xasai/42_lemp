<?php

define('DB_NAME', 'wordpress');
define('DB_USER', 'wproot');
define('DB_PASSWORD', 'toor');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         '{;|hvxT_=;|5Ll|VdvtA60<t1{ Zxv:3/F0>L:|% XxuJu3$--uiUvjDcw:Fu Jh');
define('SECURE_AUTH_KEY',  'eH6OY=S5^Q/bN,Ew!H[L<S@nXrlsM+LUW>t)%^{}m2vsdq*!>Ycag18(2{*G) Hw');
define('LOGGED_IN_KEY',    ']N~)v-Tl#~l,!pjZ8+cGz%4a-_l4u6.{+V@W&C@(X[6?!|C01).xtZ}nwUs9W@aH');
define('NONCE_KEY',        'e6A+y>j;1-dZJ?pVgG*<W2t2ov:h i3^cEb;8}e@?LQVJ9%h2B]KBl&-i{g3)Q8+');
define('AUTH_SALT',        'AZ);GrV`^Z||q8or#V)on~p&+^Eo)tJZ]$5m]UTh@>x)$}PJP@=.9<)F&/F}7:eD');
define('SECURE_AUTH_SALT', 'zqj-M j ;JefDao4hE=K1S5nijqhvQr`N. ZQ][+a*3n,aL3`A2{li1C}^-9{Yb<');
define('LOGGED_IN_SALT',   ';qhyC4$5V6h|FghoZznO,7f93V[_abW]IeMgl!,)8A|%U$A=H<>%$e%|A-}(Z`l`');
define('NONCE_SALT',       'jX+>bNy5qD@|[?M)f!.ds^]+Msn76Ch-e^~ 6z*@<sYZu*X=gn[}w`&,Zf3S0:mg');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';

