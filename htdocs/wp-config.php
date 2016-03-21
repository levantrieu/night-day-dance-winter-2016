<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'night-day-dance');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         ')G@xX|WtOJrEFN96/peoQi~fLTWk Y=I$:p&b@MtnlbzIL^-}3XwD;+@j_EMtD~K');
define('SECURE_AUTH_KEY',  'Oj^m9WKmZ-Gqs;4Ch3VWz*MQ7fSmc0SLgCRrR8c}>D[](.L1g|S$lQyH2 LQTUe^');
define('LOGGED_IN_KEY',    'r>Rfkgc_hV<lw<ClsSPOzkEiq|#yBP?4GSZB8W96y<jYm}fA;p>J)_G1)uu:Bw[j');
define('NONCE_KEY',        '7==mCY?:,+n8lr[|K>Sl,x6o|+zQu@Q|{}yf@y6)Gf|sNI%zVsY2En+pe@Tom5ZO');
define('AUTH_SALT',        'CnGQN|oz+I+>3q`HyCz,~gg>Q||<N|6jHMjeDt+]{;+%dE@ICVdY>J0%M.7*Z5S/');
define('SECURE_AUTH_SALT', 'D]#%L>=,}(VO;Y$;bA8$6Z(smdvwuozmu]]`-n}|}[ETaetBc|r8/daW;R-4TDqL');
define('LOGGED_IN_SALT',   ':E-B*&mgv;Q`r(1,}cdA/L`=Nf)NK]Ap.@G}WVufR/iL?+yVA4Drzatu4Ul-WHyy');
define('NONCE_SALT',       'PN{)3#%?{a ?4{g~|+]iz#f`o[+x2atU)P)hB2B+bOf-ViBeZOxy&Q>RT7p:gflE');


$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
